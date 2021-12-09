<pre>
<?php
require_once('chat-conexao.php');

var_dump($pdo);
$sql = $pdo->query("SELECT * FROM tbchat");
var_dump($sql);

if($sql === false) {
    echo "Criando tabela\n";
    $pdo->query("CREATE TABLE tbchat (
        id INT NOT NULL AUTO_INCREMENT,
        nome VARCHAR(255) NOT NULL,
        mensagem VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    )");
    $sql = $pdo->query("SELECT * FROM tbchat");
    var_dump($sql);
}

?>
</pre>
