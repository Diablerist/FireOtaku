<?php

/**
 * Category
 * Essa classe foi criada para conter todas as informações de determinada categoria, recebendo os atributos
 * referentes aa categoria especificado. Todos os seus metodos tem a função de atributir e retornar valores
 * de seus atributos. Os objetos dessa classe são gerados automaticamente através da classe Search, 
 * presente em "classes/Search.php"
 */

class Category {
    private $id;
    private $type;
    private $title;
    private $slug;

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public function setType($t) {
        $this->type = $t;
    }
    public function getType() {
        return $this->type;
    }

    public function setTitle($t) {
        $this->title = $t;
    }
    public function getTitle() {
        return $this->title;
    }

    public function setSlug($s) {
        $this->slug = $s;
    }
    public function getSlug() {
        return $this->slug;
    }
}