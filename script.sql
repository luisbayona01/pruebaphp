

 create   database  pruebaluisbayona;
 
 use pruebaluisbayona; 
  
DROP TABLE IF EXISTS `goods`;
CREATE TABLE IF NOT EXISTS `goods` (
  `idGoods` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `Description` longtext,
  `Value` decimal(10,0) DEFAULT NULL,
  `Idusers` int(11) DEFAULT NULL,
  PRIMARY KEY (`idGoods`),
  KEY `Idusers_idx` (`Idusers`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `IdUsers` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Cedula` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdUsers`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;



ALTER TABLE `goods`
  ADD CONSTRAINT `Idusers` FOREIGN KEY (`Idusers`) REFERENCES `users` (`IdUsers`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

create     view   usersGoods as
select U.Nombre  as Username,U.email as Email ,U.direccion as DireccionUsuario,  U.Idusers as Iduser, G.idGoods as Idgoods, G.Name as Goods, G.Description, G.value 
from   Users U   left join  Goods G   on G.Idusers= U.Idusers 

