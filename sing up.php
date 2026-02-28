<?php
 include("inc/mom.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="./style.css">
    <title>login page</title>
</head>
<body class="bady">

    <header class="lala">
        <h2 class="logo">Kn~<span>Phone</span></h2>
        <img src="" alt="">
        <div class="humberger">
            <i class="fa-solid fa-bars active"></i>
            <i class="fa-solid fa-circle-xmark"></i>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="./index2.php">Home</a></li>
                <li><a href="./index2.php">Devices</a></li>
                <li><a href="./index2.php">Contact</a></li>
                <button class="btn"><a href="./Sign in.php"><span1>sing</span1><span2>~in</span2></a></button>
            </ul>
        </nav>
    </header>
   <section>
    <br>
    <br>
    <form action="" class="form" method="post"> 
        <a href="./Sign in.php"><h2><span1>Sing</span1> <span2>up</span2></h2></a>
       
        <input type="text" name="email" placeholder="entre your email" required>
        <input type="password" name="pass"  placeholder="create your password" required>
    
        <select class="form-select" name="country" id="validationCustom04" required>
         
          <option>algeria</option>
          <option selected disabled value="">Choose your country</option>
          <option>moroco</option>
          <option>tunisia</option>
          <option>france</option>
          <option>usa</option>
        </select>
        
        <button name="submit">sing up</button>

       

        <?php
           $connection = mysqli_connect("localhost", "root", "", "user");

           if (!$connection) {
               die("Connection failed: " . mysqli_connect_error()); 
           }
           
           if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $country = $_POST['country'];
        
            $check_sql = "SELECT * FROM `sign up` WHERE email='$email'";
            $check_result = mysqli_query($connection, $check_sql);
        
            if (mysqli_num_rows($check_result) > 0) {
                echo "<center><p style='color:red;'>the email is exixt </p></center>";
                
            } else {
                $insert_sql = "INSERT INTO `sign up` (email, password, country) VALUES ('$email', '$pass', '$country')";
                if (mysqli_query($connection, $insert_sql)) {
                    echo "<script>alert(' registiration succsufuly'); window.location.replace('index2.php');</script>";
                } else {
                    echo "<center><p style='color:red;'>error in registiration: " . mysqli_error($connection) . "</p></center>";
                }
            }
        }
        
        ?>

    </form>
</body>
</html>