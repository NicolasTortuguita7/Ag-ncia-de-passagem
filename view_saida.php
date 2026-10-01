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
        <?php foreach ($Informacoes as $dado){?>
            <p><b>ATENÇÂO</b>:<b><?= $situação3; ?></b></p>
            <p><b>Nome do passageiro: <?= $dado['NomePassageiro']; ?></b></p>
            <p><b>Genero: <?= $dado['genero']; ?></b></p>
            <p><b>Idade: <?= $dado['idade']; ?></b></p>
            <p><b>CPF: <?= $dado['CPF']; ?></b></p>
            <p><b>RG: <?= $dado['RG']; ?></b></p>
            <p><b>Passaporte: <?= $dado['Passaporte']; ?></b></p>
            <p><b>CNH: <?= $dado['CNH']; ?></b></p>
            <p><b>Email: <?= $dado['Email']; ?></b></p>
            <p><b>Telefone: <?= $dado['Telefone']; ?></b></p>
            <p><b>Data da viagem: <?= $dado['DataViagem']; ?></b></p>
            <p><b>Hora da viagem: <?= $dado['Horaviagem']; ?></b></p>
            <p><b>Carteira de vacinação: <?= $dado['CarteiradeV']; ?></b></p>
            <p><b>Idade do passageiro(maior de 18 anos): <?= $dado['idadeMenor']; ?></b></p>
            <p><b>Atencão: <?= $situação1; ?></b></p>
            <p><b>Passaporte comprado <b>: <?= $dado['CompraPassaporte']; ?></p>
            <p><b>Passaporte comprado: <?= $situação4; ?></b></p>
            <hr>
            <h1 style="text-align: center; background-color: #84a4dcff; color: white; padding: 10px;">Passagem Internacional</h1>
            <p><b>Atenção: <?= $situação2; ?></b></p>
            <h1 style="text-align: center; background-color: #ffffffff; color: black; padding: 10px;">Muito Obrigado Pela preferência!👍</h1>
            <h4>Tenha uma ótima viagem! <?= $dado['NomePassageiro'];?></h4>
            <hr>
        <?php } ?>
        <br>
        <a href="view_entrada.php" style="background-color: #1e5dccff; color: white; padding: 14px 20px; border: none; cursor: pointer; text-decoration: none;">Voltar</a>
        <br>
    </main>
</body>
</html>





