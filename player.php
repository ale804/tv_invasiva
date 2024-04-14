class Radio {
 public $radio_genre; //String
 public $radio_url; //String
 public $radio_image_url; //String
 public $background_image_url; //String
 public $blur_radio_background; //String
 public $song_metadata; //String
 public $image_album_art; //String
 public $image_album_art_dynamic_background; //String
 public $auto_play; //String
 public $chatbox_url; //String

}
class Panel {
 public $fondo_url; //Date
 public $about_color; //Date
 public $statusBar_color; //String
 public $navigationBar_color; //String
 public $logo_url; //String
 public $menulogo_url; //String
 public $radio_name; //String
 public $dominio_url; //String
 public $copyright_url; //String
 public $web_url; //String
 public $whatsapp_url; //String
 public $call_url; //String
 public $fanpage_url; //String
 public $tiktok_url; //String
 public $twitter_url; //String

}
class Settings {
 public $app_status; //String
 public $onesignal_app_id; //String
 public $fcm_notification_topic; //String
 public $privacy_policy_url; //String
 public $more_apps_url; //String
 public $redirect_url; //String

}
class Application {
 public $radio; //array( Radio )
 public $panel; //array( Panel )
 public $settings; //array( Settings )

}
