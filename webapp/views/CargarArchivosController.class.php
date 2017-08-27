<?php 
class CargarArchivosController extends Controller {
	
	/**
     * @ClassDependency: {'dao.UpFilesDAO', 'dao.DataSource', 'model.Archivo' }
     */
	public function cargarCoordenadas(){
		
		$run = $this->insertarDefecto(); 
			
		$dao = new upFilesDAO();
		$tour = $dao->getTour();

		return array('tour' => $tour);
	}
	
	/**
     * @ClassDependency: {'dao.UpFilesDAO', 'dao.DataSource', 'model.Archivo' }
     */
	public function insertarDefecto(){
		
		$sql = $this->poblarTabla();
		
		$dao = new upFilesDAO();
		$dao->insertSQL($sql);
		
		$cmd = "C:/wamp/www/LKHV1/instancias/Defecto/lkh.exe C:/wamp/www/LKHV1/instancias/Defecto/tsp50.par";
		exec($cmd, $output);
		
		$out = "c:/wamp/www/LKHV1/instancias/Defecto/out.txt";
		$cmdOut = fopen($out, 'w');
		
		for($i = 0; $i<count($output); $i++){
			$outxt = $output[$i]."\n";
			fwrite($cmdOut, $outxt);			
		}
		
		return array ('output' => $output);
	}
	 
	public function poblarTabla(){

		$fila = file_get_contents('./../../instancias/Defecto/tsp50.tsp'); 
		$tour = file_get_contents('./../../instancias/Defecto/tsp50.txt');
		
		$_fila = explode("\n", $fila);
		$tour = explode("\n", $tour);
		$i = 0;	$i_tour = 0;

		for ($j =0;$j < count($_fila);$j++){
			if (trim($_fila[$j]) == 'NODE_COORD_SECTION'){$i++; break;}			
			$i++;
		}
		for ($j =0;$j < count($tour);$j++){
			if (trim($tour[$j]) == 'TOUR_SECTION'){	$i_tour++;	break;}
			$i_tour++;
		}
		$sql = 'INSERT INTO file(eje_x, eje_y, tour) VALUES ';
		for (;$i < count($_fila);$i++){			
			if ($_fila[$i] == 'EOF' or trim($_fila[$i]) == ''){break;}
			$tmp = explode(' ', $_fila[$i]);
			$sql .= '('. $tmp[1].','.$tmp[2].','.$tour[$i_tour++].'),';
		}
		$sql = substr($sql,0, strlen($sql)-1);
		
		return $sql;
	}
	public function setConsoleDef(){
		
		$cmd = "C:/wamp/www/LKHV1/instancias/Defecto/lkh.exe C:/wamp/www/LKHV1/instancias/Defecto/tsp50.par";
		exec($cmd, $output);
		
		return array('cmd' => $output);
	}
}