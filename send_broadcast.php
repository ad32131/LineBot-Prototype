<?php

    include_once "./msg_config.php";
    // msg_init
    $headers =  init_msg($AccessToken);
 
    // 푸시 내용, data 부분을 자유롭게 사용해 클라이언트에서 분기할 수 있음.
    /*
    $arr = array();
    $arr['messages'] = array();
	$arr['messages'][0]['type'] = "text";
    $arr['messages'][0]['text'] = "test1";
    $arr['messages'][1]['type'] = "text";
    $arr['messages'][1]['text'] = "test2";
    */
    //$arr = '{"messages":[{"type":"text","text":"test1"}] }';
    //$arr = '{ "messages":["type": "bubble",  "hero": {    "type": "image",    "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png",    "size": "full",    "aspectRatio": "20:13",    "aspectMode": "cover",    "action": {      "type": "uri",      "uri": "http://linecorp.com/"    }  },  "body": {    "type": "box",    "layout": "vertical",    "contents": [      {        "type": "text",        "text": "Brown Cafe",        "weight": "bold",        "size": "xl"      },      {        "type": "box",        "layout": "baseline",        "margin": "md",        "contents": [          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"          },          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"          },          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"          },          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"          },          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"          },          {            "type": "text",            "text": "4.0",            "size": "sm",            "color": "#999999",            "margin": "md",            "flex": 0          }        ]      },      {        "type": "box",        "layout": "vertical",        "margin": "lg",        "spacing": "sm",        "contents": [          {            "type": "box",            "layout": "baseline",            "spacing": "sm",            "contents": [              {                "type": "text",                "text": "Place",                "color": "#aaaaaa",                "size": "sm",                "flex": 1              },              {                "type": "text",                "text": "Miraina Tower, 4-1-6 Shinjuku, Tokyo",                "wrap": true,                "color": "#666666",                "size": "sm",                "flex": 5              }            ]          },          {            "type": "box",            "layout": "baseline",            "spacing": "sm",            "contents": [              {                "type": "text",                "text": "Time",                "color": "#aaaaaa",                "size": "sm",                "flex": 1              },              {                "type": "text",                "text": "10:00 - 23:00",                "wrap": true,                "color": "#666666",                "size": "sm",                "flex": 5              }            ]          }        ]      }    ]  },  "footer": {    "type": "box",    "layout": "vertical",    "spacing": "sm",    "contents": [      {        "type": "button",        "style": "link",        "height": "sm",        "action": {          "type": "uri",          "label": "CALL",          "uri": "https://linecorp.com"        }      },      {        "type": "button",        "style": "link",        "height": "sm",        "action": {          "type": "uri",          "label": "WEBSITE",          "uri": "https://linecorp.com"        }      },      {        "type": "spacer",        "size": "sm"      }    ],    "flex": 0  }}]}';

    
    if( empty($_POST["msg_content"]) ) exit(0);
    $msg_contents = base64_decode($_POST["msg_content"]);
    /*
    $msg_contents = '{
                "type": "bubble",
                "hero": {
                  "type": "image",
                  "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png",
                  "size": "full",
                  "aspectRatio": "20:13",
                  "aspectMode": "cover",
                  "action": {
                    "type": "uri",
                    "uri": "http://linecorp.com/"
                  }
                }
              }';
    */

    $flex_msg = '{  
                "type": "flex",
                "altText": "this is a flex message",
                "contents": '.$msg_contents.'
              }';
    $arr = '{  "messages":[ 
        '.$flex_msg.'
     ] }';
	

  
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api.line.me/v2/bot/message/broadcast');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$arr);

 
 
    $response = curl_exec($ch);
    echo $response;

    curl_close($ch);
 
 
 

    // 푸시 전송 결과 반환.
    
 

    

?>
