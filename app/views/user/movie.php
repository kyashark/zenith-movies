
<html>

<head>
  <title>Zenith</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/styles.css" />

  <script>
        const BASE_URL = "<?= BASE_URL ?>"; // BASE URL for set images 
  </script>
</head>

<body>
<header>
    <h1>Z</h1>
    <ul class="nav-bar" id="nav-bar">
        <li><a href="<?= BASE_URL ?>/user/home">Home</a></li>
        <li><a href="<?= BASE_URL ?>/movie/filter?type=movie&sort=random">Movies</a></li>
        <li><a href="<?= BASE_URL ?>/movie/filter?type=series&sort=random">Series</a></li>
    </ul>

    <div class="right-nav">
        <a href="#">
            <span class="username">
                <?php echo $username ?>
            </span>
        </a>
        <a href="<?= BASE_URL ?>/auth/register"><button class="btn type-2">Logout</button></a>
        
        <div class="menu-item" id="menu-item">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
  </header>

  <main>
  <div class="sort-container">
        <button class="sort" data-sort="top">Top Voted</button>
        <button class="sort" data-sort="new">New Realease</button>
        <button class="sort" data-sort="alpha">Alphabetical</button>
  </div>
  <div class="genre-container">
  <button class="genre" data-genre="action">Action</button>
        <button class="genre" data-genre="adventure">Adventure</button>
        <button class="genre" data-genre="comedy">Comedy</button>
        <button class="genre" data-genre="drama">Drama</button>
        <button class="genre" data-genre="horror">Horror</button>
        <button class="genre" data-genre="sci-fi">Sci-Fi</button>
        <button class="genre" data-genre="thriller">Thriller</button>
        <button class="genre" data-genre="romance">Romance</button>
        <button class="genre" data-genre="fantasy">Fantasy</button>
    </div>
    <div class="movie-grid" id="movie-grid">

    </div>
</main>
 
  <script src="<?= BASE_URL ?>/js/main.js"></script>
  <script src="<?= BASE_URL ?>/js/movie.js"></script>
 
  </body>
