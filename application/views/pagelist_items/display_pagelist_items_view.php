<?php
$featuredUrl = base_url()."pagelist/setFeatured/". $this->session->userdata('inst_id'). "/" . $titles[0]["page_list_id"];
//echo $featuredUrl;
?>
<h2><?php echo $titles[0]['list_name']; ?></h2>
<button class="uk-button uk-button-primary uk-float-right" id="setFeatured">Set As Featured</button>

<script type="text/javascript">
    $( "#setFeatured" ).click(function() {
      //var id = $('#prod').val();
         $.ajax({
                type:'POST',
                url:'<?php echo $featuredUrl; ?>',
                //data:{'id':id},
                success:function(data){
                    //$('#resultdiv').html(data);
                    alert( "Featured Iframe Updated" );
                },
                error: function() {
                    console.log('there was an error');
                }

            });
    });
    
</script>
<div>Description: <i><?php echo $titles[0]['list_description']; ?></i></div>


<!-- This is the tabbed navigation containing the toggling elements -->
<ul class="uk-tab" data-uk-tab="{connect:'#my-id'}">
    <li><a href="">Formated Website HTML</a></li>
    <li><a href="">Formatted Email HTML</a></li>
    <li><a href="">Iframe Slideshow</a></li>
</ul>

<!-- This is the container of the content items -->
<ul id="my-id" class="uk-switcher uk-margin">
    <li>
    <!-- This is a button toggling the modal -->
    <button class="uk-button" data-uk-modal="{target:'#website-modal'}">Preview</button>
    <button class="uk-button copy" onclick="copyToClipboard('.websitePreview')">Copy to Clipboard</button>
    <!-- This is the modal -->
    <div id="website-modal" class="uk-modal">
        <div class="uk-modal-dialog uk-modal-dialog-large">
            <a class="uk-modal-close uk-close"></a>
            <iframe class="websiteIframe" style="border: none; width: 100%; height: 500px;" 
            srcdoc="stuff"></iframe>
        </div>
    </div>

        <xmp class="websitePreview" data-copy="Copied" style="white-space: pre-wrap !important;">

            <?php echo pagelist_data::$website_head; ?>

                <?php foreach($titles as $title): ?> 
                    <div class="box box50 bib">
                        <div class="coverbox">
                            <img src="<?php echo $title['listitem_img']; ?>">
                                 </div>
                        <div class="bibbox">
                            <h3 class="booktitle"><?php echo $title['listitem_title']?></h3> 
                            <h4><?php echo $title['listitem_author']; ?></h4>
                            <p class="callNum"><a href="<?php echo $title['listitem_url']; ?>" target="_blank">View in Catalog <span class="fa fa-external-link"></span></a></p>
                        </div><!-- End of bibbox-->
                    </div> <!-- End of box box50-->
                    
                    <?php endforeach; ?>
                <?php echo pagelist_data::$footers; ?>
        </xmp>
        
        
        
    </li>
    <li>
        
        <!-- This is a button toggling the modal -->
    <button class="uk-button" data-uk-modal="{target:'#email-modal'}">Preview</button>
    <button class="uk-button copy"  onclick="copyToClipboard('.emailPreview')">Copy to Clipboard</button>    
    <!-- This is the modal -->
    <div id="email-modal" class="uk-modal">
        <div class="uk-modal-dialog uk-modal-dialog-large">
            <a class="uk-modal-close uk-close"></a>
            <iframe class="emailIframe" style="border: none; width: 100%; height: 500px;" srcdoc="stuff"></iframe>
        </div>
    </div>
        
    <xmp class="emailPreview" data-copy"Copied" style="white-space: pre-wrap !important;">    
        <?php echo pagelist_data::$email_header; ?>
        <?php foreach($titles as $title): ?> 
        <div class="box box50 bib">
            <div class="coverbox">
                <img src="<?php echo $title['listitem_img']; ?>">
                     </div>
            <div class="bibbox">
                <h3 class="booktitle"><?php echo $title['listitem_title']?></h3> 
                <h4><?php echo $title['listitem_author']; ?></h4>
                <p class="callNum"><a href="<?php echo $title['listitem_url']; ?>" target="_blank">View in Catalog <span class="fa fa-external-link"></span></a></p>
            </div><!-- End of bibbox-->
        </div> <!-- End of box box50-->
        
        <?php endforeach; ?>

        <?php echo pagelist_data::$footers; ?>
    </xmp>    
        
        
    </li>
    <li>
        
        <iframe id="slideshowIframe" style="display: block; margin: 0 auto; max-width: 300px; height: 470px;  border: none; overflow: hidden; box-sizing: border-box;" src="https://library-kit-gortiz022.c9users.io/pagelist/slideshow/<?php echo $titles[0]['page_list_id']; ?>"></iframe>
        <br />
        <xmp id="displayIframeCode">
            <?php echo pagelist_data::generateIframe($titles[0]['inst_id']); ?>
            
        </xmp>
        
        <script type="text/javascript">

            $(document).ready(function(){
                $.ajax({
                async : true,
                crossDomain : true,
                url : "https://library-kit-gortiz022.c9users.io/api/featuredslideshow/1",
                method : "GET",
                dataType : "xml",
                headers : {
                    "x-api-key": "123456",
                    "cache-control": "no-cache"
                },
                success : function(response){
                   console.log(response);
                }
                });
            });
            
        </script>
    </li>
</ul>
