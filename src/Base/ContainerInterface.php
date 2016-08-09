<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 15/01/16
 * Time: 21:54
 */

namespace CrocCroc\Container\Base;
use CrocCroc\Container\Factory\FactoryInterface;
use Interop\Container\ContainerInterface as PsrContainerInterface;

/**
 * Interface InjectorInterface
 * @package CrocCroc\Injector\Base
 */
interface ContainerInterface extends PsrContainerInterface , FactoryInterface {

    /**
     *
     *
     * @return ContainerInterface $this
     */
    public function unStoredNextObject();

}