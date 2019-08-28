<?php
if($_POST){
	$body = '';
	$envio = false;
	foreach($_POST as $k => $v){
		$body .= '<br><br>'.filter_var($k, FILTER_SANITIZE_STRING).': <br>';
		$body .= filter_var($v, FILTER_SANITIZE_STRING);
	}
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	if(mail('curriculo@domatacadista.net', 'Cadastre-se - Site Dom Atacadista', $body, $headers)){
		$envio = true;
	}
}
?>
<?php include_once 'header.php'; ?>
<div class="container-fluid">
	<?php include_once './partes/barra-topo.php'; ?>
	<?php include_once './partes/menu.php'; ?>
	<?php //include_once './partes/trabalhe-conosco.php'; ?>
	<div class="row page trabalhe-conosco" id="trabalhe-conosco">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Envie o seu currículo</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p class="tc t18 w400">para:</p>
					<h3 class="tc"><a class="t22 w800" href="mailto:curriculo@domatacadista.net">curriculo@domatacadista.net</a></h3>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once 'footer.php'; ?>