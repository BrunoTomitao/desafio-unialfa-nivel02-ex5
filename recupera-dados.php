<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$hobbie = $_POST['hobbie'];

if (strlen($nome) < 6) {
    die("Erro: O nome precisa ter no mínimo 6 caracteres.");
}

if ($idade < 18) {
    die("Erro: A idade precisa ser maior que 18.");
}

echo "Nome: $nome<br>";
echo "Email: $email<br>";
echo "Idade: $idade<br>";
echo "Hobbie: $hobbie<br>";
?>
