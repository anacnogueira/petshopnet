-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Mar 27, 2009 as 04:56 PM
-- Versão do Servidor: 5.0.51
-- Versão do PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: 'sipac'
--

-- --------------------------------------------------------

--
-- Estrutura da tabela 'autorizacoes'
--

CREATE TABLE IF NOT EXISTS autorizacoes (
  autorizacoes_id int(10) unsigned NOT NULL auto_increment,
  grupos_id int(10) unsigned default NULL,
  users_id int(10) unsigned default NULL,
  modulos_id int(10) unsigned default NULL,
  submodulos_id int(10) unsigned default NULL,
  rotinas_id int(10) unsigned default NULL,
  tipo_autorizacao tinyint(3) unsigned default NULL,
  PRIMARY KEY  (autorizacoes_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela 'autorizacoes'
--

INSERT INTO autorizacoes (autorizacoes_id, grupos_id, users_id, modulos_id, submodulos_id, rotinas_id, tipo_autorizacao) VALUES
(1, 1, NULL, 1, NULL, NULL, 2),
(2, 1, NULL, NULL, 1, NULL, 2),
(3, 1, NULL, NULL, 2, NULL, 2),
(4, 1, NULL, NULL, 3, NULL, 2),
(5, 1, NULL, NULL, 4, NULL, 2),
(6, 1, NULL, NULL, 5, NULL, 2),
(7, 1, NULL, NULL, 6, NULL, 2),
(8, 1, NULL, NULL, NULL, 1, NULL),
(9, 1, NULL, NULL, NULL, 2, NULL),
(10, 1, NULL, NULL, NULL, 3, NULL),
(11, 1, NULL, NULL, NULL, 4, NULL),
(12, 1, NULL, NULL, NULL, 5, NULL),
(13, 1, NULL, NULL, NULL, 6, NULL),
(14, 1, NULL, NULL, NULL, 7, NULL),
(15, 1, NULL, NULL, NULL, 8, NULL),
(16, 1, NULL, NULL, NULL, 9, NULL),
(17, 1, NULL, NULL, NULL, 10, NULL),
(18, 1, NULL, NULL, NULL, 11, NULL),
(19, 1, NULL, NULL, NULL, 12, NULL),
(20, 1, NULL, NULL, NULL, 13, NULL),
(21, 1, NULL, NULL, NULL, 14, NULL),
(22, 1, NULL, NULL, NULL, 15, NULL),
(23, 1, NULL, NULL, NULL, 16, NULL),
(24, 1, NULL, NULL, NULL, 17, NULL),
(25, 1, NULL, NULL, NULL, 18, NULL),
(26, 1, NULL, NULL, NULL, 19, NULL),
(27, 1, NULL, NULL, NULL, 20, NULL),
(28, 1, NULL, NULL, NULL, 21, NULL),
(155, NULL, 1, 1, NULL, NULL, 2),
(156, NULL, 1, NULL, 1, NULL, 2),
(157, NULL, 1, NULL, 2, NULL, 0),
(158, NULL, 1, NULL, 3, NULL, 0),
(159, NULL, 1, NULL, 4, NULL, 0),
(160, NULL, 1, NULL, 5, NULL, 0),
(161, NULL, 1, NULL, 6, NULL, 0),
(162, NULL, 1, NULL, NULL, 1, NULL),
(163, NULL, 1, NULL, NULL, 2, NULL),
(164, NULL, 1, NULL, NULL, 3, NULL),
(165, NULL, 1, NULL, NULL, 4, NULL),
(166, NULL, 1, NULL, NULL, 5, NULL),
(167, NULL, 1, NULL, NULL, 6, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela 'grupos'
--

CREATE TABLE IF NOT EXISTS grupos (
  grupos_id int(10) unsigned NOT NULL auto_increment,
  grupos_nome varchar(20) default NULL,
  grupos_descricao varchar(255) default NULL,
  PRIMARY KEY  (grupos_id),
  KEY grupos_id (grupos_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela 'grupos'
--

INSERT INTO grupos (grupos_id, grupos_nome, grupos_descricao) VALUES
(1, 'Administradores', 'Usuários administradores do painel de controle'),
(2, 'Usuários Comuns', 'Usuáros sem permissão do módulo de sistema');

-- --------------------------------------------------------

--
-- Estrutura da tabela 'logs_historico'
--

CREATE TABLE IF NOT EXISTS logs_historico (
  logs_historico_id int(10) unsigned NOT NULL auto_increment,
  users_id int(10) unsigned default '0',
  users_ip varchar(20) NOT NULL,
  logs_historico_data date NOT NULL,
  logs_historico_hora time NOT NULL,
  submodulos_id int(11) NOT NULL,
  logs_historico_operacao varchar(45) default NULL,
  logs_historico_mensagem text,
  PRIMARY KEY  (logs_historico_id),
  KEY logs_historico_FKIndex1 (users_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela 'logs_historico'
--

INSERT INTO logs_historico (logs_historico_id, users_id, users_ip, logs_historico_data, logs_historico_hora, submodulos_id, logs_historico_operacao, logs_historico_mensagem) VALUES
(1, 0, '127.0.0.1', '2009-03-19', '16:50:21', 0, 'Login', ''),
(2, 1, '127.0.0.1', '2009-03-19', '16:57:21', 0, 'Login', 'Login efetuado com sucesso.'),
(3, 0, '127.0.0.1', '2009-03-20', '16:29:37', 0, 'Login', 'Variaveis vazias'),
(4, 0, '127.0.0.1', '2009-03-20', '16:29:49', 0, 'Login', 'Variaveis vazias'),
(5, 0, '127.0.0.1', '2009-03-20', '16:30:39', 0, 'Login', 'Variaveis vazias'),
(6, 0, '127.0.0.1', '2009-03-20', '16:31:06', 0, 'Login', 'Variaveis vazias'),
(7, 0, '127.0.0.1', '2009-03-20', '16:31:36', 0, 'Login', 'Variaveis vazias'),
(8, 0, '127.0.0.1', '2009-03-20', '16:32:14', 0, 'Login', 'Variaveis vazias'),
(9, 0, '127.0.0.1', '2009-03-20', '16:32:51', 0, 'Login', 'Variaveis vazias'),
(10, 0, '127.0.0.1', '2009-03-20', '16:33:11', 0, 'Login', 'Variaveis vazias'),
(11, 0, '127.0.0.1', '2009-03-20', '16:33:22', 0, 'Login', 'Variaveis vazias'),
(12, 0, '127.0.0.1', '2009-03-20', '16:33:56', 0, 'Login', 'Variaveis vazias'),
(13, 0, '127.0.0.1', '2009-03-20', '16:33:57', 0, 'Login', 'Variaveis vazias'),
(14, 0, '127.0.0.1', '2009-03-20', '16:34:21', 0, 'Login', 'Variaveis vazias'),
(15, 0, '127.0.0.1', '2009-03-20', '16:34:23', 0, 'Login', 'Variaveis vazias'),
(16, 0, '127.0.0.1', '2009-03-20', '16:34:25', 0, 'Login', 'Variaveis vazias'),
(17, 0, '127.0.0.1', '2009-03-20', '16:34:42', 0, 'Login', 'Variaveis vazias'),
(18, 0, '127.0.0.1', '2009-03-20', '16:35:24', 0, 'Login', 'Variaveis vazias'),
(19, 0, '127.0.0.1', '2009-03-20', '16:36:06', 0, 'Login', 'Variaveis vazias'),
(20, 0, '127.0.0.1', '2009-03-20', '16:36:08', 0, 'Login', 'Variaveis vazias'),
(21, 0, '127.0.0.1', '2009-03-20', '16:36:29', 0, 'Login', 'Variaveis vazias'),
(22, 0, '127.0.0.1', '2009-03-20', '16:37:05', 0, 'Login', 'Variaveis vazias'),
(23, 0, '127.0.0.1', '2009-03-20', '16:39:09', 0, 'Login', 'Variaveis vazias'),
(24, 0, '127.0.0.1', '2009-03-20', '16:39:23', 0, 'Login', 'Variaveis vazias'),
(25, 0, '127.0.0.1', '2009-03-20', '16:39:34', 0, 'Login', 'Variaveis vazias'),
(26, 0, '127.0.0.1', '2009-03-20', '16:40:30', 0, 'Login', 'Variaveis vazias'),
(27, 0, '127.0.0.1', '2009-03-20', '16:40:57', 0, 'Login', 'E-mail e/ou senha incorreto(s).'),
(28, 0, '127.0.0.1', '2009-03-20', '16:41:13', 0, 'Login', 'E-mail e/ou senha incorreto(s).'),
(29, 0, '127.0.0.1', '2009-03-20', '16:41:46', 0, 'Login', 'E-mail e/ou senha incorreto(s).'),
(30, 0, '127.0.0.1', '2009-03-20', '16:41:54', 0, 'Login', 'E-mail e/ou senha incorreto(s).'),
(31, 0, '127.0.0.1', '2009-03-20', '16:41:56', 0, 'Login', 'E-mail e/ou senha incorreto(s).'),
(32, 0, '127.0.0.1', '2009-03-20', '16:42:01', 0, 'Login', 'E-mail e/ou senha incorreto(s).'),
(33, 0, '127.0.0.1', '2009-03-20', '16:42:17', 0, 'Login', 'E-mail e/ou senha incorreto(s).'),
(34, 1, '127.0.0.1', '2009-03-20', '16:43:15', 0, 'Login', 'Login efetuado.'),
(35, 1, '127.0.0.1', '2009-03-20', '16:43:48', 0, 'Login', 'Login efetuado.'),
(36, 1, '127.0.0.1', '2009-03-20', '16:46:58', 0, 'Login', 'Login efetuado.'),
(37, 1, '127.0.0.1', '2009-03-23', '15:10:30', 0, 'Login', 'Login efetuado.'),
(38, 1, '127.0.0.1', '2009-03-23', '15:13:50', 0, 'Login', 'Login efetuado.'),
(39, 1, '127.0.0.1', '2009-03-23', '15:16:13', 0, 'Logout', 'O usuário saiu do sistema.'),
(40, 1, '127.0.0.1', '2009-03-23', '15:16:47', 0, 'Login', 'Login efetuado.'),
(41, 1, '127.0.0.1', '2009-03-23', '15:37:36', 0, 'Login', 'Login efetuado.'),
(42, 1, '127.0.0.1', '2009-03-23', '16:39:39', 0, 'Logout', 'O usuário saiu do sistema.'),
(43, 0, '127.0.0.1', '2009-03-23', '16:40:06', 0, 'Login', 'E-mail e/ou senha incorreto(s).'),
(44, 0, '127.0.0.1', '2009-03-23', '16:40:14', 0, 'Login', 'Variaveis vazias'),
(45, 1, '127.0.0.1', '2009-03-23', '16:40:56', 0, 'Login', 'Login efetuado.'),
(46, 1, '127.0.0.1', '2009-03-23', '16:41:00', 0, 'Login', 'Login efetuado.'),
(47, 1, '127.0.0.1', '2009-03-23', '16:41:20', 0, 'Logout', 'O usuário saiu do sistema.'),
(48, 0, '127.0.0.1', '2009-03-23', '16:42:12', 0, 'Login', 'Variaveis vazias'),
(49, 0, '127.0.0.1', '2009-03-23', '16:42:53', 0, 'Login', 'Variaveis vazias'),
(50, 1, '127.0.0.1', '2009-03-23', '16:43:02', 0, 'Login', 'Login efetuado.'),
(51, 1, '127.0.0.1', '2009-03-23', '16:43:30', 0, 'Logout', 'O usuário saiu do sistema.'),
(52, 0, '127.0.0.1', '2009-03-24', '08:52:57', 0, 'Login', 'E-mail e/ou senha incorreto(s).'),
(53, 1, '127.0.0.1', '2009-03-24', '08:56:27', 0, 'Login', 'Login efetuado.'),
(54, 1, '127.0.0.1', '2009-03-24', '11:59:05', 0, 'Login', 'Login efetuado.'),
(55, 1, '127.0.0.1', '2009-03-24', '13:32:20', 0, 'Login', 'Login efetuado.'),
(56, 1, '127.0.0.1', '2009-03-24', '14:17:13', 0, 'Login', 'Login efetuado.'),
(57, 1, '127.0.0.1', '2009-03-24', '15:04:43', 0, 'Login', 'Login efetuado.'),
(58, 1, '127.0.0.1', '2009-03-24', '15:08:45', 0, 'Login', 'Login efetuado.'),
(59, 1, '127.0.0.1', '2009-03-24', '16:15:07', 0, 'Logout', 'O usuário saiu do sistema.'),
(60, 1, '127.0.0.1', '2009-03-24', '16:17:29', 0, 'Login', 'Login efetuado.'),
(61, 1, '127.0.0.1', '2009-03-24', '16:17:33', 0, 'Login', 'Variaveis vazias'),
(62, 1, '127.0.0.1', '2009-03-24', '16:17:36', 0, 'Login', 'Variaveis vazias'),
(63, 1, '127.0.0.1', '2009-03-24', '16:17:42', 0, 'Login', 'Variaveis vazias'),
(64, 1, '127.0.0.1', '2009-03-24', '16:38:51', 0, 'Login', 'Login efetuado.'),
(65, 1, '127.0.0.1', '2009-03-25', '09:17:36', 0, 'Login', 'Login efetuado.'),
(66, 1, '127.0.0.1', '2009-03-25', '09:18:44', 0, 'Logout', 'O usuário saiu do sistema.'),
(67, 1, '127.0.0.1', '2009-03-25', '09:18:47', 0, 'Login', 'Login efetuado.'),
(68, 1, '127.0.0.1', '2009-03-25', '09:19:01', 0, 'Login', 'Login efetuado.'),
(69, 1, '127.0.0.1', '2009-03-25', '09:19:06', 0, 'Login', 'Login efetuado.'),
(70, 1, '127.0.0.1', '2009-03-25', '09:19:52', 0, 'Login', 'Login efetuado.'),
(71, 1, '127.0.0.1', '2009-03-25', '09:20:13', 0, 'Login', 'Login efetuado.'),
(72, 1, '127.0.0.1', '2009-03-25', '09:20:42', 0, 'Login', 'Login efetuado.'),
(73, 1, '127.0.0.1', '2009-03-25', '09:32:07', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(2).'),
(74, 1, '127.0.0.1', '2009-03-25', '09:33:25', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(3).'),
(75, 1, '127.0.0.1', '2009-03-25', '09:39:28', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(4).'),
(76, 1, '127.0.0.1', '2009-03-25', '09:42:18', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(5).'),
(77, 1, '127.0.0.1', '2009-03-25', '09:44:42', 0, 'Login', 'Login efetuado.'),
(78, 1, '127.0.0.1', '2009-03-25', '09:46:53', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(6).'),
(79, 1, '127.0.0.1', '2009-03-25', '09:48:31', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(7).'),
(80, 1, '127.0.0.1', '2009-03-25', '09:49:17', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(8).'),
(81, 1, '127.0.0.1', '2009-03-25', '09:55:53', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(9).'),
(82, 1, '127.0.0.1', '2009-03-25', '10:02:02', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(10).'),
(83, 1, '127.0.0.1', '2009-03-25', '10:04:55', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(11).'),
(84, 1, '127.0.0.1', '2009-03-25', '10:14:25', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(12).'),
(85, 1, '127.0.0.1', '2009-03-25', '10:18:00', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(13).'),
(86, 1, '127.0.0.1', '2009-03-25', '10:18:52', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(14).'),
(87, 1, '127.0.0.1', '2009-03-25', '10:26:19', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(15).'),
(88, 1, '127.0.0.1', '2009-03-25', '10:27:09', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(16).'),
(89, 1, '127.0.0.1', '2009-03-25', '10:28:02', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(17).'),
(90, 1, '127.0.0.1', '2009-03-25', '10:28:43', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(18).'),
(91, 1, '127.0.0.1', '2009-03-25', '10:31:34', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(19).'),
(92, 1, '127.0.0.1', '2009-03-25', '10:32:14', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(20).'),
(93, 1, '127.0.0.1', '2009-03-25', '10:32:58', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(21).'),
(94, 1, '127.0.0.1', '2009-03-25', '10:36:48', 0, 'Login', 'Login efetuado.'),
(95, 1, '127.0.0.1', '2009-03-25', '10:38:44', 0, 'Login', 'Login efetuado.'),
(96, 1, '127.0.0.1', '2009-03-25', '10:38:46', 0, 'Login', 'Login efetuado.'),
(97, 1, '127.0.0.1', '2009-03-25', '10:48:35', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(22).'),
(98, 1, '127.0.0.1', '2009-03-25', '10:49:15', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(23).'),
(99, 1, '127.0.0.1', '2009-03-25', '10:49:53', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(24).'),
(100, 1, '127.0.0.1', '2009-03-25', '10:50:36', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(25).'),
(101, 1, '127.0.0.1', '2009-03-25', '10:51:19', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(26).'),
(102, 1, '127.0.0.1', '2009-03-25', '10:51:55', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(27).'),
(103, 1, '127.0.0.1', '2009-03-25', '10:52:31', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(28).'),
(104, 1, '127.0.0.1', '2009-03-25', '11:15:36', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(29).'),
(105, 1, '127.0.0.1', '2009-03-25', '11:16:34', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(30).'),
(106, 1, '127.0.0.1', '2009-03-25', '11:17:07', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(31).'),
(107, 1, '127.0.0.1', '2009-03-25', '11:48:13', 0, 'Logout', 'O usuário saiu do sistema.'),
(108, 1, '127.0.0.1', '2009-03-25', '11:48:18', 0, 'Login', 'Login efetuado.'),
(109, 1, '127.0.0.1', '2009-03-25', '11:51:40', 1, 'Excluir', 'Usuários(s) excluído(s) com sucesso(28).'),
(110, 1, '127.0.0.1', '2009-03-25', '11:55:56', 1, 'Excluir', 'Usuários(s) excluído(s) com sucesso(26,14,21,27,15,13,16,20,12,30,18,24,19,22,25,29,17,23).'),
(111, 1, '127.0.0.1', '2009-03-25', '11:56:32', 1, 'Excluir', 'Usuários(s) excluído(s) com sucesso(31).'),
(112, 1, '127.0.0.1', '2009-03-25', '11:56:38', 1, 'Excluir', 'Usuários(s) excluído(s) com sucesso(31).'),
(113, 1, '127.0.0.1', '2009-03-25', '11:57:42', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(32).'),
(114, 1, '127.0.0.1', '2009-03-25', '11:58:49', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(33).'),
(115, 1, '127.0.0.1', '2009-03-25', '11:59:01', 1, 'Excluir', 'Usuários(s) excluído(s) com sucesso(32,33).'),
(116, 1, '127.0.0.1', '2009-03-25', '11:59:27', 1, 'Cadastrar', 'Usuário cadastrado com sucesso(34).'),
(117, 1, '127.0.0.1', '2009-03-25', '11:59:31', 1, 'Excluir', 'Usuários(s) excluído(s) com sucesso(34).'),
(118, 1, '127.0.0.1', '2009-03-25', '12:20:27', 1, 'Alterar', 'Usuário alterado com sucesso(1).'),
(119, 1, '127.0.0.1', '2009-03-25', '15:20:07', 0, 'Login', 'Login efetuado.'),
(120, 1, '127.0.0.1', '2009-03-25', '15:25:18', 0, 'Logout', 'O usuário saiu do sistema.'),
(121, 1, '127.0.0.1', '2009-03-25', '15:25:22', 0, 'Login', 'Login efetuado.'),
(122, 1, '127.0.0.1', '2009-03-25', '15:52:04', 1, 'Alterar Autorizacao', ' Autorização do user Alterada com sucesso(1)'),
(123, 1, '127.0.0.1', '2009-03-25', '15:52:09', 1, 'Alterar Autorizacao', ' Autorização do user Alterada com sucesso(1)'),
(124, 1, '127.0.0.1', '2009-03-25', '15:52:31', 1, 'Alterar Autorizacao', ' Autorização do user Alterada com sucesso(1)'),
(125, 1, '127.0.0.1', '2009-03-25', '15:56:32', 1, 'Alterar Autorizacao', ' Autorização do user Alterada com sucesso(1)'),
(126, 1, '127.0.0.1', '2009-03-25', '15:56:42', 1, 'Alterar Autorizacao', ' Autorização do user Alterada com sucesso(1)'),
(127, 1, '127.0.0.1', '2009-03-25', '15:57:06', 1, 'Alterar Autorizacao', ' Autorização do user Alterada com sucesso(1)'),
(128, 1, '127.0.0.1', '2009-03-25', '16:01:51', 1, 'Alterar Autorizacao', ' Autorização do user Alterada com sucesso(1)'),
(129, 1, '127.0.0.1', '2009-03-25', '16:01:58', 1, 'Alterar Autorizacao', ' Autorização do user Alterada com sucesso(1)'),
(130, 1, '127.0.0.1', '2009-03-25', '16:04:34', 1, 'Alterar Autorizacao', ' Autorização do user Alterada com sucesso(1)'),
(131, 1, '127.0.0.1', '2009-03-25', '16:04:39', 1, 'Alterar Autorizacao', ' Autorização do user Alterada com sucesso(1)'),
(132, 1, '127.0.0.1', '2009-03-25', '16:34:50', 2, 'Cadastrar', 'Grupo cadastrado com sucesso(3).'),
(133, 1, '127.0.0.1', '2009-03-25', '16:43:44', 2, 'Alterar', 'Grupo alterado com sucesso().'),
(134, 1, '127.0.0.1', '2009-03-25', '16:44:07', 2, 'Alterar', 'Grupo alterado com sucesso(3).'),
(135, 1, '127.0.0.1', '2009-03-25', '16:46:04', 2, 'Excluir', 'Grupo(s) excluído(s) com sucesso(3).'),
(136, 1, '127.0.0.1', '2009-03-26', '10:05:08', 0, 'Login', 'Login efetuado.'),
(137, 1, '127.0.0.1', '2009-03-26', '10:53:36', 3, 'Cadastrar', 'Submódulo cadastrado com sucesso(7).'),
(138, 1, '127.0.0.1', '2009-03-26', '10:58:59', 3, 'Cadastrar', 'Submódulo cadastrado com sucesso(8).'),
(139, 1, '127.0.0.1', '2009-03-26', '10:59:24', 3, 'Alterar', 'Submódulo alterado com sucesso(0).'),
(140, 1, '127.0.0.1', '2009-03-26', '10:59:55', 3, 'Alterar', 'Submódulo alterado com sucesso(0).'),
(141, 1, '127.0.0.1', '2009-03-26', '11:01:25', 3, 'Excluir', 'Submódulos(s) excluído(s) com sucesso(7,8).'),
(142, 1, '127.0.0.1', '2009-03-27', '09:28:36', 0, 'Login', 'Login efetuado.'),
(143, 1, '127.0.0.1', '2009-03-27', '14:15:27', 0, 'Login', 'Login efetuado.'),
(144, 1, '127.0.0.1', '2009-03-27', '14:15:28', 0, 'Login', 'Login efetuado.'),
(145, 1, '127.0.0.1', '2009-03-27', '16:11:11', 5, 'Cadastrar', 'Rotina cadastrada com sucesso(22).'),
(146, 1, '127.0.0.1', '2009-03-27', '16:40:51', 5, 'Alterar', 'Rotina alterada com sucesso().'),
(147, 1, '127.0.0.1', '2009-03-27', '16:41:41', 5, 'Alterar', 'Rotina alterada com sucesso(22).'),
(148, 1, '127.0.0.1', '2009-03-27', '16:42:44', 5, 'Excluir', 'Rotinas(s) excluído(s) com sucesso(22).'),
(149, 1, '127.0.0.1', '2009-03-27', '16:43:47', 5, 'Alterar', 'Rotina alterada com sucesso(1).'),
(150, 1, '127.0.0.1', '2009-03-27', '16:44:03', 5, 'Alterar', 'Rotina alterada com sucesso(2).'),
(151, 1, '127.0.0.1', '2009-03-27', '16:44:10', 5, 'Alterar', 'Rotina alterada com sucesso(3).'),
(152, 1, '127.0.0.1', '2009-03-27', '16:44:19', 5, 'Alterar', 'Rotina alterada com sucesso(4).'),
(153, 1, '127.0.0.1', '2009-03-27', '16:45:49', 5, 'Alterar', 'Rotina alterada com sucesso(4).'),
(154, 1, '127.0.0.1', '2009-03-27', '16:47:27', 5, 'Alterar', 'Rotina alterada com sucesso(4).'),
(155, 1, '127.0.0.1', '2009-03-27', '16:48:18', 5, 'Alterar', 'Rotina alterada com sucesso(4).'),
(156, 1, '127.0.0.1', '2009-03-27', '16:51:10', 5, 'Alterar', 'Rotina alterada com sucesso(15).'),
(157, 1, '127.0.0.1', '2009-03-27', '16:51:28', 5, 'Alterar', 'Rotina alterada com sucesso(8).'),
(158, 1, '127.0.0.1', '2009-03-27', '16:51:35', 5, 'Alterar', 'Rotina alterada com sucesso(9).'),
(159, 1, '127.0.0.1', '2009-03-27', '16:51:44', 5, 'Alterar', 'Rotina alterada com sucesso(7).'),
(160, 1, '127.0.0.1', '2009-03-27', '16:51:53', 5, 'Alterar', 'Rotina alterada com sucesso(10).'),
(161, 1, '127.0.0.1', '2009-03-27', '16:52:11', 5, 'Alterar', 'Rotina alterada com sucesso(15).'),
(162, 1, '127.0.0.1', '2009-03-27', '16:52:20', 5, 'Alterar', 'Rotina alterada com sucesso(12).'),
(163, 1, '127.0.0.1', '2009-03-27', '16:52:28', 5, 'Alterar', 'Rotina alterada com sucesso(14).'),
(164, 1, '127.0.0.1', '2009-03-27', '16:52:36', 5, 'Alterar', 'Rotina alterada com sucesso(11).'),
(165, 1, '127.0.0.1', '2009-03-27', '16:52:43', 5, 'Alterar', 'Rotina alterada com sucesso(16).'),
(166, 1, '127.0.0.1', '2009-03-27', '16:52:52', 5, 'Alterar', 'Rotina alterada com sucesso(13).'),
(167, 1, '127.0.0.1', '2009-03-27', '16:54:26', 5, 'Alterar', 'Rotina alterada com sucesso(18).'),
(168, 1, '127.0.0.1', '2009-03-27', '16:54:34', 5, 'Alterar', 'Rotina alterada com sucesso(17).'),
(169, 1, '127.0.0.1', '2009-03-27', '16:54:42', 5, 'Alterar', 'Rotina alterada com sucesso(19).'),
(170, 1, '127.0.0.1', '2009-03-27', '16:55:06', 5, 'Alterar', 'Rotina alterada com sucesso(20).');

-- --------------------------------------------------------

--
-- Estrutura da tabela 'modulos'
--

CREATE TABLE IF NOT EXISTS modulos (
  modulos_id int(10) unsigned NOT NULL auto_increment,
  modulos_nome varchar(50) default NULL,
  modulos_descricao text,
  modulos_ordem int(4) default NULL,
  PRIMARY KEY  (modulos_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela 'modulos'
--

INSERT INTO modulos (modulos_id, modulos_nome, modulos_descricao, modulos_ordem) VALUES
(1, 'Sistema', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela 'rotinas'
--

CREATE TABLE IF NOT EXISTS rotinas (
  rotinas_id int(10) unsigned NOT NULL auto_increment,
  rotinas_nome varchar(50) NOT NULL,
  rotinas_descricao text,
  submodulos_id int(10) unsigned default NULL,
  rotinas_pagina varchar(50) default NULL,
  rotinas_quantidade tinyint(3) unsigned default NULL,
  rotinas_visivel char(1) NOT NULL,
  rotinas_ordem int(4) default NULL,
  btn_imagem varchar(30) default NULL,
  PRIMARY KEY  (rotinas_id),
  KEY rotinas_FKIndex1 (submodulos_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela 'rotinas'
--

INSERT INTO rotinas (rotinas_id, rotinas_nome, rotinas_descricao, submodulos_id, rotinas_pagina, rotinas_quantidade, rotinas_visivel, rotinas_ordem, btn_imagem) VALUES
(1, 'Cadastrar', 'Cadastro de usuários do sistema.', 1, 'users_cadastrar.php', 0, 's', NULL, 'btn_novo.png'),
(2, 'Alterar', 'Altera usuarios do sistema.', 1, 'users_alterar.php', 1, 's', NULL, 'btn_edit.png'),
(3, 'Alterar Autorizacao', 'Altera autorizacoes de usuarios.', 1, 'autorizacoes_alterar.php', 1, 's', NULL, 'btn_lock_go.png'),
(4, 'Excluir', 'Exclui um ou mais usuarios do sistema.', 1, 'users_excluir.php', 2, 's', NULL, 'btn_excluir2.png'),
(5, 'Alterar Senha', 'Alteracao do usuario corrente do sistema.', 1, 'senha_alterar.php', 0, 'n', NULL, NULL),
(6, 'Alterar Dados', '', 1, 'dados_alterar.php', 0, 'n', NULL, NULL),
(7, 'Cadastrar', 'Cadastra grupos de usuarios do sistema.', 2, 'grupos_cadastrar.php', 0, 's', NULL, 'btn_novo.png'),
(8, 'Alterar', 'Altera grupos de usuarios do sistema.', 2, 'grupos_alterar.php', 1, 's', NULL, 'btn_edit.png'),
(9, 'Alterar Autorizacao', 'Altera autorizacoes de grupos de usuarios do sistema.', 2, 'autorizacoes_alterar.php', 1, 's', NULL, 'btn_lock_go.png'),
(10, 'Excluir', 'Exclui grupos de usuarios do sistema.', 2, 'grupos_excluir.php', 2, 's', NULL, 'btn_excluir2.png'),
(11, 'Cadastrar', 'Cadastra submodulos no sistema.', 3, 'submodulos_cadastrar.php', 0, 's', NULL, 'btn_novo.png'),
(12, 'Alterar', 'Altera submodulos do sistema.', 3, 'submodulos_alterar.php', 1, 's', NULL, 'btn_edit.png'),
(13, 'Excluir', 'Exclui um ou mais submodulos do  sistema.', 3, 'submodulos_excluir.php', 2, 's', NULL, 'btn_excluir2.png'),
(14, 'Cadastrar', 'Cadastra modulos no sistema.', 4, 'modulos_cadastrar.php', 0, 's', NULL, 'btn_novo.png'),
(15, 'Alterar', 'Altera os modulos do sistema.', 4, 'modulos_alterar.php', 1, 's', NULL, 'btn_edit.png'),
(16, 'Excluir', 'Exclui um ou mais modulos do sistema.', 4, 'modulos_excluir.php', 2, 's', NULL, 'btn_excluir2.png'),
(17, 'Cadastrar', 'Cadastro de rotinas dos modulos.', 5, 'rotinas_cadastrar.php', 0, 's', NULL, 'btn_novo.png'),
(18, 'Alterar', 'Altera rotinas dos modulos do sistema.', 5, 'rotinas_alterar.php', 1, 's', NULL, 'btn_edit.png'),
(19, 'Excluir', 'Exclui uma ou mais rotinas dos submodulos do sistema.', 5, 'rotinas_excluir.php', 2, 's', NULL, 'btn_excluir2.png'),
(20, 'Pesquisar', 'Filtro avancado de Logs.', 6, 'logs_pesquisar.php', 0, 's', NULL, 'xmag.png'),
(21, 'Detalhes', '', 6, 'logs_detalhes.php', 0, 'n', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela 'submodulos'
--

CREATE TABLE IF NOT EXISTS submodulos (
  submodulos_id int(10) unsigned NOT NULL auto_increment,
  submodulos_nome varchar(50) default NULL,
  submodulos_descricao varchar(255) NOT NULL,
  submodulos_pagina varchar(50) default NULL,
  modulos_id int(10) unsigned default NULL,
  submodulos_ordem int(4) default NULL,
  PRIMARY KEY  (submodulos_id),
  KEY submodulos_FKIndex1 (modulos_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela 'submodulos'
--

INSERT INTO submodulos (submodulos_id, submodulos_nome, submodulos_descricao, submodulos_pagina, modulos_id, submodulos_ordem) VALUES
(1, 'Usuarios', '', 'users_listar.php', 1, 1),
(2, 'Grupos', '', 'grupos_listar.php', 1, 2),
(3, 'Submódulos', 'submódulos', 'submodulos_listar.php', 1, 4),
(4, 'Módulos', '', 'modulos_listar.php', 1, 3),
(5, 'Rotinas', '', 'rotinas_listar.php', 1, 5),
(6, 'Logs', '', 'logs_listar.php', 1, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela 'users'
--

CREATE TABLE IF NOT EXISTS users (
  users_id int(10) unsigned NOT NULL auto_increment,
  users_nome varchar(45) default NULL,
  users_senha varchar(100) NOT NULL,
  grupos_id int(10) unsigned default NULL,
  users_email varchar(60) default NULL,
  users_cpf varchar(16) default NULL,
  users_autorizacao_especial tinyint(3) unsigned default NULL,
  users_primeiro_login tinyint(3) unsigned default NULL,
  users_data_criacao datetime default NULL,
  users_data_modificacao datetime default NULL,
  PRIMARY KEY  (users_id),
  KEY users_FKIndex1 (grupos_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela 'users'
--

INSERT INTO users (users_id, users_nome, users_senha, grupos_id, users_email, users_cpf, users_autorizacao_especial, users_primeiro_login, users_data_criacao, users_data_modificacao) VALUES
(1, 'Ana Claudia Nogueira', 'f6efb8b80b052cea58b768646242d07d8dbefd0a', 1, 'anacnogueira@gmail.com', '33087264830', 0, 0, '2007-09-04 20:57:09', '2009-03-25 12:20:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela 'users_sessoes'
--

CREATE TABLE IF NOT EXISTS users_sessoes (
  users_id int(11) NOT NULL default '0',
  users_sessoes_num int(6) unsigned zerofill NOT NULL,
  PRIMARY KEY  (users_id),
  KEY users_id (users_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela 'users_sessoes'
--

INSERT INTO users_sessoes (users_id, users_sessoes_num) VALUES
(1, 000037);
