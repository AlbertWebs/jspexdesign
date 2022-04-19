@extends('front.master-pages')
@section('content')
<main>
    <article class="article">


      <section class="webpage__about-block about-block about-block--columns">
        <div class="about-block__inner container">
          <header class="about-block__header" data-aos="fade">
            <h2 class="about-block__heading heading">{{$Title}}s</h2>
          </header>
          <div class="about-block__main">
            <div class="about-block__text" data-aos="fade">
              <p>Totally focused on tools to enhance and help your content shine. We have created this theme thinking only in options helpfully for the daily needs in a creative environment like an agency, a small studio.</p>
              <p>As a result working with hundred of creatives all these past years, we are now delivering a theme that will be part of your toolset.</p>
            </div>

          </div>
        </div>
      </section>


    <div class="article__main article__main--width-full container">
        <ul class="projects-masonry row __js_projects-grid">
        <li class="projects-masonry__item col-12 col-md-6 col-xl-3 __js_masonry-item">
            <a class="card card--small card--masonry" href="projects-detail-dark.html">
            <div class="card__image">
                <img src="{{asset('theme/img/picture/projects/masonry-2/1.jpg')}}" srcset="{{asset('theme/img/picture/projects/masonry-2/1@2x.jpg')}} 2x" width="428" height="428" alt="">
            </div>
            <div class="card__content">
                <h3 class="card__heading">Villa
                <br>In
                <br>London
                </h3>
                <div class="card__text">Projects for many large domestic and foreign corporations, enterprises in many elds such</div>
                <div class="card__bottom">
                <span class="card__link">See project
                    <svg width="20" height="20">
                    <use xlink:href="#chevron-right"></use>
                    </svg>
                </span>
                </div>
            </div>
            </a>
        </li>
        <li class="projects-masonry__item col-12 col-md-6 col-xl-3 __js_masonry-item __js_architecture">
            <a class="card card--small card--masonry" href="projects-detail-dark.html">
            <div class="card__image">
                <img src="{{asset('theme/img/picture/projects/masonry-2/2.jpg')}}" srcset="{{asset('theme/img/picture/projects/masonry-2/2@2x.jpg')}} 2x" width="428" height="428" alt="">
            </div>
            <div class="card__content">
                <h3 class="card__heading">Villa
                <br>In
                <br>London
                </h3>
                <div class="card__text">Projects for many large domestic and foreign corporations, enterprises in many elds such</div>
                <div class="card__bottom">
                <span class="card__link">See project
                    <svg width="20" height="20">
                    <use xlink:href="#chevron-right"></use>
                    </svg>
                </span>
                </div>
            </div>
            </a>
        </li>
        <li class="projects-masonry__item col-12 col-xl-3 __js_masonry-item __js_building">
            <a class="card card--small card--masonry" href="projects-detail-dark.html">
            <div class="card__image">
                <img src="{{asset('theme/img/picture/projects/masonry-2/3.jpg')}}" srcset="{{asset('theme/img/picture/projects/masonry-2/3@2x.jpg')}} 2x" width="428" height="428" alt="">
            </div>
            <div class="card__content">
                <h3 class="card__heading">Villa
                <br>In
                <br>London
                </h3>
                <div class="card__text">Projects for many large domestic and foreign corporations, enterprises in many elds such</div>
                <div class="card__bottom">
                <span class="card__link">See project
                    <svg width="20" height="20">
                    <use xlink:href="#chevron-right"></use>
                    </svg>
                </span>
                </div>
            </div>
            </a>
        </li>
        <li class="projects-masonry__item col-12 col-xl-3 __js_masonry-item __js_interior">
            <a class="card card--small card--masonry" href="projects-detail-dark.html">
            <div class="card__image">
                <img src="{{asset('theme/img/picture/projects/masonry-2/4.jpg')}}" srcset="{{asset('theme/img/picture/projects/masonry-2/4@2x.jpg')}} 2x" width="428" height="886" alt="">
            </div>
            <div class="card__content">
                <h3 class="card__heading">Villa
                <br>In
                <br>London
                </h3>
                <div class="card__text">Projects for many large domestic and foreign corporations, enterprises in many elds such</div>
                <div class="card__bottom">
                <span class="card__link">See project
                    <svg width="20" height="20">
                    <use xlink:href="#chevron-right"></use>
                    </svg>
                </span>
                </div>
            </div>
            </a>
        </li>
        <li class="projects-masonry__item col-12 col-xl-6 __js_masonry-item __js_building">
            <a class="card card--small card--masonry" href="projects-detail-dark.html">
            <div class="card__image">
                <img src="{{asset('theme/img/picture/projects/masonry-2/5.jpg')}}" srcset="{{asset('theme/img/picture/projects/masonry-2/5@2x.jpg')}} 2x" width="886" height="428" alt="">
            </div>
            <div class="card__content">
                <h3 class="card__heading">Villa
                <br>In
                <br>London
                </h3>
                <div class="card__text">Projects for many large domestic and foreign corporations, enterprises in many elds such</div>
                <div class="card__bottom">
                <span class="card__link">See project
                    <svg width="20" height="20">
                    <use xlink:href="#chevron-right"></use>
                    </svg>
                </span>
                </div>
            </div>
            </a>
        </li>
        <li class="projects-masonry__item col-12 col-md-6 col-xl-3 __js_masonry-item __js_interior">
            <a class="card card--small card--masonry" href="projects-detail-dark.html">
            <div class="card__image">
                <img src="{{asset('theme/img/picture/projects/masonry-2/6.jpg')}}" srcset="{{asset('theme/img/picture/projects/masonry-2/6@2x.jpg')}} 2x" width="428" height="428" alt="">
            </div>
            <div class="card__content">
                <h3 class="card__heading">Villa
                <br>In
                <br>London
                </h3>
                <div class="card__text">Projects for many large domestic and foreign corporations, enterprises in many elds such</div>
                <div class="card__bottom">
                <span class="card__link">See project
                    <svg width="20" height="20">
                    <use xlink:href="#chevron-right"></use>
                    </svg>
                </span>
                </div>
            </div>
            </a>
        </li>
        <li class="projects-masonry__item col-12 col-md-6 col-xl-3 __js_masonry-item __js_exterior">
            <a class="card card--small card--masonry" href="projects-detail-dark.html">
            <div class="card__image">
                <img src="{{asset('theme/img/picture/projects/masonry-2/7.jpg')}}" srcset="{{asset('theme/img/picture/projects/masonry-2/7@2x.jpg')}} 2x" width="428" height="886" alt="">
            </div>
            <div class="card__content">
                <h3 class="card__heading">Villa
                <br>In
                <br>London
                </h3>
                <div class="card__text">Projects for many large domestic and foreign corporations, enterprises in many elds such</div>
                <div class="card__bottom">
                <span class="card__link">See project
                    <svg width="20" height="20">
                    <use xlink:href="#chevron-right"></use>
                    </svg>
                </span>
                </div>
            </div>
            </a>
        </li>
        <li class="projects-masonry__item col-12 col-md-6 col-xl-3 __js_masonry-item __js_exterior">
            <a class="card card--small card--masonry" href="projects-detail-dark.html">
            <div class="card__image">
                <img src="{{asset('theme/img/picture/projects/masonry-2/8.jpg')}}" srcset="{{asset('theme/img/picture/projects/masonry-2/8@2x.jpg')}} 2x" width="428" height="428" alt="">
            </div>
            <div class="card__content">
                <h3 class="card__heading">Villa
                <br>In
                <br>London
                </h3>
                <div class="card__text">Projects for many large domestic and foreign corporations, enterprises in many elds such</div>
                <div class="card__bottom">
                <span class="card__link">See project
                    <svg width="20" height="20">
                    <use xlink:href="#chevron-right"></use>
                    </svg>
                </span>
                </div>
            </div>
            </a>
        </li>
        <li class="projects-masonry__item col-12 col-md-6 col-xl-3 __js_masonry-item __js_exterior">
            <a class="card card--small card--masonry" href="projects-detail-dark.html">
            <div class="card__image">
                <img src="{{asset('theme/img/picture/projects/masonry-2/9.jpg')}}" srcset="{{asset('theme/img/picture/projects/masonry-2/9@2x.jpg')}} 2x" width="428" height="428" alt="">
            </div>
            <div class="card__content">
                <h3 class="card__heading">Villa
                <br>In
                <br>London
                </h3>
                <div class="card__text">Projects for many large domestic and foreign corporations, enterprises in many elds such</div>
                <div class="card__bottom">
                <span class="card__link">See project
                    <svg width="20" height="20">
                    <use xlink:href="#chevron-right"></use>
                    </svg>
                </span>
                </div>
            </div>
            </a>
        </li>
        <li class="projects-masonry__item col-12 col-md-6 col-xl-3 __js_masonry-item __js_exterior">
            <a class="card card--small card--masonry" href="projects-detail-dark.html">
            <div class="card__image">
                <img src="{{asset('theme/img/picture/projects/masonry-2/10.jpg')}}" srcset="{{asset('theme/img/picture/projects/masonry-2/10@2x.jpg')}} 2x" width="428" height="428" alt="">
            </div>
            <div class="card__content">
                <h3 class="card__heading">Villa
                <br>In
                <br>London
                </h3>
                <div class="card__text">Projects for many large domestic and foreign corporations, enterprises in many elds such</div>
                <div class="card__bottom">
                <span class="card__link">See project
                    <svg width="20" height="20">
                    <use xlink:href="#chevron-right"></use>
                    </svg>
                </span>
                </div>
            </div>
            </a>
        </li>
        <li class="projects-masonry__item col-12 col-md-6 col-xl-3 __js_masonry-item __js_exterior">
            <a class="card card--small card--masonry" href="projects-detail-dark.html">
            <div class="card__image">
                <img src="{{asset('theme/img/picture/projects/masonry-2/11.jpg')}}" srcset="{{asset('theme/img/picture/projects/masonry-2/11@2x.jpg')}} 2x" width="886" height="428" alt="">
            </div>
            <div class="card__content">
                <h3 class="card__heading">Villa
                <br>In
                <br>London
                </h3>
                <div class="card__text">Projects for many large domestic and foreign corporations, enterprises in many elds such</div>
                <div class="card__bottom">
                <span class="card__link">See project
                    <svg width="20" height="20">
                    <use xlink:href="#chevron-right"></use>
                    </svg>
                </span>
                </div>
            </div>
            </a>
        </li>
        <li class="projects-masonry__item col-12 col-xl-6 __js_masonry-item __js_exterior">
            <a class="card card--small card--masonry" href="projects-detail-dark.html">
            <div class="card__image">
                <img src="{{asset('theme/img/picture/projects/masonry-2/12.jpg')}}" srcset="{{asset('theme/img/picture/projects/masonry-2/12@2x.jpg')}} 2x" width="428" height="428" alt="">
            </div>
            <div class="card__content">
                <h3 class="card__heading">Villa
                <br>In
                <br>London
                </h3>
                <div class="card__text">Projects for many large domestic and foreign corporations, enterprises in many elds such</div>
                <div class="card__bottom">
                <span class="card__link">See project
                    <svg width="20" height="20">
                    <use xlink:href="#chevron-right"></use>
                    </svg>
                </span>
                </div>
            </div>
            </a>
        </li>
        </ul>
    </div>




      <div class="partners">
        <div class="partners__inner container">
          <ul class="partners__list">
            <li class="partners__item" data-aos="fade" data-aos-delay="0">
              <img src="{{asset('theme/img/picture/partners/1w.png')}}" srcset="{{asset('theme/img/picture/partners/1w@2x.png')}} 2x 2x" width="117" height="47" alt="behr handelsagentur">
            </li>
            <li class="partners__item" data-aos="fade" data-aos-delay="200">
              <img src="{{asset('theme/img/picture/partners/2w.png')}}" srcset="{{asset('theme/img/picture/partners/2w@2x.png')}} 2x 2x" width="139" height="68" alt="christopher willis">
            </li>
            <li class="partners__item" data-aos="fade" data-aos-delay="400">
              <img src="{{asset('theme/img/picture/partners/3w.png')}}" srcset="{{asset('theme/img/picture/partners/3w@2x.png')}} 2x 2x" width="150" height="45" alt="artchive crafts gallery">
            </li>
            <li class="partners__item" data-aos="fade" data-aos-delay="600">
              <img src="{{asset('theme/img/picture/partners/4w.png')}}" srcset="{{asset('theme/img/picture/partners/4w@2x.png')}} 2x 2x" width="125" height="32" alt="artchive crasfts gallery">
            </li>
          </ul>
        </div>
      </div>
    </article>
  </main>
@endsection
