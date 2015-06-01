

CREATE TABLE club (
    nom_club character varying(20) NOT NULL
);



insert into club values('Dramateck');
insert into club values('Polycook');
insert into club values('Polytimes');
insert into club values('Polybeats');
insert into club values('Musiteck');
insert into club values('Polypix');
insert into club values('Polypop');


ALTER TABLE ONLY club
    ADD CONSTRAINT club_pkey PRIMARY KEY (nom_club);


