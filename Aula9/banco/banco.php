<?php

$servidor= "mysql:host=localhost;dbname=curso";
$usuario="root";
$senha="4linux";
echo "<pre>";
try{
    $client = new PDO($servidor,$usuario,$senha);

    //Definindo o modo de erro da clase PDO
    $client->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $client->beginTransaction();
    $client->exec('DELETE FROM alunos');
    $client->rollBack();
    $statement = $client->prepare('SELECT * FROM alunos where nome like :nome');
    $nome = 'Pedro';
    $statement->bindParam(':nome',$nome);

    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS);
    var_dump($result);
    $client->commit();

    // // instruções de consulta
    // foreach($client->query('SELECT * FROM alunos') as $aluno)
    // {   //print_r para imprimir o array resultante
    //     print_r($aluno);
    //     echo "<br>";
    //     //Ou posso acessar o indice
    //     echo $aluno[0];
    //     echo "<br>";

    // }
    //Instruções de modificação
    //  echo $client->exec("INSERT INTO alunos (nome,sobrenome,email) VALUES ('Daniel','Goncalves','daniel.gonçalves@4linux.com.br')");

    //  echo $client->exec('delete from usuarios where nome = "Daniel"');

} catch(PDOException $e){
    echo "Erro com o Banco de dados: {$e}";
    $client->rollBack();
} catch(Exception $e){
    echo $e;
} finally {
    unset($client);
}