<?php

    //Variavel que guardará o nome do servidor
    $servidor = "localhost";

    //Variavel que guardará o nome do usuario
    $usuario = "root";

    //Variavel que guardará a senha de entrada no Banco de Dados
    $senha = "1234";

    //Variavel que tem terá o nome do Banco de Dados
    //Sem o Banco de Dados existir, apenas o nome que desejar
    $nomebd = "a";

    //Criando a conexão
    $conexao = new mysqli($servidor, $usuario, $senha);

    // Checando a conexão
    if ($conexao->connect_errno) {
    echo "<h1>Erro</h1>";
    } else {

            //Ixibindo na tela a frase abaixo, se o else for executado
            echo "Conexão efetuada com sucesso";
            echo "<br>";


            //Variavel que armazena um codigo de criação do Banco de Dados
            $bd = "CREATE DATABASE if NOT EXISTS $nomebd";

            //A função mysqli_query(), identifica a conexão com o Banco de Dados
            //E logo após a consulta SQL da $bd 
            mysql_query($conexao,$bd);
            echo 'Banco de dados criado com sucesso';
            echo "<br>";
            
            //Selecionando o Banco de Dados atraves da função mysqli_select_db()
            mysql_select_db($conexao,$nomebd);
            echo 'Banco de dados ' . $nomebd . ' selecionado';

            //Variavel que armazena um codigo de criação da tabela no Banco de Dados
            $tabela = "create table if not exists usuarios(
                id int not null auto_increment primary key,
                nome varchar(50) not null,
                email varchar(50) not null,
                foto varchar(100) not null
                ) ENGINE = MYISAM";

            //A função mysqli_query(), identifica a conexão com o Banco de Dados
            //E logo após a consulta SQL da $tabela
            mysql_query($conexao,$tabela);

            }
            
?>