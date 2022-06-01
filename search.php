<?php
    require_once 'classes/Search.php';

    $text = filter_input(INPUT_GET, 'text');
    $year = filter_input(INPUT_GET, 'year');
    $category = filter_input(INPUT_GET, 'category');
    $page = filter_input(INPUT_GET, 'page');

    $base_url = 'search.php?text='.$text.'&category='.$category.'&year='.$year;
    
    $prev_page = $base_url.'&page='.$page-18;
    $next_page = $base_url.'&page='.$page+18;
    $first_page = $base_url.'&page='.'0';

    $search = new Search();
    
    $categories = $search->allCategories();
    $animes = $search->animeFilter($text, $year, $category, $page);
    $mangas = $search->mangaFilter($text, $year, $category, $page);
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
            <p class="brand"><a href="index.php">Fire<strong>Otaku</strong></a></p>
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
          <div class="filter-card">
            <form action="search.php" method="get">
              <input
                type="text"
                name="text"
                class="search-input"
                placeholder="Search for an anime, manga, genre, etc."
              />
              <br/>
              <select name="category" id="category" class="category-select">
                <option value="">Categories</option>
                <?php foreach ($categories as $category):?>
                  <option value="<?=$category->getSlug()?>"><?=$category->getTitle()?></option>
                <?php endforeach; ?>
              </select>
              <select name="year" id="year" class="year-select">
                <option value="">Year</option>
                <?php for ($y = 2022; $y >= 1907; $y--):?>
                  <option value="<?=$y?>"><?=$y?></option>
                <?php endfor; ?>
              </select><br/>
              <input class="search-button" type="submit" value="Search"/>
            </form>
          </div>
          <div class="title-wrapper-catalog">
            <h3>Anime</h3>
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
          <center>
            <div class="page-wrapper">
                <a href="<?=$first_page?>" class="page-button">First</a>
                <a href="<?=$prev_page?>" class="page-button">Prev</a>
                <a href="<?=$next_page?>" class="page-button">Next</a>
            </div>
        </center>
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
          <center>
            <div class="page-wrapper">
                <a href="<?=$first_page?>" class="page-button">First</a>
                <a href="<?=$prev_page?>" class="page-button">Prev</a>
                <a href="<?=$next_page?>" class="page-button">Next</a>
            </div>
        </center>
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
