<footer class="py-16 text-center text-sm text-black dark:text-white/70">
  Flight
  {{ json_decode(file_get_contents(ROOT . '/composer.json'), true)['require']['flightphp/core'] }}
  (PHP v{{ PHP_VERSION }})
</footer>
