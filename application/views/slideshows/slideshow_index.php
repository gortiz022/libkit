<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LibraryKit - Slideshow</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        
        <!--<script src="https://use.fontawesome.com/260722e409.js"></script>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.3/css/uikit.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>public/css/uikit.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.1/css/components/slideshow.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.1/css/components/slidenav.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>public/css/main.css" type="text/css" />
    
    <style type="text/css">

    </style>
    
    </head>
<body>
    <!--Main Slideshow Div-->
<?php
//  echo "<pre>";
//  print_r($titles);
//  echo "</pre>";
?>
    <div class="newSlideshow" style="max-width: 300px;">
        <div class="uk-slidenav-position" data-uk-slideshow="{animation:'scroll', autoplay:true, autoplayInterval:4000  , height: 'auto'}">
            <ul class="uk-slideshow uk-overlay-active" >
            <?php foreach($titles as $title): ?>    
                <li>
                    <img src="<?php echo $title['listitem_img']; ?>" width="" height="" alt="<?php echo $title['listitem_title']?>">
                    <div class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom">
                        <a href="<?php echo $title['listitem_url']; ?>" target="_blank"><h4><?php echo $title['listitem_title']?>&nbsp;&nbsp;<span class="uk-icon-external-link"></span></h4></a>
                        <p><?php echo $title['listitem_author']; ?></p>
                    </div>
                    
                </li>
            <?php endforeach; ?>
            </ul>
        <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous" style="color: rgba(0,0,0,0.5)"></a>
        <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(0,0,0,0.5)"></a>
        </div>
    </div>
    

<!--Javascript Files-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.3/js/uikit.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.1/js/components/slideshow.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.1/js/components/slider.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/custom.js"></script>    
</body>
</html>