<?php snippet('login/header') ?>

<div class="container">
  <div class="row">
    <?php if ($error): ?>
      <div class="alert alert-danger"><?php echo $page->alert()->html() ?></div>
    <?php endif ?>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-4 col-md-offset-4" style="margin-top: 100px">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $page->title()->html() ?></h3>
        </div>
        <div class="panel-body">
          <form method="post">
            <div class="form-group">
              <label for="password"><?php echo $page->password()->html() ?></label>
              <input type="password" id="password" name="password" class="form-control" autofocus>
            </div>
            <div>
              <input type="submit" name="login" class="btn btn-default"
                     value="<?php echo $page->button()->html() ?>">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php snippet('login/footer') ?>
