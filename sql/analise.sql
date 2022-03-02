use contas;
drop table analise;
create table analise as (
	select *,
    case
		when QtdParc > 1 Then 'Parcelado'
        else 'A vista'
	end as flag_prazo,
    case
		when QtdParc = nParc then 'Final'
        when nParc = 1 then 'Inicial'
        else 'Parcial'
	end as Parcial,
    case 
		when nParc = 1 then Valor
	end as vl_total
    from lancamentos
);
select * from analise;
