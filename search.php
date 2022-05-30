<?php
    require_once 'classes/Search.php';

    $usersearch = filter_input(INPUT_GET, 'search');
    $search = new Search();
    
    $animes = $search->animeFilter($usersearch);
    $mangas = $search->mangaFilter($usersearch);
    $trendingAnimes = $search->trendingAnime();
    $topAnime = $trendingAnimes[0];

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
      <header class="header-index">
        <div class="content">
          <nav>
            <p class="brand">Fire<strong>Otaku</strong></p>
            <ul>
              <li><a href="#anime">Anime</a></li>
              <li><a href="#manga">Manga</a></li>
            </ul>
          </nav>
          <div class="header-block">
            <div class="text">
              <h2><?= $topAnime->getCanonicalTitle(); ?></h2>
              <p>
                <?= $topAnime->getSynopsis(); ?>
              </p>
            </div>
            <img src="<?= $topAnime->getPosterImage(); ?>" alt="Anime" />
          </div>
        </div>
      </header>

      <section class="catalog" id="anime">
        <div class="content">
          <div class="title-wrapper-catalog">
            <h3>Anime</h3>
          </div>
          <div class="filter-card">
            <form action="search.php" method="get">
              <input
                type="text"
                name="search"
                class="search-input"
                placeholder="Search for an anime, manga, genre, etc."
              />
              <input class="search-button" type="submit" value="Search"/>
            </form>
          </div>
          <div class="card-wrapper">
            <?php foreach ($animes as $anime):?>
              <div class="card-item">
                <img src="<?=$anime->getPosterImage()?>" alt="AnimeBanner" />
                <div class="card-content">
                  <h3><?=$anime->getCanonicalTitle()?></h3>
                  <p>
                    <?=$anime->getSynopsis()?>
                  </p>
                  <a href="details_anime.php?id=<?=$anime->getId()?>">Details</a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="catalog" id="manga">
        <div class="content">
          <div class="title-wrapper-catalog">
            <h3>Mangas</h3>
          </div>
          <div class="card-wrapper">
            <?php foreach ($mangas as $manga):?>
              <div class="card-item">
                <img src="<?=$manga->getPosterImage()?>" alt="MangaBanner" />
                <div class="card-content">
                  <h3><?=$manga->getCanonicalTitle()?></h3>
                  <p>
                    <?=$manga->getSynopsis()?>
                  </p>
                  <a href="details_manga.php?id=<?=$manga->getId()?>">Details</a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
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
              <h6>Estilos baseados</h6>
              <h6>Em curso</h6>
              <h6>HTML/CSS</h6>
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
              <h6>contato@fireanimes.com.br</h6>
              <h6>Nome da Rua, Porto Alegre - RS</h6>
            </div>
          </div>
        </div>
        <div class="last">FireAnimes - V1.0 - 2022</div>
      </footer>
    </body>
  </html>
