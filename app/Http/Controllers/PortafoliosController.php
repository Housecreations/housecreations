<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Portafolio;

use App\Http\Requests\PortafolioRequest;

use Laracasts\Flash\Flash;

class PortafoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolios = Portafolio::orderBy('id', 'DESC')->simplePaginate(6);
        
        return view('admin.welcome', ['portafolios' => $portafolios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portafolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortafolioRequest $request)
    {
         Portafolio::savePortafolio($request);
        
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portafolio = Portafolio::find($id);
        
        return view("portafolios.edit", ["portafolio" => $portafolio]);
        
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
         $portafolio = Portafolio::find($id);
        $portafolio->fill($request->all());
        
        
         if($request->file('image')){
            
                $file = $request->file('image');
                $name = 'housecreations_' .time(). "." . $file->getClientOriginalExtension();
                $path = 'images/portafolio/';
                $file->move($path, $name);
             
                unlink(public_path()."\images\portafolio\\".$portafolio->image_url);
             
                $portafolio->image_url = $name;
        }
        
       
        
        $portafolio->save();
        
        Flash::success('La página se editó con éxito');
        
    
        return redirect('/admin');
      
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        $portafolio = Portafolio::find($id);
        unlink(public_path()."\images\portafolio\\".$portafolio->image_url);
        $portafolio->delete();
        
        Flash::success("Página eliminada");
        return back();
    }
}
