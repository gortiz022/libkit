
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>

<?php

Class Pagelist_data {

public static $website_head = <<<EOT
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Titles at the Gellert Memorial Library</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
       
        <link rel="stylesheet" href="<?php echo base_url();?>public/css/main.css" type="text/css" />
</head>
<body>
<div class="content_container">
    <div class="box">
        <div class="summary">
            <h2 style="display: inline;">New titles at the Gellert Memorial Library</h2>
            <p>The Gellert Memorial Library works tirelessly to acquire new
            scholarly and general interest titles for our community. Come by and
            check out these new titles!</p>
            <p>Is there a title that you would like to see? You can make that
            happen by submitting a book suggestion <a
            href="http://www.stpsu.edu/library-about/request" target="_blank">by
            clicking here</a></p>
        </div>
    </div>
    <div class="row5050">
EOT;

public static $email_header = <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Titles at the Gellert Memorial Library</title>
    <meta charset="UTF-8">
    <style type="text/css">
		body{
			font-family:Arial, Helvetica, Sans-Serif;
		}
		.bib{
			padding-bottom:5px;
			padding-top:5px;
			border-bottom:1px solid #ccc;
		}
		
		.summary{
			border-left: 10px solid #9CACB9;
		    padding: .8em;
		    display: block;
		    border-radius: 3px;
		    background-color: rgba(230, 226, 225, 0.2);
		    color: #3a464f;
		    box-sizing: border-box;
		    margin: 7px auto;
		    font-size: 1.25em;
		    box-shadow: 0 0 2px #ccc;
		    font-style: oblique;
		}
		
		.coverbox{
			max-width:170px;
			display:block;
			box-sizing:border-box;
			background-color:#9CACB9;
			float:left;
			margin-right:1em;
			border:1px solid #FCB619;
			padding:2px;
			text-align:center;
			border-radius:2px;
            padding: 5px;
		}
		.coverbox img{
			margin:0 auto;
			box-sizing:border-box !important;
			width:100%;
		}
		.bibbox{
			display:table-row;
			text-align:left;
		}
		.booktitle{
			color:#3F7663;
		}
		.callNumTitle{
			color:#3A464F;
			font-size:1.3em;
		}
		.callNum{
			color:#FFF8BB;
			padding:7px;
			background-color:#3F7663;
			border-radius:3px;
			display:inline-block;
		}
		.callNum a{
			color:#fff;
			text-decoration:none;
		}
		.callNum:hover,.callNum a:hover{
			background-color:#5C9D86;
		}
		.introbox{
			background-color:rgba(253, 251, 226, 0.5);
			border:1px solid #FCB619;
			border-radius:2px;
			padding:5px;
			width: auto;
			margin: 5px;
		}
 	.box50{
			width:100%;
            display: block;
            float: left;
        }

</style>
</head>

<body>
    <div class="content_container">
        <div class="box">
            <div class="summary">
                <h2 style="display: inline;">New titles at the Gellert Memorial Library</h2>
                <p>The Gellert Memorial Library works tirelessly to acquire new
                scholarly and general interest titles for our community. Come by and
                check out these new titles!</p>
                <p>Is there a title that you would like to see? You can make that
                happen by <a
                href="http://www.stpsu.edu/library-about/request" target="_blank">submitting a book suggestion <span class="fa fa-external-link"></span></a></p>
            </div>
        </div>
        <div class="row5050">
            
EOT;

public static $record_block = <<<EOT
<div class="box box50 bib">
    <div class="coverbox">
        <img src="%s">
             </div>
    <div class="bibbox">
        <h3 class="booktitle">%s %s</h3>
        <p class="callNum"><a href="%s" target="_blank">View in Catalog <span class="fa fa-external-link"></span></a></p>
    </div><!-- End of bibbox-->
</div> <!-- End of box box50-->

EOT;


public static $footers = <<<EOT
                </div> <!-- End of row 5050 -->
        </div><!-- End of content container -->
    </body>
</html>    
EOT;

}
?>