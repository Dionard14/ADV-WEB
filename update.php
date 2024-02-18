<?php
    include "conn.php";
    $ref_id = $_GET['id'];

    $getdata = mysqli_query($conn, "SELECT * FROM user WHERE id='$ref_id'");

        while($d=mysqli_fetch_object($getdata)){

            $fname = $d -> fname;
            $lname = $d -> lname;
            $age = $d -> age;
            $address = $d -> address;
            $gender = $d -> gender;
            $phone = $d -> phone;
            $bday = $d -> bday;
            $email = $d -> email;
            $user = $d -> user;
            $pass = $d -> pass;
        }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="reg_style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>UPDATE</title>
   </head>
<body>
  <div class="container">
    <div class="title">UPDATE YOUR PROFILE</div>
    <div class="content">
    <form action="process.php?id=<?php echo $ref_id; ?>" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name:</span>
            <input type="text" placeholder="Enter your firstname" name="update_fname" value="<?php echo $fname;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name:</span>
            <input type="text" placeholder="Enter your lastname" name="update_lname" value="<?php echo $lname;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Age:</span>
            <input type="text" placeholder="Enter your age" name="update_age" value="<?php echo $age;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Address:</span>
            <input type="text" placeholder="Enter your address" name="update_address" value="<?php echo $address;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Gender:</span>
            <input type="text" placeholder="Enter your gender" name="update_gender" value="<?php echo $gender;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Phone number:</span>
            <input type="tel" placeholder="Enter number here" name="update_phone" value="<?php echo $phone;?>" class="no-arrow" required>
          </div>
          <div class="input-box">
            <span class="details">Birthday:</span>
            <input type="date" name="update_bday" value="<?php echo $bday;?>" required> 
          </div>
          <div class="input-box">
            <span class="details">Email:</span>
            <input type="text" placeholder="Enter your number" name="update_email" value="<?php echo $email;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Username:</span>
            <input type="text" placeholder="Enter your username" name="update_user" value="<?php echo $user;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Password:</span>
            <input type="text" name="update_pass" value="<?php echo $pass;?>" placeholder="Enter your password" required>
        
          </div>
        </div>
       
        <div class="button">
          <input type="submit" name="update" value="UPDATE">
        </div>
      </form>
    </div>
  </div>

  
</body>
</html>