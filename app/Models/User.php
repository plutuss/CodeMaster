<?php

declare(strict_types=1);

namespace App\Models;

use Plutuss\CodeMaster\Auth\UserInterface;
use Plutuss\CodeMaster\Model\Model;

class User extends Model implements UserInterface, BaseModelInterface
{

    protected array $fillable = [
        'id',
        'email',
        'password',
        'username',
    ];




}