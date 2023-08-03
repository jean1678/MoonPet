$('#form1').on("click", function(e){
    //impede a página de ser recarregada
    e.preventDefault();
    var u_nome = $('#nome').val();
    var u_raca = $('#raca').val();
    var u_sexo = $('#sexo').val();
    var u_informacoes = $('#informacoes').val();
    var u_flImage = $('#flImage').val();
    var u_cidade = $('#cidade').val();

    console.log(u_nome, u_raca, u_sexo, u_informacoes, u_flImage, u_cidade);
    $.ajax({
        url: 'http://localhost/moonpet/php/cadAdocao.php',
        method: 'POST',
        data: {nome:u_nome, raca:u_raca, sexo:u_sexo, informacoes:u_informacoes, flImage:u_flImage, cidade:u_cidade},
        dataType: 'json'
    }).done(function(result){
        $('#nome').val('');
        $('#raca').val('');
        $('#sexo').val('');
        $('#informacoes').val('');
        $('#flImage').val('');
        $('#cidade').val('');
        console.log(result);
        getComments();
    });
});