<!DOCTYPE html>
<html lang="en">

<head>
    {{-- ดึงหัวมาใช้ มี @ ไม่ต้องใช้ --}}
    @include('includes.head')
</head>

<body>
    @include('includes.menu')
    @yield('content')
    @include('includes.foot')
</body>

</html>
