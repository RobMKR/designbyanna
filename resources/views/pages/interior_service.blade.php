@extends('layout')

@section('title', 'Unicorn Associates - Services')

@section('content')

    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Service</h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/service">Service</a></li>
                            <li>Interior</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="about-box">
        <div class="container">
            <hr class="hr1">

            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{asset('images/services/i1.jpg')}}" alt="" class="img-responsive">
                    </div><!-- end media -->
                </div>
                <div class="col-md-6">
                    <div class="message-box right-ab">
                        <h4>From Concept To Final Result</h4>
                        <p>
                            We passionately interior design work to deliver collaborative, exclusively accessible Interior design services.
                            That’s the reason for how we understand you during the design process, understanding your needs, lifestyle, your likes, and dislikes.
                        </p>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{asset('images/services/i2.jpg')}}" alt="" class="img-responsive">
                    </div><!-- end media -->
                </div>
                <div class="col-md-6">
                    <div class="message-box right-ab">
                        <h4>Build Smart Interior design</h4>
                        <p>
                            Our In-house expert team is combined with the highly talented and skilled technicians and craftsmen.
                            This helps us the delivery of the quality assured product from concept to the completion of the final product for interior design.
                        </p>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{asset('images/services/i3.jpg')}}" alt="" class="img-responsive">
                    </div><!-- end media -->
                </div>
                <div class="col-md-6">
                    <div class="message-box right-ab">
                        <h4>Designs Match Your Lifestyle</h4>
                        <p>
                            We passionately work to deliver collaborative, exclusively accessible interior design services and Interior design.
                            That’s the reason of how we understand you during the design process, understanding your needs and lifestyle.
                        </p>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <div class="message-box right-ab">
                        <h4>We also do</h4>
                        <h2>Design & Office Furniture</h2>
                        <p>
                            We provide inspired furniture design collection coupled with skilled craftsmanship.
                            We are able to facilitate the customer with outstanding quality promising exceptional value.
                            We encourage the integrity rather than fashion for contemporary original and balanced expressions.
                            Bespoke upholstery created and customized matching the needs of the client.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection