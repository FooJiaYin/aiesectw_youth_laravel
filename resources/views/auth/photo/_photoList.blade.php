@foreach($photos as $index => $photo)
    <div @if(count($photos) == $index + 1 ) id="last-child" @endif class="col-xs-4 col-sm-4 col-lg-2 col-md-3 photo-item">
        <div class="gal-detail thumb" data-id="{{ $photo->id }}">
            <a href="#" class="image-popup">
                <img src="{{ $photo->path }}" class="thumb-img" alt="{{ $photo->title }}">
            </a>
        </div>
    </div>
@endforeach