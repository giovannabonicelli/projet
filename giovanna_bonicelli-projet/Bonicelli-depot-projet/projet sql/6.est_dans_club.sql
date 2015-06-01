

CREATE OR REPLACE FUNCTION est_dans_club()
  RETURNS trigger AS
$BODY$
declare
nb integer;
begin 
	select count(*) into nb from participe
	where participe.ine= new.ine;
	if nb=0 then raise exception '% ne fait pas partie d un club',new.ine;
	end if;
	return null;
end;
$BODY$
  LANGUAGE plpgsql VOLATILE;

create trigger est_dans_club
after
insert on coopere
for each row
execute procedure est_dans_club();