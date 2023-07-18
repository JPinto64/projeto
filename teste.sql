-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- A despejar estrutura da base de dados para teste
CREATE DATABASE IF NOT EXISTS `teste` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `teste`;

<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
-- A despejar estrutura para tabela teste.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datadenascimento` date NOT NULL,
  `data_inscricao` date NOT NULL,
  `escalao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` blob,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telemovel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telemovel2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacoes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Ativo',
  `user_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_alunos_numero` (`numero`),
  KEY `alunos_user_id_foreign` (`user_id`),
  CONSTRAINT `alunos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.alunos: ~0 rows (aproximadamente)
INSERT INTO `alunos` (`id`, `numero`, `nome`, `nif`, `sexo`, `datadenascimento`, `data_inscricao`, `escalao`, `foto`, `email`, `telemovel`, `telemovel2`, `endereco`, `observacoes`, `estado`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, '000000001', 'Jonathan Maria', '121212121', 'M', '1993-11-11', '2023-07-13', 'A', _binary 0x666f746f735f616c756e6f732f4268306f554b5a4b54435848314849546e693643355a554577493572586c306c596277646b5038362e6a7067, 'jmaria@gmail.com', '820065378', NULL, 'Ev. Eduardo Mondlane Beira', NULL, 'Ativo', NULL, '2023-07-13 14:09:53', '2023-07-13 14:09:53'),
	(2, '000000002', 'Jin Kazama', '244444444', 'M', '1992-11-11', '2023-07-10', 'A', _binary 0x666f746f735f616c756e6f732f68553475495432505339444272364e793338773774655677315339675a654f557476666a74484f6d2e6a7067, 'jkazama@gmail.com', '842222222', NULL, 'Ev. Eduardo Mondlane Beira', NULL, 'Ativo', 3, '2023-07-13 14:35:03', '2023-07-13 14:35:03'),
	(3, '000000003', 'Nina Williams', '124444444', 'M', '1989-07-11', '2023-07-02', 'A', _binary 0x666f746f735f616c756e6f732f6e43795541654b397179676e6968694d6471636843395536796747654b344a52455a744a574963762e6a7067, 'nwilliams@gmasil.com', '831111111', NULL, 'Ev. Eduardo Mondlane Beira', NULL, 'Ativo', 8, '2023-07-13 14:48:29', '2023-07-13 14:50:44'),
	(16, '000000004', 'Diogo Santos', '231234567', 'M', '1994-08-15', '2023-07-16', 'B', _binary 0x666f746f735f616c756e6f732f64696f676f5f73616e746f732e6a7067, 'diogo.santos@gmail.com', '845678912', NULL, 'Ev. Eduardo Mondlane Beira', NULL, 'Ativo', NULL, '2023-07-16 11:22:00', '2023-07-16 11:22:00'),
	(17, '000000005', 'Marta Silva', '345678912', 'F', '1996-02-25', '2023-07-16', 'A', _binary 0x666f746f735f616c756e6f732f6d617274615f73696c76612e6a7067, 'marta.silva@gmail.com', '834567891', NULL, 'Ev. Eduardo Mondlane Beira', NULL, 'Ativo', NULL, '2023-07-16 11:23:00', '2023-07-16 11:23:00'),
	(18, '000000006', 'Pedro Almeida', '456789123', 'M', '1995-05-18', '2023-07-16', 'C', _binary 0x666f746f735f616c756e6f732f706564726f5f616c6d656964612e6a7067, 'pedro.almeida@gmail.com', '831111111', NULL, 'Ev. Eduardo Mondlane Beira', NULL, 'Ativo', NULL, '2023-07-16 11:24:00', '2023-07-16 11:24:00'),
	(19, '000000009', 'Ana Rodrigues', '567891234', 'F', '1997-11-02', '2023-07-16', 'B', _binary 0x666f746f735f616c756e6f732f616e615f726f647269677565732e6a7067, 'ana.rodrigues@gmail.com', '842222222', NULL, 'Ev. Eduardo Mondlane Beira', NULL, 'Ativo', NULL, '2023-07-16 11:25:00', '2023-07-16 11:25:00'),
	(20, '000000010', 'Rui Gomes', '678912345', 'M', '1993-09-14', '2023-07-16', 'A', _binary 0x666f746f735f616c756e6f732f7275695f676f6d65732e6a7067, 'rui.gomes@gmail.com', '834567891', NULL, 'Ev. Eduardo Mondlane Beira', NULL, 'Ativo', NULL, '2023-07-16 11:26:00', '2023-07-16 11:26:00'),
	(21, '000000011', 'Joana Martins', '789123456', 'F', '1992-06-30', '2023-07-16', 'C', _binary 0x666f746f735f616c756e6f732f6a6f616e615f6d617274696e732e6a7067, 'joana.martins@gmail.com', '834567891', NULL, 'Ev. Eduardo Mondlane Beira', NULL, 'Ativo', NULL, '2023-07-16 11:27:00', '2023-07-16 11:27:00'),
	(22, '000000012', 'Hugo Costa', '891234567', 'M', '1996-04-22', '2023-07-16', 'A', _binary 0x666f746f735f616c756e6f732f6875676f5f636f7374612e6a7067, 'hugo.costa@gmail.com', '845678912', NULL, 'Ev. Eduardo Mondlane Beira', NULL, 'Ativo', NULL, '2023-07-16 11:28:00', '2023-07-16 11:28:00'),
	(23, '000000013', 'Inês Ferreira', '912345678', 'F', '1994-03-10', '2023-07-16', 'B', _binary 0x666f746f735f616c756e6f732f696e65735f66657272656972612e6a7067, 'ines.ferreira@gmail.com', '831111111', NULL, 'Ev. Eduardo Mondlane Beira', NULL, 'Ativo', NULL, '2023-07-16 11:29:00', '2023-07-16 11:29:00'),
	(29, '000000024', 'Jorge Pinto', '789456123', 'M', '1997-09-08', '2023-07-17', 'A', _binary 0x666f746f735f616c756e6f732f34307158486757494537446c664e6b56567471544d4655324b43696f435555496f4258376a6171492e6a7067, 'a2017010372@alumni.iscac.pt', '928053456', NULL, 'Rua Pêro Vaz de Caminha', NULL, 'Ativo', 29, '2023-07-17 19:15:03', '2023-07-17 19:15:03');

