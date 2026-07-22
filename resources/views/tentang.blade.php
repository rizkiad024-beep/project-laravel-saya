@extends('layouts.app')

@section('title','Tentang Kami - Diskominfo')

@section('content')
    <h1>Tentang Kami</h1>
    <div class="section">
        <p>Gunakan form ini untuk menambahkan info terbaru mengenai Diskominfo Provinsi. Field gambar, alamat, IG, dan WhatsApp bersifat opsional dan menggunakan placeholder bila tidak diisi.</p>

        <form action="{{ route('tentang.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div style="display:flex; gap:12px; flex-wrap:wrap">
                <div style="flex:1">
                    <label>Judul</label>
                    <input class="form-input" type="text" name="title" placeholder="Judul info" value="{{ old('title') }}">
                    @if($errors->first('title'))<div class="small" style="color:var(--danger); margin-top:6px">{{ $errors->first('title') }}</div>@endif
                </div>
                <div style="flex:1">
                    <label>Alamat</label>
                    <input class="form-input" type="text" name="alamat" placeholder="Contoh: Jalan Contoh No.123" value="{{ old('alamat') }}">
                    @if($errors->first('alamat'))<div class="small" style="color:var(--danger); margin-top:6px">{{ $errors->first('alamat') }}</div>@endif
                </div>
            </div>
            <div style="margin-top:12px">
                <label>Konten</label>
                <textarea class="form-input" name="content" rows="6" placeholder="Isi informasi singkat...">{{ old('content') }}</textarea>
                @if($errors->first('content'))<div class="small" style="color:var(--danger); margin-top:6px">{{ $errors->first('content') }}</div>@endif
            </div>
            <div style="display:flex; gap:12px; margin-top:12px">
                <div style="flex:1">
                    <label>Link Instagram</label>
                    <input class="form-input" type="url" name="ig_link" placeholder="https://instagram.com/akun" value="{{ old('ig_link') }}">
                    @if($errors->first('ig_link'))<div class="small" style="color:var(--danger); margin-top:6px">{{ $errors->first('ig_link') }}</div>@endif
                </div>
                <div style="flex:1">
                    <label>WhatsApp (nomor, tanpa +)</label>
                    <input class="form-input" type="text" name="whatsapp" placeholder="6281234567890" value="{{ old('whatsapp') }}">
                    @if($errors->first('whatsapp'))<div class="small" style="color:var(--danger); margin-top:6px">{{ $errors->first('whatsapp') }}</div>@endif
                </div>
            </div>

            <div style="margin-top:12px">
                <label>Gambar (opsional)</label>
                <input type="file" name="image" accept="image/*">
                @if($errors->first('image'))<div class="small" style="color:var(--danger); margin-top:6px">{{ $errors->first('image') }}</div>@endif
            </div>

            <div style="margin-top:12px; text-align:right">
                <button class="btn-primary" type="submit">Simpan Info</button>
            </div>
        </form>
    </div>

    <section style="margin-top:18px">
        <h2>Fitur</h2>
        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:12px">
            <div style="background:#F1F5F9; padding:12px; border-radius:8px">Form kontak dinamis</div>
            <div style="background:#F1F5F9; padding:12px; border-radius:8px">Galeri / gambar placeholder</div>
            <div style="background:#F1F5F9; padding:12px; border-radius:8px">Pengalihan ke WhatsApp, Maps, IG</div>
            <div style="background:#F1F5F9; padding:12px; border-radius:8px">Halaman info terpusat</div>
        </div>
    </section>
@endsection
