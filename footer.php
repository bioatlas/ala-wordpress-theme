 <footer>
    <!-- Container -->
    <div class="container footer-container ">
<?php if ( $GLOBALS['ALAcontentType'] != 'Channel' ) : ?>
      <hr class="footer-border">
<?php endif; ?>
      <div class="row footer-nav">

        <div class="col-md-12 margin-bottom-2">
          <h2 class="heading-large margin-bottom-quarter-1">Biodiversity Atlas Sweden</h2>
          <h3 class="promotional">Sharing biodiversity knowledge to shape our future</h3>
        </div>

        <div class="col-xs-6 col-sm-3 col-lg-3 hidden-print">
          <h5>Start exploring</h5>
          <ul class="link-list">
            <li><a href="https://bioatlas.se/generic-hub">Browse collections and data partners</a></li>
            <li><a href="https://bioatlas.se/explore/your-area">Explore your area</a></li>
            <li><a href="https://bioatlas.se/regions/">Explore regions</a></li>
            <li><a href="https://bioatlas.se/generic-hub/search">Search occurrence records</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-sm-3 col-lg-3 hidden-print">
          <h5>Search &amp; analyse</h5>
          <ul class="link-list">
            <li><a href="https://bioatlas.se/datasets">Search datasets</a></li>
            <li><a href="https://bioatlas.se/downloads">Download data</a>
            <li><a href="https://bioatlas.se/spatial">Spatial portal</a></li>
            <li><a href="https://bioatlas.se/dashboard">Bioatlas dashboard</a></li>
          </ul>
        </div>

        <div class="clearfix visible-xs-block">
          <!-- This fixes the alignment issues of the footer columns -->
        </div>

        <div class="col-xs-6 col-sm-3 col-lg-3 hidden-print">
          <h5 class="footer-second-row">About</h5>
          <ul class="link-list">
            <li><a href="https://bioatlas.se/api/">APIs</a></li>
	        <li><a href="https://bioatlas.se/atlascommunity/">Living Atlases Community</a></li>
	        <li><a href="https://bioatlas.se/gbifnetwork/">GBIF Network</a></li>
 	        <li><a href="https://bioatlas.se/about/">About Bioatlas</a></li>
	        <li><a href="https://bioatlas.se/contacts/">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-xs-6 col-sm-3 col-lg-3 hidden-print">
          <h5 class="footer-second-row">Learn</h5>
          <ul class="link-list">
            <li><a href="/how-to-use-ala/">How to use Bioatlas</a></li>
            <li><a href="/how-to-work-with-data/">How to work with data</a></li>
            <li><a href="/how-to-cite-ala/">How to cite Bioatlas</a></li>
            <li><a href="/education-resources/">Education resources</a></li>
            <li><a href="/blogs-news/">Bioatlas News</a></li>
            <li><a href="/about-the-atlas/contact-us/">Contact us</a></li>
            <li><a href="/about-the-atlas/feedback-form/">Feedback form</a></li>
          </ul>
        </div>

      </div>

      <div class="row footer-bonus">
        <div class="col-md-4 col-sm-12 footer-bonus-item">
          <h5 class="footer-bonus-heading">Explore the Spatial Portal</h5>
          <a href="https://bioatlas.se/spatial" title="Spatial portal" class="footer-bonus-link">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-bonus-spatial-portal-icon.png" alt="Spatial Portal icon">
          </a>
          <p class="footer-bonus-description"><a href="https://bioatlas.se/spatial/">Explore species occurrence records</a> in the context of their environment. Find records and model species distributions. Export reports, maps and data.</p>
        </div>
<!--
        <div class="col-md-4 col-sm-12 footer-bonus-item">
          <h5 class="footer-bonus-heading">Join a Citizen Science Project</h5>
          <a href="https://biocollect.ala.org.au/" title="Contribute your sightings" class="footer-bonus-link">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-bonus-cit-science-icon.png" alt="Citizen Science icon">
          </a>
          <p class="footer-bonus-description">Find out how you can <a href="https://biocollect.ala.org.au/acsa">contribute to a citizen science project</a> in your area, or explore one of the many citizen science projects supported by the ALA.</p>
        </div>
        <div class="col-md-4 col-sm-12 footer-bonus-item">
          <h5 class="footer-bonus-heading">Record a sighting</h5>
          <a href="https://sightings.ala.org.au/" title="Did you see something?" class="footer-bonus-link">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-bonus-record-sighting-icon.png" alt="Sightings icon">
          </a>
          <p class="footer-bonus-description">Did you see something? Photograph something? <a href="https://sightings.ala.org.au/">Contribute your sighting</a> to the ALA.</p>
        </div>
-->
      </div>
      <!-- Acknowledgement section -->
      <div class="row col-sm-12 acknowledgement-callout acknowledgement-callout-ala">
        <div class="col-md-10 col-sm-12">
          <h4 class="margin-bottom-half-1">Acknowledgement of Traditional Owners and Country</h4>
          <p>The Biodiversity Atlas Sweden acknowledges Sweden's Traditional Owners and pays respect to the past and present Elders of the nation’s Sami communities. We honour and celebrate the spiritual, cultural and customary connections of Traditional Owners to country and the biodiversity that forms part of that country.</p>
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- Logo section -->
      <div class="row">
        <div class="col-md-12">
          <h5 class="footer-bonus-heading">The Bioatlas is made possible by contributions from its partners, and is based on work financed by the Swedish Research Council through Grant No 2017-00688.</h5>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 footer-bonus-brands">
<!--
          <a href="https://www.education.gov.au/national-collaborative-research-infrastructure-strategy-ncris" target="_blank" class="img-responsive" id="ncris"></a>
          <a href="https://www.csiro.au/" target="_blank" id="csiro"></a>
-->
          <a href="https://www.gbif.org/" target="_blank" class="img-responsive" id="gbif"></a>
		  <a href="https://bioatlas.se/" target="_blank" class="img-responsive" id="bas"></a>
        </div>
      </div>
      <!-- End logo section -->

      <div class="row">
        <div class="col-md-12">
          <ul class="footer-list">
            <li class="footer-item footer-social-item">
              <a title="Facebook" class="footer-social-link" href="https://www.facebook.com/GBIF-Sweden-374750022480/"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="footer-item footer-social-item">
              <a title="Twitter" class="footer-social-link" href="https://twitter.com/#!/gbifsweden"><i class="fa fa-twitter"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div><!-- End Container -->
  </footer>

  <!-- Creative commons bar -->
  <div class="alert alert-creativecommons hidden-print" role="alert">
    <div class="container alert-container">
      <div class="row-fluid">
        <div class="col-md-12">
          <p class="alert-text text-creativecommons">
            This work is licensed under a <a href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>&ensp;<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://licensebuttons.net/l/by/4.0/80x15.png"></a>
          </p>
        </div>
      </div>
    </div>
  </div><!-- End Creative commons bar -->


<?php wp_footer(); ?>
</body>
</html>
