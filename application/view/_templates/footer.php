<!-- Footer -->   
    <div class="container-fluid blue">
    	<div class="container">
            <div class="row" align="left">
                <div class="col-md-3">
                	<ul class="list-unstyled">
                    	<dl><span class="glyphicon glyphicon-bullhorn"></span> Newsletter</dl>
                        <li><hr></li>
                        <li>
                        	<div class="col-lg-12">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter email">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Subscribe!</button>
                              </span>
                            </div><!-- /input-group -->
                          </div><!-- /.col-lg-6 -->
                        </li>
                    </ul>	
                </div>
                <div class="col-md-2">
                	<ul class="list-unstyled">
                    	<dl><span class="glyphicon glyphicon-list-alt"></span> Contests</dl>
                        <li><hr></li>
                    	<li><a href="#">New contests</a></li>
                        <li><a href="#">Old contests</a></li>
                        <li><a href="#">My entries</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                	<ul class="list-unstyled">
                    	<dl><span class="glyphicon glyphicon-question-sign"></span> Help</dl>
                        <li><hr></li>
                        <li><a href="#">About us</a></li>
                    	<li><a href="#">Privacy</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                	<ul class="list-unstyled">
                    	<dl><span class="glyphicon glyphicon-envelope"></span> Contact us</dl>
                        <li><hr></li>
                    	<li>support@mediapitch.net</li>
                        <li>+385 01 555 555</li>
                        <li><a href="#">Form</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                	<ul class="list-unstyled">
                    	<dl><span class="glyphicon glyphicon-road"></span> Follow us</dl>
                        <li><hr></li>
                    </ul>
                </div>
                <div class="col-md-12">
                	<br><br><br><br><br>
                </div>
            </div>
        </div>
    </div> 
    <div class="container-fluid grey">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                    <p align="center" class="copyright">© Mediapitch 2015. - Online service for booking photography related jobs 		worldwide.<br>
                    Medijske mape d.o.o, Croatia.</p>
                </div>	
            </div>
        </div>
    </div>  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo URL; ?>js/bootstrap.min.js"></script>
    <?php
    // include vegas background if page is Contest
        if (basename($_SERVER['REQUEST_URI']) == 'Contests') {
            echo "<script type='text/javascript' src='js/jquery.vegas.js'></script> 
                  <script>
                        $(function() {
                      $.vegas({
                        src:'img/background/contests_wallpaper.jpg'
                      });
                      $.vegas('overlay', {
                        src:'overlays/01.png'
                      });
                    });
                  </script>";
        } elseif (basename($_SERVER['REQUEST_URI']) == 'Blog'){
            echo "<script type='text/javascript' src='js/jquery.vegas.js'></script>
            <script>
                $(function() {
              $.vegas({
                src:'img/background/blog_wallpaper.jpg'
              });
              $.vegas('overlay', {
                src:'overlays/01.png'
              });
            });
            </script>
            ";
        } elseif (basename($_SERVER['REQUEST_URI']) == 'Single') {
            echo "<script type='text/javascript' src='". URL ."js/jquery.vegas.js'></script> 
                  <script>
                        $(function() {
                      $.vegas({
                        src:'". URL ."img/background/contests_wallpaper.jpg'
                      });
                      $.vegas('overlay', {
                        src:'". URL ."overlays/01.png'
                      });
                    });
                  </script>";
        }
     ?>
    <script>
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
	</script>
	<script>
		$(document).ready(function(){
	   // cache the window object
	   $window = $(window); 
	   $('div[data-type="background"]').each(function(){
		 // declare the variable to affect the defined data-type
		 var $scroll = $(this);						 
		  $(window).scroll(function() {
			// HTML5 proves useful for helping with creating JS functions!
			// also, negative value because we're scrolling upwards                             
			var yPos = -($window.scrollTop() / $scroll.data('speed')); 			 
			// background position
			var coords = '50% '+ yPos + 'px'; 
			// move the background
			$scroll.css({ backgroundPosition: coords });    
		  }); // end window scroll
	   });  // end section function
	}); // close out script
	</script>
  </body>
</html>