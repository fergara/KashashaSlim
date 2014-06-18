CREATE TABLE [Estado](
[EstadoId] [tinyint] NOT NULL,
[Sigla] [char](2) NOT NULL,
CONSTRAINT [PK_Estado] PRIMARY KEY ([EstadoId])
)

GO

CREATE TABLE Cidade(
CidadeId int(10) NOT NULL,
Nome varchar(38) NOT NULL,
EstadoId int(10) NULL,
Capital bit NOT NULL,
CONSTRAINT PK_Cidade PRIMARY KEY (CidadeId)
)

INSERT INTO Estado (EstadoId,Sigla) VALUES (1,'AC');
INSERT INTO Estado (EstadoId,Sigla) VALUES (2,'AL');
INSERT INTO Estado (EstadoId,Sigla) VALUES (3,'AM');
INSERT INTO Estado (EstadoId,Sigla) VALUES (4,'AP');
INSERT INTO Estado (EstadoId,Sigla) VALUES (5,'BA');
INSERT INTO Estado (EstadoId,Sigla) VALUES (6,'CE');
INSERT INTO Estado (EstadoId,Sigla) VALUES (7,'DF');
INSERT INTO Estado (EstadoId,Sigla) VALUES (8,'ES');
INSERT INTO Estado (EstadoId,Sigla) VALUES (9,'GO');
INSERT INTO Estado (EstadoId,Sigla) VALUES (10,'MA');
INSERT INTO Estado (EstadoId,Sigla) VALUES (11,'MG');
INSERT INTO Estado (EstadoId,Sigla) VALUES (12,'MS');
INSERT INTO Estado (EstadoId,Sigla) VALUES (13,'MT');
INSERT INTO Estado (EstadoId,Sigla) VALUES (14,'PA');
INSERT INTO Estado (EstadoId,Sigla) VALUES (15,'PB');
INSERT INTO Estado (EstadoId,Sigla) VALUES (16,'PE');
INSERT INTO Estado (EstadoId,Sigla) VALUES (17,'PI');
INSERT INTO Estado (EstadoId,Sigla) VALUES (18,'PR');
INSERT INTO Estado (EstadoId,Sigla) VALUES (19,'RJ');
INSERT INTO Estado (EstadoId,Sigla) VALUES (20,'RN');
INSERT INTO Estado (EstadoId,Sigla) VALUES (21,'RO');
INSERT INTO Estado (EstadoId,Sigla) VALUES (22,'RR');
INSERT INTO Estado (EstadoId,Sigla) VALUES (23,'RS');
INSERT INTO Estado (EstadoId,Sigla) VALUES (24,'SC');
INSERT INTO Estado (EstadoId,Sigla) VALUES (25,'SE');
INSERT INTO Estado (EstadoId,Sigla) VALUES (26,'SP');
INSERT INTO Estado (EstadoId,Sigla) VALUES (27,'TO');