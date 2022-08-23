<?php
class Product {
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "tourizim";   
	private $destinationTable = 'destination';
	private $dbConnect = false;
    public function __construct(){
		$sqlQuery = "SELECT * FROM ".$this->destinationTable." WHERE status = '1'";
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result,  MYSQLI_ASSOC)) {
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}		
	public function getLocation(){
		$sqlQuery = "
			SELECT DISTINCT(location)
			FROM ".$this->destinationTable." 
			WHERE status = '1' ORDER BY id DESC";
        return  $this->getData($sqlQuery);
	}
	public function getProperty_type(){
		$sqlQuery = "
			SELECT DISTINCT(property_type)
			FROM ".$this->destinationTable." 
			WHERE status = '1'ORDER BY id DESC ";
        return  $this->getData($sqlQuery);
	}
	public function getAmenity_1(){
		$sqlQuery = "
			SELECT DISTINCT(amenity_1)
			FROM ".$this->destinationTable." 
			WHERE status = '1' ORDER BY amenity_1 DESC";
        return  $this->getData($sqlQuery);
	}
    public function getAmenity_2(){
		$sqlQuery = "
			SELECT DISTINCT(amenity_2)
			FROM ".$this->destinationTable." 
			WHERE status = '1'ORDER BY amenity_2 DESC ";
        return  $this->getData($sqlQuery);
	}
    public function getAmenity_3(){
		$sqlQuery = "
			SELECT DISTINCT(amenity_3)
			FROM ".$this->destinationTable." 
			WHERE status = '1'ORDER BY amenity_3 DESC";
        return  $this->getData($sqlQuery);
	}
    public function getAmenity_4(){
		$sqlQuery = "
			SELECT DISTINCT(amenity_4)
			FROM ".$this->destinationTable." 
			WHERE status = '1' ORDER BY amenity_4 DESC";
        return  $this->getData($sqlQuery);
	}
    public function getAmenity_5(){
		$sqlQuery = "
			SELECT DISTINCT(amenity_5)
			FROM ".$this->destinationTable." 
			WHERE status = '1' ORDER BY amenity_5 DESC";
        return  $this->getData($sqlQuery);
	}
	public function getAct_1(){
		$sqlQuery = "
			SELECT DISTINCT(act_1)
			FROM ".$this->destinationTable." 
			WHERE status = '1' ORDER BY id DESC";
        return  $this->getData($sqlQuery);
	}
	public function getAct_2(){
		$sqlQuery = "
			SELECT DISTINCT(act_2)
			FROM ".$this->destinationTable." 
			WHERE status = '1' ORDER BY id DESC";
        return  $this->getData($sqlQuery);
	}
	public function getAct_3(){
		$sqlQuery = "
			SELECT DISTINCT(act_3)
			FROM ".$this->destinationTable." 
			WHERE status = '1' ORDER BY id DESC";
        return  $this->getData($sqlQuery);
	}
	public function getAct_4(){
		$sqlQuery = "
			SELECT DISTINCT(act_4)
			FROM ".$this->destinationTable." 
			WHERE status = '1' ORDER BY id DESC";
        return  $this->getData($sqlQuery);
	}
	public function getAct_5(){
		$sqlQuery = "
			SELECT DISTINCT(act_5)
			FROM ".$this->destinationTable." 
			WHERE status = '1'ORDER BY id DESC ";
        return  $this->getData($sqlQuery);
	}
	public function getName(){
		$sqlQuery = "
			SELECT DISTINCT(name)
			FROM ".$this->destinationTable." 
			WHERE status = '1'ORDER BY id DESC ";
        return  $this->getData($sqlQuery);
	}
    public function searchDestination(){
		$sqlQuery = "SELECT * FROM ".$this->destinationTable." WHERE status = '1'";
		if(isset($_POST["minPrice"], $_POST["maxPrice"]) && !empty($_POST["minPrice"]) && !empty($_POST["maxPrice"])){
			$sqlQuery .= "
			AND price BETWEEN '".$_POST["minPrice"]."' AND '".$_POST["maxPrice"]."'";
		}
		if(isset($_POST["location"])) {
			$locationFilterData = implode("','", $_POST["location"]);
			$sqlQuery .= "
			AND location IN('".$locationFilterData."')";
		}
		if(isset($_POST["property_type"])){
			$property_typeFilterData = implode("','", $_POST["property_type"]);
			$sqlQuery .= "
			AND property_type IN('".$property_typeFilterData."')";
		}
		if(isset($_POST["amenity_1"])) {
			$amenity_1FilterData = implode("','", $_POST["amenity_1"]);
			$sqlQuery .= "
			AND amneity_1 IN('".$amenity_1FilterData."')";
		} 
		if(isset($_POST["amenity_2"])) {
			$amenity_2FilterData = implode("','", $_POST["amenity_2"]);
			$sqlQuery .= "
			AND amneity_2 IN('".$amenity_2FilterData."')";
		} 
		if(isset($_POST["amenity_3"])) {
			$amenity_3FilterData = implode("','", $_POST["amenity_3"]);
			$sqlQuery .= "
			AND amneity_3 IN('".$amenity_3FilterData."')";
		}
		if(isset($_POST["amenity_4"])) {
			$amenity_4FilterData = implode("','", $_POST["amenity_4"]);
			$sqlQuery .= "
			AND amneity_4 IN('".$amenity_4FilterData."')";
		} 
		if(isset($_POST["amenity_5"])) {
			$amenity_5FilterData = implode("','", $_POST["amenity_5"]);
			$sqlQuery .= "
			AND amneity_5 IN('".$amenity_5FilterData."')";
		}
		if(isset($_POST["act_1"])) {
			$act_1FilterData = implode("','", $_POST["act_1"]);
			$sqlQuery .= "
			AND act_1 IN('".$act_1FilterData."')";
		}
		if(isset($_POST["act_2"])) {
			$act_2FilterData = implode("','", $_POST["act_2"]);
			$sqlQuery .= "
			AND act_2 IN('".$act_2FilterData."')";
		}
		if(isset($_POST["act_3"])) {
			$act_3FilterData = implode("','", $_POST["act_3"]);
			$sqlQuery .= "
			AND act_3 IN('".$act_3FilterData."')";
		}
		if(isset($_POST["act_4"])) {
			$act_4FilterData = implode("','", $_POST["act_4"]);
			$sqlQuery .= "
			AND act_4 IN('".$act_4FilterData."')";
		}
		if(isset($_POST["act_5"])) {
			$act_5FilterData = implode("','", $_POST["act_5"]);
			$sqlQuery .= "
			AND act_5 IN('".$act_5FilterData."')";
		}
		if(isset($_POST["name"])) {
			$nameFilterData = implode("','", $_POST["name"]);
			$sqlQuery .= "
			AND name IN('".$nameFilterData."')";
		}
		$sqlQuery .= " ORDER By price";
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		$totalResult = mysqli_num_rows($result);
		$searchResultHTML = '';
		if($totalResult > 0) {
			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				$searchResultHTML .= '
				<div class="col-sm-4 col-lg-4 col-md-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/'. $row['image'] .'" alt="" >
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h7 class="card-title text-white  m-0 ml-3">'. $row['name'] .'</h7>
                        <a href="'. $row['link'] .'" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                    </div>
                    <div class="card-footer py-3 px-4">
                        <p class="m-0"><small>'. $row['description'] .'</small></p>
                    </div>
                </div>
				</div>';
			}
		} else {
			$searchResultHTML = '<img class="card-img-top" src="img/noproduct.png" alt="" >';
		}
		return $searchResultHTML;	
	}	

}
?>