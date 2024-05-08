<body>
    <div>
        <?php
        $favcolor = $_POST["favcolor"];
        // Utilizando o switch case para determinar a cor favorita

        switch ($favcolor) {
            case "vermelho":
                echo "<p>Sua cor favorita é vermelhol</p>";
                break;
            case "azul":
                echo "<p>Sua cor favorita é azull</p>";
                break;
            case "verde":
                echo "<p>Sua cor favorita é verde!</p>";
                break;
            default:
                echo "<p>Sua cor favorita não é vermelho, azul ou verdel </p>";
        }
        ?>
    </div>
</body>