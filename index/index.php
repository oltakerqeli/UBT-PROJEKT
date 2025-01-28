<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concert Website</title>
    <link rel="stylesheet" href="style.css">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
  rel="stylesheet"
/>
</head>
<body>
    <style>
             .popup {
            display: none; 
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
        }

        .popup-content {
            background:#cfcabf;
            margin: 10% auto;
            padding: 20px;
            border-radius: 5px;
            width: 50%;
            text-align: center;
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            cursor: pointer;
            font-size: 1.5rem;
        }


        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            padding: 8px;
            width: 80%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
 
<header>   

    <div class="header-content">
    
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="Gallery.php">Gallery</a>
            <a href="Music.php">Music</a>
            <a href="Login.php">Log in</a>
            
        </nav>
    </div>
    <div class="content">
        <div class="photo-container">
            <img src="img\ballina.png" alt="Photo of ZAYN">
            <div class="overlay-text">
                <h1>ZAYN</h1>
                <h2>STAIRWAY TO THE SKY</h2>
                <h3>TOUR 2024/25</h3>
            </div>
        </div>
        <div class="countdown">
            <h3>Next Gig: <span id="concert-city">City</span></h3>
            <span id="days">00</span> Days 
            <span id="hours">00</span> Hours 
            <span id="minutes">00</span> Minutes 
            <span id="seconds">00</span> Seconds
            <a href="#buy-tickets" class="btn-buy-tickets">Buy Tickets</a>
        </div>
        <script src="countdown.js"></script>
      </div> 
</header>
<main>
    <h1 style="color:#8e7962; font-weight: bold;">UPCOMING CONCERTS</h1>
    <div class="concert-list">        
        <div class="concert-item">
            <div class="details">
                <h2 class="date">Feb 21, 2025</h2>
                <h1 class="location">WASHINGTON, DC</h1>
                <p class="venue">The Anthem</p>
            </div>
            <div class="buttons">
                <a href="#buy-tickets" class="btn-buy-tickets">Buy Tickets</a>
            </div>
        </div>
        <div class="concert-item">
            <div class="details">
                <h2 class="date">Feb 24, 2025</h2>
                <h1 class="location">NEW YORK, NY</h1>
                <p class="venue">Hammerstein Ballroom</p>
            </div>
            <div class="buttons">
                <a href="#buy-tickets" class="btn-buy-tickets">Buy Tickets</a>
            </div>
        </div>
        <div class="concert-item">
            <div class="details">
                <h2 class="date">Feb 25, 2025</h2>
                <h1 class="location">NEW YORK, NY</h1>
                <p class="venue">Hammerstein Ballroom</p>
            </div>
            <div class="buttons">
                <a href="#buy-tickets" class="btn-buy-tickets">Buy Tickets</a>
            </div>
        </div>
        <div class="concert-item">
            <div class="details">
                <h2 class="date">Feb 28, 2025</h2>
                <h1 class="location">LOS ANGELES, CA</h1>
                <p class="venue">Shrine Expo Hall</p>
            </div>
            <div class="buttons">
                <a href="#buy-tickets" class="btn-buy-tickets">Buy Tickets</a>
            </div>
        </div>
        <div class="concert-item">
            <div class="details">
                <h2 class="date">Feb 29, 2025</h2>
                <h1 class="location">LOS ANGELES, CA</h1>
                <p class="venue">Shrine Expo Hall</p>
            </div>
            <div class="buttons">
              <a href="#buy-tickets" class="btn-buy-tickets">Buy Tickets</a>
            </div>
        </div>
        <div class="concert-item">
            <div class="details">
                <h2 class="date">FEB 1, 2025</h2>
                <h1 class="location">LAS VEGAS, NV</h1>
                <p class="venue">The Chelsea At The Cosmopolitan</p>
            </div>
            <div class="buttons">
                <a href="#buy-tickets" class="btn-buy-tickets">Buy Tickets</a>
            </div>
        </div>
    </div>
</main>
<div id="ticket-popup" class="popup">
    <div class="popup-content">
        <span class="close-btn">&times;</span>
        <h2>Buy Tickets</h2>
        <form id="ticket-form">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="quantity">Number of Tickets:</label>
            <input type="number" id="quantity" name="quantity" min="1" max="10" required>
            <label for="Card Numbers">Card Numbers:</label>
            <input type="Card Numbers" id="Card Numbers" name="Card Numbers" maxlength="19" required>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</div>
<!--
<div id="login-popup" class="popup">
    <div class="popup-content">
        <span class="close-btn">&times;</span>
        <h2>Login</h2>
        <form class="login-form">
            <label for="email">Email:</label>
            <input type="email" id="login-email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="login-password" name="password" required>
            <button type="submit" class="submit-btn">Login</button>
        </form>
    </div>
</div>


<script>


const ticketPopup = document.getElementById('ticket-popup');
const loginPopup = document.getElementById('login-popup'); 
const buyButtons = document.querySelectorAll('.btn-buy-tickets');
const closeButtons = document.querySelectorAll('.close-btn');


function isLoggedIn() {
    return localStorage.getItem('userLoggedIn') === 'true';
}


buyButtons.forEach((button) => {
    button.addEventListener('click', () => {
        if (isLoggedIn()) {
            ticketPopup.style.display = 'block';
        } else {
            loginPopup.style.display = 'block';
        }
    });
});


closeButtons.forEach((button) => {
    button.addEventListener('click', () => {
        ticketPopup.style.display = 'none';
        loginPopup.style.display = 'none';
    });
});


document.querySelector('.login-form').addEventListener('submit', function (e) {
    e.preventDefault();
    localStorage.setItem('userLoggedIn', 'true');
    loginPopup.style.display = 'none';
    ticketPopup.style.display = 'block'; 
});


window.addEventListener('click', (e) => {
    if (e.target === ticketPopup) {
        ticketPopup.style.display = 'none';
    }
    if (e.target === loginPopup) {
        loginPopup.style.display = 'none';
    }
});

</script>
-->
<script>
    const popup = document.getElementById('ticket-popup');
const buyButtons = document.querySelectorAll('.btn-buy-tickets'); 
const closeButton = document.querySelector('.close-btn');


buyButtons.forEach((button) => {
    button.addEventListener('click', () => {
        popup.style.display = 'block'; 
    });
});

closeButton.addEventListener('click', () => {
    popup.style.display = 'none'; 
});


window.addEventListener('click', (e) => {
    if (e.target === popup) {
        popup.style.display = 'none';
    }
});
</script>

</body>
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

</html>