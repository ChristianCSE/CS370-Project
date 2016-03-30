<?php require_once __DIR__ . '/templates/header.php' ?>

<form action="findRoommate.php" method="post">
  <div class="container">
    <legend>Before you search, would you like to give us additional data for the search?</legend>

      <div class="form-group">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="true" name="profile">
            use optional profile data.
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="true" name="fb">
            use Facebook data.
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>

  </div>
</form>


<?php require_once __DIR__ . '/templates/footer.php' ?>
