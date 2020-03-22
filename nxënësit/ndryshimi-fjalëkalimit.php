<?php
session_start();
$Nr_ID = $_SESSION["Nr_ID"];
$conn = mysqli_connect("localhost", "root", "", "projekti_ditarielektronik") or die("Lidhja dëshoti: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT * from perdouesit WHERE Nr_ID='" . $_SESSION["Nr_ID"] . "'");
    $row = mysqli_fetch_array($result);
    if ( md5($_POST["currentPassword"]) == $row ["Fjalekalimi"]) {
        mysqli_query($conn, "UPDATE perdouesit set Fjalekalimi='" . md5($_POST["newPassword"]) . "' WHERE Nr_ID='" . $_SESSION["Nr_ID"] . "'");
        $message = "<div class='alert alert-success' role='alert'>Fjalëkalimi ndryshoi me sukses!</div>";
    } else
        $message = "<div class='alert alert-danger' role='alert'>Fjalëkalimi aktual nuk është i saktë!</div>";
}
?>
<!--Thirrja e sesnionit per kufizimin e perdoruesve nese nuk ka statusin Administrator-->
<!--Orientimi perdoruesit ne faqen dil.php ne menyre qe te behet prishja e sesioneve te thirrura dhe shkycja nga llogaria-->
<!--Po ashtu nese perdoruesi tentone te qaset ne faqet e kujdestarit apo perdoruesve me statuset tjera drejtohet tek faqja 404.php-->
<?php
if(!isset($_SESSION['Statusi']) || $_SESSION['Statusi'] != 'Nxenes') {
     header("location: ../dil.php");
     header("location: ../404.php");
}
?>
<!---------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
  <!--Titulli faqes-->
  <title>Ndrysho fjalëkalimin - ditariElektronik</title> 
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
<!------------------------------------------------------------------------------------------------>
<div style="padding-left:25%; padding-right:25%;">
 <div class="card">
  <h6 class="card-header" style="text-align: center;"><b>Ndrysho fjalëkalimin</b></h6>
  <div class="card-body" style="text-align: center;">
            <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        <div style="width: 500px;">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <tr>
                    <td width="40%"><label>Fjalëkalimi aktual</label></td>
                    <td width="60%"><input type="password"
                        name="currentPassword" class="form-control" /></td>
                </tr>
                <tr>
                    <td><label>Fjalëkalim i ri</label></td>
                    <td><input type="password" name="newPassword"
                        class="form-control" /></td>
                </tr>
                <td><label>Konfirmo fjalëkalimin</label></td>
                <td><input type="password" name="confirmPassword" class="form-control" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit"
                        value="Shtyp" class="btn btn-secondary"></td>
                </tr>
            </table>
        </div>
    </form>
  </div>
</div><br>
</div>
<!-------------------------------------------------------------------------------------------------->
<?php require("../pjesët-e-faqës/pjesa-footer.php");  ?> <!--Pjesa Footer-->
<!-------------------------------------------------------------------------------------------------->
</body>
</html>