<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 16/01/16
 * Time: 08:24
 */

namespace CrocCroc\Container\Service;

use CrocCroc\Container\Base\ContainerInterface;

/**
 * Interface ServiceInterface
 * @package CrocCroc\Injector\Service
 */
interface ServiceInterface {
    /**
     * @return ContainerInterface
     */
    public function getInjector();

    /**
     * @param ContainerInterface $injector
     * @return ServiceInterface $this
     */
    public function setInjector(ContainerInterface $injector);

    /**
     *
     *
     * @return mixed
     */
    public function delegateConstructor() ;

}