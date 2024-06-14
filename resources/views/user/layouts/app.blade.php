<!DOCTYPE html>
<html class="no-js" lang="en">

@include('user.layouts.inc.head')

<body>

    @include('user.layouts.inc.header')

    @yield('content')

    @include('user.layouts.inc.footer')

    {{-- @include('user.layouts.inc.pre-loader') --}}

    @include('user.layouts.inc.scripts')

</body>

</html>