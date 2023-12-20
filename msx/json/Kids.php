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
          "title": "AnimeWorld{br}Server 1",
          "image": "http://phpkrotest.000webhostapp.com/msx/Backgrounds/S1.jpg",
          "color": "msx-black",
          "imageFiller": "cover",
          "imageOverlay": 0,
          "alignment": "title-center",
          "action": "content:http://phpkrotest.000webhostapp.com/msx/Json/NewLayout/Anime.json"
        }
      ]
    }
  ]
}';