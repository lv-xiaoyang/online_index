<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    public $table="login";
    protected $primaryKey="id";
    public $timestamps = false;
}
