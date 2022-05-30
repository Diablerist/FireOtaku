<?php
    require_once 'classes/Search.php';

    $id = filter_input(INPUT_GET, 'id');
    
    $search = new Search();

    $anime = false;

    if($id) {
        $anime = $search->animeId($id);
    }
    
    if($anime === false) {
        header("Location: index.php");
        exit;
    
    }

    $episodes = $search->episodes($anime->getEpisodes());

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>FireOtaku</title>
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <header class="header-details">
            <div class="content">
            <nav>
                <p class="brand">Fire<strong>Otaku</strong></p>
            </nav>
        </header>
        <section class="content">
            <div class="info">
                <img src="<?=$anime->getPosterImage()?>" alt="Anime">
                <table>
                <tr>
                    <th>Title:</th>
                    <td><?=$anime->getCanonicalTitle()?></td>
                </tr>
                <tr>
                    <th>Synopsis:</th>
                    <td><?=$anime->getSynopsis()?></td>
                </tr>
                <tr>
                    <th>Start Date:</th>
                    <td><?=$anime->getStartDate()?></td>
                </tr>
                <tr>
                    <th>End Date:</th>
                    <td><?=$anime->getEndDate()?></td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td><?=$anime->getStatus()?></td>
                </tr>
                <tr>
                    <th>Episode Count:</th>
                    <td><?=$anime->getEpisodeCount()?></td>
                </tr>
                <tr>
                    <th>Average Rating:</th>
                    <td><?=$anime->getAverageRating()?></td>
                </tr>
                <tr>
                    <th>Rating Rank:</th>
                    <td><?=$anime->getRatingRank()?></td>
                </tr>
                <tr>
                    <th>Popularity Rank:</th>
                    <td><?=$anime->getPopularityRank()?></td>
                </tr>
                <tr>
                    <th>Favorites Count:</th>
                    <td><?=$anime->getFavoritesCount()?></td>
                </tr>
                <tr>
                    <th>Age Rating Guide:</th>
                    <td><?=$anime->getAgeRatingGuide()?></td>
                </tr>
                </table>
            </div>
        </section>
        <section class="catalog" id="episodes">
        <div class="content">
          <div class="title-wrapper-catalog">
            <h3>Episodes</h3>
          </div>
          </div>
          <div class="card-wrapper">
            <?php foreach ($episodes as $episode):?>
              <div class="card-item">
                <img src="<?=$episode->getThumbnail()?>" alt="AnimeBanner" />
                <div class="card-content">
                  <h3>Episode <?=$episode->getNumber()?></h3>
                  <p>
                    <?=$episode->getSynopsis()?>
                  </p>
                  <a href="details_episode.php?id=<?=$episode->getId()?>">Details</a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
    </body>
</html>
