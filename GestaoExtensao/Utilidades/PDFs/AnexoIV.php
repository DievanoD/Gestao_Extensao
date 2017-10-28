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

$Anexo = '<p id="formularioDeInscricao">ANEXO IV<br>
Declaração da Coordenação de Extensão</p></center>
<p >Declaro para fins de comprovação junto à Pró-reitoria de Extensão do Instituto Federal de
Educação, Ciência e Tecnologia do Triângulo Mineiro que o programa/projeto de extensão
[inserir título do programa/projeto], sob coordenação de [inserir nome do coordenador],
foram analisados pela Coordenação de Extensão, ou setor equivalente, do [inserir nome do
campus] do Instituto Federal de Educação, Ciência e Tecnologia do Triângulo Mineiro –
IFTM, estando a mesma ciente deste, tendo em vista o estabelecido no edital __/____ do
Programa de Apoio a Programas e Projetos de Extensão do Instituto Federal de Educação,
Ciência e Tecnologia do Triângulo Mineiro – IFTM
Para que sejam produzidos todos os efetivo legais, técnicos e administrativos deste
compromisso, firmo o presente instrumento.</p></center><br>[inserir cidade e data]<br><br><br><br><br>

<p id="formularioDeInscricao">[inserir nome do responsável pela declaração]</p>
<p id="formularioDeInscricao">[inserir cargo do responsável pela declaração</p>
<p id="formularioDeInscricao">[inserir portaria de nomeação]</p>

';

$html = ob_get_clean();
// pega o conteudo do buffer, insere na variavel e limpa a memória

$html = utf8_encode($html);
// converte o conteudo para uft-8

// $mpdf->Bookmark('Start of the document'); // marcador
$mpdf->SetTitle('Projeto');
$mpdf->SetAuthor('José Humberto');
$mpdf->SetCreator('José Humberto');
// $mpdf->SetProtection(array(), 'UserPassword', '123');
$mpdf->SetCompression(true);
$mpdf->WriteHTML($MeuEstilo,1);
$mpdf->SetHTMLHeader($header);
$mpdf->SetHTMLFooter($footer);

$mpdf->WriteHTML($Anexo,2);
$mpdf->Output("edital",I);

exit();
?>
