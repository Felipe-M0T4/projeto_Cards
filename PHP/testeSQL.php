<!--
select * from usuario => seleciona todo mundo da tabela

select * from usuario WHERE nome="Felipe" and id="1" => seleciona todo mundo na tabela na qual o nome é Felipe (FILTRO)

INSERT INTO usuario VALUES ('id','Jamil','jamilferreira@gmail.com','22081976','112234567324','foto6.png','@Jamilão');
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE SQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>


</head>

<style>
    th, td {
        padding: 10px;
    }

    tr{
        border-bottom: 1px solid black;
    }

</style>

<body>
    <div class="container">
        <?php
        try{

           if(isset($_POST["SQLQuery"])  && $_POST["SQLQuery"]!="" ){

        $textArea = $_POST["SQLQuery"];
        echo "<p style='color:red'>" . $textArea . "</p>";


        // Abrindo Conexão
        $nomeservidor = "localhost";
        $nomeusuario = "root";
        $senha = "";
        $bancodados = "felipe_instagram";


        $conexao = new mysqli($nomeservidor, $nomeusuario, $senha, $bancodados);
        if ($conexao->connect_error) {
            die("Conexão falhou: " . $conexao->connect_error);
        }

        $resposta = $conexao->query($textArea);
           }

    } catch(Exception $erro) {
        echo $erro;
    }
        ?>

        
        <form action="./testeSQL.php" method="POST" class="d-flex flex-column gap-2">
            <label>SQL para executar</label>
            <textarea name="SQLQuery" id="SQLQuery"></textarea>
            <button type="submit">EXECUTAR</button>
            <div id="resposta">RESPOSTA</div>


            <hr>

<table>
<?php
        $colocarHeader = true;

            while ($linha = $resposta->fetch_assoc()) {
                if ($colocarHeader) {

                //imprimindo th
                echo "<tr>";
                foreach($linha as $chave => $valor){
                    echo"<th>$chave</th>";
                }
                echo"</tr>";
                  $colocarHeader = false;
                 }

                //imprimindo td
                echo "<tr>";
                foreach($linha as $chave => $valor){
                    echo "<td>$valor</td>";
                }
                echo "</tr>";
                
                //echo var_dump($linha);
                
        }
?>
</table>

<hr>
        </form>

    </div>


</body>

</html>