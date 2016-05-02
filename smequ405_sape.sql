-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 02/05/2016 às 08:43
-- Versão do servidor: 5.5.38-35.2
-- Versão do PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `smequ405_sape`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` bigint(20) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `admin`
--

INSERT INTO `admin` (`idAdmin`, `email`, `senha`) VALUES
(1, 'admin@sape.com', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `idAluno` bigint(20) unsigned NOT NULL,
  `idTurma` int(11) DEFAULT NULL,
  `nome_aluno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=250 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `aluno`
--

INSERT INTO `aluno` (`idAluno`, `idTurma`, `nome_aluno`) VALUES
(1, 1, 'Antonio Castelo'),
(5, 2, 'Aluno 1'),
(3, 1, 'Lucas'),
(6, 2, 'Aluno 2'),
(7, 2, 'Aluno 4'),
(8, 2, 'Aluo 3'),
(9, 2, 'Aluno 5'),
(11, 3, 'Luan'),
(12, 3, 'mauro'),
(13, 4, 'Ana Beatriz Pereira da Silva'),
(14, 4, 'Antonia Adryely Lemos de Sousa'),
(15, 4, 'Bruno Fernandes de Lima'),
(16, 4, 'Carlos Henrique de Lima Alves'),
(17, 4, 'Diogo Alves Barbosa'),
(18, 4, 'Ermilson Ramos Emídio'),
(19, 4, 'Francisca Larissa Nobre Silva'),
(20, 4, 'Francisco Kauã Silva de Sousa'),
(21, 4, 'Gecriston Yuri Lima Palhares'),
(22, 4, 'Geiciane do Nascimento Oliveira'),
(23, 4, 'Gustavo de Oliveira Ferreira'),
(24, 4, 'Heloisa Martins de Sousa'),
(25, 4, 'Iesley Gonçalves da Silva'),
(26, 4, 'Jéssica Araújo Almeida'),
(27, 4, 'João Felipe da Silva'),
(28, 4, 'João Keven Rodrigues Moura'),
(29, 4, 'José Arthur do Nascimento Lopes'),
(30, 4, 'Kaik Armando Silva de Castro'),
(31, 4, 'Lívia Vitoria Ribeiro Barbosa '),
(32, 4, 'Maria Jamirys Costa Oliveira'),
(33, 4, 'Pedro Paulo Oliveira de Sousa'),
(34, 4, 'Samuel Oliveira Firmino'),
(35, 4, 'Sarah Wictórya Nunes Alves'),
(36, 4, 'Thalia Hiara do Nascimento Araujo'),
(37, 4, 'Ycaro Kauê de Sousa Oliveira'),
(108, 5, 'Maria Eliete de Oliveira Sabino'),
(107, 5, 'Maria Clara Melo de Souza'),
(106, 5, 'Maria Clara Lima Germano'),
(105, 5, 'Marcelo Alves da Silva'),
(104, 5, 'Manoel Denílson Queiroz Silva'),
(103, 5, 'Laiane Domingos da Silva'),
(102, 5, 'João Vitor Tavares da Silva'),
(100, 5, 'Francisco Lucas Rafael Gomes'),
(101, 5, 'Jeferson Araújo Almeida'),
(99, 5, 'Francisco Kauã da Silva'),
(95, 5, 'Fernando José Oliveira da Silva'),
(96, 5, 'Francisca Kaiane Lopes da Silva'),
(98, 5, 'Francisco Jair da Silva Rodrigues'),
(97, 5, 'Francisco Felipe de Lima Nascimento'),
(94, 5, 'Fernanda Coelho Mendes'),
(93, 5, 'Breno Bandeira Silva'),
(92, 5, 'Antonio Ruan Rodrigues da Silva'),
(91, 5, 'Antonio Kléber Jerônimo de Lima'),
(90, 5, 'Antonia Vitória Barroso de Castro'),
(89, 5, 'Allysson Marcel de Oliveira Barrêto'),
(64, 6, 'Adrieli Pereira Moraes'),
(65, 6, 'Ana Clara Lima Silva'),
(66, 6, 'Antonio Kauã Estevam Góes'),
(67, 6, 'Antonio Maciel Mateus'),
(68, 6, 'Crisner Ferreira da Silva'),
(69, 6, 'Davi Braga Gomes Júnior'),
(70, 6, 'Emanuel Lima da Silva'),
(71, 6, 'Francisca Jaiane Batista Mendes'),
(72, 6, 'Francisca Roberta Almeida Oliveira'),
(73, 6, 'Francisco David Feitosa Lima'),
(74, 6, 'Francisco Jardson dos Santos Morais'),
(75, 6, 'Francisco Naelton de Paula Silva'),
(76, 6, 'Francisco Rodrigo da Silva'),
(77, 6, 'Jesus Henrique Mendes de Queiroz'),
(78, 6, 'John Herbert Dantas André'),
(79, 6, 'John Herbert Dantas André'),
(80, 6, 'Kauan Wanderson Borges Lima'),
(81, 6, 'Lucas Nobre de Sousa'),
(82, 6, 'Mateus Lima Buriti'),
(83, 6, 'Michaelly Maciel Gomes'),
(84, 6, 'Rafael Lima Freitas'),
(85, 6, 'Raí da Silva Praxedes'),
(86, 6, 'Raí da Silva Praxedes'),
(87, 6, 'Rhayza Kettely Rodrigues Xavier'),
(88, 6, 'Sérgio Breno da Silva Lima'),
(109, 5, 'Maria Evellyn Silva de Sousa'),
(110, 5, 'Maria Isabel Sabino Lima'),
(111, 5, 'Tales Natier Coelho Mendes'),
(112, 5, 'Valderí Oliveira Lima da Silva'),
(113, 5, 'Wendeson Victor Mota da Silva'),
(114, 5, 'Weskley Lima dos Santos'),
(115, 5, 'Yasmim Araújo Silva'),
(116, 7, 'Albert de Oliveira Buriti'),
(117, 7, 'Antonio Clécio da Silva Mendes'),
(118, 7, 'Antonio Israel da Silva Fernandes'),
(119, 7, 'Antonio Josué Guerreiro Lira'),
(120, 7, 'Antonio Vitor Mendes da Silva'),
(121, 7, 'David Nogueira da Silva'),
(122, 7, 'Francisco Alisson Ferreira de Sousa'),
(123, 7, 'Francisco Erinaldo Terto da Silva Filho'),
(124, 7, 'Francisco Jeová Vieira Brito'),
(125, 7, 'Francisco Jorge de Sousa Neto'),
(126, 7, 'Francisco Marlin Nogueira da Cruz'),
(127, 7, 'Francisco Ruan Pereira Alves'),
(128, 7, 'Francisco Sami Bernardino da Silva'),
(129, 7, 'Ingrid Freitas do Nascimento'),
(130, 7, 'João Everardo da Cunha de Souza'),
(131, 7, 'Lucas da Silva Sousa'),
(132, 7, 'Maria Clara Mendes Coelho'),
(133, 7, 'Maria Isaely Ramos de Holanda'),
(134, 7, 'Maria Vitória Lino da Silva'),
(135, 7, 'Mateus da Silva Silveira'),
(136, 7, 'Osano Alexandre da Silva'),
(137, 7, 'Pedro Henrique Castelo Branco Figueredo'),
(138, 7, 'Samuel Nascimento Soares'),
(139, 7, 'Tália Belizário Ribeiro da Silva'),
(140, 7, 'Talita Soares da Silva'),
(141, 7, 'Vitória de Souza Nascimento'),
(143, 8, 'Mateus Nazareno Nonato'),
(144, 9, 'João Rai Branco de Lima'),
(145, 9, 'Davi Evangelista dos Santos'),
(146, 9, 'Deyveid Silva de Aquino'),
(147, 9, 'Rodrigo Fabri da Silva'),
(149, 9, 'José Vital Inácio de Sousa'),
(150, 9, 'Lorena Kelly Feitosa Nascimento'),
(151, 11, 'Cícero Evandro de Sousa Filho'),
(152, 11, 'Rejane Almeida da Silva'),
(154, 11, 'Paulo Ermerson Lopes Luiz'),
(155, 11, 'Davi de Sousa Ribeiro'),
(156, 11, 'Viviane Maria Caracas'),
(157, 11, 'Isac Gomes Alves'),
(158, 11, 'Luiz Fabiano do Nascimento'),
(159, 11, 'Kaele Feitosa do Nascimento'),
(160, 11, 'Francisco Daniel de Lima Sousa'),
(161, 11, 'Samuel Lucas da Silva'),
(162, 12, 'André Luiz da Silva Arruda'),
(163, 13, 'Francisca Patrícia Santos'),
(164, 13, 'Francisco Davi Paz da Silva'),
(165, 13, 'Mateus Vieira da Silva Lima'),
(167, 14, 'Tiago Nunes de Sousa'),
(169, 14, 'João Paulo Paz do Nascimento'),
(170, 15, 'Paulo Victor Pereira de Freitas'),
(171, 15, 'Lucas Queiroz e Sousa'),
(172, 16, 'Gabriel de Lima Silva'),
(173, 16, 'Ruan de Morais Costa'),
(176, 16, 'Pedro Henrique Pereira da Silva'),
(175, 16, 'Maria Eduarda Amaral Menezes'),
(177, 16, 'Pedro Luan da Silva Alexandrino'),
(178, 16, 'José Higor Freitas de Lima'),
(179, 17, 'Samira de Sousa Araújo'),
(180, 17, 'Ismael Batista Nascimento'),
(181, 17, 'Francisco Lucas da Silva Ferreira'),
(182, 18, 'Francisco Ray Bezerra Nunes'),
(183, 18, 'Paulo Diogo da Silva Sousa'),
(184, 18, 'Antonia Franciele de Sousa Barbosa'),
(185, 18, 'Francisco Jardson da Silva Freitas'),
(186, 18, 'Carlos Henrique  Elói Mariano'),
(187, 18, 'Cristian Vladimir da Silva Santos'),
(188, 19, 'José Gustavo da Silva'),
(189, 20, 'Joice da Silva Sousa'),
(190, 20, 'Maria Talita da Silva'),
(191, 9, 'Antonio Ezequiel dos Santos Neres'),
(192, 11, 'Paulo Victor Inácio de Sousa'),
(193, 21, 'Antonio Carlos de Oliveira Castro'),
(194, 21, 'Francisca Vitoria Lima Rêgo'),
(195, 21, 'Henrique da Silva Gomes'),
(196, 21, 'João Victor da Silva Freire '),
(197, 21, 'Juliana Sousa do Nascimento'),
(198, 21, 'Larissa Barreto dos Santos'),
(199, 21, 'Luis Guilherme Soares de Lima '),
(200, 21, 'Maria Vitória Ferreira da Silva'),
(201, 21, 'Maria Vitoria Inácio de Souza'),
(202, 21, 'Stefane Caracas da Silva'),
(203, 21, 'Antonio Kaik Pinheiro da Silva'),
(204, 21, 'Gabriel de Sousa de Oliveira '),
(205, 22, 'Antonio Gabriel de Almeida Silva'),
(206, 22, 'Davy Lourenço da Silva'),
(207, 22, 'Antonio Isaac Moura Batista'),
(209, 22, 'Francisco Igo da Silva Sousa'),
(210, 22, 'Cleison de Deus Silva'),
(211, 22, 'Maria Clara Alves'),
(212, 22, 'Maria Paloma Vitória'),
(213, 22, 'Antonio Ismarlia Sousa'),
(214, 22, 'Pedro Thauan da Silva'),
(215, 22, 'Vinicius Silva Montenegro'),
(216, 22, 'Maria Leticia Alves'),
(217, 23, 'Abraão Rodovalho Marques'),
(218, 23, 'João Hemannuel da Silva Xavier '),
(219, 24, 'Fabrício Chagas da Silva'),
(220, 24, 'José Bezerra Araújo'),
(221, 24, 'Francisca Adriele Freitas da Silva'),
(222, 24, 'José Aélio de Sousa Nogueira'),
(223, 24, 'Dágila Pereira da Silva'),
(224, 24, 'Davy Alves da Silva'),
(225, 24, 'Gabriel Oliveira dos Santos'),
(226, 24, 'Joely Nara Soares Nascimento'),
(227, 24, 'Gizela de Lima Silva'),
(228, 24, 'Andressa Lima do Nascimento'),
(229, 25, 'Anne Karoline de Sousa Silva'),
(230, 25, 'Antonio Lucas Almeida de Queiroz'),
(231, 25, 'Arthur Magno Ferreira Almeida'),
(237, 25, 'Gustavo Freitas Queiroz'),
(233, 25, 'Daniele Silva da Rocha'),
(234, 25, 'Francisco Diego Rodrigues de Lima'),
(238, 25, 'João Lucas da Silva Freitas'),
(240, 25, 'Lauro Tiago  de Abreu Holanda Filho'),
(241, 25, 'Lourenço Nunes de Sousa'),
(242, 26, 'Ana Carolina dos Santos'),
(243, 26, 'Antonio Higor Paiva da Silva'),
(244, 26, 'Francisco Ruan da Silva Ferreira '),
(245, 26, 'Lauriana Nascimento de Lemos'),
(246, 26, 'Luiz Adriano Silva Araújo'),
(247, 26, 'Ozeli Vieira da Silva'),
(249, 25, 'Maria Iasnara de Sousa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `escola`
--

CREATE TABLE IF NOT EXISTS `escola` (
  `idEscola` bigint(20) unsigned NOT NULL,
  `idRegional` int(11) DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `escola`
--

INSERT INTO `escola` (`idEscola`, `idRegional`, `nome`) VALUES
(2, 2, 'EEF Francisca Teixeira'),
(3, 2, 'EEF Francisco de Oliveira Albuquerque'),
(4, 2, 'CEI Califórnia'),
(6, 3, 'José Bonifácio de Souza'),
(7, 5, 'EEF Dep. Flávio Portela Marcílio'),
(8, 5, 'EEF Terra dos Monólitos'),
(9, 5, 'EEF Rosa Baquit '),
(10, 5, 'EEF José Linhares da Páscoa ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagem`
--

CREATE TABLE IF NOT EXISTS `imagem` (
  `idPost` int(11) DEFAULT NULL,
  `idImagem` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `periodo`
--

CREATE TABLE IF NOT EXISTS `periodo` (
  `idPeriodo` int(11) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `idAluno` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `periodo`
--

INSERT INTO `periodo` (`idPeriodo`, `nivel`, `idAluno`) VALUES
(1, 2, 1),
(1, 1, 3),
(1, 2, 5),
(1, 1, 6),
(1, 2, 7),
(1, 3, 9),
(1, 1, 8),
(2, 2, 5),
(2, 2, 6),
(2, 3, 7),
(2, 3, 9),
(2, 1, 8),
(3, 4, 5),
(3, 3, 6),
(3, 4, 7),
(3, 5, 9),
(3, 2, 8),
(4, 4, 5),
(4, 5, 6),
(4, 4, 7),
(4, 5, 9),
(4, 3, 8),
(1, 5, 11),
(1, 4, 12),
(1, 2, 13),
(1, 3, 14),
(1, 3, 15),
(1, 3, 16),
(1, 2, 17),
(1, 3, 18),
(1, 3, 19),
(1, 2, 20),
(1, 2, 21),
(1, 2, 22),
(1, 3, 23),
(1, 2, 24),
(1, 3, 25),
(1, 2, 26),
(1, 2, 27),
(1, 2, 28),
(1, 3, 29),
(1, 2, 30),
(1, 2, 31),
(1, 2, 32),
(1, 2, 33),
(1, 3, 34),
(1, 2, 35),
(1, 3, 36),
(1, 3, 37),
(1, 1, 64),
(1, 1, 116),
(1, 3, 89),
(1, 1, 65),
(1, 2, 90),
(1, 1, 117),
(1, 1, 118),
(1, 1, 119),
(1, 2, 66),
(1, 3, 91),
(1, 2, 67),
(1, 2, 92),
(1, 2, 120),
(1, 2, 93),
(1, 2, 68),
(1, 2, 69),
(1, 2, 121),
(1, 2, 70),
(1, 1, 94),
(1, 1, 95),
(1, 1, 71),
(1, 1, 96),
(1, 2, 72),
(1, 1, 122),
(1, 2, 73),
(1, 2, 123),
(1, 2, 97),
(1, 2, 98),
(1, 2, 74),
(1, 3, 124),
(1, 3, 125),
(1, 2, 99),
(1, 2, 100),
(1, 2, 126),
(1, 1, 75),
(1, 2, 76),
(1, 3, 127),
(1, 2, 128),
(1, 1, 129),
(1, 1, 101),
(1, 2, 77),
(1, 2, 130),
(1, 3, 102),
(1, 2, 78),
(1, 2, 79),
(1, 1, 80),
(1, 2, 103),
(1, 3, 131),
(1, 1, 81),
(1, 1, 104),
(1, 3, 105),
(1, 1, 106),
(1, 1, 107),
(1, 1, 132),
(1, 3, 108),
(1, 1, 109),
(1, 3, 110),
(1, 2, 133),
(1, 2, 134),
(1, 3, 135),
(1, 1, 82),
(1, 2, 83),
(1, 3, 136),
(1, 3, 137),
(1, 2, 84),
(1, 2, 85),
(1, 2, 86),
(1, 1, 87),
(1, 2, 138),
(1, 2, 88),
(1, 2, 111),
(1, 2, 139),
(1, 2, 140),
(1, 2, 112),
(1, 2, 141),
(1, 3, 113),
(1, 2, 114),
(1, 1, 115),
(0, 3, 162),
(0, 3, 184),
(0, 3, 186),
(0, 1, 151),
(0, 4, 187),
(0, 1, 155),
(0, 1, 145),
(0, 1, 146),
(0, 2, 163),
(0, 2, 160),
(0, 2, 164),
(0, 3, 185),
(0, 2, 181),
(0, 2, 182),
(0, 1, 172),
(0, 2, 157),
(0, 2, 180),
(0, 4, 169),
(0, 1, 144),
(0, 2, 189),
(0, 4, 188),
(0, 3, 178),
(0, 2, 149),
(0, 2, 159),
(0, 2, 150),
(0, 4, 171),
(0, 2, 158),
(0, 2, 175),
(0, 3, 190),
(0, 1, 143),
(0, 2, 165),
(0, 3, 183),
(0, 3, 154),
(0, 4, 170),
(0, 3, 176),
(0, 3, 177),
(0, 1, 152),
(0, 1, 147),
(0, 1, 173),
(0, 1, 179),
(0, 3, 161),
(0, 4, 167),
(0, 2, 156),
(0, 1, 193),
(0, 1, 205),
(0, 1, 207),
(0, 1, 213),
(0, 2, 203),
(0, 2, 210),
(0, 1, 206),
(0, 1, 194),
(0, 1, 209),
(0, 2, 204),
(0, 1, 195),
(0, 1, 196),
(0, 1, 197),
(0, 1, 198),
(0, 1, 199),
(0, 1, 211),
(0, 2, 212),
(0, 1, 200),
(0, 1, 201),
(0, 1, 214),
(0, 1, 202),
(0, 1, 215),
(0, 1, 217),
(0, 1, 228),
(0, 1, 223),
(0, 1, 224),
(0, 1, 219),
(0, 1, 221),
(0, 1, 225),
(0, 1, 227),
(0, 1, 218),
(0, 1, 226),
(0, 1, 222),
(0, 1, 220),
(0, 2, 242),
(0, 1, 229),
(0, 1, 243),
(0, 1, 230),
(0, 2, 231),
(0, 1, 233),
(0, 1, 234),
(0, 2, 244),
(0, 2, 237),
(0, 1, 238),
(0, 1, 245),
(0, 1, 240),
(0, 1, 241),
(0, 1, 246),
(0, 2, 248),
(0, 2, 249),
(0, 1, 247);

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `idPost` bigint(20) unsigned NOT NULL,
  `idRegional` int(11) DEFAULT NULL,
  `mensagem` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `posts`
--

INSERT INTO `posts` (`idPost`, `idRegional`, `mensagem`) VALUES
(1, 1, 'Teste descrição'),
(2, 18, 'hueheuheuheueeuhe'),
(3, 18, 'Olá');

-- --------------------------------------------------------

--
-- Estrutura para tabela `regional`
--

CREATE TABLE IF NOT EXISTS `regional` (
  `idRegional` bigint(20) unsigned NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `regional`
--

INSERT INTO `regional` (`idRegional`, `nome`) VALUES
(2, 'Regional Educacional California'),
(3, 'Regional Educacional Campo Novo'),
(4, 'Regional Educacional Campo Velho'),
(5, 'Regional Educacional Centro'),
(6, 'Regional Educacional Cipó dos Anjos'),
(7, 'Regional Educacional Custódio'),
(8, 'Regional Educacional Dom Maurício'),
(9, 'Regional Educacional José Jucá'),
(11, 'Regional Educacional Juá'),
(12, 'Regional Educacional Juatama'),
(13, 'Regional Educacional Nemésio Bezerra'),
(14, 'Regional Educacional Riacho Verde'),
(15, 'Regional Educacional São João'),
(16, 'Regional Educacional São João dos Queiroz'),
(17, 'Regional Educacional Tapuiará');

-- --------------------------------------------------------

--
-- Estrutura para tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `idTurma` bigint(20) unsigned NOT NULL,
  `idEscola` int(11) DEFAULT NULL,
  `nome_turma` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `turma`
--

INSERT INTO `turma` (`idTurma`, `idEscola`, `nome_turma`) VALUES
(1, 1, 'Turma 01'),
(2, 2, 'Turma teste'),
(3, 5, 'turma teste'),
(4, 6, 'Turmas de 4 ao 5'),
(5, 6, 'turma 5 ano C'),
(6, 6, 'Turma 4 ano D'),
(7, 6, 'Turma 5 ano F'),
(8, 7, 'Turma 6° A'),
(9, 7, 'Turma 6° B'),
(10, 7, 'Cícero Evandro de Sousa Filho'),
(11, 7, 'Turma 7° B'),
(12, 7, 'Turma 8° C'),
(13, 7, 'Turma 9° A'),
(14, 7, 'Turma 9° B'),
(15, 7, 'Turma 9° C'),
(16, 7, 'Turma 6° C'),
(17, 7, 'Turma 7° C'),
(18, 7, 'Turma 7° D'),
(19, 7, 'Turma 8° D'),
(20, 7, 'Turma 9 ° D'),
(21, 8, '5° A'),
(22, 8, '5 ° B'),
(23, 9, '4° A'),
(24, 9, '3° A'),
(25, 10, '4° A'),
(26, 10, '5° A');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idRegional` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`, `idRegional`) VALUES
(1, 'teste@gmail.com', '123', 1),
(2, 'california@sape.com', '123', 2),
(3, 'centro02@sape.com', '123456', 1),
(4, 'teste@sape.com', '123', 18),
(5, 'teste@sape.com', '123', 18),
(6, 'marialucia@sape.com', 'camponovo', 3),
(7, 'centro@sape.com', '123', 5);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`), ADD UNIQUE KEY `idAdmin` (`idAdmin`);

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idAluno`), ADD UNIQUE KEY `idAluno` (`idAluno`);

--
-- Índices de tabela `escola`
--
ALTER TABLE `escola`
  ADD PRIMARY KEY (`idEscola`), ADD UNIQUE KEY `idEscola` (`idEscola`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idPost`), ADD UNIQUE KEY `idPost` (`idPost`);

--
-- Índices de tabela `regional`
--
ALTER TABLE `regional`
  ADD PRIMARY KEY (`idRegional`), ADD UNIQUE KEY `idRegional` (`idRegional`);

--
-- Índices de tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idTurma`), ADD UNIQUE KEY `idTurma` (`idTurma`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idAluno` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=250;
--
-- AUTO_INCREMENT de tabela `escola`
--
ALTER TABLE `escola`
  MODIFY `idEscola` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `idPost` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `regional`
--
ALTER TABLE `regional`
  MODIFY `idRegional` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `idTurma` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
