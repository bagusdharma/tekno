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
            <table class="ui celled table">
                <thead>
                    <tr>
                        <th>Ukuran</th>
                        <th>Berwarna</th>
                        <th>Hitam-Putih</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A1</th>
                        <td>Rp 3500,-</td>
                        <td>Rp 2500,-</td>
                    </tr>
                    <tr>
                        <td>A2</th>
                        <td>Rp 2000,-</td>
                        <td>Rp 1500,-</td>
                    </tr>
                    <tr>
                        <td>A3</th>
                        <td>Rp 1000,-</td>
                        <td>Rp 750,-</td>
                    </tr>
                    <tr>
                        <td>A4</th>
                        <td>Rp 500,-</td>
                        <td>Rp 300,-</td>
                    </tr>
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
                            Hasilnya mantap! Saya suka dengan Andy Printing!
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <div class="header">Veronika Ossi</div>
                        <div class="meta"><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i
                                class="star icon"></i></div>
                        <div class="description">
                            Andy Printing penjaganya cakep, jadi suka deh ke situ! Kalo ga bisa ke Andy Printing, bisa
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
        <a href=" {{route('order.index')}} "><input type="submit" class="ui green button" value="Order Now" tabindex="0"></a>
    </div>
    <div class="column">
    </div>
</div>
@endrole

<style type="text/css">
    .slider {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .slides {
        height: 100%;
        overflow: hidden;
        *zoom: 1;
        -webkit-backface-visibility: hidden;
        -webkit-transform-style: preserve-3d;
    }

    .slide-item {
        height: 100%;
        float: left;
        clear: none;
    }

    .slider-arrow {
        position: absolute;
        display: block;
        margin-bottom: -20px;
        padding: 20px;
    }

    .slider-arrow--right {
        bottom: 50%;
        right: 30px;
    }

    .slider-arrow--left {
        bottom: 50%;
        left: 30px;
    }

    .slider-nav {
        position: absolute;
        bottom: 60px;
    }

    .slider-nav__item {
        width: 12px;
        height: 12px;
        float: left;
        clear: none;
        display: block;
        margin: 0 5px;
        background: #fff;
    }

    .slider-nav__item:hover {
        background: #ccc;
    }

    .slider-nav__item--current {
        background: #ccc;
    }

    /* unique slider css */
    .slider-nav__item {
        border-radius: 50%;
    }

    .slider-arrow--right,
    .slider-arrow--left {
        background-image: url('/img/glide-arrows.png');
        background-repeat: no-repeat;
        width: 17px;
        height: 28px;
        display: block;
        padding: 0;
    }

    .slider-arrow--right {
        background-position: -17px 0;
    }

    .slider-arrow--left {}

    /* home page slider - start */
    .slider1 .slide-item {
        height: 100%;
        width: 100%;
        background-position: center;
        background-size: cover;
    }

    .slider1 .item1 {
        background: url("/img/slide1.jpg") no-repeat center;
    }

    .slider1 .item2 {
        background: url("/img/slide2.jpg") no-repeat center;
    }

    .slider1 {
        color: #fff;
    }

    .slider1 .content {
        margin-top: 37%;
        margin-bottom: 20%;
    }

    .slider1 h2 {
        font-family: 'lobster', sans-serif;
        font-size: 5em;
        font-weight: 200;
        margin-bottom: 1.2em;
        text-shadow: 0 .05em .05em #c25b1d !important;
    }

    .slider1 .note {
        max-height: 5em;
        min-height: 5em;
        max-width: 5em;
        min-width: 5em;
        display: inline !important;
    }
</style>
<script src="http://cdn.jsdelivr.net/jquery.glide/1.0.6/jquery.glide.min.js"></script>
<script>
    $(document).ready(function () {
        // console.log("HAHA");
        $('.slider').glide({
            autoplay: false,
            arrowsWrapperClass: 'slider-arrows',
        });
    });
</script>
@endsection