@extends('layouts.app')



@section('content')
    <div class="container px-4 py-5" id="icon-grid">
        <h2 class="pb-2 border-bottom">CONTENT</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">

            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" height="70px" viewBox="0 0 24 24" width="70px" fill="#1f1f1f">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3 1 9l11 6 9-4.91V17h2V9L12 3z" />
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Learn the Trickline</h3>
                    <p>Access the World Tricklist and discover all the tricks you don't know yet.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="70px" viewBox="0 0 24 24"
                    width="70px" fill="#1f1f1f">
                    <g>
                        <rect fill="none" height="24" width="24" />
                    </g>
                    <g>
                        <path
                            d="M4,6c0-1.1,0.9-2,2-2s2,0.9,2,2S7.1,8,6,8S4,7.1,4,6z M1,9h6l7-5l1.31,1.52L11.14,8.5H14L21.8,4L23,5.4L14.5,12L14,22h-2 l-0.5-10L8,11H1V9z" />
                    </g>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Train for competitions</h3>
                    <p>Simulate a round of competition and then evaluate yourself via our app.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="50px" viewBox="0 0 24 24"
                    width="50px" fill="#1f1f1f">
                    <g>
                        <rect fill="none" height="24" width="24" x="0" />
                    </g>
                    <g>
                        <g>
                            <rect height="20" transform="matrix(0.7075 -0.7067 0.7067 0.7075 -5.6854 13.7194)"
                                width="4" x="11.73" y="3.73" />
                            <rect height="8" transform="matrix(0.707 -0.7072 0.7072 0.707 0.3157 11.246)" width="4"
                                x="11.73" y="1.24" />
                            <rect height="8" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -8.1722 7.7256)"
                                width="4" x="3.24" y="9.73" />
                            <rect height="2" width="12" x="1" y="21" />
                        </g>
                    </g>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Judging a competition</h3>
                    <p>Judge a competition smartly from any device!</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="70px" viewBox="0 0 24 24"
                    width="70px" fill="#1f1f1f">
                    <rect fill="none" height="24" width="24" />
                    <path
                        d="M19,5h-2V3H7v2H5C3.9,5,3,5.9,3,7v1c0,2.55,1.92,4.63,4.39,4.94c0.63,1.5,1.98,2.63,3.61,2.96V19H7v2h10v-2h-4v-3.1 c1.63-0.33,2.98-1.46,3.61-2.96C19.08,12.63,21,10.55,21,8V7C21,5.9,20.1,5,19,5z M5,8V7h2v3.82C5.84,10.4,5,9.3,5,8z M19,8 c0,1.3-0.84,2.4-2,2.82V7h2V8z" />
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Organizing an event </h3>
                    <p>Easily plan an event with our guidelines that will help you step by step.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="70px" viewBox="0 0 24 24"
                    width="70px" fill="#1f1f1f">
                    <rect fill="none" height="24" width="24" />
                    <g>
                        <path
                            d="M19.88,18.47c0.44-0.7,0.7-1.51,0.7-2.39c0-2.49-2.01-4.5-4.5-4.5s-4.5,2.01-4.5,4.5s2.01,4.5,4.49,4.5 c0.88,0,1.7-0.26,2.39-0.7L21.58,23L23,21.58L19.88,18.47z M16.08,18.58c-1.38,0-2.5-1.12-2.5-2.5c0-1.38,1.12-2.5,2.5-2.5 s2.5,1.12,2.5,2.5C18.58,17.46,17.46,18.58,16.08,18.58z M15.72,10.08c-0.74,0.02-1.45,0.18-2.1,0.45l-0.55-0.83l-3.8,6.18 l-3.01-3.52l-3.63,5.81L1,17l5-8l3,3.5L13,6C13,6,15.72,10.08,15.72,10.08z M18.31,10.58c-0.64-0.28-1.33-0.45-2.05-0.49 c0,0,5.12-8.09,5.12-8.09L23,3.18L18.31,10.58z" />
                    </g>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Monitor your performance</h3>
                    <p>Access statistics collected with workouts and races you have participated in.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="60px" viewBox="0 0 24 24"
                    width="60px" fill="#1f1f1f">
                    <g>
                        <rect fill="none" height="24" width="24" />
                    </g>
                    <g>
                        <g>
                            <path
                                d="M6.32,13.01c0.96,0.02,1.85,0.5,2.45,1.34C9.5,15.38,10.71,16,12,16c1.29,0,2.5-0.62,3.23-1.66 c0.6-0.84,1.49-1.32,2.45-1.34C16.96,11.78,14.08,11,12,11C9.93,11,7.04,11.78,6.32,13.01z" />
                            <path d="M4,13L4,13c1.66,0,3-1.34,3-3c0-1.66-1.34-3-3-3s-3,1.34-3,3C1,11.66,2.34,13,4,13z" />
                            <path
                                d="M20,13L20,13c1.66,0,3-1.34,3-3c0-1.66-1.34-3-3-3s-3,1.34-3,3C17,11.66,18.34,13,20,13z" />
                            <path d="M12,10c1.66,0,3-1.34,3-3c0-1.66-1.34-3-3-3S9,5.34,9,7C9,8.66,10.34,10,12,10z" />
                            <path
                                d="M21,14h-3.27c-0.77,0-1.35,0.45-1.68,0.92C16.01,14.98,14.69,17,12,17c-1.43,0-3.03-0.64-4.05-2.08 C7.56,14.37,6.95,14,6.27,14H3c-1.1,0-2,0.9-2,2v4h7v-2.26c1.15,0.8,2.54,1.26,4,1.26s2.85-0.46,4-1.26V20h7v-4 C23,14.9,22.1,14,21,14z" />
                        </g>
                    </g>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Joining the Trickline Community</h3>
                    <p>Join the Trickline community and climb the rankings.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('hero')
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Everything in one place</h1>
                <p class="lead">A single platform where athletes, organizers and judges can access and stay connected.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start"></div>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/bootstrap-5.3.2-examples/heroes/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid"
                    alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>
