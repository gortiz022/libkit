<?php


?>

<h2>Edit items returned</h2>

    <div>
    <form action="<?php echo base_url(); ?>items/save_items" method="post" name="form">
    <?php foreach($api_results as $item): ?>    
        <section class="uk-grid uk-panel item-review">
        <div class="uk-width-1-5">
            <img src="<?php echo $item['img']; ?>" width="120px"></img>
        </div>
        <div class="uk-width-3-5">
                    <label for="title">Item Title</label>
                    <input id="title" type="text" value="<?php echo $item['title'];?>" name="title[]" class="uk-width-1-1">
                    
                    <label for="author">Item Author</label>
                    <input id="author" type="text" value="<?php echo $item['author'];?>" name="author[]" class="uk-width-1-1">
                    
                    <label for="url">Item URL</label>
                    <input  id="url" type="text" value="<?php echo $item['url_isbn'];?>" name="url[]" class="uk-width-1-1">  
                    
                    <label for="img_url">Image URL</label>
                    <input id="img_url" type="text"  name="img[]" value="<?php echo $item['img']; ?>" class="uk-width-1-1" />
                    
                    <input type="hidden" name="pagelist_id[]" value="<?php echo $item['pagelist_id'];?>">
        </div>
        <div class="uk-width-1-5 uk-text-right">
            <button class="remove uk-button-danger">Remove</button>
        </div>
        </section>
    <?php endforeach; ?>  
        <br />
        <button type="submit" name="submit" value="SAVE ITEMS" class="uk-button-primary uk-button-large">SAVE ITEMS</button>
    </form>
</div>


 <?php
 //print_r($api_results);
 
 ?>
 <script type="text/javascript">
    $(document).ready(function(){
        $('.remove').on('click', function() {
        var itemRemove =  $(this).closest('section');   
        itemRemove.html('<h4 class="uk-alert-danger">This Item has been deleted</h4>');
        itemRemove.fadeOut(2000);
        });
    }); 
     
 </script>