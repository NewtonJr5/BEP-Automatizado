<?php
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

    $html .="
        <table class='tabela' border='1' align=center>
            <tr>
                <th class='bg-success'>Objetivo da Construtora</th>
                <th class='bg-success'>Observações</th>
            </tr>
            
";
    

    for($i = 0; $i < count($_POST['tb3_objetivo']); $i++){

        $html .='
            <tr><td>'.$_POST['tb3_objetivo'][$i].'</td><td>'.$_POST['tb3_observações'][$i].'</td></tr>';
    }
    $html .= '
        </table>';

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Peso</th>
            <th class='bg-primary'>Descrição do Objetivo</th>
            <th class='bg-primary'>Uso Bim</th>
        </tr>
            
";
    for($i = 0; $i < count($_POST['tb4_peso']); $i++){

        $html .='
            <tr><td>'.$_POST['tb4_peso'][$i].'</td><td>'.$_POST['tb4_descricao'][$i].'</td><td>'.$_POST['tb4_uso'][$i].'</td></tr>';
    }
    $html .= '
        </table>';
    
    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Nome do modelo</th>
            <th class='bg-primary'>Conteúdo do Modelo</th>
            <th class='bg-primary'>Fase do Projeto</th>
            <th class='bg-primary'>Autor</th>
            <th class='bg-primary'>Ferramenta(Software)</th>
        </tr>
            
