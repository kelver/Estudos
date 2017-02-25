<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 02:04
 */
class Pessoa
{
    public function ola($nome)
    {
        return("Olá {$nome}!");
    }
}
$p = new Pessoa;
echo $p->ola("Kelver");