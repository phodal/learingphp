<?php

class AthomesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public $restful=true;

    protected $athome;

	public function __construct(Athomes $athome)
	{
	    $this->athome = $athome ;
	 }

    public $rules=array(
    	'id'=>'required',
    	'led1'=>'required',
    );
    

	public function index()
	{
		$maxid=Athomes::all();
	    return Response::json($maxid);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$maxid=Athomes::max('id');
		return View::make('athome.create')->with('maxid',$maxid);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$myid=Athomes::find($id);
        $maxid=Athomes::where('id','=',$id)
						->select('id','temperature','sensors1','sensors2','led1')
						->get();
	    return Response::json($maxid);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}