<?php
/*** Escalares ***/

// string
$nome = "Boas-vindas.";
var_dump($nome);

if(is_string($nome)):
    echo "É uma string.";
else:
    echo "Não é uma string.";
endif;
echo "<hr>";

// int
$idade = 22;
var_dump($idade);

if(is_int($idade)):
    echo "É um inteiro.";
else:
    echo "Não é um inteiro.";
endif;
echo "<hr>";

// float
$altura = 1.6;
var_dump($altura);

if(is_float($altura)):
    echo "É um float.";
else:
    echo "Não é um float.";
endif;
echo "<hr>";

// boolean

$admin = false;
var_dump($admin);

if(is_bool($admin)):
    echo "É um booleano.";
else:
    echo "Não é um booleano.";
endif;
echo "<hr>";

/*** Compostos ***/

// array
$pokemons = array("Pikachu", "Charmander", "Squirtle", "Bulbasaur", 12, 20.6, true);
var_dump($pokemons);
if(is_array($pokemons)):
    echo "É um array.";
else:
    echo "Não é um array.";
endif;
echo "<hr>";

// object
class Cliente 
{
    public $nome;
    public function atribuirNome($nome) 
    {
        $this->$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente->atribuirNome("Luana");
var_dump($cliente);
if(is_object($cliente)):
    echo "É um objeto.";
else:
    echo "Não é um objeto.";
endif;
echo "<hr>";

/*** Especiais ***/

// NULL
$cep = NULL;
var_dump($cep);

// Resource
