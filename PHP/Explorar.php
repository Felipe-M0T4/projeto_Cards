<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feed de Notícias do Instagram</title>
    <link rel="icon" href="https://images.openai.com/thumbnails/22d32ad86aa5edb78c175b6d3eae03b0.jpeg" type="image/x-icon">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <style>
          body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #fdfbfb, #ebedee);
            margin: 0;
            padding: 0;
            display: flex;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #fff;
            border-right: 1px solid #ddd;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
        }

            .sidebar h2 {
                font-family: 'Brush Script MT', cursive;
                font-size: 28px;
                color: #e1306c;
                margin-bottom: 20px;
                text-align: center;
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

        .content {
            margin-left: 240px;
            width: 100%;
            padding: 40px 20px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .topo h1 {
            font-family: 'Brush Script MT', cursive;
            font-size: 36px;
            color: #e1306c;
        }

        .post {
            border-bottom: 1px solid #eee;
            padding: 20px 0;
        }

        .perfil {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .midia {
            width: 100%;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }

            .midia:hover {
                transform: scale(1.02);
            }

        .acoes {
            margin-top: 10px;
            display: flex;
            justify-content: space-around;
        }

            .acoes button {
                border: none;
                background: none;
                font-size: 18px;
                cursor: pointer;
                transition: color 0.2s ease;
            }

                .acoes button:hover {
                    color: #e1306c;
                }

        .links {
            text-align: center;
            margin-top: 30px;
        }

            .links a {
                margin: 0 10px;
                text-decoration: none;
                color: #0095f6;
                font-weight: bold;
            }

                .links a:hover {
                    text-decoration: underline;
                }

                .curtir {
    transition: color 0.3s ease;
}
.curtido {
    transform: scale(1.2);
}

    </style>
</head>


<script>
    document.querySelectorAll('.curtir').forEach(btn) == 
        btn.addEventListener('click', () => {
            if (btn.textContent.includes('🤍')) {
                btn.innerHTML = '❤️ Curtido';
                btn.style.color = '#e1306c';
            } else {
                btn.innerHTML = '🤍 Curtir';
                btn.style.color = '';
            }
        });

btn.classList.add('curtido');
setTimeout() == ((btn.classList.remove('curtido'), 300));


    document.querySelectorAll('.comentar').forEach(btn => {
        btn.addEventListener('click', () => {
            const comentario = prompt("Escreva seu comentário:");
            if (comentario) {
                alert("Comentário enviado: " + comentario);
            }
        });
    });

    document.querySelectorAll('.compartilhar').forEach(btn => {
        btn.addEventListener('click', () => {
            alert("Post compartilhado com seus seguidores!");
        });
    });

    if (comentario && comentario.trim()) {
    alert("Comentário enviado: " + comentario);
}
</script>

<body>

    </nav>
    <div class="container">
        <!-- div1 -->
        <div class="topo">
            <h1 style="text-align: center; font-size: 60px">Instagram</h1>
            <p class="extras">Veja as últimas postagens</p>
        </div>

        <!-- div2 + div3 -->
        <div class="post">
            <div class="perfil">@usuario123</div>
            <img src="https://d1muf25xaso8hp.cloudfront.net/https://img.criativodahora.com.br/2024/03/criativo-65fa3c4e2213fimg-2024-03-1965fa3c4e22143.jpg?w=1000&h=&auto=compress&dpr=1&fit=max"
                alt="Post" class="midia" />
            <div class="acoes">
                <div class="acoes">
    <button class="curtir">🤍 Curtir</button>
    <button class="comentar">💬 Comentar</button>
    <button class="compartilhar">🔁 Compartilhar</button>
</div>
            </div>
            <p>"Aquele que busca a sabedoria como quem busca prata, e a encontra como quem busca um tesouro escondido,
                entenderá o temor do Senhor e achará o conhecimento de Deus." </p>
        </div>

        <!-- Outro post -->
        <div class="post">
            <div class="perfil">@good_music</div>
            <img src="https://paintbynumbers.uk/wp-content/uploads/2020/08/pink-floyd-dark-side-of-moon.jpg"
                alt="Post" class="midia" />
            <div class="acoes">
                <div class="acoes">
    <button class="curtir">🤍 Curtir</button>
    <button class="comentar">💬 Comentar</button>
    <button class="compartilhar">🔁 Compartilhar</button>
</div>
            </div>
            <p>O prisma que aparece na capa do álbum "Dark Side of the Moon" do Pink Floyd representa a decomposição da
                luz branca em seus componentes, o espectro de cores, simbolizando a complexidade e os muitos lados da
                experiência humana. O prisma, que reflete a luz branca e a divide em cores, é frequentemente
                interpretado como uma metáfora para a forma como a luz do espírito humano se transforma e se decompõe
                com o passar do tempo e com a experiência da vida. </p>
        </div>

        <div class="post">
            <div class="perfil">@moda_geek</div>
            <img src="https://blog.lojasrenner.com.br/wp-content/uploads/2023/02/da_cabeca_aos_pes_interno_01_2x.jpg" alt="Post"
                class="midia" />
            <div class="acoes">
                <div class="acoes">
    <button class="curtir">🤍 Curtir</button>
    <button class="comentar">💬 Comentar</button>
    <button class="compartilhar">🔁 Compartilhar</button>
</div>
            </div>
            <p>R$39,99. link na descri!!!
                <hr>
                <a>www.gamedevs_store.com.br</a>
            </p>
        </div>

        <div class="post">
            <div class="perfil">@fulana_de_tal</div>
            <img src="https://casaeconstrucao.org/wp-content/uploads/2023/04/3-frases-simples-para-instagram-feminino-Unsplash.jpg"
                alt="Post" class="midia" />
            <div class="acoes">
               <div class="acoes">
    <button class="curtir">🤍 Curtir</button>
    <button class="comentar">💬 Comentar</button>
    <button class="compartilhar">🔁 Compartilhar</button>
</div>
            </div>
            <p>A meditação é uma prática milenar que visa focalizar a mente em um objeto, pensamento ou atividade
                específica, com o objetivo de alcançar um estado de clareza mental e emocional. É uma forma de conectar
                o corpo com a mente, proporcionando sensação de calma e bem-estar. </p>
        </div>

        <div class="post">
            <div class="perfil">@agencia_viagensParaVocê</div>
            <img src="https://machupicchubrasil.com.br/blog/wp-content/uploads/2020/02/TRUJILLO-.jpg"
                alt="Post" class="midia" />
            <div class="acoes">
                <div class="acoes">
    <button class="curtir">🤍 Curtir</button>
    <button class="comentar">💬 Comentar</button>
    <button class="compartilhar">🔁 Compartilhar</button>
</div>
            </div>
            <p>EU NO CHILEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE!!!!!!!!!!</p>
        </div>

          <div class="sidebar">
        <h2>Instagram</h2>
        <a href="./Login.php"><i class="bi bi-house"></i> Página Inicial</a>

        <a href="./Explorar.php"><i class="bi bi-search"></i> Explorar</a>

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

      <button type="button" class="btn btn-primary">
        <i class="bi bi-check-circle"></i>
        Publicar Post
      </button>
     </div>
     </div>
     </div>
  </div>


        <!-- div4 -->
       
    </div>

</body>

</html>

<!--Túlio melhorar o site na parte HTML e CSS-->
<!--Melhorar o javascript do site para dar mais interatividade-->
<!--Estudar bancos e dados e sistemas de informações-->