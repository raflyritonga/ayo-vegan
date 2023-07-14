<?php

  include '../conn.php';

  session_start();
    
  if(isset($_SESSION ['session_username'])){
    $username = $_SESSION ['session_username'];
    $sqlCheck = "SELECT * FROM user WHERE username = '$username'";
    $checklogin = mysqli_query($connection, $sqlCheck);
    if(mysqli_num_rows($checklogin) > 0){
      $row = mysqli_fetch_assoc($checklogin);
    }
  }

  if (isset($_POST['plan-1'])){
    $package = 'Daily';
  } else if (isset($_POST['plan-2'])){
    $package = 'Weekly';
  } else if (isset($_POST['plan-3'])){
    $package = 'Monthly';
  } 

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/logologo/ayovegan-logo-no-bg.png" />
    <link rel="apple-touch-icon" href="img/logologo/ayovegan-logo-no-bg.png" />
    <title>AyoVegan &mdash; Confirmation</title>
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

      <button class="btn-mobile-nav">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
      </button>
    </header>

    <section class="section-cta" id="cta">
      <div class="container">
        <div class="cta">
          <div class="cta-text-box">
            <h2 class="heading-secondary">Ordering Form</h2>
              <p class="cta-text">
                By confirming your order, we will put your order on our notes 
                and please reconfirm us via WhatsApp to know your delivery fee
              </p>

            <form class="cta-form" name="sign-up" action="../backend/orderPrcocess.php" method="post" netlify>
              <div>
                <label for="full-name">Full Name</label>
                <input
                  id = "full-name"
                  type = "text"
                  name = "confirm_fullName"
                  value = <?php echo $row['full_name'];?>
                  required
                />
              </div>

              <div>
                <label for="user-name">Username</label>
                <input
                  id="user-name"
                  type="text"
                  name="confirm_username"
                  value=<?php echo $row['username']?>
                  readonly
                  required
                />
              </div>

              <div>
                <label for="adress">Adress</label>
                <input
                  id="adress"
                  type="text"
                  name="confirm_adress"
                  placeholder= "Enter your adress"
                  required
                />
              </div>

              <div>
                <label for="package">Package</label>
                <input 
                id="package" 
                type="text" 
                name="confirm_package" 
                value= <?php echo $package?>
                required 
                readonly/>
              </div>

              <div>
                <label for="full-name">Phone Number</label>
                <input
                  id="phone-number"
                  type="text"
                  name="confirm_phoneNumber"
                  value= <?php echo $row['phone']?>
                  required
                />
              </div>

              <div>
                <label for="email">Order Date</label>
                <input
                  id="order-date"
                  type="date"
                  name="confirm_orderDate"
                  value= <?php
                    $currentdate = date("Y-m-d");
                    echo $currentdate;
                  ?>
                  readonly
                  required
                />
              </div>
              <button class="btn btn--form" name="confirm">Confirm</button>
            </form>
          </div>
          <div
            class="cta-img-box"
            role="img"
            aria-label="Woman enjoying food"
          ></div>
        </div>
      </div>
    </section>
  </body>
</html>
