<?php


namespace Core;

class Curl{
    private $curl_handle;

    private function setOPT($url,$data){
        $data = (object) $data;
        if(isset($data->headers))
            curl_setopt($this->curl_handle, CURLOPT_HTTPHEADER, $data->headers);
        curl_setopt($this->curl_handle, CURLOPT_URL, $url);
              
        $res =  curl_exec($this->curl_handle);
        return $res;
    }
    
    public function __construct(){
        $this->curl_handle = curl_init();
        curl_setopt($this->curl_handle, CURLOPT_RETURNTRANSFER, true);

    }

    public function get($url,$data = null){
        curl_setopt($this->curl_handle, CURLOPT_HTTPGET, TRUE);

        if(isset($data->body)){
            $body = http_build_query($this->body);
            $url = $url.'?'.$body;
        }

        return $this->setOPT($url,$data);
    }

    public function post($url,$data = null){
        curl_setopt($this->curl_handle, CURLOPT_POST, true);
        if(isset($data->body))
            curl_setopt($this->curl_handle, CURLOPT_POSTFIELDS, $data->body);

        return $this->setOPT($url,$data);
    }

    public function JWT($url, $token ){
        $headers = [
            'Authorization: Bearer '.$token
        ];
        return $this->get($url,[
            "headers"=>$headers
        ]);
    }

    public function close(){
        curl_close($this->curl_handle);
    }

}


?>