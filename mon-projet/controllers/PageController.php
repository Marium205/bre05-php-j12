<?php

class PageController
{
    public function home(): void
    {
        $route = "home";
        require __DIR__ . "/../templates/layout.phtml";
    }

    public function about(): void
    {
        $route = "about";
        require __DIR__ . "/../templates/layout.phtml";
    }

    public function notFound(): void
    {
        $route = "notFound";
        require __DIR__ . "/../templates/layout.phtml";
    }

    // Étape 8 : contact
    public function contact(): void
    {
        $route = "contact";
        require __DIR__ . "/../templates/layout.phtml";
    }
}