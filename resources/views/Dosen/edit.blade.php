@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Edit Data Dosen') }}</div>

                <div class="card-body">
                    <form action="/dosen/{{$dosen->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nidn" class="form-label">NIDN</label>
                            <input type="text" value={{$dosen->nidn}} class="form-control" id="nidn" name="nidn" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Dosen</label>
                            <input type="text" value={{$dosen->nama}} class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value={{$dosen->email}} class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="rumpun"  class="form-label">Rumpun</label>
                            <select name="rumpun" id="rumpun">
                                <option value="{{$dosen->rumpun}}">{{$dosen->rumpun}}</option>
                                <option value="Komputer">Komputer</option>
                                <option value="Bisnis">Bisnis</option>
                                <option value="Sekretaris">Sekretaris</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="Marketing">Marketing</option>
                            </select>
                        </div>

                         <div class="mb-3">
                            <label for="nohp" class="form-label">No Handphone</label>
                            <input type="nohp" value={{$dosen->nohp}} class="form-control" id="nohp" name="nohp" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
