@extends('studentDashboard.include.base')
@section('content')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">





        <div class="page__heading">
            <div class="container-fluid page__container">
                <h1 class="mb-0">Dashboard</h1>
            </div>
        </div>
        <div class="bg-white border-bottom mb-3">
            <div class="container-fluid nav nav-tabs" role="tablist">
                <a href="#activity_all" class="active" data-toggle="tab" role="tab" aria-controls="activity_all"
                    aria-selected="true">Overview</a>
                <a href="#activity_purchases" data-toggle="tab" role="tab" aria-selected="false">Pricing</a>
            </div>
        </div>
        <div class="container-fluid page__container">
            <div class="tab-content">
                <div class="tab-pane active show fade" id="activity_all">
                    <!-- FIRST TAB CONTENT -->
                    <div class="row card-group-row">
                        <div class="col-lg-4 col-md-6 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2 d-flex">Current Month <span
                                                class="badge badge-warning ml-2">391</span></div>
                                        <span class="h4 m-0">&dollar;24,000 <small class="text-muted"> /
                                                &dollar;50,000</small> </span>
                                    </div>
                                    <div><i class="material-icons icon-muted icon-40pt ml-3">monetization_on</i></div>
                                </div>
                                <div class="progress" style="height: 3px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted d-flex mb-2">Current Year <span
                                                class="badge badge-primary ml-2">2019</span></div>
                                        <span class="h4 m-0">&dollar;48,229 </span>
                                    </div>
                                    <div><i class="material-icons icon-muted icon-40pt ml-3">gps_fixed</i></div>
                                </div>
                                <div class="progress" style="height: 3px;">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Top Grossing</div>

                                        <div class="d-flex align-items-center">
                                            <div class="h4 m-0">&dollar;13,531 </div>
                                            <div class="progress ml-1" style="width:100%;height: 3px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div><i class="material-icons icon-muted icon-40pt ml-3">contacts</i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-large bg-light d-flex align-items-center">
                                    <div class="flex">
                                        <h4 class="card-header__title">Earnings</h4>
                                        <div class="card-subtitle text-muted">Your recent courses</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="author-earnings.html" class="btn btn-light">Browse All</a>
                                    </div>
                                </div>

                                <div class="card-body">

                                    <div class="chart" style="height: 295px;">
                                        <canvas id="viewsChart">
                                            <span style="font-size: 1rem;"><strong>Views</strong> area chart goes
                                                here.</span>
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="card">
                                <div class="card-header card-header-large bg-light d-flex align-items-center">
                                    <div class="flex">
                                        <h4 class="card-header__title">Rankings</h4>
                                        <div class="card-subtitle text-muted">Current Month Earnings</div>
                                    </div>

                                    <div class="dropdown ml-auto">
                                        <a href="#" class="dropdown-toggle text-muted" data-caret="false"
                                            data-toggle="dropdown">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Go to Report</a>
                                            <a class="dropdown-item" href="#">Other Statistics</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#">Archive</a>
                                        </div>
                                    </div>

                                </div>


                                <ul class="list-group list-rankings">

                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <span class="mr-2">1.</span>
                                            <img src="{{ asset('assets/images/256_daniel-gaffey-1060698-unsplash.jpg') }}"
                                                class="img-fluid rounded-circle mr-2" width="30" alt="...">
                                            <div class="media-body">
                                                <a href="#">Tara Knows</a>
                                            </div>
                                            <div>&dollar;29,021</div>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <span class="mr-2">2.</span>
                                            <img src="{{ asset('assets/images/256_jeremy-banks-798787-unsplash.jpg') }}"
                                                class="img-fluid rounded-circle mr-2" width="30" alt="...">
                                            <div class="media-body">
                                                <a href="#">Karen Smith</a>
                                            </div>
                                            <div>&dollar;25,250</div>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <span class="mr-2">3.</span>
                                            <img src="{{ asset('assets/images/256_michael-dam-258165-unsplash.jpg') }}"
                                                class="img-fluid rounded-circle mr-2" width="30" alt="...">
                                            <div class="media-body">
                                                <a href="#">Mark Ups</a>
                                            </div>
                                            <div>&dollar;21,330</div>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <span class="mr-2">4.</span>
                                            <img src="{{ asset('assets/images/256_s-a-r-a-h-s-h-a-r-p-764291-unsplash.jpg') }}"
                                                class="img-fluid rounded-circle mr-2" width="30" alt="...">
                                            <div class="media-body">
                                                <a href="#">Steven Short</a>
                                            </div>
                                            <div>&dollar;17,740</div>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <span class="mr-2">5.</span>
                                            <img src="{{ asset('assets/images/256_luke-porter-261779-unsplash.jpg') }}"
                                                class="img-fluid rounded-circle mr-2" width="30" alt="...">
                                            <div class="media-body">
                                                <a href="#">John Mix</a>
                                            </div>
                                            <div>&dollar;13,120</div>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <!-- END FIRST TAB CONTENT -->
                </div>
                <div class="tab-pane fade" id="activity_purchases">
                    <!-- SECOND TAB CONTENT -->



                    <div class="row card-group-row  pt-2">

                        <div class="col-md-6 col-lg-4 card-group-row__col">
                            <div class="card card-group-row__card pricing__card">

                                <div class="card-body d-flex flex-column">
                                    <div class="text-center">
                                        <h4 class="pricing__title mb-0">Personal</h4>
                                        <div
                                            class="d-flex align-items-center justify-content-center border-bottom-2 flex pb-3">
                                            <span class="pricing__amount headings-color">29</span>
                                            <span class="d-flex flex-column">
                                                <span class="pricing__currency text-dark-gray text-left">USD</span>
                                                <span class="pricing__duration text-dark-gray">*monthly</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column">

                                        <ul class="list-unstyled pricing__features">

                                            <li>HTML/SCSS/JS</li>

                                            <li>6 Months Support</li>

                                        </ul>

                                        <a href="https://www.frontted.com/admins/educate-learning-app-theme"
                                            class="btn btn-secondary mt-auto">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 card-group-row__col">
                            <div class="card card-group-row__card pricing__card pricing__card--popular">

                                <span class="pricing__card-badge">most popular</span>

                                <div class="card-body d-flex flex-column">
                                    <div class="text-center">
                                        <h4 class="pricing__title mb-0">Developers</h4>
                                        <div
                                            class="d-flex align-items-center justify-content-center border-bottom-2 flex pb-3">
                                            <span class="pricing__amount headings-color">59</span>
                                            <span class="d-flex flex-column">
                                                <span class="pricing__currency text-dark-gray text-left">USD</span>
                                                <span class="pricing__duration text-dark-gray">*monthly</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column">

                                        <ul class="list-unstyled pricing__features">

                                            <li>HTML/SCSS/JS</li>

                                            <li>6 Months Support</li>

                                            <li>HTML/SCSS/JS</li>

                                            <li>6 Months Support</li>

                                        </ul>

                                        <a href="https://www.frontted.com/admins/educate-learning-app-theme"
                                            class="btn btn-primary mt-auto">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 card-group-row__col">
                            <div class="card card-group-row__card pricing__card">

                                <div class="card-body d-flex flex-column">
                                    <div class="text-center">
                                        <h4 class="pricing__title mb-0">Personal</h4>
                                        <div
                                            class="d-flex align-items-center justify-content-center border-bottom-2 flex pb-3">
                                            <span class="pricing__amount headings-color">199</span>
                                            <span class="d-flex flex-column">
                                                <span class="pricing__currency text-dark-gray text-left">USD</span>
                                                <span class="pricing__duration text-dark-gray">*monthly</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column">

                                        <ul class="list-unstyled pricing__features">

                                            <li>HTML/SCSS/JS</li>

                                            <li>6 Months Support</li>

                                            <li>HTML/SCSS/JS</li>

                                            <li>6 Months Support</li>

                                            <li>HTML/SCSS/JS</li>

                                            <li>6 Months Support</li>

                                        </ul>

                                        <a href="https://www.frontted.com/admins/educate-learning-app-theme"
                                            class="btn btn-secondary mt-auto">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- END SECOND TAB -->
                </div>
                <div class="tab-pane fade" id="activity_emails">
                    Ducimus aperiam aut corporis, facere nobis id quos dignissimos, ut corrupti asperiores reprehenderit
                    culpa praesentium exercitationem, officia commodi.
                </div>
                <div class="tab-pane fade" id="activity_quotes">
                    Odit consectetur dolore maxime similique qui officia deserunt fugiat quo tempore consequuntur dicta
                    ratione sint commodi eum eligendi, magnam aliquid expedita quas accusantium, sed nobis tenetur illum
                    mollitia. Quis ipsum tenetur distinctio tempore vitae atque quam.
                </div>
            </div>
        </div>


    </div>
    <!-- // END header-layout__content -->
@endsection
