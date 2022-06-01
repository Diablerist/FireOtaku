<?php
    require_once 'classes/Search.php';

    $id = filter_input(INPUT_GET, 'id');
    $page = filter_input(INPUT_GET, 'page');

    $base_url = 'details_anime.php?id='.$id;

    $prev_page = $base_url.'&page='.$page-18;
    $next_page = $base_url.'&page='.$page+18;
    $first_page = $base_url.'&page='.'0';
    
    $search = new Search();

    $anime = false;

    if($id) {
        $anime = $search->animeId($id);
    }
    
    if($anime === false) {
        header("Location: index.php");
        exit;
    
    }

    $episodes = $search->episodes($anime->getEpisodes(), $page);

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
                <p class="brand"><a href="index.php">Fire<strong>Otaku</strong></a></p>
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
          <center>
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
           </center>
        </div>
        <center>
            <div class="page-wrapper">
                <a href="<?=$first_page?>" class="page-button">First</a>
                <a href="<?=$prev_page?>" class="page-button">Prev</a>
                <a href="<?=$next_page?>" class="page-button">Next</a>
            </div>
        </center>
      </section>
      <footer>
        <div class="main">
          <div class="content footer-links">
            <div class="footer-company">
              <h4>Company</h4>
              <h6>About</h6>
              <h6>Contact</h6>
            </div>
            <div class="footer-rental">
              <h4>Info</h4>
              <h6>Styles based in</h6>
              <h6>HTML/CSS</h6>
              <h6>Class</h6>
            </div>
            <div class="footer-social">
              <h4>Stay connected</h4>
                <div class="social-icons">
                  <img src="images/instagram.png" alt="Instagram" />
                  <img src="images/facebook.png" alt="Facebook" />
                </div>
            </div>
            <div class="footer-contact">
              <h4>Contact US</h4>
              <h6>+55 XX X XXXX-XXXX</h6>
              <h6>contact@fireotaku.com</h6>
              <h6>Street Name, Porto Alegre - RS</h6>
            </div>
          </div>
        </div>
        <div class="last">FireOtaku - V1.0 - 2022</div>
      </footer>
    </body>
</html>
