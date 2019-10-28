<div class="container">

<div class="card mb-6 align-items-center" style="max-width:540px;">
  <div class=" row align-items-center">
    <div class="col-6 mx-auto">
      <img src="images/<?= $this->getImagen() ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <?php if ($this->getDestacado()): ?>
          <span class="badge badge-success">Destacado</span>
        <?php endif; ?>
        <h5 class="card-title"><?= $this->getDisplayName() ?></h5>
        <p class="card-text">Color: <?= $this->getColor() ?></p>
        <p class="card-text">Capacidad: <?= $this->getCapacidad() ?></p>
        <p class="card-text"><small class="text-muted">Precio: <?= $this->getPrecio() ?></small></p>
      </div>
    </div>
  </div>
</div>
</div>
