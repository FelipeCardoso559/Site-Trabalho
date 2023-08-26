@extends('template.index')

@section('contents')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contato</span>
          <h2>Contato</h2>
          <p>Fale com algum dos doutores ou dos seus companheiros!</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Base de Operações</h3>
              <p>21 Clinton Road, Penarth, Cardiff</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Nos mande um email!</h3>
              <p>tardis@unit.com.uk</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Nos ligue!</h3>
              <p>07700 900461</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-3.175985!3d51.433934!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e1b8b4e7a06f3%3A0x3cc1e77558b0ba98!2s21+Clinton+Rd%2C+Penarth%2C+Cardiff!5e0!3m2!1sen!2suk!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Carreganddo...</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada, obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Mandar Mensagem</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection