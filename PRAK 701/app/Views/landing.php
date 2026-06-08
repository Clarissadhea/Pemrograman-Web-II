<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div style="text-align: center; margin-top: 10vh;">
    <h1 style="font-size: 4em; margin-bottom: 5px; color: #9c1c30;">
        <i>The Sweetest<br>Book Collection</i>
    </h1>
    <p style="font-size: 1.2em; color: #d05b74; margin-bottom: 30px;">
        Your bookish happy place <br>with sweet reads and coquette vibes 🎀 
    </p>
    
    <a href="/login" class="btn" style="font-size: 1.2em; padding: 15px 40px;">
        JOIN THE CLUB (LOGIN)
    </a>

    <br><br>
    <img src="https://cdn-icons-png.flaticon.com/512/2097/2097048.png" width="150" alt="Buku Lucu" style="opacity: 0.8;">
</div>
<?= $this->endSection() ?>