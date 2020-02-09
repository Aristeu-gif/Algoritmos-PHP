<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="questaoDois.php" method="POST">
            <input name="entrada"  placeholder="Informe a mensagem">
            <button type="submit">enviar</button>
        </form>

        <?php
        //Exercicio 2
        //Primeira passada
        $mensagem = $_POST['entrada'];
        $alfabetoMin = range('a', 'z');
        $alfabetoMax = range('A', 'Z');


        for ($i = 0; $i < strlen($mensagem); $i++) {
            if (in_array($mensagem[$i], $alfabetoMin) || in_array($mensagem[$i], $alfabetoMax)) {
                $mensagem[$i] = chr(ord($mensagem[$i]) + 3);
            }
        }
       

        //Segunda passada
        $mensagem = strrev($mensagem);
        

        //Terceira Passada
        $metadeDaMensagem = round(strlen($mensagem) / 2);
        for ($i = $metadeDaMensagem; $i < strlen($mensagem); $i++) {
            $mensagem[$i] = chr(ord($mensagem[$i]) -1);
        }
        echo $mensagem . '<br>';
        ?>
    </body>
</html>
