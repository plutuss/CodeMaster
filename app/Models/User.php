<?php

declare(strict_types=1);

namespace App\Models;

use Plutuss\CodeMaster\Model\Model;

class User extends Model implements BaseModelInterface
{

    /**
     * @var array|string[]
     */
    protected array $fillable = [
        'id',
        'email',
        'password',
        'username',
    ];


}