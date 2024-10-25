
    @include('layouts.header-html')
    <!-- Your content here -->
    <div class="w-full ">
        @include('components.sidebar')

        {{-- Block Navbar --}}

        @include('components.navbar')

       <div class="ml-72">
        @yield('content')
       </div>
    </div>
    {{--  --}}
    @include('layouts.footer-html')
