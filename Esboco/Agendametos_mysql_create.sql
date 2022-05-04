CREATE TABLE `Agendamento` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`id_cliente` INT NOT NULL,
	`id_tecnico` INT NOT NULL,
	`id_atendentes` INT NOT NULL DEFAULT true,
	`id_servicos` INT NOT NULL,
	`data_hora_prevista` DATETIME NOT NULL,
	`data_hora_realizada` DATETIME NOT NULL,
	`status_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Cliente` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`cpf` INT NOT NULL,
	`endereco` varchar(255) NOT NULL,
	`contato` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Tecnico` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`equipe` varchar(255) NOT NULL,
	`cargo` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Atendentes` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`funcao` varchar(255) NOT NULL,
	`setor` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Situacao_agendamento` (
	`id_situacao_agendamento` INT NOT NULL,
	`nova` varchar(255) NOT NULL,
	`agendado` varchar(255) NOT NULL,
	`em_andamento` varchar(255) NOT NULL,
	`finalizado` varchar(255) NOT NULL,
	PRIMARY KEY (`id_situacao_agendamento`)
);

CREATE TABLE `Servicos` (
	`id_servicos` INT NOT NULL,
	`descricao_servicos` varchar(255) NOT NULL,
	`ativo` BOOLEAN(255) NOT NULL,
	PRIMARY KEY (`id_servicos`)
);

CREATE TABLE `Servico_do_agendamento` (
	`id_servico_do_agendamento` INT NOT NULL AUTO_INCREMENT,
	`id_agendamento` INT NOT NULL,
	`id_servicos` INT NOT NULL,
	PRIMARY KEY (`id_servico_do_agendamento`)
);

ALTER TABLE `Agendamento` ADD CONSTRAINT `Agendamento_fk0` FOREIGN KEY (`id_cliente`) REFERENCES `Cliente`(`id`);

ALTER TABLE `Agendamento` ADD CONSTRAINT `Agendamento_fk1` FOREIGN KEY (`id_tecnico`) REFERENCES `Tecnico`(`id`);

ALTER TABLE `Agendamento` ADD CONSTRAINT `Agendamento_fk2` FOREIGN KEY (`id_atendentes`) REFERENCES `Atendentes`(`id`);

ALTER TABLE `Agendamento` ADD CONSTRAINT `Agendamento_fk3` FOREIGN KEY (`id_servicos`) REFERENCES `Servicos`(`id_servicos`);

ALTER TABLE `Agendamento` ADD CONSTRAINT `Agendamento_fk4` FOREIGN KEY (`status_id`) REFERENCES `Situacao_agendamento`(`id_situacao_agendamento`);

ALTER TABLE `Servico_do_agendamento` ADD CONSTRAINT `Servico_do_agendamento_fk0` FOREIGN KEY (`id_agendamento`) REFERENCES `Agendamento`(`id`);

ALTER TABLE `Servico_do_agendamento` ADD CONSTRAINT `Servico_do_agendamento_fk1` FOREIGN KEY (`id_servicos`) REFERENCES `Servicos`(`id_servicos`);








