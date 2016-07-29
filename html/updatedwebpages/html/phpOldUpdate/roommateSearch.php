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

<!-- Updated: Terms of Use, Contact, Info & Privacy-->
<head>
  <link rel="stylesheet" href="css/PoliciesRules.css">
</head>
<div class="sidetable">
    <table class="Utility">
        <tr class="info">
            <th><a href="TermsofService.php" style="color: green">Terms of Use</a></th>
            <th><a href="uSupport.php" style="color: green">Contact Support </a></th>
            <!--Exclusive to logged in profiles-->
            <th><a href="infoPrivLog.php" style = "color: green"> Roomie Info & Privacy </a></th>
        </tr>
    </table>
    <?php require_once __DIR__ . '/templates/footer.php' ?>
</div>
