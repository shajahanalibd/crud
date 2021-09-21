<?php 
  include('inc/header.php');

?>

    <section id="add_user" class="add_user">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">

            <h1>Add User Information</h1>

            <form method="POST">
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                <input type="text" autocomplete="off" class="form-control" name="username" id="exampleFormControlInput1" required="required" placeholder="Write your Name">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Father's Name</label>
                <input type="text" required="required" autocomplete="off" class="form-control" name="father_name" id="exampleFormControlInput1" placeholder="Write your Father's Name">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Mother's Name</label>
                <input type="text" required="required" autocomplete="off" class="form-control" name="mother_name" id="exampleFormControlInput1" placeholder="Write your Mother's Name">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Department Name</label>
                <input type="text" required="required" autocomplete="off" class="form-control" name="department" id="exampleFormControlInput1" placeholder="Write your Department Name">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
                <input type="date" required="required" autocomplete="off" class="form-control" name="dob" id="exampleFormControlInput1" placeholder="Select your Date of Birth">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                <input type="phone" required="required" autocomplete="off" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="Write your Phone Number">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Age</label>
                <input type="text" required="required" autocomplete="off" class="form-control" name="age" id="exampleFormControlInput1" placeholder="Write your Age Number">
              </div>
              <br>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>

      <!--  User data insert -->
      <?php 
        if (isset($_POST['submit'])) {
          $username      = $_POST['username'];
          $father_name   = $_POST['father_name'];
          $mother_name   = $_POST['mother_name'];
          $department    = $_POST['department'];
          $dob           = $_POST['dob'];
          $phone         = $_POST['phone'];
          $age           = $_POST['age'];

          $query = "INSERT INTO students (name, fathers_name, mohters_name, department,  dob, phone, age) VALUES('$username', '$father_name', '$mother_name', '$department', '$dob', '$phone', '$age')";

          $result = mysqli_query($db, $query);

          if ($result) {
            header("Location: alluser.php");
          }else{
            echo "Value insert error".mysqli_error($db);
          }

        }

      ?>
          


<?php 
  include('inc/footer.php');
?>
