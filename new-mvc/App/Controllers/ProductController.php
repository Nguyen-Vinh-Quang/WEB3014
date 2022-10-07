<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController {
    public function getProducts(){
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.index';
        $data=[
            'name' => 'Iphone 14',
            'price' => 12000000,
            'array' => [
                'Xanh',
                'Do',
                'Tim',
                'Vang'
            ]
        ];
        return $this->render($viewName,$data);
}
public function dsProducts(){
    // Hiển thị danh sách sản phẩm bằng render() của BladeOne
    // file view ở new-mvc/App/Views/product/index.blade.php
    $viewName = 'product.sanpham';
    $data=[
        
    ];
    return $this->render($viewName,$data);
}
public function createProducts(){
    // Hiển thị danh sách sản phẩm bằng render() của BladeOne
    // file view ở new-mvc/App/Views/product/index.blade.php
    $viewName = 'product.create';
    $data=[
       
    ];
    return $this->render($viewName,$data);
}
public function detailProducts(){
    // Hiển thị danh sách sản phẩm bằng render() của BladeOne
    // file view ở new-mvc/App/Views/product/index.blade.php
    $viewName = 'product.detail';
    $data=[
       
    ];
    return $this->render($viewName,$data);
}
}