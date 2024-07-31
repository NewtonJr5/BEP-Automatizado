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

    require 'verifica.php';

    if ($contador1 == 0 && $contador2 == 0 && $contador3 == 0 && $contador4 == 0 && $contador5 == 0 && $contador6 == 0 && $contador7 == 0 && $contador8 == 0 && $contador9 == 0 && $contador10 == 0 && $contador11 == 0 && $contador12 == 0 && $contador13 == 0 && $contador14 == 0 && $contador15 == 0 && $contador17 == 0 && $contador18 == 0 && $contador19 == 0) {
        exit('Nenhum dado foi inserido');
    }

    if ($contador1 > 0) {

    $html .="
        <h3>1-Informações do projeto</h3>";
        
    for($i = 0; $i < $contador1; $i++){
        

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

    }

    if ($contador2 > 0) {
        $html .="
        <h3>2-Informações de contatos</h3>";

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

        for($i = 0; $i < $contador2; $i++){
        
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
    }
    
    if ($contador3 > 0) {

    $html .="
        <h3> 3-Objetivos da construtora </h3>";

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
    
    }

    if ($contador4 > 0) {

    $html .="
    <h3> 4-Usos BIM </h3>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Peso</th>
            <th class='bg-primary'>Descrição do Objetivo</th>
            <th class='bg-primary'>Uso Bim</th>
        </tr>
            
";
    for($i = 0; $i < $contador4; $i++){

        $html .='
            <tr><td>'.$_POST['tb4_peso'][$i].'</td><td>'.$_POST['tb4_descricao'][$i].'</td><td>'.$_POST['tb4_uso'][$i].'</td></tr>';
    }
    $html .= '
        </table>';
    
    }

    if ($contador5 > 0) {
    $html .="
        <h3> 5-Modelos necessários </h3>";
    
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
    for($i = 0; $i < $contador5; $i++){

        $html .='
            <tr><td>'.$_POST['tb5_nome'][$i].'</td><td>'.$_POST['tb5_conteudo'][$i].'</td><td>'.$_POST['tb5_fase'][$i].'</td><td>'.$_POST['tb5_autor'][$i].'</td><td>'.$_POST['tb5_ferramenta'][$i].'</td></tr>';
    }
    $html .= '
        </table>';

    }
    
    if ($contador6 > 0) {

    $html .="
        <h3> 6-Profissões do projeto </h3>";

    $html .="
        <table class='tabela' border='1' align=center>
            <tr>
                <th class='bg-primary'>Profissão</th>
                <th class='bg-primary'>Nome</th>
                <th class='bg-primary'>Observações</th>
            </tr>
                
    ";
    for($i = 0; $i < $contador6; $i++){

        $html .='
            <tr><td>'.$_POST['tb6_profissão'][$i].'</td><td>'.$_POST['tb6_nome'][$i].'</td><td>'.$_POST['tb6_observacoes'][$i].'</td></tr>';
    }
    $html .= '
        </table>';
    }

    if ($contador7 > 0) {

    $html .="
        <h3> 7-Objetivos coorporativos </h3>";

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
    for($i = 0; $i < $contador7; $i++){

        $html .='
            <tr><td>'.$_POST['tb7_verbo'][$i].'</td><td>'.$_POST['tb7_porc'][$i].'</td><td>'.$_POST['tb7_observacoes'][$i].'</td></tr>';
    }
    $html .= '
        </table>';
    }

    if ($contador8 > 0) {

    $html .="
        <h3> 8-LOD </h3>";
    
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

    for($i = 0; $i < $contador8; $i++){

        $html .='
            <tr><td>'.$_POST['tb8_projeto'][$i].'</td><td>'.$_POST['tb8_categoria'][$i].'</td><td>'.$_POST['tb8_LOD'][$i].'</td><td>'.$_POST['tb8_descricao'][$i].'</td><td>'.$_POST['tb8_ferramenta'][$i].'</td></tr>';
    }
    $html .= '
        </table>';
    }

    if ($contador9 > 0) {    

        $html .="
        <h3> 9-LOD-G Classificação e interpretação BIM Fórum </h3>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Categoria</th>
            <th class='bg-primary'>Norma</th>
            <th class='bg-primary'>Descrição</th>
            <th class='bg-primary'>Ferramenta(Software)</th>

        </tr>";

    for($i = 0; $i < $contador9; $i++){
            
            $html .='
                <tr><td>'.$_POST['tb9_categoria'][$i].'</td><td>'.$_POST['tb9_norma'][$i].'</td><td>'.$_POST['tb9_descricao'][$i].'</td><td>'.$_POST['tb9_ferramenta'][$i].'</td></tr>';
    }

    $html .= '
        </table>';
    }

    if ($contador10 > 0) {

        $html .="
        <h3> 10-Software e suas recomendações </h3>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Nome</th>
            <th class='bg-primary'>Tipo</th>
            <th class='bg-primary'>Requisitos</th>
            <th class='bg-primary'>Logo</th>

        </tr>
            
    ";

    for($i = 0; $i < $contador10; $i++){

        $html .='
            <tr><td>'.$_POST['tb10_nome'][$i].'</td><td>'.$_POST['tb10_tipo'][$i].'</td><td>'.$_POST['tb10_requisitos'][$i].'</td><td>'.$_POST['tb10_logo'][$i].'</td></tr>';
    }


    $html .= '
        </table>';

    }

    if ($contador11 > 0) {

        $html .="
        <h3> 11-Hardware da Estação de Trabalho </h3>";


    for($i = 0; $i < $contador11; $i++){

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
                <td>".$_POST['tb11_sistema'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Tipo de CPU</td>
                <td>".$_POST['tb11_CPU'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Memória</td>
                <td>".$_POST['tb11_memoria'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Resoluções do monitor de video</td>
                <td>".$_POST['tb11_resolucao'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Adaptador de vídeo</td>
                <td>".$_POST['tb11_adaptador'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Espaço em disco</td>
                <td>".$_POST['tb11_espaço'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Dispositivo Apontador</td>
                <td>".$_POST['tb11_apontador'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>.NET Framework</td>
                <td>".$_POST['tb11_framework'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Navegador</td>
                <td>".$_POST['tb11_navegador'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Conectividade</td>
                <td>".$_POST['tb11_conectividade'][0]."</td>
            </tr>
        ";

        $html .= '
            </table>';

    }

    }

    if ($contador12 > 0) {

    $html .="
    <h3> 12-Nomeação dos projetos </h3>";

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

    for($i = 0; $i < $contador12; $i++){

        $html .='
            <tr><td>'.$_POST['tb12_construtora'][$i].'</td><td>'.$_POST['tb12_empreendimento'][$i].'</td><td>'.$_POST['tb12_codigo'][$i].'</td><td>'.$_POST['tb12_tipo'][$i].'</td><td>'.$_POST['tb12_data'][$i].'</td><td>'.$_POST['tb12_extensao'][$i].'</td></tr>';
    }

    $html .= '
        </table>';

    }

    if ($contador13 > 0) {

    $html .="
        <h3> 13-Frequência de atualizações, Entregável, CDE </h3>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Modelo</th>
            <th class='bg-primary'>Frequência</th>
            <th class='bg-primary'>CDE</th>
        </tr>
    ";

    for( $i = 0; $i < $contador13; $i++ ){

        $html .='
            <tr><td>'.$_POST['tb13_modelo'][$i].'</td><td>'.$_POST['tb13_frequencia'][$i].'</td><td>'.$_POST['tb13_cde'][$i].'</td></tr>';
    }

    $html .= '
        </table>';

    }

    if ($contador14 > 0) {

        $html .="
        <h3> 14-Hardware </h3>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Hardware</th>
            <th class='bg-primary'>Descrição</th>
        </tr>
    ";

    for( $i = 0; $i < $contador14; $i++ ){

        $html .='
            <tr><td>'.$_POST['tb14_hardware'][$i].'</td><td>'.$_POST['tb14_descricao'][$i].'</td></tr>';
    }

    $html .= '
        </table>';

    }

    if ($contador15 > 0) {

        $html .="
        <h3> 15-Controle de qualidade </h3>";
    
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

    for( $i = 0; $i < $contador15; $i++ ){
        $html .= "
        <tr>
            <td>".$_POST['tb15_checks'][$i]."</td>
            <td>".$_POST['tb15_descricao'][$i]."</td>
            <td>".$_POST['tb15_resposabilidade'][$i]."</td>
            <td>".$_POST['tb15_software'][$i]."</td>
            <td>".$_POST['tb15_frequencia'][$i]."</td>
        </tr>
        ";
    }
        
        $html .= '
        </table>';

    }

    if ($contador17 > 0) {

        $html .="
        <h3> 16-Diretrizes de Modelagem </h3>";

    

    for( $i = 0; $i < $contador17; $i++ ){

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

    }

    if ($contador18 > 0) {

    $html .="
    <h3> 17-Arquivos </h3>";

        $html .="
        <table class='tabela' border='1' align=center>
            <tr>
                <th class='bg-primary'>USO BIM</th>
                <th class='bg-primary'>Software e versão</th>
                <th class='bg-primary'>Extensão</th>
                <th class='bg-primary'>Data limite</th>
                <th class='bg-primary'>Versão do modelo(Revisão)</th>
            </tr>

        ";

        for ( $i = 0; $i < $contador18; $i++ ) { 
            $html .='
                <tr>
                    <td>'.$_POST['tb18_uso'][$i].'</td>
                    <td>'.$_POST['tb18_software'][$i].'</td>
                    <td>'.$_POST['tb18_extensao'][$i].'</td>
                    <td>'.$_POST['tb18_data'][$i].'</td>
                    <td>'.$_POST['tb18_versao'][$i].'</td>
                </tr>';
        }

        $html .= '
            </table>';

    }

    if ($contador19 > 0) {

        $html .="
        <h3> 18-Tolerância </h3>";

        $html .="
        <table class='tabela' border='1' align=center>
            <tr>
                <th class='bg-primary'>Fase</th>
                <th class='bg-primary'>Disciplina</th>
                <th class='bg-primary'>Tolerância</th>
            </tr>

        ";

        for ( $i = 0; $i < $contador19; $i++ ) {
            $html .='
                <tr><td>'.$_POST['tb19_fase'][$i].'</td><td>'.$_POST['tb19_disciplina'][$i].'</td><td>'.$_POST['tb19_tolerancia'][$i].'</td></tr>';
        }

        $html .= '
            </table>';


    $html .= '
    </body>
</html>';

    }

    file_put_contents('reg.html',$html);

?>
