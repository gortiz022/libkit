<?php

?>

<h2>All Lists</h2>
<?php
   if($this->session->flashdata('pagelist_created')){
      echo $this->session->flashdata('pagelist_created');
   }
?>
<a  href="<?php echo base_url() . 'pagelist/create'; ?>"class="uk-button uk-button-primary uk-button-large uk-float-right" type="button">Create</a>
<table class="uk-table uk-table-hover uk-table-striped">
   <thead>
   <tr>
       <th>Name</th>
       <th>Description</th>
       <th>Date</th>
   </tr>
   </thead>
   <?php foreach($pagelists as $pagelist): ?>
      <tr>
          <td class="uk-width-1-5"><a href="<?php echo base_url() .'pagelist/display_pagelist/' . $pagelist->id; ?>"><?php echo $pagelist->list_name; ?></a></td>
          <td class="uk-width-3-5"><?php echo $pagelist->list_description; ?></td>
          <td class="uk-width-1-5"><?php echo $pagelist->list_date ?> <div class="uk-float-right"><a href="<?php echo base_url();?>pagelist/delete_pagelist/<?php echo $pagelist->id; ?>"><i class="uk-icon-close uk-icon-small uk-float-right"></i></a></div></td>
      </tr>
   <?php endforeach; ?> 
    
</table>