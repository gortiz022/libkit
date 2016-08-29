<h2><?php echo $titles[0]['list_name']; ?></h2>
<div>Description: <i><?php echo $titles[0]['list_description']; ?></i></div>

<!-- This is the tabbed navigation containing the toggling elements -->
<ul class="uk-tab" data-uk-tab="{connect:'#my-id'}">
    <li><a href="">Formated Email HTML</a></li>
    <li><a href="">Formatted Website HTML</a></li>
</ul>

<!-- This is the container of the content items -->
<ul id="my-id" class="uk-switcher uk-margin">
    <li>
    <!-- This is a button toggling the modal -->
    <button class="uk-button" data-uk-modal="{target:'#website-modal'}">Preview</button>
    <!-- This is the modal -->
    <div id="website-modal" class="uk-modal">
        <div class="uk-modal-dialog uk-modal-dialog-large">
            <a class="uk-modal-close uk-close"></a>
            <iframe class="websiteIframe" style="border: none; width: 100%; height: 500px;" 
            srcdoc="stuff"></iframe>
        </div>
    </div>

        <xmp class="websitePreview" style="white-space: pre-wrap !important;">

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
    <!-- This is the modal -->
    <div id="email-modal" class="uk-modal">
        <div class="uk-modal-dialog uk-modal-dialog-large">
            <a class="uk-modal-close uk-close"></a>
            <iframe class="emailIframe" style="border: none; width: 100%; height: 500px;" srcdoc="stuff"></iframe>
        </div>
    </div>
        
    <xmp class="emailPreview" style="white-space: pre-wrap !important;">    
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
</ul>

<script type="text/javascript">


</script>