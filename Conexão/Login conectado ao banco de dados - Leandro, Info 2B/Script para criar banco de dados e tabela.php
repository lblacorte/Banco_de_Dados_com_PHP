<?php
//Script para criar banco de dados:
//Dados de login no mysql:
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
//Fazer conexão ao mysql:
    $conexao = new mysqli($servidor, $usuario, $senha);
//Verificar conexão:
    if ($conexao->connect_error){
        die("Erro na conexão com o mysql: " . $conexao->connect_error);
    }
//Criar banco de dados 'escola', se ele não existe:
    $comando = "CREATE DATABASE IF NOT EXISTS escola";
    //Query:
    //Verificar se o banco de dados foi criado ou já existe, e exibir alerta:
        if ($conexao->query($comando) === TRUE) {
            echo "Banco de dados 'escola' criado com sucesso, ou ele já existe.";
        }
    //Exibir alerta de erro se não for criado:
        else{
            echo "Erro ao criar banco de dados: " . $conn->error;
        }
//Encerrar conexão:
    $conexao->close();

//Script para criar tabela:
//Dados de login no banco de dados:
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "escola";
//Conectar ao banco de dados:
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
//Verificar conexão:
    if ($conexao->connect_error) {
    //Exibir mensagem de erro caso não conecte ao banco:
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }
//Criar tabela no banco de dados, se ela não existir:
//Colunas para inserir na tabela:
    $comando = "CREATE TABLE IF NOT EXISTS login_leandro_info2b(
        usuario VARCHAR(15) NOT NULL,
        senha VARCHAR(10) NOT NULL,
        nome VARCHAR(20) NOT NULL,
        sobrenome VARCHAR(20) NOT NULL,
        nascimento VARCHAR(10) NOT NULL,
        sexo VARCHAR(9) NOT NULL,
        email VARCHAR(30) NOT NULL,
        celular VARCHAR(16),
        cor VARCHAR(10)
        )";
//Verificar se foi possível criar a tabela ou ela já existe, e exibir mensagem:
//Query:
    if ($conexao->query($comando) === TRUE) {
        echo "<br><br> Tabela 'login_leandro_info2b' criada com sucesso, ou ela já existe.";
    } else {
//Exibir mensagem de erro se não for possível criar a tabela:
        echo "<br><br> Erro ao criar tabela: " . $conexao->error;
    }
//Inserir meu usuário para teste na tabela:
    $cadastro = "INSERT INTO login_leandro_info2b(usuario, senha, nome, sobrenome, nascimento, sexo, email, celular, cor) VALUES ('Lacorte','Leandro123', 'Leandro', 'Lacorte', '26/04/2005', 'Masculino', 'lacorteleandro2005@gmail.com', '(55) 9 9694-9865', '#ff0000')";
//Query para inserir na tabela:
    $registrar = mysqli_query($conexao, $cadastro);
//Encerrar conexão ao banco de dados:
    $conexao->close();
?>