@extends('template.index')

@section('contents')
<!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>T.A.R.D.I.S.</h3>
            <p>
              Tardis, sendo a sigla para "Time and Relative Dimension in Space", em português "Tempo e Dimensão Relativa no espaço", é uma máquina que viaja no espaço-tempo, utilizada por um Senhor do Tempo, se auto intula como Doutor.
            </p>
            <p>
              O Doutor utiliza de sua Tardis, para viajar por todo o tempo-espaço, ajudando e salvando pessoas. Mas nessa jornada de herói, veio a conseguir vários inimigos, eles incluindo, mas não apenas:
            </p>
            <ul>
              <li><i class="bi bi-check-all"></i> Daleks.</li>
              <li><i class="bi bi-check-all"></i> Cybermans.</li>
              <li><i class="bi bi-check-all"></i> Weeping Angels.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box">
              <span>01</span>
              <h4>Daleks</h4>
              <p>Uma espécie genocida, que só se importa com a sua própria espécie</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <span>02</span>
              <h4>Cybermans</h4>
              <p>Humanos transformados em máquina que perderam todas suas emoções além do ódio</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span>03</span>
              <h4> Weeping Angels</h4>
              <p>Estatuas de anjos que param de ser pedra quando não tem ninguéem olhando pra elas.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    @endsection