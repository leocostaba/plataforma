-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Out-2016 às 07:52
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plataforma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo`
--

CREATE TABLE `arquivo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `local` varchar(200) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `arquivo`
--

INSERT INTO `arquivo` (`id`, `titulo`, `local`, `autor`, `description`) VALUES
(32, 'CodificaÃ§Ã£o de Huffman, uma nova abordagem!', '64f570cc7bd9b09f7dfb29de4b1459dc.ppt', '1', 'Meu projeto tem a ideia de otimizar a codificaÃ§Ã£o que conhecemos como codificaÃ§Ã£o de Huffman, nessa abordagem apresento algumas modificaÃ§Ãµes feitas para otimizaÃ§Ã£o do tempo de execuÃ§Ã£o.'),
(33, 'ExaustÃ£o, cansaÃ§o e mentalidade tem cura', '4eedd351e85db7114b85d1a7422f4af5.pdf', '1', 'Sabe aquele trabalho de fim de semestre, que vocÃª tem que entregar no ultimo dia do semestre? Tenho uma idea de como vocÃª nÃ£o precisar ficar atÃ© de manhÃ£ acordado! Estude para todas as provas e passe logo... no meu trabalho eu conto mais informaÃ§Ãµes disso'),
(34, 'Poker, do lixo ao luxo!', 'e64a9be776609079cc21d8e473ac391d.pdf', '2', 'Criei mÃ©todos extraordinÃ¡rios para que vocÃª nunca perca uma partida de poker, estou compartilhando isso pois acredito que ao meu trabalho ainda precisa de algumas refatoraÃ§Ãµes.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` varchar(2000) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `id_user`, `id_file`) VALUES
(1, 'Muito bom cara, eu irei testar e tentarei contribuir com comentÃ¡rios em seu trabalho.', 2, 34),
(2, 'Estudei um pouco e acredito que vocÃª deveria analisar os grÃ¡ficos dos jogos da WSOP. LÃ¡ eles mostram algumas probabilidades agressivas de jogo', 2, 34),
(3, 'Interessante, bom trabalho!', 4, 34),
(4, 'Hoje tava tendo uma partida entre NGUYEN e RUANE, eles tiveram um POT de 8600000 na mesa final. vale a pena vocÃª ver essa jogada para analisar o perfil psicolÃ³gico dos jogadores.', 4, 34);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'leonardo', 'leocostaba1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'leon', 'leo@mail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Lucas', 'lucas@mail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Luana Santos', 'lua@mail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivo`
--
ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivo`
--
ALTER TABLE `arquivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
