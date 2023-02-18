<?php
//moedas
function  moedas($valor){
    switch ($valor) {
        case 1: 'Dinheiro'; break;
        case 2: 'Cheque'; break;
        case 3: 'Transferencia'; break;
        case 4: 'Cartão credito'; break;
        case 5: 'Cartão debito'; break;
        case 6: 'Cheque pre'; break;
        case 7: 'Comissão'; break;
        case 8: 'Vale cobrança'; break;
        case 9: 'Déb.Automático'; break;
        default: 'Selecione'; break;
    }
}

//limpa ponto e traço
function limpaCampo($valor){
    $valor = trim($valor);
    $valor = str_replace(".", "", $valor);
    $valor = str_replace(",", "", $valor);
    $valor = str_replace("-", "", $valor);
    $valor = str_replace("/", "", $valor);
    $valor = str_replace("(", "", $valor);
    $valor = str_replace(")", "", $valor);
    $valor = str_replace(" ", "", $valor);
    $valor = str_replace("<", "", $valor);
    $valor = str_replace(">", "", $valor);
    $valor = str_replace("=", "", $valor);
    $valor = str_replace("+", "", $valor);
    $valor = str_replace("?", "", $valor);
    $valor = str_replace("!", "", $valor);
    $valor = str_replace("@", "", $valor);
    $valor = str_replace("$", "", $valor);
    $valor = str_replace("%", "", $valor);
    $valor = str_replace("*", "", $valor);
    return $valor;
}

//converter para moedaBanco .
function Moeda($get_valor) {
    $source = array('.', ',');
    $replace = array('', '.');
    $valor = str_replace($source, $replace, $get_valor); //remove os pontos e substitui a virgula pelo ponto
    if(empty($valor)){return 0;}else{return $valor;} //retorna o valor formatado para gravar no banco
}

//converter para moedaBanco ,
function Moeda2($valor) {
    $valor = number_format($valor,2);
    $source = array(',', '.');
    $replace = array('.', '');
    $valor = str_replace($source, $replace, $valor);
    return $valor;
}

//converter para real com ,
function Real($valor){
    if($valor==true){
        return number_format($valor,2,',','.');
    } else {
        return '0,00';
    }
}
//data no front
function dataForm($valor){
    if($valor != 0000-00-00){
        $valor = date('d-m-Y',strtotime($valor));
        return $valor;
    }
}

//dias entre datas antes
function diasDatas($data_inicial,$data_final) {
    $diferenca = strtotime($data_final) - strtotime($data_inicial);
    $dias = floor($diferenca / (60 * 60 * 24));
    return $dias;
}

//gerar token único
function gerarToken($entropy){
    $s=uniqid("",$entropy);
    $num= hexdec(str_replace(".","",(string)$s));
    $index = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $base= strlen($index);
    $out = '';
        for($t = floor(log10($num) / log10($base)); $t >= 0; $t--) {
            $a = floor($num / pow($base,$t));
            $out = $out.substr($index,$a,1);
            $num = $num-($a*pow($base,$t));
        }
    return $out;
}

//idadeCerta
function idadeCerta($nascimento){
    // Declara a data! :P
    $data = $nascimento;
    // Separa em dia, m�s e ano
    list($dia, $mes, $ano) = explode('-', $data);
    // Descobre que dia � hoje e retorna a unix timestamp
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    // Descobre a unix timestamp da data de nascimento do fulano
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
    // Depois apenas fazemos o c�lculo j� citado :)
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    return $idade;
};

