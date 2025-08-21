<?php
    include("connection.php");

    if(isset($_POST['register'])){
       $username = $_POST['usname'];
       $email = $_POST['mail1'];
       $password = $_POST['pass1']; 

       $sql = "select * from login where Username = '$username'";
       $result = mysqli_query($conn, $sql);
       $count_usname = mysqli_num_rows($result);

       $sql = "select * from login where email = '$email'";
       $result = mysqli_query($conn, $sql);
       $count_mail = mysqli_num_rows($result);



       if($count_usname == 0 & $count_mail == 0){
           //$hash = password_hash($password, PASSWORD_DEFAULT);
           $sql = "INSERT INTO login(Username, email, Password) VALUES('$username', '$email', '$password')";
           $result =  mysqli_query($conn, $sql);

           if($result){
               header("Location: welcome.php");
           }
       }
       else{

           if($count_usname > 0){
               echo '<script>
                  window.location.href = "index.php";
                  alert("Username already exist !");
                  </script>';
           }

           if($count_mail > 0){
               echo '<script>
                 window.location.href = "index.php";
                 alert("Email already exist !");
                 </script>';        
           }
       }
    }
       
?>       