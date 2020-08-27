$(document).ready(function(){
	feather.replace();
	if (typeof eventsArray !== 'undefined' && eventsArray.length > 0) {
			
		  var settings = {
			EventClick : showEvent
		  };
		  var element = document.getElementById('caleandar');
		  caleandar(element, eventsArray, settings);
	}

	

	$('[data-toggle="tooltip"]').tooltip();

	$('.toolbar .avatar').click(function(){
		$('.avatar-info').toggleClass('active');
	});
	$('.avatar-info').mouseover(function(){
		$(this).addClass('active');
	});
	$('.avatar-info').mouseout(function(){
		$(this).removeClass('active');
	});

	$('#progreso').click(function(){
		$('.toolbar').addClass('progreso');
		$('.toolbar').removeClass('max');
		if(!$('.toolbar').hasClass('zoomcloud')){
			$('.toolbar').toggleClass('active');
		}else{
			if(!$('.toolbar').hasClass('active')){
				$('.toolbar').toggleClass('active');
			}
			$('.toolbar').removeClass('zoomcloud');
		}
	});

	
	$('#zoomcloud').click(function(){
		$('.toolbar').addClass('zoomcloud');
		$('.toolbar').removeClass('max');
		if(!$('.toolbar').hasClass('progreso') && !$('.toolbar').hasClass('profile')){
			$('.toolbar').toggleClass('active');
		}else{
			if(!$('.toolbar').hasClass('active')){
				$('.toolbar').toggleClass('active');
			}
			$('.toolbar').removeClass('progreso');
			$('.toolbar').removeClass('profile');
		}
	});

	

	$('#calendario').click(function(){
		$('.toolbar').addClass('progreso');
		$('.toolbar').toggleClass('max');
		if(!$('.toolbar').hasClass('zoomcloud') && !$('.toolbar').hasClass('profile')){
			$('.toolbar').toggleClass('active');
		}else{
			if(!$('.toolbar').hasClass('active')){
				$('.toolbar').toggleClass('active');				
			}
			$('.toolbar').removeClass('zoomcloud');
			$('.toolbar').removeClass('profile');
		}
	});

	$('.calendario').click(function(){
		$('.toolbar').addClass('progreso');
		$('.toolbar').toggleClass('max');
		if(!$('.toolbar').hasClass('zoomcloud') && !$('.toolbar').hasClass('profile')){
			$('.toolbar').toggleClass('active');
		}else{
			if(!$('.toolbar').hasClass('active')){
				$('.toolbar').toggleClass('active');				
			}
			$('.toolbar').removeClass('zoomcloud');
			$('.toolbar').removeClass('profile');
		}
	});

	



	$('#configuracion').click(function(){
		$('.toolbar').addClass('profile');
		if(!$('.toolbar').hasClass('zoomcloud') && !$('.toolbar').hasClass('progreso')){
			$('.toolbar').toggleClass('active');
		}else{
			if(!$('.toolbar').hasClass('active')){
				$('.toolbar').toggleClass('active');				
			}
			$('.toolbar').removeClass('zoomcloud');
			$('.toolbar').removeClass('progreso');
		}
	});
	
	///Botones de cursos
	$('#unidades .btn').click(function(){
		var un = $(this).parent().data("u");
		$('.unlessons').removeClass('active');
		$('#u'+un).addClass('active');
		$('.breadcrumb').html('<strong>Curso </strong> > Unidad '+un);
	});
	$('.unlessons .card').click(function(){
		var un = $(this).data("u");
		var le = $(this).data("l");
		$('.breadcrumb').html('<strong>Curso </strong> > Unidad '+un+' > Lección '+le);
		$('#unidades').removeClass('active');
		$('.unlessons').removeClass('active');
		$('#ul'+un+le).addClass('active');
	});
	$('.ipless .close').click(function(){
		var un = $(this).data("u");
		$('.breadcrumb').html('<strong>Curso </strong> > Unidad '+un);
		$('#unidades').addClass('active');
		$('#u'+un).addClass('active');
		$('.ipless').removeClass('active');
	});
	

	$('#categorias .categoria').click(function(){
		$('#categorias .categoria').removeClass('active');
		$(this).addClass('active');
		$('.breadcrumb').html('<strong>Recursos </strong> > '+$(this).attr('data-category'));
		$('#topicos').addClass('active');
		$('#topicos .topico').removeClass('active');
		$('#topicos .topico[data-category="'+$(this).attr('data-category')+'"]').addClass('active');
	});
	$('#topicos .topico').click(function(){
		var detalle = $(this).data('info');
		$('.breadcrumb').html('<strong>Recursos </strong> > '+$(this).attr('data-category')+' > '+$(this).attr('data-topic')+'');
		$('#categorias').removeClass('active');
		$('#topicos').removeClass('active');
		$('#info'+detalle).addClass('active');
	});
	$('.detalle_topico .close').click(function(){
		$('.breadcrumb').html('<strong>Recursos </strong>');
		$('#categorias').addClass('active');
		$('#topicos').addClass('active');
		$('.detalle_topico').removeClass('active');
	});

	var progressBarOptions = {
		startAngle: -1.55,
		size: 120,
		value: $('#progress_circle_value').val()/100,
		fill: {
			color: '#0776a8'
		}
	}
	
	$('.circle').circleProgress(progressBarOptions).on('circle-animation-progress', function(event, progress, stepValue) {
		//$(this).find('strong').text(String(stepValue.toFixed(2)).substr(1));
	});
	if($(".horas").length){
		// $(".horas").countdown("2020/04/15 20:00:00", function(event) {
		//     $(this).text(
		//       event.strftime('%H:%M:%S')
		//     );
		//   });

		$('.horas').countdown('2020/04/16 10:20:00')
		.on('update.countdown', function(event) {
			var $this = $(this);
			$this.text(
		      event.strftime('%H:%M:%S')
		    );
		})
		.on('finish.countdown', function(event) {
			var $this = $(this);
			$this.text(
		      event.strftime('%H:%M:%S')
		    );
		  	$('.btn-unirse').removeClass('disabled').html('Unirse');
		});

	}
	
});

function showEvent(ev, el){
	$('.cld-day').removeClass('selected');
	$(el).addClass('selected');
	if(ev==undefined){ 
		$('.events-list .event').removeClass('active');
		$('.events-new').addClass('active');
	}else{
		$('.events-new').removeClass('active');
		$('.events-list .event').removeClass('active');
		$('.events-list .event[data-date="'+ev+'"]').addClass('active');
	}
	
}


function convertToPath(str){
	str=str.replace(/"/g,'_');
	var tofind = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ;,%'\"°!$";
	var replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn________";
	
	tofind = tofind.split('');
	replac = replac.split('');
	for(var i=0 ; i < tofind.length ; i++){
		str=str.replace(new RegExp(tofind[i],'g'),replac[i]);
	}
	str = str.toLowerCase().split(".");
	str = str.join("_");
	str = str.toLowerCase().split(" ");
	str = str.join("-");

	return str;
}	


var pago = document.querySelector('.pagos')
var select = document.querySelector('#nivel.option')

if(select == "Seleccionar Nivel"){
	pago.classList.addClass('d-none')
}