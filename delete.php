<?php 
  include('inc/header.php');

?>
<!-- Delete Data Operation -->

<?php 
  if (isset($_GET['del_id'])) {
    $del_id = $_GET['del_id'];

    $sql = "DELETE FROM students WHERE id='$del_id' ";
    $result = mysqli_query($db, $sql);

    if ($result) {
      header("Location: alluser.php");
    }else{
      die("mysqli_error($db)");
    }
  }
?>














<?php 
  include('inc/footer.php');
?>

