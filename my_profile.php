<div class="row mx-0">
  <div class="col-md-4 px-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="sidebar">
      <!-- <div class="container-fluid"> -->
        <div class="navbar-collapse" id="navbarNav">
          <ul id="w-resp">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
          </ul>
        <!-- </div> -->
      </div>
    </nav>
  </div>
  <div class="col-md-8" id="isi">
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab inventore, veniam, maiores asperiores magni quod quas sit nesciunt tempore commodi consectetur, autem incidunt quo. Nulla iure reiciendis assumenda eius nesciunt!l</p>
  </div>
</div>

<script>
  $(window).bind("resize", function() {
    console.log($(this).width())
    if ($(this).width() < 768) {
      $('#w-resp').addClass('d-flex')
    } else {
      $('#w-resp').removeClass('d-flex')
    }
  }).trigger('resize');
</script>