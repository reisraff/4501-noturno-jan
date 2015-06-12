<?php

class Conexao
{
    public $link, $server, $user, $pass;

    public function connect()
    {
        $this->link = mysql_connect($this->server, $this->user, $this->pass);
    }

    public function __sleep()
    {
        return array('server', 'user', 'pass');
    }

    public function __wakeup()
    {
        if(isset($this->server, $this->user, $this->pass))
        {
            $this->connect();
        }
    }
}

$obj = new Conexao();