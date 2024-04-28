


@include('layout.header')

  <!-- 
    - #ASIDE
  -->





  <main>
    <article>

      <!-- 
        - #HERO
      -->
     


      <section class="hero">
        <div class="container">
          <div class="hero-content">
            <p class="hero-subtitle">25% off all products.</p>
             <h2 class="h1 hero-title">
              Qualityful <span class="span">organic</span>
              fruit & <span class="span">vegetables.</span>
            </h2>

            <p class="hero-text">
              It has survived not only five centuries also there leaped.
            </p>

            <a href="{{route('shopnow')}}" class="btn btn-primary">
              <span class="span">Shop Now</span>

              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">
            <img src="public/assets/images/hero-banner.png" width="603" height="634" loading="lazy" alt="Vegetables"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service">
        <div class="container">

          <ul class="service-list">

            <li class="service-item">
              <div class="item-icon">
                <img src="public/assets/images/service-icon-1.png" width="40" height="40" loading="lazy" alt="Truck icon">
              </div>

              <h3 class="h3 item-title">Free Shipping</h3>
            </li>

            <li class="service-item">
              <div class="item-icon">
                <img src="public/assets/images/service-icon-2.png" width="40" height="40" loading="lazy"
                  alt="Payment card icon">
              </div>

              <h3 class="h3 item-title">Safe Payment</h3>
            </li>

            <li class="service-item">
              <div class="item-icon">
                <img src="public/assets/images/service-icon-3.png" width="40" height="40" loading="lazy" alt="Helpline icon">
              </div>

              <h3 class="h3 item-title">24/7 Support</h3>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #OFFERS
      -->

      <section class="section offers">
        <div class="container">

          <ul class="offers-list has-scrollbar">

            <li class="offers-item">
              <a href="{{route('shopnow')}}" class="offers-card">

                <figure class="card-banner">
                  <img src="public/assets/images/offer-1.png" width="292" height="230" loading="lazy"
                    alt="Fresh vegetables package" class="w-100">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Up To 25% Off</p>

                  <h3 class="h3 card-title">Fresh vegetables package.</h3>

                  <div class="btn btn-primary">Shop Now</div>
                </div>

              </a>
            </li>

            <li class="offers-item">
              <a href="{{route('shopnow')}}" class="offers-card">

                <figure class="card-banner">
                  <img src="public/assets/images/offer-2.png" width="336" height="244" loading="lazy"
                    alt="Healthy & fresh beef" class="w-100">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Up To 25% Off</p>

                  <h3 class="h3 card-title">Healthy & fresh beef.</h3>

                  <div class="btn btn-primary">Shop Now</div>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PRODUCT
      -->
        @include('cards')

           
      
