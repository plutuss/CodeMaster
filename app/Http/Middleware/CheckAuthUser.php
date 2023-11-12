<?php

declare(strict_types=1);


namespace App\Http\Middleware;

use Plutuss\SauceCore\Http\Middleware\AbstractMiddleware;

class CheckAuthUser extends AbstractMiddleware
{

    public function handle(): void
    {
        if (!$this->auth->check()) {
            $this->redirect->to('/login');
        }
    }
}