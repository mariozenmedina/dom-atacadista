	<div class="row page trabalhe-conosco" id="trabalhe-conosco">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Entre em contato</h2>
				</div>
			</div>
			<?php if(!$_POST): ?>
			<form method="post" action="">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="nome">Nome Completo</label>
							<input class="form-control" required="" type="text" name="nome" value="">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input class="form-control" required="" type="email" name="email" value="">
						</div>
						<div class="form-group">
							<label for="telefones">Telefones</label>
							<input class="form-control" required="" type="text" name="telefones" value="">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="assunto">Assunto</label>
							<input class="form-control" required="" type="text" name="assunto" value="">
						</div>
						<div class="form-group">
							<label for="mensagem">Mensagem</label>
							<textarea name="mensagem" cols="40" rows="5" class="form-control" placeholder=""></textarea>
							<div class="form-group">
								<input class="submit float-right" type="submit" value="Enviar Mensagem">
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</form>
			<?php elseif($envio): ?>
			<div class="col-12 clear">
				<div class="form-group">
					<p class="wpcf7-mail-sent-ok">Recebemos a sua mensagem, responderemos em breve.</p>
				</div>
			</div>
			<?php else: ?>
			<div class="col-12 clear">
				<div class="form-group">
					<p class="wpcf7-validation-errors">Houve um erro ao enviar seus dados, tente novamente mais tarde.</p>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>