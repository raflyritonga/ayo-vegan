<?php
     include '../conn.php';

     if (isset($_POST['signup'])){
          $input_fullName = $_POST['signup_fullName'];
          $input_username = $_POST['signup_username'];
          $input_password = $_POST['signup_password'];
          $input_phoneNumber = $_POST['signup_phoneNumber'];
          $input_email = $_POST['signup_email'];

          $sqlCheckUsername = "SELECT username FROM user WHERE username = '$input_username'";
          $checkUsername = mysqli_query($connection,$sqlCheckUsername);
          
          if (mysqli_num_rows($checkUsername) > 0){
               echo '<script>alert("Username already exists")</script>';
                echo "<script>window.location = '../frontend/signup.php'</script>";
          } 
          else{
               $sqlSignUp = "INSERT INTO user (full_name, username, user_password, phone, email) 
                              VALUES ('$input_fullName', '$input_username', md5('$input_password'), '$input_phoneNumber', '$input_email')";
               $adduser = mysqli_query($connection, $sqlSignUp);

               if($adduser){
                echo '<script>alert("Registration Successful")</script>';
                echo "<script>window.location = '../frontend/login.php'</script>";
               }               
          }
     }
     else{
          echo '<script>alert("Registration Failed")</script>';
          echo "<script>window.location = '../frontend/signup.php'</script>";
     }

?>