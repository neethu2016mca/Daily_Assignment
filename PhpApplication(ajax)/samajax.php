<?php
include 'dbconnect.php';
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $res=mysqli_query($con,"insert into user(`username`,`address`,`phone`,`d_id`,`status`)values('$username','$address','$phone','$district',1)");
}
?>
<html>
    <head></head>
    <body>
        <h1>AJAX Program </h1>
        <a href="country.php">Add country</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="state.php">Add state</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="district.php">Add district</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="samajax.php">Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <center> 
        <h2>Registration</h2>
  
        <form action="#" method="POST">
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Name"/>
            </div>
            <div>
                <label>Address</label>
                <input type="text" name="address" placeholder="Enter Address"/>
            </div>
            <div>
                <label>Phone</label>
                <input type="text" name="phone" placeholder="Enter Phone"/>
            </div>
              <div>
	     <label><b>Country:</b></label>
	<div>
                                                                           
                 <select  name="country" id="country"/>
                  <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT c_id,cname FROM country where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['c_id'] . '>' . $row['cname'] . '</option>';
            }
            ?>
              </select>
									</div>
								</div>
                                                            <div>
									<label><b>State:</b></label>
									<div>
                                                                           
                                                                            <select name="sname" id="sname" /><option value="-1">select</option></select>
									</div>
								</div><div>
									<label><b>District:</b></label>
									<div>
                                                                           
									<select  name="dname" id="dname"/>
                        <option value="-1">select</option></select>
                                                                        </div>
                                                                </div>
            <div>
                <input type="submit" name="submit" value="ADD"/>
            </div>
            
        </form></center>
        
            <script src="assets/js/jquery-3.3.1.min.js"></script>
 
    <script>
			$(document).ready(function() {

                            $("#country").on("change", function(){
                                 $country = $('#country').val();

                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$country},
                                     url:'getstate.php',
                                     success:function(data){
                                         $data = JSON.parse(data);                                         
                                         $html = '<option value="">--SELECT STATE--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#state").html($html);
                                     }
                                 });
                            });
                            
                            
                            $("#state").on("change", function(){
                                 $state = $('#state').val();
                                 //alert($taluk);
                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$state},
                                     url:'getdistrict.php',
                                     success:function(data){
                                         $data = JSON.parse(data);
                                         
                                         
                                         $html = '<option value="">--SELECT DISTRICT--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#district").html($html);
                                     }
                                 });
                            });
                            
			});
                              
                        
                        
		</script>
    </body>
</html>