@endsection

@section('featurette')
    <div class="container px-4 py-5">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">YOUR PERFORMANCE UNDER CONTROL!!<span
                        class="text-body-secondary">Evaluate your performance like a judge and prepare yourself for the
                        competition better than ever..</span></h2>
            </div>
            <div class="col-md-5">
                <video class="featurette-image img-fluid mx-auto" width="500" height="500" controls>
                    <source src="/path/to/your/video1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>


    <div class="container px-4 py-5">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Organize, manage and participate in virtual competitions from
                    around the world! <span class="text-body-secondary">See for yourself.</span></h2>
                <p class="lead">Take your competitive spirit to the next level with our innovative web app. It's the
                    perfect
                    platform for organizing, managing, and participating in virtual competitions that will challenge and
                    inspire
                    you.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <video class="featurette-image img-fluid mx-auto" width="500" height="500" controls>
                    <source src="/path/to/your/video2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <div class="container px-4 py-5">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Simple organization of live events!<span
                        class="text-body-secondary">See for yourself.</span></h2>
                <p class="lead">Plan, organize and publish your event easily through our step-by-step guide for creating
                    Live
                    Competitions.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <video class="featurette-image img-fluid mx-auto" width="500" height="500" controls>
                    <source src="/path/to/your/video3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
@endsection

@section('regulations')
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold text-body-emphasis">Access all our official Trickline regulations.</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Free access to three different types of regulations for Trickline competitions. From the
                simplest to the most complicated. Which one will be the most suitable for you?</p>
            <div class="container px-5">
                <img src="{{ asset('resources/img/web/tjsrules.webp') }}"
                    class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" style="width: 75%;">
                <a class="btn btn-primary btn-lg px-4">Sign up for free!</a>
            </div>
        </div>
    </div>
@endsection




