@extends('front.master')
@section('content')
<section class="video-section">
    <div class="video-section__inner container">
      <video autoplay loop muted>
        <source src="{{asset('theme/video/video.mp4')}}" type="video/mp4">
      </video>
      <a class="video-section__logo logo--large logo--white logo">
        <span class="logo__large">JSpex Design</span>
        <span class="logo__small" style="text-align:center"><strong>Events • Funiture • Interiors • Landscaping</strong></span>
      </a>
      {{-- <div class="video-section__bottom">
        <div class="video-section__copy">Copyright © <?php echo date('Y'); ?> JSpex Design - All Rights Reserved</div>
        <ul class="video-section__lang-switcherul lang-switcher lang-switcher--line">
          <li class="lang-switcher__item">
            <a href="tel:+254706291636" class="lang-switcher__link lang-switcher__link" ><span class="fa fa-phone"></span>  +254 706 291 636</a>
          </li>
        </ul>
      </div> --}}
    </div>
  </section>
  @include('front.header')
  <!-- Site menu-->
  <div class="mobile-canvas __js_mobile-canvas">
    <button class="mobile-canvas__close" type="button">
      <svg width="24" height="24">
        <use xlink:href="#close"></use>
      </svg>
      <span class="visually-hidden">Close menu</span>
    </button>
    <!-- Lang switcher-->

    @include('front.menu')
    @include('front.footnote')
  </div>
  <main>

    <!--  -->
    <section class="webpage__about-section about-section about-jspex">
      <div class="about-block__inner container" data-number=""></div>
          <div class="about-section__inner container">
          <div class="row no-gutters">
              <div class="about-section__content col-12 col-md-7">
              <h2 class="about-section__heading heading-small" data-aos="fade">About us</h2>
              <div class="about-section__pseudoheading heading" data-aos="fade">Tailor-made <span class="color-yellow">flexible</span> Designs</div>
              <div class="about-section__text" data-aos="fade">Jspex design is a creative studio dedicated to 3D space design consulting, planning and implementation provider based in Nairobi and operating within Kenya. <br> <br> Our flexible and self-motivated specialist teams passionately will build processes tailor-made to your project’s needs.</div>
              <a class="about-section__btn btn" href="{{url('/')}}/about-us" data-aos="fade">Learn more</a>
              </div>
              <div class="col-12 col-md-5" data-aos="fade">
              <div class="about-section__image">
                  <img src="{{asset('theme/img/picture/about-section-image.jpg')}}" srcset="{{asset('theme/img/picture/about-section-image@2x.jpg 2x')}}" width="426" height="573" alt="House">
              </div>
              <div class="about-section__cite-wrapper">
                  <blockquote class="about-section__blockquote">“We specialize in space 3D renders, plans, and execution services”</blockquote>
                  <cite class="about-section__cite">JSpex.
                  <br>Design
                  </cite>
              </div>
              </div>
          </div>
          </div>
    </section>
    <!--  -->
    <section class="webpage__about-block about-block">
      <div class="about-block__inner container" data-number="">
        <header class="about-block__header" data-aos="fade">
          <h2 class="about-block__heading heading theme-color">Services</h2>
        </header>
        <div class="about-block__main services-provided">
          <div class="row">
            <div class="services-provided__column col-12 col-md" data-aos="fade">
              <div class="services-provided__icon">
                <svg width="58" height="61">
                  <use xlink:href="#roller"></use>
                </svg>
              </div>
              <h3 class="services-provided__column-heading">Interior Design</h3>
              <div class="services-provided__column-text">Our interior design team specializes in providing superb and outstanding interior design services.  These includes:- space planning, designing and project management for both residential and elegant commercial projects in Kenya.</div>
              <a class="services-provided__link" href="{{url('/')}}/interior-design">Read more
                <svg width="20" height="20">
                  <use xlink:href="#roller"></use>
                </svg>
              </a>
            </div>
            <div class="services-provided__column col-12 col-md" data-aos="fade" data-aos-delay="200">
              <div class="services-provided__icon">
                <svg width="52" height="61">
                  <use xlink:href="#roller"></use>
                </svg>
              </div>
              <h3 class="services-provided__column-heading">Landscaping</h3>
              <div class="services-provided__column-text">Our landscaping design team offer professional and quality hard and soft landscape services for both residential and commercial spaces.</div>
            </div>
            <div class="services-provided__column col-12 col-md" data-aos="fade" data-aos-delay="400">
              <div class="services-provided__icon">
                <svg width="58" height="52">
                  <use xlink:href="#roller"></use>
                </svg>
              </div>
              <h3 class="services-provided__column-heading">Set Design</h3>
              <div class="services-provided__column-text">Our set design team specializes in providing stage design for corporate events and exhibition booths for exhibition spaces. We work hard to ensure that your set is memorable to your guests as much as possible.</div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <hr>
    <!--  -->
    <section class="webpage__about-block about-block">
      <div class="projects-masonry projects-masonry--pt">
         <div class="projects-masonry__inner container">
            <div class="row __js_projects-grid">
               <div class="projects-masonry__item __js_masonry-item  col-12 col-md-6 col-lg-4 col-xl-3" data-order="1">
                  <div class="preview-card">
                     <div class="preview-card__image height-428">
                        <img src="{{asset('theme/uploads/interiors/photo_2021-01-15_07-00-44.jpg')}}" srcset="uploads/interiors/photo_2021-01-15_07-00-44.jpg 2x')}}" width="428" height="428" alt="">
                     </div>
                     <div class="preview-card__content">
                        <h3 class="preview-card__heading">Interior Design</h3>
                        <div class="preview-card__text"></div>
                        <a class="preview-card__btn link-arrow" href="{{url('/')}}/interior-design">
                           Learn more
                           <svg width="20" height="20">
                              <use xlink:href="#chevron-right"></use>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="projects-masonry__item __js_masonry-item  col-12 col-md-6 col-lg-4 col-xl-3" data-order="2">
                  <div class="preview-card">
                     <div class="preview-card__image height-428">
                        <img src="{{asset('theme/uploads/interiors/photo_2021-01-15_07-00-37.jpg')}}" srcset="uploads/interiors/photo_2021-01-15_07-00-37.jpg 2x')}}" width="428" height="428" alt="">
                     </div>
                     <div class="preview-card__content">
                        <h3 class="preview-card__heading">Interior Design</h3>
                        <div class="preview-card__text"></div>
                        <a class="preview-card__btn link-arrow" href="{{url('/')}}/interior-design">
                           Learn more
                           <svg width="20" height="20">
                              <use xlink:href="#chevron-right"></use>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="projects-masonry__item __js_masonry-item  col-12 col-md-6 col-lg-4 col-xl-3" data-order="3">
                  <div class="preview-card">
                     <div class="preview-card__image height-428">
                        <img src="{{asset('theme/uploads/interiors/photo_2021-03-28_11-34-16.jpg')}}" srcset="uploads/interiors/photo_2021-03-28_11-34-16.jpg 2x')}}" width="428" height="428" alt="">
                     </div>
                     <div class="preview-card__content">
                        <h3 class="preview-card__heading">Interior Design</h3>
                        <div class="preview-card__text"></div>
                        <a class="preview-card__btn link-arrow" href="{{url('/')}}/interior-design">
                           Learn more
                           <svg width="20" height="20">
                              <use xlink:href="#chevron-right"></use>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>

               <!-- Flat Landscaping -->
               <div class="projects-masonry__item __js_masonry-item  col-12  col-lg-6" data-order="4">
                  <div class="preview-card">
                     <div class="preview-card__image height-428">
                        <img src="{{asset('theme/uploads/interiors/photo_2022-04-18_19-45-40.jpg')}}" srcset="uploads/interiors/photo_2022-04-18_19-45-40.jpg 2x')}}" width="886" height="428" alt="">
                     </div>
                     <div class="preview-card__content">
                        <h3 class="preview-card__heading">Landscaping</h3>
                        <div class="preview-card__text"></div>
                        <a class="preview-card__btn link-arrow" href="{{url('/')}}/landscaping">
                           Learn more
                           <svg width="20" height="20">
                              <use xlink:href="#chevron-right"></use>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>

               <!-- Long -->
               <div class="projects-masonry__item __js_masonry-item  col-12 col-md-6 col-lg-4 col-xl-3" data-order="5">
                  <div class="preview-card">
                     <div class="preview-card__image 886">
                        <img src="{{asset('theme/uploads/interiors/photo_2022-04-18_19-30-39.jpg')}}" srcset="uploads/interiors/photo_2022-04-18_19-30-39.jpg 2x')}}" width="428" height="886" alt="">
                     </div>
                     <div class="preview-card__content">
                        <h3 class="preview-card__heading">Landscaping</h3>
                        <div class="preview-card__text"></div>
                        <a class="preview-card__btn link-arrow" href="{{url('/')}}/landscaping">
                           Learn more
                           <svg width="20" height="20">
                              <use xlink:href="#chevron-right"></use>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>

               <div class="projects-masonry__item __js_masonry-item  col-12 col-md-6 col-lg-4 col-xl-3" data-order="6">
                  <div class="preview-card">
                     <div class="preview-card__image height-428">
                        <img src="{{asset('theme/img/picture/home-video/6.jpg')}}" srcset="{{asset('theme/img/picture/home-video/6@2x.jpg 2x')}}" width="428" height="428" alt="">
                     </div>
                     <div class="preview-card__content">
                        <h3 class="preview-card__heading">Interior Design</h3>
                        <div class="preview-card__text"></div>
                        <a class="preview-card__btn link-arrow" href="{{url('/')}}/interior-design">
                           Learn more
                           <svg width="20" height="20">
                              <use xlink:href="#chevron-right"></use>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="projects-masonry__item __js_masonry-item  col-12  col-lg-6" data-order="7">
                  <div class="preview-card">
                     <div class="preview-card__image height-428">
                        <img src="{{asset('theme/uploads/interiors/photo_2021-01-13_14-38-54.jpg')}}" srcset="uploads/interiors/photo_2021-01-13_14-38-54.jpg 2x')}}" width="886" height="428" alt="">
                     </div>
                     <div class="preview-card__content">
                        <h3 class="preview-card__heading">Interior Design</h3>
                        <div class="preview-card__text"></div>
                        <a class="preview-card__btn link-arrow" href="{{url('/')}}/interior-design">
                           Learn more
                           <svg width="20" height="20">
                              <use xlink:href="#chevron-right"></use>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="projects-masonry__item __js_masonry-item  col-12 col-md-6 col-lg-4 col-xl-3" data-order="8">
                  <div class="preview-card">
                     <div class="preview-card__image height-428">
                        <img src="{{asset('theme/img/picture/home-video/7.jpg')}}" srcset="{{asset('theme/img/picture/home-video/7@2x.jpg 2x')}}" width="428" height="428" alt="">
                     </div>
                     <div class="preview-card__content">
                        <h3 class="preview-card__heading">Interior Design</h3>
                        <div class="preview-card__text"></div>
                        <a class="preview-card__btn link-arrow" href="{{url('/')}}/interior-design">
                           Learn more
                           <svg width="20" height="20">
                              <use xlink:href="#chevron-right"></use>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="projects-masonry__item __js_masonry-item  col-12 col-md-6 col-lg-4 col-xl-3" data-order="9">
                  <div class="preview-card">
                     <div class="preview-card__image height-428">
                        <img src="{{asset('theme/img/picture/home-video/8.jpg')}}" srcset="{{asset('theme/img/picture/home-video/8@2x.jpg 2x')}}" width="428" height="428" alt="">
                     </div>
                     <div class="preview-card__content">
                        <h3 class="preview-card__heading">Interior Design</h3>
                        <div class="preview-card__text"></div>
                        <a class="preview-card__btn link-arrow" href="{{url('/')}}/interior-design">
                           Learn more
                           <svg width="20" height="20">
                              <use xlink:href="#chevron-right"></use>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </section>


    <!--  -->
    <!-- Partners-->
    {{-- <section class="webpage__partners partners">
      <div class="partners__inner container">
        <ul class="partners__list">
          <li class="partners__item" data-aos="fade" data-aos-delay="0">
            <img src="{{asset('theme/img/picture/partners/1.png')}}" srcset="{{asset('theme/img/picture/partners/1@2x.png')}} 2x" width="117" height="47" alt="behr handelsagentur">
          </li>
          <li class="partners__item" data-aos="fade" data-aos-delay="200">
            <img src="{{asset('theme/img/picture/partners/2.png')}}" srcset="{{asset('theme/img/picture/partners/2@2x.png')}} 2x" width="139" height="68" alt="christopher willis">
          </li>
          <li class="partners__item" data-aos="fade" data-aos-delay="400">
            <img src="{{asset('theme/img/picture/partners/3.png')}}" srcset="{{asset('theme/img/picture/partners/3@2x.png')}} 2x" width="150" height="45" alt="artchive crafts gallery">
          </li>
          <li class="partners__item" data-aos="fade" data-aos-delay="600">
            <img src="{{asset('theme/img/picture/partners/4.png')}}" srcset="{{asset('theme/img/picture/partners/4@2x.png')}} 2x" width="125" height="32" alt="artchive crasfts gallery">
          </li>
        </ul>
      </div>
    </section> --}}
  </main>
@endsection
