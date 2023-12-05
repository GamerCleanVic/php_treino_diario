<?php
echo $bodyColor = "<style>body{background-color:
     #181818;color: #ccc;}</style>";

class ApiTeste{
    function dadosApi($a, $b){
        return "$a<br>$b";
    }
}

$execApi = new ApiTeste();
echo $execApi->dadosApi("Título", "Body");
