<?php namespace Ack\Nsi;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()

    {
        return [            
            'Ack\Nsi\Components\NSIItems' => 'NSIItems',
        ];
    }

    public function registerSettings()
    {
    }
}
