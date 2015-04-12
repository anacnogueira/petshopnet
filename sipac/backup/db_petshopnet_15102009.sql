#ADMIN - PetShopNet

# http://www.petshopnet.com.br/

# 

# database : petshopnet

# database for PetShopNet 

# DataBase Server: localhost

# Copyright (c)2009 PetShopNet

# 

# Backup Date: 15/10/2009 16:49:42

DROP TABLE IF EXISTS autorizacoes;
CREATE TABLE autorizacoes (  
  autorizacoes_id   int(10) unsigned not null   auto_increment,
  grupos_id   int(10) unsigned   ,
  users_id   int(10) unsigned   ,
  modulos_id   int(10) unsigned   ,
  submodulos_id   int(10) unsigned   ,
  rotinas_id   int(10) unsigned   ,
  tipo_autorizacao   tinyint(3) unsigned   ,
 PRIMARY KEY (autorizacoes_id)
);

 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2234', '2', NULL, '1', NULL, NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2235', '2', NULL, '3', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2236', '2', NULL, '4', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2237', '2', NULL, '5', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2238', '2', NULL, '6', NULL, NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2239', '2', NULL, '7', NULL, NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2240', '2', NULL, NULL, '1', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2241', '2', NULL, NULL, '2', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2242', '2', NULL, NULL, '3', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2243', '2', NULL, NULL, '4', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2244', '2', NULL, NULL, '5', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2245', '2', NULL, NULL, '6', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2246', '2', NULL, NULL, '7', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2247', '2', NULL, NULL, '9', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2249', '2', NULL, NULL, '11', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2250', '2', NULL, NULL, '12', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2251', '2', NULL, NULL, '13', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2252', '2', NULL, NULL, '14', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2253', '2', NULL, NULL, '15', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2254', '2', NULL, NULL, '16', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2255', '2', NULL, NULL, '17', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2256', '2', NULL, NULL, '18', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2257', '2', NULL, NULL, NULL, '19', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2258', '2', NULL, NULL, NULL, '32', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2259', '2', NULL, NULL, NULL, '33', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2260', '2', NULL, NULL, NULL, '43', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2261', '2', NULL, NULL, NULL, '23', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2262', '2', NULL, NULL, NULL, '24', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2263', '2', NULL, NULL, NULL, '25', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2267', '2', NULL, NULL, NULL, '20', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2268', '2', NULL, NULL, NULL, '21', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2269', '2', NULL, NULL, NULL, '22', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2270', '2', NULL, NULL, NULL, '34', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2271', '2', NULL, NULL, NULL, '35', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2272', '2', NULL, NULL, NULL, '36', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2273', '2', NULL, NULL, NULL, '37', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2274', '2', NULL, NULL, NULL, '39', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2275', '2', NULL, NULL, NULL, '40', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2276', '2', NULL, NULL, NULL, '41', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2277', '2', NULL, NULL, NULL, '42', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2278', '2', NULL, NULL, NULL, '29', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2279', '2', NULL, NULL, NULL, '30', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2280', '2', NULL, NULL, NULL, '31', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2281', '2', NULL, NULL, NULL, '46', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2282', '2', NULL, NULL, NULL, '47', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2283', '2', NULL, NULL, NULL, '48', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2284', '2', NULL, NULL, NULL, '50', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2285', '2', NULL, NULL, NULL, '51', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2286', '2', NULL, NULL, NULL, '52', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2287', '2', NULL, NULL, NULL, '53', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('2288', '2', NULL, NULL, NULL, '54', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3482', '1', NULL, '1', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3483', '1', NULL, '3', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3484', '1', NULL, '5', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3485', '1', NULL, '7', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3486', '1', NULL, '6', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3487', '1', NULL, '4', NULL, NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3488', '1', NULL, NULL, '1', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3489', '1', NULL, NULL, '2', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3490', '1', NULL, NULL, '4', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3491', '1', NULL, NULL, '3', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3492', '1', NULL, NULL, '5', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3493', '1', NULL, NULL, '6', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3494', '1', NULL, NULL, '7', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3495', '1', NULL, NULL, '9', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3496', '1', NULL, NULL, '11', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3497', '1', NULL, NULL, '12', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3498', '1', NULL, NULL, '13', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3499', '1', NULL, NULL, '14', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3500', '1', NULL, NULL, '27', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3501', '1', NULL, NULL, '16', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3502', '1', NULL, NULL, '17', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3503', '1', NULL, NULL, '22', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3504', '1', NULL, NULL, '23', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3505', '1', NULL, NULL, '25', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3506', '1', NULL, NULL, '26', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3507', '1', NULL, NULL, '20', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3508', '1', NULL, NULL, '19', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3509', '1', NULL, NULL, '21', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3510', '1', NULL, NULL, '24', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3511', '1', NULL, NULL, '15', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3512', '1', NULL, NULL, NULL, '1', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3513', '1', NULL, NULL, NULL, '3', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3514', '1', NULL, NULL, NULL, '4', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3515', '1', NULL, NULL, NULL, '5', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3516', '1', NULL, NULL, NULL, '73', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3517', '1', NULL, NULL, NULL, '55', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3518', '1', NULL, NULL, NULL, '6', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3519', '1', NULL, NULL, NULL, '7', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3520', '1', NULL, NULL, NULL, '8', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3521', '1', NULL, NULL, NULL, '9', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3522', '1', NULL, NULL, NULL, '10', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3523', '1', NULL, NULL, NULL, '11', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3524', '1', NULL, NULL, NULL, '12', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3525', '1', NULL, NULL, NULL, '13', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3526', '1', NULL, NULL, NULL, '14', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3527', '1', NULL, NULL, NULL, '15', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3528', '1', NULL, NULL, NULL, '2', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3529', '1', NULL, NULL, NULL, '16', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3530', '1', NULL, NULL, NULL, '17', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3531', '1', NULL, NULL, NULL, '18', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3532', '1', NULL, NULL, NULL, '49', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3533', '1', NULL, NULL, NULL, '19', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3534', '1', NULL, NULL, NULL, '32', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3535', '1', NULL, NULL, NULL, '33', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3536', '1', NULL, NULL, NULL, '43', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3537', '1', NULL, NULL, NULL, '23', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3538', '1', NULL, NULL, NULL, '24', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3539', '1', NULL, NULL, NULL, '25', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3540', '1', NULL, NULL, NULL, '79', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3541', '1', NULL, NULL, NULL, '20', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3542', '1', NULL, NULL, NULL, '21', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3543', '1', NULL, NULL, NULL, '22', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3544', '1', NULL, NULL, NULL, '34', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3545', '1', NULL, NULL, NULL, '35', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3546', '1', NULL, NULL, NULL, '36', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3547', '1', NULL, NULL, NULL, '37', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3548', '1', NULL, NULL, NULL, '38', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3549', '1', NULL, NULL, NULL, '39', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3550', '1', NULL, NULL, NULL, '40', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3551', '1', NULL, NULL, NULL, '41', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3552', '1', NULL, NULL, NULL, '42', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3553', '1', NULL, NULL, NULL, '75', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3554', '1', NULL, NULL, NULL, '76', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3555', '1', NULL, NULL, NULL, '78', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3556', '1', NULL, NULL, NULL, '77', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3557', '1', NULL, NULL, NULL, '44', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3558', '1', NULL, NULL, NULL, '45', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3559', '1', NULL, NULL, NULL, '46', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3560', '1', NULL, NULL, NULL, '47', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3561', '1', NULL, NULL, NULL, '48', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3562', '1', NULL, NULL, NULL, '50', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3563', '1', NULL, NULL, NULL, '51', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3564', '1', NULL, NULL, NULL, '53', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3565', '1', NULL, NULL, NULL, '52', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3566', '1', NULL, NULL, NULL, '54', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3567', '1', NULL, NULL, NULL, '57', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3568', '1', NULL, NULL, NULL, '58', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3569', '1', NULL, NULL, NULL, '60', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3570', '1', NULL, NULL, NULL, '59', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3571', '1', NULL, NULL, NULL, '61', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3572', '1', NULL, NULL, NULL, '62', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3573', '1', NULL, NULL, NULL, '64', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3574', '1', NULL, NULL, NULL, '63', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3575', '1', NULL, NULL, NULL, '65', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3576', '1', NULL, NULL, NULL, '66', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3577', '1', NULL, NULL, NULL, '67', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3578', '1', NULL, NULL, NULL, '70', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3579', '1', NULL, NULL, NULL, '68', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3580', '1', NULL, NULL, NULL, '69', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3581', '1', NULL, NULL, NULL, '74', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3582', '1', NULL, NULL, NULL, '29', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3583', '1', NULL, NULL, NULL, '30', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3584', '1', NULL, NULL, NULL, '31', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3899', NULL, '1', '1', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3900', NULL, '1', '3', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3901', NULL, '1', '5', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3902', NULL, '1', '7', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3903', NULL, '1', '6', NULL, NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3904', NULL, '1', '4', NULL, NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3905', NULL, '1', NULL, '1', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3906', NULL, '1', NULL, '2', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3907', NULL, '1', NULL, '4', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3908', NULL, '1', NULL, '3', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3909', NULL, '1', NULL, '5', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3910', NULL, '1', NULL, '6', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3911', NULL, '1', NULL, '7', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3912', NULL, '1', NULL, '9', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3913', NULL, '1', NULL, '11', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3914', NULL, '1', NULL, '12', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3915', NULL, '1', NULL, '13', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3916', NULL, '1', NULL, '14', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3917', NULL, '1', NULL, '27', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3918', NULL, '1', NULL, '16', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3919', NULL, '1', NULL, '17', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3920', NULL, '1', NULL, '22', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3921', NULL, '1', NULL, '23', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3922', NULL, '1', NULL, '25', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3923', NULL, '1', NULL, '26', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3924', NULL, '1', NULL, '20', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3925', NULL, '1', NULL, '19', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3926', NULL, '1', NULL, '21', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3927', NULL, '1', NULL, '24', NULL, '2');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3928', NULL, '1', NULL, '15', NULL, '0');
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3929', NULL, '1', NULL, NULL, '1', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3930', NULL, '1', NULL, NULL, '3', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3931', NULL, '1', NULL, NULL, '4', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3932', NULL, '1', NULL, NULL, '5', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3933', NULL, '1', NULL, NULL, '73', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3934', NULL, '1', NULL, NULL, '55', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3935', NULL, '1', NULL, NULL, '6', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3936', NULL, '1', NULL, NULL, '7', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3937', NULL, '1', NULL, NULL, '8', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3938', NULL, '1', NULL, NULL, '9', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3939', NULL, '1', NULL, NULL, '10', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3940', NULL, '1', NULL, NULL, '11', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3941', NULL, '1', NULL, NULL, '12', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3942', NULL, '1', NULL, NULL, '13', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3943', NULL, '1', NULL, NULL, '14', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3944', NULL, '1', NULL, NULL, '15', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3945', NULL, '1', NULL, NULL, '2', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3946', NULL, '1', NULL, NULL, '16', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3947', NULL, '1', NULL, NULL, '17', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3948', NULL, '1', NULL, NULL, '18', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3949', NULL, '1', NULL, NULL, '49', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3950', NULL, '1', NULL, NULL, '19', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3951', NULL, '1', NULL, NULL, '32', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3952', NULL, '1', NULL, NULL, '33', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3953', NULL, '1', NULL, NULL, '43', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3954', NULL, '1', NULL, NULL, '23', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3955', NULL, '1', NULL, NULL, '24', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3956', NULL, '1', NULL, NULL, '25', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3957', NULL, '1', NULL, NULL, '79', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3958', NULL, '1', NULL, NULL, '20', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3959', NULL, '1', NULL, NULL, '21', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3960', NULL, '1', NULL, NULL, '22', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3961', NULL, '1', NULL, NULL, '34', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3962', NULL, '1', NULL, NULL, '35', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3963', NULL, '1', NULL, NULL, '36', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3964', NULL, '1', NULL, NULL, '37', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3965', NULL, '1', NULL, NULL, '38', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3966', NULL, '1', NULL, NULL, '39', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3967', NULL, '1', NULL, NULL, '40', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3968', NULL, '1', NULL, NULL, '75', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3969', NULL, '1', NULL, NULL, '76', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3970', NULL, '1', NULL, NULL, '78', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3971', NULL, '1', NULL, NULL, '77', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3972', NULL, '1', NULL, NULL, '44', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3973', NULL, '1', NULL, NULL, '45', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3974', NULL, '1', NULL, NULL, '46', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3975', NULL, '1', NULL, NULL, '47', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3976', NULL, '1', NULL, NULL, '48', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3977', NULL, '1', NULL, NULL, '50', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3978', NULL, '1', NULL, NULL, '51', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3979', NULL, '1', NULL, NULL, '53', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3980', NULL, '1', NULL, NULL, '52', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3981', NULL, '1', NULL, NULL, '54', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3982', NULL, '1', NULL, NULL, '57', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3983', NULL, '1', NULL, NULL, '58', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3984', NULL, '1', NULL, NULL, '60', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3985', NULL, '1', NULL, NULL, '59', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3986', NULL, '1', NULL, NULL, '61', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3987', NULL, '1', NULL, NULL, '62', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3988', NULL, '1', NULL, NULL, '64', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3989', NULL, '1', NULL, NULL, '63', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3990', NULL, '1', NULL, NULL, '65', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3991', NULL, '1', NULL, NULL, '66', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3992', NULL, '1', NULL, NULL, '67', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3993', NULL, '1', NULL, NULL, '70', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3994', NULL, '1', NULL, NULL, '68', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3995', NULL, '1', NULL, NULL, '69', NULL);
 INSERT INTO autorizacoes ( autorizacoes_id,grupos_id,users_id,modulos_id,submodulos_id,rotinas_id,tipo_autorizacao) VALUES ('3996', NULL, '1', NULL, NULL, '74', NULL);
DROP TABLE IF EXISTS banners;
CREATE TABLE banners (  
  banners_id   int(10) unsigned not null   auto_increment,
  banners_nome   varchar(64)   ,
  banners_url   varchar(255)   ,
  banners_imagem   varchar(100)   ,
  banners_grupo   varchar(20)   ,
  banners_texto_html   text   ,
  expira_impressoes   int(10) default '0'   ,
  expira_data   datetime   ,
  data_agendada   datetime   ,
  data_adicionada   datetime   ,
  data_mudança_status   datetime   ,
  banners_status   int(11) default '0'   ,
 PRIMARY KEY (banners_id)
);

 INSERT INTO banners ( banners_id,banners_nome,banners_url,banners_imagem,banners_grupo,banners_texto_html,expira_impressoes,expira_data,data_agendada,data_adicionada,data_mudança_status,banners_status) VALUES ('1', 'Royal canin', 'www.nestle.com.br/proplan/', 'banner-sample_3_1.jpg', '598X 133', '', '0', NULL, NULL, NULL, NULL, '1');
DROP TABLE IF EXISTS banners_historico;
CREATE TABLE banners_historico (  
  banners_historico_id   int(10) unsigned not null   auto_increment,
  banners_id   int(10) unsigned   ,
  banners_mostrado   int(10) unsigned   ,
  banners_clicado   int(10) unsigned   ,
  banners_historico_data   datetime   ,
 PRIMARY KEY (banners_historico_id)
);

 INSERT INTO banners_historico ( banners_historico_id,banners_id,banners_mostrado,banners_clicado,banners_historico_data) VALUES ('1', '1', '1284', '0', '2009-10-07 22:28:34');
DROP TABLE IF EXISTS carrinho;
CREATE TABLE carrinho (  
  carrinho_id   int(11) unsigned zerofill not null   auto_increment,
  produtos_id   int(6) unsigned zerofill not null   ,
  produtos_nome   varchar(150) not null   ,
  produtos_preco   double(10,2) not null   ,
  produtos_quantidade   int(4) not null   ,
  session_id   text not null   ,
 PRIMARY KEY (carrinho_id)
);

DROP TABLE IF EXISTS categorias;
CREATE TABLE categorias (  
  categorias_id   int(10) unsigned not null   auto_increment,
  categorias_descricao   varchar(255)   ,
  categorias_imagem   varchar(45)   ,
  parent_id   int(10) unsigned   ,
  categorias_ordem   smallint(5) unsigned   ,
  data_adicionado   datetime   ,
  data_modificado   datetime   ,
 PRIMARY KEY (categorias_id)
);

 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('1', 'Alimentos', NULL, '0', '1', '2008-02-04 11:33:44', '2008-10-03 14:00:58');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('2', 'Biscoitos', NULL, '1', '1', '2008-06-30 20:51:46', '2008-10-03 14:01:29');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('3', 'Enlatados', NULL, '1', '2', '2008-10-03 14:01:44', '2008-10-03 14:01:44');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('4', 'Ossos', NULL, '1', '3', '2008-10-03 14:02:04', '2008-10-03 14:02:04');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('6', 'Biblioteca', NULL, '0', '2', '2008-10-03 14:02:34', '2008-10-03 14:02:34');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('7', 'Casa e Transporte', NULL, '0', '3', '2008-10-03 14:02:49', '2008-10-03 14:02:49');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('8', 'Higiene Saúde & Beleza', NULL, '0', '4', '2008-10-03 14:03:03', '2008-10-03 14:03:03');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('9', 'Rações', NULL, '0', '5', '2008-10-03 14:03:20', '2008-10-03 14:03:20');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('10', 'Roupas & Acessorios', NULL, '0', '6', '2008-10-03 14:03:31', '2008-10-03 14:03:31');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('11', 'Cd & Dvd', NULL, '6', '1', '2008-10-03 14:04:06', '2008-10-03 14:04:06');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('12', 'Livros', NULL, '6', '2', '2008-10-03 14:04:15', '2008-10-03 14:04:15');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('13', 'Caixa de Transporte', NULL, '7', '1', '2008-10-03 14:04:32', '2008-10-03 14:04:32');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('14', 'Camas & Almofadas', NULL, '7', '2', '2008-10-03 14:04:52', '2008-10-03 14:04:52');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('15', 'Carrinhos', NULL, '7', '3', '2008-10-03 14:05:06', '2008-10-03 14:05:06');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('16', 'Casas', NULL, '7', '4', '2008-10-03 14:05:18', '2008-10-03 14:05:18');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('17', 'Comedouros & Bebedouros', NULL, '7', '5', '2008-10-03 14:05:27', '2008-10-03 14:05:27');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('18', 'Grades & Portões', NULL, '7', '6', '2008-10-03 14:06:26', '2008-10-03 14:06:26');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('19', 'Anti Pulgas', NULL, '8', '1', '2008-10-03 14:16:26', '2008-10-03 14:16:26');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('20', 'Descartáveis', NULL, '8', '2', '2008-10-03 14:17:00', '2008-10-03 14:17:00');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('21', 'Higiene & Beleza', NULL, '8', '3', '2008-10-03 14:17:57', '2008-10-03 14:17:57');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('22', 'Medicamentos', NULL, '8', '4', '2008-10-03 14:18:18', '2008-10-03 14:18:18');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('23', 'Suplementos', NULL, '8', '5', '2008-10-03 14:18:34', '2008-10-03 14:18:34');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('24', 'Benefull & Kanina', NULL, '9', '1', '2008-10-03 14:20:06', '2008-10-03 14:20:06');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('25', 'Champ', NULL, '9', '2', '2008-10-03 14:20:15', '2008-10-03 14:20:15');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('26', 'Dog Chow', NULL, '9', '3', '2008-10-03 14:20:25', '2008-10-03 14:20:25');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('27', 'Frolic', NULL, '9', '4', '2008-10-03 14:20:40', '2008-10-03 14:20:40');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('28', 'Golden', NULL, '9', '5', '2008-10-03 14:23:24', '2008-10-03 14:23:24');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('29', 'Naturalis', NULL, '9', '6', '2008-10-03 14:23:42', '2008-10-03 14:23:42');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('30', 'Pedigree', NULL, '9', '7', '2008-10-03 14:23:52', '2008-10-03 14:23:52');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('31', 'Premier', NULL, '9', '8', '2008-10-03 14:24:58', '2008-10-03 14:24:58');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('32', 'Proplan', NULL, '9', '9', '2008-10-03 14:25:49', '2008-10-03 14:25:49');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('33', 'Royal Canin', NULL, '9', '10', '2008-10-03 14:25:57', '2008-10-03 14:25:57');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('34', 'Brinquedos', NULL, '10', '1', '2008-10-03 14:27:20', '2008-10-03 14:27:20');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('35', 'Camisetas', NULL, '10', '2', '2008-10-03 14:27:32', '2008-10-03 14:27:32');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('36', 'Capas Protetoras', NULL, '10', '3', '2008-10-03 14:27:46', '2008-10-03 14:27:46');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('37', 'Cerca Virtual STOP', NULL, '10', '4', '2008-10-03 14:27:52', '2008-10-03 14:27:52');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('38', 'Coleira Anti Latido', NULL, '10', '5', '2008-10-03 14:29:00', '2008-10-03 14:29:00');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('39', 'Coleiras & Guias', NULL, '10', '6', '2008-10-03 14:29:12', '2008-10-03 14:29:12');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('40', 'Fantasias', NULL, '10', '7', '2008-10-03 14:29:44', '2008-10-03 14:29:44');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('41', 'Focinheiras', NULL, '10', '8', '2008-10-03 14:30:16', '2008-10-03 14:30:16');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('42', 'Jóias', NULL, '10', '9', '2008-10-03 14:30:28', '2008-10-03 14:30:28');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('43', 'Relógios', NULL, '10', '10', '2008-10-03 14:31:31', '2008-10-03 14:31:31');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('44', 'Roupas Outono & Inverno', NULL, '10', '11', '2008-10-03 14:31:46', '2008-10-03 14:31:46');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('45', 'Roupas Primavera Verão', NULL, '10', '12', '2008-10-03 14:32:13', '2008-10-03 14:32:13');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('46', 'Sonic', NULL, '10', '13', '2008-10-03 14:32:24', '2008-10-03 14:32:24');
 INSERT INTO categorias ( categorias_id,categorias_descricao,categorias_imagem,parent_id,categorias_ordem,data_adicionado,data_modificado) VALUES ('47', 'Ziper de Ração', NULL, '10', '14', '2008-10-03 14:32:34', '2008-10-03 14:32:34');
DROP TABLE IF EXISTS clientes;
CREATE TABLE clientes (  
  clientes_id   int(6) unsigned zerofill not null   auto_increment,
  clientes_nome   varchar(100) not null   ,
  clientes_sobrenome   varchar(100) not null   ,
  clientes_sexo   varchar(1)   ,
  clientes_rg   varchar(20)   ,
  clientes_cpf   varchar(16)   ,
  clientes_nascimento   date not null   ,
  clientes_email   varchar(35)   ,
  clientes_telefone   varchar(15)   ,
  clientes_celular   varchar(15)   ,
  clientes_senha   varchar(150)   ,
  clientes_newsletter   tinyint(3) unsigned default '0' not null   ,
 PRIMARY KEY (clientes_id)
);

 INSERT INTO clientes ( clientes_id,clientes_nome,clientes_sobrenome,clientes_sexo,clientes_rg,clientes_cpf,clientes_nascimento,clientes_email,clientes_telefone,clientes_celular,clientes_senha,clientes_newsletter) VALUES ('000001', 'Ana Claudia', 'Nogueira', 'f', '432498904', '33087264830', '1982-12-25', 'anacnogueira@gmail.com', '(12) 3951-6900', '(12) 9161-8959', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1');
 INSERT INTO clientes ( clientes_id,clientes_nome,clientes_sobrenome,clientes_sexo,clientes_rg,clientes_cpf,clientes_nascimento,clientes_email,clientes_telefone,clientes_celular,clientes_senha,clientes_newsletter) VALUES ('000009', 'Rodrigo ', 'Bertozzi', 'm', '164980003', '26041269824', '1978-06-13', 'rfbertozzi@uol.com.br', '39517774', '', '59033478180d07080d5e4f3baa0099996c364162', '1');
 INSERT INTO clientes ( clientes_id,clientes_nome,clientes_sobrenome,clientes_sexo,clientes_rg,clientes_cpf,clientes_nascimento,clientes_email,clientes_telefone,clientes_celular,clientes_senha,clientes_newsletter) VALUES ('000010', 'Fábio Lúcio Coutinho Pimentel', 'Coutinho', 'm', '136319993', '26092997886', '1978-03-23', 'fabioexcb@ig.com.br', '(12) 3953-9544', '', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1');
DROP TABLE IF EXISTS clientes_cesta;
CREATE TABLE clientes_cesta (  
  clientes_cesta_id   int(10) unsigned not null   auto_increment,
  clientes_id   int(10) unsigned   ,
  clientes_cesta_quantidade   int(10) unsigned   ,
  preco_final   decimal(10,0)   ,
  clientes_cesta_data_adicionado   datetime   ,
 PRIMARY KEY (clientes_cesta_id)
);

DROP TABLE IF EXISTS clientes_end;
CREATE TABLE clientes_end (  
  clientes_end_id   int(10) unsigned not null   auto_increment,
  clientes_id   int(10) unsigned   ,
  clientes_end_nome   varchar(70) not null   ,
  clientes_logradouro   varchar(255)   ,
  clientes_numero   varchar(5)   ,
  clientes_complemento   varchar(150) not null   ,
  clientes_bairro   varchar(20)   ,
  clientes_cidade   varchar(20)   ,
  clientes_uf   varchar(2)   ,
  clientes_cep   varchar(10)   ,
  clientes_pais   varchar(20)   ,
  clientes_pri   smallint(1)   ,
 PRIMARY KEY (clientes_end_id)
);

 INSERT INTO clientes_end ( clientes_end_id,clientes_id,clientes_end_nome,clientes_logradouro,clientes_numero,clientes_complemento,clientes_bairro,clientes_cidade,clientes_uf,clientes_cep,clientes_pais,clientes_pri) VALUES ('2', '1', 'Ana Claudia Nogueira', 'Av. vale do Praiba', '414', 'teste', 'Pque Sto Antonio', 'Jacarei', 'SP', '12309000', 'Brasil', '1');
 INSERT INTO clientes_end ( clientes_end_id,clientes_id,clientes_end_nome,clientes_logradouro,clientes_numero,clientes_complemento,clientes_bairro,clientes_cidade,clientes_uf,clientes_cep,clientes_pais,clientes_pri) VALUES ('3', '1', 'Donizeti Aparecido de Souza', 'Av. vale do Praiba', '414', 'teste', 'Pque Sto Antonio', 'Jacarei', 'SP', '12309000', 'Brasil', '0');
 INSERT INTO clientes_end ( clientes_end_id,clientes_id,clientes_end_nome,clientes_logradouro,clientes_numero,clientes_complemento,clientes_bairro,clientes_cidade,clientes_uf,clientes_cep,clientes_pais,clientes_pri) VALUES ('11', '9', 'Rodrigo  Bertozzi', 'Rua Padre Eugênio', '99', '', 'Jd. Jacinto', 'Jacareí', 'SP', '12322690', 'Brasil', '1');
 INSERT INTO clientes_end ( clientes_end_id,clientes_id,clientes_end_nome,clientes_logradouro,clientes_numero,clientes_complemento,clientes_bairro,clientes_cidade,clientes_uf,clientes_cep,clientes_pais,clientes_pri) VALUES ('12', '9', 'Rodrigo', 'Rua Padre Eugênio', '135', '', 'Jd. Jacinto', 'Jacareí', 'SP', '12322690', NULL, NULL);
 INSERT INTO clientes_end ( clientes_end_id,clientes_id,clientes_end_nome,clientes_logradouro,clientes_numero,clientes_complemento,clientes_bairro,clientes_cidade,clientes_uf,clientes_cep,clientes_pais,clientes_pri) VALUES ('13', '10', 'Fábio Lúcio Coutinho Pimentel Coutinho', 'Rua Tietê', '47', '', 'Jd Paraíba', 'Jacareí', 'SP', '12327570', 'Brasil', '1');
DROP TABLE IF EXISTS clientes_historico;
CREATE TABLE clientes_historico (  
  clientes_historico_id   int(10) unsigned not null   auto_increment,
  clientes_historico_data_ultimo_logon   datetime   ,
  clientes_historico_numero_logons   int(10) unsigned   ,
  clientes_historico_data_conta_criada   datetime   ,
  clientes_historico_conta_ultima_modificacao   datetime   ,
  produtos_notificacao   int(10) unsigned   ,
  clientes_id   int(11) not null   ,
 PRIMARY KEY (clientes_historico_id),
 KEY clientes_id (clientes_id)
);

 INSERT INTO clientes_historico ( clientes_historico_id,clientes_historico_data_ultimo_logon,clientes_historico_numero_logons,clientes_historico_data_conta_criada,clientes_historico_conta_ultima_modificacao,produtos_notificacao,clientes_id) VALUES ('2', '2009-10-07 22:20:23', '21', '2008-10-03 11:27:11', '2009-10-15 16:09:48', NULL, '1');
 INSERT INTO clientes_historico ( clientes_historico_id,clientes_historico_data_ultimo_logon,clientes_historico_numero_logons,clientes_historico_data_conta_criada,clientes_historico_conta_ultima_modificacao,produtos_notificacao,clientes_id) VALUES ('10', '2009-02-13 16:12:37', '1', '2009-02-13 16:11:28', NULL, NULL, '9');
 INSERT INTO clientes_historico ( clientes_historico_id,clientes_historico_data_ultimo_logon,clientes_historico_numero_logons,clientes_historico_data_conta_criada,clientes_historico_conta_ultima_modificacao,produtos_notificacao,clientes_id) VALUES ('11', '2009-02-23 20:16:08', '1', '2009-02-23 20:11:12', NULL, NULL, '10');
DROP TABLE IF EXISTS comentarios;
CREATE TABLE comentarios (  
  comentarios_id   int(4) not null   auto_increment,
  produtos_id   int(4) not null   ,
  comentarios_nota   float   ,
  comentarios_nome   varchar(50)   ,
  comentarios_email   varchar(50)   ,
  comentarios_cidade   varchar(50)   ,
  comentarios_estado   varchar(2)   ,
  comentarios_titulo   varchar(100)   ,
  comentarios_texto   text   ,
  comentarios_data   datetime not null   ,
  comentarios_status   enum('S','N') not null   ,
  comentarios_ip   varchar(50) not null   ,
 PRIMARY KEY (comentarios_id)
);

DROP TABLE IF EXISTS formas_pagamento;
CREATE TABLE formas_pagamento (  
  formas_pagamento_id   int(10) unsigned not null   auto_increment,
  formas_pagamento_desc   varchar(50)   ,
  formas_pagamento_vezes   int(10) unsigned   ,
  formas_pagamento_vezes_juros   int(11)   ,
  formas_pagamento_vezes_valor   float   ,
  formas_pagamento_juros   float   ,
  formas_pagamento_img   varchar(100)   ,
  formas_pagamento_status   enum('S','N')   ,
 PRIMARY KEY (formas_pagamento_id)
);

 INSERT INTO formas_pagamento ( formas_pagamento_id,formas_pagamento_desc,formas_pagamento_vezes,formas_pagamento_vezes_juros,formas_pagamento_vezes_valor,formas_pagamento_juros,formas_pagamento_img,formas_pagamento_status) VALUES ('1', 'Cartão de Crédito Visa', '24', '13', '20', '1', 'Cartao_de_Credito_Visa_1.jpg', 'S');
 INSERT INTO formas_pagamento ( formas_pagamento_id,formas_pagamento_desc,formas_pagamento_vezes,formas_pagamento_vezes_juros,formas_pagamento_vezes_valor,formas_pagamento_juros,formas_pagamento_img,formas_pagamento_status) VALUES ('2', 'Cartão de Crédito Mastercard', '24', '0', '0', '0', 'Cartao_de_Credito_Mastercard_2.jpg', 'S');
 INSERT INTO formas_pagamento ( formas_pagamento_id,formas_pagamento_desc,formas_pagamento_vezes,formas_pagamento_vezes_juros,formas_pagamento_vezes_valor,formas_pagamento_juros,formas_pagamento_img,formas_pagamento_status) VALUES ('3', 'Boleto', '1', '0', '0', '0', 'Boleto_4.jpg', 'S');
DROP TABLE IF EXISTS fornecedores;
CREATE TABLE fornecedores (  
  fornecedores_id   int(10) unsigned not null   auto_increment,
  fornecedores_nome   varchar(45)   ,
  fornecedores_imagem   varchar(45)   ,
  data_adicionado   datetime   ,
  data_modificado   datetime   ,
 PRIMARY KEY (fornecedores_id)
);

 INSERT INTO fornecedores ( fornecedores_id,fornecedores_nome,fornecedores_imagem,data_adicionado,data_modificado) VALUES ('2', 'Pedigree', '', '2008-10-03 14:52:04', '2009-10-14 23:20:04');
DROP TABLE IF EXISTS grupos;
CREATE TABLE grupos (  
  grupos_id   int(10) unsigned not null   auto_increment,
  grupos_nome   varchar(20)   ,
  grupos_descricao   varchar(255)   ,
 PRIMARY KEY (grupos_id),
 KEY grupos_id (grupos_id)
);

 INSERT INTO grupos ( grupos_id,grupos_nome,grupos_descricao) VALUES ('1', 'Administradores', 'Usuários administradores do painel de controle');
 INSERT INTO grupos ( grupos_id,grupos_nome,grupos_descricao) VALUES ('2', 'Usuários Comuns', 'Usuáros sem permissão do módulo de sistema');
DROP TABLE IF EXISTS logs_historico;
CREATE TABLE logs_historico (  
  logs_historico_id   int(10) unsigned not null   auto_increment,
  users_id   int(10) unsigned default '0'   ,
  users_ip   varchar(20) not null   ,
  logs_historico_data   date not null   ,
  logs_historico_hora   time not null   ,
  submodulos_id   int(11) not null   ,
  logs_historico_operacao   varchar(45)   ,
  logs_historico_mensagem   text   ,
 PRIMARY KEY (logs_historico_id),
 KEY logs_historico_FKIndex1 (users_id)
);

 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('1', '1', '127.0.0.1', '2009-10-10', '11:45:21', '7', 'Alterar', 'Foto 1 enviada com sucesso <br />Minitura gerada com sucesso! - Produto alterado com sucesso(000005).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('2', '1', '127.0.0.1', '2009-10-14', '22:21:03', '0', 'Login', 'Login efetuado.');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('3', '1', '127.0.0.1', '2009-10-14', '22:33:33', '4', 'Cadastrar', 'Módulo cadastrado com sucesso(8).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('4', '1', '127.0.0.1', '2009-10-14', '22:33:54', '4', 'Excluir', 'Módulos(s) excluído(s) com sucesso(8).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('5', '1', '127.0.0.1', '2009-10-14', '22:38:36', '3', 'Alterar', 'Submódulo alterado com sucesso(0).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('6', '1', '127.0.0.1', '2009-10-14', '22:38:41', '3', 'Alterar', 'Submódulo alterado com sucesso(0).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('7', '1', '127.0.0.1', '2009-10-14', '22:39:31', '3', 'Cadastrar', 'Submódulo cadastrado com sucesso(28).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('8', '1', '127.0.0.1', '2009-10-14', '22:39:38', '3', 'Excluir', 'Submódulos(s) excluído(s) com sucesso(28).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('9', '1', '127.0.0.1', '2009-10-14', '22:45:00', '5', 'Alterar', 'Rotina alterada com sucesso(23).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('10', '1', '127.0.0.1', '2009-10-14', '22:48:17', '5', 'Cadastrar', 'Rotina cadastrada com sucesso(79).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('11', '1', '127.0.0.1', '2009-10-14', '22:49:20', '1', 'Alterar Autorização', ' Autorização do grupo Alterada com sucesso(1)');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('12', '1', '127.0.0.1', '2009-10-14', '22:49:39', '1', 'Alterar Autorização', ' Autorização do grupo Alterada com sucesso(1)');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('13', '1', '127.0.0.1', '2009-10-14', '22:50:05', '1', 'Alterar Autorização', ' Autorização do grupo Alterada com sucesso(1)');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('14', '1', '127.0.0.1', '2009-10-14', '22:51:21', '1', 'Alterar Autorização', ' Autorização do grupo Alterada com sucesso(1)');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('15', '1', '127.0.0.1', '2009-10-14', '22:53:03', '1', 'Alterar Autorização', ' Autorização do user Alterada com sucesso(1)');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('16', '1', '127.0.0.1', '2009-10-14', '22:54:39', '1', 'Alterar Autorização', ' Autorização do user Alterada com sucesso(1)');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('17', '1', '127.0.0.1', '2009-10-14', '22:57:35', '0', 'Logout', 'O usuário saiu do sistema.');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('18', '1', '127.0.0.1', '2009-10-14', '22:57:36', '0', 'Login', 'Login efetuado.');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('19', '1', '127.0.0.1', '2009-10-14', '22:58:30', '1', 'Alterar Autorização', ' Autorização do user Alterada com sucesso(1)');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('20', '1', '127.0.0.1', '2009-10-14', '22:59:57', '1', 'Alterar Autorização', ' Autorização do user Alterada com sucesso(1)');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('21', '1', '127.0.0.1', '2009-10-14', '23:05:34', '0', 'Logout', 'O usuário saiu do sistema.');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('22', '1', '127.0.0.1', '2009-10-14', '23:05:35', '0', 'Login', 'Login efetuado.');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('23', '1', '127.0.0.1', '2009-10-14', '23:10:24', '0', 'Logout', 'O usuário saiu do sistema.');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('24', '1', '127.0.0.1', '2009-10-14', '23:10:25', '0', 'Login', 'Login efetuado.');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('25', '1', '127.0.0.1', '2009-10-14', '23:11:19', '5', 'Alterar', 'Rotina alterada com sucesso(79).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('26', '1', '127.0.0.1', '2009-10-14', '23:16:22', '9', 'Excluir', 'Categorias(s) excluída(s) com sucesso(5).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('27', '1', '127.0.0.1', '2009-10-14', '23:20:04', '11', 'Alterar', ' Fabricante alterado com sucesso(2).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('28', '1', '127.0.0.1', '2009-10-14', '23:20:16', '11', 'Excluir', 'Fornecedores(s) excluído(s) com sucesso(1).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('29', '1', '127.0.0.1', '2009-10-14', '23:39:43', '12', 'Cadastrar', ' - Comentário cdastrado com sucesso(1).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('30', '1', '127.0.0.1', '2009-10-14', '23:41:50', '12', 'Alterar', ' Comentário alterado com sucesso(1).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('31', '1', '127.0.0.1', '2009-10-14', '23:42:55', '7', 'Alterar Status', 'Status de comentario alterado com sucesso(1).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('32', '1', '127.0.0.1', '2009-10-14', '23:42:56', '7', 'Alterar Status', 'Status de comentario alterado com sucesso(1).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('33', '1', '127.0.0.1', '2009-10-14', '23:43:08', '12', 'Excluir', 'Comentários excluído(s) com sucesso(1).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('34', '1', '127.0.0.1', '2009-10-15', '14:28:28', '0', 'Login', 'Login efetuado.');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('35', '1', '127.0.0.1', '2009-10-15', '14:37:58', '13', 'Cadastrar', 'Promoção cadastrada com sucesso(13).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('36', '1', '127.0.0.1', '2009-10-15', '14:38:52', '13', 'Alterar', 'Promoção alterada com sucesso(13).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('37', '1', '127.0.0.1', '2009-10-15', '14:39:01', '13', 'Alterar', 'Promoção alterada com sucesso(13).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('38', '1', '127.0.0.1', '2009-10-15', '14:39:28', '13', 'Excluir', 'Promoções de produtos excluído(s) com sucesso(12).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('39', '1', '127.0.0.1', '2009-10-15', '14:45:23', '5', 'Alterar', 'Rotina alterada com sucesso(77).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('40', '1', '127.0.0.1', '2009-10-15', '14:56:13', '5', 'Alterar', 'Rotina alterada com sucesso(75).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('41', '1', '127.0.0.1', '2009-10-15', '15:17:31', '27', 'Cadastrar', 'Aconteceu um erro durante o envio da imagem<br /> - Parceiro cadastrado com sucesso(3).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('42', '1', '127.0.0.1', '2009-10-15', '15:18:17', '7', 'Alterar Status', 'Status de parceiro alterado com sucesso(3).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('43', '1', '127.0.0.1', '2009-10-15', '15:18:18', '7', 'Alterar Status', 'Status de parceiro alterado com sucesso(3).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('44', '1', '127.0.0.1', '2009-10-15', '15:28:27', '5', 'Alterar', 'Rotina alterada com sucesso(76).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('45', '1', '127.0.0.1', '2009-10-15', '15:37:31', '27', 'Alterar', 'Variavel de imagem vazia. - Parceiro alterado com sucesso(1).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('46', '1', '127.0.0.1', '2009-10-15', '15:37:38', '27', 'Alterar', 'Variavel de imagem vazia. - Parceiro alterado com sucesso(1).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('47', '1', '127.0.0.1', '2009-10-15', '15:39:31', '27', 'Excluir', 'Parceiro(s) excluído(s) com sucesso(1).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('48', '1', '127.0.0.1', '2009-10-15', '15:45:01', '5', 'Alterar', 'Rotina alterada com sucesso(45).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('49', '1', '127.0.0.1', '2009-10-15', '15:51:36', '0', 'Login', 'Login efetuado.');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('50', '1', '127.0.0.1', '2009-10-15', '16:09:48', '16', 'Alterar', 'Cliente Alterado com sucesso(000001).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('51', '1', '127.0.0.1', '2009-10-15', '16:20:13', '16', 'Excluir', 'Clientes(s) excluído(s) com sucesso(000008).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('52', '1', '127.0.0.1', '2009-10-15', '16:32:40', '17', 'Excluir', 'Pedido(s) excluído(s) com sucesso(000003).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('53', '1', '127.0.0.1', '2009-10-15', '16:32:53', '17', 'Excluir', 'Pedido(s) excluído(s) com sucesso(000008).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('54', '1', '127.0.0.1', '2009-10-15', '16:40:22', '1', 'Alterar Autorização', ' Autorização do user Alterada com sucesso(1)');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('55', '1', '127.0.0.1', '2009-10-15', '16:43:04', '5', 'Alterar', 'Rotina alterada com sucesso(57).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('56', '1', '127.0.0.1', '2009-10-15', '16:45:05', '5', 'Alterar', 'Rotina alterada com sucesso(59).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('57', '1', '127.0.0.1', '2009-10-15', '16:47:53', '5', 'Alterar', 'Rotina alterada com sucesso(60).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('58', '1', '127.0.0.1', '2009-10-15', '16:48:17', '5', 'Alterar', 'Rotina alterada com sucesso(60).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('59', '1', '127.0.0.1', '2009-10-15', '16:48:50', '5', 'Alterar', 'Rotina alterada com sucesso(59).');
 INSERT INTO logs_historico ( logs_historico_id,users_id,users_ip,logs_historico_data,logs_historico_hora,submodulos_id,logs_historico_operacao,logs_historico_mensagem) VALUES ('60', '1', '127.0.0.1', '2009-10-15', '16:49:16', '0', '', 'Arquivo de backup criado(db_petshopnet_15102009.sql).');
DROP TABLE IF EXISTS modulos;
CREATE TABLE modulos (  
  modulos_id   int(10) unsigned not null   auto_increment,
  modulos_nome   varchar(50)   ,
  modulos_descricao   text   ,
  modulos_ordem   int(4)   ,
 PRIMARY KEY (modulos_id)
);

 INSERT INTO modulos ( modulos_id,modulos_nome,modulos_descricao,modulos_ordem) VALUES ('1', 'Sistema', '', '1');
 INSERT INTO modulos ( modulos_id,modulos_nome,modulos_descricao,modulos_ordem) VALUES ('3', 'Produtos', 'Visualização, cadastro e exclusão de produtos, categorias e fornecedores', '2');
 INSERT INTO modulos ( modulos_id,modulos_nome,modulos_descricao,modulos_ordem) VALUES ('4', 'Taxas', 'Módulos de taxas dos produtos.', '6');
 INSERT INTO modulos ( modulos_id,modulos_nome,modulos_descricao,modulos_ordem) VALUES ('5', 'Clientes', 'Módulo de dados dos clientes e pedidos.', '3');
 INSERT INTO modulos ( modulos_id,modulos_nome,modulos_descricao,modulos_ordem) VALUES ('6', 'Estatísticas', 'Exibe relatórios dos dados coletados no site.', '5');
 INSERT INTO modulos ( modulos_id,modulos_nome,modulos_descricao,modulos_ordem) VALUES ('7', 'Ferramentas', 'Gerencia banners e newsletters do site.', '4');
DROP TABLE IF EXISTS newsletters;
CREATE TABLE newsletters (  
  newsletters_id   int(10) unsigned not null   auto_increment,
  titulo   varchar(45)   ,
  conteudo   text   ,
  modulo   varchar(255)   ,
  data_adicionado   datetime   ,
  data_enviado   datetime   ,
  status_id   int(10) unsigned   ,
  travado   tinyint(3) unsigned   ,
 PRIMARY KEY (newsletters_id)
);

 INSERT INTO newsletters ( newsletters_id,titulo,conteudo,modulo,data_adicionado,data_enviado,status_id,travado) VALUES ('1', 'Promoção de Verão', 'Confira os produtos em promoção.
Promoção válida até 31/01/2009.', 'newsletter', '2009-01-29 15:09:39', NULL, '1', '0');
DROP TABLE IF EXISTS parceiros;
CREATE TABLE parceiros (  
  parceiros_id   int(10) unsigned not null   auto_increment,
  parceiros_razao_social   varchar(150) not null   ,
  parceiros_nome_fantasia   varchar(150) not null   ,
  parceiros_cnpj   varchar(20) not null   ,
  parceiros_valor   decimal(10,2) not null   ,
  parceiros_imagem   varchar(100)   ,
  parceiros_url   varchar(100) not null   ,
  parceiros_status   enum('S','N') not null   ,
  parceiros_nome_responsavel   varchar(150) not null   ,
  parceiros_email_responsavel   varchar(30) not null   ,
  parceiros_tel_responsavel   varchar(16) not null   ,
  parceiros_cel_responsavel   varchar(16) not null   ,
 PRIMARY KEY (parceiros_id)
);

 INSERT INTO parceiros ( parceiros_id,parceiros_razao_social,parceiros_nome_fantasia,parceiros_cnpj,parceiros_valor,parceiros_imagem,parceiros_url,parceiros_status,parceiros_nome_responsavel,parceiros_email_responsavel,parceiros_tel_responsavel,parceiros_cel_responsavel) VALUES ('2', 'pagina Inicial S/A', 'Teste 2 - Página Inicial', '', '300.00', 'Teste_2.jpg', 'http://', 'S', 'parceiro Teste2', 'teste2@teste.com.br', '(12) 9999-9999', '(12) 8888-8888');
 INSERT INTO parceiros ( parceiros_id,parceiros_razao_social,parceiros_nome_fantasia,parceiros_cnpj,parceiros_valor,parceiros_imagem,parceiros_url,parceiros_status,parceiros_nome_responsavel,parceiros_email_responsavel,parceiros_tel_responsavel,parceiros_cel_responsavel) VALUES ('3', 'Ração ME', '', '', '150.00', NULL, 'http://', 'S', 'Ana Claudia Nogueira', 'anacnogueira@gmail.com', '(12) 3951-6900', '');
DROP TABLE IF EXISTS parceiros_categorias;
CREATE TABLE parceiros_categorias (  
  parceiros_categorias_id   int(11) not null   auto_increment,
  parceiros_id   int(11) not null   ,
  categorias_id   int(11)   ,
 PRIMARY KEY (parceiros_categorias_id)
);

 INSERT INTO parceiros_categorias ( parceiros_categorias_id,parceiros_id,categorias_id) VALUES ('12', '2', '0');
DROP TABLE IF EXISTS pedido_total;
CREATE TABLE pedido_total (  
  pedido_total_id   int(10) unsigned not null   auto_increment,
  pedidos_id   int(10) unsigned   ,
  titulo   varchar(255)   ,
  texto   varchar(255)   ,
  valor_total   decimal(10,2) not null   ,
  classe   varchar(32)   ,
  ordem_pedido   int(10) unsigned   ,
 PRIMARY KEY (pedido_total_id)
);

 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('1', '1', NULL, NULL, '13.00', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('2', '2', NULL, NULL, '5.00', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('3', '3', NULL, NULL, '14.62', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('4', '4', NULL, NULL, '22.21', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('5', '1', NULL, NULL, '22.21', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('6', '1', NULL, NULL, '14.62', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('7', '2', NULL, NULL, '14.62', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('8', '3', NULL, NULL, '14.62', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('9', '4', NULL, NULL, '14.62', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('10', '5', NULL, NULL, '14.62', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('11', '6', NULL, NULL, '18.21', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('12', '7', NULL, NULL, '25.62', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('13', '8', NULL, NULL, '14.62', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('14', '9', NULL, NULL, '22.21', NULL, '1');
 INSERT INTO pedido_total ( pedido_total_id,pedidos_id,titulo,texto,valor_total,classe,ordem_pedido) VALUES ('15', '10', NULL, NULL, '14.21', NULL, '1');
DROP TABLE IF EXISTS pedidos;
CREATE TABLE pedidos (  
  pedidos_id   int(6) unsigned zerofill not null   auto_increment,
  clientes_id   int(6) unsigned zerofill   ,
  clientes_nome   varchar(64)   ,
  clientes_empressa   varchar(32)   ,
  clientes_end_id   int(10) unsigned   ,
  formas_pagamento_id   int(10) unsigned   ,
  cc_tipo   varchar(20)   ,
  cc_proprietario   varchar(64)   ,
  cc_numero   varchar(32)   ,
  cc_expira   varchar(4)   ,
  data_modificacao   datetime   ,
  data_compra   datetime   ,
  pedidos_status_id   int(6) unsigned   ,
  pedido_data_finalizacao   datetime   ,
  pedido_nosso_numero   varchar(30)   ,
  pedido_frete   decimal(10,2)   ,
  parcelas   tinyint(4)   ,
 PRIMARY KEY (pedidos_id)
);

 INSERT INTO pedidos ( pedidos_id,clientes_id,clientes_nome,clientes_empressa,clientes_end_id,formas_pagamento_id,cc_tipo,cc_proprietario,cc_numero,cc_expira,data_modificacao,data_compra,pedidos_status_id,pedido_data_finalizacao,pedido_nosso_numero,pedido_frete,parcelas) VALUES ('000001', '000001', 'Ana Claudia', NULL, '2', '3', NULL, NULL, NULL, NULL, '2009-01-21 13:53:50', '2009-01-21 13:53:50', '1', NULL, NULL, '0.00', '0');
 INSERT INTO pedidos ( pedidos_id,clientes_id,clientes_nome,clientes_empressa,clientes_end_id,formas_pagamento_id,cc_tipo,cc_proprietario,cc_numero,cc_expira,data_modificacao,data_compra,pedidos_status_id,pedido_data_finalizacao,pedido_nosso_numero,pedido_frete,parcelas) VALUES ('000002', '000001', 'Ana Claudia', NULL, '2', '3', NULL, NULL, NULL, NULL, '2009-01-21 13:56:50', '2009-01-21 13:56:50', '1', NULL, NULL, '0.00', '0');
 INSERT INTO pedidos ( pedidos_id,clientes_id,clientes_nome,clientes_empressa,clientes_end_id,formas_pagamento_id,cc_tipo,cc_proprietario,cc_numero,cc_expira,data_modificacao,data_compra,pedidos_status_id,pedido_data_finalizacao,pedido_nosso_numero,pedido_frete,parcelas) VALUES ('000004', '000001', 'Ana Claudia', NULL, '2', '3', NULL, NULL, NULL, NULL, '2009-01-21 14:15:21', '2009-01-21 14:15:21', '1', NULL, '15252440000000004-6', '9.62', '0');
 INSERT INTO pedidos ( pedidos_id,clientes_id,clientes_nome,clientes_empressa,clientes_end_id,formas_pagamento_id,cc_tipo,cc_proprietario,cc_numero,cc_expira,data_modificacao,data_compra,pedidos_status_id,pedido_data_finalizacao,pedido_nosso_numero,pedido_frete,parcelas) VALUES ('000005', '000001', 'Ana Claudia', NULL, '2', '1', NULL, NULL, NULL, NULL, '2009-01-28 15:38:30', '2009-01-28 15:38:30', '1', NULL, NULL, '9.62', '0');
 INSERT INTO pedidos ( pedidos_id,clientes_id,clientes_nome,clientes_empressa,clientes_end_id,formas_pagamento_id,cc_tipo,cc_proprietario,cc_numero,cc_expira,data_modificacao,data_compra,pedidos_status_id,pedido_data_finalizacao,pedido_nosso_numero,pedido_frete,parcelas) VALUES ('000006', '000001', 'Ana Claudia', NULL, '2', '2', NULL, NULL, NULL, NULL, '2009-01-28 15:53:30', '2009-01-28 15:53:30', '1', NULL, NULL, '10.21', '0');
 INSERT INTO pedidos ( pedidos_id,clientes_id,clientes_nome,clientes_empressa,clientes_end_id,formas_pagamento_id,cc_tipo,cc_proprietario,cc_numero,cc_expira,data_modificacao,data_compra,pedidos_status_id,pedido_data_finalizacao,pedido_nosso_numero,pedido_frete,parcelas) VALUES ('000007', '000001', 'Ana Claudia', NULL, '2', '1', NULL, NULL, NULL, NULL, '2009-01-28 15:55:13', '2009-01-28 15:55:13', '1', NULL, NULL, '9.62', '0');
 INSERT INTO pedidos ( pedidos_id,clientes_id,clientes_nome,clientes_empressa,clientes_end_id,formas_pagamento_id,cc_tipo,cc_proprietario,cc_numero,cc_expira,data_modificacao,data_compra,pedidos_status_id,pedido_data_finalizacao,pedido_nosso_numero,pedido_frete,parcelas) VALUES ('000009', '000001', 'Ana Claudia', NULL, '2', '3', NULL, NULL, NULL, NULL, '2009-02-03 13:47:25', '2009-02-03 13:47:25', '1', NULL, NULL, '10.21', '0');
 INSERT INTO pedidos ( pedidos_id,clientes_id,clientes_nome,clientes_empressa,clientes_end_id,formas_pagamento_id,cc_tipo,cc_proprietario,cc_numero,cc_expira,data_modificacao,data_compra,pedidos_status_id,pedido_data_finalizacao,pedido_nosso_numero,pedido_frete,parcelas) VALUES ('000010', '000009', 'Rodrigo ', NULL, '12', '3', NULL, NULL, NULL, NULL, '2009-02-13 16:16:22', '2009-02-13 16:16:22', '1', NULL, NULL, '10.21', '0');
DROP TABLE IF EXISTS pedidos_produtos;
CREATE TABLE pedidos_produtos (  
  pedidos_produtos_id   int(10) unsigned not null   auto_increment,
  pedidos_id   int(10) unsigned   ,
  produtos_id   int(6) unsigned zerofill not null   ,
  produtos_modelo   varchar(20)   ,
  produtos_preco   decimal(10,0)   ,
  preco_final   decimal(10,0)   ,
  produtos_taxa   decimal(10,0)   ,
  produtos_quantidade   int(10) unsigned   ,
 PRIMARY KEY (pedidos_produtos_id)
);

 INSERT INTO pedidos_produtos ( pedidos_produtos_id,pedidos_id,produtos_id,produtos_modelo,produtos_preco,preco_final,produtos_taxa,produtos_quantidade) VALUES ('1', '1', '000002', NULL, '5', '5', NULL, '1');
 INSERT INTO pedidos_produtos ( pedidos_produtos_id,pedidos_id,produtos_id,produtos_modelo,produtos_preco,preco_final,produtos_taxa,produtos_quantidade) VALUES ('2', '2', '000002', NULL, '5', '5', NULL, '1');
 INSERT INTO pedidos_produtos ( pedidos_produtos_id,pedidos_id,produtos_id,produtos_modelo,produtos_preco,preco_final,produtos_taxa,produtos_quantidade) VALUES ('3', '3', '000002', NULL, '5', '5', NULL, '1');
 INSERT INTO pedidos_produtos ( pedidos_produtos_id,pedidos_id,produtos_id,produtos_modelo,produtos_preco,preco_final,produtos_taxa,produtos_quantidade) VALUES ('4', '4', '000002', NULL, '5', '5', NULL, '1');
 INSERT INTO pedidos_produtos ( pedidos_produtos_id,pedidos_id,produtos_id,produtos_modelo,produtos_preco,preco_final,produtos_taxa,produtos_quantidade) VALUES ('5', '5', '000002', NULL, '5', '5', NULL, '1');
 INSERT INTO pedidos_produtos ( pedidos_produtos_id,pedidos_id,produtos_id,produtos_modelo,produtos_preco,preco_final,produtos_taxa,produtos_quantidade) VALUES ('6', '6', '000004', NULL, '4', '8', NULL, '2');
 INSERT INTO pedidos_produtos ( pedidos_produtos_id,pedidos_id,produtos_id,produtos_modelo,produtos_preco,preco_final,produtos_taxa,produtos_quantidade) VALUES ('7', '7', '000005', NULL, '3', '16', NULL, '5');
 INSERT INTO pedidos_produtos ( pedidos_produtos_id,pedidos_id,produtos_id,produtos_modelo,produtos_preco,preco_final,produtos_taxa,produtos_quantidade) VALUES ('8', '8', '000002', NULL, '5', '5', NULL, '1');
 INSERT INTO pedidos_produtos ( pedidos_produtos_id,pedidos_id,produtos_id,produtos_modelo,produtos_preco,preco_final,produtos_taxa,produtos_quantidade) VALUES ('9', '9', '000004', NULL, '4', '12', NULL, '3');
 INSERT INTO pedidos_produtos ( pedidos_produtos_id,pedidos_id,produtos_id,produtos_modelo,produtos_preco,preco_final,produtos_taxa,produtos_quantidade) VALUES ('10', '10', '000004', NULL, '4', '4', NULL, '1');
DROP TABLE IF EXISTS pedidos_produtos_atributos;
CREATE TABLE pedidos_produtos_atributos (  
  pedidos_produtos_atributos_id   int(10) unsigned not null   auto_increment,
  pedidos_id   int(10) unsigned   ,
  produtos_opcoes   varchar(32)   ,
  produtos_opcoes_valores   varchar(32)   ,
  produtos_valores_preco   decimal(10,0)   ,
 PRIMARY KEY (pedidos_produtos_atributos_id)
);

DROP TABLE IF EXISTS pedidos_status;
CREATE TABLE pedidos_status (  
  pedidos_status_id   int(10) unsigned not null   auto_increment,
  pedidos_status_nome   varchar(64)   ,
 PRIMARY KEY (pedidos_status_id)
);

 INSERT INTO pedidos_status ( pedidos_status_id,pedidos_status_nome) VALUES ('1', 'Pendente');
 INSERT INTO pedidos_status ( pedidos_status_id,pedidos_status_nome) VALUES ('2', 'Processando');
 INSERT INTO pedidos_status ( pedidos_status_id,pedidos_status_nome) VALUES ('3', 'Enviado');
 INSERT INTO pedidos_status ( pedidos_status_id,pedidos_status_nome) VALUES ('4', 'Cancelado');
DROP TABLE IF EXISTS pedidos_status_historico;
CREATE TABLE pedidos_status_historico (  
  pedidos_status_historico_id   int(10) unsigned not null   auto_increment,
  pedidos_id   int(10) unsigned   ,
  pedidos_status_id   int(10) unsigned   ,
  data_adicionado   datetime   ,
  cliente_notificado   tinyint(3) unsigned   ,
  comentarios   text   ,
 PRIMARY KEY (pedidos_status_historico_id)
);

 INSERT INTO pedidos_status_historico ( pedidos_status_historico_id,pedidos_id,pedidos_status_id,data_adicionado,cliente_notificado,comentarios) VALUES ('1', '1', '1', '2009-01-21 13:53:51', '1', NULL);
 INSERT INTO pedidos_status_historico ( pedidos_status_historico_id,pedidos_id,pedidos_status_id,data_adicionado,cliente_notificado,comentarios) VALUES ('2', '2', '1', '2009-01-21 13:56:51', '1', NULL);
 INSERT INTO pedidos_status_historico ( pedidos_status_historico_id,pedidos_id,pedidos_status_id,data_adicionado,cliente_notificado,comentarios) VALUES ('4', '4', '1', '2009-01-21 14:15:21', '1', NULL);
 INSERT INTO pedidos_status_historico ( pedidos_status_historico_id,pedidos_id,pedidos_status_id,data_adicionado,cliente_notificado,comentarios) VALUES ('5', '5', '1', '2009-01-28 15:38:30', '1', NULL);
 INSERT INTO pedidos_status_historico ( pedidos_status_historico_id,pedidos_id,pedidos_status_id,data_adicionado,cliente_notificado,comentarios) VALUES ('6', '6', '1', '2009-01-28 15:53:30', '1', NULL);
 INSERT INTO pedidos_status_historico ( pedidos_status_historico_id,pedidos_id,pedidos_status_id,data_adicionado,cliente_notificado,comentarios) VALUES ('7', '7', '1', '2009-01-28 15:55:13', '1', NULL);
 INSERT INTO pedidos_status_historico ( pedidos_status_historico_id,pedidos_id,pedidos_status_id,data_adicionado,cliente_notificado,comentarios) VALUES ('17', '9', '1', '2009-02-03 13:47:25', '1', NULL);
 INSERT INTO pedidos_status_historico ( pedidos_status_historico_id,pedidos_id,pedidos_status_id,data_adicionado,cliente_notificado,comentarios) VALUES ('18', '10', '1', '2009-02-13 16:16:22', '1', NULL);
 INSERT INTO pedidos_status_historico ( pedidos_status_historico_id,pedidos_id,pedidos_status_id,data_adicionado,cliente_notificado,comentarios) VALUES ('19', '10', '1', '2009-02-13 16:33:08', '1', 'Produto está em falta');
DROP TABLE IF EXISTS produtos;
CREATE TABLE produtos (  
  produtos_id   int(6) unsigned zerofill not null   auto_increment,
  produtos_nome   varchar(100) not null   ,
  produtos_descricao   text not null   ,
  produtos_quantidade   int(10) unsigned   ,
  produtos_modelo   varchar(20)   ,
  produtos_imagem   varchar(255)   ,
  produtos_preco   decimal(10,2)   ,
  produtos_data_adicionado   datetime   ,
  produtos_data_modificado   datetime   ,
  produtos_data_disponivel   datetime   ,
  produtos_peso   decimal(10,2)   ,
  produtos_status   enum('S','N')   ,
  fornecedores_id   int(10) unsigned   ,
  produtos_pedidos   int(10) unsigned   ,
  taxas_id   int(11) default '0'   ,
  produtos_destaque   tinyint(1) default '0'   ,
  produtos_visto   int(11) default '0' not null   ,
 PRIMARY KEY (produtos_id)
);

 INSERT INTO produtos ( produtos_id,produtos_nome,produtos_descricao,produtos_quantidade,produtos_modelo,produtos_imagem,produtos_preco,produtos_data_adicionado,produtos_data_modificado,produtos_data_disponivel,produtos_peso,produtos_status,fornecedores_id,produtos_pedidos,taxas_id,produtos_destaque,produtos_visto) VALUES ('000005', 'OSSO CANELA S/CAB.', '<p>Palito de carne/n&atilde;o contem gordura, rico em prote&iacute;nas, limpa os dentes e controla o t&aacute;rtaro, excelente p/ gengivas, controla o h&aacute;lito.</p>', '50', '654321', 'OSSO_5.jpg', '7.00', '2008-10-03 15:04:48', '2009-10-10 11:45:21', '2008-10-03 00:00:00', '0.20', 'N', '1', NULL, '0', '1', '6');
 INSERT INTO produtos ( produtos_id,produtos_nome,produtos_descricao,produtos_quantidade,produtos_modelo,produtos_imagem,produtos_preco,produtos_data_adicionado,produtos_data_modificado,produtos_data_disponivel,produtos_peso,produtos_status,fornecedores_id,produtos_pedidos,taxas_id,produtos_destaque,produtos_visto) VALUES ('000006', 'Ração Pedigree delícia teste', 'Ração pedigree delícia teste hum ... ', '10', '000111222', 'Racao_6.jpg', '7.00', '2009-02-13 16:38:07', '2009-03-19 11:32:18', '2009-02-13 00:00:00', '1.00', 'S', '2', NULL, '0', '1', '3');
 INSERT INTO produtos ( produtos_id,produtos_nome,produtos_descricao,produtos_quantidade,produtos_modelo,produtos_imagem,produtos_preco,produtos_data_adicionado,produtos_data_modificado,produtos_data_disponivel,produtos_peso,produtos_status,fornecedores_id,produtos_pedidos,taxas_id,produtos_destaque,produtos_visto) VALUES ('000007', 'Raçao Teste', 'Produto Teste', '5', '123456', NULL, '1.00', '2009-06-18 10:25:31', '2009-06-18 10:31:33', '2009-06-18 00:00:00', '1.00', 'S', '1', NULL, '0', '0', '0');
 INSERT INTO produtos ( produtos_id,produtos_nome,produtos_descricao,produtos_quantidade,produtos_modelo,produtos_imagem,produtos_preco,produtos_data_adicionado,produtos_data_modificado,produtos_data_disponivel,produtos_peso,produtos_status,fornecedores_id,produtos_pedidos,taxas_id,produtos_destaque,produtos_visto) VALUES ('000008', 'Raçao Teste 2', 'Raçao teste 2', '2', '123457', NULL, '1.00', '2009-06-18 10:27:40', '2009-06-18 10:33:48', '2009-06-18 00:00:00', '1.00', 'S', '1', NULL, '0', '0', '1');
 INSERT INTO produtos ( produtos_id,produtos_nome,produtos_descricao,produtos_quantidade,produtos_modelo,produtos_imagem,produtos_preco,produtos_data_adicionado,produtos_data_modificado,produtos_data_disponivel,produtos_peso,produtos_status,fornecedores_id,produtos_pedidos,taxas_id,produtos_destaque,produtos_visto) VALUES ('000009', 'Produto Teste', 'teste', '10', '123456', NULL, '1.20', '2009-08-20 19:45:07', '2009-08-20 19:45:07', '2009-09-21 00:00:00', '1.20', 'S', '1', NULL, '0', '1', '0');
 INSERT INTO produtos ( produtos_id,produtos_nome,produtos_descricao,produtos_quantidade,produtos_modelo,produtos_imagem,produtos_preco,produtos_data_adicionado,produtos_data_modificado,produtos_data_disponivel,produtos_peso,produtos_status,fornecedores_id,produtos_pedidos,taxas_id,produtos_destaque,produtos_visto) VALUES ('000011', 'Areia higiênica', '&lt;p&gt;Areia &lt;strong&gt;higi&amp;ecirc;nica&lt;/strong&gt;&lt;/p&gt;', '10', '123456', NULL, '1.50', '2009-10-10 09:00:34', '2009-10-10 09:00:34', '2009-10-10 00:00:00', '2.00', 'S', '1', NULL, '0', '1', '0');
 INSERT INTO produtos ( produtos_id,produtos_nome,produtos_descricao,produtos_quantidade,produtos_modelo,produtos_imagem,produtos_preco,produtos_data_adicionado,produtos_data_modificado,produtos_data_disponivel,produtos_peso,produtos_status,fornecedores_id,produtos_pedidos,taxas_id,produtos_destaque,produtos_visto) VALUES ('000012', 'Areia higiênica', '&lt;p&gt;Areia &lt;strong&gt;higi&amp;ecirc;nica&lt;/strong&gt;&lt;/p&gt;', '10', '123456', NULL, '1.50', '2009-10-10 09:01:52', '2009-10-10 09:01:52', '2009-10-10 00:00:00', '2.00', 'S', '0', NULL, '0', '1', '0');
 INSERT INTO produtos ( produtos_id,produtos_nome,produtos_descricao,produtos_quantidade,produtos_modelo,produtos_imagem,produtos_preco,produtos_data_adicionado,produtos_data_modificado,produtos_data_disponivel,produtos_peso,produtos_status,fornecedores_id,produtos_pedidos,taxas_id,produtos_destaque,produtos_visto) VALUES ('000013', 'Pá limpeza', '&lt;p&gt;teste de limpeza&lt;/p&gt;', '20', '123456', NULL, '1.00', '2009-10-10 09:03:38', '2009-10-10 09:03:38', '2009-10-17 00:00:00', '0.01', 'S', '1', NULL, '0', '0', '0');
DROP TABLE IF EXISTS produtos_categoria;
CREATE TABLE produtos_categoria (  
  produtos_categoria_id   int(10) unsigned not null   auto_increment,
  produtos_id   int(10) unsigned   ,
  categorias_id   int(10) unsigned   ,
 PRIMARY KEY (produtos_categoria_id)
);

 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('107', '6', '21');
 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('108', '6', '9');
 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('109', '6', '30');
 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('133', '7', '3');
 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('134', '7', '5');
 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('135', '7', '18');
 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('138', '8', '3');
 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('139', '8', '4');
 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('141', '11', '21');
 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('142', '12', '21');
 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('143', '13', '8');
 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('144', '13', '21');
 INSERT INTO produtos_categoria ( produtos_categoria_id,produtos_id,categorias_id) VALUES ('155', '5', '4');
DROP TABLE IF EXISTS produtos_frete;
CREATE TABLE produtos_frete (  
  produtos_frete_id   int(11) not null   auto_increment,
  produtos_id   int(11) not null   ,
  produtos_frete_gratis   enum('S','N') not null   ,
  produtos_frete_ini   datetime   ,
  produtos_frete_fin   datetime   ,
 PRIMARY KEY (produtos_frete_id)
);

 INSERT INTO produtos_frete ( produtos_frete_id,produtos_id,produtos_frete_gratis,produtos_frete_ini,produtos_frete_fin) VALUES ('1', '11', 'N', NULL, NULL);
 INSERT INTO produtos_frete ( produtos_frete_id,produtos_id,produtos_frete_gratis,produtos_frete_ini,produtos_frete_fin) VALUES ('2', '12', 'N', NULL, NULL);
 INSERT INTO produtos_frete ( produtos_frete_id,produtos_id,produtos_frete_gratis,produtos_frete_ini,produtos_frete_fin) VALUES ('3', '13', 'N', NULL, NULL);
DROP TABLE IF EXISTS produtos_imagens;
CREATE TABLE produtos_imagens (  
  produtos_id   int(4) not null   ,
  produtos_imagem   varchar(100) not null   
);

 INSERT INTO produtos_imagens ( produtos_id,produtos_imagem) VALUES ('3', 'BISCROK_MARROBONE_500GR_1_000003.jpg');
 INSERT INTO produtos_imagens ( produtos_id,produtos_imagem) VALUES ('14', 'Racao_Kitten_Persian_32_1_14.jpg');
 INSERT INTO produtos_imagens ( produtos_id,produtos_imagem) VALUES ('14', 'Racao_Kitten_Persian_32_2_14.jpg');
 INSERT INTO produtos_imagens ( produtos_id,produtos_imagem) VALUES ('4', 'LT_330GR_MOLHO_CARNE_1_000004.jpg');
 INSERT INTO produtos_imagens ( produtos_id,produtos_imagem) VALUES ('5', 'OSSO_CANELA_SCAB__1_000005.jpg');
DROP TABLE IF EXISTS produtos_nota;
CREATE TABLE produtos_nota (  
  produtos_nota_id   int(10) unsigned not null   auto_increment,
  clientes_id   int(10) unsigned   ,
  produtos_nota_nota   smallint(5) unsigned   ,
  produtos_nota_desc   tinytext   ,
  produtos_id   int(11) not null   ,
  data_adicionado   date not null   ,
  produtos_nota_ip   varchar(20)   ,
 PRIMARY KEY (produtos_nota_id)
);

 INSERT INTO produtos_nota ( produtos_nota_id,clientes_id,produtos_nota_nota,produtos_nota_desc,produtos_id,data_adicionado,produtos_nota_ip) VALUES ('1', '0', '4', NULL, '4', '2008-10-03', '127.0.0.1');
 INSERT INTO produtos_nota ( produtos_nota_id,clientes_id,produtos_nota_nota,produtos_nota_desc,produtos_id,data_adicionado,produtos_nota_ip) VALUES ('2', '0', '5', NULL, '4', '2009-03-24', '189.19.25.204');
DROP TABLE IF EXISTS produtos_notificacoes;
CREATE TABLE produtos_notificacoes (  
  produtos_notificacoes   int(11) not null   auto_increment,
  clientes_id   int(11) not null   ,
  produtos_id   int(11) not null   ,
  data_adicionado   datetime not null   ,
 PRIMARY KEY (produtos_notificacoes)
);

DROP TABLE IF EXISTS produtos_opcoes;
CREATE TABLE produtos_opcoes (  
  produtos_opcoes_id   int(10) unsigned not null   auto_increment,
  produtos_opcoes_nome   varchar(32)   ,
 PRIMARY KEY (produtos_opcoes_id)
);

DROP TABLE IF EXISTS produtos_opcoes_valores;
CREATE TABLE produtos_opcoes_valores (  
  produtos_opcoes_valores_id   int(10) unsigned not null   auto_increment,
  produtos_opcoes_valores_desc   varchar(45)   ,
 PRIMARY KEY (produtos_opcoes_valores_id)
);

DROP TABLE IF EXISTS produtos_opcoes_valores_prod;
CREATE TABLE produtos_opcoes_valores_prod (  
  produtos_opcoes_valores_prod_id   int(10) unsigned not null   auto_increment,
  produtos_opcoes_id   int(10) unsigned   ,
  produtos_opcoes_valores   varchar(255)   ,
  produtos_id   int(11) not null   ,
 PRIMARY KEY (produtos_opcoes_valores_prod_id)
);

DROP TABLE IF EXISTS produtos_relacionamentos;
CREATE TABLE produtos_relacionamentos (  
  produtos_id   int(4) not null   ,
  palavra_chave   varchar(100) not null   
);

 INSERT INTO produtos_relacionamentos ( produtos_id,palavra_chave) VALUES ('11', '');
 INSERT INTO produtos_relacionamentos ( produtos_id,palavra_chave) VALUES ('12', '');
 INSERT INTO produtos_relacionamentos ( produtos_id,palavra_chave) VALUES ('13', '');
 INSERT INTO produtos_relacionamentos ( produtos_id,palavra_chave) VALUES ('5', '');
DROP TABLE IF EXISTS promocoes;
CREATE TABLE promocoes (  
  promocoes_id   int(10) unsigned not null   auto_increment,
  produtos_id   int(10) unsigned   ,
  promocoes_preco   decimal(10,2)   ,
  promocoes_data_adicionado   datetime   ,
  promocoes_ultima_modificacao   datetime   ,
  expira_data   datetime   ,
  data_status_mudanca   datetime   ,
  promocoes_status   enum('S','N')   ,
 PRIMARY KEY (promocoes_id)
);

 INSERT INTO promocoes ( promocoes_id,produtos_id,promocoes_preco,promocoes_data_adicionado,promocoes_ultima_modificacao,expira_data,data_status_mudanca,promocoes_status) VALUES ('1', '1', '1.18', '2008-02-04 11:37:48', '2008-02-04 11:38:00', NULL, NULL, 'S');
 INSERT INTO promocoes ( promocoes_id,produtos_id,promocoes_preco,promocoes_data_adicionado,promocoes_ultima_modificacao,expira_data,data_status_mudanca,promocoes_status) VALUES ('3', '2', '10.61', '2008-10-03 14:54:33', '2009-10-10 09:34:05', NULL, NULL, 'S');
 INSERT INTO promocoes ( promocoes_id,produtos_id,promocoes_preco,promocoes_data_adicionado,promocoes_ultima_modificacao,expira_data,data_status_mudanca,promocoes_status) VALUES ('9', '5', '3.20', '2008-10-24 22:51:27', '2008-10-24 22:51:42', NULL, NULL, 'S');
 INSERT INTO promocoes ( promocoes_id,produtos_id,promocoes_preco,promocoes_data_adicionado,promocoes_ultima_modificacao,expira_data,data_status_mudanca,promocoes_status) VALUES ('10', '11', NULL, '2009-10-10 09:00:34', NULL, NULL, NULL, 'N');
 INSERT INTO promocoes ( promocoes_id,produtos_id,promocoes_preco,promocoes_data_adicionado,promocoes_ultima_modificacao,expira_data,data_status_mudanca,promocoes_status) VALUES ('11', '12', NULL, '2009-10-10 09:01:52', NULL, NULL, NULL, 'N');
 INSERT INTO promocoes ( promocoes_id,produtos_id,promocoes_preco,promocoes_data_adicionado,promocoes_ultima_modificacao,expira_data,data_status_mudanca,promocoes_status) VALUES ('13', '6', '5.40', '2009-10-15 14:37:58', '2009-10-15 14:39:01', '2009-10-18 00:00:00', NULL, 'S');
DROP TABLE IF EXISTS rotinas;
CREATE TABLE rotinas (  
  rotinas_id   int(10) unsigned not null   auto_increment,
  rotinas_nome   varchar(50) not null   ,
  rotinas_descricao   text   ,
  submodulos_id   int(10) unsigned   ,
  rotinas_pagina   varchar(50)   ,
  rotinas_quantidade   tinyint(3) unsigned   ,
  rotinas_visivel   char(1) not null   ,
  rotinas_ordem   int(4)   ,
  btn_imagem   varchar(30)   ,
 PRIMARY KEY (rotinas_id),
 KEY rotinas_FKIndex1 (submodulos_id)
);

 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('1', 'Cadastrar', 'Cadastro de usuários do sistema.', '1', 'users_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('2', 'Cadastrar', 'Cadastro de rotinas dos módulos.', '5', 'rotinas_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('3', 'Alterar', 'Altera usuários do sistema.', '1', 'users_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('4', 'Alterar Autorização', 'Altera autorizações de usuários.', '1', 'autorizacoes_alterar.php', '1', 's', '3', 'btn_lock_go.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('5', 'Excluir', 'Exclui um ou mais usuários do sistema.', '1', 'users_excluir.php', '2', 's', '4', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('6', 'Cadastrar', 'Cadastra grupos de usuários do sistema.', '2', 'grupos_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('7', 'Alterar', 'Altera grupos de usuários do sistema.', '2', 'grupos_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('8', 'Alterar Autorização', 'Altera autorizações de grupos de usuários do sistema.', '2', 'autorizacoes_alterar.php', '1', 's', '3', 'btn_lock_go.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('9', 'Excluir', 'Exclui grupos de usuários do sistema.', '2', 'grupos_excluir.php', '2', 's', '4', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('10', 'Cadastrar', 'Cadastra módulos no sistema.', '4', 'modulos_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('11', 'Alterar', 'Altera os módulos do sistema.', '4', 'modulos_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('12', 'Excluir', 'Exclui um ou mais módulos do sistema.', '4', 'modulos_excluir.php', '2', 's', '3', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('13', 'Cadastrar', 'Cadastra submódulos no sistema.', '3', 'submodulos_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('14', 'Alterar', 'Altera submódulos do sistema.', '3', 'submodulos_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('15', 'Excluir', 'Exclui um ou mais submódulos do  sistema.', '3', 'submodulos_excluir.php', '2', 's', '3', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('16', 'Alterar', 'Altera rotinas dos módulos do sistema.', '5', 'rotinas_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('17', 'Excluir', 'Exclui uma ou mais rotinas dos submódulos do sistema.', '5', 'rotinas_excluir.php', '2', 's', '3', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('18', 'Pesquisar', 'Filtro avançado de Logs.', '6', 'logs_pesquisar.php', '0', 's', '1', 'xmag.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('19', 'Cadastrar', 'Cadastro de produtos em estoque.', '7', 'produtos_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('20', 'Cadastrar', 'Cadastra os fabricantes dos produtos.', '11', 'fabricantes_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('21', 'Alterar', 'Altera as informações dos fabricantes dos produtos.', '11', 'fabricantes_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('22', 'Excluir', 'Exclui os fabricantes de produtos.', '11', 'fabricantes_excluir.php', '2', 's', '3', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('23', 'Cadastrar Categoria raiz', 'Cadastra as categorias dos produtos', '9', 'categorias_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('24', 'Alterar', 'Altera as categorias dos produtos.', '9', 'categorias_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('25', 'Excluir', 'Exclui as categorias dos produtos', '9', 'categorias_excluir.php', '2', 's', '3', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('29', 'Cadastrar', 'Cadastra as classes de taxas dos produtos', '15', 'taxas_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('30', 'Alterar', 'Alterar taxas de produtos.', '15', 'taxas_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('31', 'Excluir', 'Excluir taxas de produtos', '15', 'taxas_excluir.php', '2', 's', '3', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('32', 'Alterar', 'Altera os dados de um produto.', '7', 'produtos_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('33', 'Excluir', 'Exclui um ou mais produtos.', '7', 'produtos_excluir.php', '2', 's', '3', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('34', 'Cadastrar', 'Cadastro de simulação de comentário de cliente.', '12', 'comentarios_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('35', 'Alterar', 'Exclui um comentário de produto.', '12', 'comentarios_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('36', 'Excluir', 'Exclui um ou mais comentários de produtos.', '12', 'comentarios_excluir.php', '2', 's', '3', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('37', 'Cadastrar', 'Cadastra as promoções de produtos.', '13', 'promocoes_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('38', 'Alterar', 'Altera uma promoção.', '13', 'promocoes_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('39', 'Excluir', 'Exclui uma ou mais promoções.', '13', 'promocoes_excluir.php', '2', 's', '3', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('40', 'Alterar Status', 'Altera o status das prmoções', '13', 'promoções_alterar_status.php', '0', 'n', '4', '');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('41', 'Alterar', 'Altera os valores do produtos', '14', 'produtos_alterar.php', '1', 's', '1', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('42', 'Excluir', 'Exclui um ou mais produtos', '14', 'produtos_excluir.php', '2', 's', '2', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('43', 'Alterar Status', 'Altera o status do produto para em estoque ou fora de estoque.', '7', 'alterar_status.php', '0', 'n', '4', '');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('44', 'Cadastrar', 'Cadastro de teste de clientes.', '16', 'clientes_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('45', 'Alterar', 'Altera Informações do cliente.', '16', 'clientes_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('46', 'Excluir', 'Exclui um ou mais clientes.', '16', 'clientes_excluir.php', '2', 's', '3', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('47', 'Visualizar', 'Visualiza as informações do cliente.', '16', 'clientes_visualizar.php', '1', 's', '4', 'xmag.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('48', 'Enviar e-mail', 'Envia e-mails para clientes selecionados.', '16', 'clientes_send_mail.php', '2', 's', '5', 'email.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('49', 'Detalhes', '', '6', 'logs_detalhes.php', '0', 'n', '2', '');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('50', 'Pedidos', 'Verificar os pedidos do clientes.', '16', 'pedidos_listar.php', '1', 's', '6', 'ferramentas.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('51', 'Alterar', 'Altera as informações dos pedidos dos clientes.', '17', 'pedidos_alterar.php', '1', 's', '1', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('52', 'Fatura', 'Mostra a fatura dos pedidos.', '17', 'pedidos_fatura.php', '1', 's', '3', '');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('53', 'Guia', 'Packing list dos pedidos.', '17', 'pedidos_packing_list.php', '1', 's', '2', '');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('54', 'Excluir', 'Exclui um ou mais pedidos de clientes.', '17', 'pedidos_excluir.php', '2', 's', '4', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('55', 'Alterar Senha', 'Alteração do usuário corrente do sistema.', '1', 'senha_alterar.php', '0', 'n', '6', '');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('56', 'Alterar', 'Alterar validação de convêniados Interodonto', '18', 'conveniados_alterar.php', '1', 's', NULL, NULL);
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('57', 'Fazer cópia', 'Gera uma cópia do banco de dados.', '22', 'backup_copia.php', '0', 's', '1', 'btn_copia_bd.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('58', 'Restaurar do Servidor', 'Restaura o banco de dados a partir de um arquivo de backup localizado no Servidor.', '22', 'backup_restaurar_server.php', '1', 's', '2', 'restore_db_server.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('59', 'Excluir', 'Excluir um ou mais arquivos de backup.', '22', 'backup_excluir.php', '2', 's', '4', '_db.gif');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('60', 'Restaurar Local', 'Restatura o banco de dados a partir de um arquivo localizado no computador local.', '22', 'backup_restaurar_local.php', '0', 's', '3', 'restore_db_local.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('61', 'Cadastrar', 'Cadastra os banners que irão apararecer no site.', '23', 'banners_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('62', 'Alterar', 'Altera um banner cadastrado no site.', '23', 'banners_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('63', 'Alterar Status', 'Altera o status do banner.', '23', 'banners_alterar_status.php', '1', 'n', '4', '');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('64', 'Excluir', 'Excluí um ou mais banners cadastrados.', '23', 'banners_excluir.php', '2', 's', '3', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('65', 'Cadastrar', 'Cadastra uma nova newsletter.', '25', 'newsletters_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('66', 'Alterar', 'Altera uma newsletter.', '25', 'newsletters_alterar.php', '1', 's', '2', '');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('67', 'Pré-Visualizar', 'Visualiza uma newsletter.', '25', 'newsletters_visualizar.php', '1', 's', '3', 'xmag.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('68', 'Enviar', 'Envia a newsletter para um ou mais clientes.', '25', 'newsletters_enviar.php', '1', 's', '5', 'send_email.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('69', 'Excluir', 'Exclui uma ou mais newsletter.', '25', 'newsletters_excluir.php', '2', 's', '6', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('70', 'Bloquear/Desbloquear Newsletter', 'Bloqueia ou desbloqueia uma newsletter.', '25', 'newsletters_alterar_status.php', '1', 'n', '4', 'locked.gif');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('73', 'Alterar Dados', '', '1', 'dados_alterar.php', '0', 'n', '5', '');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('74', 'Detalhes', '', '26', 'whos_detalhes.php', '0', 'n', '1', '');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('75', 'Cadastrar', '', '27', 'parceiros_cadastrar.php', '0', 's', '1', 'btn_novo.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('76', 'Alterar', '', '27', 'parceiros_alterar.php', '1', 's', '2', 'btn_edit.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('77', 'Alterar Status', '', '27', 'alterar_status.php', '0', 'n', '4', '');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('78', 'Excluir', '', '27', 'parceiros_excluir.php', '2', 's', '3', 'btn_excluir2.png');
 INSERT INTO rotinas ( rotinas_id,rotinas_nome,rotinas_descricao,submodulos_id,rotinas_pagina,rotinas_quantidade,rotinas_visivel,rotinas_ordem,btn_imagem) VALUES ('79', 'Cadastrar Subcategoria', '', '9', 'categorias_cadastrar.php', '1', 's', '4', 'btn_add_sub.png');
DROP TABLE IF EXISTS submodulos;
CREATE TABLE submodulos (  
  submodulos_id   int(10) unsigned not null   auto_increment,
  submodulos_nome   varchar(50)   ,
  submodulos_descricao   text not null   ,
  submodulos_pagina   varchar(50)   ,
  modulos_id   int(10) unsigned   ,
  submodulos_ordem   int(4)   ,
 PRIMARY KEY (submodulos_id),
 KEY submodulos_FKIndex1 (modulos_id)
);

 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('1', 'Usuarios', '', 'users_listar.php', '1', '1');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('2', 'Grupos', '', 'grupos_listar.php', '1', '2');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('3', 'Submódulos', 'ubmódulos', 'submodulos_listar.php', '1', '4');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('4', 'Módulos', '', 'modulos_listar.php', '1', '3');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('5', 'Rotinas', '', 'rotinas_listar.php', '1', '5');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('6', 'Logs', '', 'logs_listar.php', '1', '6');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('7', 'Produtos', 'Visualização e filtro dos produtos cadastrados.', 'produtos_listar.php', '3', '1');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('9', 'Categorias', '&lt;p&gt;&amp;lt;p&amp;gt;Gerencia as categorias dos produtos.&amp;lt;/p&amp;gt;&lt;/p&gt;', 'categorias_listar.php', '3', '2');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('11', 'Fabricantes', 'Gerencia os fabricantes de produtos.', 'fabricantes_listar.php', '3', '4');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('12', 'Comentários', 'Exibe os comentários dos clientes dos produtos.', 'comentarios_listar.php', '3', '5');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('13', 'Promoções', 'Gerencia as promoções de produtos.', 'promocoes_listar.php', '3', '6');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('14', 'Produtos Esperados', 'Exibe os produtos esperados para estoque.', 'produtos_esperados_listar.php', '3', '7');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('15', 'Classes de taxa', 'Gerencia as taxas de produtos.', 'taxas_listar.php', '4', '1');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('16', 'Clientes', 'gerencia os dados dos clientes.', 'clientes_listar.php', '5', '1');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('17', 'Pedidos', 'Gerencia os pedidos dos clientes.', 'pedidos_listar.php', '5', '2');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('19', 'Produtos Mais Comprados', 'Mostra um relatório dos produtos mais comprados.', 'produtos_mais_comprados.php', '6', '2');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('20', 'Produtos mais vistos', 'Mostra os produtos mais vistos no site.', 'produtos_vistos_listar.php', '6', '1');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('21', 'Total de pedidos por cliente', 'Relatório do total de pediso por clientes.', 'pedidos_clientes.php', '6', '3');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('22', 'Cópia do Banco de dados', 'Faz cópias do banco de dados para que possa ser restaurado caso seja necessário.', 'backup_listar.php', '7', '1');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('23', 'Gerenciador de Banners', 'Mostra os banners cadastrados.', 'banners_listar.php', '7', '2');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('24', 'Enviar e-mail', 'Faz envio de e-mails para clientes.', 'email_enviar.php', '6', '3');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('25', 'Gerenciador de newsletter', 'Lista as newsletters cadastradas no site.', 'newsletter_listar.php', '7', '4');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('26', 'Quem está online?', 'Mostra os atuais clientes online no site.', 'whos_listar.php', '7', '5');
 INSERT INTO submodulos ( submodulos_id,submodulos_nome,submodulos_descricao,submodulos_pagina,modulos_id,submodulos_ordem) VALUES ('27', 'Parceiros', 'Parceiros do site', 'parceiros_listar.php', '3', '8');
DROP TABLE IF EXISTS taxas;
CREATE TABLE taxas (  
  taxas_id   int(10) unsigned not null   auto_increment,
  taxas_nome   varchar(20)   ,
  taxas_preco   decimal(10,2)   ,
  ultima_modificacao   datetime   ,
  data_adicionado   datetime   ,
 PRIMARY KEY (taxas_id)
);

DROP TABLE IF EXISTS users;
CREATE TABLE users (  
  users_id   int(10) unsigned not null   auto_increment,
  users_nome   varchar(45)   ,
  users_senha   varchar(100) not null   ,
  grupos_id   int(10) unsigned   ,
  users_email   varchar(60)   ,
  users_cpf   varchar(16)   ,
  users_autorizacao_especial   tinyint(3) unsigned   ,
  users_primeiro_login   tinyint(3) unsigned   ,
  users_data_criacao   datetime   ,
  users_data_modificacao   datetime   ,
 PRIMARY KEY (users_id),
 KEY users_FKIndex1 (grupos_id)
);

 INSERT INTO users ( users_id,users_nome,users_senha,grupos_id,users_email,users_cpf,users_autorizacao_especial,users_primeiro_login,users_data_criacao,users_data_modificacao) VALUES ('1', 'Ana Claudia', 'f6efb8b80b052cea58b768646242d07d8dbefd0a', '1', 'anacnogueira@gmail.com', '33087264830', '1', '0', '2007-09-04 20:57:09', '2009-10-10 08:06:30');
DROP TABLE IF EXISTS users_sessoes;
CREATE TABLE users_sessoes (  
  users_id   int(11) default '0' not null   ,
  users_sessoes_num   int(6) unsigned zerofill not null   ,
 PRIMARY KEY (users_id),
 KEY users_id (users_id)
);

 INSERT INTO users_sessoes ( users_id,users_sessoes_num) VALUES ('1', '000062');
DROP TABLE IF EXISTS usuarios_online;
CREATE TABLE usuarios_online (  
  usuarios_online_id   int(10) unsigned not null   auto_increment,
  clientes_id   int(11) not null   ,
  nome_completo   varchar(45)   ,
  sessao_id   varchar(128)   ,
  ip_address   varchar(16)   ,
  hora_entrada   varchar(14)   ,
  hora_ultimo_click   varchar(14)   ,
  ultima_pagina_url   varchar(255)   ,
 PRIMARY KEY (usuarios_online_id)
);

 INSERT INTO usuarios_online ( usuarios_online_id,clientes_id,nome_completo,sessao_id,ip_address,hora_entrada,hora_ultimo_click,ultima_pagina_url) VALUES ('3', '1', ' Ana Claudia', 'jlre4q1opl286qucuimf4r8ph6', '127.0.0.1', '1254963097', '1254965314', '/petshopnet/loja_teste/fechar_pedido.php');
DROP TABLE IF EXISTS wp_comments;
CREATE TABLE wp_comments (  
  comment_ID   bigint(20) unsigned not null   auto_increment,
  comment_post_ID   int(11) default '0' not null   ,
  comment_author   tinytext not null   ,
  comment_author_email   varchar(100) not null   ,
  comment_author_url   varchar(200) not null   ,
  comment_author_IP   varchar(100) not null   ,
  comment_date   datetime default '0000-00-00 00:00:00' not null   ,
  comment_date_gmt   datetime default '0000-00-00 00:00:00' not null   ,
  comment_content   text not null   ,
  comment_karma   int(11) default '0' not null   ,
  comment_approved   enum('0','1','spam') default '1' not null   ,
  comment_agent   varchar(255) not null   ,
  comment_type   varchar(20) not null   ,
  comment_parent   bigint(20) default '0' not null   ,
  user_id   bigint(20) default '0' not null   ,
 PRIMARY KEY (comment_ID),
 KEY comment_approved (comment_approved),
 KEY comment_post_ID (comment_post_ID)
);

 INSERT INTO wp_comments ( comment_ID,comment_post_ID,comment_author,comment_author_email,comment_author_url,comment_author_IP,comment_date,comment_date_gmt,comment_content,comment_karma,comment_approved,comment_agent,comment_type,comment_parent,user_id) VALUES ('1', '1', 'Sr. WordPress', '', 'http://wordpress.org/', '', '2008-03-19 08:35:51', '2008-03-19 11:35:51', 'Olá, isto é um comentário. <br />Para eliminar um comentário, basta iniciar sessão e ver os comentários do artigo. Poderá então editar ou eliminar os comentários.', '0', '1', '', '', '0', '0');
DROP TABLE IF EXISTS wp_links;
CREATE TABLE wp_links (  
  link_id   bigint(20) not null   auto_increment,
  link_url   varchar(255) not null   ,
  link_name   varchar(255) not null   ,
  link_image   varchar(255) not null   ,
  link_target   varchar(25) not null   ,
  link_category   bigint(20) default '0' not null   ,
  link_description   varchar(255) not null   ,
  link_visible   enum('Y','N') default 'Y' not null   ,
  link_owner   int(11) default '1' not null   ,
  link_rating   int(11) default '0' not null   ,
  link_updated   datetime default '0000-00-00 00:00:00' not null   ,
  link_rel   varchar(255) not null   ,
  link_notes   mediumtext not null   ,
  link_rss   varchar(255) not null   ,
 PRIMARY KEY (link_id),
 KEY link_category (link_category),
 KEY link_visible (link_visible)
);

 INSERT INTO wp_links ( link_id,link_url,link_name,link_image,link_target,link_category,link_description,link_visible,link_owner,link_rating,link_updated,link_rel,link_notes,link_rss) VALUES ('1', 'http://codex.wordpress.org/', 'Documentation', '', '', '0', '', 'Y', '1', '0', '0000-00-00 00:00:00', '', '', '');
 INSERT INTO wp_links ( link_id,link_url,link_name,link_image,link_target,link_category,link_description,link_visible,link_owner,link_rating,link_updated,link_rel,link_notes,link_rss) VALUES ('2', 'http://wordpress.org/development/', 'Development Blog', '', '', '0', '', 'Y', '1', '0', '0000-00-00 00:00:00', '', '', 'http://wordpress.org/development/feed/');
 INSERT INTO wp_links ( link_id,link_url,link_name,link_image,link_target,link_category,link_description,link_visible,link_owner,link_rating,link_updated,link_rel,link_notes,link_rss) VALUES ('3', 'http://wordpress.org/extend/ideas/', 'Suggest Ideas', '', '', '0', '', 'Y', '1', '0', '0000-00-00 00:00:00', '', '', '');
 INSERT INTO wp_links ( link_id,link_url,link_name,link_image,link_target,link_category,link_description,link_visible,link_owner,link_rating,link_updated,link_rel,link_notes,link_rss) VALUES ('4', 'http://wordpress.org/support/', 'Support Forum', '', '', '0', '', 'Y', '1', '0', '0000-00-00 00:00:00', '', '', '');
 INSERT INTO wp_links ( link_id,link_url,link_name,link_image,link_target,link_category,link_description,link_visible,link_owner,link_rating,link_updated,link_rel,link_notes,link_rss) VALUES ('5', 'http://wordpress.org/extend/plugins/', 'Plugins', '', '', '0', '', 'Y', '1', '0', '0000-00-00 00:00:00', '', '', '');
 INSERT INTO wp_links ( link_id,link_url,link_name,link_image,link_target,link_category,link_description,link_visible,link_owner,link_rating,link_updated,link_rel,link_notes,link_rss) VALUES ('6', 'http://wordpress.org/extend/themes/', 'Themes', '', '', '0', '', 'Y', '1', '0', '0000-00-00 00:00:00', '', '', '');
 INSERT INTO wp_links ( link_id,link_url,link_name,link_image,link_target,link_category,link_description,link_visible,link_owner,link_rating,link_updated,link_rel,link_notes,link_rss) VALUES ('7', 'http://planet.wordpress.org/', 'WordPress Planet', '', '', '0', '', 'Y', '1', '0', '0000-00-00 00:00:00', '', '', '');
DROP TABLE IF EXISTS wp_options;
CREATE TABLE wp_options (  
  option_id   bigint(20) not null   auto_increment,
  blog_id   int(11) default '0' not null   ,
  option_name   varchar(64) not null   ,
  option_value   longtext not null   ,
  autoload   enum('yes','no') default 'yes' not null   ,
 PRIMARY KEY (option_id, blog_id, option_name),
 KEY option_name (option_name)
);

 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('1', '0', 'siteurl', 'http://www.petshopnet.com.br/blog/', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('2', '0', 'blogname', 'Diário de um cão', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('3', '0', 'blogdescription', 'Apenas mais um blogue WordPress', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('4', '0', 'users_can_register', '0', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('5', '0', 'admin_email', 'anacnogueira@gmail.com', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('6', '0', 'start_of_week', '1', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('7', '0', 'use_balanceTags', '0', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('8', '0', 'use_smilies', '1', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('9', '0', 'require_name_email', '1', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('10', '0', 'comments_notify', '1', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('11', '0', 'posts_per_rss', '10', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('12', '0', 'rss_excerpt_length', '50', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('13', '0', 'rss_use_excerpt', '0', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('14', '0', 'mailserver_url', 'mail.example.com', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('15', '0', 'mailserver_login', 'login@example.com', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('16', '0', 'mailserver_pass', 'password', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('17', '0', 'mailserver_port', '110', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('18', '0', 'default_category', '1', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('19', '0', 'default_comment_status', 'open', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('20', '0', 'default_ping_status', 'open', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('21', '0', 'default_pingback_flag', '1', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('22', '0', 'default_post_edit_rows', '10', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('23', '0', 'posts_per_page', '10', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('24', '0', 'what_to_show', 'posts', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('25', '0', 'date_format', 'j \\d\\e F \\d\\e Y', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('26', '0', 'time_format', 'G:i', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('27', '0', 'links_updated_date_format', 'j \\d\\e F \\d\\e Y G:i', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('28', '0', 'links_recently_updated_prepend', '<em>', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('29', '0', 'links_recently_updated_append', '</em>', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('30', '0', 'links_recently_updated_time', '120', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('31', '0', 'comment_moderation', '0', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('32', '0', 'moderation_notify', '1', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('33', '0', 'permalink_structure', '', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('34', '0', 'gzipcompression', '0', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('35', '0', 'hack_file', '0', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('36', '0', 'blog_charset', 'UTF-8', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('37', '0', 'moderation_keys', '', 'no');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('38', '0', 'active_plugins', '', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('39', '0', 'home', 'http://www.petshopnet.com.br/blog/', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('40', '0', 'category_base', '', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('41', '0', 'ping_sites', 'http://rpc.pingomatic.com/', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('42', '0', 'advanced_edit', '0', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('43', '0', 'comment_max_links', '2', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('44', '0', 'gmt_offset', '-3', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('45', '0', 'default_email_category', '1', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('46', '0', 'recently_edited', 'a:4:{i:0;s:33:\"wp-content/themes/classic/rtl.css\";i:1;s:36:\"wp-content/themes/baunilha/style.css\";i:2;s:33:\"wp-content/themes/default/rtl.css\";i:3;s:0:\"\";}', 'no');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('47', '0', 'use_linksupdate', '0', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('48', '0', 'template', 'baunilha', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('49', '0', 'stylesheet', 'baunilha', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('50', '0', 'comment_whitelist', '1', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('52', '0', 'blacklist_keys', '', 'no');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('53', '0', 'comment_registration', '0', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('54', '0', 'rss_language', 'en', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('55', '0', 'html_type', 'text/html', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('56', '0', 'use_trackback', '0', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('57', '0', 'default_role', 'subscriber', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('58', '0', 'db_version', '6124', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('59', '0', 'uploads_use_yearmonth_folders', '1', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('60', '0', 'upload_path', 'wp-content/uploads', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('61', '0', 'secret', 'd62566a435a57a64a8ff35494165b6c0', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('62', '0', 'blog_public', '1', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('63', '0', 'default_link_category', '2', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('64', '0', 'show_on_front', 'posts', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('65', '0', 'tag_base', '', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('66', '0', 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrador\";s:12:\"capabilities\";a:48:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:5:\"Autor\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Colaborador\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscritor\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('67', '0', 'page_uris', 'a:1:{s:6:\"acerca\";i:2;}', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('68', '0', 'widget_categories', 'a:2:{s:6:\"number\";i:1;i:1;b:0;}', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('69', '0', 'update_core', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1239626310;s:15:\"version_checked\";s:5:\"2.3.3\";s:8:\"response\";s:7:\"upgrade\";s:3:\"url\";s:30:\"http://wordpress.org/download/\";}', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('70', '0', 'rss_0ff4b43bd116a9d8720d689c80e7dfd4', 'O:9:\"MagpieRSS\":19:{s:6:\"parser\";i:0;s:12:\"current_item\";a:0:{}s:5:\"items\";a:10:{i:0;a:12:{s:5:\"title\";s:14:\"2.5 Sneak Peek\";s:4:\"link\";s:55:\"http://wordpress.org/development/2008/03/25-sneak-peek/\";s:8:\"comments\";s:64:\"http://wordpress.org/development/2008/03/25-sneak-peek/#comments\";s:7:\"pubdate\";s:31:\"Tue, 18 Mar 2008 07:08:57 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:8:\"category\";s:11:\"Development\";s:4:\"guid\";s:39:\"http://wordpress.org/development/?p=226\";s:11:\"description\";s:360:\"A customizable dashboard, multi-file upload, built-in galleries, one-click plugin upgrades, tag management, built-in Gravatars, full text feeds, and faster load times sound interesting? Then WordPress 2.5 might be the release for you. It&#8217;s been in the oven for a while, and we&#8217;re finally ready to open the doors a bit to give you a taste.
For [...]\";s:7:\"content\";a:1:{s:7:\"encoded\";s:5448:\"<p>A customizable dashboard, multi-file upload, built-in galleries, one-click plugin upgrades, tag management, built-in Gravatars, full text feeds, and faster load times sound interesting? Then WordPress 2.5 might be the release for you. It&#8217;s been in the oven for a while, and we&#8217;re finally ready to open the doors a bit to give you a taste.</p>
<p>For the past few months, we’ve been working with our friends at Happy Cog &#8212; <a href=\"http://zeldman.com/\">Jeffrey Zeldman</a>, <a href=\"http://jasonsantamaria.com/\">Jason Santa Maria</a>, and <a href=\"http://bobulate.com/\">Liz Danzico</a> &#8212; to redesign WordPress from the ground-up. The result is a new way of interacting with WordPress that will remain familiar to seasoned users while improving the experience for everyone. This isn’t just a fresh coat of paint &#8212; we’ve re-thought the look of WordPress, as well as how it’s organized so that you can forget about the software and focus on your own creative pursuits.</p>
<p>Here are a few vignettes of what&#8217;s in store.</p>
<h3>The Dashboard</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/dashboard-wide.png\" alt=\"dashboard-wide.png\" /></p>
<p>The Dashboard’s most important role is to inform quickly and get you to where you’re headed in the admin. In interviewing users, we found that most of you ignore the Dashboard entirely &#8212; its useful information being mostly hidden in an overly complex design. The new Dashboard is focused on the most relevant tasks at hand: a quick summary of what’s published and scheduled for publication, the latest comments and incoming links, blog stats, and WordPress updates and news. You can add your own RSS feeds and edit the way information is presented so that the new Dashboard conforms to the way you use WordPress.</p>
<h3>Navigation</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/nav-wide.png\" alt=\"nav-wide.png\" /></p>
<p>The WordPress navigation has confounded even sophisticated users. With the new design, we’ve cut the number of navigation options in half, separating the primary functions (writing, managing posts and pages, editing the blog’s design, and managing comments) from secondary functions. This presents information at a more comfortable pace, revealing only the information that’s necessary. Everything you need is still there &#8212; just better organized. (Especially for people new to WP.)</p>
<h3>Write</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/write-wide.png\" alt=\"write-wide.png\" /></p>
<p><img class=\"right\" src=\"http://wpcom.wordpress.com/files/2008/03/write3.png\" alt=\"write2.png\" /></p>
<p>By far, the most frequently accessed part of WordPress is the Write screen. It gets the job done, but its myriad options can be overwhelming. The new write screen only displays the information that you’ll use most often. It displays the most common fields in a way that makes posting incredibly easy. Additional options are hidden away until you need them. The new Write screen anticipates the natural flow of the way you write, and is smart enough to remember the way you left it so that your preferred writing environment is always quickly available. The new visual editor even has a handy full-screen mode to help block out distractions while composing your newest post. (My personal favorite new feature.)</p>
<h3>Manage</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/manage-wide.png\" alt=\"\" /></p>
<p><img class=\"right\" src=\"http://wpcom.wordpress.com/files/2008/03/manage.png\" alt=\"\" /></p>
<p>The Manage screens have been redesigned and unified so that now, managing your pages, posts, media, and comments all use similar, consistent interfaces. We’ve omitted superfluous information and made what’s important faster to find. We believe these changes will make you a faster, more proficient blogger.</p>
<p>You might also notice there are some new colors, the dashboard feels much fresher and lighter. If you&#8217;re jonesing for the old look under your user options you can now select the &#8220;classic&#8221; colors and get those old blues back. (It&#8217;s also pluggable so people can easily add or share their own color schemes.)</p>
<p>If you make frequent backups and you&#8217;re interested in helping us out with development by testing the new code, <a href=\"http://wordpress.org/wordpress-2.5-RC1.zip\">download</a> and install <a href=\"http://wordpress.org/wordpress-2.5-RC1.zip\">Release Candidate 1</a> of WordPress 2.5, and <a href=\"http://lists.automattic.com/mailman/listinfo/wp-testers\">join our testers mailing list</a> to report any bugs you find in the code.</p>
<p>We&#8217;re also interested in feedback on the new interface and would love to hear your opinions, thoughts, rants, raves, and anything in between. We created a special email address just for the occasion: <a href=\"mailto:2.5-feedback@wordpress.org\">2.5-feedback@wordpress.org</a>.</p>
<p>The software is basically done and stable, and could be released today, but we&#8217;d like to incorporate feedback from a wider audience before making it available to the general public. After a few days of your feedback we&#8217;ll set a final release date. Personally, I can&#8217;t wait. <img src=\'http://wordpress.org/development/wp-includes/images/smilies/icon_smile.gif\' alt=\':)\' class=\'wp-smiley\' /></p>
\";}s:3:\"wfw\";a:1:{s:10:\"commentrss\";s:60:\"http://wordpress.org/development/2008/03/25-sneak-peek/feed/\";}s:7:\"summary\";s:360:\"A customizable dashboard, multi-file upload, built-in galleries, one-click plugin upgrades, tag management, built-in Gravatars, full text feeds, and faster load times sound interesting? Then WordPress 2.5 might be the release for you. It&#8217;s been in the oven for a while, and we&#8217;re finally ready to open the doors a bit to give you a taste.
For [...]\";s:12:\"atom_content\";s:5448:\"<p>A customizable dashboard, multi-file upload, built-in galleries, one-click plugin upgrades, tag management, built-in Gravatars, full text feeds, and faster load times sound interesting? Then WordPress 2.5 might be the release for you. It&#8217;s been in the oven for a while, and we&#8217;re finally ready to open the doors a bit to give you a taste.</p>
<p>For the past few months, we’ve been working with our friends at Happy Cog &#8212; <a href=\"http://zeldman.com/\">Jeffrey Zeldman</a>, <a href=\"http://jasonsantamaria.com/\">Jason Santa Maria</a>, and <a href=\"http://bobulate.com/\">Liz Danzico</a> &#8212; to redesign WordPress from the ground-up. The result is a new way of interacting with WordPress that will remain familiar to seasoned users while improving the experience for everyone. This isn’t just a fresh coat of paint &#8212; we’ve re-thought the look of WordPress, as well as how it’s organized so that you can forget about the software and focus on your own creative pursuits.</p>
<p>Here are a few vignettes of what&#8217;s in store.</p>
<h3>The Dashboard</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/dashboard-wide.png\" alt=\"dashboard-wide.png\" /></p>
<p>The Dashboard’s most important role is to inform quickly and get you to where you’re headed in the admin. In interviewing users, we found that most of you ignore the Dashboard entirely &#8212; its useful information being mostly hidden in an overly complex design. The new Dashboard is focused on the most relevant tasks at hand: a quick summary of what’s published and scheduled for publication, the latest comments and incoming links, blog stats, and WordPress updates and news. You can add your own RSS feeds and edit the way information is presented so that the new Dashboard conforms to the way you use WordPress.</p>
<h3>Navigation</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/nav-wide.png\" alt=\"nav-wide.png\" /></p>
<p>The WordPress navigation has confounded even sophisticated users. With the new design, we’ve cut the number of navigation options in half, separating the primary functions (writing, managing posts and pages, editing the blog’s design, and managing comments) from secondary functions. This presents information at a more comfortable pace, revealing only the information that’s necessary. Everything you need is still there &#8212; just better organized. (Especially for people new to WP.)</p>
<h3>Write</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/write-wide.png\" alt=\"write-wide.png\" /></p>
<p><img class=\"right\" src=\"http://wpcom.wordpress.com/files/2008/03/write3.png\" alt=\"write2.png\" /></p>
<p>By far, the most frequently accessed part of WordPress is the Write screen. It gets the job done, but its myriad options can be overwhelming. The new write screen only displays the information that you’ll use most often. It displays the most common fields in a way that makes posting incredibly easy. Additional options are hidden away until you need them. The new Write screen anticipates the natural flow of the way you write, and is smart enough to remember the way you left it so that your preferred writing environment is always quickly available. The new visual editor even has a handy full-screen mode to help block out distractions while composing your newest post. (My personal favorite new feature.)</p>
<h3>Manage</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/manage-wide.png\" alt=\"\" /></p>
<p><img class=\"right\" src=\"http://wpcom.wordpress.com/files/2008/03/manage.png\" alt=\"\" /></p>
<p>The Manage screens have been redesigned and unified so that now, managing your pages, posts, media, and comments all use similar, consistent interfaces. We’ve omitted superfluous information and made what’s important faster to find. We believe these changes will make you a faster, more proficient blogger.</p>
<p>You might also notice there are some new colors, the dashboard feels much fresher and lighter. If you&#8217;re jonesing for the old look under your user options you can now select the &#8220;classic&#8221; colors and get those old blues back. (It&#8217;s also pluggable so people can easily add or share their own color schemes.)</p>
<p>If you make frequent backups and you&#8217;re interested in helping us out with development by testing the new code, <a href=\"http://wordpress.org/wordpress-2.5-RC1.zip\">download</a> and install <a href=\"http://wordpress.org/wordpress-2.5-RC1.zip\">Release Candidate 1</a> of WordPress 2.5, and <a href=\"http://lists.automattic.com/mailman/listinfo/wp-testers\">join our testers mailing list</a> to report any bugs you find in the code.</p>
<p>We&#8217;re also interested in feedback on the new interface and would love to hear your opinions, thoughts, rants, raves, and anything in between. We created a special email address just for the occasion: <a href=\"mailto:2.5-feedback@wordpress.org\">2.5-feedback@wordpress.org</a>.</p>
<p>The software is basically done and stable, and could be released today, but we&#8217;d like to incorporate feedback from a wider audience before making it available to the general public. After a few days of your feedback we&#8217;ll set a final release date. Personally, I can&#8217;t wait. <img src=\'http://wordpress.org/development/wp-includes/images/smilies/icon_smile.gif\' alt=\':)\' class=\'wp-smiley\' /></p>
\";}i:1;a:12:{s:5:\"title\";s:15:\"WordPress 2.3.3\";s:4:\"link\";s:55:\"http://wordpress.org/development/2008/02/wordpress-233/\";s:8:\"comments\";s:64:\"http://wordpress.org/development/2008/02/wordpress-233/#comments\";s:7:\"pubdate\";s:31:\"Tue, 05 Feb 2008 05:02:45 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Ryan\";}s:8:\"category\";s:11:\"Development\";s:4:\"guid\";s:39:\"http://wordpress.org/development/?p=225\";s:11:\"description\";s:307:\"WordPress 2.3.3 is an urgent security release. If you have registration enabled a flaw was found in the XML-RPC implementation such that a specially crafted request would allow a user to edit posts of other users on that blog.  In addition to fixing this security flaw,  2.3.3 fixes a few minor bugs.  [...]\";s:7:\"content\";a:1:{s:7:\"encoded\";s:1208:\"<p>WordPress 2.3.3 is an urgent security release. If you have registration enabled a flaw was found in the XML-RPC implementation such that a specially crafted request would allow a user to edit posts of other users on that blog.  In addition to fixing this security flaw,  2.3.3 fixes <a href=\"http://trac.wordpress.org/query?status=closed&amp;milestone=2.3.3\">a few minor bugs</a>.  If you are interested only in the security fix, download the <a href=\"http://trac.wordpress.org/browser/tags/2.3.3/xmlrpc.php?format=raw\">fixed version of <code>xmlrpc.php</code></a> and copy it over your existing <code>xmlrpc.php</code>.  Otherwise, you can get the entire release <a href=\"http://wordpress.org/download/\">here</a>.</p>
<p>Also, there is <a href=\"http://weblogtoolscollection.com/archives/2008/01/21/wp-forum-plugin-security-bulletin/\">a vulnerability in the WP-Forum plugin</a> that is being actively exploited right now.  If you are using this plugin, please remove it until an update is available from its author.</p>
<p>Since we are talking security, remember to use strong passwords and change them regularly.  While you&#8217;re updating WP and your plugins, consider refreshing your passwords.</p>
\";}s:3:\"wfw\";a:1:{s:10:\"commentrss\";s:60:\"http://wordpress.org/development/2008/02/wordpress-233/feed/\";}s:7:\"summary\";s:307:\"WordPress 2.3.3 is an urgent security release. If you have registration enabled a flaw was found in the XML-RPC implementation such that a specially crafted request would allow a user to edit posts of other users on that blog.  In addition to fixing this security flaw,  2.3.3 fixes a few minor bugs.  [...]\";s:12:\"atom_content\";s:1208:\"<p>WordPress 2.3.3 is an urgent security release. If you have registration enabled a flaw was found in the XML-RPC implementation such that a specially crafted request would allow a user to edit posts of other users on that blog.  In addition to fixing this security flaw,  2.3.3 fixes <a href=\"http://trac.wordpress.org/query?status=closed&amp;milestone=2.3.3\">a few minor bugs</a>.  If you are interested only in the security fix, download the <a href=\"http://trac.wordpress.org/browser/tags/2.3.3/xmlrpc.php?format=raw\">fixed version of <code>xmlrpc.php</code></a> and copy it over your existing <code>xmlrpc.php</code>.  Otherwise, you can get the entire release <a href=\"http://wordpress.org/download/\">here</a>.</p>
<p>Also, there is <a href=\"http://weblogtoolscollection.com/archives/2008/01/21/wp-forum-plugin-security-bulletin/\">a vulnerability in the WP-Forum plugin</a> that is being actively exploited right now.  If you are using this plugin, please remove it until an update is available from its author.</p>
<p>Since we are talking security, remember to use strong passwords and change them regularly.  While you&#8217;re updating WP and your plugins, consider refreshing your passwords.</p>
\";}i:2;a:12:{s:5:\"title\";s:15:\"WordPress 2.3.2\";s:4:\"link\";s:55:\"http://wordpress.org/development/2007/12/wordpress-232/\";s:8:\"comments\";s:64:\"http://wordpress.org/development/2007/12/wordpress-232/#comments\";s:7:\"pubdate\";s:31:\"Sat, 29 Dec 2007 22:44:09 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Ryan\";}s:8:\"category\";s:8:\"Releases\";s:4:\"guid\";s:55:\"http://wordpress.org/development/2007/12/wordpress-232/\";s:11:\"description\";s:325:\"WordPress 2.3.2 is an urgent security release that fixes a bug that can be used to expose your draft posts.  2.3.2 also suppresses some error messages that can give away information about your database table structure and limits and stops some information leaks in the XML-RPC and APP implementations.  Get 2.3.2 now to [...]\";s:7:\"content\";a:1:{s:7:\"encoded\";s:1243:\"<p>WordPress 2.3.2 is an urgent security release that fixes a bug that can be used to <a href=\"http://trac.wordpress.org/ticket/5487\">expose your draft posts</a>.  2.3.2 also <a href=\"http://trac.wordpress.org/ticket/5473\">suppresses some error messages</a> that can give away information about your database table structure and limits and stops some information leaks in the XML-RPC and APP implementations.  <a href=\"http://wordpress.org/download/\">Get 2.3.2 now</a> to protect your blog from these disclosures.</p>
<p>As a little bonus,  2.3.2 allows you to define a custom DB error page. Place your custom template at wp-content/db-error.php.   If WP has a problem connecting to your database, this page will displayed rather than the default error message.</p>
<p>For more detail on what&#8217;s new in 2.3.2, view the list of <a href=\"http://trac.wordpress.org/query?status=closed&amp;milestone=2.3.2&amp;resolution=fixed&amp;order=priority\">fixed bugs</a> and see the <a href=\"http://trac.wordpress.org/changeset?old_path=tags%2F2.3.1&amp;old=6528&amp;new_path=tags%2F2.3.2&amp;new=6528\">changes</a> between 2.3.1 and 2.3.2.</p>
<p>Special thanks to <a href=\"http://www.buayacorp.com/\">Alex Concha</a> for his help on this release.</p>
\";}s:3:\"wfw\";a:1:{s:10:\"commentrss\";s:60:\"http://wordpress.org/development/2007/12/wordpress-232/feed/\";}s:7:\"summary\";s:325:\"WordPress 2.3.2 is an urgent security release that fixes a bug that can be used to expose your draft posts.  2.3.2 also suppresses some error messages that can give away information about your database table structure and limits and stops some information leaks in the XML-RPC and APP implementations.  Get 2.3.2 now to [...]\";s:12:\"atom_content\";s:1243:\"<p>WordPress 2.3.2 is an urgent security release that fixes a bug that can be used to <a href=\"http://trac.wordpress.org/ticket/5487\">expose your draft posts</a>.  2.3.2 also <a href=\"http://trac.wordpress.org/ticket/5473\">suppresses some error messages</a> that can give away information about your database table structure and limits and stops some information leaks in the XML-RPC and APP implementations.  <a href=\"http://wordpress.org/download/\">Get 2.3.2 now</a> to protect your blog from these disclosures.</p>
<p>As a little bonus,  2.3.2 allows you to define a custom DB error page. Place your custom template at wp-content/db-error.php.   If WP has a problem connecting to your database, this page will displayed rather than the default error message.</p>
<p>For more detail on what&#8217;s new in 2.3.2, view the list of <a href=\"http://trac.wordpress.org/query?status=closed&amp;milestone=2.3.2&amp;resolution=fixed&amp;order=priority\">fixed bugs</a> and see the <a href=\"http://trac.wordpress.org/changeset?old_path=tags%2F2.3.1&amp;old=6528&amp;new_path=tags%2F2.3.2&amp;new=6528\">changes</a> between 2.3.1 and 2.3.2.</p>
<p>Special thanks to <a href=\"http://www.buayacorp.com/\">Alex Concha</a> for his help on this release.</p>
\";}i:3;a:12:{s:5:\"title\";s:27:\"Stay Warm, WordPress Hoodie\";s:4:\"link\";s:58:\"http://wordpress.org/development/2007/12/wordpress-hoodie/\";s:8:\"comments\";s:67:\"http://wordpress.org/development/2007/12/wordpress-hoodie/#comments\";s:7:\"pubdate\";s:31:\"Sat, 29 Dec 2007 18:39:05 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:8:\"category\";s:27:\"Storefirefoxschwagwordpress\";s:4:\"guid\";s:58:\"http://wordpress.org/development/2007/12/wordpress-hoodie/\";s:11:\"description\";s:371:\"A least for those of your in the Northern hemisphere, it&#8217;s been a little chilly recently. If you&#8217;re like me you&#8217;re thinking, &#8220;WordPress keeps my servers running hot, couldn&#8217;t it warm me too?&#8221;
Yes, it can.

You can now buy hip WordPress hoodies in our store so when you&#8217;re not blogging you can loiter around the neighborhood [...]\";s:7:\"content\";a:1:{s:7:\"encoded\";s:1059:\"<p>A least for those of your in the Northern hemisphere, it&#8217;s been a little chilly recently. If you&#8217;re like me you&#8217;re thinking, &#8220;WordPress keeps my servers running hot, couldn&#8217;t it warm me too?&#8221;</p>
<p>Yes, it can.</p>
<p><a href=\"http://shop.wordpress.net/\"><img src=\"http://shop.wordpress.net/images/sku/WP5495NVY/WP5495NVY-A3.jpg\" alt=\"WordPress Hoodies\" /></a></p>
<p><a href=\"http://shop.wordpress.net/\">You can now buy hip WordPress hoodies in our store</a> so when you&#8217;re not blogging you can loiter around the neighborhood like the people in the picture above. As before, we ship locally and internationally.</p>
<p>If you find you&#8217;re still in the Open Source Hoodie mood afterward, you can <a href=\"http://store.mozilla.org/product.php?code=MZ14015&#038;catid=11\">check out this cool Firefox one from our friends at Mozilla</a>.</p>
<p><strong>Hint:</strong> Buy the hoodie a size larger than you normally would, they run small. They&#8217;ll begin processing the orders on January 2<sup>nd</sup>.</p>
\";}s:3:\"wfw\";a:1:{s:10:\"commentrss\";s:63:\"http://wordpress.org/development/2007/12/wordpress-hoodie/feed/\";}s:7:\"summary\";s:371:\"A least for those of your in the Northern hemisphere, it&#8217;s been a little chilly recently. If you&#8217;re like me you&#8217;re thinking, &#8220;WordPress keeps my servers running hot, couldn&#8217;t it warm me too?&#8221;
Yes, it can.

You can now buy hip WordPress hoodies in our store so when you&#8217;re not blogging you can loiter around the neighborhood [...]\";s:12:\"atom_content\";s:1059:\"<p>A least for those of your in the Northern hemisphere, it&#8217;s been a little chilly recently. If you&#8217;re like me you&#8217;re thinking, &#8220;WordPress keeps my servers running hot, couldn&#8217;t it warm me too?&#8221;</p>
<p>Yes, it can.</p>
<p><a href=\"http://shop.wordpress.net/\"><img src=\"http://shop.wordpress.net/images/sku/WP5495NVY/WP5495NVY-A3.jpg\" alt=\"WordPress Hoodies\" /></a></p>
<p><a href=\"http://shop.wordpress.net/\">You can now buy hip WordPress hoodies in our store</a> so when you&#8217;re not blogging you can loiter around the neighborhood like the people in the picture above. As before, we ship locally and internationally.</p>
<p>If you find you&#8217;re still in the Open Source Hoodie mood afterward, you can <a href=\"http://store.mozilla.org/product.php?code=MZ14015&#038;catid=11\">check out this cool Firefox one from our friends at Mozilla</a>.</p>
<p><strong>Hint:</strong> Buy the hoodie a size larger than you normally would, they run small. They&#8217;ll begin processing the orders on January 2<sup>nd</sup>.</p>
\";}i:4;a:12:{s:5:\"title\";s:15:\"WordPress 2.3.1\";s:4:\"link\";s:55:\"http://wordpress.org/development/2007/10/wordpress-231/\";s:8:\"comments\";s:64:\"http://wordpress.org/development/2007/10/wordpress-231/#comments\";s:7:\"pubdate\";s:31:\"Fri, 26 Oct 2007 20:55:30 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Ryan\";}s:8:\"category\";s:8:\"Releases\";s:4:\"guid\";s:55:\"http://wordpress.org/development/2007/10/wordpress-231/\";s:11:\"description\";s:367:\"WordPress 2.3.1 is now available.  2.3.1 is a bug-fix and security release for the 2.3 series.
2.3.1 fixes over twenty bugs.  Some of the notable fixes are:

 Tagging support for Windows Live Writer
Fixes for a login bug that affected those with a Blog Address different than
their WordPress Address
Faster taxonomy database queries, especially tag intersection [...]\";s:7:\"content\";a:1:{s:7:\"encoded\";s:1357:\"<p>WordPress 2.3.1 is now available.  2.3.1 is a bug-fix and security release for the 2.3 series.</p>
<p>2.3.1 fixes <a href=\"http://trac.wordpress.org/query?status=closed&amp;milestone=2.3.1&amp;resolution=fixed&amp;order=priority\" onclick=\"javascript:urchinTracker (\'/outbound/article/trac.wordpress.org\');\">over twenty bugs</a>.  Some of the notable fixes are:</p>
<ul>
<li> Tagging support for <a href=\"http://windowslivewriter.spaces.live.com/\" onclick=\"javascript:urchinTracker (\'/outbound/article/windowslivewriter.spaces.live.com\');\">Windows Live Writer</a></li>
<li>Fixes for a login bug that affected those with a Blog Address different than<br />
their WordPress Address</li>
<li>Faster taxonomy database queries, especially tag intersection queries</li>
<li>Link importer fixes</li>
</ul>
<p>Unfortunately, some security issues were found in 2.3.  <a href=\"http://www.waraxe.us/\">Janek Vind</a> found an XSS problem that can be exploited if your php setup has register_globals enabled.   For this reason, upgrading to 2.3.1 is advised.</p>
<p>The full set of changes between 2.3 and 2.3.1 is <a href=\"http://trac.wordpress.org/changeset?old_path=tags%2F2.3&amp;old=6293&amp;new_path=tags%2F2.3.1&amp;new=6293\">available for viewing on trac</a>.</p>
<p>Get 2.3.1 from the <a href=\"http://wordpress.org/download/\">download</a> page and enjoy.</p>
\";}s:3:\"wfw\";a:1:{s:10:\"commentrss\";s:60:\"http://wordpress.org/development/2007/10/wordpress-231/feed/\";}s:7:\"summary\";s:367:\"WordPress 2.3.1 is now available.  2.3.1 is a bug-fix and security release for the 2.3 series.
2.3.1 fixes over twenty bugs.  Some of the notable fixes are:

 Tagging support for Windows Live Writer
Fixes for a login bug that affected those with a Blog Address different than
their WordPress Address
Faster taxonomy database queries, especially tag intersection [...]\";s:12:\"atom_content\";s:1357:\"<p>WordPress 2.3.1 is now available.  2.3.1 is a bug-fix and security release for the 2.3 series.</p>
<p>2.3.1 fixes <a href=\"http://trac.wordpress.org/query?status=closed&amp;milestone=2.3.1&amp;resolution=fixed&amp;order=priority\" onclick=\"javascript:urchinTracker (\'/outbound/article/trac.wordpress.org\');\">over twenty bugs</a>.  Some of the notable fixes are:</p>
<ul>
<li> Tagging support for <a href=\"http://windowslivewriter.spaces.live.com/\" onclick=\"javascript:urchinTracker (\'/outbound/article/windowslivewriter.spaces.live.com\');\">Windows Live Writer</a></li>
<li>Fixes for a login bug that affected those with a Blog Address different than<br />
their WordPress Address</li>
<li>Faster taxonomy database queries, especially tag intersection queries</li>
<li>Link importer fixes</li>
</ul>
<p>Unfortunately, some security issues were found in 2.3.  <a href=\"http://www.waraxe.us/\">Janek Vind</a> found an XSS problem that can be exploited if your php setup has register_globals enabled.   For this reason, upgrading to 2.3.1 is advised.</p>
<p>The full set of changes between 2.3 and 2.3.1 is <a href=\"http://trac.wordpress.org/changeset?old_path=tags%2F2.3&amp;old=6293&amp;new_path=tags%2F2.3.1&amp;new=6293\">available for viewing on trac</a>.</p>
<p>Get 2.3.1 from the <a href=\"http://wordpress.org/download/\">download</a> page and enjoy.</p>
\";}i:5;a:12:{s:5:\"title\";s:35:\"WordPress 2.3.1 Release Candidate 1\";s:4:\"link\";s:75:\"http://wordpress.org/development/2007/10/wordpress-231-release-candidate-1/\";s:8:\"comments\";s:84:\"http://wordpress.org/development/2007/10/wordpress-231-release-candidate-1/#comments\";s:7:\"pubdate\";s:31:\"Wed, 24 Oct 2007 22:53:59 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Ryan\";}s:8:\"category\";s:8:\"Releases\";s:4:\"guid\";s:75:\"http://wordpress.org/development/2007/10/wordpress-231-release-candidate-1/\";s:11:\"description\";s:319:\"WordPress 2.3.1 is almost ready to go.  Before we send it out the door, we&#8217;re making a release candidate available so everyone can give it a last look.
2.3.1 fixes over twenty bugs.  Some of the notable fixes are:

 Tagging support for Windows Live Writer
A login bug that affected those with a Blog Address [...]\";s:7:\"content\";a:1:{s:7:\"encoded\";s:1398:\"<p>WordPress 2.3.1 is almost ready to go.  Before we send it out the door, we&#8217;re making a release candidate available so everyone can give it a last look.</p>
<p>2.3.1 fixes <a href=\"http://trac.wordpress.org/query?status=closed&amp;milestone=2.3.1&amp;resolution=fixed&amp;order=priority\" onclick=\"javascript:urchinTracker (\'/outbound/article/trac.wordpress.org\');\">over twenty bugs</a>.  Some of the notable fixes are:</p>
<ul>
<li> Tagging support for <a href=\"http://windowslivewriter.spaces.live.com/\" onclick=\"javascript:urchinTracker (\'/outbound/article/windowslivewriter.spaces.live.com\');\">Windows Live Writer</a></li>
<li>A login bug that affected those with a Blog Address different than<br />
their WordPress Address is fixed</li>
<li>Faster taxonomy database queries, especially tag intersection queries</li>
<li>Link importer fixes</li>
</ul>
<p>More details will be provided in the final release announcement.  Until then, <a href=\"http://wordpress.org/wordpress-2.3.1-RC1.zip\">download RC1</a> and let us know if it fixes a particular <a href=\"http://trac.wordpress.org/query?status=closed&amp;milestone=2.3.1&amp;resolution=fixed&amp;order=priority\">bug</a> in 2.3 that was annoying you.  If you find that something has broken since 2.3, please <a href=\"http://trac.wordpress.org/newticket\">open a ticket</a> so we can address the problem before the final 2.3.1 release.</p>
\";}s:3:\"wfw\";a:1:{s:10:\"commentrss\";s:80:\"http://wordpress.org/development/2007/10/wordpress-231-release-candidate-1/feed/\";}s:7:\"summary\";s:319:\"WordPress 2.3.1 is almost ready to go.  Before we send it out the door, we&#8217;re making a release candidate available so everyone can give it a last look.
2.3.1 fixes over twenty bugs.  Some of the notable fixes are:

 Tagging support for Windows Live Writer
A login bug that affected those with a Blog Address [...]\";s:12:\"atom_content\";s:1398:\"<p>WordPress 2.3.1 is almost ready to go.  Before we send it out the door, we&#8217;re making a release candidate available so everyone can give it a last look.</p>
<p>2.3.1 fixes <a href=\"http://trac.wordpress.org/query?status=closed&amp;milestone=2.3.1&amp;resolution=fixed&amp;order=priority\" onclick=\"javascript:urchinTracker (\'/outbound/article/trac.wordpress.org\');\">over twenty bugs</a>.  Some of the notable fixes are:</p>
<ul>
<li> Tagging support for <a href=\"http://windowslivewriter.spaces.live.com/\" onclick=\"javascript:urchinTracker (\'/outbound/article/windowslivewriter.spaces.live.com\');\">Windows Live Writer</a></li>
<li>A login bug that affected those with a Blog Address different than<br />
their WordPress Address is fixed</li>
<li>Faster taxonomy database queries, especially tag intersection queries</li>
<li>Link importer fixes</li>
</ul>
<p>More details will be provided in the final release announcement.  Until then, <a href=\"http://wordpress.org/wordpress-2.3.1-RC1.zip\">download RC1</a> and let us know if it fixes a particular <a href=\"http://trac.wordpress.org/query?status=closed&amp;milestone=2.3.1&amp;resolution=fixed&amp;order=priority\">bug</a> in 2.3 that was annoying you.  If you find that something has broken since 2.3, please <a href=\"http://trac.wordpress.org/newticket\">open a ticket</a> so we can address the problem before the final 2.3.1 release.</p>
\";}i:6;a:12:{s:5:\"title\";s:13:\"WordPress 2.3\";s:4:\"link\";s:54:\"http://wordpress.org/development/2007/09/wordpress-23/\";s:8:\"comments\";s:63:\"http://wordpress.org/development/2007/09/wordpress-23/#comments\";s:7:\"pubdate\";s:31:\"Tue, 25 Sep 2007 01:22:54 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:8:\"category\";s:66:\"DevelopmentReleasestaggingtaxonomyupdate notificationwordpress 2.3\";s:4:\"guid\";s:54:\"http://wordpress.org/development/2007/09/wordpress-23/\";s:11:\"description\";s:379:\"I&#8217;m thrilled to announce that Version 2.3 &#8220;Dexter&#8221; of WordPress is now ready for the world. This release includes native tagging support, plugin update notification, URL handling improvements, and much more. This release is named for the great tenor saxophonist Dexter Gordon.
The entire team is really proud of this release, and I&#8217;m happy that this [...]\";s:7:\"content\";a:1:{s:7:\"encoded\";s:4883:\"<p>I&#8217;m thrilled to announce that Version 2.3 &#8220;Dexter&#8221; of WordPress is <a href=\"http://wordpress.org/download/\">now ready for the world</a>. This release includes native tagging support, plugin update notification, URL handling improvements, and much more. This release is named for the great tenor saxophonist <a href=\"http://en.wikipedia.org/wiki/Dexter_Gordon\">Dexter Gordon</a>.</p>
<p>The entire team is really proud of this release, and I&#8217;m happy that this is our second on-time release under our <a href=\"http://wordpress.org/about/roadmap/\">new development schedule</a>. The grand experiment of a more agile WordPress with significant features in the hands of users more often is working. I could write a blog post about each new feature, but I&#8217;ll try to be brief:</p>
<ol>
<li><strong>Native tagging support</strong> allows you to use tags in addition to categories on your posts, if you so choose. We&#8217;ve included importers for the Ultimate Tag Warrior, Jerome&#8217;s Keywords, Simple Tags, and Bunny&#8217;s Technorati Tag plugins so if you&#8217;ve already been using a tagging plugin you can bring your data into the new system. The tagging system is also wicked-fast, so your host won&#8217;t mind.</li>
<li>Our new <strong>update notification</strong> lets you know when there is a new release of WordPress or when any of the plugins you use has an update available. It works by sending your blog URL, plugins, and version information to our new <code>api.wordpress.org</code> service which then compares it to the plugin database and tells you whats the latest and greatest you can use.</li>
<li>We&#8217;ve cleaned up URLs a bunch in a feature we call <strong>canonical URLs</strong> which does things like enforce your no-www preference, redirect posts with changed slugs so a link never goes bad, redirect URLs that get cut off in emails on similar to the correct post, and much more. This helps your users, and it also <strong>helps your search engine optimization</strong>, as search engines like for each page to be available in one <a href=\"http://www.answers.com/canonical?cat=technology\">canonical</a> location. <a href=\"http://markjaquith.wordpress.com/2007/09/25/wordpress-23-canonical-urls/\">More info here</a>.</li>
<li>Our new <strong>pending review</strong> feature will be great for multi-author blogs. It allows authors to submit a post for review by an editor or administrator, where before they would just have to save a draft and hope someone noticed it.</li>
<li>There is new <strong>advanced WYSIWYG</strong> functionality (we call it the kitchen sink button) that allows you to access some features of TinyMCE that were previously hidden.</li>
</ol>
<p>You&#8217;ll notice that two of those features are straight out of the <a href=\"http://wordpress.org/extend/ideas/?show=popular\">most-voted for ideas list</a>. That&#8217;s just the user facing stuff, if you&#8217;re a developer you&#8217;ll be interested in:</p>
<ol>
<li>Full and complete Atom 1.0 support, including the publishing protocol.</li>
<li>We&#8217;re using the new jQuery which is &#8220;800% faster.&#8221;</li>
<li>Behind the user-facing tags system is a really <a href=\"http://codex.wordpress.org/index.php?title=Version_2.3:New_Taxonomy\">kickass taxonomy system</a>, which adds a ton of flexibility. It&#8217;s probably the biggest schema upgrade since version 1.5.</li>
<li>The importers have been revamped to be more memory efficient, and you can now add an importer through a plugin.</li>
<li>Through hooks and filters you can now <a href=\"http://wordpress.org/extend/plugins/disable-wordpress-plugin-updates/\">override the update system</a>, the dashboard RSS feeds, the feed parser, and tons more than you could in 2.2.</li>
<li>The new <code>$wpdb->prepare()</code> way of doing SQL queries.</li>
<li>Finally there were <a href=\"http://trac.wordpress.org/query?status=closed&#038;milestone=2.3\">over 351 tickets in Trac closed for this release</a>, with over a hundred people contributing. This is the polish, the hundreds of tiny bug fixes and features that make WordPress what it is.</li>
</ol>
<p>You can <a href=\"http://codex.wordpress.org/Version_2.3\">view the Codex for more information about the release</a> and some screenshots. And of course <a href=\"http://wordpress.org/download/\">the place to download is always the same</a>. Before you upgrade you may want to <a href=\"http://wordpress.org/development/2007/09/preparing-for-23/\">check out our Preparing for 2.3 post</a> and the <a href=\"http://codex.wordpress.org/Plugins/Plugin_Compatibility/2.3\">list of compatible plugins on the Codex</a>.</p>
<p>A number of people are hosting upgrade parties around the world, <a href=\"http://upcoming.yahoo.com/event/269586/\">including myself in San Francisco</a>. If you are let me know and I&#8217;ll promote it on my blog.</p>
\";}s:3:\"wfw\";a:1:{s:10:\"commentrss\";s:59:\"http://wordpress.org/development/2007/09/wordpress-23/feed/\";}s:7:\"summary\";s:379:\"I&#8217;m thrilled to announce that Version 2.3 &#8220;Dexter&#8221; of WordPress is now ready for the world. This release includes native tagging support, plugin update notification, URL handling improvements, and much more. This release is named for the great tenor saxophonist Dexter Gordon.
The entire team is really proud of this release, and I&#8217;m happy that this [...]\";s:12:\"atom_content\";s:4883:\"<p>I&#8217;m thrilled to announce that Version 2.3 &#8220;Dexter&#8221; of WordPress is <a href=\"http://wordpress.org/download/\">now ready for the world</a>. This release includes native tagging support, plugin update notification, URL handling improvements, and much more. This release is named for the great tenor saxophonist <a href=\"http://en.wikipedia.org/wiki/Dexter_Gordon\">Dexter Gordon</a>.</p>
<p>The entire team is really proud of this release, and I&#8217;m happy that this is our second on-time release under our <a href=\"http://wordpress.org/about/roadmap/\">new development schedule</a>. The grand experiment of a more agile WordPress with significant features in the hands of users more often is working. I could write a blog post about each new feature, but I&#8217;ll try to be brief:</p>
<ol>
<li><strong>Native tagging support</strong> allows you to use tags in addition to categories on your posts, if you so choose. We&#8217;ve included importers for the Ultimate Tag Warrior, Jerome&#8217;s Keywords, Simple Tags, and Bunny&#8217;s Technorati Tag plugins so if you&#8217;ve already been using a tagging plugin you can bring your data into the new system. The tagging system is also wicked-fast, so your host won&#8217;t mind.</li>
<li>Our new <strong>update notification</strong> lets you know when there is a new release of WordPress or when any of the plugins you use has an update available. It works by sending your blog URL, plugins, and version information to our new <code>api.wordpress.org</code> service which then compares it to the plugin database and tells you whats the latest and greatest you can use.</li>
<li>We&#8217;ve cleaned up URLs a bunch in a feature we call <strong>canonical URLs</strong> which does things like enforce your no-www preference, redirect posts with changed slugs so a link never goes bad, redirect URLs that get cut off in emails on similar to the correct post, and much more. This helps your users, and it also <strong>helps your search engine optimization</strong>, as search engines like for each page to be available in one <a href=\"http://www.answers.com/canonical?cat=technology\">canonical</a> location. <a href=\"http://markjaquith.wordpress.com/2007/09/25/wordpress-23-canonical-urls/\">More info here</a>.</li>
<li>Our new <strong>pending review</strong> feature will be great for multi-author blogs. It allows authors to submit a post for review by an editor or administrator, where before they would just have to save a draft and hope someone noticed it.</li>
<li>There is new <strong>advanced WYSIWYG</strong> functionality (we call it the kitchen sink button) that allows you to access some features of TinyMCE that were previously hidden.</li>
</ol>
<p>You&#8217;ll notice that two of those features are straight out of the <a href=\"http://wordpress.org/extend/ideas/?show=popular\">most-voted for ideas list</a>. That&#8217;s just the user facing stuff, if you&#8217;re a developer you&#8217;ll be interested in:</p>
<ol>
<li>Full and complete Atom 1.0 support, including the publishing protocol.</li>
<li>We&#8217;re using the new jQuery which is &#8220;800% faster.&#8221;</li>
<li>Behind the user-facing tags system is a really <a href=\"http://codex.wordpress.org/index.php?title=Version_2.3:New_Taxonomy\">kickass taxonomy system</a>, which adds a ton of flexibility. It&#8217;s probably the biggest schema upgrade since version 1.5.</li>
<li>The importers have been revamped to be more memory efficient, and you can now add an importer through a plugin.</li>
<li>Through hooks and filters you can now <a href=\"http://wordpress.org/extend/plugins/disable-wordpress-plugin-updates/\">override the update system</a>, the dashboard RSS feeds, the feed parser, and tons more than you could in 2.2.</li>
<li>The new <code>$wpdb->prepare()</code> way of doing SQL queries.</li>
<li>Finally there were <a href=\"http://trac.wordpress.org/query?status=closed&#038;milestone=2.3\">over 351 tickets in Trac closed for this release</a>, with over a hundred people contributing. This is the polish, the hundreds of tiny bug fixes and features that make WordPress what it is.</li>
</ol>
<p>You can <a href=\"http://codex.wordpress.org/Version_2.3\">view the Codex for more information about the release</a> and some screenshots. And of course <a href=\"http://wordpress.org/download/\">the place to download is always the same</a>. Before you upgrade you may want to <a href=\"http://wordpress.org/development/2007/09/preparing-for-23/\">check out our Preparing for 2.3 post</a> and the <a href=\"http://codex.wordpress.org/Plugins/Plugin_Compatibility/2.3\">list of compatible plugins on the Codex</a>.</p>
<p>A number of people are hosting upgrade parties around the world, <a href=\"http://upcoming.yahoo.com/event/269586/\">including myself in San Francisco</a>. If you are let me know and I&#8217;ll promote it on my blog.</p>
\";}i:7;a:12:{s:5:\"title\";s:9:\"New Faces\";s:4:\"link\";s:51:\"http://wordpress.org/development/2007/09/new-faces/\";s:8:\"comments\";s:60:\"http://wordpress.org/development/2007/09/new-faces/#comments\";s:7:\"pubdate\";s:31:\"Mon, 24 Sep 2007 05:41:14 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:8:\"category\";s:50:\"DevelopmentMetamark jaquithpeter westwoodwordpress\";s:4:\"guid\";s:51:\"http://wordpress.org/development/2007/09/new-faces/\";s:11:\"description\";s:332:\"If you follow WordPress development closely you&#8217;ve probably noticed a few new faces around lately, or to be more accurate a few old faces who are taking on bigger roles in the community. I would like to take this opportunity to announce and publicly congratulate Mark Jaquith and Peter Westwood who have both become lead [...]\";s:7:\"content\";a:1:{s:7:\"encoded\";s:1398:\"<p>If you follow WordPress development closely you&#8217;ve probably noticed a few new faces around lately, or to be more accurate a few old faces who are taking on bigger roles in the community. I would like to take this opportunity to announce and publicly congratulate Mark Jaquith and Peter Westwood who have both become lead developers, the highest development honor on WordPress.org.</p>
<p><a href=\"http://markjaquith.com/\">Mark Jaquith</a> has been using and contributing to WordPress since 2004.  Mark especially enjoys watching people use WordPress to express themselves in areas of the world where free expression is suppressed.  But, being a voracious consumer of information, he probably reads your cat blog too.</p>
<p><a href=\"http://blog.ftwr.co.uk/\">Peter</a> works as an Embedded Software Engineer developing a <a href=\"http://www.trend-controls.com/wps/portal/!ut/p/_s.7_0_A/7_0_3TJ/.cmd/ad/.c/6_0_1L5/.ce/7_0_4CL/.p/5_0_3DD/.d/1/_th/J_0_CI/_s.7_0_A/7_0_3TJ?PC_7_0_4CL_proxyurl=j#7_0_4CL\">web-enabled BMS controller</a>. Using WordPress since version 1.0.1, Peter spends his spare time triaging bugs on Trac and investigating new open source tools. When not at the computer Peter can often be found photographing flowers, animals and <a href=\"http://flickr.com/photos/westi \">cars</a> and listening to a <a href=\"http://last.fm/user/peterwestwood\">wide variety of music</a>.</p>
\";}s:3:\"wfw\";a:1:{s:10:\"commentrss\";s:56:\"http://wordpress.org/development/2007/09/new-faces/feed/\";}s:7:\"summary\";s:332:\"If you follow WordPress development closely you&#8217;ve probably noticed a few new faces around lately, or to be more accurate a few old faces who are taking on bigger roles in the community. I would like to take this opportunity to announce and publicly congratulate Mark Jaquith and Peter Westwood who have both become lead [...]\";s:12:\"atom_content\";s:1398:\"<p>If you follow WordPress development closely you&#8217;ve probably noticed a few new faces around lately, or to be more accurate a few old faces who are taking on bigger roles in the community. I would like to take this opportunity to announce and publicly congratulate Mark Jaquith and Peter Westwood who have both become lead developers, the highest development honor on WordPress.org.</p>
<p><a href=\"http://markjaquith.com/\">Mark Jaquith</a> has been using and contributing to WordPress since 2004.  Mark especially enjoys watching people use WordPress to express themselves in areas of the world where free expression is suppressed.  But, being a voracious consumer of information, he probably reads your cat blog too.</p>
<p><a href=\"http://blog.ftwr.co.uk/\">Peter</a> works as an Embedded Software Engineer developing a <a href=\"http://www.trend-controls.com/wps/portal/!ut/p/_s.7_0_A/7_0_3TJ/.cmd/ad/.c/6_0_1L5/.ce/7_0_4CL/.p/5_0_3DD/.d/1/_th/J_0_CI/_s.7_0_A/7_0_3TJ?PC_7_0_4CL_proxyurl=j#7_0_4CL\">web-enabled BMS controller</a>. Using WordPress since version 1.0.1, Peter spends his spare time triaging bugs on Trac and investigating new open source tools. When not at the computer Peter can often be found photographing flowers, animals and <a href=\"http://flickr.com/photos/westi \">cars</a> and listening to a <a href=\"http://last.fm/user/peterwestwood\">wide variety of music</a>.</p>
\";}i:8;a:12:{s:5:\"title\";s:17:\"Preparing for 2.3\";s:4:\"link\";s:58:\"http://wordpress.org/development/2007/09/preparing-for-23/\";s:8:\"comments\";s:67:\"http://wordpress.org/development/2007/09/preparing-for-23/#comments\";s:7:\"pubdate\";s:31:\"Sat, 22 Sep 2007 10:00:30 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:8:\"category\";s:4:\"Meta\";s:4:\"guid\";s:58:\"http://wordpress.org/development/2007/09/preparing-for-23/\";s:11:\"description\";s:288:\"In just a few short days WordPress 2.3 will be coming out with tons of new features that (hopefully) will make you want to upgrade right away. Well while you have a bit of time over this lovely weekend, here are some things you can do to help yourself prepare for the big upgrade on [...]\";s:7:\"content\";a:1:{s:7:\"encoded\";s:1693:\"<p>In just a few short days WordPress 2.3 will be coming out with tons of new features that (hopefully) will make you want to upgrade right away. Well while you have a bit of time over this lovely weekend, here are some things you can do to help yourself prepare for the big upgrade on Monday:</p>
<ul>
<li>Back up your blog. It never goes out of style, and we have <a href=\"http://codex.wordpress.org/Backing_Up_Your_Database\">a nifty Codex page with a few different methods</a>.</li>
<li>Check for the latest versions of your plugins. <a href=\"http://codex.wordpress.org/Plugins/Plugin_Compatibility/2.3\">Here&#8217;s a list of known compatible and incompatible plugins with 2.3</a>, Google Sitemaps seems to be one causing a lot of issues. (<a href=\"http://wordpress.org/support/topic/135160\">Forum thread</a>.) Upgrading might get you cool new features anyway. Don&#8217;t forget about our <a href=\"http://wordpress.org/extend/plugins/\">plugin directory</a>.</li>
<li>Enjoy the last time you have to check for plugin updates manually, as 2.3 will do it magically behind the scenes.</li>
<li><a href=\"http://richgilchrest.com/how-to-add-wordpress-23-tags-to-your-current-theme/\">Read up on how to modify your theme to add tag support</a>.</li>
<li>Consider <a href=\"http://codex.wordpress.org/Installing/Updating_WordPress_with_Subversion\">switching your install to use Subversion</a> to make updating ultra-easy.</li>
<li>Make a list of your friends who are less computer literate so you can help them upgrade. (Maybe <a href=\"http://upcoming.yahoo.com/event/269586/\">throw an upgrade party</a>?)</li>
</ul>
<p>If you have any other ideas put them on your blog and pingback this post.</p>
\";}s:3:\"wfw\";a:1:{s:10:\"commentrss\";s:63:\"http://wordpress.org/development/2007/09/preparing-for-23/feed/\";}s:7:\"summary\";s:288:\"In just a few short days WordPress 2.3 will be coming out with tons of new features that (hopefully) will make you want to upgrade right away. Well while you have a bit of time over this lovely weekend, here are some things you can do to help yourself prepare for the big upgrade on [...]\";s:12:\"atom_content\";s:1693:\"<p>In just a few short days WordPress 2.3 will be coming out with tons of new features that (hopefully) will make you want to upgrade right away. Well while you have a bit of time over this lovely weekend, here are some things you can do to help yourself prepare for the big upgrade on Monday:</p>
<ul>
<li>Back up your blog. It never goes out of style, and we have <a href=\"http://codex.wordpress.org/Backing_Up_Your_Database\">a nifty Codex page with a few different methods</a>.</li>
<li>Check for the latest versions of your plugins. <a href=\"http://codex.wordpress.org/Plugins/Plugin_Compatibility/2.3\">Here&#8217;s a list of known compatible and incompatible plugins with 2.3</a>, Google Sitemaps seems to be one causing a lot of issues. (<a href=\"http://wordpress.org/support/topic/135160\">Forum thread</a>.) Upgrading might get you cool new features anyway. Don&#8217;t forget about our <a href=\"http://wordpress.org/extend/plugins/\">plugin directory</a>.</li>
<li>Enjoy the last time you have to check for plugin updates manually, as 2.3 will do it magically behind the scenes.</li>
<li><a href=\"http://richgilchrest.com/how-to-add-wordpress-23-tags-to-your-current-theme/\">Read up on how to modify your theme to add tag support</a>.</li>
<li>Consider <a href=\"http://codex.wordpress.org/Installing/Updating_WordPress_with_Subversion\">switching your install to use Subversion</a> to make updating ultra-easy.</li>
<li>Make a list of your friends who are less computer literate so you can help them upgrade. (Maybe <a href=\"http://upcoming.yahoo.com/event/269586/\">throw an upgrade party</a>?)</li>
</ul>
<p>If you have any other ideas put them on your blog and pingback this post.</p>
\";}i:9;a:12:{s:5:\"title\";s:33:\"WordPress 2.3 Release Candidate 1\";s:4:\"link\";s:74:\"http://wordpress.org/development/2007/09/wordpress-23-release-candidate-1/\";s:8:\"comments\";s:83:\"http://wordpress.org/development/2007/09/wordpress-23-release-candidate-1/#comments\";s:7:\"pubdate\";s:31:\"Wed, 19 Sep 2007 04:50:10 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Ryan\";}s:8:\"category\";s:8:\"Releases\";s:4:\"guid\";s:74:\"http://wordpress.org/development/2007/09/wordpress-23-release-candidate-1/\";s:11:\"description\";s:300:\"The first release candidate for WordPress 2.3 is now available.  We&#8217;ve spent the week since beta 3 fixing bugs and shaping RC1 into release candidate material.  If you would like try RC1 and help us get 2.3 ready for its final release on Monday the 24th,  download RC1 here and report any [...]\";s:7:\"content\";a:1:{s:7:\"encoded\";s:871:\"<p>The first release candidate for WordPress 2.3 is now available.  We&#8217;ve spent the week since beta 3 fixing bugs and shaping RC1 into release candidate material.  If you would like try RC1 and help us get 2.3 ready for its final release on Monday the 24th,  <a href=\"http://wordpress.org/wordpress-2.3-RC1.zip\">download RC1 here</a> and <a href=\"http://trac.wordpress.org/newticket\">report any bugs you find</a>. Although we consider this release candidate to be stable, keep in mind that this is still pre-release software.  You may find some lingering bugs.  Please back up your database before upgrading.  If you have problems with RC1, you will not be able to revert back to your previous release without a database backup.</p>
<p>And a big thanks to those of you who have been testing the betas and now the RC.  Your efforts make 2.3 better for everyone.</p>
\";}s:3:\"wfw\";a:1:{s:10:\"commentrss\";s:79:\"http://wordpress.org/development/2007/09/wordpress-23-release-candidate-1/feed/\";}s:7:\"summary\";s:300:\"The first release candidate for WordPress 2.3 is now available.  We&#8217;ve spent the week since beta 3 fixing bugs and shaping RC1 into release candidate material.  If you would like try RC1 and help us get 2.3 ready for its final release on Monday the 24th,  download RC1 here and report any [...]\";s:12:\"atom_content\";s:871:\"<p>The first release candidate for WordPress 2.3 is now available.  We&#8217;ve spent the week since beta 3 fixing bugs and shaping RC1 into release candidate material.  If you would like try RC1 and help us get 2.3 ready for its final release on Monday the 24th,  <a href=\"http://wordpress.org/wordpress-2.3-RC1.zip\">download RC1 here</a> and <a href=\"http://trac.wordpress.org/newticket\">report any bugs you find</a>. Although we consider this release candidate to be stable, keep in mind that this is still pre-release software.  You may find some lingering bugs.  Please back up your database before upgrading.  If you have problems with RC1, you will not be able to revert back to your previous release without a database backup.</p>
<p>And a big thanks to those of you who have been testing the betas and now the RC.  Your efforts make 2.3 better for everyone.</p>
\";}}s:7:\"channel\";a:7:{s:5:\"title\";s:26:\"WordPress Development Blog\";s:4:\"link\";s:32:\"http://wordpress.org/development\";s:11:\"description\";s:33:\"WordPress development and updates\";s:7:\"pubdate\";s:31:\"Tue, 18 Mar 2008 08:33:19 +0000\";s:9:\"generator\";s:33:\"http://wordpress.org/?v=2.5-beta1\";s:8:\"language\";s:2:\"en\";s:7:\"tagline\";s:33:\"WordPress development and updates\";}s:9:\"textinput\";a:0:{}s:5:\"image\";a:0:{}s:9:\"feed_type\";s:3:\"RSS\";s:12:\"feed_version\";s:3:\"2.0\";s:5:\"stack\";a:0:{}s:9:\"inchannel\";b:0;s:6:\"initem\";b:0;s:9:\"incontent\";b:0;s:11:\"intextinput\";b:0;s:7:\"inimage\";b:0;s:13:\"current_field\";s:0:\"\";s:17:\"current_namespace\";b:0;s:19:\"_CONTENT_CONSTRUCTS\";a:6:{i:0;s:7:\"content\";i:1;s:7:\"summary\";i:2;s:4:\"info\";i:3;s:5:\"title\";i:4;s:7:\"tagline\";i:5;s:9:\"copyright\";}s:13:\"last_modified\";s:31:\"Tue, 18 Mar 2008 08:33:19 GMT
\";s:4:\"etag\";s:36:\"\"b6fce8b613a4d878a958c5886dd1737a\"
\";}', 'no');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('71', '0', 'rss_0ff4b43bd116a9d8720d689c80e7dfd4_ts', '1206384712', 'no');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('72', '0', 'rss_562d7ea726f1bd0f93d486aab2406986', 'O:9:\"MagpieRSS\":17:{s:6:\"parser\";i:0;s:12:\"current_item\";a:0:{}s:5:\"items\";a:0:{}s:7:\"channel\";a:4:{s:5:\"title\";s:47:\"Google Blog Search: link:http://localhost/blog/\";s:4:\"link\";s:106:\"http://blogsearch.google.com/blogsearch?hl=en&scoring=d&ie=ISO-8859-1&num=10&q=link:http://localhost/blog/\";s:11:\"description\";s:82:\"Your search - <b>link:http://localhost/blog/</b> - did not match any documents.   \";s:7:\"tagline\";s:82:\"Your search - <b>link:http://localhost/blog/</b> - did not match any documents.   \";}s:9:\"textinput\";a:0:{}s:5:\"image\";a:0:{}s:9:\"feed_type\";s:3:\"RSS\";s:12:\"feed_version\";s:3:\"2.0\";s:5:\"stack\";a:0:{}s:9:\"inchannel\";b:0;s:6:\"initem\";b:0;s:9:\"incontent\";b:0;s:11:\"intextinput\";b:0;s:7:\"inimage\";b:0;s:13:\"current_field\";s:0:\"\";s:17:\"current_namespace\";b:0;s:19:\"_CONTENT_CONSTRUCTS\";a:6:{i:0;s:7:\"content\";i:1;s:7:\"summary\";i:2;s:4:\"info\";i:3;s:5:\"title\";i:4;s:7:\"tagline\";i:5;s:9:\"copyright\";}}', 'no');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('73', '0', 'rss_562d7ea726f1bd0f93d486aab2406986_ts', '1205926591', 'no');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('74', '0', 'rss_867bd5c64f85878d03a060509cd2f92c', 'O:9:\"MagpieRSS\":19:{s:6:\"parser\";i:0;s:12:\"current_item\";a:0:{}s:5:\"items\";a:50:{i:0;a:7:{s:5:\"title\";s:29:\"Matt: MyBabyOurBaby.com on MU\";s:4:\"guid\";s:20:\"http://ma.tt/?p=4816\";s:4:\"link\";s:44:\"http://ma.tt/2008/03/mybabyourbabycom-on-mu/\";s:11:\"description\";s:543:\"<p><a href=\"http://mybabyourbaby.com/\">MyBabyOurBaby.com is a baby scrapbooking site</a> built on WordPress MU. They were <a href=\"http://mashable.com/2008/02/14/mybabyourbaby/\">written up in Mashable a few weeks ago</a>, surprised it hasn&#8217;t gotten more coverage. It&#8217;s a good example of what MU is capable of, joining <a href=\"http://edublogs.org/\">Edublogs</a>, <a href=\"http://allthingsd.com/\">AllthingsD</a>, and <a href=\"http://chickspeak.com/\">Chickspeak</a>. Any other awesome MU-powered sites you&#8217;ve seen recently?</p>\";s:7:\"pubdate\";s:31:\"Mon, 24 Mar 2008 08:14:57 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:7:\"summary\";s:543:\"<p><a href=\"http://mybabyourbaby.com/\">MyBabyOurBaby.com is a baby scrapbooking site</a> built on WordPress MU. They were <a href=\"http://mashable.com/2008/02/14/mybabyourbaby/\">written up in Mashable a few weeks ago</a>, surprised it hasn&#8217;t gotten more coverage. It&#8217;s a good example of what MU is capable of, joining <a href=\"http://edublogs.org/\">Edublogs</a>, <a href=\"http://allthingsd.com/\">AllthingsD</a>, and <a href=\"http://chickspeak.com/\">Chickspeak</a>. Any other awesome MU-powered sites you&#8217;ve seen recently?</p>\";}i:1;a:7:{s:5:\"title\";s:52:\"Weblog Tools Collection: 2.3 to 2.5 Database Changes\";s:4:\"guid\";s:79:\"http://weblogtoolscollection.com/archives/2008/03/23/23-to-25-database-changes/\";s:4:\"link\";s:79:\"http://weblogtoolscollection.com/archives/2008/03/23/23-to-25-database-changes/\";s:11:\"description\";s:1622:\"<p>I&#8217;ve seen a number of people tell others that WordPress 2.5 will have little to no database schema changes. It looks like that is no longer the case as <a href=\"http://weblogtoolscollection.com/news/topic/database-changes-from-23-to-25\" title=\"http://weblogtoolscollection.com/news/topic/database-changes-from-23-to-25\" target=\"_blank\">MichaelH has pointed out.</a></p>
<p class=\"post\"><strong>Changes to database schema from Version 2.3 to 2.5.</strong></p>
<p>*Table: comments</p>
<ul>
<li>Changed &#8216;comment_approved&#8217; to varchar(20) NOT NULL default &#8216;1&#8242;</li>
<li>Added KEY &#8216;comment_approved_date_gmt&#8217; (comment_approved, comment_date_gmt)</li>
<li>Added KEY &#8216;comment_date_gmt&#8217; (comment_date_gmt)</li>
</ul>
<p>*Table: links</p>
<ul>
<li>Changed &#8216;link_visible&#8217; to varchar(20) NOT NULL default &#8216;Y&#8217;</li>
</ul>
<p>*Table: options</p>
<ul>
<li>Changed &#8216;autoload&#8217; to varchar(20) NOT NULL default &#8216;yes&#8217;</li>
</ul>
<p>*Table: posts</p>
<ul>
<li>Changed &#8216;post_status&#8217; to varchar(20) NOT NULL default &#8216;publish&#8217;</li>
<li>Changed &#8216;comment_status&#8217; to varchar(20) NOT NULL default &#8216;open&#8217;</li>
<li>Changed &#8216;ping_status&#8217; to varchar(20) NOT NULL default &#8216;open&#8217;</li>
</ul>
<p>*Table: term_relationships</p>
<ul> Added &#8216;term_order&#8217; int(11) NOT NULL default 0</ul>
<p>Thanks to MichaelH for putting these changes together. This information is especially useful to plugin and theme authors as it lets them know if their particular project will break.</p>\";s:7:\"pubdate\";s:31:\"Sun, 23 Mar 2008 13:50:45 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Jeffro2pt0\";}s:7:\"summary\";s:1622:\"<p>I&#8217;ve seen a number of people tell others that WordPress 2.5 will have little to no database schema changes. It looks like that is no longer the case as <a href=\"http://weblogtoolscollection.com/news/topic/database-changes-from-23-to-25\" title=\"http://weblogtoolscollection.com/news/topic/database-changes-from-23-to-25\" target=\"_blank\">MichaelH has pointed out.</a></p>
<p class=\"post\"><strong>Changes to database schema from Version 2.3 to 2.5.</strong></p>
<p>*Table: comments</p>
<ul>
<li>Changed &#8216;comment_approved&#8217; to varchar(20) NOT NULL default &#8216;1&#8242;</li>
<li>Added KEY &#8216;comment_approved_date_gmt&#8217; (comment_approved, comment_date_gmt)</li>
<li>Added KEY &#8216;comment_date_gmt&#8217; (comment_date_gmt)</li>
</ul>
<p>*Table: links</p>
<ul>
<li>Changed &#8216;link_visible&#8217; to varchar(20) NOT NULL default &#8216;Y&#8217;</li>
</ul>
<p>*Table: options</p>
<ul>
<li>Changed &#8216;autoload&#8217; to varchar(20) NOT NULL default &#8216;yes&#8217;</li>
</ul>
<p>*Table: posts</p>
<ul>
<li>Changed &#8216;post_status&#8217; to varchar(20) NOT NULL default &#8216;publish&#8217;</li>
<li>Changed &#8216;comment_status&#8217; to varchar(20) NOT NULL default &#8216;open&#8217;</li>
<li>Changed &#8216;ping_status&#8217; to varchar(20) NOT NULL default &#8216;open&#8217;</li>
</ul>
<p>*Table: term_relationships</p>
<ul> Added &#8216;term_order&#8217; int(11) NOT NULL default 0</ul>
<p>Thanks to MichaelH for putting these changes together. This information is especially useful to plugin and theme authors as it lets them know if their particular project will break.</p>\";}i:2;a:7:{s:5:\"title\";s:53:\"Weblog Tools Collection: After WordPress Is Installed\";s:4:\"guid\";s:82:\"http://weblogtoolscollection.com/archives/2008/03/22/after-wordpress-is-installed/\";s:4:\"link\";s:82:\"http://weblogtoolscollection.com/archives/2008/03/22/after-wordpress-is-installed/\";s:11:\"description\";s:1818:\"<p><strong>Jason Blanton</strong> of <strong>BloggingTips</strong> has put together a <a href=\"http://www.bloggingtips.com/2008/03/20/ok-wordpress-is-installed-now-what/\" title=\"http://www.bloggingtips.com/2008/03/20/ok-wordpress-is-installed-now-what/\" target=\"_blank\">nice little article</a> which covers five things you should do after you install your self hosted WordPress blog. These five things include:</p>
<ol>
<li><strong>Changing the permalink structure</strong></li>
<li><strong>Change the default theme</strong></li>
<li><strong>Update your ping services</strong></li>
<li><strong>Activate the akismet plugin</strong></li>
<li><strong>Burn your feed with FeedBurner<br />
</strong></li>
</ol>
<p>One item that I would add to this list is to figure out which stats program or service to use. You can use <a href=\"http://wordpress.org/extend/plugins/stats/\" title=\"http://wordpress.org/extend/plugins/stats/\" target=\"_blank\">WordPress.com Stats</a> which is a detailed stats plugin or you can use something like <a href=\"http://www.google.com/analytics/\" title=\"http://www.google.com/analytics/\" target=\"_blank\">Google Analytics</a> or <a href=\"http://haveamint.com/\" title=\"http://haveamint.com/\" target=\"_blank\">MINT</a>. One thing that I wish I could do if I could start over would be to integrate one of these nice statistical packages as they really come in handy down the road.</p>
<p>Jason mentions that this is only the first in a series of articles which will cover various things that you might want to tweak as you go along with using WordPress.</p>
<p>Although this short and quick guide is great for newcomers to WordPress, what about those who have established blogs? If you could go back in time and change the way or ways in which you began to use WordPress, what would those changes be?</p>\";s:7:\"pubdate\";s:31:\"Sat, 22 Mar 2008 21:18:00 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Jeffro2pt0\";}s:7:\"summary\";s:1818:\"<p><strong>Jason Blanton</strong> of <strong>BloggingTips</strong> has put together a <a href=\"http://www.bloggingtips.com/2008/03/20/ok-wordpress-is-installed-now-what/\" title=\"http://www.bloggingtips.com/2008/03/20/ok-wordpress-is-installed-now-what/\" target=\"_blank\">nice little article</a> which covers five things you should do after you install your self hosted WordPress blog. These five things include:</p>
<ol>
<li><strong>Changing the permalink structure</strong></li>
<li><strong>Change the default theme</strong></li>
<li><strong>Update your ping services</strong></li>
<li><strong>Activate the akismet plugin</strong></li>
<li><strong>Burn your feed with FeedBurner<br />
</strong></li>
</ol>
<p>One item that I would add to this list is to figure out which stats program or service to use. You can use <a href=\"http://wordpress.org/extend/plugins/stats/\" title=\"http://wordpress.org/extend/plugins/stats/\" target=\"_blank\">WordPress.com Stats</a> which is a detailed stats plugin or you can use something like <a href=\"http://www.google.com/analytics/\" title=\"http://www.google.com/analytics/\" target=\"_blank\">Google Analytics</a> or <a href=\"http://haveamint.com/\" title=\"http://haveamint.com/\" target=\"_blank\">MINT</a>. One thing that I wish I could do if I could start over would be to integrate one of these nice statistical packages as they really come in handy down the road.</p>
<p>Jason mentions that this is only the first in a series of articles which will cover various things that you might want to tweak as you go along with using WordPress.</p>
<p>Although this short and quick guide is great for newcomers to WordPress, what about those who have established blogs? If you could go back in time and change the way or ways in which you began to use WordPress, what would those changes be?</p>\";}i:3;a:7:{s:5:\"title\";s:21:\"Matt: Dallas WordCamp\";s:4:\"guid\";s:20:\"http://ma.tt/?p=3572\";s:4:\"link\";s:37:\"http://ma.tt/2008/03/dallas-wordcamp/\";s:11:\"description\";s:230:\"<p><a href=\"http://dallas.wordcamp.org/\">I&#8217;m looking forward to WordCamp Dallas next week</a>. I&#8217;m in Houston getting my wisdom teeth out on Monday, but I&#8217;m hoping to be back at full-speed for the conference.</p>\";s:7:\"pubdate\";s:31:\"Sat, 22 Mar 2008 05:08:33 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:7:\"summary\";s:230:\"<p><a href=\"http://dallas.wordcamp.org/\">I&#8217;m looking forward to WordCamp Dallas next week</a>. I&#8217;m in Houston getting my wisdom teeth out on Monday, but I&#8217;m hoping to be back at full-speed for the conference.</p>\";}i:4;a:7:{s:5:\"title\";s:54:\"Weblog Tools Collection: Battle of the comment add-ons\";s:4:\"guid\";s:83:\"http://weblogtoolscollection.com/archives/2008/03/21/battle-of-the-comment-add-ons/\";s:4:\"link\";s:83:\"http://weblogtoolscollection.com/archives/2008/03/21/battle-of-the-comment-add-ons/\";s:11:\"description\";s:335:\"<p><a href=\"http://www.webware.com/8301-1_109-9898697-2.html\">Battle of the comment add-ons</a>: Webware performs a comparison of six comment add-ons for WordPress and MT and puts together a list of the various features that each of them have to offer. <a href=\"http://www.disqus.com/\">Disqus</a> comes out on top in their opinion.</p>\";s:7:\"pubdate\";s:31:\"Fri, 21 Mar 2008 16:22:27 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Mark Ghosh\";}s:7:\"summary\";s:335:\"<p><a href=\"http://www.webware.com/8301-1_109-9898697-2.html\">Battle of the comment add-ons</a>: Webware performs a comparison of six comment add-ons for WordPress and MT and puts together a list of the various features that each of them have to offer. <a href=\"http://www.disqus.com/\">Disqus</a> comes out on top in their opinion.</p>\";}i:5;a:7:{s:5:\"title\";s:53:\"Weblog Tools Collection: Possibility Of A WordCamp UK\";s:4:\"guid\";s:82:\"http://weblogtoolscollection.com/archives/2008/03/21/possibility-of-a-wordcamp-uk/\";s:4:\"link\";s:82:\"http://weblogtoolscollection.com/archives/2008/03/21/possibility-of-a-wordcamp-uk/\";s:11:\"description\";s:1166:\"<p>Tony Scott has published an entry on his blog entitled <a href=\"http://tonyscott.org.uk/2008/03/19/wordcamp-uk-proposal/\" title=\"http://tonyscott.org.uk/2008/03/19/wordcamp-uk-proposal/\" target=\"_blank\">WordCamp UK proposal</a>. Inspired by <a href=\"http://dallas.wordcamp.org/\" title=\"http://dallas.wordcamp.org/\" target=\"_blank\">WordCamp Dallas</a>, Tony is looking at quite possibly holding the first ever WordCamp within the UK. His blog post will serve as a gauge of interest. So far, the topics of discussion regarding this event center around:</p>
<ul>
<li>Format: A little more structured, such as <a href=\"http://dallas.wordcamp.org/\">WordCamp Dallas 2008</a>, or more <a href=\"http://en.wikipedia.org/wiki/BarCamp\">BarCamp</a>, as <a href=\"http://lorelle.wordpress.com/2008/01/30/wordcamp-hamburg-germany/\">WordCamp Hamburg</a>?</li>
<li>Size: Number of attendees?</li>
<li>Location: London or other city? Take into account travelling and accommodation.</li>
<li>Sponsorship: Would be good to subsidize the event!</li>
</ul>
<p>If you would like to participate in or help organize the event, be sure to stop by Tony&#8217;s blog and leave a comment.</p>\";s:7:\"pubdate\";s:31:\"Fri, 21 Mar 2008 12:12:11 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Jeffro2pt0\";}s:7:\"summary\";s:1166:\"<p>Tony Scott has published an entry on his blog entitled <a href=\"http://tonyscott.org.uk/2008/03/19/wordcamp-uk-proposal/\" title=\"http://tonyscott.org.uk/2008/03/19/wordcamp-uk-proposal/\" target=\"_blank\">WordCamp UK proposal</a>. Inspired by <a href=\"http://dallas.wordcamp.org/\" title=\"http://dallas.wordcamp.org/\" target=\"_blank\">WordCamp Dallas</a>, Tony is looking at quite possibly holding the first ever WordCamp within the UK. His blog post will serve as a gauge of interest. So far, the topics of discussion regarding this event center around:</p>
<ul>
<li>Format: A little more structured, such as <a href=\"http://dallas.wordcamp.org/\">WordCamp Dallas 2008</a>, or more <a href=\"http://en.wikipedia.org/wiki/BarCamp\">BarCamp</a>, as <a href=\"http://lorelle.wordpress.com/2008/01/30/wordcamp-hamburg-germany/\">WordCamp Hamburg</a>?</li>
<li>Size: Number of attendees?</li>
<li>Location: London or other city? Take into account travelling and accommodation.</li>
<li>Sponsorship: Would be good to subsidize the event!</li>
</ul>
<p>If you would like to participate in or help organize the event, be sure to stop by Tony&#8217;s blog and leave a comment.</p>\";}i:6;a:7:{s:5:\"title\";s:64:\"Weblog Tools Collection: WordPress 2.5 Object Cache Improvements\";s:4:\"guid\";s:92:\"http://weblogtoolscollection.com/archives/2008/03/20/wordpress-25-object-cache-improvements/\";s:4:\"link\";s:92:\"http://weblogtoolscollection.com/archives/2008/03/20/wordpress-25-object-cache-improvements/\";s:11:\"description\";s:1850:\"<p><a href=\"http://neosmart.net/blog/2008/wordpress-25-and-the-object-cache/\">WordPress 2.5 and the Object Cache</a>: This comprehensive article by Neosmart discusses the caching changes that are going into place with WordPress 2.5. The article has very pertinent links, explains the use and application of the various types of object caches in WordPress and how they are being changed and improved in this new version. I will not steal Neosmart&#8217;s thunder by revealing much here, but if you are interested in understanding the nuances, history and best practices of caching in WordPress (primarily Object Caching), head over to the link above.</p>
<p>Worthy of mentioning however, is that I have never used any type of caching on this blog beside the occasional testing of code and plugins. I love the dynamic nature of the content that I help create and I cherish the highly dynamic nature of WordPress. That is one of the properties of this excellent tool that attracted me to it in the first place. Every site that refers you here, every post you click on, every page you visit, <a href=\"http://weblogtoolscollection.com/archives/2007/06/04/wp-plugin-where-did-they-go-from-here/\">every link you follow</a>, <a href=\"http://money.bigbucksblogger.com/\">every comment</a> <a href=\"http://akismet.com\">you make</a>, <a href=\"http://lesterchan.net/portfolio/programming.php\">every post you rate</a> and <a href=\"http://weblogtoolscollection.com/search-beta.php\">every search you perform</a> is recorded and is used in some way to provide you with a better browsing and reading experience. Even the ads are displayed according to your visiting habits and your participation on this blog (and I have Ozh to thank <a href=\"http://planetozh.com/blog/my-projects/wordpress-plugin-who-sees-ads-control-adsense-display/\">for much of that code</a>).</p>\";s:7:\"pubdate\";s:31:\"Fri, 21 Mar 2008 01:20:13 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Mark Ghosh\";}s:7:\"summary\";s:1850:\"<p><a href=\"http://neosmart.net/blog/2008/wordpress-25-and-the-object-cache/\">WordPress 2.5 and the Object Cache</a>: This comprehensive article by Neosmart discusses the caching changes that are going into place with WordPress 2.5. The article has very pertinent links, explains the use and application of the various types of object caches in WordPress and how they are being changed and improved in this new version. I will not steal Neosmart&#8217;s thunder by revealing much here, but if you are interested in understanding the nuances, history and best practices of caching in WordPress (primarily Object Caching), head over to the link above.</p>
<p>Worthy of mentioning however, is that I have never used any type of caching on this blog beside the occasional testing of code and plugins. I love the dynamic nature of the content that I help create and I cherish the highly dynamic nature of WordPress. That is one of the properties of this excellent tool that attracted me to it in the first place. Every site that refers you here, every post you click on, every page you visit, <a href=\"http://weblogtoolscollection.com/archives/2007/06/04/wp-plugin-where-did-they-go-from-here/\">every link you follow</a>, <a href=\"http://money.bigbucksblogger.com/\">every comment</a> <a href=\"http://akismet.com\">you make</a>, <a href=\"http://lesterchan.net/portfolio/programming.php\">every post you rate</a> and <a href=\"http://weblogtoolscollection.com/search-beta.php\">every search you perform</a> is recorded and is used in some way to provide you with a better browsing and reading experience. Even the ads are displayed according to your visiting habits and your participation on this blog (and I have Ozh to thank <a href=\"http://planetozh.com/blog/my-projects/wordpress-plugin-who-sees-ads-control-adsense-display/\">for much of that code</a>).</p>\";}i:7;a:7:{s:5:\"title\";s:16:\"Matt: Share Icon\";s:4:\"guid\";s:20:\"http://ma.tt/?p=3571\";s:4:\"link\";s:32:\"http://ma.tt/2008/03/share-icon/\";s:11:\"description\";s:318:\"<p><a href=\"http://shareicons.com/\">The open source Share Icon is back</a>, after its trace disappearing from the internet for a time. Good on <a href=\"http://sharethis.com/\">Share This</a> for promoting this project to the community. The spread of this icon, which already is incredibly ubiquitous, will continue.</p>\";s:7:\"pubdate\";s:31:\"Thu, 20 Mar 2008 17:51:55 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:7:\"summary\";s:318:\"<p><a href=\"http://shareicons.com/\">The open source Share Icon is back</a>, after its trace disappearing from the internet for a time. Good on <a href=\"http://sharethis.com/\">Share This</a> for promoting this project to the community. The spread of this icon, which already is incredibly ubiquitous, will continue.</p>\";}i:8;a:7:{s:5:\"title\";s:31:\"Mark Jaquith: The Comment Inbox\";s:4:\"guid\";s:39:\"http://markjaquith.wordpress.com/?p=139\";s:4:\"link\";s:62:\"http://markjaquith.wordpress.com/2008/03/20/the-comment-inbox/\";s:11:\"description\";s:5469:\"<div class=\"snap_preview\"><br /><p>I&#8217;ve been whiteboarding a new WordPress comment management interface for about a year now &#8212; since before the <a href=\"http://www.happycog.com/\">Happy Cog</a> admin redesign started.  I had some lofty goals (admittedly some of them were borderline unachievable), but my main goal was this: make comment management more like managing a Gmail inbox.  There are typically four actions you can perform on a message in your Gmail inbox (other than reading it, that is): reply, archive, mark as spam, delete.  And &#8220;reply&#8221; is sort of diversion, so let&#8217;s make that three actions: archive, mark as spam, delete.  The great thing is that if you do it right, at the end, you&#8217;re left with an empty inbox, and <strong>you know all your open loops have been addressed</strong>.  It&#8217;s a good feeling, and it lets you know that the next time you dive into your inbox, you&#8217;re starting where you left off.</p>
<p>With WordPress comment management, it was more like jumping on a passing train of infinite length, and trying to deal with all of the passengers on board, without knowing which passengers have been dealt with (do you walk towards the caboose or the engine!?).  When you&#8217;re done, you jump off, land on a cactus, and probably don&#8217;t feel like doing it again.</p>
<p>So my goal was to move away from the infinite train of confusion and more to the zen-like GTD tranquility of the Gmail inbox.  <a href=\"http://www.bobulate.com/\">Liz Danzico</a> from Happy Cog alluded to a similar goal at WordCamp SF 2007.  Although the Happy Cog redesign of the comment management screens is worlds better, it didn&#8217;t fundamentally address the speeding train issue.  And to be honest, I&#8217;ve been stuck on the problem for months.  I couldn&#8217;t think of an implementation that wouldn&#8217;t be a massively disruptive (and risky) overhaul&#8230; until tonight &#8212; kept awake by SXSW-inflicted cough and sore throat that refuse to die, I had my epiphany.  <strong>The solution is already here.</strong>  I&#8217;ve been searching for something that WordPress already does.</p>
<p>Drumroll please.  The solution is: <strong>the comment moderation panel</strong>.  Full stop.</p>
<p>I&#8217;ve noticed that <a href=\"http://ma.tt/\">Matt Mullenweg</a> hasn&#8217;t quite been as dissatisfied with comment management as I have, and there&#8217;s a simple reason: he approves every comment that appears on his blog, whereas I deal with the comments after the fact.</p>
<p>Now I know what you&#8217;re thinking&#8230; <strong>but what if I don&#8217;t want to have to approve comments before they appear on my blog?</strong>  Simple: tweak your blog to publicly show unapproved comments!  Now there are three comment statuses in WordPress: approved (1), unapproved (0), and spam.  With my proposed system those can be virtually &#8220;rethought&#8221; as: seen (1), unseen (0) and spam.  Both &#8220;seen&#8221; and &#8220;unseen&#8221; comments would show on the blog immediately, but &#8220;unseen&#8221; comments would show up in the moderation queue (which, thanks to the Happy Cog redesign, shows its contents in a colorful comment bubble on every WordPress admin page).  Welcome to your comment inbox.  There are three types of comments: ham (good comments), spam (advertisements), and bacn (offtopic, lame, rude, abusive, overly-self-promotional-but-not-quite-spam), and there are three corresponding actions: archive (by clicking the &#8220;approve&#8221; link), mark as spam, delete &#8212; just like in Gmail.</p>
<p>I&#8217;m going to write a plugin that does this as soon as I can, but I&#8217;m also going to be looking for a way to work this into WordPress core, as I think it would really help people manage their comment load.</p>
<p>So what do you think?  Is this brilliant?  Am I completely off my rocker?  Am I an idiot for not seeing this solution before now?</p>
<p><ins datetime=\"00\"><strong>Update</strong>: <a href=\"http://txfx.net/code/wordpress/comment-inbox/\">Here&#8217;s the plugin!</a></ins></p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/markjaquith.wordpress.com/139/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/markjaquith.wordpress.com/139/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/markjaquith.wordpress.com/139/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/markjaquith.wordpress.com/139/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/markjaquith.wordpress.com/139/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/markjaquith.wordpress.com/139/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/markjaquith.wordpress.com/139/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/markjaquith.wordpress.com/139/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/markjaquith.wordpress.com/139/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/markjaquith.wordpress.com/139/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/markjaquith.wordpress.com/139/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/markjaquith.wordpress.com/139/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=markjaquith.wordpress.com&blog=316&post=139&subd=markjaquith&ref=&feed=1\" /></div>\";s:7:\"pubdate\";s:31:\"Thu, 20 Mar 2008 08:36:01 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:12:\"Mark Jaquith\";}s:7:\"summary\";s:5469:\"<div class=\"snap_preview\"><br /><p>I&#8217;ve been whiteboarding a new WordPress comment management interface for about a year now &#8212; since before the <a href=\"http://www.happycog.com/\">Happy Cog</a> admin redesign started.  I had some lofty goals (admittedly some of them were borderline unachievable), but my main goal was this: make comment management more like managing a Gmail inbox.  There are typically four actions you can perform on a message in your Gmail inbox (other than reading it, that is): reply, archive, mark as spam, delete.  And &#8220;reply&#8221; is sort of diversion, so let&#8217;s make that three actions: archive, mark as spam, delete.  The great thing is that if you do it right, at the end, you&#8217;re left with an empty inbox, and <strong>you know all your open loops have been addressed</strong>.  It&#8217;s a good feeling, and it lets you know that the next time you dive into your inbox, you&#8217;re starting where you left off.</p>
<p>With WordPress comment management, it was more like jumping on a passing train of infinite length, and trying to deal with all of the passengers on board, without knowing which passengers have been dealt with (do you walk towards the caboose or the engine!?).  When you&#8217;re done, you jump off, land on a cactus, and probably don&#8217;t feel like doing it again.</p>
<p>So my goal was to move away from the infinite train of confusion and more to the zen-like GTD tranquility of the Gmail inbox.  <a href=\"http://www.bobulate.com/\">Liz Danzico</a> from Happy Cog alluded to a similar goal at WordCamp SF 2007.  Although the Happy Cog redesign of the comment management screens is worlds better, it didn&#8217;t fundamentally address the speeding train issue.  And to be honest, I&#8217;ve been stuck on the problem for months.  I couldn&#8217;t think of an implementation that wouldn&#8217;t be a massively disruptive (and risky) overhaul&#8230; until tonight &#8212; kept awake by SXSW-inflicted cough and sore throat that refuse to die, I had my epiphany.  <strong>The solution is already here.</strong>  I&#8217;ve been searching for something that WordPress already does.</p>
<p>Drumroll please.  The solution is: <strong>the comment moderation panel</strong>.  Full stop.</p>
<p>I&#8217;ve noticed that <a href=\"http://ma.tt/\">Matt Mullenweg</a> hasn&#8217;t quite been as dissatisfied with comment management as I have, and there&#8217;s a simple reason: he approves every comment that appears on his blog, whereas I deal with the comments after the fact.</p>
<p>Now I know what you&#8217;re thinking&#8230; <strong>but what if I don&#8217;t want to have to approve comments before they appear on my blog?</strong>  Simple: tweak your blog to publicly show unapproved comments!  Now there are three comment statuses in WordPress: approved (1), unapproved (0), and spam.  With my proposed system those can be virtually &#8220;rethought&#8221; as: seen (1), unseen (0) and spam.  Both &#8220;seen&#8221; and &#8220;unseen&#8221; comments would show on the blog immediately, but &#8220;unseen&#8221; comments would show up in the moderation queue (which, thanks to the Happy Cog redesign, shows its contents in a colorful comment bubble on every WordPress admin page).  Welcome to your comment inbox.  There are three types of comments: ham (good comments), spam (advertisements), and bacn (offtopic, lame, rude, abusive, overly-self-promotional-but-not-quite-spam), and there are three corresponding actions: archive (by clicking the &#8220;approve&#8221; link), mark as spam, delete &#8212; just like in Gmail.</p>
<p>I&#8217;m going to write a plugin that does this as soon as I can, but I&#8217;m also going to be looking for a way to work this into WordPress core, as I think it would really help people manage their comment load.</p>
<p>So what do you think?  Is this brilliant?  Am I completely off my rocker?  Am I an idiot for not seeing this solution before now?</p>
<p><ins datetime=\"00\"><strong>Update</strong>: <a href=\"http://txfx.net/code/wordpress/comment-inbox/\">Here&#8217;s the plugin!</a></ins></p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/markjaquith.wordpress.com/139/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/markjaquith.wordpress.com/139/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/markjaquith.wordpress.com/139/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/markjaquith.wordpress.com/139/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/markjaquith.wordpress.com/139/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/markjaquith.wordpress.com/139/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/markjaquith.wordpress.com/139/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/markjaquith.wordpress.com/139/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/markjaquith.wordpress.com/139/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/markjaquith.wordpress.com/139/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/markjaquith.wordpress.com/139/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/markjaquith.wordpress.com/139/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=markjaquith.wordpress.com&blog=316&post=139&subd=markjaquith&ref=&feed=1\" /></div>\";}i:9;a:7:{s:5:\"title\";s:57:\"Weblog Tools Collection: WordPress Theme Release for 3/19\";s:4:\"guid\";s:85:\"http://weblogtoolscollection.com/archives/2008/03/19/wordpress-theme-release-for-319/\";s:4:\"link\";s:85:\"http://weblogtoolscollection.com/archives/2008/03/19/wordpress-theme-release-for-319/\";s:11:\"description\";s:1771:\"<h3>Two Column Themes</h3>
<p><strong>Triology Next</strong></p>
<p><a href=\"http://weblogtoolscollection.com/b2-img/2008/03/triology-next-thumbnail.png\"><img height=\"127\" alt=\"triology-next-thumbnail\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/triology-next-thumbnail-thumb.png\" width=\"204\" border=\"0\" /></a> </p>
<p>This is a two column themes with 4 different variations. The theme comes inbuilt with a lot of customizations and inbuilt plugins.</p>
<p><a href=\"http://www.reviewsaurus.com/wordpress-themes/\">Demo / Release Page / Download</a></p>
<h3>Three Column Themes</h3>
<p><strong>Black and Red</strong></p>
<p><img height=\"145\" alt=\"black-white-thumbnail\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/black-white-thumbnail.png\" width=\"200\" border=\"0\" /> </p>
<p>Black and Red is a simple three column theme. The theme is aesthetic to look at and also comes in Black and Blue colors.</p>
<p><a href=\"http://wpmania.com/20080316/15/black-red-theme/\">Release Page</a> | <a href=\"http://wpmania.com/download/2/\">Download</a></p>
<p><strong>Aperio Prototype</strong></p>
<p><img height=\"137\" alt=\"aperio-thumbnail\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/aperio-thumbnail.png\" width=\"200\" border=\"0\" /> </p>
<p>This is a theme specifically created for image heavy sites: photographers, illustrators, designers. It is built on Sandbox for power and flexibility.</p>
<p><a href=\"http://www.futurosity.com/wpthemes/index.php?wptheme=Futurosity+Aperio+Prototype\">Demo</a> | <a href=\"http://www.futurosity.com/wordpress-theme-futurosity-aperio-prototype\">Release Page</a> | <a href=\"http://www.futurosity.com/mint/pepper/tillkruess/downloads/tracker.php?uri=http%3A//www.futurosity.com/files/FuturosityAperioPrototype.zip\">Download</a></p>\";s:7:\"pubdate\";s:31:\"Thu, 20 Mar 2008 03:55:48 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:12:\"Keith Dsouza\";}s:7:\"summary\";s:1771:\"<h3>Two Column Themes</h3>
<p><strong>Triology Next</strong></p>
<p><a href=\"http://weblogtoolscollection.com/b2-img/2008/03/triology-next-thumbnail.png\"><img height=\"127\" alt=\"triology-next-thumbnail\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/triology-next-thumbnail-thumb.png\" width=\"204\" border=\"0\" /></a> </p>
<p>This is a two column themes with 4 different variations. The theme comes inbuilt with a lot of customizations and inbuilt plugins.</p>
<p><a href=\"http://www.reviewsaurus.com/wordpress-themes/\">Demo / Release Page / Download</a></p>
<h3>Three Column Themes</h3>
<p><strong>Black and Red</strong></p>
<p><img height=\"145\" alt=\"black-white-thumbnail\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/black-white-thumbnail.png\" width=\"200\" border=\"0\" /> </p>
<p>Black and Red is a simple three column theme. The theme is aesthetic to look at and also comes in Black and Blue colors.</p>
<p><a href=\"http://wpmania.com/20080316/15/black-red-theme/\">Release Page</a> | <a href=\"http://wpmania.com/download/2/\">Download</a></p>
<p><strong>Aperio Prototype</strong></p>
<p><img height=\"137\" alt=\"aperio-thumbnail\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/aperio-thumbnail.png\" width=\"200\" border=\"0\" /> </p>
<p>This is a theme specifically created for image heavy sites: photographers, illustrators, designers. It is built on Sandbox for power and flexibility.</p>
<p><a href=\"http://www.futurosity.com/wpthemes/index.php?wptheme=Futurosity+Aperio+Prototype\">Demo</a> | <a href=\"http://www.futurosity.com/wordpress-theme-futurosity-aperio-prototype\">Release Page</a> | <a href=\"http://www.futurosity.com/mint/pepper/tillkruess/downloads/tracker.php?uri=http%3A//www.futurosity.com/files/FuturosityAperioPrototype.zip\">Download</a></p>\";}i:10;a:7:{s:5:\"title\";s:59:\"Weblog Tools Collection: Where You Download a Theme Matters\";s:4:\"guid\";s:88:\"http://weblogtoolscollection.com/archives/2008/03/19/where-you-download-a-theme-matters/\";s:4:\"link\";s:88:\"http://weblogtoolscollection.com/archives/2008/03/19/where-you-download-a-theme-matters/\";s:11:\"description\";s:3186:\"<p>Over the weekend, I <a href=\"http://www.winextra.com/2008/03/16/more-wordpress-theme-viewer-screenshots/\" title=\"http://www.winextra.com/2008/03/16/more-wordpress-theme-viewer-screenshots/\" target=\"_blank\">caught a glimpse</a> of what was supposedly a new design for the <a href=\"http://themes.wordpress.net/\" title=\"http://themes.wordpress.net/\" target=\"_blank\">WordPress Themes Repository</a>. As was explained by Steven Hodson, the screen shots were taken from his browser when he visited the theme repository. The screen shots showcase a carousel view for browsing through themes, icons for navigating and downloading themes, a single page view which displays detailed information regarding the theme ect. No matter how hard I and many others tried, we couldn&#8217;t get the theme repository to display in the same way that it did for Steve.</p>
<p>Lloyd Budd stopped by<a href=\"http://www.jeffro2pt0.com/new-design-for-theme-respository#comments\" title=\"http://www.jeffro2pt0.com/new-design-for-theme-respository#comments\" target=\"_blank\"> my blog post</a> and left this as the comment:</p>
<blockquote><p>Hi Jeff, those screen shots are fake. I’m 100% certain. I just checked and there isn’t any code, nor has there been, to produce that type of experience.</p></blockquote>
<p>I&#8217;ve been subscribed to Steve&#8217;s blog for quite some time and he is not one to post fake images or fake content. I believe that one of two things happened. The first is that, this is quite possibly a fluke. I don&#8217;t know how I would explain it, except that it&#8217;s wrong. The second thing is that this could be a theme repository setup on a website to mimic the current repository albeit with a different way of browsing themes. After browsing the web for quite some time looking for themes, I have come across numerous sites which have a theme showcase which is nothing more than a different setup for the theme repository.</p>
<p>Then, a fellow WordPress blogger <a href=\"http://ohmike.com/\" title=\"http://ohmike.com/\" target=\"_blank\">Mike</a> sent me an <a href=\"http://5thirtyone.com/archives/870\" title=\"http://5thirtyone.com/archives/870\" target=\"_blank\">article that was written by 5thirtyone</a> which reminds users that you have to be careful where you download your WordPress themes from. I must of missed the boat back when this event took place, but there was an incident where themes that were hosted on the official theme repository were being hosted on 3rd-party theme galleries such as WP Sphere. These themes were the same with the exception that the themes that were being hosted on the 3rd-party theme gallery websites were riddled with malicious code/malware.</p>
<p>I think now would be a good time to remind current users, especially new ones of WordPress to only download themes from the author&#8217;s website or from the official <a href=\"http://themes.wordpress.net/\" title=\"http://themes.wordpress.net/\" target=\"_blank\">WordPress Themes Repository</a>. Please note that not every site hosting a WordPress theme is bad. However, downloading a theme that is outside of the authors website or the repository is a risk that may not be worth taking.</p>\";s:7:\"pubdate\";s:31:\"Wed, 19 Mar 2008 22:32:15 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Jeffro2pt0\";}s:7:\"summary\";s:3186:\"<p>Over the weekend, I <a href=\"http://www.winextra.com/2008/03/16/more-wordpress-theme-viewer-screenshots/\" title=\"http://www.winextra.com/2008/03/16/more-wordpress-theme-viewer-screenshots/\" target=\"_blank\">caught a glimpse</a> of what was supposedly a new design for the <a href=\"http://themes.wordpress.net/\" title=\"http://themes.wordpress.net/\" target=\"_blank\">WordPress Themes Repository</a>. As was explained by Steven Hodson, the screen shots were taken from his browser when he visited the theme repository. The screen shots showcase a carousel view for browsing through themes, icons for navigating and downloading themes, a single page view which displays detailed information regarding the theme ect. No matter how hard I and many others tried, we couldn&#8217;t get the theme repository to display in the same way that it did for Steve.</p>
<p>Lloyd Budd stopped by<a href=\"http://www.jeffro2pt0.com/new-design-for-theme-respository#comments\" title=\"http://www.jeffro2pt0.com/new-design-for-theme-respository#comments\" target=\"_blank\"> my blog post</a> and left this as the comment:</p>
<blockquote><p>Hi Jeff, those screen shots are fake. I’m 100% certain. I just checked and there isn’t any code, nor has there been, to produce that type of experience.</p></blockquote>
<p>I&#8217;ve been subscribed to Steve&#8217;s blog for quite some time and he is not one to post fake images or fake content. I believe that one of two things happened. The first is that, this is quite possibly a fluke. I don&#8217;t know how I would explain it, except that it&#8217;s wrong. The second thing is that this could be a theme repository setup on a website to mimic the current repository albeit with a different way of browsing themes. After browsing the web for quite some time looking for themes, I have come across numerous sites which have a theme showcase which is nothing more than a different setup for the theme repository.</p>
<p>Then, a fellow WordPress blogger <a href=\"http://ohmike.com/\" title=\"http://ohmike.com/\" target=\"_blank\">Mike</a> sent me an <a href=\"http://5thirtyone.com/archives/870\" title=\"http://5thirtyone.com/archives/870\" target=\"_blank\">article that was written by 5thirtyone</a> which reminds users that you have to be careful where you download your WordPress themes from. I must of missed the boat back when this event took place, but there was an incident where themes that were hosted on the official theme repository were being hosted on 3rd-party theme galleries such as WP Sphere. These themes were the same with the exception that the themes that were being hosted on the 3rd-party theme gallery websites were riddled with malicious code/malware.</p>
<p>I think now would be a good time to remind current users, especially new ones of WordPress to only download themes from the author&#8217;s website or from the official <a href=\"http://themes.wordpress.net/\" title=\"http://themes.wordpress.net/\" target=\"_blank\">WordPress Themes Repository</a>. Please note that not every site hosting a WordPress theme is bad. However, downloading a theme that is outside of the authors website or the repository is a risk that may not be worth taking.</p>\";}i:11;a:7:{s:5:\"title\";s:61:\"Weblog Tools Collection: AJAXed WordPress Video Plugin Review\";s:4:\"guid\";s:90:\"http://weblogtoolscollection.com/archives/2008/03/18/ajaxed-wordpress-video-plugin-review/\";s:4:\"link\";s:90:\"http://weblogtoolscollection.com/archives/2008/03/18/ajaxed-wordpress-video-plugin-review/\";s:11:\"description\";s:1409:\"<p></p>
<p>This is my first video plugin review for WeblogToolsCollection, so any feedback is appreciated.The plugin being reviewed is <a href=\"http://wordpress.org/extend/plugins/ajaxd-wordpress/\">AJAXed WordPress v1.11.1</a> (<a href=\"http://wordpress.org/extend/plugins/ajaxd-wordpress/download/\">Download</a> | <a href=\"http://anthologyoi.com/awp\">Plugin Homepage</a>).  The browser I used was Firefox 2.0 on Mac OS X Leopard.  WordPress 2.5 was used to demonstrate the plugin&#8217;s compatibility with the upcoming version of WordPress.</p>
<p><strong>Video Summary:</strong>  AJAXed WordPress is a good plugin if you want some quick AJAX functionality in your WordPress theme.</p>
<p><strong>Pros: </strong></p>
<ul>
<li>Easy installation.</li>
<li>Ingenious modular design.</li>
</ul>
<p><strong>Cons:</strong></p>
<ul>
<li>Some template editing.</li>
<li>Auto-inclusion of credit link (can be removed in the Plugin options).</li>
</ul>
<h3>Request for Feedback</h3>
<p>Since this is the first video review, feedback is much appreciated.  If you like these kind of reviews, then there will be more on the way.</p>
<p>Furthermore, if you would like your own plugin reviewed, please get in contact with me via e-mail (ronalfy+wltc @ gmail dot com).  Please keep in mind I won&#8217;t review premium plugins.  Also, it helps if your plugin merits itself to video reviews (minimal to no code editing).</p>\";s:7:\"pubdate\";s:31:\"Wed, 19 Mar 2008 01:34:40 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:14:\"Ronald Huereca\";}s:7:\"summary\";s:1409:\"<p></p>
<p>This is my first video plugin review for WeblogToolsCollection, so any feedback is appreciated.The plugin being reviewed is <a href=\"http://wordpress.org/extend/plugins/ajaxd-wordpress/\">AJAXed WordPress v1.11.1</a> (<a href=\"http://wordpress.org/extend/plugins/ajaxd-wordpress/download/\">Download</a> | <a href=\"http://anthologyoi.com/awp\">Plugin Homepage</a>).  The browser I used was Firefox 2.0 on Mac OS X Leopard.  WordPress 2.5 was used to demonstrate the plugin&#8217;s compatibility with the upcoming version of WordPress.</p>
<p><strong>Video Summary:</strong>  AJAXed WordPress is a good plugin if you want some quick AJAX functionality in your WordPress theme.</p>
<p><strong>Pros: </strong></p>
<ul>
<li>Easy installation.</li>
<li>Ingenious modular design.</li>
</ul>
<p><strong>Cons:</strong></p>
<ul>
<li>Some template editing.</li>
<li>Auto-inclusion of credit link (can be removed in the Plugin options).</li>
</ul>
<h3>Request for Feedback</h3>
<p>Since this is the first video review, feedback is much appreciated.  If you like these kind of reviews, then there will be more on the way.</p>
<p>Furthermore, if you would like your own plugin reviewed, please get in contact with me via e-mail (ronalfy+wltc @ gmail dot com).  Please keep in mind I won&#8217;t review premium plugins.  Also, it helps if your plugin merits itself to video reviews (minimal to no code editing).</p>\";}i:12;a:7:{s:5:\"title\";s:65:\"WordPress Podcast: Episode 38: WordPress 2.5 not released… yet!\";s:4:\"guid\";s:46:\"http://wp-community.org/2008/03/18/episode-38/\";s:4:\"link\";s:46:\"http://wp-community.org/2008/03/18/episode-38/\";s:11:\"description\";s:2579:\"<p>Included in this episode:</p>
<ol>
<li>WordPress 2.5 wasn&#8217;t released last week as we expected, and don&#8217;t expect it for several weeks.</li>
<li>ThemeShaper.com asked <a href=\"http://themeshaper.com/the-future-of-wordpress-themes/\" class=\"extlink\">11 prominent WordPress theme designers</a> to predict the future.</li>
<li><a href=\"http://www.wpthemerkit.com/\" class=\"extlink\">WPThemeKit</a> is a WordPress theming system where you choose from one of several htnk &#8220;blanks&#8221; representing your preferred layout of overall width, along with the number and position of sidebars.</li>
<li>WordPress is once again one of the Open Source projects chosen by Google to include in their Summer of Code for 2008.</li>
<li>Lorelle VanFossen is also jazzed about WordPress 2.5 coming to WordPress.com, details a <a href=\"http://blogsecurity.net/wordpress/wordpresscom-blogs-vulnerable/\" class=\"extlink\">security vulnerability for WordPress.com blogs</a> was fixed in less than 10 minutes after initial report, Matt Mullenweg&#8217;s report that <a href=\"http://mashable.com/2008/03/03/matt-mullenweg-splogs/\" class=\"extlink\">more than 800,000 blogs, or splogs</a>, have been removed from WordPress.com, and the <a href=\"http://wordpress.com/blog/2008/03/03/february-wrap-up/\" class=\"extlink\">February Wrap-up</a> for WordPress.com  has the latest statistics for the free blog hosting service.</li>
<li><a href=\"http://pimteam.net/firsttimer-wordpress-plugin/\" class=\"extlink\">FirstTimer Wordpress Plugin v1.0</a> by Bobby Handzhiev checks to see if an identifying cookie is located when a viewer views your blog, and if one if not found, displays a message you&#8217;ve written specifically for new visitors.</li>
<li><a href=\"http://www.prelovac.com/vladimir/wordpress-plugins/seo-image\" class=\"extlink\">SEO Friendly Images v1.1 by Vladimir Prelovac</a> goes throough all of the images used on your blog, checks to see if already have ALT and TITLE tags set, and generates valid XHTML tags for them based on options you&#8217;ve set.</li>
<li><a href=\"http://wordunplugged.com\" class=\"extlink\">MinisterMark</a> verifies the WP Spam Blocker generates dofollow links to their site.</li>
<li><a href=\"http://coreythompson.com\" class=\"extlink\">Corey Thompson</a> points out the answer to last episode&#8217;s blogroll question.</li>
<li>Simon Jones reports back that <a href=\"http://searchme.com/\" class=\"extlink\">a new service&#8217;s bot</a> was the cause of <a href=\"http://www.beforeiforget.co.uk/\" class=\"extlink\">his blog</a>&#8217;s bandwidth problems.</li>
</ol>\";s:7:\"pubdate\";s:31:\"Tue, 18 Mar 2008 23:28:51 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:17:\"Charles Stricklin\";}s:7:\"summary\";s:2579:\"<p>Included in this episode:</p>
<ol>
<li>WordPress 2.5 wasn&#8217;t released last week as we expected, and don&#8217;t expect it for several weeks.</li>
<li>ThemeShaper.com asked <a href=\"http://themeshaper.com/the-future-of-wordpress-themes/\" class=\"extlink\">11 prominent WordPress theme designers</a> to predict the future.</li>
<li><a href=\"http://www.wpthemerkit.com/\" class=\"extlink\">WPThemeKit</a> is a WordPress theming system where you choose from one of several htnk &#8220;blanks&#8221; representing your preferred layout of overall width, along with the number and position of sidebars.</li>
<li>WordPress is once again one of the Open Source projects chosen by Google to include in their Summer of Code for 2008.</li>
<li>Lorelle VanFossen is also jazzed about WordPress 2.5 coming to WordPress.com, details a <a href=\"http://blogsecurity.net/wordpress/wordpresscom-blogs-vulnerable/\" class=\"extlink\">security vulnerability for WordPress.com blogs</a> was fixed in less than 10 minutes after initial report, Matt Mullenweg&#8217;s report that <a href=\"http://mashable.com/2008/03/03/matt-mullenweg-splogs/\" class=\"extlink\">more than 800,000 blogs, or splogs</a>, have been removed from WordPress.com, and the <a href=\"http://wordpress.com/blog/2008/03/03/february-wrap-up/\" class=\"extlink\">February Wrap-up</a> for WordPress.com  has the latest statistics for the free blog hosting service.</li>
<li><a href=\"http://pimteam.net/firsttimer-wordpress-plugin/\" class=\"extlink\">FirstTimer Wordpress Plugin v1.0</a> by Bobby Handzhiev checks to see if an identifying cookie is located when a viewer views your blog, and if one if not found, displays a message you&#8217;ve written specifically for new visitors.</li>
<li><a href=\"http://www.prelovac.com/vladimir/wordpress-plugins/seo-image\" class=\"extlink\">SEO Friendly Images v1.1 by Vladimir Prelovac</a> goes throough all of the images used on your blog, checks to see if already have ALT and TITLE tags set, and generates valid XHTML tags for them based on options you&#8217;ve set.</li>
<li><a href=\"http://wordunplugged.com\" class=\"extlink\">MinisterMark</a> verifies the WP Spam Blocker generates dofollow links to their site.</li>
<li><a href=\"http://coreythompson.com\" class=\"extlink\">Corey Thompson</a> points out the answer to last episode&#8217;s blogroll question.</li>
<li>Simon Jones reports back that <a href=\"http://searchme.com/\" class=\"extlink\">a new service&#8217;s bot</a> was the cause of <a href=\"http://www.beforeiforget.co.uk/\" class=\"extlink\">his blog</a>&#8217;s bandwidth problems.</li>
</ol>\";}i:13;a:7:{s:5:\"title\";s:45:\"Ryan Boren: WordPress 2.5 Release Candidate 1\";s:4:\"guid\";s:23:\"http://boren.nu/?p=1543\";s:4:\"link\";s:69:\"http://boren.nu/archives/2008/03/18/wordpress-25-release-candidate-1/\";s:11:\"description\";s:509:\"<p><a href=\"http://wordpress.org/development/2008/03/25-sneak-peek/\">Release Candidate 1</a> of <a href=\"http://wordpress.org/\">WordPress</a> 2.5 is finally here.  We&#8217;ve already received a lot of feedback.  If you have comments regarding the new admin design, shoot an email to <a href=\"mailto:2.5-feedback@wordpress.org\">2.5-feedback@wordpress.org</a>.  I&#8217;m collating feedback and making a list of most frequent suggestions.  We&#8217;ll use this feedback to guide the final round of UI work.</p>\";s:7:\"pubdate\";s:31:\"Tue, 18 Mar 2008 21:00:14 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Ryan\";}s:7:\"summary\";s:509:\"<p><a href=\"http://wordpress.org/development/2008/03/25-sneak-peek/\">Release Candidate 1</a> of <a href=\"http://wordpress.org/\">WordPress</a> 2.5 is finally here.  We&#8217;ve already received a lot of feedback.  If you have comments regarding the new admin design, shoot an email to <a href=\"mailto:2.5-feedback@wordpress.org\">2.5-feedback@wordpress.org</a>.  I&#8217;m collating feedback and making a list of most frequent suggestions.  We&#8217;ll use this feedback to guide the final round of UI work.</p>\";}i:14;a:7:{s:5:\"title\";s:48:\"Ryan Boren: Admin Color Schemes in WordPress 2.5\";s:4:\"guid\";s:23:\"http://boren.nu/?p=1542\";s:4:\"link\";s:72:\"http://boren.nu/archives/2008/03/17/admin-color-schemes-in-wordpress-25/\";s:11:\"description\";s:1006:\"<p><a href=\"http://weblogtoolscollection.com/\">Weblog Tools Collection</a> provides the low down on the new <a href=\"http://weblogtoolscollection.com/archives/2008/03/16/colorful-future-for-wp-25-admin\">admin color scheme selector</a> in <a href=\"http://wordpress.org/\">WordPress</a> 2.5, and <a href=\"http://planetozh.com/\">Ozh</a> demonstrates how to create your own <a href=\"http://planetozh.com/blog/2008/03/per-user-custom-stylesheet-in-wordpress-25/\">custom color scheme</a>.  Much of the discussion surrounding UI changes dwells on colors.  Debates over shades of blue can go on endlessly.  So, we&#8217;re including two different color schemes for the new admin and allowing custom color styling.  The default color scheme will be our new &#8220;Fresh&#8221; look featuring light shades of blue.  A &#8220;Classic&#8221; look is also available for those who like the darker blues seen in previous versions of WP.  If neither of these suit your tastes, you can provide your own color stylesheet.</p>\";s:7:\"pubdate\";s:31:\"Tue, 18 Mar 2008 21:00:14 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Ryan\";}s:7:\"summary\";s:1006:\"<p><a href=\"http://weblogtoolscollection.com/\">Weblog Tools Collection</a> provides the low down on the new <a href=\"http://weblogtoolscollection.com/archives/2008/03/16/colorful-future-for-wp-25-admin\">admin color scheme selector</a> in <a href=\"http://wordpress.org/\">WordPress</a> 2.5, and <a href=\"http://planetozh.com/\">Ozh</a> demonstrates how to create your own <a href=\"http://planetozh.com/blog/2008/03/per-user-custom-stylesheet-in-wordpress-25/\">custom color scheme</a>.  Much of the discussion surrounding UI changes dwells on colors.  Debates over shades of blue can go on endlessly.  So, we&#8217;re including two different color schemes for the new admin and allowing custom color styling.  The default color scheme will be our new &#8220;Fresh&#8221; look featuring light shades of blue.  A &#8220;Classic&#8221; look is also available for those who like the darker blues seen in previous versions of WP.  If neither of these suit your tastes, you can provide your own color stylesheet.</p>\";}i:15;a:7:{s:5:\"title\";s:66:\"Lorelle on WP: WordPress 2.5 New Automatic Plugin Upgrade Problems\";s:4:\"guid\";s:36:\"http://lorelle.wordpress.com/?p=2427\";s:4:\"link\";s:91:\"http://lorelle.wordpress.com/2008/03/18/wordpress-25-new-automatic-plugin-upgrade-problems/\";s:11:\"description\";s:8978:\"<div class=\"snap_preview\"><br /><p><img src=\"http://www.blogherald.com/wp-content/uploads/2008/03/wp2_5-icon.gif\" alt=\"WordPress 2.5 icon\" align=\"right\" />I just published <a href=\"http://www.blogherald.com/2008/03/18/wordpress-25-plugins-beware-automatic-plugin-upgrade-problems/\" title=\"Automatic Plugin Upgrade Problems\">WordPress 2.5 Plugins Beware: Automatic Plugin Upgrade Problems</a> on the <a href=\"http://www.blogherald.com/\" title=\"Blog Herald\" rel=\"tag\">Blog Herald</a> and recommend that you check it out before using the new Automatic Plugin Upgrade feature in the just released  <a href=\"http://wordpress.org/development/2008/03/25-sneak-peek/\" title=\"Release Candidate 1 of WordPress 2.5\">Release Candidate 1 for WordPress 2.5</a> for beta-testers only.</p>
<p>The issue with the new Automatic Plugin Upgrade feature is explained by Darren of Unfolding Neurons in <a href=\"http://www.unfoldingneurons.com/2008/be-careful-using-the-automatic-plugins-upgrades-in-wordpress-25\" title=\"Be careful using the Automatic Plugins upgrades in WordPress 2.5\">Be Careful Using The Automatic Plugins Upgrades In WordPress 2.5</a>. </p>
<p>WordPress 2.5 is anticipated to be ready by its original Roadmap due date of March 24, give or take. Rumors are flying that it should be released just before <a href=\"http://dallas.wordcamp.org/\" title=\"WordCamp Dallas\">WordCamp Dallas</a> March 29-30, 2008.</p>
<p>While the issues with the Plugin Upgrade are not blog-threatening issues, especially if you avoid using the Automatic Plugin Upgrade feature until reassured it has been fixed and all Plugins comply with the new standards, a broken blog due to a poorly installed WordPress Plugin is still broken and not to be taken lightly.</p>
<p>If you are currently using WordPress 2.5, <a href=\"http://www.blogherald.com/2008/03/18/wordpress-25-plugins-beware-automatic-plugin-upgrade-problems/\" title=\"Automatic Plugin Upgrade Problems\">the article offers tips</a> on upgrading Plugins - the old fashioned way.</p>
<h2>More News on WordPress 2.5</h2>
<p>While, <a href=\"http://wordpress.org/development/2008/03/25-sneak-peek/\" title=\"Release Candidate 1 of WordPress 2.5\">the first beta testing, release candidate for WordPress 2.5</a> has just been issued for testers only, you can keep up with what&#8217;s going on with the upcoming release of WordPress 2.5 and prepare for the upgrade through these articles:</p>
<ul>
<li><a href=\"http://www.blogherald.com/2008/03/07/wordpress-upgrade-preparation-checklist/\" title=\"WordPress Upgrade Preparation Checklist\">WordPress Upgrade Preparation Checklist</a></li>
<li><a href=\"http://www.blogherald.com/2008/02/18/are-you-ready-for-wordpress-25/\" title=\"Are You Ready for WordPress 2.5?\">Are You Ready for WordPress 2.5?</a></li>
<li><a href=\"http://www.blogherald.com/2008/03/12/wordpress-wednesday-news-wordpress-25-due-march-17-administration-plugins-may-break-tons-of-plugins-updated-add-buttons-to-toolbar-wordpress-dallas-and-now-milan/\" title=\"WordPress 2.5 Due March 17, Administration Plugins May Break, Tons of Plugins Updated, Add Buttons to Toolbar, WordPress Dallas and Now Milan!\">WordPress 2.5 Due March 17, Administration Plugins May Break, Tons of Plugins Updated, Add Buttons to Toolbar, WordPress Dallas and Now Milan!</a></li>
<li><a href=\"http://codex.wordpress.org/Version_2.5\" title=\"WordPress 2.5\">Codex: WordPress 2.5</a></li>
<li><a href=\"http://weblogtoolscollection.com/archives/2008/03/09/prepare-for-wp-25/\" title=\"Prepare For WP 2.5\">Prepare For WP 2.5</a></li>
<li><a href=\"http://www.joostdevalk.nl/wordpress-25-plugin-settings-pages-style-guide/\" title=\"WordPress 2.5 Plugin Settings Pages Style Guide\">WordPress 2.5 Plugin Settings Pages Style Guide</a></li>
<li><a href=\"http://www.optiniche.com/blog/382/wordpress-25-revealed-and-compared-to-version-23x/\" title=\"WordPress 2.5 Revealed and Compared to Version 2.3.x\">WordPress 2.5 Revealed and Compared to Version 2.3.x</a></li>
<li><a href=\"http://mashable.com/2008/03/17/wordpress-2-5-preview/\" title=\"Mashable - WordPress 2.5 Preview\">Mashable - WordPress 2.5 Preview</a></li>
<li><a href=\"http://dougal.gunters.org/blog/2008/03/18/wordpress-25-rc1\" title=\"Dougal Gunters - WordPress 2.5 RC1\">Dougal Gunters - WordPress 2.5 RC1</a></li>
<li><a href=\"http://www.blogherald.com/2008/03/18/wordpress-25-get-a-sneak-peek-before-launch/\" title=\"WordPress 2.5 - Get a Sneak Peek Before Launch\">WordPress 2.5 - Get a Sneak Peek Before Launch</a></li>
<li><a href=\"http://weblogtoolscollection.com/archives/2008/03/18/wordpress-25-rc1-released/\" title=\"Weblog Tools Collection - WordPress 2.5 Release Candidate Released\">Weblog Tools Collection - WordPress 2.5 Release Candidate Released</a></li>
</ul>
<p><strong>WARNING:</strong> Beware announcing to the world which version of WordPress you are using, even the new version. There are hackers aware of version specific security vulnerabilities and they are looking for your blog. Also note that installing WordPress 2.5 prior to the official release is <em>at your own risk</em>. Even those testing WordPress for development and bug fixing purposes test it on test blogs, and rarely risk their main sites during the development stage. </p>
<p><img src=\"http://lorelle.files.wordpress.com/2006/08/sig.gif\" alt=\"\" /><br />
<hr />
<p><font size=\"-1\"><b>Site Search Tags:</b> <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+tips\" rel=\"tag\">wordpress tips</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+news\" rel=\"tag\">wordpress news</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+2.5\" rel=\"tag\">wordpress 2.5</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+release\" rel=\"tag\">wordpress release</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+plugins\" rel=\"tag\">wordpress plugins</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=automatic+plugin+upgrade\" rel=\"tag\">automatic plugin upgrade</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=upgrade+plugins\" rel=\"tag\">upgrade plugins</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=plugin+upgrades\" rel=\"tag\">plugin upgrades</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+bugs\" rel=\"tag\">wordpress bugs</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+development\" rel=\"tag\">wordpress development</a> </p>
<p><a href=\"http://lorelle.wordpress.com/feed/\" title=\"Feed on Lorelle on WordPress\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2007/02/rss.png\" alt=\"Feed on Lorelle on WordPress\" /></a> <a href=\"http://lorelle.wordpress.com/feed/\" title=\"Feed on Lorelle on WordPress\">Subscribe</a>  <a href=\"http://feeds.feedburner.com/LorelleOnWordpress\" title=\"Feedburner Lorelle on WordPress Feed\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2007/04/feedburnericon.gif\" alt=\"Feedburner icon\" />Via Feedburner</a>  <a href=\"http://www.feedblitz.com/f/?Sub=182399\" title=\"Lorelle on WordPress - full site feed email subscription\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2007/03/email.gif\" alt=\"\" />Subscribe by Email</a> <a href=\"http://lorelle.wordpress.com/\" title=\"Visit Lorelle on WordPress\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2008/03/pointer.gif\" alt=\"\" />Visit</a><br /><a href=\"http://lorelle.wordpress.com/about/\" title=\"Copyright Protected by Brent and Lorelle VanFossen\">Copyright Lorelle VanFossen</a>, the author of <a href=\"http://lorelle.wordpress.com/books/blogging-tips/\" title=\"Blogging Tips Book By Lorelle VanFossen\"><em>Blogging Tips, What Bloggers Won\'t Tell You About Blogging</em></a>.</font></p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/lorelle.wordpress.com/2427/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/lorelle.wordpress.com/2427/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/lorelle.wordpress.com/2427/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/lorelle.wordpress.com/2427/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/lorelle.wordpress.com/2427/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/lorelle.wordpress.com/2427/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/lorelle.wordpress.com/2427/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/lorelle.wordpress.com/2427/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/lorelle.wordpress.com/2427/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/lorelle.wordpress.com/2427/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/lorelle.wordpress.com/2427/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/lorelle.wordpress.com/2427/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=lorelle.wordpress.com&blog=72&post=2427&subd=lorelle&ref=&feed=1\" /></div>\";s:7:\"pubdate\";s:31:\"Tue, 18 Mar 2008 18:44:10 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:17:\"Lorelle VanFossen\";}s:7:\"summary\";s:8978:\"<div class=\"snap_preview\"><br /><p><img src=\"http://www.blogherald.com/wp-content/uploads/2008/03/wp2_5-icon.gif\" alt=\"WordPress 2.5 icon\" align=\"right\" />I just published <a href=\"http://www.blogherald.com/2008/03/18/wordpress-25-plugins-beware-automatic-plugin-upgrade-problems/\" title=\"Automatic Plugin Upgrade Problems\">WordPress 2.5 Plugins Beware: Automatic Plugin Upgrade Problems</a> on the <a href=\"http://www.blogherald.com/\" title=\"Blog Herald\" rel=\"tag\">Blog Herald</a> and recommend that you check it out before using the new Automatic Plugin Upgrade feature in the just released  <a href=\"http://wordpress.org/development/2008/03/25-sneak-peek/\" title=\"Release Candidate 1 of WordPress 2.5\">Release Candidate 1 for WordPress 2.5</a> for beta-testers only.</p>
<p>The issue with the new Automatic Plugin Upgrade feature is explained by Darren of Unfolding Neurons in <a href=\"http://www.unfoldingneurons.com/2008/be-careful-using-the-automatic-plugins-upgrades-in-wordpress-25\" title=\"Be careful using the Automatic Plugins upgrades in WordPress 2.5\">Be Careful Using The Automatic Plugins Upgrades In WordPress 2.5</a>. </p>
<p>WordPress 2.5 is anticipated to be ready by its original Roadmap due date of March 24, give or take. Rumors are flying that it should be released just before <a href=\"http://dallas.wordcamp.org/\" title=\"WordCamp Dallas\">WordCamp Dallas</a> March 29-30, 2008.</p>
<p>While the issues with the Plugin Upgrade are not blog-threatening issues, especially if you avoid using the Automatic Plugin Upgrade feature until reassured it has been fixed and all Plugins comply with the new standards, a broken blog due to a poorly installed WordPress Plugin is still broken and not to be taken lightly.</p>
<p>If you are currently using WordPress 2.5, <a href=\"http://www.blogherald.com/2008/03/18/wordpress-25-plugins-beware-automatic-plugin-upgrade-problems/\" title=\"Automatic Plugin Upgrade Problems\">the article offers tips</a> on upgrading Plugins - the old fashioned way.</p>
<h2>More News on WordPress 2.5</h2>
<p>While, <a href=\"http://wordpress.org/development/2008/03/25-sneak-peek/\" title=\"Release Candidate 1 of WordPress 2.5\">the first beta testing, release candidate for WordPress 2.5</a> has just been issued for testers only, you can keep up with what&#8217;s going on with the upcoming release of WordPress 2.5 and prepare for the upgrade through these articles:</p>
<ul>
<li><a href=\"http://www.blogherald.com/2008/03/07/wordpress-upgrade-preparation-checklist/\" title=\"WordPress Upgrade Preparation Checklist\">WordPress Upgrade Preparation Checklist</a></li>
<li><a href=\"http://www.blogherald.com/2008/02/18/are-you-ready-for-wordpress-25/\" title=\"Are You Ready for WordPress 2.5?\">Are You Ready for WordPress 2.5?</a></li>
<li><a href=\"http://www.blogherald.com/2008/03/12/wordpress-wednesday-news-wordpress-25-due-march-17-administration-plugins-may-break-tons-of-plugins-updated-add-buttons-to-toolbar-wordpress-dallas-and-now-milan/\" title=\"WordPress 2.5 Due March 17, Administration Plugins May Break, Tons of Plugins Updated, Add Buttons to Toolbar, WordPress Dallas and Now Milan!\">WordPress 2.5 Due March 17, Administration Plugins May Break, Tons of Plugins Updated, Add Buttons to Toolbar, WordPress Dallas and Now Milan!</a></li>
<li><a href=\"http://codex.wordpress.org/Version_2.5\" title=\"WordPress 2.5\">Codex: WordPress 2.5</a></li>
<li><a href=\"http://weblogtoolscollection.com/archives/2008/03/09/prepare-for-wp-25/\" title=\"Prepare For WP 2.5\">Prepare For WP 2.5</a></li>
<li><a href=\"http://www.joostdevalk.nl/wordpress-25-plugin-settings-pages-style-guide/\" title=\"WordPress 2.5 Plugin Settings Pages Style Guide\">WordPress 2.5 Plugin Settings Pages Style Guide</a></li>
<li><a href=\"http://www.optiniche.com/blog/382/wordpress-25-revealed-and-compared-to-version-23x/\" title=\"WordPress 2.5 Revealed and Compared to Version 2.3.x\">WordPress 2.5 Revealed and Compared to Version 2.3.x</a></li>
<li><a href=\"http://mashable.com/2008/03/17/wordpress-2-5-preview/\" title=\"Mashable - WordPress 2.5 Preview\">Mashable - WordPress 2.5 Preview</a></li>
<li><a href=\"http://dougal.gunters.org/blog/2008/03/18/wordpress-25-rc1\" title=\"Dougal Gunters - WordPress 2.5 RC1\">Dougal Gunters - WordPress 2.5 RC1</a></li>
<li><a href=\"http://www.blogherald.com/2008/03/18/wordpress-25-get-a-sneak-peek-before-launch/\" title=\"WordPress 2.5 - Get a Sneak Peek Before Launch\">WordPress 2.5 - Get a Sneak Peek Before Launch</a></li>
<li><a href=\"http://weblogtoolscollection.com/archives/2008/03/18/wordpress-25-rc1-released/\" title=\"Weblog Tools Collection - WordPress 2.5 Release Candidate Released\">Weblog Tools Collection - WordPress 2.5 Release Candidate Released</a></li>
</ul>
<p><strong>WARNING:</strong> Beware announcing to the world which version of WordPress you are using, even the new version. There are hackers aware of version specific security vulnerabilities and they are looking for your blog. Also note that installing WordPress 2.5 prior to the official release is <em>at your own risk</em>. Even those testing WordPress for development and bug fixing purposes test it on test blogs, and rarely risk their main sites during the development stage. </p>
<p><img src=\"http://lorelle.files.wordpress.com/2006/08/sig.gif\" alt=\"\" /><br />
<hr />
<p><font size=\"-1\"><b>Site Search Tags:</b> <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+tips\" rel=\"tag\">wordpress tips</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+news\" rel=\"tag\">wordpress news</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+2.5\" rel=\"tag\">wordpress 2.5</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+release\" rel=\"tag\">wordpress release</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+plugins\" rel=\"tag\">wordpress plugins</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=automatic+plugin+upgrade\" rel=\"tag\">automatic plugin upgrade</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=upgrade+plugins\" rel=\"tag\">upgrade plugins</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=plugin+upgrades\" rel=\"tag\">plugin upgrades</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+bugs\" rel=\"tag\">wordpress bugs</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+development\" rel=\"tag\">wordpress development</a> </p>
<p><a href=\"http://lorelle.wordpress.com/feed/\" title=\"Feed on Lorelle on WordPress\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2007/02/rss.png\" alt=\"Feed on Lorelle on WordPress\" /></a> <a href=\"http://lorelle.wordpress.com/feed/\" title=\"Feed on Lorelle on WordPress\">Subscribe</a>  <a href=\"http://feeds.feedburner.com/LorelleOnWordpress\" title=\"Feedburner Lorelle on WordPress Feed\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2007/04/feedburnericon.gif\" alt=\"Feedburner icon\" />Via Feedburner</a>  <a href=\"http://www.feedblitz.com/f/?Sub=182399\" title=\"Lorelle on WordPress - full site feed email subscription\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2007/03/email.gif\" alt=\"\" />Subscribe by Email</a> <a href=\"http://lorelle.wordpress.com/\" title=\"Visit Lorelle on WordPress\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2008/03/pointer.gif\" alt=\"\" />Visit</a><br /><a href=\"http://lorelle.wordpress.com/about/\" title=\"Copyright Protected by Brent and Lorelle VanFossen\">Copyright Lorelle VanFossen</a>, the author of <a href=\"http://lorelle.wordpress.com/books/blogging-tips/\" title=\"Blogging Tips Book By Lorelle VanFossen\"><em>Blogging Tips, What Bloggers Won\'t Tell You About Blogging</em></a>.</font></p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/lorelle.wordpress.com/2427/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/lorelle.wordpress.com/2427/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/lorelle.wordpress.com/2427/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/lorelle.wordpress.com/2427/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/lorelle.wordpress.com/2427/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/lorelle.wordpress.com/2427/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/lorelle.wordpress.com/2427/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/lorelle.wordpress.com/2427/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/lorelle.wordpress.com/2427/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/lorelle.wordpress.com/2427/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/lorelle.wordpress.com/2427/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/lorelle.wordpress.com/2427/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=lorelle.wordpress.com&blog=72&post=2427&subd=lorelle&ref=&feed=1\" /></div>\";}i:16;a:7:{s:5:\"title\";s:51:\"Weblog Tools Collection: WordPress 2.5 RC1 Released\";s:4:\"guid\";s:79:\"http://weblogtoolscollection.com/archives/2008/03/18/wordpress-25-rc1-released/\";s:4:\"link\";s:79:\"http://weblogtoolscollection.com/archives/2008/03/18/wordpress-25-rc1-released/\";s:11:\"description\";s:1869:\"<p><a href=\"http://wordpress.org/development/2008/03/25-sneak-peek/\">WordPress Development Blog: 2.5 Sneak Peek</a>  I love the staccato description Matt uses to start the post: <em>A customizable dashboard, multi-file upload, built-in galleries, one-click plugin upgrades, tag management, built-in Gravatars, full text feeds, and faster load times sound interesting? </em>The first Release Candidate for WordPress 2.5 is out for those that have been waiting patiently to try out the new features. Matt details out the updates and the new features of 2.5 on the development blog and the <a href=\"http://www.blogherald.com/2008/03/18/wordpress-25-get-a-sneak-peek-before-launch/\">good</a> <a href=\"http://dougal.gunters.org/blog/2008/03/18/wordpress-25-rc1\">news</a> is <a href=\"http://mashable.com/2008/03/17/wordpress-2-5-preview/\">spreading</a> in the WordPress circles.</p>
<p>In addition to many underlying changes and updates to the code, the administration back end of WordPress gets a major rework in this version. The release candidate is not for everyone and can be downloaded for testing and bug searching.</p>
<blockquote><p>If you make frequent backups and you’re interested in helping us out with development by testing the new code, <a href=\"http://wordpress.org/wordpress-2.5-RC1.zip\">download</a> and install <a href=\"http://wordpress.org/wordpress-2.5-RC1.zip\">Release Candidate 1</a> of WordPress 2.5, and <a href=\"http://lists.automattic.com/mailman/listinfo/wp-testers\">join our testers mailing list</a> to report any bugs you find in the code.</p>
<p>We’re also interested in feedback on the new interface and would love to hear your opinions, thoughts, rants, raves, and anything in between. We created a special email address just for the occasion: <a href=\"mailto:2.5-feedback@wordpress.org\">2.5-feedback@wordpress.org</a>.</p></blockquote>\";s:7:\"pubdate\";s:31:\"Tue, 18 Mar 2008 14:16:33 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Mark Ghosh\";}s:7:\"summary\";s:1869:\"<p><a href=\"http://wordpress.org/development/2008/03/25-sneak-peek/\">WordPress Development Blog: 2.5 Sneak Peek</a>  I love the staccato description Matt uses to start the post: <em>A customizable dashboard, multi-file upload, built-in galleries, one-click plugin upgrades, tag management, built-in Gravatars, full text feeds, and faster load times sound interesting? </em>The first Release Candidate for WordPress 2.5 is out for those that have been waiting patiently to try out the new features. Matt details out the updates and the new features of 2.5 on the development blog and the <a href=\"http://www.blogherald.com/2008/03/18/wordpress-25-get-a-sneak-peek-before-launch/\">good</a> <a href=\"http://dougal.gunters.org/blog/2008/03/18/wordpress-25-rc1\">news</a> is <a href=\"http://mashable.com/2008/03/17/wordpress-2-5-preview/\">spreading</a> in the WordPress circles.</p>
<p>In addition to many underlying changes and updates to the code, the administration back end of WordPress gets a major rework in this version. The release candidate is not for everyone and can be downloaded for testing and bug searching.</p>
<blockquote><p>If you make frequent backups and you’re interested in helping us out with development by testing the new code, <a href=\"http://wordpress.org/wordpress-2.5-RC1.zip\">download</a> and install <a href=\"http://wordpress.org/wordpress-2.5-RC1.zip\">Release Candidate 1</a> of WordPress 2.5, and <a href=\"http://lists.automattic.com/mailman/listinfo/wp-testers\">join our testers mailing list</a> to report any bugs you find in the code.</p>
<p>We’re also interested in feedback on the new interface and would love to hear your opinions, thoughts, rants, raves, and anything in between. We created a special email address just for the occasion: <a href=\"mailto:2.5-feedback@wordpress.org\">2.5-feedback@wordpress.org</a>.</p></blockquote>\";}i:17;a:7:{s:5:\"title\";s:34:\"Dougal Campbell: WordPress 2.5 RC1\";s:4:\"guid\";s:32:\"http://dougal.gunters.org/?p=897\";s:4:\"link\";s:58:\"http://dougal.gunters.org/blog/2008/03/18/wordpress-25-rc1\";s:11:\"description\";s:3294:\"<p>
<a href=\"http://wordpress.org/development/2008/03/25-sneak-peek/\">The first release candidate for WordPress 2.5</a> was announced last night. The adventurous among you can download it for testing. New features include:
</p>
<ul>
	<li>Faster load times.</li>
	<li>Multi-file uploads.</li>
	<li>New \"Media Manager\" for images, audio, video, etc.</li>
	<li>Built-in gallery function.</li>
	<li>Built-in (and pluggable) Gravatars support.</li>
	<li>New backend design.</li>
	<li>One-click auto-update for plugins.</li>
	<li>Reactivate plugins after a \'Deactivate All Plugins\' action. (my feature! <img src=\"http://dougal.gunters.org/wp-includes/images/smilies/icon_smile.gif\" alt=\":)\" class=\"wp-smiley\" /> )</li>
</ul>
<p>
As a long-time WordPress user and developer, the new design for the back-end admin screens threw me at first. I had the same questions that I saw many others post to the mailing lists. \"Why did they clump these links together, and move these other ones to a different spot on the page?\" But the more I\'ve used it, it became obvious that the new menu layout made sense. The most frequently used items are prominent. The less-often needed ones are moved out of the way, but still easily accessible. I\'m still not totally thrilled with the color choices (some elements don\'t have enough contrast, to my eyes), but it turns out the <a href=\"http://weblogtoolscollection.com/archives/2008/03/16/colorful-future-for-wp-25-admin/\">the admin screen colors are pluggable</a>, as well.
</p>
<p>
One of the more exciting features (IMO) is the one-click plugin updater. When you see a notification that a new version of a plugin is available, you\'ll also see an \'upgrade automatically\' link. If your server supports all the functions needed, clicking the link will download and install the new version for you. I will note that on <em>my</em> server, this feature does not always work flawlessly, and I\'ve sometimes had to quickly download and install a plugin manually to fix a broken plugin. I\'ve shared my observations on this, and I hope that they\'ll be able to make this feature more robust before final release. My advice is to use this feature with caution for now. But I\'m hoping that my problems with it are due to my server, and that I\'ll have better luck <a href=\"http://dougal.gunters.org/blog/2008/03/13/roadwork-next-15-miles\">when I get things moved to my new host</a>.
</p>
<p>
Overall, I\'m liking the new release. I haven\'t had a chance to play with the media management and gallery features yet, but I\'m looking forward to giving them a try. I think the new admin arrangement will be easier for new users, and I think most established users will come to appreciate it, too (and for those looking for something even more different, there\'s the <a href=\"http://www.deanjrobinson.com/projects/fluency-admin/\">Fluency Admin</a> theme).
</p>
<p>
As always, when toying with pre-release code, don\'t forget to back up your database and files before you upgrade! Give it a spin, kick the tires, and let us know what <em>you</em> think.
</p>
<p><a href=\"http://sharethis.com/item?&wp=2.5-RC1.1&amp;publisher=06a70a77-1fc0-46a9-81d1-6a696e6ed23f&amp;title=WordPress+2.5+RC1&amp;url=http%3A%2F%2Fdougal.gunters.org%2Fblog%2F2008%2F03%2F18%2Fwordpress-25-rc1\">ShareThis</a></p>\";s:7:\"pubdate\";s:31:\"Tue, 18 Mar 2008 13:24:03 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:6:\"Dougal\";}s:7:\"summary\";s:3294:\"<p>
<a href=\"http://wordpress.org/development/2008/03/25-sneak-peek/\">The first release candidate for WordPress 2.5</a> was announced last night. The adventurous among you can download it for testing. New features include:
</p>
<ul>
	<li>Faster load times.</li>
	<li>Multi-file uploads.</li>
	<li>New \"Media Manager\" for images, audio, video, etc.</li>
	<li>Built-in gallery function.</li>
	<li>Built-in (and pluggable) Gravatars support.</li>
	<li>New backend design.</li>
	<li>One-click auto-update for plugins.</li>
	<li>Reactivate plugins after a \'Deactivate All Plugins\' action. (my feature! <img src=\"http://dougal.gunters.org/wp-includes/images/smilies/icon_smile.gif\" alt=\":)\" class=\"wp-smiley\" /> )</li>
</ul>
<p>
As a long-time WordPress user and developer, the new design for the back-end admin screens threw me at first. I had the same questions that I saw many others post to the mailing lists. \"Why did they clump these links together, and move these other ones to a different spot on the page?\" But the more I\'ve used it, it became obvious that the new menu layout made sense. The most frequently used items are prominent. The less-often needed ones are moved out of the way, but still easily accessible. I\'m still not totally thrilled with the color choices (some elements don\'t have enough contrast, to my eyes), but it turns out the <a href=\"http://weblogtoolscollection.com/archives/2008/03/16/colorful-future-for-wp-25-admin/\">the admin screen colors are pluggable</a>, as well.
</p>
<p>
One of the more exciting features (IMO) is the one-click plugin updater. When you see a notification that a new version of a plugin is available, you\'ll also see an \'upgrade automatically\' link. If your server supports all the functions needed, clicking the link will download and install the new version for you. I will note that on <em>my</em> server, this feature does not always work flawlessly, and I\'ve sometimes had to quickly download and install a plugin manually to fix a broken plugin. I\'ve shared my observations on this, and I hope that they\'ll be able to make this feature more robust before final release. My advice is to use this feature with caution for now. But I\'m hoping that my problems with it are due to my server, and that I\'ll have better luck <a href=\"http://dougal.gunters.org/blog/2008/03/13/roadwork-next-15-miles\">when I get things moved to my new host</a>.
</p>
<p>
Overall, I\'m liking the new release. I haven\'t had a chance to play with the media management and gallery features yet, but I\'m looking forward to giving them a try. I think the new admin arrangement will be easier for new users, and I think most established users will come to appreciate it, too (and for those looking for something even more different, there\'s the <a href=\"http://www.deanjrobinson.com/projects/fluency-admin/\">Fluency Admin</a> theme).
</p>
<p>
As always, when toying with pre-release code, don\'t forget to back up your database and files before you upgrade! Give it a spin, kick the tires, and let us know what <em>you</em> think.
</p>
<p><a href=\"http://sharethis.com/item?&wp=2.5-RC1.1&amp;publisher=06a70a77-1fc0-46a9-81d1-6a696e6ed23f&amp;title=WordPress+2.5+RC1&amp;url=http%3A%2F%2Fdougal.gunters.org%2Fblog%2F2008%2F03%2F18%2Fwordpress-25-rc1\">ShareThis</a></p>\";}i:18;a:7:{s:5:\"title\";s:24:\"Dev Blog: 2.5 Sneak Peek\";s:4:\"guid\";s:39:\"http://wordpress.org/development/?p=226\";s:4:\"link\";s:55:\"http://wordpress.org/development/2008/03/25-sneak-peek/\";s:11:\"description\";s:5447:\"<p>A customizable dashboard, multi-file upload, built-in galleries, one-click plugin upgrades, tag management, built-in Gravatars, full text feeds, and faster load times sound interesting? Then WordPress 2.5 might be the release for you. It&#8217;s been in the oven for a while, and we&#8217;re finally ready to open the doors a bit to give you a taste.</p>
<p>For the past few months, we’ve been working with our friends at Happy Cog &#8212; <a href=\"http://zeldman.com/\">Jeffrey Zeldman</a>, <a href=\"http://jasonsantamaria.com/\">Jason Santa Maria</a>, and <a href=\"http://bobulate.com/\">Liz Danzico</a> &#8212; to redesign WordPress from the ground-up. The result is a new way of interacting with WordPress that will remain familiar to seasoned users while improving the experience for everyone. This isn’t just a fresh coat of paint &#8212; we’ve re-thought the look of WordPress, as well as how it’s organized so that you can forget about the software and focus on your own creative pursuits.</p>
<p>Here are a few vignettes of what&#8217;s in store.</p>
<h3>The Dashboard</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/dashboard-wide.png\" alt=\"dashboard-wide.png\" /></p>
<p>The Dashboard’s most important role is to inform quickly and get you to where you’re headed in the admin. In interviewing users, we found that most of you ignore the Dashboard entirely &#8212; its useful information being mostly hidden in an overly complex design. The new Dashboard is focused on the most relevant tasks at hand: a quick summary of what’s published and scheduled for publication, the latest comments and incoming links, blog stats, and WordPress updates and news. You can add your own RSS feeds and edit the way information is presented so that the new Dashboard conforms to the way you use WordPress.</p>
<h3>Navigation</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/nav-wide.png\" alt=\"nav-wide.png\" /></p>
<p>The WordPress navigation has confounded even sophisticated users. With the new design, we’ve cut the number of navigation options in half, separating the primary functions (writing, managing posts and pages, editing the blog’s design, and managing comments) from secondary functions. This presents information at a more comfortable pace, revealing only the information that’s necessary. Everything you need is still there &#8212; just better organized. (Especially for people new to WP.)</p>
<h3>Write</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/write-wide.png\" alt=\"write-wide.png\" /></p>
<p><img class=\"right\" src=\"http://wpcom.wordpress.com/files/2008/03/write3.png\" alt=\"write2.png\" /></p>
<p>By far, the most frequently accessed part of WordPress is the Write screen. It gets the job done, but its myriad options can be overwhelming. The new write screen only displays the information that you’ll use most often. It displays the most common fields in a way that makes posting incredibly easy. Additional options are hidden away until you need them. The new Write screen anticipates the natural flow of the way you write, and is smart enough to remember the way you left it so that your preferred writing environment is always quickly available. The new visual editor even has a handy full-screen mode to help block out distractions while composing your newest post. (My personal favorite new feature.)</p>
<h3>Manage</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/manage-wide.png\" alt=\"\" /></p>
<p><img class=\"right\" src=\"http://wpcom.wordpress.com/files/2008/03/manage.png\" alt=\"\" /></p>
<p>The Manage screens have been redesigned and unified so that now, managing your pages, posts, media, and comments all use similar, consistent interfaces. We’ve omitted superfluous information and made what’s important faster to find. We believe these changes will make you a faster, more proficient blogger.</p>
<p>You might also notice there are some new colors, the dashboard feels much fresher and lighter. If you&#8217;re jonesing for the old look under your user options you can now select the &#8220;classic&#8221; colors and get those old blues back. (It&#8217;s also pluggable so people can easily add or share their own color schemes.)</p>
<p>If you make frequent backups and you&#8217;re interested in helping us out with development by testing the new code, <a href=\"http://wordpress.org/wordpress-2.5-RC1.zip\">download</a> and install <a href=\"http://wordpress.org/wordpress-2.5-RC1.zip\">Release Candidate 1</a> of WordPress 2.5, and <a href=\"http://lists.automattic.com/mailman/listinfo/wp-testers\">join our testers mailing list</a> to report any bugs you find in the code.</p>
<p>We&#8217;re also interested in feedback on the new interface and would love to hear your opinions, thoughts, rants, raves, and anything in between. We created a special email address just for the occasion: <a href=\"mailto:2.5-feedback@wordpress.org\">2.5-feedback@wordpress.org</a>.</p>
<p>The software is basically done and stable, and could be released today, but we&#8217;d like to incorporate feedback from a wider audience before making it available to the general public. After a few days of your feedback we&#8217;ll set a final release date. Personally, I can&#8217;t wait. <img src=\"http://wordpress.org/development/wp-includes/images/smilies/icon_smile.gif\" alt=\":)\" class=\"wp-smiley\" /></p>\";s:7:\"pubdate\";s:31:\"Tue, 18 Mar 2008 07:08:57 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:7:\"summary\";s:5447:\"<p>A customizable dashboard, multi-file upload, built-in galleries, one-click plugin upgrades, tag management, built-in Gravatars, full text feeds, and faster load times sound interesting? Then WordPress 2.5 might be the release for you. It&#8217;s been in the oven for a while, and we&#8217;re finally ready to open the doors a bit to give you a taste.</p>
<p>For the past few months, we’ve been working with our friends at Happy Cog &#8212; <a href=\"http://zeldman.com/\">Jeffrey Zeldman</a>, <a href=\"http://jasonsantamaria.com/\">Jason Santa Maria</a>, and <a href=\"http://bobulate.com/\">Liz Danzico</a> &#8212; to redesign WordPress from the ground-up. The result is a new way of interacting with WordPress that will remain familiar to seasoned users while improving the experience for everyone. This isn’t just a fresh coat of paint &#8212; we’ve re-thought the look of WordPress, as well as how it’s organized so that you can forget about the software and focus on your own creative pursuits.</p>
<p>Here are a few vignettes of what&#8217;s in store.</p>
<h3>The Dashboard</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/dashboard-wide.png\" alt=\"dashboard-wide.png\" /></p>
<p>The Dashboard’s most important role is to inform quickly and get you to where you’re headed in the admin. In interviewing users, we found that most of you ignore the Dashboard entirely &#8212; its useful information being mostly hidden in an overly complex design. The new Dashboard is focused on the most relevant tasks at hand: a quick summary of what’s published and scheduled for publication, the latest comments and incoming links, blog stats, and WordPress updates and news. You can add your own RSS feeds and edit the way information is presented so that the new Dashboard conforms to the way you use WordPress.</p>
<h3>Navigation</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/nav-wide.png\" alt=\"nav-wide.png\" /></p>
<p>The WordPress navigation has confounded even sophisticated users. With the new design, we’ve cut the number of navigation options in half, separating the primary functions (writing, managing posts and pages, editing the blog’s design, and managing comments) from secondary functions. This presents information at a more comfortable pace, revealing only the information that’s necessary. Everything you need is still there &#8212; just better organized. (Especially for people new to WP.)</p>
<h3>Write</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/write-wide.png\" alt=\"write-wide.png\" /></p>
<p><img class=\"right\" src=\"http://wpcom.wordpress.com/files/2008/03/write3.png\" alt=\"write2.png\" /></p>
<p>By far, the most frequently accessed part of WordPress is the Write screen. It gets the job done, but its myriad options can be overwhelming. The new write screen only displays the information that you’ll use most often. It displays the most common fields in a way that makes posting incredibly easy. Additional options are hidden away until you need them. The new Write screen anticipates the natural flow of the way you write, and is smart enough to remember the way you left it so that your preferred writing environment is always quickly available. The new visual editor even has a handy full-screen mode to help block out distractions while composing your newest post. (My personal favorite new feature.)</p>
<h3>Manage</h3>
<p class=\"tutscreen\"><img src=\"http://wpcom.wordpress.com/files/2008/03/manage-wide.png\" alt=\"\" /></p>
<p><img class=\"right\" src=\"http://wpcom.wordpress.com/files/2008/03/manage.png\" alt=\"\" /></p>
<p>The Manage screens have been redesigned and unified so that now, managing your pages, posts, media, and comments all use similar, consistent interfaces. We’ve omitted superfluous information and made what’s important faster to find. We believe these changes will make you a faster, more proficient blogger.</p>
<p>You might also notice there are some new colors, the dashboard feels much fresher and lighter. If you&#8217;re jonesing for the old look under your user options you can now select the &#8220;classic&#8221; colors and get those old blues back. (It&#8217;s also pluggable so people can easily add or share their own color schemes.)</p>
<p>If you make frequent backups and you&#8217;re interested in helping us out with development by testing the new code, <a href=\"http://wordpress.org/wordpress-2.5-RC1.zip\">download</a> and install <a href=\"http://wordpress.org/wordpress-2.5-RC1.zip\">Release Candidate 1</a> of WordPress 2.5, and <a href=\"http://lists.automattic.com/mailman/listinfo/wp-testers\">join our testers mailing list</a> to report any bugs you find in the code.</p>
<p>We&#8217;re also interested in feedback on the new interface and would love to hear your opinions, thoughts, rants, raves, and anything in between. We created a special email address just for the occasion: <a href=\"mailto:2.5-feedback@wordpress.org\">2.5-feedback@wordpress.org</a>.</p>
<p>The software is basically done and stable, and could be released today, but we&#8217;d like to incorporate feedback from a wider audience before making it available to the general public. After a few days of your feedback we&#8217;ll set a final release date. Personally, I can&#8217;t wait. <img src=\"http://wordpress.org/development/wp-includes/images/smilies/icon_smile.gif\" alt=\":)\" class=\"wp-smiley\" /></p>\";}i:19;a:7:{s:5:\"title\";s:58:\"Weblog Tools Collection: WordPress Theme Releases for 3/17\";s:4:\"guid\";s:88:\"http://weblogtoolscollection.com/archives/2008/03/17/wordpress-theme-releases-for-317-2/\";s:4:\"link\";s:88:\"http://weblogtoolscollection.com/archives/2008/03/17/wordpress-theme-releases-for-317-2/\";s:11:\"description\";s:2475:\"<h3>Two Column Themes</h3>
<p><strong>CoolWater</strong></p>
<p><img border=\"0\" width=\"200\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/coolwater-thumbnail.png\" alt=\"coolwater-thumbnail\" height=\"151\" /></p>
<p>CoolWater is a two column widget ready theme which is largely made up of green and blue colors. Overall the theme looks aesthetic.</p>
<p><a href=\"http://www.styleshout.com/templates/preview/CoolWater1-0/index.html\">Demo</a> | <a href=\"http://www.clazh.com/coolwater-two-column-free-wordpress-theme/\">Release Page</a> | <a href=\"http://www.clazh.com/wp-content/plugins/wp-downloadMonitor/download.php?id=6\">Download</a></p>
<p><strong>Squared</strong></p>
<p><a href=\"http://weblogtoolscollection.com/b2-img/2008/03/squared-thumbnail.png\"><img border=\"0\" width=\"132\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/squared-thumbnail-thumb.png\" alt=\"squared-thumbnail\" height=\"100\" /></a></p>
<p>Squared is a two column theme based on sandbox and is customizable through the admin panel. The theme is available in English and Italian.</p>
<p><a href=\"http://www.laburno.net/temi-wordpress/squared/#inglese\">Release Page</a> | <a href=\"http://www.laburno.net/wp-content/uploads/2008/03/squared-theme-10.rar\">Download</a></p>
<h3>Three Column Themes</h3>
<p><strong>Chronicles</strong></p>
<p><img border=\"0\" width=\"200\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/chronicles-thumbnail.png\" alt=\"chronicles-thumbnail\" height=\"130\" /></p>
<p>Chronicles is a three column widget ready theme made up of brown color. The content area is large enough to hold medium sized images.</p>
<p><a href=\"http://wpthemes.blogohblog.net/index.php?wptheme=chronicles\">Demo</a> | <a href=\"http://www.blogohblog.com/wordpress-theme-chronicles/\">Release Page</a> | <a href=\"http://www.blogohblog.com/download/chronicles.zip\">Download</a></p>
<p><strong>Anumati</strong></p>
<p><a href=\"http://weblogtoolscollection.com/b2-img/2008/03/anumati-thumbnail.png\"><img border=\"0\" width=\"204\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/anumati-thumbnail-thumb.png\" alt=\"anumati-thumbnail\" height=\"135\" /></a></p>
<p>Anumati is a theme based on World of Warcraft. The theme is largely made of purple colors and its content area can be used to show of smaller images.</p>
<p><a href=\"http://wordpress.onlinedevil.com/index.php?wptheme=Anumati\">Demo</a> | <a href=\"http://dowan.org/wp-templates/\">Release Page</a> | <a href=\"http://dowan.org/?dl=5\">Download</a></p>\";s:7:\"pubdate\";s:31:\"Tue, 18 Mar 2008 04:00:07 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:12:\"Keith Dsouza\";}s:7:\"summary\";s:2475:\"<h3>Two Column Themes</h3>
<p><strong>CoolWater</strong></p>
<p><img border=\"0\" width=\"200\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/coolwater-thumbnail.png\" alt=\"coolwater-thumbnail\" height=\"151\" /></p>
<p>CoolWater is a two column widget ready theme which is largely made up of green and blue colors. Overall the theme looks aesthetic.</p>
<p><a href=\"http://www.styleshout.com/templates/preview/CoolWater1-0/index.html\">Demo</a> | <a href=\"http://www.clazh.com/coolwater-two-column-free-wordpress-theme/\">Release Page</a> | <a href=\"http://www.clazh.com/wp-content/plugins/wp-downloadMonitor/download.php?id=6\">Download</a></p>
<p><strong>Squared</strong></p>
<p><a href=\"http://weblogtoolscollection.com/b2-img/2008/03/squared-thumbnail.png\"><img border=\"0\" width=\"132\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/squared-thumbnail-thumb.png\" alt=\"squared-thumbnail\" height=\"100\" /></a></p>
<p>Squared is a two column theme based on sandbox and is customizable through the admin panel. The theme is available in English and Italian.</p>
<p><a href=\"http://www.laburno.net/temi-wordpress/squared/#inglese\">Release Page</a> | <a href=\"http://www.laburno.net/wp-content/uploads/2008/03/squared-theme-10.rar\">Download</a></p>
<h3>Three Column Themes</h3>
<p><strong>Chronicles</strong></p>
<p><img border=\"0\" width=\"200\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/chronicles-thumbnail.png\" alt=\"chronicles-thumbnail\" height=\"130\" /></p>
<p>Chronicles is a three column widget ready theme made up of brown color. The content area is large enough to hold medium sized images.</p>
<p><a href=\"http://wpthemes.blogohblog.net/index.php?wptheme=chronicles\">Demo</a> | <a href=\"http://www.blogohblog.com/wordpress-theme-chronicles/\">Release Page</a> | <a href=\"http://www.blogohblog.com/download/chronicles.zip\">Download</a></p>
<p><strong>Anumati</strong></p>
<p><a href=\"http://weblogtoolscollection.com/b2-img/2008/03/anumati-thumbnail.png\"><img border=\"0\" width=\"204\" src=\"http://weblogtoolscollection.com/b2-img/2008/03/anumati-thumbnail-thumb.png\" alt=\"anumati-thumbnail\" height=\"135\" /></a></p>
<p>Anumati is a theme based on World of Warcraft. The theme is largely made of purple colors and its content area can be used to show of smaller images.</p>
<p><a href=\"http://wordpress.onlinedevil.com/index.php?wptheme=Anumati\">Demo</a> | <a href=\"http://dowan.org/wp-templates/\">Release Page</a> | <a href=\"http://dowan.org/?dl=5\">Download</a></p>\";}i:20;a:7:{s:5:\"title\";s:70:\"Lorelle on WP: 24 Reasons Why You Should Attend These Blog Conferences\";s:4:\"guid\";s:36:\"http://lorelle.wordpress.com/?p=2422\";s:4:\"link\";s:96:\"http://lorelle.wordpress.com/2008/03/17/24-reasons-why-you-should-attend-these-blog-conferences/\";s:11:\"description\";s:24750:\"<div class=\"snap_preview\"><br /><p>I&#8217;ve got three blog conferences I&#8217;ll be speaking at, and I want to give you 24 good reasons why you should be at each of these. </p>
<h3>March 29-30 - WordCamp Dallas</h3>
<p><a href=\"http://dallas.wordcamp.org/\" title=\"Mar 29, 2008: WordCamp Dallas at Frisco City Hall\"><img src=\"http://lorelle.files.wordpress.com/2008/03/wordcampdallas.jpg\" alt=\"WordCamp Dallas 2008\" align=\"right\" /></a><a href=\"http://dallas.wordcamp.org/\" title=\"Mar 29, 2008: WordCamp Dallas at Frisco City Hall\">WordCamp Dallas</a> is going to be one of the hottest WordPress-oriented blog events this year. People are flying in from all over the country to join Dallas area bloggers to enjoy all things WordPress and blogging. The 10 speakers you will not want to miss are:</p>
<ol>
<li><a href=\"http://dallas.wordcamp.org/schedule/mullenweg/\" title=\"WordPress 2.5 and Beyond Matt Mullenweg\">&#8220;WordPress 2.5 and Beyond&#8221; with Matt Mullenweg</a> of WordPress fame. WordPress 2.5 will be released just before the conference, so you will get a first hand look at where WordPress is going beyond this version.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/pozadzides/\" title=\"45 Ways to Power Up Your Blog John Pozadzides\">John Pozadzides with &#8220;5 Ways to Power Up Your Blog&#8221;</a>, author of the popular <a href=\"http://onemansblog.com/\" title=\"One Man’s Blog\">One Man’s Blog</a>, founder of <a href=\"http://www.htmlhelp.com/\" title=\"HTMLHelp.com\">HTMLHelp.com</a>, and Chief Marketing Officer of <a href=\"http://www.layeredtech.com/\" title=\"Layered Technologies\">Layered Technologies</a>, and more, will cover hot tips for making your WordPress blog be as powerhouse blog.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/bailey/\" title=\"How to Prevent, Detect and Stop Content Theft Jonathan Bailey\">&#8220;How to Prevent, Detect and Stop Content Theft&#8221; with Jonathan Bailey</a>, of <a href=\"http://www.plagiarismtoday.com/\" title=\"Plagiarism Today\">Plagiarism Today</a> and the <a href=\"http://www.blogherald.com/\" title=\"Blog Herald\" rel=\"tag\">Blog Herald</a>, offers a wide variety of ways you can help put a stop to content theft with your WordPress blog.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/geekbrief/\" title=\"Cali Lewis and Neal Campbell\">Cali Lewis and Neal Campbell</a> are famous for their popular <a href=\"http://www.geekbrief.tv/\" title=\"GeekBrief.TV\">GeekBrief.TV</a>, a popular web technology and consumer electronics videocast, and they will be covering video blogs and incorporating multimedia into your blog.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/strauss/\" title=\"C’mon, Let’s Talk! Building Influence and Interaction with Blogging Liz Strauss\">Liz Strauss brings &#8220;C’mon, Let’s Talk! Building Influence and Interaction with Blogging&#8221;</a>, sharing her tips for mastering the blog conversation learned from thousands of comments monthly on <a href=\"http://www.successful-blog.com/\" title=\"Successful Blog\">Successful Blog</a> and <a href=\"http://www.lizstrauss.com/\" title=\"Liz Strauss.com\">Liz Strauss.com</a>. She is also the founder of the popular blog conference, <a href=\"http://www.sobevent.com/\" title=\"SOBCon\">Successful and Outstanding Bloggers Conference</a>.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/vanfossen/\" title=\"WordPress Power Tips Lorelle VanFossen\">&#8220;WordPress Power Tips&#8221; by Lorelle VanFossen</a> will offer useful tips, Plugins, and advice for blogging with WordPress collected over the past almost five years blogging with WordPress and 14 years blogging in general, and the author of fast selling book, <a href=\"http://lorelle.wordpress.com/books/blogging-tips/\" title=\"Blogging Tips Book By Lorelle VanFossen\"><em>Blogging Tips, What Bloggers Won\'t Tell You About Blogging</em></a>.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/smith/\" title=\"SEO for Bloggers Chris Smith\">&#8220;SEO for Bloggers&#8221;</a> is by <a href=\"http://www.netconcepts.com/who-we-are/executive-team/chris-smith/\" title=\"Chris Smith of Netconcepts\">Chris Smith of Netconcepts</a>, the company&#8217;s Lead GravityStream Strategist, and an expert in custom consulting on natural search optimization. Over the years, he has contributed to and oversaw development for diverse applications including: natural search optimization, advertising forecast systems, weather data delivery, city guides, campus area yellow pages, internet analytics, map-based search, e-cards, XML, RSS, wireless applications, and private-label yellow pages or PPC ad distribution provided to AOL, MSN, InfoSpace, Lycos, Google, Local.com, and many others. His work in organic search engine optimization can be found on <a href=\"http://searchengineland.com/\" title=\"Search Engine Land\">Search Engine Land</a>, <a href=\"http://www.webpronews.com/\" title=\"WebProNews\">WebProNews</a>, and <a href=\"http://www.naturalsearchblog.com/\" title=\"Natural Search Blog\">Natural Search Blog</a>.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/brazell/\" title=\"Aaron Brazell\">Aaron Brazell</a> of <a href=\"http://technosailor.com/\" title=\"TechnoSailor\">TechnoSailor</a> and <a href=\"http://www.b5media.com/\" title=\"b5media\">b5media</a> brings his business and networking expertise to share, helping us learn more about blog networks and marketing, as well as what&#8217;s hot in blog technology.</li>
<li><a href=\"http://www.weblogtoolscollection.com/\" title=\"Weblog Tools Collection\" rel=\"tag\">Weblog Tools Collection&#8217;s Mark Ghosh</a> will be making his first WordPress event, bringing his business expertise which turned around Weblog Tools Collection into a &#8220;source&#8221; for WordPress and blogging news.</li>
<li><a href=\"http://www.santosj.name/\" title=\"Jacob Santos\">Jacob Santos</a> is one of the new programming experts in WordPress. He will be covering &#8220;Testing with WordPress&#8221; for WordPress Themes and Plugins.</li>
</ol>
<p><h3>May 2-4 - Successful and Outstanding Bloggers Conference - Chicago</h3>
<p><a href=\"http://www.sobevent.com/\" title=\"SOBCon\"><img src=\"http://lorelle.files.wordpress.com/2008/03/sobcon08.jpg\" alt=\"SOBCon 2008\" align=\"right\" /></a>The <a href=\"http://www.sobevent.com/\" title=\"SOBCon\">Successful and Outstanding Bloggers Conference</a> is a unique event for bloggers called the &#8220;Biz School for Bloggers.&#8221; It brings together professional and upcoming business-oriented bloggers to learn from the best of the best about how to make money with your blog.</p>
<p>The 11 best of the best you do <a href=\"http://www.sobevent.com/register/\" title=\"Register for SOBCON 2008\">not want to miss</a> include:</p>
<ol>
<li><a href=\"http://www.terrystarbucker.com/\" title=\"Terry Starbucker\">Terry Starbucker</a> of <a href=\"http://www.terrystarbucker.com/\" title=\"Ramblings From a Glass Half Full\">Ramblings From a Glass Half Full</a> and <a href=\"http://www.joyfuljubilantlearning.com/\" title=\"Joyful Jubilant Learning\">Joyful Jubilant Learning</a> developed the &#8220;Half-Fullism&#8221; concept of business leadership, and serves as a senior operations executive for a service business based in the Rocky Mountain west, working as a consultant and student in leadership and personal development.</li>
<li><a href=\"http://www.45things.com/about.htm\" title=\"Anita Bruzzese\">Anita Bruzzese</a> is a syndicated newspaper workplace columnist/book author/magazine managing editor at Gannett News Service/USA Today.com, The IRE Journal, and “45 Things You Do That Drive Your Boss Crazy”.</li>
<li><a href=\"http://www.copyblogger.com/\" title=\"Brian Clark\">Brian Clark of Copyblogger</a> is quickly becoming one of the most recognized names in blogging, as well as an Internet marketing strategist, content developer, entrepreneur, and recovering attorney. Clark has built four successful offline businesses using online marketing techniques, and sold scores of products and services online via joint venture and affiliate arrangements.</li>
<li><a href=\"http://www.lorelle.wordpress.com/\" title=\"Lorelle VanFossen\">Lorelle VanFossen</a> brings her blogging business common sense to discuss your blog focus, purpose, readers, and making it all work together for you to build your blog business. Lorelle blogs on <a href=\"http://lorelle.wordpress.com/\" title=\"Lorelle on WordPress\" rel=\"tag\">Lorelle on WordPress</a>, <a href=\"http://www.cameraontheroad.com/\" rel=\"tag\" title=\"Taking Your Camera on the Road\">Taking Your Camera on the Road</a>, <a href=\"http://www.cameraontheroad.com/family/\" title=\"Lorelle Family History Blog\">Lorelle&#8217;s Family History Blog</a>, <a href=\"http://www.blogherald.com/\" title=\"Blog Herald\" rel=\"tag\">Blog Herald</a>, and is a frequent guest blogger on many top blogs such as <a href=\"http://www.problogger.net/\" title=\"Problogger\">ProBlogger</a>, <a href=\"http://www.successful-blog.com/\" title=\"Successful Blog\">Liz Strauss&#8217; Successful Blog</a>, <a href=\"http://www.coachezines.com/2007/04/your_writing_pe.html\" title=\"Who Are You?\">Coach Ezines</a>, and <a href=\"http://www.myamericanartist.com/2007/05/artists_web_blo.html\" title=\"American Artists Magazine - Artist\'s Weblogs\">American Artists Magazine</a>.</li>
<li><a href=\"http://www.chrisg.com/\" title=\"Chris Garrett\">Chris Garrett</a> is a professional blogger, Internet Marketing Consultant, writer, coach, and web geek. You know him from such sites as <a href=\"http://www.asptoday.com/Authors.aspx?ID=465\" title=\"ASPToday\">ASPToday</a>, <a href=\"http://aspalliance.com/author.aspx?uId=602\" title=\"ASPAlliance\">ASPAlliance</a>, <a href=\"http://www.threadwatch.org/user/334\" title=\"Threadwatch\">Threadwatch</a>, <a href=\"http://www.performancing.com/\" title=\"Performancing\">Performancing</a>, <a href=\"http://www.problogger.net/\" title=\"Problogger\">ProBlogger</a>, <a href=\"http://www.copyblogger.com/\" title=\"Brian Clark\">Copyblogger</a>, and <a href=\"http://www.blogherald.com/\" title=\"Blog Herald\" rel=\"tag\">Blog Herald</a>, and founder of <a href=\"http://www.omiq.com/\" title=\"OMIQ\">OMIQ</a> online media consultants.</li>
<li><a href=\"http://www.muhammadsaleem.com/\" title=\"Muhammad Saleem\">Muhammad Saleem</a> has become one of the leading experts in social bookmarking and networking sites, covering social media and socially driven content on his site and many others. HIred by Netscape as a professional social bookmarker, he is a recognized leader and speaker in this emerging field.</li>
<li><a href=\"http://chrisbrogan.com/\" title=\"Chris Brogan\">Chris Brogan</a> is a social media expert specializing in building online and offline communities, including founding <a href=\"http://podcamp.pbwiki.com/\" title=\"PodCamp Community UnConferences wiki - The password to edit this ...\">PodCamp Community UnConferences</a>, a free unconference that explores the benefits of new media community tools. Chris is also community developer for <a href=\"http://www.pulvermedia.com/\" title=\"We Build Communities\">Pulvermedia</a>, and produces the <a href=\"http://www.videoonthenet.com/\" title=\"May 13-14, 2008 : Manhattan, NY\">Video on the Net Conference</a>, which explores the disruptive impact of the broadband Internet on the future of TV, Film, and Entertainment.</li>
<li><a href=\"http://www.davidbullock.net/\" title=\"Dave Bullock\">Dave Bullock</a> is best known for introducing the advanced testing and tracking and innovation method known as <a href=\"http://www.davidbullock.com/whitepapers.shtml\" title=\"White Papers | David Bullock | Taguchi Method Expert\">Taguchi-TRIZ</a> to the internet marketing space. Students using these methods have increased conversion rates as much as a documented 600%. David has been featured in both He built a successful online/offline business after a $100,000,000 international sales career in the industrial automation and manufacturing industry. His practice has been featured in both <a href=\"http://www.dmnews.com/Taguchi-testing-can-triple-conversion/article/93753/\" title=\"Taguchi testing can triple conversion - DMNews\">Direct Marketing News</a> and Black Enterprise Magazine.</li>
<li><a href=\"http://www.successful-blog.com/\" title=\"Liz Strauss\">Liz Strauss</a> is considered one of the most influential relational blogger on the Internet turning her blog into a destination by developing a fiercely loyal community of readers. With over 20 years in the international publishing industry, she took the social networking of blogging to new heights with the development of the unique relationship conference, <a href=\"http://www.sobevent.com/\" title=\"SOBCon\">Successful and Outstanding Bloggers Conference</a>, that gained the attention of BusinessWeek, the Chicago Sun-Times, and the Kellogg Innovation Network of the Kellogg School of Management.</li>
<li><a href=\"http://www.emomsathome.com/\" title=\"Wendy Piersall\">Wendy Piersall</a> turned an idea into a blog into a business and a year later, she is the CEO and Founder of <a href=\"http://www.emomsat%20home.com/\" title=\"Wendy Piersall - eMomsatHome\">eMomsatHome</a>, the Internet home business magazine for moms and dad, part of a growing blog network. Liz Strauss recently featured her <a href=\"http://www.successful-blog.com/1/wendy-wouldnt-wait-will-you/\" title=\"Wendy Wouldn’t Wait. Will You?\">as one of the top blog success stories of the past year</a>.</li>
<li><a href=\"http://christinekane.com/blog\" title=\"ChristineKane.com\">ChristineKane.com</a> is a blogger, singer, songwriter, consultant, and program leader. While her music is available online and off through Borders Books and other music outlets, she goes beyond musician to creative expert working with the US Federal Government to teach creativity for their Leadership Assessment Program for government leaders, the Nuclear Regulatory Commission, CIA, and many colleges and universities, including University of Tennessee, Drury University and Boston College. She facilitates three-day retreats for women in the mountains of Western North Carolina four times a year, and shares her creative passion and success through her blog.</li>
</ol>
<h3>April 2-5 - The Alliance for Distance Education in California Summit - Pasadena, CA</h3>
<p><a href=\"http://www.adec-cal.org/summit.htm\" title=\"Alliance for Distance Education in California\"><img src=\"http://lorelle.files.wordpress.com/2008/03/adecsummit.png\" alt=\"ADEC Summit\" align=\"right\" /></a>The <a href=\"http://www.adec-cal.org/summit.htm\" title=\"Alliance for Distance Education in California\">Alliance for Distance Education in California Summit in Pasadena, California, April 2-5, 2008</a>, is not just for educators. It is for bloggers and online business people who want to learn more about how web technologies are being used and developed in the education industry, as that is where our future rests. The online distance education market is one of the fastest growing online industries in the world, providing educational opportunities that exceeds borders and geographic restrictions. </p>
<p>The top leaders in distance education learning and web technologies will be bringing the lastest news and technologies to Pasadena, reaching out beyond the classroom to the global market. The three keynote speakers you do not want to miss are:</p>
<ol>
<li><a href=\"http://www.distance-educator.com/blog/saba/index.php\" title=\"Farhad Saba, Ph.D\">Farhad Saba, Ph.D</a> is a blogger but also a long time leader in telecommunications and web technologies. Currently, he is the <a href=\"http://www.fielding.edu/elc/\" title=\"Fielding Graduate University - School of Educational Leadership ...\">professor of Educational Technology at San Diego State</a> University, where he teaches courses on distance education, and cyberculture. Involved in distance education since 1973, first as the Managing Director of Educational Radio and Television of Iran, then Director of the Telecommunications Division at the University of Connecticut, Dr. Saba is a founding leader in distance education with his company, <a href=\"http://distance-educator.com/\" title=\"Distance-Educator.com\">Distance-Educator.com</a>. He serves as a <a href=\"http://edweb.sdsu.edu/people/FSaba/FSaba.html\" title=\"Fred Saba , Ph . D . Professor, Educational Technology\">consultant to international corporations and local schools and governments</a>, and continues his research into design, implementation and evaluation of distance education systems. He is also founder and President of Saba &amp; Associates, an independent group of experienced consultants who specialize in distance education.</li>
<li>Yolanda Gayol, Ed.D. is Professor of Educational Technology at San Diego State University and blogs at <a href=\"http://yolandagayol.blogspot.com/\" title=\"Distance Education Village\">Distance Education Village</a>. She worked as a distance education specialist at NASA, the World Bank, the Inter-American Development Bank, Athabasca University, the University of Maryland University College and ICMA/USAID, among other international corporations and educational institutes. She is a leader in online education and distance learning.</li>
<li><a href=\"http://www.usdla.org/html/aboutUs/bios/powell.htm\" title=\"Biography | Marci Powell\">Marci Powell</a> is Global Director for Higher Education on the <a href=\"http://lorelle.wordpress.com/category/wordpress-news/feed/www.polycom.com/education\" title=\"Polycom Education\">Polycom Education Team</a> and president-elect of the <a href=\"http://www.usdla.org/\" title=\"USDLA - United States Distance Learning Association\">United States Distance Learning Association (USDLA)</a>. She works with educational product development and facilitates integration and utilization of educational technology. She also works with the <a href=\"http://www.cissa.org/\" title=\"Communities In Schools of San Antonio\">Communities In Schools of San Antonio</a>, <a href=\"http://www.iste.org/\" title=\"International Society for Technology in Education (ISTE)\">International Society for Technology in Education (ISTE)</a>, and <a href=\"http://www.iste.org/sigivc/\" title=\"Interactive Videoconferencing Special Interest Group (IVCSIG)\">Interactive Videoconferencing Special Interest Group (IVCSIG)</a>.</li>
<li>Mike Lawrence, Executive Director of <a href=\"http://www.cue.org/\" title=\"Computer-Using Educators, Inc. ( CUE )\">Computer-Using Educators, Inc. (CUE)</a>, lead Principal training programs for Southern California and has been a teacher, speaker, technology coordinator, and director for more than 15 years. In 2003, he was honored as an <a href=\"http://www.apple.com/education/ade/\" title=\"Apple Learning Interchange - The Apple Distinguished Educator\">Apple Distinguished Educator</a>, and is also an author and editor.</li>
</ol>
<p>That&#8217;s just the crème de la crème. Over a dozen leaders in online education and distance learning will be speaking in special sessions and on panels through the week, including me.</p>
<h4>What Will You Really Be Missing?</h4>
<p>By missing any of these powerful blogging and web technology events, you miss rubbing shoulders with the best of the best who are paving the path to success online. You are missing a chance to learn directly from those who have made all the mistakes and earned their reputation for excellence. You can have all your questions asked and answered by those who have been there, done that.</p>
<p>It&#8217;s a chance to get to know the trendsetters and path breakers in the blogging and web technology industry. You never know when you will need their expertise, and you never know when they will need yours. This is a change to get known and be known.</p>
<p>Be there.</p>
<ul>
<li><a href=\"http://dallas.wordcamp.org/\" title=\"Mar 29, 2008: WordCamp Dallas at Frisco City Hall\">WordCamp Dallas March 29-30</a></li>
<li><a href=\"http://www.adec-cal.org/summit.htm\" title=\"Alliance for Distance Education in California\">Alliance for Distance Education in California Summit April 2-5, 2008</a></li>
<li><a href=\"http://www.sobevent.com/\" title=\"SOBCon\">Successful and Outstanding Bloggers Conference May 2-5</a></li>
</ul>
<p>And yes, I know two of the names are repeated, but YOU and a blogging friend being there will make up the minimum 24 reasons why you need to sign up for these blog events now.</p>
<p><img src=\"http://lorelle.files.wordpress.com/2006/08/sig.gif\" alt=\"\" /><br />
<hr />
<p><font size=\"-1\"><b>Site Search Tags:</b> <a href=\"http://lorelle.wordpress.com/index.php?s=blogging+tips\" rel=\"tag\">blogging tips</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=blog+events\" rel=\"tag\">blog events</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=blog+conferences\" rel=\"tag\">blog conferences</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=conferences\" rel=\"tag\">conferences</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=business+of+blogging\" rel=\"tag\">business of blogging</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=sobcon\" rel=\"tag\">sobcon</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=successful+and+outstanding+bloggers\" rel=\"tag\">successful and outstanding bloggers</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordcamp\" rel=\"tag\">wordcamp</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+news\" rel=\"tag\">wordpress news</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordcamp+dallas\" rel=\"tag\">wordcamp dallas</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=adec\" rel=\"tag\">adec</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=association+for+distance+in+education+in+california\" rel=\"tag\">association for distance in education in california</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=online+education\" rel=\"tag\">online education</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=distance+learning\" rel=\"tag\">distance learning</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=blog+experts\" rel=\"tag\">blog experts</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=blogging+experts\" rel=\"tag\">blogging experts</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=online+experts\" rel=\"tag\">online experts</a> </p>
<p><a href=\"http://lorelle.wordpress.com/feed/\" title=\"Feed on Lorelle on WordPress\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2007/02/rss.png\" alt=\"Feed on Lorelle on WordPress\" /></a> <a href=\"http://lorelle.wordpress.com/feed/\" title=\"Feed on Lorelle on WordPress\">Subscribe</a>  <a href=\"http://feeds.feedburner.com/LorelleOnWordpress\" title=\"Feedburner Lorelle on WordPress Feed\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2007/04/feedburnericon.gif\" alt=\"Feedburner icon\" />Via Feedburner</a>  <a href=\"http://www.feedblitz.com/f/?Sub=182399\" title=\"Lorelle on WordPress - full site feed email subscription\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2007/03/email.gif\" alt=\"\" />Subscribe by Email</a> <a href=\"http://lorelle.wordpress.com/\" title=\"Visit Lorelle on WordPress\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2008/03/pointer.gif\" alt=\"\" />Visit</a><br /><a href=\"http://lorelle.wordpress.com/about/\" title=\"Copyright Protected by Brent and Lorelle VanFossen\">Copyright Lorelle VanFossen</a>, the author of <a href=\"http://lorelle.wordpress.com/books/blogging-tips/\" title=\"Blogging Tips Book By Lorelle VanFossen\"><em>Blogging Tips, What Bloggers Won\'t Tell You About Blogging</em></a>.</font></p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/lorelle.wordpress.com/2422/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/lorelle.wordpress.com/2422/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/lorelle.wordpress.com/2422/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/lorelle.wordpress.com/2422/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/lorelle.wordpress.com/2422/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/lorelle.wordpress.com/2422/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/lorelle.wordpress.com/2422/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/lorelle.wordpress.com/2422/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/lorelle.wordpress.com/2422/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/lorelle.wordpress.com/2422/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/lorelle.wordpress.com/2422/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/lorelle.wordpress.com/2422/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=lorelle.wordpress.com&blog=72&post=2422&subd=lorelle&ref=&feed=1\" /></div>\";s:7:\"pubdate\";s:31:\"Tue, 18 Mar 2008 00:51:11 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:17:\"Lorelle VanFossen\";}s:7:\"summary\";s:24750:\"<div class=\"snap_preview\"><br /><p>I&#8217;ve got three blog conferences I&#8217;ll be speaking at, and I want to give you 24 good reasons why you should be at each of these. </p>
<h3>March 29-30 - WordCamp Dallas</h3>
<p><a href=\"http://dallas.wordcamp.org/\" title=\"Mar 29, 2008: WordCamp Dallas at Frisco City Hall\"><img src=\"http://lorelle.files.wordpress.com/2008/03/wordcampdallas.jpg\" alt=\"WordCamp Dallas 2008\" align=\"right\" /></a><a href=\"http://dallas.wordcamp.org/\" title=\"Mar 29, 2008: WordCamp Dallas at Frisco City Hall\">WordCamp Dallas</a> is going to be one of the hottest WordPress-oriented blog events this year. People are flying in from all over the country to join Dallas area bloggers to enjoy all things WordPress and blogging. The 10 speakers you will not want to miss are:</p>
<ol>
<li><a href=\"http://dallas.wordcamp.org/schedule/mullenweg/\" title=\"WordPress 2.5 and Beyond Matt Mullenweg\">&#8220;WordPress 2.5 and Beyond&#8221; with Matt Mullenweg</a> of WordPress fame. WordPress 2.5 will be released just before the conference, so you will get a first hand look at where WordPress is going beyond this version.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/pozadzides/\" title=\"45 Ways to Power Up Your Blog John Pozadzides\">John Pozadzides with &#8220;5 Ways to Power Up Your Blog&#8221;</a>, author of the popular <a href=\"http://onemansblog.com/\" title=\"One Man’s Blog\">One Man’s Blog</a>, founder of <a href=\"http://www.htmlhelp.com/\" title=\"HTMLHelp.com\">HTMLHelp.com</a>, and Chief Marketing Officer of <a href=\"http://www.layeredtech.com/\" title=\"Layered Technologies\">Layered Technologies</a>, and more, will cover hot tips for making your WordPress blog be as powerhouse blog.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/bailey/\" title=\"How to Prevent, Detect and Stop Content Theft Jonathan Bailey\">&#8220;How to Prevent, Detect and Stop Content Theft&#8221; with Jonathan Bailey</a>, of <a href=\"http://www.plagiarismtoday.com/\" title=\"Plagiarism Today\">Plagiarism Today</a> and the <a href=\"http://www.blogherald.com/\" title=\"Blog Herald\" rel=\"tag\">Blog Herald</a>, offers a wide variety of ways you can help put a stop to content theft with your WordPress blog.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/geekbrief/\" title=\"Cali Lewis and Neal Campbell\">Cali Lewis and Neal Campbell</a> are famous for their popular <a href=\"http://www.geekbrief.tv/\" title=\"GeekBrief.TV\">GeekBrief.TV</a>, a popular web technology and consumer electronics videocast, and they will be covering video blogs and incorporating multimedia into your blog.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/strauss/\" title=\"C’mon, Let’s Talk! Building Influence and Interaction with Blogging Liz Strauss\">Liz Strauss brings &#8220;C’mon, Let’s Talk! Building Influence and Interaction with Blogging&#8221;</a>, sharing her tips for mastering the blog conversation learned from thousands of comments monthly on <a href=\"http://www.successful-blog.com/\" title=\"Successful Blog\">Successful Blog</a> and <a href=\"http://www.lizstrauss.com/\" title=\"Liz Strauss.com\">Liz Strauss.com</a>. She is also the founder of the popular blog conference, <a href=\"http://www.sobevent.com/\" title=\"SOBCon\">Successful and Outstanding Bloggers Conference</a>.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/vanfossen/\" title=\"WordPress Power Tips Lorelle VanFossen\">&#8220;WordPress Power Tips&#8221; by Lorelle VanFossen</a> will offer useful tips, Plugins, and advice for blogging with WordPress collected over the past almost five years blogging with WordPress and 14 years blogging in general, and the author of fast selling book, <a href=\"http://lorelle.wordpress.com/books/blogging-tips/\" title=\"Blogging Tips Book By Lorelle VanFossen\"><em>Blogging Tips, What Bloggers Won\'t Tell You About Blogging</em></a>.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/smith/\" title=\"SEO for Bloggers Chris Smith\">&#8220;SEO for Bloggers&#8221;</a> is by <a href=\"http://www.netconcepts.com/who-we-are/executive-team/chris-smith/\" title=\"Chris Smith of Netconcepts\">Chris Smith of Netconcepts</a>, the company&#8217;s Lead GravityStream Strategist, and an expert in custom consulting on natural search optimization. Over the years, he has contributed to and oversaw development for diverse applications including: natural search optimization, advertising forecast systems, weather data delivery, city guides, campus area yellow pages, internet analytics, map-based search, e-cards, XML, RSS, wireless applications, and private-label yellow pages or PPC ad distribution provided to AOL, MSN, InfoSpace, Lycos, Google, Local.com, and many others. His work in organic search engine optimization can be found on <a href=\"http://searchengineland.com/\" title=\"Search Engine Land\">Search Engine Land</a>, <a href=\"http://www.webpronews.com/\" title=\"WebProNews\">WebProNews</a>, and <a href=\"http://www.naturalsearchblog.com/\" title=\"Natural Search Blog\">Natural Search Blog</a>.</li>
<li><a href=\"http://dallas.wordcamp.org/schedule/brazell/\" title=\"Aaron Brazell\">Aaron Brazell</a> of <a href=\"http://technosailor.com/\" title=\"TechnoSailor\">TechnoSailor</a> and <a href=\"http://www.b5media.com/\" title=\"b5media\">b5media</a> brings his business and networking expertise to share, helping us learn more about blog networks and marketing, as well as what&#8217;s hot in blog technology.</li>
<li><a href=\"http://www.weblogtoolscollection.com/\" title=\"Weblog Tools Collection\" rel=\"tag\">Weblog Tools Collection&#8217;s Mark Ghosh</a> will be making his first WordPress event, bringing his business expertise which turned around Weblog Tools Collection into a &#8220;source&#8221; for WordPress and blogging news.</li>
<li><a href=\"http://www.santosj.name/\" title=\"Jacob Santos\">Jacob Santos</a> is one of the new programming experts in WordPress. He will be covering &#8220;Testing with WordPress&#8221; for WordPress Themes and Plugins.</li>
</ol>
<p><h3>May 2-4 - Successful and Outstanding Bloggers Conference - Chicago</h3>
<p><a href=\"http://www.sobevent.com/\" title=\"SOBCon\"><img src=\"http://lorelle.files.wordpress.com/2008/03/sobcon08.jpg\" alt=\"SOBCon 2008\" align=\"right\" /></a>The <a href=\"http://www.sobevent.com/\" title=\"SOBCon\">Successful and Outstanding Bloggers Conference</a> is a unique event for bloggers called the &#8220;Biz School for Bloggers.&#8221; It brings together professional and upcoming business-oriented bloggers to learn from the best of the best about how to make money with your blog.</p>
<p>The 11 best of the best you do <a href=\"http://www.sobevent.com/register/\" title=\"Register for SOBCON 2008\">not want to miss</a> include:</p>
<ol>
<li><a href=\"http://www.terrystarbucker.com/\" title=\"Terry Starbucker\">Terry Starbucker</a> of <a href=\"http://www.terrystarbucker.com/\" title=\"Ramblings From a Glass Half Full\">Ramblings From a Glass Half Full</a> and <a href=\"http://www.joyfuljubilantlearning.com/\" title=\"Joyful Jubilant Learning\">Joyful Jubilant Learning</a> developed the &#8220;Half-Fullism&#8221; concept of business leadership, and serves as a senior operations executive for a service business based in the Rocky Mountain west, working as a consultant and student in leadership and personal development.</li>
<li><a href=\"http://www.45things.com/about.htm\" title=\"Anita Bruzzese\">Anita Bruzzese</a> is a syndicated newspaper workplace columnist/book author/magazine managing editor at Gannett News Service/USA Today.com, The IRE Journal, and “45 Things You Do That Drive Your Boss Crazy”.</li>
<li><a href=\"http://www.copyblogger.com/\" title=\"Brian Clark\">Brian Clark of Copyblogger</a> is quickly becoming one of the most recognized names in blogging, as well as an Internet marketing strategist, content developer, entrepreneur, and recovering attorney. Clark has built four successful offline businesses using online marketing techniques, and sold scores of products and services online via joint venture and affiliate arrangements.</li>
<li><a href=\"http://www.lorelle.wordpress.com/\" title=\"Lorelle VanFossen\">Lorelle VanFossen</a> brings her blogging business common sense to discuss your blog focus, purpose, readers, and making it all work together for you to build your blog business. Lorelle blogs on <a href=\"http://lorelle.wordpress.com/\" title=\"Lorelle on WordPress\" rel=\"tag\">Lorelle on WordPress</a>, <a href=\"http://www.cameraontheroad.com/\" rel=\"tag\" title=\"Taking Your Camera on the Road\">Taking Your Camera on the Road</a>, <a href=\"http://www.cameraontheroad.com/family/\" title=\"Lorelle Family History Blog\">Lorelle&#8217;s Family History Blog</a>, <a href=\"http://www.blogherald.com/\" title=\"Blog Herald\" rel=\"tag\">Blog Herald</a>, and is a frequent guest blogger on many top blogs such as <a href=\"http://www.problogger.net/\" title=\"Problogger\">ProBlogger</a>, <a href=\"http://www.successful-blog.com/\" title=\"Successful Blog\">Liz Strauss&#8217; Successful Blog</a>, <a href=\"http://www.coachezines.com/2007/04/your_writing_pe.html\" title=\"Who Are You?\">Coach Ezines</a>, and <a href=\"http://www.myamericanartist.com/2007/05/artists_web_blo.html\" title=\"American Artists Magazine - Artist\'s Weblogs\">American Artists Magazine</a>.</li>
<li><a href=\"http://www.chrisg.com/\" title=\"Chris Garrett\">Chris Garrett</a> is a professional blogger, Internet Marketing Consultant, writer, coach, and web geek. You know him from such sites as <a href=\"http://www.asptoday.com/Authors.aspx?ID=465\" title=\"ASPToday\">ASPToday</a>, <a href=\"http://aspalliance.com/author.aspx?uId=602\" title=\"ASPAlliance\">ASPAlliance</a>, <a href=\"http://www.threadwatch.org/user/334\" title=\"Threadwatch\">Threadwatch</a>, <a href=\"http://www.performancing.com/\" title=\"Performancing\">Performancing</a>, <a href=\"http://www.problogger.net/\" title=\"Problogger\">ProBlogger</a>, <a href=\"http://www.copyblogger.com/\" title=\"Brian Clark\">Copyblogger</a>, and <a href=\"http://www.blogherald.com/\" title=\"Blog Herald\" rel=\"tag\">Blog Herald</a>, and founder of <a href=\"http://www.omiq.com/\" title=\"OMIQ\">OMIQ</a> online media consultants.</li>
<li><a href=\"http://www.muhammadsaleem.com/\" title=\"Muhammad Saleem\">Muhammad Saleem</a> has become one of the leading experts in social bookmarking and networking sites, covering social media and socially driven content on his site and many others. HIred by Netscape as a professional social bookmarker, he is a recognized leader and speaker in this emerging field.</li>
<li><a href=\"http://chrisbrogan.com/\" title=\"Chris Brogan\">Chris Brogan</a> is a social media expert specializing in building online and offline communities, including founding <a href=\"http://podcamp.pbwiki.com/\" title=\"PodCamp Community UnConferences wiki - The password to edit this ...\">PodCamp Community UnConferences</a>, a free unconference that explores the benefits of new media community tools. Chris is also community developer for <a href=\"http://www.pulvermedia.com/\" title=\"We Build Communities\">Pulvermedia</a>, and produces the <a href=\"http://www.videoonthenet.com/\" title=\"May 13-14, 2008 : Manhattan, NY\">Video on the Net Conference</a>, which explores the disruptive impact of the broadband Internet on the future of TV, Film, and Entertainment.</li>
<li><a href=\"http://www.davidbullock.net/\" title=\"Dave Bullock\">Dave Bullock</a> is best known for introducing the advanced testing and tracking and innovation method known as <a href=\"http://www.davidbullock.com/whitepapers.shtml\" title=\"White Papers | David Bullock | Taguchi Method Expert\">Taguchi-TRIZ</a> to the internet marketing space. Students using these methods have increased conversion rates as much as a documented 600%. David has been featured in both He built a successful online/offline business after a $100,000,000 international sales career in the industrial automation and manufacturing industry. His practice has been featured in both <a href=\"http://www.dmnews.com/Taguchi-testing-can-triple-conversion/article/93753/\" title=\"Taguchi testing can triple conversion - DMNews\">Direct Marketing News</a> and Black Enterprise Magazine.</li>
<li><a href=\"http://www.successful-blog.com/\" title=\"Liz Strauss\">Liz Strauss</a> is considered one of the most influential relational blogger on the Internet turning her blog into a destination by developing a fiercely loyal community of readers. With over 20 years in the international publishing industry, she took the social networking of blogging to new heights with the development of the unique relationship conference, <a href=\"http://www.sobevent.com/\" title=\"SOBCon\">Successful and Outstanding Bloggers Conference</a>, that gained the attention of BusinessWeek, the Chicago Sun-Times, and the Kellogg Innovation Network of the Kellogg School of Management.</li>
<li><a href=\"http://www.emomsathome.com/\" title=\"Wendy Piersall\">Wendy Piersall</a> turned an idea into a blog into a business and a year later, she is the CEO and Founder of <a href=\"http://www.emomsat%20home.com/\" title=\"Wendy Piersall - eMomsatHome\">eMomsatHome</a>, the Internet home business magazine for moms and dad, part of a growing blog network. Liz Strauss recently featured her <a href=\"http://www.successful-blog.com/1/wendy-wouldnt-wait-will-you/\" title=\"Wendy Wouldn’t Wait. Will You?\">as one of the top blog success stories of the past year</a>.</li>
<li><a href=\"http://christinekane.com/blog\" title=\"ChristineKane.com\">ChristineKane.com</a> is a blogger, singer, songwriter, consultant, and program leader. While her music is available online and off through Borders Books and other music outlets, she goes beyond musician to creative expert working with the US Federal Government to teach creativity for their Leadership Assessment Program for government leaders, the Nuclear Regulatory Commission, CIA, and many colleges and universities, including University of Tennessee, Drury University and Boston College. She facilitates three-day retreats for women in the mountains of Western North Carolina four times a year, and shares her creative passion and success through her blog.</li>
</ol>
<h3>April 2-5 - The Alliance for Distance Education in California Summit - Pasadena, CA</h3>
<p><a href=\"http://www.adec-cal.org/summit.htm\" title=\"Alliance for Distance Education in California\"><img src=\"http://lorelle.files.wordpress.com/2008/03/adecsummit.png\" alt=\"ADEC Summit\" align=\"right\" /></a>The <a href=\"http://www.adec-cal.org/summit.htm\" title=\"Alliance for Distance Education in California\">Alliance for Distance Education in California Summit in Pasadena, California, April 2-5, 2008</a>, is not just for educators. It is for bloggers and online business people who want to learn more about how web technologies are being used and developed in the education industry, as that is where our future rests. The online distance education market is one of the fastest growing online industries in the world, providing educational opportunities that exceeds borders and geographic restrictions. </p>
<p>The top leaders in distance education learning and web technologies will be bringing the lastest news and technologies to Pasadena, reaching out beyond the classroom to the global market. The three keynote speakers you do not want to miss are:</p>
<ol>
<li><a href=\"http://www.distance-educator.com/blog/saba/index.php\" title=\"Farhad Saba, Ph.D\">Farhad Saba, Ph.D</a> is a blogger but also a long time leader in telecommunications and web technologies. Currently, he is the <a href=\"http://www.fielding.edu/elc/\" title=\"Fielding Graduate University - School of Educational Leadership ...\">professor of Educational Technology at San Diego State</a> University, where he teaches courses on distance education, and cyberculture. Involved in distance education since 1973, first as the Managing Director of Educational Radio and Television of Iran, then Director of the Telecommunications Division at the University of Connecticut, Dr. Saba is a founding leader in distance education with his company, <a href=\"http://distance-educator.com/\" title=\"Distance-Educator.com\">Distance-Educator.com</a>. He serves as a <a href=\"http://edweb.sdsu.edu/people/FSaba/FSaba.html\" title=\"Fred Saba , Ph . D . Professor, Educational Technology\">consultant to international corporations and local schools and governments</a>, and continues his research into design, implementation and evaluation of distance education systems. He is also founder and President of Saba &amp; Associates, an independent group of experienced consultants who specialize in distance education.</li>
<li>Yolanda Gayol, Ed.D. is Professor of Educational Technology at San Diego State University and blogs at <a href=\"http://yolandagayol.blogspot.com/\" title=\"Distance Education Village\">Distance Education Village</a>. She worked as a distance education specialist at NASA, the World Bank, the Inter-American Development Bank, Athabasca University, the University of Maryland University College and ICMA/USAID, among other international corporations and educational institutes. She is a leader in online education and distance learning.</li>
<li><a href=\"http://www.usdla.org/html/aboutUs/bios/powell.htm\" title=\"Biography | Marci Powell\">Marci Powell</a> is Global Director for Higher Education on the <a href=\"http://lorelle.wordpress.com/category/wordpress-news/feed/www.polycom.com/education\" title=\"Polycom Education\">Polycom Education Team</a> and president-elect of the <a href=\"http://www.usdla.org/\" title=\"USDLA - United States Distance Learning Association\">United States Distance Learning Association (USDLA)</a>. She works with educational product development and facilitates integration and utilization of educational technology. She also works with the <a href=\"http://www.cissa.org/\" title=\"Communities In Schools of San Antonio\">Communities In Schools of San Antonio</a>, <a href=\"http://www.iste.org/\" title=\"International Society for Technology in Education (ISTE)\">International Society for Technology in Education (ISTE)</a>, and <a href=\"http://www.iste.org/sigivc/\" title=\"Interactive Videoconferencing Special Interest Group (IVCSIG)\">Interactive Videoconferencing Special Interest Group (IVCSIG)</a>.</li>
<li>Mike Lawrence, Executive Director of <a href=\"http://www.cue.org/\" title=\"Computer-Using Educators, Inc. ( CUE )\">Computer-Using Educators, Inc. (CUE)</a>, lead Principal training programs for Southern California and has been a teacher, speaker, technology coordinator, and director for more than 15 years. In 2003, he was honored as an <a href=\"http://www.apple.com/education/ade/\" title=\"Apple Learning Interchange - The Apple Distinguished Educator\">Apple Distinguished Educator</a>, and is also an author and editor.</li>
</ol>
<p>That&#8217;s just the crème de la crème. Over a dozen leaders in online education and distance learning will be speaking in special sessions and on panels through the week, including me.</p>
<h4>What Will You Really Be Missing?</h4>
<p>By missing any of these powerful blogging and web technology events, you miss rubbing shoulders with the best of the best who are paving the path to success online. You are missing a chance to learn directly from those who have made all the mistakes and earned their reputation for excellence. You can have all your questions asked and answered by those who have been there, done that.</p>
<p>It&#8217;s a chance to get to know the trendsetters and path breakers in the blogging and web technology industry. You never know when you will need their expertise, and you never know when they will need yours. This is a change to get known and be known.</p>
<p>Be there.</p>
<ul>
<li><a href=\"http://dallas.wordcamp.org/\" title=\"Mar 29, 2008: WordCamp Dallas at Frisco City Hall\">WordCamp Dallas March 29-30</a></li>
<li><a href=\"http://www.adec-cal.org/summit.htm\" title=\"Alliance for Distance Education in California\">Alliance for Distance Education in California Summit April 2-5, 2008</a></li>
<li><a href=\"http://www.sobevent.com/\" title=\"SOBCon\">Successful and Outstanding Bloggers Conference May 2-5</a></li>
</ul>
<p>And yes, I know two of the names are repeated, but YOU and a blogging friend being there will make up the minimum 24 reasons why you need to sign up for these blog events now.</p>
<p><img src=\"http://lorelle.files.wordpress.com/2006/08/sig.gif\" alt=\"\" /><br />
<hr />
<p><font size=\"-1\"><b>Site Search Tags:</b> <a href=\"http://lorelle.wordpress.com/index.php?s=blogging+tips\" rel=\"tag\">blogging tips</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=blog+events\" rel=\"tag\">blog events</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=blog+conferences\" rel=\"tag\">blog conferences</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=conferences\" rel=\"tag\">conferences</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=business+of+blogging\" rel=\"tag\">business of blogging</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=sobcon\" rel=\"tag\">sobcon</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=successful+and+outstanding+bloggers\" rel=\"tag\">successful and outstanding bloggers</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordcamp\" rel=\"tag\">wordcamp</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordpress+news\" rel=\"tag\">wordpress news</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=wordcamp+dallas\" rel=\"tag\">wordcamp dallas</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=adec\" rel=\"tag\">adec</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=association+for+distance+in+education+in+california\" rel=\"tag\">association for distance in education in california</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=online+education\" rel=\"tag\">online education</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=distance+learning\" rel=\"tag\">distance learning</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=blog+experts\" rel=\"tag\">blog experts</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=blogging+experts\" rel=\"tag\">blogging experts</a>, <a href=\"http://lorelle.wordpress.com/index.php?s=online+experts\" rel=\"tag\">online experts</a> </p>
<p><a href=\"http://lorelle.wordpress.com/feed/\" title=\"Feed on Lorelle on WordPress\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2007/02/rss.png\" alt=\"Feed on Lorelle on WordPress\" /></a> <a href=\"http://lorelle.wordpress.com/feed/\" title=\"Feed on Lorelle on WordPress\">Subscribe</a>  <a href=\"http://feeds.feedburner.com/LorelleOnWordpress\" title=\"Feedburner Lorelle on WordPress Feed\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2007/04/feedburnericon.gif\" alt=\"Feedburner icon\" />Via Feedburner</a>  <a href=\"http://www.feedblitz.com/f/?Sub=182399\" title=\"Lorelle on WordPress - full site feed email subscription\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2007/03/email.gif\" alt=\"\" />Subscribe by Email</a> <a href=\"http://lorelle.wordpress.com/\" title=\"Visit Lorelle on WordPress\"><img class=\"wp-smiley\" src=\"http://lorelle.files.wordpress.com/2008/03/pointer.gif\" alt=\"\" />Visit</a><br /><a href=\"http://lorelle.wordpress.com/about/\" title=\"Copyright Protected by Brent and Lorelle VanFossen\">Copyright Lorelle VanFossen</a>, the author of <a href=\"http://lorelle.wordpress.com/books/blogging-tips/\" title=\"Blogging Tips Book By Lorelle VanFossen\"><em>Blogging Tips, What Bloggers Won\'t Tell You About Blogging</em></a>.</font></p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/lorelle.wordpress.com/2422/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/lorelle.wordpress.com/2422/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/lorelle.wordpress.com/2422/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/lorelle.wordpress.com/2422/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/lorelle.wordpress.com/2422/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/lorelle.wordpress.com/2422/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/lorelle.wordpress.com/2422/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/lorelle.wordpress.com/2422/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/lorelle.wordpress.com/2422/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/lorelle.wordpress.com/2422/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/lorelle.wordpress.com/2422/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/lorelle.wordpress.com/2422/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=lorelle.wordpress.com&blog=72&post=2422&subd=lorelle&ref=&feed=1\" /></div>\";}i:21;a:7:{s:5:\"title\";s:60:\"Weblog Tools Collection: WordPress Hacks and Techniques List\";s:4:\"guid\";s:89:\"http://weblogtoolscollection.com/archives/2008/03/16/wordpress-hacks-and-techniques-list/\";s:4:\"link\";s:89:\"http://weblogtoolscollection.com/archives/2008/03/16/wordpress-hacks-and-techniques-list/\";s:11:\"description\";s:552:\"<p><a href=\"http://www.noupe.com/\">Noupe</a> has a very large list of <a href=\"http://www.noupe.com/wordpress/mastering-your-wordpress-theme-hacks-and-techniques.html\">various WordPress hacks and techniques</a> for all you coders out there.</p>
<p>Topics include the Loop, categories, excerpts, navigation, trackbacks, custom fields, permalinks, and much more.</p>
<p>The list is the <a href=\"http://www.noupe.com/tutorial/the-powerful-guide-to-master-your-wordpress.html\">first part of a four-part series</a> to cover various aspects of WordPress.</p>\";s:7:\"pubdate\";s:31:\"Mon, 17 Mar 2008 02:00:06 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:14:\"Ronald Huereca\";}s:7:\"summary\";s:552:\"<p><a href=\"http://www.noupe.com/\">Noupe</a> has a very large list of <a href=\"http://www.noupe.com/wordpress/mastering-your-wordpress-theme-hacks-and-techniques.html\">various WordPress hacks and techniques</a> for all you coders out there.</p>
<p>Topics include the Loop, categories, excerpts, navigation, trackbacks, custom fields, permalinks, and much more.</p>
<p>The list is the <a href=\"http://www.noupe.com/tutorial/the-powerful-guide-to-master-your-wordpress.html\">first part of a four-part series</a> to cover various aspects of WordPress.</p>\";}i:22;a:7:{s:5:\"title\";s:67:\"Peter Westwood: WordPress weekly digest 4th March to 9th March 2008\";s:4:\"guid\";s:32:\"http://westi.wordpress.com/?p=41\";s:4:\"link\";s:90:\"http://westi.wordpress.com/2008/03/16/wordpress-weekly-digest-4th-march-to-9th-march-2008/\";s:11:\"description\";s:2932:\"<div class=\"snap_preview\"><br /><p>This weeks digest post is only for 6 days as I seemed to have got my <a href=\"http://westi.wordpress.com/2008/03/14/wordpress-weekly-digest-25th-february-to-3rd-march-2008/\">dates wrong on Friday when writing the last one</a> and ended it on a Monday instead of a Sunday!  It was a busy week again for WordPress 2.5, even though the list below looks short, the changes were:</p>
<ul>
<li>Abstraction of the colours from the layout within the css files to allow for multiple admin themes (<a href=\"http://trac.wordpress.org/changeset/7178\">[7178]</a>).</li>
<li>Improvements to <code>add_menu_page()</code> so as to create the correct links for top level menus in more cases (<a href=\"http://trac.wordpress.org/ticket/4907\">#4907</a>).</li>
<li>Lots of work on the plugin update installer (<a href=\"http://trac.wordpress.org/ticket/5586\">#5586</a>).</li>
<li>Update to TinyMCE 3.03 (<a href=\"http://trac.wordpress.org/ticket/6084\">#6084</a>).</li>
<li>More updates to the new media library (<a href=\"http://trac.wordpress.org/ticket/5911\">#5911</a>).</li>
<li>Lots of updates to the new admin style.</li>
</ul>
<p>For even more information on some of the other little changes that went in this week you can read the whole <a href=\"http://trac.wordpress.org/timeline?from=03%2F09%2F08&amp;daysback=5&amp;changeset=on\">weekly trac timeline</a>, look at a complete <a href=\"http://westi.files.wordpress.com/2008/03/wordpress-changelog-04-03-2008-to-09-03-2008.txt\">changelog</a> for trunk or view a <a href=\"http://westi.files.wordpress.com/2008/03/wordpress-diffstat-04-03-2008-to-09-03-2008.txt\">diffstat of the changes</a>.</p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/westi.wordpress.com/41/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/westi.wordpress.com/41/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/westi.wordpress.com/41/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/westi.wordpress.com/41/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/westi.wordpress.com/41/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/westi.wordpress.com/41/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/westi.wordpress.com/41/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/westi.wordpress.com/41/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/westi.wordpress.com/41/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/westi.wordpress.com/41/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/westi.wordpress.com/41/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/westi.wordpress.com/41/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=westi.wordpress.com&blog=15396&post=41&subd=westi&ref=&feed=1\" /></div>\";s:7:\"pubdate\";s:31:\"Sun, 16 Mar 2008 19:10:52 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:14:\"Peter Westwood\";}s:7:\"summary\";s:2932:\"<div class=\"snap_preview\"><br /><p>This weeks digest post is only for 6 days as I seemed to have got my <a href=\"http://westi.wordpress.com/2008/03/14/wordpress-weekly-digest-25th-february-to-3rd-march-2008/\">dates wrong on Friday when writing the last one</a> and ended it on a Monday instead of a Sunday!  It was a busy week again for WordPress 2.5, even though the list below looks short, the changes were:</p>
<ul>
<li>Abstraction of the colours from the layout within the css files to allow for multiple admin themes (<a href=\"http://trac.wordpress.org/changeset/7178\">[7178]</a>).</li>
<li>Improvements to <code>add_menu_page()</code> so as to create the correct links for top level menus in more cases (<a href=\"http://trac.wordpress.org/ticket/4907\">#4907</a>).</li>
<li>Lots of work on the plugin update installer (<a href=\"http://trac.wordpress.org/ticket/5586\">#5586</a>).</li>
<li>Update to TinyMCE 3.03 (<a href=\"http://trac.wordpress.org/ticket/6084\">#6084</a>).</li>
<li>More updates to the new media library (<a href=\"http://trac.wordpress.org/ticket/5911\">#5911</a>).</li>
<li>Lots of updates to the new admin style.</li>
</ul>
<p>For even more information on some of the other little changes that went in this week you can read the whole <a href=\"http://trac.wordpress.org/timeline?from=03%2F09%2F08&amp;daysback=5&amp;changeset=on\">weekly trac timeline</a>, look at a complete <a href=\"http://westi.files.wordpress.com/2008/03/wordpress-changelog-04-03-2008-to-09-03-2008.txt\">changelog</a> for trunk or view a <a href=\"http://westi.files.wordpress.com/2008/03/wordpress-diffstat-04-03-2008-to-09-03-2008.txt\">diffstat of the changes</a>.</p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/westi.wordpress.com/41/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/westi.wordpress.com/41/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/westi.wordpress.com/41/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/westi.wordpress.com/41/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/westi.wordpress.com/41/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/westi.wordpress.com/41/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/westi.wordpress.com/41/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/westi.wordpress.com/41/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/westi.wordpress.com/41/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/westi.wordpress.com/41/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/westi.wordpress.com/41/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/westi.wordpress.com/41/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=westi.wordpress.com&blog=15396&post=41&subd=westi&ref=&feed=1\" /></div>\";}i:23;a:7:{s:5:\"title\";s:28:\"Akismet: Codeigniter Library\";s:4:\"guid\";s:34:\"http://akismet.wordpress.com/?p=94\";s:4:\"link\";s:55:\"http://blog.akismet.com/2008/03/16/codeigniter-library/\";s:11:\"description\";s:1589:\"<div class=\"snap_preview\"><br /><p><a href=\"http://www.haughin.com/code/akismet/\">There is a new Code Igniter library for working with Akismet</a> built by Elliot Haughin.</p>
<p>Code Igniter is a new PHP framework by our friends at Ellis Labs, the makers of pMachine and Expression Engine.</p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/akismet.wordpress.com/94/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/akismet.wordpress.com/94/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/akismet.wordpress.com/94/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/akismet.wordpress.com/94/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/akismet.wordpress.com/94/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/akismet.wordpress.com/94/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/akismet.wordpress.com/94/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/akismet.wordpress.com/94/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/akismet.wordpress.com/94/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/akismet.wordpress.com/94/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/akismet.wordpress.com/94/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/akismet.wordpress.com/94/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=blog.akismet.com&blog=116920&post=94&subd=akismet&ref=&feed=1\" /></div>\";s:7:\"pubdate\";s:31:\"Sun, 16 Mar 2008 17:50:33 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:7:\"summary\";s:1589:\"<div class=\"snap_preview\"><br /><p><a href=\"http://www.haughin.com/code/akismet/\">There is a new Code Igniter library for working with Akismet</a> built by Elliot Haughin.</p>
<p>Code Igniter is a new PHP framework by our friends at Ellis Labs, the makers of pMachine and Expression Engine.</p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/akismet.wordpress.com/94/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/akismet.wordpress.com/94/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/akismet.wordpress.com/94/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/akismet.wordpress.com/94/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/akismet.wordpress.com/94/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/akismet.wordpress.com/94/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/akismet.wordpress.com/94/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/akismet.wordpress.com/94/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/akismet.wordpress.com/94/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/akismet.wordpress.com/94/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/akismet.wordpress.com/94/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/akismet.wordpress.com/94/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=blog.akismet.com&blog=116920&post=94&subd=akismet&ref=&feed=1\" /></div>\";}i:24;a:7:{s:5:\"title\";s:57:\"Weblog Tools Collection: Colorful Future For WP 2.5 Admin\";s:4:\"guid\";s:85:\"http://weblogtoolscollection.com/archives/2008/03/16/colorful-future-for-wp-25-admin/\";s:4:\"link\";s:85:\"http://weblogtoolscollection.com/archives/2008/03/16/colorful-future-for-wp-25-admin/\";s:11:\"description\";s:3031:\"<p>This past week of WordPress 2.5 developments saw the addition of changeable color schemes to the 2.5 admin interface.</p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/colorschemes.png\" alt=\"ColorSchemes\" /></p>
<p><a href=\"http://wpdevel.wordpress.com/2008/03/11/the-admin-now-sports-two-color-schemes-w/#comments\" title=\"http://wpdevel.wordpress.com/2008/03/11/the-admin-now-sports-two-color-schemes-w/#comments\" target=\"_blank\">Ryan started us off</a> by announcing that WordPress 2.5 will feature two different color schemes. One color scheme will be called Classic while the other will be Fresh. Fresh will feature the newly redesigned color scheme while Classic will contain darker shades of blue and gray. Now, the only decision is whether to have <a href=\"http://wpdevel.wordpress.com/2008/03/12/matt-t-spruced-up-the-color-scheme-picke/#comments\" title=\"http://wpdevel.wordpress.com/2008/03/12/matt-t-spruced-up-the-color-scheme-picke/#comments\" target=\"_blank\">Classic or Fresh be the default color scheme</a>. So far, it looks like Fresh is winning the race.</p>
<p>If that were not enough, I asked Ryan if this would allow end users to upload style sheets that are created by members of the community into the back end which could then be selected to change the color scheme. Ryan simply answered with <strong>&#8220;New color schemes can be added as plugins&#8221;</strong>. For those that need a visual aid, <a href=\"http://planetozh.com/blog/2008/03/per-user-custom-stylesheet-in-wordpress-25/\" title=\"http://planetozh.com/blog/2008/03/per-user-custom-stylesheet-in-wordpress-25/\" target=\"_blank\">Ozh has published a post</a> which explains how to add a custom stylesheet via a plugin.</p>
<p>And as an added bonus, I think I&#8217;ll throw in the fact that the first full fledged WordPress 2.5 administration theme has been released called <a href=\"http://www.deanjrobinson.com/projects/fluency-admin/\" title=\"http://www.deanjrobinson.com/projects/fluency-admin/\" target=\"_blank\">Fluency</a>.  Fluency features a smooth gray color scheme with the main menus displayed in a vertical column on the left hand side of the site and sub menus appearing horizontally across the top.</p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/fluencyscreenshot.png\" alt=\"FluencyScreenshot\" /></p>
<p>This theme does have a few rendering issues. For instance, if you are using FireFox and you have too many entries in the second tier navigation menu, the menu will overlap with the header of the subpage. Also keep in mind that not all plugins will look normal within this theme as was the case with WP-PostRatings. Some plugin Option pages will look incorrect but Dean acknowledges that additional plugin option page support will be added as necessary.</p>
<p>You can change the look and feel of the WordPress 2.5 back end yourself or you can use one of the community produced themes and style sheets to make it look just the way you like. 2.5 is starting to come together and I can hardly wait!</p>\";s:7:\"pubdate\";s:31:\"Sun, 16 Mar 2008 07:12:00 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Jeffro2pt0\";}s:7:\"summary\";s:3031:\"<p>This past week of WordPress 2.5 developments saw the addition of changeable color schemes to the 2.5 admin interface.</p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/colorschemes.png\" alt=\"ColorSchemes\" /></p>
<p><a href=\"http://wpdevel.wordpress.com/2008/03/11/the-admin-now-sports-two-color-schemes-w/#comments\" title=\"http://wpdevel.wordpress.com/2008/03/11/the-admin-now-sports-two-color-schemes-w/#comments\" target=\"_blank\">Ryan started us off</a> by announcing that WordPress 2.5 will feature two different color schemes. One color scheme will be called Classic while the other will be Fresh. Fresh will feature the newly redesigned color scheme while Classic will contain darker shades of blue and gray. Now, the only decision is whether to have <a href=\"http://wpdevel.wordpress.com/2008/03/12/matt-t-spruced-up-the-color-scheme-picke/#comments\" title=\"http://wpdevel.wordpress.com/2008/03/12/matt-t-spruced-up-the-color-scheme-picke/#comments\" target=\"_blank\">Classic or Fresh be the default color scheme</a>. So far, it looks like Fresh is winning the race.</p>
<p>If that were not enough, I asked Ryan if this would allow end users to upload style sheets that are created by members of the community into the back end which could then be selected to change the color scheme. Ryan simply answered with <strong>&#8220;New color schemes can be added as plugins&#8221;</strong>. For those that need a visual aid, <a href=\"http://planetozh.com/blog/2008/03/per-user-custom-stylesheet-in-wordpress-25/\" title=\"http://planetozh.com/blog/2008/03/per-user-custom-stylesheet-in-wordpress-25/\" target=\"_blank\">Ozh has published a post</a> which explains how to add a custom stylesheet via a plugin.</p>
<p>And as an added bonus, I think I&#8217;ll throw in the fact that the first full fledged WordPress 2.5 administration theme has been released called <a href=\"http://www.deanjrobinson.com/projects/fluency-admin/\" title=\"http://www.deanjrobinson.com/projects/fluency-admin/\" target=\"_blank\">Fluency</a>.  Fluency features a smooth gray color scheme with the main menus displayed in a vertical column on the left hand side of the site and sub menus appearing horizontally across the top.</p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/fluencyscreenshot.png\" alt=\"FluencyScreenshot\" /></p>
<p>This theme does have a few rendering issues. For instance, if you are using FireFox and you have too many entries in the second tier navigation menu, the menu will overlap with the header of the subpage. Also keep in mind that not all plugins will look normal within this theme as was the case with WP-PostRatings. Some plugin Option pages will look incorrect but Dean acknowledges that additional plugin option page support will be added as necessary.</p>
<p>You can change the look and feel of the WordPress 2.5 back end yourself or you can use one of the community produced themes and style sheets to make it look just the way you like. 2.5 is starting to come together and I can hardly wait!</p>\";}i:25;a:7:{s:5:\"title\";s:30:\"Matt: Christian Lander on SWPL\";s:4:\"guid\";s:20:\"http://ma.tt/?p=3570\";s:4:\"link\";s:46:\"http://ma.tt/2008/03/christian-lander-on-swpl/\";s:11:\"description\";s:389:\"<p><a href=\"http://www.heebmagazine.com/blog/view/588\">Stuff White People Like&#8217;s Christian Lander: The Heeb Interview</a>, a short interview with the fellow behind <a href=\"http://stuffwhitepeoplelike.wordpress.com/\">the now-famous SWPL</a> (hosted on WordPress.com, naturally), which has already spawned <a href=\"http://stuffeducatedblackpeoplelike.wordpress.com/\">copycats</a>.</p>\";s:7:\"pubdate\";s:31:\"Sat, 15 Mar 2008 22:50:10 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:7:\"summary\";s:389:\"<p><a href=\"http://www.heebmagazine.com/blog/view/588\">Stuff White People Like&#8217;s Christian Lander: The Heeb Interview</a>, a short interview with the fellow behind <a href=\"http://stuffwhitepeoplelike.wordpress.com/\">the now-famous SWPL</a> (hosted on WordPress.com, naturally), which has already spawned <a href=\"http://stuffeducatedblackpeoplelike.wordpress.com/\">copycats</a>.</p>\";}i:26;a:7:{s:5:\"title\";s:18:\"Matt: New Gravatar\";s:4:\"guid\";s:20:\"http://ma.tt/?p=3561\";s:4:\"link\";s:34:\"http://ma.tt/2008/03/new-gravatar/\";s:11:\"description\";s:251:\"<p><a href=\"http://blog.gravatar.com/2008/03/14/big-changes-afoot/\">The rewrite of Gravatar from Ruby to PHP</a> is done. The backend should be identical, the serving of Gravatars should be even faster, and as a bonus we now support SSL Gravatars.</p>\";s:7:\"pubdate\";s:31:\"Fri, 14 Mar 2008 23:36:53 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:7:\"summary\";s:251:\"<p><a href=\"http://blog.gravatar.com/2008/03/14/big-changes-afoot/\">The rewrite of Gravatar from Ruby to PHP</a> is done. The backend should be identical, the serving of Gravatars should be even faster, and as a bonus we now support SSL Gravatars.</p>\";}i:27;a:7:{s:5:\"title\";s:27:\"Gravatar: Big changes afoot\";s:4:\"guid\";s:35:\"http://gravatar.wordpress.com/?p=47\";s:4:\"link\";s:54:\"http://blog.gravatar.com/2008/03/14/big-changes-afoot/\";s:11:\"description\";s:4743:\"<div class=\"snap_preview\"><br /><p>Howdy everyone!  It&#8217;s been an exciting few months for us since we&#8217;ve taken on the role of helping Gravatar grow.  We&#8217;ve been doing a lot of work to get those gears turning, and set things up for some serious forward motion.</p>
<p>The first thing we did, after stabilizing the service, was set out to rewrite Gravatar in PHP.  Now before we launch into any holy wars I&#8217;d like to point out that our decision on this matter had nothing to do with Ruby, or Rails &#8212; in fact we have a great respect for both!  The reason, the only reason, we switched is that PHP is our core competency at Automattic.  As a PHP application we will be able to apply the sum total of our collective abilities to bear on any problems that Gravatar might face.  The guys I work with are genuinely some of the most technically gifted people I know!</p>
<p>Of the things that you might notice there are a couple which will be most prominent.  First off the speed of the user interface has increased dramatically especially when it comes to applying your uploaded imaged to your email addresses, a process which used to take minutes.  We&#8217;ve fixed the biggest issue with the cropper (it would throw an error if you tried to use an image that was already 80&#215;80 pixels or smaller.)</p>
<p>Now for some things that you probably have not noticed.</p>
<p>We have increased the size limit for avatars to 512 pixels (thats a big avatar!)  With existing gravatars the image will be pixelated at 512, but new gravatars created from from higher resolution images will be very clear. For backwards compatibility the default size for serving images with no specific requested size will be the 80 pixel version.</p>
<div align=\"center\"><img src=\"http://www.gravatar.com/avatar/ee4d1b570eff6ce63c7d97043980a98c?s=256\" height=\"256\" width=\"256\" /></div>
<p>You can now abbreviate the avatar.php options as follows: size=80 can be <b>s=80</b>, rating=PG can be <b>r=PG</b>, default=foo can now be <b>d=foo</b>.  The rating is also case insensitive (r=PG is the same as r=pg). Oh and gravatar_id=foo can be <b>g=foo</b>, not that you&#8217;ll need it because we&#8217;ve implemented a new cleaner URL API.  Our new API is actually really simple, and not a huge departure from the original URL structure.</p>
<p><a href=\"http://www.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60\">http://www.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60</a></p>
<p>All of the aforementioned get parameters still work, such as ?s=80&amp;r=g&amp;default=http%3A%2F%2Fwww.mysite.com%2Fimage.jpg  Also, for convenience and compatibility with certain software (for example some forum software won&#8217;t allow you to use a url as an avatar if it doesn&#8217;t have an image extension), you can append .jpg to the end of the MD5 of the email</p>
<p><a href=\"http://www.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60.jpg?s=128&amp;r=g\">http://www.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60.jpg?s=128&amp;r=g</a></p>
<p>We&#8217;ve also added support for gravatar images over SSL (please use the hostname secure.gravatar.com for this)!</p>
<p><a href=\"https://secure.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60\">https://secure.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60</a></p>
<p>We have lots more stuff planned to make Gravatar.com a great service for everyone, so stay tuned!</p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/gravatar.wordpress.com/47/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/gravatar.wordpress.com/47/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/gravatar.wordpress.com/47/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/gravatar.wordpress.com/47/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/gravatar.wordpress.com/47/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/gravatar.wordpress.com/47/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/gravatar.wordpress.com/47/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/gravatar.wordpress.com/47/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/gravatar.wordpress.com/47/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/gravatar.wordpress.com/47/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/gravatar.wordpress.com/47/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/gravatar.wordpress.com/47/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=blog.gravatar.com&blog=1886259&post=47&subd=gravatar&ref=&feed=1\" /></div>\";s:7:\"pubdate\";s:31:\"Fri, 14 Mar 2008 20:11:47 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:11:\"apokalyptik\";}s:7:\"summary\";s:4743:\"<div class=\"snap_preview\"><br /><p>Howdy everyone!  It&#8217;s been an exciting few months for us since we&#8217;ve taken on the role of helping Gravatar grow.  We&#8217;ve been doing a lot of work to get those gears turning, and set things up for some serious forward motion.</p>
<p>The first thing we did, after stabilizing the service, was set out to rewrite Gravatar in PHP.  Now before we launch into any holy wars I&#8217;d like to point out that our decision on this matter had nothing to do with Ruby, or Rails &#8212; in fact we have a great respect for both!  The reason, the only reason, we switched is that PHP is our core competency at Automattic.  As a PHP application we will be able to apply the sum total of our collective abilities to bear on any problems that Gravatar might face.  The guys I work with are genuinely some of the most technically gifted people I know!</p>
<p>Of the things that you might notice there are a couple which will be most prominent.  First off the speed of the user interface has increased dramatically especially when it comes to applying your uploaded imaged to your email addresses, a process which used to take minutes.  We&#8217;ve fixed the biggest issue with the cropper (it would throw an error if you tried to use an image that was already 80&#215;80 pixels or smaller.)</p>
<p>Now for some things that you probably have not noticed.</p>
<p>We have increased the size limit for avatars to 512 pixels (thats a big avatar!)  With existing gravatars the image will be pixelated at 512, but new gravatars created from from higher resolution images will be very clear. For backwards compatibility the default size for serving images with no specific requested size will be the 80 pixel version.</p>
<div align=\"center\"><img src=\"http://www.gravatar.com/avatar/ee4d1b570eff6ce63c7d97043980a98c?s=256\" height=\"256\" width=\"256\" /></div>
<p>You can now abbreviate the avatar.php options as follows: size=80 can be <b>s=80</b>, rating=PG can be <b>r=PG</b>, default=foo can now be <b>d=foo</b>.  The rating is also case insensitive (r=PG is the same as r=pg). Oh and gravatar_id=foo can be <b>g=foo</b>, not that you&#8217;ll need it because we&#8217;ve implemented a new cleaner URL API.  Our new API is actually really simple, and not a huge departure from the original URL structure.</p>
<p><a href=\"http://www.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60\">http://www.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60</a></p>
<p>All of the aforementioned get parameters still work, such as ?s=80&amp;r=g&amp;default=http%3A%2F%2Fwww.mysite.com%2Fimage.jpg  Also, for convenience and compatibility with certain software (for example some forum software won&#8217;t allow you to use a url as an avatar if it doesn&#8217;t have an image extension), you can append .jpg to the end of the MD5 of the email</p>
<p><a href=\"http://www.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60.jpg?s=128&amp;r=g\">http://www.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60.jpg?s=128&amp;r=g</a></p>
<p>We&#8217;ve also added support for gravatar images over SSL (please use the hostname secure.gravatar.com for this)!</p>
<p><a href=\"https://secure.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60\">https://secure.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60</a></p>
<p>We have lots more stuff planned to make Gravatar.com a great service for everyone, so stay tuned!</p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/gravatar.wordpress.com/47/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/gravatar.wordpress.com/47/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/gravatar.wordpress.com/47/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/gravatar.wordpress.com/47/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/gravatar.wordpress.com/47/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/gravatar.wordpress.com/47/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/gravatar.wordpress.com/47/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/gravatar.wordpress.com/47/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/gravatar.wordpress.com/47/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/gravatar.wordpress.com/47/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/gravatar.wordpress.com/47/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/gravatar.wordpress.com/47/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=blog.gravatar.com&blog=1886259&post=47&subd=gravatar&ref=&feed=1\" /></div>\";}i:28;a:7:{s:5:\"title\";s:71:\"Peter Westwood: WordPress weekly digest 25th February to 3rd March 2008\";s:4:\"guid\";s:32:\"http://westi.wordpress.com/?p=38\";s:4:\"link\";s:94:\"http://westi.wordpress.com/2008/03/14/wordpress-weekly-digest-25th-february-to-3rd-march-2008/\";s:11:\"description\";s:4314:\"<div class=\"snap_preview\"><br /><p>Firstly, <a href=\"http://westi.wordpress.com/2008/03/12/delays/\">apologies again for this digest post being a bit late</a> - the final push for 2.5 has been in full swing and I took a week out to go on holiday. It was a busy week again for WordPress 2.5, the changes were:</p>
<ul>
<li>Changes to <code>do_feed()</code> to ensure that an error page is generated when a non-existent feed format is requested (<a href=\"http://trac.wordpress.org/ticket/5446\">#5446</a>).</li>
<li>Introduction of a new <code>image_resize()</code> function (<a href=\"http://trac.wordpress.org/ticket/6005\">#6005</a>).</li>
<li>Introduction of <code>get_temp_dir()</code> to allow for the different locations temporary files may be stored (<a href=\"http://trac.wordpress.org/ticket/5984\">#5984</a>).</li>
<li>An update to the <code>in_category()</code> function to support category names that are all numbers and add documentation (<a href=\"http://trac.wordpress.org/changeset/7064\">[7064]</a>).</li>
<li>Change to generating random passwords for users created during import (<a href=\"http://trac.wordpress.org/ticket/5837\">#5837</a>).</li>
<li>A fix to the WXR importer to ensure that tags are imported correctly by name rather than as numbers (<a href=\"http://trac.wordpress.org/ticket/5330\">#5330</a>).</li>
<li>A fix to ensure that the <code>current_page_item</code> class is set correctly when listing pages (<a href=\"http://trac.wordpress.org/ticket/2959\">#2959</a>).</li>
<li> Introduction of <code>get_post_ancestors()</code> and the addition of the <code>current_page_ancestor</code> class to ancestors of the current page when listing pages (<a href=\"http://trac.wordpress.org/ticket/5662\">#5662</a>).</li>
<li>Fixes to the plugin update code to use string comparison to detect version differences (<a href=\"http://trac.wordpress.org/ticket/5978\">#5978</a>).</li>
<li>Introduction of post editing collision detection (<a href=\"http://trac.wordpress.org/ticket/6043\">#6043</a>).</li>
<li>Changes to switch <code>preg_replace()</code> calls with the e modifier to <code>preg_replace_callback()</code> to improve security (<a href=\"http://trac.wordpress.org/changeset/7056\">[7056]</a>, <a href=\"http://trac.wordpress.org/ticket/5644\">#5644</a>).</li>
<li>Update to TinyMCE 3.02 (<a href=\"http://trac.wordpress.org/ticket/6012\">#6012</a>).</li>
<li>More updates to the new media library (<a href=\"http://trac.wordpress.org/ticket/5911\">#5911</a>).</li>
<li>Lots of updates to the new admin style.</li>
</ul>
<p>For even more information on some of the other little changes that went in this week you can read the whole <a href=\"http://trac.wordpress.org/timeline?from=03%2F03%2F08&amp;daysback=6&amp;changeset=on\">weekly trac timeline</a>, look at a complete <a href=\"http://westi.files.wordpress.com/2008/03/wordpress-changelog-25-03-2008-to-03-03-2008.txt\">changelog</a> for trunk or view a <a href=\"http://westi.files.wordpress.com/2008/03/wordpress-diffstat-25-03-2008-to-03-03-2008.txt\">diffstat of the changes</a>.</p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/westi.wordpress.com/38/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/westi.wordpress.com/38/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/westi.wordpress.com/38/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/westi.wordpress.com/38/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/westi.wordpress.com/38/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/westi.wordpress.com/38/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/westi.wordpress.com/38/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/westi.wordpress.com/38/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/westi.wordpress.com/38/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/westi.wordpress.com/38/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/westi.wordpress.com/38/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/westi.wordpress.com/38/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=westi.wordpress.com&blog=15396&post=38&subd=westi&ref=&feed=1\" /></div>\";s:7:\"pubdate\";s:31:\"Fri, 14 Mar 2008 18:35:19 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:14:\"Peter Westwood\";}s:7:\"summary\";s:4314:\"<div class=\"snap_preview\"><br /><p>Firstly, <a href=\"http://westi.wordpress.com/2008/03/12/delays/\">apologies again for this digest post being a bit late</a> - the final push for 2.5 has been in full swing and I took a week out to go on holiday. It was a busy week again for WordPress 2.5, the changes were:</p>
<ul>
<li>Changes to <code>do_feed()</code> to ensure that an error page is generated when a non-existent feed format is requested (<a href=\"http://trac.wordpress.org/ticket/5446\">#5446</a>).</li>
<li>Introduction of a new <code>image_resize()</code> function (<a href=\"http://trac.wordpress.org/ticket/6005\">#6005</a>).</li>
<li>Introduction of <code>get_temp_dir()</code> to allow for the different locations temporary files may be stored (<a href=\"http://trac.wordpress.org/ticket/5984\">#5984</a>).</li>
<li>An update to the <code>in_category()</code> function to support category names that are all numbers and add documentation (<a href=\"http://trac.wordpress.org/changeset/7064\">[7064]</a>).</li>
<li>Change to generating random passwords for users created during import (<a href=\"http://trac.wordpress.org/ticket/5837\">#5837</a>).</li>
<li>A fix to the WXR importer to ensure that tags are imported correctly by name rather than as numbers (<a href=\"http://trac.wordpress.org/ticket/5330\">#5330</a>).</li>
<li>A fix to ensure that the <code>current_page_item</code> class is set correctly when listing pages (<a href=\"http://trac.wordpress.org/ticket/2959\">#2959</a>).</li>
<li> Introduction of <code>get_post_ancestors()</code> and the addition of the <code>current_page_ancestor</code> class to ancestors of the current page when listing pages (<a href=\"http://trac.wordpress.org/ticket/5662\">#5662</a>).</li>
<li>Fixes to the plugin update code to use string comparison to detect version differences (<a href=\"http://trac.wordpress.org/ticket/5978\">#5978</a>).</li>
<li>Introduction of post editing collision detection (<a href=\"http://trac.wordpress.org/ticket/6043\">#6043</a>).</li>
<li>Changes to switch <code>preg_replace()</code> calls with the e modifier to <code>preg_replace_callback()</code> to improve security (<a href=\"http://trac.wordpress.org/changeset/7056\">[7056]</a>, <a href=\"http://trac.wordpress.org/ticket/5644\">#5644</a>).</li>
<li>Update to TinyMCE 3.02 (<a href=\"http://trac.wordpress.org/ticket/6012\">#6012</a>).</li>
<li>More updates to the new media library (<a href=\"http://trac.wordpress.org/ticket/5911\">#5911</a>).</li>
<li>Lots of updates to the new admin style.</li>
</ul>
<p>For even more information on some of the other little changes that went in this week you can read the whole <a href=\"http://trac.wordpress.org/timeline?from=03%2F03%2F08&amp;daysback=6&amp;changeset=on\">weekly trac timeline</a>, look at a complete <a href=\"http://westi.files.wordpress.com/2008/03/wordpress-changelog-25-03-2008-to-03-03-2008.txt\">changelog</a> for trunk or view a <a href=\"http://westi.files.wordpress.com/2008/03/wordpress-diffstat-25-03-2008-to-03-03-2008.txt\">diffstat of the changes</a>.</p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/westi.wordpress.com/38/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/westi.wordpress.com/38/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/westi.wordpress.com/38/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/westi.wordpress.com/38/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/westi.wordpress.com/38/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/westi.wordpress.com/38/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/westi.wordpress.com/38/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/westi.wordpress.com/38/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/westi.wordpress.com/38/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/westi.wordpress.com/38/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/westi.wordpress.com/38/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/westi.wordpress.com/38/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=westi.wordpress.com&blog=15396&post=38&subd=westi&ref=&feed=1\" /></div>\";}i:29;a:7:{s:5:\"title\";s:59:\"Weblog Tools Collection: WordPress Plugin Releases for 3/11\";s:4:\"guid\";s:87:\"http://weblogtoolscollection.com/archives/2008/03/13/wordpress-plugin-releases-for-311/\";s:4:\"link\";s:87:\"http://weblogtoolscollection.com/archives/2008/03/13/wordpress-plugin-releases-for-311/\";s:11:\"description\";s:1880:\"<p><strong>Section Specific Text</strong></p>
<p>The widget allows to display text in certain sections of your blog. The plugin also allows you to insert both html as well as php code provided by other plugins.</p>
<p><a href=\"http://www.heritage-tech.net/774/section-specific-text-widget-released/\">Release Page</a> | <a href=\"http://www.heritage-tech.net/files/sstext.zip\">Download</a></p>
<p><strong>FirstTimer</strong></p>
<p>Shows a custom message and image to visitors who are visiting for the first time. This plugin uses cookies to identify unique users so the message may be served everytime a user clears cookies.</p>
<p><a href=\"http://pimteam.net/firsttimer-wordpress-plugin/\">Release Page</a> | <a href=\"http://pimteam.net/plugins/firstimer.zip\">Download</a></p>
<p><strong>PageFlip</strong></p>
<p>PageFlip is a plugin which allows you to create a virtual book you can browse with your mouse, can be used for creating photo albums and references.</p>
<p><a href=\"http://pageflip.informatiquedefrance.com/\">Release Page</a> | <a href=\"http://pageflip.informatiquedefrance.com/wp-content/plugins/wp-download/wp-download.php?dl_id=2\">Download</a></p>
<p><strong>TipJoy TipThis</strong></p>
<p>Allows you to add a TipThis button to each of your posts using your TipJoy account where users can add tips about the stuff you love.</p>
<p><a href=\"http://knightknetwork.com/2008/02/15/tipjoy-tipthis-wordpress-plugin/\">Release Page</a> | <a href=\"http://knightknetwork.com/TipThis/TipThis.zip\">Download</a></p>
<p><strong>Collapsible Elements</strong></p>
<p>Allows you to add collapsible elements to your posts using the code editor, once added these elements can be collapsed or expanded by clicking on it.</p>
<p><a href=\"http://deuced.net/collapsible-elements/\">Release Page</a> | <a href=\"http://downloads.wordpress.org/plugin/collapsible-elements.zip\">Download</a></p>\";s:7:\"pubdate\";s:31:\"Fri, 14 Mar 2008 04:30:06 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:12:\"Keith Dsouza\";}s:7:\"summary\";s:1880:\"<p><strong>Section Specific Text</strong></p>
<p>The widget allows to display text in certain sections of your blog. The plugin also allows you to insert both html as well as php code provided by other plugins.</p>
<p><a href=\"http://www.heritage-tech.net/774/section-specific-text-widget-released/\">Release Page</a> | <a href=\"http://www.heritage-tech.net/files/sstext.zip\">Download</a></p>
<p><strong>FirstTimer</strong></p>
<p>Shows a custom message and image to visitors who are visiting for the first time. This plugin uses cookies to identify unique users so the message may be served everytime a user clears cookies.</p>
<p><a href=\"http://pimteam.net/firsttimer-wordpress-plugin/\">Release Page</a> | <a href=\"http://pimteam.net/plugins/firstimer.zip\">Download</a></p>
<p><strong>PageFlip</strong></p>
<p>PageFlip is a plugin which allows you to create a virtual book you can browse with your mouse, can be used for creating photo albums and references.</p>
<p><a href=\"http://pageflip.informatiquedefrance.com/\">Release Page</a> | <a href=\"http://pageflip.informatiquedefrance.com/wp-content/plugins/wp-download/wp-download.php?dl_id=2\">Download</a></p>
<p><strong>TipJoy TipThis</strong></p>
<p>Allows you to add a TipThis button to each of your posts using your TipJoy account where users can add tips about the stuff you love.</p>
<p><a href=\"http://knightknetwork.com/2008/02/15/tipjoy-tipthis-wordpress-plugin/\">Release Page</a> | <a href=\"http://knightknetwork.com/TipThis/TipThis.zip\">Download</a></p>
<p><strong>Collapsible Elements</strong></p>
<p>Allows you to add collapsible elements to your posts using the code editor, once added these elements can be collapsed or expanded by clicking on it.</p>
<p><a href=\"http://deuced.net/collapsible-elements/\">Release Page</a> | <a href=\"http://downloads.wordpress.org/plugin/collapsible-elements.zip\">Download</a></p>\";}i:30;a:7:{s:5:\"title\";s:53:\"Weblog Tools Collection: Top 10 WordPress CMS Plugins\";s:4:\"guid\";s:82:\"http://weblogtoolscollection.com/archives/2008/03/13/top-10-wordpress-cms-plugins/\";s:4:\"link\";s:82:\"http://weblogtoolscollection.com/archives/2008/03/13/top-10-wordpress-cms-plugins/\";s:11:\"description\";s:1218:\"<p><a href=\"http://www.blueprintds.com/2008/03/13/top-10-wordpress-cms-plugins/\">Top 10 WordPress CMS Plugins</a>: I am a sucker for top 10 lists about WordPress, especially if they contain useful information. This list of top ten plugins put together from the experiences of a professional design firm, will help you create a full CMS out of a WordPress blog. I have used a few of these myself on various projects and their flexibility and speciality together with WordPress&#8217; versatility and extensibility make a phenomenal combination. From the post: <em>For moderately sized sites (including simple e-Commerce sites), WordPress does a pretty good job as a <abbr title=\"Content Management System\">CMS</abbr>, making it easy to maintain your site, and update your content. Of course, it does this best with the help of a good theme, and some great plugins. The strength of WordPress is the community of developers who have already done almost anything you can think of with it. Here are the best plugins we’ve run across, the ones we install for nearly all of our client’s sites.</em> Thanks <a href=\"http://archgfx.net/\">Adam</a>, via <a href=\"http://weblogtoolscollection.com/news/\">WordPress News</a></p>\";s:7:\"pubdate\";s:31:\"Fri, 14 Mar 2008 01:15:05 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Mark Ghosh\";}s:7:\"summary\";s:1218:\"<p><a href=\"http://www.blueprintds.com/2008/03/13/top-10-wordpress-cms-plugins/\">Top 10 WordPress CMS Plugins</a>: I am a sucker for top 10 lists about WordPress, especially if they contain useful information. This list of top ten plugins put together from the experiences of a professional design firm, will help you create a full CMS out of a WordPress blog. I have used a few of these myself on various projects and their flexibility and speciality together with WordPress&#8217; versatility and extensibility make a phenomenal combination. From the post: <em>For moderately sized sites (including simple e-Commerce sites), WordPress does a pretty good job as a <abbr title=\"Content Management System\">CMS</abbr>, making it easy to maintain your site, and update your content. Of course, it does this best with the help of a good theme, and some great plugins. The strength of WordPress is the community of developers who have already done almost anything you can think of with it. Here are the best plugins we’ve run across, the ones we install for nearly all of our client’s sites.</em> Thanks <a href=\"http://archgfx.net/\">Adam</a>, via <a href=\"http://weblogtoolscollection.com/news/\">WordPress News</a></p>\";}i:31;a:7:{s:5:\"title\";s:39:\"Dougal Campbell: Roadwork Next 15 Miles\";s:4:\"guid\";s:32:\"http://dougal.gunters.org/?p=895\";s:4:\"link\";s:64:\"http://dougal.gunters.org/blog/2008/03/13/roadwork-next-15-miles\";s:11:\"description\";s:1580:\"<p>
I am preparing to move all of my web and email hosting to a new server. I\'ve been fortunate to have an in-trade hosting arrangement for many years now (thanks to Jeff at <a href=\"http://iguanasoft.com/\">Iguanasoft</a>!). But my host\'s owner is winding down some of his equipment, and I had outgrown the server I was on. I\'ve secured a new server at <a href=\"http://slicehost.com/\">Slicehost</a> (a 1024slice running Ubuntu), and I\'ll be transitioning my data over the next couple of weeks, as time allows.
</p>
<p>
I mainly mention this as warning that if my site appears to be down, email bounces, or any other strangeness occurs, it might be because I\'m in the middle of moving things around. It will probably be another couple of days before I start shaking things up. While I\'m moving thing around, I might try consolidating some of my stand-alone <a href=\"http://wordpress.org/\">WordPress</a> sites into a <a href=\"http://mu.wordpress.org/\">WordPress-MU</a> setup. That would make upgrades and other site management tasks a bit easier, I think.
</p>
<p>
With a little luck, and a lot of attention to detail, you might never know that I\'ve changed anything. Yeah, right! <img src=\"http://dougal.gunters.org/wp-includes/images/smilies/icon_wink.gif\" alt=\";)\" class=\"wp-smiley\" /> Watch this space for further announcements.
</p>

<p><a href=\"http://sharethis.com/item?&wp=2.5-RC1.1&amp;publisher=06a70a77-1fc0-46a9-81d1-6a696e6ed23f&amp;title=Roadwork+Next+15+Miles&amp;url=http%3A%2F%2Fdougal.gunters.org%2Fblog%2F2008%2F03%2F13%2Froadwork-next-15-miles\">ShareThis</a></p>\";s:7:\"pubdate\";s:31:\"Thu, 13 Mar 2008 23:20:22 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:6:\"Dougal\";}s:7:\"summary\";s:1580:\"<p>
I am preparing to move all of my web and email hosting to a new server. I\'ve been fortunate to have an in-trade hosting arrangement for many years now (thanks to Jeff at <a href=\"http://iguanasoft.com/\">Iguanasoft</a>!). But my host\'s owner is winding down some of his equipment, and I had outgrown the server I was on. I\'ve secured a new server at <a href=\"http://slicehost.com/\">Slicehost</a> (a 1024slice running Ubuntu), and I\'ll be transitioning my data over the next couple of weeks, as time allows.
</p>
<p>
I mainly mention this as warning that if my site appears to be down, email bounces, or any other strangeness occurs, it might be because I\'m in the middle of moving things around. It will probably be another couple of days before I start shaking things up. While I\'m moving thing around, I might try consolidating some of my stand-alone <a href=\"http://wordpress.org/\">WordPress</a> sites into a <a href=\"http://mu.wordpress.org/\">WordPress-MU</a> setup. That would make upgrades and other site management tasks a bit easier, I think.
</p>
<p>
With a little luck, and a lot of attention to detail, you might never know that I\'ve changed anything. Yeah, right! <img src=\"http://dougal.gunters.org/wp-includes/images/smilies/icon_wink.gif\" alt=\";)\" class=\"wp-smiley\" /> Watch this space for further announcements.
</p>

<p><a href=\"http://sharethis.com/item?&wp=2.5-RC1.1&amp;publisher=06a70a77-1fc0-46a9-81d1-6a696e6ed23f&amp;title=Roadwork+Next+15+Miles&amp;url=http%3A%2F%2Fdougal.gunters.org%2Fblog%2F2008%2F03%2F13%2Froadwork-next-15-miles\">ShareThis</a></p>\";}i:32;a:7:{s:5:\"title\";s:27:\"Donncha: WP Super Cache 0.6\";s:4:\"guid\";s:47:\"http://ocaoimh.ie/2008/03/13/wp-super-cache-06/\";s:4:\"link\";s:47:\"http://ocaoimh.ie/2008/03/13/wp-super-cache-06/\";s:11:\"description\";s:3157:\"<p>It&#8217;s been a while since the last release of <a href=\"http://ocaoimh.ie/wp-super-cache/\">WP Super Cache</a>, so it&#8217;s about time to release the updated code on the world!</p>
<p>This plugin allows a WordPress blog to be served directly from static HTML files just like another popular blogging engine.</p>
<p>When this plugin was originally released some users noticed strange folders being created in the root folder of their blogs. I was never able to replicate it and despite my efforts to track down the bug it remained unfixed. Well, I fixed that bug thanks to <a href=\"http://www.village-idiot.org/\">whooami</a> and to <a href=\"http://thehathorlegacy.info/\">Jennifer</a> who allowed me to login to her server and debug my script. <a href=\"http://barry.wordpress.com/\">Barry</a> was astute enough to figure out why it happened.</p>
<p>Other changes include:
<ul>
<li> Compressed cache files are deleted properly now, props <a href=\"http://onemansblog.com/\">John Pozadzides</a>.</li>
<li> Documentation got a serious update. I added a FAQ, and the Troubleshooting section has been expanded.</li>
<li> The .htaccess is not updated until the user clicks a button in the backend now.</li>
<li> The listing of cached files is gone for this release as it was inaccurate. It didn&#8217;t include super cached files.</li>
<li> The backend admin page has been rearranged slightly. Advanced features go at the very end, and if you&#8217;re only using the WP Cache functionality, the Super Cache items disappear. The mod_rewrite check and .htaccess items are only enabled if Super Cache is enabled now.</li>
<li>Not all blogs have permalinks ending in a slash so I added a slash back into the mod_rewrite rules. If you use .html at the end of your permalinks you&#8217;ll appreciate this. props <a href=\"http://www.michaelaulia.com/blogs/\">Michael R Aulia</a> for that.</li>
</ul>
<p>One more thing to note. If your blog is visible at a URL with or without the www you should decide which one is more important to you and download the <a href=\"http://txfx.net/code/wordpress/enforce-www-preference/\">Enforce www preference</a> plugin. Super cached files are stored in a directory named after the hostname so if you go to the www URL and someone else goes to the url without the www they won&#8217;t see the static html file. Deciding on one URL avoids any issues with duplicate content too which is probably much more important too.</p>
<p>Grab WP Super Cache 0.6 from the <a href=\"http://wordpress.org/extend/plugins/wp-super-cache/download/\">download page</a>!</p>
<p><img src=\"http://ocaoimh.ie/?voyeur=1\" /></p><p><strong>Related Posts</strong><ul><li><a href=\"http://ocaoimh.ie/2007/11/26/digg-users-will-love-this/\" rel=\"bookmark\" title=\"Permanent Link: Digg users will love this\">Digg users will love this</a></li><li><a href=\"http://ocaoimh.ie/2007/11/05/wordpress-super-cache-01/\" rel=\"bookmark\" title=\"Permanent Link: WordPress Super Cache 0.1\">WordPress Super Cache 0.1</a></li><li><a href=\"http://ocaoimh.ie/2008/01/07/phoar-what-a-spike/\" rel=\"bookmark\" title=\"Permanent Link: Phoar! What a spike!\">Phoar! What a spike!</a></li></ul></p>\";s:7:\"pubdate\";s:31:\"Thu, 13 Mar 2008 22:48:47 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:7:\"Donncha\";}s:7:\"summary\";s:3157:\"<p>It&#8217;s been a while since the last release of <a href=\"http://ocaoimh.ie/wp-super-cache/\">WP Super Cache</a>, so it&#8217;s about time to release the updated code on the world!</p>
<p>This plugin allows a WordPress blog to be served directly from static HTML files just like another popular blogging engine.</p>
<p>When this plugin was originally released some users noticed strange folders being created in the root folder of their blogs. I was never able to replicate it and despite my efforts to track down the bug it remained unfixed. Well, I fixed that bug thanks to <a href=\"http://www.village-idiot.org/\">whooami</a> and to <a href=\"http://thehathorlegacy.info/\">Jennifer</a> who allowed me to login to her server and debug my script. <a href=\"http://barry.wordpress.com/\">Barry</a> was astute enough to figure out why it happened.</p>
<p>Other changes include:
<ul>
<li> Compressed cache files are deleted properly now, props <a href=\"http://onemansblog.com/\">John Pozadzides</a>.</li>
<li> Documentation got a serious update. I added a FAQ, and the Troubleshooting section has been expanded.</li>
<li> The .htaccess is not updated until the user clicks a button in the backend now.</li>
<li> The listing of cached files is gone for this release as it was inaccurate. It didn&#8217;t include super cached files.</li>
<li> The backend admin page has been rearranged slightly. Advanced features go at the very end, and if you&#8217;re only using the WP Cache functionality, the Super Cache items disappear. The mod_rewrite check and .htaccess items are only enabled if Super Cache is enabled now.</li>
<li>Not all blogs have permalinks ending in a slash so I added a slash back into the mod_rewrite rules. If you use .html at the end of your permalinks you&#8217;ll appreciate this. props <a href=\"http://www.michaelaulia.com/blogs/\">Michael R Aulia</a> for that.</li>
</ul>
<p>One more thing to note. If your blog is visible at a URL with or without the www you should decide which one is more important to you and download the <a href=\"http://txfx.net/code/wordpress/enforce-www-preference/\">Enforce www preference</a> plugin. Super cached files are stored in a directory named after the hostname so if you go to the www URL and someone else goes to the url without the www they won&#8217;t see the static html file. Deciding on one URL avoids any issues with duplicate content too which is probably much more important too.</p>
<p>Grab WP Super Cache 0.6 from the <a href=\"http://wordpress.org/extend/plugins/wp-super-cache/download/\">download page</a>!</p>
<p><img src=\"http://ocaoimh.ie/?voyeur=1\" /></p><p><strong>Related Posts</strong><ul><li><a href=\"http://ocaoimh.ie/2007/11/26/digg-users-will-love-this/\" rel=\"bookmark\" title=\"Permanent Link: Digg users will love this\">Digg users will love this</a></li><li><a href=\"http://ocaoimh.ie/2007/11/05/wordpress-super-cache-01/\" rel=\"bookmark\" title=\"Permanent Link: WordPress Super Cache 0.1\">WordPress Super Cache 0.1</a></li><li><a href=\"http://ocaoimh.ie/2008/01/07/phoar-what-a-spike/\" rel=\"bookmark\" title=\"Permanent Link: Phoar! What a spike!\">Phoar! What a spike!</a></li></ul></p>\";}i:33;a:7:{s:5:\"title\";s:43:\"Weblog Tools Collection: WordPress GSoC2008\";s:4:\"guid\";s:72:\"http://weblogtoolscollection.com/archives/2008/03/12/wordpress-gsoc2008/\";s:4:\"link\";s:72:\"http://weblogtoolscollection.com/archives/2008/03/12/wordpress-gsoc2008/\";s:11:\"description\";s:2844:\"<p>The guys and gals at Automattic have published their <a href=\"http://codex.wordpress.org/GSoC2008\" title=\"http://codex.wordpress.org/GSoC2008\" target=\"_blank\">Google Summer Of Code 2008 Codex Article</a> which highlights various mentors and ideas. For those of you who don&#8217;t know what the Google Summer Of Code Project is all about, here is a brief intro.</p>
<blockquote><p><em>Google Summer of Code</em> (GSoC) is a program that offers student  developers stipends to write code for various open source  projects. Google will be working with a several open source, free  software, and technology-related groups to identify and fund  several projects over a three month period. Historically, the  program has brought together over 1,500 students with over 130  open source projects to create millions of lines of code. The  program, which kicked off in <a href=\"http://code.google.com/soc/2005/\" target=\"_blank\">2005</a>, is  now in its fourth year. If are feeling nostalgic or are  interested in learning more about the projects we have worked  with in the past, check out the <a href=\"http://code.google.com/soc/2006/\" target=\"_blank\">2006</a> and  <a href=\"http://code.google.com/soc/2007/\" target=\"_blank\">2007</a> program pages.</p></blockquote>
<p>There are some big names on the mentor list such as Matt Mullenweg, Lloyd Budd, Joseph Scott and newly acquired Andy Peatling with Matt taking on the double duty of being the Mentor&#8217;s Mentor. Mentors act as administrators over a particular idea or project that is undertaken by a student.</p>
<p>Some of the ideas that have been proposed for this years GSOC include:</p>
<ul>
<li>Performance</li>
<li>XML-RPC</li>
<li>Web Forums Export/Import Standard and Tools</li>
<li>WordPress Import/Export Tuning</li>
<li>Trac Social Bug Tracking development</li>
<li>Integrated Caching Solutions</li>
<li> XHTML validation framework, which helps ensure that all output of WP (including templates) produces valid HTML</li>
<li> Extending the search system to support more advanced search syntax, relevance, and external APIs like Google or Yahoo&#8217;s.</li>
<li> Batch editing of post and attachment attributes such as categories, tags, author.</li>
</ul>
<p>As you can see, there is good range of projects for the aspiring coder to participate in. If you are looking to hone your skills and are looking for a challenge, this is a good way for you to test your knowledge.</p>
<p>If you would like to see what was worked on in the previous GSoC, check out the <a href=\"http://groups.google.com/group/wordpress-soc-2007/web\" title=\"http://groups.google.com/group/wordpress-soc-2007/web\" target=\"_blank\">WordPress SOC 2007 Google Group</a> or the <a href=\"http://codex.wordpress.org/GSoC2007\" title=\"http://codex.wordpress.org/GSoC2007\" target=\"_blank\">article within the Codex</a>.</p>\";s:7:\"pubdate\";s:31:\"Thu, 13 Mar 2008 03:01:30 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Jeffro2pt0\";}s:7:\"summary\";s:2844:\"<p>The guys and gals at Automattic have published their <a href=\"http://codex.wordpress.org/GSoC2008\" title=\"http://codex.wordpress.org/GSoC2008\" target=\"_blank\">Google Summer Of Code 2008 Codex Article</a> which highlights various mentors and ideas. For those of you who don&#8217;t know what the Google Summer Of Code Project is all about, here is a brief intro.</p>
<blockquote><p><em>Google Summer of Code</em> (GSoC) is a program that offers student  developers stipends to write code for various open source  projects. Google will be working with a several open source, free  software, and technology-related groups to identify and fund  several projects over a three month period. Historically, the  program has brought together over 1,500 students with over 130  open source projects to create millions of lines of code. The  program, which kicked off in <a href=\"http://code.google.com/soc/2005/\" target=\"_blank\">2005</a>, is  now in its fourth year. If are feeling nostalgic or are  interested in learning more about the projects we have worked  with in the past, check out the <a href=\"http://code.google.com/soc/2006/\" target=\"_blank\">2006</a> and  <a href=\"http://code.google.com/soc/2007/\" target=\"_blank\">2007</a> program pages.</p></blockquote>
<p>There are some big names on the mentor list such as Matt Mullenweg, Lloyd Budd, Joseph Scott and newly acquired Andy Peatling with Matt taking on the double duty of being the Mentor&#8217;s Mentor. Mentors act as administrators over a particular idea or project that is undertaken by a student.</p>
<p>Some of the ideas that have been proposed for this years GSOC include:</p>
<ul>
<li>Performance</li>
<li>XML-RPC</li>
<li>Web Forums Export/Import Standard and Tools</li>
<li>WordPress Import/Export Tuning</li>
<li>Trac Social Bug Tracking development</li>
<li>Integrated Caching Solutions</li>
<li> XHTML validation framework, which helps ensure that all output of WP (including templates) produces valid HTML</li>
<li> Extending the search system to support more advanced search syntax, relevance, and external APIs like Google or Yahoo&#8217;s.</li>
<li> Batch editing of post and attachment attributes such as categories, tags, author.</li>
</ul>
<p>As you can see, there is good range of projects for the aspiring coder to participate in. If you are looking to hone your skills and are looking for a challenge, this is a good way for you to test your knowledge.</p>
<p>If you would like to see what was worked on in the previous GSoC, check out the <a href=\"http://groups.google.com/group/wordpress-soc-2007/web\" title=\"http://groups.google.com/group/wordpress-soc-2007/web\" target=\"_blank\">WordPress SOC 2007 Google Group</a> or the <a href=\"http://codex.wordpress.org/GSoC2007\" title=\"http://codex.wordpress.org/GSoC2007\" target=\"_blank\">article within the Codex</a>.</p>\";}i:34;a:7:{s:5:\"title\";s:22:\"Peter Westwood: delays\";s:4:\"guid\";s:32:\"http://westi.wordpress.com/?p=37\";s:4:\"link\";s:45:\"http://westi.wordpress.com/2008/03/12/delays/\";s:11:\"description\";s:1824:\"<div class=\"snap_preview\"><br /><p>Just a quick post to let you know that I&#8217;ve not disappeared or anything and the digest posts for the last couple of weeks will be ready soon.</p>
<p>We have been very busy trying to get WordPress 2.5 ready and as you may have heard we have had to slip the release by a week and we are currently aiming for a release next week.  Hopefully we will be happy enough with the stability of the new features soon and a beta or release candidate version will be announce on the development blog.</p>
<p>Over and out.</p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/westi.wordpress.com/37/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/westi.wordpress.com/37/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/westi.wordpress.com/37/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/westi.wordpress.com/37/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/westi.wordpress.com/37/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/westi.wordpress.com/37/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/westi.wordpress.com/37/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/westi.wordpress.com/37/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/westi.wordpress.com/37/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/westi.wordpress.com/37/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/westi.wordpress.com/37/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/westi.wordpress.com/37/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=westi.wordpress.com&blog=15396&post=37&subd=westi&ref=&feed=1\" /></div>\";s:7:\"pubdate\";s:31:\"Wed, 12 Mar 2008 22:38:40 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:14:\"Peter Westwood\";}s:7:\"summary\";s:1824:\"<div class=\"snap_preview\"><br /><p>Just a quick post to let you know that I&#8217;ve not disappeared or anything and the digest posts for the last couple of weeks will be ready soon.</p>
<p>We have been very busy trying to get WordPress 2.5 ready and as you may have heard we have had to slip the release by a week and we are currently aiming for a release next week.  Hopefully we will be happy enough with the stability of the new features soon and a beta or release candidate version will be announce on the development blog.</p>
<p>Over and out.</p>
<img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/categories/westi.wordpress.com/37/\" /> <img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/tags/westi.wordpress.com/37/\" /> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gocomments/westi.wordpress.com/37/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/comments/westi.wordpress.com/37/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godelicious/westi.wordpress.com/37/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/delicious/westi.wordpress.com/37/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/gostumble/westi.wordpress.com/37/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/stumble/westi.wordpress.com/37/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/godigg/westi.wordpress.com/37/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/digg/westi.wordpress.com/37/\" /></a> <a rel=\"nofollow\" href=\"http://feeds.wordpress.com/1.0/goreddit/westi.wordpress.com/37/\"><img alt=\"\" border=\"0\" src=\"http://feeds.wordpress.com/1.0/reddit/westi.wordpress.com/37/\" /></a> <img alt=\"\" border=\"0\" src=\"http://stats.wordpress.com/b.gif?host=westi.wordpress.com&blog=15396&post=37&subd=westi&ref=&feed=1\" /></div>\";}i:35;a:7:{s:5:\"title\";s:30:\"Matt: WordPress is Open Source\";s:4:\"guid\";s:20:\"http://ma.tt/?p=3529\";s:4:\"link\";s:46:\"http://ma.tt/2008/03/wordpress-is-open-source/\";s:11:\"description\";s:3660:\"<p>Six Apart has recently decided that the best way to win back customers fleeing their platforms is to target WordPress, which is a new strategy they call <a href=\"http://sippey.typepad.com/filtered/2008/03/were-here-to-co.html\">competing</a>. (What have they been doing the past 7 years?) A good example is this exchange between a commenter on Valleywag and Byrne Reese, the lead developer of Movable Type:</p>
<p>Sundown: &#8220;@anildash: what part of Wordpress is not open source?&#8221;</p>
<p>byrnereese: &#8220;@Sunnduwn - I think that is a question better asked of Automattic. Anil, and certainly not Six Apart, has never been briefed, nor has anyone for that matter been presented with an accounting of what is open and closed source at Automattic.&#8221;</p>
<p>Okay, here&#8217;s some accounting:</p>
<p>WordPress is 100% open source, GPL.</p>
<p>All plugins in the official directory are GPL or compatible, 100% open source.</p>
<p>bbPress is 100% GPL.</p>
<p>WordPress MU is 100% open source, GPL, and if you wanted you could take it and build your own hosted platform like WordPress.com, like <a href=\"http://edublogs.org/\">edublogs.org</a> has with over 100,000 blogs.</p>
<p>There is more GPL stuff on the way, as well. <img src=\"http://ma.tt/blog/wp-includes/images/smilies/icon_smile.gif\" alt=\":)\" class=\"wp-smiley\" /> </p>
<p>Could you build Typepad or Vox with Movable Type? Probably not, especially since people with more than a few blogs or posts say it <a href=\"http://birdhouse.org/blog/2008/02/07/notes-on-a-massive-wordpress-migration/\">grinds to a halt</a>, as Metblogs found before they switched to WordPress.</p>
<p>Automattic (and other people) can provide full support for GPL software, which is the single license everything we support is under. Movable Type has <a href=\"http://movabletype.com/download/faq.html\">8 different licenses</a> and the &#8220;open source&#8221; one doesn&#8217;t allow any support. The community around WordPress is amazing and most people find it more than adequate for their support needs.</p>
<p>Movable Type, which is Six Apart&#8217;s only Open Source product line now that they&#8217;ve dumped Livejournal, doesn&#8217;t even have a public bug tracker, even though they announced it going OS over <a href=\"http://www.techcrunch.com/2007/06/05/movable-type-40-beta-launches-platform-to-be-open-sourced/\">9 months ago</a>!</p>
<p>I had held off criticizing them after they went OS and before they decided to start an all-out confrontation because that&#8217;s not generally what OS projects do to each other.</p>
<p>For as long as I can remember <a href=\"http://wordpress.org/about/\">the WordPress about page</a> has linked and thanked Movable Type for ideas and inspiration.</p>
<p>Movable Type once led the market, it had over 90% marketshare in the self-hosted market. Now they call &#8220;pages&#8221; and &#8220;dynamic publishing&#8221;, features WordPress has had for 4+ years, innovation and you still can&#8217;t do basic things like click &#8220;next posts&#8221; at the bottom of home page.</p>
<p>For the record, I&#8217;m glad they&#8217;ve taken the license of MT in a positive direction that prevents them from betraying their customers like they did with MT3, but they have a long way to go before the project could be considered a community.</p>
<p>WordPress did 3 major releases last year, we&#8217;ll do 3 major releases this year. Along the way thousands of people will contribute, as well as every employee of Automattic. What we build will be greater than the sum of its parts because we&#8217;ve been a community and open source from the beginning, and always will be.</p>\";s:7:\"pubdate\";s:31:\"Wed, 12 Mar 2008 21:56:20 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:7:\"summary\";s:3660:\"<p>Six Apart has recently decided that the best way to win back customers fleeing their platforms is to target WordPress, which is a new strategy they call <a href=\"http://sippey.typepad.com/filtered/2008/03/were-here-to-co.html\">competing</a>. (What have they been doing the past 7 years?) A good example is this exchange between a commenter on Valleywag and Byrne Reese, the lead developer of Movable Type:</p>
<p>Sundown: &#8220;@anildash: what part of Wordpress is not open source?&#8221;</p>
<p>byrnereese: &#8220;@Sunnduwn - I think that is a question better asked of Automattic. Anil, and certainly not Six Apart, has never been briefed, nor has anyone for that matter been presented with an accounting of what is open and closed source at Automattic.&#8221;</p>
<p>Okay, here&#8217;s some accounting:</p>
<p>WordPress is 100% open source, GPL.</p>
<p>All plugins in the official directory are GPL or compatible, 100% open source.</p>
<p>bbPress is 100% GPL.</p>
<p>WordPress MU is 100% open source, GPL, and if you wanted you could take it and build your own hosted platform like WordPress.com, like <a href=\"http://edublogs.org/\">edublogs.org</a> has with over 100,000 blogs.</p>
<p>There is more GPL stuff on the way, as well. <img src=\"http://ma.tt/blog/wp-includes/images/smilies/icon_smile.gif\" alt=\":)\" class=\"wp-smiley\" /> </p>
<p>Could you build Typepad or Vox with Movable Type? Probably not, especially since people with more than a few blogs or posts say it <a href=\"http://birdhouse.org/blog/2008/02/07/notes-on-a-massive-wordpress-migration/\">grinds to a halt</a>, as Metblogs found before they switched to WordPress.</p>
<p>Automattic (and other people) can provide full support for GPL software, which is the single license everything we support is under. Movable Type has <a href=\"http://movabletype.com/download/faq.html\">8 different licenses</a> and the &#8220;open source&#8221; one doesn&#8217;t allow any support. The community around WordPress is amazing and most people find it more than adequate for their support needs.</p>
<p>Movable Type, which is Six Apart&#8217;s only Open Source product line now that they&#8217;ve dumped Livejournal, doesn&#8217;t even have a public bug tracker, even though they announced it going OS over <a href=\"http://www.techcrunch.com/2007/06/05/movable-type-40-beta-launches-platform-to-be-open-sourced/\">9 months ago</a>!</p>
<p>I had held off criticizing them after they went OS and before they decided to start an all-out confrontation because that&#8217;s not generally what OS projects do to each other.</p>
<p>For as long as I can remember <a href=\"http://wordpress.org/about/\">the WordPress about page</a> has linked and thanked Movable Type for ideas and inspiration.</p>
<p>Movable Type once led the market, it had over 90% marketshare in the self-hosted market. Now they call &#8220;pages&#8221; and &#8220;dynamic publishing&#8221;, features WordPress has had for 4+ years, innovation and you still can&#8217;t do basic things like click &#8220;next posts&#8221; at the bottom of home page.</p>
<p>For the record, I&#8217;m glad they&#8217;ve taken the license of MT in a positive direction that prevents them from betraying their customers like they did with MT3, but they have a long way to go before the project could be considered a community.</p>
<p>WordPress did 3 major releases last year, we&#8217;ll do 3 major releases this year. Along the way thousands of people will contribute, as well as every employee of Automattic. What we build will be greater than the sum of its parts because we&#8217;ve been a community and open source from the beginning, and always will be.</p>\";}i:36;a:7:{s:5:\"title\";s:72:\"WordPress Podcast: Episode 37: WordPress 2.5 quietly misses release date\";s:4:\"guid\";s:87:\"http://wp-community.org/2008/03/12/episode-37-wordpress-25-quietly-misses-release-date/\";s:4:\"link\";s:46:\"http://wp-community.org/2008/03/12/episode-37/\";s:11:\"description\";s:2737:\"<p>Oops! <a href=\"http://www.plagiarismtoday.com/about-plagiarism-today/about-the-author/\" class=\"extlink\">Jonathan</a> and I recorded this assuming WordPress would be released March 10th, and then the day comes and goes without even a release candidate. Our bad&#8230;</p>
<p>Otherwise, we discussed:</p>
<ol>
<li>Jonathan&#8217;s June speech at the <a href=\"http://www.plagiarismconference.co.uk/keynotes.php\" class=\"extlink\">3rd International Plagiarism Conference</a> at Northumbria University in Newcastle-upon-tyne, UK.</li>
<li>Charles&#8217; presentation of <em>WordPress for Podcasters</em> at the <a href=\"http://www.newmediaexpo.com/incoming.php?linkid=1885\" target=\"_blank\" class=\"extlink\">New Media Expo</a> in Las Vegas in August.</li>
<li>Continued preparation for <a href=\"http://dallas.wordcamp.org/\" class=\"extlink\">WordCamp Dallas</a>, March 29 and 30 in Frisco, Texas. Any attendees registering after this Friday aren&#8217;t guaranteed event t-shirts.</li>
<li>As previously mentioned, we discuss WordPress 2.5 which we&#8217;d expected to have been released to coincide with this episode.</li>
<li><a href=\"http://www.webware.com/html/ww/100/2008/vote_publish.html?compid=103450\" class=\"extlink\">Vote for WordPress</a> in the Publishing and Photography category in the 2008 Webware 100.</li>
<li>Lorelle is away speaking to the <a href=\"http://lorelle.wordpress.com/2008/02/27/blogging-romance-with-lorelle-in-san-francisco/\" class=\"extlink\">San Francisco chapter of the Romance Writers of America</a>, so no WordPress.com news this episode. <img src=\"http://wp-community.org/wp/wp-includes/images/smilies/icon_sad.gif\" alt=\":(\" class=\"wp-smiley\" /> </li>
<li><a href=\"http://amazingwordpressthemes.com/wordpress-spam-blocker/\" class=\"extlink\">WP Spam Blocker</a> seems useful, using AJAX and time hashes to prove your commenters are human without using CAPTCHAs, but the blatant linkage gives me pause.</li>
<li><a href=\"http://wordpress.jdwebdev.com/plugins/tweaks/\" class=\"extlink\">WordPress Tweaks</a> rolls lots of little, useful tweaks into one plugin.</li>
<li>This episodes feedback poll: &#8220;Should the podcast limit itself to purely WordPress-related news?&#8221;</li>
<li>Simon Jones asks, &#8220;Are bots are taking down <a href=\"http://www.beforeiforget.co.uk/\" class=\"extlink\">my blog</a>?&#8221;</li>
<li><a href=\"http://www.thesonsofthelawofone.com/\" class=\"extlink\">Glenn Pendleton</a> asks, &#8220;Is <a href=\"http://install4free.wordpress.net/\" class=\"extlink\">Install4Free</a> on the up and up?&#8221;</li>
<li>Jonathan responds to a <a href=\"http://photonictorpedoes.com/16-what-ive-gleaned-about-us-copyright-law.html\" class=\"extlink\">trackback related to U.S. copyright law</a>.</li>
</ol>\";s:7:\"pubdate\";s:31:\"Wed, 12 Mar 2008 16:43:59 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:17:\"Charles Stricklin\";}s:7:\"summary\";s:2737:\"<p>Oops! <a href=\"http://www.plagiarismtoday.com/about-plagiarism-today/about-the-author/\" class=\"extlink\">Jonathan</a> and I recorded this assuming WordPress would be released March 10th, and then the day comes and goes without even a release candidate. Our bad&#8230;</p>
<p>Otherwise, we discussed:</p>
<ol>
<li>Jonathan&#8217;s June speech at the <a href=\"http://www.plagiarismconference.co.uk/keynotes.php\" class=\"extlink\">3rd International Plagiarism Conference</a> at Northumbria University in Newcastle-upon-tyne, UK.</li>
<li>Charles&#8217; presentation of <em>WordPress for Podcasters</em> at the <a href=\"http://www.newmediaexpo.com/incoming.php?linkid=1885\" target=\"_blank\" class=\"extlink\">New Media Expo</a> in Las Vegas in August.</li>
<li>Continued preparation for <a href=\"http://dallas.wordcamp.org/\" class=\"extlink\">WordCamp Dallas</a>, March 29 and 30 in Frisco, Texas. Any attendees registering after this Friday aren&#8217;t guaranteed event t-shirts.</li>
<li>As previously mentioned, we discuss WordPress 2.5 which we&#8217;d expected to have been released to coincide with this episode.</li>
<li><a href=\"http://www.webware.com/html/ww/100/2008/vote_publish.html?compid=103450\" class=\"extlink\">Vote for WordPress</a> in the Publishing and Photography category in the 2008 Webware 100.</li>
<li>Lorelle is away speaking to the <a href=\"http://lorelle.wordpress.com/2008/02/27/blogging-romance-with-lorelle-in-san-francisco/\" class=\"extlink\">San Francisco chapter of the Romance Writers of America</a>, so no WordPress.com news this episode. <img src=\"http://wp-community.org/wp/wp-includes/images/smilies/icon_sad.gif\" alt=\":(\" class=\"wp-smiley\" /> </li>
<li><a href=\"http://amazingwordpressthemes.com/wordpress-spam-blocker/\" class=\"extlink\">WP Spam Blocker</a> seems useful, using AJAX and time hashes to prove your commenters are human without using CAPTCHAs, but the blatant linkage gives me pause.</li>
<li><a href=\"http://wordpress.jdwebdev.com/plugins/tweaks/\" class=\"extlink\">WordPress Tweaks</a> rolls lots of little, useful tweaks into one plugin.</li>
<li>This episodes feedback poll: &#8220;Should the podcast limit itself to purely WordPress-related news?&#8221;</li>
<li>Simon Jones asks, &#8220;Are bots are taking down <a href=\"http://www.beforeiforget.co.uk/\" class=\"extlink\">my blog</a>?&#8221;</li>
<li><a href=\"http://www.thesonsofthelawofone.com/\" class=\"extlink\">Glenn Pendleton</a> asks, &#8220;Is <a href=\"http://install4free.wordpress.net/\" class=\"extlink\">Install4Free</a> on the up and up?&#8221;</li>
<li>Jonathan responds to a <a href=\"http://photonictorpedoes.com/16-what-ive-gleaned-about-us-copyright-law.html\" class=\"extlink\">trackback related to U.S. copyright law</a>.</li>
</ol>\";}i:37;a:7:{s:5:\"title\";s:26:\"Matt: Interview with Pop17\";s:4:\"guid\";s:20:\"http://ma.tt/?p=3516\";s:4:\"link\";s:42:\"http://ma.tt/2008/03/interview-with-pop17/\";s:11:\"description\";s:196:\"<p><a href=\"http://pop17.com/videos/interview-with-matt-mullenweg\">While at SxSW I got a chance to chat with Sarah of Pop17</a>, a new <a href=\"http://www.rocketboom.com/\">Rocketboom</a> show.</p>\";s:7:\"pubdate\";s:31:\"Wed, 12 Mar 2008 05:12:53 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:7:\"summary\";s:196:\"<p><a href=\"http://pop17.com/videos/interview-with-matt-mullenweg\">While at SxSW I got a chance to chat with Sarah of Pop17</a>, a new <a href=\"http://www.rocketboom.com/\">Rocketboom</a> show.</p>\";}i:38;a:7:{s:5:\"title\";s:58:\"Weblog Tools Collection: WordPress Theme Releases for 3/11\";s:4:\"guid\";s:86:\"http://weblogtoolscollection.com/archives/2008/03/11/wordpress-theme-releases-for-311/\";s:4:\"link\";s:86:\"http://weblogtoolscollection.com/archives/2008/03/11/wordpress-theme-releases-for-311/\";s:11:\"description\";s:3095:\"<h3>One Column Themes</h3>
<p><strong>WP-Photogenic</strong></p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/photogenic-thumbnail.png\" alt=\"photogenic-thumbnail.png\" /></p>
<p>As the name suggests this theme is specifically made for photo blogs who update their content using pictures. The theme is single column and does not feature any sidebars.</p>
<p><a href=\"http://www.jayson.in/wp-photogenic-an-elegant-one-column-photo-blog-theme-for-wordpress.html\">Demo / Release Page</a> | <a href=\"http://www.jayson.in/downloads/wordpress/wp-photogenic.zip\">Download</a></p>
<h3>Two Column Themes</h3>
<p><strong>Monochrome Gallery</strong></p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/monochrome-thumbnail.png\" alt=\"monochrome-thumbnail.png\" /></p>
<p>A two column magazine based theme with a AJAX based post slideshow on the home page. The home page also displays category post with thumbnails. You can also find a extended sidebar in the footer. Only for WordPress 2.3 and above.</p>
<p><a href=\"http://graphpaperpress.com/demo/monochrome/index.php?wptheme=Monochrome+Gallery\">Demo</a> | <a href=\"http://graphpaperpress.com/2008/03/05/monochrome-gallery/\">Release Page</a> | <a href=\"http://graphpaperpress.com/download/monochrome_gallery.zip\">Download</a></p>
<p><strong>FreshMedia</strong></p>
<p> <img src=\"http://weblogtoolscollection.com/b2-img/2008/03/freshmedia-thumbnail.png\" alt=\"freshmedia-thumbnail.png\" /></p>
<p>FreshMedia uses some fresh and lively colors and provides with a widgetized sidebar and footer area, though the huge header steals some screen real estate in the first scroll.</p>
<p><a href=\"http://www.styleshout.com/templates/preview/FreshMedia1-0/index.html\">Demo</a> | <a href=\"http://www.clazh.com/freshmedia-free-two-column-wordpress-theme/\">Release Page</a> | <a href=\"http://www.clazh.com/wp-content/plugins/wp-downloadMonitor/download.php?id=5\">Download</a></p>
<p><strong>BoxTube</strong></p>
<p> <img src=\"http://weblogtoolscollection.com/b2-img/2008/03/boxtube-thumbnail.png\" alt=\"boxtube-thumbnail.png\" /></p>
<p>This is a two column theme with vibrant colors and some nice graphics. The theme also sports a extended sidebar in the footer area. Overall a nice looking theme with some handy options for advertising.</p>
<p><a href=\"http://www.dezzain.com/testrun/index.php?wptheme=Box+Tube\">Demo</a> | <a href=\"http://www.dezzain.com/featured/dezzain-free-wordpress-theme-box-tube/\">Release Page</a> | <a href=\"http://www.dezzain.com/download-manager.php?id=19\">Download</a></p>
<h3>Three Column Themes</h3>
<p><strong>Deep Fear</strong></p>
<p> <img src=\"http://weblogtoolscollection.com/b2-img/2008/03/deepfear-thumbnail.png\" alt=\"deepfear-thumbnail.png\" /></p>
<p>Deep Fear is a three column theme which makes use of dark colors. Again the huge header steals screen real estate in the first scroll.</p>
<p><a href=\"http://www.samirkamble.com/deep-fear-wordpress-theme/\">Demo / Release Page</a> | <a href=\"http://www.samirkamble.com/wp-content/plugins/wp-downloadMonitor/download.php?id=Deep-fear.zip\">Download</a></p>\";s:7:\"pubdate\";s:31:\"Wed, 12 Mar 2008 04:30:08 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:12:\"Keith Dsouza\";}s:7:\"summary\";s:3095:\"<h3>One Column Themes</h3>
<p><strong>WP-Photogenic</strong></p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/photogenic-thumbnail.png\" alt=\"photogenic-thumbnail.png\" /></p>
<p>As the name suggests this theme is specifically made for photo blogs who update their content using pictures. The theme is single column and does not feature any sidebars.</p>
<p><a href=\"http://www.jayson.in/wp-photogenic-an-elegant-one-column-photo-blog-theme-for-wordpress.html\">Demo / Release Page</a> | <a href=\"http://www.jayson.in/downloads/wordpress/wp-photogenic.zip\">Download</a></p>
<h3>Two Column Themes</h3>
<p><strong>Monochrome Gallery</strong></p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/monochrome-thumbnail.png\" alt=\"monochrome-thumbnail.png\" /></p>
<p>A two column magazine based theme with a AJAX based post slideshow on the home page. The home page also displays category post with thumbnails. You can also find a extended sidebar in the footer. Only for WordPress 2.3 and above.</p>
<p><a href=\"http://graphpaperpress.com/demo/monochrome/index.php?wptheme=Monochrome+Gallery\">Demo</a> | <a href=\"http://graphpaperpress.com/2008/03/05/monochrome-gallery/\">Release Page</a> | <a href=\"http://graphpaperpress.com/download/monochrome_gallery.zip\">Download</a></p>
<p><strong>FreshMedia</strong></p>
<p> <img src=\"http://weblogtoolscollection.com/b2-img/2008/03/freshmedia-thumbnail.png\" alt=\"freshmedia-thumbnail.png\" /></p>
<p>FreshMedia uses some fresh and lively colors and provides with a widgetized sidebar and footer area, though the huge header steals some screen real estate in the first scroll.</p>
<p><a href=\"http://www.styleshout.com/templates/preview/FreshMedia1-0/index.html\">Demo</a> | <a href=\"http://www.clazh.com/freshmedia-free-two-column-wordpress-theme/\">Release Page</a> | <a href=\"http://www.clazh.com/wp-content/plugins/wp-downloadMonitor/download.php?id=5\">Download</a></p>
<p><strong>BoxTube</strong></p>
<p> <img src=\"http://weblogtoolscollection.com/b2-img/2008/03/boxtube-thumbnail.png\" alt=\"boxtube-thumbnail.png\" /></p>
<p>This is a two column theme with vibrant colors and some nice graphics. The theme also sports a extended sidebar in the footer area. Overall a nice looking theme with some handy options for advertising.</p>
<p><a href=\"http://www.dezzain.com/testrun/index.php?wptheme=Box+Tube\">Demo</a> | <a href=\"http://www.dezzain.com/featured/dezzain-free-wordpress-theme-box-tube/\">Release Page</a> | <a href=\"http://www.dezzain.com/download-manager.php?id=19\">Download</a></p>
<h3>Three Column Themes</h3>
<p><strong>Deep Fear</strong></p>
<p> <img src=\"http://weblogtoolscollection.com/b2-img/2008/03/deepfear-thumbnail.png\" alt=\"deepfear-thumbnail.png\" /></p>
<p>Deep Fear is a three column theme which makes use of dark colors. Again the huge header steals screen real estate in the first scroll.</p>
<p><a href=\"http://www.samirkamble.com/deep-fear-wordpress-theme/\">Demo / Release Page</a> | <a href=\"http://www.samirkamble.com/wp-content/plugins/wp-downloadMonitor/download.php?id=Deep-fear.zip\">Download</a></p>\";}i:39;a:7:{s:5:\"title\";s:53:\"Weblog Tools Collection: WordPress 2.5 Delayed a Week\";s:4:\"guid\";s:81:\"http://weblogtoolscollection.com/archives/2008/03/10/wordpress-25-delayed-a-week/\";s:4:\"link\";s:81:\"http://weblogtoolscollection.com/archives/2008/03/10/wordpress-25-delayed-a-week/\";s:11:\"description\";s:3331:\"<p><a href=\"http://trac.wordpress.org/milestone/2.5\">WordPress 2.5 Delayed a Week</a>: According to this milestone in the WordPress Trac, 2.5 is delayed by a week or even more. There is a <a href=\"http://wpdevel.wordpress.com/\">lot of work being done on styling, bug fixes and open tickets</a> and even though the milestone is delayed to 3/17/08, a well polished release will be more appreciated and will be better for the community than a rush to release.</p>
<p>In the meantime, <a href=\"http://www.blogherald.com/2008/03/10/waiting-for-wordpress-25/\">Lorelle is tapping her feet waiting for the new release</a> and Six Apart is trying to make waves in the wake of WordPress 2.5. Ozh is <a href=\"http://planetozh.com/blog/2008/03/wordpress-25-delayed/\">happy to have the chance to fix some more plugins</a>, <a href=\"http://www.taddmencer.com/\">Tadd</a> <a href=\"http://weblogtoolscollection.com/archives/2008/03/09/prepare-for-wp-25/#comment-1217628\">provides some sage advice</a> to people complaining about the wait. I am very excited about this release and what it brings to the table and will be upgrading as soon as I can.</p>
<p>While we are on the subject, in reading through the comments left on <a href=\"http://weblogtoolscollection.com/archives/2008/03/09/prepare-for-wp-25/\">Jeff&#8217;s post yesterday</a>, we hope we did not cause any added confusion to the impending release. WordPress has gotten more complex since the <a href=\"http://weblogtoolscollection.com/archives/2004/05/22/wordpress-12-final-is-out/\">1.2 days</a> but that is expected of code reaching a higher level of maturity. However, along with the complexity, WordPress has also gained much anticipated features, has been keeping up and in many cases, leading publishing technology and has become a beacon of success in the blogging and Open Source communities. A lot of the technology that is in 2.5 never existed back when WordPress was forked out of <a href=\"http://cafelog.com\">b2</a> and much of the code and many of the advances have come about due to the hard work of the developers, contributors and supporters of WordPress. Hundreds of developers, contributors and well wishers help shape WordPress and the community is in a very large part responsible for the wonderful peice of software it is today.</p>
<p>The WordPress developers have a feel for their code and they will know when they are ready to put it into production/release. This model creates some confusion because of the nature of the development cycle, but the delaying of the release date and the tweaking and fixing till a comfort level is reached, is not a bad thing at all. On the contrary, if followed with due diligence and with care, this development model can help put together some really good code and it works well in the Open Source (or any shared development) environment. Strict deadlines are more detrimental than a constant update model which has been proven to be more productive and easier to manage.</p>
<p>I have observed and participated in WordPress development from close and afar for many years and though the development cycle might seem disconcerting, I can safely tell you that this effort will bear delicious fruit for sure.</p>
<p>Thanks for being a user and a supporter of WordPress. Here is to a successful WordPress 2.5 in the coming weeks!</p>\";s:7:\"pubdate\";s:31:\"Tue, 11 Mar 2008 16:45:06 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Mark Ghosh\";}s:7:\"summary\";s:3331:\"<p><a href=\"http://trac.wordpress.org/milestone/2.5\">WordPress 2.5 Delayed a Week</a>: According to this milestone in the WordPress Trac, 2.5 is delayed by a week or even more. There is a <a href=\"http://wpdevel.wordpress.com/\">lot of work being done on styling, bug fixes and open tickets</a> and even though the milestone is delayed to 3/17/08, a well polished release will be more appreciated and will be better for the community than a rush to release.</p>
<p>In the meantime, <a href=\"http://www.blogherald.com/2008/03/10/waiting-for-wordpress-25/\">Lorelle is tapping her feet waiting for the new release</a> and Six Apart is trying to make waves in the wake of WordPress 2.5. Ozh is <a href=\"http://planetozh.com/blog/2008/03/wordpress-25-delayed/\">happy to have the chance to fix some more plugins</a>, <a href=\"http://www.taddmencer.com/\">Tadd</a> <a href=\"http://weblogtoolscollection.com/archives/2008/03/09/prepare-for-wp-25/#comment-1217628\">provides some sage advice</a> to people complaining about the wait. I am very excited about this release and what it brings to the table and will be upgrading as soon as I can.</p>
<p>While we are on the subject, in reading through the comments left on <a href=\"http://weblogtoolscollection.com/archives/2008/03/09/prepare-for-wp-25/\">Jeff&#8217;s post yesterday</a>, we hope we did not cause any added confusion to the impending release. WordPress has gotten more complex since the <a href=\"http://weblogtoolscollection.com/archives/2004/05/22/wordpress-12-final-is-out/\">1.2 days</a> but that is expected of code reaching a higher level of maturity. However, along with the complexity, WordPress has also gained much anticipated features, has been keeping up and in many cases, leading publishing technology and has become a beacon of success in the blogging and Open Source communities. A lot of the technology that is in 2.5 never existed back when WordPress was forked out of <a href=\"http://cafelog.com\">b2</a> and much of the code and many of the advances have come about due to the hard work of the developers, contributors and supporters of WordPress. Hundreds of developers, contributors and well wishers help shape WordPress and the community is in a very large part responsible for the wonderful peice of software it is today.</p>
<p>The WordPress developers have a feel for their code and they will know when they are ready to put it into production/release. This model creates some confusion because of the nature of the development cycle, but the delaying of the release date and the tweaking and fixing till a comfort level is reached, is not a bad thing at all. On the contrary, if followed with due diligence and with care, this development model can help put together some really good code and it works well in the Open Source (or any shared development) environment. Strict deadlines are more detrimental than a constant update model which has been proven to be more productive and easier to manage.</p>
<p>I have observed and participated in WordPress development from close and afar for many years and though the development cycle might seem disconcerting, I can safely tell you that this effort will bear delicious fruit for sure.</p>
<p>Thanks for being a user and a supporter of WordPress. Here is to a successful WordPress 2.5 in the coming weeks!</p>\";}i:40;a:7:{s:5:\"title\";s:43:\"Weblog Tools Collection: Prepare For WP 2.5\";s:4:\"guid\";s:71:\"http://weblogtoolscollection.com/archives/2008/03/09/prepare-for-wp-25/\";s:4:\"link\";s:71:\"http://weblogtoolscollection.com/archives/2008/03/09/prepare-for-wp-25/\";s:11:\"description\";s:1156:\"<p><strike>With WordPress 2.5 due to be released today (Hooray!)</strike> now would be a good time to go through a series of upgrade checks to see if your blog is ready for 2.5. <a href=\"http://lorelle.wordpress.com/\">Lorelle Van Fossen</a> has written up an excellent article on the <a href=\"http://www.blogherald.com/2008/03/07/wordpress-upgrade-preparation-checklist/\" title=\"http://www.blogherald.com/2008/03/07/wordpress-upgrade-preparation-checklist/\" target=\"_blank\">BlogHerald</a> in regards to the pre upgrade checks you should perform. These include <strong>disabling and or removing old plugins, updating themes and plugins, validation, and checking for compatibilities. </strong>Going through this series of pre-flight checks as some would say, will help you prepare for a smooth upgrade process.</p>
<p>I know I&#8217;ll be one of the first to upgrade my blog when I have the chance. When will you upgrade yours?</p>
<p><strong>*Note* </strong>WordPress 2.5 was <strong>TENTATIVELY  </strong>scheduled to be release on March 10th, 2008. However, it looks like it&#8217;s not ready for production treatment and thus, has not been released.</p>\";s:7:\"pubdate\";s:31:\"Mon, 10 Mar 2008 14:30:13 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Jeffro2pt0\";}s:7:\"summary\";s:1156:\"<p><strike>With WordPress 2.5 due to be released today (Hooray!)</strike> now would be a good time to go through a series of upgrade checks to see if your blog is ready for 2.5. <a href=\"http://lorelle.wordpress.com/\">Lorelle Van Fossen</a> has written up an excellent article on the <a href=\"http://www.blogherald.com/2008/03/07/wordpress-upgrade-preparation-checklist/\" title=\"http://www.blogherald.com/2008/03/07/wordpress-upgrade-preparation-checklist/\" target=\"_blank\">BlogHerald</a> in regards to the pre upgrade checks you should perform. These include <strong>disabling and or removing old plugins, updating themes and plugins, validation, and checking for compatibilities. </strong>Going through this series of pre-flight checks as some would say, will help you prepare for a smooth upgrade process.</p>
<p>I know I&#8217;ll be one of the first to upgrade my blog when I have the chance. When will you upgrade yours?</p>
<p><strong>*Note* </strong>WordPress 2.5 was <strong>TENTATIVELY  </strong>scheduled to be release on March 10th, 2008. However, it looks like it&#8217;s not ready for production treatment and thus, has not been released.</p>\";}i:41;a:7:{s:5:\"title\";s:57:\"Weblog Tools Collection: WordPress Theme Release For 3/10\";s:4:\"guid\";s:85:\"http://weblogtoolscollection.com/archives/2008/03/09/wordpress-theme-release-for-310/\";s:4:\"link\";s:85:\"http://weblogtoolscollection.com/archives/2008/03/09/wordpress-theme-release-for-310/\";s:11:\"description\";s:2076:\"<h3>Two Column Themes</h3>
<p><strong>In The Blue</strong></p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/intheblue-thumbnail.png\" alt=\"intheblue-thumbnail.png\" /> </p>
<p>In the blue is a simplistic theme with a real life photograph in the header. The theme is simple and in the blue.</p>
<p><a href=\"http://demo.scribblescratch.com/index.php?wptheme=In+the+blue\">Demo</a> | <a href=\"http://scribblescratch.com/2008/03/04/wp-theme-in-the-blue/\">Release Page</a> | <a href=\"http://herbrokentoy.com/themes/intheblue.zip\">Download</a></p>
<p><strong>YG Mag</strong></p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/ygmag-thumbnail.png\" alt=\"ygmag-thumbnail.png\" /></p>
<p>A two column theme with a eye catching header and a suitable sidebar with tabbed content. Content area is good enough to post wide width images.</p>
<p><a href=\"http://www.ygosearch.com/demo/index.php?wptheme=YG+Mag\">Demo</a> | <a href=\"http://web.ygoy.com/2008/03/04/yg-mag-2-column-wordpress-theme/\">Release Page</a> | <a href=\"http://www.ygoy.com/downloads/yg-mag.zip\">Download</a></p>
<h3>Three Column Themes</h3>
<p><strong>Magadine</strong></p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/magadine-thumbnail.png\" alt=\"magadine-thumbnail.png\" /></p>
<p>This theme comes with a four column home page with its inner pages consisting of three columns. The theme home page is based on magazine style.</p>
<p><a href=\"http://www.ygoy.com/demo/index.php?wptheme=Magadine\">Demo</a> | <a href=\"http://web.ygoy.com/2008/03/04/magadine-magazine-wordpress-theme/\">Release Page</a> | <a href=\"http://www.ygoy.com/downloads/magadine.zip\">Download</a></p>
<p><strong>Hot Pink</strong></p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/hotpink.png\" alt=\"hotpink.png\" /> </p>
<p>Ever wondered how pink could be hot, well this theme uses variants of pink that makes it look hot pink.</p>
<p><a href=\"http://www.temi-wordpress.com/testrun/\">Demo</a>| <a href=\"http://www.temi-wordpress.com/wp-content/uploads/2008/03/hotpinktheme.zip\">Download</a></p>\";s:7:\"pubdate\";s:31:\"Sun, 09 Mar 2008 14:38:31 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:12:\"Keith Dsouza\";}s:7:\"summary\";s:2076:\"<h3>Two Column Themes</h3>
<p><strong>In The Blue</strong></p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/intheblue-thumbnail.png\" alt=\"intheblue-thumbnail.png\" /> </p>
<p>In the blue is a simplistic theme with a real life photograph in the header. The theme is simple and in the blue.</p>
<p><a href=\"http://demo.scribblescratch.com/index.php?wptheme=In+the+blue\">Demo</a> | <a href=\"http://scribblescratch.com/2008/03/04/wp-theme-in-the-blue/\">Release Page</a> | <a href=\"http://herbrokentoy.com/themes/intheblue.zip\">Download</a></p>
<p><strong>YG Mag</strong></p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/ygmag-thumbnail.png\" alt=\"ygmag-thumbnail.png\" /></p>
<p>A two column theme with a eye catching header and a suitable sidebar with tabbed content. Content area is good enough to post wide width images.</p>
<p><a href=\"http://www.ygosearch.com/demo/index.php?wptheme=YG+Mag\">Demo</a> | <a href=\"http://web.ygoy.com/2008/03/04/yg-mag-2-column-wordpress-theme/\">Release Page</a> | <a href=\"http://www.ygoy.com/downloads/yg-mag.zip\">Download</a></p>
<h3>Three Column Themes</h3>
<p><strong>Magadine</strong></p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/magadine-thumbnail.png\" alt=\"magadine-thumbnail.png\" /></p>
<p>This theme comes with a four column home page with its inner pages consisting of three columns. The theme home page is based on magazine style.</p>
<p><a href=\"http://www.ygoy.com/demo/index.php?wptheme=Magadine\">Demo</a> | <a href=\"http://web.ygoy.com/2008/03/04/magadine-magazine-wordpress-theme/\">Release Page</a> | <a href=\"http://www.ygoy.com/downloads/magadine.zip\">Download</a></p>
<p><strong>Hot Pink</strong></p>
<p><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/hotpink.png\" alt=\"hotpink.png\" /> </p>
<p>Ever wondered how pink could be hot, well this theme uses variants of pink that makes it look hot pink.</p>
<p><a href=\"http://www.temi-wordpress.com/testrun/\">Demo</a>| <a href=\"http://www.temi-wordpress.com/wp-content/uploads/2008/03/hotpinktheme.zip\">Download</a></p>\";}i:42;a:7:{s:5:\"title\";s:82:\"Weblog Tools Collection: Managing Trackbacks and Pingbacks in Your WordPress Theme\";s:4:\"guid\";s:111:\"http://weblogtoolscollection.com/archives/2008/03/08/managing-trackbacks-and-pingbacks-in-your-wordpress-theme/\";s:4:\"link\";s:111:\"http://weblogtoolscollection.com/archives/2008/03/08/managing-trackbacks-and-pingbacks-in-your-wordpress-theme/\";s:11:\"description\";s:11089:\"<p>With all of the recent discussion regarding trackbacks and pingbacks on Weblog Tools Collection, I thought I&#8217;d mention several ways one can deal with trackbacks and pingbacks in the context of a WordPress theme.</p>
<p>The topics I will be covering in this article are on separating trackbacks/pingbacks from regular comments, and also how to remove trackbacks and pingbacks from a WordPress theme completely.</p>
<h3>Separating Trackbacks/Pingbacks From Comments</h3>
<p>I know what you&#8217;re thinking: numerous posts have already been written on how to <a href=\"http://www.ryanjparker.net/separating-pingbacks-and-trackbacks-from-comments-in-wordpress/\">separate trackbacks from comments</a>.</p>
<p>But what I present here is an actual separation using the &#8220;<strong>functions.php</strong>&#8221; feature for WordPress themes along with the regular &#8220;<strong>comments.php</strong>&#8220;.  Both should be located in your theme directory.</p>
<p class=\"screenshot\"><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/theme-setup.jpg\" alt=\"theme_setup.jpg\" border=\"0\" height=\"377\" width=\"400\" /><br />
Figure 1: Theme Directory Setup</p>
<h4>Modifying the functions.php File</h4>
<p>The &#8220;<strong>functions.php</strong>&#8221; file is a lifesaver for any theme developer or tinkerer wishing to <a href=\"http://www.binarymoon.co.uk/2007/05/wordpress-tips-and-tricks-functionsphp/\">add custom code or functions to themes</a>.  The code in the &#8220;<strong>functions.php</strong>&#8221; file can be called from all theme files, and can act as makeshift WordPress plugins (without the need for activation).</p>
<p>What we&#8217;ll be doing here is adding four functions and two filters into the file.</p>
<p>You don&#8217;t really have to understand the functions, but here are some brief explanations:</p>
<p class=\"screenshot\"><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/functions-php.jpg\" alt=\"functions_php.jpg\" border=\"0\" height=\"276\" width=\"400\" /><br />
Figure 2:  functions.php Filter and Function Additions</p>
<ul>
<li><strong>filterPostComments: </strong> Updates the comments number for all posts so that trackbacks aren&#8217;t included in the count.</li>
<li><strong>filterComments:</strong> Separates the trackbacks from the comments as global variables.</li>
<li><strong>stripTrackback:</strong> Strips trackbacks from an array.</li>
<li><strong>stripComment:</strong> Strips comments from an array.</li>
</ul>
<p>The two filters we add in are explained below:</p>
<ul>
<li><strong>comments_array</strong>: Basically the comments before they are read in the comments loop.</li>
<li><strong>the_posts</strong>: An array of all found posts.</li>
</ul>
<p>Ok, enough with the explanations.  Here&#8217;s the code for the &#8220;<strong>functions.php</strong>&#8221; file:</p>
<blockquote>
<pre>add_filter(\'comments_array\', \'filterComments\', 0);
add_filter(\'the_posts\', \'filterPostComments\', 0);
//Updates the comment number for posts with trackbacks
function filterPostComments($posts) {
	foreach ($posts as $key =&gt; $p) {
		if ($p-&gt;comment_count &lt;= 0) { return $posts; }
		$comments = get_approved_comments((int)$p-&gt;ID);
		$comments = array_filter($comments, \"stripTrackback\");
		$posts[$key]-&gt;comment_count = sizeof($comments);
	}
	return $posts;
}
//Updates the count for comments and trackbacks
function filterComments($comms) {
global $comments, $trackbacks;
	$comments = array_filter($comms,\"stripTrackback\");
	$trackbacks = array_filter($comms, \"stripComment\");
	return $comments;
}
//Strips out trackbacks/pingbacks
function stripTrackback($var) {
	if ($var-&gt;comment_type == \'trackback\' || $var-&gt;comment_type == \'pingback\') { return false; }
	return true;
}
//Strips out comments
function stripComment($var) {
	if ($var-&gt;comment_type != \'trackback\' &amp;&amp; $var-&gt;comment_type != \'pingback\') { return false; }
	return true;
}</pre>
</blockquote>
<p>Do you need to know how it works?  Not really.  But in summary, it separates comments from trackbacks and updates the comment count for all posts.</p>
<h4>Modifying the comments.php file</h4>
<p>Unlike most separation tutorials, we will not be modifying the comments loop.</p>
<p>In essence, we are expanding on a previous tutorial that also uses the &#8220;<strong>functions.php</strong>&#8221; file for <a href=\"http://www.binarymoon.co.uk/2006/04/wordpress-tips-and-tricks/\">separation of trackbacks and comments.</a></p>
<p>What we&#8217;ll be doing is the following:</p>
<ul>
<li>Adding a &#8220;trackbacks&#8221; global variable right after the comments loop.</li>
<li>Initiating a trackbacks/pingbacks loop.</li>
</ul>
<p class=\"screenshot\"><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/comments-php1.jpg\" alt=\"comments_php.jpg\" border=\"0\" height=\"188\" width=\"400\" /><br />
Figure 3: comments.php Load Order</p>
<p>Right after the comments loop ends, you would add the following:</p>
<blockquote><p><code> </code></p>
<pre>&lt;?php global $trackbacks; ?&gt;
&lt;?php if ($trackbacks) : ?&gt;
&lt;?php $comments = $trackbacks; ?&gt;
&lt;h3 id=\"trackbacks\"&gt;&lt;?php echo sizeof($trackbacks); ?&gt; Trackbacks/Pingbacks&lt;/h3&gt;
	&lt;ol class=\"commentlist\"&gt;
	&lt;?php foreach ($comments as $comment) : ?&gt;
&lt;!-- Your trackback HTML --&gt;
&lt;?php endforeach; /* end for each comment */ ?&gt;
	&lt;/ol&gt;
&lt;?php endif; ?&gt;</pre>
</blockquote>
<p>The code looks just like the comments loop except for a few lines of code, and the best part is, no editing of the original comments loop was necessary.</p>
<h4>Download the Code</h4>
<p>Here is a <a href=\"http://weblogtoolscollection.com/b2-img/2008/03/separation-code.zip\" title=\"Separation Code\">downloadable copy of the code presented</a> in this post.  The files within this <strong>zip</strong> file are:</p>
<ul>
<li>Sample &#8220;functions.php&#8221; file.</li>
<li>Sample &#8220;comments.php&#8221; file.</li>
</ul>
<p>I realize this solution is not the simplest demonstration of comment/trackback separation, but it allows for two actual and separate loops, and also produces a valid comments number(comments with trackbacks/pingbacks subtracted out) for all posts.</p>
<h3>Removing Trackbacks/Pingbacks from WordPress Themes - Three Ways</h3>
<p>When I asked the readers here if <a href=\"http://weblogtoolscollection.com/archives/2008/02/02/trackbacks-still-useful/\">trackbacks were still useful</a>, several expressed that they would be willing to remove trackbacks/pingbacks from comments.</p>
<p>With WordPress, I have found three ways to remove trackbacks and pingbacks from a WordPress theme.</p>
<h4>Method 1:  Edit the comments.php File</h4>
<p>Located in almost every theme directory is a file called &#8220;<strong>comments.php</strong>&#8220;. Within this file is what&#8217;s known as the Comments Loop, which is what displays all of the comments for a post.</p>
<p>The start of Comments Loop looks like this:</p>
<blockquote><p><code> </code></p>
<pre>&lt;?php foreach ($comments as $comment) : ?&gt;</pre>
</blockquote>
<p>To remove trackbacks/pingbacks from your theme, simply insert this code in the line right after the start of the loop:</p>
<blockquote><p><code> </code></p>
<pre>&lt;?php if ($comment-&gt;comment_type == \"pingback\" || $comment-&gt;comment_type == \"trackback\") { continue; } ?&gt;</pre>
</blockquote>
<p>The above code skips over the trackbacks and pingbacks.  The disadvantage of this method is that WordPress will still display the number of comments with trackbacks and pingbacks in the count.</p>
<p class=\"screenshot\"><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/trackbacks-comments.jpeg\" alt=\"trackbacks_comments.jpeg\" height=\"37\" width=\"130\" /><br />
Figure 4: Comments count with trackbacks included in the count</p>
<h4>Method 2:  Edit the functions.php File</h4>
<p>Most themes should already come with a file named &#8220;<strong>functions.php</strong>&#8220;.  If not, you can easily create one using any text editor.</p>
<p>Any code or functions in your &#8220;<strong>functions.php</strong>&#8221; file is immediately accessible by all of your theme files.  The benefit of removing trackbacks/pingbacks using this technique is that you won&#8217;t have to modify any of the core template files and risk messing up your theme.</p>
<p>Within the <strong>functions.php</strong> file, insert this code:</p>
<blockquote><p><code> </code></p>
<pre>add_filter(\'comments_array\', \'filterTrackbacks\', 0);
add_filter(\'the_posts\', \'filterPostComments\', 0);
//Updates the comment number for posts with trackbacks
function filterPostComments($posts) {
	foreach ($posts as $key =&gt; $p) {
		if ($p-&gt;comment_count &lt;= 0) { return $posts; }
		$comments = get_approved_comments((int)$p-&gt;ID);
		$comments = array_filter($comments, \"stripTrackback\");
		$posts[$key]-&gt;comment_count = sizeof($comments);
	}
	return $posts;
}
//Updates the count for comments and trackbacks
function filterTrackbacks($comms) {
global $comments, $trackbacks;
	$comments = array_filter($comms,\"stripTrackback\");
	return $comments;
}
//Strips out trackbacks/pingbacks
function stripTrackback($var) {
	if ($var-&gt;comment_type == \'trackback\' || $var-&gt;comment_type == \'pingback\') { return false; }
	return true;
}</pre>
</blockquote>
<p>This code is very similar to the code I used for separating trackbacks from comments.</p>
<p>Although not nearly as simple as the &#8220;<strong>comments.php</strong>&#8221; method, this method is more flexible and provides WordPress with an actual number of comments <strong>without the trackbacks/pingbacks being counted</strong>.</p>
<p class=\"screenshot\"><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/comments-wo-trackbacks.jpeg\" alt=\"comments_wo_trackbacks.jpeg\" height=\"31\" width=\"135\" /><br />
Figure 5: Comments count without trackbacks included</p>
<h4>Method 3:  The Plugin Solution</h4>
<p>For those not wishing to modify themes, there is always the plugin solution.</p>
<p>A plugin I wrote called <a href=\"http://www.raproject.com/comment-sorter/\">Comment Sorter</a> has a feature that allows a blogger to remove trackbacks/pingbacks (not permanently) from within the WordPress Administration Panel.  There is absolutely no theme modification involved.</p>
<p class=\"screenshot\"><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/comment-sorter-admin.jpg\" alt=\"comment_sorter_admin.jpg\" height=\"237\" width=\"446\" /><br />
Figure 6: Comment Sorter Admin Interface</p>
<p>Using the above configuration for <a href=\"http://wordpress.org/extend/plugins/comment-sorter/\">Comment Sorter</a> (with the auto-include off and trackbacks disabled), one can easily remove trackbacks and pingbacks from a theme.  It&#8217;s basically Method 2 in the form of a plugin.</p>
<h3>Conclusion</h3>
<p>Within this post I presented techniques on separating trackbacks/pingbacks from regular comments, and also how to remove trackbacks and pingbacks from a WordPress theme.</p>
<p>If you have any questions, please leave a comment and I&#8217;ll do my best to address them.</p>\";s:7:\"pubdate\";s:31:\"Sat, 08 Mar 2008 06:22:09 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:14:\"Ronald Huereca\";}s:7:\"summary\";s:11089:\"<p>With all of the recent discussion regarding trackbacks and pingbacks on Weblog Tools Collection, I thought I&#8217;d mention several ways one can deal with trackbacks and pingbacks in the context of a WordPress theme.</p>
<p>The topics I will be covering in this article are on separating trackbacks/pingbacks from regular comments, and also how to remove trackbacks and pingbacks from a WordPress theme completely.</p>
<h3>Separating Trackbacks/Pingbacks From Comments</h3>
<p>I know what you&#8217;re thinking: numerous posts have already been written on how to <a href=\"http://www.ryanjparker.net/separating-pingbacks-and-trackbacks-from-comments-in-wordpress/\">separate trackbacks from comments</a>.</p>
<p>But what I present here is an actual separation using the &#8220;<strong>functions.php</strong>&#8221; feature for WordPress themes along with the regular &#8220;<strong>comments.php</strong>&#8220;.  Both should be located in your theme directory.</p>
<p class=\"screenshot\"><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/theme-setup.jpg\" alt=\"theme_setup.jpg\" border=\"0\" height=\"377\" width=\"400\" /><br />
Figure 1: Theme Directory Setup</p>
<h4>Modifying the functions.php File</h4>
<p>The &#8220;<strong>functions.php</strong>&#8221; file is a lifesaver for any theme developer or tinkerer wishing to <a href=\"http://www.binarymoon.co.uk/2007/05/wordpress-tips-and-tricks-functionsphp/\">add custom code or functions to themes</a>.  The code in the &#8220;<strong>functions.php</strong>&#8221; file can be called from all theme files, and can act as makeshift WordPress plugins (without the need for activation).</p>
<p>What we&#8217;ll be doing here is adding four functions and two filters into the file.</p>
<p>You don&#8217;t really have to understand the functions, but here are some brief explanations:</p>
<p class=\"screenshot\"><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/functions-php.jpg\" alt=\"functions_php.jpg\" border=\"0\" height=\"276\" width=\"400\" /><br />
Figure 2:  functions.php Filter and Function Additions</p>
<ul>
<li><strong>filterPostComments: </strong> Updates the comments number for all posts so that trackbacks aren&#8217;t included in the count.</li>
<li><strong>filterComments:</strong> Separates the trackbacks from the comments as global variables.</li>
<li><strong>stripTrackback:</strong> Strips trackbacks from an array.</li>
<li><strong>stripComment:</strong> Strips comments from an array.</li>
</ul>
<p>The two filters we add in are explained below:</p>
<ul>
<li><strong>comments_array</strong>: Basically the comments before they are read in the comments loop.</li>
<li><strong>the_posts</strong>: An array of all found posts.</li>
</ul>
<p>Ok, enough with the explanations.  Here&#8217;s the code for the &#8220;<strong>functions.php</strong>&#8221; file:</p>
<blockquote>
<pre>add_filter(\'comments_array\', \'filterComments\', 0);
add_filter(\'the_posts\', \'filterPostComments\', 0);
//Updates the comment number for posts with trackbacks
function filterPostComments($posts) {
	foreach ($posts as $key =&gt; $p) {
		if ($p-&gt;comment_count &lt;= 0) { return $posts; }
		$comments = get_approved_comments((int)$p-&gt;ID);
		$comments = array_filter($comments, \"stripTrackback\");
		$posts[$key]-&gt;comment_count = sizeof($comments);
	}
	return $posts;
}
//Updates the count for comments and trackbacks
function filterComments($comms) {
global $comments, $trackbacks;
	$comments = array_filter($comms,\"stripTrackback\");
	$trackbacks = array_filter($comms, \"stripComment\");
	return $comments;
}
//Strips out trackbacks/pingbacks
function stripTrackback($var) {
	if ($var-&gt;comment_type == \'trackback\' || $var-&gt;comment_type == \'pingback\') { return false; }
	return true;
}
//Strips out comments
function stripComment($var) {
	if ($var-&gt;comment_type != \'trackback\' &amp;&amp; $var-&gt;comment_type != \'pingback\') { return false; }
	return true;
}</pre>
</blockquote>
<p>Do you need to know how it works?  Not really.  But in summary, it separates comments from trackbacks and updates the comment count for all posts.</p>
<h4>Modifying the comments.php file</h4>
<p>Unlike most separation tutorials, we will not be modifying the comments loop.</p>
<p>In essence, we are expanding on a previous tutorial that also uses the &#8220;<strong>functions.php</strong>&#8221; file for <a href=\"http://www.binarymoon.co.uk/2006/04/wordpress-tips-and-tricks/\">separation of trackbacks and comments.</a></p>
<p>What we&#8217;ll be doing is the following:</p>
<ul>
<li>Adding a &#8220;trackbacks&#8221; global variable right after the comments loop.</li>
<li>Initiating a trackbacks/pingbacks loop.</li>
</ul>
<p class=\"screenshot\"><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/comments-php1.jpg\" alt=\"comments_php.jpg\" border=\"0\" height=\"188\" width=\"400\" /><br />
Figure 3: comments.php Load Order</p>
<p>Right after the comments loop ends, you would add the following:</p>
<blockquote><p><code> </code></p>
<pre>&lt;?php global $trackbacks; ?&gt;
&lt;?php if ($trackbacks) : ?&gt;
&lt;?php $comments = $trackbacks; ?&gt;
&lt;h3 id=\"trackbacks\"&gt;&lt;?php echo sizeof($trackbacks); ?&gt; Trackbacks/Pingbacks&lt;/h3&gt;
	&lt;ol class=\"commentlist\"&gt;
	&lt;?php foreach ($comments as $comment) : ?&gt;
&lt;!-- Your trackback HTML --&gt;
&lt;?php endforeach; /* end for each comment */ ?&gt;
	&lt;/ol&gt;
&lt;?php endif; ?&gt;</pre>
</blockquote>
<p>The code looks just like the comments loop except for a few lines of code, and the best part is, no editing of the original comments loop was necessary.</p>
<h4>Download the Code</h4>
<p>Here is a <a href=\"http://weblogtoolscollection.com/b2-img/2008/03/separation-code.zip\" title=\"Separation Code\">downloadable copy of the code presented</a> in this post.  The files within this <strong>zip</strong> file are:</p>
<ul>
<li>Sample &#8220;functions.php&#8221; file.</li>
<li>Sample &#8220;comments.php&#8221; file.</li>
</ul>
<p>I realize this solution is not the simplest demonstration of comment/trackback separation, but it allows for two actual and separate loops, and also produces a valid comments number(comments with trackbacks/pingbacks subtracted out) for all posts.</p>
<h3>Removing Trackbacks/Pingbacks from WordPress Themes - Three Ways</h3>
<p>When I asked the readers here if <a href=\"http://weblogtoolscollection.com/archives/2008/02/02/trackbacks-still-useful/\">trackbacks were still useful</a>, several expressed that they would be willing to remove trackbacks/pingbacks from comments.</p>
<p>With WordPress, I have found three ways to remove trackbacks and pingbacks from a WordPress theme.</p>
<h4>Method 1:  Edit the comments.php File</h4>
<p>Located in almost every theme directory is a file called &#8220;<strong>comments.php</strong>&#8220;. Within this file is what&#8217;s known as the Comments Loop, which is what displays all of the comments for a post.</p>
<p>The start of Comments Loop looks like this:</p>
<blockquote><p><code> </code></p>
<pre>&lt;?php foreach ($comments as $comment) : ?&gt;</pre>
</blockquote>
<p>To remove trackbacks/pingbacks from your theme, simply insert this code in the line right after the start of the loop:</p>
<blockquote><p><code> </code></p>
<pre>&lt;?php if ($comment-&gt;comment_type == \"pingback\" || $comment-&gt;comment_type == \"trackback\") { continue; } ?&gt;</pre>
</blockquote>
<p>The above code skips over the trackbacks and pingbacks.  The disadvantage of this method is that WordPress will still display the number of comments with trackbacks and pingbacks in the count.</p>
<p class=\"screenshot\"><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/trackbacks-comments.jpeg\" alt=\"trackbacks_comments.jpeg\" height=\"37\" width=\"130\" /><br />
Figure 4: Comments count with trackbacks included in the count</p>
<h4>Method 2:  Edit the functions.php File</h4>
<p>Most themes should already come with a file named &#8220;<strong>functions.php</strong>&#8220;.  If not, you can easily create one using any text editor.</p>
<p>Any code or functions in your &#8220;<strong>functions.php</strong>&#8221; file is immediately accessible by all of your theme files.  The benefit of removing trackbacks/pingbacks using this technique is that you won&#8217;t have to modify any of the core template files and risk messing up your theme.</p>
<p>Within the <strong>functions.php</strong> file, insert this code:</p>
<blockquote><p><code> </code></p>
<pre>add_filter(\'comments_array\', \'filterTrackbacks\', 0);
add_filter(\'the_posts\', \'filterPostComments\', 0);
//Updates the comment number for posts with trackbacks
function filterPostComments($posts) {
	foreach ($posts as $key =&gt; $p) {
		if ($p-&gt;comment_count &lt;= 0) { return $posts; }
		$comments = get_approved_comments((int)$p-&gt;ID);
		$comments = array_filter($comments, \"stripTrackback\");
		$posts[$key]-&gt;comment_count = sizeof($comments);
	}
	return $posts;
}
//Updates the count for comments and trackbacks
function filterTrackbacks($comms) {
global $comments, $trackbacks;
	$comments = array_filter($comms,\"stripTrackback\");
	return $comments;
}
//Strips out trackbacks/pingbacks
function stripTrackback($var) {
	if ($var-&gt;comment_type == \'trackback\' || $var-&gt;comment_type == \'pingback\') { return false; }
	return true;
}</pre>
</blockquote>
<p>This code is very similar to the code I used for separating trackbacks from comments.</p>
<p>Although not nearly as simple as the &#8220;<strong>comments.php</strong>&#8221; method, this method is more flexible and provides WordPress with an actual number of comments <strong>without the trackbacks/pingbacks being counted</strong>.</p>
<p class=\"screenshot\"><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/comments-wo-trackbacks.jpeg\" alt=\"comments_wo_trackbacks.jpeg\" height=\"31\" width=\"135\" /><br />
Figure 5: Comments count without trackbacks included</p>
<h4>Method 3:  The Plugin Solution</h4>
<p>For those not wishing to modify themes, there is always the plugin solution.</p>
<p>A plugin I wrote called <a href=\"http://www.raproject.com/comment-sorter/\">Comment Sorter</a> has a feature that allows a blogger to remove trackbacks/pingbacks (not permanently) from within the WordPress Administration Panel.  There is absolutely no theme modification involved.</p>
<p class=\"screenshot\"><img src=\"http://weblogtoolscollection.com/b2-img/2008/03/comment-sorter-admin.jpg\" alt=\"comment_sorter_admin.jpg\" height=\"237\" width=\"446\" /><br />
Figure 6: Comment Sorter Admin Interface</p>
<p>Using the above configuration for <a href=\"http://wordpress.org/extend/plugins/comment-sorter/\">Comment Sorter</a> (with the auto-include off and trackbacks disabled), one can easily remove trackbacks and pingbacks from a theme.  It&#8217;s basically Method 2 in the form of a plugin.</p>
<h3>Conclusion</h3>
<p>Within this post I presented techniques on separating trackbacks/pingbacks from regular comments, and also how to remove trackbacks and pingbacks from a WordPress theme.</p>
<p>If you have any questions, please leave a comment and I&#8217;ll do my best to address them.</p>\";}i:43;a:7:{s:5:\"title\";s:58:\"Weblog Tools Collection: WordPress Plugin Releases for 3/6\";s:4:\"guid\";s:86:\"http://weblogtoolscollection.com/archives/2008/03/06/wordpress-plugin-releases-for-36/\";s:4:\"link\";s:86:\"http://weblogtoolscollection.com/archives/2008/03/06/wordpress-plugin-releases-for-36/\";s:11:\"description\";s:3881:\"<p><strong> Stats Helper Functions And Widgets</strong><br />
It helps you retrieve data from wordpress.com stats and puts it on your blog.</p>
<p><a href=\"http://vlad.bailescu.ro/wordpress/plugin-stats-helper-functions-and-widgets/\" title=\"http://vlad.bailescu.ro/wordpress/plugin-stats-helper-functions-and-widgets/\" target=\"_blank\">Release Page</a> | <a href=\"http://vlad.bailescu.ro/wordpress/plugin-stats-helper-functions-and-widgets/\" title=\"http://vlad.bailescu.ro/wordpress/plugin-stats-helper-functions-and-widgets/\" target=\"_blank\"></a><a href=\"http://vlad.bailescu.ro/wp-content/uploads/wordpress/wpcomstats-helper-0.1.zip\" title=\"http://vlad.bailescu.ro/wp-content/uploads/wordpress/wpcomstats-helper-0.1.zip\" target=\"_blank\">Download</a></p>
<p><strong>SEO Image</strong><br />
This plugin will optimize images in all your posts for SEO which will positively affect your image search results resulting in more traffic to your blog.</p>
<p><a href=\"http://www.prelovac.com/vladimir/wordpress-plugins/seo-image\" title=\"http://www.prelovac.com/vladimir/wordpress-plugins/seo-image\" target=\"_blank\">Release Page</a> | <a href=\"http://www.prelovac.com/vladimir/download-manager.php?id=7\" title=\"http://www.prelovac.com/vladimir/download-manager.php?id=7\" target=\"_blank\">Download</a></p>
<p><strong>LocalCurrency</strong><br />
Shows currency values to readers in their local currency (in brackets after the original value). For example: If the site’s currency is Chinese yuan and the post contains <em>10 yuan</em>, a user from Australia will see <em>10 yuan (AUD$1.53)</em>, while a user from US will see <em>10 yuan (USD$1.39)</em>.</p>
<p><a href=\"http://www.jobsinchina.com/resources/wordpress-plugin-localcurrency/\" title=\"http://www.jobsinchina.com/resources/wordpress-plugin-localcurrency/\" target=\"_blank\">Release Page</a> | <a href=\"http://www.jobsinchina.com/?download=localcurrency-1.01.zip\" title=\"http://www.jobsinchina.com/?download=localcurrency-1.01.zip\" target=\"_blank\">Download</a></p>
<p><strong>Organize Series Plugin 2.0</strong><br />
OrgSeries 2.0 takes the “organize” in Organize Series to a whole new level.</p>
<p><a href=\"http://www.unfoldingneurons.com/2008/organize-series-20-beta-1-release\" title=\"http://www.unfoldingneurons.com/2008/organize-series-20-beta-1-release\" target=\"_blank\">Release Page</a> | <a href=\"http://unfoldingneurons.com/wordpress/download-manager.php?id=4\" title=\"http://unfoldingneurons.com/wordpress/download-manager.php?id=4\" target=\"_blank\">Download</a></p>
<p><strong>Devowelizer</strong><br />
The <span class=\"link_zip\">Devowelizer</span> plugin for WordPress replaces the vowels in most “bad language” within your own content and within comments left by visitors.</p>
<p><a href=\"http://www.richardsramblings.com/plugins/wp-devowelizer/\" title=\"http://www.richardsramblings.com/plugins/wp-devowelizer/\" target=\"_blank\">Release Page </a>| <a href=\"http://www.richardsramblings.com/downloads/devowelizer.zip\" title=\"http://www.richardsramblings.com/downloads/devowelizer.zip\" target=\"_blank\">Download</a></p>
<p><strong>Magic Keywords</strong><br />
The <span class=\"link_zip\">Magic Keywords</span> plugin generates keywords for your individual blog posts and pages. Unlike most other keyword generators, the plugin also looks for two-and three-word patterns, and also groups certain words together into one by crudely checking to see if they might have the same root (e.g. <em>Spam</em>, <em>spammers</em>, <em>spams</em>). Works almost like magic!</p>
<p><a href=\"http://www.richardsramblings.com/plugins/wp-magic-keywords/\" title=\"http://www.richardsramblings.com/plugins/wp-magic-keywords/\" target=\"_blank\">Release Page </a>| <a href=\"http://www.richardsramblings.com/downloads/magic-keywords.zip\" title=\"http://www.richardsramblings.com/downloads/magic-keywords.zip\" target=\"_blank\">Download</a></p>\";s:7:\"pubdate\";s:31:\"Fri, 07 Mar 2008 21:15:09 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Jeffro2pt0\";}s:7:\"summary\";s:3881:\"<p><strong> Stats Helper Functions And Widgets</strong><br />
It helps you retrieve data from wordpress.com stats and puts it on your blog.</p>
<p><a href=\"http://vlad.bailescu.ro/wordpress/plugin-stats-helper-functions-and-widgets/\" title=\"http://vlad.bailescu.ro/wordpress/plugin-stats-helper-functions-and-widgets/\" target=\"_blank\">Release Page</a> | <a href=\"http://vlad.bailescu.ro/wordpress/plugin-stats-helper-functions-and-widgets/\" title=\"http://vlad.bailescu.ro/wordpress/plugin-stats-helper-functions-and-widgets/\" target=\"_blank\"></a><a href=\"http://vlad.bailescu.ro/wp-content/uploads/wordpress/wpcomstats-helper-0.1.zip\" title=\"http://vlad.bailescu.ro/wp-content/uploads/wordpress/wpcomstats-helper-0.1.zip\" target=\"_blank\">Download</a></p>
<p><strong>SEO Image</strong><br />
This plugin will optimize images in all your posts for SEO which will positively affect your image search results resulting in more traffic to your blog.</p>
<p><a href=\"http://www.prelovac.com/vladimir/wordpress-plugins/seo-image\" title=\"http://www.prelovac.com/vladimir/wordpress-plugins/seo-image\" target=\"_blank\">Release Page</a> | <a href=\"http://www.prelovac.com/vladimir/download-manager.php?id=7\" title=\"http://www.prelovac.com/vladimir/download-manager.php?id=7\" target=\"_blank\">Download</a></p>
<p><strong>LocalCurrency</strong><br />
Shows currency values to readers in their local currency (in brackets after the original value). For example: If the site’s currency is Chinese yuan and the post contains <em>10 yuan</em>, a user from Australia will see <em>10 yuan (AUD$1.53)</em>, while a user from US will see <em>10 yuan (USD$1.39)</em>.</p>
<p><a href=\"http://www.jobsinchina.com/resources/wordpress-plugin-localcurrency/\" title=\"http://www.jobsinchina.com/resources/wordpress-plugin-localcurrency/\" target=\"_blank\">Release Page</a> | <a href=\"http://www.jobsinchina.com/?download=localcurrency-1.01.zip\" title=\"http://www.jobsinchina.com/?download=localcurrency-1.01.zip\" target=\"_blank\">Download</a></p>
<p><strong>Organize Series Plugin 2.0</strong><br />
OrgSeries 2.0 takes the “organize” in Organize Series to a whole new level.</p>
<p><a href=\"http://www.unfoldingneurons.com/2008/organize-series-20-beta-1-release\" title=\"http://www.unfoldingneurons.com/2008/organize-series-20-beta-1-release\" target=\"_blank\">Release Page</a> | <a href=\"http://unfoldingneurons.com/wordpress/download-manager.php?id=4\" title=\"http://unfoldingneurons.com/wordpress/download-manager.php?id=4\" target=\"_blank\">Download</a></p>
<p><strong>Devowelizer</strong><br />
The <span class=\"link_zip\">Devowelizer</span> plugin for WordPress replaces the vowels in most “bad language” within your own content and within comments left by visitors.</p>
<p><a href=\"http://www.richardsramblings.com/plugins/wp-devowelizer/\" title=\"http://www.richardsramblings.com/plugins/wp-devowelizer/\" target=\"_blank\">Release Page </a>| <a href=\"http://www.richardsramblings.com/downloads/devowelizer.zip\" title=\"http://www.richardsramblings.com/downloads/devowelizer.zip\" target=\"_blank\">Download</a></p>
<p><strong>Magic Keywords</strong><br />
The <span class=\"link_zip\">Magic Keywords</span> plugin generates keywords for your individual blog posts and pages. Unlike most other keyword generators, the plugin also looks for two-and three-word patterns, and also groups certain words together into one by crudely checking to see if they might have the same root (e.g. <em>Spam</em>, <em>spammers</em>, <em>spams</em>). Works almost like magic!</p>
<p><a href=\"http://www.richardsramblings.com/plugins/wp-magic-keywords/\" title=\"http://www.richardsramblings.com/plugins/wp-magic-keywords/\" target=\"_blank\">Release Page </a>| <a href=\"http://www.richardsramblings.com/downloads/magic-keywords.zip\" title=\"http://www.richardsramblings.com/downloads/magic-keywords.zip\" target=\"_blank\">Download</a></p>\";}i:44;a:7:{s:5:\"title\";s:56:\"Weblog Tools Collection: Who Comments on Blogs, and Why?\";s:4:\"guid\";s:83:\"http://weblogtoolscollection.com/archives/2008/03/06/who-comments-on-blogs-and-why/\";s:4:\"link\";s:83:\"http://weblogtoolscollection.com/archives/2008/03/06/who-comments-on-blogs-and-why/\";s:11:\"description\";s:1622:\"<p><a href=\"http://freakonomics.blogs.nytimes.com/2007/03/15/who-comments-on-blogs-and-why/\">Who Comments on Blogs, and Why?</a>: <em>I realize there is a selection problem here: anyone who responds to my question about why commenters comment is, alas, a commenter. Which means that regular commenters will be overrepresented in the comments — unless, of course, a whole bunch of you who never comment decide to go ahead and log in and, in the comments section, tell us why you never comment. Or why other people do.</em> I love the topic of this post on Freakonomics at the New York Times Blog. There is a lot of food for thought.</p>
<p>There are many reasons to leave a comment on a blog and the ability of readers to leave comments on a blog and the instant interaction and conversation that develops, is what attracted me to b2 and consequently WordPress. I tend to not comment on blogs where the comment form is hard to find or where I have to jump through a bunch of hoops to leave a comment (which is why I like extremely simple comment forms and dislike indiscriminate moderation). I also leave comments on interesting topics in the form of trackbacks and links. I gauge the success of a post and a topic by the number of comments left on it and actively try to encourage my readers to express their thoughts. I try to join in on the conversation in the comments and I consciously keep myself from modifying or censoring comments.</p>
<p>So do you comment on blogs? Why do you comment? If you have never left a comment on WeblogToolsCollection.com and I request you to comment on this post, would you do it?</p>\";s:7:\"pubdate\";s:31:\"Fri, 07 Mar 2008 21:15:09 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Mark Ghosh\";}s:7:\"summary\";s:1622:\"<p><a href=\"http://freakonomics.blogs.nytimes.com/2007/03/15/who-comments-on-blogs-and-why/\">Who Comments on Blogs, and Why?</a>: <em>I realize there is a selection problem here: anyone who responds to my question about why commenters comment is, alas, a commenter. Which means that regular commenters will be overrepresented in the comments — unless, of course, a whole bunch of you who never comment decide to go ahead and log in and, in the comments section, tell us why you never comment. Or why other people do.</em> I love the topic of this post on Freakonomics at the New York Times Blog. There is a lot of food for thought.</p>
<p>There are many reasons to leave a comment on a blog and the ability of readers to leave comments on a blog and the instant interaction and conversation that develops, is what attracted me to b2 and consequently WordPress. I tend to not comment on blogs where the comment form is hard to find or where I have to jump through a bunch of hoops to leave a comment (which is why I like extremely simple comment forms and dislike indiscriminate moderation). I also leave comments on interesting topics in the form of trackbacks and links. I gauge the success of a post and a topic by the number of comments left on it and actively try to encourage my readers to express their thoughts. I try to join in on the conversation in the comments and I consciously keep myself from modifying or censoring comments.</p>
<p>So do you comment on blogs? Why do you comment? If you have never left a comment on WeblogToolsCollection.com and I request you to comment on this post, would you do it?</p>\";}i:45;a:7:{s:5:\"title\";s:49:\"Weblog Tools Collection: WordPress Theme Forecast\";s:4:\"guid\";s:78:\"http://weblogtoolscollection.com/archives/2008/03/05/wordpress-theme-forecast/\";s:4:\"link\";s:78:\"http://weblogtoolscollection.com/archives/2008/03/05/wordpress-theme-forecast/\";s:11:\"description\";s:1084:\"<p>ThemeShaper has published an article titled, <a href=\"http://themeshaper.com/the-future-of-wordpress-themes/\" title=\"http://themeshaper.com/the-future-of-wordpress-themes/\" target=\"_blank\">The Future Of WordPress themes</a> which highlights comments from a number of movers and shakers that exist within the WordPress theming community. A number of individuals contributed to the article such as <strong>myself, Brian Gardner, Justin Tadlock, Cal Coleman</strong> and more. The basis of the article was to try and get a glimpse as to what the future of WordPress themes might be. What better way to find out than to ask those that set the tone for WordPress themes in their current state.</p>
<p>I enjoyed reading a number of the responses and it was interesting to see the differences amongst the crew as to where we see themes in general heading. I hope that ThemeShaper does the same article a year from now to see if any of us actually gave a correct prediction.</p>
<p>Now the question is asked of you. What and where do you think the future of WordPress themes is headed?</p>\";s:7:\"pubdate\";s:31:\"Fri, 07 Mar 2008 21:15:09 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:10:\"Jeffro2pt0\";}s:7:\"summary\";s:1084:\"<p>ThemeShaper has published an article titled, <a href=\"http://themeshaper.com/the-future-of-wordpress-themes/\" title=\"http://themeshaper.com/the-future-of-wordpress-themes/\" target=\"_blank\">The Future Of WordPress themes</a> which highlights comments from a number of movers and shakers that exist within the WordPress theming community. A number of individuals contributed to the article such as <strong>myself, Brian Gardner, Justin Tadlock, Cal Coleman</strong> and more. The basis of the article was to try and get a glimpse as to what the future of WordPress themes might be. What better way to find out than to ask those that set the tone for WordPress themes in their current state.</p>
<p>I enjoyed reading a number of the responses and it was interesting to see the differences amongst the crew as to where we see themes in general heading. I hope that ThemeShaper does the same article a year from now to see if any of us actually gave a correct prediction.</p>
<p>Now the question is asked of you. What and where do you think the future of WordPress themes is headed?</p>\";}i:46;a:7:{s:5:\"title\";s:16:\"Matt: WP at eBay\";s:4:\"guid\";s:20:\"http://ma.tt/?p=3392\";s:4:\"link\";s:32:\"http://ma.tt/2008/03/wp-at-ebay/\";s:11:\"description\";s:170:\"<p><a href=\"http://desktop.ebay.com/blog/\">eBay has a new WordPress blog</a>. Hat tip: <a rel=\"external nofollow\" href=\"http://www.ginside.com/\">Jonathan Dingman</a>.</p>\";s:7:\"pubdate\";s:31:\"Fri, 07 Mar 2008 18:08:55 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:7:\"summary\";s:170:\"<p><a href=\"http://desktop.ebay.com/blog/\">eBay has a new WordPress blog</a>. Hat tip: <a rel=\"external nofollow\" href=\"http://www.ginside.com/\">Jonathan Dingman</a>.</p>\";}i:47;a:7:{s:5:\"title\";s:13:\"Matt: At SxSW\";s:4:\"guid\";s:20:\"http://ma.tt/?p=3391\";s:4:\"link\";s:31:\"http://ma.tt/2008/03/at-sxsw-2/\";s:11:\"description\";s:553:\"<p>I&#8217;m at South by Southwest in Austin, Texas now. This is my <a href=\"http://ma.tt/2003/03/sxsw-interactive/\">fifth year</a> at the conference, and I&#8217;m excited as ever to see what this year holds. I&#8217;m on <a href=\"http://2008.sxsw.com/interactive/programming/panels_schedule/?action=bio&amp;id=138161\">two panels this year</a>. If you&#8217;re a WordPress user and you spot me at the conference please introduce yourself! I&#8217;ll try to keep some WP stickers on me, so ask for one if you don&#8217;t have one on your laptop yet.</p>\";s:7:\"pubdate\";s:31:\"Fri, 07 Mar 2008 18:03:29 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:4:\"Matt\";}s:7:\"summary\";s:553:\"<p>I&#8217;m at South by Southwest in Austin, Texas now. This is my <a href=\"http://ma.tt/2003/03/sxsw-interactive/\">fifth year</a> at the conference, and I&#8217;m excited as ever to see what this year holds. I&#8217;m on <a href=\"http://2008.sxsw.com/interactive/programming/panels_schedule/?action=bio&amp;id=138161\">two panels this year</a>. If you&#8217;re a WordPress user and you spot me at the conference please introduce yourself! I&#8217;ll try to keep some WP stickers on me, so ask for one if you don&#8217;t have one on your laptop yet.</p>\";}i:48;a:7:{s:5:\"title\";s:35:\"Dougal Campbell: Easy Gravatars 1.2\";s:4:\"guid\";s:32:\"http://dougal.gunters.org/?p=889\";s:4:\"link\";s:59:\"http://dougal.gunters.org/blog/2008/03/06/easy-gravatars-12\";s:11:\"description\";s:1313:\"<p>
Earlier today, I released <a href=\"http://wordpress.org/extend/plugins/easygravatars/\">Easy Gravatars version 1.2</a>. The only change (besides confirming that works in WordPress 2.5, currently in beta, due out next week) is that when installed under WordPress 2.5 or newer, it will use the new core <code><a href=\"http://boren.nu/archives/2008/03/04/avatars-in-wordpress-25/\">get_avatar()</a></code> function to generate the image tag. And since <code>get_avatar()</code> is a pluggable function, other plugins could conceivably use it to generate avatar icons from other services, and Easy Gravatars would then use the new service too.
</p>
<p>
If that doesn\'t make sense to you, don\'t sweat it. You can upgrade and it will work fine (on both older versions of WP and the upcoming version 2.5). Or you can keep the previous version, and it will continue to work fine, too. The only way things would work any different is if you are running WordPress 2.5 (or later, one day), and if you had an additional plugin which defined a new <code>get_avatar()</code> function.
</p>

<p><a href=\"http://sharethis.com/item?&wp=2.5-RC1.1&amp;publisher=06a70a77-1fc0-46a9-81d1-6a696e6ed23f&amp;title=Easy+Gravatars+1.2&amp;url=http%3A%2F%2Fdougal.gunters.org%2Fblog%2F2008%2F03%2F06%2Feasy-gravatars-12\">ShareThis</a></p>\";s:7:\"pubdate\";s:31:\"Thu, 06 Mar 2008 21:52:54 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:6:\"Dougal\";}s:7:\"summary\";s:1313:\"<p>
Earlier today, I released <a href=\"http://wordpress.org/extend/plugins/easygravatars/\">Easy Gravatars version 1.2</a>. The only change (besides confirming that works in WordPress 2.5, currently in beta, due out next week) is that when installed under WordPress 2.5 or newer, it will use the new core <code><a href=\"http://boren.nu/archives/2008/03/04/avatars-in-wordpress-25/\">get_avatar()</a></code> function to generate the image tag. And since <code>get_avatar()</code> is a pluggable function, other plugins could conceivably use it to generate avatar icons from other services, and Easy Gravatars would then use the new service too.
</p>
<p>
If that doesn\'t make sense to you, don\'t sweat it. You can upgrade and it will work fine (on both older versions of WP and the upcoming version 2.5). Or you can keep the previous version, and it will continue to work fine, too. The only way things would work any different is if you are running WordPress 2.5 (or later, one day), and if you had an additional plugin which defined a new <code>get_avatar()</code> function.
</p>

<p><a href=\"http://sharethis.com/item?&wp=2.5-RC1.1&amp;publisher=06a70a77-1fc0-46a9-81d1-6a696e6ed23f&amp;title=Easy+Gravatars+1.2&amp;url=http%3A%2F%2Fdougal.gunters.org%2Fblog%2F2008%2F03%2F06%2Feasy-gravatars-12\">ShareThis</a></p>\";}i:49;a:7:{s:5:\"title\";s:37:\"Donncha: Please sir, can I have more?\";s:4:\"guid\";s:56:\"http://ocaoimh.ie/2008/03/06/please-sir-can-i-have-more/\";s:4:\"link\";s:56:\"http://ocaoimh.ie/2008/03/06/please-sir-can-i-have-more/\";s:11:\"description\";s:1711:\"<p>A poor urchin goes up to the headmaster, &#8220;Please sir, can I have more comments?&#8221;<br />
The headmaster looks down from his perch and with a grimace says, &#8220;Not before you show me your cookie!&#8221;</p>
<p>Well, the poor lad never did get any more comments. He didn&#8217;t have the right cookie, but you can. Just grab my <a href=\"http://ocaoimh.ie/cookies-for-comments/\">Cookies For Comments</a> plugin and anyone who leaves a comment on your blog will need the correct cookie. That will stop quite a bit of comment spam dead in it&#8217;s tracks.</p>
<p>It&#8217;s the first release and fairly simplistic, but it should give some comment spammers a headache for at least 10 minutes. It&#8217;s about time they upgraded their spamming tools anyway. According to my log file, it had stopped over 18,600 spam comments in the last week or so. The rest got handed to Akismet and it stopped several thousand more. They&#8217;ve been busy haven&#8217;t they?</p>
<p>So, should you use this instead of Akismet? Not a chance. This will only stop the brain dead comment spammers who use automated bots to post to the comment form. Trackback and pingback spam and spammers who either use poorly paid human slaves or browser based user agents will defeat this.</p>
<p>If you use a caching plugin such as <a href=\"http://ocaoimh.ie/wp-super-cache/\">WP Super Cache</a> make sure you clear the cache after enabling this plugin. Also, I&#8217;m not sure what will happen with those plugins that merge CSS files together.</p>
<p>Thanks <a href=\"http://97k.eu/\">Dan</a> for the idea!</p>
<p><img src=\"http://ocaoimh.ie/?voyeur=1\" /></p><p><strong>Related Posts</strong><ul><li>No related posts</li></ul></p>\";s:7:\"pubdate\";s:31:\"Thu, 06 Mar 2008 17:23:19 +0000\";s:2:\"dc\";a:1:{s:7:\"creator\";s:7:\"Donncha\";}s:7:\"summary\";s:1711:\"<p>A poor urchin goes up to the headmaster, &#8220;Please sir, can I have more comments?&#8221;<br />
The headmaster looks down from his perch and with a grimace says, &#8220;Not before you show me your cookie!&#8221;</p>
<p>Well, the poor lad never did get any more comments. He didn&#8217;t have the right cookie, but you can. Just grab my <a href=\"http://ocaoimh.ie/cookies-for-comments/\">Cookies For Comments</a> plugin and anyone who leaves a comment on your blog will need the correct cookie. That will stop quite a bit of comment spam dead in it&#8217;s tracks.</p>
<p>It&#8217;s the first release and fairly simplistic, but it should give some comment spammers a headache for at least 10 minutes. It&#8217;s about time they upgraded their spamming tools anyway. According to my log file, it had stopped over 18,600 spam comments in the last week or so. The rest got handed to Akismet and it stopped several thousand more. They&#8217;ve been busy haven&#8217;t they?</p>
<p>So, should you use this instead of Akismet? Not a chance. This will only stop the brain dead comment spammers who use automated bots to post to the comment form. Trackback and pingback spam and spammers who either use poorly paid human slaves or browser based user agents will defeat this.</p>
<p>If you use a caching plugin such as <a href=\"http://ocaoimh.ie/wp-super-cache/\">WP Super Cache</a> make sure you clear the cache after enabling this plugin. Also, I&#8217;m not sure what will happen with those plugins that merge CSS files together.</p>
<p>Thanks <a href=\"http://97k.eu/\">Dan</a> for the idea!</p>
<p><img src=\"http://ocaoimh.ie/?voyeur=1\" /></p><p><strong>Related Posts</strong><ul><li>No related posts</li></ul></p>\";}}s:7:\"channel\";a:5:{s:5:\"title\";s:16:\"WordPress Planet\";s:4:\"link\";s:28:\"http://planet.wordpress.org/\";s:8:\"language\";s:2:\"en\";s:11:\"description\";s:47:\"WordPress Planet - http://planet.wordpress.org/\";s:7:\"tagline\";s:47:\"WordPress Planet - http://planet.wordpress.org/\";}s:9:\"textinput\";a:0:{}s:5:\"image\";a:0:{}s:9:\"feed_type\";s:3:\"RSS\";s:12:\"feed_version\";s:3:\"2.0\";s:5:\"stack\";a:0:{}s:9:\"inchannel\";b:0;s:6:\"initem\";b:0;s:9:\"incontent\";b:0;s:11:\"intextinput\";b:0;s:7:\"inimage\";b:0;s:13:\"current_field\";s:0:\"\";s:17:\"current_namespace\";b:0;s:19:\"_CONTENT_CONSTRUCTS\";a:6:{i:0;s:7:\"content\";i:1;s:7:\"summary\";i:2;s:4:\"info\";i:3;s:5:\"title\";i:4;s:7:\"tagline\";i:5;s:9:\"copyright\";}s:4:\"etag\";s:25:\"\"2cc9a-47e7f6b9-c10597\"
\";s:13:\"last_modified\";s:31:\"Mon, 24 Mar 2008 18:45:13 GMT
\";}', 'no');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('75', '0', 'rss_867bd5c64f85878d03a060509cd2f92c_ts', '1206384718', 'no');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('76', '0', 'sidebars_widgets', 'a:1:{s:13:\"array_version\";i:3;}', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('77', '0', 'category_children', 'a:0:{}', 'yes');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('78', '0', 'rss_3a1681c524e3a8bc5f7eb21f12f650ec', 'O:9:\"MagpieRSS\":17:{s:6:\"parser\";i:0;s:12:\"current_item\";a:0:{}s:5:\"items\";a:0:{}s:7:\"channel\";a:4:{s:5:\"title\";s:59:\"Google Blog Search: link:http://www.petshopnet.com.br/blog/\";s:4:\"link\";s:118:\"http://blogsearch.google.com/blogsearch?hl=en&scoring=d&ie=ISO-8859-1&num=10&q=link:http://www.petshopnet.com.br/blog/\";s:11:\"description\";s:94:\"Your search - <b>link:http://www.petshopnet.com.br/blog/</b> - did not match any documents.   \";s:7:\"tagline\";s:94:\"Your search - <b>link:http://www.petshopnet.com.br/blog/</b> - did not match any documents.   \";}s:9:\"textinput\";a:0:{}s:5:\"image\";a:0:{}s:9:\"feed_type\";s:3:\"RSS\";s:12:\"feed_version\";s:3:\"2.0\";s:5:\"stack\";a:0:{}s:9:\"inchannel\";b:0;s:6:\"initem\";b:0;s:9:\"incontent\";b:0;s:11:\"intextinput\";b:0;s:7:\"inimage\";b:0;s:13:\"current_field\";s:0:\"\";s:17:\"current_namespace\";b:0;s:19:\"_CONTENT_CONSTRUCTS\";a:6:{i:0;s:7:\"content\";i:1;s:7:\"summary\";i:2;s:4:\"info\";i:3;s:5:\"title\";i:4;s:7:\"tagline\";i:5;s:9:\"copyright\";}}', 'no');
 INSERT INTO wp_options ( option_id,blog_id,option_name,option_value,autoload) VALUES ('79', '0', 'rss_3a1681c524e3a8bc5f7eb21f12f650ec_ts', '1206384713', 'no');
DROP TABLE IF EXISTS wp_postmeta;
CREATE TABLE wp_postmeta (  
  meta_id   bigint(20) not null   auto_increment,
  post_id   bigint(20) default '0' not null   ,
  meta_key   varchar(255)   ,
  meta_value   longtext   ,
 PRIMARY KEY (meta_id),
 KEY post_id (post_id),
 KEY meta_key (meta_key)
);

DROP TABLE IF EXISTS wp_posts;
CREATE TABLE wp_posts (  
  ID   bigint(20) unsigned not null   auto_increment,
  post_author   bigint(20) default '0' not null   ,
  post_date   datetime default '0000-00-00 00:00:00' not null   ,
  post_date_gmt   datetime default '0000-00-00 00:00:00' not null   ,
  post_content   longtext not null   ,
  post_title   text not null   ,
  post_category   int(4) default '0' not null   ,
  post_excerpt   text not null   ,
  post_status   enum('publish','draft','private','static','object','attachment','inherit','future','pending') default 'publish' not null   ,
  comment_status   enum('open','closed','registered_only') default 'open' not null   ,
  ping_status   enum('open','closed') default 'open' not null   ,
  post_password   varchar(20) not null   ,
  post_name   varchar(200) not null   ,
  to_ping   text not null   ,
  pinged   text not null   ,
  post_modified   datetime default '0000-00-00 00:00:00' not null   ,
  post_modified_gmt   datetime default '0000-00-00 00:00:00' not null   ,
  post_content_filtered   text not null   ,
  post_parent   bigint(20) default '0' not null   ,
  guid   varchar(255) not null   ,
  menu_order   int(11) default '0' not null   ,
  post_type   varchar(20) default 'post' not null   ,
  post_mime_type   varchar(100) not null   ,
  comment_count   bigint(20) default '0' not null   ,
 PRIMARY KEY (ID),
 KEY post_name (post_name),
 KEY type_status_date (post_type, post_status, post_date, ID)
);

 INSERT INTO wp_posts ( ID,post_author,post_date,post_date_gmt,post_content,post_title,post_category,post_excerpt,post_status,comment_status,ping_status,post_password,post_name,to_ping,pinged,post_modified,post_modified_gmt,post_content_filtered,post_parent,guid,menu_order,post_type,post_mime_type,comment_count) VALUES ('1', '1', '2008-03-19 08:35:51', '2008-03-19 11:35:51', 'Bem-vindo ao WordPress. Este é o seu primeiro artigo. Edite-o ou elimine-o e dê vida ao seu blogue!', 'Olá, mundo!', '0', '', 'publish', 'open', 'open', '', 'ola-mundo', '', '', '2008-03-19 08:35:51', '2008-03-19 11:35:51', '', '0', 'http://localhost/blog/?p=1', '0', 'post', '', '1');
 INSERT INTO wp_posts ( ID,post_author,post_date,post_date_gmt,post_content,post_title,post_category,post_excerpt,post_status,comment_status,ping_status,post_password,post_name,to_ping,pinged,post_modified,post_modified_gmt,post_content_filtered,post_parent,guid,menu_order,post_type,post_mime_type,comment_count) VALUES ('2', '1', '2008-03-19 08:35:51', '2008-03-19 11:35:51', 'Este é um exemplo de uma página do WordPress. Poderia editá-la para colocar informações sobre si ou sobre o seu Web site. É possível criar tantas páginas deste tipo quantas pretender e gerir todo o conteúdo a partir do WordPress.', 'Acerca', '0', '', 'publish', 'open', 'open', '', 'acerca', '', '', '2008-03-19 08:35:51', '2008-03-19 11:35:51', '', '0', '', '0', 'page', '', '0');
DROP TABLE IF EXISTS wp_term_relationships;
CREATE TABLE wp_term_relationships (  
  object_id   bigint(20) default '0' not null   ,
  term_taxonomy_id   bigint(20) default '0' not null   ,
 PRIMARY KEY (object_id, term_taxonomy_id),
 KEY term_taxonomy_id (term_taxonomy_id)
);

 INSERT INTO wp_term_relationships ( object_id,term_taxonomy_id) VALUES ('1', '1');
 INSERT INTO wp_term_relationships ( object_id,term_taxonomy_id) VALUES ('1', '2');
 INSERT INTO wp_term_relationships ( object_id,term_taxonomy_id) VALUES ('2', '2');
 INSERT INTO wp_term_relationships ( object_id,term_taxonomy_id) VALUES ('3', '2');
 INSERT INTO wp_term_relationships ( object_id,term_taxonomy_id) VALUES ('4', '2');
 INSERT INTO wp_term_relationships ( object_id,term_taxonomy_id) VALUES ('5', '2');
 INSERT INTO wp_term_relationships ( object_id,term_taxonomy_id) VALUES ('6', '2');
 INSERT INTO wp_term_relationships ( object_id,term_taxonomy_id) VALUES ('7', '2');
DROP TABLE IF EXISTS wp_term_taxonomy;
CREATE TABLE wp_term_taxonomy (  
  term_taxonomy_id   bigint(20) not null   auto_increment,
  term_id   bigint(20) default '0' not null   ,
  taxonomy   varchar(32) not null   ,
  description   longtext not null   ,
  parent   bigint(20) default '0' not null   ,
  count   bigint(20) default '0' not null   ,
 PRIMARY KEY (term_taxonomy_id),
 UNIQUE term_id_taxonomy (term_id, taxonomy)
);

 INSERT INTO wp_term_taxonomy ( term_taxonomy_id,term_id,taxonomy,description,parent,count) VALUES ('1', '1', 'category', '', '0', '1');
 INSERT INTO wp_term_taxonomy ( term_taxonomy_id,term_id,taxonomy,description,parent,count) VALUES ('2', '2', 'link_category', '', '0', '7');
DROP TABLE IF EXISTS wp_terms;
CREATE TABLE wp_terms (  
  term_id   bigint(20) not null   auto_increment,
  name   varchar(55) not null   ,
  slug   varchar(200) not null   ,
  term_group   bigint(10) default '0' not null   ,
 PRIMARY KEY (term_id),
 UNIQUE slug (slug)
);

 INSERT INTO wp_terms ( term_id,name,slug,term_group) VALUES ('1', 'Sem categoria', 'sem-categoria', '0');
 INSERT INTO wp_terms ( term_id,name,slug,term_group) VALUES ('2', 'Blogroll', 'blogroll', '0');
DROP TABLE IF EXISTS wp_usermeta;
CREATE TABLE wp_usermeta (  
  umeta_id   bigint(20) not null   auto_increment,
  user_id   bigint(20) default '0' not null   ,
  meta_key   varchar(255)   ,
  meta_value   longtext   ,
 PRIMARY KEY (umeta_id),
 KEY user_id (user_id),
 KEY meta_key (meta_key)
);

 INSERT INTO wp_usermeta ( umeta_id,user_id,meta_key,meta_value) VALUES ('1', '1', 'nickname', 'admin');
 INSERT INTO wp_usermeta ( umeta_id,user_id,meta_key,meta_value) VALUES ('2', '1', 'rich_editing', 'true');
 INSERT INTO wp_usermeta ( umeta_id,user_id,meta_key,meta_value) VALUES ('3', '1', 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}');
 INSERT INTO wp_usermeta ( umeta_id,user_id,meta_key,meta_value) VALUES ('4', '1', 'wp_user_level', '10');
DROP TABLE IF EXISTS wp_users;
CREATE TABLE wp_users (  
  ID   bigint(20) unsigned not null   auto_increment,
  user_login   varchar(60) not null   ,
  user_pass   varchar(64) not null   ,
  user_nicename   varchar(50) not null   ,
  user_email   varchar(100) not null   ,
  user_url   varchar(100) not null   ,
  user_registered   datetime default '0000-00-00 00:00:00' not null   ,
  user_activation_key   varchar(60) not null   ,
  user_status   int(11) default '0' not null   ,
  display_name   varchar(250) not null   ,
 PRIMARY KEY (ID),
 KEY user_login_key (user_login),
 KEY user_nicename (user_nicename)
);

 INSERT INTO wp_users ( ID,user_login,user_pass,user_nicename,user_email,user_url,user_registered,user_activation_key,user_status,display_name) VALUES ('1', 'admin', '22fdc61ee9a02ec94bf06cc90b42b74d', 'admin', 'anacnogueira@gmail.com', 'http://', '2008-03-19 11:35:50', '5201b8ec', '0', 'admin');
