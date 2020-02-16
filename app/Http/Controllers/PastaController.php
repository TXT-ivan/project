<?php

namespace App\Http\Controllers;

use App\Requests\PastaCreate;
use http\Url;
use Illuminate\Http\Request;
use App\Services\Pasta\PastaService;


class PastaController extends Controller
{
    protected $pasta_service;
    public function __construct(PastaService $service)
    {
        $this->pasta_service = $service;
    }

    public function index()
    {
        return view('index',['pasts' =>  $this->pasta_service->get10pasts()] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create(PastaCreate $request)
    {
        $curent_date = date('Y-m-d H:i:s');

        $pasta_data = [
            "pasta_name"=>$request->pasta_name,
            "text"=>$request->text,
            "access_type"=>$request->access_type,
            "active_time"=>date("Y.m.d H:i:s", strtotime($request->active_time, strtotime($curent_date)))
        ];
        //$this->show($this->pasta_service->create_pasta($pasta_data));
        return redirect()->route('pasta.show', $this->pasta_service->create_pasta($pasta_data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show($hash)
    {
        $pasta = $this->pasta_service->get_pasta($hash);
        if($pasta->active_time > date('Y-m-d H:i:s')) {
            return view('pasta', ['text' => $pasta->text,'pasta_name' => $pasta->pasta_name , 'pasts' => $this->pasta_service->get10pasts()]);
        }
        else {
            return view('dateout',['pasts' => $this->pasta_service->get10pasts()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
