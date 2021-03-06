<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Content</title>

    <!--mon CSS -->
    <link rel="stylesheet" href="css/style_pages_cont_real_act.css">

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

  <main class="contenu" id="content">
      <?php
  echo $_GET['id'];
?>
      <section class="container-2">

            <div class="title-content" id="#">
                <h2></h2>ss
            </div>

            <div class="row">

                <img src="img/" class="media-img" alt="...">
            <div class="media-info">

                <div class="synopsis"><h5>Synopsis:</h5><p class="text-center">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
      esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
      non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>


                    <div class="list-group">
                        <a href="realisateur.html" class="titre">
                        <div class="">
                            <h5 class="">Réalisateur:</h5>
                        </div>
                            <p class=""></p>
                        </a>
                        <a href="#" class="titre">
                            <div class="">
                            <h5 class="">Production:</h5>
                            </div>
                            <p class=""></p>
                        </a>
                        <a href="acteur.html" class="titre">
                            <div class="">
                            <h5 class="">Acteurs:</h5>
                            </div>
                            <p class=""></p>
                        </a>
                        </div>

            </div>

          </div>
<div class="row">
            <div class="b-a">
                <iframe class="" src="" height="295px" width="100%"></iframe>
            </div>
          </div>
      </section>
  </main>

<!--//////////////////////////////  FOOTER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

            <!-- Footer -->
        <footer class="page-footer">


            <div class="container-foot">

                <div class="row">

                    <div class="img-foot">
                        <h1 class="title"><a href="index.html">Allocine<span>Met</span></a></h1>
                        <p>Lorem ipsum bofebzoibfbj viejrbvj iervi i zi v rijfi frie  ifr eif  f if r ie f  fire frj rfj fe fer fh rf ie fier ijrf rjf ei fj f jfjr fjer fj fj fj j fdj f shf h  dgij sg ds gskdg lbsh hdf hf hd hb dfi bdf</p>

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


  <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

$('.m-nav-toggle').click(function(e){
        e.preventDefault();
        $('#Navbar').toggleClass('is-open');
    })

document.addEventListener('DOMContentLoaded', function () {
    window.onscroll = function (ev) {
        document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" :
            "cInvisible";
    };
});

$('#sidebarCollapse').click(function (e) {
    e.preventDefault();
    $('#sidebar').toggleClass('active');
})

function openModal() {
    document.getElementById("modal").style.top = "0px";
}

function closeModal() {
    document.getElementById("modal").style.top = "-780px";
}</script>

</body>
</html>
