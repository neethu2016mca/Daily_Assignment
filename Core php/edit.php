<?php
include 'dbconnect.php';
$edit=$_GET["id"];
echo $edit;
$result1=mysqli_query($con,"select * from iaddcustomer where id='$edit'");
$row= mysqli_fetch_array($result1);
?>
<?php
if(isset($_POST["submit"]))
{
    $name=$_POST['name'];  
   $address=$_POST['address']; 
   $phone=$_POST['phone']; 

    $q=mysqli_query($con,"update iaddcustomer set name='$name',address='$address',phone='$phone' where id='$edit' ");
     header("Location:viewcustomer.php");
}

?>
<html>
    <head>
        
    </head>
    <body>
        <form action="#" method="POST">
            <table>
                <tr>
			<td > NAME</td>
                        <td><input type="text"  name="name" value="<?php echo $row["1"];?>" ></td>
		</tr>
                <tr>
			<td>ADDRESS</td>
                        <td><input type="text"  name="address" value="<?php echo $row["2"];?>"></td>
		</tr>
                <tr>
			<td>PHONE</td>
                        <td><input type="text"  name="phone" value="<?php echo $row["3"];?>" ></td>
		</tr>
                
                <tr>
                    <td></td>
			<td colspan=2>
		 <input type="submit" name="submit"  id="submit" value="submit" class="btnRegister"></td>
		</tr>
            </table>
        </form>
    </body>
</html>