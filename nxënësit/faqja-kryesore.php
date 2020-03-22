<?php
session_start();
if(!isset($_SESSION['Statusi']) || $_SESSION['Statusi'] != 'Nxenes') {
     header("location: ../dil.php");
     header("location: ../404.php");
}
?>
<!---->
<!DOCTYPE html>
<html>
<head>
  <title>Faqja kryesore - ditariElektronik</title>
 <!--Titulli faqes-->
  <title>Faqja kryesore - ditariElektronik</title> 
  <?php require("../pjesët-e-faqës/lidhjet-jashtme.php");?><!--lidhjet e jashtme te CSS, JS etj.-->
  <!---------------------------------------------------------------------------------------------->
  <!--Embedded style lejojnë të përcaktoni stilet për të gjithë dokumentin HTML në një vend.-->
  <!--Shtesë: Kto dizajne vlejne vetem per nje dokument te vecant html-->
 <!-------------------------------------------------------------------------------------------------->
 <?php require("../pjesët-e-faqës/dizajni.php");?><!--Dizajni tek pjesa head-->
</head>
<body>

<div class="container">
  <?php require("../pjesët-e-faqës/pjesa-header.php");?> <!--Pjesa header e faqës-->
  <?php require("../pjesët-e-faqës/menya-nxënësit.php");?> <!--Menya kryesore e kujdestarit-->
<!--------------------------------------------------------------------------------------------------->
 <div class="row" style="padding: 2%;">
    <div class="col-8">
      <h3 class="titujt">Njoftime</h3>
      <div class="njoftime">

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
  <div class="container" style="background: #85929E; color: #F8F9F9;border-top-left-radius: 10px;border-top-right-radius: 10px;">
  <div class="row">
    <div class="col" style="padding:2%; padding-top: 3.8%; text-align: center;">
      <center>
       <h3>ditari<b>Elektronik</b></h3>
         </center>
    </div>
    <div class="col" style="padding:2%; text-align: center;">
      <i class="far fa-envelope-open"></i><br>
      <h5>E-MAIL</h5>
      <a href="mailto:ditari@elektronik.edu" style="text-decoration: none;color: #F8F9F9;">ditari@elektronik.edu</a>
    </div>
    <div class="col" style="padding:2%; text-align: center;">
      <i class="fas fa-phone"></i>
      <h5>Qendra thirrjeve</h5>
      <font>+383 00 000 000</font>
    </div>
    <div class="col" style="padding:2%; text-align: center;">
      <i class="fas fa-map-marker-alt"></i>
      <h5>Ku gjindemi</h5>
      <font>Kosovë</font>
    </div>
  </div>
</div>
</div>
</body>
</html>