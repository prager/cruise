<div class="container mt-5">
<div class="card border-0 shadow my-5 opacity-75">
<div class="card-body px-5">
<div class="d-flex justify-content-end">  </div>

  <div class="row mt-3">
    <div class="col-sm-2">
      <!-- Button trigger modal -->
      <a href="#" data-bs-toggle="modal" data-bs-target="#imgModal" class="text-warning-emphasis"><small>Mapa <i class="bi bi-box-arrow-up-right"></i></small> </a>
      <iframe src="https://www.google.com/maps/d/embed?mid=1uYrqenkMbaz0WRuVISdGZvRWwLnmkBg&ehbc=2E312F&z=12" width="275" height="850 frameborder="0" style="border:0" allowfullscreen" class="d-none d-lg-block"></iframe>
    </div>
    <div class="col-sm-1">
      <small><a href="#"  data-bs-toggle="modal" data-bs-target="#login" class="text-decoration-none text-secondary"><i class="bi bi-person"></i></a></small>
    </div>
    <div class="col-sm-8">
      <h2>Pozvánka pro rodinu, přátele a hosty </h2>
      <h5>Na sobotu dne 27. 5. 2023</h5>
      <?php
      if(strlen($msg) > 0) { ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo $msg; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="Reroute();"></button>
          </div>
      <?php } ?>
      <div class="text-center opacity-100"><img src="/img/plezier.png" class="img-fluid" alt=""></div>
      <p><small>Photo &#169;Jan Plezier</small></p>
      <p class="mt-2">Příjemci této pozvánky jsou zváni na půldenní výlet lodí <a href="https://janplezier.cz" style="text-decoration-style: dotted;" class="text-warning-emphasis" target="_blank">Jan Plezier</a> s přemírou jídla, pití a zábavy.</p>
      <p><strong>Rezervace</strong> ale nutná! Takže <a href="#" data-bs-toggle="modal" data-bs-target="#reservationsModal" style="text-decoration-style: dotted;" class="text-warning-emphasis">prosil bych kliknout sem</a>.</p>
      <p>Odjezd: 14:30 <br> Konec plavby: 22:00<p>
      <p>Nastupuje se u Čechova mostu a popluje do ústí Berounky a zpět na druhou stranu Prahy do Tróje s ukončením opět u Čechova mostu. Na zpáteční cestě budeme mít skvělý výhled na večerní Prahu, takže to bude stát opravdu za to.</p>
      <p>Pro vybrané přespolní hosty bude zajištěno ubytování.</p>
      <p>Pokud by byla pro někoho plavba příliš dlouhá, možno přistoupit či vystoupit dle přiložené <a href="https://www.google.com/maps/d/viewer?mid=1uYrqenkMbaz0WRuVISdGZvRWwLnmkBg&ll=50.052948887885776%2C14.426280249999989&z=12" target="_blank" style="text-decoration-style: dotted;" class="text-warning-emphasis">Google mapy</a> na Smíchově u Palackého mostu, v Modřanech (ulice Vltavanů) a v závěru plavby pak u Trojského mostu a u metra Nádraží Holešovice. Časy zastávek budou upřesněny později.</p>
      <p>Na Google mapě jsou vyznačena místa možných zastávek s časovými odhady, které jsou ale velmi hrubé a budou upřesněny</p>
      <div class="row mt-5">
        <div class="col">
          <div class="pt-4 pb-3 bg-dark text-white text-center opacity-75">
            <p><a href="#" class="text-white text-bold" style="text-decoration-style: dotted;" data-bs-toggle="modal" data-bs-target="#msgModal">Pro případné dotazy pořadateli klikněte sem</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-1 d-flex justify-content-end">
      <a href="<?php echo base_url() . '/index.php/en' ?>" class="text-decoration-none text-secondary"><small>en</small></a>
    </div>
  </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="reservationsModal" tabindex="-1" aria-labelledby="reservationsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="<?php echo base_url() . '/index.php/send-res' ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="reservationsModalLabel">Rezervace vstupenky na loď</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <label for="fname" class="form-label">Jméno</label>
            <input type="text" class="form-control" id="fname" name="fname" required>
          </div>
          <div class="col">
            <label for="lname" class="form-label">Příjmení</label>
            <input type="text" class="form-control" id="lname" name="lname" required>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <label for="phone" class="form-label">Číslo mobilu</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
          </div>
          <div class="col">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-sm-4">
            <label for="cnt" class="form-label">Počet vstupenek</label>
            <input type="number" class="form-control" id="cnt" name="cnt" value="1">
          </div>

        </div>
        <div class="row mt-3">
          <div class="col">
            <label for="reason" class="form-label">Vztah k pořadateli (bratranec, strýc, kamarád(ka) z devítky či VŠ, atd...)</label>
            <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Rezervovat plavbu</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="imgModal" tabindex="-1" aria-labelledby="imgModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
      <div class="row">
        <div class="col text-center">
          <iframe src="https://www.google.com/maps/d/embed?mid=1uYrqenkMbaz0WRuVISdGZvRWwLnmkBg&ehbc=2E312F&z=12" width="275" height="850 frameborder="0" style="border:0" allowfullscreen"></iframe>
        </div>
      </div>
      </div>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="msgModal" tabindex="-1" aria-labelledby="msgModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="<?php echo base_url() . '/index.php/send-msg' ?>" method="post">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="msgModalLabel">Poslat vzkaz pořadateli</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row mt-2">
          <div class="col">
            <label for="fname" class="form-label">Jméno</label>
            <input type="text" class="form-control" id="fname" name="fname" required>
          </div>
          <div class="col">
            <label for="lname" class="form-label">Příjmení</label>
            <input type="text" class="form-control" id="lname" name="lname" required>
          </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-sm-6">
              <label for="subj" class="form-label">Téma dotazu</label>
              <input type="text" class="form-control" id="subj" name="subj" required>
            </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <label for="msg" class="form-label">Napiště nějaký vzkaz. Předem děkuji!</label>
            <textarea class="form-control" id="msg" name="msg" rows="3" required></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Poslat Vzkaz</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <form action="<?php echo base_url() . '/index.php/login' ?>" method="post">
        <div class="modal-body">
            <p class="lead">Enter your Username and Password</p>
                <div class="mb-3">
                    <label for="user" class="col-form-label">
                        Username
                    </label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="Enter Username"/>
                </div>
                <div class="mb-3">
                    <label for="pass" class="col-form-label">
                        Password
                    </label>
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password"/>
                </div>
                <div class="mb-3">
                  <p><small>Lost password? Click <a href="#" data-bs-toggle="modal" data-bs-target="#reset">here</a>
                </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary"> Submit </button>
        </form>
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="reset" tabindex="-1" aria-labelledby="resetLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reset Your Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <form action="<?php echo base_url() . '/index.php/load-pass' ?>" method="post">
        <div class="modal-body">
          <p class="lead">Enter your Email</p>
              <div class="mb-3">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email"/>
              </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary"> Submit </button>
      </form>
        </div>
    </div>
    </div>
</div>
<!--<div class="container mt-5">
<div class="card border-0 shadow my-5 opacity-75">
<div class="card-body p-5">
  <div class="row">

    <div class="col-sm-12">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>


    </div>
  </div>
</div>
</div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center opacity-75">
  <p>Footer</p>
</div>-->
