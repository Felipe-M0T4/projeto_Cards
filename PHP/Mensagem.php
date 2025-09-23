<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mensagens - Instagram</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fafafa;
      color: #262626;
    }
 
    .Instah1 {
            font-family: 'Brush Script MT', cursive;
            font-size: 36px;
            color: #e1306c;
        }

    .container {
      display: flex;
      height: 100vh;
    }

    .sidebar h2 {
      margin: 0;
      padding: 20px;
      font-size: 24px;
      border-bottom: 1px solid #dbdbdb;
    }

    .chat-list {
      flex: 1;
      overflow-y: auto;
    }

    .chat {
      display: flex;
      align-items: center;
      padding: 15px 20px;
      cursor: pointer;
      transition: background 0.2s;
    }

    .chat:hover {
      background-color: #f0f0f0;
    }

    .chat img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 15px;
    }

    .chat .chat-info {
      flex: 1;
    }

    .chat .chat-info strong {
      display: block;
      font-size: 16px;
    }

    .chat .chat-info span {
      color: #888;
      font-size: 14px;
    }

    .messages {
      flex: 1;
      display: flex;
      flex-direction: column;
      background-color: #fff;
    }

    .messages-header {
      padding: 20px;
      border-bottom: 1px solid #dbdbdb;
      font-weight: bold;
      font-size: 18px;
    }

    .messages-body {
      flex: 1;
      padding: 20px;
      overflow-y: auto;
    }

    .message {
      margin-bottom: 15px;
      max-width: 60%;
      padding: 10px 15px;
      border-radius: 20px;
      font-size: 15px;
    }

    .received {
      background-color: #efefef;
      align-self: flex-start;
    }

    .sent {
      background-color: #3797f0;
      color: white;
      align-self: flex-end;
    }

    .message-input {
      border-top: 1px solid #dbdbdb;
      padding: 15px 20px;
    }

    .message-input input {
      width: 80%;
      padding: 10px 15px;
      font-size: 14px;
      border: 1px solid #dbdbdb;
      border-radius: 20px;
    }

     .sidebar a {
                display: block;
                padding: 10px;
                margin-bottom: 10px;
                text-decoration: none;
                color: #333;
                border-radius: 8px;
                transition: background 0.3s;
           }

                .sidebar a:hover {
                    background-color: #f0f0f0;
                    color: #e1306c;
                }
  </style>
</head>
<body>
  <div class="container-fluid row" style="height: 100vh">
     <div class="sidebar col-2" style="background-color: #fdfdfd">
     
   <h1 class="Instah1" style="padding-left: 30px; padding-top: 20px">Instagram</h1>
        
             <div class="sidebar">
       
        <a href="./Login.php"><i class="bi bi-house"></i> Página Inicial</a>
        
        <a href="./Explorar.php">Explorar</a>
        
        <a href="./Mensagem.php"><i class="bi bi-chat"></i> Mensagens</a>
        
        <a href="MeuPerfil.php"><i class="bi bi-person"></i> Perfil</a>

        <button style="
                display: block;
                padding: 10px;
                margin-bottom: 10px;
                text-decoration: none;
                color: #333;
                border-radius: 8px;
                border: none;
                background-color: #fbfbfbff;
                transition: background 0.3s;" data-bs-toggle="modal" data-bs-target="#criarPostModal"><i class="bi bi-plus-circle"> Criar Post</i></button>

    </div>
    </div>
    <div class="sidebar col-2" style="background-color:rgb(255, 254, 254);  border-right: solid 1px #e7e6e6;  border-left: solid 1px #e7e6e6;">
    
            <h5 style="padding-left: 10px; padding-top: 30px">Mensagens</h5>

      <div class="chat-list">

        <div class="chat">
          <img src="https://img.freepik.com/fotos-gratis/retrato-de-homem-branco-isolado_53876-40306.jpg?semt=ais_hybrid&w=740" style="border-radius: 50%; width: 40px; height: 40px;"></img>
          <div class="chat-info">
            <strong>salomao_reis</strong> 
            <span>Tudo ótimo por aqui 😄</span>
          </div>
        </div>
        <div class="chat">
        
        
          <img src="https://imagens.ne10.uol.com.br/veiculos/_midias/webp/2024/06/26/imagem_ilustrativa_de_pessoa_atraente-27352370.webp?20240818083335" style="border-radius: 50%; width: 40px; height: 40px;"></img>
          <div class="chat-info">
            <strong>maria_silva</strong>
            <span>Vamos sair amanhã?</span>
          </div>
        </div>
        <!-- Adicione mais contatos conforme necessário -->
      </div>
    </div>

    <div class="messages col-8">
      <div class="messages-header">
        salomao_reis
        <p style="font-size: 10px; color: #dedcdc; ">bate papo</p>
      </div>
      <div class="messages-body">
        <div class="message received">Oi! Como você está?</div>
        <div class="message sent">Estou bem, e você?</div>
        <div class="message received">Tudo ótimo por aqui 😄</div>
      </div>

      <div class="message-input">
        
        <input type="text" placeholder="Enviar uma mensagem..."/>
        <button id="send_btn">
            <i class="bi bi-send"></i>
        </button>
        <button id="call_btn">
            <i class="bi bi-telephone"></i>
        </button>
        <button id="photo_btn">
            <i class="bi bi-camera"></i>

            
        </button>
      </div>
    </div>
    
    </div>

