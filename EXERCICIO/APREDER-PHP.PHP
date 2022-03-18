<?php// ESTRUTURAS DE DECISÃO
$var1 = 10;// variavel normal
$Var1 = 100;//variavel com a Letra maiuscula 
$_var1 = 200;//variavel com anderline
// comentario de uma linha

/*comentaRIO DE múltiplas linhas*/


$var3 = "texto";
$var3 = 'testo';

// Operadores Aritimetricos
$var1 = 11;
$var2 = 2;
$modulo = $var1 % $var2;
//retorna o resto da divisão
echo "REsultado do modulo: " .$modulo;
echo "\n\n";
die;

$var1 = 10;
$var2 = 2;
$exponencial = $var1 ** $var2;
// $var1 elevado a $var2
echo "Resultado do exponencial: " . $exponencial;

$var4 = 5;
echo "1. var4: $var4 ";
echo "\n\n";

$var4 += 15;
echo "2. var4: $var4";
die;
echo "\n\n";

$var5 = 50;
$var5 *= 10;
echo "var5: $var5";

echo"\n\n";
die;

$var6 = 5;
$var7 = '5';

//if e else
//se 5 for igual a 5 da string ele chama o if
if ($var6 == $var7){
    echo "$var6 é igual a var$7 \n\n";

}
   // se 5 nao fo igual ao 5 do string chama o else
else{
    echo"$var6 não é igual a var$7 \n\n" 
}
/* */
/* */
// Forma alternativa
if ($var6 == $var7) :
    echo "\n\nForma alternativa \n\n";
    echo "$var6 é igual a var$7 \n\n";
else:
    echo "$var6 Não é igual a $var2\n\n";
endif;

//Operador ternário
echo "\n\nOperador ternário \n\n";
$comparacao = (($var6 === $var7))?
"Iguais e do mesmo tipo " : "Apenas iguais";
echo $comparacao;
echo "\n\n";
/**/

/**/
//elseif
if($idade <12){
    echo"Criança";

}elseif($idade >= 12 && $idade < 18 ){
    echo"Adolescente";
    
}else{
    echo"Adulto";
}

//switch fazendo varias verificações
echo "\n\n";

$fruta = "Laranja";

switch($fruta){
    case'Laranja':
        echo "A fruta é Maçã";
        break;
        case'Maçã':
            echo "A fruta é Limão";
            break;
            case'Limão':
                echo "A fruta é Limão";
                break;

                default:
                echo "A fruta é desconhecida";
                break;
    }


    //ESTRUTURAS DE REPETIÇÃO
    $i = 1;
    while ($i <10){
        echo"imprimindo no while \n";
        echo"Valor de i:$i \n";
        $i++;]
    }

    echo"\n\n";
    //do-while
    $j = 1;
    do{
        echo "imprimindo no do/while \n";
        echo "Valor de j: $jj \n";
        $j++
    }while($j < 1);

    die;

    //fo
    for($cont = 0; $cont < 10; $cont++){
        echo "$cont \n";
    }

    //for com array
    $arrayFruts = Array("Laranja ", "Maça", "Limão");
    
    for($i = 0; $i<count($arrayFruts); $i++){
        echo "Fruta: ". $arrayFruts[$i] . "\n";

    }

    // foreach com array
    foreach ($arrayFruts as $fruta){
        echo "Fruta: " . $fruta . "\n";
    }