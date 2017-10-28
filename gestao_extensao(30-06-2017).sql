-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Jun-2017 às 07:44
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestao_extensao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`idcontato`, `telefone`, `email`) VALUES
(1, '323232', 'admin@email.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `coordenacao`
--

CREATE TABLE `coordenacao` (
  `idcoordenacao` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `area_departamento` varchar(50) NOT NULL,
  `formacao_academica` varchar(50) NOT NULL,
  `carga_horaria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `docs_axexos`
--

CREATE TABLE `docs_axexos` (
  `iddocs_axexos` int(11) NOT NULL,
  `arquivo` varchar(45) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `edital`
--

CREATE TABLE `edital` (
  `id` int(11) NOT NULL,
  `numero_edital` varchar(45) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `objetivo` text NOT NULL,
  `data_inicio` date NOT NULL,
  `data_final` varchar(45) NOT NULL,
  `arquivo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `edital`
--

INSERT INTO `edital` (`id`, `numero_edital`, `titulo`, `objetivo`, `data_inicio`, `data_final`, `arquivo`) VALUES
(10, '02/2017', 'Teste 12', 'mpvsefbposbmsepobmdpbngfbpfbnpdohnbpsbndpbnbkfngbkr npnrpbnpbrnhpb n pgngengpwnsbnphnsgpbg g pnphnrhpp pn hwtop trnhoptp h prhnprhnp npewn phrthptwnp hp ', '2017-06-01', '2017-06-28', 'Receipt.pdf'),
(11, '02/2017', 'Edital Teste', 'Teste de edital 30/06/2017', '2017-06-26', '2017-06-30', '[2]Cronograma monitoria (2017-1).pdf'),
(12, '05/2017', 'Edital Garza', 'Garzando os editais', '2017-06-30', '2017-07-20', '2016-02-04_13-31-16_ituiutaba_ads.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `idendereco` int(11) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `cep` int(10) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe_executora`
--

CREATE TABLE `equipe_executora` (
  `idequipe_executora` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `area_departamento` varchar(50) NOT NULL,
  `formacao_academica` varchar(50) NOT NULL,
  `carga_horaria` varchar(50) NOT NULL,
  `contato_idcontato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina1`
--

CREATE TABLE `pagina1` (
  `idpagina1` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `resumo` text NOT NULL,
  `campus` varchar(45) NOT NULL,
  `linhaExt` varchar(45) NOT NULL,
  `areaConhecim` varchar(45) NOT NULL,
  `areaTemat` varchar(45) NOT NULL,
  `expCoordIFTM` varchar(45) NOT NULL,
  `localExec` varchar(45) NOT NULL,
  `cargaHor` varchar(45) NOT NULL,
  `periodoExec` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina2`
--

CREATE TABLE `pagina2` (
  `idpagina2` int(11) NOT NULL,
  `cadasJustific` text NOT NULL,
  `cadasObjGeral` text NOT NULL,
  `cadasObjExp` text NOT NULL,
  `cronogObjExpec` text NOT NULL,
  `cronogAcao` varchar(200) NOT NULL,
  `cronogExecucao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina3`
--

CREATE TABLE `pagina3` (
  `idpagina3` int(11) NOT NULL,
  `publico` varchar(45) NOT NULL,
  `publicoNomes` varchar(45) NOT NULL,
  `estruturacao` varchar(45) NOT NULL,
  `envolvAlunExtensionistas` text NOT NULL,
  `prevProjPedagogico` text NOT NULL,
  `nomeCurso` varchar(45) NOT NULL,
  `resAprovacao` text NOT NULL,
  `acompAvaliacao` text NOT NULL,
  `compGrupoPesquisa` text NOT NULL,
  `envolvMembEquipExecutora` text NOT NULL,
  `link` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina4`
--

CREATE TABLE `pagina4` (
  `idpagina4` int(11) NOT NULL,
  `vincLinhaPesq` varchar(200) NOT NULL,
  `projPesqIFTM` text NOT NULL,
  `publicCoordProjExtensao` text NOT NULL,
  `particCoordProjExtensao` text NOT NULL,
  `resultSoc_Econ_Amb` text NOT NULL,
  `descGeralProj` text NOT NULL,
  `metodExecAtiv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina7`
--

CREATE TABLE `pagina7` (
  `idpagina7` int(11) NOT NULL,
  `contrapItem` varchar(45) NOT NULL,
  `contrapDesc` varchar(45) NOT NULL,
  `contrapUnid` varchar(50) DEFAULT NULL,
  `contrapCUnid` varchar(50) DEFAULT NULL,
  `contrapCTotal` varchar(50) DEFAULT NULL,
  `contrapTotal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiro_externo`
--

CREATE TABLE `parceiro_externo` (
  `idpareceiro_externo` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `responsavel` varchar(45) NOT NULL,
  `area_departamento` varchar(45) NOT NULL,
  `responsabilidades` varchar(45) NOT NULL,
  `acordo` varchar(45) NOT NULL,
  `contato_idcontato` int(11) NOT NULL,
  `endereco_idendereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `idprojeto` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `resumo` text NOT NULL,
  `campus` varchar(50) NOT NULL,
  `linhaExt` varchar(50) NOT NULL,
  `areaConhecim` varchar(50) NOT NULL,
  `areaTemat` varchar(50) NOT NULL,
  `expCoordIFTM` varchar(50) NOT NULL,
  `localExec` varchar(50) NOT NULL,
  `cargaHor` varchar(50) NOT NULL,
  `periodoExec` varchar(50) NOT NULL,
  `equipe_executora_idequipe_executora` int(11) NOT NULL,
  `parceiro_externo_idpareceiro_externo` int(11) NOT NULL,
  `pagina2_idpagina2` int(11) NOT NULL,
  `pagina3_idpagina3` int(11) NOT NULL,
  `pagina4_idpagina4` int(11) NOT NULL,
  `pagina7_idpagina7` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `formacao_academica` varchar(50) DEFAULT NULL,
  `area_departamento` varchar(50) DEFAULT NULL,
  `carga_horaria` varchar(50) DEFAULT NULL,
  `coordenacao` varchar(50) NOT NULL,
  `senha` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `idcontato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `cpf`, `formacao_academica`, `area_departamento`, `carga_horaria`, `coordenacao`, `senha`, `tipo`, `status`, `idcontato`) VALUES
(1, 'Administrador', '10112998607', 'Ensino Superior', 'Administrativo', '100', 'nao', 'admin', 'Administrador', 'ativo', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idcontato`);

--
-- Indexes for table `coordenacao`
--
ALTER TABLE `coordenacao`
  ADD PRIMARY KEY (`idcoordenacao`,`usuario_idusuario`);

--
-- Indexes for table `docs_axexos`
--
ALTER TABLE `docs_axexos`
  ADD PRIMARY KEY (`iddocs_axexos`);

--
-- Indexes for table `edital`
--
ALTER TABLE `edital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idendereco`);

--
-- Indexes for table `equipe_executora`
--
ALTER TABLE `equipe_executora`
  ADD PRIMARY KEY (`idequipe_executora`,`contato_idcontato`),
  ADD KEY `fk_equipe_executora_contato1_idx` (`contato_idcontato`);

--
-- Indexes for table `pagina1`
--
ALTER TABLE `pagina1`
  ADD PRIMARY KEY (`idpagina1`);

--
-- Indexes for table `pagina2`
--
ALTER TABLE `pagina2`
  ADD PRIMARY KEY (`idpagina2`);

--
-- Indexes for table `pagina3`
--
ALTER TABLE `pagina3`
  ADD PRIMARY KEY (`idpagina3`);

--
-- Indexes for table `pagina4`
--
ALTER TABLE `pagina4`
  ADD PRIMARY KEY (`idpagina4`);

--
-- Indexes for table `pagina7`
--
ALTER TABLE `pagina7`
  ADD PRIMARY KEY (`idpagina7`);

--
-- Indexes for table `parceiro_externo`
--
ALTER TABLE `parceiro_externo`
  ADD PRIMARY KEY (`idpareceiro_externo`,`contato_idcontato`,`endereco_idendereco`),
  ADD KEY `fk_parceiro_externo_contato1_idx` (`contato_idcontato`),
  ADD KEY `fk_parceiro_externo_endereco1_idx` (`endereco_idendereco`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`idprojeto`,`equipe_executora_idequipe_executora`,`parceiro_externo_idpareceiro_externo`,`pagina2_idpagina2`,`pagina3_idpagina3`,`pagina4_idpagina4`,`pagina7_idpagina7`),
  ADD KEY `fk_projeto_equipe_executora1_idx` (`equipe_executora_idequipe_executora`),
  ADD KEY `fk_projeto_parceiro_externo1_idx` (`parceiro_externo_idpareceiro_externo`),
  ADD KEY `fk_projeto_pagina21_idx` (`pagina2_idpagina2`),
  ADD KEY `fk_projeto_pagina31_idx` (`pagina3_idpagina3`),
  ADD KEY `fk_projeto_pagina41_idx` (`pagina4_idpagina4`),
  ADD KEY `fk_projeto_pagina71_idx` (`pagina7_idpagina7`),
  ADD KEY `fk_usuario_idx` (`idusuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`,`idcontato`),
  ADD KEY `fk_contato_idx` (`idcontato`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `coordenacao`
--
ALTER TABLE `coordenacao`
  MODIFY `idcoordenacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `docs_axexos`
--
ALTER TABLE `docs_axexos`
  MODIFY `iddocs_axexos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `edital`
--
ALTER TABLE `edital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idendereco` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `equipe_executora`
--
ALTER TABLE `equipe_executora`
  MODIFY `idequipe_executora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagina1`
--
ALTER TABLE `pagina1`
  MODIFY `idpagina1` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagina2`
--
ALTER TABLE `pagina2`
  MODIFY `idpagina2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagina3`
--
ALTER TABLE `pagina3`
  MODIFY `idpagina3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagina4`
--
ALTER TABLE `pagina4`
  MODIFY `idpagina4` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagina7`
--
ALTER TABLE `pagina7`
  MODIFY `idpagina7` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parceiro_externo`
--
ALTER TABLE `parceiro_externo`
  MODIFY `idpareceiro_externo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `idprojeto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `equipe_executora`
--
ALTER TABLE `equipe_executora`
  ADD CONSTRAINT `fk_equipe_executora_contato1` FOREIGN KEY (`contato_idcontato`) REFERENCES `contato` (`idcontato`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `parceiro_externo`
--
ALTER TABLE `parceiro_externo`
  ADD CONSTRAINT `fk_parceiro_externo_contato1` FOREIGN KEY (`contato_idcontato`) REFERENCES `contato` (`idcontato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_parceiro_externo_endereco1` FOREIGN KEY (`endereco_idendereco`) REFERENCES `endereco` (`idendereco`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `fk_projeto_equipe_executora1` FOREIGN KEY (`equipe_executora_idequipe_executora`) REFERENCES `equipe_executora` (`idequipe_executora`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_projeto_pagina21` FOREIGN KEY (`pagina2_idpagina2`) REFERENCES `pagina2` (`idpagina2`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_projeto_pagina31` FOREIGN KEY (`pagina3_idpagina3`) REFERENCES `pagina3` (`idpagina3`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_projeto_pagina41` FOREIGN KEY (`pagina4_idpagina4`) REFERENCES `pagina4` (`idpagina4`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_projeto_pagina71` FOREIGN KEY (`pagina7_idpagina7`) REFERENCES `pagina7` (`idpagina7`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_projeto_parceiro_externo1` FOREIGN KEY (`parceiro_externo_idpareceiro_externo`) REFERENCES `parceiro_externo` (`idpareceiro_externo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_contato` FOREIGN KEY (`idcontato`) REFERENCES `contato` (`idcontato`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
