CREATE OR REPLACE FUNCTION etud_coopere()
  RETURNS trigger AS
$BODY$
declare
nb integer;
begin 
	select count(*) into nb from coopere
	where coopere.ine= old.ine;
	if nb<>0 then raise exception '% participe a un evenement',old.ine;
	end if;
	return null;
end;
$BODY$
    LANGUAGE plpgsql VOLATILE;
 
create trigger etud_coopere
after
delete on participe
for each row
execute procedure etud_coopere();

