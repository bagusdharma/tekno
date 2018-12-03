@extends ('master')

@section ('content')
<div class="ui doubling grid container">
    <div class="three column row">
        @foreach($printings as $printing)
        <div class="ui column">
            <div class="ui segment item">
                <div class="ui item">
                    <div class="ui image">
                        <img src="/img/print1.jpg">
                    </div>
                    <div class="ui divider"></div>
                    <div class="content">
                        <h2 class="ui header">{{ $printing['name'] }}
                            <div class="sub header">
                                {!! $printing['description'] !!}
                            </div>
                        </h2>
                        <a href="{{ route('printing.show', $printing['id'] ) }}"><div class="ui blue right floated button">
                            See Printing Profile
                        </div></a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
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

@section('script')
<script>
        $(document).ready(function() {
            $('.main.menu  .ui.dropdown').dropdown({
                on: 'hover'
            });
        });
</script>
@endsection
