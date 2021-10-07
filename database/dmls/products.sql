-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Out-2021 às 19:15
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estudo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `code`, `price`, `title`, `description`, `updated_at`, `created_at`) VALUES
(9, 2, '23.00', 'Abacaxi', 'Abacaxiprata da melhor qualidade possível, direto do produtor rural para a', '2021-05-09 12:03:03', '2021-05-08 17:27:14'),
(10, 3, '12.00', 'Mamão', 'Mamão prata da melhor qualidade possível, direto do produtor rural para a', '2021-05-08 17:27:44', '2021-05-08 17:27:44'),
(11, 4, '25.00', 'Maçã', 'Maçã prata da melhor qualidade possível, direto do produtor rural para a', '2021-05-08 17:28:31', '2021-05-08 17:28:31'),
(12, 5, '18.00', 'Goiaba', 'Goiaba prata da melhor qualidade possível, direto do produtor rural para a', '2021-05-08 17:28:58', '2021-05-08 17:28:58'),
(13, 6, '21.00', 'Laranja', 'Laranja prata da melhor qualidade possível, direto do produtor rural para a', '2021-05-08 17:29:18', '2021-05-08 17:29:18'),
(15, 7, '30.00', 'Abacate', 'Abacate prata da melhor qualidade possível, direto do produtor rural para a', '2021-05-08 17:29:57', '2021-05-08 17:29:57'),
(16, 8, '30.00', 'Abacate liso', 'Abacate liso da melhor qualidade possível, direto do produtor rural para a', '2021-05-08 17:30:32', '2021-05-08 17:30:32'),
(17, 9, '40.00', 'Abobora', 'Abobora da melhor qualidade possível, direto do produtor rural para a', '2021-05-08 17:30:55', '2021-05-08 17:30:55'),
(18, 10, '14.21', 'Abobrinha', 'Abobrinha da melhor qualidade possível, direto do produtor rural para a', '2021-05-08 17:31:30', '2021-05-08 17:31:30'),
(19, 11, '12.59', 'Repolho', 'Repolho da melhor qualidade possível, direto do produtor rural para a', '2021-05-08 17:31:59', '2021-05-08 17:31:59'),
(20, 12, '49.98', 'Alho', 'Alho da melhor qualidade possível, direto do produtor rural para a', '2021-05-08 17:32:20', '2021-05-08 17:32:20'),
(22, 1, '12.20', 'Banana', 'Banana Banana Banana Banana Banana Banana Banana Banana Banana Banana Banana Banana Banana Banana Banana Banana Banana Banana Banana Banana', '2021-05-09 17:17:42', '2021-05-09 11:15:07');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
