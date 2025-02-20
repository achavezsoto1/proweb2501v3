<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Automoviles</title>
</head>

<body>
    <div>
        <h1>Sistema de automoviles</h1>
    </div>
    <div>
        <ul>
            <li>
                <button  onclick="traerpagina('/ford/ford.html')">Ford</button>
            </li>
            <li>Chevrolet</li>
            <li>Toyota</li>
        </ul>
    </div>
    <div id="cont1">
        <p>
            Es la pagina de inicio del sistema de autokoviles
        </p>
    </div>
    <div>
        <a href="http://chevrolet.com">Chevrolet</a><br>
        <a href="http://ford.com">Ford</a><br>
        <a href="http://toyota.com">Toyota</a>
    </div>
    <div>
        <h3>Prueba PHP</h3>
        <?php
            echo "Hola mundo";
        ?>
    </div>
</body>

<script>

    function traerpagina(url) {
        div1 = document.querySelector("#cont1");
        fetch(url)
            .then(response => response.text())
            .then(data => { div1.innerHTML = data });
    }
</script>

</html>

