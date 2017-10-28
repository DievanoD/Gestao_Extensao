<?php

// include 'mpdf/mpdf.php';
require_once(__DIR__.'/../../vendor/autoload.php');
$MeuEstilo = file_get_contents('estilo.css');

$mpdf = new mPDF('utf-8',    // mode - default ''
                  'A4',    // format - A4, for example, default ''
                  '',     // font size - default 0
                  '',    // default font family
                  15,    // margin_left
                  15,    // margin right
                  60,     // margin top
                  15,    // margin bottom
                  5,     // margin header
                  8,     // margin footer
                  'P');

$mpdf->SetDisplayMode('fullpage');

$header = '<img src="imagemMinisterio.jpg" alt="" id="headerImage">' . '<p id="headerText">MINISTÉRIO DA EDUCAÇÃO<br>
            SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA<br>
            INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO TRIÂNGULO MINEIRO<br>
            PRÓ-REITORIA DE EXTENSÃO<br>
            Av. Dr. Randolfo Borges Junior nº 2900 – Univerdecidade – CEP: 38064-200 – Uberaba/MG<br>
            Telefone: (34) 3326-1124 / Fax: (34) 3326-1101 / Email: proext@iftm.edu.br </p>' ;

$footer = '<p id="footerText">Edital nº 05/'. date('Y') . '– Programa de apoio a projetos de extensão do IFTM – Página {PAGENO} de {nb}</p>';

$identificacao = '<p id="formularioDeInscricao">ANEXO I <br>Formulário de Inscrição – Projeto de Extensão</p>

<h4>1 Identificação<br><br>1.1 Título do projeto<h4>

<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>1.2 Resumo <i>(máximo 250 palavras)</i></h4>

<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>1.3 Origem</h4>

<table border="1" class="tabela">
    <tbody>
       <tr>
           <td class="marcar">
            <p></p>
           </td>
           <td class="coluna">
            <p>campus Avançado Campina Verde</p>
           </td>

           <td >
            <p> </p>
           </td>
           <td>
            <p>campus Uberlândia Centro</p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>campus Ituiutaba</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>campus Paracatu</p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>campus Uberaba</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>campus Patos de Minas </p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>campus Uberaba Parque Tecnológico</p>
           </td>

           <td class="marcar">
            <center><p>X</p></center>
           </td>
           <td>
            <p>campus Patrocínio</p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p></p>
           </td>
           <td>
            <p>campus Uberlândia</p>
           </td>
           <td>
           </td>
           <td>
           </td>
       </tr>
    </tbody>
</table>

<h4>1.4 Coordenação</h4>
<table border="1" class="tabela">
    <tbody>
       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td class="coluna">
            <p>Docente</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Técnico Administrativo</p>
           </td>
       </tr>
    </tbody>
</table><br>

<label>Nome : </label><br>
<label>Área/Departamento de Atuação : </label><br>
<label>Telefone : </label><br>
<label>E-mail : </label><br>
<label>Formação Acadêmica : </label><br>
<label>Carga Horária total dedicada ao projeto : </label>

<h4>1.5 Equipe executora (repetir para todos os membros)</h4>
<table border="1" class="tabela">
    <tbody>
       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Servidor</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Aluno</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Externo Parceiro</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Externo Voluntário</p>
           </td>
       </tr>
    </tbody>
</table><br>

<label>Nome : </label><br>
<label>Área/Departamento de Atuação : </label><br>
<label>Telefone : </label><br>
<label>E-mail : </label><br>
<label>Formação Acadêmica : </label><br>
<label>Carga Horária total dedicada ao projeto : </label>

<h4>1.6 Parceiros externos (instituições, empresas, entidades, etc.)</h4>
<table border="1" class="tabela">
    <tbody>
       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Sim</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Não</p>
           </td>
       </tr>
    </tbody>
</table><br>

<label>Nome : </label><br>
<label>Endereço Completo : </label><br>
<label>Responsável : </label><br>
<label>Telefone : </label><br>
<label>E-mail : </label><br>
<label>Área/Departamento de Atuação : </label><br>
<label>Responsabilidades na execução  : </label><br>
<label>Existência de acordo ou convênio formalizado : </label>

<h4>1.7 Linha de extensão (item 3 do edital __/____)</h4>
<table border="1" class="tabela">
    <tbody>
       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Projeto social</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Projeto de formação profissional</p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Projetos culturais, artísticos e esportivos</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p></p>
           </td>
       </tr>
    </tbody>
</table>

<h4>1.8 Área do conhecimento</h4>

<table border="1" class="tabela">
    <tbody>
       <tr>
           <td class="marcar">
            <p></p>
           </td>
           <td class="coluna">
            <p>Ciências Exatas e da Terra</p>
           </td>

           <td >
            <p> </p>
           </td>
           <td>
            <p>Ciências Sociais Aplicadas</p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Ciências Biológicas</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Ciências Humanas</p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Engenharias</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Linguística, Letras e Artes</p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Ciências da Saúde</p>
           </td>

           <td class="marcar">
            <center><p>X</p></center>
           </td>
           <td>
            <p>Ciências Agrárias</p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p></p>
           </td>
           <td>
            <p>Outra</p>
           </td>
           <td>
           </td>
           <td>
           </td>
       </tr>
    </tbody>
