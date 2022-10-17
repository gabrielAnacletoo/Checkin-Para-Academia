<?php
include('../session.php');
if(!isset($_SESSION['login_user'])){
header("location: ../index.php"); // Redirecting To Home Page

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Cross Lion - Checkin </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="../style.css">


<body>
	<div class="container-fluid">
			<div class="row justify-content-sm-center">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<!-- <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="100"> -->
						<img src="../img/logo.jpg" alt="logo" style="border-radius:50%;border:2px solid black;width:200px;"> 
					</div>
					<div class="card shadow-lg ">
						<div class="card-body p-5 rounded-3">
							<h1 class="fs-4 card-title fw-bold mb-4">Check-in</h1>
							<form method="POST" action="check.php">
              <div class="form-group">
                     
                        <input type="text" class="form-control i-form" name="" id="nome" class="form-control" type="text" value="<?php echo $user_check; ?>"  placeholder="<?php echo $user_check; ?>" readonly>
                        
              </div>
              <div class="form-group">
                    Quando será seu treino?
                  <input type="date" name="dia" id="dia"  placeholder="" class="form-control mb-1">
              </div>        
  <!-- ================ div hidden com horarios =========== -->
 <center><p  onclick="Mudarestado('minhaDiv')"> Horarios <img src="../img/down-arrow.png" style="width: 18px;"> </p>              
<br><div id="minhaDiv" style="display: none;"> <!-- função show e hide -->

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="horario" id="" value="6 Horas da manhã">
  <label class="form-check-label" for="inlineRadio1">6:00</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="horario" id="" value="7 Horas da manhã">
  <label class="form-check-label" for="inlineRadio2">7:00</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="horario" id="" value="8 Horas da manhã">
  <label class="form-check-label" for="inlineRadio2">8:00</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="horario" id="" value="17 Horas da tarde">
  <label class="form-check-label" for="inlineRadio2">17:00</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="horario" id="" value="18 Horas da tarde">
  <label class="form-check-label" for="inlineRadio2">18:00</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="horario" id="" value="19 Horas da noite">
  <label class="form-check-label" for="inlineRadio2">19:00</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="horario" id="" value="20 Horas da noite">
  <label class="form-check-label" for="inlineRadio2">20:00</label>
</div>
 </div>
 </center>
 </div>
 
  <div class="form-group">
               <div class="d-grid gap-2 col-7 mx-auto">
 <button type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" class="btn btn-success btn-md btn-block"> Fazer Check-in <img src="../img/verificar.png" style="width:35px;heigth:30px;"></button>
 <a href="logout.php" type="btn" class="btn btn-danger mb-1"> <img src="https://cdn-icons-png.flaticon.com/512/4400/4400828.png" style="width:35px;heigth:30px;"> Sair </a>

</div>
</div>
</form>  


	<div class="card-footer py-2 border-0">
							<div class="text-center">
								<small>Em caso de problemas procure	 o administrador.</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



<script>
    function Mudarestado(el) {
            var display = document.getElementById(el).style.display;
            if(display == "none")
                document.getElementById(el).style.display = 'block';
            else
                document.getElementById(el).style.display = 'none';
        }  
</script>
</body>
</html>
