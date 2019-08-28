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
	if(mail('sac@domatacadista.net', 'Cadastre-se - Site Dom Atacadista', $body, $headers)){
		$envio = true;
	}
}
?>
<?php include_once 'header.php'; ?>
<div class="container-fluid">
	<?php include_once './partes/barra-topo.php'; ?>
	<?php include_once './partes/menu.php'; ?>
	<?php include_once './partes/cadastre-se.php'; ?>
</div>
<?php include_once 'footer.php'; ?>