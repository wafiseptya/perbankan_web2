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
            </div>
        </div>
    </div>
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
      <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <tr>
          <th width="30%">Nama Nasabah</th>
          <td>{{ $data->nama }}</td>
        </tr>
        <tr>
          <th>No Identitas</th>
          <td>{{ $data->no_identitas }}</td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td>{{ $data->jenis_kelamin }}</td>
        </tr>
        <tr>
          <th>No Rekening</th>
          <td>{{ $data->rekening->no_rekening }}</td>
        </tr>
        <tr>
          <th>Saldo</th>
          <td>{{ 'Rp. '.$data->rekening->saldo }}</td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>{{ $data->post_code.' - '.$data->alamat }}</td>
        </tr>
        <tr>
          <th>Tempat, Tanggal Lahir</th>
          <td>{{ $data->birth_place.', '.$data->birth_date }}</td>
        </tr>
        <tr>
          <th>Phone</th>
          <td>{{ $data->phone }}</td>
        </tr>
        <tr>
          <th>Ibu Kandung</th>
          <td>{{ $data->ibu_kandung }}</td>
        </tr>
        <tr>
          <th>Tanggal/Jam Pembuatan</th>
          <td>{{ $data->created_at->format('d F Y - H:i:s' ) }}</td>
        </tr>
      </table>
    </div>

@endsection