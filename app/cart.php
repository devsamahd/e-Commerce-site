<?php 
namespace App;


class cart
{
	public $items= null;
	public $totalQty=0;
	public $totalprice=0;

	public function __construct($oldcart){
		if ($oldcart) {
			$this->items = $oldcart->items;
			$this->totalQty = $oldcart->totalQty;
			$this->totalprice = $oldcart->totalprice;
		}
	}

	public function add($item, $id){
		$storedItem = ['qty' => 0, 'price' => $this->totalprice, 'item' => $item];
		if ($this->items) {
			if (array_key_exists($id, $this->items)) {
				$storedItem= $this->items[$id];
			}
		}
		$storedItem['qty']++;
		$storedItem['price'] = $item->price * $storedItem['qty'];
		$this->items[$id] = $storedItem;
		$this->totalQty ++;
		$this->totalprice += $item->price;
	}	   
}
