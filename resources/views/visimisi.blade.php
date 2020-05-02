@extends('master')
@section('judul','Visi & Misi')

@section('konten')
<div class="highlight-blue" style="background-color: rgb(30,106,221);padding-botom:20px">
    <div class="container " data-bs-hover-animate="pulse">
        <div class="intro">
            <h2 class="text-center">Visi & Misi</h2>
            <p class="text-center text-light">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        </div>
    </div>
</div>
<div style="padding-top: 20px;background-color: #1a2e3a;padding-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="padding-top:20px" data-bs-hover-animate="pulse">
                <div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;margin-bottom: 0px;background-color: #b716b0;color: rgb(255,255,255);">
                    <h1>Visi</h1>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                </div>
                <div role="tablist" id="accordion-1">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1" href="div#accordion-1 .item-1">Pertama</a></h5>
                        </div>
                        <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                            <div class="card-body">
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="div#accordion-1 .item-2">Kedua</a></h5>
                        </div>
                        <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1">
                            <div class="card-body">
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3" href="div#accordion-1 .item-3">Ketiga</a></h5>
                        </div>
                        <div class="collapse item-3" role="tabpanel" data-parent="#accordion-1">
                            <div class="card-body">
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 " style="padding-top:20px" data-bs-hover-animate="pulse">
                <div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;margin-bottom: 0px;background-color: #3529b9;color: rgb(255,255,255);">
                    <h1>Misi</h1>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                </div>
                <div role="tablist" id="accordion-2">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-2 .item-1" href="div#accordion-2 .item-1">Pertama</a></h5>
                        </div>
                        <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-2">
                            <div class="card-body">
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-2 .item-2" href="div#accordion-2 .item-2">Kedua</a></h5>
                        </div>
                        <div class="collapse item-2" role="tabpanel" data-parent="#accordion-2">
                            <div class="card-body">
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-2 .item-3" href="div#accordion-2 .item-3">Ketiga</a></h5>
                        </div>
                        <div class="collapse item-3" role="tabpanel" data-parent="#accordion-2">
                            <div class="card-body">
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
