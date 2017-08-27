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
		$sql = 'SELECT tour FROM file ORDER BY id';
		$result = $this->connection->query($sql);
		for ($i=0; $i<count($result); $i++){
			$tour = $result[$i]['tour'];
			$t = $this->connection->query("SELECT eje_x, eje_y FROM file where id = $tour");
			array_push($out, $t[0]);
		}
		return $out;
	}
	
	public function insertSQL($sql){
		$query ="TRUNCATE TABLE file";
		$this->connection->query($query);
		return $this->connection->query($sql);
	}
	
	public function getTourMod(){
		$out = array();
		$sql = 'SELECT tour FROM tsp_mod ORDER BY id';
		$result = $this->connection->query($sql);
		for ($i=0;$i < count($result);$i++){		
			$tour = $result[$i]['tour'];
			$t = $this->connection->query("SELECT eje_x, eje_y FROM tsp_mod where id = $tour");
			array_push($out, $t[0]);
		}
		return $out;
	}
	
	public function insertSQLMod($sql){
		$query ="TRUNCATE TABLE tsp_mod";
		$this->connection->query($query);
		return $this->connection->query($sql);
	}
}