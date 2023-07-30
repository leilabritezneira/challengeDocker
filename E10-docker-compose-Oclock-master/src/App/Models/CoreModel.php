<?php
// App\Models est l'espace de nom dans lequel est rangée la classe CoreModel
namespace App\Models;

// une classe abstraite ne peut pas être instanciée
// mais d'autres classes peuvent en hériter
abstract class CoreModel
{
    protected $id;

    
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    // une méthode abstraite oblige nos classes enfants
    // à implémenter cette méthode
    abstract static public function findById(int $id);
    abstract static public function findAll();
    abstract public function save();
}