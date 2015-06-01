
CREATE TABLE participe (
    ine character varying(11) NOT NULL,
    nom_club character varying(20) NOT NULL
);




ALTER TABLE ONLY participe
    ADD CONSTRAINT fk_ev FOREIGN KEY (ine) REFERENCES etudiant(ine);


