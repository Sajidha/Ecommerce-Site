<?php include 'index.php';?>

<!--Banner slider start-->
  <div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">
          <img src="images/b1.jpg" alt="Los Angeles" style="width:100%;">
          <div class="bg-overlay"></div>
        </div>

        <div class="item">
          <img src="images/b2.jpg" alt="Chicago" style="width:100%;">
          <div class="bg-overlay"></div>
        </div>
      
        <div class="item">
          <img src="images/b3.jpg" alt="New York" style="width:100%;">
          <div class="bg-overlay"></div>
        </div>
    
      </div>
      <!--Banner slider end-->

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div style="clear:both;"></div>

  <!--Product CTAs Start-->
  <section class="padT40 padTabT40">
    <div class="prod-container">
      <div class="row">
        <div class="cta-wrapper long-ad">
          <a href="#">
            <div class="cta-img">
              <img src="images/p2_snip.jpg" alt="Nature" class="img-responsive mobileHide">
              <img src="images/p2.jpg" alt="Nature" class="img-responsive mobileShow">
            </div>
            <div class="cta-caption">
              <div class="cta-description">SURF THE NEXT WAVE
                <h2>ALL NEW</h2>
              </div>
              <button class="btn cta-btn black-cta-btn">Shop Men</button>
              <div class="mob-spacer mobileShow"></div>
              <button class="btn cta-btn black-cta-btn">Shop Women</button>
            </div>
          </a>
        </div>
      </div>

      <div class="row padTB40 padTabT40 padTabB40">
        <div class="col-md-6 padTabR0" style="padding-right: 8px">
            <div class="cta-wrapper short-ad">
            <a href="#">
                <div class="cta-img">
                <img src="images/p5.jpg" alt="Nature" height="350">
                </div>
                <div class="cta-caption" style="background:none;">
                  <button class="btn cta-btn black-cta-btn">Shop Men</button>
                  <div class="mob-spacer mobileShow"></div>
                  <button class="btn cta-btn white">Shop Women</button>
                </div>
            </a>
            </div>
        </div>
        <div class="col-md-6 padTabT40 padTabL0" style="padding-left: 8px">
            <div class="cta-wrapper short-ad">
            <a href="#">
                <div class="cta-img">
                <img src="images/p4.jpg" alt="Nature" height="350">
                </div>
                <div class="cta-caption" style="background:none;">
                  <button class="btn cta-btn black-cta-btn">Shop Men</button>
                  <div class="mob-spacer mobileShow"></div>
                  <button class="btn cta-btn white">Shop Women</button>
                </div>
            </a>
            </div>
        </div>
      </div>
    </div>

    <div class="container-fluid prod-container parallax">
      <div class="full-width-ad">
        <div class="row">
            <div class="cta-caption">
              <div class="cta-caption" style="background:none;">
                <button class="btn cta-btn black-cta-btn">Shop Now</button>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!--Product CTAs End-->

<?php include 'footer.php';?>