<?php



?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LibraryKit</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <!--<script src="https://use.fontawesome.com/260722e409.js"></script>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.3/css/uikit.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>public/css/uikit.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>public/css/main.css" type="text/css" />
        
    </head>
    <body>
        <header>
                <nav class="uk-navbar uk-margin-large-bottom">
                <a class="uk-navbar-brand uk-hidden-small" href="#">LibraryKit</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Create</a>
                    </li>
                    <li>
                        <a href="#">Config</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>

                </ul>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">LibraryKit</div>
            </nav>
        </header>
        <section  class="uk-container">
            <div class="uk-grid data-uk-grid-match" data-uk-grid-margin="">
                <div class="uk-width-medium-3-10 uk-row-first">
                    <div class="side-panel">
                        <h3>All Carousels</h3>
                        <ul class="uk-nav">
                            <li><a href="#">Carousel 1</a></li>
                            <li><a href="#">Carousel 2</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create New</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-medium-7-10 uk-row-first">
                    <h2 class="uk-heading-large">Home</h2>
                    <p class="uk-text-large">Create Your New Slidshows</p>
                    <p>This application will allow you to create slideshows to embed into your website. First you must configure all the settings before starting to use the application.</p>
                    <div>
                        <h4>Requirements:</h4>
                        <ul>
                            <li>Your Own API Key</li>
                            <li>URL String for your Online Catalog</li>
                            <li>A barcode Scanner</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer-style">
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.3/js/uikit.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>public/js/custom.js"></script>
        </footer>
    </body>
</html>