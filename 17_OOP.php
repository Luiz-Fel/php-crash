<?php

// orientação a objetos

class User {
    /* Modificadores de acesso
    public -> pode ser acessado em todo lugar
    private -> só pode ser acessado dentro da classe
    protected -> igual a private mas as classes que herdam também podem acessar
    */

    // propriedades são atributos que pertencem a classe
    public $name;
    public $email;
    public $password;

    // construtores são um método que roda quando o objeto é criado
    public function __construct($name, $email, $password) 
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        echo 'constructor ran';
    }


    // métodos são funções que pertencem as classes
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

// instanciar um objeto
$user1 = new User('Brad', 'brad@gmail.com', 1234);
$user2 = new User('Jhon', 'jhon@gmail.com', 'ddod99');

$user1->set_name('Brad');
$user2->set_name('Jhon');

echo $user1->email;
echo $user2->get_name();

// herança

class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password); // uma forma mais simples de atribuir quando você já tem pronto na classe pai (semelhante ao super do javascript)
        $this->title = $title; // mas é claro, as propriedades que não estão no pai você tem que adicionar manualmente
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', 'raidenShogun', 'general');

echo $employee1->get_title();
echo $employee1->get_name();