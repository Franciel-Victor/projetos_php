<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>BoasVindas</title>
    </head>
    <body>
        <?php
            function BoasVindas(){
                $horas = date('H:');
                $minutosSegundos = date('i:s');

                if(($horas > 00)&&($horas < 12)){
                    echo "Bom dia! São extamente: ".$horas.$minutosSegundos;
                }elseif(($horas >= 12)&&($horas < 18)){
                    echo "Boa tarde! São extamente: ".$horas.$minutosSegundos;
                }else{
                    echo "Boa noite! São exatamente: ".$horas.$minutosSegundos;
                }
            }
            
            BoasVindas();
        ?>
    </body>
</html>