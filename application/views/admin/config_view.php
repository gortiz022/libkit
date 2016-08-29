<h2>Configuration Setup</h2>
<p>This configuration form lets you setup all the important credentials for using API's. ALL fields are required.</p>
<hr>
<?php

//set the classes and ids
$attributes = array('id'=>'config_form',
        'class' => 'uk-form'
    );

echo validation_errors("<p class='uk-form-danger'>");

//sends information to same form
//we are passing the values to this controller to do the processing
echo form_open('main_index/config/'.$inst_data->id, $attributes);

echo '<div class="uk-grid">';

    //Institution Name
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $inst_name_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'inst_name',
            'value' => $inst_data->institution_name
        );
        echo form_label('Library Name'); 
        echo form_input($inst_name_data);
    echo "</div><!--end of .uk-width-1-2-->"; 
    
        //Institution username
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $inst_username_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'inst_username',
            'value' => $inst_data->institution_username
        );
        echo form_label('Library Username (This will be the login name)'); 
        echo form_input($inst_username_data);
    echo "</div><!--end of .uk-width-1-2-->"; 
    
        //institution Email
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $inst_email_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'inst_email',
            'value' => $inst_data->institution_email
        );
        echo form_label('General Library Email Account'); 
        echo form_input($inst_email_data);
    echo "</div><!--end of .uk-width-1-2-->"; 

        //Institution Password
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $inst_password_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'inst_password',
            'value' => $inst_data->institution_password
        );
        echo form_label('Library Password'); 
        echo form_input($inst_password_data);
    echo "</div><!--end of .uk-width-1-2-->"; 
    
    //break between institution and API settings
    echo "</div><hr/><div class=\"uk-grid\"> ";

    //ILS Base URL
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $ils_base_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'ILS_base_url',
            'value' => $inst_data->ils_base_url
        );
        echo form_label('Base URL for ILS'); 
        echo form_input($ils_base_data);
    echo "</div><!--end of .uk-width-1-2-->";    


    //ILS Closing string URL
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $ils_closing_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'ILS_closing_url',
            'value' => $inst_data->ils_closing_url
        );
        echo form_label('ILS URL Closing string'); 
        echo form_input($ils_closing_data);
    echo "</div><!--end of .uk-width-1-2-->";


    //Google API Key
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $google_api_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'google_api_key',
            'value' => $inst_data->google_api_key
        );
        echo form_label('Google API Key'); 
        echo form_input($google_api_data);
    echo "</div><!--end of .uk-width-1-2-->";    

    //Default Img URL
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $default_img_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'default_img',
            'value' => $inst_data->default_img
        );
        echo form_label('Default Image URL'); 
        echo form_input($default_img_data);
    echo "</div><!--end of .uk-width-1-2-->"; 
    
        //AMAZON API Key
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $amazon_api_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'amazon_api',
            'value' => $inst_data->amazon_api_key
        );
        echo form_label('ILS URL Closing string'); 
        echo form_input($amazon_api_data);
    echo "</div><!--end of .uk-width-1-2-->"; 

        //AMAZON API Secret
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $amazon_secret_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'amazon_secret',
            'value' => $inst_data->amazon_secret
        );
        echo form_label('Amazon Secret'); 
        echo form_input($amazon_secret_data);
    echo "</div><!--end of .uk-width-1-2-->";
    
    
        //OCLC WMS API Key
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $oclc_key_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'oclc_key',
            'value' => $inst_data->oclc_key
        );
        echo form_label('OCLC API Key'); 
        echo form_input($oclc_key_data);
    echo "</div><!--end of .uk-width-1-2-->";
    
        //OCLC WMS API Secret
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $oclc_api_secret_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'oclc_api_secret',
            'value' => $inst_data->oclc_api_secret
        );
        echo form_label('OCLC API Secret'); 
        echo form_input($oclc_api_secret_data);
    echo "</div><!--end of .uk-width-1-2-->";
    

        //OCLC WMS API Institutional Code
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $oclc_inst_code_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'oclc_inst_code',
            'value' => $inst_data->oclc_inst_code
        );
        echo form_label('OCLC API institutional Code'); 
        echo form_input($oclc_inst_code_data);
    echo "</div><!--end of .uk-width-1-2-->";
    
        //Lists Stylesheet
    echo "<div class=\"uk-width-1-2 config-form\">";    
        $list_stylesheet_data = array( 
            'class' => 'uk-width-1-1',
            'name' => 'lists_stylesheet',
            'value' => $inst_data->lists_stylesheet
        );
        echo form_label('CSS Stylesheet for Lists'); 
        echo form_input($list_stylesheet_data);
    echo "</div><!--end of .uk-width-1-2-->";    
    

        //submit
    echo "<div class=\"uk-width-1-2 config-form\">";      
        $submit_data = array( 
            'class' => 'uk-button uk-button-primary uk-button-large',
            'name' => 'submit',
            'value' => 'SAVE'
        );
         echo form_submit($submit_data);
    echo "</div><!--end of .uk-width-1-2-->";     


echo '</div>';//end of uk-grid

echo form_close();


?>