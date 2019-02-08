<?php
include_once 'dbconnect.php';
if (isset($_POST['index'])) {
   $index = $_POST['index'];
   $sql = "SELECT s_id,sname FROM state where c_id='" . $index . "' and status=1";
    $q = mysqli_query($con, $sql);
//    var_dump($sql);
    
    if($q){
        $data = json_encode(mysqli_fetch_all($q));
        echo $data;
    }
    else{
        echo 'err';
    }

}
?>





