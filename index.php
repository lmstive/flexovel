<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flexovel Indústria de Etiquetas</title>
  <meta name="description" content="Flexovel Indústria de Etiquetas - Soluções em etiquetas adesivas, ribbons e tags em Cascavel, PR desde 2018.">
  <meta name="keywords" content="etiquetas adesivas, ribbons, tags, Cascavel PR, Flexovel">
  <meta property="og:title" content="Flexovel Indústria de Etiquetas">
  <meta property="og:description" content="Qualidade e inovação em etiquetas adesivas personalizadas desde 2018.">
  <meta property="og:image" content="URL_DA_IMAGEM">
  <meta property="og:url" content="URL_DO_SITE">
  <!-- Favicon -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <style>
    :root {
      --verde: #03844e;
      --verde-escuro: #026d3f;
      --laranja: #f29629;
      --laranja-escuro: #e08010;
      --cinza-claro: #f8f9fa;
      --cinza-medio: #e9ecef;
    }
    body {
      font-family: 'Poppins', sans-serif;
      padding-top: 80px;
      background: linear-gradient(135deg, #ffffff, #f5f7fa);
      overflow-x: hidden;
    }
    .navbar {
      background: rgba(255, 255, 255, 0.95) !important;
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }
    .navbar-scrolled {
      padding: 5px 0;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    .nav-link {
      color: var(--verde) !important;
      font-weight: 500;
      position: relative;
      transition: color 0.3s ease;
      margin: 0 10px;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -5px;
      left: 0;
      background-color: var(--laranja);
      transition: width 0.3s ease;
    }
    .nav-link:hover::after,
    .nav-link.active::after {
      width: 100%;
    }
    .nav-link:hover {
      color: var(--laranja) !important;
    }
    .hero-section {
      height: 90vh;
      background: linear-gradient(45deg, rgba(3, 132, 78, 0.8), rgba(0, 0, 0, 0.6)), 
                  url('topo.jpg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
      animation: fadeIn 1.5s ease-in-out;
      position: relative;
    }
    .hero-scroll-indicator {
      position: absolute;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      animation: bounce 2s infinite;
    }
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {transform: translateY(0) translateX(-50%);}
      40% {transform: translateY(-20px) translateX(-50%);}
      60% {transform: translateY(-10px) translateX(-50%);}
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    .hero-section h1 {
      font-size: 3.5rem;
      font-weight: 700;
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
    }
    .btn-primary {
      background: var(--laranja);
      border: none;
      padding: 12px 40px;
      border-radius: 50px;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      background: var(--laranja-escuro);
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    .btn-outline-dark {
      border-radius: 50px;
      padding: 10px 30px;
      transition: all 0.3s ease;
    }
    .btn-outline-dark:hover {
      background: var(--verde);
      color: white;
      border-color: var(--verde);
    }
    .section-padding {
      padding: 6rem 0;
    }
    .product-card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      background: white;
      transition: all 0.3s ease;
      height: 100%;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    .product-card:hover {
      transform: translateY(-15px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    .product-card img {
      height: 220px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    .product-card:hover img {
      transform: scale(1.1);
    }
    .whatsapp-btn {
      position: fixed;
      bottom: 40px;
      right: 40px;
      background: var(--verde);
      color: white !important;
      width: 70px;
      height: 70px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2.2rem;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
      text-decoration: none;
      z-index: 1000;
    }
    .whatsapp-btn:hover {
      background: #ffffff;
      color: var(--verde) !important;
      transform: scale(1.15) rotate(10deg);
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
    }
    footer {
      background: linear-gradient(135deg, #1a1a1a, #333);
    }
    .social-links a {
      font-size: 1.8rem;
      margin: 0 15px;
      color: var(--verde);
      transition: all 0.3s ease;
    }
    .social-links a:hover {
      color: var(--laranja);
      transform: translateY(-3px);
    }
    /* Estilos para seções estilizadas */
    .styled-section {
      background: linear-gradient(135deg, var(--cinza-claro), #fff);
      position: relative;
      overflow: hidden;
    }
    .styled-section::before {
      content: '';
      position: absolute;
      top: -50px;
      left: -50px;
      width: 200px;
      height: 200px;
      background: rgba(3, 132, 78, 0.1);
      border-radius: 50%;
      z-index: 0;
    }
    .styled-section::after {
      content: '';
      position: absolute;
      bottom: -50px;
      right: -50px;
      width: 200px;
      height: 200px;
      background: rgba(242, 150, 41, 0.1);
      border-radius: 50%;
      z-index: 0;
    }
    .section-content {
      position: relative;
      z-index: 1;
    }
    .section-content h2 {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--verde);
      margin-bottom: 1.5rem;
      position: relative;
      display: inline-block;
    }
    .section-content h2::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 50%;
      height: 4px;
      background: var(--laranja);
      border-radius: 2px;
    }
    .section-content p {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #555;
    }
    /* Estilos para os botões de WhatsApp */
    .whatsapp-links {
      margin-top: 15px;
    }
    .whatsapp-link-btn {
      display: inline-block;
      background: var(--verde);
      color: white !important;
      padding: 10px 20px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 500;
      margin: 5px;
      transition: all 0.3s ease;
    }
    .whatsapp-link-btn:hover {
      background: var(--laranja);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    .whatsapp-link-btn i {
      margin-right: 8px;
    }
    /* Novas adições */
    .counter-section {
      background: linear-gradient(to right, var(--verde), var(--verde-escuro));
      color: white;
      padding: 4rem 0;
    }
    .counter-box {
      text-align: center;
      padding: 20px;
    }
    .counter-number {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 10px;
    }
    .counter-text {
      font-size: 1.2rem;
      opacity: 0.9;
    }
    .testimonial-card {
      background: white;
      border-radius: 15px;
      padding: 30px;
      margin: 20px 10px;
      position: relative;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      height: 100%;
    }
    .testimonial-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    .testimonial-quote {
      font-size: 3rem;
      color: var(--laranja);
      position: absolute;
      top: 10px;
      right: 20px;
      opacity: 0.2;
    }
    .testimonial-text {
      font-style: italic;
      margin-bottom: 20px;
      color: #555;
    }
    .testimonial-author {
      display: flex;
      align-items: center;
    }
    .testimonial-author img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin-right: 15px;
      object-fit: cover;
    }
    .testimonial-info h5 {
      margin: 0;
      color: var(--verde);
    }
    .testimonial-info small {
      color: #777;
    }
    .process-step {
      text-align: center;
      position: relative;
      z-index: 1;
    }
    .process-number {
      width: 80px;
      height: 80px;
      background: var(--verde);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      font-weight: 700;
      margin: 0 auto 20px;
      position: relative;
      z-index: 2;
    }
    .process-step:not(:last-child)::after {
      content: '';
      position: absolute;
      top: 40px;
      right: -50%;
      width: 100%;
      height: 3px;
      background: var(--cinza-medio);
      z-index: 1;
    }
    .process-text {
      margin-top: 15px;
    }
    .accordion-item {
      border: none;
      margin-bottom: 15px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    .accordion-header {
      padding: 0;
    }
    .accordion-button {
      padding: 20px;
      background: white;
      font-weight: 500;
      color: var(--verde);
      box-shadow: none;
    }
    .accordion-button:not(.collapsed) {
      background: var(--verde);
      color: white;
    }
    .accordion-button:focus {
      box-shadow: none;
    }
    .accordion-body {
      padding: 20px;
      background: white;
    }
    .form-control {
      padding: 12px 20px;
      border-radius: 30px;
      border: 1px solid #ddd;
      margin-bottom: 15px;
    }
    .form-control:focus {
      border-color: var(--verde);
      box-shadow: 0 0 0 0.2rem rgba(3, 132, 78, 0.25);
    }
    .floating-label-group {
      position: relative;
      margin-bottom: 20px;
    }
    .floating-label-group .form-control {
      padding: 20px 20px 10px;
    }
    .floating-label-group label {
      position: absolute;
      top: 10px;
      left: 20px;
      color: #777;
      transition: all 0.3s ease;
      pointer-events: none;
    }
    .floating-label-group .form-control:focus ~ label,
    .floating-label-group .form-control:not(:placeholder-shown) ~ label {
      top: 5px;
      font-size: 0.75rem;
      color: var(--verde);
    }
    .service-card {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      height: 100%;
    }
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    .service-icon {
      padding: 30px;
      background: var(--verde);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 3rem;
      color: white;
    }
    .service-content {
      padding: 30px;
    }
    .service-title {
      color: var(--verde);
      margin-bottom: 15px;
    }
    .back-to-top {
      position: fixed;
      bottom: 40px;
      left: 40px;
      background: var(--laranja);
      color: white !important;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
      text-decoration: none;
      opacity: 0;
      visibility: hidden;
      z-index: 1000;
    }
    .back-to-top.active {
      opacity: 1;
      visibility: visible;
    }
    .back-to-top:hover {
      background: var(--verde);
      transform: translateY(-5px);
    }
    .newsletter-form {
      display: flex;
      max-width: 550px;
      margin: 0 auto;
    }
    .newsletter-form .form-control {
      border-radius: 30px 0 0 30px;
      margin-bottom: 0;
    }
    .newsletter-form .btn {
      border-radius: 0 30px 30px 0;
      padding: 10px 30px;
    }
    /* Estilos para o preloader */
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: white;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
    }
    .preloader-content {
      width: 100px;
      height: 100px;
      position: relative;
    }
    .preloader-spinner {
      border: 5px solid #f3f3f3;
      border-top: 5px solid var(--verde);
      border-radius: 50%;
      width: 50px;
      height: 50px;
      animation: spin 1s linear infinite;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    @keyframes spin {
      0% { transform: translate(-50%, -50%) rotate(0deg); }
      100% { transform: translate(-50%, -50%) rotate(360deg); }
    }
    
    /* Estilos responsivos */
    @media (max-width: 991px) {
      .process-step:not(:last-child)::after {
        display: none;
      }
      .process-step {
        margin-bottom: 30px;
      }
      .hero-section {
        height: 70vh;
      }
      .hero-section h1 {
        font-size: 2.5rem;
      }
    }
    
    @media (max-width: 767px) {
      .newsletter-form {
        flex-direction: column;
      }
      .newsletter-form .form-control,
      .newsletter-form .btn {
        border-radius: 30px;
      }
      .newsletter-form .btn {
        margin-top: 10px;
      }
      .section-padding {
        padding: 4rem 0;
      }
      .counter-box {
        margin-bottom: 30px;
      }
    }
    
    /* Animações adicionais */
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }
    .float-animation {
      animation: float 3s ease-in-out infinite;
    }
  </style>
</head>
<body>
  <!-- Preloader -->
  <div class="preloader" id="preloader">
    <div class="preloader-content">
      <div class="preloader-spinner"></div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#home">
        <img src="image.jpg" alt="Logo Flexovel" class="img-fluid" style="max-height: 50px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
          <li class="nav-item"><a class="nav-link" href="#products">Produtos</a></li>
          <li class="nav-item"><a class="nav-link" href="#process">Como Trabalhamos</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Depoimentos</a></li>
          <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero-section">
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="200">
        <h1>Soluções em Rótulos e Etiquetas</h1>
        <p class="lead mt-3">Inovação e qualidade desde 2018</p>
        <div class="mt-5">
          <a href="#contact" class="btn btn-primary mx-2">Solicitar Orçamento</a>
          <a href="#products" class="btn btn-outline-light mx-2">Nossos Produtos</a>
        </div>
      </div>
      <div class="hero-scroll-indicator">
        <i class="bi bi-chevron-down text-white fs-1"></i>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="section-padding styled-section">
    <div class="container section-content">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h2>Sobre a Flexovel</h2>
          <p>Desde 2018 no mercado, a Flexovel é referência em soluções inovadoras para etiquetas adesivas e ribbons para todo Brasil. Trabalhamos com materiais de alta qualidade como couche, BOPP, polietileno e mais, trazendo personalização e eficiência para diversos segmentos.</p>
          <p>Nossa equipe altamente qualificada está comprometida em oferecer produtos que atendam às necessidades específicas de cada cliente, combinando tecnologia avançada e processos sustentáveis.</p>
          <div class="mt-4">
            <a href="#products" class="btn btn-outline-dark me-3">Conheça Nossos Produtos</a>
            <a href="#contact" class="btn btn-primary">Fale Conosco</a>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
          <div id="carouselFactory" class="carousel slide shadow rounded-4">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselFactory" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#carouselFactory" data-bs-slide-to="1"></button>
            </div>
            <div class="carousel-inner rounded-4">
              <div class="carousel-item active">
                <img src="produto1.png" class="d-block w-100" alt="Etiqueta Personalizada">
              </div>
              <div class="carousel-item">
                <img src="produto2.png" class="d-block w-100" alt="Produção de Etiquetas">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselFactory" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselFactory" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Counter Section -->
  <section class="counter-section">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-6 mb-md-0 mb-4">
          <div class="counter-box" data-aos="fade-up">
            <i class="bi bi-calendar-check mb-3 fs-1"></i>
            <div class="counter-number" data-count="5">0</div>
            <div class="counter-text">Anos de Experiência</div>
          </div>
        </div>
        <div class="col-md-3 col-6 mb-md-0 mb-4">
          <div class="counter-box" data-aos="fade-up" data-aos-delay="100">
            <i class="bi bi-people mb-3 fs-1"></i>
            <div class="counter-number" data-count="500">0</div>
            <div class="counter-text">Clientes Satisfeitos</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="counter-box" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-award mb-3 fs-1"></i>
            <div class="counter-number" data-count="1000">0</div>
            <div class="counter-text">Projetos Entregues</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="counter-box" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-geo-alt mb-3 fs-1"></i>
            <div class="counter-number" data-count="26">0</div>
            <div class="counter-text">Estados Atendidos</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="section-padding styled-section">
    <div class="container section-content">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="text-center">Nossos Serviços</h2>
        <p class="lead">Soluções personalizadas para atender às suas necessidades específicas</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
          <div class="service-card h-100">
            <div class="service-icon">
              <i class="bi bi-printer"></i>
            </div>
            <div class="service-content">
              <h4 class="service-title">Impressão Flexográfica</h4>
              <p>Etiquetas de alta qualidade com impressão personalizada para diversos segmentos e aplicações.</p>
              <a href="#contact" class="btn btn-sm btn-outline-dark mt-3">Saiba Mais</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-card h-100">
            <div class="service-icon">
              <i class="bi bi-palette"></i>
            </div>
            <div class="service-content">
              <h4 class="service-title">Design de Etiquetas</h4>
              <p>Criação de layouts exclusivos e atrativos para destacar seus produtos no mercado.</p>
              <a href="#contact" class="btn btn-sm btn-outline-dark mt-3">Saiba Mais</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-card h-100">
            <div class="service-icon">
              <i class="bi bi-boxes"></i>
            </div>
            <div class="service-content">
              <h4 class="service-title">Fornecimento de Ribbons</h4>
              <p>Ribbons de cera, resina e misto para diferentes necessidades de impressão térmica.</p>
              <a href="#contact" class="btn btn-sm btn-outline-dark mt-3">Saiba Mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section id="products" class="section-padding styled-section">
    <div class="container section-content">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="text-center">Nossos Produtos</h2>
        <p class="lead">Descubra nossa linha de produtos de alta qualidade, projetados para atender às suas necessidades com inovação e durabilidade.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up">
          <div class="card product-card">
            <div class="overflow-hidden">
              <img src="produto3.png" class="card-img-top" alt="Etiqueta Personalizada">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">Etiquetas personalizadas</h5>
              <p class="card-text">Impressão de alta qualidade para todos os segmentos.</p>
              <button class="btn btn-sm btn-outline-dark mt-3" data-bs-toggle="modal" data-bs-target="#productModal1">Saiba Mais</button>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card product-card">
            <div class="overflow-hidden">
              <img src="produto1.png" class="card-img-top" alt="Papelão Ondulado">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">Rótulos</h5>
              <p class="card-text">Embalagens resistentes e personalizáveis.</p>
              <button class="btn btn-sm btn-outline-dark mt-3" data-bs-toggle="modal" data-bs-target="#productModal2">Saiba Mais</button>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card product-card">
            <div class="overflow-hidden">
              <img src="bobina-pdv.jpg" class="card-img-top" alt="Material de Escritório">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">Variedade de materiais</h5>
              <p class="card-text">Bobinas térmicas para PDV.</p>
              <button class="btn btn-sm btn-outline-dark mt-3" data-bs-toggle="modal" data-bs-target="#productModal3">Saiba Mais</button>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5" data-aos="fade-up">
        <a href="#contact" class="btn btn-primary">Solicite um Orçamento</a>
      </div>
    </div>
  </section>

  <!-- Product Modals -->
  <div class="modal fade" id="productModal1" tabindex="-1" aria-labelledby="productModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModal1Label">Etiquetas Personalizadas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img src="produto3.png" class="img-fluid rounded" alt="Etiqueta Personalizada">
            </div>
            <div class="col-md-6">
              <h4 class="mb-3">Especificações</h4>
              <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Materiais: Couche, BOPP, Polietileno</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Acabamentos: Verniz, laminação, hot stamping</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Aplicações: Produtos alimentícios, cosméticos, farmacêuticos</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Tamanhos personalizados</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Tiragens: Pequenas, médias e grandes</li>
              </ul>
              <p class="mt-3">Nossas etiquetas personalizadas são produzidas com tecnologia de ponta, garantindo qualidade e durabilidade para destaque do seu produto.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <a href="#contact" class="btn btn-primary">Solicitar Orçamento</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productModal2" tabindex="-1" aria-labelledby="productModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModal2Label">Rótulos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img src="produto1.png" class="img-fluid rounded" alt="Rótulos">
            </div>
            <div class="col-md-6">
              <h4 class="mb-3">Especificações</h4>
              <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Tipos: Adesivos e não-adesivos</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Materiais: Papel, plástico, metalizado</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Resistência: Água, temperatura, produtos químicos</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Acabamentos diversos</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Formatos customizados</li>
              </ul>
              <p class="mt-3">Nossos rótulos são desenvolvidos para comunicar valores de marca e informações essenciais, com design atrativo e alta resistência.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <a href="#contact" class="btn btn-primary">Solicitar Orçamento</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productModal3" tabindex="-1" aria-labelledby="productModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModal3Label">Bobinas Térmicas para PDV</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img src="bobina-pdv.jpg" class="img-fluid rounded" alt="Bobinas Térmicas">
            </div>
            <div class="col-md-6">
              <h4 class="mb-3">Especificações</h4>
              <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Aplicações: PDV, recibos, comandas</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Tamanhos: 57mm, 80mm e customizados</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Impressão térmica de alta definição</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Papel de qualidade superior</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Compatível com diversas impressoras térmicas</li>
              </ul>
              <p class="mt-3">Nossas bobinas térmicas oferecem durabilidade e nitidez de impressão para seu ponto de venda, garantindo eficiência nos processos de atendimento.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <a href="#contact" class="btn btn-primary">Solicitar Orçamento</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Process Section -->
  <section id="process" class="section-padding styled-section">
    <div class="container section-content">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="text-center">Como Trabalhamos</h2>
        <p class="lead">Conheça nosso processo de produção simplificado</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6" data-aos="fade-up">
          <div class="process-step">
            <div class="process-number">1</div>
            <h5>Briefing e Orçamento</h5>
            <p class="process-text">Entendemos suas necessidades e elaboramos uma proposta personalizada.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="process-step">
            <div class="process-number">2</div>
            <h5>Design e Aprovação</h5>
            <p class="process-text">Desenvolvemos o layout e realizamos ajustes até sua aprovação final.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="process-step">
            <div class="process-number">3</div>
            <h5>Produção</h5>
            <p class="process-text">Utilizamos tecnologia de ponta para garantir a qualidade do seu produto.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="process-step">
            <div class="process-number">4</div>
            <h5>Entrega</h5>
            <p class="process-text">Enviamos seu pedido com agilidade e segurança para todo o Brasil.</p>
          </div>
        </div>
      </div>
      <div class="text-center mt-5" data-aos="fade-up">
        <a href="#contact" class="btn btn-primary">Comece Seu Projeto</a>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials" class="section-padding styled-section">
    <div class="container section-content">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="text-center">O Que Dizem Nossos Clientes</h2>
        <p class="lead">Confira a experiência de quem já trabalhou conosco</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4" data-aos="fade-up">
          <div class="testimonial-card">
            <i class="bi bi-quote testimonial-quote"></i>
            <p class="testimonial-text">A Flexovel superou todas as nossas expectativas. As etiquetas são de excelente qualidade e o atendimento foi impecável do início ao fim.</p>
            <div class="testimonial-author">
              <img src="/api/placeholder/60/60" alt="Cliente">
              <div class="testimonial-info">
                <h5>João Silva</h5>
                <small>Indústria Alimentícia</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="testimonial-card">
            <i class="bi bi-quote testimonial-quote"></i>
            <p class="testimonial-text">Trabalhamos com a Flexovel há mais de 2 anos e não temos do que reclamar. Prazos sempre cumpridos e qualidade consistente em todos os pedidos.</p>
            <div class="testimonial-author">
              <img src="/api/placeholder/60/60" alt="Cliente">
              <div class="testimonial-info">
                <h5>Maria Santos</h5>
                <small>Empresa de Cosméticos</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="testimonial-card">
            <i class="bi bi-quote testimonial-quote"></i>
            <p class="testimonial-text">A equipe de design nos ajudou a desenvolver uma identidade visual para nossos produtos que aumentou significativamente nossas vendas.</p>
            <div class="testimonial-author">
              <img src="/api/placeholder/60/60" alt="Cliente">
              <div class="testimonial-info">
                <h5>Carlos Oliveira</h5>
                <small>Vinícola</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="section-padding styled-section">
    <div class="container section-content">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="text-center">Perguntas Frequentes</h2>
        <p class="lead">Tire suas dúvidas sobre nossos produtos e serviços</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="accordion" id="accordionFAQ">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Qual o pedido mínimo para produção de etiquetas personalizadas?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  Nosso pedido mínimo varia de acordo com o tipo de material e acabamento desejado. Em geral, trabalhamos com tiragens a partir de 1.000 unidades para etiquetas adesivas. Entre em contato conosco para verificarmos a melhor opção para seu projeto.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Qual o prazo de entrega para etiquetas personalizadas?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  O prazo de produção varia de 5 a 15 dias úteis após a aprovação da arte final, dependendo da complexidade e quantidade do pedido. O prazo de entrega considera também o tempo de transporte, que varia conforme a região de destino.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  A Flexovel atende a todo o Brasil?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  Sim, atendemos todo o território nacional. Realizamos envios por transportadoras e Correios, garantindo que seu pedido chegue em perfeitas condições, independentemente da localização.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Como posso solicitar um orçamento?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  Você pode solicitar um orçamento através do formulário de contato em nosso site, por e-mail, WhatsApp ou telefone. Procuramos responder a todas as solicitações em até 24 horas úteis.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="section-padding bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center" data-aos="fade-up">
          <h3 class="mb-4">Assine Nossa Newsletter</h3>
          <p class="mb-4">Fique por dentro das novidades, promoções e dicas do setor de etiquetas e rótulos.</p>
          <form id="newsletterForm" class="newsletter-form">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Seu melhor e-mail" required>
              <button type="submit" class="btn btn-primary">Inscrever-se</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="section-padding">
    <div class="container">
      <h2 class="text-center mb-5" data-aos="fade-up">Entre em Contato</h2>
      <div class="row g-5">
        <div class="col-lg-6" data-aos="fade-right">
          <form id="contactForm" method="POST" action="contact-process.php">
            <div id="formMessage"></div>
            <div class="floating-label-group">
              <input type="text" class="form-control" id="nome" name="nome" placeholder=" " required>
              <label for="nome">Nome completo</label>
            </div>
            <div class="floating-label-group">
              <input type="email" class="form-control" id="email" name="email" placeholder=" " required>
              <label for="email">Email</label>
            </div>
            <div class="floating-label-group">
              <input type="tel" class="form-control" id="telefone" name="telefone" placeholder=" " required>
              <label for="telefone">Telefone</label>
            </div>
            <div class="floating-label-group">
              <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder=" " required></textarea>
              <label for="mensagem">Sua mensagem</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Enviar Mensagem</button>
          </form>
        </div>
        <div class="col-lg-6 text-center" data-aos="fade-left">
          <h4 class="mb-4">Nossos Contatos</h4>
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.210281309645!2d-53.45827292543805!3d-25.456889377486673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f2276a1c9ed5f5%3A0x77f5e7e0e9b4a0d0!2sRua%20Engenheiro%20Reboucas%2C%201813%20-%20Centro%2C%20Cascavel%20-%20PR%2C%2085812-131!5e0!3m2!1spt-BR!2sbr!4v1717122452331!5m2!1spt-BR!2sbr" 
            width="100%" 
            height="300" 
            style="border:0; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
          <p class="mt-3"><i class="bi bi-geo-alt-fill"></i> Rua Engenheiro Rebouças, 1813 - Centro, Cascavel - PR, 85812-131</p>
          <a href="tel:+554530385005" class="btn btn-outline-dark mb-3"><i class="bi bi-telephone"></i> (45) 3038-5005</a>
          <div class="whatsapp-links">
            <a href="https://wa.me/5545999113853" target="_blank" class="whatsapp-link-btn"><i class="bi bi-whatsapp"></i> Vendas 1: (45) 99911-3853</a>
            <a href="https://wa.me/5545991455296" target="_blank" class="whatsapp-link-btn"><i class="bi bi-whatsapp"></i> Vendas 2: (45) 99145-5296</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-white py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4 text-center text-lg-start">
          <img src="fv1.png" alt="Logo Flexovel" class="mb-3" style="max-height: 80px;">
          <p>Soluções em etiquetas e rótulos com qualidade e tecnologia para destacar seu produto no mercado.</p>
          <div class="social-links mb-4">
            <a href="https://facebook.com/flexovel" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/flexovel" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://linkedin.com/company/flexovel" target="_blank"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="col-lg-4 text-center text-lg-start">
          <h5 class="mb-3">Links Rápidos</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#home" class="text-white text-decoration-none">Home</a></li>
            <li class="mb-2"><a href="#about" class="text-white text-decoration-none">Sobre Nós</a></li>
            <li class="mb-2"><a href="#services" class="text-white text-decoration-none">Serviços</a></li>
            <li class="mb-2"><a href="#products" class="text-white text-decoration-none">Produtos</a></li>
            <li class="mb-2"><a href="#contact" class="text-white text-decoration-none">Contato</a></li>
          </ul>
        </div>
        <div class="col-lg-4 text-center text-lg-start">
          <h5 class="mb-3">Horário de Atendimento</h5>
          <ul class="list-unstyled">
            <li class="mb-2">Segunda a Sexta: 8h às 18h</li>
            <li class="mb-2">Sábado: 8h às 12h</li>
            <li class="mb-2">Domingo: Fechado</li>
          </ul>
        </div>
      </div>
      <div class="text-center mt-4 pt-4 border-top border-secondary">
        <p>© 2025 Flexovel Indústria de Etiquetas LTDA | CNPJ: 34.459.044/0001-04</p>
      </div>
    </div>
  </footer>

  <!-- Back to top button -->
  <a href="#" class="back-to-top" id="backToTop" aria-label="Voltar ao topo">
    <i class="bi bi-arrow-up"></i>
  </a>

  <!-- WhatsApp Button -->
  <a href="https://wa.me/5545999113853" target="_blank" class="whatsapp-btn" aria-label="Contato via WhatsApp">
    <i class="bi bi-whatsapp"></i>
  </a>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    // Inicialização do AOS
    document.addEventListener('DOMContentLoaded', function() {
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
      });
      
      // Preloader
      window.addEventListener('load', function() {
        document.getElementById('preloader').style.display = 'none';
      });
      
      // Navegação suave
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          
          const href = this.getAttribute('href');
          if (href === '#') return;
          
          const targetElement = document.querySelector(href);
          if (targetElement) {
            const headerOffset = 80;
            const elementPosition = targetElement.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
            
            window.scrollTo({
              top: offsetPosition,
              behavior: 'smooth'
            });
            
            // Fechar o menu mobile após clicar
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
              document.querySelector('.navbar-toggler').click();
            }
          }
        });
      });
      
      // Contador de números
      const counterElements = document.querySelectorAll('.counter-number');
      const animateCounter = (element) => {
        const target = parseInt(element.getAttribute('data-count'));
        const count = parseInt(element.innerText);
        const increment = target / 30;
        
        if (count < target) {
          element.innerText = Math.ceil(count + increment);
          setTimeout(() => animateCounter(element), 30);
        } else {
          element.innerText = target;
        }
      };
      
      const handleIntersection = (entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            observer.unobserve(entry.target);
          }
        });
      };
      
      const observer = new IntersectionObserver(handleIntersection, { threshold: 0.5 });
      counterElements.forEach(counter => observer.observe(counter));
      
      // Botão voltar ao topo
      const backToTopButton = document.getElementById('backToTop');
      window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
          backToTopButton.classList.add('active');
        } else {
          backToTopButton.classList.remove('active');
        }
      });
      
      // Envio de formulário com AJAX
      const contactForm = document.getElementById('contactForm');
      if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
          e.preventDefault();
          
          const formData = new FormData(this);
          const formMessage = document.getElementById('formMessage');
          
          fetch('contact-process.php', {
            method: 'POST',
            body: formData
          })
          .then(response => response.text())
          .then(data => {
            formMessage.innerHTML = data;
            if (data.includes('alert-success')) {
              contactForm.reset();
            }
            setTimeout(() => {
              if (data.includes('alert-success')) {
                formMessage.innerHTML = '';
              }
            }, 5000);
          })
          .catch(error => {
            formMessage.innerHTML = '<div class="alert alert-danger">Erro ao enviar: ' + error.message + '</div>';
          });
        });
      }
      
      // Mudar estilo da navbar ao rolar
      const navbar = document.getElementById('mainNav');
      window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
          navbar.classList.add('navbar-scrolled');
        } else {
          navbar.classList.remove('navbar-scrolled');
        }
      });
      
      // Tratamento do formulário de newsletter
      const newsletterForm = document.getElementById('newsletterForm');
      if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
          e.preventDefault();
          
          // Simulação de envio (substitua por sua lógica real)
          const submitButton = this.querySelector('button[type="submit"]');
          const originalText = submitButton.innerText;
          
          submitButton.innerText = 'Enviando...';
          submitButton.disabled = true;
          
          setTimeout(() => {
            alert('Obrigado por se inscrever em nossa newsletter!');
            newsletterForm.reset();
            submitButton.innerText = originalText;
            submitButton.disabled = false;
          }, 1500);
        });
      }
    });
  </script>
</body>
</html>