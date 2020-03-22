<!--Thirrja e sesnionit per kufizimin e perdoruesve nese nuk ka statusin Administrator-->
<!--Orientimi perdoruesit ne faqen dil.php ne menyre qe te behet prishja e sesioneve te thirrura dhe shkycja nga llogaria-->
<!--Po ashtu nese perdoruesi tentone te qaset ne faqet e kujdestarit apo perdoruesve me statuset tjera drejtohet tek faqja 404.php-->
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
 <div class="row" style="padding: 3%;">
 <?php
   $xml=simplexml_load_file("rreth-nesh.xml") or die("Gabim: Nuk mund të krijojë objekt");

   echo "<h3 class='titujt'> $xml->titulli </h3>","<br>";
   echo $xml->paragrafi . "<br>" ,"<br>";
   echo $xml->avantazhet . "<br>";
   echo $xml->avantazhi_1 . "<br>";
   echo $xml->avantazhi_2 . "<br>";
   echo $xml->avantazhi_3 . "<br>";
   echo $xml->avantazhi_4 . "<br>";
 ?> 

 </div>
<!-------------------------------------------------------------------------------------------------->
<?php require("../pjesët-e-faqës/pjesa-footer.php");  ?> <!--Pjesa Footer-->
<!-------------------------------------------------------------------------------------------------->
</body>
</html>