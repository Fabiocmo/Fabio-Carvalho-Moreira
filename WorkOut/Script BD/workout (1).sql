-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Maio-2016 às 22:52
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
  `name` varchar(60) NOT NULL,
  `expire_date` date NOT NULL,
  `chart_exercise` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `chartexercise`
--

INSERT INTO `chartexercise` (`id`, `name`, `expire_date`, `chart_exercise`) VALUES
(1, 'Fabio', '2016-07-02', 'trapezio'),
(6, 'Fabio', '2016-07-02', 'trapezio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `friend`
--

CREATE TABLE `friend` (
  `id_friend` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_user_friend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `id_user_send` int(11) NOT NULL,
  `id_user_receive` int(11) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `message`
--

INSERT INTO `message` (`id_message`, `id_user_send`, `id_user_receive`, `message`) VALUES
(1, 1, 2, 'Primeira%20Mensagem!!!'),
(10, 2, 1, 'Mensagem%20Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publication`
--

CREATE TABLE `publication` (
  `id_publication` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `datee` date NOT NULL,
  `hour` time NOT NULL,
  `publication` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `publication`
--

INSERT INTO `publication` (`id_publication`, `id_user`, `datee`, `hour`, `publication`) VALUES
(36, 1, '2016-05-07', '10:22:22', 'primeira'),
(39, 2, '2016-05-07', '10:22:22', 'primeira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `name`, `last_name`, `email`, `birthdate`, `phone`, `pass`) VALUES
(1, 'Fabio', 'Moreira', 'teste@email', '0000-00-00', '9999999999', 'fcm'),
(29, '', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(30, 'FFF', '', 'teste@email', '0000-00-00', '9999999999', '123'),
(31, 'FFF', '', 'teste@email', '0000-00-00', '9999999999', '123'),
(32, 'FFF', '', 'teste@email', '0000-00-00', '9999999999', '123'),
(33, 'FFF', '', 'teste@email', '0000-00-00', '9999999999', '123'),
(34, 'FFF', '', 'teste@email', '0000-00-00', '9999999999', '123'),
(43, 'Fabio5', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(44, '', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(45, '', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(46, '', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(47, 'Fabiof', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(48, 'Fabiof', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(49, 'Fabiof', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(50, '', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(51, '', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(52, '', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(53, '', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(54, '', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(55, '', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf'),
(56, 'fabio', 'Carvalho', 'teste@email', '0000-00-00', '9999999999', 'jklsjdf');

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
  ADD PRIMARY KEY (`id_friend`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_publication`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chartexercise`
--
ALTER TABLE `chartexercise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
  MODIFY `id_friend` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `id_publication` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
