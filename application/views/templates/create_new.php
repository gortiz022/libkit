<?php



?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LibraryKit - Create</title>
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
        <section  class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
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
                    <h2 class="uk-heading-large">Create New Carousel</h2>
                    <p class="uk-text-large">Complete all sections below:</p>
                    <div>
                        <form class="uk-form uk-form-horizontal">
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="carouselName">Text input</label>
                                    <div class="uk-form-controls">
                                        <input type="text" id="carousel-name" placeholder="Carousel Name">
                                    </div>
                                </div><!--End of Carousel Name-->
                                
                            <div class="uk-form-row">
                                <label class="uk-form-label" for="isbn">Insert ISBN's</label>
                                <div class="uk-form-controls">
                                    <textarea id="isbn" cols="30" rows="7" placeholder="ISBN's"></textarea>
                                </div>
                            </div><!--End of ISBN-->
                            
                            <div class="uk-form-row">
                                <label class="uk-form-label" for="numResults">Number of Images in Carousel</label>
                                <div class="uk-form-controls">
                                    <select id="numResults">
                                        <option>Option 01</option>
                                        <option>Option 02</option>
                                        <option>Option 02</option>
                                        <option>Option 02</option>
                                        <option>Option 02</option>
                                    </select>
                                </div>
                            </div> <!--End of ISBN-->    

                            <div class="uk-form-row">
                                    <label class="uk-form-label" for="catalogUrl">Catalog URL</label>
                                    <div class="uk-form-controls">
                                        <input type="text" id="catalogUrl"  class="uk-form-width-large" placeholder="Catalog URL">
                                    </div>
                            </div>  <!--End of ISBN-->                              

                        </form>
                    </div><!--end of classless div-->
                </div><!--end uk-width-medium-7-10 uk-row-first-->
            </div><!--end uk-grid data-uk-grid-match-->

        </section>
        <footer class="footer-style">
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.3/js/uikit.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>public/js/custom.js"></script>
        </footer>
    </body>
</html>