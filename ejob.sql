-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Set-2018 às 05:03
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ejob`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id_serv` int(50) NOT NULL,
  `email_serv` varchar(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `telefone_serv` varchar(20) NOT NULL,
  `descricao` varchar(700) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `img1` varchar(50) DEFAULT NULL,
  `img2` varchar(50) DEFAULT NULL,
  `img3` varchar(50) DEFAULT NULL,
  `img4` varchar(50) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `data_serv` date NOT NULL,
  `views` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id_serv`, `email_serv`, `titulo`, `telefone_serv`, `descricao`, `categoria`, `img1`, `img2`, `img3`, `img4`, `valor`, `cidade`, `estado`, `data_serv`, `views`) VALUES
(83, 'viniciuslpss@hotmail.com', 'Formato Computadores', '9148645412', 'Formato PC barato !', 'InformÃ¡tica', '5b808cec07295.jpg', '5b808cec0767d.jpg', '', '', 120, 'Betim', 'MG', '2018-08-25', 0),
(84, 'vitoralves1604@gmail.com', 'Pinto casas', '997085332', 'Pinto casa por um Ã³timo valor !', 'Reforma', '5b808d782b0dd.jpg', '', '', '', 0, 'Betim', 'MG', '2018-08-25', 0),
(85, 'vitoralves1604@gmail.com', 'DJ', '997085332', 'BLA BLA', 'Eventos/Festas', '5b808ddd4b3a5.jpg', '', '', '', 2500, 'Betim', 'MG', '2018-08-25', 0),
(86, 'vitoralves1604@gmail.com', 'Conserto e reparo de mecÃ¢nica de veÃ­culos', '997085332', 'FaÃ§o serviÃ§o Ã¡ domicilio', 'Conserto', '5b808e4f142d0.jpg', '', '', '', 0, 'Betim', 'MG', '2018-08-25', 0),
(87, 'vitoralves1604@gmail.com', 'Ensino de InglÃªs', '997085332', 'Ã© nuuy', 'TraduÃ§Ã£o', '5b808ea800aa6.jpg', '', '', '', 200, 'Betim', 'MG', '2018-08-25', 0),
(88, 'vitoralves1604@gmail.com', 'reparo de microondas ', '997085332', 'preciso do microondas pra realizar a manutenÃ§Ã£o', 'ManutenÃ§Ã£o', '5b808faee4f25.jpg', '', '', '', 300, 'Betim', 'MG', '2018-08-25', 0),
(89, 'vitoralves1604@gmail.com', 'BabÃ¡ em tempo integral.', '997085332', 'geegegegerg', 'BabÃ¡', '5b8093cf6e663.jpg', '', '', '', 0, 'Betim', 'MG', '2018-08-25', 0),
(90, 'vitoralves1604@gmail.com', 'Nutricionista', '31991914576', 'NutriÃ§Ã£o esportiva', 'Outros', '5b8094151e514.jpg', '', '', '', 100, 'Betim', 'MG', '2018-09-10', 0),
(91, 'vitoralves1604@gmail.com', 'personal trainning', '997085332', 'wfwfwfwfwfw', 'Outros', '5b80946eaaf8f.jpg', '', '', '', 200, 'Betim', 'CE', '2018-08-25', 0),
(92, 'viniciuslpss@hotmail.com', 'MudanÃ§a', '9148645412', 'sdgsfgsdgfgdsg dfg fsdgdsfgsdfg sdfg sdfg sd', 'MudanÃ§a', '5b8096c5a3f4a.jpg', '', '', '', 150, 'Betim', 'MG', '2018-08-25', 0),
(98, 'viniciuslpss@hotmail.com', 'AssistÃªncia TÃ©cnica de Computadores', '9148645412', 'sdafgsgfsdgfddgdfgdfg', 'ManutenÃ§Ã£o', '5b809beae921b.jpg', '', '', '', 0, 'Betim', 'MG', '2018-08-25', 0),
(99, 'viniciuslpss@hotmail.com', 'Chaveiro', '9148645412', 'gafgfdgdfgfdsgfsd', 'Chaveiro', '5b809c3c6b127.jpg', '', '', '', 250.55, 'Betim', 'MG', '2018-08-25', 0),
(100, 'bk@bk', 'InstalaÃ§Ã£o de Equipamentos', '31991914576', 'fdsgdsfgfdgsdfgfdsgfdgghjhgk jk gkgj hgjkghkjgh kghkhgkg jhgkhgkgjkhjkhkh', 'Montagem/InstalaÃ§Ã£o', '5b80b008da195.jpg', '5b80b008da6cd.jpg', '5b80b008daa0f.jpg', '', 0, 'Betim', 'MG', '2018-08-25', 0),
(101, 'bk@bk', 'Montador de mÃ³veis', '31991914576', 'Contrate Um Profissional Que Apresenta Realmente O que Faz!\r\n\r\n* Montador de MÃ³veis PROFISSIONAL\r\n* DESMONTAGEM + MONTAGEM\r\n* InstalaÃ§Ã£o: Cortinas\r\nArmÃ¡rio de Parede\r\nPainel de TV.\r\n* Realizamos MudanÃ§as GRANDE&Pequenas/TEMOS AJUDANTES\r\n* HÃ¡ cinco anos no mercado com PREÃ‡O Justo e qualidade.\r\n*Atendimento 24 Horas. \r\n5 anos no mercado com PREÃ‡O justo e qualidade. \r\n\r\n*Cristiano. (31) 973590164 (WhatsApp)\r\n(31)98655-5386', 'Montagem/InstalaÃ§Ã£o', '5b80b26d62f1d.jpg', '5b80b26d66d6e.jpg', '', '', 0, 'Betim', 'MG', '2018-08-25', 0),
(102, 'bk@bk', 'Design de sobrancelhas , manicure e pedicure', '31991914576', 'Agendamento e contato somente no telefone ou WhatsApp 9 99999999', 'Beleza', '5b80b5375838b.jpg', '5b80b53758807.jpg', '5b8db50e5dbd6.jpg', '5b8dba1b1ad4a.jpg', 0, 'Betim', 'MG', '2018-09-04', 0),
(104, 'bk@bk', 'Limpeza e impermeabilizaÃ§Ã£o de sofÃ¡s!', '31991914576', 'Lavagem de:\r\nSofÃ¡s\r\nPoltronas\r\nTapetes\r\nBanco de carros\r\nColchÃµes HidrataÃ§Ã£o de couro. ImpermeabilizaÃ§Ã£o\r\nLigue jÃ¡ e faÃ§a seu orÃ§amento! Aceitamos cartÃµes de dÃ©bito e crÃ©dito! (31)9999999 ou (31)88888888\r\nAtendemos em domicÃ­lio, sem taxa de deslocamento toda BH. ServiÃ§os com qualidade!\r\n', 'Limpeza', '5b80b68baab0e.jpg', '5b8dc3d41165a.jpg', '', '', 100, 'Betim', 'MG', '2018-09-04', 0),
(105, 'bk@bk', 'CriaÃ§Ã£o de Planilhas Excel', '31991914576', 'Crio planilhas excel para trabalhos escolares, planilhas de custos e planejamento financeiro** botÃµes automÃ¡ticos e links.\r\nInformaÃ§Ãµes e dados combinados com valores de previsÃ£o futuros, mÃ©dias e probabilidades.\r\nDÃºvidas whats: (34) 9.9777-2949\r\nValores a combinar', 'InformÃ¡tica', '5b80b71f37336.png', '', '', '', 0, 'Betim', 'MG', '2018-08-25', 0),
(106, 'bk@bk', 'Ligue Carretos Fretes - Betim Contagem BH Interior', '31991914576', 'FaÃ§a seu orÃ§amento sem compromisso.\r\n\r\nCaminhÃ£o VW 8.150 (baÃº com 5,50 m comprimento)\r\nHyundai HR (baÃº com 3,00 m comprimento)\r\nKombi Carroceria\r\n\r\nAceitamos cartÃ£o de crÃ©dito e dÃ©bito.\r\nDividimos em atÃ© 6 x.', 'MudanÃ§a', '5b80bb62952ca.jpg', '5b80bb6295725.jpg', '5b80bb6295e30.jpg', '', 110, 'Betim', 'MG', '2018-08-25', 0),
(107, 'viniciuslpss@hotmail.com', 'FormataÃ§Ã£o de Computador e Notebook', '31991914576', 'FormataÃ§Ã£o de Computadores e Notebooks com Backup\r\nInstalaÃ§Ã£o de drivers e programas bÃ¡sicos\r\n\r\nEntre em contato!', 'InformÃ¡tica', '5b95b35ded549.jpg', '5b95b35deda12.jpeg', '5b95b35dede1a.jpg', '5b95b35dee16c.jpg', 50, 'Betim', 'MG', '2018-09-10', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(50) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `foto` varchar(60) DEFAULT 'perfil.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `telefone`, `cidade`, `uf`, `foto`) VALUES
(1, 'VinÃ­cius Lopes', 'viniciuslpss@hotmail.com', '123456', '31991914576', 'Betim', 'MG', '5b95b1ed4bc12.jpg'),
(2, 'JoÃ£o Vitor', 'vitoralves1604@gmail.com', '123456', '31991914576', 'Betim', 'MG', '5b95b9cc46540.jpg'),
(3, 'Rodrigo Faria', 'rodrigo_silvaf@outlook.com', '123456', '31991914576', 'Betim', 'MG', 'perfil.png'),
(4, 'VinÃ­cius Lopes', 'bk@bk', '123', '31991914576', 'Betim', 'MG', '5b8dd031792b6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_serv`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `id_serv` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
