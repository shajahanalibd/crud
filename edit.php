<?php 
  include('inc/header.php');

?>


<?php 
  if (isset($_GET['edit_id'])) {
    $update_id =  $_GET['edit_id'];

    $sql = "SELECT * FROM students WHERE id = '$update_id' ";
    $result = mysqli_query($db, $sql);

     while ($row = mysqli_fetch_assoc($result) ) {
                 
                $user_id       = $row['id'];
                $name          = $row['name'];
                $fathers_name  = $row['fathers_name'];
                $mohters_name  = $row['mohters_name'];
                $department    = $row['department'];
                $dob           = $row['dob'];
                $phone         = $row['phone'];
                $age           = $row['age'];
               ?>

                <section id="add_user" class="add_user">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6 offset-md-3">

                        <h1>Edit User Information</h1>

                        <form method="POST">
                          <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                            <input type="text" autocomplete="off" class="form-control" name="username" id="exampleFormControlInput1" value="<?php echo $name; ?>" required="required" placeholder="Write your Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Father's Name</label>
                            <input type="text" required="required" value="<?php echo $fathers_name; ?> " autocomplete="off" class="form-control" name="father_name" id="exampleFormControlInput1" placeholder="Write your Father's Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Mother's Name</label>
                            <input type="text" value="<?php echo $mohters_name; ?>" required="required" autocomplete="off" class="form-control" name="mother_name" id="exampleFormControlInput1" placeholder="Write your Mother's Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Department Name</label>
                            <input type="text" value="<?php echo $department; ?>" required="required" autocomplete="off" class="form-control" name="department" id="exampleFormControlInput1" placeholder="Write your Department Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
                            <input type="date" value="<?php echo $dob; ?>" required="required" autocomplete="off" class="form-control" name="dob" id="exampleFormControlInput1" placeholder="Select your Date of Birth">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input type="phone" value="<?php echo $phone; ?>" required="required" autocomplete="off" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="Write your Phone Number">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Age</label>
                            <input type="text" value="<?php echo $age; ?>" required="required" autocomplete="off" class="form-control" name="age" id="exampleFormControlInput1" placeholder="Write your Age Number">
                          </div>
                          <br>
                          <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </section>


               <?php 

      }
  }
?>
 
<?php 
  if (isset($_POST['update'])) {
      $username      = $_POST['username'];
      $father_name   = $_POST['father_name'];
      $mother_name   = $_POST['mother_name'];
      $department    = $_POST['department'];
      $dob           = $_POST['dob'];
      $phone         = $_POST['phone'];
      $age           = $_POST['age'];



        $sql = "UPDATE students SET name = '$username', fathers_name = '$father_name', mohters_name = '$mother_name', department = '$department', dob = '$dob', phone = '$phone', age = '$age' WHERE id = '$user_id' ";

        $result = mysqli_query($db, $sql);
        if ($result) {
          header('Location: alluser.php');
        }else{
          echo "Update failed";
        }
  }

 
?>

<?php include('inc/footer.php'); ?>