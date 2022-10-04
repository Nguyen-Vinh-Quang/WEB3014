<!-- Đây được coi là khung -->
<!-- Có thể định nghĩa những phần không đổi và phần đổi -->
<!-- 1. Thêm những vị trí không đổi tại đây -->
<!-- 1. Những phần thay đổi sẽ kế thừa khung này -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- @yield định nghĩa 1 vị trí tên là title -->
    <title>@yield('title')</title>
</head>

<body>
    <!-- Cac-->
    
    @include('layouts.header')

    <div>
        @yield('content')
    </div>

    @include('layouts.footer')
</body>

</html>
