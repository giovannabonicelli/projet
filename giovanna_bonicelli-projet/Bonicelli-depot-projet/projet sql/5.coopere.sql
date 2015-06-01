
CREATE TABLE coopere (
    ine character varying(11) NOT NULL,
    numero_ev integer NOT NULL
);

ALTER TABLE ONLY coopere
    ADD CONSTRAINT coopere_pkey PRIMARY KEY (ine, numero_ev);


ALTER TABLE ONLY coopere
    ADD CONSTRAINT fk_etud FOREIGN KEY (ine) REFERENCES etudiant(ine);
    
ALTER TABLE ONLY coopere
    ADD CONSTRAINT fk_ev4 FOREIGN KEY (numero_ev) REFERENCES evenement(numero_ev);

