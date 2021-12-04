<?php 
include 'inc/header.php';
include 'config.php';
include 'database.php';
?>

<?php
$db = new Database();
$query = "SELECT * FROM tbl_user";
$read = $db->select($query);
?>
    
<table class="tblone">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Skill</th>
        <th>Action</th>
        
    </tr>
<?php if($read){  ?>
<?php while($row = $read->fetch_assoc()) {?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['skill']; ?></td>
        <td><a href="update.php?id=<?php echo urlencode($row['id']); ?>">Edit</a></td>
         
    </tr>
<?php }  ?>
<?php } else { ?>
    <p>Data is not Available!! </p>
<?php  } ?>



</table>


<a href="create.php">Create User</a>


<?php include 'inc/footer.php' ?>





