(function($){
    $('#telefone').on('input', function(e){
        console.log('this');
        var val = $(this).val();
        val=val.replace(/D/g,"");             //Remove tudo o que não é dígito
        val=val.replace(/^(d{2})(d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        val=val.replace(/(d)(d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos

        $(this).val(val);
    });

    $('#contato').on('submit', function(){
        console.log("entrou");
        $('#send').addClass("enviando");
        $('#send').val('Enviando');
    });

    //$('#send').on('click', function(e){
        //$(this).text("Enviando");
    //});
})($);