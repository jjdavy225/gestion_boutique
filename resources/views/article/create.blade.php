<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{url('assets/css/formulaire.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/menu.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/index.css')}}" />
        <title>approvisionnement</title>
    </head>
    <body>
        <header>

        </header>
        <main>
            <div class="videHaut"></div>
            <div class="menu">
                <h1>Approvisionner les stocks</h1>

                <!-- Formulaires d'ajout des approvisionnements -->
                <form action="" class="form">
                    <div id="appro" class="image">
                        <img
                        src="{{asset("assets/img/boxes-animate.svg")}}"
                        alt="un"
                        height="100%"
                        width="100%"
                        id="svg"
                        />
                    </div>
                    <div class="formulaire">
                        <p>
                            <input class="other_input" type="text" name="libelle" id="libelle" placeholder="Libellé" />
                        </p>
                        <p>
                            <input class="other_input" type="text" name="volume" id="volume" placeholder="Volume" />
                        </p>

                        <p>
                            <input class="other_input" type="text" name="prix_vente" id="prix_vente" placeholder="Prix de vente" />
                        </p>

                        <input type="submit" value="Enregistrer">

                    </div>

                </form>

            </div>
        </main>
    </body>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
        window.setTimeout(
        document.querySelector("svg").classList.add("animated"),
        1000
        );
        });
    </script>

</html>
