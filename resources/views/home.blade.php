@extends ('master')

@section ('content')
<div class="ui stackable grid container">
    <div class="three column row">
        <div class="ui column">
            <div class="ui segment item">
                <div class="ui item">
                    <div class="ui image">
                        <img src="/img/print1.jpg">
                    </div>
                    <div class="ui divider"></div>
                    <div class="content">
                        <h2 class="ui header">Andy Printing
                            <div class="sub header">
                                <b>Andy Printing</b> adalah solusi dari segala kebutuhan printing anda. Laporan? Tugas akhir? Gampang! Dijamin Murah!<br><br>
                                Lokasi di <b>Sukolilo Dian Regency</b>
                            </div>
                        </h2>
                        <a href="{{ route('profile.show', 0) }}"><div class="ui blue right floated button">
                            See Printing Profile
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui column">
            <div class="ui segment item">
                <div class="ui item">
                    <div class="ui image">
                        <img src="/img/print1.jpg">
                    </div>
                    <div class="ui divider"></div>
                    <div class="content">
                        <h2 class="ui header">Bagus Printing
                            <div class="sub header">
                                <b>Bagus Printing</b> adalah Printing berjiwa mahasiswa. Mau print tugas, tapi takut mahal? Disini tempatnya!<br><br>
                                Lokasi di <b>Arif Rahman Hakim</b>
                            </div>
                        </h2>
                        <a href="{{ route('profile.show', 0) }}"><div class="ui blue right floated button">
                            See Printing Profile
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui column">
            <div class="ui segment item">
                <div class="ui item">
                    <div class="ui image">
                        <img src="/img/print1.jpg">
                    </div>
                    <div class="ui divider"></div>
                    <div class="content">
                        <h2 class="ui header">Fajar Printing
                            <div class="sub header">
                                <b>Fajar Printing</b> berdiri sejak tahun 1997. Untuk urusan kepuasan pelanggan, tidak perlu diragukan lagi. Kualitasnya dijamin <i>excellent</i>. Harga? Masih masuk kantong mahasiswa dong!<br><br>
                                Lokasi di <b>Keputih Perintis</b>
                            </div>
                        </h2>
                        <a href="{{ route('profile.show', 0) }}"><div class="ui blue right floated button">
                            See Printing Profile
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="three column row">
        <div class="ui column">
            <div class="ui segment item">
                <div class="ui item">
                    <div class="ui image">
                        <img src="/img/print1.jpg">
                    </div>
                    <div class="ui divider"></div>
                    <div class="content">
                        <h2 class="ui header">Fitri Printing
                            <div class="sub header">
                                <b>Fitri Printing</b> adalah Printing yang dibentuk oleh sekumpulan mahasiswa yang ingin membantu sesama. Printing ini sangat ramai ketika sore hari tiba.<br><br>
                                Lokasi di <b>Keputih Gg. 3</b>
                            </div>
                        </h2>
                        <a href="{{ route('profile.show', 0) }}"><div class="ui blue right floated button">
                            See Printing Profile
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui column">
            <div class="ui segment item">
                <div class="ui item">
                    <div class="ui image">
                        <img src="/img/print1.jpg">
                    </div>
                    <div class="ui divider"></div>
                    <div class="content">
                        <h2 class="ui header">Viprilia Printing
                            <div class="sub header">
                                <b>Viprilia Printing</b> mengutamakan kepuasan pelanggan. Berbeda dari printing lainnya yang selalu mengumbar harga yang miring, Viprilia Printing mengedepankan hasil printing yang sangat memuaskan!<br><br>
                                Lokasi di <b>Sebelah Galaxy Mall</b>
                            </div>
                        </h2>
                        <a href="{{ route('profile.show', 0) }}"><div class="ui blue right floated button">
                            See Printing Profile
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui column">
            <div class="ui segment item">
                <div class="ui item">
                    <div class="ui image">
                        <img src="/img/print1.jpg">
                    </div>
                    <div class="ui divider"></div>
                    <div class="content">
                        <h2 class="ui header">Lutfi Printing
                            <div class="sub header">
                                <b>Lutfi Printing</b> Merupakan cabang dari PrintKu Digital Printing. DIbuka pada awal tahun ini, Lutfi Printing tidak kalah dengan printing-printing lainnya.<br><br>
                                Lokasi di <b>dekat SAC ITS</b>
                            </div>
                        </h2>
                        <a href="{{ route('profile.show', 0) }}"><div class="ui blue right floated button">
                            See Printing Profile
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="one column row">
        <div class="ui column">
            <div class="ui centered grid">
                <div class="center aligned column">
                    <div class="ui pagination menu">
                        <a class="active item">1</a>
                        <a class="item">2</a>
                        <a class="item">3</a>
                        <a class="disabled item">...</a>
                        <a class="item">14</a>
                        <a class="item">15</a>
                        <a class="item">16</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection