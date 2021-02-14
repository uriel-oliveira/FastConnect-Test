<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Cliente extends Model
{
    public $timestamps = false;
	
	protected $table = 'clientes';
	protected $primary_key = 'id';
	
	protected $nome;
	protected $telefone;
	protected $documento;
	protected $municipio;
	protected $uf;
	protected $cep;
	protected $rua;
	protected $complemento;
	
	public function findItens()
	{
		$this->Itens = Item::where('cliente_id',$this->id)->get();
		
		$this->Itens->quantidade = count($this->Itens);

		$preco_total = 0;
		foreach($this->Itens as $k => $Item){
			$preco_total += $Item->preco;
		}
		
		$this->Itens->preco_total_BRL = Item::toBRL($preco_total);
		return $this->Itens;
		
	}
}
