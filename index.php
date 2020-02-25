<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
 <script type = "text/javascript" src = "js/jquery-3.4.1.js"></script>
 <script type="text/javascript" src="jquery.autocomplete.js"></script>
 <script> 
 jQuery(function(){ 
 $("#search").autocomplete("search.php");
 });
 </script>
</head>
<body>
 <form method = "post">
 Поиск информации : <input type="text" name="q" id="search" placeholder="Введите название региона">
 <input type="submit" value="Поиск"/>
 </form> 
</body>
</html>