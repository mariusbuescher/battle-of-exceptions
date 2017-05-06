<?php declare(strict_types = 1);

namespace AppBundle\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ExceptionController extends Controller
{
    /**
     * @Route("/api/exception", name="exception_api")
     * @param Request $request
     * @return JsonResponse
     */
    public function indexAction(Request $request)
    {
        return new JsonResponse([
            'exceptions' => [
                [
                    'project' => 'Test',
                    'exceptions' => [
                        [
                            'datetime' => '2017-05-05T16:24:00'
                        ],
                        [
                            'datetime' => '2017-05-05T14:58:10'
                        ]
                    ]
                ],
                [
                    'project' => 'Test 2',
                    'exceptions' => [
                        [
                            'datetime' => '2017-05-05T16:23:25'
                        ],
                        [
                            'datetime' => '2017-05-05T15:13:12'
                        ],
                        [
                            'datetime' => '2017-05-05T15:08:46'
                        ]
                    ]
                ]
            ]
        ]);
    }
}
