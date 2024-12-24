<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <base href="{{ str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) }}" />

    <title>{{ $title }}</title>

    <link rel="icon" href="./public/images/favicon.png" />

    <!-- Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.bunny.net/css?family=figtree:400,500,600" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mr+Dafoe" />

    <!-- Styles / Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="dark:bg-black dark:text-white/50 min-h-screen">
    {{ $slot }}
  </body>
</html>
