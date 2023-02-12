

<!--<nav class="navbar navbar-expand-sm bg-dark navbar-dark opacity-75 fixed-top">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<div class="p-5 bg-secondary text-white text-center opacity-75">
  <h1>My First Bootstrap 5 Page</h1>
  <p>Resize this responsive page to see the effect!</p>
</div>-->

<div class="container mt-5">
<div class="card border-0 shadow my-5 opacity-75">
<div class="card-body px-5">
  <div class="row mt-3">
    <div class="col-sm-3">
    <a href="#" data-bs-toggle="modal" data-bs-target="#imgModal" class="text-warning-emphasis"><small>Map <i class="bi bi-box-arrow-up-right"></i></small></a>
      <iframe src="https://www.google.com/maps/d/embed?mid=1uYrqenkMbaz0WRuVISdGZvRWwLnmkBg&ehbc=2E312F&z=12" width="275" height="850 frameborder="0" style="border:0" allowfullscreen" class="d-none d-lg-block"></iframe>
    </div>
    <div class="col-sm-8">
      <small>If someone sent you this link in an email or private message, then...</small>
      <h2>You've Been Invited to Cruise on Vltava River!</h2>
      <h5>On Saturday May 27th, 2023</h5>
      <?php
      if(strlen($msg) > 0) { ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo $msg; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="Rerouten();"></button>
          </div>
      <?php } ?>
      <div class="text-center opacity-100"><img src="/img/plezier.png" class="img-fluid" alt=""></div>
      <p><small>Photo &#169;Jan Plezier</small></p>
      <p class="mt-2">You are invited on Vltava river cruise with food, dring and entertainment on <a href="https://janplezier.cz" target="_blank" style="text-decoration-style: dotted;" class="text-warning-emphasis">Jan Plezier</a>. However, you will need to reserve your spot <a href="#" data-bs-toggle="modal" data-bs-target="#reservationsModal" style="text-decoration-style: dotted;" class="text-warning-emphasis">by clicking here</a>.</p>
      <p>Departure: 14:30 <br> Arrival: 22:00<p>
      <p>We will sail according to the enclosed <a href="https://www.google.com/maps/d/viewer?mid=1uYrqenkMbaz0WRuVISdGZvRWwLnmkBg&ll=50.052948887885776%2C14.426280249999989&z=12" target="_blank" style="text-decoration-style: dotted;" class="text-warning-emphasis">Google map</a> from the port near Čechův most in Prague south to Berounka River and back through Prague to Troja and then back again to Čechův most. The views of Hradčany and Prague Castle in the evening are expected to be speactacular and definitively worth it!</p>
      <p>Lodging may be available for selected guests upon request.</p>
      <p>As per the <a href="https://www.google.com/maps/d/viewer?mid=1uYrqenkMbaz0WRuVISdGZvRWwLnmkBg&ll=50.052948887885776%2C14.426280249999989&z=12" target="_blank" style="text-decoration-style: dotted;" class="text-warning-emphasis">Google map</a> we may do a few short stops on the way to take on or drop off passengers.</p>
      <div class="mb-5">&nbsp;</div>
      <div class="row mt-5">
        <div class="col">
          <div class="pt-4 pb-3 bg-dark text-white text-center opacity-75">
            <p><a href="#" class="text-white text-bold" style="text-decoration-style: dotted;" data-bs-toggle="modal" data-bs-target="#msgModal">For any questions click here to send a special message to the host</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-1 d-flex justify-content-end">
      <a href="<?php echo base_url() . '/index.php/cs' ?>" class="text-decoration-none"><img src="/img/cz-flag-ex.png" alt=""></a>
    </div>
  </div>


</div>
</div>
</div>

<!-- Reservations modal-->
<div class="modal fade" id="reservationsModal" tabindex="-1" aria-labelledby="reservationsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="<?php echo base_url() . '/index.php/send-res-en' ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="reservationsModalLabel">Vltava Cruise Reservation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" required>
          </div>
          <div class="col">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" required>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <label for="phone" class="form-label">Cell Phone</label>
            <input type="text" class="form-control" id="phone" required>
          </div>
          <div class="col">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-sm-4">
            <label for="cnt" class="form-label">Number of Guests</label>
            <input type="number" class="form-control" id="cnt" value="1">
          </div>

        </div>
        <div class="row mt-3">
          <div class="col">
            <label for="reason" class="form-label">Relationship to Host (US Military brother or sister, good friend, etc.)</label>
            <textarea class="form-control" id="reason" rows="3" required></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Book Your Cruise</button>
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
      <form action="<?php echo base_url() . '/index.php/send-msg-en' ?>" method="post">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="msgModalLabel">Send a message to the host</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row mt-2">
          <div class="col">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" required>
          </div>
          <div class="col">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" required>
          </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="col-sm-6">
              <label for="subj" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subj" required>
            </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <label for="msg" class="form-label">Write something. Thanks in advance!</label>
            <textarea class="form-control" id="msg" rows="3" required></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Send the Message</button>
      </div>
      </form>
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
