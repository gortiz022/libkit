
//console.log(wIframe);
$(document).ready(function(){
    //website preview    
        var websitePreview = $('.websitePreview').html();
        var wIframe = $('.websiteIframe').attr('srcdoc', websitePreview);
    //email preview
        var emmailPreview = $('.emailPreview').html();
        var eIframe = $('.emailIframe').attr('srcdoc', emmailPreview);


});

//creates a copy and paste button
function copyToClipboard(element) {
    var $temp = $("<input>");
    var $copyMessage = "Copied";
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    console.log($copyMessage);
    $(element).addClass('highlighted',  100000 );
    var $copied =  $(element).data('copy');
    //console.log($copied);
    //$('.copy').text($copied);
    $(element).before($copyMessage);
    $temp.remove();
}

//

