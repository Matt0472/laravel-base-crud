@include('wines.layouts.partials._head')

    <header>
      @yield('header')
    </header>

    <main>
      @yield('main-content')
    </main>

    <footer>
      @yield('footer')
    </footer>

    @yield('scripts')
    
@include('wines.layouts.partials._footer')