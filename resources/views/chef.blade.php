<section class="section" id="chefs">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 offset-lg-4 text-center">
              <div class="section-heading">
                  <h6>Our Chefs</h6>
                  <h2>We offer the best ingredients for you</h2>
              </div>
          </div>
      </div>

      <div class="row">
        @foreach ($chefs as $chef)
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <img height="350" width="600" src="/chefimage/{{$chef->image}}" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>{{$chef->name}}</h4>
                        <span>{{$chef->speciality}}</span>
                    </div>
                </div>
            </div>
        @endforeach
      </div>

  </div>
</section>