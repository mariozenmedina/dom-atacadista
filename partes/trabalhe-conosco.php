	<div class="row page trabalhe-conosco" id="trabalhe-conosco">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Envie o seu currículo</h2>
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
						<div class="form-group">
							<label for="nacionalidade">Nacionalidade</label>
							<input class="form-control" required="" type="text" name="nacionalidade" value="" placeholder="exemplo: Brasileira">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="endereco">Endereço Completo</label>
							<input class="form-control" required="" type="text" name="endereco" value="">
						</div>
						<div class="form-group">
							<label for="bairro">Bairro</label>
							<input class="form-control" required="" type="text" name="bairro" value="">
						</div>
						<div class="form-group">
							<label for="cidade">Cidade</label>
							<select class="form-control" name="cidade" required="">
								<option value="">--- selecione ---</option>
								<option value="Angra dos Reis">Angra dos Reis</option>
								<option value="Araruama">Araruama</option>
								<option value="Barra Mansa">Barra Mansa</option>
								<option value="Belford Roxo">Belford Roxo</option>
								<option value="Cabo Frio">Cabo Frio</option>
								<option value="Duque de Caxias">Duque de Caxias</option>
								<option value="Itaboraí">Itaboraí</option>
								<option value="Japerí">Japerí</option>
								<option value="Magé">Magé</option>
								<option value="Maricá">Maricá</option>
								<option value="Nilópolis">Nilópolis</option>
								<option value="Niterói">Niterói</option>
								<option value="Nova Iguaçu">Nova Iguaçu</option>
								<option value="Petrópolis">Petrópolis</option>
								<option value="Pinheiral">Pinheiral</option>
								<option value="Resende">Resende</option>
								<option value="Rio Bonito">Rio Bonito</option>
								<option value="Rio de Janeiro">Rio de Janeiro</option>
								<option value="São Gonçalo">São Gonçalo</option>
								<option value="São João de Meriti">São João de Meriti</option>
								<option value="Saquarema">Saquarema</option>
								<option value="Tanguá">Tanguá</option>
								<option value="Valença">Valença</option>
								<option value="Volta Redonda">Volta Redonda</option>
							</select>
						</div>
						<div class="form-group">
							<label for="uf">Estado - UF</label>
							<input class="form-control" required="" disabled="" type="text" name="uf" value="RJ">
						</div>
					</div>
					<div class="col-12" style="border-bottom: solid 1px #d9d9d9; padding-top: 35px; margin-bottom: 30px;"></div>
					<div class="col-12 col-md-6">
						<label for="nascimento">Data de Nascimento</label>
						<div class="row">
							<div class="col-4">
								<div class="form-group">
									<select class="form-control" name="dia" required="">
										<option value="">--- dia ---</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select>
								</div>
							</div>
							<div class="col-4">
								<div class="form-group">
									<select class="form-control" name="mes" required="">
										<option value="">--- mês ---</option>
										<option value="1">Janeiro</option>
										<option value="2">Fevereiro</option>
										<option value="3">Março</option>
										<option value="4">Abril</option>
										<option value="5">Maio</option>
										<option value="6">Junho</option>
										<option value="7">Julho</option>
										<option value="8">Agosto</option>
										<option value="9">Setembro</option>
										<option value="10">Outubro</option>
										<option value="11">Novembro</option>
										<option value="12">Dezembro</option>
									</select>
								</div>
							</div>
							<div class="col-4">
								<div class="form-group">
									<select class="form-control" name="ano" required="">
										<option value="">--- ano ---</option>
										<option value="2003">2003</option>
										<option value="2002">2002</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1990">1990</option>
										<option value="1989">1989</option>
										<option value="1988">1988</option>
										<option value="1987">1987</option>
										<option value="1986">1986</option>
										<option value="1985">1985</option>
										<option value="1984">1984</option>
										<option value="1983">1983</option>
										<option value="1982">1982</option>
										<option value="1981">1981</option>
										<option value="1980">1980</option>
										<option value="1979">1979</option>
										<option value="1978">1978</option>
										<option value="1977">1977</option>
										<option value="1976">1976</option>
										<option value="1975">1975</option>
										<option value="1974">1974</option>
										<option value="1973">1973</option>
										<option value="1972">1972</option>
										<option value="1971">1971</option>
										<option value="1970">1970</option>
										<option value="1969">1969</option>
										<option value="1968">1968</option>
										<option value="1967">1967</option>
										<option value="1966">1966</option>
										<option value="1965">1965</option>
										<option value="1964">1964</option>
										<option value="1963">1963</option>
										<option value="1962">1962</option>
										<option value="1961">1961</option>
										<option value="1960">1960</option>
										<option value="1959">1959</option>
										<option value="1958">1958</option>
										<option value="1957">1957</option>
										<option value="1956">1956</option>
										<option value="1955">1955</option>
										<option value="1954">1954</option>
										<option value="1953">1953</option>
										<option value="1952">1952</option>
										<option value="1951">1951</option>
										<option value="1950">1950</option>
										<option value="1949">1949</option>
										<option value="1948">1948</option>
										<option value="1947">1947</option>
										<option value="1946">1946</option>
										<option value="1945">1945</option>
										<option value="1944">1944</option>
										<option value="1943">1943</option>
										<option value="1942">1942</option>
										<option value="1941">1941</option>
										<option value="1940">1940</option>
										<option value="1939">1939</option>
										<option value="1938">1938</option>
										<option value="1937">1937</option>
										<option value="1936">1936</option>
										<option value="1935">1935</option>
										<option value="1934">1934</option>
										<option value="1933">1933</option>
										<option value="1932">1932</option>
										<option value="1931">1931</option>
										<option value="1930">1930</option>
										<option value="1929">1929</option>
										<option value="1928">1928</option>
										<option value="1927">1927</option>
										<option value="1926">1926</option>
										<option value="1925">1925</option>
										<option value="1924">1924</option>
										<option value="1923">1923</option>
										<option value="1922">1922</option>
										<option value="1921">1921</option>
										<option value="1920">1920</option>
										<option value="1919">1919</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="sexo">Sexo</label>
							<select class="form-control" name="sexo" required="">
								<option value="">---selecione---</option>
								<option value="Masculino">Masculino</option>
								<option value="Feminino">Feminino</option>
							</select>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="civil">Estado Civil</label>
							<select class="form-control" name="civil" required="">
								<option value="">---selecione---</option>
								<option value="solteiro">Solteiro(a)</option>
								<option value="casado">Casado(a)</option>
								<option value="divorciado">Divorciado(a)</option>
								<option value="viuvo">Viúvo(a)</option>
								<option value="separado">Separado(a)</option>
							</select>
						</div>
						<div class="form-group">
							<label for="dependentes">Dependentes</label>
							<select class="form-control" name="dependentes" required="">
								<option value="">---selecione---</option>
								<option selected="" value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</div>
					</div>
					<div class="col-12" style="border-bottom: solid 1px #d9d9d9; padding-top: 35px; margin-bottom: 30px;"></div>
					<div class="col-12">
						<div class="form-group">
							<label for="informacoes">Outras Informações Pessoais</label>
							<textarea name="informacoes" cols="40" rows="4" class="form-control" placeholder="Se possui CNH, veículo; se possui deficiências ou restrições médicas; etc..."></textarea>
						</div>
					</div>
					<div class="col-12" style="border-bottom: solid 1px #d9d9d9; padding-top: 35px; margin-bottom: 30px;"></div>
					<div class="col-12">
						<div class="form-group">
							<label for="escolaridade">Escolaridade</label>
							<select class="form-control" name="escolaridade" required="">
								<option value="">---selecione---</option>
								<option value="superior-completo">Superior Completo</option>
								<option value="superior-incompleto">Superior Incompleto</option>
								<option value="medio-completo">(2º grau) Médio Completo</option>
								<option value="medio-incompleto">(2º grau) Médio incompleto</option>
								<option value="fundamental-completo">Fundamental Completo</option>
								<option value="fundamental-incompleto">Fundamental incompleto</option>
							</select>
						</div>
						<div class="form-group">
							<label for="qualificacao">Qualificações</label>
							<textarea name="qualificacao" cols="40" rows="4" class="form-control" placeholder="Cursos, áreas de conhecimento e habilidades"></textarea>
						</div>
					</div>
					<div class="col-12" style="border-bottom: solid 1px #d9d9d9; padding-top: 35px; margin-bottom: 30px;"></div>
					<div class="col-12">
						<div class="form-group">
							<label for="experiencia">Experiência Profissional</label>
							<p class="help-block">Selecione a quantidade e comece pelo último emprego.</p>
							<select id="experiencia" class="form-control" name="experiencia" required="">
								<option value="">---selecione a quantidade---</option>
								<option selected="" value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>
						<div class="row experiencias-profissionais">
						</div>
					</div>
					<div class="col-12 clear">
						<div class="form-group">
							<input class="submit" type="submit" value="Enviar Currículo">
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</form>
			<?php elseif($envio): ?>
			<div class="col-12 clear">
				<div class="form-group">
					<p class="wpcf7-mail-sent-ok">Recebemos o seu currículo, obrigado!</p>
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
	<script>
		var expNum = 0;
		var expShow = 0;
		$( "#experiencia" ).change( function () {
			expNum = $( this ).val();
			if ( expShow > expNum ) {
				var cnt = expShow;
				while ( expShow > expNum ) {
					$( ".experiencias-profissionais div.experiencia-" + cnt ).remove();
					cnt--;
					expShow = cnt;
				}
			}
			if ( expShow < expNum ) {
				var cnt = expShow + 1;
				while ( expShow < expNum ) {
					$( ".experiencias-profissionais" ).append( '<div class="col-12 col-lg-6 experiencia experiencia-' + cnt + '"><div class="row"><div class="col-12"><div class="clear bar"></div></div></div><label for="qualificacao">Experiência ' + cnt + '</label><div class="form-group"><label for="empresa-' + cnt + '">Nome da Empresa</label><input class="form-control" type="text" name="empresa-' + cnt + '" /></div><div class="form-group"><label for="cidade-' + cnt + '">Cidade</label><input class="form-control" type="text" name="cidade-' + cnt + '" /></div><div class="form-group"><label for="cargo-' + cnt + '">Cargo</label><input class="form-control" type="text" name="cargo-' + cnt + '" /></div><div class="form-group"><label for="periodo-' + cnt + '">Período Trabalhado</label><select class="form-control" name="periodo-' + cnt + '" required><option value="">---selecione---</option><option value="3">Até 3 Meses</option><option value="6">De 3 a 6 Meses</option><option value="12">De 6 Meses a 1 Ano</option><option value="36">De 1 Ano a 3 Anos</option><option value="96">De 3 Anos a 8 Anos</option><option value="97">Mais de 8 Anos</option></select></div></div>' );
					expShow = cnt;
					cnt++;
				}
			}
		} );
	</script>