<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogUp Insta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
    
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

    .logup-container {
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

  <div class="Logup-container">
    <img src="c:\xampp\htdocs\projeto_Cards\outros\imagens\Instagram_files\E7m8ZCMOFDS.png">

    <form>
      <div class="input-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="email ou número de telefone" required>
      </div>

      <div class="input-group">
        <label for="senha">Senha</label>
        <input type="password" id="senha" placeholder="digite sua senha..." required>
      </div>

      <div class="input-group">
        <label for="name">Nome</label>
        <input type="name" id="name" placeholder="nome completo" required>
      </div>

      <div class="input-group">
        <label for="email">ID</label>
        <input type="id" id="id" placeholder="ID do usuário" required>
      </div>

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

</div></div>
<body>


</body>
</html>