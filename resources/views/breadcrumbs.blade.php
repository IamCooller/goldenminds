@if(isset($title) && isset($breadcrumbs))
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">{{ $title }}</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        @foreach ($breadcrumbs as $crumb)
        <li class="breadcrumb-item"><a href="{{ $crumb['url'] }}">{{ $crumb['label'] }}</a></li>
        @endforeach
        <li class="breadcrumb-item active">{{ $title }}</li>
      </ol>
    </div>
</div>
@endif