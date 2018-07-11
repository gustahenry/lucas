<?php require_once('header.php') ?>
<body>

    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navas navbar-nav mr-auto ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#home">HOME</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#historia">NOSSA HISTORIA</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#fotos">FOTOS</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#presenca">CONFIRMAR PRESENÇA</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#lista">LISTA DE PRESENTES</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="home" id="home">
    <img style="width: 30rem; margin-top: 7rem; margin-left: 37rem;" src="assets/img/lucas-e-amanda.svg" alt="">
  </div>

  <div class="data text-center py-5">
    <h3>FALTAM APENAS</h3>

    <table class="countdownContainer mx-auto text-center">
      <tr class="number">
        <td class="count-margin" id="days">120</td>
        <td class="count-margin" id="hours">4</td>
        <td class="count-margin" id="minutes">12</td>
        <td class="count-margin" id="seconds">22</td>
      </tr>
      <tr class="info">
        <td>DIAS</td>
        <td>HORAS</td>
        <td>MINUTOS</td>
        <td>SEGUNDOS</td>
      </tr>
    </table>

    <script type="text/javascript">

      function countdown(){
        var now = new Date();
        var eventDate = new Date(2018, 08, 14);

        var currentTiime = now.getTime();
        var eventTime = eventDate.getTime();

        var remTime = eventTime - currentTiime;

        var s = Math.floor(remTime / 1000);
        var m = Math.floor(s / 60);
        var h = Math.floor(m / 60);
        var d = Math.floor(h / 24);

        h %= 24;
        m %= 60;
        s %= 60;

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        document.getElementById("days").textContent = d;
        document.getElementById("days").innerText = d;

        document.getElementById("hours").textContent = h;
        document.getElementById("minutes").textContent = m;
        document.getElementById("seconds").textContent = s;

        setTimeout(countdown, 1000);
      }

      countdown();
    </script>
    
  </div>

  <div class="historia text-center my-5" id="historia">
    <div class="text-center mb-4">
      <h2>NOSSA HISTORIA</h2>
      <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 470.9 54.2" style="enable-background:new 0 0 470.9 54.2; width: 15rem;" xml:space="preserve">
