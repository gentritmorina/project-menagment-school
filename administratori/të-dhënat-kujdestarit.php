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
  <title>Të dhënat - ditariElektronik</title>
   <?php require("../pjesët-e-faqës/lidhjet-jashtme.php");?><!--lidhjet e jashtme te CSS, JS etj.-->
  <!---------------------------------------------------------------------------------------------->
  <!--Embedded style lejojnë të përcaktoni stilet për të gjithë dokumentin HTML në një vend.-->
  <!--Shtesë: Kto dizajne vlejne vetem per nje dokument te vecant html-->
  <!-------------------------------------------------------------------------------------------------->
 <?php require("../pjesët-e-faqës/dizajni.php");?><!--Dizajni tek pjesa head-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
<!------------------------------------------------------------------------------------------------------>
</head>
<!------------------------------------------------------------------------------------------------------>
<body>
<div class="container">
  <?php require("../pjesët-e-faqës/pjesa-header.php");?> <!--Pjesa header e faqës-->
  <?php require("../pjesët-e-faqës/menya-administratorit.php");?> <!--Menya kryesore e administratorit-->
<!------------------------------------------------------------------------------------------------------>
<div style="padding-left: 6%; padding-right: 6%; padding-bottom: 2.5%; padding-top: 2.5%; ">
                 <?php
                    // thirrja databazes
                    $mysqli =mysqli_connect("localhost","root","");  
                    mysqli_select_db($mysqli ,"projekti_ditarielektronik");  
 
                    
                    $sql = "SELECT Emri, Mbiemri, Nr_ID, Statusi FROM perdouesit where Statusi='Kujdestar'";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Nr.ID</th>";
                                        echo "<th>Emri</th>";
                                        echo "<th>Mbiemri</th>";
                                        echo "<th></th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['Nr_ID'] . "</td>";
                                        echo "<td>" . $row['Emri'] . "</td>";
                                        echo "<td>" . $row['Mbiemri'] . "</td>";
                                        echo "<td style='text-align:center;'>";
                                        echo "<a href='fshirja-kujdestarit.php?Nr_ID=". $row['Nr_ID'] ."' title='Fshij' data-toggle='tooltip'><i class='fas fa-trash-alt'></i> </a>";
                                        echo "<a href='shiko-te-dhenat-kujdestarit.php?Nr_ID=". $row['Nr_ID'] ."' title='Shiko të dhënat' data-toggle='tooltip'><i class='fas fa-eye'></i> </a>";
                                        echo "<a href='logjika-ndryshimi-kujdestari.php?Nr_ID=". $row['Nr_ID'] ."' title='Ndrysho të dhënat' data-toggle='tooltip'><i class='fas fa-user-edit'></i> </a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";

                            $result->free();
                        } else{
                            echo "<p class='lead'><em>Për momentin në tabel nuk disponojm me asnjë të dhënë..!</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                    }
                    
                    //Mbyll lidhjen
                    $mysqli->close();
                    ?>
</div>
<!------------------------------------------------------------------------------------------------>
<?php require("../pjesët-e-faqës/pjesa-footer.php");  ?> <!--Pjesa Footer-->
<!-------------------------------------------------------------------------------------------------->
</body>
</html>