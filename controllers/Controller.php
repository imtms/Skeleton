<?php
namespace Controllers;

class Controller 
{
    protected $db;
    public function __construct(\Slim\Container $container) {
        $this->db = $container['db'];
    }
}