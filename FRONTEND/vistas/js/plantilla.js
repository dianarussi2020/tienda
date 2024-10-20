/*PLANTILLA*/
$.ajax({
    url: "ajax/plantilla.ajax.php",
    success: function (respuesta) {
        console.log(JSON.parse(respuesta));
        let colorFondo = JSON.parse(respuesta).colorFondo;
        let colorTexto = JSON.parse(respuesta).colorTexto;
        let barraSuperior = JSON.parse(respuesta).barraSuperior;
        let textoSuperior = JSON.parse(respuesta).textoSuperior;
        $(".backColor, .backColor a").css({ "background": colorFondo, "color": colorTexto })
        $(".barraSuperior, .barraSuperior a").css({"background":barraSuperior , 
            "color":textoSuperior})
    }
})