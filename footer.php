<footer class="eight columns offset-by-two" id="copyright">
    
    <form method="get" class="search" id="searchbox" action="http://www.google.com/search">
    	<fieldset>
		     <input type="text" name="q" maxlength="255" placeholder="Search"/>
		     <input type="submit" value="Go"  />
		     <input type="hidden" name="site" value="ianhin.es" class="hidden"  />
		     <input type="hidden" name="domains" value="ianhin.es" class="hidden" />
		     <input type="hidden" class="hidden" name="sitesearch" value="ianhin.es" checked="checked" />
	     </fieldset>
	</form>   

        <p>Copyright &copy; 2012&ndash;Present <a href="http://whois.ianhin.es">Ian Patrick Hines</a>. All Rights Reserved.</p>
        <p><a href="http://blarnify.com">Made by Blarnify</a>. <a href="http://wordpress.org">Powered by WordPress</a>.</p>
    </footer>

    <div class="five columns offset-by-one">
        &nbsp;
    </div><!-- container -->
    <!-- JS
    ================================================== -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript">
</script><script src="javascripts/tabs.js" type="text/javascript">
</script><!-- Gaug.es -->
    <script type="text/javascript">
var _gauges = _gauges || [];
    (function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '502dc1f2f5a1f5259e000034');
    t.src = '//secure.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
    })();
    </script>

<!-- <script type="text/javascript">// When ready...
window.addEventListener("load",function() {
	// Set a timeout...
	setTimeout(function(){
		// Hide the address bar!
		window.scrollTo(0, 1);
	}, 0);
});
</script> -->

<?php
   /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */

    wp_footer();
?>
</body>
</html>
