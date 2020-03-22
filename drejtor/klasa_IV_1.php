<!DOCTYPE html>
<html>
<head>
	<title>Klasa IV-1 - ditariElektronik</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<style type="text/css"> 

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

	<h3>ditari<b>Elektronik</b></h3>
  <a href="notimi-klasat.php"><i class="fas fa-arrow-left"></i> kthehu tek faqja kryesore e kujdestarit</a>
  <br><br>
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
        </tr> 
        </thead>  
  
        <?php  
        $dbcon=mysqli_connect("localhost","root","");  
        mysqli_select_db($dbcon,"projekti_ditarielektronik");

        $view_users_query="select * from klasa_6";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
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
<!--here showing results in the table -->  
            <td rowspan="2"><?php echo $Numri_rendor;  ?></td>  
            <td rowspan="2"><?php echo $Numri_rendor_ne_librin_ame;  ?></td>  
            <td rowspan="2" style="text-align: center;"><?php echo $Emri_emri_prindit_mbiemri;  ?></td>
            <td style="text-align: center;">I</td>
            <td><?php echo $Gjuhe_Shqipe_gj_1;  ?></td>
            <td><?php echo $Nota_Perfundimtare_Gjuhë_Shipe_P1;  ?></td>
            <td><?php echo $Matematik_gj_1;  ?></td>
            <td><?php echo $Nota_perfundimtare_Matematik_1;  ?></td>
        </tr>
        <tr> 
            <td style="text-align: center;">II</td>
            <td><?php echo $Gjuhe_Shqipe_gj_2;  ?></td>
            <td><?php echo $Nota_Perfundimtare_Gjuhë_Shipe_P2;  ?></td>
            <td><?php echo $Matematik_gj_2;  ?></td>
            <td><?php echo $Nota_perfundimtare_Matematik_2;  ?></td>
        </tr>  
        <?php } ?>   
    </table>  

</body>
</html>