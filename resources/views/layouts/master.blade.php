<!DOCTYPE html>
<html lang="en">
    @include('layouts.partials.head')
    <body>
        @include('layouts.partials.nav')
        @include('layouts.partials.header')
        <div id="main">
            @yield('content')
        </div>
        @include('layouts.partials.footer')
    </body>
    @include('layouts.partials.scripts')
</html>