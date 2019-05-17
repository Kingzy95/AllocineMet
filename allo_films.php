<!DOCTYPE html>
<html lang="fr">
<?php
include "connectbdd.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Films</title>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/allo_films.css">

</head>

<body>

    <!--  NAVBAR  -->

    <header>
        <nav>
            <h1 class="title"><a href="index.html">Allocine<span>Met</span></a></h1>
            <ul>
                <li><a href="allo_films.html">Films</a></li>
                <li><a href="acteur.html">Acteurs</a></li>
                <li><a href="realisateur.html">Realisateur</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

            </div>
        </nav>
    </header>
    <!--  NAVBAR  -->

    <h2 class="title_film">Nos Films</h2>

    <section class="author-archive">
        <div class="container_films">

            <label class="search" for="inpt_search"><input id="inpt_search" type="text" />
		      </label>
            <input type="radio" id="Tout" name="categories" value="Tout" checked>
            <input type="radio" id="Action" name="categories" value="Action">
            <input type="radio" id="Comédie" name="categories" value="Comédie">
            <input type="radio" id="Fantastique" name="categories" value="Fantastique">
            <input type="radio" id="Anime" name="categories" value="Anime">
            <input type="radio" id="Drame" name="categories" value="Drame">
            <input type="radio" id="Romance" name="categories" value="Romance">


            <ol class="filters">
                <li>
                    <label for="Tout">Tout</label>
                </li>
                <li>
                    <label for="Action">Action</label>
                </li>
                <li>
                    <label for="Comédie">Comédie</label>
                </li>
                <li>
                    <label for="Fantastique">Fantastique</label>
                </li>
                <li>
                    <label for="Anime">Anime</label>
                </li>
                <li>
                    <label for="Drame">Drame</label>
                </li>
                <li>
                    <label for="Romance">Romance</label>
                </li>
            </ol>



            <ol class="posts">
                <?php
                include 'connectbdd.php';
                $req=$conn->query("SELECT * FROM films");
                $results=$req->fetchAll();
                foreach($results as $result){
                    // ajouter ligne genre a la table film pour que ca fontcionne
                echo '

                <li class="post" data-category="Action">
                    <article>
                        <figure>
                            <a href="content.php?id='.$result['id_films'].'">
                                <img src="img/'.$result['poster'].'" alt="">
                            </a>
                            <figcaption>
                                <ol class="post-categories">
                                    <li>
                                        <a href="">Action</a>
                                    </li>
                                    <li>
                                        <a href="">Fantastique</a>
                                    </li>
                                </ol>
                                <h2 class="post-title">
                                    <a href="content.html">'.$result['title'].'
                                    </a>
                                </h2>
                            </figcaption>
                        </figure>
                    </article>
                </li>
                ';}

?>



            </ol>
        </div>
    </section>




    <!-- Footer -->
    <footer class="page-footer">


        <div class="container-foot">

            <div class="row">

                <div class="img-foot">
                    <h1 class="title"><a href="index.html">Allocine<span>Met</span></a></h1>
                    <p>Lorem ipsum bofebzoibfbj viejrbvj iervi i zi v rijfi </p>

                </div>

                <div class="column1">

                    <h5 class="title-foot">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Link 1</a>
                        </li>
                        <li>
                            <a href="#">Link 2</a>
                        </li>
                        <li>
                            <a href="#">Link 3</a>
                        </li>
                        <li>
                            <a href="#">Link 4</a>
                        </li>
                    </ul>

                </div>

                <div class="column2">

                    <h5 class="title-foot">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Link 1</a>
                        </li>
                        <li>
                            <a href="#">Link 2</a>
                        </li>
                        <li>
                            <a href="#">Link 3</a>
                        </li>
                        <li>
                            <a href="#">Link 4</a>
                        </li>
                    </ul>

                </div>
                <div class="contact-foot">
                    <h5 class="title-foot">Conctatez-Nous</h5>
                    <p>Mail: contact@allocinemet.com</p><br>
                    <p>Tel: 0619697096</p><br>
                </div>

            </div>

        </div>

        <!-- Copyright -->
        <div class="footer-copyright">
            <p>© 2018 Copyright:<a>Simplon</a></p>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!--  BACK TO TOP BTN  -->

    <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

    <script>
        $("#inpt_search").on('focus', function () {
	$(this).parent('label').addClass('active');
});

$("#inpt_search").on('blur', function () {
	if($(this).val().length == 0)
		$(this).parent('label').removeClass('active');
});
    </script>

</body>

</html>
