<!-- Header -->
<?php  include '../header.php'?>

  <h1 class="text-center">Records</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col">ID</th>
          <th  scope="col">Name</th>
          <th  scope="col">Recommended Price</th>
          <th  scope="col">Details</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              // check using 'isset()' function if the variable is set or not
              //Processing form data when form is submitted
              if (isset($_GET['service_id'])) {
                  $id = $_GET['service_id']; 

                  // SQL query to fetch the data where id=$id & storing data in view_user 
                  $query="SELECT * FROM premium_service WHERE id = {$id} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users)){
                    $id = $row['id'];                
                    $name = $row['name'];        
                    $recommended_price = $row['recommended_price'];        
                    $details = $row['details'];
                
                    echo " <td > {$id}</td>";
                    echo " <td > {$name}</td>";
                    echo " <td > {$recommended_price}</td>";
                    echo " <td > {$details}</td>";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   <!-- BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> <b> <- Back </b> </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>
