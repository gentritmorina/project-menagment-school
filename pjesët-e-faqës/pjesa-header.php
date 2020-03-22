 <div style="padding: 4%;padding-bottom: 2%;" class="header">
  <div class="pwf">
   <button class="btn btn-secondary dropdown-toggle" type="button" id="opsionet-perdoruesit" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-user"></i> Përdoruesi: <?php echo $_SESSION['Nr_ID']; ?>
     </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <?php echo "<a href='profili.php?Nr_ID=". $_SESSION['Nr_ID'] ."' class='dropdown-item' data-toggle='tooltip'><i class='far fa-user'></i>  Shiko profilin</a>";?>
	    <a class="dropdown-item" href="ndryshimi-fjalëkalimit.php"> <i class="fas fa-lock"></i>  Ndrysho fjalëkalimin </a>
        <a class="dropdown-item" href="../dil.php"><i class="fas fa-sign-out-alt"></i> Dil</a>
      </div>
    </div>
  <!--Titulli faqes-->
  <center>
    <h3>ditari<b>Elektronik</b></h3>
  </center>
  <!---->
  </div>