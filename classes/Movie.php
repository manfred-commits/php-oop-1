<?php 


class Movie{
    private $title;
    private $duration;
    private $genre;
    private $director;
    /**
     * __construct
     *  
     * @param string $_title title of the movie
     * @param int $_duration duration of the movie in minutes
     * @param  string $_genre genre of the movie
     * @param string $_director director of the movie
     */ 

    public function __construct($_title,$_duration,$_genre,$_director)
    {
        $this->title=$_title;
        $this->duration=floor($_duration /60)."h ".$_duration%60 ."m" ;
        $this->genre=$_genre;
        $this->director=$_director;
    }


    // params setting methods

    /**
    *setTitle
    *
    * @param string $_title title of the movie to change
    */ 

    public function setTitle($_title){
        $this->title=$_title;
    }

    /**
    *setDuration
    *
    * @param int $_duration duration of the movie to change in minutes
    */ 
    public function setDuration($_duration){
        $this->duration=floor($_duration /60)."h ".$_duration%60 ."m" ;
    }

    /**
    *setGenre
    *
    * @param string $_genre Genre of the movie to change
    */ 
    public function setGenre($_genre){
        $this->genre=$_genre;
    }

    /**
    *setDirector
    *
    * @param int $_director Director of the movie to change
    */
    public function setDirector($_director){
        $this->director=$_director;
    }

    // /params setting methods


    // params getting methods

    /**
    *getTitle
    *
    * returns the value of the title of the movie property
    */
    public function getTitle(){
        return $this->title;
    }

    /**
    *getDuration
    *
    * returns the value of the duration of the movie property
    */
    public function getDuration(){
        return $this->duration;
    }

    /**
    *getGenre
    *
    * returns the value of the genre of the movie property
    */
    public function getGenre(){
        return $this->genre;
    }

    /**
    *getDirector
    *
    * returns the value of the director of the movie property
    */
    public function getDirector(){
        return$this->director;
    }

    // /params getting methods

}


?>