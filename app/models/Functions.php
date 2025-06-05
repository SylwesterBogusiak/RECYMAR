<?php
namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');


/**
* Function class
**/

class Functions


{

use Model;



public $companies_categories_arr = array

(

0 => "Producent",
1 => "Budownictwo",
2 => "Przetwórca(Recykler)",
3 => "Handlowiec(Pośrednik)",
4 => "Gospodarka odpadami",
5 => "Organizacja publiczna",
6 => "Transport i logistyka",
7 => "Inne",

);


public $tools_machinery_arr = array

(

0 => "",
1 => "",
0 => "",
1 => "",
0 => "",
1 => "",
0 => "",
1 => "",
0 => "",
1 => "",
0 => "",
1 => "",

);


public $waste_categories_arr = array
(
0 => array
(
"name" => "MIX - ZMIESZANE - papier, plastik, metal, inne",
"slug" => "mix"
),
1 => array
(
"name" => "BIO - bioodpady, kompostowalne, zielone",
"slug" => "bio"
),
2 => array
(
"name" => "SZKŁO I CER - szkło i ceramika",
"slug" => "glass-cer"
),
3 => array
(
"name" => "MAKULATURA - papier, karton, tektura",
"slug" => "waste-paper"
),
4 => array
(
"name" => "PLASTIK i METAL - tworzywa sztuczne i metale",
"slug" => "plastic-metal"
),
5 => array
(
"name" => "TEKSTYLIA - odzież, obuwie, tkaniny",
"slug" => "textiles"
),
6 => array
(
"name" => "HIGIENICZNE - pieluchy, podpaski, woreczki, inne",
"slug" => "hig"
),
7 => array
(
"name" => "POP i ŻUŻ - popiół i żużel",
"slug" => "ash-slug"
),
8 => array
(
"name" => "DREWNO - naturalne lub impregnowane",
"slug" => "wood"
),
9 => array
(
"name" => "METAL - ZŁOM - stal, aluminium, miedź, inne",
"slug" => "scrap-metal"
),
10 => array
(
"name" => "PLASTIK - HDPE, PET, PP, inne",
"slug" => "plastic"
),
11 => array
(
"name" => "ELEKTRYKA I ELEKTRONIKA - RTV/AGD/KOMP, kable, oświetlenie",
"slug" => "eie"
),
12 => array
(
"name" => "BUDOWA - REMONT - cement, gips, gruz, papa, inne",
"slug" => "construction-renovation"
),
13 => array
(
"name" => "GABARYTY - odpady dużych rozmiarów, meble, urządzenia, inne",
"slug" => "bulky-waste"
),
14 => array
(
"name" => "PŁYNNE - ścieki, oleje, tłuszcze",
"slug" => "liquid"
),
15 => array
(
"name" => "NIEBEZPIECZNE - SZKODLIWE - medyczne, subst. chemiczne, inne",
"slug" => "dangerous-harmful"
),
16 => array
(
"name" => "LOTNE - pyły, spaliny, opary, dym",
"slug" => "volatile"
),
17 => array
(
"name" => "BALAST - pozostałe",
"slug" => "ballast"
),


);


public $ads_types_arr = array
(
0 => "Wszystkie",
1 => "Darmowe",
2 => "Sprzedam",
3 => "Kupię",
);



public $publication_dates_arr = array
(

0 => "1",
1 => "3",
2 => "7",
3 => "30",
4 => "all", // all

);


public $ads_qty_arr = array
(
0 => "1",
1 => "2-50",
2 => "51-500",
3 => "501-5000",
4 => "5001-50000",
5 => "50001-500000",
6 => "> 500000",

);






public function get_lang()
{
 

if (isset($_GET['lang']))
         {
         $lang = $_SESSION['lang'] = $_GET['lang'];
         }
         else
         {
            if (isset($_SESSION['lang']))
            {
            $lang = $_SESSION['lang'];
            }
            else
            {
                $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
              
            }
         }

         $acceptLang = ['pl-PL', 'en-US']; 
         $lang = in_array($lang, $acceptLang) ? $lang : 'en-US';               /// if condition is true value X otherwise Y
        

         return $lang;

}




public function get_page_title_and_link()
{

        $page_arr = array();

        $url = $_SERVER['REQUEST_URI'];
        // $url = rtrim($url,"/");   // usun slash na koncu jesli jest
        $url = parse_url($url, PHP_URL_PATH);
        $url = rtrim($url,"/");
        $url = strrchr(parse_url($url, PHP_URL_PATH), '/');

        $url = ltrim($url,"/");  // usun z lewej 
        //$url = rtrim($url,"/");   // usun slash na koncu jesli jest
        //$_SESSION['endofurl'] = $endofurl;
        
    


    switch($url)

    {
        case '':
        $title = 'Główna';  
        $link = 'home';
        break;

        case 'home':
        $title = 'Główna';
        $link = $url;  
        break;

        case 'products':
        $title = 'Nasze produkty';
        $link = $url;  
        break;

        case 'contact':
        $title = 'Kontakt';  
        $link = $url;
        break;

        case 'about':
        $title = 'O nas';
        $link = $url;  
        break;

        case 'gallery':
        $title = 'Galeria';  
        $link = $url; 
        break;


        case 'search-waste':
        $title = 'Szukaj odpadów';  
        $link = $url;
        break;

        case 'search-companies':
        $title = 'Szukaj firm';  
        $link = $url;
        break;

        case 'search-machines-tools-accessories':
        $title = 'Szukaj narzędzi i maszyn';  
        $link = $url;
        break;


        case 'login':
        $title = 'Logowanie';  
        $link = $url; 
        break;

        case 'signin':
        $title = 'Rejestracja';  
        $link = $url; 
        break;


        case 'logout':
            $title = 'Wylogowano';  
            $link = $url; 
            break;


        default:
              
        $title = '404'; 
        $link = '404';  

        break;



    }




    $page_arr = array
    (   'title' => $title,
        'link' => $link,
    );



    //var_dump($page_arr);




return $page_arr;
//exit();
}


public function get_page_loading_start_time()
{
 /*
    ob_start();
    session_start();
*/

        // page loading time start
        $page_loading_time = microtime();
        $page_loading_time = explode(' ', $page_loading_time);
        $page_loading_time = $page_loading_time[1] + $page_loading_time[0];
        $page_loading_start_time = $page_loading_time;
 
        return $page_loading_start_time;

}








public function request_sent()
{

// Handle AJAX requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    switch ($action) {
        case 'get':
            $data = getData($conn);
            echo json_encode($data);
            break;
        case 'insert':
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $result = insertData($conn, $name, $email, $phone);
            echo json_encode($result);
            break;
        case 'update':
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $result = updateData($conn, $id, $name, $email, $phone);
            echo json_encode($result);
            break;
        case 'delete':
            $id = $_POST['id'];
            $result = deleteData($conn, $id);
            echo json_encode($result);
            break;
    }
}



}


































}














