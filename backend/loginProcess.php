<?php
     include '../conn.php';   

     session_start();

     if (isset($_POST['login'])){
          $input_username = $_POST['login_username'];
          $input_password = $_POST['login_password'];

          // cheaking if the inputs aren't null
          if ($input_username != '' || $input_username != ''){
               $sqllogin = "SELECT * FROM user WHERE username = '$input_username'";
               $checklogin = mysqli_query($connection, $sqllogin);
               $loginFetch = mysqli_fetch_array($checklogin);
               
               // cheaking if the username is exixst or not
               if($loginFetch == ''){
                   echo '<script>alert("username not found")</script>';
                   echo "<script>window.location = '../frontend/login.php'</script>";
               } 
               // cheaking if the password is match or not
               else if ($loginFetch['user_password'] != md5($input_password)){
                    echo '<script>alert("Password is wrong")</script>';
                    echo "<script>window.location = '../frontend/login.php'</script>";
               }
               // if the username is exist and the password was right, then login is succeed
               else{
                echo '<script>alert("login Succeed")</script>';
                
                // set the cookie for login
                $_SESSION['session_username'] = $input_username; //server
                $_SESSION['session_password'] = md5($input_password);

                $cookie_name = "cookie_username";
                $cookie_value = $input_username;
                $cookie_time = time() + (60 * 60 * 24 * 10);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");
                
                $cookie_name = "cookie_password";
                $cookie_value = md5($input_password);
                $cookie_time = time() + (60 * 60 * 24 * 10);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");

                echo "<script>window.location = '../frontend/orderpage.php'</script>";
               }
          }
     }

     // taking data from cookie
     if(isset($_COOKIE['cookie_username'])){
          $cookieUsername = $_COOKIE['cookie_username'];
          $cookiePassword = $_COOKIE['cookie_password'];
          $sqlCheckCookie = "SELECT * FROM user WHERE user_username = '$cookieUsername'";
          $checkCookie = mysqli_query($connection, $sqlCheckCookie);
          $CookieFetch = mysqli_fetch_array($checkCookie);
     
          if ($CookieFetch['user_password'] == $cookiePassword){
               $_SESSION['session_username'] = $cookieUsername;
               $_SESSION['session_password'] = $cookiePassword;               
          }    
     }
     
     if(isset($_SESSION['session_username'])){
          echo "<script>window.location = '../dashboard/home_dashboard.php'</script>";
          exit();
     }
     
?>