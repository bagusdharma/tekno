@extends ('master')

@section('content')
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7915.126552680351!2d112.811941!3d-7.290426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1942568d1d6d1707!2sSukolilo+Dian+Regency!5e0!3m2!1sen!2sus!4v1541425562944"
    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="ui three column doubling grid container">
    <div class="column">
        <div class="ui segment">
            <div class="overlay">
                <div class="ui column">
                    <div class="ui item">
                        <div class="ui image"><img src="/img/print1.jpg"></div>
                        <div class="ui divider"></div>
                        <div class="content">
                            <h2 class="ui header">{{ $user['name'] }}
                                <div class="sub header">
                                    {{ $user['description'] }}
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="ui segment">
            <div class="content">
                <h2 class="ui header">Harga</h2>
            </div>
            <table class="ui striped celled table">
                <thead>
                    <tr>
                        <th>Ukuran</th>
                        <th>Berwarna</th>
                        <th>Hitam-Putih</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lists as $list)
                    <tr>
                        <td>{{ $list->ukuran }}</th>
                        <td>Rp {{ $list->berwarna }},-</td>
                        <td>Rp {{ $list->bnw }},-</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="column">
        <div class="ui segment">
            <div class="content">
                <h2 class="ui header">Review</h2>
            </div>
            <div class="ui divider"></div>
            <div class="ui cards">
                <div class="card">
                    <div class="content">
                        <div class="header">Elliot Fu</div>
                        <div class="meta"><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i
                                class="star icon"></i><i class="star icon"></i></div>
                        <div class="description">
                            Hasilnya mantap! Saya suka dengan {{ $user['name'] }}!
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <div class="header">Veronika Ossi</div>
                        <div class="meta"><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i
                                class="star icon"></i></div>
                        <div class="description">
                            {{ $user['name'] }} penjaganya cakep, jadi suka deh ke situ! Kalo ga bisa ke {{ $user['name'] }}, bisa
                            pesan online juga hehehehe.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <div class="header">Jenny Hess</div>
                        <div class="meta"><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i></div>
                        <div class="description">
                            Bagus sebenarnya, hanya saja kurang tepat waktu
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@role('personal')
<div class="ui three column grid container">
    <div class="column">
    </div>
    <div class="column">
        <a href=" {{route('order.show', $user['id'])}} "><input type="submit" class="ui green button" value="Order Now" tabindex="0"></a>
    </div>
    <div class="column">
    </div>
</div>
@endrole

<script>
    $(document).ready(function () {
        $('.main.menu  .ui.dropdown').dropdown({
                on: 'hover'
        });
    });
</script>
@endsection