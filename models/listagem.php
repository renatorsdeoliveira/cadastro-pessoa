<?php

    require_once('banco.php');
    
    $bd = new Banco();
    $link = $bd->conecta();


    //Listar usuarios na tela
    $sql = "SELECT p.nome, p.cpf, GROUP_CONCAT(t.telefone, ' - ',t.tipo SEPARATOR ' <br>' )  AS telefone
    FROM pessoas AS p
    INNER JOIN telefones AS t 
    ON p.id =  t.id_pessoa
    GROUP BY p.id
    ORDER BY p.id DESC;";

    $resultado_id = mysqli_query($link, $sql);
  //var_dump($resultado_id);

    //Consultando banco de dados
    while($resultado = mysqli_fetch_assoc($resultado_id)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    

    //Passando vetor em forma de json
    echo  json_encode($vetor);

    
  


?>