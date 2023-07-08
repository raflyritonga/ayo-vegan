<?php
     include '../conn.php';

     if (isset($_POST['confirm'])){
          $input_fullName = $_POST['confirm_fullName'];
          $input_username = $_POST['confirm_username'];
          $input_package = $_POST['confirm_package'];
          $input_adress = $_POST['confirm_adress'];
          $input_phoneNumber = $_POST['confirm_phoneNumber'];
          $input_orderDate = $_POST['confirm_orderDate'];

          $sqlAddOrder = "INSERT INTO user_order (full_name, username, package, adress, phone, order_date) 
                         VALUES ('$input_fullName', '$input_username', '$input_package', '$input_package', '$input_phoneNumber', '$input_orderDate')";
          $addOrder = mysqli_query($connection, $sqlAddOrder);

          if($addOrder){
               echo '<script>alert("Ordering Successful")</script>';
               echo "<script>window.location = '../frontend/orderpage.php'</script>";
          }               
     } else{
          echo '<script>alert("Ordering Failed")</script>';
          echo "<script>window.location = '../frontend/orderpage.php'</script>";
     }

?>