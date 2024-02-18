<?php
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Records Page </title>
    <link rel="stylesheet" href="records_style.css">
</head>
<body>

<h1>RECORDS</h1>
<div class="container" >

    <table>
        <tr>
            <th> ID </th>
            <th> FIRSTNAME </th>
            <th> LASTNAME </th>
            <th> AGE </th>
            <th> ADDRESS </th>
            <th> GENDER </th>
            <th> PHONE </th>
            <th> BIRTHDAY </th>
            <th> EMAIL </th>
            <th> USERNAME </th>
            <th> PASSWORD </th>
            <th> ACTION 01 </th>
            <th> ACTION 02 </th>
        </tr>

        <tr>

            <?php   
                $getdata = mysqli_query ($conn, "SELECT * FROM user");
                while($row = mysqli_fetch_array($getdata)){

                
            ?>

            <td> <?php echo $row['id']?> </td>
            <td> <?php echo $row['fname']?> </td>
            <td> <?php echo $row['lname']?> </td>
            <td> <?php echo $row['age']?></td>
            <td> <?php echo $row['address']?> </td>
            <td> <?php echo $row['gender']?> </td>
            <td> <?php echo $row['phone']?> </td>
            <td> <?php echo $row['bday']?> </td>
            <td> <?php echo $row['email']?> </td>
            <td> <?php echo $row['user']?> </td>
            <td class="hidetext" ><?php echo $row['pass']?> </td>
            <td> <a href="update.php?id=<?php echo $row['id']; ?>">UPDATE </a></td>
            <td> <a href="delete.php?id=<?php echo $row['id']; ?>">DELETE </a></td>
        </tr>
            
            <?php
            }
            ?>

    </table>


        </div>

<div class="log">
    <form action="home.php">
      <button class="submit-button" type="submit"> GO BACK</button>
    </form>
</div>

</body>
</html>