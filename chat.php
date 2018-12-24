<?php
    include "server.php";
    $sql = "SELECT * FROM usuario ORDER BY id ASC";
    $query =mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query)):
?>
<div id="datos-chat">
    <span style="color:#9e9e9e; margin-right:10px;"><?php echo $row["nombre"];?>:</span>
    <span><?php echo $row["mensaje"];?></span>
    <span style="float:right;"><?php echo resetDate($row["hora"]);?></span>
</div>
<?php endwhile;?>