<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    //Caso não siga o nome padrão, tem que acrescentar esse atributo
    //para indicar o nome da tabela a que o modelo irá se conectar
    //protected $table = 'nome_da_tabela';

    //Caso o nome da chave primária da sua tabela não seja id
    //tem que colocar o atributo abaixo informando o nome da chave
    //primária
    //protected $primaryKey = 'nome_chave_primaria';

    //Caso não for usar o mecanismo do Laravel de automaticamente
    //controlar os campos created_at e updated_at, tem que informar
    //no modelo que não está utilizando
    public $timestamps = false;

}