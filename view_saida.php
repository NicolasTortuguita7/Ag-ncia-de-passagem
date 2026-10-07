<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Viagens</title>
</head>
<body style="background-color: #9ba8abff;">
    <header>
        <br>
        <h1 style="text-align: center; background-color: #1e5dccff; color: white; padding: 10px;">Agendamento de Viagem</h1>
        <br>
    </header>
    <main>
     <?php foreach ($Informacoes as $dado) { ?>
    <table>

      <tr>
        <td>Atenção:</td>
        <td><?= $situação3 ?></td>
      </tr>

      <tr>
        <td>Nome do passageiro:</td>
        <td><?= $dado['NomePassageiro'] ?></td>
      </tr>

      <tr>
        <td>Gênero:</td>
        <td><?= $dado['genero'] ?></td>
      </tr>

      <tr>
        <td>Idade</td>
        <td><?= $dado['idade'] ?></td>
      </tr>

      <tr>
        <td>CNH:</td>
        <td><?= $dado['CNH'] ?></td>
      </tr>

      <tr>
        <td>CPF:</td>
        <td><?= $dado['CPF'] ?></td>
      </tr>

      <tr>
        <td>RG:</td>
        <td><?= $dado['RG'] ?></td>
      </tr>

      <tr>
        <td>Passaporte:</td>
        <td><?= $dado['Passaporte'] ?></td>
      </tr>

      <tr>
        <td>Telefone:</td>
        <td><?= $dado['Telefone'] ?></td>
      </tr>

      <tr>
        <td>Data de viagem:</td>
        <td><?= $dado['DataViagem'] ?></td>
      </tr>
                                             
      <tr>
        <td>Viagem Nacional:</td>
        <td><?= $mensagemLocal ?></td>
      </tr>
      
      <tr>
        <td>Viagem Internacional:</td>
        <td><?= $mensagemLocal2 ?></td>
      </tr>
                                             
      <tr>
        <td>Hora de viagem:</td>
        <td><?= $dado['Horaviagem'] ?></td>
      </tr>

      <tr>
        <td>E-mail:</td>
        <td><?= $dado['Email'] ?></td>
      </tr>

      <tr>
        <td>Carteira de vacinação:</td>
        <td><?= $dado['CarteiradeV'] ?></td>
      </tr>

      <tr>
        <td>Autorização para menor:</td>
        <td><?= $dado['idadeMenor'] ?></td>
      </tr>

      <tr>
        <td>Situação da idade:</td>
        <td><?= $situação1 ?></td>
      </tr>

      <tr>
        <td>Situação do passaporte:</td>
        <td><?= $situacaoPassaporte ?></td>
      </tr>

      <tr>
        <td>Autorização:</td>
        <td><?= $situação2 ?></td>
      </tr>

      <tr>
        <td>Passaporte comprado:</td>
        <td><?= $dado['CompraPassaporte'] ?></td>
      </tr>

      <tr>
        <td>Tipo de passaporte:</td>
        <td><?= $situação4 ?></td>
      </tr>
        </table>
<?php } ?>
        <hr>
        <a href="view_entrada.php" style="background-color: #1e5dccff; color: white; padding: 14px 20px; border: none; cursor: pointer; text-decoration: none;">Voltar</a>
        <br>
    </main>
 </body>
</html>