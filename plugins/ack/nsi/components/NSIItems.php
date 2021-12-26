<?php namespace Ack\Nsi\Components;

use Cms\Classes\ComponentBase;
use Ack\Nsi\Models\Item;


/**
 * NSIItems Component
 */
class NSIItems extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Список элементов НСИ',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['nsi_items'] = Item::get();
    }
}
