<?php
require_once('libs/autoload.php');
class AdminController extends Controller{
    public function index(){
        return $this->view('modules.table','admin.dashdoard');
    }
    public function products(){
        return $this->view('product.index','admin.dashdoard');
    }
    public function types(){
        return $this->view('product_type.index','admin.dashdoard');
    }
    public function factories(){
        return $this->view('factory.index','admin.dashdoard');
    }
    public function show(){
      $item =  Product::find($_POST['id']);
      print_r(json_encode($item));
    }
    public function save(){
        $product = new Product;
        $product->FromJson($_POST['sp']);
        if(!$product->MaSP)
            $product->NgayNhap = date('Y-m-d H:i:s');
        if($product->save()){
            echo "0";
            return;
        }
        echo "1";
    }
    public function login(){
        return $this->view('admin.user.login',null);
    }
}