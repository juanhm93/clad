
<!-- FOOTER -->
<footer class="container-fluid text-center " id="footers">
  <div class="row">
    <div class="col-sm-10 top p-0">
      <div class="d-flex flex-column flex-md-row align-items-center  border-bottom box-shadow">
       <div id="idioma">
          <img alt="<?php bloginfo("name"); ?>" src="<?php echo (get_template_directory_uri().'/images/esp.png' ); ?>" name="idioma" width="200" height="50" class="idioma p-1">
       </div>
        
       <hr class="line l-line d-none d-xl-block">
          
        <div id="main-nav" class="nav-witdh">

        <?php wp_nav_menu(array('theme_location' => 'menu-footer', 
        'container' => '')); ?>

        </div>
          <hr class="line r-line d-none d-xl-block">
    </div>
    </div>  
    <div class="col-sm-2 pl-0 d-print-inline-block" id="redes">
       <a href="https://www.linkedin.com/in/cladorg"><img class="redes" src="<?php echo (get_template_directory_uri().'/images/20.png' ); ?>"></a>
          <a href="https://twitter.com/CLAD_Org"><img class="redes" src="<?php echo (get_template_directory_uri().'/images/21.png' ); ?>"></a>
          <a href="https://www.facebook.com/clad.fb"><img class="redes" src="<?php echo (get_template_directory_uri().'/images/22.png' ); ?>"></a>
          <a href="http://instagram.com/clad_org"><img class="redes" src="<?php echo (get_template_directory_uri().'/images/23.png' ); ?>"></a>
    </div>    
        
  </div>
  
  <div id="copyright" class="row">
    <div class="col-sm-9 pl-0">
    
    <div class="row m-1 ml-1">

      <div class="col-sm-4 p-0"><p class="text-address text-justify">Av. Ppal. de los Chorros, cruce con Av. 6. Casa CLAD, Urb. Los Chorros, Caracas 1071, Venezuela. Apartado postal 4181. Caracas 1010A. Venezuela</p>
    </div>
      <div class="col-sm-2 p-0 "><p class="text-phone ">(58212) 2709211/Fax: (58212) 2709214</p></div>
      <div class="col-sm-1 p-0"><p class="text-phone">clad@clad.org <br> www.clad.org</p></div>
    
    </div>

</div>
    
    <div class="col-sm-3 mt-1 pr-0">
      <p class="text-copyright"> © 2019, CLAD. Todos los derechos reservados.</p> 
  </div>

</footer>
<!-- END FOOTER -->	
<?php wp_footer(); ?>

</body>
</html>