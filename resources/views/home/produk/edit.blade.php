@extends ('layouts.master');
@section('tittle', 'produk');
@section ('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data produk</h3>
                         <a class="btn btn-warning" href="/produk">Kembali</a>
                        </div>
                        <div class="card-body">
                           <form action="/produk/{{$produk->id}}/update" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Gambar</label>
                            <input
                                type="file"
                                class="form-control"
                                name="gambar"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                                />
                                @error('gambar')
                                <div class="alert alert-danger mt-2">
                                {{$message}}
                                </div>
                                @enderror
                        <div class="mb-3">
                            <label for="" class="form-label">Nama produk</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama_produk"
                                id=""
                                value="{{$produk->nama_produk}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            @error('nama_produk')
                            <div class="alert alert-danger mt-2">
                            {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Harga</label>
                            <input
                                type="number"
                                class="form-control"
                                name="harga"
                                id=""
                                value="{{$produk->harga}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            @error('harga')
                            <div class="alert alert-danger mt-2">
                            {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Stok</label>
                            <input
                                type="number"
                                class="form-control"
                                name="stok"
                                id=""
                                value="{{$produk->stok}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            @error('stok')
                            <div class="alert alert-danger mt-2">
                            {{$message}}
                            </div>
                            @enderror
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