<?php

declare(strict_types=1);

namespace App\View;

use Plutuss\CodeMaster\View\ViewBladeDirective;
use Plutuss\CodeMaster\View\ViewBladeDirectiveInterface;

class Directive extends ViewBladeDirective implements ViewBladeDirectiveInterface
{

    public function handler(): void
    {
        $this->directive('route', function ($expression) {
            return "<?php route($expression) ?>";
        });
    }
}