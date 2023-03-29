  <!-- petxroblox main -->
  <header class="petxroblox__nav-main">
    <div class="container">
      <div class="row header__main-align">
        <div class="col-3">
          <div class="petxroblox__header-logo">
            <a href="index.php">
              <!-- <img src="img/icons/test.png" class="logo"> -->
            </a>
          </div>
        </div>
        <div class="col-6">
          <div class="dropdown show dropdown-text">
            <button class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <h1 class="petxroblox__header-text">
                Pet Simulator X Values
              </h1>
            </button>
            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item langchange title-1" data-key="hugePets" href="huge.html">Huge Pets</a>
              <a class="dropdown-item langchange title-2" data-key="toyPets" href="toypets.html">Toy Pets</a>
              <a class="dropdown-item langchange title-5" data-key="exclusivePets" href="excpets.html">Exclusive
                Pets</a>
              <a class="dropdown-item langchange exclusiveEggPets" data-key="exclusiveEggPets"
                href="eggpets.html">Exclusive Egg Pets</a>
              <a class="dropdown-item langchange title-3" data-key="hardcorePets" href="hardcorepets.html">Hardcore
                Pets</a>
              <a class="dropdown-item langchange title-6" data-key="miscItems" href="#">Misc Items</a>
              <a class="dropdown-item langchange title-7" data-key="mythicalPets" href="#">Mythical
                Pets</a>
              <a class="dropdown-item langchange title-8" data-key="legendaryPets" href="#">Legendary
                Pets</a>
              <a class="dropdown-item langchange title-4" data-key="updatepets" href="updatepets.php">New Update
                Pets</a>
              <form action="index.php">
                <button class="custom-btn btn-11 langchange" data-key="goBack">Click me<div class="dot"></div></button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-3 d-flex justify-content-end">
          <input type="radio" class="input_lang" id="lang_en" name="lang" data-value="en"
            onchange="changeLang('en');" />
          <label for="lang_en"><img src="img/icons/en.png" alt="" class="en flag"></label>
          <input type="radio" class="input_lang" id="lang_ru" name="lang" data-value="ru"
            onchange="changeLang('ru');" />
          <label for="lang_ru"><img src="img/icons/ru.png" alt="" class="ru flag"></label>
          <input type="radio" class="input_lang" id="lang_ua" name="lang" data-value="ua"
            onchange="changeLang('ua');" />
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
        <a class="wrapper-link langchange title-1" href="huge.html" data-key="hugePets">Huge Pets</a>
        <a class="wrapper-link langchange title-2" href="toypets.html" data-key="toyPets">Toy Pets</a>
        <a class="wrapper-link langchange title-5" data-key="exclusivePets" href="excpets.html">Exclusive Pets</a>
        <a class="wrapper-link langchange exclusiveEggPets" data-key="exclusiveEggPets" href="eggpets.html">Exclusive
          Egg Pets</a>
        <a class="wrapper-link langchange title-3" data-key="hardcorePets" href="hardcorepets.html">Hardcore Pets</a>
        <a class="wrapper-link langchange title-6" data-key="miscItems" href="#">Misc Items</a>
        <a class="wrapper-link langchange title-7" data-key="mythicalPets" href="#">Mythical Pets</a>
        <a class="wrapper-link langchange title-8" data-key="legendaryPets" href="#">Legendary Pets</a>
        <a class="dropdown-item langchange title-4" data-key="updatepets" href="updatepets.php">New Update Pets</a>
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