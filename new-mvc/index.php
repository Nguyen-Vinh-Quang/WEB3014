<?php
// require_once 'App/Controllers/Controller.php';
// require_once 'App/Controllers/ProductController.php';
// require_once 'App/Models/BaseModel.php';
// require_once 'App/Models/Product.php';

require_once './vendor/autoload.php';

use App\Controllers\ProductController;

$pc = new ProductController();
$pc->getProducts();

// Cần autoload để tránh việc require quá nhiều ở code có thể gây nhầm lẫn
// Cần composer để việc autoload có thể làm tự động
// getcomposer.org

//reder()
// 1. biet view nao duoc dung
// 2. biet bien nao truyen vao do
// 3. thu muc view : giao dien , ten thu muc. ten fie
// 
