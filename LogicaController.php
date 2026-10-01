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
function Aviõesdisponiveis($Avião1, $avião2, $Avião3, $Avião4) {
    return in_array($Aviões, $aviõesDisponíveis);
}
 $aviõesDisponíveis = ['Boeing 737',
  ['Airbus A320',
  'Embraer E195',
  'Bombardier CRJ900'
  ]
];

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
require_once 'view_saida.php';



 























?>