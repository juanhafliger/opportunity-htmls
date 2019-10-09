<div class="row">
  <div class="col-12 p-0">
    <h2>Conference Call</h2>
  </div>
  <div class="col-12 col-lg-5 p-0">
    <h6>Para ouvir o Conference Call mensal com a nossa equipe de gestão, basta preencher os campos abaixo.</h6>
    <form class="o-form needs-validation" novalidate>
      <div class="form-group">
        <input type="text" class="form-control" id="nome" placeholder="" required>
        <label for="nome">Nome</label>
        <div class="invalid-feedback">
          <span class="required">Obrigatório</span>
        </div>
      </div>
      <div class="form-group">
        <input type="email" class="form-control" id="email" placeholder="" required>
        <label for="email">Email</label>
        <div class="invalid-feedback">
          <span class="required">Obrigatório</span>
        </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="telefone" placeholder="">
        <label for="telefone">Telefone</label>
      </div>

      <button type="submit" class="o-btn">Assistir</button>
    </form>

  </div>

  <div class="col-12 col-lg-7 p-0 podcast">

    <img src="assets/images/video-conference-call.svg" class="thumb d-none d-lg-block" alt="" />
    <h4 class="title">Podcast . AGO 2019</h4>

    <div class="o-player">

      <div class="audio-player d-flex justify-content-between align-items-center">

        <div id="play-btn"></div>

        <div class="audio-wrapper" id="player-container" href="javascript:;">
          <audio id="player" ontimeupdate="initProgressBar()">
            <source src="http://www.lukeduncan.me/oslo.mp3" type="audio/mp3">
          </audio>
        </div>

        <div class="player-controls d-flex justify-content-betweeen align-items-center">
          <span id="seekObjContainer">
            <progress id="seekObj" value="0" max="1"></progress>
          </span>
        </div>

        <div class="timer">
          <span class="start-time">0:00</span><span class="divider"> / </span><span class="end-time">5:44</span>
        </div>

      </div>

    </div>

  </div>

</div>
