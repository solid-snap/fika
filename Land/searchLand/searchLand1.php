<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>Search Land</h1>
<div class="sidebar">
    <div class="technologo">
        <a href="../../Index.php"><img src="../../Images/technolab.png" alt="TechnoLab"></a>
    </div>
    <ul>
        <li><a href="Land">Landen</a></li>
        <li><a href="Ingrediënt">Ingrediënten</a></li>
        <li><a href="Persoon">Personen</a></li>
        <li><a href="Resultaat">Resultaten</a></li>
    </ul>
</div>
<div class="content">
<form action="searchLand2.php" method="POST">
    <label for="Id">id:</label>
    <input type="text" id="Id" name="IdField">
    <input type="submit">
    <br>
</form>
</div>
</body>
</html>