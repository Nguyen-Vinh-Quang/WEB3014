<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController {
    public function getProducts(){
        //Hien thi danh sach san pham bang render() cua Bladeone
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
}