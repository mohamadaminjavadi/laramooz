<?php

namespace App\Http\Controllers;

use app\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Zarinpal\Zarinpal;
use Auth;

class userController extends Controller
{

    public function show_level(Request $request){
        $user = User::find($request->id);
        return response()->json([
            'success'=>true,
            'level'=>$user['level']
        ]);
    }
    public static function pointlevel(){
        $user = User::find(Auth::user()->id);
        $data['point'] =$user->point;
        $data['level']=$user->level;
        $data['vip']=$user->vip;
        return View('dashboard',compact('data'));
    }

    public static function govip(){
        $user=User::find(Auth::user()->id);
        $data['name']=$user->name;
        $data['email']=$user->email;
        return View('getvip',compact('data'));
    }
    public static function govipPayment(){
        $zarinpal = new Zarinpal('XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');
        $zarinpal->enableSandbox(); // active sandbox mod for test env
        // $zarinpal->isZarinGate(); // active zarinGate mode
        dd($zarinpal);
        $results = $zarinpal->request(
            "example.com/testVerify.php",          //required
            1000,                                  //required
            'testing',                             //required
            'me@example.com',                      //optional
            '09000000000',                         //optional
            [                          //optional
                "Wages" => [
                    "zp.1.1"=> [
                        "Amount"=> 120,
                        "Description"=> "part 1"
                    ],
                    "zp.2.5"=> [
                        "Amount"=> 60,
                        "Description"=> "part 2"
                    ]
                ]
            ]
        );
        dd($results);
        echo json_encode($results);
        if (isset($results['Authority'])) {
            file_put_contents('Authority', $results['Authority']);
            $zarinpal->redirect();
        }
        //it will redirect to zarinpal to do the transaction or fail and just echo the errors.
        //$results['Authority'] must save somewhere to do the verification

    }


}
