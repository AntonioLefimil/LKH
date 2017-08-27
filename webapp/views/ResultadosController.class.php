<?php

class ResultadosController extends Controller {

	/**
	* @ClassDependency: { 'dao.DataSource', 'dao.upFilesDAO', 'model.Archivo' }
	*/
	public function setDefecto(){
		$dao = new upFilesDAO();
		$tour = $dao->getTour();

		return array('tour' => $tour);
	}
	
	/**
	* @ClassDependency: { 'dao.DataSource', 'dao.upFilesDAO', 'model.Archivo' }
	*/
	public function setModificado(){
		
		$dao = new upFilesDAO();
		$tour = $dao->getTourMOD();
		return array('tour' => $tour);
	}
	
	
}