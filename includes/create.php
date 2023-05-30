<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $name = $_POST['name'];
        $recommended_price = $_POST['recommended_price'];
        $details = $_POST['details'];
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO premium_service(name, recommended_price, details) VALUES('{$name}','{$recommended_price}','{$details}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<!-- BACK button to go to the home page -->
<div class="container">
<a href="home.php" class="btn btn-warning mt-1"> <b> <- Back </b> </a>
<div>

<h1 class="text-center">Add New Record </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name"  class="form-control" required>
      </div>

      <div class="form-group">
        <label for="recommended_price" class="form-label">Recommended Price</label>
        <input type="number" step="0.01" name="recommended_price"  class="form-control" required>
      </div>

      <div class="form-group">
        <label for="details" class="form-label">Details</label>
        <input type="text" name="details"  class="form-control" required>
      </div>
    
      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

  <!-- Footer -->
<?php include "../footer.php" ?>