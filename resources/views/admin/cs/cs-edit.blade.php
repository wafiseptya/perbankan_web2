@extends('admin.cs')

@section('page-header', 'Customer Service')
@section('content')

    <div class="row gap-20 masonry pos-r justify-content-center">
        <div class="masonry-sizer col-md-6"></div>
                <!-- #Toatl Visits ==================== -->
        <div class="masonry-item col-md-10 offset-md-1">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Pembuatan Nasabah Baru</h6>
              <div class="mT-30">
                  @if (session('alert'))
                      <div class="alert alert-danger">
                          {{ session('alert') }}
                      </div>
                  @endif
                <form method="POST" action="{{ route('cs.store') }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputName">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputName">No Identitas</label>
                      <input type="number" class="form-control" id="no_identitas" name="no_identitas" placeholder="Nomor Identitas">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputName">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputName">Kode Pos</label>
                      <input type="text" class="form-control" id="post_code" name="post_code" placeholder="Kode Pos">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputName">Nomor Telfon</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Nomor Telfon">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputName">Tempat Lahir</label>
                      <input type="text" class="form-control" id="post_code" name="birth_place" placeholder="Kota Asal Kelahiran">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputName">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="birth_date" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputName">Jenis Kelamin</label>
                      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputName">Nama Ibu Kandung</label>
                      <input type="text" class="form-control" name="ibu_kandung" placeholder="Nama Lengkap Ibu Kandung">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputName">Pendapatan</label>
                      <select name="pendapatan" id="pendapatan" class="form-control">
                        <option value="value1">< Rp 5 Juta</option>
                        <option value="value2">Rp 5 Juta - Rp 20 Juta</option>
                        <option value="value3">Rp 20 Juta - Rp 50 Juta</option>
                        <option value="value4">> Rp 50 Juta</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputName">Pengeluaran</label>
                      <select name="pengeluaran" id="pengeluaran" class="form-control">
                        <option value="value1">< Rp 5 Juta</option>
                        <option value="value2">Rp 5 Juta - Rp 20 Juta</option>
                        <option value="value3">Rp 20 Juta - Rp 50 Juta</option>
                        <option value="value4">> Rp 50 Juta</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
    </div>

@endsection
