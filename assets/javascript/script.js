$(document).ready(function() {
    $('.telefone-contato').inputmask({mask: ['(99) 9999-9999', '(99) 99999-9999']});
    $('#cpf').inputmask({mask: ['999.999.999-99']});

        $.ajax({
            type:'post',		
            dataType: 'json',	
            url: 'models/listagem.php',
            success: function(dados){
                console.log('ew');
                for(var i=0;dados.length>i;i++){
                    $('#tabela').append('<tr><td class="align-middle">'+dados[i].nome+'</td><td class="align-middle">'+dados[i].cpf+'</td><td class="align-middle"> '+dados[i].telefone+'</td></tr>');
                }
            }
        });

});
