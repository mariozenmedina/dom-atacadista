	<div class="row barra-topo" id="barra-topo">
		<div class="container">
			<form id="televendas">
				<h6>Televendas:<br><span class="uc t12 w600">(para empresas)</span></h6>
				<select class="form-control" name="lojas" id="select-lojas">
					<option value="l1">Realengo</option>
					<option value="l2">Taquara</option>
					<option value="l3">Angra dos Reis</option>
				</select>
				<p>
					<a href="tel:+552136135701"><span>(21)</span>3613-5701</a>
				</p>
				<div class="whats">
					<a href="tel:+5521972316095"><i class="fab fa-whatsapp"></i><t><span>(21)</span>97231-6095</t></a>
					<a href="tel:+5521972316096"><i class="fab fa-whatsapp"></i><t><span>(21)</span>97231-6096</t></a>
				</div>
				<script type="text/javascript">
					var lojas = {
						l1: {
							tel1: { num : "tel:+552136135701", text : "<span>(21)</span>3613-5701" },
							tel2: { num : "tel:+5521972316095", text : "<span>(21)</span>97231-6095" },
							tel3: { num : "tel:+5521972316096", text : "<span>(21)</span>97231-6096" },
						},
						l2: {
							tel1: { num : "tel:+552163540721", text : "<span>(21)</span>6354-0721" },
							tel2: { num : "tel:+5521996241322", text : "<span>(21)</span>98765-4322" },
							tel3: { num : "tel:+5521987654323", text : "<span>(21)</span>98765-4323" },
						},
						l3: {
							tel1: { num : "tel:+552185232431", text : "<span>(21)</span>8523-2431" },
							tel2: { num : "tel:+5521963857193", text : "<span>(21)</span>98765-4332" },
							tel3: { num : "tel:+5521986308333", text : "<span>(21)</span>98765-4333" },
						},
					};
					$("#select-lojas").change(function(){
						var loj = $(this).val();
						$("#televendas p>a").attr('href', lojas[loj].tel1.num).html( lojas[loj].tel1.text );
						$("#televendas .whats a:nth-child(1)").attr('href',lojas[loj].tel2.num).find("t").html( lojas[loj].tel2.text );
						$("#televendas .whats a:nth-child(2)").attr('href',lojas[loj].tel3.num).find("t").html( lojas[loj].tel3.text );
					});
				</script>
			</form>
			<ul class="menu ms">
				<li class="ms-fb"><a href="http://facebook.com" target="_blank">Facebook</a></li>
				<li class="ms-tw"><a href="http://twitter.com" target="_blank">Twitter</a></li>
				<li class="ms-ins"><a href="http://instagram.com" target="_blank">Instagram</a></li>
				<li class="ms-yt"><a href="http://youtube.com" target="_blank">Youtube</a></li>
			</ul>
		</div>
	</div>