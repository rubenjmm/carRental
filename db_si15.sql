-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 27-Maio-2015 às 10:00
-- Versão do servidor: 5.5.43
-- versão do PHP: 5.4.39-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `si15`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--
-- Criação: 28-Abr-2015 às 14:39
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `titulo` text NOT NULL,
  `morada` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `telemovel` int(11) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `titulo`, `morada`, `username`, `password`, `telemovel`, `email`) VALUES
(1, 'António Silva', 'Sr.', 'Rua das Flores, n° 15, Anadia', 'Antonio', '202cb962ac59075b964b07152d234b70', 919996767, 'ant.silva56@gmail.com'),
(2, 'Joana Amaral', 'Dra.', 'Rua de São Nicolau, n°67, Porto', 'Joana', '202cb962ac59075b964b07152d234b70', 923234234, 'joana_amaral45@hotmail.com'),
(5, 'Ricardo Carvalho', 'Dr.', 'Avenida São Francisco, n°378, Guimarães', 'Ricardo', '202cb962ac59075b964b07152d234b70', 968234826, 'Ricardo_St_Carvalho@gmail.com'),
(6, 'João Rodrigues', 'Sr.', 'Travessa da Alegria, n° 7, Porto', 'Joao', '202cb962ac59075b964b07152d234b70', 912312423, 'JJ.Rodr.PP7@gmail.com'),
(7, 'Ana Noronha', 'Sra.', 'Rua de São Pedro, n°54, Lousada', 'Ana', '202cb962ac59075b964b07152d234b70', 918323434, 'ana.noronha.lousada@hotmail.com'),
(8, 'Miguel Simões', 'Sr.', 'Avenida Carvalho e Santos, n° 74, Viseu', 'Miguel', '202cb962ac59075b964b07152d234b70', 912132318, 'Migeeeel_simoes@gmail.com'),
(9, 'Sabores Exóticos, Lda', '', 'Rua 31 de janeiro, nº34, Braga', 'Sabores', '202cb962ac59075b964b07152d234b70', 931285934, 'Sabores_exoticos_34@gmail.com'),
(10, 'GH Consultores', '', 'Rua dos Capitães de Abril, nº187, Aveiro', 'Consultores', '202cb962ac59075b964b07152d234b70', 912738488, 'GH_consultores_central@gmail.com'),
(11, 'Ruben', 'Sr.', 'i103', 'ruben', 'af4eb0d6405b59c01d4c5130f8ee721f', 934203282, 'ee10195@fe.up.pt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `condutores`
--
-- Criação: 24-Abr-2015 às 12:47
--

DROP TABLE IF EXISTS `condutores`;
CREATE TABLE IF NOT EXISTS `condutores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `apelido` text NOT NULL,
  `datanascimento` date NOT NULL,
  `ncartaconducao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `condutores`
--

INSERT INTO `condutores` (`id`, `nome`, `apelido`, `datanascimento`, `ncartaconducao`) VALUES
(1, 'António', 'Silva', '1956-04-03', 72133283),
(2, 'Joana', 'Amaral', '1990-06-12', 12343278),
(3, 'Simão', 'Vaz', '1988-02-09', 76436590),
(4, 'João', 'Rodrigues', '1993-08-04', 32496057),
(5, 'Márcia', 'Santos', '1989-11-08', 218493029),
(6, 'André', 'Ribeiro', '1990-07-17', 238694900);

-- --------------------------------------------------------

--
-- Estrutura da tabela `condutoresclientes`
--
-- Criação: 24-Abr-2015 às 12:48
--

DROP TABLE IF EXISTS `condutoresclientes`;
CREATE TABLE IF NOT EXISTS `condutoresclientes` (
  `condutor_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  KEY `condutor_id` (`condutor_id`,`cliente_id`),
  KEY `condutor_id_2` (`condutor_id`),
  KEY `cliente_id` (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `condutoresclientes`:
--   `cliente_id`
--       `clientes` -> `id`
--   `condutor_id`
--       `condutores` -> `id`
--

--
-- Extraindo dados da tabela `condutoresclientes`
--

INSERT INTO `condutoresclientes` (`condutor_id`, `cliente_id`) VALUES
(1, 1),
(2, 2),
(4, 6),
(5, 10),
(6, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--
-- Criação: 24-Abr-2015 às 10:23
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `morada` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nif` int(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  `telemovel` int(11) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `nome`, `morada`, `username`, `password`, `nif`, `telefone`, `telemovel`, `email`) VALUES
(1, 'The Hertz Corporation', '6th Avenue, nº17 Estero, Florida, USA', 'HertzCorp', '202cb962ac59075b964b07152d234b70', 892343244, 255578950, 965439025, 'hertz.corp.help@gmail.com'),
(2, 'AVIS', '67th Street, nº12, New Jersey, USA', 'AVISRent', '202cb962ac59075b964b07152d234b70', 122334543, 267499055, 917230498, 'avis_renting@gmail.com'),
(3, 'Europcar', 'Avenue Saint Quentin, nº14, Saint Quentin en Yvelines, France', 'EuropcarRent', '827ccb0eea8a706c4c34a16891f84e7b', 128546934, 245639784, 934592745, 'europcar_center@gmail.com'),
(4, 'Alamo Rent a Car', '89th Street, nº45, Clayton, Missouri, USA', 'AlamoRentaCar', '202cb962ac59075b964b07152d234b70', 759302856, 236583048, 912846389, 'Alamo_RaC_Center@gmail.com'),
(5, 'Budget Rent a Car', '67th Street, nº67, New Jersey, USA', 'BudgetRentaCar', '81dc9bdb52d04dc20036dbd8313ed055', 384924945, 243563749, 934829564, 'Budget_rent_Center@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filiais`
--
-- Criação: 15-Maio-2015 às 09:25
--

DROP TABLE IF EXISTS `filiais`;
CREATE TABLE IF NOT EXISTS `filiais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `morada` text NOT NULL,
  `cidade` text NOT NULL,
  `telefone` int(11) NOT NULL,
  `telemovel` int(11) NOT NULL,
  `email` text NOT NULL,
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`empresa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- RELATIONS FOR TABLE `filiais`:
--   `empresa_id`
--       `empresas` -> `id`
--

--
-- Extraindo dados da tabela `filiais`
--

INSERT INTO `filiais` (`id`, `username`, `password`, `morada`, `cidade`, `telefone`, `telemovel`, `email`, `empresa_id`) VALUES
(3, 'HertzPorto', '202cb962ac59075b964b07152d234b70', 'Rua de São João, nº77, Porto', 'Porto', 254379067, 936970294, 'Hertz_porto@gmail.com', 1),
(4, 'HertzLisboa', '202cb962ac59075b964b07152d234b70', 'Avenida da Pedreira, nº45, Lisboa', 'Lisboa', 233968734, 931275839, 'Hertz_lisboa@gmail.com', 1),
(5, 'AvisPorto', '202cb962ac59075b964b07152d234b70', 'Rua da Alegria, nº56, Porto', 'Porto', 254639192, 912784036, 'Avis_Porto@gmail.com', 2),
(6, 'AvisFaro', '202cb962ac59075b964b07152d234b70', 'Avenida do Sol, nº56, Faro', 'Faro', 209482019, 968240387, 'Avis_Faro@gmail.com', 2),
(7, 'AvisLisboa', '202cb962ac59075b964b07152d234b70', 'Rua do Panteão, nº10, Lisboa', 'Lisboa', 233576102, 932057673, 'Avis_Lisboa@gmail.com', 2),
(8, 'AvisBraga', '202cb962ac59075b964b07152d234b70', 'Avenida João de Deus, nº65, Braga', 'Braga', 259375930, 912553667, 'Avis_Braga@gmail.com', 2),
(9, 'EuropcarPorto', '202cb962ac59075b964b07152d234b70', 'Avenida dos Combatentes, nº45, Porto', 'Porto', 254763895, 918736477, 'europcar_porto@gmail.com', 3),
(10, 'EuropcarLisboa', '202cb962ac59075b964b07152d234b70', 'Avenida de Belém, nº43, Lisboa', 'Lisboa', 233910298, 93456646, 'europcar_lisboa@gmail.com', 3),
(28, 'HertzCoimbra', 'Rua XYZ', 'HertzCoimbra', '12345', 919999999, 919999999, 'coimbra@hertzcorp.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcacoes`
--
-- Criação: 26-Maio-2015 às 17:03
--

DROP TABLE IF EXISTS `marcacoes`;
CREATE TABLE IF NOT EXISTS `marcacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datamarcacao` date NOT NULL,
  `datainicio` date NOT NULL,
  `datafim` date NOT NULL,
  `filial_id` int(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- RELATIONS FOR TABLE `marcacoes`:
--   `filial_id`
--       `filiais` -> `id`
--

--
-- Extraindo dados da tabela `marcacoes`
--

INSERT INTO `marcacoes` (`id`, `datamarcacao`, `datainicio`, `datafim`, `filial_id`) VALUES
(1, '2015-05-13', '2015-06-09', '2015-06-16', 1),
(2, '2015-05-20', '2015-05-25', '2015-06-02', 3),
(3, '2015-05-21', '2015-05-21', '2015-05-28', 3),
(4, '2015-05-21', '2015-05-25', '2015-05-30', 3),
(5, '2015-05-22', '2015-05-31', '2015-06-02', 4),
(6, '2015-05-22', '2015-05-27', '2015-06-09', 4),
(7, '2015-05-25', '2015-08-11', '2015-08-12', 4),
(8, '2015-05-27', '2015-08-17', '2015-08-20', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcacoesalugueres`
--
-- Criação: 24-Abr-2015 às 12:54
--

DROP TABLE IF EXISTS `marcacoesalugueres`;
CREATE TABLE IF NOT EXISTS `marcacoesalugueres` (
  `id` int(11) NOT NULL,
  `referencia` int(11) NOT NULL,
  `veiculo_id` int(11) NOT NULL,
  `condutor_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `pagamento_id` int(11) NOT NULL,
  KEY `id` (`id`),
  KEY `veiculo_id` (`veiculo_id`),
  KEY `condutor_id` (`condutor_id`),
  KEY `cliente_id` (`cliente_id`),
  KEY `pagamento_id` (`pagamento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `marcacoesalugueres`:
--   `pagamento_id`
--       `pagamentos` -> `id`
--   `id`
--       `marcacoes` -> `id`
--   `veiculo_id`
--       `veiculos` -> `id`
--   `condutor_id`
--       `condutores` -> `id`
--   `cliente_id`
--       `clientes` -> `id`
--

--
-- Extraindo dados da tabela `marcacoesalugueres`
--

INSERT INTO `marcacoesalugueres` (`id`, `referencia`, `veiculo_id`, `condutor_id`, `cliente_id`, `pagamento_id`) VALUES
(2, 74569, 1, 1, 1, 2),
(1, 45643, 3, 2, 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcacoesrevisoes`
--
-- Criação: 24-Abr-2015 às 12:55
--

DROP TABLE IF EXISTS `marcacoesrevisoes`;
CREATE TABLE IF NOT EXISTS `marcacoesrevisoes` (
  `id` int(11) NOT NULL,
  `kms` int(11) NOT NULL,
  `componentes` text NOT NULL,
  `veiculo_id` int(11) NOT NULL,
  KEY `id` (`id`),
  KEY `veiculo_id` (`veiculo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `marcacoesrevisoes`:
--   `veiculo_id`
--       `veiculos` -> `id`
--   `id`
--       `marcacoes` -> `id`
--

--
-- Extraindo dados da tabela `marcacoesrevisoes`
--

INSERT INTO `marcacoesrevisoes` (`id`, `kms`, `componentes`, `veiculo_id`) VALUES
(7, 4000, 'Pneus', 1),
(8, 3000, 'Pneus e discos', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--
-- Criação: 24-Abr-2015 às 12:56
--

DROP TABLE IF EXISTS `pagamentos`;
CREATE TABLE IF NOT EXISTS `pagamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `montante` double NOT NULL,
  `descricao` text NOT NULL,
  `data` date NOT NULL,
  `cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cliente_id` (`cliente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- RELATIONS FOR TABLE `pagamentos`:
--   `cliente_id`
--       `clientes` -> `id`
--

--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `montante`, `descricao`, `data`, `cliente_id`) VALUES
(1, 1000, 'Cartão Crédito', '2015-05-14', 1),
(2, 320, 'Dinheiro', '2015-05-20', 2),
(3, 250, 'Cartão Crédito', '2015-05-24', 5),
(4, 500, 'Cheque', '2015-05-21', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposveiculos`
--
-- Criação: 22-Maio-2015 às 16:46
--

DROP TABLE IF EXISTS `tiposveiculos`;
CREATE TABLE IF NOT EXISTS `tiposveiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` text NOT NULL,
  `preco` int(11) NOT NULL,
  `npassageiros` int(11) NOT NULL,
  `nbagagens` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `tiposveiculos`
--

INSERT INTO `tiposveiculos` (`id`, `categoria`, `preco`, `npassageiros`, `nbagagens`) VALUES
(1, 'B', 10, 5, 4),
(2, 'B', 0, 5, 3),
(3, 'B', 0, 5, 1),
(4, 'B', 0, 5, 5),
(5, 'B', 0, 4, 3),
(6, 'B', 0, 4, 2),
(7, 'B', 0, 5, 2),
(8, 'B', 0, 2, 1),
(9, 'B', 0, 7, 5),
(10, 'B', 0, 7, 6),
(11, 'B', 0, 7, 4),
(12, 'B', 0, 7, 7),
(13, 'B', 0, 9, 6),
(14, 'B', 0, 9, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--
-- Criação: 22-Maio-2015 às 16:45
--

DROP TABLE IF EXISTS `veiculos`;
CREATE TABLE IF NOT EXISTS `veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` text NOT NULL,
  `modelo` text NOT NULL,
  `matricula` text NOT NULL,
  `cor` text NOT NULL,
  `kms` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `filial_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_id` (`tipo_id`),
  KEY `filial_id` (`filial_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- RELATIONS FOR TABLE `veiculos`:
--   `tipo_id`
--       `tiposveiculos` -> `id`
--   `filial_id`
--       `filiais` -> `id`
--

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `marca`, `modelo`, `matricula`, `cor`, `kms`, `tipo_id`, `filial_id`) VALUES
(1, 'Volkwagen', 'Golf', '45-VR-66', 'Cinzento', 3000, 1, 3),
(2, 'Volkswagen', 'Scirocco', '65-FG-90', 'Branco', 2500, 2, 4),
(3, 'Mercedes-Benz', 'Classe C Station', '56-ET-99', 'Preto', 2700, 2, 5),
(4, 'Mercedes-Benz', 'Classe SL', '34-FH-10', 'Cinzento', 1000, 8, 6),
(5, 'Mercedes-Benz', 'Classe SL', '67-SE-57', 'Cinzento', 2000, 1, 3);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `condutoresclientes`
--
ALTER TABLE `condutoresclientes`
  ADD CONSTRAINT `condutoresclientes_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `condutoresclientes_ibfk_1` FOREIGN KEY (`condutor_id`) REFERENCES `condutores` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `filiais`
--
ALTER TABLE `filiais`
  ADD CONSTRAINT `filiais_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `marcacoesalugueres`
--
ALTER TABLE `marcacoesalugueres`
  ADD CONSTRAINT `marcacoesalugueres_ibfk_5` FOREIGN KEY (`pagamento_id`) REFERENCES `pagamentos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marcacoesalugueres_ibfk_1` FOREIGN KEY (`id`) REFERENCES `marcacoes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marcacoesalugueres_ibfk_2` FOREIGN KEY (`veiculo_id`) REFERENCES `veiculos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marcacoesalugueres_ibfk_3` FOREIGN KEY (`condutor_id`) REFERENCES `condutores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marcacoesalugueres_ibfk_4` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `marcacoesrevisoes`
--
ALTER TABLE `marcacoesrevisoes`
  ADD CONSTRAINT `marcacoesrevisoes_ibfk_2` FOREIGN KEY (`veiculo_id`) REFERENCES `veiculos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marcacoesrevisoes_ibfk_1` FOREIGN KEY (`id`) REFERENCES `marcacoes` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `pagamentos_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD CONSTRAINT `veiculos_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tiposveiculos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `veiculos_ibfk_2` FOREIGN KEY (`filial_id`) REFERENCES `filiais` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
