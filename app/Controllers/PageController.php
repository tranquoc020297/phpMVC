<?php
require_once('libs/autoload.php');

class PageController extends Controller{
    public function index(){
        return $this->view('page.home','master');
    }

    public function order(){
        return $this->view('page.order','master');
    }

    public function detail($id){
        $this->item = Product::find($id);
        $this->type = ProductType::find($this->item->MaLoaiSP);
        return $this->view('page.detail','master','item', 'type');
    }

    public function type($id){
        $this->types = Product::getByType($id);
        return $this->view('page.type','master','types');
    }

}