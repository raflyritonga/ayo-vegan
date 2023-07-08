<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/logologo/ayovegan-logo-no-bg.png" />
    <link rel="apple-touch-icon" href="img/logologo/ayovegan-logo-no-bg.png" />
    <title>AyoVegan &mdash; Signup</title>
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
          <li><a class="main-nav-link nav-cta" href="login.html"><b>Login</b></a></li>
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
            <h2 class="heading-secondary">Create your account</h2>
              <p class="cta-text">
                Healthy and tasty meals are waiting for you. Start
                eating well today. You can cancel or pause anytime. And the
                first meal is on us!
              </p>

            <form class="cta-form" netlify method="post" action="../backend/signupProcess.php">
              <div>
                <label for="full-name">Full Name</label>
                <input
                  id="full-name"
                  type="text"
                  placeholder="John Smith"
                  name="signup_fullName"
                  required
                />
              </div>

              <div>
                <label for="user-name">Username</label>
                <input
                  id="user-name"
                  type="text"
                  placeholder="johnsmith"
                  name="signup_username"
                  required
                />
              </div>

              <div>
                <label for="full-name">Password</label>
                <input id="password" type="password" name="signup_password" placeholder="your password" required />
              </div>

              <div>
                <label for="full-name">Phone Number</label>
                <input
                  id="phone-number"
                  type="text"
                  placeholder="+60 1165 439 537"
                  name="signup_phoneNumber"
                  required
                />
              </div>

              <div>
                <label for="email">Email address</label>
                <input
                  id="email"
                  type="email"
                  placeholder="me@example.com"
                  name="signup_email"
                  required
                />
              </div>

              <button class="btn btn--form" name="signup">Register</button>
            </form>
            <a href="login.html" class="link" style="margin-top: 3rem; font-size: 1.5rem;">Already have account? Login Here &rarr;</a>
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
            Copyright &copy; <span class="year">2023</span> by Ayovegan, Inc.
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
            <li><a class="footer-link" href="#cta">Create account</a></li>
            <li><a class="footer-link" href="login.html">Sign in</a></li>
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
