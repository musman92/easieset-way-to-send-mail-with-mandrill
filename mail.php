<?php
$curl = curl_init();

        $data = [
            "key" => "your key here",
            "message"=> [
                "html"=> "html of mail comes here ",
                "subject"=> "subject",
                "from_email"=> "no_reply@abc.net",
                "from_name"=> "form name",
                "to"=> [
                    [
                        "email"=> "to name"
                    ]
                ],
                "headers"=> [
                    "Reply-To"=> null
                ],
                "important"=> false,
                "track_opens"=> null,
                "track_clicks"=> null,
                "auto_text"=> null,
                "auto_html"=> null,
                "inline_css"=> null,
                "url_strip_qs"=> null,
                "preserve_recipients"=> null,
                "view_content_link"=> null,
                "bcc_address"=> null,
                "tracking_domain"=> null,
                "signing_domain"=> null,
                "return_path_domain"=> null,
                "merge"=> true,
                "merge_language"=> null,
                "global_merge_vars"=> [],
                "merge_vars"=> [],
                "tags"=> [],
                "subaccount"=> null,
                "google_analytics_domains"=> [],
                "google_analytics_campaign"=> "",
                "metadata"=> [],
                "recipient_metadata"=> [],
                "attachments"=> [],
                "images"=> []
            ],
            "async"=> false,
            "ip_pool"=> "Main Pool"
        ];
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://mandrillapp.com/api/1.0/messages/send?",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
