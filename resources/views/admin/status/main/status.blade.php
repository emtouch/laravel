@extends('admin')
@section('title')
	<title>Status</title>
@stop
@section('style')
	<style type="text/css">
	
	</style>
@stop
@section('contain')


  
          	
   	

<div class="col-md-12 col-sm-12 col-xs-12">
  <div style="border: 0px solid;">
     
       <div class="title_left col-md-6" style="border: 0px solid;">
        <a href="{{ asset('main/status/create.html') }}" class="btn btn-primary">New</a>
        </div>

        <div class="title_right col-md-6" style="border: 0px solid;">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div> 
  </div>
</div>





<div>&nbsp;{!! session('message') !!}</div>







<div class="col-md-12 col-sm-12 col-xs-12">


                <div class="x_panel">

                  <div class="x_title">
                    <h2>Table design <small>Custom design</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">ID </th>
                            <th class="column-title">Title </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Author</th>
                            <th class="column-title">Create </th>
                            <th class="column-title">Update </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                         @foreach($status as $st)

                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">{{ $st->status_id }}</td>
                            <td class=" ">{{ $st->status_title }}</td>
                            <td class=" ">{{ $st->status }}</td>
                            <td class=" ">{{ $st->status_author }}</td>
                            <td class=" ">{{ $st->created_at }}</td>
                            <td class=" ">{{ $st->updated_at }}</td>
                            <td class=" last">
                               <a class="btn btn-success btn-sm" href="{{ URL::to('/main/status')."/show/".$st->status_id }}"> View</a>
                               <a class="btn btn-primary btn-sm" href="{{ URL::to('/main/status')."/edit/".$st->status_id }}"> Edit</a>
                               <a class="btn btn-danger btn-sm" href="{{ URL::to('/main/status')."/delete/".$st->status_id }}"> Delete</a>

                            
                            </td>
                          </tr>
                          @endforeach
                        </tbody>

                      </table>

                      <div class="text-center" id="pagination">
							{!! $status->appends(['txtSearch'=> Request::get('txtSearch')])->links() !!}
						</div>
                    </div>
						
                  </div>
                </div>
              </div>





	














































@stop


@section('script')
	<script type="text/javascript">

	</script>	
@stop