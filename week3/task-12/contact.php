<?php include_once("./components/head.php")?>
  <body>
    <?php include_once("./components/header.php")?>

    <div class="container mt-4 mb-4">
      <div class="row">
        <div class="col-lg-4">
          <div class="contact mb-5">
            <div class="contact-header mb-5">
              <span>LETS TALK</span>
              <h2>Speak With Expert Engineers.</h2>
            </div>
            <div class="contact-info">
              <div class="contact-email mb-4">
                <div class="icon-home">
                  <i class="fa fa-home pr"></i>
                </div>
                <div class="email-text">
                  <span class="fw-bold">Email:</span>
                  <a href="tel:123222-888" id="contact-tel">123222-888</a>
                </div>
              </div>
              <div class="contact-phone mb-4">
                <div class="icon-phone">
                  <i class="fa fa-phone pr"></i>
                </div>
                <div class="phone-text">
                  <span class="fw-bold">Phone:</span>
                  <a href="#" id="contact-phone">support@rstheme.com</a>
                </div>
              </div>
              <div class="contact-address mb-4">
                <div class="icon-address">
                  <i class="fa fa-map-marker pr"></i>
                </div>
                <div class="address-text">
                  <span class="fw-bold">Address:</span>
                  <span id="contact-address">New Jesrsy, 1201, USA</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 form-div">
          <form id="contact" onsubmit="validateForm(event)">
            <div class="row">
              <div class="form-header">
                <span class="form-title mb-4">GET IN TOUCH</span>
                <h2>Fill The Form Below</h2>
              </div>
              
              <div class="col-lg-6 mb-4 col-md-6 col-sm-6">
                <input type="text" class="form-control" placeholder="Name" oninput="clearError(event)">
              </div>
              <div class="col-lg-6 mb-4 col-md-6 col-sm-6">
                <input type="text" class="form-control" placeholder="Last Name" oninput="clearError(event)">
              </div>
              <div class="col-lg-6 mb-4 col-md-6 col-sm-6">
                <input type="text" class="form-control" placeholder="E-mail" oninput="clearError(event)">
              </div>
              <div class="col-lg-6 mb-4 col-md-6 col-sm-6">
                <input type="Password" class="form-control" placeholder="Password" oninput="clearError(event)">
              </div>
              <div class="col-lg-6 mb-4 col-md-6 col-sm-6">
                <input type="text" class="form-control" placeholder="Phone" oninput="clearError(event)">
              </div>
              <div class="col-lg-6 mb-4 col-md-6 col-sm-6">
                <select class="form-select" oninput="clearError(event)">
                  <option selected>Gender</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>
              </div>
              <div class="col-lg-12 mb-4">
                <textarea class="form-control" placeholder="Description" oninput="clearError(event)"></textarea>
              </div>

              <div>
                <button type="submit" class="btn btn-primary btn-lg submit-button">Submit Now</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="map"></div>

    <?php include_once("./components/footer.php") ?>

    <script src="/js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxu25pgSDpkR94r2OeldEfeuD_zHN6ks4&callback=initMap&libraries=&v=weekly" async></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/contact.js"></script>
  </body>
</html>