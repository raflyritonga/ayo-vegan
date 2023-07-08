<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/logologo/ayovegan-logo-no-bg.png" />
    <link rel="apple-touch-icon" href="img/logologo/ayovegan-logo-no-bg.png" />
    <title>AyoVegan &mdash; Login</title>
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />
    <style>
      .cta .heading-secondary {
        margin-bottom: 1.2rem;
      }

      .aaaa {
        background-image: url("img/logologo/ayovegan-logo-no-bg.png");
        height: 8rem;
        width: 8rem;
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
      }
      
      @media (max-width: 768px) {
        .aaaa {
          display: none;
        }
      }

    </style>
  </head>
  <body>
    <header class="header">
      <a href="../index.php">
        <div class="aaaa"></div>
      </a>
      <nav class="main-nav">
        <ul class="main-nav-list">
          <li><a class="main-nav-link" href="../index.php#how"><b>How it works</b></a></li>
          <li><a class="main-nav-link" href="../index.php#meals"><b>Meals</b></a></li>
          <li><a class="main-nav-link" href="../index.php#pricing"><b>Pricing</b></a></li>
          <li><a class="main-nav-link nav-cta" href="signup.php#cta"><b>Register</b></a></li>
        </ul>
      </nav>

      <button class="btn-mobile-nav">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
      </button>
    </header>

    <section class="section-cta" id="cta">
      <div class="container">
        <div class="cta">
          <div class="cta-text-box">
            <h2 class="heading-secondary">Get your meal right now!</h2>
            <p class="cta-text">
              Login and start your healthy life with us
            </p>

            <form class="cta-form" name="sign-up" netlify method="post" action="../backend/loginProcess.php">
              <div>
                <label for="full-name">Username</label>
                <input
                  id="username"
                  type="text"
                  placeholder="johnsmith"
                  name="login_username"
                  required
                />
              </div>

              <div>
                <label for="email">Password</label>
                <input
                  id="password"
                  type="password"
                  placeholder="your password"
                  name="login_password"
                  required
                />
              </div>
              <button class="btn btn--form" name="login">Login</button>
            </form>
            <a href="signup.php#cta" class="link" style="margin-top: 3rem; font-size: 1.5rem;">Create Your Account Here &rarr;</a>
          </div>
          <div
            class="cta-img-box"
            role="img"
            aria-label="Woman enjoying food"
          ></div>
        </div>
      </div>
    </section>

    <footer class="footer" style="margin-bottom: 5rem;">
      <div class="container grid grid--footer">
        <div class="logo-col">
          <ul class="social-links">
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-instagram"></ion-icon
              ></a>
            </li>
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-facebook"></ion-icon
              ></a>
            </li>
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-twitter"></ion-icon
              ></a>
            </li>
          </ul>

          <p class="copyright">
            Copyright &copy; <span class="year">2023</span> by AyoVegan, Inc.
            All rights reserved.
          </p>
        </div>

        <div class="address-col">
          <p class="footer-heading">Contact us</p>
          <address class="contacts">
            <p class="address">
              4000 Kristal Kondominium Street Pualam Shah Alam
            </p>
            <p>
              <a class="footer-link" href="mailto:2023199021@student.uitm.edu.my"
                >hello@ayovegan.com</a
              >
            </p>
          </address>
        </div>

        <nav class="nav-col">
          <p class="footer-heading">Account</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="signup.php#cta">Create account</a></li>
            <li><a class="footer-link" href="#">Sign in</a></li>
          </ul>
        </nav>

        <nav class="nav-col">
          <p class="footer-heading">Resources</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="../index.php#meals">Recipe directory </a></li>
          </ul>
        </nav>
      </div>
    </footer>
  </body>
</html>
