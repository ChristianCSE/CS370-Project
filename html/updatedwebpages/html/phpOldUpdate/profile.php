<?php require_once __DIR__ . '/templates/header.php' ?>

<!-- Page Content -->
<div class="container">
  <div class="owl-carousel owl-theme owl-loaded">
    <div class="owl-item">
      <h4>Christian Sanchez</h4>
      <img class="img-responsive portfolio-item" src="images/christian.jpg" style="height:300px; width:500px;">
      <p>Match Rating: 10</p>
      <p>Age: 9001</p>
    </div>
    <div class="owl-item">
      <h4>Paul Lee</h4>
      <img class="img-responsive portfolio-item" src="images/paul_lee.jpg" style="height:300px; width:500px;">
      <p>Match Rating: 9</p>
      <p>Age: 21</p>
    </div>
    <div class="owl-item">
      <h4>Chris Oh</h4>
      <img class="img-responsive portfolio-item" src="images/chris_oh.jpg" style="height:300px; width:500px;">
      <p>Match Rating: 9</p>
      <p>Age: 22</p>
    </div>
    <div class="owl-item">
      <h4>Taylor Core</h4>
      <img class="img-responsive portfolio-item" src="images/taylor_core.jpg" style="height:300px; width:500px;">
      <p>Match Rating: 7</p>
      <p>Age: 23</p>
    </div>
    <div class="owl-item">
      <h4>Anon</h4>
      <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" style="height:300px; width:500px;">
      <p>Match Rating: 5</p>
      <p>Age: 25</p>
    </div>
    <div class="owl-item">
      <h4>Anon #2</h4>
      <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" style="height:300px; width:500px;">
      <p>Match Rating: 5</p>
      <p>Age: 32</p>
    </div>
  </div>
</div>


<head>
  <link rel="stylesheet" href="css/PoliciesRules.css">
</head>

<!--Terms, Privacy, Info, Contact-->
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
