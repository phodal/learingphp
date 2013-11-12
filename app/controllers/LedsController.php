<?php

class LedsController extends \BaseController {

    public $restful=true;

    protected $led;

	public function __construct(Leds $led)
	{
		$this->beforeFilter('auth');
        $this->beforeFilter('csrf', array('on' => 'post'));

	    $this->led = $led ;
	 }    

	public function index()
	{
		$leds = Leds::find(1);

		return View::make('leds.edit')
			->with('leds', $leds);
	}

	public function create()
	{
		$maxid=Leds::max('id');
		return View::make('leds.create')->with('maxid',$maxid);
	}


	public function store()
	{
		$rules = array(
			'led1'=>'required',
			'led2'=>'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('leds/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$nerd = new Leds;
			$nerd->led1			  = Input::get('led1');
			$nerd->led2	          = Input::get('led2');
			$nerd->save();

			// redirect
			Session::flash('message', 'Successfully created athome!');
			return Redirect::to('leds');
		}
	}


	public function show($id)
	{
		$myid=Leds::find($id);
        $maxid=Leds::where('id','=',$id)
						->select('id','led2','led1')
						->get();
	    return Response::json($maxid);
	}


	public function edit($id)
	{
		$leds = Leds::find($id);

		// show the edit form and pass the nerd
		return View::make('leds.edit')
			->with('leds', $leds);
	}


	public function update($id)
	{
		$rules = array(
			'led1'=>'required|',
			'led2'=>'required|'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('leds/' . $id . '/edit')
				->withErrors($validator);
		} else {
			// store
			$nerd = Leds::find($id);
			$nerd->led1			  = Input::get('led1');
			$nerd->led2           = Input::get('led2');
			$nerd->save();

			// redirect
			Session::flash('message', 'Successfully created athome!');
			return Redirect::to('leds');
		}
	}

	public function destroy($id)
	{
		// delete
		$athome =Leds::find($id);
		$athome->delete();
        if(is_null($athome))
        {
             return Response::json('Todo not found', 404);
        }
		// redirect
		Session::flash('message', 'Successfully deleted the nerd!');
		return Redirect::to('athome');
	}

}