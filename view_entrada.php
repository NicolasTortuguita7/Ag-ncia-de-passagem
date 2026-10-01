<!DOCTYPE html>
<html lang="pt-br" style="background-color: #9ba8abff;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Viagens</title>
</head>
<body>
    <header style="background-color: #9ba8abff; text-align: center;">
        <br>
        
        <img src="ChatGPT Image 30 de set. de 2026, 14_46_39.png" width="400" alt="">
        <h1>Agendamento de Viagem</h1>
        <br>
        <h3>⚠️Atenção⚠️</h3>
        <p><b>Por favor, preencha os dados abaixo para agendar sua viagem, mas mesmo que você for agendar a uma viagem internacional 
        você precisa preencher os requisitos do Voo Nacional porque também faz parte dos requisitos internacionais</b></p>
        <hr>
    </header>
    <main style="background-color: #9ba8abff;border: 2px solid #000; ">
        <form action="LogicaController.php" method="POST">
        <h1>Requisito de Voo Nacional</h1>
        <label for="nomePassageiro">Nome do passageiro:</label>
        <br>
        <input type="text" name="NomePassageiro" id="nomePassageiro" placeholder="Digite o seu nome">
        <br><br>
        <label for="genero">Genero</label>
        <br>
        <input type="radio" name="genero" id="masculino" value="masculino" required>
        <label for="masculino">Masculino</label>
        <br>
        <input type="radio" name="genero" id="feminino" value="feminino" required>
        <label for="feminino">Feminino</label>
        <br>
        <input type="radio" name="genero" id="outro" value="outro" required>
        <label for="outro">Outro</label>
        <br><br>
        <label for="idade">idade:</label>
        <br>
        <input type="number" name="idade" id="idade" placeholder="Digite sua idade">
        <br><br>
        <label for="CPF">CPF:</label>
        <br>
        <input type="text" name="CPF" id="CPF" placeholder="Digite o seu CPF">
        <br><br>
        <label for="RG">RG:</label>
        <br>
        <input type="text" name="RG" id="RG" placeholder="Digite seu RG">
        <br><br>
        <label for="Passaporte">Passaporte:</label>
        <br>
        <input type="text" name="Passaporte" id="Passaporte" placeholder="Digite seu passaporte">
        <br><br>
        <label for="CNH">CNH:</label>
        <br>
        <input type="text" name="CNH" id="CNH" placeholder="Digite sua CNH">
        <br><br>
        <label for="Email">Email:</label>
        <br>
        <input type="email" name="Email" id="Email" placeholder="Digite seu email">
        <br><br>
        <label for="Telefone">Telefone:</label>
        <br>
        <input type="tel" name="Telefone" id="Telefone" placeholder="Digite seu telefone">
        <br><br>
        <label for="DataViagem">Data da viagem:</label>
        <br>
        <input type="date" name="DataViagem" id="DataViagem">
        <br><br>
        <label for="HoraViagem">Hora da viagem:</label>
        <br>
        <select name="HoraViagem" id="HoraViagem">
            <option value="02:00">02:00</option>
            <option value="03:00">03:00</option>
            <option value="04:00">04:00</option>
            <option value="05:00">05:00</option>
            <option value="06:00">06:00</option>
            <option value="07:00">07:00</option>
            <option value="09:00">09:00</option>
            <option value="10:00">10:00</option>
            <option value="11:00">11:00</option>
            <option value="13:00">13:00</option>
            <option value="14:00">14:00</option>
            <option value="15:00">15:00</option>
            <option value="17:00">17:00</option>
            <option value="19:00">19:00</option>
            <option value="20:00">20:00</option>
            <option value="22:00">22:00</option>
            <option value="23:59">23:59</option>
        </select>
        <br>
        <h1>Requisito de Voo Internacional</h1>
        <br>
        <label for="CarteiradeV">Carteira de Vacinação:</label>
        <br>
        <input type="text" name="CarteiradeV" id="CarteiradeV" placeholder="Digite o número da carteira de vacinação">
        <br><br>
        <label for="IdadeMenor">Idade do passageiro (menor de 18 anos):</label>
        <br>
        <input type="checkbox" name="IdadeMenor" id="IdadeMenor" value="sim">
        <label for="IdadeMenor">Sim</label>
        <br>
        <input type="checkbox" name="IdadeMenor" id="IdadeMenor" value="nao">
        <label for="IdadeMenor">Não</label>
        <br><br>
        <label for="Avião">Avião Disponível:</label>
        <br>
        <select name="Avião" id="Avião">
            <option value="Boeing 737">Boeing 737</option>
            <option value="Airbus A320">Airbus A320</option>
            <option value="Embraer E195">Embraer E195</option>
            <option value="Bombardier CRJ900">Bombardier CRJ900</option>
        </select>
        <br><br>
        <label for="Passaporte">Possui passaporte?</label>
        <br>
        <input type="checkbox" name="Passaporte" id="Passaporte" value="sim">
        <label for="Passaporte">Sim</label>
        <br>
        <input type="checkbox" name="Passaporte" id="Passaporte" value="nao">
        <label for="Passaporte">Não</label>
        <br><br>
        <label for="CompraPassaporte">Deseja comprar passaporte?:</label>
        <br>
        <input type="checkbox" name="CompraPassaporte" id="CompraPassaporte" value="sim">
        <label for="CompraPassaporte">Sim</label>
        <br>
        <input type="checkbox" name="CompraPassaporte" id="CompraPassaporte" value="nao">
        <label for="CompraPassaporte">Não</label>
        <br><br>
        <label for="Numerodacompre">Passaportes Disponíveis</label>
        <br>
        <select name="Numerodacompre" id="Numerodacompre">
            <option value="Passaporte 1">Passaporte Nacional: R$ 257,25</option>
            <option value="Passaporte 2">Passaporte Internacional: R$ 500,00</option>
            <option value="Passaporte 3">Não desejo comprar passaporte</option>
        </select>
        <br><br>
        <button type="submit" style="background-color: #1e5dccff; color: white; padding: 14px 20px; border: none; cursor: pointer;">Agendar Viagem</button>
        </form>
        <footer>
            <h2 style="text-align: center;">Sobre Nós</h2>
            <p style="text-align: center;">Somos uma agência de viagens especializada em oferecer os melhores pacotes turísticos para você e sua família. Com anos de experiência no mercado, garantimos um serviço de qualidade e atendimento personalizado
                para as pessoas e declaramos uma boa viagem e muito Obrigado.</p>
            <p style="text-align: center;">&copy; 2023 Agência de Viagens. Todos os direitos reservados.</p>
        </footer>
    </main>
</body>
</html>