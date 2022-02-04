<?php
class connection{
    protected $isconn;
    protected $datab;
    protected $transaction;
    //un   phpmyadmin pass phpmyadmin ip dbname
    public function _construct($username="root", $password="",$host="localhost",$dbname="regis", $option=[]){
        $this ->isconn= TRUE;
        try{
            $this->data = new PDO("mysql:host={$host}; dbname={$dbname}; charset=utf8", $username,$ $password,$option);
            $this->datab->setAttribute(PDO::ATT_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->transaction = $this->datab;
            $this->datab->setAttribute(PDO::ATTR_DEFAULT_MODE, PDO::FETCH_ASSOC);
            //echo 'connection successfully!!!;
        }catch(PDOEXCEPTION $e){
            throw new Exception($e->getmassage());
        }
    }//endDefaultcunstructor
    //disconnect from db
    public function Disconnect(){
        $this->datab = NULL;//close connectioninPDO
        $this->isconn =FALSE;
    }//endDisconnectFunction
}//endClassDatabase
//$con = New Connection(); //for debugging only
//echo ' debug connection';
?>