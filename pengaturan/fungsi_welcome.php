<html>
<head>
<link type="text/css" href="css/smoothness/jquery-ui-1.8.24.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.24.custom.min.js"></script>
		<script type="text/javascript">
		$(function() {
			$( "#dialog:ui-dialog" ).dialog( "destroy" );
	
		$( "#dialog" ).dialog({
			modal: true,
			buttons: {
				Ok: function() {
					$( this ).dialog( "close" );
				}
			}
		});
		});
		</script>
</head>
<body>
<div title="Welcome">
	<p>Personal Commerce.<br>
<br>
<br>
Copyright 2012 @ Arisa Apriana</p>
</div>
</body>
</html>