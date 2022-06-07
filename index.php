<?php
require __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig('storage/credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');

$service = new Google_Service_Sheets($client);

$spreadsheetId = '1mDXJHRuZTTFhKjb0v1BIKK-J5_Nfyumj688RwKzb2SU';

//READ DATA

// $range = '2020!A2:C8';
// $response = $service->spreadsheets_values->get($spreadsheetId, $range);
// $values = $response->getValues();

// print_r($values);

//UPDATE DATA
// $range = '2020!A6:C6';
// $values = [
//     [
//         'Arta', 'Programmer', 'Kediri'
//     ],
// ];

// $body = new Google_Service_Sheets_ValueRange([
//     'values' => $values
// ]);

// $params = [
//     'valueInputOption' => 'RAW'
// ];

// $result = $service->spreadsheets_values->update(
//     $spreadsheetId,
//     $range,
//     $body,
//     $params
// );


// INSERT DATA
// $range = '2020';
// $values = [
//     [
//         'Eriya', 'Ekonom', 'Yogyakarta'
//     ],
// ];
// $body = new Google_Service_Sheets_ValueRange([
//     'values' => $values
// ]);
// $params = [
//     'valueInputOption' => 'RAW'
// ];
// $insert = [
//     'insertDataOption' => "INSERT_ROWS"
// ];

// $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params, $insert);

// DELETE DATA

// $batchUpdateRequest = new \Google_Service_Sheets_BatchUpdateSpreadsheetRequest(array(
//     'requests' => array(
//         'deleteDimension' => array(
//             'range' => array(
//                 'sheetId' => 413877505, // the ID of the sheet/tab shown after 'gid=' in the URL
//                 'dimension' => "ROWS",
//                 'startIndex' => 5, // row number to delete
//                 'endIndex' => 5 + 1
//             )
//         )
//     )
// ));

// $result = $service->spreadsheets->batchUpdate($spreadsheetId, $batchUpdateRequest);
