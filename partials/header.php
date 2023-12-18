<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Livres</title>
    <style>
        @font-face {
            font-family: "Roboto";
            src: url(RobotoMono-Regular.woff2) format(woff2);
        }
        * {
            margin: 0;
            padding: 0;
        }
        div {
            width: 100%;
            height: 10%;
            }
        nav ul {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            }

        li {
            list-style: none;
        }

        ul li a {
            text-decoration: none;
            font-size: 4rem;
        }

        footer{
        background-color: #333;
        color: white;
        padding: 10px;
        text-align: center;
        width: 100%;
        height: 75px;
        position: fixed;
  left: 0;
  bottom: 0;    }

    </style>
</head>

<body>
    <header>
    <nav>
        <ul>
            <li><a href="./home.php">Accueil</a></li>
            <li><a href="./livres.php">Livres</a></li>
        </ul>
    </nav>
    </header>
