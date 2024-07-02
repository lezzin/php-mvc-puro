<?php

session_start();

class UserController extends RenderView
{
    public function create() {

    }

    public function update() {
        
    }

    public function read($id) {
        var_dump($id[0]);
    }

    public function delete() {

    }
}
