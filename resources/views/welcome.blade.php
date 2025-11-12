<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Génie Consultant</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="icon" href="{{ asset('images/logo icon.png') }}" type="image/png">

</head>

<!-- Swiper JS -->
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/modals.js') }}"></script>

<!-- Popup Services Slider -->
<div id="servicesPopup" class="popup-overlay" style="display: none;">
  <div class="popup-content slider-layout">
    <span class="close-btn" onclick="closeServicesPopup()">×</span>
    <div class="slider-wrapper1">
      <div class="slider-track1">
        <div class="slide1">
          <img src="{{ asset('images/plan1.png') }}" alt="Gestion du Contentieux">
        </div>
        <div class="slide1">
          <img src="{{ asset('images/plan2.png') }}" alt="Développement d'Entreprises">
        </div>
      </div>
      <button class="slider-btn prev1" onclick="prevSlide()">‹</button>
      <button class="slider-btn next1" onclick="nextSlide()">›</button>
    </div>
  </div>
</div>


<!-- Popup A propos de nous -->

<div id="aboutPopup" class="popup-overlay" style="display: none;">
  <div class="popup-content about-layout">
    <span class="close-btn" onclick="closeAboutPopup()">×</span>
    <div class="about-image-wrapper">
      <img src="{{ asset('images/propos_nous.png') }}" alt="À propos de nous">
    </div>
  </div>
</div>

<!-- Popup Nos cibles -->

<div id="ciblesPopup" class="popup-overlay" style="display: none;">
  <div class="popup-content cibles-layout">
    <span class="close-btn" onclick="closeCiblesPopup()">×</span>
    <div class="cibles-image-wrapper">
      <img src="{{ asset('images/nos_cibles.png') }}" alt="Nos cibles">
    </div>
  </div>
</div>

<!-- Popup Notre équipe -->

<div id="equipePopup" class="popup-overlay" style="display: none;">
  <div class="popup-content equipe-layout">
    <span class="close-btn" onclick="closeEquipePopup()">×</span>
    <div class="equipe-image-wrapper">
      <img src="{{ asset('images/team.jpg') }}" alt="Notre équipe">
    </div>
  </div>
</div>



<body>

<!-- 🔹 Partie 1 : Header -->
<section class="header-wrapper">
    <div class="header-left">
        <div class="overlay"></div>
        <div class="content">
            <img src="/images/logo gn blanc-06.png" class="logo" >
            <h1 style="font-family: 'Times New Roman'">Génie Consultant</h1>
            <p id="text1">est un bureau d’études juridiques et d’affaires dont le métier consiste à accompagner les institutions, les entreprises et les particuliers dans le conseil, l’audit et la veille juridique et la gestion de contentieux.
                
            </p>
            <a href="#apropos" class="btn" onclick="openAboutPopup()">À propos de nous</a>
        </div>
    </div>

    <div class="header-right">
        <div class="custom-slider">
        <img src="/images/image 4.jpg" class="slide active" alt="Slide 1">
        <img src="/images/image 5.jpg" class="slide" alt="Slide 2">
        <img src="/images/image 6.jpg" class="slide" alt="Slide 3">
      </div>

    </div>

    <div class="header-buttons">
        <a href="#services" class="btn" onclick="openServicesPopup()">Nos services</a>
        <a href="#" class="btn" id="openClientForm">Devenir client</a>

        <a href="#" class="btn" id="openChatOptions">Discuter</a>
    </div>
</section>
@include('components.client-form')
@include('components.discuter')


<!-- 🔹 Partie 2 : Notre approche -->
<section class="approach-section">
    <div class="approach-image-wrapper">
        <div class="approach-image">
            <img src="{{ asset('images/image 2.jpg') }}" alt="Notre approche">
            <div class="corner top-right"></div>
            <div class="corner bottom-left"></div>
        </div>
    </div>
    <div class="approach-text">
        <h2>Notre approche</h2>
        <p id="text2">
            Notre proposition de valeur part d’une observation active de l’écosystème des affaires au Gabon, et dont l’analyse situationnelle montre que la fonction juridique dans une chaine de valeur n’est pas suffisament utilisée par de nombreuses entreprises en tant qu’outil de gestion et instrument de contrôle dans leurs processus et cycles d’exploitation ou d’investissement.
        </p>
        <div class="approach-buttons">
            <a href="#cibles" class="btn" onclick="openCiblesPopup()">Nos cibles</a>
        </div>
    </div>
