<?php
require 'libs/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// Daten aus dem Formular empfangen
$data = $_POST;

// Rechnungssteller-Daten speichern
$issuerData = [
    'name' => $data['issuer_name'],
    'address' => $data['issuer_address'],
    'city' => $data['issuer_city']
];
file_put_contents('output/issuer.json', json_encode($issuerData));

// Bankverbindung speichern
$bankDetails = [
    'name' => $data['bank_name'],
    'iban' => $data['bank_iban'],
    'bic' => $data['bank_bic']
];
file_put_contents('output/bank.json', json_encode($bankDetails));

// HTML-Vorlage laden
$templatePath = __DIR__ . '/templates/invoice-template.php';
$html = file_get_contents($templatePath);

if (!$html) {
    die('Fehler: Die HTML-Vorlage konnte nicht geladen werden.');
}

// Artikel in Tabelle einfügen
$itemRows = '';
$totalAmount = 0;

foreach ($data['items'] as $index => $item) {
    if (!empty($item['name']) && !empty($item['quantity']) && !empty($item['price'])) {
        $itemTotal = $item['quantity'] * $item['price'];
        $totalAmount += $itemTotal;

        $itemRows .= "
            <tr>
                <td>" . ($index + 1) . "</td>
                <td>{$item['quantity']}</td>
                <td>{$item['name']}</td>
                <td>" . number_format($itemTotal, 2, ',', '.') . " €</td>
            </tr>
        ";
    }
}

if (empty($itemRows)) {
    $itemRows = '<tr><td colspan="4">Keine Artikel hinzugefügt.</td></tr>';
}

// Platzhalter ersetzen
$html = str_replace(
    ['{invoice_number}', '{invoice_date}', '{issuer_name}', '{issuer_address}', '{issuer_city}', '{customer_name}', '{customer_address}', '{customer_city}', '{customer_number}', '{bank_name}', '{bank_iban}', '{bank_bic}', '{items}', '{total}'],
    [
        $data['invoice_number'],
        $data['invoice_date'],
        $data['issuer_name'],
        $data['issuer_address'],
        $data['issuer_city'],
        $data['customer_name'],
        $data['customer_address'],
        $data['customer_city'],
        $data['customer_number'] ?? 'N/A',
        $bankDetails['name'] ?? 'N/A',
        $bankDetails['iban'] ?? 'N/A',
        $bankDetails['bic'] ?? 'N/A',
        $itemRows,
        number_format($totalAmount, 2, ',', '.')
    ],
    $html
);

// Debugging: Generiertes HTML speichern
file_put_contents('output/debug.html', $html);

// PDF erstellen
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$pdfOutput = $dompdf->output();

// PDF speichern
$pdfFilePath = "output/invoices/{$data['invoice_number']}.pdf";
file_put_contents($pdfFilePath, $pdfOutput);

// JSON e-Rechnung erstellen
$eInvoiceData = [
    'invoice_number' => $data['invoice_number'],
    'invoice_date' => $data['invoice_date'], // Rechnungsdatum hinzufügen
    'issuer' => $issuerData,
    'customer' => [
        'name' => $data['customer_name'],
        'address' => $data['customer_address'],
        'city' => $data['customer_city']
    ],
    'items' => $data['items'],
    'total' => $totalAmount,
    'bank_details' => $bankDetails
];
$jsonFilePath = "output/e-invoices/{$data['invoice_number']}.json";
file_put_contents($jsonFilePath, json_encode($eInvoiceData, JSON_PRETTY_PRINT));

// Erfolgsnachricht und Weiterleitung zum Dashboard
header('Location: dashboard.php');
exit;
?>
