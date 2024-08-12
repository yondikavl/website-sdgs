@extends('layouts.client.app')

@section('title', 'Detail Berita')

@section('style')
    <style>
        .svg-atas {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .svg-bawah {
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: -1;
            margin-bottom: 100px;
        }
    </style>
@endsection

@section('content')
    <svg class="svg-atas" width="506" height="490" viewBox="0 0 506 490" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle opacity="0.2" cx="31.1897" cy="15.0955" r="374.775" stroke="url(#paint0_linear_1106_91)"
            stroke-width="200" />
        <defs>
            <linearGradient id="paint0_linear_1106_91" x1="572.332" y1="-121.159" x2="-343.585" y2="416.107"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="green" stop-opacity="0.4" />
                <stop offset="1" stop-color="green" stop-opacity="0.4" />
            </linearGradient>
        </defs>
    </svg>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div id="blogCarousel" class="carousel slide my-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/600x800" class="d-block w-100 rounded-lg" alt="Slide 1"
                                style="max-height: 500px; object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/600x800" class="d-block w-100 rounded-lg" alt="Slide 2"
                                style="max-height: 500px; object-fit: cover;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="card shadow-sm p-4">
                    <h1 class="my-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vitae
                        laboriosam
                        quidem. Blanditiis excepturi, quia ratione qui nostrum explicabo similique ipsam neque dolor! Unde
                        quae, saepe voluptates accusantium fugiat quia!</h1>

                    <div class="mb-5">
                        <span class="text-muted">Diposting pada 11:11 WIB - 11/08/2024 oleh Author 1</span>
                    </div>

                    <div class="content mb-3 text-justify">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque erat et nisi
                            volutpat, a
                            congue eros facilisis. Ut at aliquam felis, nec venenatis lorem. Praesent vitae nibh ac velit
                            commodo malesuada. Sed luctus posuere magna, in laoreet enim tristique a. Suspendisse et urna in
                            purus viverra posuere. Vivamus id lacinia orci. Integer auctor, eros nec ultricies pellentesque,
                            elit mi venenatis nulla, at pellentesque eros velit non ligula.</p>

                        <p>Curabitur vestibulum felis in risus pretium, vel vehicula dui sollicitudin. Sed nec nunc non nisl
                            aliquet venenatis. Morbi vel turpis mi. Ut suscipit convallis tincidunt. Curabitur ut nunc ac
                            tortor
                            volutpat convallis. Aliquam gravida metus quis nisl vehicula, ac lacinia metus volutpat.
                            Vestibulum
                            fermentum nisi nec tellus dapibus, vitae consequat quam lacinia.</p>

                        <p>Sed ut felis at urna efficitur aliquam. Proin ut mi nec augue malesuada vestibulum vel non erat.
                            Fusce sagittis neque vel turpis gravida, sit amet dapibus eros convallis. Nulla facilisi.
                            Integer et
                            felis et libero vestibulum dignissim vel at odio. Pellentesque habitant morbi tristique senectus
                            et
                            netus et malesuada fames ac turpis egestas.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <svg class="svg-bawah" width="476" height="476" viewBox="0 0 476 476" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <circle opacity="0.2" cx="475.274" cy="475.408" r="374.775" stroke="url(#paint0_linear_1106_91)"
            stroke-width="200" />
        <defs>
            <linearGradient id="paint0_linear_1106_91" x1="1016.42" y1="339.154" x2="100.5" y2="876.42"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="white" stop-opacity="0.4" />
                <stop offset="1" stop-color="white" stop-opacity="0.25" />
            </linearGradient>
        </defs>
    </svg>
@endsection
