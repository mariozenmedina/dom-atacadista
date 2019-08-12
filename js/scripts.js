/*SCRIPTS HERE*/
$(document).ready(function(e) {
	/******************* MENU ********************/
	$("#menu a.open").click(function(){
		$("#menu a.open i").toggleClass('hidden');
		$("#menu ul.menu").finish().slideToggle();
		$("body,html").toggleClass('ovf-hidden');
	});
	/******************* CAPA ********************/
	var cpT = $("#capa .item.mobile").length;
	var cpA = 1;
	var cpI = setInterval(function(){
		cpA = cpA >= cpT ? 1 : cpA+1;
		$("#capa .item").removeClass('active');
		$("#capa .item-"+cpA).addClass('active');
		$("#capa ul.controle li a").removeClass('active');
		$("#capa ul.controle li a.ctr-"+cpA).addClass('active');
	}, 4000);
	$("#capa ul.controle li a").click(function(){
		clearInterval(cpI);
		cpA = $(this).attr('data-num');
		$("#capa .item").removeClass('active');
		$("#capa .item-"+cpA).addClass('active');
		$("#capa ul.controle li a").removeClass('active');
		$("#capa ul.controle li a.ctr-"+cpA).addClass('active');
	});
});