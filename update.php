<?php 
include 'inc/header.php';
include 'config.php';
include 'database.php';
?>

<?php
$db = new Database();
$id = $_GET['id'];
$query = "SELECT * FROM tbl_user WHERE id = $id";
$getData = $db->select($query)->fetch_assoc();

if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $skill = $_POST['skill'];
    if ($name == '' || $email == '' || $skill == '') {
        $error = "Field Must Not be empty";
    }else{
     $query = "update tbl_user set name='$name',  email='$email', skill='$skill' where id='$id'";
     $update = $db->update($query);
    }
}
?>
<?php
//  delete data
if (isset($_POST['delete'])) {
    $query = "delete from tbl_user where id='$id'";
    $delData = $db->delete($query);
}
?>
<?php
 if (isset($error)) {
     echo $error;
 }
?>
<form action="update.php?id=<?php echo $id; ?>" method="POST">
<table>
  <tr>
    <td>Name</td>
    <td><input type="text" name="name" value="<?php echo $getData['name'] ?>"></td>
  </tr>
  <tr>
     <td>Email</td>
     <td><input type="text" name="email" value="<?php echo $getData['email'] ?>"></td>
  </tr>
  <tr>
     <td>Skill</td>
     <td><input type="text" name="skill" value="<?php echo $getData['skill'] ?>"></td>
  </tr>
 
  <tr>
   <td></td>
   <td>
       <input type="submit" name="submit" value="Submit">
       <input type="reset" value="cancel">
       <input type="submit" value="delete">
   </td>
  </tr>
 
  <a href="create.php"></a>
  
  </table>
</form>

<a href="index.php">Go Back</a>


<?php include 'inc/footer.php' ?>