</div>





      <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container">

          <p class="section-subtitle">Summer Offer</p>

          <h2 class="h2 section-title">Up To 50% Off All Product.</h2>

          <p class="cta-text">
            It has survived not only five centuries also leaped.
          </p>

          <a href="{{route('shopnow')}}" class="btn btn-primary">
            <span>Shop Now</span>

            <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>





      <!-- 
        - #TOP PRODUCT
      -->

    

      @include('trendycards')




      <!-- 
        - #PARTNER
      -->

      <section class="section partner">
        <div class="container">

          <p class="section-subtitle"> -- Organic Food --</p>

          <h2 class="h2 section-title">Trusted Partners</h2>

          <ul class="has-scrollbar">

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="public/assets/images/partner-1.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="public/assets/images/partner-2.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="public/assets/images/partner-3.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="public/assets/images/partner-4.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="public/assets/images/partner-5.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="public/assets/images/partner-6.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section testimonials">
        <div class="container">

          <p class="section-subtitle"> -- Some Testimonial --</p>

          <h2 class="h2 section-title">Feedback From Happy Clients</h2>

          <ul class="has-scrollbar">

            <li class="testi-item">
              <div class="testi-card">

                <div class="card-header">

                  <img src="public/assets/images/quote-left.png" width="25" height="25" aria-hidden="true" alt="">

                  <img src="public/assets/images/testimonial-1.jpg" width="90" height="90" loading="lazy"
                    alt="Willow Peralta" class="card-avatar">

                  <img src="public/assets/images/quote-right.png" width="25" height="25" aria-hidden="true" alt="">

                </div>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <blockquote class="card-text">
                  It was popularised in the 1960s
                  with the release of Letraset sheets
                  containing Lorem passages and more recently with desktop publishing software like including.
                </blockquote>

                <h3 class="card-title">Willow Peralta</h3>

                <p class="card-subtitle">Web Developer</p>

              </div>
            </li>

            <li class="testi-item">
              <div class="testi-card">

                <div class="card-header">

                  <img src="public/assets/images/quote-left.png" width="25" height="25" aria-hidden="true" alt="">

                  <img src="public/assets/images/testimonial-2.jpg" width="90" height="90" loading="lazy"
                    alt="Pamelia Hamrick" class="card-avatar">

                  <img src="public/assets/images/quote-right.png" width="25" height="25" aria-hidden="true" alt="">

                </div>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <blockquote class="card-text">
                  It was popularised in the 1960s
                  with the release of Letraset sheets
                  containing Lorem passages and more recently with desktop publishing software like including.
                </blockquote>

                <h3 class="card-title">Pamelia Hamrick</h3>

                <p class="card-subtitle">Web Developer</p>

              </div>
            </li>

            <li class="testi-item">
              <div class="testi-card">

                <div class="card-header">

                  <img src="public/assets/images/quote-left.png" width="25" height="25" aria-hidden="true" alt="">

                  <img src="public/assets/images/testimonial-3.jpg" width="90" height="90" loading="lazy"
                    alt="Novella Gerber" class="card-avatar">

                  <img src="public/assets/images/quote-right.png" width="25" height="25" aria-hidden="true" alt="">

                </div>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <blockquote class="card-text">
                  It was popularised in the 1960s
                  with the release of Letraset sheets
                  containing Lorem passages and more recently with desktop publishing software like including.
                </blockquote>

                <h3 class="card-title">Novella Gerber</h3>

                <p class="card-subtitle">Web Developer</p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog">
        <div class="container">

          <p class="section-subtitle"> -- News And Blog --</p>

          <h2 class="h2 section-title">Bright Side Vegetarianism</h2>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="public/assets/images/blog-1.jpg" width="451" height="310" loading="lazy"
                    alt="We automatically search for andapply coupons when." class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="wrapper-item">
                      <ion-icon name="calendar-clear-outline"></ion-icon>

                      <time class="text" datetime="2022-04-13">13 April, 2022</time>
                    </div>

                    <div class="wrapper-item">
                      <ion-icon name="heart-outline"></ion-icon>

                      <span class="text">58 Million</span>
                    </div>

                  </div>

                  <h3 class="h3 card-title">
                    <a href="./404.html">We automatically search for andapply coupons when.</a>
                  </h3>

                  <a href="./404.html" class="btn btn-primary">
                    <span>Read More</span>

                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="public/assets/images/blog-2.jpg" width="451" height="310" loading="lazy"
                    alt="How to get more traffic in your website of ecommerce." class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="wrapper-item">
                      <ion-icon name="calendar-clear-outline"></ion-icon>

                      <time class="text" datetime="2022-04-13">13 April, 2022</time>
                    </div>

                    <div class="wrapper-item">
                      <ion-icon name="heart-outline"></ion-icon>

                      <span class="text">58 Million</span>
                    </div>

                  </div>

                  <h3 class="h3 card-title">
                    <a href="./404.html">How to get more traffic in your website of ecommerce.</a>
                  </h3>

                  <a href="./404.html" class="btn btn-primary">
                    <span>Read More</span>

                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="public/assets/images/blog-3.jpg" width="451" height="310" loading="lazy"
                    alt="25 Rules and regulation to be successful in your business." class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="wrapper-item">
                      <ion-icon name="calendar-clear-outline"></ion-icon>

                      <time class="text" datetime="2022-04-13">13 April, 2022</time>
                    </div>

                    <div class="wrapper-item">
                      <ion-icon name="heart-outline"></ion-icon>

                      <span class="text">58 Million</span>
                    </div>

                  </div>

                  <h3 class="h3 card-title">
                    <a href="./404.html">25 Rules and regulation to be successful in your business.</a>
                  </h3>

                  <a href="./404.html" class="btn btn-primary">
                    <span>Read More</span>

                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter">
        <div class="container">

          <div class="newsletter-card">

            <p class="section-subtitle"> -- Subscribe Newsletter --</p>

            <h2 class="h2 section-title">Sign Up To Newsletter & Get <span class="span">20% Off.</span></h2>

            <form action="" class="newsletter-form">

              <input type="email" name="email" placeholder="Enter your email" required class="input-email">

              <button type="submit" class="btn btn-primary">
                <span>Sign Up</span>

                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->
  @include('layout.footer') 





  <!-- 
    - custom js link
  -->
  

