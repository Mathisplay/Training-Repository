<html>
<body>

Your password is: <?php $text = $_GET["pass"];
echo $text;?>

<script>
   function back(){alert("wow")};
	<?php if($text=="1234") ?>
	{
		back();
	}
</script>

</body>
</html> 
