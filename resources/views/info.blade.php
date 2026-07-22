@extends('layouts.app')

@section('title','Info Terbaru - Diskominfo')

@section('content')
    <a href="{{ url('/') }}">← Kembali</a>
    <div class="section" style="margin-top:12px">
        <h1>{{ $info->title ?? 'Info Terbaru' }}</h1>
        @if($info->image_path)
            <img src="{{ str_starts_with($info->image_path,'public/') ? asset(str_replace('public/','storage/',$info->image_path)) : asset($info->image_path) }}" alt="Gambar" style="max-width:100%; border-radius:8px">
        @else
            <div style="background:#EEF2FF; padding:24px; border-radius:8px; text-align:center">[placeholder gambar]</div>
        @endif

        <p style="white-space:pre-wrap">{{ $info->content ?? 'Tidak ada konten tambahan.' }}</p>

        <div style="margin-top:12px">
            <strong>Alamat:</strong> {{ $info->alamat ?? '-' }}
        </div>
        <div style="margin-top:8px">
            <a href="{{ $info->ig_link ?? '#' }}" target="_blank">Buka Instagram</a> ·
            <a href="{{ $info->whatsapp ? ('https://wa.me/'.ltrim($info->whatsapp,'+')) : '#' }}" target="_blank">Chat WhatsApp</a>
        </div>
    </div>
@endsection
