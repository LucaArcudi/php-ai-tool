<!DOCTYPE html>
<html>
<head>
    <title>Generatore di Descrizioni Opere d'Arte</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="./JS/script.js"></script>
</head>
<body>
    <h1>Generatore di Descrizioni Opere d'Arte</h1>
    <div class="container">
        <form method="POST" action="ai.php">
            <label for="opera">Inserisci il nome dell'opera</label>
            <input type="text" name="opera" id="opera" required>
            <button type="submit">Genera Descrizione</button>
        </form>
    </div>
    <?php include_once __DIR__.'/partials/result.php' ?>
</body>
</html>

