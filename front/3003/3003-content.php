<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

$pattern_uri = '/' . preg_quote($pattern_document_root, '/') . '(.*)$/';

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3003">
    <div class='container-fluid'>
        <div class="row">
            <div class="col-md-6 col-content">
                <div class="col-left">
                    <h2 class="mb-3">Fast, Reliable Phone Repairs for Every Device Problem.</h2>
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                        ullamcorper
                        mattis, pulvinar dapibus leo.</p>
                    <iframe class="embed-responsive embed-responsive-16by9 video-wrapper"
                        src="https://www.youtube.com/embed/XHOmBV4js_E?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>

                </div>
            </div>
            <div class="col-md-6 col-content">
                <div class="col-right">
                    <h6 class="mb-3">OUR VALUE</h6>
                    <h2 class="mb-3">Fast, Reliable Phone Repairs for Every Device Problem.</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                        ullamcorper
                        mattis, pulvinar dapibus leo.</p>
                    <div class="stats">
                        <div class="item mb-3">
                            <span class="item-title">Customer Satisfaction Rate</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <span class="percentage-number">95%</span>
                                </div>
                            </div>
                        </div>
                        <div class="item mb-3">
                            <span class="item-title">Average Repair Completion in Under 1 Hour</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <span class="percentage-number">85%</span>
                                </div>
                            </div>
                        </div>
                        <div class="item mb-3">
                            <span class="item-title">Screen Repair Service Demand</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <span class="percentage-number">65%</span>
                                </div>
                            </div>
                        </div>
                        <div class="item mb-3">
                            <span class="item-title">Return Customers</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="78"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <span class="percentage-number">75%</span>
                                </div>
                            </div>
                        </div>
                        <div class="item mb-3">
                            <span class="item-title">Same-Day Repair Service Requests</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 74%;" aria-valuenow="74"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <span class="percentage-number">74%%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row box text-center">
            <div class="content-title mt-5">
                <h6 class="mb-3">MobiCare at Glance</h6>
                <h2>Top-Quality Repairs, Ensuring Your Phone’s Perfect Performance</h2>
            </div>
            <div class="content-card row g-3">
                <div class="col-md-3">
                    <div class="card">
                        <h3>47K+</h3>
                        <p>Happy Client</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h3>61K+</h3>
                        <p>Project Done</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h3>4.7</h3>
                        <p>Client Ratings</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h3>15+</h3>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
</div>