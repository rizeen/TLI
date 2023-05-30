<!-- Header -->
<?php  include "../header.php" ?>

<?php 
     if(isset($_GET['delete']))
     {
         $id= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM premium_service WHERE id = {$id}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }           
?>

<!-- Footer -->
<?php include "../footer.php" ?>