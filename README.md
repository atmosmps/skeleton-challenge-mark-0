### Script para a inserção inicial de dados na tabela

```
INSERT INTO social_program (id, nome_programa)
VALUES  (1, 'Bolsa Família'),
		(2, 'Renda cidadã'),
		(3, 'Minha casa minha vida');

INSERT INTO familia (id, programa_social_id, estado, cidade, bairro, cep, logradouro, num_logradouro)
values  (1, 1, 'Maranhão', 'São Luis', 'São Cristóvão', 65057740, 'Rua 1', 1),
		(2, 2, 'Maranhão', 'Santa Inês', 'São Domingos', 65066740, 'Rua 3', 3),
		(3, 3, 'Maranhão', 'Bacabal', 'Bacabeira', 65057000, 'Rua 3', 3);

INSERT INTO pessoa (id, familia_id, nome, sexo, data_nascimento, naturalidade, cpf, rg, estado_civil)
VALUES  (1, 1, 'João da Silva', 'M', '1995-06-22', 'Brasileiro', '58226715008', '308031994','solteiro'),
		(2, 1, 'Maria da Silva', 'F', '1991-07-12', 'Brasileira', '45117272013', '410572366','casada'),
		(3, 1, 'Henrique da Silva', 'M', '2010-01-10', 'Brasileiro', '88612751098','191925639','solteiro'),
		(4, 2, 'Daniel de Souza ', 'M', '1986-07-20', 'Brasileiro', '73556689006', '243680648','casado'),
		(5, 2, 'Gabriela de Souza', 'M', '1982-06-23', 'Brasileira', '26241701037', '174829553','casada'),
		(6, 2 , 'Michele de Souza', 'M', '1993-03-13', 'Brasileira', '03432824025', '486034495','solteira'),
		(7, 2, 'Ana de Souza', 'M', '1990-10-27', 'Brasileira', '02498380019', '335002493','casada'),
		(8, 3, 'Juliana Peres', 'M', '1976-11-12', 'Brasileira', '18522575045', '270381508','solteira'),
		(9, 3, 'Paulo Peres', 'M', '1989-01-11', 'Brasileiro', '59697662088', '485824541','solteiro'),
		(10, 3, 'João Carlos Amorim', 'M', '1996-03-10', 'Brasileiro', '79159458070', '165404759','solteiro');
```

### Procedure criada na Base de Dados

```
create or replace procedure delete_programa_social(table_id integer)
LANGUAGE SQL
AS $$
DELETE FROM public.social_program WHERE id = table_id;
$$;

call delete_programa_social(3);
```
