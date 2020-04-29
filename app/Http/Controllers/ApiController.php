<?php

namespace App\Http\Controllers;

use App\Console\Constants;
use App\Order;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function callBack(Request $request)
    {
//        return redirect('/');
        $requestBody = json_decode($request->getContent(), true);

        if (isset($requestBody['order'])) {
            $orderObject = Order::where('order_id', $requestBody['order']['order_id'])->first();

            if ($orderObject) {
//                $orderObject->status = $requestBody['order']['status'];
//                $orderObject->save();

                $orderObject->update([
                    'status' => $requestBody['order']['status']
                ]);

                if (isset($requestBody['transaction']) && $requestBody['transaction']['status'] == Constants::FAIL) {
                    return redirect()->route('sorry')->with([
                        'transaction' => $requestBody['transactions'][$requestBody['transaction']['id']],
                        'message' => $requestBody['error']['recommended_message_for_user']
                    ]);
                } else {
                    return redirect()->route('thank-you');
                }

            }

        }


    }

}
