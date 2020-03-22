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
 <div class="row" style="padding: 2%;">
    <div class="col-8">
      <h3 class="titujt">Njoftime</h3>
      <div class="njoftime">
      <!--Njoftimet për Administratorin-->
      </div>
    </div>
    <div class="col-4" id="linqet">
      <h3 class="titujt" style="margin-left: 5%;">Linqet tjera</h3>
      <ul>
        <li><a href="#" class="linqet-tjera"><i class="far fa-file-pdf"></i> Manuali përdorimit</a></li>
        <li><a href="#" class="linqet-tjera"><i class="far fa-file-pdf"></i> Kushtet e përdorimit</a></li>
        <li><a href="#" class="linqet-tjera"><i class="fas fa-exclamation-triangle"></i> Raporto problemet</a></li>
      </ul>
    </div>
  </div>
<!-------------------------------------------------------------------------------------------------->
<?php require("../pjesët-e-faqës/pjesa-footer.php");  ?> <!--Pjesa Footer-->
<!-------------------------------------------------------------------------------------------------->
</body>
</html>