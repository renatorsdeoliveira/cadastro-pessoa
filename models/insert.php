<?php
    session_start();
    require_once('banco.php');

    if(!empty($_POST["nome"])){
        $nome = $_POST["nome"];
    }
    if(!empty($_POST["cpf"])){
        $cpf = $_POST["cpf"];
    }
    if(!empty($_POST["telefone"])){
        $telefone = $_POST["telefone"];
    }
    if(!empty($_POST["tipo"])){
        $tipo = $_POST["tipo"];
    }

    $bd = new Banco();
    $link = $bd->conecta();

    $sql =  "INSERT INTO pessoas(nome, cpf, data_atualizacao ) VALUES('$nome', '$cpf', NOW())";

    mysqli_query($link, $sql);

    //selecionando o ultimo id da tabela pessoas
    $id = "SELECT id, nome FROM pessoas ORDER BY id DESC";

    $ultimo_id = mysqli_query($link, $id);
    $resultado_id =  mysqli_num_rows($ultimo_id);

    //inserindo via o último id da tabela pessoas
    foreach($telefone as $i => $telefones){

        $sql =  "INSERT INTO telefones(telefone, tipo, id_pessoa ) VALUES('$telefones', '$tipo[$i]', $resultado_id)";
        $insetPessoas = mysqli_query($link, $sql);
        var_dump( $insetPessoas);
    
    }


    if(  $ultimo_id && $insetPessoas == true){
        $_SESSION['msg'] = "<p style='color:green;font-size: 18px;'> Usuario cadastrado com sucesso</p>";
        header('Location: http://localhost/cadastro-pessoa/');
    }else{
        $_SESSION['msg'] = "<p style='color:red;font-size: 18px;'>Usuario não cadastrado</p>";
        header('Location: http://localhost/cadastro-pessoa/');
    }


?>