<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://images.openai.com/thumbnails/22d32ad86aa5edb78c175b6d3eae03b0.jpeg" type="image/x-icon">
  <title>Login Instagram</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .instagram-logo {
      font-family: 'San Francisco';
      font-size: 48px;
    }

    .login-container {
      background: white;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
      text-align: center;
      width: 100%;
      max-width: 360px;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-bottom: 30px;
    }

    .input-group {
      text-align: left;
      margin-bottom: 15px;
    }

    .input-group label {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
      color: #444;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .forgot-password {
      display: block;
      text-align: right;
      font-size: 12px;
      margin-top: 5px;
      margin-bottom: 20px;
      color: #1877F2;
      text-decoration: none;
    }

    .forgot-password:hover {
      text-decoration: underline;
    }

    .btn-primary {
      width: 100%;
      padding: 12px;
      background-color: #1877F2;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      margin-bottom: 15px;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn-primary:hover {
      background-color: #165ecb;
      transform: scale(1.02);
    }

    .btn-social {
      width: 100%;
      padding: 10px;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 10px;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn-instagram {
      background-color: #e1306c;
    }

    .btn-facebook {
      background-color: #4267B2;
    }

    .btn-social i {
      margin-right: 8px;
      font-size: 1.2em;
    }

    .btn-social:hover {
      transform: scale(1.02);
      opacity: 0.95;
    }

    .footer-text {
      margin-top: 20px;
      font-size: 12px;
      color: #666;
    }

    @media (max-width: 400px) {
      .login-container {
        padding: 30px 20px;
      }
    }
  </style>


<?php
//echo var_dump(value: $_POST);
if($_POST){
$email_post = $_POST["email"];
$senha_post = $_POST["senha"];

//echo  var_dump($_POST);

if(str_contains("$email_post","'") || str_contains($email_post, "'" )){
  echo"<script> alert('Não digite " . "\'"." nos campos!') </script>";
} 
else{

$nomedoservidor = "localhost";
$nomedousuario = "root";
$senha = "";
$bancodedados = "felipe_instagram";
$conexao = new mysqli(hostname: $nomedoservidor, username:$nomedousuario, password: $senha, database: $bancodedados);
if ($conexao->connect_error){
    die("conexão falhou: ". $conexao->connect_error);
}
    $sql="
select * from usuario where email='$email_post' AND senha='$senha_post'
    ";
    
$resposta = $conexao->query(query: $sql);
if($resposta){
  while($linha = $resposta->fetch_assoc()){
     //echo var_dump(value: $linha);
     $nome = $linha['Nome'];
     $id = $linh['ID'];
     echo "<script>localStorage.setItem('UsuarioLogadoNome','$nome')</script>";
     echo "<script>localStorage.setItem('UsuarioLogadoID','$id')</script>";
    //  header(header: 'Location: ./PHP/Explorar.php');
  }
}

//echo "Conexão estabelecida";
$conexao->close();
}}?>

</head>
<body>

  <div class="login-container">
    <img src="c:\xampp\htdocs\projeto_Cards\outros\imagens\Instagram_files\E7m8ZCMOFDS.png">

    <form action="./index.php" method="POST">
      <div class="input-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="seu@email.com" name="email" required>
      </div>

      <div class="input-group">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="••••••••" required>
        <a href="#" class="forgot-password">Esqueceu a senha?</a>
      </div>

      <button type="submit" class="btn-primary">Entrar</button>
    </form >

    <button class="btn-social btn-instagram">
      <i class="fab fa-instagram"><a href="https://www.instagram.com/">Entrar com Instagram</a></i>
    </button>

    <button class="btn-social btn-facebook">
      <i class="fab fa-facebook-f"><a href="https://www.facebook.com/?locale=pt_BR">Entrar com Facebook</a></i>
    </button>

    <div class="footer-text">
      Não compartilhamos nada sem sua permissão.
<body style=background-color: black>
    <div class="conteiner-fluid login">

     <img src="./img/instagram.png" class="figure-img img-fluid">
        
  </div>

</body>
</html>

<script>
    
</script>