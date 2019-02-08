<?php
if (isset($_GET['submit'])) {
   $name=$_GET['name'];  
   $email=$_GET['email']; 
   echo $name;
   echo "<br>";
   echo $email;
}
  ?>