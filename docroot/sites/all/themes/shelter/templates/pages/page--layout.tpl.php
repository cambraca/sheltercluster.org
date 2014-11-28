<div id="page">

  <header>

    <div class="page-margin">
      <div id="bandwidth-selector">
        <?php print _svg('icons/signal', array('id'=>'bandwidth-selector-icon', 'alt' => 'Bandwidth indication icon')); ?>
        <a>Low</a>
        <a>High</a>
      </div>
      <div id="language-selector">
        <ul class="languages">
          <li class="language">en</li>
          <li class="language">fr</li>
          <li class="language">es</li>
          <li class="language">ar</li>
        </ul>
      </div>
      <a id="btn-dropdown-shelter">Menu</a>
    </div>

    <nav id="nav-shelter">
      <div class="page-margin">
        <ul id="nav-items">
          <li class="nav-item"><a>Home</a></li>
          <li class="nav-item"><a>Search Documents <span class="total">(8 200)</span></a></li>
          <li class="nav-item"><a>Regional Groups <span class="total">(6)</span></a></li>
          <li class="nav-item"><a>Countries <span class="total">(34)</span></a></li>
          <li class="nav-item"><a>Crises <span class="total">(3)</span><span class="total-ended">(20) ended</span></a></li>
          <li class="nav-item"><a>Manage your profile</a></li>
          <li class="nav-item"><a>Disconnect</a></li>
        </ul>
      </div>
    </nav>

    <div class="page-margin">
      <a id="logo-shelter-cluster">
        <?php print _svg('logo-global-shelter-cluster', array('id'=>'shelter-cluster', 'alt' => 'Global Shelter Cluster - ShelterCluster.org - Coordinating Humanitarian Shelter')); ?>
      </a>
      <ul id="profile-items">
        <li class="profile-item"><a>Login</a></li>
        <li class="profile-item"><a>Create an account</a></li>
      </ul>
      <div>
        <form action="http://www.google.com/search" method="get">
          <label>Search: <input type="search" placeholder="Search documents" name="q"></label>
           <input type="submit" value="Search">
        </form>
      </div>
    </div>

  </header>

  <div id="content">
    <div class="page-margin">
      <?php print $messages; ?>
      <?php print render($page['content']); ?>
    </div>
  </div>

  <footer>
    <div class="page-margin">

      <section id="active-clusters-list">
        <h3>With 24 <a href='#'>active shelter clusters</a> and cluster like mechanism</h3>
        <ul class="clusters">
          <li class="cluster"><a href="#">Myanmar Rakhine and Kachin Emergency Response</a></li>
          <li class="cluster"><a href="#">Philippines Bohol Earthquake</a></li>
          <li class="cluster"><a href="#">Solomon Islands Floods 2014</a></li>
        </ul>
        <a class="complete-list" href="#">[...] more</a>

      </section><section id="regions-list">
        <h3>Shelter Cluster is present in over <a href="#">34 countries</a></h3>
        <ul class="regions">
          <li class="region"><a href="#" class="region-name">Africa</a>
            <ul class="countries">
              <li class="country"><a href="#">Central African Republic</a></li>
              <li class="country"><a href="#">Chad</a></li>
            </ul>
          </li><li class="region"><a href="#" class="region-name" >Americas</a>
            <ul class="countries">
              <li class="country"><a href="#">Colombia</a></li>
              <li class="country"><a href="#">Haiti</a></li>
            </ul>
          </li><li class="region"><a href="#" class="region-name">MENA</a>
            <ul class="countries">
              <li class="country"><a href="#">Iraq</a></li>
              <li class="country"><a href="#">Palestine</a></li>
              <li class="country"><a href="#">Yemen</a></li>
            </ul>
          </li>
        </ul>
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
