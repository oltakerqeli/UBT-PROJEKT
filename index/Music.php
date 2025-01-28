<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link rel="stylesheet" href="style.css">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet"
  />
  <style>
  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
}
.song {
    width: 200px;
    text-align: center;
}
.song img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    transition: transform 0.3s ease;
}
.song img:hover {
    transform: scale(1.05);
}
.song p {
    margin-top: 10px;
    font-size: 1.1em;
    color: #555;
}
</style>
</head>
<body>

    <main>
        <div class="header-content">
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="Gallery.php">Gallery</a>
            <a href="Music.php">Music</a>
            <a href="Login.php">Log in</a>
            
        </nav>
        </div>
        <h1 style="color:#8e7962;">UNDER THE STAIRS 4th ALBUM</h1>
        <h2 style="color:#8e7962;">Most listened-to songs of the Album</h2>

    <div class="container">
        <div class="song">
            <a href= "https://open.spotify.com/track/6woSozcrwhljUaxWBNWDN5?si=a4a1abd9f563421a">
                <img src="img\FirstSong.png" alt="1st Song">
            </a>
            <p>4rth Album <em>Room Under The Stairs</em></p>

        </div>
        <div class="song">
            <a href="https://open.spotify.com/track/1pemFAKwUCQJlM0H1Pr2H4?si=0b792d21db034c6d">
                <img src="img\SecondSong.png" alt="2nd Song">
                <p>ALIENATED</p>
            </a>
        </div>
        <div class="song">
            <a href="https://open.spotify.com/track/3aH35oNFzGsCazXBkCsX9g?si=f29bc5142a4e495f">
                <img src="img\ThirdSong.png" alt="3rd Song">
                <p>WHAT I AM</p>
            </a>
        </div>
        <div class="song">
            <a href="https://open.spotify.com/track/3P9pRL7V9yM9DhY6NGZjzA?si=5b7045e3aa6b4125">
                <img src="img\FourthSong.png" alt="4rth Song">
                <p>LOVE LIKE THIS</p>
            </a>
        </div>
    </div>
    </main>
    <footer class="footer">
        <div class="footer-content">
          <div class="social-icons">
              <a href="https://www.facebook.com/zayn"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/zayn/"><i class="fab fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UC3PdiRW5dUA4V70ueeR1eHA"><i class="fab fa-youtube"></i></a>
          </div>
          <p> @ 2024 ZAYN OFFICIAL. ALL RIGHTS RESERVED,REPBULIC RECORDS</p>
          <p>
            Design by:Olta Kerqeli & Anile Zuzaku
          </p>
        </div>
        
    
    </footer>
</body>
</html>