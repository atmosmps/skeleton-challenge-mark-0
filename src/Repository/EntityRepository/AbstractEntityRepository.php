<?php

namespace App\Repository\EntityRepository;

use Doctrine\DBAL\Connection;

/**
 * Provides common features needed in Repositorys.
 *
 * @package App\Repository
 */
class AbstractEntityRepository
{
    protected $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function createProcedureFirstInsert()
    {
        $sql = "
            create procedure first_insert()
            BEGIN
                INSERT INTO social_program (nome_programa)
                VALUES  ('Bolsa Família'),
                        ('Renda cidadã'),
                        ('Minha casa minha vida');
                
                INSERT INTO familia (programa_social_id, estado, cidade, bairro, cep, logradouro, num_logradouro)
                values  (1, 'Maranhão', 'São Luis', 'São Cristóvão', 65057740, 'Rua 1', 1),
                        (2, 'Maranhão', 'Santa Inês', 'São Domingos', 65066740, 'Rua 3', 3),
                        (3, 'Maranhão', 'Bacabal', 'Bacabeira', 65057000, 'Rua 3', 3);
            
                INSERT INTO pessoa (familia_id, nome, sexo, data_nascimento, naturalidade, cpf, rg, estado_civil)
                VALUES  (1, 'João da Silva', 'M', '1995-06-22', 'Brasileiro', '58226715008', '308031994','solteiro'),
                        (1, 'Maria da Silva', 'F', '1991-07-12', 'Brasileira', '45117272013', '410572366','casada'),
                        (1, 'Henrique da Silva', 'M', '2010-01-10', 'Brasileiro', '88612751098','191925639','solteiro'),
                        (2, 'Daniel de Souza ', 'M', '1986-07-20', 'Brasileiro', '73556689006', '243680648','casado'),
                        (2, 'Gabriela de Souza', 'M', '1982-06-23', 'Brasileira', '26241701037', '174829553','casada'),
                        (2, 'Michele de Souza', 'M', '1993-03-13', 'Brasileira', '03432824025', '486034495','solteira'),
                        (2, 'Ana de Souza', 'M', '1990-10-27', 'Brasileira', '02498380019', '335002493','casada'),
                        (3, 'Juliana Peres', 'M', '1976-11-12', 'Brasileira', '18522575045', '270381508','solteira'),
                        (3, 'Paulo Peres', 'M', '1989-01-11', 'Brasileiro', '59697662088', '485824541','solteiro'),
                        (3, 'João Carlos Amorim', 'M', '1996-03-10', 'Brasileiro', '79159458070', '165404759','solteiro');
            END
        ";

        $sqlProcessing = $this->connection->prepare($sql);

        try {
            $sqlProcessing->execute();
        } catch (\Exception $exception) {
            $exception->getMessage();
        }

        if (isset($exception)) {
            return ["failure" => "Houve um erro na inserção da informação."];
        }

        return true;
    }

    public function callProcedureFirstInsert()
    {
        $sql = "call first_insert();";

        $sqlProcessing = $this->connection->prepare($sql);

        try {
            $sqlProcessing->execute();
        } catch (\Exception $exception) {
            $exception->getMessage();
        }

        if (isset($exception)) {
            return ["failure" => "Houve um erro na inserção da informação."];
        }

        return true;
    }
}
