<!DOCType html>
<?php
    ini_set('display_errors', 0 ); error_reporting(0);
    $jogador = "";
    if(isset($_GET['jogador'])){
        $jogador = $_GET['jogador'];
    }
    $trinca = 0;
    $quadra = 0;
    $trincadopc = 0;
    $quadradopc = 0;
    $General = 0;
    $Generaldopc = 0;
    $Aleatorio = 0;
    $Aleatoriodopc = 0;
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>General</title>
</head>
<body>
    <form method="get" action="">
    <label for="jogador"> Jogador: </label>
    <input type="text" name="jogador" value="" />
    <br><br>
    <input type="submit">
    </form>
    <br><hr>
    <?php
        echo "$jogador: ";
        if(isset($_GET['jogador'])){
            $vetorJogador = array();
            for($i = 0; $i < 5; $i++){
                $vetorJogador[$i] = rand(1,6);
                if($vetorJogador[$i] == 1){
                    echo '<img src="img/dado_1.png" style="width: 30px;"> ';
                }
                if($vetorJogador[$i] == 2){
                    echo '<img src="img/dado_2.png" style="width: 30px;"> ';
                }
                if($vetorJogador[$i] == 3){
                    echo '<img src="img/dado_3.png" style="width: 30px;"> ';
                }
                if($vetorJogador[$i] == 4){
                    echo '<img src="img/dado_4.png" style="width: 30px;"> ';
                }
                if($vetorJogador[$i] == 5){
                    echo '<img src="img/dado_5.png" style="width: 30px;"> ';
                }
                if($vetorJogador[$i] == 6){
                    echo '<img src="img/dado_6.png" style="width: 30px;"> ';
                }
            }
            $dado1 = $vetorJogador[0];
            $dado2 = $vetorJogador[1];
            $dado3 = $vetorJogador[2];
            $dado4 = $vetorJogador[3];
            $dado5 = $vetorJogador[4];
            $cont1 = 0;
                $jogadas1 = 0;
                foreach($vetorJogador as $dado){
                    if($dado == 1){
                        $cont1++;
                    }
                }
                if($cont1 > 1){
                    $jogadas1 = $cont1 * 1;
                }
                if($cont1 > 2){
                    $trinca = 20;
                }
                if($cont1 > 3){
                    $quadra = 30;
                }
                if($cont1 > 4){
                    $General = 50;
                }
            $cont2 = 0;
                $jogadas2 = 0;
                foreach($vetorJogador as $dado){
                    if($dado == 2){
                        $cont2++;
                    }
                }
                if($cont2 > 1){
                    $jogadas2 = $cont2 * 2;
                }
                if($cont2 > 2){
                    $trinca = 20;
                }
                if($cont2 > 3){
                    $quadra = 30;
                }
                if($cont2 > 4){
                    $General = 50;
                }
            $cont3 = 0;
                $jogadas3 = 0;
                foreach($vetorJogador as $dado){
                    if($dado == 3){
                        $cont3++;
                    }
                }
                if($cont3 > 1){
                    $jogadas3 = $cont3 * 3;
                }
                if($cont3 > 2){
                    $trinca = 20;
                }
                if($cont3 > 3){
                    $quadra = 30;
                }
                if($cont3 > 4){
                    $General = 50;
                }
            $cont4 = 0;
                $jogadas4 = 0;
                foreach($vetorJogador as $dado){
                    if($dado == 4){
                        $cont4++;
                    }
                }
                if($cont4 > 1){
                    $jogadas4 = $cont4 * 4;
                }
                if($cont4 > 2){
                    $trinca = 20;
                }
                if($cont4 > 3){
                    $quadra = 30;
                }
                if($cont4 > 4){
                    $General = 50;
                }
            $cont5 = 0;
                $jogadas5 = 0;
                foreach($vetorJogador as $dado){
                    if($dado == 5){
                        $cont5++;
                    }
                }
                if($cont5 > 1){
                    $jogadas5 = $cont5 * 5;
                }
                if($cont5 > 2){
                    $trinca = 20;
                }
                if($cont5 > 3){
                    $quadra = 30;
                }
                if($cont5 > 4){
                    $General = 50;
                }
            $cont6 = 0;
                $jogadas6 = 0;
                foreach($vetorJogador as $dado){
                    if($dado == 6){
                        $cont6++;
                    }
                }
                if($cont6 > 1){
                    $jogadas6 = $cont6 * 6;
                }
                if($cont6 > 2){
                    $trinca = 20;
                }
                if($cont6 > 3){
                    $quadra = 30;
                }
                if($cont6 > 4){
                    $General = 50;
                }
            $fullhouse = 0;
                if($cont1 > 1 && $cont2 > 2){
                    $fullhouse = 25;
                }
                if($cont1 > 1 && $cont3 > 2){
                    $fullhouse = 25;
                }
                if($cont1 > 1 && $cont4 > 2){
                    $fullhouse = 25;
                }
                if($cont1 > 1 && $cont5 > 2){
                    $fullhouse = 25;
                }
                if($cont1 > 1 && $cont6 > 2){
                    $fullhouse = 25;
                }
                if($cont2 > 1 && $cont1 > 2){
                    $fullhouse = 25;
                }
                if($cont2 > 1 && $cont3 > 2){
                    $fullhouse = 25;
                }
                if($cont2 > 1 && $cont4 > 2){
                    $fullhouse = 25;
                }
                if($cont2 > 1 && $cont5 > 2){
                    $fullhouse = 25;
                }
                if($cont2 > 1 && $cont6 > 2){
                    $fullhouse = 25;
                }
                if($cont3 > 1 && $cont1 > 2){
                    $fullhouse = 25;
                }
                if($cont3 > 1 && $cont2 > 2){
                    $fullhouse = 25;
                }
                if($cont3 > 1 && $cont4 > 2){
                    $fullhouse = 25;
                }
                if($cont3 > 1 && $cont5 > 2){
                    $fullhouse = 25;
                }
                if($cont3 > 1 && $cont6 > 2){
                    $fullhouse = 25;
                }
                if($cont4 > 1 && $cont1 > 2){
                    $fullhouse = 25;
                }
                if($cont4 > 1 && $cont2 > 2){
                    $fullhouse = 25;
                }
                if($cont4 > 1 && $cont3 > 2){
                    $fullhouse = 25;
                }
                if($cont4 > 1 && $cont5 > 2){
                    $fullhouse = 25;
                }
                if($cont4 > 1 && $cont6 > 2){
                    $fullhouse = 25;
                }
                if($cont5 > 1 && $cont1 > 2){
                    $fullhouse = 25;
                }
                if($cont5 > 1 && $cont2 > 2){
                    $fullhouse = 25;
                }
                if($cont5 > 1 && $cont3 > 2){
                    $fullhouse = 25;
                }
                if($cont5 > 1 && $cont4 > 2){
                    $fullhouse = 25;
                }
                if($cont5 > 1 && $cont6 > 2){
                    $fullhouse = 25;
                }
                if($cont6 > 1 && $cont1 > 2){
                    $fullhouse = 25;
                }
                if($cont6 > 1 && $cont2 > 2){
                    $fullhouse = 25;
                }
                if($cont6 > 1 && $cont3 > 2){
                    $fullhouse = 25;
                }
                if($cont6 > 1 && $cont4 > 2){
                    $fullhouse = 25;
                }
                if($cont6 > 1 && $cont5 > 2){
                    $fullhouse = 25;
                }
            $SequenciaA = 0;
                if($cont1 == 0 && $cont2 < 2 && $cont3 < 2 && $cont4 < 2 && $cont5 < 2 && $cont6 < 2){
                    $SequenciaA = 30;
                }
            $SequenciaB = 0;
                if($cont1 < 2 && $cont2 < 2 && $cont3 < 2 && $cont4 < 2 && $cont5 < 2 && $cont6 == 0){
                    $SequenciaB = 40;
                }
            $Aleatorio =  $dado1 + $dado2 + $dado3 + $dado4 + $dado5;
        }
        echo "<br><br>Computador: ";
        $vetorcomputador = array();
            for($e = 0; $e < 5; $e++){
                $vetorcomputador[$e] = rand(1,6);
                if($vetorcomputador[$e] == 1){
                    echo '<img src="img/dado_1.png" style="width: 30px;"> ';
                }
                if($vetorcomputador[$e] == 2){
                    echo '<img src="img/dado_2.png" style="width: 30px;"> ';
                }
                if($vetorcomputador[$e] == 3){
                    echo '<img src="img/dado_3.png" style="width: 30px;"> ';
                }
                if($vetorcomputador[$e] == 4){
                    echo '<img src="img/dado_4.png" style="width: 30px;"> ';
                }
                if($vetorcomputador[$e] == 5){
                    echo '<img src="img/dado_5.png" style="width: 30px;"> ';
                }
                if($vetorcomputador[$e] == 6){
                    echo '<img src="img/dado_6.png" style="width: 30px;"> ';
                }
            }
            $dadopc1 = $vetorcomputador[0];
            $dadopc2 = $vetorcomputador[1];
            $dadopc3 = $vetorcomputador[2];
            $dadopc4 = $vetorcomputador[3];
            $dadopc5 = $vetorcomputador[4];
            $contdopc1 = 0;
                $jogadasdopc1 = 0;
                foreach($vetorcomputador as $dado){
                    if($dado == 1){
                        $contdopc1++;
                    }
                }
                if($contdopc1 > 1){
                    $jogadasdopc1 = $contdopc1 * 1;
                }
                if($contdopc1 > 2){
                    $trincadopc = 20;
                }
                if($contdopc1 > 3){
                    $quadradopc = 30;
                }
                if($contdopc1 > 4){
                    $Generaldopc = 50;
                }
            $contdopc2 = 0;
                $jogadasdopc2 = 0;
                foreach($vetorcomputador as $dado){
                    if($dado == 2){
                        $contdopc2++;
                    }
                }
                if($contdopc2 > 1){
                    $jogadasdopc2 = $contdopc2 * 2;
                }
                if($contdopc2 > 2){
                    $trincadopc = 20;
                }
                if($contdopc2 > 3){
                    $quadradopc = 30;
                }
                if($contdopc2 > 4){
                    $Generaldopc = 50;
                }
            $contdopc3 = 0;
                $jogadasdopc3 = 0;
                foreach($vetorcomputador as $dado){
                    if($dado == 3){
                        $contdopc3++;
                    }
                }
                if($contdopc3 > 1){
                    $jogadasdopc3 = $contdopc3 * 3;
                }
                if($contdopc3 > 2){
                    $trincadopc = 20;
                }
                if($contdopc3 > 3){
                    $quadradopc = 30;
                }
                if($contdopc3 > 4){
                    $Generaldopc = 50;
                }
            $contdopc4 = 0;
                $jogadasdopc4 = 0;
                foreach($vetorcomputador as $dado){
                    if($dado == 4){
                        $contdopc4++;
                    }
                }
                if($contdopc4 > 1){
                    $jogadasdopc4 = $contdopc4 * 4;
                }
                if($contdopc4 > 2){
                    $trincadopc = 20;
                }
                if($contdopc4 > 3){
                    $quadradopc = 30;
                }
                if($contdopc4 > 4){
                    $Generaldopc = 50;
                }
            $contdopc5 = 0;
                $jogadasdopc5 = 0;
                foreach($vetorcomputador as $dado){
                    if($dado == 5){
                        $contdopc5++;
                    }
                }
                if($contdopc5 > 1){
                    $jogadasdopc5 = $contdopc5 * 5;
                }
                if($contdopc5 > 2){
                    $trincadopc = 20;
                }
                if($contdopc5 > 3){
                    $quadradocp = 30;
                }
                if($contdopc5 > 4){
                    $Generaldopc = 50;
                }
            $contdopc6 = 0;
                $jogadasdopc6 = 0;
                foreach($vetorcomputador as $dado){
                    if($dado == 6){
                        $contdopc6++;
                    }
                }
                if($contdopc6 > 1){
                    $jogadasdopc6 = $contdopc6 * 6;
                }
                if($contdopc6 > 2){
                    $trincadopc = 20;
                }
                if($contdopc6 > 3){
                    $quadradopc = 30;
                }
                if($contdopc6 > 4){
                    $Generaldopc = 50;
                }
            $fhdopc = 0;
                if($contdopc1 > 1 && $contdopc2 > 2){
                    $fhdopc = 25;
                }
                if($contdopc1 > 1 && $contdopc3 > 2){
                    $fhdopc = 25;
                }
                if($contdopc1 > 1 && $contdopc4 > 2){
                    $fhdopc = 25;
                }
                if($contdopc1 > 1 && $contdopc5 > 2){
                    $fhdopc = 25;
                }
                if($contdopc1 > 1 && $contdopc6 > 2){
                    $fhdopc = 25;
                }
                if($contdopc2 > 1 && $contdopc1 > 2){
                    $fhdopc = 25;
                }
                if($contdopc2 > 1 && $contdopc3 > 2){
                    $fhdopc = 25;
                }
                if($contdopc2 > 1 && $contdopc4 > 2){
                    $fhdopc = 25;
                }
                if($contdopc2 > 1 && $contdopc5 > 2){
                    $fhdopc = 25;
                }
                if($contdopc2 > 1 && $contdopc6 > 2){
                    $fhdopc = 25;
                }
                if($contdopc3 > 1 && $contdopc1 > 2){
                    $fhdopc = 25;
                }
                if($contdopc3 > 1 && $contdopc2 > 2){
                    $fhdopc = 25;
                }
                if($contdopc3 > 1 && $contdopc4 > 2){
                    $fhdopc = 25;
                }
                if($contdopc3 > 1 && $contdopc5 > 2){
                    $fhdopc = 25;
                }
                if($contdopc3 > 1 && $contdopc6 > 2){
                    $fhdopc = 25;
                }
                if($contdopc4 > 1 && $contdopc1 > 2){
                    $fhdopc = 25;
                }
                if($contdopc4 > 1 && $contdopc2 > 2){
                    $fhdopc = 25;
                }
                if($contdopc4 > 1 && $contdopc3 > 2){
                    $fhdopc = 25;
                }
                if($contdopc4 > 1 && $contdopc5 > 2){
                    $fhdopc = 25;
                }
                if($contdopc4 > 1 && $contdopc6 > 2){
                    $fhdopc = 25;
                }
                if($contdopc5 > 1 && $contdopc1 > 2){
                    $fhdopc = 25;
                }
                if($contdopc5 > 1 && $contdopc2 > 2){
                    $fhdopc = 25;
                }
                if($contdopc5 > 1 && $contdopc3 > 2){
                    $fhdopc = 25;
                }
                if($contdopc5 > 1 && $contdopc4 > 2){
                    $fhdopc = 25;
                }
                if($contdopc5 > 1 && $contdopc6 > 2){
                    $fhdopc = 25;
                }
                if($contdopc6 > 1 && $contdopc1 > 2){
                    $fhdopc = 25;
                }
                if($contdopc6 > 1 && $contdopc2 > 2){
                    $fhdopc = 25;
                }
                if($contdopc6 > 1 && $contdopc3 > 2){
                    $fhdopc = 25;
                }
                if($contdopc6 > 1 && $contdopc4 > 2){
                    $fhdopc = 25;
                }
                if($contdopc6 > 1 && $contdopc5 > 2){
                    $fhdopc = 25;
                }
            $SAdopc = 0;
                if($contdopc1 == 0 && $contdopc2 < 2 && $contdopc3 < 2 && $contdopc4 < 2 && $contdopc5 < 2 && $contdopc6 < 2){
                    $SAdopc = 30;
                }
            $SBdopc = 0;
                if($contdopc1 < 2 && $contdopc2 < 2 && $contdopc3 < 2 && $contdopc4 < 2 && $contdopc5 < 2 && $contdopc6 == 0){
                    $SBdopc = 40;
                }
            $Aleatoriodopc = $dadopc1 + $dadopc2 + $dadopc3 + $dadopc4 + $dadopc5;

        echo "<br><br>";
        echo "<table border='3'>
        <tr>
            <th></th>
            <th>$jogador</th>
            <th>Computador</th>
        </tr>
        <tr>
            <td>Jogadas de 1</td>
            <td>$jogadas1</td>
            <td>$jogadasdopc1</td>
        </tr>
        <tr>
            <td>Jogadas de 2</td>
            <td>$jogadas2</td>
            <td>$jogadasdopc2</td>
        </tr>
        <tr>
            <td>Jogadas de 3</td>
            <td>$jogadas3</td>
            <td>$jogadasdopc3</td>
        </tr>
        <tr>
            <td>Jogadas de 4</td>
            <td>$jogadas4</td>
            <td>$jogadasdopc4</td>
        </tr>
        <tr>
            <td>Jogadas de 5</td>
            <td>$jogadas5</td>
            <td>$jogadasdopc5</td>
        </tr>
        <tr>
            <td>Jogadas de 6</td>
            <td>$jogadas6</td>
            <td>$jogadasdopc6</td>
        </tr>
        <tr>
            <td>Trinca</td>
            <td>$trinca</td>
            <td>$trincadopc</td>
        </tr>
        <tr>
            <td>Quadra</td>
            <td>$quadra</td>
            <td>$quadradopc</td>
        </tr>
        <tr>
            <td>Full House</td>
            <td>$fullhouse</td>
            <td>$fhdopc</td>
        </tr>
        <tr>
            <td>Sequencia Alta</td>
            <td>$SequenciaA</td>
            <td>$SAdopc</td>
        </tr>
        <tr>
            <td>Sequencia Baixa</td>
            <td>$SequenciaB</td>
            <td>$SBdopc</td>
        </tr>
        <tr>
            <td>General</td>
            <td>$General</td>
            <td>$Generaldopc</td>
        </tr>
        <tr>
            <td>Aleatório</td>
            <td>$Aleatorio</td>
            <td>$Aleatoriodopc</td>
        </tr>
        </table>";
        echo "<hr><br>";
        $soma = $jogadas1 + $jogadas2 + $jogadas3 + $jogadas4 + $jogadas5 + $jogadas6 + $trinca + $quadra + $fullhouse + $SequenciaA + $SequenciaB + $General + $Aleatorio;
        $somadopc = $jogadasdopc1 + $jogadasdopc2 + $jogadasdopc3 + $jogadasdopc4 + $jogadasdopc5 + $jogadasdopc6 + $trincadopc + $quadradopc + $fhdopc + $SAdopc + $SBdopc + $Generaldopc + $Aleatoriodopc;
        echo "$jogador: $soma - Computador: $somadopc";
        if($soma > $somadopc){
            echo "<h1>Vencedor: $jogador</h1>";
        }
        if($somadopc > $soma){
            echo "<h1>Vencedor: Computador</h1>";
        }
        if($soma == $somadopc){
            echo "<h1>Empate</h1>";
        }
    ?>
</body>
<html>
