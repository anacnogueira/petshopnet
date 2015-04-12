-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jun 20, 2010 as 09:52 AM
-- Versão do Servidor: 5.0.87
-- Versão do PHP: 5.2.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: 'petshopnet2'
--

-- --------------------------------------------------------

--
-- Estrutura da tabela 'produtos_imagens'
--

DROP TABLE IF EXISTS produtos_imagens;
CREATE TABLE IF NOT EXISTS produtos_imagens (
  produtos_codigo varchar(20) character set latin1 NOT NULL,
  produtos_imagem varchar(100) collate latin1_general_ci NOT NULL,
  `data` datetime NOT NULL,
  verified enum('S','N') collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela 'produtos_imagens'
--

INSERT INTO produtos_imagens VALUES('7896029041963', 'BISCROK_MARROBONE_500GR_1_000003.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898928491061', 'Bebedouro_Inteligente_-_Pet_So_1_000024.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898928491115', 'Bebedouro_Inteligente_-_Pet_So_1_000025.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891106000413', 'Drontal_Plus_-_Caes_10_Kg_1_000051.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898076786095', 'Endal_-_Caes_10_Kg_1_000053.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891142101556', 'Endal_Plus_-_Caes_10_Kg_1_000054.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898076786132', 'Endal_Gatos_1_000055.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898053772905', 'Frontline_Plus_-_Gatos_1_000033.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898053772868', 'Frontline_Plus_-_Caes_Ate_10_K_1_000034.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898053772875', 'Frontline_Plus_-_Caes_entre_10_1_000035.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898053772882', 'Frontline_Plus_-_Caes_entre_20_1_000036.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898053772899', 'Frontline_Plus_-_Caes_entre_40_1_000037.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('78963366565', 'Capstar_11_4_Mg_-_Caixa_C6_Co_1_78963366565.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('78963366566', 'Capstar_57_Mg_-_Caixa_C6_Comp_1_78963366566.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7896029069813', 'Pedigree_Files_de_Carne_ao_mol_1_000015.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898902181018', 'Petdrink_-_Bebedouro_portatil_1_000026.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7896583613934', 'Rasqueadeira_Profissional_-_Ta_1_000031.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7896583613927', 'Rasqueadeira_Profissional_-_Ta_1_000032.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891106000376', 'Sabonete_Asuntol_-_contra_pulg_1_000028.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7896015600549', 'Sabonete_Tratto_-_Antipulgas_e_1_000029.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7896183304133', 'Sabonete_Sanol_Antipulgas_p_C_1_000030.JPG', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891106005739', 'MAX-3_ADVANTAGE_2_5_ML_1_132355.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891106005722', 'MAX-3_ADVANTAGE_1_0_ML_1_132354.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891106005715', 'MAX-3_ADVANTAGE_0_4_ML_1_132353.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891106005746', 'MAX-3_ADVANTAGE_4_ML_1_132352.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898053770239', 'FRONTLINE_SPRAY_100_ML_1_129901.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898053770246', 'FRONTLINE_SPRAY_250_ML_1_131518.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891217010318', 'MILBEMAX_CAES_ATE_5_KG_-_CAIXA_1_138969.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891106001656', 'DRONTAL_GATOS_COMPRIMIDOS_-_CA_1_126703.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891217010349', 'MILBEMAX_GATOS_-_CAIXA_C2_COM_1_138968.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891217010325', 'MILBEMAX_CAES_5_A_25_KG_-_CAIX_1_138970.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7896185979476', 'PANACUR_-_CAESGATOS_500_MG_-__1_128570.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7896185906748', 'Panacur_10_-_20_Ml_1_7896185906748.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891106002363', 'Drontal_Puppy_20_Ml_1_7891106002363.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891106003346', 'Drontal_Plus_2_310_Mg_-_35_Kg__1_7891106003346.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891106003186', 'Coleira_Kiltix_Contra_Carrapat_1_7891106003186.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891106001380', 'Coleira_Kiltix_Contra_Carrapat_1_7891106001380.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7891106005555', 'Coleira_Kiltix_Contra_Carrapat_1_7891106005555.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898049712175', 'Promeris_Gatos_Ate_4_Kg_-_P_1_7898049712175.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898049712182', 'Promeris_Gatos_Acima_4_Kgs_-_G_1_7898049712182.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898049712137', 'Promeris_Duo_Caes_05_A_10_Kg_-_1_7898049712137.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898049712144', 'Promeris_Duo_Caes_10_A_25_Kg_-_1_7898049712144.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898049712151', 'Promeris_Duo_Caes_25_A_40_Kg_-_1_7898049712151.jpg', '2010-06-18 23:24:20', 'S');
INSERT INTO produtos_imagens VALUES('7898049712168', 'Promeris_Duo_Caes_40_A_50_Kg_-_1_7898049712168.jpg', '2010-06-18 23:24:20', 'S');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
