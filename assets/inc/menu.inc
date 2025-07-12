<?php
$actIndiex = ($id === '') ? 'active' : '';
$actM1 = ($id === 'inicio') ? 'active' : $actIndiex;
$actM2 = ($id === 'conocenos') ? 'active' : '';
$actM3 = ($id === 'sesion') ? 'active' : '';
$actM4 = ($id === 'resitro') ? 'active' : '';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="width: 100%;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="menu.aspx?id=inicio">ATENCIÓN PSICOLÓGICA</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto d-flex align-items-start">
        <li class="nav-item <?php echo $actM1;?>">
          <a class="nav-link" href="menu.aspx?id=inicio">Inicio</a>
        </li>
        <li class="nav-item <?php echo $actM2;?>">
          <a class="nav-link" href="menu.aspx?id=conocenos">Conócenos</a>
        </li>
        <li class="nav-item <?php echo $actM3;?>">
          <a class="nav-link" href="menu.aspx?id=sesion">Iniciar Sesión</a>
        </li>
        <li class="nav-item <?php echo $actM4;?>">
          <a class="nav-link" href="menu.aspx?id=resitro">Regístrate</a>
        </li>
      </ul>
    </div>
</nav>