<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Viagens</title>
</head>
<body style="background-color: #9ba8abff;"> 
    <header>
        <h1>Agendamento de Viagem</h1>
        <hr>
    </header>
    <main>
        <?php foreach ($Informacoes as $dado){?>
            <p>Nome do passageiro: <?= $dado['NomePassageiro']; ?></p>
            <p>Genero: <?= $dado['genero']; ?></p>
            <p>Idade: <?= $dado['idade']; ?></p>
            <p>CPF: <?= $dado['CPF']; ?></p>
            <p>RG: <?= $dado['RG']; ?></p>
            <p>Passaporte: <?= $dado['Passaporte']; ?></p>
            <p>Número da compra: <?= $dado['Numerodacompre']; ?></p>
            <p>CNH: <?= $dado['CNH']; ?></p>
            <p>Email: <?= $dado['Email']; ?></p>
            <p>Telefone: <?= $dado['Telefone']; ?></p>
            <p>Data da viagem: <?= $dado['DataViagem']; ?></p>
            <p>Hora da viagem: <?= $dado['Horaviagem']; ?></p>
            <p>Carteira de vacinação: <?= $dado['CarteiradeV']; ?></p>
            <p>Idade do passageiro(maior de 18 anos): <?= $dado['IdadeMenor']; ?></p>
            <p><b>Atencão: <?= $situação1; ?></b></p>
            <hr>
            <h1>Passagem Internacional</h1>
            <p><b>Situação:<?= $situação2; ?></b></p>
            <h1>Muito Obrigado Pela preferência!</h1>
            <h4>Tenha uma ótima viagem!<?= $dado['NomePassageiro'];?></h4>
            <hr>
        <?php } ?>
            <br>
    </main>
</body>
</html>





