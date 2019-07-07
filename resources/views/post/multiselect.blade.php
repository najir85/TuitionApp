
<!DOCTYPE html>
<html>
<head>
	<title>Multiselect</title>
	<link href="css/multiselect.css" rel="stylesheet">
</head>
<body>
	 <select id='subjects' multiple>
	
	  <option value='Physics'>Physics</option>
	
	  <option value='Chemistry'>Chemistry</option>
	
	  <option value='Math'>Math</option>
	
	  <option value='Ict'>ICT</option>
	
	  <option value='English'>English</option>
	
	</select>

	 <select id='classes' multiple>
	  <option value='8'>8</option>
	  <option value='9'>9</option>
	  <option value='10'>10</option>
	  <option value='11'>11</option>
	  <option value='12'>12</option>
	</select>

<script src="js/multiselect.min.js"></script>

<script type="text/javascript">
	document.multiselect('#subjects');
	document.multiselect('#classes')
</script>


</body>
</html>

