<div class="modal  fade shadow animated--grow-in row" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="user" action="/member" method="post">
                    @csrf
                    <label for="title">Kontak</label>
                    <div class="form-group ">
                        <input type="text" name="name"
                            class="form-control form-control-user @error('name') is-invalid @enderror" placeholder="Nama"
                            autofocus value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feadback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <input type="text" name="email"
                            class="form-control form-control-user @error('email') is-invalid @enderror"
                            placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feadback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <input type="number" name="phone"
                            class="form-control form-control-user @error('phone') is-invalid @enderror"
                            placeholder="Nomor Hp" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="invalid-feadback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <hr>
                    <label for="title">Alamat</label>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-1 mb-sm-0">
                            <input type="text" name="village"
                                class="form-control form-control-user @error('village') is-invalid @enderror"
                                placeholder="Desa / Kelurahan" value="{{ old('village') }}">
                            @error('village')
                                <div class="invalid-feadback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="subdistrict"
                                class="form-control form-control-user @error('subdistrict') is-invalid @enderror"
                                placeholder="Kecamatan" value="{{ old('subdistrict') }}">
                            @error('subdistrict')
                                <div class="invalid-feadback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-1 mb-sm-0">
                            <input type="text" name="city"
                                class="form-control form-control-user @error('city') is-invalid @enderror"
                                placeholder="Kota / Kabupaten " value="{{ old('city') }}">
                            @error('city')
                                <div class="invalid-feadback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="province"
                                class="form-control form-control-user @error('province') is-invalid @enderror"
                                placeholder="Provinsi" value="{{ old('province') }}">
                            @error('province')
                                <div class="invalid-feadback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-1 mb-sm-0">
                            <input type="text" name="code"
                                class="form-control form-control-user @error('code') is-invalid @enderror"
                                placeholder="Kode Pos" value="{{ old('code') }}">
                            @error('code')
                                <div class="invalid-feadback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="detail"
                            class="form-control form-control-user @error('detail') is-invalid @enderror"
                            placeholder="Detail Alamat ( Nama Jalan,Gedung,No Rumah,Blok/Unit no, Patokan )"
                            value="{{ old('detail') }}">
                        @error('detail')
                            <div class="invalid-feadback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary btn-user ">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
