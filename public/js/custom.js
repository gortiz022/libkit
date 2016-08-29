
    //console.log(wIframe);
    $(document).ready(function(){
    //website preview    
        var websitePreview = $('.websitePreview').html();
        var wIframe = $('.websiteIframe').attr('srcdoc', websitePreview);
    //email preview
        var emmailPreview = $('.emailPreview').html();
        var eIframe = $('.emailIframe').attr('srcdoc', emmailPreview);

    });