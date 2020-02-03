<?php

namespace App\Controller;

use App\Repository\EntityRepository\ConfigDatabaseEntityRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ConfigDatabaseController extends ConfigDatabaseEntityRepository
{
    private $configDatabaseEntityRepository;

    public function __construct(ConfigDatabaseEntityRepository $configDatabaseEntityRepository)
    {
        $this->configDatabaseEntityRepository = $configDatabaseEntityRepository;
    }

    /**
     * @Route("/procedure/first/insert", methods={"POST"}, name="procedure_first_insert")
     */
    public function postAction(): JsonResponse
    {
        $createProcedure = $this->configDatabaseEntityRepository->createProcedureFirstInsert();

        if ($createProcedure == false) {
            return new JsonResponse(["failure" => "There was an error while creating the procedure."], 500);
        }

        $execProcedure = $this->configDatabaseEntityRepository->callProcedureFirstInsert();

        if ($execProcedure == false) {
            return new JsonResponse(["failure" => "There was an error while executing the procedure."], 500);
        }

        return new JsonResponse(["result" => "The procedure was created and successfully executed."], 200);
    }
}
