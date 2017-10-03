<?php snippet('header') ?>
<div class="container rezept">

  <div class="rezept__wrap">
    <div class="zutaten">
      <h2 class="big">Zutaten</h2>
      <div class="js-zutaten">
        <?php echo $page->zutaten()->kirbytext() ?>
      </div>
      <div class="calc">
        <div class="input-group">
          <input type="number" class="form-control js-factor"
                 placeholder="Faktor">
          <span class="input-group-btn">
            <button class="btn btn-default js-calc"
                    type="button">
              <span class="glyphicon glyphicon-refresh"
                    aria-hidden="true"></span>
            </button>
          </span>
        </div>
      </div>

    </div>
    <div class="zubereitung">
      <h2 class="big">Zubereitung</h2>
      <?php echo $page->zubereitung()->kirbytext() ?>
    </div>
  </div>
  <div class="edit">
    <a href="<?php echo url('panel/pages/' . $page->uri() . '/edit') ?>">Rezept
      bearbeiten</a>
  </div>
</div>

<?php snippet('footer') ?>
