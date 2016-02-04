<!DOCTYPE html>
<html>
<head>
    <title>Example</title>
    <link href="styles/glDatePicker.flatwhite.css" rel="stylesheet" type="text/css">
	
</head>
<body>
    <input type="text" id="example2" gldp-id="example2" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="glDatePicker.min.js"></script>
	
	
    
	<div gldp-el="example2"
         style="width:400px; height:300px; position:absolute; top:70px; left:100px;">
    </div>
	
	
	
	
    <script type="text/javascript">
		$('#example2').glDatePicker(
		{
			showAlways: false,
			cssName: 'flatwhite',
			allowMonthSelect: true,
			allowYearSelect: true,
			calendarOffset: { x: 0, y: 1 },
		});
    </script>
</body>
</html>