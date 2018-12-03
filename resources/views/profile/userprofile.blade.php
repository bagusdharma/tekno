@extends('master')

@section('content')
<div class="ui segment">
<form class="ui form" method="post" action="{{ route('updateProfile', $user) }}">
    @csrf
    {{ method_field('patch') }}
    @role('personal')
    <div class="field">
        <div class="ui message">
            <div class="header">Punya Bisnis Printing?</div>
            <p>Anda pemilik bisnis printing? Upgrade akun anda menjadi akun Toko Printing sekarang!</p>
            <a href="{{ route('upgradeProfile') }}"><div class="ui button red">Upgrade Akun</div></a>
        </div>
    </div>
    @endrole
    @role('personal')
    <h4 class="ui dividing header">Profil {{ $user->name }}</h4>
    @endrole
    @role('printing')
    <h4 class="ui dividing header">Profil Toko {{ $user->name }}</h4>
    @endrole
    <br>
    <div class="two fields">
        <div class="field">
            <div class="required field">
                @role('personal')
                <label>Nama Lengkap</label>
                @endrole
                @role('printing')
                <label>Nama Toko</label>
                @endrole
                <div class="twelve wide field">
                    @role('personal')
                    <input type="text" name="name" value="{{ $user->name }}" placeholder="Nama">
                    @endrole
                    @role('printing')
                    <input type="text" name="name" value="{{ $user->name }}" placeholder="Nama Toko">
                    @endrole
                </div>
            </div>
            <br>
            <div class="required field">
                <label>E-mail Terdaftar</label>
                <div class="twelve wide field">
                    <input type="text" name="email" value="{{ $user->email }}" placeholder="Email">
                </div>
            </div>
            @role('printing')
            <br>
            <div class="field">
                <label>Deskripsi Toko</label>
                <div class="twelve wide field">
                    <textarea rows="4" type="text" name="description" placeholder="Deskripsi Toko">{{ $user->description }}</textarea>
                </div>
            </div>
            @endrole
            <br>
            <div class="field">
                <label>Alamat</label>
                <div class="twelve wide field">
                    <textarea rows="4" type="text" name="alamat" placeholder="Alamat Lengkap">{{ $user->alamat }}</textarea>
                </div>
            </div>
            <br>
            <div class="field">
                <label>Kecamatan</label>
                <div class="twelve wide field">
                    <select name="kecamatan" class="ui search dropdown" id="kecamatan">
                        <option value="">Kecamatan</option>
                        <option value="AR">Asemrowo</option>
                        <option value="BE">Benowo</option>
                        <option value="BB">Bubutan</option>
                        <option value="BL">Bulak</option>
                        <option value="DP">Dukuh Pakis</option>
                        <option value="GY">Gayungan</option>
                        <option value="GE">Genteng</option>
                        <option value="GB">Gubeng</option>
                        <option value="GA">Gunung Anyar</option>
                        <option value="JA">Jambangan</option>
                        <option value="KP">Karangpilang</option>
                        <option value="KJ">Kenjeran</option>
                        <option value="KR">Krembangan</option>
                        <option value="LK">Lakarsantri</option>
                        <option value="MU">Mulyorejo</option>
                        <option value="PB">Pabean Cantikan</option>
                        <option value="PK">Pakal</option>
                        <option value="RU">Rungkut</option>
                        <option value="SK">Sambikerep</option>
                        <option value="SW">Sawahan</option>
                        <option value="SE">Semampir</option>
                        <option value="SI">Simokerto</option>
                        <option value="SU">Sukolilo</option>
                        <option value="SM">Sukomanunggal</option>
                        <option value="TS">Tambaksari</option>
                        <option value="TD">Tandes</option>
                        <option value="TE">Tegalsari</option>
                        <option value="TM">Tenggilis Mejoyo</option>
                        <option value="WY">Wiyung</option>
                        <option value="WC">Wonocolo</option>
                        <option value="WK">Wonokromo</option>
                    </select>
                </div>
            </div>
            @role('printing')
            <br>
            <div class="field">
                <label>Koordinat Google Maps</label>
                <div class="twelve wide field">
                    <textarea rows="4" type="text" name="gmaps_location" placeholder="Koordinat Google Maps">{{ $user->gmaps_location }}</textarea>
                </div>
            </div>
            @endrole
            <br>
            <div class="field">
                <label>Password</label>
                <div class="twelve wide field">
                    <input type="password" name="password" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="field">
            <div class="ui two column centered grid">
                <label>
                    <img class="ui medium centered image" src="/img/profile.jpg">
                </label>
                <div class="column">
                </div>
                <div class="column">
                    <button type="button" class="ui centered button" onclick="lala();">Upload Image</button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <input type="submit" class="ui primary button" value="Update Profile" tabindex="0">
</form>

</div>

<div class="ui modal" id="fotoprofil">
    <i class="close icon"></i>
    <div class="header">Profile Picture</div>
    <div class="image content">
        <div class="ui medium image">
            <img id="profpic" src="/img/profile.jpg">
        </div>
        <div class="description">
            <div class="ui header">Upload a new photo?</div>
                <label for="file" class="ui icon button">
                <i class="file icon"></i>Select Images</label>
                <input type="file" onChange="readImg(this);" id="file" style="display:none" accept="image/*">
        </div>
    </div>
    <div class="actions">
        <div class="ui black deny button">Nope</div>
        <div class="ui positive right labeled icon button">Yep, that's me<i class="checkmark icon"></i></div>
    </div>
</div>

@if(!empty(Session::get('message')))
<div class="ui mini modal" id="message">
    <div class="header">Berhasil!</div>
    <div class="content">
        <p>{{ Session::get('message') }}</p>
    </div>
    <div class="actions">
        <div class="ui green ok inverted button">
            <i class="checkmark icon"></i>Ok
        </div>
    </div>
</div>

<script>
    $(function() {
        $('#message').modal('show');
    });
</script>
@endif


@endsection

@section('script')
<script>
    const lala = () => {
        $('#fotoprofil').modal({
            onDeny: function(){
                $('#profpic').attr('src', '/img/profile.jpg');
            },
            onApprove: function() {
                //Update the profile pic
            }
        }).modal('show');
    };


    @if(!empty(Session::get('message')))
    const msg = () => {
        $('#message').modal('show');
    };
    @endif

    const readImg = (input) => {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profpic').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    };

    $(document).ready(function() {
        $('#kecamatan').dropdown('set selected', '{{ $user->kecamatan }}');
        $('.main.menu  .ui.dropdown').dropdown({
                on: 'hover'
        });
    });
</script>
@endsection