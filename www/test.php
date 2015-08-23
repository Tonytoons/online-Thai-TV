
		<!-- phantom library, needed for XDK "legacy" container api calls -->
	    <script src="intelxdk.js"></script>
	    <!-- phantom library, needed for Cordova api calls -->
	    <script src="cordova.js"></script>
	    <!-- phantom library, needed for XDK "legacy" container CORS -->
	    <script src="xhr.js"></script>
	    
	    <script>
	        var onDeviceReady=function(){                             // called when Cordova is ready
	           if( window.Cordova && navigator.splashscreen ) {     // Cordova API detected
	               $.ui.launch(); 
	               navigator.splashscreen.hide() ;                 // hide splash screen
	            }
	        } ;
	        document.addEventListener("deviceready", onDeviceReady, false) ;
	    </script>
	    
	    <script>   
	       $.ui.autoLaunch = false;
	       $.ui.animateHeaders = true; 
	                
	        $(document).ready(function(){
	            $.ui.setSideMenuWidth('260px');
	            $.ui.launch();
	        });
	    </script>