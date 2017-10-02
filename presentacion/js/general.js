jQuery(document).ready(function() {
	jQuery('#slider-home').carousel({
	  interval: 6000,
	  pause: "hover"
	})
});
	
	function Mostrar(){
		document.getElementById("tel2").style.display = "block";
	}

	function Ocultar(){
		document.getElementById("tel2").style.display = "none";
	}

	function Mostrar_ocultar (){
		var tel2 = document.getElementById("tel2");

		if(tel2.style.display == "none"){
			Mostrar();
			document.getElementById("boton").value = "Agregar";
		}else{
			Ocultar();
			document.getElementById("boton").value = "Cancelar";
		}
	}

	$(window).scroll(function(){
    if ($(this).scrollTop() > 100)
        $('.scrolltop').fadeIn();
    else
        $('.scrolltop').fadeOut();
});

$(document).ready(function(){
    $('.scrolltop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
})