@include('components.site-header')

@include('components.site-sidebar')

<div class="container two-columns">
    <div id="primary">
        @yield('content')
    </div>
</div>

@include('components.site-footer')
