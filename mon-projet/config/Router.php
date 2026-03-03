<?php

class Router
{
    public function handleRequest(array $get): void
    {
        $ctrl = new PageController();

        if (isset($get["route"]) && $get["route"] === "a-propos")
        {
            $ctrl->about();
        }
        else if (isset($get["route"]) && $get["route"] === "contact")
        {
            $ctrl->contact();
        }
        else if (!isset($get["route"]))
        {
            $ctrl->home();
        }
        else
        {
            $ctrl->notFound();
        }
    }
}