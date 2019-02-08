<?php
include 'dbconnect.php';
?>
<table border="1">
    <tr>
        <td>Name</td>
        <td>Address</td>
        <td>Phone</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php
$result1= mysqli_query($con,"select * from iaddcustomer");
//print_r($result1);
while($row= mysqli_fetch_array($result1))
{
?>
    
        <tr>
            <td><?php echo $row['name'];?></td>
        <td><?php echo $row['address'];?></td>
         <td><?php echo $row['phone'];?></td>
         <td><a href="edit.php?id=<?php echo $row["id"];?>">edit</a></td>

         <td><a href="delete.php?id=<?php echo $row["id"];?>">delete</a></td>
        </tr> 
        <?php
        }
        ?>
        
        
    </table>
