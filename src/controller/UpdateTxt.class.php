<?php
class UpdateTxt{
	
		public $CANDIDATE_SET_TYPE;	
		public $INITIAL_TOUR_ALGORITHM;
		public $EXTRA_CANDIDATES;
		public $SEED;		
		public $sliderGAIN_CRITERION;
		public $sliderBACKTRACKING;	
		public $sliderRESTRICTED_SEARCH;
		public $MOVE_TYPE;
		public $ASCENT_CANDIDATES;
		public $INITIAL_PERIOD;		
		public $INITIAL_STEP_SIZE;	
		public $sliderSTOP_AT_OPTIMUM;
		public $sliderSUBGRADIENT;
		public $RUNS;			
		public $POPULATION_SIZE;
		public $MAX_TRIALS;	
		public $NONSEQUENTIAL_MOVE_TYPE;
		public $PRECISION;				
		public $TIME_LIMIT;				
		public $TRACE_LEVEL;			
		public $sliderGAIN23;
		public $sliderSUBSEQUENT_PATCHING;
		public $KICKS;				
		public $KICK_TYPE;			
		public $BACKBONE_TRIALS;			
		public $MAX_CANDIDATES;
		public $MAX_SWAPS;
	
	public function __construct($CANDIDATE_SET_TYPE, $INITIAL_TOUR_ALGORITHM, $EXTRA_CANDIDATES, 
								$SEED, $sliderGAIN_CRITERION, $sliderBACKTRACKING, $sliderRESTRICTED_SEARCH,
								$MOVE_TYPE, $ASCENT_CANDIDATES, $INITIAL_PERIOD, $INITIAL_STEP_SIZE,
								$sliderSTOP_AT_OPTIMUM, $sliderSUBGRADIENT, $RUNS, $POPULATION_SIZE, 
								$MAX_TRIALS, $NONSEQUENTIAL_MOVE_TYPE, $PRECISION, $TIME_LIMIT,
								$TRACE_LEVEL, $sliderGAIN23, $sliderSUBSEQUENT_PATCHING, $KICKS, 
								$KICK_TYPE, $BACKBONE_TRIALS, $MAX_CANDIDATES, $MAX_SWAPS){

		$this->CANDIDATE_SET_TYPE		= $CANDIDATE_SET_TYPE ;	
		$this->INITIAL_TOUR_ALGORITHM	= $INITIAL_TOUR_ALGORITHM ;
		$this->EXTRA_CANDIDATES			= $EXTRA_CANDIDATES ;
		$this->SEED						= $SEED ;		
		$this->sliderGAIN_CRITERION		= $sliderGAIN_CRITERION ;
		$this->sliderBACKTRACKING		= $sliderBACKTRACKING ;	
		$this->sliderRESTRICTED_SEARCH	= $sliderRESTRICTED_SEARCH ;
		$this->MOVE_TYPE				= $MOVE_TYPE ;
		$this->ASCENT_CANDIDATES		= $ASCENT_CANDIDATES ;
		$this->INITIAL_PERIOD			= $INITIAL_PERIOD ;		
		$this->INITIAL_STEP_SIZE		= $INITIAL_STEP_SIZE ;	
		$this->sliderSTOP_AT_OPTIMUM	= $sliderSTOP_AT_OPTIMUM ;
		$this->sliderSUBGRADIENT		= $sliderSUBGRADIENT ;
		$this->RUNS						= $RUNS ;			
		$this->POPULATION_SIZE			= $POPULATION_SIZE ;
		$this->MAX_TRIALS				= $MAX_TRIALS ;	
		$this->NONSEQUENTIAL_MOVE_TYPE	= $NONSEQUENTIAL_MOVE_TYPE ;
		$this->PRECISION				= $PRECISION ;				
		$this->TIME_LIMIT				= $TIME_LIMIT ;				
		$this->TRACE_LEVEL				= $TRACE_LEVEL ;			
		$this->sliderGAIN23				= $sliderGAIN23 ;
		$this->sliderSUBSEQUENT_PATCHING= $sliderSUBSEQUENT_PATCHING ;
		$this->KICKS					= $KICKS ;				
		$this->KICK_TYPE				= $KICK_TYPE ;			
		$this->BACKBONE_TRIALS			= $BACKBONE_TRIALS ;			
		$this->MAX_CANDIDATES			= $MAX_CANDIDATES ;
		$this->MAX_SWAPS				= $MAX_SWAPS ;
	}
} 