<?php
//this page will display items that are returned from the query for results to be reviewed





function create_ils_url($isbn){
    //concatonates the url for catalog
    //get instance, access the CI superobject
    $CI = & get_instance();
    $base_url = $CI->session->userdata('ils_base_url');
    $ending_url = $CI->session->userdata('ils_closing_url');

    $ils_url = $base_url.$isbn.$ending_url;
    
    return $ils_url;
}//end of create ILS url

//Amazon API
function amazon_query($isbn){
        //get instance, access the CI superobject
    $CI = & get_instance();
    
    //create URL with isbn
    $url_isbn = create_ils_url($isbn);
    
    //get ID of most recent pagelist

    // Your AWS Access Key ID, as taken from the AWS Your Account page
    $aws_access_key_id = $CI->session->userdata('amazon_api_key');

    
    // Your AWS Secret Key corresponding to the above ID, as taken from the AWS Your Account page
    $aws_secret_key = $CI->session->userdata('amazon_secret');
 
    
    // The region you are interested in
    $endpoint = "webservices.amazon.com";
    
    $uri = "/onca/xml";
    
    $params = array(
    "Service" => "AWSECommerceService",
    "Operation" => "ItemLookup",
    "AWSAccessKeyId" => $CI->session->userdata('amazon_api_key'),
    "AssociateTag" => $CI->session->userdata('amazon_associateTag'),
    "ItemId" => $isbn,
    "IdType" => "ISBN",
    "ResponseGroup" => "Images,ItemIds,Offers,ItemAttributes",
    "SearchIndex" => "Books"
    );
    
    // Set current timestamp if not set
    if (!isset($params["Timestamp"])) {
    $params["Timestamp"] = gmdate('Y-m-d\TH:i:s\Z');
    }
    
    // Sort the parameters by key
    ksort($params);
    
    $pairs = array();
    
    foreach ($params as $key => $value) {
    array_push($pairs, rawurlencode($key)."=".rawurlencode($value));
    }
    
    // Generate the canonical query
    $canonical_query_string = join("&", $pairs);
    
    // Generate the string to be signed
    $string_to_sign = "GET\n".$endpoint."\n".$uri."\n".$canonical_query_string;
    
    // Generate the signature required by the Product Advertising API
    $signature = base64_encode(hash_hmac("sha256", $string_to_sign, $aws_secret_key, true));
    
    // Generate the signed URL
    $request_url = 'http://'.$endpoint.$uri.'?'.$canonical_query_string.'&Signature='.rawurlencode($signature);
    
    //Catch the response in the $response object
    $response = file_get_contents($request_url);
    $parsed_xml = simplexml_load_string($response);
    
    //if img is empty - then return dummy test
    if(!empty($parsed_xml->Items->Item[0]->LargeImage->URL)){
            $out['img'] = $parsed_xml->Items->Item[0]->LargeImage->URL;
            $out['title'] = $parsed_xml->Items->Item[0]->ItemAttributes->Title;
            $out['author'] = $parsed_xml->Items->Item[0]->ItemAttributes->Author;
            $out['url_isbn'] = $url_isbn;
    }else{
            $out['img'] = $CI->session->userdata('default_img');
            $out['title'] = 'Title not found';
            $out['author'] = 'Author not found, but ISBN is ' . $isbn;
            $out['url_isbn'] = $url_isbn;           
    }
    

    return $out;


}//end of amazon query


