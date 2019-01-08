<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/fonts.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous"
    />
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,300"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css" />
  </head>
  <body>
    <section class="home" id="home">
      <div class="main-pic relative">
        <!-- overlay dots -->
        <div
          class="red-small-dot"
          style="top: 30%;
        left: 10%;"
        ></div>
        <div class="red-small-dot" style="bottom:30%; left:3%;"></div>
        <div class="white-big-dot" style="top:25%; left:35%;"></div>
        <div class="red-small-dot" style="top: 30%; left: 60%;"></div>
        <div class="white-small-dot" style="bottom: 30%; left: 60%;"></div>
        <div
          class="white-big-dot"
          style="top:15%; right:15%; opacity:0.9;"
        ></div>
        <!-- overlay dots -->
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-ride="carousel"
          data-interval="false"
        >
          <div class="carousel-inner">
            <?php $slider_photo="/pics/slider/".$sliders[0]->photo; ?>
            <div class="carousel-item active">
              <img src="{{$slider_photo}}" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block px-0">
                <h5 class="carousel-caption-date"><?php echo str_replace("-", ".", substr($sliders[0]->updated_at, 0, 10)); ?></h5>
                <p class="carousel-caption-name">{{$sliders[0]->title}}</p>
              </div>
            </div>
            <?php for($i=1; $i<sizeof($sliders); $i++){ ?>
            <?php $slider_photo="/pics/slider/".$sliders[$i]->photo; ?>
            <div class="carousel-item">
              <img src="{{$slider_photo}}" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block px-0">
                <h5 class="carousel-caption-date"><?php echo str_replace("-", ".", substr($sliders[$i]->updated_at, 0, 10)); ?></h5>
                <p class="carousel-caption-name">{{$sliders[$i]->title}}</p>
              </div>
            </div>
            <?php } ?>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleControls"
            role="button"
            data-slide="prev"
          >
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleControls"
            role="button"
            data-slide="next"
          >
          </a>
        </div>
        <div class="main-pic-overlay">
          <img
            src="/pics/svg/nav-toggler.svg"
            alt="nav-toggler"
            class="nav-toggler"
          />
          <img
            src="/pics/svg/nav-toggler-close.svg"
            alt="nav-toggler"
            class="nav-toggler-close"
          />
          <img
            src="/pics/svg/auto-name.svg"
            alt="auto-name"
            class="main-pic-name"
          />
          <img src="/pics/svg/slider-left.svg" alt="" class="slider-left" />
          <img src="/pics/svg/slider-right.svg" alt="" class="slider-right" />
        </div>

        <nav class="nav">
          <div class="nav-list">
            <ul class="nav-ul">
              <li class="home"><a class="nav-links" href="#home">HOME</a></li>
              <li class="services">
                <a class="nav-links" href="#corner-garage">SERVICES</a>
              </li>
              <li class="contact">
                <a class="nav-links" href="#contact-section">CONTACT</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
        <section class="corner-garage" id="corner-garage">
      <h1 class="corner-garage-header">The corner garage for collector cars</h1>
      <div class="row m-0 garage-options-row">
        @foreach($services as $service)
        <?php $service_photo="/pics/services/".$service->photo; ?>
        <div
          class="garage-modify-div garage-option-divs col-md-4 col-sm-12 col-12"
        >
          <div class="garage-wrap-div">
            <img
              src="{{$service_photo}}"
              alt="modify"
              class="garage-modify garage-options"
            />
            <p class="garage-modify-p">{{$service->title}}</p>
          </div>
        </div>
        @endforeach
      </div>
      <div class="road relative">
        <img src="pics/svg/road.svg" alt="road" class="road" />
        <img src="pics/svg/bus.svg" alt="bus" class="bus" />
      </div>
    </section>
    <section class="contact-section" id="contact-section">
      <div class="map-container relative">
        <iframe
          class="map-iframe"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.133684704483!2d44.78366706416217!3d41.717634037791306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d4fa5b02d7%3A0xced15c2c7992ceb5!2sGeoLab!5e0!3m2!1sen!2sge!4v1546022772205"
          width="800"
          height="600"
          style="border:0"
          allowfullscreen
        ></iframe>
        <div class="contact-form-wrapper">
          <div class="contact-form-wr mx-auto">
            <div class="contact-information p-0 ">
              <p class="contact-information-header">CONTACT INFORMATION</p>

              <div class="social-networks">
                <p class="click-to-view">
                  click to <br />
                  &nbsp; view
                </p>
                @foreach($links as $link)
                <?php $icon = '/pics/social_links/'.$link->icon; ?>
                <a href="{{$link->link}}" target="_blank" class="google"
                  ><img
                    class="google-img sn-icons"
                    src="{{$icon}}"
                    alt="{{$link->link}}"
                /></a>
                @endforeach
              </div>
            </div>
            <form class="main-form" method="post" action="/">
              @csrf
              <p class="form-header">GET IN TOUCH</p>
              <div class="form-inputs-wrapper flex">
                <div class="left-side">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="exampleInputName"
                    placeholder="name"
                  />
                  <p class="name-error form-error absolute">
                    please write your name
                  </p>
                  <input
                    type="Email"
                    name="email"
                    class="form-control"
                    id="exampleInputEmail"
                    placeholder="email"
                  />
                  <p class="email-error form-error absolute">
                    please write your email
                  </p>
                  <input
                    type="text"
                    name="subject"
                    class="form-control"
                    id="exampleInputSubject"
                    placeholder="subject"
                  />
                  <p class="subject-error form-error absolute">
                    please write subject
                  </p>
                  <textarea
                    class="form-control form-control-textarea"
                    id="exampleFormControlTextarea1"
                    rows="3"
                    placeholder="text"
                    name="text"
                  ></textarea>
                  <p class="textarea-error form-error absolute">
                    please write text
                  </p>
                </div>
                <div class="right-side">
                  <div class="sex flex relative">
                    <div class="form-check">
                      <label class="container form-check-label"
                        >male
                        <input
                          class="form-check-input"
                          type="radio"
                          name="gender"
                          id="male"
                          value="male"
                        />
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="form-check female">
                      <label class="container form-check-label"
                        >female
                        <input
                          class="form-check-input"
                          type="radio"
                          name="gender"
                          id="female"
                          value="female"
                        />
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <p class="gender-error form-error absolute">
                      please choose your gender
                    </p>
                  </div>
                  <div class="newsetller">
                    <p class="newsetller-header">Sign up for newsletter:</p>
                    <div class="form-check ">
                      <label
                        class="container-check form-check-label"
                        for="images"
                        >recive images
                        <input
                          type="checkbox"
                          id="images"
                          class="form-check-input"
                          value="option1"
                        />
                        <span class="checkmark-check "></span>
                      </label>
                    </div>
                    <div class="form-check ">
                      <label
                        class="container-check form-check-label"
                        for="promotions"
                        >recive promotions
                        <input
                          type="checkbox"
                          id="promotions"
                          class="form-check-input"
                          value="option2"
                        />
                        <span class="checkmark-check "></span>
                      </label>
                    </div>
                    <div class="form-check ">
                      <label
                        class="container-check form-check-label"
                        for="updates"
                        >recive updates
                        <input
                          type="checkbox"
                          id="updates"
                          class="form-check-input"
                          value="option3"
                        />
                        <span class="checkmark-check "></span>
                      </label>
                    </div>
                    <div class="form-check ">
                      <label
                        class="container-check form-check-label"
                        for="offers"
                        >recive job offers
                        <input
                          type="checkbox"
                          id="offers"
                          class="form-check-input"
                          value="option4"
                        />
                        <span class="checkmark-check "></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
             <p class="success-message" id="success-message">
                <?php 
                  if(isset($message)){
                    echo $message;
                  }
                ?>
            </p>
              <div class="submit-button-div">
                <!-- <p>Thank you for your intereset for us, your message has been sent!</p> -->
                <button type="submit" class="submit-button">send</button>
              </div>
            </form>
          </div>
          <div class="copyright">
            <p class="copyright-p">© copyright 2017</p>
            <p class="owner-p">created by: Giorgi mamisashvili</p>
          </div>
          <div class="social-netoworks-reponsive">
            <p class="click-to-vew-responsive">click to view</p>
            <div class="social-networks-responsive text-end">
              @foreach($links as $link)
              <?php $icon = '/pics/social_links/'.$link->icon; ?>
              <a
                href="{{$link->link}}"
                target="_blank"
                class="google-responsive"
                ><img
                  class="google-img-responsive sn-icons-responsive"
                  src="{{$icon}}"
                  alt="{{$link->link}}"
              /></a>
              @endforeach()
            </div>
          </div>
          <footer class="footer">
            <div class="copyright-footer">
              <p class="copyright-footer-p">© copyright 2019</p>
              <p class="owner-footer-p">created by: Giorgi mamisashvili</p>
            </div>
          </footer>
        </div>
      </div>
    </section>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"
    ></script>
    <script src="/js/jquery.js"></script>
    <?php if(isset($message)) {?>
    <script>
      $('html,body').scrollTop(4000);
    </script>
    <?php }?>
  </body>
</html>