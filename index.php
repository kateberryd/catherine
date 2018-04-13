<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <nav>
    <h2>LOGO</h2>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Contact us</a></li>

        </ul>
    </nav>
    <header>
    <div id="main">
    <?php 
     
     echo "<div id='kate'>";
       
     echo "<p>".  date('D - M - Y ')."<br>".  date('h:i a'). " </p>";
    //  echo "<p>" " </p>";
 echo "</div>";
     ?>
    </div>
      
    </header>
    <footer>
        <p>&copy;kateberry.com</p>
    </footer>
   
</body>
</html>