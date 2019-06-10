<?php
    require 'App/functions.php';
    getHeader('Voyage voyage');
?>


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
                        <button class="btn-primary" id="envoyer">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    getFooter();
