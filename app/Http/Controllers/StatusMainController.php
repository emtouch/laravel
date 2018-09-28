<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tbl_status;
/*




*/
class StatusMainController extends Controller
{

    private $status, $date, $author, $limit = 5;

    public function __construct(Tbl_status $status){

        $this->status = $status;

        date_default_timezone_set( 'Asia/Phnom_Penh' );
        $this->date = date ( "Y-m-d H:i:s" );

        //die($this->status);
       // var_dump($this->status->all());

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $status = $this->status->orderBy('status_id', 'desc')->paginate($this->limit);
        //var_dump($status);
        return view('admin/status/main/status', compact('status'));

       // return view('test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin/status/main/add_status');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->status->status_title         = $request->txtTitle;
        $this->status->status_description   = $request->txtDescription;
        $this->status->status_author        = 'Admin';
        $this->status->created_at           = $this->date;
        $this->status->updated_at           = $this->date;
        $this->status->save();

        $request->session()->flash('message','<div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Insert Success !</strong>
                                    </div>
                                    ');

        return back();
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = preg_replace ('#[^0-9]#', '', $id);
        if($id != "" && !empty($id)){

            $status = $this->status->where('status_id', $id)->first();

            if($status){
                return view('admin.status.main.view_status', compact('status'));
            }
        }

        return redirect('main/status.html');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = preg_replace ('#[^0-9]#', '', $id);
        if($id != "" && !empty($id)){

            $status = $this->status->where('status_id', $id)->first();

            if($status){
                return view('admin.status.main.edit_status', compact('status'));
            }
        }

        return redirect('main/status.html');    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        

         $id = preg_replace ('#[^0-9]#', '', $request->txtId);

         var_dump($id);
        if($id != "" && !empty($id)){
            // Update Processing

    $this->status->where('status_id', $id)
                 ->update([

                    'status_title'            => $request->txtTitle,
                     'status_description'   => $request->txtDescription,
                     'status'               => $request->txtStatus,
                     'status_author'        => 'Admin',
                     'updated_at'           => $this->date
                  ]);

            $request->session()->flash('message','<div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Update Success !</strong>
                                    </div>
                                    ');
            return back();
            
        }else{

            return redirect('main/status.html');
        }    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
 
    $id = preg_replace ('#[^0-9]#', '', $id);
       if($id != "" && !empty($id)){

               $this->status->where('status_id', $id)->delete();

                $request->session()->flash('message','<div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Delete Success !</strong>
                                    </div>
                                    ');
                   return back();
        }else{

        return redirect('main/status.html');
        }  
    }
}
