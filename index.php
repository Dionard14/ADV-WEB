<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="index_style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>LOGIN</title>
  
     
   </head>
   
   
<body>
  <div class="container">
    <div class="title">WELCOME USER</div>
    <div class="content">

      <form action="process.php" method="POST" >
        <div class="user-details">
        <div class="input-box">
            <span class="details">Email Address:</span>
            <input type="text" placeholder="Enter your username" name="email" required>
          </div>
        
          <div class="input-box">
            <span class="details">Username:</span>
            <input type="text" placeholder="Enter your username" name="user1" required>
          </div>
          <div class="input-box" style="margin: 0 auto;"  >
            <span class="details">Password:</span>
            <input type="password" name="pass1" id="password" placeholder="*************************" required>
            <i class="bi bi-eye-slash" id="togglePassword"></i>
        </div> 
        </div>  
        
        <div class="button">
          <input type="submit" name="login" value="LOGIN">
        </div>
        <p>Not yet register?  <a href="reg.php"> Register here.</a></p>
      </form>
    </div>
  </div>


  <script>
  const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

     
  
</script>

</body>
</html>