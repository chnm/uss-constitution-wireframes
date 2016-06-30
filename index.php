<?php include('header.php'); ?>

<!-- <div data-intro="Here we have portals to the four main entry points to the site. The portals will feature representative images chosen to encourage users to click through, and information that appears on hover. Additionally, we will include a short blurb to orient the user to the site and its contents." data-position="bottom-middle-aligned">
<div class="row"> -->

<!--     <div class="medium-3 columns right">
        <p>A blurb about the site to orient users and draw them into the portals. Essentially, a short about paragraph, hopefully with some exciting copy. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore cum quaerat, ipsam atque saepe porro.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quas harum maxime placeat sequi fugit recusandae possimus incidunt repellendus, animi atque dolor ea. Ab maxime laboriosam saepe magnam, deserunt eius.</p>
    </div> -->

    <div class="medium-12 columns bottom show-for-medium">
      <div class="image-wrapper overlay-fade-in">
        <img src="img/Blunderbuss1.jpg">
        <div class="image-overlay-content">
        <h3>Blunderbuss!</h3>
        <p>American made blunderbuss, fired with a "Ketland" lock engraved with a tulip design. The Ketland hammer and various internal lock parks are likely replacements.</p>
        <a href="browse.php" class="button">Explore more in our Collections!</a>
        </div>
      </div>
    </div>

<div class="row bottom" data-equalizer>

  <div class="medium-4 columns show-for-medium">
    <div class="image-wrapper portal overlay-fade-in" data-equalizer-watch>
      <img src="img/Portrait.jpg" alt="">
      <div class="image-overlay-content">
        <p>Framed portrait of Thomas John Chew.</p>
        <a href="browse.php" class="button">Explore the Ship's Company!</a>
      </div>
    </div>
  </div>

  <div class="medium-4 columns show-for-medium">
    <div class="image-wrapper portal overlay-fade-in" data-equalizer-watch>
    <img src="img/Letter1.jpg" alt="">
        <div class="image-overlay-content">
          <p>A blurb about this item from the War of 1812 Logs.</p>
          <a href="logs.php" class="button">Explore the Ship's Logs!</a>
        </div>
      </div>
  </div>

  <div class="medium-4 columns show-for-medium">
    <div class="image-wrapper portal overlay-fade-in" data-equalizer-watch>
    <img src="img/Urn.jpg" alt="">
        <div class="image-overlay-content">
          <p>A blurb about the a resource. These can be longer. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum magnam nobis totam repellendus sit, eius porro unde sequi placeat voluptatem iusto quod enim repellat pariatur quisquam atque dicta, quis id.</p>
          <a href="resources.php" class="button">Explore Resources!</a>
        </div>
      </div>
  </div>

</div>

<div class="row">
  <div class="hide-for-medium">
    <h3>Explore the site!</h3>
    <div class="small-12"><button class="button">Collections</button></div>
    <div class="small-12"><button class="button" class="button" class="button">Ship's Company</button></div>
    <div class="small-12"><button class="button" class="button">Active Logs</button></div>
    <div class="small-12"><button class="button">Resources</button></div>
  </div>
</div>

<div class="share large-2 row" data-intro="Share buttons will be persistent on all pages." data-position="top"><p>Share: <img src="http://place-hold.it/20x20&text=T" alt=""> <img src="http://place-hold.it/20x20&text=F" alt=""> <img src="http://place-hold.it/20x20&text=P" alt=""></p></div>

<img data-intro="The footer will contain contact info, any needed funder information, a link to an about page, etc." data-position="top" class="footer" src="http://placehold.it/1350x350?text=FOOTER" >

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="lightbox2-master/dist/js/lightbox.js"></script>
    <script src="js/intro.js"></script>
    <script>
    if (screen.width >= 600) {
      //introJs().setOption("showStepNumbers",false).start();
    }
    </script>
  </body>
</html>