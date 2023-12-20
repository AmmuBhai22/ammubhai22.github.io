<?php



header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Headers: Origin, Content-Type, Accept');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Content-Type: application/json; charset=utf-8');
echo '{
   "type": "list",
   "background": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSN0XPtGXDLoqnu-6lyb1AQHhAqdm_2fkb6Ew&usqp=CAU",
   "transparent": 2,
   "pages": [
      {
         "items": [
            {
               "type": "seperate",
               "layout": "2,2,3,4",
               "title": "YoDesi{br}Server 1",
               "image": "http://phpkrotest.000webhostapp.com/msx/Backgrounds/S1.jpg",
               "key":"1",
               "color": "msx-black",
               "imageFiller": "cover",
               "imageOverlay": 0,
               "alignment": "title-center",
               "action": "content:http://phpkrotest.000webhostapp.com/msx/Json/NewLayout/YoDesi.php"
            },
            {
               "type": "seperate",
               "layout": "5,2,3,4",
               "title": "DesiRulez{br}Server 2",
               "image": "http://phpkrotest.000webhostapp.com/msx/Backgrounds/S2.jpg",
               "key":"2",
               "color": "msx-black",
               "alignment": "title-center",
               "imageFiller": "cover",
               "imageOverlay": 0,
               "action": "content:http://phpkrotest.000webhostapp.com/msx/Json/NewLayout/DesiRulez.php"
            },
            {
               "type": "seperate",
               "layout": "8,2,3,4",
               "title": "ZiddiDil{br}Server 3",
               "key":"3",
               "image": "http://phpkrotest.000webhostapp.com/msx/Backgrounds/S3.jpg",
               "color": "msx-black",
               "alignment": "title-center",
               "imageFiller": "cover",
               "imageOverlay": 0,
               "action": "content:http://phpkrotest.000webhostapp.com/msx/Json/NewLayout/ZiddiDil.php"
            }
         ]
      }
   ]
}';