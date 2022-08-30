
<?php

include ('connection.php');

$t = $_POST['idd'];
$t = trim($t);
$sql = "SELECT `id_item`, `name`, `nameArabic`, `price`, `kosom_code` FROM `items` WHERE kosom_code='{$t}'";
$resull = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($resull)){
?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['nameArabic']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['kosom_code']; ?></td>
    
<?php
}

?>