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


}


?>