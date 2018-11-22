@extends('admin.default')

@section('page-header')
    Users <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')


@if (session('alert'))
<div class="alert alert-success">
    {{ session('alert') }}
</div>
@endif
<div class="row">
    <div class='col-md-3 mB-20'>
        <div class="layers bd bgc-white p-20">
            <div class="layer w-100 mB-10">
                <h6 class="lh-1">Total Users</h6>
            </div>
            <div class="layer w-100">
                <div class="peers ai-sb fxw-nw">
                    <div class="peer peer-greed">
                        <span id="sparklinedash"></span>
                    </div>
                    <div class="peer">
                        <span class="d-ib lh-0 va-m fsz-xl fw-600 bdrs-10em pX-25 pY-25 bgc-green-50 c-green-500">{{$items->count()}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
					<th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td><a href="{{ route('admin.edit', $item->id) }}">{{ $item->name }}</a></td>
                        <td>{{ $item->username }}</td>
						<td>{{ $item->role }}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route('admin.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                <li class="list-inline-item">
                                    @if (auth()->user()->id != $item->id)
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route('admin.destroy', $item->id), 
                                        'method' => 'DELETE',
                                        ]) 
                                    !!}

                                        <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>
                                        
                                    {!! Form::close() !!}
                                        
                                    @endif
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>

@endsection