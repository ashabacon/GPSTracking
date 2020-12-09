
// TODO: validate input params, ignore bots...


<?php

require __DIR__ . '/vendor/autoload.php'; // google-api-php-client path

function getClient()
{
    $client = new Google_Client();
    $client->setApplicationName('GPS Tracking Subs');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    //PATH TO JSON FILE DOWNLOADED FROM GOOGLE CONSOLE FROM STEP 7
    $client->setAuthConfig('credentials.json'); 
    $client->setAccessType('offline');
    return $client;
}

// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Sheets($client);
$spreadsheetId = '1jQWty-_DB8JDueGlB0_altioAJ9uFX8FnOW9jV-x7lw'; // spreadsheet Id
$range = 'Sheet1'; // Sheet name

$valueRange= new Google_Service_Sheets_ValueRange();
$valueRange->setValues(["values" => ["a", "b"]]); // values for each cell
$valueRange->setValues(["values" => [
    $_POST["email"]
  , date("F j, Y, g:i a", time()) 
]]);

$conf = ["valueInputOption" => "RAW"];
$response = $service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, $conf);

?>