<?php
    include "conn.php";
    
   

   $e=$_SESSION['user'];   

    $getname = mysqli_query($conn, "SELECT * FROM user WHERE user='$e'");
    while($row=mysqli_fetch_object($getname)){

        $fname= $row -> fname;
        $lname= $row -> lname;
        
        
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="home_style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $fname ."  ". $lname;?></title>
</head>
<body>
  <div class="container">
  <div class="nav">

<a href="reg.php"> EDIT DATA </a> &nbsp;  &nbsp;
<a href="records.php"> VIEW DATA </a> &nbsp;  &nbsp;

</div>

    <img src="img/4.png" alt="Your Name">
    <?php

    $getpost = mysqli_query($conn, "SELECT * FROM user WHERE fname='$fname' AND lname='$lname'");
    while($row1=mysqli_fetch_array($getpost)){
        
        ?>
<br>
<h1> WELCOME USER: <br> 
  <?php echo $row1['fname'];?>  <?php echo $row1['lname'];?></h1>   
<?php
    }

?>
    <form action="index.php">
      <button class="submit-button" type="submit">LOGOUT</button>
    </form>
  </div>
</body>
</html>
