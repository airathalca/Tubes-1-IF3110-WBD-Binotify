<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touce-icon" sizes="180x180" href="<?= BASE_URL ?>/images/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL ?>/images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL ?>/images/icon/favicon-16x16.png">
    <link rel="manifest" href="<?= BASE_URL ?>/images/icon/site.webmanifest">
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/styles/globals.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/styles/navbar.css">
    <!-- Page-specific CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/styles/album/album-detail.css">
    <!-- JavaScript DOM and AJAX -->
    <script type="text/javascript" defer>
        const CSRF_TOKEN = "<?= $_SESSION['csrf_token'] ?? '' ?>";
    </script>
    <script src="<?= BASE_URL ?>/javascript/component/navbar.js" defer></script>
    <title>
        <?php if ($this->data) { ?>
            <?= $this->data['judul'] ?>
        <?php } else { ?>
            Album not found
        <?php } ?>
    </title>
</head>

<body>
    <div class="black-body">
        <div class="wrapper">
            <!-- Navigation bar -->
            <nav class="black-navbar">
                <div class="pad-40">
                    <div class="flex-between">
                        <button class="toggle" id="toggle">
                            <img src="<?= BASE_URL ?>/images/assets/bars.svg" alt="Bars">
                        </button>
                        <a href="/public/home">
                            <img src="<?= BASE_URL ?>/images/assets/logo-light.svg" alt="Logo Spotipi">
                        </a>
                    </div>
                </div>
                <?php
                if (!$this->data['username'] || !$this->data['is_admin']) { ?>
                    <div class="nav-container" id="nav-container">
                        <div class="nav-search">
                            <form action="<?= BASE_URL ?>/song/search" METHOD="GET">
                                <label for="search">Enter song/title/artist/published year to search!</label>
                                <div class="search-input">
                                    <input type="text" placeholder="YOASOBI" name="q">
                                    <button type="submit">
                                        <img src="<?= BASE_URL ?>/images/assets/search.svg" alt="Search icon">
                                    </button>
                                </div>
                            </form>
                        </div>
                        <a href="/public/album" class="nav-link">
                            Album list
                        </a>
                        <?php
                        if ($this->data['username']) { ?>
                            <a href="#" id="log-out" class="nav-link">
                                Log out
                            </a>
                        <?php }
                        ?>
                    </div>
                <?php } else { ?>
                    <div class="nav-container" id="nav-container">
                        <a href="#" class="nav-link">
                            Add song
                        </a>
                        <a href="/public/album/add" class="nav-link">
                            Add album
                        </a>
                        <a href="/public/album" class="nav-link">
                            Album list
                        </a>
                        <a href="#" id="log-out" class="nav-link">
                            Log out
                        </a>
                    </div>
                <?php } ?>
            </nav>
            <!-- Form -->
            <div class="pad-40">
                <p class="details-header">Album details</p>
                <?php if ($this->data) { ?>
                    <img src="<?= STORAGE_URL ?>/images/<?= $this->data['image_path'] ?>" alt="Album cover" class="album-cover">
                    <p class="album-title"><?= $this->data['judul'] ?></p>
                    <p class="album-artist"><?= $this->data['penyanyi'] ?></p>
                    <p class="album-duration"><?= $this->data['total_duration'] ?></p>
                    <p class="songs-list-header">Songs inside this album:</p>
                    <div class="songs-list">
                        <a href="#" class="single-song">
                            <p class="song-title">Bidadari Surga</p>
                            <p class="song-genre">Rock</p>
                            <p class="song-dateduration">1 April 2016 - 3 min 59 sec</p>
                        </a>
                        <a href="#" class="single-song">
                            <p class="song-title">Bidadari Surga</p>
                            <p class="song-genre">Rock</p>
                            <p class="song-dateduration">1 April 2016 - 3 min 59 sec</p>
                        </a>
                        <a href="#" class="single-song">
                            <p class="song-title">Bidadari Surga</p>
                            <p class="song-genre">Rock</p>
                            <p class="song-dateduration">1 April 2016 - 3 min 59 sec</p>
                        </a>
                        <a href="#" class="single-song">
                            <p class="song-title">Bidadari Surga</p>
                            <p class="song-genre">Rock</p>
                            <p class="song-dateduration">1 April 2016 - 3 min 59 sec</p>
                        </a>
                        <a href="#" class="single-song">
                            <p class="song-title">Bidadari Surga</p>
                            <p class="song-genre">Rock</p>
                            <p class="song-dateduration">1 April 2016 - 3 min 59 sec</p>
                        </a>
                    </div>
                <?php } else { ?>
                    <p class="info">Cannot find the album you're looking for!</p>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>