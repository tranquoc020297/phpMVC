<?php
class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;
	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}
	public function add($item, $id){
		$realprice = $item->promotion_price == 0 ? $item->unit_price: $item->promotion_price;
		$giohang = ['qty'=> 0, 'price' => $realprice, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty']++;
		$giohang['price'] = $realprice * $giohang['qty'];
		$this->items[$id] = $giohang;
		$this->totalQty++;
		$this->totalPrice += $realprice;
	}
	//get item[i] price
	public function itemPrice($item){
		return $item->GiaSP;
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->itemPrice($this->items[$id]['item']);
		$this->totalQty--;
		$this->totalPrice -= $this->itemPrice($this->items[$id]['item']);
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}