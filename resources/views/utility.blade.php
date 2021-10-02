@extends('template/template')


@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
    <div class="container">
        <div class="card shadow mb-6 bg-white">
            <div class="card-body justify-content-center">
                <div class="form-inline">
                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm btn-block">Buat PJJP Utility</button>

                </div>
                <div class="table-responsive">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 10%;">Aksi</th>
                                <th style="width: 25%;">Nomor PJPP</th>
                                <th>Status</th>
                                <th>Nomor Seri</th>
                                <th>Kode Pelanggan</th>
                                <th>Nama Pelanggan</th>
                                <th>Kode Gudang</th>
                                <th>Nama Gudang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <button class="btn btn-success btn-sm"><i class="fa fa-check"></i> </button>
                                    <button style="width: 43%;" class="btn btn-info btn-sm"><i class="fa fa-info"></i></button>
                                </td>
                                <td>PJPP-K/2021/03/002/003356</td>
                                <td><label class="badge badge-primary">Selesai</label></td>
                                <td></td>
                                <td>G001</td>
                                <td>DC JKT 1</td>
                                <td>G001</td>
                                <td>DC JAKARTA</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal hide fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg text-white" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat PJPP Utility</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/utility" name="post" id="posting">
                    @csrf
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="">
                                <label for="exampleInputEmail1">Utility<span class="text-danger"> *</span></label>
                                <select name="utility" class="selectpicker form-control" id="number" data-container="body" data-live-search="true" title="Select Utility" data-hide-disabled="true">
                                    <option value="">Select Utility</option>
                                    @foreach($utility as $uti)
                                    <option value="{{ $uti->kode_unit }}">{{ $uti->unit . " - ". $uti->kode_unit }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <span class="text-danger small error-text utility_error"></span>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Deskripsi<span class="text-danger"> *</span></label>
                                <textarea placeholder="Deskripsi PJPP" rows="5" class="form-control" id="deskripsi" name="deskripsi"></textarea>
                                <span class="text-danger small error-text deskripsi_error"></span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pelanggan<span class="text-danger"> *</span></label>
                                <select name="pelanggan" id="pelanggan" data-container="body" data-live-search="true" title="Pilih Pelanggan" data-hide-disabled="true" class="form-control selectpicker">
                                    <option value=""> Pilih Pelanggan</option>
                                    @foreach($pelanggan as $plg)
                                    <option value="{{ $plg->kode_dc }}">{{ $plg->pelanggan . " - " . $plg->kode_dc }}</option>
                                    @endforeach
                                    <option value="LALA">LAIN-LAIN</option>
                                </select>
                                <span class="text-danger small error-text pelanggan_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">NIK Pemakai</label>
                                <input type="text" name="nik_pemakai" id="nik_pemakai" class="form-control" id="exampleInputPassword1" placeholder="nik pengguna">
                                <span class="text-danger small error-text nik_pemakai_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Pemakai</label>
                                <input type="text" name="nama_pemakai" id="nama_pemakai" class="form-control" id="exampleInputPassword1" placeholder="nama pemakai">
                                <span class="text-danger small error-text nama_pemakai_error"></span>
                            </div>
                        </div>
                    </div>
                    <h4 class="ml-3">Daftar Refarasi</h4>
                    <hr>
                    <div class="row">
                        <table class="table text-white">
                            <th>#</th>
                            <th>Tipe Kerusakan</th>
                            <th>SLA</th>
                            <th>Penjelasan</th>
                            <tr>
                                <td>1</td>
                                <td>
                                    <select data-container="body" data-live-search="true" title="Select Tipe" data-hide-disabled="true" name="tipe_rusak" id="tipe_rusak" class="form-control">
                                        <option value="" selected>Select Tipe</option>
                                        <option>Rutin</option>
                                        <option>Urgent</option>
                                    </select>
                                    <span class="text-danger small error-text tipe_rusak_error"></span>

                                </td>
                                <td>
                                    <input type="hidden" name="sla_jam" id="sla_jam">
                                    <span id="jamSLA1"> - </span>
                                </td>
                                <td>
                                    <input type="text" placeholder="penjelasan" id="penjelasan" name="penjelasan" class="form-control">
                                    <span class="text-danger small error-text penjelasan_error"></span>
                                </td>
                            </tr>
                            <tfoot>
                                <td colspan="2">
                                    <label>Total SLA : <span id="jamSLA"></span> Jam</label>
                                </td>
                                <td colspan="1">
                                    <label>Prioritas : Utility - <span id="prioritas"></span></label>
                                </td>
                                <td></td>
                            </tfoot>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="col-lg-6 btn btn-danger"><i class="fa fa-user"></i> Reset</button>
                        <button type="submit" class="col-lg-6 btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </div>
                    <!-- <div class="form-group mt-3" id="process" style="display:none;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div> -->
            </div>

            </form>
        </div>
        @endsection