<?php include("_header.php");?>
  <div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>You May Call, Send email, Message or Visit our offices</h4>
          <h2>Make Your Contact Now.!</h2>
          <p>Welcome to support our efforts on biodiversity conservation and improve the livelihood of marginalized community</p>
          <div class="main-button"><a href="#">Donate</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="more-info reservation-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <h4>Make a Phone Call</h4>
            <a href="#">+255 787 766 530 Or +255 718001841</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Contact Us via Email</h4>
            <a href="mail:info@emergetanzania">info@emergetanzania.or.tz</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-map-marker"></i>
            <h4>Visit Our Offices</h4>
            <a href="#">Area Six, Nearby Arc Hotel, Tanzania</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
		<div class="mapouter">
			<div class="gmap_canvas">
				<iframe width="1295" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=arc%20hotel&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				<a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:1295px;}</style>
				<a href="https://www.embedgooglemap.net">google map on web page</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1295px;}</style>
			</div>
		</div>
        </div>
        <div class="col-lg-12">
          <form id="reservation-form" name="gs" method="POST" role="search" action="process.php">
            <div class="row">
              <div class="col-lg-12">
                <h4>Make Your <em>contact</em> Through This <em>Form</em></h4>
              </div>
			  <div class="col-lg-6">
              <div class="col-lg-6">
                  <fieldset>
                      <label for="Name" class="form-label">Your Name</label>
                      <input type="text" name="name" class="Name" placeholder="Conjesta Patrick" autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label"> Your Phone Number</label>
                    <input type="text" name="phone" class="Number" placeholder="+255 787 766 530" autocomplete="on">
                </fieldset>
              </div>
			  <div class="col-lg-6">
                  <fieldset>
                      <label for="Name" class="form-label">Your Email</label>
                      <input type="email" name="email" class="Name" placeholder="info@emergetanzania.or.tz" autocomplete="on" required>
                  </fieldset>
              </div>
              <!--<div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">Date</label>
                    <input type="date" name="date" class="date" required>
                </fieldset>
              </div> -->  
			  </div>
			 <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">Message</label>
                </fieldset>
				<textarea type="text" name="sms" class="Name" required style="width: 250px; height: 250px;"></textarea>
              </div>
              <div class="col-lg-12">                        
                  <fieldset>
                      <button type="submit" name="contactusform" class="main-button" disabled>Submit</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php include("_footer.php");?>
  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>
