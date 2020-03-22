<?php
$conn=mysqli_connect("localhost","root","");  
mysqli_select_db($conn,"projekti_ditarielektronik");  

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE perdouesit set Nr_ID='" . $_POST['Nr_ID'] . "', Emri='" . $_POST['Emri'] . "', Mbiemri='" . $_POST['Mbiemri'] . "', Datelindja='" . $_POST['Datelindja'] . "' ,Fjalekalimi='" . $_POST['Fjalekalimi'] . "' ,Statusi='" . $_POST['Statusi'] . "' WHERE Nr_ID='" . $_POST['Nr_ID'] . "'");

$message = "<div class='alert alert-success' role='alert'>
              Ndryshimi i të dhënave është ralizuar me sukses!
            </div>";
}
$result = mysqli_query($conn,"SELECT * FROM perdouesit WHERE Nr_ID='" . $_GET['Nr_ID'] . "'");
$row= mysqli_fetch_array($result);
?>

<?php
session_start();
if(!isset($_SESSION['Statusi']) || $_SESSION['Statusi'] != 'Administrator') {
     header("location: ../dil.php");
     header("location: ../404.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ndryshimi i të dhënave - ditariElektronik</title>
  <?php require("../pjesët-e-faqës/lidhjet-jashtme.php");?>
  <?php require("../pjesët-e-faqës/dizajni.php");?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<div class="container">
  <?php require("../pjesët-e-faqës/pjesa-header.php");?> 
  <?php require("../pjesët-e-faqës/menya-administratorit.php");?>
<!--------------------------------------------------------------------------------------------------->
<div style="padding-left: 6%; padding-right: 6%; padding-bottom: 2.5%; padding-top: 2.5%; ">
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="të-dhënat-kujdestarit.php"><i class="fas fa-long-arrow-alt-left"></i> kthehu tek faqja paraprake</a>
</div><br>
Numri ID-së: <br>
<input type="hidden" name="Nr_ID"  class="form-control" value="<?php echo $row['Nr_ID']; ?>">
<input type="text" name="Nr_ID"  value="<?php echo $row['Nr_ID']; ?>"  class="form-control">
<br>
Emri :<br>
<input type="text" name="Emri"  class="form-control" value="<?php echo $row['Emri']; ?>">
<br>
Mbiemri:<br>
<input type="text" name="Mbiemri"  class="form-control" value="<?php echo $row['Mbiemri']; ?>">
<br>
Datëlindja:<br>
<input type="data" name="Datelindja"  class="form-control" value="<?php echo $row['Datelindja']; ?>">
<br>
Fjalekalimi:<br>
<input type="text" name="Fjalekalimi"  class="form-control" value="<?php echo $row['Fjalekalimi']; ?>">
<br>
Statusi:<br>
<input type="text" name="Statusi"  class="form-control" value="<?php echo $row['Statusi']; ?>">
<br>
<input type="submit" class="btn btn-success" name="submit" value="Modifiko">
</form>
</div>
<!---------------------------------------------------------------------------------------------->
<?php require("../pjesët-e-faqës/pjesa-footer.php");  ?> <!--Pjesa Footer-->
<!---------------------------------------------------------------------------------------------->
</body>
</html>