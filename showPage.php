<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $lname = $_POST['pass'];
    $user = $_POST['username'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $pnumber = $_POST['phone'];

	$array_info = array($fname,$lname,$pass,$user,$age,$address,$pnumber );


}
 ?>
 <h1 style="text-align: center;"> Your Form Info Looks like this: </h1>
<?php

 for ($i=0; $i < count($array_info) ; $i++) { ?>


		<li style="font-size: 30px; text-align: center; "><?php echo $array_info[$i]; ?> </li>

	<?php } ?>