<h2>Create New Page List</h2>
<p>Complete this form to create a new list of books that can be emailed or inserted into a webpage.</p>
<?php

echo validation_errors("<p class='bg-danger'>");

//set the classes and ids
$attributes = array('id'=>'create_pagelist',
        'class' => 'uk-form uk-form-horizontal'
    );

echo form_open('pagelist/create', $attributes);


        $form_label = array(
                'class' => 'uk-form-label'
            );
            
    echo "<div class=\"uk-form-row\">";
        //Pagelist Name
        $pagelist_name_data = array( 
            'class' => 'pagelist_form',
            'name' => 'pagelist_name',
            'placeholder' => 'Name'
        );
        echo form_label('New Pagelist Name:', 'pagelist_name', $form_label); 
        echo form_input($pagelist_name_data);
    echo "</div> <!-- end of .uk-form-row-->";
        
 
    echo "<div class=\"uk-form-row\">";
        //Pagelist Date
        $pagelist_date_data = array( 
            'class' => "pagelist_form",
            'name' => 'pagelist_date',
            'type'=> 'date'
        );
        echo form_label('Date:', 'pagelist_date', $form_label); 
        echo form_input($pagelist_date_data);
    echo "</div> <!-- end of .uk-form-row-->";
    
    echo "<div class=\"uk-form-row\">";       
        //Description 
        $pagelist_description_data = array( 
            'class' => 'pagelist_description',
            'name' => 'pagelist_description'
        );
        echo form_label('Enter Description:', 'pagelist_description' ,$form_label); 
        echo form_textarea($pagelist_description_data);
    echo "</div> <!-- end of .uk-form-row-->";
    
    echo "<div class=\"uk-form-row\">";       
        //ISBN 
        $pagelist_isbn_data = array( 
            'class' => 'pagelist_form',
            'name' => 'pagelist_isbn'
        );
        echo form_label('Enter ISBNs:', 'pagelist_isbn' ,$form_label); 
        echo form_textarea($pagelist_isbn_data);
    echo "</div> <!-- end of .uk-form-row-->";
    
    
    //submit
    echo "<div class=\"uk-form-row\">";    
        $submit_data = array( 
            'class' => 'uk-button uk-button-primary uk-button-large',
            'name' => 'submit',
            'data-uk-modal' => "{target:'#processing'}",
            'value' => 'SAVE'
        );
         echo form_submit($submit_data);
    echo "</div> <!-- end of .uk-form-row-->";

    echo form_close();
?>



<div id='processing' class="uk-modal">
    <div class="uk-modal-dialog">
        <div class="uk-modal-spinner"></div>
    </div>
</div>