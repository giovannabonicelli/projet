

CREATE TABLE evenement (
    numero_ev integer NOT NULL,
    nom_ev character varying(20),
    heure time without time zone,
    date date,
    lieu character varying(20)
);



ALTER TABLE ONLY evenement
    ADD CONSTRAINT evenement_pkey PRIMARY KEY (numero_ev);


insert into evenement values (1,'semaine des clubs','09:30','2015-10-22','terrasse Polytech');
insert into evenement values (2,'Telethon','08:00','2015-12-01','Place de la Comedie');
insert into evenement values (3,'spectacle de noël','19:00','2015-12-19','Um2 amphi 05');
insert into evenement values (4,'festival de musique','09:30','2016-03-10','terrasse Polytech');
insert into evenement values (5,'defistop','17:30','2015-03-25','terrasse Polytech');
insert into evenement values (6,'spectacle final','19:00','2015-05-05','Um2 amphi 05');

