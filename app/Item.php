<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	public $timestamps = false;

    protected $table = 'itens';
	protected $primary_key = 'id';
	
	protected $cliente_id;
	protected $nome;
	protected $preco;
	protected $preco_BRL; 	//Preço em formato BRL: R$10,2
	protected $codigo;
	
	public function __get($key)
	{
		switch($key){
			case 'preco_BRL':
				$attribute = $this->toBRL(parent::__get('preco'));
				break;
			default:
				$attribute = parent::__get($key);
		}
		
		return $attribute;
	}
	
	public static function toBRL($preco)
	{
		return "R$".number_format($preco, 2, ',', ' ');
	}
}
