/******************************************************************************************************/
$('.data').mask('99-99-9999');
$('.mesnao').mask('99/99');
$('.cartaocredito').mask('9999-9999-9999-9999');
$('.celular').mask('(99)99999-9999');
$('.fixo').mask('(99)9999-9999');
$('.cep').mask('99999-999');
$('.cnpj').mask('99.999.999/9999-99');
$('.cpf2').mask('999.999.999-99');
$('.hora').mask('99:99');
$('.ip').mask('999.999.999.999');
$('.real').maskMoney({ symbol: "R$", decimal: ",", thousands: "." });

//tipo pessoa
$(function(){
    $('#tipodepessoa').on('change', function() {
        var valor = ($(this).val());
        if(valor == 'Física'){
            $('.fisica').show();
            $('.juridica').hide().removeAttr('required', true);
        }else{
            $('.fisica').hide().removeAttr('required', true);
            $('.juridica').show();
        }
    }).trigger('change');
});
