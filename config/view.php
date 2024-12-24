<?php

use Illuminate\Container\Container as ContainerContainer;
use Illuminate\Contracts\Foundation\Application as ApplicationContract;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Leaf\Blade as LeafBlade;

final class Container extends ContainerContainer
{
  function terminating(): void {}

  function getNamespace(): string
  {
    return __NAMESPACE__;
  }
}

final class BladeAdapter extends LeafBlade
{
  function render(string $view, ?array $data = [], array $mergeData = []): string
  {
    $html = parent::render($view, $data ?? [], $mergeData);

    echo $html;

    return $html;
  }
}

$container = Container::getInstance();
$container->bind(ApplicationContract::class, Container::class);
$container->alias('view', ViewFactory::class);

Flight::register('view', BladeAdapter::class, [
  ROOT . '/resources/views',
  ROOT . '/storage/cache',
  $container
]);