</table>

<h4>1.9 Área temática</h4>

<table border="1" class="tabela">
    <tbody>
       <tr>
           <td class="marcar">
            <p></p>
           </td>
           <td class="coluna">
            <p>Comunicação</p>
           </td>

           <td >
            <p> </p>
           </td>
           <td>
            <p>Meio Ambiente</p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Cultura</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Saúde</p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Direitos Humanos e Justiça</p>
           </td>

           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Tecnologia</p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p> </p>
           </td>
           <td>
            <p>Educação</p>
           </td>

           <td class="marcar">
            <center><p>X</p></center>
           </td>
           <td>
            <p>Trabalho</p>
           </td>
       </tr>

       <tr>
           <td class="marcar">
            <p></p>
           </td>
           <td>
            <p>Outra</p>
           </td>
           <td>
           </td>
           <td>
           </td>
       </tr>
    </tbody>
</table>

<h4>1.10 Experiência do coordenador em projetos de extensão no IFTM (listar os projetos e/ou ações de extensão)</h4>

<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>1.11 Local de execução</h4>

<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>1.12 Carga horária (relacionado à execução total do projeto)</h4>

<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>1.13 Período de execução</h4>

<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>2 Justificativa (caso contemplem, no projeto, as ações que dão ênfase à interdisciplinaridade, à transdisciplinaridade e à diversidade cultural, destacar nesse espaço. máximo 10 linhas)</h4>

<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>3 Objetivos, metas e cronograma de execução</h4>

<h4>3.1 Objetivo geral (expressa o que se pretende alcançar ao final do projeto e que será atingido pela somatória das ações de todos os envolvidos)</h4>

<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>3.2 Objetivos específicos (são desdobramentos do objetivo geral que orientam as metas a serem alcançadas através de indicadores físicos)</h4>

<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>3.3 Cronograma de execução (listar ações associadas aos objetivos específicos)</h4>
<table border="1" class="tabela">
    <tbody>
       <tr>
           <td>
            <p>Objetivos Específicos</p>
           </td>

           <td >
            <p>Ações</p>
           </td>

           <td>
            <p>Execução</p>
           </td>
       </tr>

       <tr>
           <td>
            <p>Cultura</p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p></p>
           </td>
       </tr>

       <tr>
           </td>
           <td>
            <p></p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p>Tecnologia</p>
           </td>
       </tr>

       <tr>
           <td>
            <p></p>
           </td>

           <td >
            <center><p>X</p></center>
           </td>
           <td>
            <p>Trabalho</p>
           </td>
       </tr>

       <tr>
           <td>
            <p>Outra</p>
           </td>
           <td>
           </td>
           <td>
           </td>
       </tr>
    </tbody>
</table>

<h4>4 Público alvo (descrição do público que será beneficiado pelo projeto – quem e quantidade)</h4>
<p>Outra</p>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>5 Estruturação da proposta (considerando a equipe executora do projeto, e não o público-alvo)</h4>
<p>Outra</p>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>6. Articulação entre ensino, pesquisa e extensão<br><br>
6.1 Envolvimento de alunos extensionistas (descrição de atividades – máximo 10 linhas)</h4>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>6.2 Previsão em projeto pedagógico de curso do IFTM</h4>
<p>sim</p>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>6.3 Acompanhamento e avaliação (descrição de como irá ocorrer o acompanhamento dos
objetivos e metas e como será realizada a reflexão sobre as ações de extensão – máximo 10
linhas)</h4>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>6.4 Compatibilidade com grupo de pesquisa do IFTM</h4>
<p>sim</p>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>6.5 Vinculação a Projeto de pesquisa do IFTM</h4>
<p>sim</p>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>6.6 Publicações do coordenador do projeto sobre projetos de extensão (descrição das
publicações da equipe executora sobre projetos de extensão)</h4>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>6.7 Participações do coordenador do projeto em eventos de extensão (descrição das
publicações da equipe executora sobre projetos de extensão)</h4>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>7. Resultados sociais, econômicos e ambientais esperados no âmbito regional (máximo 10
linhas)</h4>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>8. Descrição do projeto e metodologia de desenvolvimento (descrição geral do projeto -
máximo 10 linhas)</h4>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>8.1 Metodologia para execução das atividades (máximo 20 linhas, incluindo procedimentos
de avaliação)</h4>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>8.2 Orçamento do projeto<br><br>
8.2.1 Bolsa – auxílio financeiro a estudantes de cursos regulares do IFTM
(3.3.3.9.0.18.00) (listar, descriminando cada bolsa individualmente, tendo como unidade o
prazo, em meses, de sua duração)</h4>
<table border="1" class="tabela">
    <tbody>
       <tr>
           <td>
            <p>Item</p>
           </td>

           <td >
            <p>Descrição detalhada</p>
           </td>

           <td>
            <p>Unidade</p>
           </td>

           <td>
            <p>Quantidade</p>
           </td>

           <td>
            <p>Custo unitário (R$)</p>
           </td>

           <td>
            <p>Custo total (R$)</p>
           </td>
       </tr>

       <tr>
           <td>
            <p>Cultura</p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p></p>
           </td>

           </td>
           <td>
            <p></p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p>Tecnologia</p>
           </td>
       </tr>

    </tbody>
