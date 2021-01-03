<?php

namespace App\Models\User;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{

    use \Illuminate\Auth\Authenticatable;
    use HasFactory;
}
