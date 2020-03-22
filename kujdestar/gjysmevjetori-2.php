<?php
$conn=mysqli_connect("localhost","root","");  
mysqli_select_db($conn,"projekti_ditarielektronik");  

if(count($_POST)>0) {
mysqli_query(
	$conn,"UPDATE klasa_6 set 
	Matematik_gj_2='" . $_POST['Matematik_gj_2'] . "',
	Nota_Perfundimtare_Gjuhe_Shqipe_P2='" . $_POST['Nota_Perfundimtare_Gjuhe_Shqipe_P2'] . "',
	Nota_perfundimtare_Matematik_2='" . $_POST['Nota_perfundimtare_Matematik_2'] . "',
	Gjuhe_Shqipe_gj_2='" . $_POST['Gjuhe_Shqipe_gj_2'] . "'");
$message = "U ruajt me suskes..!";
}
$result = mysqli_query($conn,"SELECT * FROM klasa_6 WHERE Numri_rendor='" . $_GET['Numri_rendor'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Notimi për gjysmëvjtori parë - ditariElektronik</title>
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

        td{
	        padding: 15px;
        }

        body{
            padding: 5%;
        }

        a:hover{
       	    text-decoration: none;
        }
        
    </style> 
</head>
<body>
<div class="card">
  <div class="card-body">    
   <form name="frmUser" method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?></div>
    <div style="padding-bottom:5px;">
      <h3>ditari<b>Elektronik</b></h3>
      <h4 style="text-transform: uppercase; float: right; font-weight: 900; margin-right: 2%;
    border-bottom: 3px solid black;">Gjysmëvjetori II</h4>
      <a href="notimi.php"><i class="fas fa-arrow-left"></i> kthehu tek ditari</a>
    </div>
   <br>
  <br>
  <!------------------------------------>
  <font><b>Numri rëndor:</b></font> <?php echo $row['Numri_rendor']; ?><br>
  <font><b>Numri rendor në librin amë:</b></font> <?php echo $row['Numri_rendor_ne_librin_ame']; ?><br>
  <font><b>Nxënësi:</b>  <?php echo $row['Emri_emri_prindit_mbiemri'];?></font>
  <br><hr>
  <!------------------------------------>
  <br>Gjuhë Shqipe - Notat për gjysmëvjetori i dytë: <br>
  <input type="text" name="Gjuhe_Shqipe_gj_2" class="form-control" value="<?php echo $row['Gjuhe_Shqipe_gj_2']; ?>">
  <br>Gjuhë Shqipe - Notat përfundimtare për gjysmëvjetori i dytë:<br>
  <input type="text" name="Nota_Perfundimtare_Gjuhe_Shqipe_P2" class="form-control" value="<?php echo $row['Nota_Perfundimtare_Gjuhe_Shqipe_P2']; ?>">
  <br>Matematik - Notat për gjysmëvjetori i dytë: <br>
  <input type="text" name="Matematik_gj_2" class="form-control" value="<?php echo $row['Matematik_gj_2']; ?>">
  <br>Matematik - Notat përfundimtare për gjysmëvjetori i dytë:<br>
  <input type="text" name="Nota_perfundimtare_Matematik_2" class="form-control" value="<?php echo $row['Nota_perfundimtare_Matematik_2']; ?>">
  <br><br>
  <input type="submit" name="submit" class="btn btn-secondary" value="Ekzekuto" class="buttom">
    </form>
   </div>
  </div>
 </body>
</html>