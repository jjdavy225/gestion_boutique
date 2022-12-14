<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{url('assets/css/index.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/list_article.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/tableau.css')}}">
        <title>Accueil - Admin</title>
    </head>


    <body>
        <header></header>
        <main>
            <div class="videHaut"></div>
            <div class="content">
                <h1>Listes des articles</h1>

                <section id="articles" class="articles">
                    <h1>Lorem ipsum</h1>

                    <div class="list list-wrapper"><div class="item" data-theme="culture" data-date="2-7-2018">
                        <div class="image-container">
                            <img src="https://picsum.photos/400/200/?image=1019" alt="">
                        </div>
                        <div class="text-container">
                            <span class="thematique">Culture</span>
                            <h2 class="title">1 Lorem ipsum dolor</h2>
                            <p class="excerpt">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="#">Lire</a>
                        </div>
                    </div>
                    <div class="item" data-theme="culture" data-date="3-6-2018">
                        <div class="image-container">
                            <img src="https://picsum.photos/400/200/?image=1020" alt="">
                        </div>
                        <div class="text-container">
                            <span class="thematique">Culture</span>
                            <h2 class="title">2 Lorem ipsum dolor</h2>
                            <p class="excerpt">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="#">Lire</a>
                        </div>
                    </div>
                    <div class="item" data-theme="actualit??" data-date="4-10-2018">
                        <div class="image-container">
                            <img src="https://picsum.photos/400/200/?image=1021" alt="">
                        </div>
                        <div class="text-container">
                            <span class="thematique">Actualit??</span>
                            <h2 class="title">3 Lorem ipsum dolor</h2>
                            <p class="excerpt">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="#">Lire</a>
                        </div>
                    </div>
                    <div class="item" data-theme="nature" data-date="5-11-2018">
                        <div class="image-container">
                            <img src="https://picsum.photos/400/200/?image=1022" alt="">
                        </div>
                        <div class="text-container">
                            <span class="thematique">Nature</span>
                            <h2 class="title">4 Lorem ipsum dolor</h2>
                            <p class="excerpt">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="#">Lire</a>
                        </div>
                    </div>
                    <div class="item" data-theme="culture" data-date="6-2-2018">
                        <div class="image-container">
                            <img src="https://picsum.photos/400/200/?image=1023" alt="">
                        </div>
                        <div class="text-container">
                            <span class="thematique">Culture</span>
                            <h2 class="title">5 Lorem ipsum dolor</h2>
                            <p class="excerpt">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="#">Lire</a>
                        </div>
                    </div>
                    <div class="item" data-theme="nature" data-date="7-10-2018">
                        <div class="image-container">
                            <img src="https://picsum.photos/400/200/?image=1024" alt="">
                        </div>
                        <div class="text-container">
                            <span class="thematique">Nature</span>
                            <h2 class="title">6 Lorem ipsum dolor</h2>
                            <p class="excerpt">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="#">Lire</a>
                        </div>
                    </div>
                    <div class="item" data-theme="voyages" data-date="8-11-2018">
                        <div class="image-container">
                            <img src="https://picsum.photos/400/200/?image=1025" alt="">
                        </div>
                        <div class="text-container">
                            <span class="thematique">Voyages</span>
                            <h2 class="title">7 Lorem ipsum dolor</h2>
                            <p class="excerpt">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="#">Lire</a>
                        </div>
                    </div>
                </section>

                <div class="petitMenu">
                    <button><a href="{{route('article.create')}}">Enregistrer un article</a></button>
                    <button><a>Lorem, ipsum.</a></button>
                </div>
                
                <div class="paragraphe">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi animi cumque nesciunt illum explicabo odit labore, commodi praesentium magnam dolore iusto dolorem at vero ea quisquam, et exercitationem suscipit atque necessitatibus maiores cum quae omnis! Eius iusto veritatis sequi recusandae expedita enim numquam nostrum illo laborum dolores. Repudiandae laboriosam nisi nam est, sed repellendus tempora quia adipisci non voluptatibus rem debitis animi expedita perspiciatis praesentium aperiam necessitatibus laborum commodi delectus vero at nemo. Tempora veritatis, deleniti officiis dolor similique earum corporis nostrum molestias praesentium nihil facilis veniam sint adipisci laborum perferendis quibusdam harum dolores. Esse rem impedit quaerat officia ipsam.</div>
            </div>

        </main>
    </body>
    <script src="{{url('js/list_article.js')}}"></script>
</html>
