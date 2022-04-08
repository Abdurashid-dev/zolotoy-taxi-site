<div class="our-service" id="secvice">
    <div class="container">
        <div class="row">
            <div class="col-12 heading">
                <h3 class="text-center">- OUR SERVICE -</h3>
            </div>

            @foreach($services as $service)
                <div class="col-12 col-lg-4 wow slideInUp" data-wow-duration="1s">
                    <div class="card service">
                        <i class="{{$service->icon}}"></i>
                        <div class="card-body">
                            <h5 class="card-title"><a href="JavaScript:Void(0);"> {{$service->title}} </a></h5>
                            <p class="card-text">{!! $service->text !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
