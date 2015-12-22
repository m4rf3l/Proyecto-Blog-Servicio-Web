CREATE TABLE IF NOT EXISTS `entradas` (
	`id` int (10) NOT NULL AUTO_INCREMENT,
	`titulo` varchar (60) NOT NULL,
	`autor` varchar (30) NOT NULL,
	`fecha` date NOT NULL,
	`contenido` varchar (500) NOT NULL
	PRIMARY KEY (id)
);