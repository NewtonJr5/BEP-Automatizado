// ADD ROWS

function add_row1(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb1_numero_projeto[]" placeholder="Número Projeto"></td>';
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb1_construcao_numero[]" placeholder="Construção Número do projeto"></td>';
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb1_projeto_arquitetonico[]" placeholder="Projeto Arquitetônico"></td>';
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tb1_projeto_estrutural[]" placeholder="Projeto Estrutural"></td>';
        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="text" name="tb1_projeto_hidrosanitario[]" placeholder="Projeto Hidrosanitario"></td>';
        var novaCelula5 = novaLinha.insertCell();
        novaCelula5.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>';

    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row2(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb2_profissao[]" placeholder="Profissão"></td>';
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb2_organizacao[]" placeholder="Organização"></td>';
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb2_contato[]" placeholder="Contato"></td>';
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tb2_localidade[]" placeholder="Localidade"></td>';
        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="text" name="tb2_email[]" placeholder="E-mail"></td>';
        var novaCelula5 = novaLinha.insertCell();
        novaCelula5.innerHTML = '<td><input type="text" name="tb2_numero[]" placeholder="Número"></td>';
        var novaCelula6 = novaLinha.insertCell();
        novaCelula6.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>';

    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row3(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb3_objetivo[]" placeholder="Objetivo"></td>';
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb3_observações[]" placeholder="Observaçôes"></td>';
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>';

    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row4(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb4_peso[]" placeholder="Peso"></td>';
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb4_descricao[]" placeholder="Descrição"></td>';
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb4_uso[]" placeholder="Uso bim"></td>';
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>';

    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row5(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb5_nome[]" placeholder="Nome do modelo"></td>';
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb5_conteudo[]" placeholder="Conteudo do Modelo"></td>';
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb5_fase[]" placeholder="Fase do Projeto"></td>';
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tb5_autor[]" placeholder="Autor"></td>';
        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="text" name="tb5_ferramenta[]" placeholder="Ferramenta(Software)"></td>';
        var novaCelula5 = novaLinha.insertCell();
        novaCelula5.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>';

    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row6(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb6_profissão[]" placeholder="Profissão"></td>';
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb6_nome[]" placeholder="Nome"></td>';
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb6_observacoes[]" placeholder="Observações"></td>';
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>';

    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row7(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb7_verbo[]" placeholder="Verbo no infinitivo"></td>';
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb7_porc[]" placeholder="X%"></td>';
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb7_observacoes[]" placeholder="Observações"></td>';
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>';

    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row8(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb8_projeto[]" placeholder="Projeto"></td>';
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb8_categoria[]" placeholder="Categoria"></td>';
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb8_LOD[]" placeholder="LOD"></td>';
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tb8_descricao[]" placeholder="Descrição"></td>';
        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="text" name="tb8_ferramenta[]" placeholder="Ferramenta(Software)"></td>';
        var novaCelula5 = novaLinha.insertCell();
        novaCelula5.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>';

    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row9(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb9_categoria[]" placeholder="Categoria"></td>'
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb9_norma[]" placeholder="Norma"></td>'
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb9_descricao[]" placeholder="Descrição"></td>'
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tb9_ferramenta[]" placeholder="Ferramenta"></td>'
        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>'


    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row10(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb10_nome[]" placeholder="Nome"></td>';
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb10_tipo[]" placeholder="Tipo"></td>';
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb10_requisitos[]" placeholder="Requisitos"></td>';
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tb10_logo[]" placeholder="Logo"></td>';

        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>';

    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row11(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb11_sistema[]" placeholder="Configuração(Sistema)"></td>';
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb11_CPU[]" placeholder="Configuração(CPU)"></td>';
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb11_memoria[]" placeholder="Configuração(Memória)"></td>';
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tb11_resolucao[]" placeholder="Configuração(Resolução)"></td>';
        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="text" name="tb11_adaptador[]" placeholder="Configuração(Adaptador)"></td>';

        var novaLinha1 = tabela.insertRow();
        var novaCelula5 = novaLinha1.insertCell();
        novaCelula5.innerHTML = '<td><input type="text" name="tb11_espaço[]" placeholder="Configuração(Espaço)"></td>';
        var novaCelula6 = novaLinha1.insertCell();
        novaCelula6.innerHTML = '<td><input type="text" name="tb11_apontador[]" placeholder="Configuração(Apontador)"></td>';
        var novaCelula7 = novaLinha1.insertCell();
        novaCelula7.innerHTML = '<td><input type="text" name="tb11_framework[]" placeholder="Configuração(Framework)"></td>';
        var novaCelula8 = novaLinha1.insertCell();
        novaCelula8.innerHTML = '<td><input type="text" name="tb11_navegador[]" placeholder="Configuração(Navegador)"></td>';
        var novaCelula9 = novaLinha1.insertCell();
        novaCelula9.innerHTML = '<td><input type="text" name="tb11_conectividade[]" placeholder="Configuração(Conectividade)"></td>';
        var novaCelula10 = novaLinha1.insertCell();
        novaCelula10.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row2(\'' + tabelaId + '\')"></td>';

        
    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row12(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb12_construtora[]" placeholder="Construtora"></td>'
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb12_empreendimento[]" placeholder="Empreendimento"></td>'
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb12_codigo[]" placeholder="Código"></td>'
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tb12_tipo[]" placeholder="Tipo"></td>'
        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="text" name="tb12_data[]" placeholder="Data"></td>'
        var novaCelula5 = novaLinha.insertCell();
        novaCelula5.innerHTML = '<td><input type="text" name="tb12_extensao[]" placeholder="Extensão"></td>'
        var novaCelula6 = novaLinha.insertCell();
        novaCelula6.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>';
    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row13(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb13_modelo[]" placeholder="Modelo"></td>'
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb13_frequencia[]" placeholder="Frequência"></td>'
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb13_cde[]" placeholder="CDE"></td>'
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>'
    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}


function add_row14(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);

    // Verifica se a tabela existe
    if (tabela) {
        // Cria uma nova linha
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb14_hardware[]" placeholder="Hardware"></td>'
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb14_descricao[]" placeholder="Descrição"></td>'
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>'
    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row15(tabelaId) {
    var tabela = document.getElementById(tabelaId);

    if (tabela) {
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb15_checks[]" placeholder="Checks"></td>'
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb15_descricao[]" placeholder="Descrição"></td>'
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb15_resposabilidade[]" placeholder="Responsabilidade"></td>'
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tb15_software[]" placeholder="Software"></td>'
        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="text" name="tb15_frequencia[]" placeholder="Frequência"></td>'
        var novaCelula5 = novaLinha.insertCell();
        novaCelula5.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>'

    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}


function add_row16(tabelaId) {
    var tabela = document.getElementById(tabelaId);

    if (tabela) {
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb16_nome[]" placeholder="Nome do Arquivo"></td>'
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb16_item[]" placeholder="Item a ser removido"></td>'
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb16_descricao[]" placeholder="Descrição/Justificativa"></td>'
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tb16_observacao[]" placeholder="Observação"></td>'
        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>'

    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_rowad(tabelaId) {
    var tabela = document.getElementById(tabelaId);

    if (tabela) {
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tbad_nome[]" placeholder="Nome do Arquivo"></td>'
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tbad_item[]" placeholder="Item a ser adicionado"></td>'
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tbad_descricao[]" placeholder="Descrição/Justificativa"></td>'
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tbad_observacao[]" placeholder="Observação"></td>'
        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>'

    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}


function add_row17(tabelaId) {
    var tabela = document.getElementById(tabelaId);

    if (tabela) {
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb17_software[]" placeholder="Software de Modelagem"></td>'
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb17_modelo[]" placeholder="Modelo (formato)"></td>'
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb17_unidade_com[]" placeholder="Unidade de medida de comprimento"></td>'
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tb17_unidade_vol[]" placeholder="Unidade de medida de volume"></td>'
        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="text" name="tb17_unidade_area[]" placeholder="Unidade de medida de área"></td>'

        var novaLinha1 = tabela.insertRow();

        var novaCelula5 = novaLinha1.insertCell();
        novaCelula5.innerHTML = '<td><input type="text" name="tb17_template[]" placeholder="Template a ser usado"></td>'
        var novaCelula6 = novaLinha1.insertCell();
        novaCelula6.innerHTML = '<td><input type="text" name="tb17_tamanho[]" placeholder="Tamanho do arquivo"></td>'
        var novaCelula7 = novaLinha1.insertCell();
        novaCelula7.innerHTML = '<td><input type="text" name="tb17_descricao[]" placeholder="Descrição"></td>'
        var novaCelula8 = novaLinha1.insertCell();
        novaCelula8.innerHTML = '<td><input type="text" name="tb17_planilhas[]" placeholder="Planilhas esperadas"></td>'
        var novaCelula9 = novaLinha1.insertCell();
        novaCelula9.innerHTML = '<td><input type="text" name="tb17_plantas[]" placeholder="Plantas e desenhos"></td>'

        var novaLinha2 = tabela.insertRow();

        var novaCelula10 = novaLinha2.insertCell();
        novaCelula10.innerHTML = '<td><input type="text" name="tb17_reportes[]" placeholder="Reportes esperadas"></td>'
        var novaCelula11 = novaLinha2.insertCell();
        novaCelula11.innerHTML = '<td><input type="text" name="tb17_cronogramas[]" placeholder="Cronogramas "></td>'
        var novaCelula12 = novaLinha2.insertCell();
        novaCelula12.innerHTML = '<td><input type="text" name="tb17_versao[]" placeholder="Versão do IFC "></td>'
        var novaCelula13 = novaLinha2.insertCell();
            novaCelula13.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row3(\'' + tabelaId + '\')"></td>'


    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row18(tabelaId) {
    var tabela = document.getElementById(tabelaId);

    if (tabela) {
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb18_uso[]" placeholder="USO BIM"></td>'
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb18_software[]" placeholder="Software e versão"></td>'
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb18_extensao[]" placeholder="Extensão"></td>'
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="text" name="tb18_data[]" placeholder="Data limite"></td>'
        var novaCelula4 = novaLinha.insertCell();
        novaCelula4.innerHTML = '<td><input type="text" name="tb18_versao[]" placeholder="Versão do modelo(Revisão)"></td>'
        var novaCelula5 = novaLinha.insertCell();
        novaCelula5.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>'

    
    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function add_row19(tabelaId) {
    var tabela = document.getElementById(tabelaId);

    if (tabela) {
        var novaLinha = tabela.insertRow();

        var novaCelula = novaLinha.insertCell();
        novaCelula.innerHTML = '<td><input type="text" name="tb19_fase[]" placeholder="Fase"></td>'
        var novaCelula1 = novaLinha.insertCell();
        novaCelula1.innerHTML = '<td><input type="text" name="tb19_disciplina[]" placeholder="Disciplina"></td>'
        var novaCelula2 = novaLinha.insertCell();
        novaCelula2.innerHTML = '<td><input type="text" name="tb19_tolerancia[]" placeholder="Tolerância"></td>'
        var novaCelula3 = novaLinha.insertCell();
        novaCelula3.innerHTML = '<td><input type="button" class="btn btn-dark" value="DELETE" onclick="delete_row1(\'' + tabelaId + '\')"></td>'
    
    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

// DELETE ROWS

function delete_row1(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);
    
    // Verifica se a tabela existe e tem pelo menos uma linha no corpo
    if (tabela) {
        var numLinhas = tabela.rows.length;

        // Verifica se há mais de uma linha (excluindo o cabeçalho)
        if (numLinhas > 1) {
            tabela.deleteRow(numLinhas - 1);
        } else {
            console.warn('Nenhuma linha para deletar.');
        }
    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}


function delete_row2(tabelaId) {
    // Seleciona a tabela pelo ID
    var tabela = document.getElementById(tabelaId);
    
    // Verifica se a tabela existe e tem pelo menos uma linha no corpo
    if (tabela) {
        var numLinhas = tabela.rows.length;

        // Verifica se há mais de uma linha (excluindo o cabeçalho)
        if (numLinhas > 2) {
            tabela.deleteRow(numLinhas - 1);
            tabela.deleteRow(numLinhas - 2);
        } else {
            console.warn('Nenhuma linha para deletar.');
        }
    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}

function delete_row3(tabelaId) {
    var tabela = document.getElementById(tabelaId);
    
    if (tabela) {
        var numLinhas = tabela.rows.length;

        if (numLinhas > 3) {
            tabela.deleteRow(numLinhas - 1);
            tabela.deleteRow(numLinhas - 2);
            tabela.deleteRow(numLinhas - 3);
        } else {
            console.warn('Nenhuma linha para deletar.');
        }
    } else {
        console.error('Tabela com ID ' + tabelaId + ' não encontrada.');
    }
}