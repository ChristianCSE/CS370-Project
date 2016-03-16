<?php require_once __DIR__ . '/templates/header.php' ?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form class="form-horizontal" action="phpscripts/editprof.php" method="POST">
        <center><h1>Edit Profile</h1></center>
        <hr>
        <div class="form-group">
          <label for="bio" class="control-label">Bio</label>
          <textarea class="form-control" rows="6" id="bio" placeholder="Talk about yourself" name="bio"></textarea>
        </div>
        <div class="form-group">
          <label class="control-label">Non-negotiables</label>
          <br>
          <label class="checkbox-inline"><input type="checkbox" name="clean">Cleanliness</label>
          <label class="checkbox-inline"><input type="checkbox" name="quiet">Quietness</label>
          <label class="checkbox-inline"><input type="checkbox" name="smoke">Non-Smoker</label>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require_once __DIR__ . '/templates/footer.php' ?>
