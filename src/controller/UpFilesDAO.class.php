<?php
class UpFilesDAO {
	
	private $connection;
	protected $logger;
	
	public function __construct(){
		$this->connection = new DataSource();
		$this->logger 	  = Logger::getLogger();
	}
			
	public function getTour(){
		$out = array();
		$sql = 'SELECT tour FROM tsp_defecto ORDER BY id';
		$result = $this->connection->query($sql);
		for ($i=0; $i<count($result); $i++){
			$tour = $result[$i]['tour'];
			$t = $this->connection->query("SELECT eje_x, eje_y FROM tsp_defecto where id = $tour");
			array_push($out, $t[0]);
		}
		return $out;
	}
	
	public function insertSQL($sql){
		$query ="TRUNCATE TABLE tsp_defecto";
		$this->connection->query($query);
		$result = $this->connection->query($sql);

		return $result;
	}
	
	public function getTourMod(){
		$out = array();
		$sql = 'SELECT tour FROM tsp_modificado ORDER BY id';
		$result = $this->connection->query($sql);
		for ($i=0;$i < count($result);$i++){		
			$tour = $result[$i]['tour'];
			$t = $this->connection->query("SELECT eje_x, eje_y FROM tsp_modificado where id = $tour");
			array_push($out, $t[0]);
		}
		return $out;
	}
	
	public function insertSQLMod($sql){
		$query ="TRUNCATE TABLE tsp_modificado";
		$this->connection->query($query);
		return $this->connection->query($sql);
	}
}