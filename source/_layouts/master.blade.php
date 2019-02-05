<!DOCTYPE html>
<html lang="en">
    @include('_partials.head')
    <body class="{{ strtolower($page->title) }}">
      @include('_partials.header')

      <section class="section">
        @yield('body')
      </section>

      @include('_partials.footer')
      <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
