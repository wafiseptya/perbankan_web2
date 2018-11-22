@extends('admin.teller')
@section('page-header', 'Teller')
@section('content')
     <div class="row gap-20 masonry pos-r justify-content-center">
        <div class="masonry-sizer col-md-6"></div>
                <!-- #Toatl Visits ==================== -->
        <div class="masonry-item col-md-10 offset-md-1">
          <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Penarikan</h6>
            <div class="mT-30">
                @if (session('alert'))
                    <div class="alert alert-danger">
                        {{ session('alert') }}
                    </div>
                @endif
              <form method="POST" action="{{ route('teller.update') }}">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                <div class="form-row">
                  <div class="form-group col-md-12">
                  <label for="inputName">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputNoRek">Nomor Rekening</label>
                    <input type="number" class="form-control" id="no_rekening" name="no_rekening" placeholder="Nomor Rekening" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword">Pin</label>
                    <input type="password" class="form-control" id="pin" name="pin" placeholder="Pin" required>
                    <input type="hidden" id="jenis" name="jenis" value="tarikan" placeholder="Pin">
                  </div>
                </div>
                <div class="form-group ">
                  <label for="inputTarikan">Nominal Tarikan</label>
                  <input type="number"  class="form-control" id="nominal" name="nominal" placeholder="Rp" required>
                </div>
                <button type="submit" class="btn btn-primary">Konfirmasi</button>
              </form>
            </div>
          </div>
        </div>
    </div>
 @endsection 
