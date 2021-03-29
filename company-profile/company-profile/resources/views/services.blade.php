 <section class="services">
        <div class="container">
            <div class="title text-center">
                <h6 id="about">Our Speakers</h6>
                <h1 class="title-blue">Why Choose Us</h1>
            </div>
           
            <div class="container">
                <div class="row">
                    <div class="col-md-11">
                       
                        <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                            @foreach ($post as $item)
                            <div class="container">
                                <div class="d-flex-justify-content-center">
                                    <div class="md-5">
                                        {{-- <img class="mr-4" src="{{ asset('templates/assets/images/service1.png')}}" alt="Web Development"> --}}
                                        <div class="media-body">
                                            <h5>{{$item->title}}</h5>
                                            {{$item->body}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                       
                    </div>
                </div>
            </div>
            
           
            </div>
        </div>
    </section>