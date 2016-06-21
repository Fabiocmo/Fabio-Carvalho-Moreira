-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Jun-2016 às 23:54
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workout`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chartexercise`
--

CREATE TABLE `chartexercise` (
  `id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `expire_date` date NOT NULL,
  `chart_exercise` varchar(40) NOT NULL,
  `segunda_feira` varchar(100) NOT NULL,
  `terca_feira` varchar(100) NOT NULL,
  `quarta_feira` varchar(100) NOT NULL,
  `quinta_feira` varchar(100) NOT NULL,
  `sexta_feira` varchar(100) NOT NULL,
  `sabado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `friend`
--

CREATE TABLE `friend` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_user_friend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `friend`
--

INSERT INTO `friend` (`id`, `id_user`, `id_user_friend`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `id_user_send` int(11) NOT NULL,
  `id_user_receive` int(11) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `message`
--

INSERT INTO `message` (`id`, `id_user_send`, `id_user_receive`, `message`) VALUES
(2, 2, 1, 'Boa tarde'),
(3, 2, 1, 'Mensagem Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publication`
--

CREATE TABLE `publication` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `datee` date NOT NULL,
  `hour` time NOT NULL,
  `publication` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `publication`
--

INSERT INTO `publication` (`id`, `id_user`, `datee`, `hour`, `publication`) VALUES
(1, 2, '2016-05-07', '10:22:22', 'sorte maior');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `last_name` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(90) NOT NULL,
  `pass` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `last_name`, `email`, `birthdate`, `phone`, `pass`) VALUES
(14, 'fabio', 'moreira', 'fabio@fabio', '0010-10-10', '9191919', '123'),
(15, 'laranja', 'laranja', 'laranja@laranja', '0010-10-10', '9191919', '123'),
(16, 'jao', 'k', 'jao@kj', '0101-10-10', '45678', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chartexercise`
--
ALTER TABLE `chartexercise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chartexercise`
--
ALTER TABLE `chartexercise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
