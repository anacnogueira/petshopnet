-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Abr 03, 2009 as 05:03 PM
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
-- Estrutura da tabela 'modulos'
--

DROP TABLE IF EXISTS modulos;
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
(1, 'Sistema', NULL, 1),
(2, 'Teste', '&amp;lt;&amp;lt;Texto&amp;gt;&amp;gt;', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela 'rotinas'
--

DROP TABLE IF EXISTS rotinas;
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
(1, 'Cadastrar', 'Cadastro de usuários do sistema.', 1, 'users_cadastrar.php', 0, 's', 1, 'btn_novo.png'),
(2, 'Alterar', 'Altera usuarios do sistema.', 1, 'users_alterar.php', 1, 's', 2, 'btn_edit.png'),
(3, 'Alterar Autorizacao', 'Altera autorizacoes de usuarios.', 1, 'autorizacoes_alterar.php', 1, 's', 3, 'btn_lock_go.png'),
(4, 'Excluir', 'Exclui um ou mais usuarios do sistema.', 1, 'users_excluir.php', 2, 's', 4, 'btn_excluir2.png'),
(5, 'Alterar Senha', 'Alteracao do usuario corrente do sistema.', 1, 'senha_alterar.php', 0, 'n', 5, NULL),
(6, 'Alterar Dados', '', 1, 'dados_alterar.php', 0, 'n', 6, NULL),
(7, 'Cadastrar', 'Cadastra grupos de usuarios do sistema.', 2, 'grupos_cadastrar.php', 0, 's', 1, 'btn_novo.png'),
(8, 'Alterar', 'Altera grupos de usuarios do sistema.', 2, 'grupos_alterar.php', 1, 's', 2, 'btn_edit.png'),
(9, 'Alterar Autorizacao', 'Altera autorizacoes de grupos de usuarios do sistema.', 2, 'autorizacoes_alterar.php', 1, 's', 3, 'btn_lock_go.png'),
(10, 'Excluir', 'Exclui grupos de usuarios do sistema.', 2, 'grupos_excluir.php', 2, 's', 4, 'btn_excluir2.png'),
(11, 'Cadastrar', 'Cadastra submodulos no sistema.', 3, 'submodulos_cadastrar.php', 0, 's', 1, 'btn_novo.png'),
(12, 'Alterar', 'Altera submodulos do sistema.', 3, 'submodulos_alterar.php', 1, 's', 2, 'btn_edit.png'),
(13, 'Excluir', 'Exclui um ou mais submodulos do  sistema.', 3, 'submodulos_excluir.php', 2, 's', 3, 'btn_excluir2.png'),
(14, 'Cadastrar', 'Cadastra modulos no sistema.', 4, 'modulos_cadastrar.php', 0, 's', 1, 'btn_novo.png'),
(15, 'Alterar', 'Altera os modulos do sistema.', 4, 'modulos_alterar.php', 1, 's', 2, 'btn_edit.png'),
(16, 'Excluir', 'Exclui um ou mais modulos do sistema.', 4, 'modulos_excluir.php', 2, 's', 3, 'btn_excluir2.png'),
(17, 'Cadastrar', 'Cadastro de rotinas dos modulos.', 5, 'rotinas_cadastrar.php', 0, 's', 1, 'btn_novo.png'),
(18, 'Alterar', 'Altera rotinas dos modulos do sistema.', 5, 'rotinas_alterar.php', 1, 's', 2, 'btn_edit.png'),
(19, 'Excluir', 'Exclui uma ou mais rotinas dos submodulos do sistema.', 5, 'rotinas_excluir.php', 2, 's', 3, 'btn_excluir2.png'),
(20, 'Pesquisar', 'Filtro avancado de Logs.', 6, 'logs_pesquisar.php', 0, 's', 1, 'xmag.png'),
(21, 'Detalhes', '', 6, 'logs_detalhes.php', 0, 'n', 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela 'submodulos'
--

DROP TABLE IF EXISTS submodulos;
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
(3, 'Submódulos', 'submódulos', 'submodulos_listar.php', 1, 3),
(4, 'Módulos', '', 'modulos_listar.php', 1, 4),
(5, 'Rotinas', '', 'rotinas_listar.php', 1, 5),
(6, 'Logs', '', 'logs_listar.php', 1, 6);
