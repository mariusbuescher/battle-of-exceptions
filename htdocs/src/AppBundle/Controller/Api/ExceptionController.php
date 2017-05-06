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
                    'message' => 'This is an test exception',
                    'severity' => 'ERROR',
                    'datetime' => '2017-05-05T16:24:00'
                ],
                [
                    'project' => 'Test 2',
                    'message' => 'This is another test exception',
                    'severity' => 'ERROR',
                    'datetime' => '2017-05-05T16:23:25'
                ],
                [
                    'project' => 'Test 2',
                    'message' => 'This is another test exception',
                    'severity' => 'ERROR',
                    'datetime' => '2017-05-05T15:13:12'
                ],
                [
                    'project' => 'Test 2',
                    'message' => 'This is another warning',
                    'severity' => 'WARN',
                    'datetime' => '2017-05-05T15:08:46'
                ],
                [
                    'project' => 'Test',
                    'message' => 'This a test warning',
                    'severity' => 'WARN',
                    'datetime' => '2017-05-05T14:58:10'
                ]
            ]
        ]);
    }
}