<style type="text/css">
  .st0{fill:#ed145b;}
</style>
<g>
  <path class="st0" d="M248.2,21.4c-0.2-0.7-0.6-1.4-1.1-2c-0.6-0.6-1.2-0.9-1.8-1.2c-1.2-0.6-2.8-0.8-4.1-0.4
    c-2.6,0.8-4.1,2.7-5.4,4.4c-1.2,1.8-2.2,3.8-2.9,5.8c-0.6-1.9-1.6-3.8-3-5.4c-1.3-1.6-3.3-3.1-5.8-3.3c-1.2-0.1-2.4,0.1-3.6,0.5
    c-0.7,0.2-1.4,0.8-1.9,1.4c-0.5,0.7-0.7,1.4-0.8,2.1c-0.3,2.7,0.4,4.7,1,6.8c1.4,4,3.4,7.6,5.4,11.2c2.1,3.5,4.3,6.9,6.7,10.3
    l2,2.8l2-2.8c2.6-3.5,4.8-7.1,7-10.8c2.1-3.8,4.1-7.6,5.4-11.9C248.2,26.5,248.8,24.2,248.2,21.4z"/>
  <g>
    <g>
      <path class="st0" d="M211.6,34.8c-3.5-2.6-7.3-4.7-11.2-6.4c-3.9-1.7-8-3-12.2-3.8c-4.2-0.9-8.4-1.3-12.6-1.3
        c-4.2-0.1-8.4,0.5-12.8,1c-4.3,0.5-8.7,1-13,1.5c-4.3,0.5-8.7,1.1-13,1.7c-8.7,1.3-17.3,2.9-25.9,4.5c-8.6,1.6-17.4,2.8-26.1,3.5
        c-8.8,0.7-17.6,1-26.5,0.4c-8.8-0.7-17.8-2.1-26.2-5.4c-4.2-1.5-8.2-3.7-11.9-6.3l-2.7-2.1c-0.9-0.7-1.6-1.6-2.4-2.3
        c-1.7-1.5-2.9-3.4-4.2-5.2l0.4-0.3c3,3.1,6.4,5.9,10.1,7.9c3.7,2.1,7.7,3.7,11.8,4.8c8.2,2.4,16.7,3.5,25.3,4
        c8.6,0.5,17.3,0.6,25.9,0.2c8.7-0.4,17.4-1,26.1-1.7c8.7-0.8,17.4-1.8,26-3.5c8.6-1.6,17.1-3.8,25.7-5.5
        c8.6-1.7,18.1-1.9,26.7,0.6c8.7,2.3,16.9,6.7,22.9,13.2L211.6,34.8z"/>
      <path class="st0" d="M15.3,5.5c0.5,0.9,0.7,1.6,0.3,2.5c-0.3,0.7-1.2,1.1-2,0.9c-1-0.2-1.4-0.9-1.8-1.8C11,5.2,14.2,3.6,15.3,5.5
        z"/>
      <path class="st0" d="M3.4,12.5c0.4,0.2,0.7,0.4,1,0.7c2.1,2.1-1.4,5-3,2.6c-0.1-0.2-0.3-0.4-0.4-0.6C0.2,13.5,1.7,11.8,3.4,12.5z
        "/>
      <path class="st0" d="M3.7,0.2c1.1,0.5,1.6,1.3,2.1,2.4C6.3,4,5.2,5.5,3.9,5.6c-1.5,0-2.5-0.4-3.4-1.7C-1.1,1.8,1.5-0.8,3.7,0.2z"
        />
    </g>
    <g>
      <path class="st0" d="M259,34.5c6.1-6.5,14.3-10.9,22.9-13.2c8.7-2.4,18.1-2.3,26.7-0.6c8.7,1.6,17.1,3.9,25.7,5.5
        c8.6,1.6,17.3,2.7,26,3.5c8.7,0.7,17.4,1.3,26.1,1.7c8.7,0.4,17.3,0.3,25.9-0.2c8.6-0.4,17.2-1.6,25.3-4
        c4.1-1.1,8.1-2.8,11.8-4.8c3.7-2.1,7.1-4.8,10.1-7.9l0.4,0.3c-1.3,1.7-2.5,3.7-4.2,5.2c-0.8,0.8-1.5,1.7-2.4,2.3l-2.7,2.1
        c-3.7,2.5-7.7,4.8-11.9,6.3c-8.4,3.2-17.3,4.7-26.2,5.4c-8.9,0.6-17.7,0.3-26.5-0.4c-8.8-0.7-17.5-1.9-26.1-3.5
        c-8.6-1.5-17.2-3.2-25.9-4.5c-4.3-0.7-8.7-1.2-13-1.7c-4.3-0.5-8.7-1-13-1.5c-4.3-0.5-8.6-1.1-12.8-1c-4.2,0-8.5,0.4-12.6,1.3
        c-4.2,0.9-8.2,2.1-12.2,3.8c-3.9,1.7-7.8,3.8-11.2,6.4L259,34.5z"/>
      <path class="st0" d="M455.6,5.5c-0.5,0.9-0.7,1.6-0.3,2.5c0.3,0.7,1.2,1.1,2,0.9c1-0.2,1.4-0.9,1.8-1.8
        C459.8,5.2,456.6,3.6,455.6,5.5z"/>
      <path class="st0" d="M467.4,12.5c-0.4,0.2-0.7,0.4-1,0.7c-2.1,2.1,1.4,5,3,2.6c0.1-0.2,0.3-0.4,0.4-0.6
        C470.6,13.5,469.2,11.8,467.4,12.5z"/>
      <path class="st0" d="M467.2,0.2c-1.1,0.5-1.6,1.3-2.1,2.4c-0.5,1.3,0.6,2.8,1.9,2.9c1.5,0,2.5-0.4,3.4-1.7
        C471.9,1.8,469.4-0.8,467.2,0.2z"/>
    </g>
  </g>
</g>
</svg>
    </div>
     <div class="row justify-content-center">
    <div class="col-4">
      Somos duas pessoas que se conheceram em uma noite de boliche e ali Deus já começava a agir e colocar os Seus Planos em prática. Desde então uma amizade nasceu e começamos a nos conhecer e perceber algumas coisas em comum. Ele brincalhão e ela também, eis que surge a vontade de querer estar mais próximos, o desejo de se conhecer mais e mais. Oraram, confiaram, e hoje estão construindo o início de uma vida juntos. O Senhor nos fez e depois nos uniu de uma maneira tão fantástica que nem somos capazes de entender como tudo se deu. E sendo assim, fez com que tivéssemos mais vida e alegria em nossas vidas.
    </div>
  </div>
  </div>

  <div class="fotos mb-5" id="fotos">
    <div class="text-center" style="padding-top: 14rem;">
      <h2>FOTOS</h2>
      <img style="width: 15rem;" src="assets/img/coracao.svg" alt="">
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-4" style="margin-top: 1.8rem;">
      <img class="img-fluid my-3" src="assets/img/miniatura-foto-2.png" alt="">
      <img class="img-fluid my-3" src="assets/img/miniatura-foto-3.png" alt="">
      <img class="img-fluid my-3" src="assets/img/miniatura-foto-8.png" alt="">
    </div>
    <div class="col-4">
      <img class="img-fluid my-3" src="assets/img/miniatura-foto-6.png" alt="">
      <img class="img-fluid my-3" src="assets/img/miniatura-foto-7.png" alt="">
    </div>
    <div class="col-4" style="margin-top: 1.8rem;">
      <img class="img-fluid my-3" src="assets/img/miniatura-foto-4.png" alt="">
      <img class="img-fluid my-3" src="assets/img/miniatura-foto-5.png" alt="">
      <img class="img-fluid my-3" src="assets/img/miniatura-foto-1.png" alt="">
    </div>
  </div>
</div>

<div class="presenca mt-5 py-5" id="presenca">
    <div class="text-center pb-5">
      <h2>CONFIRME SUA PRESENÇA</h2>
      <img style="width: 15rem;" src="assets/img/coracao.svg" alt="">
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-6">
          <form method="post" action="adiciona.php">
            <div class="form-group">
              <input type="text" class="form-control form-custom" id="convidado" name="convidado" placeholder="NOME COMPLETO">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-custom" id="convidado2" name="convidado2" placeholder="NOME COMPLETO">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-custom" id="convidado3" name="convidado3" placeholder="NOME COMPLETO">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-custom" id="convidado4" name="convidado4" placeholder="NOME COMPLETO">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-custom" id="convidado5" name="convidado5" placeholder="NOME COMPLETO">
            </div>
            <div class="row">
              <div class="col-6"><button type="button" class="btn btn-primary form-control btn-transparent">ADICIONAR CONVIDADOS</button></div>
              <div class="col-6"><button type="submit" class="btn btn-primary form-control btn-custom">ENVIAR</button></div>
            </div>   
          </form>
        </div>
      </div>
    </div> 
</div>

  <div class="lista my-5" id="lista">
    <div class="text-center mb-5">
      <h2>LISTA DE DESEJOS</h2>
<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 470.9 54.2" style="enable-background:new 0 0 470.9 54.2; width: 15rem;" xml:space="preserve">
<style type="text/css">
  .st0{fill:#ed145b;}
</style>
<g>
  <path class="st0" d="M248.2,21.4c-0.2-0.7-0.6-1.4-1.1-2c-0.6-0.6-1.2-0.9-1.8-1.2c-1.2-0.6-2.8-0.8-4.1-0.4
    c-2.6,0.8-4.1,2.7-5.4,4.4c-1.2,1.8-2.2,3.8-2.9,5.8c-0.6-1.9-1.6-3.8-3-5.4c-1.3-1.6-3.3-3.1-5.8-3.3c-1.2-0.1-2.4,0.1-3.6,0.5
    c-0.7,0.2-1.4,0.8-1.9,1.4c-0.5,0.7-0.7,1.4-0.8,2.1c-0.3,2.7,0.4,4.7,1,6.8c1.4,4,3.4,7.6,5.4,11.2c2.1,3.5,4.3,6.9,6.7,10.3
    l2,2.8l2-2.8c2.6-3.5,4.8-7.1,7-10.8c2.1-3.8,4.1-7.6,5.4-11.9C248.2,26.5,248.8,24.2,248.2,21.4z"/>
  <g>
    <g>
      <path class="st0" d="M211.6,34.8c-3.5-2.6-7.3-4.7-11.2-6.4c-3.9-1.7-8-3-12.2-3.8c-4.2-0.9-8.4-1.3-12.6-1.3
        c-4.2-0.1-8.4,0.5-12.8,1c-4.3,0.5-8.7,1-13,1.5c-4.3,0.5-8.7,1.1-13,1.7c-8.7,1.3-17.3,2.9-25.9,4.5c-8.6,1.6-17.4,2.8-26.1,3.5
        c-8.8,0.7-17.6,1-26.5,0.4c-8.8-0.7-17.8-2.1-26.2-5.4c-4.2-1.5-8.2-3.7-11.9-6.3l-2.7-2.1c-0.9-0.7-1.6-1.6-2.4-2.3
        c-1.7-1.5-2.9-3.4-4.2-5.2l0.4-0.3c3,3.1,6.4,5.9,10.1,7.9c3.7,2.1,7.7,3.7,11.8,4.8c8.2,2.4,16.7,3.5,25.3,4
        c8.6,0.5,17.3,0.6,25.9,0.2c8.7-0.4,17.4-1,26.1-1.7c8.7-0.8,17.4-1.8,26-3.5c8.6-1.6,17.1-3.8,25.7-5.5
        c8.6-1.7,18.1-1.9,26.7,0.6c8.7,2.3,16.9,6.7,22.9,13.2L211.6,34.8z"/>
      <path class="st0" d="M15.3,5.5c0.5,0.9,0.7,1.6,0.3,2.5c-0.3,0.7-1.2,1.1-2,0.9c-1-0.2-1.4-0.9-1.8-1.8C11,5.2,14.2,3.6,15.3,5.5
        z"/>
      <path class="st0" d="M3.4,12.5c0.4,0.2,0.7,0.4,1,0.7c2.1,2.1-1.4,5-3,2.6c-0.1-0.2-0.3-0.4-0.4-0.6C0.2,13.5,1.7,11.8,3.4,12.5z
        "/>
      <path class="st0" d="M3.7,0.2c1.1,0.5,1.6,1.3,2.1,2.4C6.3,4,5.2,5.5,3.9,5.6c-1.5,0-2.5-0.4-3.4-1.7C-1.1,1.8,1.5-0.8,3.7,0.2z"
        />
    </g>
    <g>
      <path class="st0" d="M259,34.5c6.1-6.5,14.3-10.9,22.9-13.2c8.7-2.4,18.1-2.3,26.7-0.6c8.7,1.6,17.1,3.9,25.7,5.5
        c8.6,1.6,17.3,2.7,26,3.5c8.7,0.7,17.4,1.3,26.1,1.7c8.7,0.4,17.3,0.3,25.9-0.2c8.6-0.4,17.2-1.6,25.3-4
        c4.1-1.1,8.1-2.8,11.8-4.8c3.7-2.1,7.1-4.8,10.1-7.9l0.4,0.3c-1.3,1.7-2.5,3.7-4.2,5.2c-0.8,0.8-1.5,1.7-2.4,2.3l-2.7,2.1
        c-3.7,2.5-7.7,4.8-11.9,6.3c-8.4,3.2-17.3,4.7-26.2,5.4c-8.9,0.6-17.7,0.3-26.5-0.4c-8.8-0.7-17.5-1.9-26.1-3.5
        c-8.6-1.5-17.2-3.2-25.9-4.5c-4.3-0.7-8.7-1.2-13-1.7c-4.3-0.5-8.7-1-13-1.5c-4.3-0.5-8.6-1.1-12.8-1c-4.2,0-8.5,0.4-12.6,1.3
        c-4.2,0.9-8.2,2.1-12.2,3.8c-3.9,1.7-7.8,3.8-11.2,6.4L259,34.5z"/>
      <path class="st0" d="M455.6,5.5c-0.5,0.9-0.7,1.6-0.3,2.5c0.3,0.7,1.2,1.1,2,0.9c1-0.2,1.4-0.9,1.8-1.8
        C459.8,5.2,456.6,3.6,455.6,5.5z"/>
      <path class="st0" d="M467.4,12.5c-0.4,0.2-0.7,0.4-1,0.7c-2.1,2.1,1.4,5,3,2.6c0.1-0.2,0.3-0.4,0.4-0.6
        C470.6,13.5,469.2,11.8,467.4,12.5z"/>
      <path class="st0" d="M467.2,0.2c-1.1,0.5-1.6,1.3-2.1,2.4c-0.5,1.3,0.6,2.8,1.9,2.9c1.5,0,2.5-0.4,3.4-1.7
        C471.9,1.8,469.4-0.8,467.2,0.2z"/>
    </g>
  </g>
</g>
</svg>

    </div>
    <div class="container">
      <div class="text-center mb-5">
        <p class="">Para acessar a lista de presentes, entre em algum dos sites abaixo, insira o nome dos noivos e a data:</p>
        <p class="">Amanda antoniazzi olimpio & Lucas De Oliveira Neves | Data 24/08/2018</p>
      </div>
      
      <div class="row">
      <div class="col-4">
        <p class="text-center">LISTA DE DESEJOS - PONTO FRIO</p>
        <a href="https://www.pontofrio.com.br/"><img class="img-fluid" src="assets/img/logo-ponto-frio.png" alt=""></a>
        
        <div class="mt-4 mx-4">
          <a class="btn btn-primary btn-rosa form-control" href="https://www.pontofrio.com.br/" role="button">IR A LOJA</a>
        </div>
        
      </div>
      <div class="col-4">
        <p class="text-center">LISTA DE DESEJOS - CASAS BAHIA</p>
        <a href="https://www.casasbahia.com.br/"><img class="img-fluid" src="assets/img/logo-casas-bahia.png" alt=""></a>
        
        <div class="mt-4 mx-4">
          <a class="btn btn-primary btn-rosa form-control" href="https://www.casasbahia.com.br/" role="button">IR A LOJA</a>
        </div>
      </div>
      <div class="col-4">
        <p class="text-center">LISTA DE DESEJOS - EXTRA</p>
        <a href="https://www.extra.com.br/"><img class="img-fluid" src="assets/img/logo-extra.png" alt=""></a>
        
        <div class="mt-4 mx-4">
          <a class="btn btn-primary btn-rosa-borda form-control" href="https://www.extra.com.br/" role="button">IR A LOJA</a>
        </div>
      </div>
    </div>
    
    </div>
  </div>

  <div class="footers">
    <div class="container">
      <div class="row justify-content-between">
            <div class="col-sm-7 col-12">
              <p>© 2017 LUCAS E AMANDA - Todos os direitos reservados.</p>
            </div>
            <div class="col-sm-2 col-12 ml-auto">
              <a href="http://estudiomalves.com/" target="_blank"><img src="assets/img/malves.png" alt=""></a>
            </div>
          </div>
    </div>
  </div>
  
<?php require_once('footer.php') ?>