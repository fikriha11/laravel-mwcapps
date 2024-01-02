<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    @include('style.bootstrap')

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

</head>

<body>
    @include('widget.preloader')
    @include('widget.header')
    @include('widget.breadcum')
    @include('widget.category-pengurus')
    @include('widget.footer')
    <!-- jquery Min JS -->
    @include('style/js')
</body>

</html>