-- A despejar estrutura para tabela teste.aulas
CREATE TABLE IF NOT EXISTS `aulas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_termino` time NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `escalao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacoes` text COLLATE utf8mb4_unicode_ci,
  `tutor_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aulas_tutor_id_foreign` (`tutor_id`),
  CONSTRAINT `aulas_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.aulas: ~0 rows (aproximadamente)
INSERT INTO `aulas` (`id`, `data`, `hora_inicio`, `hora_termino`, `local`, `escalao`, `estado`, `observacoes`, `tutor_id`, `created_at`, `updated_at`) VALUES
	(16, '2023-06-01', '09:00:00', '10:00:00', 'Piscina 1', 'A', 'Ativo', 'Observation 1', 1, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(17, '2023-06-02', '10:30:00', '11:30:00', 'Piscina 2', 'B', 'Ativo', 'Observation 2', 2, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(18, '2023-06-03', '14:00:00', '15:00:00', 'Piscina 3', 'C', 'Ativo', 'Observation 3', 3, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(19, '2023-06-04', '16:30:00', '17:30:00', 'Piscina 4', 'D', 'Ativo', 'Observation 4', 4, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(20, '2023-06-05', '11:00:00', '12:00:00', 'Piscina 1', 'A', 'Ativo', 'Observation 5', 3, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(21, '2023-06-06', '13:30:00', '14:30:00', 'Piscina 2', 'B', 'Ativo', 'Observation 6', 1, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(22, '2023-06-07', '15:45:00', '16:45:00', 'Piscina 3', 'C', 'Ativo', 'Observation 7', 2, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(23, '2023-06-08', '09:30:00', '10:30:00', 'Piscina 4', 'D', 'Ativo', 'Observation 8', 3, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(24, '2023-06-09', '14:15:00', '15:15:00', 'Piscina 1', 'A', 'Ativo', 'Observation 9', 4, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(25, '2023-06-10', '17:00:00', '18:00:00', 'Piscina 2', 'B', 'Ativo', 'Observation 10', 3, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(26, '2023-06-11', '12:30:00', '13:30:00', 'Piscina 3', 'C', 'Ativo', 'Observation 11', 1, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(27, '2023-06-12', '16:00:00', '17:00:00', 'Piscina 4', 'D', 'Ativo', 'Observation 12', 2, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(28, '2023-06-13', '10:15:00', '11:15:00', 'Piscina 1', 'A', 'Ativo', 'Observation 13', 3, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(29, '2023-06-14', '13:45:00', '14:45:00', 'Piscina 2', 'B', 'Ativo', 'Observation 14', 4, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(30, '2023-06-15', '15:30:00', '16:30:00', 'Piscina 3', 'C', 'Ativo', 'Observation 15', 3, '2023-07-14 00:27:02', '2023-07-14 00:27:02'),
	(31, '2023-07-14', '02:05:00', '06:05:00', 'Piscina 3', 'A', 'Confirmada', 'Tragam 2 toalhas', 1, '2023-07-14 00:06:07', '2023-07-14 00:06:07'),
	(32, '2023-07-14', '02:05:00', '06:05:00', 'Piscina 3', 'A', 'Confirmada', 'Tragam 2 toalhas', 1, '2023-07-14 00:09:45', '2023-07-14 00:09:45');

-- A despejar estrutura para tabela teste.aulasalunos
CREATE TABLE IF NOT EXISTS `aulasalunos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `aula_id` bigint unsigned NOT NULL,
  `aluno_id` bigint unsigned NOT NULL,
  `presente` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aulasalunos_aula_id_foreign` (`aula_id`),
  KEY `aulasalunos_aluno_id_foreign` (`aluno_id`),
  CONSTRAINT `aulasalunos_aluno_id_foreign` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `aulasalunos_aula_id_foreign` FOREIGN KEY (`aula_id`) REFERENCES `aulas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.aulasalunos: ~0 rows (aproximadamente)
INSERT INTO `aulasalunos` (`id`, `aula_id`, `aluno_id`, `presente`, `created_at`, `updated_at`) VALUES
	(1, 16, 3, 0, '2023-07-15 14:39:36', '2023-07-15 14:39:36'),
	(2, 17, 3, 0, '2023-07-15 14:41:00', '2023-07-15 14:41:00'),
	(3, 21, 3, 0, '2023-07-15 15:11:05', '2023-07-15 15:11:05'),
	(4, 17, 29, NULL, '2023-07-17 19:18:20', '2023-07-17 19:18:20');

