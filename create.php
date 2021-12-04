<?php 
include 'inc/header.php';
include 'config.php';
include 'database.php';
?>

<?php
$db = new Database();

if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $skill = $_POST['skill'];
    if ($name == '' || $email == '' || $skill == '') {
        $error = "Field Must Not be empty";
    }else{
     $query = "Insert INTO tbl_user (name, email, skill) VALUES('$name', '$email', '$skill')";
     $create = $db->insert($query);
     
    }
}
?>
    
<?php
 if (isset($error)) {
     echo $error;
 }
?>
<form action="create.php" method="POST">
<table>
  <tr>
    <td>Name</td>
    <td><input type="text" name="name" placeholder="Please Enter your name"></td>
  </tr>
  <tr>
     <td>Email</td>
     <td><input type="text" name="email" placeholder="Please Enter your email"></td>
  </tr>
  <tr>
     <td>Skill</td>
     <td><input type="text" name="skill" placeholder="Please Enter your skill"></td>
  </tr>
 
  <tr>
   <td></td>
   <td>
       <input type="submit" name="submit" value="Submit">
       <input type="reset" value="cancel">
   </td>
  </tr>
 
 

  <a href="create.php"></a>
  
  </table>
</form>

<a href="index.php">Go Back</a>


<?php include 'inc/footer.php' ?>

