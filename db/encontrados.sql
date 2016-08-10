
CREATE TABLE encontrados (
  id_encontrados int NOT NULL auto_increment,
  num_solicitud int NOT NULL,
  num_registro varchar(20) NOT NULL,
  num_expediente varchar(20) NOT NULL,
  num_caja varchar(20) NOT NULL,
  num_tomo varchar(20) NOT NULL,
  num_libro varchar(20) NOT NULL,
  num_legajo varchar(20) NOT NULL,
  num_protocolo varchar(20) NOT NULL,
  num_escritura int NOT NULL,
  ini_folio varchar(20) NOT NULL,
  fin_folio varchar(20) NOT NULL,
  nom_buscador varchar(50) NOT NULL,
  observaciones varchar(255) NOT NULL,
  PRIMARY KEY(id_encontrados)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;
