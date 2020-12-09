<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Editor extends  Authenticatable
{
    use Notifiable;
    protected $guard = 'editor';
    protected $fillable = ['name','email','password'];


}
