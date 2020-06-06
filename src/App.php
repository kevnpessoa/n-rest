<?php

namespace Napps\Rest;

use Napps\Rest\Router\Router;
use Napps\Rest\DI\Resolver;
use Napps\Rest\Renderer\PHPRendererInterface;

class App
{
    private $router;
    private $renderer;

    public function __construct()
    {
        $path = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $this->router = new Router($path, $method);
    }

    public function setRenderer(PHPRendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function get(string $path, $callback)
    {
        $this->router->get($path, $callback);
    }

    public function post(string $path, $callback)
    {
        $this->router->post($path, $callback);
    }

    public function put(string $path, $callback)
    {
        $this->router->put($path, $callback);
    }

    public function delete(string $path, $callback)
    {
        $this->router->delete($path, $callback);
    }

    public function request(string $path, $callback)
    {
        $this->router->request($path, $callback);
    }

    public function run()
    {
        $route = $this->router->run();
        $resolver = new Resolver();

        $data = $resolver->method($route['callback'], [
            'params' => $route['params']
        ]);

        $this->renderer->setData($data);
        $this->renderer->run();
    }
}
