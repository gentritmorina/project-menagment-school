<?php
// Kontrolloni ekzistencën e parametrit id përpara se të përpunoni më tej
if(isset($_GET["Nr_ID"]) && !empty(trim($_GET["Nr_ID"]))){
    // lidhja me databzen
    $mysqli =mysqli_connect("localhost","root","");  
    mysqli_select_db($mysqli ,"projekti_ditarielektronik");  
    
    // Përgatitni një deklaratë të zgjedhur
    $sql = "SELECT * FROM perdouesit WHERE Nr_ID = ?";
    
    if($stmt = $mysqli->prepare($sql)){
        // Bind variablat në deklaratën e përgatitur si parametra
        $stmt->bind_param("i", $param_id);
        
        // Vendosni parametrat
        $param_id = trim($_GET["Nr_ID"]);
        
        // Përpjekje për të ekzekutuar deklaratën e përgatitur
        if($stmt->execute()){
            $result = $stmt->get_result();
            
            if($result->num_rows == 1){
                /* Merrni rreshtin e rezultatit si një grup shoqërues. Meqë grupi i rezultateve përmban vetëm një rresht, ne nuk duhet të përdorim ndërsa loop */
                $row = $result->fetch_array(MYSQLI_ASSOC);
                
                // Marrja e vlerës individuale të fushës
                $Nr_ID = $row["Nr_ID"];
                $Emri = $row["Emri"];
                $Mbiemri = $row["Mbiemri"];
                $Datelindja = $row["Datelindja"];
                $Fjalekalimi = $row["Fjalekalimi"];
                $Statusi = $row["Statusi"];

            } else{
                // URL-ja nuk përmban parametër valid valute. Redirect në faqen e gabimit
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Dicka shkoi keq. Ju lutem provoni përsëri më vonë.";
        }
    }
     
    // Deklaratë e ngushtë
    $stmt->close();
    
    // Mbyll lidhjen
    $mysqli->close();
} else{
    // URL nuk përmban parametër id. Redirect në faqen e gabimit
    header("location: error.php");
    exit();
}
?>
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
  <title>Shiko të dhënat - ditariElektronik</title>
  <?php require("../pjesët-e-faqës/lidhjet-jashtme.php");?><!--lidhjet e jashtme te CSS, JS etj.-->
  <!---------------------------------------------------------------------------------------------->
  <!--Embedded style lejojnë të përcaktoni stilet për të gjithë dokumentin HTML në një vend.-->
  <!--Shtesë: Kto dizajne vlejne vetem per nje dokument te vecant html-->
 <!-------------------------------------------------------------------------------------------------->
 <?php require("../pjesët-e-faqës/dizajni.php");?><!--Dizajni tek pjesa head-->
<!------------------------------------------------------------------------------------------------------>
</head>
<!--------------------------------------------------------------------------------------------------->
<body>
<div class="container">
  <?php require("../pjesët-e-faqës/pjesa-header.php");?> <!--Pjesa header e faqës-->
  <?php require("../pjesët-e-faqës/menya-administratorit.php");?> <!--Menya kryesore e administratorit-->
<!-------------------------------------------------------------------------------------------------->
<!--Forma per shikimin e të dhënave-->
<div style="padding-left:25%; padding-right:25%;">
  <a href="të-dhënat-drejtorit.php"><i class="fas fa-arrow-left"></i> kthehu tek faqja të dhënat e drejtorit</a><br><br>
 <div class="card">
  <h6 class="card-header"><b>Të dhënat e <?php echo $row["Emri"]; ?> <?php echo $row["Mbiemri"]; ?></b></h6>
  <div class="card-body">
   <form action="logjika-php-regjistro-drejtorin.php" method="post" enctype="multipart/form-data">
    <table>
    <tr>
      <td>
        <font>Emri dhe Mbiemri</font>
        <input type="text" placeholder="<?php echo $row["Emri"]; ?> <?php echo $row["Mbiemri"]; ?>" class="form-control" disabled>
      </td>
      <td>
        <font>Datëlindja</font>
        <input type="text" placeholder="<?php echo $row["Datelindja"]; ?>" class="form-control" disabled>
      </td>
    </tr>
    <tr>
      <td>
       <font>Nr.ID</font>
       <input type="text" placeholder="<?php echo $row["Nr_ID"]; ?>" class="form-control" disabled>
      </td>
      <td>
       <font>Statusi</font>
       <input type="text" placeholder="<?php echo $row["Statusi"]; ?>" class="form-control" disabled>
      </td>
      <tr>
    </tr>
    </tr>
  </table>    
  </div>
</div><br>
</form>
</div><br>
<!------------------------------------------------------------------------------------------------>
<?php require("../pjesët-e-faqës/pjesa-footer.php");  ?> <!--Pjesa Footer-->
<!------------------------------------------------------------------------------------------------>
</body>
</html>
