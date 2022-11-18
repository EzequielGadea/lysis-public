<!DOCTYPE html>
<html lang="es">
  
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/icono.ico" />
  <link rel="stylesheet" href="./dist/styles.css">
  <link rel="stylesheet" href="./dist/styles.css.map">
  <script src="https://kit.fontawesome.com/d2e8cc781d.js" crossorigin="anonymous"></script>
  <script src="./js/jquery-3.6.1.min.js"></script>
  <script src="./js/openSubscriptionModal.js"></script>
  <script src="./js/openLeaguesAsideLeft.js"></script>
  <script src="./js/changeAsideLeft.js"></script>
  <script src="./js/openPayModal.js"></script>
  <script src="./js/hamburguerMenu.js"></script>
  <script src="./js/openSearchModal.js"></script>
  <title>Lysis | Futbol</title>
</head>

<body>
  <main class="container-main">
    <nav class="nav">
			<a href="./index.html" class="nav__logo-link">
				<img src="./images/logo.svg" alt="logo de lysis" class="nav__logo-link__img" />
			</a>

			<div class="nav__line"></div>

			<!-- Conjunto de enlaces para el usuario, pagina de usuario, configuracion, 
					buscar y favoritos. -->
			<div class="nav__link-group">
				<a href="./login.html" class="nav__link-group__link">
					<i class="fa-solid fa-user fa-xl"></i>
				</a>
				<a href="./configAccount.html" class="nav__link-group__link">
					<i class="fa-solid fa-gear fa-xl"></i>
				</a>
				<a class="nav__link-group__link" id="nav__link-group__link__search-id">
					<i class="fa-solid fa-magnifying-glass fa-xl"></i>
				</a>
				<a href="./configFavorites.html" class="nav__link-group__link">
					<i class="fa-solid fa-star fa-xl"></i>
				</a>
			</div>

			<div class="nav__line"></div>

				<!-- Conjunto de enlaces para acceder a deportes. -->
			<div class="nav__link-group">
				<a href="./eventsPerSport.html" class="nav__link-group__link">
					<i class="fa-solid fa-futbol fa-xl --color-purple"></i>
				</a>
				<a href="#" class="nav__link-group__link">
					<i class="fa-solid fa-volleyball fa-xl"></i>
				</a>
				<a href="#" class="nav__link-group__link">
					<i class="fa-solid fa-basketball fa-xl"></i>
				</a>
        <a href="./eventsPerMark.html" class="nav__link-group__link">
          <i class="fa-solid fa-person-running fa-xl"></i>
        </a>
			</div> 
      <div class="nav__hamburger-container">
				<button class="nav__hamburger-container__btn"><i class="fa-solid fa-bars"></i></button>
				<button class="nav__hamburger-container__cross"><i class="fa-solid fa-xmark"></i></button>
				
				<div class="nav__hamburger-container__main-group">
				  <ul class="nav__hamburger-container__main-group__ul-group">
					<div class="nav_hamburger-container__main-group__ul-group__link-group">
					  <a href="./login.html" class="nav__hamburger-container__main-group__ul-group__link-group__link">
						<li><i class="fa-solid fa-user fa-xl"></i></li>
					  </a>
					  <a href="./configAccount.html" class="nav__hamburger-container__main-group__ul-group__link-group__link">
						<li><i class="fa-solid fa-gear fa-xl"></i></li>
					  </a>
					  <a class="nav__hamburger-container__main-group__ul-group__link-group__link" id="nav__hamburger-container__main-group__ul-group__link-group__link__search-id">
						<li><i class="fa-solid fa-magnifying-glass fa-xl"></i></li>
					  </a>
					  <a href="./configFavorites.html" class="nav__hamburger-container__main-group__ul-group__link-group__link">
						<li><i class="fa-solid fa-star fa-xl"></i></li>
					  </a>
					</div>
		
					<div class="nav__hamburger-container__main-group__ul-group__line"></div>
					
					<div class="nav_hamburger-container__main-group__ul-group__link-group">
					  <a href="./eventsPerSport.html" class="nav__hamburger-container__main-group__ul-group__link-group__link">
						<li><i class="fa-solid fa-futbol fa-xl --color-purple"></i></li>
					  </a>
					  <a href="#" class="nav__hamburger-container__main-group__ul-group__link-group__link">
						<li><i class="fa-solid fa-volleyball fa-xl"></i></li>
					  </a>
					  <a href="#" class="nav__hamburger-container__main-group__ul-group__link-group__link">
						<li><i class="fa-solid fa-basketball fa-xl"></i></li>
					  </a>
					  <a href="./eventsPerMark.html" class="nav__hamburger-container__main-group__ul-group__link-group__link">
						<li><i class="fa-solid fa-person-running fa-xl"></i></li>
					  </a>
					</div>
		
				  </ul>
				</div>
			</div>
		</nav>
    <aside class="aside-left" id="aside-left__countries-id">
      
      <div class="aside-left__live-container">
        <div class="aside-left__live-container__title">
          <i class="fa-solid fa-circle fa-2xs"></i>
          Live
        </div>
      
      

        <div class="aside-left__live-container__match-set">
          <div class="aside-left__live-container__match-set__live-matches">
            <div class="aside-left__live-container__match-set__live-matches__match">
              <div class="aside-left__live-container__match-set__live-matches__match__info">
                <img src="./images/escudos/barcelona.png" alt="escudo de futbol club barcelona"
                  class="aside-left__live-container__match-set__live-matches__match__info__shield">
                <div class="aside-left__live-container__match-set__live-matches__match__info__result-time">
                  <p class="aside-left__live-container__match-set__live-matches__match__info__result-time__result">
                    3 <span
                      class="aside-left__live-container__match-set__live-matches__match__info__result-time__result__colon">:
                    </span> 2
                  </p>
                  <p class="aside-left__live-container__match-set__live-matches__match__info__result-time__time">
                    90'
                  </p>
                </div>
                <img src="./images/escudos/barcelona.png" alt="escudo de futbol club barcelona"
                  class="aside-left__live-container__match-set__live-matches__match__info__shield">
              </div>
            </div>
            <div class="aside-left__live-container__match-set__live-matches__match">
              <div class="aside-left__live-container__match-set__live-matches__match__info">
                <img src="./images/escudos/barcelona.png" alt="escudo de futbol club barcelona"
                  class="aside-left__live-container__match-set__live-matches__match__info__shield">
                <div class="aside-left__live-container__match-set__live-matches__match__info__result-time">
                  <p class="aside-left__live-container__match-set__live-matches__match__info__result-time__result">
                    3 <span
                      class="aside-left__live-container__match-set__live-matches__match__info__result-time__result__colon">:
                    </span> 2
                  </p>
                  <p class="aside-left__live-container__match-set__live-matches__match__info__result-time__time">
                    90'
                  </p>
                </div>
                <img src="./images/escudos/barcelona.png" alt="escudo de futbol club barcelona"
                  class="aside-left__live-container__match-set__live-matches__match__info__shield">
              </div>
            </div>
          </div>
          <div class="aside-left__live-container__match-set__line"></div>
          <button class="aside-left__live-container__match-set__more">
            <i class="fa-solid fa-ellipsis"></i>
          </button>
        </div>
      </div>

      <form action="#" class="aside-left__look-up">
        <input type="text" class="aside-left__look-up__search" placeholder="Buscar">
        <button type="submit" class="aside-left__look-up__submit">
          <i class="fa-solid fa-magnifying-glass --color-gray-2"></i>
        </button>
      </form>

      <ul class="aside-left__country-list">
        <li class="aside-left__country-list__heading">
          Países
        </li>
        <li class="aside-left__country-list__country">
          <button class="aside-left__country-list__country__button" id="aside-left__country-list__country__button-id">
            <i class="fa-solid fa-globe --color-gray-3"></i>
            España
          </button>
        </li>
        <li class="aside-left__country-list__country">
          <button class="aside-left__country-list__country__button">
            <i class="fa-solid fa-globe --color-gray-3"></i>
            España
          </button>
        </li>
        <li class="aside-left__country-list__country">
          <button class="aside-left__country-list__country__button">
            <i class="fa-solid fa-globe --color-gray-3"></i>
            España
          </button>
        </li>
      </ul>
    </aside>

    <aside class="aside-left" id="aside-left__leagues-id">
      <button class="aside-left__back">
        <i class="fa-solid fa-angle-left"></i>
        Volver
      </button>
  
      <div class="aside-left__live-container">
        <div class="aside-left__live-container__title">
          <i class="fa-solid fa-circle fa-2xs"></i>
          Live
        </div>
  
        <div class="aside-left__live-container__match-set">
          <div class="aside-left__live-container__match-set__live-matches">
            <div class="aside-left__live-container__match-set__live-matches__match">
              <div class="aside-left__live-container__match-set__live-matches__match__info">
                <img src="./images/escudos/barcelona.png" alt="escudo de futbol club barcelona"
                  class="aside-left__live-container__match-set__live-matches__match__info__shield">
                <div class="aside-left__live-container__match-set__live-matches__match__info__result-time">
                  <p class="aside-left__live-container__match-set__live-matches__match__info__result-time__result">
                    3 <span
                      class="aside-left__live-container__match-set__live-matches__match__info__result-time__result__colon">:
                    </span> 2
                  </p>
                  <p class="aside-left__live-container__match-set__live-matches__match__info__result-time__time">
                    90'
                  </p>
                </div>
                <img src="./images/escudos/barcelona.png" alt="escudo de futbol club barcelona"
                  class="aside-left__live-container__match-set__live-matches__match__info__shield">
              </div>
            </div>
            <div class="aside-left__live-container__match-set__live-matches__match">
              <div class="aside-left__live-container__match-set__live-matches__match__info">
                <img src="./images/escudos/barcelona.png" alt="escudo de futbol club barcelona"
                  class="aside-left__live-container__match-set__live-matches__match__info__shield">
                <div class="aside-left__live-container__match-set__live-matches__match__info__result-time">
                  <p class="aside-left__live-container__match-set__live-matches__match__info__result-time__result">
                    3 <span
                      class="aside-left__live-container__match-set__live-matches__match__info__result-time__result__colon">:
                    </span> 2
                  </p>
                  <p class="aside-left__live-container__match-set__live-matches__match__info__result-time__time">
                    90'
                  </p>
                </div>
                <img src="./images/escudos/barcelona.png" alt="escudo de futbol club barcelona"
                  class="aside-left__live-container__match-set__live-matches__match__info__shield">
              </div>
            </div>
          </div>
          <div class="aside-left__live-container__match-set__line"></div>
          <button class="aside-left__live-container__match-set__more">
            <i class="fa-solid fa-ellipsis"></i>
          </button>
        </div>
      </div>
      
      <div class="aside-left__title">
          Ligas
      </div>

      <div class="aside-left__league-container">
        <div class="aside-left__league-container__league-group">
          <div class="aside-left__league-container__league-group__league-info">
            <img class="aside-left__league-container__league-group__league-info__img"
            src="./images/escudos/LaLigaLogo.png" alt="logo de liga" width="8%">
            <div class="aside-left__league-container__league-group__league-info__name">
              LaLiga Santander
            </div>
          </div>
          <a class="aside-left__league-container__league-group__open" id="aside-left__league-container__league-group__open-id">
            <i class="fa-solid fa-angle-down --color-gray-1" id=""></i>
          </a>
        </div>
        <div class="aside-left__league-container__table-info" id="aside-left__league-container__table-info__anchor">
          <div class="aside-left__league-container__table-info__head-group">
            <div class="aside-left__league-container__table-info__head-group__name">
              Equipo
            </div>
            <div class="aside-left__league-container__table-info__head-group__stats-group">
              <div class="aside-left__league-container__table-info__head-group__stats-group__stats">
                Gol
              </div>
              <div class="aside-left__league-container__table-info__head-group__stats-group__stats">
                G
              </div>
              <div class="aside-left__league-container__table-info__head-group__stats-group__stats">
                Pts
              </div>
            </div>
          </div>
          <a href="./team.html" class="aside-left__league-container__table-info__team-info">
            <div class="aside-left__league-container__table-info__team-info__image-name">
              <img class="aside-left__league-container__table-info__team-info__image-name__img" 
                src="./images/escudos/barcelona.png" alt="escudo" width="18%">
              <div class="aside-left__league-container__table-info__team-info__image-name__name">
                Barcelona
              </div>
            </div>
            <div class="aside-left__league-container__table-info__team-info__team-stats">
              <div class="aside-left__league-container__table-info__team-info__team-stats__stats">
                1
              </div>
              <div class="aside-left__league-container__table-info__team-info__team-stats__stats">
                3
              </div>
              <div class="aside-left__league-container__table-info__team-info__team-stats__stats">
                2
              </div>
            </div>
          </a>

          <a href="./team.html" class="aside-left__league-container__table-info__team-info">
            <div class="aside-left__league-container__table-info__team-info__image-name">
              <img class="aside-left__league-container__table-info__team-info__image-name__img" 
                src="./images/escudos/barcelona.png" alt="escudo" width="18%">
              <div class="aside-left__league-container__table-info__team-info__image-name__name">
                Barcelona
              </div>
            </div>
            <div class="aside-left__league-container__table-info__team-info__team-stats">
              <div class="aside-left__league-container__table-info__team-info__team-stats__stats">
                1
              </div>
              <div class="aside-left__league-container__table-info__team-info__team-stats__stats">
                3
              </div>
              <div class="aside-left__league-container__table-info__team-info__team-stats__stats">
                2
              </div>
            </div>
          </a>
        </div>
      </div>
    </aside>

    <div class="main-ev-per-sport --main --gap-48">
      <h1 class="main-ev-per-sport --header --fs-32">
        Futbol
      </h1>

      <div class="main-ev-per-sport__league">
        <img src="./images/escudos/LaLigaLogo.png" alt="logo laliga santander" class="main-ev-per-sport__league__logo">
        LaLiga Santander
      </div>

      <div class="main-ev-per-sport__event">
        <div class="main-ev-per-sport__event__info">
          <p class="main-ev-per-sport__info__text">31 julio</p>
          <p class="main-ev-per-sport__info__text">21:00</p>
        </div>
        <div class="main-ev-per-sport__event__info">
          <div class="main-ev-per-sport__event__info__team">
            Barcelona
            <img src="./images/escudos/barcelona.png" alt="escudo barcelona" class="main-ev-per-sport__event__info__team__shield">
          </div>
          <p class="main-ev-per-sport__event__info__team__vs">
            vs
          </p>
          <div class="main-ev-per-sport__event__info__team --flex-row-reverse">
            Barcelona
            <img src="./images/escudos/barcelona.png" alt="escudo barcelona" class="main-ev-per-sport__event__info__team__shield">
          </div>
        </div>
        <button class="main-ev-per-sport__event__info__team__ad-fav">
          <i class="fa-solid fa-circle-plus fa-lg --color-gray-3"></i>
        </button>
      </div>
    </div>

    <aside class="aside-right">
      <div class="aside-right__ad-container">
        <div class="aside-right__ad-container__ad"></div>
        <a href="#" class="aside-right__ad-container__ad-delete">
          ¿Quieres eliminar los anuncios?
        </a>
      </div>
      <table class="aside-right__table">
        <thead class="aside-right__table__head">
          <tr class="aside-rigt__table__head__row">
            <td class="aside-right__table__head__row__data">
              <h2 class="aside-right__table__head__row__data__h2">
                Ligas populares
              </h2>
            </td>
          </tr>
        </thead>
        <tbody class="aside-right__table__body">
          <tr class="aside-right__table__body__league">
            <td class="aside-right__table__body__league__info">
              <div class="aside-right__table__body__league__info__logo-text">
                <img src="./images/escudos/LaLigaLogo.png" alt="logo de la liga santander" 
                  class="aside-right__table__body__league__info__logo-text__logo" width="18px">
                <div class="aside-right__table__body__league__info__logo-text__league-country">
                  <p class="aside-right__table__body__league__info__logo-text__league-country__league">
                    LaLiga Santander
                  </p>
                  <p class="aside-right__table__body__league__info__logo-text__league-country__country">
                    España
                  </p>
                </div>
            </td>
          </tr>
          <tr class="aside-right__table__body__league">
            <td class="aside-right__table__body__league__info">
              <div class="aside-right__table__body__league__info__logo-text">
                <img src="./images/escudos/LaLigaLogo.png" alt="logo de la liga santander" 
                  class="aside-right__table__body__league__info__logo-text__logo" width="18px">
                <div class="aside-right__table__body__league__info__logo-text__league-country">
                  <p class="aside-right__table__body__league__info__logo-text__league-country__league">
                    LaLiga Santander
                  </p>
                  <p class="aside-right__table__body__league__info__logo-text__league-country__country">
                    España
                  </p>
                </div>
            </td>
          </tr>
          <tr class="aside-right__table__body__league">
            <td class="aside-right__table__body__league__info">
              <div class="aside-right__table__body__league__info__logo-text">
                <img src="./images/escudos/LaLigaLogo.png" alt="logo de la liga santander" 
                  class="aside-right__table__body__league__info__logo-text__logo" width="18px">
                <div class="aside-right__table__body__league__info__logo-text__league-country">
                  <p class="aside-right__table__body__league__info__logo-text__league-country__league">
                    LaLiga Santander
                  </p>
                  <p class="aside-right__table__body__league__info__logo-text__league-country__country">
                    España
                  </p>
                </div>
            </td>
          </tr>
          <tr class="aside-right__table__body__league">
            <td class="aside-right__table__body__league__info">
              <div class="aside-right__table__body__league__info__logo-text">
                <img src="./images/escudos/LaLigaLogo.png" alt="logo de la liga santander" 
                  class="aside-right__table__body__league__info__logo-text__logo" width="18px">
                <div class="aside-right__table__body__league__info__logo-text__league-country">
                  <p class="aside-right__table__body__league__info__logo-text__league-country__league">
                    LaLiga Santander
                  </p>
                  <p class="aside-right__table__body__league__info__logo-text__league-country__country">
                    España
                  </p>
                </div>
            </td>
          </tr>
          <tr class="aside-right__table__body__league">
            <td class="aside-right__table__body__league__info">
              <div class="aside-right__table__body__league__info__logo-text">
                <img src="./images/escudos/LaLigaLogo.png" alt="logo de la liga santander" 
                  class="aside-right__table__body__league__info__logo-text__logo" width="18px">
                <div class="aside-right__table__body__league__info__logo-text__league-country">
                  <p class="aside-right__table__body__league__info__logo-text__league-country__league">
                    LaLiga Santander
                  </p>
                  <p class="aside-right__table__body__league__info__logo-text__league-country__country">
                    España
                  </p>
                </div>
            </td>
          </tr>
        </tbody>
      </table>
    </aside>
  </main>

  <section class="section-modal">
    <button class="section-modal__close">
      <i class="fa-solid fa-xmark"></i>
    </button>
      <div class="section-modal__main-container">
        <div class="section-modal__main-container__title">
          Precios
        </div>

        <div class="section-modal__main-container__card-group">

          <div class="section-modal__main-container__card-group__card-container">
            <div class="section-modal__main-container__card-group__card-container__body">
              <div class="section-modal__main-container__card-group__card-container__body__type">
                Básico
              </div>
              <div class="section-modal__main-container__card-group__card-container__body__price-description">
                <div class="section-modal__main-container__card-group__card-container__body__price-description__price">
                  Gratis
                </div>
                <div class="section-modal__main-container__card-group__card-container__body__price-description__description">
                  Plan gratis para todos los usuarios
                </div>
              </div>
              <div class="section-modal__main-container__card-group__card-container__body__pros-group">
                <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro">
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__image">
                    <i class="fa-solid fa-circle-check"></i>
                  </div>
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__pro">
                    Acceso a todos los resultados
                  </div>
                </div>
                <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro">
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__image">
                    <i class="fa-solid fa-circle-check"></i>
                  </div>
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__pro">
                    Lista de favoritos
                  </div>
                </div>
              </div>
            </div>
            <button class="section-modal__main-container__card-group__card-container__button">
              <div class="section-modal__main-container__card-group__card-container__button__text">
                Comenzar
              </div>
            </button>
          </div>
        
          <div class="section-modal__main-container__card-group__card-container">
            <div class="section-modal__main-container__card-group__card-container__body">
              <div class="section-modal__main-container__card-group__card-container__body__type">
                Premium
              </div>
              <div class="section-modal__main-container__card-group__card-container__body__price-description">
                <div class="section-modal__main-container__card-group__card-container__body__price-description__price-time">
                  <div class="section-modal__main-container__card-group__card-container__body__price-description__price-time__price">
                    U$D14.99
                  </div>
                  <div class="section-modal__main-container__card-group__card-container__body__price-description__price-time__time">
                    /mes
                  </div>  
                </div>
                <div class="section-modal__main-container__card-group__card-container__body__price-description__description">
                  Plan gratis para todos los usuarios
                </div>
              </div>
              <div class="section-modal__main-container__card-group__card-container__body__pros-group">
                <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro">
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__image">
                    <i class="fa-solid fa-circle-check"></i>
                  </div>
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__pro">
                    Acceso a todos los resultados
                  </div>
                </div>
                <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro">
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__image">
                    <i class="fa-solid fa-circle-check"></i>
                  </div>
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__pro">
                    Lista de favoritos
                  </div>
                </div>
                <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro">
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__image">
                    <i class="fa-solid fa-circle-check"></i>
                  </div>
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__pro">
                    Sin publicidad
                  </div>
                </div>
                <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro">
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__image">
                    <i class="fa-solid fa-circle-check"></i>
                  </div>
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__pro">
                    Notificaciones por navegador
                  </div>
                </div>
                <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro">
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__image">
                    <i class="fa-solid fa-circle-check"></i>
                  </div>
                  <div class="section-modal__main-container__card-group__card-container__body__pros-group__image-pro__pro">
                    Notificaciones por correo
                  </div>
                </div>                
              </div>
            </div>
            <button class="section-modal__main-container__card-group__card-container__button">
              <div class="section-modal__main-container__card-group__card-container__button__text">
                Suscribirse
              </div>
            </button>
          </div>

        </div>
      </div>
  </section>

  <section class="pay-modal">
    <div class="pay-modal__top-container">
      <div class="pay-modal__top-container__title-close">
        <div class="pay-modal__top-container__title-close__title">
          Ingrese información de tarjeta
        </div>
        <a class="pay-modal__top-container__title-close__close">
          <i class="fa-solid fa-xmark"></i>
        </a>
      </div>
      <div class="pay-modal__top-container__line"></div>
    </div>
    <div class="pay-modal__body-container">
      <form action="#" method="post" class="pay-modal__body-container__form-container">
        <div class="pay-modal__body-container__form-container__label-input">
          <label for="numberCard" class="pay-modal__body-container__form-container__label-input__label">Numero de tarjeta</label>
          <input type="text" name="numberCard" id="numberCard" class="pay-modal__body-container__form-container__label-input__input --input" placeholder="0000 0000 0000 0000" style="width: 94%;">
        </div>
        <div class="pay-modal__body-container__form-container__middle-group">
          <div class="pay-modal__body-container__form-container__middle-group__label-input">
            <label for="date" class="pay-modal__body-container__form-container__label-input__label">Fecha de expiracion</label>
            <input type="month" name="date" id="date" class="pay-modal__body-container__form-container__label-input__input --input">
          </div>
          <div class="pay-modal__body-container__form-container__middle-group__label-input">
            <label for="code" class="pay-modal__body-container__form-container__middle-group__label-input__label">CVV</label>
            <input type="text" name="code" id="code" class="pay-modal__body-container__form-container__middle-group__label-input__input --input" placeholder="999">
          </div>
        </div>
        <div class="pay-modal__body-container__form-container__middle-group__label-input">
          <label for="cardHolder" class="pay-modal__body-container__form-container__middle-group__label-input__label">Nombre del titular</label>
          <input type="text" name="cardHolder" id="cardHolder" class="pay-modal__body-container__form-container__middle-group__label-input__input --input" placeholder="Nombre completo" style="width: 94%;">
        </div>
        <button type="submit" class="pay-modal__body-container__form-container__button --login-btn" style="width: 100%; margin: 1%;">
          Pagar
        </button>
      </form>
    </div>
  </section>

  <section class="search-modal">
    <div class="search-modal__close-btn">
      <button class="search-modal__close-btn__btn">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
    <div class="search-modal__main-container">
      <form action="#" class="search-modal__main-container__look-up">
        <input type="text" class="search-modal__main-container__look-up__search" placeholder="Buscar">
        <button type="submit" class="search-modal__main-container__look-up__submit">
          <i class="fa-solid fa-magnifying-glass --color-gray-2"></i>
        </button>
      </form>
    </div>
  </section>
</body>

</html>