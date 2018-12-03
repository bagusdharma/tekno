@extends ('master')

@section('content')
<div class="ui segment">
    <form action="{{ route('order.store') }}" class="ui form" method="post">
        @csrf
        <h3 class="ui dividing header">Order Printing</h3>
        <div class="field">
            <input type="hidden" name="to_user" value="{{ $printing }}">
            <div class="required field">
                <label>Nama Pemesan</label>
                <div class="six wide field">
                    <input type="text" name="name" placeholder="Nama Pemesan" value="{{ $current->name }}">
                </div>
            </div>
            <div class="required field">
                <label>Jenis Kertas</label>
                <input type="hidden" name="jenis_kertas" value="" id="hiddenJenis">
                <div class="six wide field">
                    <select name="total_harga" class="ui search dropdown" id="kertas">
                        <option value="">Pilih Jenis Kertas</option>
                        @foreach($lists as $ls)
                        <option value="{{ $ls->berwarna }}">{{ $ls->ukuran }} - Berwarna</option>
                        <option value="{{ $ls->bnw }}">{{ $ls->ukuran }} - Hitam Putih</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="required field">
                <label>Alamat Pengiriman</label>
                <div class="six wide field">
                    <input type="text" name="alamat" placeholder="Alamat Pengiriman" value="{{ $current->alamat }}">
                </div>
            </div>
            <div class="required field">
                <label>No Telp</label>
                <div class="six wide field">
                    <input type="text" name="kontak" placeholder="Nomor Telephone">
                </div>
            </div>

            <div class="required field">
                <label>Upload Dokumen</label>
                <div class="six wide field">
                    <input type="hidden" name="file" value="" id="uploadedfile">
                    <button type="button" class="ui button" onclick="upload();" id="tblPopout">Upload Dokumen</button>
                </div>
            </div>

            <div class="field">
                <button type="submit" class="ui primary button">Submit</button>
            </div>
        </div>
        <br>

    </form>
</div>

<div class="ui modal">
    <i class="close icon"></i>
    <div class="header">Upload Documents</div>
    <div class="image content">
        <div class="ui small image">
            <img src="/img/blank.png" id="doc">
        </div>
    <form method="post" action="{{ route('file.up') }}" enctype="multipart/form-data" id="upfile">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="description">
                <div class="ui header">Upload your documents here</div>
                <label for="filedoc" class="ui icon button">
                    <i class="file icon"></i> Select Documents</label>
                <input type="file" name="file" id="filedoc" style="display:none" accept=".pdf,.doc,.docx,.xls,.xlsx">
            </div>
    </div>
    <div class="actions">
        <button class="ui green button" id="uploadfile" type="submit">Upload</button>
    </div>
    </form>
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
<script src="http://malsup.github.com/jquery.form.js"></script>
<script>
    // $('#kertas').dropdown();

    $(document).ready(function() {
        $('#message').modal();
        $('#kertas').dropdown({
            onChange: function(value, text, $choice){
                $('#hiddenJenis').val(text);
                console.log(text);
            }
        });

        $('.main.menu  .ui.dropdown').dropdown({
                on: 'hover'
        });

        $('#upfile').submit(function(){
            $(this).ajaxSubmit(options);
            return false;
        });

        var options = { 
            complete: function(response) {
                if($.isEmptyObject(response.responseJSON.error)){
                    $('#uploadedfile').val(response.responseJSON.id);
                    $('.ui.modal').modal('hide');
                    $('#tblPopout').prop('disabled', true);
                    $('#tblPopout').text('Document Uploaded, Dont Refresh This Page');
                }
            }
        };

    });

    const upload = () => {
        $('.ui.modal').modal().modal('show');
    };

</script>

@endsection