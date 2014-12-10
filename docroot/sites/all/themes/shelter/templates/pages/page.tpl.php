<div id="page">

  <header>

    <section id="site-options-bar" class="clearfix">
      <div class="page-margin">
        <div id="language-selector" class="clearfix">
          <ul class="languages">
            <li class="language"><a href="" class="active">en</a></li>
            <li class="language"><a href="">fr</a></li>
            <li class="language"><a href="">es</a></li>
            <li class="language"><a href="">ar</a></li>
          </ul>
        </div>
        <div id="bandwidth-selector">
          <?php print _svg('icons/signal', array('id'=>'bandwidth-selector-icon', 'alt' => 'Bandwidth indication icon')); ?>
          <a href="" class="active">Low bandwidth environment</a>
          <span>/</span>
          <a href="">Switch to high</a>
        </div>
      </div>
    </section>

    <section id="site-branding" class="clearfix">
      <div class="page-margin clearfix">

        <a id="logo-shelter-cluster" href="http://sheltercluster.org">
          <?php print _svg('logo-global-shelter-cluster', array('id'=>'shelter-cluster', 'alt' => 'Global Shelter Cluster - ShelterCluster.org - Coordinating Humanitarian Shelter')); ?>
        </a>

        <ul id="profile-menu-items">
          <li class="profile-item"><a href="">Login</a></li>
          <li class="profile-item"><a href="">Create an account</a></li>
        </ul>

        <form class="search" action="http://www.google.com/search" method="get">
          <input class="text-field" type="search" placeholder="Search documents" name="q">
          <input class="submit" type="submit" value="Search">
        </form>

      </div>
    </section>

    <div class="page-margin clearfix">
      <?php if ($messages) { print $messages; } ?>
    </div>

    <nav id="nav-shelter" class="clearfix">
      <div class="page-margin">
        <a href="#" id="button-menu-dropdown">Menu</a>
        <ul class="nav-items">
          <li class="nav-item"><a href="">Home</a></li>
          <li class="nav-item"><a href="">Current Operations <span class="total">(10)</span></a></li>
          <li class="nav-item"><a href="">Documents <span class="total">(8200)</span></a></li>
          <li class="nav-item"><a href="">Geographic Aggregators</a></li>
          <li class="nav-item"><a href="">Communities of Practice <span class="total">(6)</span></a></li>
          <li class="nav-item"><a href="">References <span class="total">(34)</span></a></li>
          <li class="sub-nav">
            <ul>
              <li class="nav-item"><a href="">Manage your profile</a></li>
              <li class="nav-item"><a href="">Disconnect</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <?php print render($page['content']); ?>

  <footer>
    <div class="page-margin clearfix">
      <form class="search" action="http://www.google.com/search" method="get">
        <input class="text-field" type="search" placeholder="Search documents" name="q">
        <input class="submit" type="submit" value="Search">
      </form>
    </div>

    <div class="page-margin">
      <section id="active-clusters-list">
        <h3>With 24 <a href='#'>active responses</a> and cluster like mechanisms.</h3>
        <ul class="clusters">
          <li class="cluster"><a href="#">Myanmar Rakhine and Kachin Emergency Response</a></li>
          <li class="cluster"><a href="#">Philippines Bohol Earthquake</a></li>
          <li class="cluster"><a href="#">Solomon Islands Floods 2014</a></li>
        </ul>
        <a class="complete-list" href="#">[...] more</a>

      </section><section id="regions-list">
        <h3>Shelter Cluster is present in over <a href="#">34 regions</a></h3>
        <?php print render($page['footer']['menu_regions']); ?>
      </section>

      <section id="general-information">
        <h3>General Information</h3>
        <ul class="links">
          <li class="link"><a href="#">About this site</a></li>
          <li class="link"><a href="#">Contact information</a></li>
          <li class="link"><a href="#">Twitter account</a></li>
        </ul><ul class="links">
          <li class="link"><a href="#">Support Team</a></li>
          <li class="link"><a href="#">Partnership</a></li>
        </ul><ul class="links">
          <li class="link"><a href="#">Other</a></li>
          <li class="link"><a href="#">More information</a></li>
          <li class="link"><a href="#">Twitter account</a></li>
        </ul>
      </section>

      <section id="partners-list">
        <ul class="partners clearfix">
          <li class="partner"><a href="#">ECHO</a></li>
          <li class="partner"><a href="#">IFRC</a></li>
          <li class="partner"><a href="#">UNHCR</a></li>
        </ul>
      </section>

    </div>
  </footer>

</div>
