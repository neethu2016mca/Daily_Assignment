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
                <td colspan=2>
                <div class="form-group">
                                <label for="country">COUNTRY</label>
                                <div class="form-select">

                                    <select  name="cname" id="cname">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "phpapp");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                            $sql = "Select c_id, cname from country where status=1";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_array($sql)) {
                echo '<option value=' . $row['c_id'] . '>' . $row['cname'] . '</option>';
            }
                                            echo "<option value =><------Select Country------></option>";
                                            while ($row = mysqli_fetch_array($result)) {
                                                $cname = $row['cname'];
                                                $c_id = $row['c_id'];
                                                echo "<option value='$cname'>$cname</option>";
                                            }
                                        }
                                        mysqli_close($con);
                                        ?>
                                    </select>



                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>

                </td>
                </tr>

                
                <tr>
                    <td></td>
                <tr>
                    <td colspan=2>
<div class="form-group">
                                <label for="size">STATE</label>
                                <div class="form-select">
                                    <select  name="sname" id="sname" required/>    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>  
                        <br>
                        <br>
                        <br>
                    </td>
                </tr>
                
			<td colspan=2>
		 <input type="submit" name="submit"  id="submit" value="submit" class="btnRegister"></td>
		</tr>
            </table>
        </form>
        <script>
            $("#country").on("change", function () {
                $("#state").html("");
                $country = $("#country").val();

                // find courselevels
                $.ajax({
                    url: 'data/cdata.php',
                    method: 'POST',
                    data: {'country': $country, "status": "1"},
                    success: function (cdata)
                    {
                        // console.log(data);
                        $("#state").html(cdata);
                    }
                });
            });



        </script>

    </body>
</head>
</html>