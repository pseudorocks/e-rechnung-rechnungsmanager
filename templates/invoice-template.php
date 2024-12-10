<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.2;
        }
        .header {
            margin-bottom: 20px;
            font-size: 1.1em; /* Größere Schrift für Rechnungssteller */
        }
        .header .sender {
            text-align: left;
            font-weight: bold;
        }
        .line {
            border-bottom: 2px solid #000;
            margin: 10px 0 20px 0;
        }
        .receiver {
            text-align: left;
            font-size: 1.1em; /* Größere Schrift für Kundeninformationen */
            margin-bottom: 20px;
        }
        .details {
            margin-bottom: 30px; /* Mehr Abstand zu nächsten Abschnitt */
        }
        .details table {
            width: 100%;
            border-collapse: collapse;
        }
        .details td {
            padding: 5px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px; /* Mehr Abstand zwischen Tabelle und Gesamtbetrag */
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .total {
            font-weight: bold;
            text-align: right;
            font-size: 1.2em; /* Größerer Gesamtbetrag */
            padding-top: 10px;
        }
        .footer {
            margin-top: 30px; /* Mehr Abstand zur Bankverbindung */
        }
        .footer .line {
            border-top: 2px solid #000;
            margin: 20px 0;
        }
        .footer .bank {
            font-size: 1em;
            line-height: 1.2;
        }
    </style>
</head>
<body>
    <!-- Rechnungssteller -->
    <div class="header">
        <div class="sender">{issuer_name}, {issuer_address}, {issuer_city}</div>
        <div class="line"></div>
    </div>

    <!-- Kunde -->
    <div class="receiver">
        <p>{customer_name}<br>
        {customer_address}<br>
        {customer_city}</p>
    </div>

    <!-- Rechnungsdetails -->
    <div class="details">
        <table>
            <tr>
                <td>Kundennummer:</td>
                <td>{customer_number}</td>
                <td>Rechnungsnummer:</td>
                <td>{invoice_number}</td>
            </tr>
            <tr>
                <td>Rechnungsdatum:</td>
                <td>{invoice_date}</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>

    <!-- Begrüßung -->
    <div class="greeting">
        <p>Sehr geehrte Damen und Herren,</p>
        <p>vielen Dank für Ihren Auftrag und das damit verbundene Vertrauen!<br>
        Hiermit stelle ich Ihnen die folgende Leistung in Rechnung:</p>
    </div>

    <!-- Tabelle der Artikel -->
    <table class="table">
        <thead>
            <tr>
                <th>Position</th>
                <th>Anzahl</th>
                <th>Beschreibung</th>
                <th>Betrag (€)</th>
            </tr>
        </thead>
        <tbody>
            {items}
        </tbody>
    </table>

    <!-- Gesamtbetrag -->
    <div class="total">
        <p>Gesamtbetrag: {total} €</p>
    </div>

    <p>Im ausgewiesenen Rechnungsbetrag ist gemäß § 19 UStG keine Umsatzsteuer enthalten.</p>
    <p>Bitte überweisen Sie den Betrag innerhalb von 14 Tagen auf die unten stehende Bankverbindung.</p>
    <p>Mit freundlichen Grüßen<br>
    {issuer_name}</p>

    <!-- Bankverbindung -->
    <div class="footer">
        <div class="line"></div>
        <div class="bank">
            <p>Bank: {bank_name}<br>
            IBAN: {bank_iban}<br>
            BIC: {bank_bic}</p>
        </div>
    </div>
</body>
</html>
