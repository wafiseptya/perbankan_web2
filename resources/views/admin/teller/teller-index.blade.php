@extends('admin.teller')

@section('page-header', 'Teller')
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
                      <h6 class="lh-1">Total Transaksi</h6>
                  </div>
                  <div class="layer w-100">
                      <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                              <span id="sparklinedash"></span>
                          </div>
                          <div class="peer">
                              <span class="d-ib lh-0 va-m fw-600 fsz-xl bdrs-10em pX-25 pY-25 bgc-green-50 c-green-500">{{$items->count()}}</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- #Total Page Views ==================== -->
          <div class='col-md-3'>
              <div class="layers bd bgc-white p-20">
                  <div class="layer w-100 mB-10">
                      <h6 class="lh-1">Total Setoran</h6>
                  </div>
                  <div class="layer w-100">
                      <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                              <span id="sparklinedash2"></span>
                          </div>
                          <div class="peer">
                              <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-25 pY-25 bgc-purple-50 c-purple-500 fsz-xl">{{$items->where('jenis', 'setoran')->count()}}</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          
          <div class='col-md-3'>
              <div class="layers bd bgc-white p-20">
                  <div class="layer w-100 mB-10">
                      <h6 class="lh-1">Total Tarikan</h6>
                  </div>
                  <div class="layer w-100">
                      <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                              <span id="sparklinedash3"></span>
                          </div>
                          <div class="peer">
                              <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-25 pY-25 fsz-xl bgc-blue-50 c-blue-500">{{$items->where('jenis', 'tarikan')->count()}}</span>
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
                    <th>Jenis Transaksi</th>
				          	<th>Nominal</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis }}</td>
						            <td>{{ $item->nominal }}</td>
						            <td>{{ $item->created_at }}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route('teller.destroy', $item->id), 
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