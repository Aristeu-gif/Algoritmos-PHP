<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="questaoUm.php" method="POST">
            <input name="entrada">
            <button type="submit">enviar</button>
        </form>

        <?php
        //Exercicio 1
        $ano = $_POST["entrada"];
        if ($ano < 2000) {
            
        } else {
            if(!bissexto($ano) && !huluculu($ano) && !bulukulu($ano)){
                echo 'This is an ordinary year. <br>';
            }
            if(bissexto($ano)){
                echo 'This is leap year. <br>';
            }
            if(huluculu($ano)){
             echo 'This is huluculu festival year. <br>';  
            }
            if(bulukulu($ano)){
                echo 'This is bulukulu festival year. <br>';
            }
        }

        function bissexto($ano) {
            if ($ano % 4 == 0 && $ano % 100 != 0 || $ano % 400 == 0) {
                return true;
            } else {
                
                return false;
            }
        }

        function huluculu($ano) {
            if ($ano % 15 == 0) {
                return true;
            }else{
                return false;
            }
        }

        function bulukulu($ano) {
            if ($ano % 55 == 0 && bissexto($ano)) {
                return true;
            }else{
                return false;
            }
        }
        ?>
    </body>
</html>
