@if(Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                <div class="alert-icon"><i class="fa fa-check"></i></div>
                <div class="alert-text">{{ $msg }}!</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
        @endforeach
    @else
        <div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
            <div class="alert-icon"><i class="fa fa-check"></i></div>
            <div class="alert-text">{{ $data }}!</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
    @endif
@endif
