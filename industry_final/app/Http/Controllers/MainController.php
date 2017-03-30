<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Input;
use DB;
use App\Good;
use App\Logo;
use App\Category;
use App\Http\Libraries\Display_lib;
use App\Http\Controllers\MenuController;
use SimpleXMLElement;


class MainController extends Controller
{
    //
  /*  public function __construct()
    {
        $this->middleware('auth');
    }*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    //Get data from DB
        //menu
        
        $data_nav['menu']=MenuController::index('categories');
        
    //logos_of_partners 
  /*  $data_content['logos']=Logo::orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'desc')
        ->take(10)
        ->get();*/
        $i = 0;
        $curs = 0;

   


        $url = 'https://api.privatbank.ua/p24api/pubinfo?exchange&coursid=5 ';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $xml = curl_exec($ch);

        if(!curl_errno($ch)){
            $myxml = new SimpleXMLElement($xml);
            foreach ($myxml->row as $currency) {
                if ($currency->exchangerate['ccy'] == 'USD') {
                    /*$curs += floatval($currency->exchangerate['buy']);
                    $i++;*/
                    $curs += floatval($currency->exchangerate['sale']);
                    $i++;
                };
            }
        }
        curl_close($ch);

        $data_content['curs']=$curs;
        //goods
   $data_content['latest']=Good::orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'desc')
        ->take(10)
        ->get()->load('photos');

        $data_content['onsale']=Good::where('category',6)
        ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->take(10)
            ->get()->load('photos');
        //page

        $data_content['title']="Industry";
        $path='main_page';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";

       return Display_lib::index($path,$data,$data_nav,$data_content);
    }

    public function ajax_usersessions(Request $request)
    {

        if ($request->ajax()) {
            print('123');
        }
    }
}
