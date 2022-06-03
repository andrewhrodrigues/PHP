<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

if(strlen($_POST['email']) == 0){

    echo "Prencha seu e-mail";

}else if(strlen($_POST['senha']) == 0){
echo "Prencha seu e-mail";
}else{
$email = $mysqli->real_escape_string($_POST['email']);
$senha = $mysqli->real_escape_string($_POST['senha']);

$sql_code = "SELECT * FROM usuarios where email = '$email' AND senha = '$senha'";

$sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL: " . $mysqli->error);

$quantidade = $sql_query->num_rows;

if($quantidade == 1){

    $usuario = $sql_query->fetch_assoc();

    if(!isset($_SESSION)){
        session_start();

    }

    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];

    header("Location: menu_opcoes.html");

} else {

        echo "Falha ao logar! E-mail ou senha incorretos";

    }
}
}


?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <title>Sistema</title>
   
</head>

<body>
            <form action=" " method="POST">
                <label for="user">Usuário:</label>
                <input type="user" name="email" id="user" placeholder="Digite seu Usuário" autocomplete="off">
                <label for="password">Senha:</label>
                <input type="password" name="senha" id="senha" placeholder="Digite sua Senha">
                <a href="#" id="forgot-pass">Esqueceu sua senha?</a>
                <input type="submit" value="Acessar">
            </form>
        </div>
    </main>
</body>

</html>