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
                    <form>
                      <div class="form-row">
					  <div class="form-group col-md-12">
						<label for="inputName">Nama</label>
						<input type="text" class="form-control" id="inputName" placeholder="Nama">
					  </div>
                        <div class="form-group col-md-6">
                          <label for="inputNoRek">Nomor Rekening</label>
                          <input type="number" class="form-control" id="inputNoRek" placeholder="Nomor Rekening">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword">Pin</label>
                          <input type="password" class="form-control" id="inputPassword" placeholder="Pin">
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="inputTarikan">Jumlah Tarikan</label>
                        <input type="number"  class="form-control" id="inputTarikan" placeholder="Rp">
                      </div>
                      <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    </form>
                  </div>
                </div>
              </div>
    </div>

@endsection