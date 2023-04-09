<!DOCTYPE html>
<html lang="en">
  @include('backend.includes.head')
    <body class="sb-nav-fixed">
        @include('backend.includes.navbar')
        <div id="layoutSidenav">
            <!-- sidebar start  -->
            @include('backend.includes.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    @yield('backend')
                </main>
               @include('backend.includes.footer')
            </div>
        </div>
       @include('backend.includes.js')
    </body>
</html>

