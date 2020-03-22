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
 <style type="text/css">
   .form-control{
    margin: 2%;
   }
 </style>
</head>
<!--------------------------------------------------------------------------------------------------->
<body>
<div class="container">
  <?php require("../pjesët-e-faqës/pjesa-header.php");?> <!--Pjesa header e faqës-->
  <?php require("../pjesët-e-faqës/menya-drejtorit.php");?> <!--Menya kryesore e administratorit-->
<!--------------------------------------------------------------------------------------------------->
  <div style="padding-left: 3%;padding-right: 3%;"> 
<?php
$conn=mysqli_connect("localhost","root","");  
mysqli_select_db($conn,"projekti_ditarielektronik"); 

if(isset($_POST['dergo']))
{  
   $emri = $_POST['emri'];
   $email = $_POST['email'];
   $mesazhi = $_POST['mesazhi'];
   
   /*sql query for inserting data into database*/
   mysqli_query($conn,"insert into kontakt(emri,email,mesazhi) 
   values ('$emri','$email','$mesazhi')")
    or die(mysqli_error());
   echo "<div class='alert alert-success' role='alert'>Mesazhi është dërguar me sukses.!</div>";
}
?>   
    <h3>Kontakti</h3>
    <p>Përmes kësaj faqës ju mundë të na adresoni problemet qe keni hasur apo dicka te pa qartë reth sistemit ditari elektronik.</p><br>
  </div>
  <div class="row" style="padding-left: 2%;padding-right: 2%; padding-bottom: 5%;">
    <div class="col">
      <form method="post">
        <input type="text" name="emri" placeholder="Emri" class="form-control">
        <input type="email" name="email" placeholder="Email" class="form-control">
        <textarea class="form-control" name="mesazhi">Mesazhi</textarea>
        <input type="submit" name="dergo" value="Dërgo" class="btn btn-secondary" style="margin-left: 2%;">
      </form>
    </div>
    <div class="col">
      <h5 style="text-transform: uppercase;">Adresa</h5>
      <p>Rr.Filan Fisteku p.n<br> 2000 Prizren,<br>Republika e Kosovës</p>
      <h5 style="text-transform: uppercase;">Kontakti</h5>
      <p>Email: <a href="mailto:perkrahjateknike@gmail.com">perkrahjateknike@gmail.com</a><br>Tel: 038 050 050</p>

    </div>
  </div>
<!-------------------------------------------------------------------------------------------------->
<?php require("../pjesët-e-faqës/pjesa-footer.php");  ?> <!--Pjesa Footer-->
<!-------------------------------------------------------------------------------------------------->
</body>
</html>