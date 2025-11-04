@extends('include.master')
@section('slider')
@include('include.slider')
@endsection
@section('content')
 <!-- Header section end -->
    <!-- banner section  end -->
    <!-- Divison Section Start -->
    <section id="division">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="d-flex">
              <div class="division-text">
                <h1>Our Divisions</h1>
                <h2>Where Expertise Meets Impact</h2>
                <p class="mt-4">
                  We operate across a diverse range of specialized sectors, each
                  driven by innovation, expertise, and a commitment to
                  real-world impact. From technology and environment to security
                  and energy, our divisions work together to shape sustainable,
                  future-ready solutions.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 bg-division"></div>
        </div>
      </div>
    </section>

    <!-- Division Section End -->
    <!-- Division Section End -->
    <section class="p-5 industires">
      <div class="container">
        <div class="row pt-5">
          <div class="col-md-12 mb-5 text-center">
            <h1 class="industries-text">Driving Progress Across Industries</h1>
            <h2 class="industries-text-main">Major Industries Served</h2>
          </div>
          <div class="col-md-4 p-1">
            <div class="box bg-bank">
              <h1 class="text-white">Banking Sector</h1>
            </div>
          </div>
          <div class="col-md-4 p-1">
            <div class="box bg-govt">
              <h1 class="text-white">Govt. Establishments</h1>
            </div>
          </div>
          <div class="col-md-4 p-1">
            <div class="box bg-medical">
              <h1 class="text-white">Medical Sector</h1>
            </div>
          </div>
          <div class="col-md-4 p-1">
            <div class="box bg-education">
              <h1 class="text-white">Educational Institutions</h1>
            </div>
          </div>
          <div class="col-md-4 p-1">
            <div class="box bg-defence">
              <h1 class="text-white">Defence Sector</h1>
            </div>
          </div>
          <div class="col-md-4 p-1">
            <div class="box bg-law">
              <h1 class="text-white">Law Enforcement</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Divison Section End -->

    <!-- Counter Section Start -->
    <section class="counter mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 main-counter">
            <h1>About Us</h1>
            <h2>Committed To Excellence</h2>
          </div>
          <div class="col-md-4 counter-box">
            <h1 class="counter-number">10+</h1>
            <p>Years of Industry Experience</p>
          </div>
          <div class="col-md-4 counter-box">
            <h1 class="counter-number">1000+</h1>
            <p>Successful Projects delivered</p>
          </div>
          <div class="col-md-4 counter-box">
            <h1 class="counter-number">5000+</h1>
            <p>Partnerships & Collaborations</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Counter Section End -->
    <!-- Partner section start -->
    <section class="mt-5 mb-3 p-2 bg-partner">
      <div class="container">
        <div class="row slick-slider2 mt-3 mb-3">
          <div class="partner-box border-0 text-center">
            <img src="./assets/images/Partners Logo/dell.png" />
          </div>
          <div class="partner-box border-0 text-center">
            <img src="./assets/images/Partners Logo/hp.png" />
          </div>
          <div class="partner-box border-0 text-center">
            <img src="./assets/images/Partners Logo/ott.png" />
          </div>
          <div class="partner-box border-0 text-center">
            <img src="./assets/images/Partners Logo/siemens.png" />
          </div>

          <div class="partner-box border-0 text-center">
            <img src="./assets/images/Partners Logo/image 7.png" />
          </div>
          <div class="partner-box border-0 text-center">
            <img
              src="./assets/images/Partners Logo/hengstler_logo_175_en 2.png"
            />
          </div>
          <div class="partner-box border-0 text-center">
            <img src="./assets/images/Partners Logo/huawei_logo 1.png" />
          </div>
          <div class="partner-box border-0 text-center">
            <img src="./assets/images/Partners Logo/CB-Logo 1.png" />
          </div>
          <!-- <div class="partner-box border-0 text-center">
              <img src="./assets/images/Partners Logo/image 8.png" />
            </div> -->
          <!-- <div class="partner-box border-0 text-center">
              <img src="./assets/images/Partners Logo/image 13.png" />
            </div> -->
        </div>
      </div>
    </section>
    <!-- Partner Section End -->

    <!-- Team Section Start -->
    <section id="team" class="team-section mt-5 mb-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 team-text mb-4">
            <h3>Our Leadership & Talent</h3>
          </div>
          <div class="team-box">
            <div class="team-swiper row gx-0">
              <div class="mt-3 col-md-3">
                <div class="card-without-nothing">
                  <div class="image-team">
                    <img src="./assets/images/team/1.png" />
                  </div>
                  <div class="team-designations mt-3">
                    <h5 class="mb-0">Muhammad Ahsan Bashir</h5>
                    <p class="text-main">Director</p>
                  </div>
                </div>
              </div>
              <div class="mt-3 col-md-3">
                <div class="card-without-nothing">
                  <div class="image-team">
                    <img src="./assets/images/team/Frame 96.png" />
                  </div>
                  <div class="team-designations mt-3">
                    <h5 class="mb-0">Syed Imran Ali</h5>
                    <p class="text-main">Director</p>
                  </div>
                </div>
              </div>
              <div class="mt-3 col-md-3">
                <div class="card-without-nothing">
                  <div class="image-team">
                    <img src="./assets/images/team/Frame 95.png" />
                  </div>
                  <div class="team-designations mt-3">
                    <h5 class="mb-0">Zain Ali</h5>
                    <p class="text-main">Chief Technology Officer</p>
                  </div>
                </div>
              </div>
              <div class="mt-3 col-md-3">
                <div class="card-without-nothing">
                  <div class="image-team">
                    <img src="./assets/images/team/3.png" />
                  </div>
                  <div class="team-designations mt-3">
                    <h5 class="mb-0">Riaz Hussain</h5>
                    <p class="text-main">Senior Manager BD</p>
                  </div>
                </div>
              </div>
              <div class="mt-3 col-md-3">
                <div class="card-without-nothing">
                  <div class="image-team">
                    <img src="./assets/images/team/Sibtain.png" />
                  </div>
                  <div class="team-designations mt-3">
                    <h5 class="mb-0">Sibtain Bashir</h5>
                    <p class="text-main">Senior Manager IT</p>
                  </div>
                </div>
              </div>
              <div class="mt-3 col-md-3">
                <div class="card-without-nothing">
                  <div class="image-team">
                    <img src="./assets/images/team/4.png" />
                  </div>
                  <div class="team-designations mt-3">
                    <h5 class="mb-0">Quratulain Malik</h5>
                    <p class="text-main">Office Coordinator</p>
                  </div>
                </div>
              </div>
              <div class="mt-3 col-md-3">
                <div class="card-without-nothing">
                  <div class="image-team">
                    <img src="./assets/images/team/5.png" />
                  </div>
                  <div class="team-designations mt-3">
                    <h5 class="mb-0">Iqra Khan</h5>
                    <p class="text-main">Solution Engineer Electronics</p>
                  </div>
                </div>
              </div>
              <div class="mt-3 col-md-3">
                <div class="card-without-nothing">
                  <div class="image-team">
                    <img src="./assets/images/team/2.png" />
                  </div>
                  <div class="team-designations mt-3">
                    <h5 class="mb-0">Shams-ur-Rahman</h5>
                    <p class="text-main">Solution Engineer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <a href="#" class="simple-btn"
            >Learn More <i class="fas fa-arrow-right ms-2"></i
          ></a>
        </div>
      </div>
    </section>

    <!-- Team Section End -->

    <!-- Section Insights Start -->

    <section class="insights mt-5 mb-3">
      <div class="container">
        <div class="row pt-5">
          <div class="col-md-12 text-center mb-4">
            <h1>Insights & Updates</h1>
            <h2 class="insight-text">Stay Informed with Industry Trends</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="insight-box bg-primary-color">
              <h2>
                Why Custom Software Solutions Outperform Off-the-Shelf Tools
              </h2>
              <div class="insight-box-text">
                <p>
                  Discover how tailor-made software can streamline operations,
                  boost efficiency, and scale with your business — unlike
                  generic one-size-fits-all platforms.
                </p>
                <a href="#" class="simple-btn">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="insight-box bg-success-color">
              <h2>The Role of Hydromet Systems in Climate Resilience</h2>
              <div class="insight-box-text">
                <p>
                  Learn how advanced hydrological and meteorological monitoring
                  empowers early warning systems, supports disaster
                  preparedness, and protects communities wo...
                </p>
                <a href="#" class="simple-btn">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="insight-box bg-purple-color">
              <h2>Innovations in Biotechnology</h2>
              <div class="insight-box-text">
                <p>
                  Explore the latest advancements in biotech, from gene editing
                  to personalized medicine, and how these innovations are
                  revolutionizing patient care and treatment outcomes.
                </p>
                <a href="#" class="simple-btn">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="insight-box bg-danger-color">
              <h2>Key Security Challenges</h2>
              <div class="insight-box-text">
                <p>
                  Explore the evolving cybersecurity challenges and how
                  businesses can protect their sensitive data from emerging
                  threats like ransomware, phishing, and insider attacks.
                </p>
                <a href="#" class="simple-btn">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="insight-box bg-warning-color">
              <h2>Harnessing the Power of the Sun:</h2>
              <div class="insight-box-text">
                <p>
                  Discover how solar energy is transforming the global energy
                  landscape, from residential rooftops to large-scale solar
                  farms, and why it’s key to a sustainable future.
                </p>
                <a href="#" class="simple-btn">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="insight-box bg-brown-color">
              <h2>Sustainable Practices in the Minerals Industry</h2>
              <div class="insight-box-text">
                <p>
                  Explore how innovations in mining technology and sustainable
                  practices are shaping the future of the minerals industry,
                  ensuring resource efficiency and environmental responsibility.
                </p>
                <a href="#" class="simple-btn">Learn More</a>
              </div>
            </div>
          </div>

          <a href="#" class="simple-btn mt-5"
            >Learn More <i class="fas fa-arrow-right ms-2"></i
          ></a>
        </div>
      </div>
    </section>

    <!-- Section Insights End -->

    <section class="location mt-md-5 mb-3">
      <div class="container">
        <div class="row pt-md-5">
          <div class="col-md-12 text-center mb-4">
            <h1>Global Reach</h1>
            <h3 class="insight-text">Our Locations</h3>
          </div>
          <div class="col-md-3">
            <div class="location-box">
              <img src="./assets/images/lahore.jpg" alt="Lahorew Image" />
              <h2>Lahore</h2>
            </div>
          </div>
          <div class="col-md-3">
            <div class="location-box">
              <img src="./assets/images/islamabad.jpg" alt="Islamad Image" />
              <h2>Islamabad</h2>
            </div>
          </div>
          <div class="col-md-3">
            <div class="location-box">
              <img src="./assets/images/ajk.jpg" alt="AJ&K Image" />
              <h2>AJ&K</h2>
            </div>
          </div>
          <div class="col-md-3">
            <div class="location-box">
              <img src="./assets/images/uae.jpg" alt="UAE Image" />
              <h2>UAE</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection