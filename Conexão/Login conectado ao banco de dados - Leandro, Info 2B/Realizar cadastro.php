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
//Determinar dados vindos do formulário de cadastro para colocar na tabela:
$usuario = $_GET['usuario'];
$senha = $_GET['senha'];
$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$data = substr($_GET['nascimento'], 8, 2) . "/" . substr($_GET['nascimento'], 5, 2) . "/" . substr($_GET['nascimento'], 0, 4);
$cor = $_GET['cor'];
$sexo = $_GET['sexo'];
$email = $_GET['email'];
$celular = $_GET['celular'];
//Verificar se o usuário já existe:
$verificacao = "SELECT * FROM login_leandro_info2b WHERE usuario = '$_GET[usuario]'";
//Query para procurar se o usuário existe no banco de dados:
$query = mysqli_query($conexao, $verificacao);
//Determinar número de linhas onde o usuário digitado aparece:
$linhas = mysqli_num_rows($query);
//Cadastrar se não aparece em nenhuma linha:
    if($linhas == 0){
        //Inserir na tabela:
        $cadastro = "INSERT INTO login_leandro_info2b(usuario, senha, nome, sobrenome, nascimento, sexo, email, celular, cor) VALUES ('$usuario','$senha', '$nome', '$sobrenome', '$data', '$sexo', '$email', '$celular', '$cor')";
        //Query para inserir na tabela:
        $registrar = mysqli_query($conexao, $cadastro);
            //Verificar um possível erro no cadastro:
                if(mysqli_affected_rows($conexao) != 0){
                    echo
                    //Exibir alerta de êxito no cadastro:
                        "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Login%20conectado%20ao%20banco%20de%20dados%20-%20Leandro,%20Info%202B/Formul%c3%a1rios%20de%20cadastro%20e%20login.php'>
                        <script type='text/javascript'>
                        alert('Usuário cadastrado com sucesso.')
                        </script>
                        ";
                }
                else{
                    echo
                    //Exibir alerta de erro no cadastro:
                    "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Login%20conectado%20ao%20banco%20de%20dados%20-%20Leandro,%20Info%202B/Formul%c3%a1rios%20de%20cadastro%20e%20login.php'>
                    <script type='text/javascript'>
                    alert('Ocorreu um erro inesperado no cadastro.');
                    </script>
                    ";    
                } 
    }
    else{
        echo 
        //Exibir alerta de que o usuário já existe se aparecer o usuário digitado em alguma linha:
            "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Login%20conectado%20ao%20banco%20de%20dados%20-%20Leandro,%20Info%202B/Formul%c3%a1rios%20de%20cadastro%20e%20login.php'>
            <script type='text/javascript'>
            alert('Esse nome de usuário já existe! Escolha outro.');
            </script>
            ";    
    }
//Encerrar conexão ao banco de dados:
    $conexao->close();
?>