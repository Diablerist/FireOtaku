<?php

require_once 'Container.php';

class Search {

    private $base_url = "https://kitsu.io/api/edge";


    private function setCurl($p) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->base_url.$p);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);
        $lista = json_decode($response);
        
        return $lista;
    }

    public function trendingAnime() {
        $array = [];

        $list = $this->setCurl("/trending/anime");

        foreach ($list->data as $item ) {
            $i = new Container();
            $i->setId($item->id);
            $i->setType($item->type);
            $i->setSelfLink($item->links->self);
            $i->setCanonicalTitle($item->attributes->canonicalTitle);
            $i->setSynopsis($item->attributes->synopsis);
            $i->setAverageRating($item->attributes->averageRating);
            $i->setFavoritesCount($item->attributes->favoritesCount);
            $i->setStartDate($item->attributes->startDate);
            $i->setEndDate($item->attributes->endDate);
            $i->setPopularityRank($item->attributes->popularityRank);
            $i->setRatingRank($item->attributes->ratingRank);
            $i->setAgeRatingGuide($item->attributes->ageRatingGuide);
            $i->setStatus($item->attributes->status);
            $i->setPosterImage($item->attributes->posterImage->small);
            $i->setCoverImage($item->attributes->coverImage->small);
            $i->setEpisodeCount($item->attributes->episodeCount);
            $i->setGenres($item->relationships->genres->links->related);
            $i->setCategories($item->relationships->categories->links->related);
            $i->setEpisodes($item->relationships->episodes->links->self);
            
            $array[] = $i;
        }

        return $array;
        
    }

    public function trendingManga() {
        $array = [];

        $list = $this->setCurl("/trending/manga");

        foreach ($list->data as $item ) {
            $i = new Container();
            $i->setId($item->id);
            $i->setType($item->type);
            $i->setSelfLink($item->links->self);
            $i->setCanonicalTitle($item->attributes->canonicalTitle);
            $i->setSynopsis($item->attributes->synopsis);
            $i->setAverageRating($item->attributes->averageRating);
            $i->setFavoritesCount($item->attributes->favoritesCount);
            $i->setStartDate($item->attributes->startDate);
            $i->setEndDate($item->attributes->endDate);
            $i->setPopularityRank($item->attributes->popularityRank);
            $i->setRatingRank($item->attributes->ratingRank);
            $i->setAgeRatingGuide($item->attributes->ageRatingGuide);
            $i->setSerialization($item->attributes->serialization);
            $i->setMangaType($item->attributes->mangaType);
            $i->setStatus($item->attributes->status);
            $i->setPosterImage($item->attributes->posterImage->small);
            //$i->setCoverImage($item->attributes->coverImage->original);
            $i->setChapterCount($item->attributes->chapterCount);
            $i->setGenres($item->relationships->genres->links->related);
            $i->setCategories($item->relationships->categories->links->related);
            $i->setChapters($item->relationships->chapters->links->self);
            
            $array[] = $i;
        }

        return $array;
        
    }
}