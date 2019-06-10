<?php
    require 'App/functions.php';
    getHeader('Voyage voyage');
?>

    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <a href="/" class="carousel-item active">
                    <img src="/assets/images/image1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </a>
                <a href="/" class="carousel-item">
                    <img src="/assets/images/image2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </a>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

   <div class="container">
       <div class="row mt-4">
           <div class="col-12">
               <h2 class="text-center">Les derniers articles</h2>
           </div>
           <div class="row justify-content-center mt-2 mb-2">
               <?php for($i = 0; $i<6 ; $i++):?>
                    <div class="col-md-6 col-lg-4 mt-2">
                        <div class="card">
                            <img src="assets/images/image3.jpg" class="card-img-top " alt="assets/images/avion.png">
                            <div class="card-body">
                                <h5 class="card-title">Bla bla</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" id="button">Lire l'article</a>
                            </div>
                        </div>
                    </div>

               <?php endfor;?>
           </div>
       </div>
   </div>
    <div class="jumbotron jumbotron-fluid ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="display-4 text-center">Newsletter</h2>
                    <p class="lead">
                        Inscrivez vous à notre newsletter hebdomadaire
                    </p>
                    <form action="App/newsletter.php" method="post">

                        <input type="email" name="email" class="form-control" id="email" placeholder="xyz@mail.com">
                        <div class="text-center mt-4">
                            <button class="btn btn-primary" id="envoyer">Envoyer</button>
                        </div>


                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div id="my_osm_widget_map">
                    <script type="text/javascript" src="assets/js/map.js">

                    </script>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Contactez-nous</h2>
                <form action ="App/send-contact-mail.php" method="post">
                    <label for="mail">Votre email</label>
                    <input type="email" name="mail" class="form-control">

                    <label for="subject">Sujet</label>
                    <input type="text" name="subject" id="subject" class="form-control">

                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="8" class="form-control"></textarea>

                    <div class="text-right mt-4">
                        <button class="btn btn-primary" id="envoyer">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php
    getFooter();
