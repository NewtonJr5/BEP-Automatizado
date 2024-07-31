<?php
for($i = 0; $i < count($_POST['tb1_numero_projeto']); $i++){
    if($_POST['tb1_numero_projeto'][$i] == '' &&
    $_POST['tb1_construcao_numero'][$i] == '' &&
    $_POST['tb1_projeto_arquitetonico'][$i] == '' &&
    $_POST['tb1_projeto_estrutural'][$i] == '' &&
    $_POST['tb1_projeto_hidrosanitario'][$i] == '') {
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
        <h1>1-Informações do projeto</h1>";

    for($i = 0; $i < count($_POST['tb1_numero_projeto']); $i++){
        $html .="
            <table class='tabela' border='1' align=center>
                <tr>
                    <th class='bg-primary'>Informações do projeto</th>
                    <th class='bg-primary'>Numeração</th>
                </tr>";

    

        $html .='
            <tr><td>Número Projeto</td>
        ';
    
        $html .= '<td>'.$_POST['tb1_numero_projeto'][$i].'</td></tr>
        ';
        $html .= '<tr><td>Construção Número do Projeto</td>';

        $html .= '<td>'.$_POST['tb1_construcao_numero'][$i].'</td></tr>
        ';

        $html .= '<tr><td>Projeto Arquitetônico</td>';

        $html .= '<td>'.$_POST['tb1_projeto_arquitetonico'][$i].'</td></tr>
        ';

        $html .= '<tr><td>Projeto Estrutural</td>';

        $html .= '<td>'.$_POST['tb1_projeto_estrutural'][$i].'</td></tr>
        ';

        $html .= '<tr><td>Projeto Hidrosanitario</td>';

        $html .= '<td>'.$_POST['tb1_projeto_hidrosanitario'][$i].'</td></tr>
        ';

        $html .= '</table>';

}

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);
    
    