@extends('front.master-pages')
@section('content')
<main>
    <article class="article">
      <header class="article__header">
        <div class="container">
          <h1 class="article__heading heading heading--size-large" style="font-size:40px; text-align: center;">
            <span class="color-yellow">Interiors • Landscaping • Events • Funiture</span>
          </h1>
        </div>
      </header>
      <div class="article__about-hero container">
        <img src="{{asset('theme/uploads/interiors/photo_2022-04-18_19-45-40.jpg')}}" width="1800" height="668" alt="Jspex Landscapping">
      </div>
      <section class="webpage__about-block about-block about-block--columns">
        <div class="about-block__inner container">
          <header class="about-block__header" data-aos="fade">
            <h2 class="about-block__heading heading">About us</h2>
          </header>
          <div class="about-block__main">
            <div class="about-block__text" data-aos="fade">
              <p>
                Jspex design is a creative studio dedicated to 3D space design consulting, planning and implementation provider based in Nairobi and operating within Kenya. <br> <br>

                Our flexible and self-motivated specialist teams passionately will build processes tailor-made to your project’s needs. <br> <br>

                We specialize in space 3D renders, plans, and execution services. Our all-rounded 3D renders are key to us because we believe in the importance of being able to visualize your desired end result before execution to save on cost and on time. <br> <br>
              </p>

            </div>

          </div>
        </div>
      </section>



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
