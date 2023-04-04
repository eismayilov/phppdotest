<?php
session_start();
require_once('db_connect.php');

// Выполнить запрос на выборку всех продуктов из базы данных
$stmt = $pdo->query('SELECT * FROM exclusive_pets');
$exclusive_pets = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lunar Values - Exclusive Pets - Pet Simulator X Value list</title>
  <meta property="og:site_name" content="Lunar Values - Pet Simulator X Value List">
  <meta property="og:title" content="Lunar Values - Exclusive Pets - Pet Simulator X Value List">
  <meta property="og:url" content="https://petxvalues.com/exclusive_pets.php">
  <meta property="og:type" content="website">
  <meta name="description" content="Exclusive Pets - Pet Simulator X Value List. It's our aim to be your source for Pet 
Simulator X values. We have values for Huge Pets, Exclusives, Mythicals, 
Legendaries, Glitched Pets, Pog Pets, Hardcore Pets, and even Toy DLC Code 
Pets! (January 2023) pet sim x value list • psx value list • pet simulator 
x value list • psx values • pet sim x values • pet simulator x values">
  <meta itemprop="name" content="Lunar Values - Exclusive Pets - Pet Simulator X Value List">
  <meta itemprop="url" content="https://petxvalues.com/exclusive_pets.php">
  <meta itemprop="description" content="Exclusive Pets - Pet Simulator X Value List. It's our aim to be your source for Pet Simulator X values. We have values for Huge Pets, Exclusives, Mythicals, Legendaries, Glitched Pets, Pog Pets, Hardcore Pets, and even Toy DLC Code Pets!  (January 2023)  pet sim x value list • psx value list • pet simulator">
  <script src="https://kit.fontawesome.com/f755a6c70c.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/huge.css">
  <link rel="stylesheet" href="css/petxroblox-bootstrap.css">
  <link rel="stylesheet" href="css/burger.css">
  <link rel="stylesheet" href="css/media-screen.css">
  <meta http-equiv="cache-control" content="max-age=14400">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100&display=swap" rel="stylesheet">
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      for (var j = 0; j < document.scripts.length; j++) {
        if (document.scripts[j].src === r) {
          return;
        }
      }
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(91888383, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/91888383" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-MSE14B2V38"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-MSE14B2V38');
  </script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8337635356054834" crossorigin="anonymous"></script>
</head>

<body>
  <?php include 'header.php'; ?>
  <!-- huge pets -->
  <div class="hugepets__prices">
    <div class="hugepets__hugepets-bg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="hugepets__main">
              <div class="hugepets__links">
                <div class="row">
                  <div class="col-12">
                    <div class="hugepets__main-title langchange title-5" data-key="exclusivePets">
                    </div>
                    <div class="col-12">
                      <div class="hugepets__main-subtitle langchange proof" data-key="proof">
                        Pets are mostly valued via proof trades
                      </div>
                    </div>
                    <div>
                      <form class="searchForm">
                        <input type="text" id="search-input" placeholder="Pet Name">
                        <button type="button" id="search-button" class="langchange searchBtn" data-key="searchBtn"> </button>
                      </form>
                    </div>
  </div>
                    <!-- Вывод информации о продуктах -->
                    <?php foreach ($exclusive_pets as $exclusives) : ?>
                      <div class="col-md-4">
                        <div class="hugepets__info-main">
                          <div class="hugepets__info">
                            <div class="hugepets__info-img hugepets__info-img1"><img src="uploads/<?php echo $exclusives['image']; ?>" alt="<?php echo $exclusives['name']; ?>"> </div>
                            <div class="hugepets__name" id="search-results"><?php echo $exclusives['name']; ?> </div>
                            <div class="hugepets__gemvalue">
                              <span class="langchange gem" data-key="gemvalue">Gem Value </span><?php echo $exclusives['gem_value']; ?>
                            </div>
                            <div class="hugepets__demand">
                              <span class="langchange demand" data-key="demand">Demand </span><?php echo $exclusives['demand']; ?>
                            </div>
                            <div class="hugepets__vchange">
                              <span class="langchange vchange" data-key="vchange">Value Change </span><?php echo $exclusives['value_change']; ?>
                            </div>
                            <?php
                            // Вывод ссылки на редактирование, если пользователь авторизован
                            if (isset($_SESSION['user_id'])) {
                              echo '<a href="edit_files/exclusive_edit_file.php?id=' . $exclusives['id'] . '">Edit</a>';
                            }
                            ?>
                            <?php
                            // Вывод ссылки на редактирование, если пользователь авторизован
                            if (isset($_SESSION['user_id'])) {
                              echo '<a href="pages/delete_huge.php?id=' . $exclusives['id'] . '">Delete</a>';
                            }
                            ?>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- huge pets end -->
    <!-- footer -->
    <?php include 'footer.php'; ?>
</body>

</html>