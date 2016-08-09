<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 17/01/16
 * Time: 22:19
 */

namespace CrocCroc\Container\Service;

use CrocCroc\Container\Base\ContainerInterface;


trait ServiceTrait {
    
    protected $injector;

    /**
     * @return ContainerInterface
     */
    public function getInjector() {
        return $this->injector;
    }

    /**
     * @param ContainerInterface $injector
     * @return ServiceInterface $this
     */
    public function setInjector(ContainerInterface $injector) {
        $this->injector = $injector;
        return $this;
    }

}