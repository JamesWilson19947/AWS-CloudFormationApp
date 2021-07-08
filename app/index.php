<?php
include 'Template.php';

    returnIndex();
    function returnIndex(){
        
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://shibe.online/api/shibes?count=1&urls=true&httpsUrls=true',
        ]);
        $resp = curl_exec($curl);
        curl_close($curl);

        $image = json_decode($resp, true);
        $image = $image[0];

        return Template::view('index.html', [
            'title' => 'Home Page',
            'image' => $image
        ]);
    }

?>
