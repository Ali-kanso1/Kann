<?php

include ('connection.php');

$k = $_POST['id'];
$k = trim($k);
$sqll = "SELECT `Osom` FROM `aksam` WHERE code='{$k}'";
$result = mysqli_query($conn, $sqll);

while($row = mysqli_fetch_array($result)){
?>

<p> <?php echo $row['Osom']; ?></p>

<?php
}

?>

