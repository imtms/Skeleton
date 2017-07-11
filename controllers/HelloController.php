<?php
namespace Controllers;

class HelloController extends Controller
{
    public function index($request, $response, $args)
    {
        return "hello world!";
    }
}