INSERT INTO cities (name, state)
SELECT C.Nome, E.Sigla from Cidade C
inner join Estado E
on C.EstadoId = E.EstadoId;