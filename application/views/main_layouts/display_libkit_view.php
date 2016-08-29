<?php
     $ci =&get_instance();
     $pagelists = $ci->pagelist_model->get_all_pagelists($this->session->userdata('inst_id'));
?>
<div class="side-panel">
    <h3>Pagelists</h3>
    <ul class="uk-nav">
   <?php foreach($pagelists as $pagelist): ?>        
        <li><a href="<?php echo base_url() .'pagelist/display_pagelist/' . $pagelist->id; ?>"><?php echo $pagelist->list_name; ?></a></li>
    <?php endforeach; ?>   
        <li><a href="<?php echo base_url(); ?>pagelist/create"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create New</a></li> 
        <li class="uk-nav-divider"></li>
    </ul>
</div>