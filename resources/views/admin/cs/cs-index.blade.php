@extends('admin.cs')

@section('page-header', 'Customer Service')
@section('content')

    <div class="row gap-20 masonry pos-r justify-content-center">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item  w-100">
          @if (session('alert'))
              <div class="alert alert-success">
                  {{ session('alert') }}
              </div>
          @endif
            <div class="row gap-20">
                <!-- #Toatl Visits ==================== -->
          <!-- #Toatl Visits ==================== -->
          <div class='col-md-3 mB-20'>
              <div class="layers bd bgc-white p-20">
                  <div class="layer w-100 mB-10">
                      <h6 class="lh-1">Total Nasabah</h6>
                  </div>
                  <div class="layer w-100">
                      <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                              <span id="sparklinedash"></span>
                          </div>
                          <div class="peer">
                              <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-25 pY-25 bgc-green-50 c-green-500 fsz-xl">{{$items->count()}}</span>
                          </div>
                      </div>
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
                    <th>Nama</th>
                    <th>Alamat</th>
				          	<th>Phone</th>
				          	<th>No. Rekening</th>
                    <th>Waktu Buat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td><a href="{{ route('cs.show', $item->id) }}">{{ $item->nama }}</a></td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->phone }}</td>
						            <td>{{ $item->rekening->no_rekening }}</td>
						            <td>{{ $item->created_at }}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route('cs.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                <li class="list-inline-item">
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route('cs.destroy', $item->id), 
                                        'method' => 'DELETE',
                                        ]) 
                                    !!}

                                        <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>
                                        
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>

@endsection