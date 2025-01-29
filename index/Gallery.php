<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet"
  />
  <style>
  .gallery {
    padding: 2rem;
    text-align: center;
    background: #cfcabf;
    margin: 1rem auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.gallery h2 {
    margin-bottom: 1.5rem;
    color: #222;
}

.image-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
}

.image-item img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 8px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.image-item img:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
            <a href="Register.php">Register</a>
            
        </nav>
        </div>
        
        
<h1 style="color:#8e7962;">CONCERTS MOMENTS</h1>
<section class="gallery">
    <h2 style="color:#8e7962;">OUR FAVORITE MOMENTS</h2>
    <div class="image-grid">
        <div class="image-item"><img src="img\firstPhoto.jpg" alt="ZAYN"></div>
        <div class="image-item"><img src="img\SecondPhoto.png" alt="Image 2"></div>
        <div class="image-item"><img src="img\ThirdPhoto.png" alt="Image 3"></div>
        <div class="image-item"><img src="img\FourthPhoto.png" alt="Image 4"></div>
        <div class="image-item"><img src="img\FifthPhoto.png" alt="Image 5"></div>
        <div class="image-item"><img src="img\SixthPhoto.png" alt="Image 6"></div>
        <div class="image-item"><img src="img\SeventhPhoto.png" alt="Image 7"></div>
        <div class="image-item"><img src="img\EighthPhoto.png" alt="Image 8"></div>
        <div class="image-item"><img src="img\NinthPhoto.png" alt="Image 9"></div>
        <div class="image-item"><img src="img\TenthPhoto.png" alt="Image 10"></div>
    </div>
    <a href="quiz.php" style="display: inline-block; margin-top: 2rem; background: #8e7962; color: white; padding: 1rem 2rem; text-decoration: none; border-radius: 5px;">
        Take the Quiz!
    </a>
</section>

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