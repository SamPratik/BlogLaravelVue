@extends('user.layout.master')

@section('meta-ajax')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
  <div id="fileForm">
      <div class="form-group col-md-12">
          <label for="logo" class="control-label">Attachments</label>
          <br><br>
           <div class="col-md-12">
             <form enctype="multipart/form-data">
               <input type="file" name="images[]" multiple="multiple" id="attachments" @change="uploadFieldChange">
             </form>
             <hr>
              {{-- <div class="col-md-12">
                  <div class="attachment-holder animated fadeIn" v-cloak v-for="(attachment, index) in attachments">
                      <span class="label label-primary">@{{ name }}</span>
                      <span class="" style="background: red; cursor: pointer;" @click="removeAttachment(attachment)"><button class="btn btn-xs btn-danger">Remove</button></span>
                  </div>
              </div> --}}
           </div>
           <br><br>
           <button class="btn btn-primary" @click.prevent="submit">Upload</button>
      </div>
  </div>


  <script>
      var app = new Vue({
        el: '#fileForm',
        data() {
            return {
                // You can store all your files here
                attachments: [],
                // Each file will need to be sent as FormData element
                data: new FormData(),
            }
        },
        methods: {
            prepareFields() {

                if (this.attachments.length > 0) {
                    for (var i = 0; i < this.attachments.length; i++) {
                        let attachment = this.attachments[i];
                        this.data.append('attachments[]', attachment);
                    }
                }
            },
            uploadFieldChange(e) {
                var files = e.target.files || e.dataTransfer.files;

                if (!files.length)
                    return;
                for (var i = files.length - 1; i >= 0; i--) {
                    this.attachments.push(files[i]);
                }
                console.log(this.attachments);
                // Reset the form to avoid copying these files multiple times into this.attachments
                document.getElementById("attachments").value = [];
            },
            submit() {
                this.prepareFields();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                // Make HTTP request to store announcement
                $.ajax({
                  url: '{{route('test.file.upload')}}',
                  type: 'POST',
                  data: this.data,
                  contentType: false,
                  processData: false,
                  success: function(data) {
                    console.log(data);
                  }
                });
            },
        }
      })

  </script>
@endsection
