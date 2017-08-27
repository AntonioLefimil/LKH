<?php
class UpSProblemDAO {
	
	private $connection;
	protected $logger;
	
	public function __construct(){
		$this->connection = new DataSource();
		$this->logger 	  = Logger::getLogger();
	}
	
	public function getTourSP(){
		$out = array();
		$sql = 'SELECT sp_tour FROM sp_table ORDER BY id';
		$result = $this->connection->query($sql);
		for ($i=0;$i < count($result);$i++){		
			$sp_tour = $result[$i]['sp_tour'];
			$t = $this->connection->query("SELECT eje_x, eje_y FROM sp_table where id = $sp_tour");
			array_push($out, $t[0]);
		}
		return $out;
	}
	
	public function insertSQLSP($sql){
		$query ="TRUNCATE TABLE sp_table";
		$this->connection->query($query);
		return $this->connection->query($sql);
	}
}