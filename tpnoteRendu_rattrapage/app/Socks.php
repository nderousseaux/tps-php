<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socks extends Model
{
    protected $table = 'socks';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $timestamps = false;
}
