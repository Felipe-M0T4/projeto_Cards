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
</head>

<body>

  <?php
  //echo var_dump($_POST);

  $nomeservidor = "localhost";
  $nomeusuario = "root";
  $senha = "";
  $bancodados = "felipe_instagram";


  $conexao = new mysqli($nomeservidor, $nomeusuario, $senha, $bancodados);
  if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
  }

  $usuario = $_POST["email"];
  $sql = "select * from usuario where EMAIL = $usuario and SENHA = $senha";
  //echo $sql;
  $senhaInput = $_POST["senha"];

  $resposta = $conexao->query("select * from usuario where EMAIL = '$usuario' and SENHA = '$senhaInput'");

  if ($resposta) {
    if ($resposta->num_rows > 0) {
      header("Location: ./Explorar.php");
      while ($row = $resposta->fetch_assoc()) {
        echo "ID: " . $row["ID"] . " - Nome: " . $row["NOME"] . "<br>";
      }
    } else {

  ?>

      <div class="login-container">
        <img src="c:\xampp\htdocs\projeto_Cards\outros\imagens\Instagram_files\E7m8ZCMOFDS.png">

        <form action="./Login.php" method="POST">
          <div class="input-group">
            <label for="email">E-mail</label>
            <input name="email" type="email" id="email" placeholder="seu@email.com" required>
          </div>

          <div class="input-group">
            <label for="senha">Senha</label>
            <input name="senha" type="password" id="senha" placeholder="••••••••" required>
            <a href="#" class="forgot-password">Esqueceu a senha?</a>
          </div>

      <?php
      echo '<p style="color:red">email ou senha incorretos</p>';
    }
    $resposta->free();
  } else {
    echo "Erro na pesquisa: " . $conexao->error;
  }

  $conexao->close();
      ?>

      <button type="submit" class="btn-primary">Entrar</button>
        </form>

        <button class="btn-social btn-instagram">
          <i class="fab fa-instagram">Entrar com Instagram</i>
        </button>

        <button class="btn-social btn-facebook">
          <i class="fab fa-facebook-f">Entrar com Facebook</i>
        </button>

        <div class="footer-text">
          Não compartilhamos nada sem sua permissão.

          <body>
            <div class="conteiner-fluid login">


          </body>

</html>

<script>

</script>