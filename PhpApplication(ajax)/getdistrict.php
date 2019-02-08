<?php

include_once 'dbconnect.php';
if (isset($_POST['index'])) {
    $index = $_POST['index'];
    $q = mysqli_query($con, "SELECT d_id,dname FROM district where s_id='" . $index . "' and status=1");
    //var_dump($q);
    
     if($q){
        $data = json_encode(mysqli_fetch_all($q));
        echo $data;
    }else{
        echo 'err';
    }

}
?>



