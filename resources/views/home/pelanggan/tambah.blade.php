@extends ('layouts.master');
@section('tittle', 'pelanggan');
@section ('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data pelanggan</h3>
                         
                        </div>
                        <div class="card-body">
                           <form action="/pelanggan/simpan" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama pelanggan</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama_pelanggan"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <input
                                type="alamat"
                                class="form-control"
                                name="alamat"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nomor Telepon</label>
                            <input
                                type="nomor_telepon"
                                class="form-control"
                                name="nomor_telepon"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <button type="submit" class="btn btn-primary">simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection