<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ url('assets/css/menu.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/index.css') }}">
        <title>Accueil - Admin</title>
    </head>


    <body>
        <header>
            
        </header>
        <main>
            <div class="videHaut"></div>
            <div class="resume"></div>
            <div class="menu">
                <a href="{{route('article.index')}}">
                    <div class="item">
                        <h2>Stocks</h2>
                    </div>
                </a>
                <a href="">
                    <div class="item">
                        <h2>Inventaires</h2>
                    </div>
                </a>
                <a href="">
                    <div class="item">
                        <h2>Personnels</h2>
                    </div>
                </a>
            </div>
        </main>
    </body>
</html>