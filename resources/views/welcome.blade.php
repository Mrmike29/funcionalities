<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Functionalities</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="<?= asset('/css/app.css') ?>" rel="stylesheet">
    <link href="<?= asset('/css/calculator.css') ?>" rel="stylesheet">
    <link href="<?= asset('/css/request-api.css') ?>" rel="stylesheet">
  </head>
  <body>
    <section class="m-slider-container">
      <div class="m-slider">
        <div class="m-slide active">
          <div class="m-title-functionalitie">
            <p>Calculator</p>
          </div>
          <div class="m-calculator">
            <div class="m-header">
                <div class="m-window">
                  <span></span>
                </div>
                <div class="m-input">
                  
                </div>
            </div>
            <div class="m-keys">
                <div class="m-row">
                  <div class="m-number">
                      <span class="m-playable-button">7</span>
                      <span class="m-playable-button">8</span>
                      <span class="m-playable-button">9</span>
                  </div>
                  <div class="m-symbol">
                      <span class="m-playable-button">+</span>
                  </div>
                </div>
                <div class="m-row">
                  <div class="m-number">
                      <span class="m-playable-button">4</span>
                      <span class="m-playable-button">5</span>
                      <span class="m-playable-button">6</span>
                  </div>
                  <div class="m-symbol">
                      <span class="m-playable-button">-</span>
                  </div>
                </div>
                <div class="m-row">
                  <div class="m-number">
                      <span class="m-playable-button">1</span>
                      <span class="m-playable-button">2</span>
                      <span class="m-playable-button">3</span>
                  </div>
                  <div class="m-symbol">
                      <span class="m-playable-button">*</span>
                  </div>
                </div>
                <div class="m-row">
                  <div class="m-number">
                      <span class="dull m-playable-button">AC</span>
                      <span class="m-playable-button">0</span>
                      <span class="m-playable-button">/</span>
                  </div>
                  <div class="m-symbol action">
                      <span class="m-playable-button">=</span>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="m-slide">
          <div class="m-title-functionalitie">
            <p>Request API</p>
          </div>
          <div class="m-request-api">
            <div class="m-request-header">
              <p>If You're Bored...</p>
            </div>
            <div class="m-request-body">
              <div id="m-request-api-response">
                
              </div>
            </div>
            <div class="m-request-footer">
              <button onclick="getActivity()">
                <img src="<?= asset('/icons/reload.png') ?>" alt="">
              </button>
            </div>
          </div>
        </div>
        <div class="m-slide"></div>
        <div class="m-slide"></div>
      </div>
      <div class="m-mike">
        <div class="m-mike-text">
          Michael A. Orejuela Ramirez
        </div>    
        <a class="m-mike-linkedin" href="https://www.linkedin.com/in/michael-orejuela-ram%C3%ADrez-066780175" target="_blank">
          <img src="<?= asset('/icons/linkedin.png') ?>" alt="">
        </a>
      </div>
      <ul class="m-arrows">
        <li onclick="prevSlide()"></li>
        <li onclick="nextSlide()"></li>
      </ul>
    </section>

    <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/stockio" title="Stockio">Stockio</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
    <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/royyan-wijaya" title="Royyan Wijaya">Royyan Wijaya</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
    <script type="text/javascript" src="<?= asset('/js/app.js') ?>"></script>
    <script type="text/javascript" src="<?= asset('/js/calculator.js') ?>"></script>
    <script type="text/javascript" src="<?= asset('/js/request-api.js') ?>"></script>
  </body>
</html>
