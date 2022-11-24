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
                        src="{{asset("assets/css/boxes-amico.svg") }}"
                        alt="un"
                        height="100%"
                        width="100%"
                        id="svg"
                        />
                    </div>
                    <div class="formulaire">
                        <p>
                            <!-- <label for="desi">Désignation</label><br> -->
                            <input type="text" value="{{old('libele')}}"   name="libele" id="desi" placeholder="Désignation" />
                        </p>
                        <p>
                            <!-- <label for="quant">Quantité </label><br> -->
                            <input type="number" value="{{old('volume')}}"   name="volume" id="quant" placeholder="Quantité " />
                        </p>

                        <p>
                            <!-- <label for="visa_vend">Visa vendeur</label><br> -->
                            <input type="text" id="visa_vend" placeholder="Visa vendeur" />
                        </p>
                        <p>
                            <!-- <label for="visa_liv">Visa livreur</label><br> -->
                            <input type="text" id="visa_liv" placeholder="Visa livreur" />
                        </p>
                        <p>
                            <label for="obser">Observations</label><br />

                            <textarea name="" id="" cols="30" rows="10" id="obser"></textarea>
                        </p>

                        <input type="submit" value="Enregistrer">

                    </div>

                </form>

                <div class="blabla">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus reiciendis vitae neque itaque! Distinctio, id nostrum fugiat tenetur facere enim, cum iste esse provident ullam consectetur, sed nemo voluptatem veniam.
                </div>

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
