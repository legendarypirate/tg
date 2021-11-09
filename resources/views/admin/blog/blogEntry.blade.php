@extends('admin.master')


@section('content-heading')
  Сургалтын мэдээ оруулах 869x434

  <br>
  {{Session::get('message')}}

@endsection


@section('mainContent')

<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   
                                    {!! Form::open(['url' => 'course/save', 'method'=>'post', 'role'=>'form', 'files' => true, 'enctype'=>'multipart/form-data' ]) !!}
                                      
                                        <div class="form-group">
                                            <label>Сургалт сонгох</label>
                                            <select name="catid" class="form-control" required>
                                         
                                                <option value="1">Аялал жуучлалын боловсрол олгох сургалт</option>
                                                <option value="2">Тур лидерийн сургалт</option>
                                                <option value="3">Аялал жуулчлалын маркетингийн судалгаа ба сургалт
</option>
                                                <option value="4">Дотоодын аялал жуулчлалын сургалт</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Товч мэдээ</label>
                                            <textarea  name="short" class="form-control my-editor" style="height:100px;"></textarea>
                                       
                                        </div>
                                          <div class="form-group">
                                            <label>Дэлгэрэнгүй</label>
                                            <textarea  name="long" class="form-control my-editor" style="height:500px;"></textarea>
                                       
                                        </div>
                                        <div class="form-group">
                                            <label>Хугацаа</label>
                                            <input  name="term" class="form-control">
                                       
                                        </div>
                                        <div class="form-group">
                                            <label>Хичээллэх цаг</label>
                                            <input  name="time" class="form-control">
                                       
                                        </div>
                                        <div class="form-group">
                                            <label>Зураг</label>
                                            <input name="image1" class="form-control" type="file">
                                        </div>
                                      
                                        <div class="form-group">
                                          
                                            <input type="Submit" class="btn btn-block btn-primary" value="Илгээх">
                                        </div>
                                        {!! Form::close() !!}
                                </div>
                            </div> 
</div>       
 <script src="https://cdn.tiny.cloud/1/cz24nt0wrcj7h0bezmv23sjdnrc7q1l9p22gj5ej74wm6s2n/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker image code',
      toolbar: 'a11ycheck addcomment imageupload bold italic formatselect alignleft aligncenter alignright alignjustify fontselect strikethrough showcomments casechange checklist code forecolor backcolor formatpainter pageembed permanentpen table link removeformat checklist image ',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      
      
       image_title: true,
  /* enable automatic uploads of images represented by blob or data URIs*/
  automatic_uploads: true,
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
  */
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
    */

    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
      
    });
  </script>
@endsection