<?php

    
//sends information to same form
//we are passing the values to this controller to do the processing

?>

<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="uk-height-1-1">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LibKit Login</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <!--<script src="https://use.fontawesome.com/260722e409.js"></script>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.3/css/uikit.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>public/css/uikit.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>public/css/main.css" type="text/css" />
    </head>

    <body class="uk-height-1-1">

        <div class="uk-vertical-align uk-text-center uk-height-1-1">
            <div class="uk-vertical-align-middle libkit-login">

                <div class="uk-margin-bottom"  alt="Libkit">
                    <i class="fa fa-share-alt fa-5x" aria-hidden="true"></i>
                    <h2>LibKit</h2>
                </div>
                    <?php
                    
                     //echoes errors if any    
                    if(!empty($error_message)){
                        echo $error_message;
                    }
                    
                    //set the classes and ids
                    $attributes = array('id'=>'login_form',
                            'class' => 'uk-panel uk-panel-box uk-form'
                        );
                        echo form_open('user_login/login', $attributes);
                    ?>

                    <div class="uk-form-row">
                        <?php
                        //username
                            $username_data = array( 
                                'class' => 'uk-width-1-1 uk-form-large',
                                'name' => 'institution_username',
                                'placeholder' => 'Library initials'
                            );
                            echo form_label('Library Username'); 
                            echo form_input($username_data);
                        ?>
                    </div>
                    <div class="uk-form-row">
                        <?php
                            //password
                            $password_data = array( 
                                'class' => 'uk-width-1-1 uk-form-large',
                                'name' => 'institution_password',
                                'placeholder' => 'Password'
                            );
                            echo form_label('Password'); 
                            echo form_password($password_data);
                        ?>
                    </div>
                    <div class="uk-form-row">
                    <?php
                        //submit
                        $submit_data = array( 
                            'class' => 'uk-width-1-1 uk-button uk-button-primary uk-button-large',
                            'name' => 'submit',
                            'value' => 'Login'
                        );
                        echo '<br />';
                        echo form_submit($submit_data);
                         
                        echo form_close();
                    ?>
                    </div>
                    <div class="uk-form-row uk-text-small">
                        <a class="uk-float-right uk-link uk-link-muted" href="#">Register</a>
                    </div>
                </form>

            </div>
        </div>

    </body>

</html>