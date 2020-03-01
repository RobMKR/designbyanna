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
                            <li>3D Modeling</li>
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
                        <img src="{{asset('images/3d1.jpg')}}" alt="" class="img-responsive">
                    </div><!-- end media -->
                </div>
                <div class="col-md-6">
                    <div class="message-box right-ab">
                        <h4>3D Furniture Modeling to rendering</h4>
                        <p>
                            Several home builders, furniture store owners etc. approach us for getting exclusive Furniture Designs, 3D Furniture Modeling and Renderings.
                            We have Interior Designers who are working on developing exclusive 3D Furniture Models.
                            Unicorn Associates has strived to define a impeccable standard in the field of product design and development,
                            3D Furniture Rendering services is one of them.
                            e work through developing high precision 3D Furniture Model,
                            Render the Model with photo realistic texture and lighting effect.
                            Our skill sets to develop unique designs and our architectural visualization capabilities are sundry.
                            We have a proven track record of creating high impact 3D Furniture Rendering for a commercial building to a simple 3D Furniture Model for small residence.

                            We constantly strive to adapt to new rendering techniques, improve on our skills and consistently deliver high quality results. We are experts in transforming the requirements of our clients into realistic 3D Furniture Rendering. We also have a library of high quality furniture 3D Models which are used while designing specific homes.

                            Our 3D Furniture Modeling Services and Renderings are provided keeping in mind:
                        </p>
                        <ul>
                            <li>Type Of Building</li>
                            <li>Interior Design Standards</li>
                            <li>Material Specifications, Texture</li>
                            <li>Weather</li>
                            <li>Aesthetic Requirement Of Clients</li>
                        </ul>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{asset('images/services/a2.jpg')}}" alt="" class="img-responsive">
                    </div><!-- end media -->
                </div>
                <div class="col-md-6">
                    <div class="message-box right-ab">
                        <h4>Designing Timeless Experiences</h4>
                        <p>
                            We design exciting places to live in. Our interior and architecture team work in partnership to deliver the most exceptional output matching the taste of the clients.
                            We build a rapport with the client by promoting cooperative and friendly air to foster a good working relationship.
                            Unicorn Associates has built an enviable reputation for high-quality work, attention to details, focused project management, and budget control.
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
                        <h2>Perfect Project Planning</h2>
                        <p>
                            Unicorn Associates tailor designing spaces in a way that enhance your living & satisfies your requirements of a dream home!

                            We specialize in creating homes that are warm, expressive and personal.
                            Successful Architects should not dictate you but enhance the way you live.
                            We offer different services encompassing interior.
                            Architecture, design and project management.
                            Our design philosophy includes both traditional and contemporary areas.
                            We minimize our mistakes and maximize our talent and potential of existing elements.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection