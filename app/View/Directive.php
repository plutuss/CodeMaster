<?php

declare(strict_types=1);

namespace App\View;

use Plutuss\SauceCore\View\ViewBladeDirective;
use Plutuss\SauceCore\View\ViewBladeDirectiveInterface;

class Directive extends ViewBladeDirective implements ViewBladeDirectiveInterface
{

    public function handler()
    {
        $this->directive('route',function($expression){
            return "<?php route($expression) ?>";
        });
    }
}