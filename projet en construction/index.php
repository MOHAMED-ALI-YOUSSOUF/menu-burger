<!DOCTYPE html>   
<html>
    <head>
        <title>Contact</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contactez-moi</h2>
            </div>
            <form id="contact-form" method="post" action="" role="form">
                <div class="row">
                    <div class="col-md-6">
                        <label for="firstname">Prénom <span class="blue">*</span></label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="votre prénom" >
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-6">
                        <label for="name">Nom <span class="blue"> *</span></label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="votre nom" >
                        <p class="comments"> </p>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email <span class="blue"> *</span></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="votre email" >
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-6">
                        <label for="phone">téléphone </label>
                        <input type="tel"  name="phone" id="phone" class="form-control" placeholder="votre téléphone">
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-12">
                        <label for="message">Message <span class="blue"> *</span></label>
                        <textarea type="text" name="message" id="message" class="form-control" placeholder="votre message" rows="4"></textarea>
                        <p class="comments"> </p>
                    </div>
                    <div class="col-md-12">
                        <p class="blue"> * Ces informations sont requises</p>
                    </div>
                    <div class="col-md-12">
                        <input type="submit"  class="bouton1" value="Envoyer">
                    </div>

                </div>
            </form>
        </div>
    </body>
</html>