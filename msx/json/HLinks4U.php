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
               "layout": "3,2,3,4",
               "title": "Search",
               "key":"1",
               "image": "http://phpkrotest.000webhostapp.com/msx/Backgrounds/Search.jpg",
               "color": "msx-black",
               "imageFiller": "cover",
               "imageOverlay": 0,
               "alignment": "title-center",
               "action": "content:http://search.ammubhai99.serv00.net/msx?headline=Search&param=q&tag=Query&url=http://hlinks4u.ammubhaipy.serv00.net/search&bg=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSN0XPtGXDLoqnu-6lyb1AQHhAqdm_2fkb6Ew&usqp=CAU"
            },
            {
               "type": "seperate",
               "layout": "7,2,3,4",
               "key":"2",
               "title": "Latest",
               "image": "http://phpkrotest.000webhostapp.com/msx/Backgrounds/Latest.jpg",
               "color": "msx-black",
               "alignment": "title-center",
               "imageFiller": "cover",
               "imageOverlay": 0,
               "action": "content:http://hlinks4u.ammubhaipy.serv00.net/search"
            }
         ]
      }
   ]
}';