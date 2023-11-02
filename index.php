<?php
    function semana(){
        echo "
            <hr />Domingo: 1<hr />
            Segunda: 2<hr />
            Terça: 3<hr />
            Quarta: 4<hr />
            Quinta: 5<hr />
            Sexta: 6<hr />
            Sábado: 7<hr />
        ";
        $dia = [
            "Domingo", "Segunda", "Terça", "Quarta", "Quinta",
            "Sexta", "Sábado"
        ];

        $num = readline("Digite um nº da lista acima: ");
        switch($num){
            case 1:
                echo "<br />O dia $num º da semana é ".$dia[0];
                break;
            case 2:
                echo "<br />O dia $num º da semana é ".$dia[1];
                break;
            case 3:
                echo "<br />O dia $num º da semana é ".$dia[2];
                break;
            case 4:
                echo "<br />O dia $num º da semana é".$dia[3];
                break;
            case 5:
                echo "<br />O dia $num º da semana é ".$dia[4];
                break;
            case 6:
                echo "<br />O dia $num º da semana é ".$dia[5];
                break;
            case 7:
                echo "<br />O dia $num º da semana é ".$dia[6];
                break;
            default:
                echo "<br />Digite um número da semana que esteja na lista acima.";
        }
    }
    semana();
?>
