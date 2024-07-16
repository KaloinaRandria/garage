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

create table administrateur(
    id int primary key auto_increment,
    nom varchar(100),
    mail varchar(100),
    password varchar(100)
);

create table paiement(
    id int primary key  auto_increment,
    id_reservation int references reservation(id),
    date_paiement date
);

insert into administrateur (nom, mail, password) values ('hamael', 'hamael', 'hamael');

INSERT INTO client (numero, id_type) VALUES
('CLT001', 1),
('CLT002', 2),
('CLT003', 3),
('CLT004', 1),
('CLT005', 2),
('CLT006', 3),
('CLT007', 1),
('CLT008', 2),
('CLT009', 3);

INSERT INTO slot (intitule) VALUES ('a'),
                                   ('b'),
                                   ('c');

INSERT INTO reservation (date_heure_debut, date_heure_fin, id_service, id_slot, id_client) VALUES
('2024-07-15 09:00:00', '2024-07-15 10:00:00', 1, 1, 1),
('2024-07-15 10:30:00', '2024-07-15 12:30:00', 2, 1, 2),
('2024-07-15 13:00:00', '2024-07-15 14:30:00', 3, 2, 3),
('2024-07-16 09:00:00', '2024-07-16 10:00:00', 1, 1, 4),
('2024-07-16 10:30:00', '2024-07-16 12:30:00', 2, 1, 5),
('2024-07-16 13:00:00', '2024-07-16 14:30:00', 3, 2, 6),
('2024-07-17 09:00:00', '2024-07-17 10:00:00', 1, 1, 7),
('2024-07-17 10:30:00', '2024-07-17 12:30:00', 2, 1, 8),
('2024-07-17 13:00:00', '2024-07-17 14:30:00', 3, 3, 9);


