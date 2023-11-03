<?php
    function ingredientesBolo(){
        $itens = [
            'Trigo',
            'Ovo',
            'Açucar'
        ];
        foreach($itens as $itemDaVez){
            $aux1 = $itemDaVez;

            if($aux1 === 'Ovo'){
                echo $aux1;
            }
        }
    }
    ingredientesBolo();
?>
