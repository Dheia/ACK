<?php namespace Ack\OurPractices;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [            
            'Ack\OurPractices\Components\Practices' => 'Practices',
        ];
    }

    public function registerSettings()
    {
    }
}
