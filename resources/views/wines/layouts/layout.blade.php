@include('layouts.partials._head')

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
    
@include('layouts.partials._footer')