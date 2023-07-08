<?php
  include '../conn.php';
    session_start();
    
    if(isset($_SESSION ['session_username'])){
      $username = $_SESSION ['session_username'];
      $sqlCheck = "SELECT full_name FROM user WHERE username = '$username'";
      $checklogin = mysqli_query($connection, $sqlCheck);
      if(mysqli_num_rows($checklogin) > 0){
        $row = mysqli_fetch_assoc($checklogin);
        $fullName = $row['full_name'];
      }
    } else{
      header("Location: ../index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Omnifood is an AI-powered food subscription that will make you eat healthy again, 365 days per year. It's tailored to your personal tastes and nutritional needs."
    />

    <!-- Always include this line of code!!! -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="img/logologo/ayovegan-logo-no-bg.png" />
    <link rel="apple-touch-icon" href="img/logologo/ayovegan-logo-no-bg.png" />
    <link rel="manifest" href="manifest.webmanifest" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>

    <script
      defer
      src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"
    ></script>
    <script defer src="js/script.js"></script>
    <style>
      .aaaa {
        background-image: url("img/logologo/ayovegan-logo-no-bg.png");
        height: 8rem;
        width: 8rem;
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
      }

      .all-recipes {
        margin-top: -3em;
        margin-bottom: 40px;
      }

      .containerc {
        max-width: 200rem;
        padding: 0 3.2rem;
        margin: 0 auto;
      }
    </style>

    <title>AyoVegan &mdash; Order Page</title>
  </head>
  <body>
    <header class="header" style="margin-bottom: -6rem;">
      <a href="#">
        <div class="aaaa"></div>
      </a>

      <nav class="main-nav">
        <ul class="main-nav-list">
          <li><a class="main-nav-link" href="#meals">Meals</a></li>
          <li><a class="main-nav-link" href="#pricing">Pricing</a></li>
          <li><a class="main-nav-link nav-logout" href="../backend/logoutProcess.php"><b>Logout</b></a></li>
        </ul>
      </nav>
    </header>

    <section class="section-meals">
      <div class="container center-text">
        <span class="subheading" style="margin-bottom: 6  rem;">Hello, <?php echo $fullName?>! Lets order your cathering</span>
        <h2 class="heading-secondary" id="meals">Our Menus</h2>
      </div>
    
      <div class="all-recipes container grid grid--3-cols margin-bottom-md">
        <div class="meal">
          <img
            height="280px"
            src="img/meals/meal-1.jpg"
            class="meal-img"
            alt="Japanese Gyozas"
          />
          <div class="meal-content">
            <div class="meal-tags">
              <span class="tag tag--vegan">Vegan</span>
            </div>
            <p class="meal-title">Japanese Gyozas</p>
            <ul class="meal-attributes">
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="flame-outline"></ion-icon>
                <span><strong>650</strong> calories</span>
              </li>
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon>
                <span>NutriScore &reg; <strong>74</strong></span>
              </li>
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                <span><strong>4.9</strong> rating (537)</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="meal">
          <img
            height="280px"
            src="img/img-baru/Black Bean.jfif"
            class="meal-img"
            alt="Japanese Gyozas"
          />
          <div class="meal-content">
            <div class="meal-tags">
              <span class="tag tag--vegan">Vegan</span>
            </div>
            <p class="meal-title">Black Bean</p>
            <ul class="meal-attributes">
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="flame-outline"></ion-icon>
                <span><strong>475</strong> calories</span>
              </li>
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon>
                <span>NutriScore &reg; <strong>88</strong></span>
              </li>
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                <span><strong>4.4</strong> rating (280)</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="meal">
          <img src="img/meals/meal-2.jpg" class="meal-img" alt="Avocado Salad" height="280px" />
          <div class="meal-content">
            <div class="meal-tags">
              <span class="tag tag--vegan">Vegan</span>
            </div>
            <p class="meal-title">Avocado Salad</p>
            <ul class="meal-attributes">
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="flame-outline"></ion-icon>
                <span><strong>400</strong> calories</span>
              </li>
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon>
                <span>NutriScore &reg; <strong>92</strong></span>
              </li>
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                <span><strong>4.8</strong> rating (441)</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="meal">
          <img
            src="img/img-baru/Frolict.jfif"
            class="meal-img"
            height="280px"
            alt="Japanese Gyozas"
          />
          <div class="meal-content">
            <div class="meal-tags">
              <span class="tag tag--vegan">Vegan</span>
            </div>
            <p class="meal-title">Frolict</p>
            <ul class="meal-attributes">
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="flame-outline"></ion-icon>
                <span><strong>790</strong> calories</span>
              </li>
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon>
                <span>NutriScore &reg; <strong>80</strong></span>
              </li>
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                <span><strong>4.9</strong> rating (87)</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="meal">
          <img
            height="280px"
            src="img/img-baru/Creamy Broccoli.jfif"
            class="meal-img"
            alt="Japanese Gyozas"
          />
          <div class="meal-content">
            <div class="meal-tags">
              <span class="tag tag--vegan">Vegan</span>
            </div>
            <p class="meal-title">Creamy Broccoli</p>
            <ul class="meal-attributes">
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="flame-outline"></ion-icon>
                <span><strong>550</strong> calories</span>
              </li>
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon>
                <span>NutriScore &reg; <strong>70</strong></span>
              </li>
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                <span><strong>4.2</strong> rating (181)</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="meal">
          <img
            height="280px"
            src="img/img-baru/Pizza-Vegan.jfif"
            class="meal-img"
            alt="Japanese Gyozas"
          />
          <div class="meal-content">
            <div class="meal-tags">
              <span class="tag tag--vegan">Vegan</span>
            </div>
            <p class="meal-title">Pizza-Vegan</p>
            <ul class="meal-attributes">
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="flame-outline"></ion-icon>
                <span><strong>620</strong> calories</span>
              </li>
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon>
                <span>NutriScore &reg; <strong>72</strong></span>
              </li>
              <li class="meal-attribute">
                <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                <span><strong>4.6</strong> rating (93)</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="section-pricing" id="pricing" style="margin-top: -8rem;">
      <div class="container font-c-b">
        <h2 class="heading-secondary">
          Pick your package
        </h2>
      </div>

      <form method="post" action="../frontend/orderform.php">
        <div class="containerc grid grid--3-cols margin-bottom-md">
          <div class="pricing-plan pricing-plan--starter">
            <header class="plan-header">
              <p class="plan-name">Daily</p>
              <p class="plan-price"><span>$</span>18</p>
              <p class="plan-text">
                Healthy meal starts only with $6
              </p>
            </header>
            <ul class="list">
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span><strong>3 meals</strong> per day</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Order <strong>24/7</strong></span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="close-outline"></ion-icon>
                <span>Pick your meals</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="close-outline"></ion-icon>
                <span>Delivery is free</span>
              </li>
            </ul>
            <div class="plan-sing-up">
              <input type="submit" name="plan-1" class="btn btn--full" style="background-color: #567a37; color:white" value="Start eating well">
            </div>
          </div>
        </form>

        <form method="post" action="../frontend/orderform.php">
        <div class="pricing-plan pricing-plan--starter">
          <header class="plan-header">
            <p class="plan-name">Weekly</p>
            <p class="plan-price"><span>$</span>115</p>
            <p class="plan-text">Serving the affortable meal</p>
          </header>
          <ul class="list">
            <li class="list-item">
              <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
              <span><strong>3 meals</strong> per day</span>
            </li>
            <li class="list-item">
              <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
              <span>Order <strong>24/7</strong></span>
            </li>
            <li class="list-item">
              <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
              <span>Pick your meals</span>
            </li>
            <li class="list-item">
              <ion-icon class="list-icon" name="close-outline"></ion-icon>
              <span>Delivery is free</span>
            </li>
          </ul>
          <div class="plan-sing-up">
          <input type="submit" name="plan-2" class="btn btn--full" style="background-color: #567a37; color:white" value="Start eating well">
          </div>
        </div>
        </form>

        <form method="post" action="../frontend/orderform.php">
          <div class="pricing-plan pricing-plan--complete">
            <header class="plan-header">
              <p class="plan-name">Monthly</p>
              <p class="plan-price"><span>$</span>489</p>
              <p class="plan-text">Eating well without confused</p>
            </header>
            <ul class="list">
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span><strong>3 meals</strong> per day</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Order <strong>24/7</strong></span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Pick your meals </span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Delivery is free</span>
              </li>
            </ul>
            <div class="plan-sing-up">
              <input type="submit" name="plan-3" class="btn btn--full" style="background-color: #567a37; color:white" value="Start eating well">
            </div>
          </div>
        </div>
      </form>
    </section>

    <footer class="footer" style="margin-bottom: 5rem;">
      <div class="container grid grid--footer">
        <div class="logo-col">
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
            <li><a class="footer-link" href="#">Create account</a></li>
            <li><a class="footer-link" href="#">Login</a></li>
          </ul>
        </nav>

        <nav class="nav-col">
          <p class="footer-heading">Resources</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">Recipe directory </a></li>
          </ul>
        </nav>
      </div>
    </footer>
  </body>
</html>
