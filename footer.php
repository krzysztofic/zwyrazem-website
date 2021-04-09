<div id="contact">
    <div class="container">
      <div class="col-md-8">
        <div class="row">
          <div class="section-title">
            <h2>Skontaktuj się ze mną!</h2>
            <p style="text-align: justify">Jesteś zainteresowany współpracą? Zapraszam do kontaktu przez poniższy
              formularz lub telefonicznie.<br>
              Jeśli chcesz uzyskać wycenę dla swojego zlecenia, wybierz dodatkowo rodzaj zlecenia, liczbę znaków ze
              spacjami oraz termin realizacji.<br>
              Informację zwrotną uzyskasz w ciągu 24 godzin.
            </p>
          </div>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Twoje Imię*"
                    required="required">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" id="email" name="email" class="form-control" placeholder="Email*"
                    required="required">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            </div>
            <div class="form-group">
              <textarea name="message" id="message" class="form-control" rows="4"
                placeholder="Napisz w czym mogę Ci pomóc*" required="required"></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <select class="form-control" id="option" name="option">
                <option value="" disabled selected>Rodzaj tekstu</option>
                <option value="products">Opisy produktów</option>
                <option value="blog">Wpisy blogowe</option>
                <option value="correct">Korekta tekstów</option>
                <option value="professional">Teksty specjalistyczne</option>
                <option value="other">Inne zlecenie</option>
              </select>
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="number" id="char" name="char" class="form-control" placeholder="Liczba znaków ze spacjami"
                min="500" step="100">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="text" id="date" name="date" class="form-control" placeholder="Data realizacji"
                onfocus="(this.type='date')" onblur="(this.type='text')">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="checkbox" required="required">Wyrażam zgodę na przetwarzanie moich danych osobowych przez Z
              Wyrazem Paulina Nijak, w celu uzgodnienia szczegółów oferty.*
              <p class="help-block text-danger"></p>
              <br>
              *pola wymagane
            </div>
            <div id="success"></div>
            <button type="submit" class="btn btn-custom btn-lg">Wyślij wiadomość</button>
          </form>

          <script>
            grecaptcha.ready(function () {
              grecaptcha.execute('6LdClpMaAAAAAHIH9VSulW4SvMSJLLpqWVPGHH44', {
                  action: 'homepage'
                })
                .then(function (token) {
                  document.getElementById('g-recaptcha-response').value = token;
                });
            });
          </script>

        </div>
      </div>
      <div class="col-md-3 col-md-offset-1 contact-info">
        <div class="contact-item">
          <h3>Informacje kontaktowe</h3>
          <p><span><i class="fa fa-map-marker"></i> Adres</span>Z Wyrazem Paulina Nijak<br>
            ul. Słowackiego 55/1<br>
            60-521 Poznań<br>
            NIP: 7792516733</p>
        </div>
        <div class="contact-item">
          <p><span><i class="fa fa-phone"></i> Telefon</span> +48 660 841 637</p>
        </div>
        <div class="contact-item">
          <p><span><i class="fa fa-envelope-o"></i> Email</span> kontakt@zwyrazem.pl</p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="row">
          <div class="social">
            <ul>
              <li><a href="https://www.linkedin.com/in/paulina-nijak-930352170/"><i class="fa fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="footer">
    <div class="container text-center">
      <p>Z Wyrazem 2020 Build by <a href="https://github.com/krzysztofic" rel="nofollow">Krzysztofic</a></p>
    </div>
  </div>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.1.11.1.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/SmoothScroll.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/nivo-lightbox.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/jqBootstrapValidation.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.counterup.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/waypoints.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/contact_me.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/main.js"></script>

    <?php wp_footer() ?>
</body>

</html>