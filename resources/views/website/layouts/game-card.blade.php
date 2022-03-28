<div class="game-box" style="background: url('assets/img/banner/gameImage2.jfif');
    background-repeat: no-repeat;
    background-size: cover;padding: 35px 8px;border-radius: 5px 60px;">
  <div class="game-img">
    <img src="assets/img/games/1.png" alt="game 1" >
  </div>
  <div class="game-desc">
    <h5 class="game-title">Game title</h5>
    <div class="alert bg-warning" role="alert">
    starts in : <span data-countdown="2022/01/20 23:59:00"></span>
    </div>
    <!-- <div class="alert bg-custom-sec" role="alert">
    started on : 12/01/2022
    </div> -->
    <div class="alert bg-danger" role="alert">
      will ends on : 22/01/2022
    </div>
    <button type="button" class="btn btn-success btn-sm btn-anim-scale play-game">Play Now 
      <!-- ( <i class="fa-solid fa-indian-rupee-sign"></i> 500 ) -->
    </button>
  </div>
</div>

<!--game start confirmation Modal -->
<div class="modal fade" id="g-s-confirm-modal" tabindex="-1" aria-labelledby="g-s-confirm-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-Color text-light">
      <div class="modal-header">
        <h5 class="modal-title " id="g-s-confirm-modalLabel">How do you want to play?</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-center">
          You are about to start the game. <br> You can play the game for free or you can use coins. <br>
          Playing using coins will increase the winning chances.
        </p>
        <div class="d-flex gap-3" id="play-choise-btn-div">
          <a href="play-game.php" class="btn btn-danger w-100"
          >No, Play free</a>
          <button type="button" id="play-with-token" class="btn btn-success w-100">Yes, Play with token</button>
        </div>
        <div class="invest-token-div d-none">
          <form action="#">
            <div class="form-control">
              <select name="" id="" class="form-control text-white">
                <option class="text-muted" selected disabled value="">Select Coins</option>
                <option class="text-dark" value="">1</option>
                <option class="text-dark" value="">11</option>
                <option class="text-dark" value="">21</option>
                <option class="text-dark" value="">31</option>
                <option class="text-dark" value="">41</option>
              </select>
            </div>
          </form>
          <a href="play-game.php" class="btn btn-success w-100"
          >Start game with (11) coins</a>
        </div>
      </div>
    </div>
  </div>
</div>