<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="questaoQuatro.php" method="POST">
            <input name="entrada" placeholder="informe a expressão">
            <button type="submit">enviar</button>
        </form>

        <?php
        //Exercicio 4
        $expressao = $_POST['entrada'];
        if ($expressao == null || $expressao == '') {
            
        } else {
            $quantidadeDeParenteses;
            for ($i = 0; $i < strlen($expressao); $i++) {
                if ($expressao[$i] === '(' || $expressao[$i] === ')') {
                    $quantidadeDeParenteses++;
                }
            }
          
            if (!($quantidadeDeParenteses % 2==0) || $expressao[0] == ')' || $expressao[strlen($expressao)] == '(') {
                echo 'está incorreto';
            }else{
                echo 'está correto';
            }
        }
        ?>
    </body>
</html>
