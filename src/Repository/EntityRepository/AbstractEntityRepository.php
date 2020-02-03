<?php

namespace App\Repository\EntityRepository;

use Doctrine\DBAL\Connection;

/**
 * Provides common features needed in Repositorys.
 *
 * @package App\Repository
 */
abstract class AbstractEntityRepository
{
    protected $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }
}
