create table type (
    id int primary key auto_increment,
    intitule varchar(100)
);

create table client (
    id int primary key auto_increment,
    numero varchar(20) unique ,
    id_type int references type(id)
);

create table service (
    id int primary key auto_increment,
    intitule varchar(100),
    duree time not null,
    prix double
);

create table slot (
    id int primary key auto_increment,
    intitule varchar(100)
);

create table reservation (
    id int primary key auto_increment,
    date_heure_debut datetime,
    date_heure_fin datetime,
    id_service int references service(id),
    id_slot int references slot(id),
    id_client int references client(id)
);

insert into type (intitule) values ('legere'),('4x4'),('utilitaire');
