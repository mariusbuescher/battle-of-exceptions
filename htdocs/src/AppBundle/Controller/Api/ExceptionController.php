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
                    'severity' => 'ERROR'
                ],
                [
                    'project' => 'Test 2',
                    'message' => 'This is another test exception',
                    'severity' => 'ERROR'
                ],
                [
                    'project' => 'Test 2',
                    'message' => 'This is another test exception',
                    'severity' => 'ERROR'
                ],
                [
                    'project' => 'Test 2',
                    'message' => 'This is another test exception',
                    'severity' => 'ERROR'
                ],
                [
                    'project' => 'Test',
                    'message' => 'This a test warning',
                    'severity' => 'WARN'
                ],
                [
                    'project' => 'Test 2',
                    'message' => 'This is another warning',
                    'severity' => 'WARN'
                ]
            ]
        ]);
    }
}
