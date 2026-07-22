@extends('layouts.app')

@section('title','Diskominfo - Profil')

@push('head')
    <style>
        .hero {
            background: linear-gradient(145deg, #2563EB 0%, #8B5CF6 45%, #F43F5E 100%);
            border-radius: 30px;
            padding: 50px 40px;
            color: #ffffff;
            position: relative;
            overflow: hidden;
            margin-bottom: 28px;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: rgba(255,255,255,0.16);
            top: -80px;
            right: -80px;
            filter: blur(18px);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 32px;
            align-items: center;
        }

        .hero-title {
            margin: 0 0 18px;
            font-size: clamp(2.6rem, 3.5vw, 4rem);
            line-height: 1.05;
            letter-spacing: -0.04em;
        }

        .hero-text {
            max-width: 44rem;
            color: rgba(255,255,255,0.9);
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .hero-eyebrow {
            text-transform: uppercase;
            letter-spacing: 0.22em;
            font-weight: 700;
            color: rgba(255,255,255,0.95);
            margin-bottom: 16px;
            font-size: 0.8rem;
        }

        .hero-actions {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
            margin-top: 26px;
        }

        .btn-ghost {
            color: #ffffff;
            border: 1px solid rgba(255,255,255,0.8);
            background: transparent;
            border-radius: 999px;
            padding: 12px 24px;
            text-decoration: none;
            font-weight: 600;
        }

        .hero-card {
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.18);
            border-radius: 24px;
            padding: 24px;
            min-height: 140px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 32px 80px rgba(15,23,42,0.12);
        }

        .hero-card strong {
            display: block;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .hero-card span {
            color: rgba(255,255,255,0.85);
            line-height: 1.7;
        }

        .feature-grid {
            display: grid;
            gap: 18px;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            margin-top: 20px;
        }

        .feature-card {
            background: #ffffff;
            border-radius: 22px;
            padding: 24px;
            box-shadow: 0 20px 45px rgba(15,23,42,0.08);
            border: 1px solid rgba(14, 165, 233, 0.1);
        }

        .feature-card h3 {
            margin-top: 0;
            margin-bottom: 12px;
            font-size: 1.15rem;
        }

        .feature-card p {
            margin: 0;
            color: #475569;
            line-height: 1.7;
        }

        .info-panel {
            display: grid;
            gap: 24px;
            grid-template-columns: 1fr 1fr;
            align-items: stretch;
        }

        .card-panel {
            background: #ffffff;
            border-radius: 26px;
            border: 1px solid #E6EEF8;
            padding: 26px;
            box-shadow: 0 24px 40px rgba(15,23,42,0.06);
        }

        .card-panel h2 {
            margin-top: 0;
            margin-bottom: 12px;
        }

        .pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(37,99,235,0.08);
            color: #1D4ED8;
            font-weight: 700;
            font-size: 0.95rem;
            margin-bottom: 18px;
        }

        .info-detail {
            display: grid;
            gap: 18px;
        }

        .info-detail p {
            margin: 0;
            color: #475569;
            line-height: 1.75;
        }

        .info-meta {
            display: grid;
            gap: 10px;
            margin-top: 18px;
        }

        .info-meta span {
            color: #334155;
            font-weight: 600;
        }

        .info-meta a {
            color: #2563EB;
            text-decoration: none;
        }

        .table-wrap {
            overflow-x: auto;
        }

        .modern-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 10px;
        }

        .modern-table thead th {
            text-align: left;
            color: #475569;
            font-weight: 700;
            padding: 14px 16px;
        }

        .modern-table tbody tr {
            background: #F8FBFF;
        }

        .modern-table td {
            padding: 16px;
            border: none;
            color: #334155;
        }

        .modern-table a {
            color: #2563EB;
            font-weight: 600;
        }

        .section-divider {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .section-divider h2 {
            margin: 0;
        }

        .accent-tag {
            display: inline-flex;
            padding: 8px 14px;
            border-radius: 999px;
            background: #EFF6FF;
            color: #1D4ED8;
            font-weight: 700;
            font-size: 0.95rem;
        }

        @media (max-width: 900px) {
            .hero-grid,
            .info-panel {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush

@section('content')
    <div class="hero">
        <div class="hero-grid">
            <div>
                <p class="hero-eyebrow">Dinas Komunikasi & Informatika</p>
                <h1 class="hero-title">Sajikan layanan publik digital yang cepat, aman, dan inspiratif.</h1>
                <p class="hero-text">Homepage resmi Kominfo Provinsi Bangka Belitung dengan informasi terbaru, kontak resmi, website, dan jam layanan kantor dalam tampilan modern berwarna.</p>
                <div class="hero-actions">
                    <a href="{{ route('info.latest') }}" class="btn btn-primary">Lihat Info Terbaru</a>
                </div>
            </div>

            <div class="feature-grid">
                <div class="hero-card">
                    <strong>Responsif & Berwarna</strong>
                    <span>Desain modern dengan gradien, bayangan halus, dan kartu yang rapi untuk pengalaman pengguna profesional.</span>
                </div>
                <div class="hero-card">
                    <strong>Akses Cepat</strong>
                    <span>Informasi, Maps, WhatsApp, dan Instagram tersedia langsung dari halaman utama.</span>
                </div>
            </div>
        </div>
    </div>

    <section class="feature-grid">
        <div class="feature-card">
            <h3>Info Terkini</h3>
            <p>Dapatkan ringkasan berita komunikasi, acara digital, dan pengumuman langsung dari halaman ini.</p>
        </div>
        <div class="feature-card">
            <h3>Kontak Resmi Kominfo Babel</h3>
            <p>🌐 Website resmi: <strong><a href="https://kominfo.babelprov.go.id" target="_blank" style="color:#2563EB; text-decoration:none;">kominfo.babelprov.go.id</a></strong>.</p>
            <p>📷 Instagram resmi: <strong><a href="https://www.instagram.com/diskominfo_babel?igsh=MWw4bnZxbTl6b2N5MA==" target="_blank" style="color:#2563EB; text-decoration:none;">@diskominfo_babel</a></strong>.</p>
            <p>📞 Telepon resmi: <strong>(0717) 4262141</strong>.</p>
        </div>
        <div class="feature-card">
            <h3>Jam Layanan</h3>
            <p>⏰ Senin 07.30–16.00</p>
            <p>⏰ Selasa 07.30–16.00</p>
            <p>⏰ Rabu 07.30–16.00</p>
            <p>⏰ Kamis 07.30–16.00</p>
            <p>⏰ Jumat 08.30–16.30</p>
            <p>❌ Sabtu tutup</p>
            <p>❌ Minggu tutup</p>
        </div>
    </section>

    <section class="info-panel">
        <div class="card-panel">
            <div class="section-divider">
                <h2>Info Terbaru</h2>
                <span class="accent-tag">Ringkas & Aktual</span>
            </div>

            @if(isset($info) && $info)
                <div class="info-detail">
                    <p class="pill">{{ $info->title ?? 'Info Terbaru' }}</p>
                    <p>{{ $info->content ?? 'Tidak ada deskripsi tersedia, silakan tambahkan informasi terbaru melalui halaman Tentang Kami.' }}</p>
                </div>
            @else
                <p>Tidak ada info terbaru yang tersedia. Silakan tambahkan informasi lewat halaman <a href="{{ route('tentang') }}">Tentang Kami</a>.</p>
            @endif
        </div>

        <div class="card-panel">
            <div class="section-divider">
                <h2>Aksi Cepat</h2>
                <span class="accent-tag">Langsung Jalan</span>
            </div>
            <div class="table-wrap">
                <table class="modern-table">
                    <thead>
                        <tr>
                            <th>Label</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Info</td>
                            <td><a href="{{ route('info.latest') }}">Lihat info terbaru</a></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                @if(isset($info) && $info && $info->alamat)
                                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($info->alamat) }}" target="_blank">Buka di Maps</a>
                                @else
                                    Belum tersedia
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td>
                                @if(isset($info) && $info && $info->ig_link)
                                    <a href="{{ $info->ig_link }}" target="_blank">Buka Instagram</a>
                                @else
                                    Belum tersedia
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>WhatsApp</td>
                            <td>
                                @if(isset($info) && $info && $info->whatsapp)
                                    <a href="https://wa.me/{{ ltrim($info->whatsapp,'+') }}" target="_blank">Chat via WhatsApp</a>
                                @else
                                    Belum tersedia
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="margin-top:18px; color:#64748B;">Akses ini memudahkan pengguna untuk langsung menemukan layanan penting tanpa harus berpindah halaman.</p>
        </div>
    </section>

    <section class="feature-grid">
        <div class="feature-card">
            <h3>Dashboard Modern</h3>
            <p>Homepage sekarang tampil lebih berwarna, profesional, dan mudah dinavigasi.</p>
        </div>
        <div class="feature-card">
            <h3>Fleksibel dan Responsif</h3>
            <p>Desain bekerja dengan baik pada desktop dan perangkat mobile.</p>
        </div>
    </section>
@endsection
