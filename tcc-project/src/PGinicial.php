<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <title>Document</title>
</head>
<body>
<style>
        /* Estilo básico para a barra de navegação */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            width: 200vh;
        }

        nav {
            
            background-color: #0D1829 ;
            overflow: hidden;
            width: 250px;
            height: 100vh;
        }

        nav a {
        
            font-family: Arial, Helvetica, sans-serif;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        main{
            background-color: #f2f2f2;
            height: 80vh;
            width: 100vh;
            border-radius: 5%;
            margin-left: 250px;
            margin-top: 60px;
        }
        main h3{
            font-size: smaller;
        }
    </style>
</head>
<body>

<nav>
    <a href="#PGinicial">Início</a>
    <a href="#torneios">Torneios</a>
    <a href="#membros">Membros</a>
    <a href="#transmissao">Transmissão</a>
    <a href="#jogos">Jogos</a>
    <a href="#parcerias">Parcerias</a>
</nav>
<main>
    <h2 class="mt-4">Bem-Vindo!</h2>
    <div class="transmissoes">
        <h3>Transmissões</h3>
        <a href="http://www.youtube.com/watch?v=b9dQi78WSug">
        <img src="live1.png" alt="">
        </a>
    </div>
    <div class="noticias">
        <h3>Últimas notíciass</h3>
    </div>
</main>
</body>
</html>