$(document).ready(function() {
    $.ajax({
        url: '../PDO/BD_user.php',
        type: 'GET',
        dataType: 'json',
        success: function(usuarios) {
            console.log(usuarios)
            const tbody = $('#usuariosTable tbody');
            
            usuarios.forEach(function(usuario) {
                const row = $('<tr></tr>');
                
                const idCell = $('<td></td>').text(usuario.id);
                row.append(idCell);

                const nomeCell = $('<td></td>').text(usuario.user_nome);
                row.append(nomeCell);

                const emailCell = $('<td></td>').text(usuario.user_email);
                row.append(emailCell);

                tbody.append(row);
            });
        },
        error: function(xhr, status, error) {
            console.error('Erro na requisição AJAX:', status, error);
        }
    });
});