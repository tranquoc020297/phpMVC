<?php
require_once('libs/autoload.php');
if(!Session::has('auth')):
    header("location:".route('auth','login'));
elseif(Session::get('auth')->role != 1):
    header("location:".route('page','index'));
endif;
class AdminController extends Controller{
    public function index(){
        return $this->view('modules.table','admin.dashdoard');
    }
    public function products(){
        return $this->view('product.index','admin.dashdoard');
    }
    public function producttypes(){
        return $this->view('product_type.index','admin.dashdoard');
    }
    public function factories(){
        return $this->view('factory.index','admin.dashdoard');
    }
    public function users(){
        return $this->view('user.index','admin.dashdoard');
    }
    public function usertypes(){
        return $this->view('user_type.index','admin.dashdoard');
    }
    public function showProduct(){
      $item =  Product::find($_POST['id']);
      print_r(json_encode($item));
    }
    public function saveProduct(){
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
    // public function login(){
    //     return $this->view('admin.user.login',null);
    // }
    public function showUser(){
        $item = User::find($_POST['id']);
        print_r(json_encode($item));
    }
    public function saveUser(){
        $user = new User;
        $user->FromJson($_POST['usr']);
        if($user->save()){
            echo '0';
            return;
        }
        echo '1';
    }
    public function bills(){
        return $this->view('bill.index','admin.dashdoard');
    }
}