-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Out-2021 às 19:14
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
-- Estrutura da tabela `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(500) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `images`
--

INSERT INTO `images` (`id`, `path`, `product_id`, `created_at`, `updated_at`) VALUES
(7, 'products/bD6SytKJq3BUf0vNzqrI85StmPe1G6n13NrX4W8N.jpg', 9, '2021-05-08 17:27:14', '2021-05-08 17:27:14'),
(8, 'products/0kRmwRCG15dkBQxwt2YRUtSC46xtBDbtlKjlBSS1.jpg', 10, '2021-05-08 17:27:45', '2021-05-08 17:27:45'),
(9, 'products/xaqeZhBty5LuufuytGgJIPu0jgO4Wl6tiVZQ3bzU.jpg', 11, '2021-05-08 17:28:31', '2021-05-08 17:28:31'),
(10, 'products/b5JDgO6y4YMhzmOHdTuwEVFU3ODQgm7sxoDEYnmU.jpg', 12, '2021-05-08 17:28:58', '2021-05-08 17:28:58'),
(11, 'products/MlX1Uv5ykWX2Q2UfdRQlrRjd5lJs0QVnDzXCvoL0.jpg', 13, '2021-05-08 17:29:18', '2021-05-08 17:29:18'),
(12, 'products/k37KYM3vgqdV4f27Yq7usnxj597Wh4Z7xeSczv5W.jpg', 15, '2021-05-08 17:29:57', '2021-05-08 17:29:57'),
(13, 'products/P9rmyqN6OqTR8LATMwOEq2k8qgNtt4M06mpfrQ0D.jpg', 16, '2021-05-08 17:30:32', '2021-05-08 17:30:32'),
(14, 'products/TvFQbCJSYzdV5lnLXhTop5rl2m2RNT0bxTN1pr3q.jpg', 17, '2021-05-08 17:30:55', '2021-05-08 17:30:55'),
(15, 'products/WkIXYtGQxpYWQbnl7ZCw6544h4n7BW65VpwoV3oA.jpg', 18, '2021-05-08 17:31:30', '2021-05-08 17:31:30'),
(16, 'products/AI3iFZ4AewgZPYg6pieFUyKCGa70aCkr7lH4uIg4.jpg', 19, '2021-05-08 17:31:59', '2021-05-08 17:31:59'),
(17, 'products/H0h2eQp1uRk5yP8qX83VQy5tiNMtumBummUf3zLV.jpg', 20, '2021-05-08 17:32:20', '2021-05-08 17:32:20'),
(20, 'products/bv6RXxCnA8ZnZEfU6LIuKpr8iIwBt9gWnbAXVMTj.png', 22, '2021-05-09 11:15:07', '2021-05-09 11:15:07'),
(26, 'products/lomcJHPTIrV295eEdhQn9WXp5BoAwlzY6gLfF3Ad.jpg', 22, '2021-05-09 17:17:42', '2021-05-09 17:17:42');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_producti_id` (`product_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_producti_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
