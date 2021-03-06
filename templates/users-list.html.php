<?php include '_head.html.php'; ?>

<?php if ($this->loop->isItems()): ?>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>nick</th>
      <th>name</th>
      <th>surname</th>
      <th>email</th>
      <th>Edytuj</th>
      <th>Usuń</th>
    </tr>
  </thead>
  <tbody>
<?php while ($this->loop->haveItems()): $a = $this->loop->item(); ?> 
    <tr>
      <th><?=$a->id();?></th>
      <td><?=$a->nick();?></td>
      <td><?=$a->firstName();?></td>
      <td><?=$a->surname();?></td>
      <td><?=$a->email();?></td>
      <td><a href="<?=$a->editUrl();?>" class="btn btn-primary btn-xs">Edytuj</a></td>
      <td><a href="<?=$a->delUrl();?>" class="btn btn-danger btn-xs">Usuń</a></td>
    </tr>
<?php endwhile;?> 
  </tbody>
</table>

<?php if ($this->loop->isPagination()): ?> 
  <nav role="navigation" class="pagination-container">
    <?=$this->loop->nav(['ul' => 'pagination', 'current' => 'active'], 2);?>
  </nav>
<?php endif;?> 

<?php else: ?> 
  <div class="alert info">Brak użytkowników do wyświetlenia!</div>
<?php endif;?> 

<?php include '_foot.html.php'; ?>