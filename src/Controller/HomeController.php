<?php

namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        // setting custom layout
        $this->viewBuilder()->setLayout('custom/layout');
    }

    public function sayHello()
    {
        // $this->autoRender = false;
        // echo "This message is from Home controller";

        $this->set('title', 'Welcome | Say Hello');

        $name = "Hi";
        $email = 'hi@gmail.com';

        // $this->set("name", $name);
        // $this->set("email", $email);
        $this->set(compact('name', 'email'));

        $data = array(
            "name" => "Abc",
            "email" => "Abc@gmail.com",
        );

        // $this->set("userData", $data);

        $this->set(compact('data'));
    }

    public function say()
    {
        $this->set('title', 'Welcome | Say');
        // $this->autoRender = false;
        // echo "This message is from Home controller say";
    }

    public function sayWelcome()
    {
        $this->set('title', 'Welcome | Say Welcome');
        // $this->autoRender = false;
        // echo "This message is from Home controller sayWelcome";
    }
}
