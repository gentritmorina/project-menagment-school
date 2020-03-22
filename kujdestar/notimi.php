<?php
//fillimi i sensionit
session_start();
//isset eshte nje funksion i cili kontrollon nese nje variabel eshte vendosur apo jo
//ne rastin tone kontrollone nese perdoruesi qe qaset ne kete faqe ka statusin e llogarisë Kujdestar nese aj perdorues do te drejtohet tek faqja 404.php
if(!isset($_SESSION['Statusi']) || $_SESSION['Statusi'] != 'Kujdestar') {
     header("location: ../dil.php");
     header("location: ../404.php");
}
?>
<!---->
<!DOCTYPE html>
<html>
<head>
  <!--Titulli faqes-->
	<title>Notimi - ditariElektronik</title>
  <!--Dizajni i shkronjave-->
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!--Dizajni i gateshem i boostrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Pjesa e javaccript per pjesen e dizajnit boostrap-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<style type="text/css"> 
    /* Shenja * selektone te gjitha tagjet e mundeshme te faqes qe ekzistojne*/
    /* ne kete raste per dizajnin e fontit si me posht*/
		* {
    		font-family: 'Poppins', sans-serif;
    	}

		th {
        vertical-align: bottom;
        text-align: center;
      }

    th span {
	      padding: 15px;
        -ms-writing-mode: tb-rl;
        -webkit-writing-mode: vertical-rl;
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        white-space: nowrap;
      }

    td {
	      padding: 15px;
       }

    body {
        padding: 5%;
       }

    table, th, td {
        border: 2px solid #BDC3C7;
       }
</style>
</head>
<body>
<div>
 <h3>ditari<b>Elektronik</b></h3>
  <a href="faqja-kryesore.php"><i class="fas fa-arrow-left"></i> kthehu tek faqja kryesore e kujdestarit</a><br><br>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <i class="fas fa-user-plus"></i> Shto nxënë në ditar
</button>

<!-- Modal -->
<form method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Shto nxënës në ditar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <font>Nurmi rendor:</font><input type="text" name="Numri_rendor" class="form-control">
        <font>Nurmi rendor në librin amë:</font><input type="text" name="Numri_rendor_ne_librin_ame" class="form-control">
        <font>Nxënësi:</font><input type="text" name="Emri_emri_prindit_mbiemri" class="form-control">
        <FONT color="red" size="2px">**Shembull tek nxënësi të shenohet si ne vijim..!Filan (Fisteku) Fisteki - 28.11.1912</FONT><br>
        <font>Nr ID-së së kujdestarit:</font><input type="text" name="id_kujdestarit" class="form-control" value="<?php echo $_SESSION['Nr_ID']; ?>" readonly>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Anulo</button>
        <input type="submit" name="regjistro" class="btn btn-primary" value="Regjistro">
      </div>
    </div>
  </div>
</div>
</form>
  <br><br>
  <?php
$conn=mysqli_connect("localhost","root","");  
mysqli_select_db($conn,"projekti_ditarielektronik"); 

if(isset($_POST['regjistro']))
{  
   $Numri_rendor = $_POST['Numri_rendor'];
   $Numri_rendor_ne_librin_ame = $_POST['Numri_rendor_ne_librin_ame'];
   $Emri_emri_prindit_mbiemri = $_POST['Emri_emri_prindit_mbiemri'];
   $id_kujdestarit = $_POST['id_kujdestarit'];
   
   /*sql query for inserting data into database*/
   mysqli_query($conn,"insert into klasa_6 (Numri_rendor,Numri_rendor_ne_librin_ame,Emri_emri_prindit_mbiemri,id_kujdestarit) 
   values ('$Numri_rendor','$Numri_rendor_ne_librin_ame','$Emri_emri_prindit_mbiemri','$id_kujdestarit')")
    or die(mysqli_error());
   echo "<div class='alert alert-success' role='alert'>Mesazhi është dërguar me sukses.!</div>";
}
?>   
	 <table border="1px" cellspacing="0px">  
    <thead>   
        <tr>
           <th><span>Numri rendor</span></th>
           <th><span>Numri rendor në<br> librin amë</span></th>
           <th>Nxënësi</th>
           <th><span>Gjysmëvjetori</span></th>
           <th><span>Gjuhë Shqipe</span></th>
           <th><span>Nota Përfundimtare</span></th>
           <th><span>Matematik</span></th>
           <th><span>Nota Përfundimtare</span></th>
           <th><span></span></th>
        </tr> 
        </thead>  
  
        <?php  
        //lidhja me databazen 
        $dbcon=mysqli_connect("localhost","root","");  
        mysqli_select_db($dbcon,"projekti_ditarielektronik");

        $view_users_query="select * from klasa_6 where id_kujdestarit=150307022";//zgjedhja e tabeles se databazës  
        $run=mysqli_query($dbcon,$view_users_query);//këtu ekzekutoni sql query.  
  
        while($row=mysqli_fetch_array($run))// ndërsa shikoni për të shkëmbyer rezultatin dhe ruajtur në një grup $row.  
        {  
            $Numri_rendor=$row[0];  
            $Numri_rendor_ne_librin_ame=$row[1];  
            $Emri_emri_prindit_mbiemri=$row[2];
            $Gjuhe_Shqipe_gj_1=$row[3];
            $Nota_Perfundimtare_Gjuhë_Shipe_P1=$row[4];
            $Gjuhe_Shqipe_gj_2=$row[5];
            $Nota_Perfundimtare_Gjuhë_Shipe_P2=$row[6];
            $Matematik_gj_1=$row[7];
            $Matematik_gj_2=$row[8];
            $Nota_perfundimtare_Matematik_1=$row[9];
            $Nota_perfundimtare_Matematik_2=$row[10];
        ?>  
  
        <tr>  
        <!--këtu tregon rezultate në tabelë -->  
            <td rowspan="2"><?php echo $Numri_rendor;  ?></td>  
            <td rowspan="2"><?php echo $Numri_rendor_ne_librin_ame;  ?></td>  
            <td rowspan="2" style="text-align: center;"><?php echo $Emri_emri_prindit_mbiemri;  ?></td>
            <td style="text-align: center;">I</td>
            <td><?php echo $Gjuhe_Shqipe_gj_1;  ?></td>
            <td><?php echo $Nota_Perfundimtare_Gjuhë_Shipe_P1;  ?></td>
            <td><?php echo $Matematik_gj_1;  ?></td>
            <td><?php echo $Nota_perfundimtare_Matematik_1;  ?></td>
            <td>
               <?php echo "<a href='gjysmevjetori-1.php?Numri_rendor=". $row['Numri_rendor'] ."' title='Notimi për gjysmëvjetorin e parë' data-toggle='tooltip'><i class='far fa-edit'></i></a>";?>
               <i class='far fa-file-pdf'></i></td>
        </tr>
        <tr> 
            <td style="text-align: center;">II</td>
            <td><?php echo $Gjuhe_Shqipe_gj_2;  ?></td>
            <td><?php echo $Nota_Perfundimtare_Gjuhë_Shipe_P2;  ?></td>
            <td><?php echo $Matematik_gj_2;  ?></td>
            <td><?php echo $Nota_perfundimtare_Matematik_2;  ?></td>
            <td>
              <?php echo "<a href='gjysmevjetori-2.php?Numri_rendor=". $row['Numri_rendor'] ."' title='Notimi për gjysmëvjetorin e parë' data-toggle='tooltip'><i class='far fa-edit'></i></a>";?>
             <i class='far fa-file-pdf'></i></td>
        </tr>  
        <?php } ?>   
    </table>  
  </body>
</html>