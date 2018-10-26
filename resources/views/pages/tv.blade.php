@extends('templates.template')

@section('content')
    @include('templates.nav')
      <div class="rubric-content" style="background-color: #000;">
        <div class="container-fluid">
          <div class="row">
            <div class="">
              <h1 class="m-4 text-white"><strong>La RoyaleNews TV</strong></h1>
            </div>
          </div>
          <hr class="bg-white">
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <hr class="row">
              <div class="row">
                  @foreach($une as $detail)
                    <div class="card mb-4 bg-white">
                      <a href="{{route('rubric.show', [strtolower($detail->rubric), $formatData($detail->start_at), $detail->id, $detail->slug])}}">
                          <h2 class="card-body">{{$detail->title}}</h2>
                          <img src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$detail->pictures}}" class="w-100" alt="Image">
                          <p class="p-4">{{$detail->content}}</p>
                      </a>
                      <div class="card-footer">
                        <small class="text-muted">Date et time</small>
                      </div>
                    </div>
                  @endforeach
              </div>
            
              <div class="row">
                <div class="card-deck">
                  @foreach($firstTwo as $detail)
                    <div class="card mb-3 bg-white">
                      <a href="{{route('rubric.show', [strtolower($detail->rubric), $formatData($detail->start_at), $detail->id, $detail->slug])}}">
                        <img src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$detail->pictures}}" class="w-100" alt="Image">
                      </a>
                      <h4 class="card-body"><a href="{{route('rubric.show', [strtolower($detail->rubric), $formatData($detail->start_at), $detail->id, $detail->slug])}}">{{$detail->title}}</a></h4>
                      <div class="card-footer">
                        <small class="text-muted">{{$times_already($detail->start_at)}}</small>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>

              <div class="row">
                <div class="card-columns">
                  @foreach($firstTree as $detail)
                    <div class="card mb-3 bg-white">
                      <a href="{{route('rubric.show', [strtolower($detail->rubric), $formatData($detail->start_at), $detail->id, $detail->slug])}}">
                        <img src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$detail->pictures}}" class="w-100" style="height: 150px;" alt="Image">
                      </a>
                      <h4 class="card-body" style="font-size: 18px;"><a href="{{route('rubric.show', [strtolower($detail->rubric), $formatData($detail->start_at), $detail->id, $detail->slug])}}">{{$detail->title}}</a></h4>
                      <div class="card-footer">
                        <small class="text-muted">{{$times_already($detail->start_at)}}</small>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>

              <div class="row">
                <ul class="list-unstyled">

                  <li class="media my-4 bg-white p-3">
                    <a href=""><img class="mr-3 img-fluid" src="https://placehold.it/150x100?text=Another Image Maybe" alt="Generic plac eholder image"></a>
                    <div class="media-body">
                      <a href=""><h5 class="mt-0 mb-1">List-based media object</h5></a>
                       <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                      <span class="text-muted">date and time</span>
                    </div>
                  </li>

                </ul>
              <hr>
              </div>

              <div class="row">
                <ul class="list-unstyled">

                  <li class="media my-4 bg-white p-3">
                    <a href=""><img class="mr-3 img-fluid" src="https://placehold.it/150x100?text=Another Image Maybe" alt="Generic plac eholder image"></a>
                    <div class="media-body">
                      <a href=""><h5 class="mt-0 mb-1">List-based media object</h5></a>
                       <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                      <span class="text-muted">date and time</span>
                    </div>
                  </li>

                </ul>
              </div>
            </div>

           @include('templates.aside')

          </div>
        </div>

@stop