</section>


<!-- 🔹 Partie 3 : Nos piliers -->
<section class="pillars-section">
  <div class="degradé"></div>
    <h2 style="margin-bottom: 4%">Nos Piliers</h2>
    <div class="pillars-grid">
        <div class="pillar-box">
            <div class="pillar-number">1</div>
            <h3>Audit Juridique</h3>
            <p id="text3">Prévenir les risque juridiques tels que les litiges ou les sanctions qui pourraient entraîner des pertes financières.</p>
        </div>
        <div class="pillar-box">
            <div class="pillar-number">2</div>
            <h3>Gestion du Contentieux</h3>
            <p id="text4">Nous gérons les contentieux de nos clients dans les domaines divers.</p>
        </div>
        <div class="pillar-box">
            <div class="pillar-number">3</div>
            <h3>Veille Juridique</h3>
            <p id="text5">Créer de la valeur à partir des opportunités de croissance et de développement issues de la surveillance d’un cadre des affaires et de l’analyse continuelle de l’évolution de la réglementation y afférente.</p>
        </div>
    </div>
</section>

<!-- 🔹 Partie 4 : Réseaux sociaux -->
<section class="social-section">
  <h2>Retrouvez-nous sur différents réseaux</h2>
  <span class="social-follow">Suivre</span>

  <div class="social-icons">
    <a href="https://www.facebook.com/GenieConsultant.GC?locale=fr_FR"><img src="{{ asset('images/icons/facebook.png') }}" alt="Facebook"></a>
    <a href="#"><img src="{{ asset('images/icons/linkedin 1.png') }}" alt="LinkedIn"></a>
    <a href="https://vm.tiktok.com/ZMAG4qGa3/"><img src="{{ asset('images/icons/black.png') }}" alt="Tiktok"></a>
    <a href="https://www.youtube.com/watch?v=10iu9DWBzoQ">
      <img src="{{ asset('images/icons/youtube logo.jpg') }}" alt="YouTube">
    </a>
  </div>
</section>


<!-- 🔹 Partie 5 : Équipe et Newsletter -->
<section class="team-newsletter-section">
    <div class="team-column">
        <div class="equipe">
            <h3>Notre équipe</h3>
            <p>Découvrez les experts qui vous accompagnent.</p>
            <a href="#" class="btn" onclick="openEquipePopup()">Découvrir</a>
        </div>

        <div class="locaux">
            <h3>Nos locaux</h3>
            <p>Visitez nos bureaux et espaces de travail.</p>
            <a href="#locaux" class="btn" >Découvrir</a>
        </div>

    </div>
    <div class="team-column">
        <h3>Newsletter</h3>
        <form class="newsletter-form" action="{{ route('newsletter.store') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Votre email" required>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
</section>

<!-- 🔹 Partie 6 : Footer -->
<footer class="footer-section">
    <h2 class="footer-title">Ils nous font confiance</h2>
    <div class="footer-logos">
        <img src="{{ asset('images/partenaire hbr.jpg') }}">
        <img src="{{ asset('images/partenaire dgel.jpg') }}">
        <img src="{{ asset('images/partenaire gabon24.jpg') }}">
        <img src="{{ asset('images/partenaire nsia.jpg') }}">
        <img src="{{ asset('images/partenaire ondsc.jpg') }}">
        <img src="{{ asset('images/partenaire police.jpg') }}">
        <img src="{{ asset('images/partenaire prima.jpg') }}">
        <img src="{{ asset('images/partenaire republique.jpg') }}">
        <img src="{{ asset('images/partenaire sem.jpg') }}">
        <img src="{{ asset('images/partenaire.jpg') }}">
    </div>
</footer>

<!-- JS Slider -->


</body>
</html>
