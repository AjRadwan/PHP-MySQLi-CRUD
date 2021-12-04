<?php 
include 'inc/header.php';
include 'config.php';
include 'database.php';
?>

<?php
$db = new Database();
 
?>
    
<form action="create.php">
<table class='tbltwo'>
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

