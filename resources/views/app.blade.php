<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--<link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>