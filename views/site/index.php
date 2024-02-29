<?php

/** @var yii\web\View $this */

$this->title = 'Главная';
?>
<div class="site-index">
<main>
  <style>
    h1 {
      color: rgb(23, 42, 83);
      font-size: 6em;
      text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
    }
  </style>
<h1 align="center">МедПлюс</h1>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="bd-placeholder-img img-slider" src="/images/fon1.jpg" alt="фон">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="h2">О нас</h1>
            <p>Наша клиника уникальна тем, что мы лечим алкогольную и прочие зависимости по существующим в мировой клинической практике стандартам качественной медико-социальной помощи, обусловленным научно доказанной эффективностью и экономической доступностью.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img img-slider" src="/images/fon2.jpg" alt="фон">

        <div class="container">
          <div class="carousel-caption">
            <p>По стандартам, основанным на терапевтическом сотрудничестве с пациентом как необходимом условии достижения устойчивых результатов.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
      <img class="bd-placeholder-img img-slider" src="/images/fon3.jpg" alt="фон">

        <div class="container">
          <div class="carousel-caption text-end">
            <p>Пациент получает идеально выверенный (все необходимое и ничего лишнего) курс терапии, а его родственники и близкие – подробные консультации лечащего врача и врача-психотерапевта / клинического психолога. Лечение проходит анонимно (если пациенту не нужен больничный лист).</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container marketing">

    <div class="row">
      <div class="col-lg-4">
      <img class="bd-placeholder-img img-krug" src="/images/pic1.png" alt="фото">
        <h2>Быстро</h2>
        <p>Моментально рассмотрим вашу заявку и направим заявление на рассмотрение врачу.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="bd-placeholder-img img-krug" src="/images/pic2.png" alt="фото">
      <h2>Эффективно</h2>
        <p>К каждому клиенту используем индивидуальный подход. В своей работе пользуемся новыми проверенными технологиями.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="bd-placeholder-img img-krug" src="/images/pic3.png" alt="фото">
        <h2>Надежно</h2>
        <p>Гарантированно окажем помощь, иначе вернем полную сумму, затраченную на лечение./p>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Профессиональное медицинское обслуживание</h2>
        <p class="lead">В клинике пациенты получают медицинскую помощь от специалистов с опытом лечения алкоголизма. Врачи и медицинский персонал обеспечивают наблюдение и оказывают медицинскую помощь, включая контроль за физическим состоянием пациента и его абстинентным синдромом, оказывают медикаментозное лечение.</p>
      </div>
      <div class="col-md-5">
      <img class="bd-placeholder-img img-a" src="/images/p1.png" alt="фото">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Индивидуальный подход </h2>
        <p class="lead">Каждому пациенту в клинике предоставляется индивидуальный план лечения, который разрабатывается с учетом его индивидуальных потребностей и особенностей. Учитывая физическое, психологическое и социальное состояние пациента, специалисты создают карточку личной истории болезни и разрабатывают оптимальную программу терапии.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="bd-placeholder-img img-a" src="/images/2.png" alt="фото">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Экспертная помощь</h2>
        <p class="lead">В клинике работают специалисты, имеющие большой опыт работы с пациентами, страдающими от алкоголизма. Они обладают знаниями и навыками для проведения комплексных программ лечения. Экспертная поддержка специалистов помогает пациентам достичь положительных результатов и справиться с вызовами, связанными с преодолением зависимости.</p>
      </div>
      <div class="col-md-5">
      <img class="bd-placeholder-img img-a" src="/images/3.png" alt="фото">
      </div>
    </div>

    <hr class="featurette-divider">

  </div>
</div>
