<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechnungserstellung und Verwaltung e-Rechnungen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        h1 {
            text-align: center;
            margin-top: 30px;
            font-size: 28px;
            color: #333;
        }
        .description {
            text-align: center;
            margin: 10px auto 40px;
            color: #666;
            font-size: 16px;
            max-width: 600px;
        }
        .button-container {
            display: grid;
            grid-template-columns: repeat(2, minmax(250px, 1fr));
            gap: 30px;
            padding: 20px;
            justify-content: center;
            max-width: 1000px;
            margin: 0 auto;
        }
        .button {
            display: block;
            text-decoration: none;
            padding: 15px;
            font-size: 18px;
            color: white;
            background-color: #4CAF50;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, background-color 0.2s;
        }
        .button:hover {
            background-color: #45a049;
            transform: translateY(-3px);
        }
        .button-description {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Rechnungserstellung und Verwaltung e-Rechnungen</h1>
    <p class="description">Willkommen! Wählen Sie einen der Bereiche aus, um fortzufahren.</p>

    <div class="button-container">
        <div>
            <a href="rechnung.php" class="button">Rechnung erstellen</a>
            <p class="button-description">Erstellen Sie neue Rechnungen mit unserem benutzerfreundlichen Formular.</p>
        </div>
        <div>
            <a href="dashboard.php" class="button">Rechnungsliste</a>
            <p class="button-description">Sehen Sie alle erstellten Ausgangsrechnungen an und verwalten Sie diese.</p>
        </div>
        <div>
            <a href="upload.php" class="button">Rechnung hochladen</a>
            <p class="button-description">Laden Sie eingehende Rechnungen im JSON- oder XML-Format hoch.</p>
        </div>
        <div>
            <a href="uploads.php" class="button">Hochgeladene Rechnungen</a>
            <p class="button-description">Anzeigen und Verwalten aller hochgeladenen Eingangsrechnungen.</p>
        </div>
    </div>
</body>
</html>
