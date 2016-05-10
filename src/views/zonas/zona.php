<div class="content-users">
  <nav>
    <a href="<?php echo $routeServer . $urls['routing'] . "?url=createZona"; ?>">Crear Zona</a>
  </nav>
  <div class="list-users">
    <table>
      <thead>
        <tr>
          <th>Lote</th>
          <th>Fecha de siembra</th>
          <th>Fecha de corte</th>
          <th>Fecha final</th>
          <th>Cantidad de corte</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      <?php
        include_once   $urls['zonaController'];
        $zona = new ZonaController();
        echo $zona->getAll($routeServer . $urls['routing']);
      ?>
    </tbody>
  </table>
  </div>
</div>