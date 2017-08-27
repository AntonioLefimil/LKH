<?php

class ModificarTXTController extends Controller {

	/**
     * @ClassDependency: { 'dao.DataSource', 'dao.upFilesDAO', 'model.UpdateTxt' }
     */
	public function updateParametros(){
	
		$CANDIDATE_SET_TYPE			= $this->request->getParam('CANDIDATE_SET_TYPE');
		$sliderSTOP_AT_OPTIMUM		= $this->request->getParam('sliderSTOP_AT_OPTIMUM');
		$sliderSUBGRADIENT			= $this->request->getParam('sliderSUBGRADIENT');
		$sliderSUBSEQUENT_PATCHING	= $this->request->getParam('sliderSUBSEQUENT_PATCHING');
		$sliderGAIN23				= $this->request->getParam('sliderGAIN23');
		$sliderGAIN_CRITERION		= $this->request->getParam('sliderGAIN_CRITERION');
		$sliderBACKTRACKING			= $this->request->getParam('sliderBACKTRACKING');
		$sliderRESTRICTED_SEARCH	= $this->request->getParam('sliderRESTRICTED_SEARCH');
		$RUNS						= $this->request->getParam('RUNS');
		$BACKBONE_TRIALS			= $this->request->getParam('BACKBONE_TRIALS');
		$KICKS						= $this->request->getParam('KICKS');
		$KICK_TYPE					= $this->request->getParam('KICK_TYPE');
		$MAX_CANDIDATES				= $this->request->getParam('MAX_CANDIDATES');
		$MAX_SWAPS					= $this->request->getParam('MAX_SWAPS');
		$MAX_TRIALS					= $this->request->getParam('MAX_TRIALS');
		$MOVE_TYPE					= $this->request->getParam('MOVE_TYPE');
		$NONSEQUENTIAL_MOVE_TYPE	= $this->request->getParam('NONSEQUENTIAL_MOVE_TYPE');
		$POPULATION_SIZE			= $this->request->getParam('POPULATION_SIZE');
		$PRECISION					= $this->request->getParam('PRECISION');
		$SEED						= $this->request->getParam('SEED');
		$TIME_LIMIT					= $this->request->getParam('TIME_LIMIT');
		$TRACE_LEVEL				= $this->request->getParam('TRACE_LEVEL');
		$INITIAL_TOUR_ALGORITHM		= $this->request->getParam('INITIAL_TOUR_ALGORITHM');
		$EXTRA_CANDIDATES			= $this->request->getParam('EXTRA_CANDIDATES');
		$SUBPROBLEM_SIZE			= $this->request->getParam('SUBPROBLEM_SIZE');
		$SUBPROBLEM_SIZE_CB			= $this->request->getParam('SUBPROBLEM_SIZE_CB');
		$SUBPROBLEM_TOUR_FILE			= $this->request->getParam('SUBPROBLEM_TOUR_FILE');
			
		$txt =	"PROBLEM_FILE 				= C:\wamp\www\LKHV1\instancias/Modificado/tsp50.tsp"."\n".
				"ASCENT_CANDIDATES 			= 50"."\n".
				"BACKBONE_TRIALS 			= ".$BACKBONE_TRIALS."\n".
				"BACKTRACKING 				= ".$sliderBACKTRACKING."\n".
				"CANDIDATE_FILE 			= C:\wamp\www\LKHV1\instancias/Modificado/tsp50CANDIDATE.txt"."\n".
				"CANDIDATE_SET_TYPE  		= ".$CANDIDATE_SET_TYPE."\n".
				"#EXCESS 					= <real>"."\n".
				"EXTRA_CANDIDATES 			= ".$EXTRA_CANDIDATES."\n".
				"#EXTRA_CANDIDATE_SET_TYPE  = { NEAREST-NEIGHBOR | QUADRANT } "."\n".
				"GAIN23 					= ".$sliderGAIN23."\n".
				"GAIN_CRITERION 			= ".$sliderGAIN_CRITERION."\n".
				"#INITIAL_PERIOD  			= <integer> "."\n".
				"#INITIAL_STEP_SIZE 		= <integer>"."\n".
				"INITIAL_TOUR_ALGORITHM 	= ".$INITIAL_TOUR_ALGORITHM."\n".
				"#INITIAL_TOUR_FILE 		= C:\wamp\www\LKHV1\instancias/Modificado/INITIAL_TOUR_FILE.txt"."\n".
				"#INITIAL_TOUR_FRACTION  	= <real in [0;1]>"."\n".
				"#INPUT_TOUR_FILE 			= <string>"."\n".
				"KICKS						= ".$KICKS."\n".
				"KICK_TYPE 					= ".$KICK_TYPE."\n".
				"#MAX_BREADTH 				= <integer> INT_MAX"."\n".
				"MAX_CANDIDATES 			= ".$MAX_CANDIDATES."\n".
				"MAX_SWAPS 					= ".$MAX_SWAPS."\n".
				"MAX_TRIALS 				= ".$MAX_TRIALS."\n".
				"#MERGE_TOUR_FILE 			= <string> "."\n".
				"MOVE_TYPE 					= ".$MOVE_TYPE."\n".
				"NONSEQUENTIAL_MOVE_TYPE 	= ".$NONSEQUENTIAL_MOVE_TYPE."\n".
				"OUTPUT_TOUR_FILE 			= C:\wamp\www\LKHV1\instancias/Modificado/tsp50.txt"."\n".
				"OPTIMUM 					= 378032"."\n".
				"PATCHING_A 				= 2"."\n".
				"PATCHING_C 				= 3"."\n".
				"PI_FILE 					= C:\wamp\www\LKHV1\instancias/Modificado/tsp50PI_FILE .txt"."\n".
				"POPULATION_SIZE 			= ".$POPULATION_SIZE."\n".
				"PRECISION 					= ".$PRECISION."\n".
				"RESTRICTED_SEARCH 			= ".$sliderRESTRICTED_SEARCH."\n".
				"RUNS 						= ".$RUNS."\n".
				"SEED 						= ".$SEED."\n".
				"STOP_AT_OPTIMUM 			= ".$sliderSTOP_AT_OPTIMUM."\n".
				"SUBGRADIENT 				= ".$sliderSUBGRADIENT."\n".
				"SUBSEQUENT_PATCHING 		= ".$sliderSUBSEQUENT_PATCHING."\n".
				"SUBPROBLEM_SIZE 			= ".$SUBPROBLEM_SIZE."	".$SUBPROBLEM_SIZE_CB."\n".
				"SUBPROBLEM_TOUR_FILE 		= C:\wamp\www\LKHV1\instancias/Modificado/SUBPROBLEM_TOUR_FILE.txt"."\n".
				"#SUBSEQUENT_MOVE_TYPE 		= <integer> "."\n".
				"#SUBSEQUENT_PATCHING 		= { YES | NO } "."\n".
				"TIME_LIMIT 				= ".$TIME_LIMIT."\n".
				"TRACE_LEVEL 				= ".$TRACE_LEVEL;
			
			$txtpar		=	CTX_EXE.'/'.'tsp50.par';
			$openPar	=	fopen($txtpar,'w');
			fwrite($openPar, $txt);
			fclose($openPar);
			
			$cmd = "C:/wamp/www/LKHV1/instancias/Modificado/lkh.exe C:/wamp/www/LKHV1/instancias/Modificado/tsp50.par";		
			exec($cmd, $output);
			
			$out = "c:/wamp/www/LKHV1/instancias/Modificado/out.txt";
			$cmdOut = fopen($out, 'w');
		
			for($i = 0; $i<count($output); $i++){
				$outxt = $output[$i]."\n";
				fwrite($cmdOut, $outxt);			
			}
			
			$tour1 = "C:\wamp\www\LKHV1\instancias/Modificado/SUBPROBLEM_TOUR_FILE.txt";
			$tour2 = ;
			$dao = new UpFilesDAO();
			
			$sql = $this->poblarTabla();
			$dao->insertSQLMod($sql);
			
		return array ('output' => $output);
	}
	
	public function poblarTabla(){
		$fila = file_get_contents('./../../instancias/Modificado/tsp50.tsp'); 
		$tour = file_get_contents('./../../instancias/Modificado/tsp50.txt');
		
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
		$sql = 'INSERT INTO tsp_mod(eje_x, eje_y, tour) VALUES ';
		for (;$i < count($_fila);$i++){			
			if ($_fila[$i] == 'EOF' or trim($_fila[$i]) == ''){break;}
			$tmp = explode(' ', $_fila[$i]);
			$sql .= '('. $tmp[1].','.$tmp[2].','.$tour[$i_tour++].'),';
		}
		$sql = substr($sql,0, strlen($sql)-1);
		return $sql;
	}
	
	public function setConsoleMod(){
		
		$cmd = "C:/wamp/www/LKHV1/instancias/Modificado/lkh.exe C:/wamp/www/LKHV1/instancias/Modificado/tsp50.par";
		exec($cmd, $output);
		
		return array('cmd' => $output);
	}
}