<div class="screenshot-section" id="screenshot">
    <div class="container">
        <div class="row">
            <div class="col-12 heading">
                <h3 class="text-center">- APP SCREENSHOTS -</h3>
            </div>

            <div class="col-12">
                <div class="screenshot-slider owl-carousel owl-theme">
                    @foreach($screenshots as $screenshot)
                        <div class="item">
                            <a href="{{ asset('storage/'.$screenshot->image) }}" data-fancybox="group1"
                               data-title="ScreenShot {{$loop->index+1}}">
                                <img src="{{ asset('storage/'.$screenshot->image) }}" alt="{{ $screenshot->title }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
