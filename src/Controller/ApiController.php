<?php declare(strict_types=1);

namespace App\Controller;

use App\Service\ArraySorter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController
{

    /**
     * @var ArraySorter
     */
    private $arraySorter;

    public function __construct(ArraySorter $arraySorter)
    {
        $this->arraySorter = $arraySorter;
    }


    /**
     * @Route("/sort", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function sortedArray(Request $request): JsonResponse
    {
        $content = $request->getContent();
        $randomArray =json_decode($content, true);
        $sortedArray = $this->arraySorter->sorter($randomArray['array']);
        return new JsonResponse($sortedArray);
    }
}