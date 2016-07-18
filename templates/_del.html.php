<?php include '_head.html.php';?>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <?=$this->alerts(); ?> 
    </div>

    <?php if (!$this->isAlerts()): ?><form method="post" action="<?=$this->path;?>">
      <div class="panel panel-default">
        <div class="panel-heading">Czy na pewno chcesz usunąć?</div>
        <div class="panel-body">
          <p>Tytuł: <b><?=$item->title();?></b></p>
          <p><i class="fa fa-key"></i>
            Status: <b><?=($item->isPublished()) ? 'opublikowany' : 'szkic';?></b>
          </p>
          <p><i class="fa fa-calendar"></i> Data wyświetlana: <b><?=$item->date();?></b></p>
        </div>
        
        <div class="panel-footer">
          <a href="<?=DIR;?>/admin/albums/list" class="btn">Anuluj</a>
          <input name="delete" type="submit" class="btn btn-danger btn-flat pull-right" value="Usuń"/>
        </div> 
      </div>
    </form><?php endif;?>
  </div>
</section>

<?php include '_foot.html.php';?>