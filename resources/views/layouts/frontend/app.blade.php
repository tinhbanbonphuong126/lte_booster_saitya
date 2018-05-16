<!doctype html>
<html lang="ja">
<head>
    <title>@yield('title', 'サティア不動産')</title>
    <meta name="description" content="@yield('description', 'サティア不動産')">
    <meta name="keywords" content="@yield('keywords', 'サティア不動産')">

    @include("layouts.frontend.partial.cpn_style")

    @yield('style')
    <style>
        {{--More css for common--}}

        .no_record {
            font-size: 17px;
        }

    </style>
</head>
<body>
    @include('layouts.frontend.partial.cpn_header')

        @yield('content')

    @include('layouts.frontend.partial.cpn_footer')

    @include("layouts.frontend.partial.cpn_script")

    @yield('script')
</body>
</html>