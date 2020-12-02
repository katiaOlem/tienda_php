create table productos(
    id_producto integer primary key Autoincrement,
    producto varchar (300) not null,
    precio float not null,
    registrados integer not null
);

INSERT INTO productos (producto, precio, registrados) VALUES ( "ID 895516 Jeans Ciclon ", 395, 55 );
INSERT INTO productos (producto, precio, registrados) VALUES ( " ID 960737 Blusa Zara ", 295, 100 );
INSERT INTO productos (producto, precio, registrados) VALUES ( " ID 960738 Chamarra Been", 425 ,30 );
INSERT INTO productos (producto, precio, registrados) VALUES ( " ID 879794 Playera Nike", 999, 20 );
INSERT INTO productos (producto, precio, registrados) VALUES ( " ID 895492 Jeans Fergino", 550 , 10 );
INSERT INTO productos (producto, precio, registrados) VALUES ( " ID 892803 Blusa Puma", 1000 , 15 );
INSERT INTO productos (producto, precio, registrados) VALUES ( " ID 892805 Chamarra b&o",950 , 10 );
INSERT INTO productos (producto, precio, registrados) VALUES ( " ID 9500057 Playera Nip",300 , 20 );


create table ticket (
	id_ticket integer primary key Autoincrement,
    fecha date() NOT NULL ,
    hora_venta time() NOT NULL ,
    cantidad_producto  NOT NULL ,
    producto varchar ( 100 ) NOT NULL ,
    total_producto varchar (100) NOT NULL

    insert into ticket (fecha, hora_venta , catidad_producto, poducto, total_producto) values (date (), time(), 2 , "ID 895492 Jeans Fergino" , 1100);
);