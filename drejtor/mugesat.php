<?php
session_start();
if(!isset($_SESSION['Statusi']) || $_SESSION['Statusi'] != 'Drejtor') {
     header("location: ../dil.php");
     header("location: ../404.php");
}
?>
<!---->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php require("../pjesët-e-faqës/dizajni.php");?>
</head>
<body>
	<div class="container">
  <?php require("../pjesët-e-faqës/pjesa-header.php");?> <!--Pjesa header e faqës-->
  <?php require("../pjesët-e-faqës/menya-drejtorit.php");?> <!--Menya kryesore e kujdestarit-->
<!--------------------------------------------------------------------------------------------------->
 <div class="row" style="padding: 2%;">
  <!-- Button trigger modal -->
    <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Sheno emrin e nxënësit..">
    <br><br>
	<table  id="myTable" class="table">  
	 <thead>  
        <tr>  
            <th scope="col">Nxënësi</th>  
            <th scope="col">M</th>  
            <th scope="col">P</th>  
            <th scope="col">Muaji</th>  
        </tr>  
        </thead>  
  
        <?php  
        $dbcon=mysqli_connect("localhost","root","");  
        mysqli_select_db($dbcon,"projekti_ditarielektronik");

        $view_users_query="select * from mungesat";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
        	$nr=$row[0];
            $nxenesi=$row[1];  
            $m=$row[2];  
            $p=$row[3];  
            $muaji=$row[4];  
        ?>  
        <tr>  
        <!--here showing results in the table -->  
            <td><?php echo $nxenesi;  ?></td>  
            <td><?php echo $m;  ?></td>  
            <td><?php echo $p;  ?></td>  
            <td><?php echo $muaji;  ?></td>  
            </a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr> 
      <?php } ?>   
    </table> 
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
  </div>
  <!-----------------------Footer--->
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

<?php
if(isset($_POST['ruaj']))
{	 
	 $nxenesi = $_POST['nxenesi'];
	 $m = $_POST['m'];
	 $p = $_POST['p'];
	 $muaji = $_POST['muaji'];
	 /*sql query for inserting data into database*/
	 mysqli_query($dbcon,"insert into mungesat(nxenesi,m,p,muaji) 
	 values ('$nxenesi','$m','$p','$muaji')") or die(mysqli_error());
	 echo "<div class='alert alert-success' role='alert'>
            U shtua me sukses..!
           </div>";
    }
?>