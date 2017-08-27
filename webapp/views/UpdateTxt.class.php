<?php
class UpdateTxt{
	
	public $sliderSTOP_AT_OPTIMUM;
	public $sliderSUBGRADIENT;
	public $sliderSUBSEQUENT_PATCHING;
	public $sliderGAIN23;		
	public $sliderGAIN_CRITERION;		
	public $sliderBACKTRACKING;			
	public $sliderRESTRICTED_SEARCH;	
	public $RUNS;						
	public $BACKBONE_TRIALS;			
	public $KICKS;						
	public $KICK_TYPE;					
	public $MAX_CANDIDATES;				
	public $MAX_SWAPS;					
	public $MAX_TRIALS;					
	public $MOVE_TYPE;					
	public $NONSEQUENTIAL_MOVE_TYPE;	
	public $POPULATION_SIZE;			
	public $PRECISION;				
	public $SEED;					
	public $TIME_LIMIT;					
	public $TRACE_LEVEL;
	
	public function __construct($sliderSTOP_AT_OPTIMUM, $sliderSUBGRADIENT, $sliderSUBSEQUENT_PATCHING, $sliderGAIN23, $sliderGAIN_CRITERION, $sliderBACKTRACKING, $sliderRESTRICTED_SEARCH, $RUNS, $BACKBONE_TRIALS, $KICKS, $KICK_TYPE, $MAX_CANDIDATES, $MAX_SWAPS, $MAX_TRIALS,$MOVE_TYPE, $NONSEQUENTIAL_MOVE_TYPE, $POPULATION_SIZE, $PRECISION, $SEED, $TIME_LIMIT, $TRACE_LEVEL){
	
		$this->sliderSTOP_AT_OPTIMUM	=	$sliderSTOP_AT_OPTIMUM;
		$this->sliderSUBGRADIENT		=	$sliderSUBGRADIENT;	
		$this->sliderSUBSEQUENT_PATCHING=	$sliderSUBSEQUENT_PATCHING;
		$this->sliderGAIN23				=	$sliderGAIN23;
		$this->sliderGAIN_CRITERION		=	$sliderGAIN_CRITERION;
		$this->sliderBACKTRACKING		=	$sliderBACKTRACKING;
		$this->sliderRESTRICTED_SEARCH	=	$sliderRESTRICTED_SEARCH;
		$this->RUNS						=	$RUNS;
		$this->BACKBONE_TRIALS			=	$BACKBONE_TRIALS;	
		$this->KICKS					=	$KICKS;
		$this->KICK_TYPE				=	$KICK_TYPE;
		$this->MAX_CANDIDATES			=	$MAX_CANDIDATES;
		$this->MAX_SWAPS				=	$MAX_SWAPS;
		$this->MAX_TRIALS				=	$MAX_TRIALS;
		$this->MOVE_TYPE				=	$MOVE_TYPE;	
		$this->NONSEQUENTIAL_MOVE_TYPE	=	$NONSEQUENTIAL_MOVE_TYPE;
		$this->POPULATION_SIZE			=	$POPULATION_SIZE;
		$this->PRECISION				=	$PRECISION;
		$this->SEED						=	$TIME_LIMIT;
		$this->TIME_LIMIT				=	$TIME_LIMIT;	
		$this->TRACE_LEVEL				=	$TRACE_LEVEL;
	}
} 