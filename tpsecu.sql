create database tpsecu;
use tpsecu;
create table evenement(
    id_event int auto_increment primary key not null,
    nom_event varchar(50),
    desc_event text,
    date_event datetime,
    id_type int null
);
create table utilisateur(
	id_util int primary key auto_increment not null,
    name_util varchar(50) not null,
    first_name_util varchar(50) not null,
    mail_util varchar(50) not null,
	pwd_util varchar(100) not null,
    id_role int,
    valide_util tinyint(1),
    token_util varchar(100)
)Engine=InnoDB;
create table role(
	id_role int primary key auto_increment not null,
    name_role varchar(50) not null
)Engine=InnoDB;
create table type(
	id_type int primary key auto_increment not null,
    name_type varchar(50) not null
)Engine=InnoDB;
alter table utilisateur
add constraint fk_attribuer_role
foreign key(id_role)
references role(id_role);
alter table evenement
add constraint fk_affecter_type
foreign key(id_type)
references type(id_type);

INSERT INTO `tpsecu`.`type` (`name_type`) VALUES ('concert');
INSERT INTO `tpsecu`.`type` (`name_type`) VALUES ('spectacle');
INSERT INTO `tpsecu`.`type` (`name_type`) VALUES ('vernissage');

INSERT INTO `tpsecu`.`role` (`name_role`) VALUES ('utilisateur');
INSERT INTO `tpsecu`.`role` (`name_role`) VALUES ('administrateur');
