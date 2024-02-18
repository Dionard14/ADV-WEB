<?php

    include "conn.php";
    session_start();

//This code is for registration

    if(isset($_POST['reg'])){
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $bday = $_POST['bday'];
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        
        //validation
        $validate = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' OR user = '$user'");

        $val_num = mysqli_num_rows($validate); 

    if ($val_num <= 0){
       
       $insertusers = mysqli_query($conn, "INSERT INTO user VALUE('0', '$fname','$lname','$age','$address','$gender','$phone','$bday','$email','$user','$pass')");
 
        if ($insertusers == true){
        ?>

        <script>
            alert("Your Registration is Succesful!");
            window.location.href="index.php";
        </script>
        <?php

         } else {
        ?>
        <script>
            alert("Error Registration!\nTry Again!");
            window.location.href="reg.php";
        </script>
        <?php
    }
    
    } else {
        ?>
        <script>
            alert("Email or Username is already taken!\nTry Again!");
            window.location.href="reg.php";
        </script>
        <?php
    }
}


//This is code for LOGIN

    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $user1 = $_POST['user1'];
        $pass1 = $_POST['pass1'];
                                                    //table    //column_table   //column_table
        $check = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND user = '$user1' AND pass = '$pass1'");

        $num = mysqli_num_rows($check);

       if ($num >=1 ){ //table
            $_SESSION['user']=$user1;

?>

<script>
    alert("Account Accepted! Welcome User!");
    window.location.href="home.php";


</script>
<?php
        }else {
            ?>
            <script>
                alert("Email or Username or Password nor Found!");
                window.location.href="index.php";
            
            </script>
            <?php

        } 
        
        }

    //Code for update

if(isset($_POST['update'])){

    $ref_id = $_GET['id'];
        
    $fname = $_POST['update_fname'];
    $lname = $_POST['update_lname'];
    $age = $_POST['update_age'];
    $address = $_POST['update_address'];
    $gender = $_POST['update_gender'];
    $phone = $_POST['update_phone'];
    $bday = $_POST['update_bday'];
    $email = $_POST['update_email'];
    $user = $_POST['update_user'];
    $pass = $_POST['update_pass'];

   $update = mysqli_query($conn, "UPDATE user SET fname='$fname', lname='$lname', age='$age', address='$address', gender='$gender', phone='$phone', bday='$bday', email='$email', user='$user', pass='$pass' WHERE id='$ref_id'");

    if ($update == true){
    ?>
<script>
alert("Your UPDATE is Succesful!");
window.location.href="records.php";

</script>
<?php

} else {
    ?>
    <script>
        alert("Error UPDATE\nTry Again!");
        window.location.href="update.php";
    
    </script>
    <?php
}
}


?>
