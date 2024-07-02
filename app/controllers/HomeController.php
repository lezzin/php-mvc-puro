<?php

session_start();

class HomeController extends RenderView
{
    public function index()
    {
        $this->loadView('templates/header');
        $this->loadView('home', ['message' => 'Hello World!']);
    }
}
