<!-- Navbar start -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container container-navbar">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
          <img alt="Brand" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bas-logo-2016-inline.png">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="row row-search">
          <div class="col-xs-12 col-sm-4 col-md-6">
            <form id="global-search" class="banner" action="https://bioatlas.se/ala-bie/search" method="get" name="search-form">
              <div class="icon-addon addon-lg">
                <input type="text" placeholder="Search the Atlas ..." class="form-control autocomplete" id="biesearch" name="q">
                <label for="biesearch" class="glyphicon glyphicon-search" rel="tooltip" title="search"></label>
              </div>
            </form>
          </div>
<!--
          <div class="col-md-2 hidden-xs">
<?php if (is_user_logged_in() ) { ?>
            <ul class="nav navbar-nav navbar-right nav-logged-in">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  My profile
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="https://auth.ala.org.au/userdetails/myprofile/">View profile</a></li>
                  <li><a href="https://auth.ala.org.au/userdetails/registration/editAccount">Account settings</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo wp_logout_url( home_url() ); ?>">Log out</a></li>
                </ul>
              </li>
            </ul>
<?php } else { ?>
            <ul class="nav navbar-nav navbar-right nav-login">
              <li><a href="<?php echo wp_login_url( home_url() ); ?>">Log in</a></li>
            </ul> 
<?php } ?>

          </div>
-->

        </div><!-- End row -->
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Start exploring
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="https://bioatlas.se/ala-hub/search">Search species occurrences</a></li>
              <li class="divider"></li>
              <li><a href="https://bioatlas.se/collectory/">Search Data Partners</a></li>
              <li><a href="https://bioatlas.se/collectory/datasets/">Search Datasets</a></li>
              <li class="divider"></li>
              <li><a href="https://bioatlas.se/images/">View images</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Search &amp; analyse
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="https://bioatlas.se/ala-hub/search#tab_spatialSearch">Explore by polygon</a></li>
              <li><a href="https://bioatlas.se/ala-hub/explore/your-area">Explore your location</a></li>
              <li class="divider"></li>
 <!--             <li><a href="https://downloads.ala.org.au">Download data</a>
              <li><a href="http://spatial.ala.org.au/">Spatial portal</a></li>
              <li class="divider"></li>
-->
              <li><a href="https://bioatlas.se/mirroreum/">Mirroreum</a></li>
            </ul>
          </li>
<!--
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Participate
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="https://biocollect.ala.org.au/acsa">Join a Citizen Science project</a></li>
              <li><a href="https://sightings.ala.org.au/">Record a sighting in the ALA</a></li>
              <li><a href="/submit-dataset-to-ala/">Submit a dataset to the ALA</a></li>
              <li><a href="https://digivol.ala.org.au/">Digitise a record in DigiVol</a></li>
            </ul>
          </li>
-->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              About ...
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="https://bioatlas.se/api/">APIs</a></li>
              <li class="divider"></li>
              <li><a href="https://bioatlas.se/atlascommunity/">Living Atlases Community</a></li>
              <li><a href="https://bioatlas.se/gbifnetwork/">GBIF Network</a></li>
              <li class="divider"></li>
              <li><a href="https://bioatlas.se/about/">About Bioatlas Sweden</a></li>
              <li><a href="https://bioatlas.se/contacts/">Contact Us</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right visible-xs">
<?php if (is_user_logged_in() ) { ?>
          <li><a href="https://auth.ala.org.au/userdetails/myprofile/"><span class="nav-login">View profile</span></a></li>
          <li><a href="https://auth.ala.org.au/userdetails/registration/editAccount"><span class="nav-login">Account settings</span></a></li>
          <li><a href="<?php echo wp_logout_url( home_url() ); ?>"><span class="nav-login">Log out</span></a></li>
<?php } else { ?>
          <li><a href="<?php echo wp_login_url( home_url() ); ?>"><span class="nav-login">Log in</span></a></li>
<?php } ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- End Navbar -->