<div class="modal fade" id="criarPostModal" tabindex="-1" aria-labelledby="criarPostModalLabel" aria-hidden="true">

   <div class="modal-dialog modal-dialog-centered">

     <div class="modal-content">

     <div class="modal-header">
        <h5 class="modal-title" id="criarPostModal">
          <i class="bi bi-camera"></i>
          Criar Novo Post
        </h5>

        <button type="button" class="btn-clore" data-bs-dismiss="modal" arialabel="Fechar"></button>
     </div>

     <div class="modal-body">
      <form>
        <div class="modal-body"></div>

        <div class="mb-3">
          <label for="imagemPost" class="form-label">
            <i class="bi bi-image"></i>
            Selecionar Imagem
          </label>

          <input type="file" class="form-control" id="imagemPost" accept="image/*">

          <div class="form-text text-muted">
            Escolha uma imagem para seu Post (JPG, PNG, GIF)
          </div>
        </div>

        <div class="mb-3">
          <label for="legendaPost" class="form-label">
            <i class="bi bi-chat-left-text"></i>
            Legenda do Post
          </label>

          <textarea class="form-control" id="legendaPost" rows="4"
          placeholder="Escreva uma legenda para o seu post..."></textarea>

          <div class="form-text text-muted">Conte a história da sua foto! Use hashtags (#) para alcançar mais pessoas;</div>
        </div>

        <div class="mb-3">
          <label for="localizacaoPost" class="form-label">
            <i class="bi bi=geo=alt">Localização (opicional)</i>
          </label>

          <input type="text" class="form-control" id="localizacao" placeholder="Ex: São Paulo, Brasil">

          <div class="form-text text-muted">Adicione onde a foto foi tirada</div>
        </div>

      </form>
     </div>

     <div class="mb-3 d-none" id="previaImagem">
        <label class="form-label">
          <i class="bi bi-eye"></i>
          Prévia da Imagem
        </label>
     </div>

     <div class="text-center">
      <img id="imagemPrevia" src="" alt="Prévia" class="img-fluid rounded" style="max-height: 300px;">
     </div>
    

     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
        <i class="bi bi-x-circle"></i>
        Cancelar
      </button>

   <button type="button" id="btnPostSalvar" class="btn btn-primary">
        <i class="bi bi-check-circle"></i>
        Publicar Post
      </button>
     </div>
     </div>
     </div>
  </div>

</body>
</html>

<?php 

try{
  if(isset($_POST["SQLQuery"]) && $_POST["SQLQuery"] !=""){
    
  }} catch(Exception $erro){
    echo "<script>console.log($erro)";}

?>

<script defer src="./../JS/postSalvar.js"></script>