</table>

<h4>8.2.2 Investimento (equipamento e material permanente) (4490-52) (listar)</h4>
<table border="1" class="tabela">
    <tbody>
       <tr>
           <td>
            <p>Item</p>
           </td>

           <td >
            <p>Descrição detalhada</p>
           </td>

           <td>
            <p>Unidade</p>
           </td>

           <td>
            <p>Quantidade</p>
           </td>

           <td>
            <p>Custo unitário (R$)</p>
           </td>

           <td>
            <p>Custo total (R$)</p>
           </td>
       </tr>

       <tr>
           <td>
            <p>Cultura</p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p></p>
           </td>

           </td>
           <td>
            <p></p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p>Tecnologia</p>
           </td>
       </tr>

    </tbody>
</table>

<h4>8.2.3 Consumo (3390-30) (listar)</h4>
<table border="1" class="tabela">
    <tbody>
       <tr>
           <td>
            <p>Item</p>
           </td>

           <td >
            <p>Descrição detalhada</p>
           </td>

           <td>
            <p>Unidade</p>
           </td>

           <td>
            <p>Quantidade</p>
           </td>

           <td>
            <p>Custo unitário (R$)</p>
           </td>

           <td>
            <p>Custo total (R$)</p>
           </td>
       </tr>

       <tr>
           <td>
            <p>Cultura</p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p></p>
           </td>

           </td>
           <td>
            <p></p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p>Tecnologia</p>
           </td>
       </tr>

    </tbody>
</table>

<h4>8.2.4 Serviço (3390-39) (listar)</h4>
<table border="1" class="tabela">
    <tbody>
       <tr>
           <td>
            <p>Item</p>
           </td>

           <td >
            <p>Descrição detalhada</p>
           </td>

           <td>
            <p>Unidade</p>
           </td>

           <td>
            <p>Quantidade</p>
           </td>

           <td>
            <p>Custo unitário (R$)</p>
           </td>

           <td>
            <p>Custo total (R$)</p>
           </td>
       </tr>

       <tr>
           <td>
            <p>Cultura</p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p></p>
           </td>

           </td>
           <td>
            <p></p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p>Tecnologia</p>
           </td>
       </tr>

    </tbody>
</table>

<h4>8.2.5 Orçamento total do projeto</h4>
<table border="1" class="tabela">
    <tbody>
       <tr>
           <td>
            <p>Item</p>
           </td>

           <td >
            <p>Rubrica</p>
           </td>

           <td>
            <p>Recurso aprovado (R$)</p>
           </td>

           <td>
            <p>Recurso aplicado (R$)</p>
           </td>

           <td>
            <p>Recurso a ser devolvido (R$)</p>
           </td>

       </tr>

       <tr>
           <td>
            <p>Cultura</p>
           </td>

           <td>
            <p></p>
           </td>

           </td>
           <td>
            <p></p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p>Tecnologia</p>
           </td>
       </tr>

    </tbody>
</table>

<h4>9. Documentos anexos (listar cartas de apoio ao projeto/termos de convênio/cooperação,
etc., se existentes)</h4>
<div class="divTexto">
        <p id="pTexto"></p>
</div>

<h4>10. Contrapartida do campus (listar itens tidos como contrapartida do campus ao qual se
encontra vinculado – item 1.5 “f” do edital __/____))</h4>
<table border="1" class="tabela">
    <tbody>
       <tr>
           <td>
            <p>Item</p>
           </td>

           <td >
            <p>Descrição detalhada</p>
           </td>

           <td>
            <p>Unidade</p>
           </td>

           <td>
            <p>Quantidade</p>
           </td>

           <td>
            <p>Custo unitário (R$)</p>
           </td>

           <td>
            <p>Custo total (R$)</p>
           </td>
       </tr>

       <tr>
           <td>
            <p>Cultura</p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p></p>
           </td>

           </td>
           <td>
            <p></p>
           </td>

           <td>
            <p> </p>
           </td>
           <td>
            <p>Tecnologia</p>
           </td>
       </tr>

    </tbody>
</table>


';
$html = ob_get_clean();
// pega o conteudo do buffer, insere na variavel e limpa a memória

$html = utf8_encode($html);
// converte o conteudo para uft-8

// $mpdf->Bookmark('Start of the document'); // marcador
$mpdf->SetTitle('projeto');
$mpdf->SetAuthor('José Humberto');
$mpdf->SetCreator('José Humberto');
// $mpdf->SetProtection(array(), 'UserPassword', '123');
$mpdf->SetCompression(true);
$mpdf->WriteHTML($MeuEstilo,1);
$mpdf->SetHTMLHeader($header);
$mpdf->SetHTMLFooter($footer);

$mpdf->WriteHTML($identificacao,2);
$mpdf->Output("edital",I);

exit();
?>
