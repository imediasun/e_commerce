<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Logo;
use App\Http\Libraries\Display_lib;
use SimpleXMLElement;
class CategoryController extends Controller
{
    public function index($id)
    {
        //Get data from DB
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
        //menu
        $data_nav['menu']=MenuController::index('categories');
        $data_content['logos']=Logo::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->take(10)
            ->get();
        //goods
        $data_content['goods']=Good::where([
            ['category', '=', $id]
        ])->paginate(2);


        $data_content['category_id']=$id;
        //page
        $path='category_page';
        $data_content['title']="Industry";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::index($path,$data,$data_nav,$data_content);
    }

    public function list_action($id)
    {
        //Get data from DB

        //menu
        $data_nav['menu']=MenuController::index('categories');
        $data_content['logos']=Logo::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->take(10)
            ->get();
        //goods
        $data_content['goods']=Good::where([
            ['category', '=', $id]
        ])
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get()->load('photos');
        $data_content['category_id']=$id;
        //page
        $path='category_list_page';
        $data_content['title']="Industry";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::index($path,$data,$data_nav,$data_content);
    }
}
