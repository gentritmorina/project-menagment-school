<!DOCTYPE html>
<html>
<head>
	<title>Qasja - ditariElektronik</title>
	<link rel="stylesheet" type="text/css" href="../css/dizajni.css">
  <!-- integrity - Ju përdorni funksionin e Integritetit Subresource duke specifikuar një hash kriptografik të koduar bazë 64 të një burimi (skedari) që po i thoni shfletuesit për të shkëmbyer, në vlerën e integrity atributit të cilit do <script> ose të <link> elementit. -->
  <!-- crossorigin - Ky atribut i renditur tregon nëse duhet të përdoret CORS kur të kërkohet burimi. Imazhet e mundësuara nga CORS mund të ripërdoren në <canvas> element pa qenë i prishur . Vlerat e lejuara janë: anonymous,use-credentials-->
  <!-- anonymous - Një kërkesë ndër-origjinës (dmth. Me një Origin header HTTP) kryhet, por nuk është dërguar ndonjë kredenciale (dmth. Asnjë cookie, certifikatë X.509 ose autentifikim HTTP Basic). Nëse serveri nuk jep kredencialet në vendin e origjinës (duke mos vendosur Access-Control-Allow-Origin head HTTP) imazhi do të jetë i njollosur dhe përdorimi i tij i kufizuar.-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" href="https://s3-us-west-1.amazonaws.com/lifeblinkdata/blink_sub_categories/default_photos/000/000/024/original/education-icon-grey.png?1441058391" sizes="16x16" type="image/png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style type="text/css">
    	*{
    		font-family: 'Poppins', sans-serif;
    	}
    	body{
    		background: #e1e1e1;
    		margin-left: 35%;
    		margin-top: 8%;
    		margin-right: 35%;
    	}

    	.korniza{
    		background: white;
    		width: 400px;
    		border: 1px solid #CACFD2;
    		padding: 10%;
    		border-radius: 7px;
    		-moz-box-shadow: 0px 0px 15px 2px rgba(0,0,0,0.2);
            -webkit-box-shadow: 0px 0px 15px 2px rgba(0,0,0,0.2);
            box-shadow: 0px 0px 15px 2px rgba(0,0,0,0.2);
    	}
    </style>
</head>
<body>
<div class="korniza">
 <form action="logjika-qasja.php" method="post">
  <div style="padding: 2%;padding-bottom: 15%;">
  	<center>
  		<h3>ditari<b>Elektronik</b></h3>
  	</center>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"><i class="far fa-user"></i> Përdoruesi</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="Nr_ID" required>
    <!-- REQUIRED Specifikon që fusha e inputit është e nevojshme; nuk lejon dorëzimin e formularit dhe njofton përdoruesin nëse fusha e kërkuar është bosh-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><i class="fas fa-lock"></i> Fjalëkalimi</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Fjalekalimi" required>
  </div>
  <div class="form-group form-check">
  <a href="" style="color:#6c757d;"><i class="fas fa-external-link-alt"></i> Ke harruar fjalëkalimin</a>
  </div>
  <button type="submit"  class="btn btn-secondary"><i class="fas fa-sign-in-alt"></i> Hyr</button>
  </form>
 </div>
</body>
</html>


