<?php
    include "conn.php";

    $ref_id = $_GET['id'];
    

    $delete = mysqli_query($conn, "DELETE FROM user WHERE id='$ref_id'");

    if($delete == true){
        ?>

        <script>
            alert("1 DATA IS DELETED!");
            window.location.href="records.php";
        
        
        </script>
        <?php
                }else {
                    ?>
                    <script>
                        alert("NO DATA IS DELETED!");
                        window.location.href="records.php";
                    
                    </script>
                    <?php
        
                } 


?>