<?php

declare(strict_types=1);

namespace App\Models;

use Plutuss\SauceCore\Auth\UserInterface;
use Plutuss\SauceCore\Model\Model;

class User extends Model implements UserInterface, BaseModelInterface
{

    protected array $fillable = [
        'id',
        'email',
        'password',
        'username',
    ];




}