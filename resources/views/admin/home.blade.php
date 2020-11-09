@extends('layouts.admin.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- seo fact area start -->
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-6 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="fa fa-users"></i> Total Tests Realizados</div>
                                <h2>Data 1</h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">Tests Hechos por Mujeres</div>
                                <h2>Data 2</h2>
                            </div>
                            <canvas id="seolinechart2" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">Cantidad Tests #1 Realizados</div>
                                <h2>Data 3</h2>
                                <!-- <canvas id="seolinechart3" height="60"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">Cantidad Tests #2 Realizados</div>
                                <h2>Data 4</h2>
                                <!-- <canvas id="seolinechart4" height="60"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 mb-3 mb-lg-0">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">Tests Hechos por hombres</div>
                                <h2></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">Tests Hechos por Otros</div>
                                <h2></h2>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- seo fact area end -->
        <!-- Social Campain area start -->
        <div class="col-lg-4 mt-5">
            <div class="card">
              <div class="seo-fact sbg2">
                  <div class="p-4 d-flex justify-content-between align-items-center">
                      <div class="seofct-icon">Tests Hechos por Otros</div>
                      <h2>Data 5</h2>
                  </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4 mt-5">
            <div class="card">
              <div class="seo-fact sbg2">
                  <div class="p-4 d-flex justify-content-between align-items-center">
                      <div class="seofct-icon">Tests Hechos por Hombres</div>
                      <h2>Data 6</h2>
                  </div>
              </div>
            </div>
        </div>
        <!-- Social Campain area end -->
        <!-- Statistics area start -->
        <!-- <div class="col-lg-8 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">User Statistics</h4>
                    <div id="user-statistics"></div>
                </div>
            </div>
        </div> -->
        <!-- Statistics area end -->
        <!-- Advertising area start -->
        <!-- <div class="col-lg-4 mt-5">
            <div class="card h-full">
                <div class="card-body">
                    <h4 class="header-title">Test "Si soy violent@"</h4>
                    <canvas id="test1chart" height="233"></canvas>
                </div>
            </div>
        </div> -->
        <!-- Advertising area end -->
        <!-- sales area start -->
        <!-- <div class="col-xl-9 col-ml-8 col-lg-8 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Sales</h4>
                    <div id="salesanalytic"></div>
                </div>
            </div>
        </div> -->
        <!-- sales area end -->
        <!-- timeline area start -->
        <!-- <div class="col-xl-3 col-ml-4 col-lg-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Timeline</h4>
                    <div class="timeline-area">
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="fa fa-bomb"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="ti-signal"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- timeline area end -->
        <!-- map area start -->
        <!-- <div class="col-xl-5 col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Marketing Area</h4>
                    <div id="seomap"></div>
                </div>
            </div>
        </div> -->
        <!-- map area end -->
        <!-- testimonial area start -->
        <!-- <div class="col-xl-7 col-lg-12 mt-5">
            <div class="card">
                <div class="card-body bg1">
                    <h4 class="header-title text-white">Client Feadback</h4>
                    <div class="testimonial-carousel owl-carousel">
                        <div class="tst-item">
                            <div class="tstu-img">
                                <img src="assets/images/team/team-author1.jpg" alt="author image">
                            </div>
                            <div class="tstu-content">
                                <h4 class="tstu-name">Abel Franecki</h4>
                                <span class="profsn">Designer</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                            </div>
                        </div>
                        <div class="tst-item">
                            <div class="tstu-img">
                                <img src="assets/images/team/team-author2.jpg" alt="author image">
                            </div>
                            <div class="tstu-content">
                                <h4 class="tstu-name">Abel Franecki</h4>
                                <span class="profsn">Designer</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                            </div>
                        </div>
                        <div class="tst-item">
                            <div class="tstu-img">
                                <img src="assets/images/team/team-author3.jpg" alt="author image">
                            </div>
                            <div class="tstu-content">
                                <h4 class="tstu-name">Abel Franecki</h4>
                                <span class="profsn">Designer</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- testimonial area end -->
    </div>
</div>
@endsection
