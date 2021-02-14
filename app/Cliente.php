<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
	protected $primary_key = 'id';
	public $timestamps = false;
}
