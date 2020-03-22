<!--Kirjimi i sensioneve -->
<!--Thirrja e sesnionit per kufizimin e perdoruesve nese nuk ka statusin Administrator-->
<!--Orientimi perdoruesit ne faqen dil.php ne menyre qe te behet prishja e sesioneve te thirrura dhe shkycja nga llogaria-->
<?php
session_start();
if(!isset($_SESSION['Statusi']) || $_SESSION['Statusi'] != 'Administrator') {
     header("location: ../dil.php");
     header("location: ../404.php");
}
?>
<!---->
<!DOCTYPE html>
<html>
<head>
  <!--Titulli faqes-->
  <title>Regjistrimi i Drejtorit - ditariElektronik</title>
  <?php require("../pjesët-e-faqës/lidhjet-jashtme.php");?><!--lidhjet e jashtme te CSS, JS etj.-->
  <!---------------------------------------------------------------------------------------------->
  <?php require("../pjesët-e-faqës/dizajni.php");?><!--Dizajni tek pjesa head-->
</head>
<!--------------------------------------------------------------------------------------------------->
<body>
<div class="container">
  <?php require("../pjesët-e-faqës/pjesa-header.php");?> <!--Pjesa header e faqës-->
  <?php require("../pjesët-e-faqës/menya-administratorit.php");?> <!--Menya kryesore e administratorit-->
<!---------------------------------------------------------------------------------------------------->
<!--Forma per regjistrimin e perdoruesit-->
<?php
$conn=mysqli_connect("localhost","root","");  
mysqli_select_db($conn,"projekti_ditarielektronik"); 

if(isset($_POST['regjistro']))
{	 
	 $Emri = $_POST['Emri'];
	 $Mbiemri = $_POST['Mbiemri'];
	 $Datelindja = $_POST['Datelindja'];
	 $Nr_ID = $_POST['Nr_ID'];
	 $Statusi = $_POST['Statusi'];
   $Fjalekalimi = md5($_POST["Fjalekalimi"]);
	 
	 /*sql query for inserting data into database*/
	 mysqli_query($conn,"insert into perdouesit(Emri,Mbiemri,Datelindja,Nr_ID,Statusi,Fjalekalimi) 
	 values ('$Emri','$Mbiemri','$Datelindja','$Nr_ID','$Statusi','$Fjalekalimi')")
	  or die(mysqli_error());
	 echo "<div class='alert alert-success' role='alert'>Të dhënat janë shtuar me sukses.!</div>";
}
?>

<div style="padding: 4%;">
 <div class="card">
  <h6 class="card-header"><b>Regjistrimi i Drejtorit</b></h6>
  <div class="card-body">
   <form action="" method="post">
    <table>
    <tr>
      <td>Emri<input type="text" class="form-control" name="Emri"></td>
      <td>Mbiemri<input type="text" class="form-control" name="Mbiemri"></td>
      <td>Datëlindja<input type="date" class="form-control" name="Datelindja"></td>
      <td>Nr.ID<input type="text" class="form-control" name="Nr_ID"></td>
    </tr>
    <tr>
      <td>Statusi<input type="text" value="Drejtor" class="form-control" name="Statusi"  readonly></td>
      <td>Fjalëkalimi<input type="text" class="form-control" name="Fjalekalimi"></td>
      <td></td>
    </tr>
   </table> 
  </div>
 </div>
  </br><input type="submit" class="btn btn-secondary" value="Regjistro" name="regjistro" style="float:right">   
</form>
</div>
<br>
<!------------------------------------------------------------------------------------------------>
<?php require("../pjesët-e-faqës/pjesa-footer.php");  ?> <!--Pjesa Footer-->
<!-------------------------------------------------------------------------------------------------->
</body>
</html>
