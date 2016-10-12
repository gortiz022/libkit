<!--echo page titles-->
<?php
$featuredUrl = base_url()."pagelist/setFeatured/". $this->session->userdata('inst_id'). "/" . $titles[0]["page_list_id"];
//echo $featuredUrl;
?>
<h2><?php echo $titles[0]['list_name']; ?></h2>
<button class="uk-button uk-button-primary uk-float-right" id="setFeatured">Set As Featured</button>

    <div style="width: 25%;" class="rslides result"></div>

<script type="text/javascript">


(function($){
    //acquire the necessary responsiveSlides dependcies here
    $('head').append('<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.53/responsiveslides.min.css">');
    $('head').append('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.53/responsiveslides.min.js">');
    //alert('loaded script');
    
    /* 
    * Here I'm attempting to initialize the slider by also appending it to the head. However, the plugin in not firing... 
    
    This part is what I need help with.
    */
        var sliderSettings = `
        <script type="text/javascript">
            (function ($) {
                //alert('this should be loading now');
                $(".rslides").responsiveSlides();
            }(jQuery));            
        <\/script>
        `;    
        
    $('head').append(sliderSettings);


    //start AJAX call
    $.ajax({
    async : true,
    crossDomain : true,
    //query the API
    url : "https://library-kit-gortiz022.c9users.io/api/featuredslideshow/1",
    method : "GET",
    dataType : 'json',
    headers : {
        "x-api-key": "123456"
    },
    success : function(response){
        var slider = '';
        //grab the response message
        var records = response.message;
        console.log(records);
        
        //iterate through the response and format image in slider
        for(var i = 0; i < records.length; i++){
            var record = records[i];
            slider += "<img src=\"" + record.listitem_img + "\" alt=\"\" " +  "title=\"" + record.listitem_title + "\" />";
        }
            //console.log(slider);
            $('.result').append(slider);
            
        }//end of success
        

    });//end of ajax request

}(jQuery));

</script>