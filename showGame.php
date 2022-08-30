<?php
$k=$_POST['id'];
$l = trim($k);
include ('connection.php');

$sql = "SELECT * FROM `game` WHERE `name_Game`='{$k}'";
$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($res)){
    ?>
    <div  id="imageOf" class="col-md" style="padding:10px;">
    <img class="img-responsive" <?php echo "src='images/".$row['image_Game']."' "?> >
</div>
<?php
}
?>