<?php

class Factory{
    public $MaHangSX;
    public $TenHangSX;
    public $HinhHangSX;
    public $BiXoa;

    public function save(){
        if(!$this->MaLoaiSP)
            $sql = "INSERT INTO hangsanxuat VALUES(null,'$this->TenHangSX','$this->HinhHangSX','$this->BiXoa')";
        else
            $sql = "UPDATE hangsanxuat SET TenHangSanXuat = '$this->TenHangSX', LogoURL = '$this->HinhHangSX', BiXoa = $this->BiXoa
                    WHERE MaHangSanXuat = $this->MaHangSanXuat";
        if(Provider::ExecuteNonQuery($sql))
            return true;
    }

    public function delete(){
        $sql = "DELETE FROM hangsanxuat WHERE MaHangSanXuat = $this->MaHangSX";
        if(Provider::ExecuteNonQuery($sql))
            return true;
    }

    public function find($id){
        $sql = "SELECT TenHangSanXuat,LogoURL FROM hangsanxuat WHERE MaHangSanXuat = $id AND BiXoa = FALSE LIMIT 1";
        if($data = Provider::ExecuteQuery($sql)){
            $item = new Factory;
            while($row = mysqli_fetch_array($data)){
                $item->TenHangSX = $row['TenHangSanXuat'];
                $item->HinhHangSX = $row['LogoURL'];
            }
            return $item;
        }
    }

    public static function all(){
        $sql = "SELECT NSX.MaHangSanXuat,NSX.TenHangSanXuat,NSX.LogoURL
                FROM hangsanxuat NSX
                WHERE NSX.BiXoa = FALSE";
        if($data = Provider::ExecuteQuery($sql))
            return self::convert($data);
    }

    static function convert($data){
        $result = array();
        while($row = mysqli_fetch_array($data)){
            $item = new Factory;
            $item->MaHangSX = $row['MaHangSanXuat'];
            $item->TenHangSX = $row['TenHangSanXuat'];
            $item->HinhHangSX = $row['LogoURL'];
            $result[] = $item;
        }
        return $result;
    }
}