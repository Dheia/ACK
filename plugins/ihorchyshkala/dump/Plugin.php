<?php

namespace IHORCHYSHKALA\Dump;

use Illuminate\Support\Debug\Dumper;
use Symfony\Component\VarDumper\VarDumper as VarDumper;
use Illuminate\Foundation\Application as Laravel;
use System\Classes\PluginBase;

/**
 * Dump Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Twig Dump + with Laravel 6 support',
            'description' => 'Twig function d() that recursively dump passed variables only if app.debug is true',
            'author'      => 'IHORCHYSHKALA',
            'icon'        => 'icon-code'
        ];
    }

    /**
     * Register new Twig function
     *
     * @return array
     */
    public function registerMarkupTags()
    {
        $d = function () {
            echo '';
        };
        if (\Config::get('app.debug') === true) {
            $d = function () {
                array_map(function ($x) {
                    if (explode(".", Laravel::VERSION)[0] < 6) {
                        (new Dumper)->dump($x);
                    } else {
                        (new VarDumper)->dump($x);
                    }
                }, func_get_args());
            };
        }
        return [
            'functions' => [
                'd' => $d
            ]
        ];
    }
}
