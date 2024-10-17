<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3019">
    <div class="sidebar container">
        <div class="newsletter">
            <h5 class="heading">Signup our newsletter to get update information, news, insight or promotions.</h5>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" required>
                </div>
                <button type="submit" class="btn"><span><i class="fa-solid fa-envelope"></i></span>
                    Sign Up</button>
            </form>

        </div>

        <div class="latest-post card">
            <h4 class="h5 mb-3">Latest Post</h4>
            <ul class="list-unstyled">
                <li class="mb-3 d-flex">
                    <img src="images/master-in-electronics-repair-service-center-fixing-smartphone-300x169.jpg"
                        alt="Post Image" class="post-img">
                    <div>
                        <a href="#" class="text">Why Quick Repairs Matter: How MobiCare Keeps You
                            Connected</a>
                        <br>
                        <span class="text-muted small">October 8, 2024</span>
                    </div>
                </li>
                <li class="mb-3 d-flex">
                    <img src="images/worker-of-service-center-showing-smartphone-and-broken-screen-protection--300x200.jpg"
                        alt="Post Image" class="post-img">
                    <div>
                        <a href="#" class="text">How to Protect Your Phone Screen – Tips from MobiCare
                            Experts</a>
                        <br>
                        <span class="text-muted small">October 8, 2024</span>
                    </div>
                </li>
                <li class="mb-3 d-flex">
                    <img src="images/close-up-shot-of-smart-phone-and-tablet-repair-in-a-technology-lab--300x200.jpg"
                        alt="Post Image" class="post-img">
                    <div>
                        <a href="#" class="text">Water Damage? Here’s What to Do Before Bringing It to
                            MobiCare</a>
                        <br>
                        <span class="text-muted small">October 8, 2024</span>
                    </div>
                </li>
                <li class="mb-3 d-flex">
                    <img src="images/the-technician-repairing-the-smartphone-s-motherboard-in-the-workshop-on-the-table--300x200.jpg"
                        alt="Post Image" class="post-img">
                    <div>
                        <a href="#" class="text">Top 7 Signs Your Phone Needs a Battery Replacement</a>
                        <br>
                        <span class="text-muted small">October 8, 2024</span>
                    </div>
                </li>
                <li class="mb-3 d-flex">
                    <img src="images/a-young-man-repairs-a-smartphone-at-home--300x200.jpg" alt="Post Image"
                        class="post-img">
                    <div>
                        <a href="#" class="text">Is It Better to Repair or Replace Your Phone? MobiCare
                            Has the Answer</a>
                        <br>
                        <span class="text-muted small">October 8, 2024</span>
                    </div>
                </li>
                <li class="d-flex">
                    <img src="images/two-damaged-phones-displayed-on-table-in-electronic-repair-workshop-300x200.jpg"
                        alt="Post Image" class="post-img">
                    <div>
                        <a href="#" class="text">5 Common Phone Problems and How MobiCare Can Fix Them
                            Fast</a>
                        <br>
                        <span class="text-muted small">October 8, 2024</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>


</div>