
<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>@yield('title') | OmniDash</title>

    <meta name="description" content="" />

    @include('admin.layouts.inc.style')
  </head>

  <body>
    <!-- Content -->
    @yield('content')

    <!-- / Content -->


    <!-- Core JS -->
    @include('admin.layouts.inc.script')
  </body>
</html>