";
    for($i = 0; $i < count($_POST['tb5_nome']); $i++){

        $html .='
            <tr><td>'.$_POST['tb5_nome'][$i].'</td><td>'.$_POST['tb5_conteudo'][$i].'</td><td>'.$_POST['tb5_fase'][$i].'</td><td>'.$_POST['tb5_autor'][$i].'</td><td>'.$_POST['tb5_ferramenta'][$i].'</td></tr>';
    }
    $html .= '
        </table>';

    $html .="
        <table class='tabela' border='1' align=center>
            <tr>
                <th class='bg-primary'>Profissão</th>
                <th class='bg-primary'>Nome</th>
                <th class='bg-primary'>Observações</th>
            </tr>
                
    ";
    for($i = 0; $i < count($_POST['tb6_profissão']); $i++){

        $html .='
            <tr><td>'.$_POST['tb6_profissão'][$i].'</td><td>'.$_POST['tb6_nome'][$i].'</td><td>'.$_POST['tb6_observacoes'][$i].'</td></tr>';
    }
    $html .= '
        </table>';

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th colspan='3' class='alinhado bg-primary'>Sintaxe dos objetivos específicos</th>
        </tr>
            
    ";
    $html .= "<tr>
    <th>Verbo no infinitivo+</th>
    <th>X%</th>
    <th>Complemento, detalhes, locais</th>
            </tr>";
    for($i = 0; $i < count($_POST['tb7_verbo']); $i++){

        $html .='
            <tr><td>'.$_POST['tb7_verbo'][$i].'</td><td>'.$_POST['tb7_porc'][$i].'</td><td>'.$_POST['tb7_observacoes'][$i].'</td></tr>';
    }
    $html .= '
        </table>';
    
    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Projeto</th>
            <th class='bg-primary'>Categoria</th>
            <th class='bg-primary'>LOD</th>
            <th class='bg-primary'>Descrição</th>
            <th class='bg-primary'>Ferramenta(Software)</th>
        </tr>
            
    ";

    for($i = 0; $i < count($_POST['tb8_projeto']); $i++){

        $html .='
            <tr><td>'.$_POST['tb8_projeto'][$i].'</td><td>'.$_POST['tb8_categoria'][$i].'</td><td>'.$_POST['tb8_LOD'][$i].'</td><td>'.$_POST['tb8_descricao'][$i].'</td><td>'.$_POST['tb8_ferramenta'][$i].'</td></tr>';
    }
    $html .= '
        </table>';

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Nome</th>
            <th class='bg-primary'>Tipo</th>
            <th class='bg-primary'>Requisitos</th>
            <th class='bg-primary'>Logo</th>

        </tr>
            
    ";

    for($i = 0; $i < count($_POST['tb9_nome']); $i++){

        $html .='
            <tr><td>'.$_POST['tb9_nome'][$i].'</td><td>'.$_POST['tb9_tipo'][$i].'</td><td>'.$_POST['tb9_requisitos'][$i].'</td><td>'.$_POST['tb9_logo'][$i].'</td></tr>';
    }
    $html .= '
        </table>';

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Hardware</th>
            <th class='bg-primary'>Sugestão de configuração</th>
        </tr>
    ";
    $html .="
        <tr>
            <td>Sistema Operacional</td>
            <td>".$_POST['tb10_sistema'][0]."</td>
        </tr>
    ";
    $html .="
        <tr>
            <td>Tipo de CPU</td>
            <td>".$_POST['tb10_CPU'][0]."</td>
        </tr>
    ";
    $html .="
        <tr>
            <td>Memória</td>
            <td>".$_POST['tb10_memoria'][0]."</td>
        </tr>
    ";
    $html .="
        <tr>
            <td>Resoluções do monitor de video</td>
            <td>".$_POST['tb10_resolucao'][0]."</td>
        </tr>
    ";
    $html .="
        <tr>
            <td>Adaptador de vídeo</td>
            <td>".$_POST['tb10_adaptador'][0]."</td>
        </tr>
    ";
    $html .="
        <tr>
            <td>Espaço em disco</td>
            <td>".$_POST['tb10_espaço'][0]."</td>
        </tr>
    ";
    $html .="
        <tr>
            <td>Dispositivo Apontador</td>
            <td>".$_POST['tb10_apontador'][0]."</td>
        </tr>
    ";
    $html .="
        <tr>
            <td>.NET Framework</td>
            <td>".$_POST['tb10_framework'][0]."</td>
        </tr>
    ";
    $html .="
        <tr>
            <td>Navegador</td>
            <td>".$_POST['tb10_navegador'][0]."</td>
        </tr>
    ";
    $html .="
        <tr>
            <td>Conectividade</td>
            <td>".$_POST['tb10_conectividade'][0]."</td>
        </tr>
    ";

    $html .= '
        </table>';

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th colspan='6'class='alinhado'>Nomes dos modelos podem ser descritos:</th>
        </tr>
        <tr>
            <th>Construtora</th>
            <th>Empreendimento</th>
            <th>Código</th>
            <th>Tipo</th>
            <th>Data</th>
            <th>Extensão</th>
        </tr>
    ";

    for($i = 0; $i < count($_POST['tb11_construtora']); $i++){

        $html .='
            <tr><td>'.$_POST['tb11_construtora'][$i].'</td><td>'.$_POST['tb11_empreendimento'][$i].'</td><td>'.$_POST['tb11_codigo'][$i].'</td><td>'.$_POST['tb11_tipo'][$i].'</td><td>'.$_POST['tb11_data'][$i].'</td><td>'.$_POST['tb11_extensao'][$i].'</td></tr>';
    }

    $html .= '
        </table>';

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Modelo</th>
            <th class='bg-primary'>Frequência</th>
            <th class='bg-primary'>CDE</th>
        </tr>
    ";

    for($i = 0; $i < count($_POST['tb12_modelo']); $i++){

        $html .='
            <tr><td>'.$_POST['tb12_modelo'][$i].'</td><td>'.$_POST['tb12_frequencia'][$i].'</td><td>'.$_POST['tb12_cde'][$i].'</td></tr>';
    }

    $html .= '
        </table>';
    
        $html .="
        <table class='tabela' border='1' align=center>
            <tr>
                <th>Checks</th>
                <th>Descrição</th>
                <th>Responsabilidade</th>
                <th>Software</th>
                <th>Frequência</th>
            </tr>
        ";

    for($i = 0; $i < count($_POST['tb13_checks']); $i++){
        $html .= "
        <tr>
            <td>".$_POST['tb13_checks'][$i]."</td>
            <td>".$_POST['tb13_descricao'][$i]."</td>
            <td>".$_POST['tb13_resposabilidade'][$i]."</td>
            <td>".$_POST['tb13_software'][$i]."</td>
            <td>".$_POST['tb13_frequencia'][$i]."</td>
        </tr>
        ";
    }
        
        $html .= '
        </table>';
    
    $html .= '
    </body>
</html>';

    file_put_contents('reg.html',$html);

?>
