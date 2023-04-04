  <?php
  session_start();

  require_once 'db_connect.php';

  // Обработка выхода пользователя
  if (isset($_POST['logout'])) {
    session_destroy(); // Уничтожить все данные сессии
    header('Location: login.php');
    exit();
  }
  ?>

  <!-- petxroblox main -->
  <header class="petxroblox__nav-main">
    <div class="container">
      <div class="row header__main-align">
        <div class="col-3">
          <div class="petxroblox__header-log">
            <div>
              <a href="login.php" class="login-btn2">Вход</a>
            </div>
            <div>
              <?php
              if (isset($_SESSION['user_id'])) {
                echo '<form action="" method="post">
                  <button type="submit" name="logout" class="logout-btn2">Выход</button>
                </form>';
              }
              ?>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="dropdown show dropdown-text">
            <button class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <h1 class="petxroblox__header-text">
                Pet Simulator X Values
              </h1>
            </button>
            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item langchange title-1" data-key="hugePets" href="huge_pets.php">Huge Pets</a>
              <a class="dropdown-item langchange title-5" data-key="exclusivePets" href="exclusive_pets.php">Exclusive
                Pets</a>
              <a class="dropdown-item langchange title-3" data-key="hardcorePets" href="hardcore_pets.php">Hardcore
                Pets</a>
              <a class="dropdown-item langchange title-4" data-key="updatepets" href="updatepets.php">New Update
                Pets</a>
              <a class="dropdown-item langchange title-6" data-key="miscItems" href="#">Misc Items</a>
              <a class="dropdown-item langchange title-7" data-key="mythicalPets" href="#">Mythical
                Pets</a>
              <a class="dropdown-item langchange title-8" data-key="legendaryPets" href="#">Legendary
                Pets</a>
              <form action="index.php">
                <button class="custom-btn btn-11 langchange" data-key="goBack">Click me<div class="dot"></div></button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-3 d-flex justify-content-end">
          <input type="radio" class="input_lang" id="lang_en" name="lang" data-value="en" onchange="changeLang('en');" />
          <label for="lang_en"><img src="img/icons/en.png" alt="" class="en flag"></label>
          <input type="radio" class="input_lang" id="lang_ru" name="lang" data-value="ru" onchange="changeLang('ru');" />
          <label for="lang_ru"><img src="img/icons/ru.png" alt="" class="ru flag"></label>
          <input type="radio" class="input_lang" id="lang_ua" name="lang" data-value="ua" onchange="changeLang('ua');" />
          <label for="lang_ua"><img src="img/icons/ua.png" alt="" class="ua flag"></label>
        </div>
      </div>
    </div>
  </header>
  <!-- main end -->
  <!-- petxroblox main burger -->
  <div id="mySidenav" class="sidenavburger">
    <a href="javascript:void(0)" class="closebtnburger" onclick="closeNavBurger()">×</a>
    <div class="header-burger">
      <div class="header-burger__links" id="header-burger">
        <a class="wrapper-link langchange title-1" href="huge_pets.php" data-key="hugePets">Huge Pets</a>
        <a class="wrapper-link langchange title-5" data-key="exclusivePets" href="exclusive_pets.php">Exclusive Pets</a>
        <a class="wrapper-link langchange title-3" data-key="hardcorePets" href="hardcore_pets.php">Hardcore Pets</a>
        <a class="dropdown-item langchange title-4" data-key="updatepets" href="updatepets.php">New Update Pets</a>
        <a class="wrapper-link langchange title-6" data-key="miscItems" href="#">Misc Items</a>
        <a class="wrapper-link langchange title-7" data-key="mythicalPets" href="#">Mythical Pets</a>
        <a class="wrapper-link langchange title-8" data-key="legendaryPets" href="#">Legendary Pets</a>
        <form action="index.php">
          <button class="custom-btn btn-11 langchange" data-key="goBack">Click me<div class="dot"></div></button>
        </form>
      </div>
    </div>
  </div>
  <span onclick="openNavBurger()" class="openburger">☰</span>
  <!-- burger end -->
  <!-- language  -->
  <div class="language__btns">
    <input type="radio" class="input_lang" id="lang_en" name="lang" data-value="en" onchange="changeLang('en');" />
    <label for="lang_en"><img src="img/icons/en.png" alt="" class="en flag"></label>
    <input type="radio" class="input_lang" id="lang_ru" name="lang" data-value="ru" onchange="changeLang('ru');" />
    <label for="lang_ru"><img src="img/icons/ru.png" alt="" class="ru flag"></label>
    <input type="radio" class="input_lang" id="lang_ua" name="lang" data-value="ua" onchange="changeLang('ua');" />
    <label for="lang_ua"><img src="img/icons/ua.png" alt="" class="ua flag"></label>
  </div>
  <!-- language end -->