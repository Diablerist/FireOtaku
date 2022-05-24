<?php 
  require_once 'classes/Container.php';
  require_once 'classes/Search.php';

  $search = new Search;
  $trendingAnimes = $search->trendingAnime();
  $trendingManga = $search->trendingManga();

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
    <header>
      <div class="content">
        <nav>
          <p class="brand">Fire<strong>Otaku</strong></p>
          <ul>
            <li><a href="#anime">Anime</a></li>
            <li><a href="#manga">Manga</a></li>
            <li><a href="#genres">Genres</a></li>
            <button>Login</button>
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
          <p>Find what you want</p>
          <h3>Trending Animes</h3>
        </div>
        <div class="filter-card">
          <input
            type="text"
            class="search-input"
            placeholder="Search for an anime, manga, genre, etc."
          />
          <button class="search-button">Search</button>
        </div>
        <div class="card-wrapper">
          <?php foreach ($trendingAnimes as $anime):?>
              <div class="card-item">
                  <img src="<?=$anime->getPosterImage()?>" alt="AnimeBanner" />
                  <div class="card-content">
                    <h3><?=$anime->getCanonicalTitle()?></h3>
                      <p>
                        <?=$anime->getSynopsis()?>
                      </p>
                      <button type="submit" value="<?=$anime->getId();?>" action="info.php">Details</button>
                  </div>
              </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="catalog" id="manga">
      <div class="content">
        <div class="title-wrapper-catalog">
          <h3>Trending Mangas</h3>
        </div>
        <div class="card-wrapper">
          <?php foreach ($trendingManga as $manga):?>
              <div class="card-item">
                  <img src="<?=$manga->getPosterImage()?>" alt="MangaBanner" />
                  <div class="card-content">
                    <h3><?=$manga->getCanonicalTitle()?></h3>
                      <p>
                        <?=$manga->getSynopsis()?>
                      </p>
                    <button type="button">Ver detalhes</button>
                  </div>
              </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
<!--
    <section class="features" id="feature">
      <div class="content">
        <div class="title-wrapper-features">
          <p>What you can do</p>
          <h3>Features</h3>
        </div>
        <div class="feature-card-block">
          <div class="feature-card-item">
            <img src="images/feature-planet.png" alt="Feature" />
            <div class="feature-text-content">
              <h3>Title</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
          -->
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
