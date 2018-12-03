@extends ('master')

@section('content')
<div class="ui segment">
    <form action="" class="ui form" method="post">
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
                <div class="six wide field">
                    <select name="jenis_kertas" class="ui search dropdown" id="kertas">
                        <option value="">Pilih Jenis Kertas</option>
                        @foreach($lists as $ls)
                        <option value="{{ $ls->id }}">{{ $ls->ukuran }}</option>
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
                    <button type="button" class="ui button" onclick="upload();">Upload Dokumen</button>
                </div>
            </div>

            <div class="field">
                <button type="button" class="ui primary button">Submit</button>
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


@endsection

@section('script')
<script src="http://malsup.github.com/jquery.form.js"></script>
<script>
    $('#kertas').dropdown();

    $(document).ready(function() {
        $('.main.menu  .ui.dropdown').dropdown({
                on: 'hover'
        });

        $('#upfile').submit(function(){
            $(this).ajaxSubmit(options);
            return false;
        });

        var options = { 
            // success: function(s){
            //     console.log(s.responseJSON)
            //     // $('#uploadedfile').val(s.responseJSON.id);
            // },
            complete: function(response) {
                if($.isEmptyObject(response.responseJSON.error)){
                    $('#uploadedfile').val(response.responseJSON.id);
                }
            }
        };

        // $('#upfile').submit(function(e){
        //     e.preventDefault();
        //     // console.log('ahaa');
        //     var formData = new FormData($(this)[0]);
        //     $.ajax({
        //         headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
        //         data: formData,
        //         type: 'post',
        //         async: false,
        //         processData: false,
        //         contentType: false,
        //         success:function(response){
        //             // console.log(response);
        //             alert('uploaded');
        //         }
        //     });
        // });

    });

    const upload = () => {
        $('.ui.modal').modal({
            onDeny: function () {
                $('#doc').attr('src', '/img/blank.png');
            },
            onApprove: function () {

            }
        }).modal('show');
    };

    const readDoc = (input) => {
        if (input.file && input.files[0]) {
            var doc = new FileReader();
            doc.onload = function (e) {
                $('#doc').attr('src', e.target.result);
            };
            doc.readAsDataUrl(input.files[0]);
        }
    };
</script>

@endsection