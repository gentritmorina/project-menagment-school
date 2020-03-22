<?php
// aktivizimi i sesionit php
session_start();
 
// fshini të gjitha sesionet
session_destroy();
 
// kaloni faqen në faqen QASJA
header("location: ../Projekti_UPz-Ditari-Elektronik/qasja.php");
?>