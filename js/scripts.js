$(document).ready(function() {

    $('#email').click(function() {
        if ($(this).val() == "name@example.com") {
            $(this).val('');
        }
    });

    $('#senha').click(function() {
        if ($(this).val() == "senha") {
            $(this).val('');
        }
    });

    $('#botaoLogar').click(function() {

        if ($('#email').val() == '' || $('#email').val() == "name@example.com") {
            $('#mensagem').html("Email inválido");
            $('#mensagem').fadeIn(300).delay(2000).fadeOut(400);
        } 
        else if ($('#senha').val() == '' || $('#senha').val() == "senha") {
            $('#mensagem').html("Senha inválida");
            $('#mensagem').fadeIn(300).delay(2000).fadeOut(400);
        } 
        else {
            var em = $('#email').val();
            var sen = $('#senha').val();

            $.ajax({
                url: 'pesquisaUsuario.php',
                type: 'POST',
                data: { email: em, senha: sen },

                success: function(response) {
                    response = response.trim();

                    if (response !== "erro") {
                        $('#mensagem').html("Você será redirecionado");
                        $('#mensagem').fadeIn(300).delay(2000).fadeOut(400);

                        var dados = response.split("|");
                        var id = dados[1];
                        var nome = dados[0];
                        var tipo = dados[2];

                       // window.location.href = "principal.php?id=" + id + "&nome=" + nome + "&tipo=" + tipo;
                       window.location.href = "principal.php?id="+id;
                    } else {
                        $('#mensagem').html("Usuário não encontrado");
                        $('#mensagem').fadeIn(300).delay(2000).fadeOut(300);
                    }
                },

                error: function(xhr, status, error) {
                    console.log("Erro na requisição:", error);
                }
            });
        }
    });
});
