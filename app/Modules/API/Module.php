<?php

namespace App\Modules\API;


class Module
{
    const NAME = 'API';

    public static function getPathModule() {
        return __DIR__ . '/../' . self::NAME;
    }

    public static function getControllers() {
        return realpath(__DIR__ . '/Http/Controller');
    }

    public static function getNameSpace() {
        return __NAMESPACE__;
    }

}