<?php

$servidor = 'mysql:host=localhost;dbname=curso';
$usuario = 'root';
$senha = '4linux';

echo "<pre>";
try{
    $conexao = new PDO($servidor,$usuario,$senha);

    foreach($conexao->query("SELECT * FROM alunos") as $row)
    {
        print_r($row['nome']);
        echo "<br>";
    }

    // echo $conexao->exec("DELETE FROM alunos WHERE id = '6'");
    // echo $conexao->exec('UPDATE alunos set nome = "Pedro" where id = "7"');
    // echo $conexao->exec('INSERT INTO alunos (nome,sobrenome,email) VALUES ("Rodolfo", "Soares","rodolfo.soares@4linux.com.br")');
} catch (PDOException $e) {
    echo $e;
    die();
} catch (Exception $e){
    echo $e;
    die();
}finally{
    unset($conexao);
}

