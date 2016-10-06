<?php
?>






<ul id="result"></ul>

<script type="text/javascript">
        $(document).ready(function(){
            alert('loaded');
        $.ajax({
        async : true,
        crossDomain : true,
        url : "https://library-kit-gortiz022.c9users.io/api/featuredslideshow/1",
        method : "GET",
        dataType : 'json',
        headers : {
            "x-api-key": "123456",
            "cache-control": "no-cache"
        },
        success : function(response){
            $.getScript('https://cdnjs.cloudflare.com/ajax/libs/jquery-nivoslider/3.2/jquery.nivo.slider.pack.min.js', function(){
                console.log('Script loaded successfully');
            } );
            var items = '';
            var records = response.message;
            for(var i = 0; i < records.length; i++){
                var record = records[i];
                items += '<li>' + record.listitem_title +'</li>';
            }
                $('#result').append(items);
        }
        
        });//end of ajax request
    });//end of documnet.ready
  
    
</script>