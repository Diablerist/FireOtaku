<?php

class Container {

    //atributos gerais:

    private $id;
    private $type;
    private $self_link;
    private $canonicalTitle;
    private $synopsis;
    private $averageRating;
    private $favoritesCount;
    private $startDate;
    private $endDate;
    private $popularityRank;
    private $ratingRank;
    private $ageRatingGuide;
    private $status;
    private $posterImage;
    private $coverImage;
    private $genres;
    private $categories;
    

    //atributos de animes:

    private $episodeCount;
    private $episodes;

    //atributos de mangás:

    private $mangaType;
    private $serialization;
    private $chapterCount;
    private $chapters;

    public function setId($i) {
        $this->id = $i;
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

    public function setSelfLink($sf) {
        $this->self_link = $sf;
    }
    public function getSelfLink() {
        return $this->self_link;
    }

    public function setCanonicalTitle($ct) {
        $this->canonicalTitle = $ct;
    }
    public function getCanonicalTitle() {
        return $this->canonicalTitle;
    }

    public function setSynopsis($s) {
        $this->synopsis = $s;
    }
    public function getSynopsis() {
        return $this->synopsis;
    }

    public function setAverageRating($ar) {
        $this->averageRating = $ar;
    }
    public function getAverageRating() {
        return $this->averageRating;
    }

    public function setFavoritesCount($fc) {
        $this->favoritesCount = $fc;
    }
    public function getFavoritesCount() {
        return $this->favoritesCount;
    }

    public function setStartDate($sd) {
        $this->startDate = $sd;
    }
    public function getStartDate() {
        return $this->startDate;
    }

    public function setEndDate($ed = 'Em andamento') {
        $this->endDate = $ed;
    }
    public function getEndDate() {
        return $this->endDate;
    }

    public function setPopularityRank($pr) {
        $this->popularityRank = $pr;
    }
    public function getPopularityRank() {
        return $this->popularityRank;
    }

    public function setRatingRank($rr) {
        $this->ratingRank = $rr;
    }
    public function getRatingRank() {
        return $this->ratingRank;
    }

    public function setAgeRatingGuide($arg) {
        $this->ageRatingGuide = $arg;
    }
    public function getAgeRatingGuide() {
        return $this->ageRatingGuide;
    }

    public function setStatus($s) {
        $this->status = $s;
    }
    public function getStatus() {
        return $this->status;
    }

    public function setPosterImage($pi) {
        $this->posterImage = $pi;
    }
    public function getPosterImage() {
        return $this->posterImage;
    }

    public function setCoverImage($ci) {
        $this->coverImage = $ci;
    }
    public function getCoverImage() {
        return $this->coverImage;
    }

    public function setEpisodeCount($ec) {
        $this->episodeCount = $ec;
    }
    public function getEpisodeCount() {
        return $this->episodeCount;
    }

    public function setGenres($g) {
        $this->genres = $g;
    }
    public function getGenres() {
        return $this->genres;
    }

    public function setCategories($c) {
        $this->categories = $c;
    }
    public function getCategories() {
        return $this->categories;
    }

    public function setEpisodes($e) {
        $this->episodes = $e;
    }
    public function getEpisodes() {
        return $this->episodes;
    }

    //Funções para mangás

    public function setMangaType($mt) {
        $this->mangaType = $mt;
    }
    public function getMangaType() {
        return $this->mangaType;
    }

    public function setSerialization($s) {
        $this->serialization = $s;
    }
    public function getSerialization() {
        return $this->serialization;
    }

    public function setChapterCount($cc) {
        $this->chapterCount = $cc;
    }
    public function getChapterCount() {
        return $this->chapterCount;
    }

    public function setChapters($c) {
        $this->chapters = $c;
    }
    public function getChapters() {
        return $this->chapters;
    }
}