<?php
    require_once 'classes/Search.php';

    $id = filter_input(INPUT_GET, 'id');
    
    $search = new Search();

    $manga = false;

    if($id) {
        $manga = $search->mangaId($id);
    }
    
    if($manga === false) {
        header("Location: index.php");
        exit;
    
    }

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
                <img src="<?=$manga->getPosterImage()?>" alt="manga">
                <table>
                <tr>
                    <th>Title:</th>
                    <td><?=$manga->getCanonicalTitle()?></td>
                </tr>
                <tr>
                    <th>Synopsis:</th>
                    <td><?=$manga->getSynopsis()?></td>
                </tr>
                <tr>
                    <th>Start Date:</th>
                    <td><?=$manga->getStartDate()?></td>
                </tr>
                <tr>
                    <th>End Date:</th>
                    <td><?=$manga->getEndDate()?></td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td><?=$manga->getStatus()?></td>
                </tr>
                <tr>
                    <th>Chapter Count:</th>
                    <td><?=$manga->getChapterCount()?></td>
                </tr>
                <tr>
                    <th>Type:</th>
                    <td><?=$manga->getMangaType()?></td>
                </tr>
                <tr>
                    <th>Serialization:</th>
                    <td><?=$manga->getSerialization()?></td>
                </tr>
                <tr>
                    <th>Average Rating:</th>
                    <td><?=$manga->getAverageRating()?></td>
                </tr>
                <tr>
                    <th>Rating Rank:</th>
                    <td><?=$manga->getRatingRank()?></td>
                </tr>
                <tr>
                    <th>Popularity Rank:</th>
                    <td><?=$manga->getPopularityRank()?></td>
                </tr>
                <tr>
                    <th>Favorites Count:</th>
                    <td><?=$manga->getFavoritesCount()?></td>
                </tr>
                <tr>
                    <th>Age Rating Guide:</th>
                    <td><?=$manga->getAgeRatingGuide()?></td>
                </tr>
                </table>
            </div>
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