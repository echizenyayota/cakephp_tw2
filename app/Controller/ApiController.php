<?php
// cakephp_tw apiControllerに概要がある。cakePHPを使ってtwitterOAuthを使ってTwitterAPIを呼び出す（クラウドサーバー）
// 参考URL：http://blog.ecoteki.com/webservice/post-2466/
// 2014年12月11日現在まだできていない

class ApiController extends AppController {

    public $name = "Api";

    public function search($keyword="阪急電車"){

        // $this->autoLayout = false;とは？
        $this->autoLayout = false;
        $options = array('q'=>$keyword,'count'=>'3','lang'=>'ja');

        echo $this->TwitterOAuth->OAuthRequest(
            'https://api.twitter.com/1.1/search/tweets.json',
            'GET',
            $options
        );
        exit;
    }

}