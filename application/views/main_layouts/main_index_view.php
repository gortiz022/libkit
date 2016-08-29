<?php
header("Access-Control-Allow-Origin: *");
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
    <div style="background-color: white;">    
        <?php $this->load->view('main_layouts/menu_view');?>
            <div  class="uk-container" style="padding-bottom: 10px;">
                <div class="uk-grid data-uk-grid-match" data-uk-grid-margin="">
                    <div class="uk-width-medium-3-10 uk-row-first">
    
                        <?php $this->load->view('main_layouts/display_libkit_view');  ?>
    
                    </div>
                    <div class="uk-width-medium-7-10 uk-row-first">
                        <?php
                            if($this->session->flashdata('welcome_message')){
                                echo "<div class=\"uk-alert\">" . $this->session->flashdata('welcome_message'). "</div>";
                            }
                        ?>
                            
                            <?php $this->load->view($main_body); ?>
                            
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-style">
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.3/js/uikit.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>public/js/custom.js"></script>
        </footer>
    </body>
</html>