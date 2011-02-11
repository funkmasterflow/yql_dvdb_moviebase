<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Meine Moviebase - YQL und jQuery Experimente</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
    <link rel="stylesheet" href="layout.css" type="text/css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/tablesorter/jquery.tablesorter.min.js"></script>
</head>

<body>

<div id="doc3" class="yui-t7">
   <div id="hd" role="banner"><h1>Meine Moviebase</h1></div>
   <div id="bd" role="main">
    <div class="yui-g">
    	<div class="yui-u first">    		
	        <?php 
	            include 'dvdb.php'; 
	            echo $movieList;
			?>
		</div>
        <div class="yui-u">
            Random Movie:
        	<div id="result">
               &nbsp;
        	</div><input type="button" value="Neuer Film" id="refresh" />
			
        </div>
    </div>

    </div>
   <div id="ft" role="contentinfo"><p>&copy; 2010 - Funkmaster Flow</p></div>
</div>
    
	
<script type="text/javascript">
	
	
$(document).ready(function() 
{ 
    $("#movieTable").tablesorter();		 
} 
); 
	
$("#refresh").click(function(){ 
    $("#result").load("randomMovie.php"); 
});	
	
</script>


</body>
</html>