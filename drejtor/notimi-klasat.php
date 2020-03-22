<?php
session_start();
if(!isset($_SESSION['Statusi']) || $_SESSION['Statusi'] != 'Drejtor') {
     header("location: ../dil.php");
     header("location: ../404.php");
}
?>
<!---------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
  <!--Titulli faqes-->
  <title>Faqja kryesore - ditariElektronik</title> 
  <?php require("../pjesët-e-faqës/lidhjet-jashtme.php");?><!--lidhjet e jashtme te CSS, JS etj.-->
  <!---------------------------------------------------------------------------------------------->
  <!--Embedded styles lejojnë të përcaktoni stilet për të gjithë dokumentin HTML në një vend.-->
  <!--Shtesë: Kto dizajne vlejne vetem per nje dokument te vecant html-->
 <!-------------------------------------------------------------------------------------------------->
 <?php require("../pjesët-e-faqës/dizajni.php");?><!--Dizajni tek pjesa head-->
</head>
<!--------------------------------------------------------------------------------------------------->
<body>
<div class="container">
  <?php require("../pjesët-e-faqës/pjesa-header.php");?> <!--Pjesa header e faqës-->
  <?php require("../pjesët-e-faqës/menya-drejtorit.php");?> <!--Menya kryesore e administratorit-->
<!--------------------------------------------------------------------------------------------------->
 <div class="row" style="padding: 4%;">
  <table width="300px">
    <tr>
      <td><h2>Klasat aktuale</h2></td>
    </tr>
    <tr>
      <td>
        <div class="alert alert-primary" role="alert" style="width: 80px;">
         <a href="klasa_IV_1.php">VI - 1</a>
        </div>
      </td>
    </tr>
  </table>
 </div>
<!-------------------------------------------------------------------------------------------------->
<?php require("../pjesët-e-faqës/pjesa-footer.php");  ?> <!--Pjesa Footer-->
<!-------------------------------------------------------------------------------------------------->
</body>
</html>