<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
-- A despejar estrutura para tabela teste.avaliacao
CREATE TABLE IF NOT EXISTS `avaliacao` (
  `id_avaliacao` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_users` bigint unsigned NOT NULL,
  `data` date NOT NULL,
  `tecnica` int NOT NULL,
  `fisica` int NOT NULL,
  `desempenho` int NOT NULL,
  `observacoes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_avaliacao`),
  KEY `avaliacao_id_users_foreign` (`id_users`),
  CONSTRAINT `avaliacao_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.avaliacao: ~0 rows (aproximadamente)

<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
-- A despejar estrutura para tabela teste.cobrancas
CREATE TABLE IF NOT EXISTS `cobrancas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `aluno_id` bigint unsigned NOT NULL,
  `data_cobranca` date NOT NULL,
  `data_limite` datetime DEFAULT NULL,
  `data_pagamento` datetime DEFAULT NULL,
  `montante` decimal(8,2) NOT NULL,
  `multa` decimal(8,2) NOT NULL,
  `iva` double(8,2) NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referencia` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modo_pagamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cobrancas_aluno_id_foreign` (`aluno_id`),
  CONSTRAINT `cobrancas_aluno_id_foreign` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.cobrancas: ~0 rows (aproximadamente)
INSERT INTO `cobrancas` (`id`, `aluno_id`, `data_cobranca`, `data_limite`, `data_pagamento`, `montante`, `multa`, `iva`, `descricao`, `referencia`, `modo_pagamento`, `estado`, `created_at`, `updated_at`) VALUES
	(22, 1, '2023-01-01', NULL, '2023-01-05 00:00:00', 100.00, 0.00, 23.00, 'Propina Janeiro', '123456789', 'Cartão de Crédito', 'Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(23, 2, '2023-01-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Janeiro', '987654321', 'Transferência Bancária', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(24, 3, '2023-01-01', NULL, '2023-01-03 00:00:00', 120.00, 0.00, 27.60, 'Propina Janeiro', '456789123', 'Dinheiro', 'Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(25, 1, '2023-02-01', NULL, NULL, 100.00, 0.00, 23.00, 'Propina Fevereiro', '789123456', 'Cartão de Crédito', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(26, 2, '2023-02-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Fevereiro', '321654987', 'Transferência Bancária', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(27, 3, '2023-02-01', NULL, NULL, 120.00, 0.00, 27.60, 'Propina Fevereiro', '654987321', 'Dinheiro', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(28, 1, '2023-03-01', NULL, NULL, 100.00, 0.00, 23.00, 'Propina Março', '987654123', 'Cartão de Crédito', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(29, 2, '2023-03-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Março', '123654789', 'Transferência Bancária', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(30, 3, '2023-03-01', NULL, NULL, 120.00, 0.00, 27.60, 'Propina Março', '456321789', 'Dinheiro', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(31, 1, '2023-04-01', NULL, NULL, 100.00, 0.00, 23.00, 'Propina Abril', '789456123', 'Cartão de Crédito', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(32, 2, '2023-04-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Abril', '321987654', 'Transferência Bancária', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(33, 3, '2023-04-01', NULL, NULL, 120.00, 0.00, 27.60, 'Propina Abril', '654123987', 'Dinheiro', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(34, 1, '2023-05-01', NULL, NULL, 100.00, 0.00, 23.00, 'Propina Maio', '987321456', 'Cartão de Crédito', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(35, 2, '2023-05-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Maio', '321789654', 'Transferência Bancária', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(36, 3, '2023-05-01', NULL, NULL, 120.00, 0.00, 27.60, 'Propina Maio', '654987123', 'Dinheiro', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(37, 1, '2023-06-01', NULL, NULL, 100.00, 0.00, 23.00, 'Propina Junho', '987654321', 'Cartão de Crédito', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(38, 2, '2023-06-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Junho', '321654789', 'Transferência Bancária', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(39, 3, '2023-06-01', NULL, NULL, 120.00, 0.00, 27.60, 'Propina Junho', '654987321', 'Dinheiro', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(40, 1, '2023-07-01', NULL, NULL, 100.00, 0.00, 23.00, 'Propina Julho', '987321654', 'Cartão de Crédito', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(41, 2, '2023-07-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Julho', '321789456', 'Transferência Bancária', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(42, 3, '2023-07-01', NULL, NULL, 120.00, 0.00, 27.60, 'Propina Julho', '654123789', 'Dinheiro', 'Nao Pago', '2023-07-14 12:11:13', '2023-07-14 12:11:13'),
	(43, 1, '2023-07-12', '2023-07-12 15:42:00', '2023-07-15 15:42:00', 121.00, 0.00, 4.00, 'Propina', '987654322', 'Cheque', 'Pago', '2023-07-14 13:43:19', '2023-07-14 13:43:19'),
	(44, 1, '2023-07-12', '2023-07-12 15:42:00', '2023-07-15 15:42:00', 121.00, 0.00, 4.00, 'Propina', '987654323', 'Cheque', 'Pago', '2023-07-14 13:44:00', '2023-07-14 13:44:00'),
	(45, 1, '2023-07-12', '2023-07-12 15:42:00', '2023-07-15 15:42:00', 121.00, 0.00, 4.00, 'Propina', '987654324', 'Cheque', 'Pago', '2023-07-14 13:44:32', '2023-07-14 13:44:32'),
	(46, 1, '2023-07-12', '2023-07-12 15:42:00', '2023-07-15 15:42:00', 121.00, 0.00, 4.00, 'Propina', '987654325', 'Cheque', 'Pago', '2023-07-14 13:45:30', '2023-07-14 14:20:29'),
	(47, 29, '2023-07-17', '2023-07-31 22:09:00', '2023-07-18 22:09:00', 100.00, 0.00, 23.00, 'Propina', '987654326', 'dinheiro', 'Nao Pago', '2023-07-17 20:10:07', '2023-07-17 20:10:07');

<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
-- A despejar estrutura para tabela teste.competicao
CREATE TABLE IF NOT EXISTS `competicao` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome_competicao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_participantes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.competicao: ~0 rows (aproximadamente)
INSERT INTO `competicao` (`id`, `nome_competicao`, `data`, `descricao`, `n_participantes`, `created_at`, `updated_at`) VALUES
	(1, 'Torneio Municipal', '2023-07-24 16:00:00', 'Podem levar o que quiserem', 15, NULL, NULL),
	(2, 'Torneio de Verão', '2023-08-20 09:30:00', 'Só é permitido touca', 50, NULL, NULL),
	(3, 'Torneio Internacional', '2023-10-01 09:30:00', 'Equipas de todo o mundo', 200, NULL, NULL);

-- A despejar estrutura para tabela teste.competicoes
CREATE TABLE IF NOT EXISTS `competicoes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_termino` time NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_maximo_participantes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `escaloes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `premiacao` text COLLATE utf8mb4_unicode_ci,
  `imagem` blob,
  `observacoes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.competicoes: ~0 rows (aproximadamente)
INSERT INTO `competicoes` (`id`, `data`, `hora_inicio`, `hora_termino`, `nome`, `descricao`, `local`, `numero_maximo_participantes`, `estado`, `escaloes`, `premiacao`, `imagem`, `observacoes`, `created_at`, `updated_at`) VALUES
	(1, '2023-07-20', '09:00:00', '12:00:00', 'Campeonato Regional de Natação', 'Competição Individual', 'Piscina Olímpica de Lisboa', '200', 'Ativa', 'A,B,C,D', '1º lugar: 100 pontos, 2º lugar: 75 pontos, 3º lugar: 50 pontos, 4º lugar: 25 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f4b4578464d6a5072346a666e4f444d72466e4f5571783151315555574d4455304e525946376e46672e6a7067, 'Todos os atletas devem usar touca azul.', NULL, '2023-07-16 17:42:29'),
	(2, '2023-08-05', '14:30:00', '17:30:00', 'Desafio de Revezamento', 'Competição em Equipes', 'Centro Aquático do Porto', '150', 'Ativa', 'A,B', '1º lugar: 200 pontos, 2º lugar: 150 pontos, 3º lugar: 100 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f3362734f734d63647a5876797a657778446c787a7863536f624758794167786b3645414730514d6b2e6a7067, NULL, NULL, '2023-07-16 16:29:13'),
	(3, '2023-08-10', '10:00:00', '12:30:00', 'Copa de Natação Infantil', 'Competição para Jovens', 'Piscina Municipal de Braga', '100', 'Ativa', 'C,D', '1º lugar: 75 pontos, 2º lugar: 50 pontos, 3º lugar: 25 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f7277326f3042754d7a7434394555757475304772566a324b53457a75705578366e61746e346f64592e77656270, 'Os atletas devem se apresentar com uniforme do clube.', NULL, '2023-07-16 17:42:52'),
	(4, '2023-09-15', '08:00:00', '11:00:00', 'Maratona Aquática', 'Competição de Resistência', 'Praia de Cascais', '300', 'Ativa', 'A', '1º lugar: 300 pontos, 2º lugar: 200 pontos, 3º lugar: 100 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f35513842634a794f4d474d53596f4253796d6b58657277734a36666a594d7a4e64616b42415665462e6a7067, NULL, NULL, '2023-07-16 16:20:32'),
	(5, '2023-09-25', '15:00:00', '18:00:00', 'Torneio de Natação Adaptada', 'Competição para Atletas com Deficiência', 'Escola de Natação de Coimbra', '50', 'Ativa', 'B,D', '1º lugar: Troféu, 2º lugar: Medalha, 3º lugar: Certificado', _binary 0x696d6167656e735f636f6d70657469636f65732f6a6154434b465878364a577a684a3050647254615348726f574475375844535a6447454447524f6e2e77656270, 'Natação assistida permitida.', NULL, '2023-07-16 17:43:21'),
	(6, '2023-10-05', '16:00:00', '19:00:00', 'Campeonato de Natação Velocista', 'Competição de Velocidade', 'Piscina Olímpica do Algarve', '100', 'Ativa', 'A,C', '1º lugar: 100 pontos, 2º lugar: 75 pontos, 3º lugar: 50 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f4c4d366e7071314c356b636c447056576f5a48744232575667316a797a41664e393657444a4256502e6a7067, NULL, NULL, '2023-07-16 17:43:46'),
	(7, '2023-11-10', '10:30:00', '13:30:00', 'Festival de Natação Infantil', 'Competição para Crianças', 'Centro Aquático do Porto', '80', 'Ativa', 'A,D', '1º lugar: Medalha de Ouro, 2º lugar: Medalha de Prata, 3º lugar: Medalha de Bronze', NULL, 'Certificado de Participação para todos os participantes.', NULL, NULL),
	(8, '2023-11-20', '13:00:00', '16:00:00', 'Campeonato de Natação Juvenil', 'Competição para Adolescentes', 'Piscina Municipal de Lisboa', '120', 'Ativa', 'A,B', '1º lugar: 150 pontos, 2º lugar: 100 pontos, 3º lugar: 50 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f645039684d596842795a6d37694e786b706b4c684255733638447271705471414c744d6f4e5175592e6a7067, NULL, NULL, '2023-07-16 17:53:17'),
	(9, '2023-12-02', '09:00:00', '12:00:00', 'Desafio de Natação Master', 'Competição para Atletas Master', 'Escola de Natação de Coimbra', '70', 'Ativa', 'C,D', '1º lugar: Troféu, 2º lugar: Medalha, 3º lugar: Certificado', _binary 0x696d6167656e735f636f6d70657469636f65732f385168586e5268473871534c704852543435354f366a796b534e35557a443572325375416c7347652e6a7067, 'Natação assistida permitida.', NULL, '2023-07-16 17:53:49'),
	(10, '2023-12-15', '11:00:00', '14:00:00', 'Copa de Natação Feminina', 'Competição Exclusiva para Mulheres', 'Piscina Olímpica de Lisboa', '50', 'Ativa', 'A', '1º lugar: 100 pontos, 2º lugar: 75 pontos, 3º lugar: 50 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f423075305457524e5a64436b753739317a3249634c67494b6f46525075303677675a6935705a6f592e6a7067, 'Vestimenta rosa obrigatória.', NULL, '2023-07-16 16:20:09'),
	(11, '2024-01-10', '14:30:00', '17:30:00', 'Torneio de Natação Universitária', 'Competição entre Universidades', 'Centro Aquático do Porto', '150', 'Ativa', 'A,B,C,D', '1º lugar: 200 pontos, 2º lugar: 150 pontos, 3º lugar: 100 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f787a71337552334c43477175484e6a66364c6c74354878364c6435796546774175314f576772384c2e6a7067, NULL, NULL, '2023-07-16 17:54:21'),
	(12, '2024-02-05', '09:30:00', '12:30:00', 'Copa de Natação Escolar', 'Competição para Estudantes', 'Piscina Municipal de Braga', '100', 'Ativa', 'C,D', '1º lugar: Medalha de Ouro, 2º lugar: Medalha de Prata, 3º lugar: Medalha de Bronze', NULL, 'Certificado de Participação para todas as escolas.', NULL, NULL),
	(13, '2024-03-15', '08:00:00', '12:00:00', 'Maratona Aquática Internacional', 'Competição de Resistência', 'Praia de Cascais', '500', 'Ativa', 'A,B,C', '1º lugar: 500 pontos, 2º lugar: 300 pontos, 3º lugar: 200 pontos', NULL, NULL, NULL, NULL),
	(14, '2024-03-25', '15:30:00', '18:30:00', 'Torneio de Natação Esportiva', 'Competição para Atletas Profissionais', 'Escola de Natação de Coimbra', '80', 'Ativa', 'B,D', '1º lugar: 100 pontos, 2º lugar: 75 pontos, 3º lugar: 50 pontos', NULL, NULL, NULL, NULL),
	(15, '2024-04-10', '16:00:00', '19:00:00', 'Campeonato de Natação Velocista', 'Competição de Velocidade', 'Piscina Olímpica do Algarve', '100', 'Ativa', 'A,C', '1º lugar: 100 pontos, 2º lugar: 75 pontos, 3º lugar: 50 pontos', NULL, NULL, NULL, NULL),
	(16, '2024-04-20', '11:30:00', '14:30:00', 'Festival de Natação Infantil', 'Competição para Crianças', 'Centro Aquático do Porto', '80', 'Ativa', 'A,D', '1º lugar: Medalha de Ouro, 2º lugar: Medalha de Prata, 3º lugar: Medalha de Bronze', NULL, 'Certificado de Participação para todos os participantes.', NULL, NULL),
	(17, '2024-05-05', '09:30:00', '12:30:00', 'Copa de Natação Juvenil', 'Competição para Adolescentes', 'Piscina Municipal de Lisboa', '120', 'Ativa', 'A,B', '1º lugar: 150 pontos, 2º lugar: 100 pontos, 3º lugar: 50 pontos', NULL, NULL, NULL, NULL),
	(18, '2024-06-02', '09:00:00', '12:00:00', 'Desafio de Natação Master', 'Competição para Atletas Master', 'Escola de Natação de Coimbra', '70', 'Ativa', 'C,D', '1º lugar: Troféu, 2º lugar: Medalha, 3º lugar: Certificado', NULL, 'Natação assistida permitida.', NULL, NULL),
	(19, '2024-06-15', '11:00:00', '14:00:00', 'Copa de Natação Feminina', 'Competição Exclusiva para Mulheres', 'Piscina Olímpica de Lisboa', '50', 'Ativa', 'A', '1º lugar: 100 pontos, 2º lugar: 75 pontos, 3º lugar: 50 pontos', NULL, 'Vestimenta rosa obrigatória.', NULL, NULL),
	(20, '2024-07-10', '14:30:00', '17:30:00', 'Torneio de Natação Universitária', 'Competição entre Universidades', 'Centro Aquático do Porto', '150', 'Ativa', 'A,B,C,D', '1º lugar: 200 pontos, 2º lugar: 150 pontos, 3º lugar: 100 pontos', NULL, NULL, NULL, NULL),
	(21, '2021-11-20', '10:10:00', '15:10:00', 'Maratona Maritima', 'Corridade a pares', 'Piscina Municipal de Coimbra', '20', 'Ativa', 'B,C', '1o Lugar 10 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f4863585762706c644f7476505035583959777a3172654642497871677866596e656c6479704d7a6e2e6a7067, 'Observacoes gerais', '2023-07-16 11:51:32', '2023-07-16 18:02:47'),
	(22, '2023-10-12', '10:00:00', '15:00:00', 'Competicao 38', 'Prova de resistencia', 'Centro Aquatico Dom Carlos', '300', 'Cancelada', 'A,B', 'Nenhum premio', NULL, NULL, '2023-07-16 12:08:24', '2023-07-16 12:43:19'),
	(23, '2023-07-31', '09:30:00', '12:30:00', 'Competição Nova', 'Vale tudo', 'coimbra', '10', 'Ativa', 'A', NULL, NULL, NULL, '2023-07-16 22:37:49', '2023-07-16 22:37:49');

-- A despejar estrutura para tabela teste.competicoesalunos
CREATE TABLE IF NOT EXISTS `competicoesalunos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `aluno_id` bigint unsigned NOT NULL,
  `competicao_id` bigint unsigned NOT NULL,
  `posicao` int DEFAULT NULL,
  `pontos_obtidos` int NOT NULL DEFAULT '0',
  `presente` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `competicoesalunos_aluno_id_foreign` (`aluno_id`),
  KEY `competicoesalunos_competicao_id_foreign` (`competicao_id`),
  CONSTRAINT `competicoesalunos_aluno_id_foreign` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `competicoesalunos_competicao_id_foreign` FOREIGN KEY (`competicao_id`) REFERENCES `competicoes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.competicoesalunos: ~0 rows (aproximadamente)
INSERT INTO `competicoesalunos` (`id`, `aluno_id`, `competicao_id`, `posicao`, `pontos_obtidos`, `presente`, `created_at`, `updated_at`) VALUES
	(1, 3, 21, NULL, 0, NULL, '2023-07-16 17:26:42', '2023-07-16 17:26:42'),
	(2, 3, 1, NULL, 0, NULL, '2023-07-16 18:01:37', '2023-07-16 18:01:37'),
	(3, 3, 23, NULL, 0, NULL, '2023-07-16 22:38:54', '2023-07-16 22:38:54'),
	(4, 29, 1, NULL, 0, NULL, '2023-07-17 19:19:21', '2023-07-17 19:19:21');

-- A despejar estrutura para tabela teste.competicoes
CREATE TABLE IF NOT EXISTS `competicoes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_termino` time NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_maximo_participantes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `escaloes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `premiacao` text COLLATE utf8mb4_unicode_ci,
  `imagem` blob,
  `observacoes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.competicoes: ~0 rows (aproximadamente)
INSERT INTO `competicoes` (`id`, `data`, `hora_inicio`, `hora_termino`, `nome`, `descricao`, `local`, `numero_maximo_participantes`, `estado`, `escaloes`, `premiacao`, `imagem`, `observacoes`, `created_at`, `updated_at`) VALUES
	(1, '2023-07-20', '09:00:00', '12:00:00', 'Campeonato Regional de Natação', 'Competição Individual', 'Piscina Olímpica de Lisboa', '200', 'Ativa', 'A,B,C,D', '1º lugar: 100 pontos, 2º lugar: 75 pontos, 3º lugar: 50 pontos, 4º lugar: 25 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f4b4578464d6a5072346a666e4f444d72466e4f5571783151315555574d4455304e525946376e46672e6a7067, 'Todos os atletas devem usar touca azul.', NULL, '2023-07-16 17:42:29'),
	(2, '2023-08-05', '14:30:00', '17:30:00', 'Desafio de Revezamento', 'Competição em Equipes', 'Centro Aquático do Porto', '150', 'Ativa', 'A,B', '1º lugar: 200 pontos, 2º lugar: 150 pontos, 3º lugar: 100 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f3362734f734d63647a5876797a657778446c787a7863536f624758794167786b3645414730514d6b2e6a7067, NULL, NULL, '2023-07-16 16:29:13'),
	(3, '2023-08-10', '10:00:00', '12:30:00', 'Copa de Natação Infantil', 'Competição para Jovens', 'Piscina Municipal de Braga', '100', 'Ativa', 'C,D', '1º lugar: 75 pontos, 2º lugar: 50 pontos, 3º lugar: 25 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f7277326f3042754d7a7434394555757475304772566a324b53457a75705578366e61746e346f64592e77656270, 'Os atletas devem se apresentar com uniforme do clube.', NULL, '2023-07-16 17:42:52'),
	(4, '2023-09-15', '08:00:00', '11:00:00', 'Maratona Aquática', 'Competição de Resistência', 'Praia de Cascais', '300', 'Ativa', 'A', '1º lugar: 300 pontos, 2º lugar: 200 pontos, 3º lugar: 100 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f35513842634a794f4d474d53596f4253796d6b58657277734a36666a594d7a4e64616b42415665462e6a7067, NULL, NULL, '2023-07-16 16:20:32'),
	(5, '2023-09-25', '15:00:00', '18:00:00', 'Torneio de Natação Adaptada', 'Competição para Atletas com Deficiência', 'Escola de Natação de Coimbra', '50', 'Ativa', 'B,D', '1º lugar: Troféu, 2º lugar: Medalha, 3º lugar: Certificado', _binary 0x696d6167656e735f636f6d70657469636f65732f6a6154434b465878364a577a684a3050647254615348726f574475375844535a6447454447524f6e2e77656270, 'Natação assistida permitida.', NULL, '2023-07-16 17:43:21'),
	(6, '2023-10-05', '16:00:00', '19:00:00', 'Campeonato de Natação Velocista', 'Competição de Velocidade', 'Piscina Olímpica do Algarve', '100', 'Ativa', 'A,C', '1º lugar: 100 pontos, 2º lugar: 75 pontos, 3º lugar: 50 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f4c4d366e7071314c356b636c447056576f5a48744232575667316a797a41664e393657444a4256502e6a7067, NULL, NULL, '2023-07-16 17:43:46'),
	(7, '2023-11-10', '10:30:00', '13:30:00', 'Festival de Natação Infantil', 'Competição para Crianças', 'Centro Aquático do Porto', '80', 'Ativa', 'A,D', '1º lugar: Medalha de Ouro, 2º lugar: Medalha de Prata, 3º lugar: Medalha de Bronze', NULL, 'Certificado de Participação para todos os participantes.', NULL, NULL),
	(8, '2023-11-20', '13:00:00', '16:00:00', 'Campeonato de Natação Juvenil', 'Competição para Adolescentes', 'Piscina Municipal de Lisboa', '120', 'Ativa', 'A,B', '1º lugar: 150 pontos, 2º lugar: 100 pontos, 3º lugar: 50 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f645039684d596842795a6d37694e786b706b4c684255733638447271705471414c744d6f4e5175592e6a7067, NULL, NULL, '2023-07-16 17:53:17'),
	(9, '2023-12-02', '09:00:00', '12:00:00', 'Desafio de Natação Master', 'Competição para Atletas Master', 'Escola de Natação de Coimbra', '70', 'Ativa', 'C,D', '1º lugar: Troféu, 2º lugar: Medalha, 3º lugar: Certificado', _binary 0x696d6167656e735f636f6d70657469636f65732f385168586e5268473871534c704852543435354f366a796b534e35557a443572325375416c7347652e6a7067, 'Natação assistida permitida.', NULL, '2023-07-16 17:53:49'),
	(10, '2023-12-15', '11:00:00', '14:00:00', 'Copa de Natação Feminina', 'Competição Exclusiva para Mulheres', 'Piscina Olímpica de Lisboa', '50', 'Ativa', 'A', '1º lugar: 100 pontos, 2º lugar: 75 pontos, 3º lugar: 50 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f423075305457524e5a64436b753739317a3249634c67494b6f46525075303677675a6935705a6f592e6a7067, 'Vestimenta rosa obrigatória.', NULL, '2023-07-16 16:20:09'),
	(11, '2024-01-10', '14:30:00', '17:30:00', 'Torneio de Natação Universitária', 'Competição entre Universidades', 'Centro Aquático do Porto', '150', 'Ativa', 'A,B,C,D', '1º lugar: 200 pontos, 2º lugar: 150 pontos, 3º lugar: 100 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f787a71337552334c43477175484e6a66364c6c74354878364c6435796546774175314f576772384c2e6a7067, NULL, NULL, '2023-07-16 17:54:21'),
	(12, '2024-02-05', '09:30:00', '12:30:00', 'Copa de Natação Escolar', 'Competição para Estudantes', 'Piscina Municipal de Braga', '100', 'Ativa', 'C,D', '1º lugar: Medalha de Ouro, 2º lugar: Medalha de Prata, 3º lugar: Medalha de Bronze', NULL, 'Certificado de Participação para todas as escolas.', NULL, NULL),
	(13, '2024-03-15', '08:00:00', '12:00:00', 'Maratona Aquática Internacional', 'Competição de Resistência', 'Praia de Cascais', '500', 'Ativa', 'A,B,C', '1º lugar: 500 pontos, 2º lugar: 300 pontos, 3º lugar: 200 pontos', NULL, NULL, NULL, NULL),
	(14, '2024-03-25', '15:30:00', '18:30:00', 'Torneio de Natação Esportiva', 'Competição para Atletas Profissionais', 'Escola de Natação de Coimbra', '80', 'Ativa', 'B,D', '1º lugar: 100 pontos, 2º lugar: 75 pontos, 3º lugar: 50 pontos', NULL, NULL, NULL, NULL),
	(15, '2024-04-10', '16:00:00', '19:00:00', 'Campeonato de Natação Velocista', 'Competição de Velocidade', 'Piscina Olímpica do Algarve', '100', 'Ativa', 'A,C', '1º lugar: 100 pontos, 2º lugar: 75 pontos, 3º lugar: 50 pontos', NULL, NULL, NULL, NULL),
	(16, '2024-04-20', '11:30:00', '14:30:00', 'Festival de Natação Infantil', 'Competição para Crianças', 'Centro Aquático do Porto', '80', 'Ativa', 'A,D', '1º lugar: Medalha de Ouro, 2º lugar: Medalha de Prata, 3º lugar: Medalha de Bronze', NULL, 'Certificado de Participação para todos os participantes.', NULL, NULL),
	(17, '2024-05-05', '09:30:00', '12:30:00', 'Copa de Natação Juvenil', 'Competição para Adolescentes', 'Piscina Municipal de Lisboa', '120', 'Ativa', 'A,B', '1º lugar: 150 pontos, 2º lugar: 100 pontos, 3º lugar: 50 pontos', NULL, NULL, NULL, NULL),
	(18, '2024-06-02', '09:00:00', '12:00:00', 'Desafio de Natação Master', 'Competição para Atletas Master', 'Escola de Natação de Coimbra', '70', 'Ativa', 'C,D', '1º lugar: Troféu, 2º lugar: Medalha, 3º lugar: Certificado', NULL, 'Natação assistida permitida.', NULL, NULL),
	(19, '2024-06-15', '11:00:00', '14:00:00', 'Copa de Natação Feminina', 'Competição Exclusiva para Mulheres', 'Piscina Olímpica de Lisboa', '50', 'Ativa', 'A', '1º lugar: 100 pontos, 2º lugar: 75 pontos, 3º lugar: 50 pontos', NULL, 'Vestimenta rosa obrigatória.', NULL, NULL),
	(20, '2024-07-10', '14:30:00', '17:30:00', 'Torneio de Natação Universitária', 'Competição entre Universidades', 'Centro Aquático do Porto', '150', 'Ativa', 'A,B,C,D', '1º lugar: 200 pontos, 2º lugar: 150 pontos, 3º lugar: 100 pontos', NULL, NULL, NULL, NULL),
	(21, '2021-11-20', '10:10:00', '15:10:00', 'Maratona Maritima', 'Corridade a pares', 'Piscina Municipal de Coimbra', '20', 'Ativa', 'B,C', '1o Lugar 10 pontos', _binary 0x696d6167656e735f636f6d70657469636f65732f4863585762706c644f7476505035583959777a3172654642497871677866596e656c6479704d7a6e2e6a7067, 'Observacoes gerais', '2023-07-16 11:51:32', '2023-07-16 18:02:47'),
	(22, '2023-10-12', '10:00:00', '15:00:00', 'Competicao 38', 'Prova de resistencia', 'Centro Aquatico Dom Carlos', '300', 'Cancelada', 'A,B', 'Nenhum premio', NULL, NULL, '2023-07-16 12:08:24', '2023-07-16 12:43:19'),
	(23, '2023-07-31', '09:30:00', '12:30:00', 'Competição Nova', 'Vale tudo', 'coimbra', '10', 'Ativa', 'A', NULL, NULL, NULL, '2023-07-16 22:37:49', '2023-07-16 22:37:49');

-- A despejar estrutura para tabela teste.competicoesalunos
CREATE TABLE IF NOT EXISTS `competicoesalunos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `aluno_id` bigint unsigned NOT NULL,
  `competicao_id` bigint unsigned NOT NULL,
  `posicao` int DEFAULT NULL,
  `pontos_obtidos` int NOT NULL DEFAULT '0',
  `presente` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `competicoesalunos_aluno_id_foreign` (`aluno_id`),
  KEY `competicoesalunos_competicao_id_foreign` (`competicao_id`),
  CONSTRAINT `competicoesalunos_aluno_id_foreign` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `competicoesalunos_competicao_id_foreign` FOREIGN KEY (`competicao_id`) REFERENCES `competicoes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.competicoesalunos: ~0 rows (aproximadamente)
INSERT INTO `competicoesalunos` (`id`, `aluno_id`, `competicao_id`, `posicao`, `pontos_obtidos`, `presente`, `created_at`, `updated_at`) VALUES
	(1, 3, 21, NULL, 0, NULL, '2023-07-16 17:26:42', '2023-07-16 17:26:42'),
	(2, 3, 1, NULL, 0, NULL, '2023-07-16 18:01:37', '2023-07-16 18:01:37'),
	(3, 3, 23, NULL, 0, NULL, '2023-07-16 22:38:54', '2023-07-16 22:38:54'),
	(4, 29, 1, NULL, 0, NULL, '2023-07-17 19:19:21', '2023-07-17 19:19:21');

-- A despejar estrutura para tabela teste.dadoscurriculo
CREATE TABLE IF NOT EXISTS `dadoscurriculo` (
  `id` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_user` bigint unsigned DEFAULT NULL,
  `modalidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `historico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_curriculo` (`id_user`),
  CONSTRAINT `user_curriculo` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.dadoscurriculo: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela teste.dadospessoa
CREATE TABLE IF NOT EXISTS `dadospessoa` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint unsigned DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_postal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
<<<<<<< HEAD
  PRIMARY KEY (`id`),
  KEY `user_pessoa` (`id_user`),
  CONSTRAINT `user_pessoa` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
=======
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes

-- A despejar dados para tabela teste.dadospessoa: ~0 rows (aproximadamente)
INSERT INTO `dadospessoa` (`id`, `nome`, `data_nascimento`, `email`, `morada`, `cod_postal`, `created_at`, `updated_at`) VALUES
	(1, 'Alex Sousa', '1990-11-11 00:00:00', 'lll@gmail.com', 'Coimbra', '1111', '2023-06-17 21:37:15', '2023-06-17 21:37:15'),
	(2, 'Alex Sousa', '1990-11-11 00:00:00', 'lll@gmail.com', 'Coimbra', '1111', '2023-06-17 21:42:01', '2023-06-17 21:42:01'),
	(3, 'Alex Sousa', '1990-11-11 00:00:00', 'lll@gmail.com', 'Coimbra', '1111', '2023-06-17 21:42:12', '2023-06-17 21:42:12'),
	(4, 'Alex Sousa', '1990-11-11 00:00:00', 'lll@gmail.com', 'Coimbra', '1111', '2023-06-17 21:46:37', '2023-06-17 21:46:37'),
	(5, 'Alex Sousa', '1990-11-11 00:00:00', 'lll@gmail.com', 'Coimbra', '1111', '2023-06-17 21:48:32', '2023-06-17 21:48:32'),
	(6, 'Alex Sousa', '1990-11-11 00:00:00', 'lll@gmail.com', 'Coimbra', '1111', '2023-06-17 21:48:45', '2023-06-17 21:48:45'),
	(7, 'Alex Sousa', '1990-11-11 00:00:00', 'lll@gmail.com', 'Coimbra', '1111', '2023-06-17 21:51:40', '2023-06-17 21:51:40'),
	(8, 'Alex Sousa', '1990-11-11 00:00:00', 'lll@gmail.com', 'Coimbra', '1111', '2023-06-17 21:52:19', '2023-06-17 21:52:19'),
	(9, 'Alex Sousa', '1990-11-11 00:00:00', 'lll@gmail.com', 'Coimbra', '1111', '2023-06-17 21:53:14', '2023-06-17 21:53:14'),
	(10, 'Alex Sousa', '1990-11-11 00:00:00', 'lll@gmail.com', 'Coimbra', '1111', '2023-06-17 21:53:51', '2023-06-17 21:53:51'),
	(11, 'Alex Sousa', '2023-06-09 00:00:00', 'Alex@gmail.com', 'Coimbra B, 2023', '1111', '2023-06-17 22:45:29', '2023-06-17 22:45:29');

-- A despejar estrutura para tabela teste.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.failed_jobs: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela teste.horario
CREATE TABLE IF NOT EXISTS `horario` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_user_prof` bigint unsigned NOT NULL,
  `data_inicio` datetime NOT NULL,
  `data_fim` datetime NOT NULL,
  `estado` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_prof` (`id_user_prof`),
  CONSTRAINT `user_prof` FOREIGN KEY (`id_user_prof`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.horario: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela teste.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
<<<<<<< Updated upstream
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
=======
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
=======
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes

-- A despejar dados para tabela teste.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_06_12_205721_dadospessoa', 1),
	(6, '2023_06_12_205752_dadoscurriculo', 1),
	(7, '2023_06_12_205806_horario', 1),
	(8, '2023_06_12_205836_pagamento', 1),
	(9, '2023_06_12_205843_competicao', 1),
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
	(10, '2023_06_24_162517_participacao', 2),
	(11, '2023_06_24_175726_avaliacao', 3);
=======
>>>>>>> Stashed changes
	(10, '2023_06_24_162517_participacao', 1),
	(11, '2023_06_24_175726_avaliacao', 1),
	(12, '2023_07_08_160953_create_tutores_table', 1),
	(13, '2023_07_09_001751_tutores_v2', 1),
	(14, '2023_07_12_164617_create_alunos_table', 1),
	(15, '2023_07_12_215815_add_user_foreign_key_to_tutores_table', 1),
	(16, '2023_07_13_145348_recreate_alunos_table', 1),
	(17, '2023_07_13_161955_add_column_table_users_usergroup', 1),
	(18, '2023_07_13_232825_create_aulas_table', 1),
	(19, '2023_07_14_112004_create_cobrancas_table', 1),
	(20, '2023_07_14_163458_create_aula_aluno_table', 1),
	(21, '2023_07_15_222754_create_competicoes_table', 1),
	(22, '2023_07_16_135622_create_competicoes_alunos_table', 1);
<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes

-- A despejar estrutura para tabela teste.pagamento
CREATE TABLE IF NOT EXISTS `pagamento` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_users` bigint unsigned NOT NULL,
  `data_limite` date NOT NULL,
  `valor` float NOT NULL DEFAULT '0',
  `data_pagamento` date DEFAULT NULL,
  `estado_pagamento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Não Pago',
  `ano_propina` year NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_pagamento` (`id_users`),
  CONSTRAINT `users_pagamento` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.pagamento: ~0 rows (aproximadamente)
INSERT INTO `pagamento` (`id`, `id_users`, `data_limite`, `valor`, `data_pagamento`, `estado_pagamento`, `ano_propina`, `created_at`, `updated_at`) VALUES
	(1, 1, '2023-12-31', 10, '2023-06-24', 'Pago', '2023', NULL, NULL),
	(2, 1, '2024-12-31', 10, NULL, 'Não Pago', '2024', NULL, NULL);

-- A despejar estrutura para tabela teste.participacoes
CREATE TABLE IF NOT EXISTS `participacoes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_users` bigint unsigned NOT NULL,
  `id_competicao` bigint unsigned NOT NULL,
  `participa` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_participacoes_competicao` (`id_competicao`),
  KEY `FK_participacoes_users` (`id_users`),
  CONSTRAINT `FK_participacoes_competicao` FOREIGN KEY (`id_competicao`) REFERENCES `competicao` (`id`),
  CONSTRAINT `FK_participacoes_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.participacoes: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela teste.participacoes
CREATE TABLE IF NOT EXISTS `participacoes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_users` bigint unsigned NOT NULL,
  `id_competicao` bigint unsigned NOT NULL,
  `participa` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `participacoes_id_users_foreign` (`id_users`),
  KEY `participacoes_id_competicao_foreign` (`id_competicao`),
  CONSTRAINT `participacoes_id_competicao_foreign` FOREIGN KEY (`id_competicao`) REFERENCES `competicao` (`id`),
  CONSTRAINT `participacoes_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.participacoes: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela teste.participacoes
CREATE TABLE IF NOT EXISTS `participacoes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_users` bigint unsigned NOT NULL,
  `id_competicao` bigint unsigned NOT NULL,
  `participa` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `participacoes_id_users_foreign` (`id_users`),
  KEY `participacoes_id_competicao_foreign` (`id_competicao`),
  CONSTRAINT `participacoes_id_competicao_foreign` FOREIGN KEY (`id_competicao`) REFERENCES `competicao` (`id`),
  CONSTRAINT `participacoes_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.participacoes: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela teste.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.password_reset_tokens: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela teste.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.personal_access_tokens: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela teste.tutores
CREATE TABLE IF NOT EXISTS `tutores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `numero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nif` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `datadenascimento` date NOT NULL,
  `linguasfaladas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` blob,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telemovel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telemovel2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `classificacao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Ativo',
  `user_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_tutores_numero` (`numero`),
  KEY `tutores_user_id_foreign` (`user_id`),
  CONSTRAINT `tutores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.tutores: ~17 rows (aproximadamente)
INSERT INTO `tutores` (`id`, `created_at`, `updated_at`, `numero`, `nome`, `nif`, `sexo`, `datadenascimento`, `linguasfaladas`, `bio`, `foto`, `email`, `telemovel`, `telemovel2`, `endereco`, `classificacao`, `estado`, `user_id`) VALUES
	(1, NULL, '2023-07-10 06:37:10', '00001', 'João Silva', '123456789', 'M', '1990-01-01', 'Português, Inglês', 'Texto da biografia', _binary 0x666f746f735f7475746f7265732f7676394f433367516b4776586a6f386f4e4934435857554548356c37474470524965544d556478412e6a7067, 'joao@gmail.com', '123456789', '987654321', 'Rua ABC', '4', 'Ativo', NULL),
	(2, NULL, NULL, '00002', 'Maria Santos', '987654321', 'F', '1992-02-02', 'Português, Espanhol', 'Texto da biografia', NULL, 'maria@gmail.com', '9876543210', '1234567890', 'Avenida XYZ', '3', 'Ativo', NULL),
	(3, NULL, NULL, '00003', 'António Pereira', '456789123', 'M', '1988-03-03', 'Português, Francês', 'Texto da biografia', NULL, 'antonio@gmail.com', '5555555555', '9999999999', 'Rua DEF', '4', 'Ativo', NULL),
	(4, NULL, NULL, '00004', 'Ana Costa', '654321987', 'F', '1995-04-04', 'Português, Inglês, Espanhol', 'Texto da biografia', NULL, 'ana@gmail.com', '1111111111', '2222222222', 'Avenida GHI', '4', 'Ativo', NULL),
	(6, NULL, NULL, '00006', 'Margarida Almeida', '456789123', 'F', '1991-06-06', 'Português, Francês, Alemão', 'Texto da biografia', NULL, 'margarida@gmail.com', '6666666666', '8888888888', 'Avenida MNO', '3', 'Ativo', NULL),
	(7, NULL, NULL, '00007', 'Luís Ferreira', '789012345', 'M', '1994-07-07', 'Português, Inglês', 'Texto da biografia', NULL, 'luis@gmail.com', '7777777777', '5555555555', 'Rua PQR', '3', 'Ativo', NULL),
	(8, NULL, NULL, '00008', 'Sofia Carvalho', '654987321', 'F', '1996-08-08', 'Português, Francês', 'Texto da biografia', NULL, 'sofia@gmail.com', '0000000000', '9999999999', 'Rua STU', '5', 'Ativo', NULL),
	(9, NULL, NULL, '00009', 'Rui Mendes', '987012345', 'M', '1992-09-09', 'Português, Alemão', 'Texto da biografia', NULL, 'rui@gmail.com', '2222222222', '1111111111', 'Avenida VWX', '3', 'Ativo', NULL),
	(10, NULL, NULL, '00010', 'Carolina Rocha', '789654321', 'F', '1990-10-10', 'Português, Espanhol, Francês', 'Texto da biografia', NULL, 'carolina@gmail.com', '4444444444', '3333333333', 'Rua YZ', '4', 'Ativo', NULL),
	(11, NULL, NULL, '00011', 'Daniel Rodrigues', '012345678', 'M', '1993-11-11', 'Português', 'Texto da biografia', NULL, 'daniel@gmail.com', '6666666666', '5555555555', 'Avenida ABC', '5', 'Ativo', NULL),
	(12, NULL, NULL, '00012', 'Mariana Fernandes', '987654321', 'F', '1991-12-12', 'Português, Francês, Alemão', 'Texto da biografia', NULL, 'mariana@gmail.com', '8888888888', '7777777777', 'Rua DEF', '4', 'Ativo', NULL),
	(13, NULL, NULL, '00013', 'Alexandre Cardoso', '654321987', 'M', '1989-01-01', 'Português, Espanhol', 'Texto da biografia', NULL, 'alexandre@gmail.com', '0000000000', '9999999999', 'Rua GHI', '3', 'Ativo', NULL),
	(14, NULL, NULL, '00014', 'Carla Costa', '789012345', 'F', '1994-02-02', 'Português, Francês', 'Texto da biografia', NULL, 'carla@gmail.com', '2222222222', '1111111111', 'Avenida JKL', '5', 'Ativo', NULL),
	(15, NULL, NULL, '00015', 'Eduardo Oliveira', '654987321', 'M', '1992-03-03', 'Português, Alemão', 'Texto da biografia', NULL, 'eduardo@gmail.com', '3333333333', '4444444444', 'Rua MNO', '2', 'Ativo', NULL),
	(16, NULL, NULL, '00016', 'Inês Martins', '987012345', 'F', '1995-04-04', 'Português, Inglês', 'Texto da biografia', NULL, 'ines@gmail.com', '5555555555', '6666666666', 'Avenida PQR', '4', 'Ativo', NULL),
	(17, '2023-07-10 06:05:45', '2023-07-10 06:05:45', 'tkCyTNRhR', 'Alex Sousa', '222222222', 'M', '1990-11-11', 'Portugues, Inglees', 'bio', _binary 0x666f746f735f7475746f7265732f696c334b3941574f37474e4e567a65736c4b696d4150457544536c6137777a34486b39314d51384a2e6a7067, 'elll@gmail.com', '123456789', '987654321', 'Rua Pero vaz de caminha', '1', 'Ativo', NULL),
	(18, '2023-07-17 19:29:01', '2023-07-17 19:29:01', '000000018', 'Miguel Martins', '794613852', 'M', '2002-02-17', 'Português', 'Fala bem português', _binary 0x666f746f735f7475746f7265732f627a36497a456b3353426d744c506c544e4845647646384b487564694653767065466b58414c42612e706e67, 'a2020130963@alumni.iscac.pt', '928053789', NULL, 'Rua Vaz', '1', 'Ativo', 32);

-- A despejar estrutura para tabela teste.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usergroup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
<<<<<<< Updated upstream
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.users: ~0 rows (aproximadamente)
=======
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'jorge', 'a2017010372@alumni.iscac.pt', NULL, '$2y$10$zVlAwy40FF9mMAiFsh3alufhLPdtnmADV0dRwgj5AKyN5dI8ResnO', NULL, '2023-06-23 13:05:23', '2023-06-23 13:05:23');
=======
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela teste.users: ~0 rows (aproximadamente)
>>>>>>> Stashed changes
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `usergroup`) VALUES
	(1, 'user1', 'user1@gmail.com', NULL, '$2y$10$x7rFPISGJ0jEc4CdrN/x6OCTcqelAt3Eup9YIb1DhxiCG3koyzQEC', NULL, '2023-06-26 14:48:06', '2023-06-26 14:48:06', 'user'),
	(2, 'user2', 'user2@gmail.com', NULL, '$2y$10$x7rFPISGJ0jEc4CdrN/x6OCTcqelAt3Eup9YIb1DhxiCG3koyzQEC', NULL, '2023-07-08 15:03:02', '2023-07-08 15:03:02', 'user'),
	(3, '000000002', 'stelio.macumbe@gmail.com', NULL, '$2y$10$x7rFPISGJ0jEc4CdrN/x6OCTcqelAt3Eup9YIb1DhxiCG3koyzQEC', NULL, '2023-07-13 14:30:45', '2023-07-13 14:30:45', 'user'),
	(4, '000000002', 'bfury@gmail.com', NULL, '$2y$10$x7rFPISGJ0jEc4CdrN/x6OCTcqelAt3Eup9YIb1DhxiCG3koyzQEC', NULL, '2023-07-13 14:32:48', '2023-07-13 14:32:48', 'user'),
	(5, '000000002', 'bfur2y@gmail.com', NULL, '$2y$10$x7rFPISGJ0jEc4CdrN/x6OCTcqelAt3Eup9YIb1DhxiCG3koyzQEC', NULL, '2023-07-13 14:33:31', '2023-07-13 14:33:31', 'user'),
	(7, '000000002', 'jkazama@gmail.com', NULL, '$2y$10$x7rFPISGJ0jEc4CdrN/x6OCTcqelAt3Eup9YIb1DhxiCG3koyzQEC', NULL, '2023-07-13 14:35:03', '2023-07-13 14:35:03', 'Alunos'),
	(8, '000000003', 'nwilliams@gmail.com', NULL, '$2y$10$x7rFPISGJ0jEc4CdrN/x6OCTcqelAt3Eup9YIb1DhxiCG3koyzQEC', NULL, '2023-07-13 14:48:29', '2023-07-13 14:48:29', 'Alunos'),
	(9, 'admin', 'admin@gmail.com', '2023-07-13 20:12:05', '$2y$10$x7rFPISGJ0jEc4CdrN/x6OCTcqelAt3Eup9YIb1DhxiCG3koyzQEC', 'wFek4yAV9423yvPLKM6j5v71SC7losxbIt93Zlz1lg3i46W4U1j23cVSIlgf', NULL, NULL, 'Administradores'),
	(29, '000000024', 'a2017010372@alumni.iscac.pt', NULL, '$2y$10$UE/bIJ.855E5F50JNPSEXuEPk.hTbITs6JDIAW3aFUprslk37VTZW', NULL, '2023-07-17 19:15:03', '2023-07-17 19:15:03', 'Alunos'),
	(32, '000000018', 'a2020130963@alumni.iscac.pt', NULL, '$2y$10$ExJBbqaL1cYYJ7SZSJcUGeA0.CNQg8/6h/26TZzKdNlQlGKvovTbC', NULL, '2023-07-17 19:29:01', '2023-07-17 19:29:01', 'Tutores'),
	(33, '000000019', 'stelio@gmail.com', NULL, '$2y$10$CUBh2Y.3AzQEeeNSr.AjJe51Z/Ud.8OdL214uar4/zHJqdSGVfEOy', NULL, '2023-07-17 19:31:00', '2023-07-17 19:31:00', 'Tutores');
<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
