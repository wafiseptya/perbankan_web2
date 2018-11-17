@extends('admin.default')

@section('page-header', 'Teller')
@section('content')

    <div class="row gap-20 masonry pos-r justify-content-center">
        <div class="masonry-sizer col-md-6"></div>
                <!-- #Toatl Visits ==================== -->
                <div class="masonry-item col-md-10 offset-md-1">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Setoran Tunai</h6>
                  <div class="mT-30">
                    <form>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="noRekening">no Rekening</label>
                          <input type="number" class="form-control" id="noRekening" placeholder="Nomor rekening" name="noRekening">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="nama">Nama</label>
                          <input type="email" class="form-control" id="nama" placeholder="Nama" name="nama">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md">
                          <label for="namaPenyetor">Nama Penyetor</label>
                          <input type="text" class="form-control" id="namaPenyetor" placeholder="Nama" name="namaPenyetor">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md">
                          <label for="jumlahSetoran">Jumlah Setoran</label>
                          <input type="number" class="form-control" id="jumlahSetoran" placeholder="Rp" name="jumlahSetoran">
                        </div>
                      </div>
                      <div class="form-group col-md-4">
                          <label for="identitas">Identitas</label>
                          <select id="identitas" class="form-control" name="identitas">
                            <option selected>KTP</option>
                            <option>SIM</option>
                            <option>NIS/NISN</option>
                            <option>PASSPOR</option>
                          </select>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md">
                          <label for="identitasB">Identitas</label>
                          <input type="number" class="form-control" id="identitasPenyetorB" placeholder="6240152858" name="identitasPenyetorB">
                        </div>
                      </div>
                      <div class="form-group col-md-4">
                          <label for="identitasPenyetor">Identitas Penyetor</label>
                          <select id="identitasPenyetor" class="form-control" name="identitasPenyetor">
                            <option selected>KTP</option>
                            <option>SIM</option>
                            <option>NIS/NISN</option>
                            <option>PASSPOR</option>
                          </select>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md">
                          <label for="identitasPenyetorB">Identitas Penyetor</label>
                          <input type="number" class="form-control" id="inputEmail4" placeholder="456662231" name="identitasPenyetorB">
                        </div>
                      </div>
                      <div class="form-row">
                        <?php $mytime = Carbon\Carbon::now();?>
                        <div class="form-group col-md-6">
                          <label class="fw-500">Tanggal & Waktu Setoran Tunai</label>
                          <div class="timepicker-input input-icon form-group">
                            <div class="input-group">
                              <div class="input-group-addon bgc-white bd bdwR-0">
                                <i class="ti-calendar"></i>
                              </div>
                              <input type="text" class="form-control bdc-grey-200 start-date" value="{{$mytime->toDateTimeString()}}"data-provide="datepicker">
                            </div>
                          </div>
                        </div>
                      </div
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
    </div>

@endsection
