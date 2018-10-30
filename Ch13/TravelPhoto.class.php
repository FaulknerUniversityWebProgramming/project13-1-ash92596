<?php
  class TravelPhoto {
      private $date;
      private $fileName;
      private $description;
      private $title;
      private $latitude;
      private $longitude;
      private $ID;
      public static $photoID = 0;
    
    function __construct($fileName, $title, $description, $latitude, $longitude){
			$this->fileName = $fileName;
			$this->title = $title;
			$this->description = $description;
			$this->latitude = $latitude;
			$this->longitude = $longitude;
			self::$photoID++;
		}
    
    public function __toString() {
      $line = "<img src = '" . $this -> fileName . "' alt = '" . $this -> title . "' title = '" . $this -> title ."'>";
      return $line;
    }
    
  }
?>
          
          
