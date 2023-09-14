<div>
    @include('livewire.bookingmodel')
    <span id="about"></span>  
    <div class="tm-page-wrap mx-auto">
        {{-- Banner --}}
        <section class="tm-banner">
            <div class="tm-container-outer tm-banner-bg">
                <div class="container">
                    <div class="row tm-banner-row tm-banner-row-header">
                        <div class="col-xs-12">
                            <div class="tm-banner-header">
                                <h1 class="text-uppercase tm-banner-title">Let's begin</h1>
                                {{-- <a href="#services" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>        --}}
                            </div>    
                        </div>                     
                    </div>
                    <div class="row tm-banner-row" id="tm-section-search">
                        <section class="p-5 tm-container-outer">            
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                   
                                        <h2 class="text-uppercase mb-4 text-white"><strong>About Us</strong></h2>
                                        <p class="mb-4 text-white">Nullam auctor, sapien sit amet lacinia euismod, lorem magna lobortis massa, in tincidunt mi metus quis lectus. 
                                            Duis nec lobortis velit. Vivamus id magna vulputate, tempor ante eget, tempus augue. Maecenas ultricies neque magna.</p>                     
                                    </div>
                                </div>
                            </div>            
                        </section>
                    </div>
                    <div class="tm-banner-overlay"></div>
                </div>
            </div>               
            <span id="services"></span>
        </section>
        
        {{-- Layana/Services --}}
        <div class="tm-container-outer" id="services">
            <ul class="nav nav-pills tm-tabs-links">
                <li class="tm-tab-link-li">
                    <p class="tm-tab-link">
                        Layanan Event Yang Kami Berikan
                    </p>
                </li>
            </ul>
            <div class="tab-content clearfix">
                {{-- @forelse ($layanans as $layanan)
                <div class="tab-pane fade show active">
                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-stack-1x fa-inverse fa-layer-group"></i>
                            </span>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">{{$layanan->nama_layanan}}</h3>
                                <p class="tm-text-gray">{{$layanan->deksripsi_layanan}}</p>
                            </div>
                            <a href="" class="tm-recommended-price-box" type="button" class="btn btn-primary" wire:click="bookingModal({{$layanan->id}})"  data-bs-toggle="modal" data-bs-target="#bookingModal">
                                <p class="tm-recommended-price-link">{{$layanan->tombol_layanan}}</p>
                            </a> 
                        </div>
                    </div>
                </div>
                @empty
                @endforelse --}}

                <div class="tab-pane fade show active">
                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-file fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Project</h3>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio haa tes</p>   
                            </div>
                            <a href="" class="tm-recommended-price-box" type="button" class="btn btn-primary" wire:click="bookingModal(1)" data-bs-toggle="modal" data-bs-target="#bookingModal">
                                <p class="tm-recommended-price-link">Atur Jadwal</p>
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active">
                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-book-open fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Seminar</h3>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio haa tes</p>   
                            </div>
                            <a href="" class="tm-recommended-price-box" type="button" class="btn btn-primary" wire:click="bookingModal(2)" data-bs-toggle="modal" data-bs-target="#bookingModal">
                                <p class="tm-recommended-price-link">Atur Jadwal</p>
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active">
                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-comments fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Konsultasi</h3>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio haa tes</p>   
                            </div>
                            <a href="" class="tm-recommended-price-box" type="button" class="btn btn-primary" wire:click="bookingModal(3)" data-bs-toggle="modal" data-bs-target="#bookingModal">
                                <p class="tm-recommended-price-link">Atur Jadwal</p>
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active">
                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-people-group fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Magang</h3>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio haa tes</p>   
                            </div>
                            <a href="" class="tm-recommended-price-box" type="button" class="btn btn-primary" wire:click="bookingModal(4)" data-bs-toggle="modal" data-bs-target="#bookingModal">
                                <p class="tm-recommended-price-link">Atur Jadwal</p>
                            </a> 
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show active">
                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-stack-1x fa-inverse fa-layer-group"></i>
                            </span>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Layanan Lainnya</h3>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio haa tes</p>   
                            </div>
                            <a href="" class="tm-recommended-price-box" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal">
                                <p class="tm-recommended-price-link">Atur Jadwal</p>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        {{-- Footer --}}
        <footer class="tm-container-outer py-4" id=contact>
            <div class="footer-col">
                <div class="footer_contact">
                  <h4 style="color: white">
                    Contact Us
                  </h4>
                    <div class="contact_link_box text-center pb-2" >
                        <a href="" class="px-2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Location
                        </a>
                        <a href="" class="px-2">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            Call +01 1234567890
                        </a>
                        <a href="" class="px-2">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            demo@gmail.com
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <a href="" class="p-2">
                    <i class="fa-brands fa-facebook fa-2xl"></i>
                </a>
                <a href="" class="p-2">
                    <i class="fa-brands fa-twitter fa-2xl"></i>
                </a>
                <a href="" class="p-2">
                    <i class="fa-brands fa-instagram fa-2xl"></i>
                </a>
              </div>
            <p class="mb-0 p-2">Copyright © <span class="tm-current-year">2018</span> Your Company
        </footer>
    </div>
</div>
