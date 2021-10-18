<?php

    session_start();

    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolecentes';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
    // print_r($categorias)

    $nome = $_POST['name'];
    $idade = $_POST['idade'];

    if(empty($name)) 
{
    // echo'O nome não pode ser vazio';
    $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio, preencha novamente';
    // header(string:'location: Indexphaula2.php');
    return;
}

if(strlen($name)<3)
{
    echo ' O nome deve conter mais de 3 caracters';
    return;
}

if(strlen($name) > 40)
{
    echo ' O nome é muito extenso';
    return;
}

if(!is_numeric($idade))
{
    echo "Informe um número valido";
    return;
}

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