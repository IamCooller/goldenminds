@extends('layouts.backend')
@section('content')
<style>#fm-main-block > div {background-color: white;padding:20px;}</style>
    <div class="row">
        <div class="col-md-12" id="fm-main-block">
            <div id="fm"></div>
        </div>
    </div>

@endsection
@section('scripts')
<!-- File manager -->
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // set fm height
    //document.getElementById('fm-main-block').setAttribute('style', 'height:' + window.innerHeight + 'px');

    const FileBrowserDialogue = {
      init: function() {
        // Here goes your code for setting your custom things onLoad.
      },
      mySubmit: function (URL) {
        // pass selected file path to TinyMCE
        parent.tinymce.activeEditor.windowManager.getParams().setUrl(URL);
        // close popup window
        parent.tinymce.activeEditor.windowManager.close();
      }
    };

    // Add callback to file manager
    fm.$store.commit('fm/setFileCallBack', function(fileUrl) {
      FileBrowserDialogue.mySubmit(fileUrl);
    });
  });
</script>

@endsection
