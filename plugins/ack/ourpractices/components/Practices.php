<?php namespace Ack\OurPractices\Components;

use Cms\Classes\ComponentBase;
use Ack\OurPractices\Models\Practice;
use Ack\OurPractices\Models\Category;


class Practices extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Практики',
            'description' => 'Показывает на странице все элементы из списка практик'
        ];
    }

    public function defineProperties()
    {
        return [
            'pageNumber' => [
                'title'       => 'Параметр постраничной навигации',
                'type'        => 'string',
                'default'     => '{{ :page }}',
            ],
            'slug' => [
                'title'       => 'slug',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
            'practicesPerPage' => [
                'title'             => 'Количество',
                'description' => 'Количество отображаемых элементов',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'default'           => '8',
            ],
            'type' => [
                'title'       => 'Тип вывода',
                'description' => 'Вывод списком или в виде карусели',
                'type'        => 'dropdown',
                'default'     => 'list',
                'options' => [
                    'list' => 'Список практик',
                    'category' => 'Категория',
                ],
            ],
        ];
    }

    /**
     * Parameter to use for the page number
     *
     * @var string
     */
    public $pageParam;

    public function onRun()
    {
        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
        $this->page['practices_type'] = $type = $this->getProperties()['type'];

        if ( $type == 'list' ) {
            
            $practices = Category::with('practices') -> get();
            $this->page['practices'] = $practices; 
            
        } elseif ( $type == 'category' )  {
            $category = $this->page['category'] = Category::where('slug', $this->property('slug'))->first();
            $practice_items = $this->page['practice_items'] = Practice::whereHas('categories', function($q)use($category){$q->where('category_id', $category->id);})->paginate($this->property('practicesPerPage'));
        }
    }
}
