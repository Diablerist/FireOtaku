<?php

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