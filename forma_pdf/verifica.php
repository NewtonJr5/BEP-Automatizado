<?php
$contador1 = 0;
$contador2 = 0;
$contador3 = 0;
$contador4 = 0;
$contador5 = 0;
$contador6 = 0;
$contador7 = 0;
$contador8 = 0;
$contador9 = 0;
$contador10 = 0;
$contador11 = 0;
$contador12 = 0;
$contador13 = 0;
$contador14 = 0;
$contador15 = 0;
$contador17= 0;
$contador18 = 0;
$contador19 = 0;

for($i = 0; $i < count($_POST['tb1_numero_projeto']); $i++){
    if($_POST['tb1_numero_projeto'][$i] == '' &&
    $_POST['tb1_construcao_numero'][$i] == '' &&
    $_POST['tb1_projeto_arquitetonico'][$i] == '' &&
    $_POST['tb1_projeto_estrutural'][$i] == '' &&
    $_POST['tb1_projeto_hidrosanitario'][$i] == '') {
        break;
    } else {
        $contador1++;
    
    }
}

for($i = 0; $i < count($_POST['tb2_profissao']); $i++){
    if($_POST['tb2_profissao'][$i] == '' &&
    $_POST['tb2_organizacao'][$i] == '' &&
    $_POST['tb2_contato'][$i] == '' &&
    $_POST['tb2_localidade'][$i] == '' &&
    $_POST['tb2_email'][$i] == '' &&
    $_POST['tb2_numero'][$i] == '') {
        break;
    } else {
        $contador2++;
    
    }
}

for($i = 0; $i < count($_POST['tb3_objetivo']); $i++){
    if($_POST['tb3_objetivo'][$i] == '' &&
    $_POST['tb3_observações'][$i] == '') {
        break;
    } else {
        $contador3++;
    
    }
}

for($i = 0; $i < count($_POST['tb4_peso']); $i++){
    if($_POST['tb4_peso'][$i] == '' &&
    $_POST['tb4_descricao'][$i] == '' &&
    $_POST['tb4_uso'][$i] == '') {
        break;
    } else {
        $contador4++;
    
    }
}

for($i = 0; $i < count($_POST['tb5_nome']); $i++){
    if($_POST['tb5_nome'][$i] == '' &&
    $_POST['tb5_conteudo'][$i] == '' &&
    $_POST['tb5_fase'][$i] == '' &&
    $_POST['tb5_autor'][$i] == '' &&
    $_POST['tb5_ferramenta'][$i] == '') {
        break;
    } else {
        $contador5++;
    
    }
}

for($i = 0; $i < count($_POST['tb6_profissão']); $i++){
    if($_POST['tb6_profissão'][$i] == '' &&
    $_POST['tb6_nome'][$i] == '' &&
    $_POST['tb6_observacoes'][$i] == '') {
        break;
    } else {
        $contador6++;
    
    }
}

for($i = 0; $i < count($_POST['tb7_verbo']); $i++){
    if($_POST['tb7_verbo'][$i] == '' &&
    $_POST['tb7_porc'][$i] == '' &&
    $_POST['tb7_observacoes'][$i] == '') {
        break;
    } else {
        $contador7++;
    
    }
}

for($i = 0; $i < count($_POST['tb8_projeto']); $i++){
    if($_POST['tb8_projeto'][$i] == '' &&
    $_POST['tb8_categoria'][$i] == '' &&
    $_POST['tb8_LOD'][$i] == '' &&
    $_POST['tb8_descricao'][$i] == '' &&
    $_POST['tb8_ferramenta'][$i] == '') {
        break;
    } else {
        $contador8++;
    
    }
}

for($i = 0; $i < count($_POST['tb9_categoria']); $i++){
    if($_POST['tb9_categoria'][$i] == '' &&
    $_POST['tb9_norma'][$i] == '' &&
    $_POST['tb9_descricao'][$i] == '' &&
    $_POST['tb9_ferramenta'][$i] == '') {
        break;
    } else {
        $contador9++;
    
    }
}

for($i = 0; $i < count($_POST['tb10_nome']); $i++){
    if($_POST['tb10_nome'][$i] == '' &&
    $_POST['tb10_tipo'][$i] == '' &&
    $_POST['tb10_requisitos'][$i] == '' &&
    $_POST['tb10_logo'][$i] == '') {
        break;
    } else {
        $contador10++;
    
    }
}

for($i = 0; $i < count($_POST['tb11_sistema']); $i++){
    if($_POST['tb11_sistema'][$i] == '' &&
    $_POST['tb11_CPU'][$i] == '' &&
    $_POST['tb11_memoria'][$i] == '' &&
    $_POST['tb11_resolucao'][$i] == '' &&
    $_POST['tb11_adaptador'][$i] == '' &&
    $_POST['tb11_espaço'][$i] == '' &&
    $_POST['tb11_apontador'][$i] == '' &&
    $_POST['tb11_framework'][$i] == '' &&
    $_POST['tb11_navegador'][$i] == '' &&
    $_POST['tb11_conectividade'][$i] == '') {
        break;
    } else {
        $contador11++;
    
    }
}

for($i = 0; $i < count($_POST['tb12_construtora']); $i++){
    if($_POST['tb12_construtora'][$i] == '' &&
    $_POST['tb12_empreendimento'][$i] == '' &&
    $_POST['tb12_codigo'][$i] == '' &&
    $_POST['tb12_tipo'][$i] == '' &&
    $_POST['tb12_data'][$i] == '' &&
    $_POST['tb12_extensao'][$i] == '') {
        break;
    } else {
        $contador12++;
    
    }
}

for($i = 0; $i < count($_POST['tb13_modelo']); $i++){
    if($_POST['tb13_modelo'][$i] == '' &&
    $_POST['tb13_frequencia'][$i] == '' &&
    $_POST['tb13_cde'][$i] == '') {
        break;
    } else {
        $contador13++;
    
    }
}

for($i = 0; $i < count($_POST['tb14_hardware']); $i++){
    if($_POST['tb14_hardware'][$i] == '' &&
    $_POST['tb14_descricao'][$i] == '') {
        break;
    } else {
        $contador14++;
    
    }
}

for($i = 0; $i < count($_POST['tb15_checks']); $i++){
    if($_POST['tb15_checks'][$i] == '' &&
    $_POST['tb15_descricao'][$i] == '' &&
    $_POST['tb15_resposabilidade'][$i] == '' &&
    $_POST['tb15_software'][$i] == '' &&
    $_POST['tb15_frequencia'][$i] == '') {
        break;
    } else {
        $contador15++;
    
    }
}

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
        break;
    } else {
        $contador17++;
    
    }
}

for($i = 0; $i < count($_POST['tb18_uso']); $i++){
    if($_POST['tb18_uso'][$i] == '' &&
    $_POST['tb18_software'][$i] == '' &&
    $_POST['tb18_extensao'][$i] == '' &&
    $_POST['tb18_data'][$i] == '' &&
    $_POST['tb18_versao'][$i] == '') {
        break;
    } else {
        $contador18++;
    
    }
}

for($i = 0; $i < count($_POST['tb19_fase']); $i++){
    if($_POST['tb19_fase'][$i] == '' &&
    $_POST['tb19_disciplina'][$i] == '' &&
    $_POST['tb19_tolerancia'][$i] == '') {
        break;
    } else {
        $contador19++;
    
    }
}
