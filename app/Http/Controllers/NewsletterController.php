<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use SendinBlue;
use GuzzleHttp;
use Exception;

class NewsletterController extends Controller
{

    public function subscribe(Request $request) {
      if ($request->has(['email']) == false) {
        return Response::json([
          'error' => "Email address is missing."
          ], 403);
      }
      $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', env('SENDINBLUE_KEY'));
      $apiInstance = new SendinBlue\Client\Api\ContactsApi(
          new GuzzleHttp\Client(),
          $config
      );
      $createContact = new SendinBlue\Client\Model\CreateContact();
      $createContact['email'] = $request->email;
      $createContact['listIds'] = [2];
      try {
        $result = $apiInstance->createContact($createContact);
        return back()->with('result', $result);
      } catch (Exception $e) {
        return back()->withErrors(['error' => $e->getMessage()]);
      }
    }

    // public function unsubscribe(Request $request) {...}
}
