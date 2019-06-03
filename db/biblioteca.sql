-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jun-2019 às 06:52
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autores`
--

CREATE TABLE `autores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `autores`
--

INSERT INTO `autores` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Monteiro Lobatto', '2019-05-30 04:12:08', '2019-05-30 04:12:08'),
(2, 'Ruth Rocha', '2019-05-30 04:12:24', '2019-05-30 04:12:24'),
(3, 'William P. Young', '2019-05-30 04:15:39', '2019-05-30 04:15:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`id`, `descricao`, `created`, `modified`) VALUES
(1, 'Drama', '2019-05-30 04:14:57', '2019-05-30 04:14:57'),
(2, 'Comedia', '2019-05-30 23:16:55', '2019-05-30 23:16:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `quantidade` int(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `autor_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `descricao`, `quantidade`, `isbn`, `created`, `modified`, `autor_id`) VALUES
(1, 'A Cabana', 'O livro aborda a questão recorrente da existência do mal através da história de Mack Allen Phillips, um homem que vive sob o peso da experiência de ter sua filha Missy, de seis anos, raptada durante um acampamento de fim de semana. A menina nunca foi encontrada, mas sinais de que ela teria sido violentada e assassinada são achados em uma cabana perdida nas montanhas.\r\n\r\nVivendo desde então sob a \"A Grande Tristeza\", Mack, três anos e meio depois do episódio, recebe um misterioso bilhete supostamente escrito por Deus, convidando-o para uma visita a essa mesma cabana. Ali, Mack terá um encontro inusitado com Deus, Jesus, Sarayu (O Espírito Santo) e Sophia (A Sabedoria), de quem tentará obter resposta para a inevitável pergunta: \"Se Deus é tão poderoso, por que não faz nada para amenizar nosso sofrimento?\".', 8, 1, '2019-05-30 04:18:04', '2019-05-30 04:18:04', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livrosgeneros`
--

CREATE TABLE `livrosgeneros` (
  `id` int(10) UNSIGNED NOT NULL,
  `livros_id` int(10) UNSIGNED DEFAULT NULL,
  `generos_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livrosgeneros`
--

INSERT INTO `livrosgeneros` (`id`, `livros_id`, `generos_id`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autor_id` (`autor_id`);

--
-- Indexes for table `livrosgeneros`
--
ALTER TABLE `livrosgeneros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livros_id` (`livros_id`),
  ADD KEY `generos_id` (`generos_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autores`
--
ALTER TABLE `autores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `livrosgeneros`
--
ALTER TABLE `livrosgeneros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `livros_ibfk_1` FOREIGN KEY (`autor_id`) REFERENCES `autores` (`id`);

--
-- Limitadores para a tabela `livrosgeneros`
--
ALTER TABLE `livrosgeneros`
  ADD CONSTRAINT `livrosgeneros_ibfk_1` FOREIGN KEY (`livros_id`) REFERENCES `livros` (`id`),
  ADD CONSTRAINT `livrosgeneros_ibfk_2` FOREIGN KEY (`generos_id`) REFERENCES `generos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
