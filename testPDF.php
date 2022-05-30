<?php

$FileHandle = fopen('demo.pdf', 'w+');

$curl = curl_init();

$instructions = '{
  "parts": [
    {
      "file": "document",
      "pages": {
        "end": -2
      }
    },
    {
      "file": "document",
      "pages": {
        "start": -1
      },
      "actions": [
        {
          "type": "watermark",
          "image": "company-logo",
          "width": "50%"
        }
      ]
    }
  ]
}';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pspdfkit.com/build',
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_POSTFIELDS => array(
    'instructions' => $instructions,
    'document' => new CURLFILE('sample.pdf'),
    'company-logo' => new CURLFILE('logo.png')
  ),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer pdf_live_8rxWBheSWeJrELbn81LzVuMuturVxAcDVa1XniWJHw4'
  ),
  CURLOPT_FILE => $FileHandle,
));

$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);