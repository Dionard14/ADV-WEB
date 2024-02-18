<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="reg_style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration Form</title>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="process.php" method="POST" >
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name:</span>
            <input type="text" placeholder="Enter your firstname" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name:</span>
            <input type="text" placeholder="Enter your lastname" name="lname" required>
          </div>
          <div class="input-box">
            <span class="details">Age:</span>
            <input type="text" placeholder="Enter your age" name="age" required>
          </div>
          <div class="input-box">
            <span class="details">Address:</span>
            <input type="text" placeholder="Enter your address" name="address" required>
          </div>
          <div class="input-box">
            <span class="details">Gender:</span>
            <input type="text" placeholder="Enter your gender" name="gender" required>
          </div>
          <div class="input-box">
            <span class="details">Phone number:</span>
            <input type="tel" placeholder="Enter number here" name="phone" class="no-arrow" required>
          </div>
          <div class="input-box">
            <span class="details">Birthday:</span>
            <input type="date" name="bday" required> 
          </div>
          <div class="input-box">
            <span class="details">Email:</span>
            <input type="text" placeholder="Enter your number" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Username:</span>
            <input type="text" placeholder="Enter your username" name="user" required>
          </div>
          <div class="input-box">
            <span class="details">Password:</span>
            <input type="text" name="pass" id="password" placeholder="Enter your password" required>
        
          </div>
        </div>
       
        <div class="button">
          <input type="submit" name="reg" value="REGISTER">
        </div>
      </form>
    </div>
  </div>

  
</body>
</html>