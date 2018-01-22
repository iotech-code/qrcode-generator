<?php

use Illuminate\Http\Request;
use CodeItNow\BarcodeBundle\Utils\QrCode;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('generate', function( Request $request ) {

$filename = "QRCode_" . time() . ".png";

$qrCode = new QrCode();
$qrCode
    ->setText($request->text)
    ->setSize(800)
    ->setPadding(15)
    ->setErrorCorrection('high')
    ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
    ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
    ->setLabel('Scan: ' . $request->title)
    ->setLabelFontSize(18)
    ->setImageType(QrCode::IMAGE_TYPE_PNG)
;

return response(base64_decode($qrCode->generate()))->header('Content-type','image/png')->header("Content-Disposition", "inline; filename=\"{$filename}\"");
// echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';

});