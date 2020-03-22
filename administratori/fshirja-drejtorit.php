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
  <title>Fshirja - ditariElektronik</title>

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
<!----------------------------------------------------------------------------------------->
<div style="padding-left: 6%; padding-right: 6%; padding-bottom: 2.5%; padding-top: 2.5%; ">

<?php
$conn=mysqli_connect("localhost","root","");  
mysqli_select_db($conn,"projekti_ditarielektronik");

mysqli_query($conn,"DELETE FROM perdouesit WHERE Nr_ID='" . $_GET["Nr_ID"] . "'");
echo "<div class='alert alert-success' role='alert'>Të dhënat fshihen me sukses.!</div>";

?>
</div>
<!--------------------------------------------------------------------------------------------->
<?php require("../pjesët-e-faqës/pjesa-footer.php"); ?>
<!--------------------------------------------------------------------------------------------->
</body>
</html>