<?php

namespace Pyz\Yves\Application\Plugin\Provider;

use Spryker\Shared\Kernel\Store;
use Spryker\Yves\Application\Plugin\Provider\YvesControllerProvider as SprykerYvesControllerProvider;

abstract class AbstractYvesControllerProvider extends SprykerYvesControllerProvider
{

    /**
     * @return string
     */
    public function getAllowedLocalesPattern()
    {
        $systemLocales = Store::getInstance()->getLocales();
        $implodedLocales = implode('|', array_keys($systemLocales));
        $allowedLocalesPattern = '(' . $implodedLocales . ')\/';

        return $allowedLocalesPattern;
    }

}