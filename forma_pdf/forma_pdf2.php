<?php
    for($i = 0; $i < count($_POST['tb2_profissao']); $i++){
        if($_POST['tb2_profissao'][$i] == '' &&
    $_POST['tb2_organizacao'][$i] == '' &&
    $_POST['tb2_contato'][$i] == '' &&
    $_POST['tb2_localidade'][$i] == '' &&
    $_POST['tb2_email'][$i] == '' &&
    $_POST['tb2_numero'][$i] == '') {
        echo 'Preencha os campos';
        exit();
    }}
    $html = 
    "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
    <style>
        .tabela, th, td{
            border-collapse:collapse;
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        .bg-primary{
            background-color: blue;
            color: white;
        }

        .bg-success{
            background-color: green;
            color: white;
        }

        .alinhado {
            text-align: center;
        }
    </style>
        <title>Registros</title>
    </head>
    <body>";

    $html .="
        <h1>2-Informações de contatos</h1>";
    
    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Papel</th>
            <th class='bg-primary'>Organização</th>
            <th class='bg-primary'>Contato</th>
            <th class='bg-primary'>Localidade</th>
            <th class='bg-primary'>E-mail</th>
            <th class='bg-primary'>Número</th>
        </tr>";

for($i = 0; $i < count($_POST['tb2_profissao']); $i++){

    $html .='
            <tr><td>'.$_POST['tb2_profissao'][$i].'</td>
        ';
    
    $html .= '<td>'.$_POST['tb2_organizacao'][$i].'</td>';
    
    $html .= '<td>'.$_POST['tb2_contato'][$i].'</td>';

    $html .= '<td>'.$_POST['tb2_localidade'][$i].'</td>';
    
    $html .= '<td>'.$_POST['tb2_email'][$i].'</td>';

    $html .= '<td>'.$_POST['tb2_numero'][$i].'</td></tr>';

}

$html .= '</table>';

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);