<div id="upload-wrap">
    <div class="input-group">
        <img src="{{ $url }}" id="image_src" width="100">
        <input type="hidden" id="image_label" class="form-control {{ $error ? 'error' : '' }}" name="{{ $name }}" value="{{ $url }}"
               aria-label="Image" aria-describedby="button-image">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
        </div>
    </div>
    @if ( $multiply ) 
    <div class="btn"></div>
    @endif
</div>

@section('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {

  document.getElementById('button-image').addEventListener('click', (event) => {
    event.preventDefault();

    window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
  });
});

// set file link
function fmSetLink($url) {
  document.getElementById('image_label').value = $url;
  document.getElementById('image_src').src = $url;
}
</script>
@endsection