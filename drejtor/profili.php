<?php
session_start();
if(!isset($_SESSION['Statusi']) || $_SESSION['Statusi'] != 'Drejtor') {
     header("location: ../dil.php");
     header("location: ../404.php");
}
?>
<!--------------------------------------------------------------------------------------------------->
<?php
// Check existence of id parameter before processing further
if(isset($_GET["Nr_ID"]) && !empty(trim($_GET["Nr_ID"]))){
    // Include config file
    $mysqli =mysqli_connect("localhost","root","");  
    mysqli_select_db($mysqli ,"projekti_ditarielektronik");  
    
    // Prepare a select statement
    $sql = "SELECT * FROM perdouesit WHERE Nr_ID = ?";
    
    if($stmt = $mysqli->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["Nr_ID"]);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();
            
            if($result->num_rows == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = $result->fetch_array(MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $Emri = $row["Emri"];
                $Mbiemri = $row["Mbiemri"];
                $Datelindja = $row["Datelindja"];
                $Nr_ID = $row["Nr_ID"];
                $Statusi = $row["Statusi"];

            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    $stmt->close();
    
    // Close connection
    $mysqli->close();
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
   <!--Titulli faqes-->
  <title>Profili përdoruesit - ditariElektronik</title> 
  <?php require("../pjesët-e-faqës/lidhjet-jashtme.php");?><!--lidhjet e jashtme te CSS, JS etj.-->
  <!---------------------------------------------------------------------------------------------->
  <!--Embedded style lejojnë të përcaktoni stilet për të gjithë dokumentin HTML në një vend.-->
  <!--Shtesë: Kto dizajne vlejne vetem per nje dokument te vecant html-->
 <!-------------------------------------------------------------------------------------------------->
 <?php require("../pjesët-e-faqës/dizajni.php");?><!--Dizajni tek pjesa head-->
</head>
<!------------------------------------------------------------------------------------------------------>
<body>
<div class="container">
  <?php require("../pjesët-e-faqës/pjesa-header.php");?> <!--Pjesa header e faqës-->
  <?php require("../pjesët-e-faqës/menya-drejtorit.php");?> <!--Menya kryesore e administratorit-->
<!------------------------------------------------------------------------------------------------------>
<!--Forma per regjistrimin e perdoruesit-->
<div style="padding-left:25%; padding-right:25%;">
 <div class="card">
  <h6 class="card-header"><b>Profili</b></h6>
  <div class="card-body">
   <form action="logjika-php-regjistro-drejtorin.php" method="post">
    <table>
    <tr><td>
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
	</tr>
  </table>    
  </div>
</div><br>
</form>
</div><br>
<!------------------------------------------------------------------------------------------------>
<?php require("../pjesët-e-faqës/pjesa-footer.php");  ?> <!--Pjesa Footer-->
<!-------------------------------------------------------------------------------------------------->
</body>
</html>
