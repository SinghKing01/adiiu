<?php

$con = mysqli_connect("localhost", "root", "", "adiiu");

if(!$con){
    echo "Connection Failed" . mysqli_connect();
}

//print_r($con);

//$population = $con->query("SELECT * FROM Population");
//print_r($population);
//The followind while will convert the object data into array
?>

<?php /*
while ($data = $population->fetch_assoc()): 
?> 

<?php //print_r($data) ?>

<tr>
    <td><?php echo $data['id'] ?></td>
    <td><?php echo $data['country'] ?></td> 
    <td><?php echo $data['population'] ?></td> 
</tr>

<?php endwhile
*/?>