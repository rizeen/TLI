<!-- Header -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable id
   if(isset($_GET['service_id']))
    {
      $id = $_GET['service_id']; 
    }
      // SQL query to select all the data from the table where id = $id
      $query="SELECT * FROM premium_service WHERE id = $id ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];                
          $name = $row['name'];        
          $recommended_price = $row['recommended_price'];        
          $details = $row['details'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $name = $_POST['name'];
      $recommended_price = $_POST['recommended_price'];
      $details = $_POST['details'];
          
      // SQL query to update the data in user table where the id = $id 
      $query = "UPDATE premium_service SET name = '{$name}' , recommended_price = '{$recommended_price}' , details = '{$details}' WHERE id = $id";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<!-- BACK button to go to the home page -->
<div class="container">
  <a href="home.php" class="btn btn-warning mt-1"> <b> <- Back </b> </a>
<div>

<h1 class="text-center">Update Record</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name"  class="form-control" value="<?php echo $name  ?>" required>
      </div>

      <div class="form-group">
        <label for="recommended_price" class="form-label">Recommended Price</label>
        <input type="number" step="0.01" name="recommended_price"  class="form-control" value="<?php echo $recommended_price  ?>" required>
      </div>

      <div class="form-group">
        <label for="details" class="form-label">Details</label>
        <input type="text" name="details"  class="form-control" value="<?php echo $details  ?>" required>
      </div>

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

  <!-- Footer -->
<?php include "../footer.php" ?>