<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Escolinha Canarinho</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body { font-family: Arial, sans-serif; }
    .navbar-brand { font-size: 1.5rem; font-weight: bold; }
    .carousel-item img { height: 400px; object-fit: cover; }
    .card img { height: 200px; object-fit: cover; }
    footer { margin-top: 40px; font-size: 0.9rem; }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Escolinha Canarinho</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menuNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
        <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
        <li class="nav-item"><a class="nav-link" href="#depoimentos">Depoimentos</a></li>
        <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/campo1.jpg" class="d-block w-100" alt="Treino">
      <div class="carousel-caption"><h5>Formando Craques do Amanhã</h5></div>
    </div>
    <div class="carousel-item">
      <img src="assets/campo2.jpg" class="d-block w-100" alt="Time">
      <div class="carousel-caption"><h5>Treinos Modernos</h5></div>
    </div>
    <div class="carousel-item">
      <img src="assets/campo3.jpg" class="d-block w-100" alt="Jogo">
      <div class="carousel-caption"><h5>Disciplina e Trabalho em Equipe</h5></div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<section id="servicos" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Nossos Serviços</h2>
    <div class="row">

      <div class="col-md-4">
        <div class="card">
          <img src="assets/servico1.jpg" class="card-img-top" alt="Treinamento de Base">
          <div class="card-body">
            <h5 class="card-title">Treinamento de Base</h5>
            <p class="card-text">Aulas de fundamentos para crianças de 6 a 12 anos.</p>
            <a href="servico1.html" class="btn btn-success">Solicitar Orçamento</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="assets/servico2.jpg" class="card-img-top" alt="Preparação Física">
          <div class="card-body">
            <h5 class="card-title">Preparação Física</h5>
            <p class="card-text">Condicionamento físico voltado para o futebol.</p>
            <a href="servico2.html" class="btn btn-success">Solicitar Orçamento</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="assets/servico3.jpg" class="card-img-top" alt="Clínica de Goleiros">
          <div class="card-body">
            <h5 class="card-title">Clínica de Goleiros</h5>
            <p class="card-text">Treinos técnicos para jovens goleiros.</p>
            <a href="servico3.html" class="btn btn-success">Solicitar Orçamento</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="sobre" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4">Sobre Nós</h2>
    <p>A Escolinha Canarinho nasceu com o propósito de formar atletas cidadãos, oferecendo treinos de qualidade, disciplina e valores esportivos.</p>
    <p>Nosso time é formado por profissionais certificados, apaixonados por futebol e pela formação de novos talentos.</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!..." width="100%" height="300" style="border:0;" loading="lazy"></iframe>
  </div>
</section>

<section id="depoimentos" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">O que dizem nossos alunos</h2>
    <div class="row">
      <div class="col-md-4"><div class="card p-3"><p>"Meu filho evoluiu muito no futebol e no comportamento."</p><small>- João Silva</small></div></div>
      <div class="col-md-4"><div class="card p-3"><p>"Profissionais atenciosos e estrutura excelente."</p><small>- Maria Santos</small></div></div>
      <div class="col-md-4"><div class="card p-3"><p>"A escolinha é top! Recomendo para todos."</p><small>- Pedro Lima</small></div></div>
    </div>
  </div>
</section>

<section id="contato" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4">Contato</h2>
    <form>
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Mensagem</label>
        <textarea class="form-control" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Enviar</button>
    </form>
    <p class="mt-3">Email: contato@escolinhacanarinho.com | WhatsApp: <a href="https://wa.me/5521999999999">+55 21 99999-9999</a></p>
  </div>
</section>

<footer class="bg-success text-white text-center py-3">
  Desenvolvido por Eduardo © 2025
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
