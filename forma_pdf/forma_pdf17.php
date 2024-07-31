<?php
      for($i = 0; $i < count($_POST['tb17_software']); $i++){
         if($_POST['tb17_software'][$i] == '' &&
         $_POST['tb17_modelo'][$i] == '' &&
         $_POST['tb17_unidade_com'][$i] == '' &&
         $_POST['tb17_unidade_vol'][$i] == '' &&
         $_POST['tb17_unidade_area'][$i] == '' &&
         $_POST['tb17_template'][$i] == '' &&
         $_POST['tb17_tamanho'][$i] == '' &&
         $_POST['tb17_descricao'][$i] == '' &&
         $_POST['tb17_planilhas'][$i] == '' &&
         $_POST['tb17_plantas'][$i] == '' &&
         $_POST['tb17_reportes'][$i] == '' &&
         $_POST['tb17_cronogramas'][$i] == '' &&
         $_POST['tb17_versao'][$i] == '') {
               echo 'Preencha os campos';
               exit();
         }
      }
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
    <h1> 16-Diretrizes de Modelagem </h1>";

    for($i = 0; $i < count($_POST['tb17_software']); $i++){

        $html .="
        <table class='tabela' border='1' align=center>
            <tr>
                <td class='bg-primary'>Software de Modelagem</td>
                <td>".$_POST['tb17_software'][$i]."</td>
            </tr>
            <tr>
               <td class='bg-primary'>Modelo(formato)</td>
               <td>".$_POST['tb17_modelo'][$i]."</td>
            </tr>
            <tr>
               <td class='bg-primary'>Unidade de medida de comprimento</td>
               <td>".$_POST['tb17_unidade_com'][$i]."</td>
            </tr>
            <tr>
               <td class='bg-primary'>Unidade de medida de volume</td>
               <td>".$_POST['tb17_unidade_vol'][$i]."</td>
            </tr>
            <tr>
               <td class='bg-primary'>Unidade de medida de área</td>
               <td>".$_POST['tb17_unidade_area'][$i]."</td>
            </tr>
            <tr>
               <td class='bg-primary'>Template a ser usado</td>
               <td>".$_POST['tb17_template'][$i]."</td>
            </tr>
            <tr>
               <td class='bg-primary'>Tamanho do arquivo</td>
               <td>".$_POST['tb17_tamanho'][$i]."</td>
            </tr>
            <tr>
               <td class='bg-primary'>Descrição</td>
               <td>".$_POST['tb17_descricao'][$i]."</td>
            </tr>
            <tr>
               <td class='bg-primary'>Planilhas esperadas</td>
               <td>".$_POST['tb17_planilhas'][$i]."</td>
            </tr>
            <tr>
               <td class='bg-primary'>Plantas e desenhos</td>
               <td>".$_POST['tb17_plantas'][$i]."</td>
            </tr>
            <tr>
               <td class='bg-primary'>Reportes esperadas</td>
               <td>".$_POST['tb17_reportes'][$i]."</td>
            </tr>
            <tr>
               <td class='bg-primary'>Cronogramas</td>
               <td>".$_POST['tb17_cronogramas'][$i]."</td>
            </tr>
            <tr>
               <td class='bg-primary'>Versão do IFC</td>
               <td>".$_POST['tb17_versao'][$i]."</td>
            </tr>

        </table>
        ";
    
    }


    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);