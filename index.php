<?php
require "vouch.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Criar Voucher</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script>
        function printDiv() {
            var divContents = document.getElementById("vc").innerHTML;
            var a = window.open('', '', 'height=200px, width=300px');
            a.document.write('<html>');
            a.document.write('<body >');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<?php
						echo $v;			
					?>
				</div>

				<form class="login100-form validate-form" action="index.php" method="post">
					<span class="login100-form-title">
						Criar Voucher
					</span>

					<div class="wrap-input100 validate-input">
						<select class="input100" name="plano" id="plano">
							<option value="2h">2 Horas</option>
							<option value="10h">10 Horas</option>
							<option value="1d">1 Dia</option>
							<option value="3d">3 dias</option>
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Criar
						</button>
						</form>	
					</div>
					
							<?php
							if($v!=""){
								echo '
								<div class="container-login100-form-btn">
					<form action="index.php" method="post">
							<input type="hidden" name="plano" value="0">
							<input type="submit" class="btn btn-danger" value="Limpar">
							<input type="button" class="btn btn-success" value="Imprimir" onClick="printDiv()">
							</form>
					</div>
							';
							}
							?><hr>
					
					
				
			</div><hr><p></p><div style="padding-top: 60;"><?php
						echo $v;			
					?></div>
		</div>
	</div>
	

	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>