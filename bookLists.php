<?php
class Books{
    public $con, $sqlData, $entity;


    function __construct($con, $input){
        $this->con = $con;

        if(is_array($input)){
            $this->sqlData = $input;
        }else{
            $query = $this->con->prepare("SELECT * FROM booksread WHERE id=:id");
            $query->bindValue(":id", $input);
            $query->execute();

            $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);

        }
        // $this->book = new Books($con, $this->sqlData["Title"]); // this is wrong

        function getId() {
            return $this->sqlData["id"];
        }
    
        function getTitle() {
            return $this->sqlData["title"];
        }

         function getAuthor() {
            return $this->sqlData["Author"];
        }
    
         function getRating() {
            return $this->sqlData["Rating"];
        }
         function getComments() {
            return $this->sqlData["Comments"];
        }
        //need to come back and set how strict each of these will be. 



    }




}



?>