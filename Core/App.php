<?php
//Fitxer per crear el contenidor de dependencies per gestionar i
// accedir a les dependencies de l'aplicació de forma centralitzada
namespace Core;
//utilitza la classe exception per mostrar missatge d'error
use Exception;

class App
{
    //creem variable per al contenidor de dependencies
    private static $container;

    //creem funció per enllaçar dependencia al contenidor
    public static function bind($key, $value)
    {
        static::$container[$key] = $value;
    }

    //creem funció per recuperar la dependencia
    public static function get($key)
    {
        //mirem si la key no existeix per llançar error
        if(!array_key_exists($key, static::$container)){
            throw new Exception("No key '{$key}' is bound in container");
        }

        //retornem contenidor
        return static::$container[$key];
    }

}