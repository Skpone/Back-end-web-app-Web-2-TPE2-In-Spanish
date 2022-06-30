<?php

class ApiView {

    public function response($data, $code = 200) {
        //idioma json para que cuando me muestre el feedback lo vea en ese formato
        header("Content-Type: application/json");
        //response (me refiero a lo que aparece por ej el "200 OK" en la parte del network)
        header("HTTP/1.1 " . $code . " " . $this->requestStatus($code));
        //mandamos $data tipeado al JSON
        echo json_encode($data);
    }

    private function requestStatus($code){
        $status = array(
          200 => "OK",
          404 => "Not found",
          500 => "Internal Server Error"
        );
        return (isset($status[$code]))? $status[$code] : $status[500];
      }
}