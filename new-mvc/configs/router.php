<!-- Đây là nơi định nghĩa danh sách route -->
<?php
// Sử dụng thư viện Phroute

use App\Controllers\ProductController;
use Phroute\Phroute\RouteCollector;
// Khởi tạo đối tượng quản lý danh sách đường dẫn
$router = new RouteCollector();

$router->get('/ds-san-pham',[ProductController::class,'getProducts']);
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Hiển thị kết quả return của hàm đươc gọi
echo $response;