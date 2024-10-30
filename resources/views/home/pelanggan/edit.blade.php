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
                            <h3>Halaman Edit Data pelanggan</h3>
                         <a class="btn btn-warning" href="/pelanggan">Kembali</a>
                        </div>
                        <div class="card-body">
                           <form action="/pelanggan/{{$pelanggan->id}}/update" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama pelanggan</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama_pelanggan"
                                id=""
                                value="{{$pelanggan->nama_pelanggan}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <input
                                type="text"
                                class="form-control"
                                name="alamat"
                                id=""
                                value="{{$pelanggan->alamat}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nomor Telepon</label>
                            <input
                                type="number"
                                class="form-control"
                                name="nomor_telepon"
                                id=""
                                value="{{$pelanggan->nomor_telepon}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection