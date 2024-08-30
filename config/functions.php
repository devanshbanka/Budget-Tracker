<?php 

  require_once 'db2.php';

  function dispaly_data(){
    global $con;
    //$date = readline('Enter date:');
    //$date = rtrim(fgets(STDIN));
    //$date=mysqli_real_escape_string($db, $_POST['date']);
    $query = "select * from db2table where name='$date' ";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>