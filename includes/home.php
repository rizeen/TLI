<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center mb-3" >Rizeen TLI System Operations</h1>
      <a href="create.php" class='btn btn-primary mb-3'> <i class="bi bi-person-plus"></i> Add a Premium Service</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Name</th>
              <th  scope="col">Recommended Price</th>
              <th  scope="col">Details</th>
              <th  scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM premium_service";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            if (!empty($view_users)) {
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $name = $row['name'];        
              $recommended_price = $row['recommended_price'];        
              $details = $row['details'];
      
              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$name}</td>";
              echo " <td > {$recommended_price}</td>";
              echo " <td > {$details}</td>";

              echo " <td class='text-center'> <a href='view.php?service_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&service_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger delete_record'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }
                }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning my-5"> <b> <- Back </b> </a>
<div>

<!-- Footer -->
<?php include "../footer.php" ?>