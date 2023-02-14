<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'UserName';
    public $timestamps = false;
}
