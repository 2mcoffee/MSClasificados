<!DOCTYPE html>
<html lang="es">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">

<title>Mercados y Servicios | Clasificados de Mercedes, Lujan, San A. de Giles, Chivilcoy</title>

<!-- JQuery -->
<script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="./js/lightslider.js"></script>
<script type="text/javascript" src="./js/slippry.min.js"></script>

<!-- Fuentes de Google -->
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"> 

<!-- Hojas de Estilo -->
<link rel="stylesheet" type="text/css" href="./css/main.css" media="screen">
<link rel="stylesheet" type="text/css" href="./css/lightslider.css" media="screen">
<link rel="stylesheet" type="text/css" href="./css/slippry.css" media="screen">

<!--Funcion Banners Cabecera-->
<script type="text/javascript">
$(document).ready(function(){
	jQuery('#banners').slippry({
		captions: false,
		pager: false
	});
})
</script>

<!--Funcion Ultimos Avisos-->
<script type="text/javascript">
    $(document).ready(function() {
	$("#featured").lightSlider({
		item:5,
		keyPress:true,
		auto:true,
		loop:true,
		responsive : [
            {
                breakpoint:800,
                settings: {
                    item:2,
                    slideMove:1
                  }
            }
		]
		});
	});
</script>

<!-- Funcion Search -->
<script type="text/javascript">
$(document).ready(function() {

  $('.submit_on_enter').keydown(function(event) {
    if (event.keyCode == 13) {
        this.form.validate();
        if ($('.submit_on_enter').valid()) {
            this.form.submit();
            return false;
        }
    }
  });

});
</script>

</head>
