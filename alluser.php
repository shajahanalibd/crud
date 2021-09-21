<?php 
  include('inc/header.php');

?> 

    <section id="view_user" class="user_info">
          <div class="container">
            <h1>All Student Info</h1>
            <table class="table table-dark table-striped">
              <thead>
                <tr>
                  <th scope="col">SL NO</th>
                  <th scope="col">Name</th>
                  <th scope="col">Father Name</th>
                  <th scope="col">Mother Name</th>
                  <th scope="col">Department</th>
                  <th scope="col">Date of Birth</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Age</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

               <!--  User information Read from Database -->
               <?php 

               $query = "SELECT * FROM students";
               $user = mysqli_query($db, $query);
               $i = 0;

               while ($row = mysqli_fetch_assoc($user) ) {
                 
                $user_id       = $row['id'];
                $name          = $row['name'];
                $fathers_name  = $row['fathers_name'];
                $mohters_name  = $row['mohters_name'];
                $department    = $row['department'];
                $dob           = $row['dob'];
                $phone         = $row['phone'];
                $age           = $row['age'];
                $i++;
                ?>


                <tr>
                  <th scope="row"><?php echo $i; ?></th>
                  <td><?php echo $name;?></td>
                  <td><?php echo $fathers_name;?></td>
                  <td><?php echo $mohters_name;?></td>
                  <td><?php echo $department ;?></td>
                  <td><?php echo $dob;?></td>
                  <td><?php echo $phone;?></td>
                  <td><?php echo $age;?></td>
                  <td>                 
                    <a href="edit.php?edit_id=<?php echo $user_id ?>" class="btn btn-primary">Edit</a>
                    <a href="delete.php?del_id<?php echo $user_id ?>" data-bs-toggle="modal" data-bs-target="#deleteUser" class="btn btn-danger">Delete</a>
                  </td>
                </tr> 

                  <!-- Modal -->
                    <div class="modal fade" id="deleteUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Are you Sure delete this USER?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>

                          <div class="modal-body text-center">
                            

                            <!-- <button type="button" class="btn btn-danger">YES</button> -->
                              <a href="delete.php?del_id=<?php echo $user_id ?>" class="btn btn-danger">YES</a>
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">NO</button>

                            
                          </div>

                        </div>
                      </div>
                    </div>


               <?php }


               ?>

                              
              </tbody>
            </table>
          </div>
    </section>


<?php 
  include('inc/footer.php');
?>