<?php


$Informacoes = [
    [
        'NomePassageiro' => $_POST['NomePassageiro'],
        'genero' => $_POST['genero'],
        'idade' => $_POST['idade'],
        'CPF' => $_POST['CPF'],
        'RG' => $_POST['RG'],
        'Passaporte' => $_POST['Passaporte'],
        'Numerodacompre' => $_POST['Numerodacompre'],
        'CNH' => $_POST['CNH'],
        'Email' => $_POST['Email'],
        'Telefone' => $_POST['Telefone'],
        'DataViagem' => $_POST['DataViagem'],
        'CarteiradeV' => $_POST['CarteiradeV'],
        'idadeMenor' => $_POST['IdadeMenor'],
        'Horaviagem' => $_POST['HoraViagem'],
        'CompraPassaporte' => $_POST['CompraPassaporte'],
        'Paises' => $_POST['Paises'],
        'ViagemN' => $_POST['ViagemN']
    ]
];




function verificarIdade($idade) {
    return $idade < 18;
}
if (verificarIdade($_POST['idade'])) {
    $situação1 = "O passageiro é menor de idade e não pode embarcar no Voo solo.";
} else {
    $situação1 = "O passageiro é maior de idade e não precisa de autorização para a viagem.";
}
function verificarPassaporte($compraPassaporte)
{
    if ($compraPassaporte == "sim") {
        return "O passageiro comprou o passaporte.";
    } else {
        return "O passageiro não comprou o passaporte.";
    }
}

$situacaoPassaporte = verificarPassaporte($_POST['CompraPassaporte']);


if ($_POST['IdadeMenor'] == 'sim') {
    $situação2 = "O passageiro é menor de idade e precisa de autorização dos pais ou responsáveis para viajar.";
} else {
    $situação2 = "O passageiro é maior de idade e não precisa de autorização dos pais ou responsáveis para viajar.";
}
if ($_POST['CompraPassaporte'] == 'sim') {
    $situação3 = "Obrigado pela compra!.";
} else {
    $situação3 = "Você não podera viajar sem um passaporte.";
}


if($_POST['Numerodacompre'] == 'Passaporte 1'){
    $situação4 = "Passaporte Nacional: R$ 257,25";
} elseif($_POST['Numerodacompre'] == 'Passaporte 2'){
    $situação4 = "Passaporte Internacional: R$ 500,00";
} elseif($_POST['Numerodacompre'] == 'Passaporte 3'){
    $situação4 = "Não comprou passaporte";
}

if ($_POST['Cidade'] == 'Recife') {
    $mensagemLocal = "Sua viagem será para Recife!";
} elseif ($_POST['Cidade'] == 'Maceio') {
    $mensagemLocal = "Sua viagem será para Maceiò!";
} elseif ($_POST['Cidade'] == 'Fortaleza') {
    $mensagemLocal = "Sua viagem será para Fortaleza!";
} elseif ($_POST['Cidade'] == 'Porto Alegre'){
    $mensagemLocal = "Sua viagem será para Porto alegre.";
}elseif ($_POST['Cidade'] == 'Rio de Janeiro'){
  $mensagemLocal = "Sua viagem será para Rio de Janeiro";
} elseif ($_POST['Cidade'] == 'Curitiba') {
    $mensagemLocal = "Sua viagem será para Curitiba!";
} elseif ($_POST['Cidade'] == 'Belo Horizonte') {
    $mensagemLocal = "Sua viagem será para Belo Horizonte!";
} elseif ($_POST['Cidade'] == 'Nao') {
    $mensagemLocal = "Minha viagem será Internacional";
}

}
  if ($_POST['Paises'] == 'Franca') {
    $mensagemLocal2 = "Você escolheu viajar para a França!";
} elseif ($_POST['Paises'] == 'Italia') {
    $mensagemLocal2 = "Você escolheu viajar para a Itália!";
} elseif ($_POST['Paises'] == 'Japao') {
    $mensagemLocal2 = "Você escolheu viajar para o Japão!";
} elseif ($_POST['Paises'] == 'Argentina'){
    $mensagemLocal2 = "Você escolheu viajar para a Argentina!";
}elseif ($_POST['Paises'] == 'EUA'){
    $mensagemLocal2 = "Você escolheu viajar para o Estados Unidos da América!";
}elseif ($_POST['Paises'] == 'CRS'){
    $mensagemLocal2 = "Você escolheu viajar para a Coreia do Sul!";
}elseif ($_POST['Paises'] == 'CRN'){
    $mensagemLocal2 = "Você escolheu viajar para a Coreia do Norte!";
}elseif ($_POST['Paises'] == 'China'){
    $mensagemLocal2 = "Você escolheu viajar para a China!";
}else{
    $mensagemLocal2 = "Minha viagem é Nacional";
}
require_once 'view_saida.php';

?>
