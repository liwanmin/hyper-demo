<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use App\Interfaces\CalculatorServiceInterface;
use App\JsonRpc\Provider\CalculatorService;
use Hyperf\Utils\Context;
use Psr\Container\ContainerInterface;

class IndexController extends Controller
{


    public function index(CalculatorServiceInterface $calculatorService)
    {
        var_dump(3);
//        $user = $this->request->input('user', 'Hyperf');
//        $method = $this->request->getMethod();
        $res =  $calculatorService->add(1,1);

var_dump(4);
        return [
//            'method' => $res,
            'res' =>     Context::get('auth_user'),
//            'message' => "Hello {$user}.",
        ];
    }
}
