@extends('front.master-contact')
@section('content')
<main>
    <article class="article">
      <header class="article__header">
        <div class="container">
          <h1 class="article__heading heading heading--size-large">Contact</h1>
        </div>
      </header>
      <div class="article__map map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.720895806075!2d36.8712375!3d-1.2089245!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c9fa5c975d899ed!2sjspexdesign!5e0!3m2!1sen!2ske!4v1652942647214!5m2!1sen!2ske" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map__inner container">
          <div class="contact-block">
            <div class="contact-block__heading">JSpex Designs, <span class="color-yellow">Nairobi, Kenya</span>
            </div>
            <address class="contact-block__address">168 Kimathi Str, 06th Floor, Kimathi House Building, Nairobi, Kenya.</address>
            <div class="contact-block__phone">
              <a href="tel:+254 706 291 636">+254 706 291 636</a>
            </div>
            <div class="contact-block__item">
              <div class="contact-block__item-hint">Email:</div>
              <div class="contact-block__item-val">
                <a href="mailto:info@jspexdesign.com">info@jspexdesign.com</a>
              </div>
            </div>
            <div class="contact-block__item">
              <div class="contact-block__item-hint">Follow us:</div>
              <div class="contact-block__item-val">
                <!-- Social-->
                <ul class="contact-block__social social--contact social">
                  <li class="social__item">
                    <a class="social__link" href="#" target="_blank">
                      <svg width="20" height="20" aria-label="facebook icon">
                        <use xlink:href="#facebook"></use>
                      </svg>
                      <span class="visually-hidden">facebook</span>
                    </a>
                  </li>
                  <li class="social__item">
                    <a class="social__link" href="#" target="_blank">
                      <svg width="20" height="20" aria-label="twitter icon">
                        <use xlink:href="#twitter"></use>
                      </svg>
                      <span class="visually-hidden">twitter</span>
                    </a>
                  </li>
                  <li class="social__item">
                    <a class="social__link" href="#" target="_blank">
                      <svg width="20" height="20" aria-label="pinterest icon">
                        <use xlink:href="#pinterest"></use>
                      </svg>
                      <span class="visually-hidden">pinterest</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="contact-block__item">
              <div class="contact-block__item-hint">Work Hours:</div>
              <div class="contact-block__item-val">Monday - Friday : 08h00 - 17h30</div>
            </div>
          </div>
        </div>
      </div>
      <div class="article__main container">
        <section class="article__feedback feedback">
          <h2 class="feedback__heading heading" data-aos="fade">Let's grab a coffee and jump on
            <br>conversation <span class="color-yellow">chat with us.</span>
          </h2>
          <form class="js-form-validate" action="https://ultimatewebsolutions.net/larson/php/mail.php" method="POST">
            <div class="row">
              <div class="feedback__field-wrapper col-12 col-md-6 col-lg-4" data-aos="fade">
                <label class="field" aria-label="Name">
                  <input type="text" name="name" placeholder="Name">
                </label>
                <div class="field-error" style="display: none"></div>
              </div>
              <div class="feedback__field-wrapper col-12 col-md-6 col-lg-4" data-aos="fade">
                <label class="field" aria-label="Email">
                  <input type="email" name="email" placeholder="Email*" required>
                </label>
                <div class="field-error" style="display: none"></div>
              </div>
              <div class="feedback__field-wrapper col-12 col-lg-4" data-aos="fade">
                <label class="field" aria-label="Subject">
                  <input type="text" name="subject" placeholder="Subject">
                </label>
                <div class="field-error" style="display: none"></div>
              </div>
              <div class="feedback__field-wrapper col-12" data-aos="fade">
                <label class="field" aria-label="message">
                  <textarea name="message" placeholder="Message*" required></textarea>
                </label>
                <div class="field-error" style="display: none"></div>
              </div>
            </div>
            <button class="btn" type="submit" data-aos="fade">Submit</button>
          </form>
        </section>
      </div>
    </article>
  </main>
@endsection
