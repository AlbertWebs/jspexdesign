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
              <p>
                {!!html_entity_decode($description)!!}
              </p>
            </div>

          </div>
        </div>
      </section>








    </article>

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
  </main>
@endsection
