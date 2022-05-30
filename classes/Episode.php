<?php

class Episode {
    private $id;
    private $canonicalTitle;
    private $seasonNumber;
    private $number;
    private $synopsis;
    private $airDate;
    private $length;
    private $thumbnail;

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public function setCanonicalTitle($ct) {
        $this->canonicalTitle = $ct;
    }
    public function getCanonicalTitle() {
        return $this->canonicalTitle;
    }

    public function setSeasonNumber($sn) {
        $this->seasonNumber = $sn;
    }
    public function getSeasonNumber() {
        return $this->seasonNumber;
    }

    public function setNumber($n) {
        $this->number = $n;
    }
    public function getNumber() {
        return $this->number;
    }

    public function setSynopsis($s) {
        $this->synopsis = $s;
    }
    public function getSynopsis() {
        return $this->synopsis;
    }

    public function setAirDate($ad) {
        $this->airDate = $ad;
    }
    public function getAirDate() {
        return $this->airDate;
    }

    public function setLength($l) {
        $this->length = $l;
    }
    public function getLength() {
        return $this->length;
    }

    public function setThumbnail($t) {
        $this->thumbnail = $t;
    }
    public function getThumbnail() {
        return $this->thumbnail;
    }
}