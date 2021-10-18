<?php
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolecentes';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
    // print_r($categorias)

    $nome = $_POST['name'];
    $idade = $_POST['idade'];
    // var_dump($nome);
    // var_dump($idade);

    if($idade >= 0 && $idade<= 12)
    {
        // echo 'infantil';
        for($i = 0; $i<= count($categorias); $i++)
        {
            if($categorias[$i] == 'infantil')
                echo "o nadador ", $nome, " compete na categoria " .$categorias;
        }
    }
    else if ($idade >= 13 && $idade <= 18)
    {
        for($i = 0; $i<= count($categorias); $i++)
        {
            if($categorias[$i] == 'infantil')
                echo "o nadador ", $nome, " compete na categoria " .$categorias;
        }
    }
    else 
    {
        for($i = 0; $i<= count($categorias); $i++)
        {
            if($categorias[$i] == 'infantil')
                echo "o nadador ", $nome, " compete na categoria " .$categorias;
        }
    }
?>