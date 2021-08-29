@if (count($breadcrumbs))



    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
            @endif
            @endforeach
        </ol>
    </div>

       
@endif