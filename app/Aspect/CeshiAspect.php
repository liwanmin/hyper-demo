<?php

declare(strict_types=1);

namespace App\Aspect;

use Hyperf\Di\Annotation\Aspect;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\Utils\Context;

/**
 * @Aspect
 */
class CeshiAspect extends AbstractAspect
{
    /**
     * @Inject
     * @var RequestInterface
     */
    public $request;


    /**
     * 切入的类
     *
     * @var array
     */
    public $classes = [
        'App\Controller\IndexController',
    ];


    /**
     * @param ProceedingJoinPoint $proceedingJoinPoint
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        var_dump(134);

        $gradeId = data_get($proceedingJoinPoint->getArguments(), 0);


        Context::set('auth_user', 222222);
var_dump(666666);
        $result = $proceedingJoinPoint->process();

        var_dump(55555555);
        return $result;
    }
}
