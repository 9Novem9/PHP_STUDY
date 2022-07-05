1ページ目
<?php
require "AirConditioner.php";

$airConditioner = new AirConditioner();

$airConditioner->showStatus();
 

?>


２ページ目
<?php
class AirConditioner {
    
    /*
    モード (冷房,暖房,除湿　のみ、それ以外の文字列が入らないこと)
    一般的なリモコンを想定し、それぞれのモードを切り替える関数を定義すること
    */
    private $mode;
    
    
    /* 
    温度 (18～30)
    一般的なリモコンを想定し、1度づつ上下させる関数を定義すること
    */
    private $temperature;
    
    /* 
    風量 (1～5) 
    一般的なリモコンを想定し、1づつ上下させる関数を定義すること
    */
    private $power;
    
    /*
    コンストラクタ
    */
    function __construct() {
        // 初期設定は冷房モードとすること
        // 温度・風量は引数で受け取ること
         $this->mode =  "冷房";
         $this->temperature = ($temperature)
    }
    
    /* 現在設定を表示 */
    function showStatus() {
        echo "======現在の設定======\n";
        echo "モード: $this->mode\n";
        echo "設定温度: $this->temperature\n";
        echo "風量: $this->power\n";
    }
    function mode($mode)
    {
        
    }
    
    function temperature($temperature)
    {
      for ($temperature = 18; $temperature < 30; $temperature)++) 
    return "$temperature)\n";
    }
    function power($power)
    {
        
    }

}
?>