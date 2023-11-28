<?php
//Conectar ao banco de dados:
    $conexao = mysqli_connect('localhost', 'root', '', 'escola');
//Verificar a conexão:
    if(!$conexao){
        die("Falha na conexão: " . mysqli_connect_error());
    }
    else{
        //echo "Conexão realizada com sucesso";
    }
//Pesquisar no banco de dados se o usuário e senha conferem:
$login = "SELECT * FROM login_leandro_info2b WHERE usuario = '$_GET[usuario]' and senha = '$_GET[senha]'";
//Query para pesquisar no banco de dados o usuário e senha digitados:
$query = mysqli_query($conexao, $login);
//Contar o número de linhas que o usuário e senha digitados aparecem:
$linhas = mysqli_num_rows($query);
    //Se não aparece em nenhuma linha, exibir mensagem de erro:
    if($linhas == 0){
        echo 
            "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Login%20conectado%20ao%20banco%20de%20dados%20-%20Leandro,%20Info%202B/Formul%c3%a1rios%20de%20cadastro%20e%20login.php'>
            <script type='text/javascript'>
            alert('Usuário e/ou senha incorretos.');
            </script>
            ";    
    }
    //Se aparecer em alguma linha, mostrar mensagem de usuário conectado:
    else{
        echo 
            "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Login%20conectado%20ao%20banco%20de%20dados%20-%20Leandro,%20Info%202B/Formul%c3%a1rios%20de%20cadastro%20e%20login.php'>
            <script type='text/javascript'>
            alert('Usuário logado com sucesso.');
            </script>
            ";    
    }
//Encerrar conexão ao banco de dados:
    $conexao->close();
?>