<div class="container">
    <h2>Descrizione Generata:</h2>
    <?php session_start() ?>
    <?php if (isset($_SESSION['risposta'])): ?>
        <p class="description">
            <?php echo $_SESSION['risposta'] ?>
        </p>
        <audio id="audioPlayer" controls>
        </audio>
        <button id="playButton">Riproduci Audio</button>

    <?php else: ?>
        <p>
            Inserisci il nome di un'opera
        </p>
    <?php endif ?>
</div>