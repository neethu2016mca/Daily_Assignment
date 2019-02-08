
<?php
include 'dbconnect.php';
?>
<html>
    <head>
    <body>
        <form action="#" method="POST">
            <table>
                <tr>
			<td > NAME</td>
                        <td><input type="text"  name="name" ></td>
		</tr>
                <tr>
			<td>ADDRESS</td>
                        <td><input type="text"  name="address" ></td>
		</tr>
                <tr>
			<td>PHONE</td>
                        <td><input type="text"  name="phone" ></td>
		</tr>
                
                <tr>
                    <td></td>
			<td colspan=2>
		 <input type="submit" name="submit"  id="submit" value="submit" class="btnRegister"></td>
		</tr>
            </table>
        </form>
        
    </body>
</head>
</html>
<?php
if (isset($_POST['submit'])) {
   $name=$_POST['name'];  
   $address=$_POST['address']; 
   $phone=$_POST['phone']; 
   echo $name;
   echo "<br>";
   echo $address;
   echo "<br>";
   echo $phone;

$sql1 = "INSERT INTO `iaddcustomer`(`name`, `address`, `phone`) VALUES ('$name','$address','$phone')";
    $result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
}
?>


