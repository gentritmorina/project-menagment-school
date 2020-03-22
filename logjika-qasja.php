<?php
// aktivizimi sesionint në php
session_start();
 
// lidhja e php me lidhje të bazës së të dhënave
$dbcon=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon,"projekti_ditarielektronik");  
 
// mbledhja e të dhënat e dërguara nga forma e identifikimit
$Nr_ID = $_POST['Nr_ID'];
$Fjalekalimi = md5($_POST["Fjalekalimi"]);

// zgjedhjen e të dhënave të përdoruesit me emrin e përdoruesit dhe fjalëkalimin e duhur
$login = mysqli_query($dbcon,"select * from perdouesit where Nr_ID='$Nr_ID' and Fjalekalimi='$Fjalekalimi'");
// llogaritja e sasisë së të dhënave të gjetura
$cek = mysqli_num_rows($login);
 
// kontrolli nëse emri i përdoruesit dhe fjalëkalimi janë gjetur në bazën e të dhënave
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// kontrolli nëse përdoruesi është identifikuar ka statusin Administrator
	if($data['Statusi']=="Administrator"){
 
		// krijimi i një sesionit të identifikimit dhe përdoruesit
		$_SESSION['Nr_ID'] = $Nr_ID;    
		$_SESSION['Statusi'] = "Administrator";
		// kaloni te faqja e panelit të admin
		header("location: ../Projekti_UPz-Ditari-Elektronik/administratori/faqja-kryesore.php");
 
	//  kontrolli nëse përdoruesi është identifikuar ka statusin Drejtor
	}else if($data['Statusi']=="Drejtor"){
		// krijimi i një sesionit të identifikimit dhe përdoruesit
		$_SESSION['Nr_ID'] = $Nr_ID;
		$_SESSION['Statusi'] = "Drejtor";
		// kaloni te faqja e panelit të Drejtorit
		header("location: ../Projekti_UPz-Ditari-Elektronik/drejtor/faqja-kryesore.php");
 
	// kontrolli nëse përdoruesi është identifikuar ka statusin Kujdestar
	}else if($data['Statusi']=="Nxenes"){
		// krijimi i një sesionit të identifikimit dhe përdoruesit
		$_SESSION['Nr_ID'] = $Nr_ID;
		$_SESSION['Statusi'] = "Nxenes";
		// kaloni te faqja e panelit të Kujdestarit
		header("location: ../Projekti_UPz-Ditari-Elektronik/nxënësit/faqja-kryesore.php");
 
	}else if($data['Statusi']=="Kujdestar"){
		// krijimi i një sesionit të identifikimit dhe përdoruesit
		$_SESSION['Nr_ID'] = $Nr_ID;
		$_SESSION['Statusi'] = "Kujdestar";
		// kaloni te faqja e panelit të Kujdestarit
		header("location: ../Projekti_UPz-Ditari-Elektronik/kujdestar/faqja-kryesore.php");
 
	}else{
 
		// nese asnjëra nga keto kategorit nuk perputhen me te dhenat e marrura kaloni përsëri në faqen e identifikimit
		header("location: qasja.php");
	}	
		
} else {
	header("location: qasja.php");
}
 
?>