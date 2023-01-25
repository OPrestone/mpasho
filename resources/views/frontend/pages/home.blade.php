

  @extends('frontend.includes.layouts.app')

@section('template_title')
    Welcome {{ Auth::user()->name }}
@endsection

@section('head')
@endsection

@section('content')
      <section class="top-posts">
        <div class="container mt-4 mb-5">
          <div class="row g-0 shadow-sm">
            @foreach($top_post->slice(1,1) as $k)
                <div class="col-md-3 right-posts h300">
                  <div class="card border-0"> 
                    <span class="mb-3 cat">{{$k->category->name}}</span>
                    <img src="{{asset('uploads/posts/'.$post->image)}}" class="w-100 shadow-sm" loading="lazy" alt="{{$k->name}}">
                          
                        <div class="card-body border-left px-2">
                           <h5 class="title-2 mb-3"> {{$k->name}}
                        </h5>
                        <small class="card-text text-muted">Living Large : EP1 | 13:09</small>
                        </div>
                      </div>
                    </div>
            @endforeach
            @foreach($top_post->slice(0,1) as $k)
            <div class="col-md-6 mb-md-0 mb-3">
              <div class="card main-post shadow-sm border-0 text-white">
                   <img src="{{asset('uploads/posts/'.$post->image)}}" class="w-100 shadow-sm" loading="lazy" alt="{{$k->name}}">
                  <div class="card-img-overlay">
                    <span class="mb-3 cat">{{$k->category->name}}</span>
                    <h2 class="card-title"><b> {{$k->name}}</b></h2>
                    <p class="card-text">{{$k->created_at}}</p>
                  </div>
                </div>
            </div>
            @endforeach
            @foreach($top_post->slice(2,1) as $k)
                <div class="col-md-3 right-posts h300">
                  <div class="card border-0"> 
                    <span class="mb-3 cat">{{$k->category->name}}</span>
                    <img src="{{asset('uploads/posts/'.$post->image)}}" class="w-100 shadow-sm" loading="lazy" alt="{{$k->name}}">
                          
                        <div class="card-body border-left px-2">
                           <h5 class="title-2 mb-3"> {{$k->name}}
                        </h5>
                        <small class="card-text text-muted">Living Large : EP1 | 13:09</small>
                        </div>
                      </div>
                    </div>
            @endforeach
          </div>
        </div>
      </section>   
      <section>
        <div class="container reveal">
          <div class="row my-3">
            <div class="section-title">
              <h4> Exclusives<span class="right-decor"><span></span><span></span><span></span><span></span><span></span><span></span></span></h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 h300 right-posts">
              <div class="row">
                <div class="col-md-6">
                  <div class="card border-0"> 
                    <span class="mb-3 cat">Habari</span>
                           <img src="https://bazinga.themerex.net/wp-content/uploads/2017/11/post-15-copyright.jpg" class="w-100 shadow-sm" loading="lazy" alt="...">
                          
                        <div class="card-body px-2">
                           <h5 class="title-2 mb-3">Noti flow comes clean on her progress on King Alamis health
                        </h5>
                        <small class="card-text text-muted">Living Large : EP1 | 13:09</small>
                        </div>
                        </div>
                </div>
                <div class="col-md-6">
                  <div class="card border-0"> 
                    <span class="mb-3 cat">Habari</span>
                           <img src="https://bazinga.themerex.net/wp-content/uploads/2017/11/post-10-copyright-565x392.jpg" class="w-100 shadow-sm" loading="lazy" alt="...">
                          
                        <div class="card-body px-2">
                           <h5 class="title-2 mb-3">10 most common forms of cyberbullying
                        </h5>
                        <small class="card-text text-muted">Living Large : EP1 | 13:09</small>
                        </div>
                        </div>
                </div>
                <div class="col-md-6">
                  <div class="card border-0"> 
                    <span class="mb-3 cat">Habari</span>
                           <img src="https://bazinga.themerex.net/wp-content/uploads/2017/11/post-5-copyright-565x392.jpg" class="w-100 shadow-sm" loading="lazy" alt="...">
                          
                        <div class="card-body px-2">
                           <h5 class="title-2 mb-3">Chameleone snubs his wife on her birthday 
                        </h5>
                        <small class="card-text text-muted">Living Large : EP1 | 13:09</small>
                        </div>
                        </div>
                </div>
                <div class="col-md-6">
                  <div class="card border-0"> 
                    <span class="mb-3 cat">Habari</span>
                           <img src="https://bazinga.themerex.net/wp-content/uploads/2017/11/post-16-copyright-565x392.jpg" class="w-100 shadow-sm" loading="lazy" alt="...">
                          
                        <div class="card-body px-2">
                           <h5 class="title-2 mb-3">Bahati speaks after making peace with Harmonize 
                        </h5>
                        <small class="card-text text-muted">Living Large : EP1 | 13:09</small>
                        </div>
                        </div>
                </div> 
              </div>
            </div>
            <div class="col-md-4 sidebar">
              <div class="sticky-top">
              <div class="card border-0"> 
                <div class="row mb-3">
                <div class="col-3 post_thumb">
                  <div class="no">1</div>
                  <img src="https://bazinga.themerex.net/wp-content/uploads/2017/11/post-26-copyright-291x232.jpg" class="w-100 shadow-sm circled" loading="lazy" alt="...">
                </div> 
                <div class="col-9">
                   <div class="ps-2">
                    <small class="card-text text-muted">
                <span class="mb-3 text-danger">Habari</span> . Living Large : EP1 | 13:09</small>
                       <h6 class="title-3 mb-3">I lost my twins- Sarah Kabu opens up on painful miscarriage
                    </h6>
                    </div>
                </div>
                </div>
              </div>
              <div class="card border-0"> 
                <div class="row mb-3">
                <div class="col-3 post_thumb">
                  <div class="no">2</div>
                  <img src="https://akns-images.eonline.com/eol_images/Entire_Site/20221014/rs_634x1024-221114121058-634-Jenny-Ortega-LT-111422-shutterstock_editorial_13622180a.jpg?fit=around%7C634:1024&output-quality=90&crop=634:1024;center,top" class="w-100 shadow-sm circled" loading="lazy" alt="...">
                </div> 
                <div class="col-9">
                   <div class="ps-2">
                    <small class="card-text text-muted">
                <span class="mb-3 text-danger">Habari</span> . Living Large : EP1 | 13:09</small>
                       <h6 class="title-3 mb-3">Eddy Kenzo-My life is in danger 
                    </h6>
                    </div>
                </div>
                </div>
              </div>
              <div class="card border-0"> 
                <div class="row mb-3">
                <div class="col-3 post_thumb">
                  <div class="no">3</div>
                  <img src="https://lh3.googleusercontent.com/e3OzaqaDAKzgWCyVUddnrYYU6eUhxZezgro2cRS0pudt_FgoGIIyXJrQCiCM2i2FqDplYJRGxA08yDBp0iepLbjObWWpRsA=s800" class="w-100 shadow-sm circled" loading="lazy" alt="...">
                </div> 
                <div class="col-9">
                   <div class="ps-2">
                    <small class="card-text text-muted">
                <span class="mb-3 text-danger">Habari</span> . Living Large : EP1 | 13:09</small>
                       <h6 class="title-3 mb-3">I lost my twins- Sarah Kabu opens up on painful miscarriage
                    </h6>
                    </div>
                </div>
                </div>
              </div>
              <div class="card border-0"> 
                <div class="row mb-3">
                <div class="col-3 post_thumb">
                  <div class="no">4</div>
                  <img src="https://lh3.googleusercontent.com/1UlBWC5o0zQRmJlq2ivnbzso7H-HZjBKjSjbwQmdgRcdQqx_tWWpXfLT5ebRvkjFWjXQ-Xo8anpsEywsbV62Oc13BRtvjzEK=s800" class="w-100 shadow-sm circled" loading="lazy" alt="...">
                </div> 
                <div class="col-9">
                   <div class="ps-2">
                    <small class="card-text text-muted">
                <span class="mb-3 text-danger">Habari</span> . Living Large : EP1 | 13:09</small>
                       <h6 class="title-3 mb-3">Bahati speaks after making peace with Harmonize 
                    </h6>
                    </div>
                </div>
                </div>
              </div>
              <div class="card border-0"> 
                <div class="row mb-3">
                <div class="col-3 post_thumb">
                  <div class="no">5</div>
                  <img src="https://lh3.googleusercontent.com/vTIH-yM8SUkFt-4JGsFT7vx_8GcjAccoSK1POtpyr9LBNnhxAWXodEsIYqQMfVadwytMNoPWdRMV6PDpSsfEnuWW2Ke-qOvt=s800" class="w-100 shadow-sm circled" loading="lazy" alt="...">
                </div> 
                <div class="col-9">
                   <div class="ps-2">
                    <small class="card-text text-muted">
                <span class="mb-3 text-danger">Habari</span> . Living Large : EP1 | 13:09</small>
                       <h6 class="title-3 mb-3">Wema Sepetu gives brilliant relationship advice
                    </h6>
                    </div>
                </div>
                </div>
              </div>
              <div class="card border-0"> 
                <div class="row mb-3">
                <div class="col-3 post_thumb">
                  <div class="no">6</div>
                  <img src="https://lh3.googleusercontent.com/FSEyK9FqKa8CoYiHdtZOHErGHqXvzD2knuMMlTFmjQehE1sahU_1v2Kj5qTr59nKaY3LfNAW7VSz1xzsGms8d7Q23mcgrkg=s800" class="w-100 shadow-sm circled" loading="lazy" alt="...">
                </div> 
                <div class="col-9">
                   <div class="ps-2">
                    <small class="card-text text-muted">
                <span class="mb-3 text-danger">Habari</span> . Living Large : EP1 | 13:09</small>
                       <h6 class="title-3 mb-3">8 likely reasons your car could catch fire
                    </h6>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
      <section class="top-posts">
        <div class="container my-3">
          <div class="section-title">
            <h4> Trending this Week<span class="right-decor"><span></span><span></span><span></span><span></span><span></span><span></span></span></h4>
          </div>
        </div>
        <div class="container reveal mt-4 mb-5"> 
            <div class="right-posts">
              <div class="row g-0 h300 shadow-sm">
                <div class="col-md-3">
                  <div class="card border-0"> 
                    <span class="mb-3 cat">Habari</span> 
                           <img src="https://lh3.googleusercontent.com/5ArFnahhdrqnXol1NkuiCFkzsNa0ZOVdjz8iktqMznDvlpuTAyIoGTFY3hL1UiEVAwdubqmbn3C12XeEsbWD9ChiZeyyVgaJ=s800" class="w-100 shadow-sm" loading="lazy" alt="...">
                          
                        <div class="card-body px-2">
                           <h5 class="title-2 mb-3">11 signs someone might have autism 
                        </h5>
                        <small class="card-text text-muted">Living Large : EP1 | 13:09</small>
                        </div>
                        </div>
              </div>
              <div class="col-md-3">
                <div class="card border-0"> 
                  <span class="mb-3 cat">Lifestyle</span>
                         <img src="https://lh3.googleusercontent.com/j2uuEm5IuRx6G22xgb8Gwf8boD3nozTKowqUPJHP8wDedB6qTp1bp3nxbClW6qMb8rOO_l6eBKd41hSodJTQ7aUBJYaKu6Jr=s800" class="w-100 shadow-sm" loading="lazy" alt="...">
                        
                      <div class="card-body border-left px-2">
                         <h5 class="title-2 mb-3">Fun activities that families can do this festive season 
                      </h5>
                      <small class="card-text text-muted">Living Large : EP1 | 13:09</small>
                      </div>
                      </div>
            </div>
            <div class="col-md-3">
              <div class="card border-0"> 
                <span class="mb-3 cat">Lifestyle</span>
                       <img src="https://lh3.googleusercontent.com/PlrnZWSbkrNPp_EKI1Hv3jUx2C69VeQh3ia94NFD7pBBdxXL43Kz4IqVBvkcm2nEfAHEpP9PiaRwhrbNk7TMnyLE62CmXng=s800" class="w-100 shadow-sm" loading="lazy" alt="...">
                      
                    <div class="card-body border-left px-2">
                       <h5 class="title-2 mb-3">10 most common forms of cyberbullying
                    </h5>
                    <small class="card-text text-muted">Living Large : EP1 | 13:09</small>
                    </div>
                    </div>
          </div>
          <div class="col-md-3">
            <div class="card border-0"> 
              <span class="mb-3 cat">Lifestyle</span>
                     <img src="https://lh3.googleusercontent.com/cRYVOdBGoc2rRb1_cdUqj0nlv9kP3zTy_7igNkx1gI4cZXJ9lvvvwEQypGP2rDglryaT_wJhwndUucaI4_vs_fWGuEP0Dms=s800" class="w-100 shadow-sm" loading="lazy" alt="...">
                    
                  <div class="card-body border-left px-2">
                     <h5 class="title-2 mb-3">Sad! Nairobi stepdad kidnaps son for Sh50k ransom 
                  </h5>
                  <small class="card-text text-muted">Living Large : EP1 | 13:09</small>
                  </div>
                  </div>
        </div>
            </div>
          </div>
        </div>
      </section> 

      <section class="videos reveal py-3 mb-5">
        <div class="container mt-4 mb-5">
        <div class="my-3">
          <div class="section-title text-white">
            <h4> Trending this Week<span class="right-decor"><span></span><span></span><span></span><span></span><span></span><span></span></span></h4>
          </div>
        </div>
          <div class="row g-0 shadow-sm">
            <div class="col-md-6">
              <div class="card main-post shadow-sm border-0 text-white">
                <div class="plays"><i class="fa-solid fa-video"></i></div>
                <div class="overlay"><i class="fa-solid fa-play"></i></div>  
                   <img src="https://bazinga.themerex.net/wp-content/uploads/2017/11/post-31-copyright.jpg" class="w-100" loading="lazy" alt="...">
                  <div class="card-img-overlay">
                    <span class="mb-3 cat">Burudani</span>
                    <h2 class="card-title"><b>TV personality Garcelle Beauvais beams in a red poncho, leather skirt</b></h2>
                    <p class="card-text">by Alisha Williams . 4 April, 2032</p>
                  </div>
                </div>
            </div> 
            <div class="col-md-3">
              <div class="card main-post shadow-sm border-0 text-white">
                <div class="plays"><i class="fa-solid fa-video"></i></div>
                <div class="overlay"><i class="fa-solid fa-play"></i></div>  
                   <img src="https://magazilla.cmsmasters.net/wp-content/uploads/2018/03/322.jpg" class="w-100" loading="lazy" alt="...">
                  <div class="card-img-overlay">
                    <span class="mb-3 cat">Burudani</span>
                    <h4 class="card-title"><b>Daddy Owen mourns cousin shot dead by police officer </b></h4>
                    <p class="card-text">by Alisha Williams . 4 April, 2032</p>
                  </div>
                </div>
            </div> 
            <div class="col-md-3">
              <div class="card main-post shadow-sm border-0 text-white">
                <div class="plays"><i class="fa-solid fa-video"></i></div>
                <div class="overlay"><i class="fa-solid fa-play"></i></div>  
                   <img src="https://lh3.googleusercontent.com/s6N5S0FJi1SMkfZnxgIgWfEmbb_QWedv-ocasqZpTzvhcmJJzWzPffn7MnaNse1Yewz-DFvZt8uzOljqTu5LeGsdRcljYunXKA=s800" class="w-100" loading="lazy" alt="...">
                  <div class="card-img-overlay">
                    <span class="mb-3 cat">Burudani</span>
                    <h4 class="card-title"><b>Hamisa-I am ready to get married</b></h4>
                    <p class="card-text">by Alisha Williams . 4 April, 2032</p>
                  </div>
                </div>
            </div> 
        </div>
      </section> 
        
      <section>
        <div class="container reveal">
          <div class="row my-3">
            <div class="section-title">
              <h4> Segments<span class="right-decor"><span></span><span></span><span></span><span></span><span></span><span></span></span></h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 h300 bottom-posts">
              <div class="row">
                <div class="col-md-6">
                  <div class="card border-0"> 
                    <span class="mb-3 cat">Lifestyle</span>
                           <img src="https://bazinga.themerex.net/wp-content/uploads/2017/11/post-15-copyright.jpg" class="w-100 shadow-sm" loading="lazy" alt="...">
                          
                        <div class="card-body px-0 pb-1">
                        <small class="card-text text-muted">Living Large : EP1 | 13:09</small>
                           <h5 class="title-2">Noti flow comes clean on her progress on King Alamis health
                        </h5>
                        <p class="mb-0">Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual</p>
                        </div>
                        </div>
                        <hr>
                        <div class="h100"> 
                          <div class="row mb-3">
                          <div class="col-4"> 
                            <img src="https://bazinga.themerex.net/wp-content/uploads/2017/11/post-26-copyright-291x232.jpg" class="w-100 shadow-sm" loading="lazy" alt="...">
                          </div> 
                          <div class="col-8">
                             <div class="px-1">
                              <small class="card-text text-muted">
                          <span class="mb-3 text-danger">Lifestyle</span> . Living Large : EP1 | 13:09</small>
                                 <h6 class="title-3 mb-3">I lost my twins- Sarah Kabu opens up on painful miscarriage
                              </h6>
                              </div>
                          </div>
                          </div>
                          <div class="row mb-3">
                          <div class="col-4"> 
                            <img src="https://lh3.googleusercontent.com/e3OzaqaDAKzgWCyVUddnrYYU6eUhxZezgro2cRS0pudt_FgoGIIyXJrQCiCM2i2FqDplYJRGxA08yDBp0iepLbjObWWpRsA=s800" class="w-100 shadow-sm" loading="lazy" alt="...">
                          </div> 
                          <div class="col-8">
                             <div class="px-1">
                              <small class="card-text text-muted">
                          <span class="mb-3 text-danger">Lifestyle</span> . Living Large : EP1 | 13:09</small>
                                 <h6 class="title-3 mb-3">I lost my twins- Sarah Kabu opens up on painful miscarriage
                              </h6>
                              </div>
                          </div>
                          </div>
                          <div class="row mb-3">
                          <div class="col-4"> 
                            <img src="https://akns-images.eonline.com/eol_images/Entire_Site/20221014/rs_634x1024-221114121058-634-Jenny-Ortega-LT-111422-shutterstock_editorial_13622180a.jpg?fit=around%7C634:1024&output-quality=90&crop=634:1024;center,top" class="w-100 shadow-sm" loading="lazy" alt="...">
                          </div> 
                          <div class="col-8">
                             <div class="px-1">
                              <small class="card-text text-muted">
                          <span class="mb-3 text-danger">Lifestyle</span> . Living Large : EP1 | 13:09</small>
                                 <h6 class="title-3 mb-3">I lost my twins- Sarah Kabu opens up on painful miscarriage
                              </h6>
                              </div>
                          </div>
                          </div> 
                        </div>
                </div>
                <div class="col-md-6">
                  <div class="card border-0"> 
                    <span class="mb-3 cat">Exclusives
                    </span>
                           <img src="https://lh3.googleusercontent.com/cRYVOdBGoc2rRb1_cdUqj0nlv9kP3zTy_7igNkx1gI4cZXJ9lvvvwEQypGP2rDglryaT_wJhwndUucaI4_vs_fWGuEP0Dms=s800" class="w-100 shadow-sm" loading="lazy" alt="...">
                          
                        <div class="card-body px-0 pb-1">
                          <small class="card-text text-muted">Living Large : EP1 | 13:09</small>
                             <h5 class="title-2">American rapper Blueface arrested over murder charges 
                          </h5>
                          <p class="mb-0">Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual</p>
                          </div> 
                        </div>
                        <hr>
                        <div class="h100"> 
                          <div class="row mb-3">
                          <div class="col-4"> 
                            <img src="https://lh3.googleusercontent.com/Vvet59WOTCVyraiieGX95mgHRPHWH22Kg6ooEbP-zBuDzI96FO4Leu0c3r29zU9E1KCyEfErD_f9Neb7eiM444PuWXbz6W13=s800" class="w-100 shadow-sm" loading="lazy" alt="...">
                          </div> 
                          <div class="col-8">
                             <div class="px-1">
                              <small class="card-text text-muted">
                          <span class="mb-3 text-danger">Exclusives</span> . Living Large : EP1 | 13:09</small>
                                 <h6 class="title-3 mb-3">I lost my twins- Sarah Kabu opens up on painful miscarriage
                              </h6>
                              </div>
                          </div>
                          </div>
                          <div class="row mb-3">
                          <div class="col-4"> 
                            <img src="https://lh3.googleusercontent.com/9wZk5yUB32QiZjh0HIFgiLHSJP9sZg_v9GWOb-SeUy1sOg03V3bvWwf0AiBnQ00SlWiemOq_an5qR2LUSotCYCwZsOXjoco=s800" class="w-100 shadow-sm" loading="lazy" alt="...">
                          </div> 
                          <div class="col-8">
                             <div class="px-1">
                              <small class="card-text text-muted">
                          <span class="mb-3 text-danger">Exclusives</span> . Living Large : EP1 | 13:09</small>
                                 <h6 class="title-3 mb-3">I lost my twins- Sarah Kabu opens up on painful miscarriage
                              </h6>
                              </div>
                          </div>
                          </div>
                          <div class="row mb-3">
                          <div class="col-4"> 
                            <img src="https://lh3.googleusercontent.com/vWNAdm8BD6w6gOW8gu3R56ITSk974suyGbJOL1R3E5HoHmw5hR-urCkJ09SC9U-nVCUg-m83SxtqwnJ5dNZqL2e2-OPYYvh_=s800" class="w-100 shadow-sm" loading="lazy" alt="...">
                          </div> 
                          <div class="col-8">
                             <div class="px-1">
                              <small class="card-text text-muted">
                          <span class="mb-3 text-danger">Exclusives</span> . Living Large : EP1 | 13:09</small>
                                 <h6 class="title-3 mb-3">I lost my twins- Sarah Kabu opens up on painful miscarriage
                              </h6>
                              </div>
                          </div>
                          </div> 
                        </div>
                </div> 
              </div>
            </div>
            <div class="col-md-3 sidebar">
              <div class="sticky-top">
              <div class="bg-light-kiss p-2">
                <div class="row mx-0 py-3">
                  <div class="section-title text-center">
                    <h5><span class="left-decor"><span></span><span></span><span></span><span></span><span></span><span></span></span> <b>Trending</b> <span class="right-decor"><span></span><span></span><span></span><span></span><span></span><span></span></span></h5>
                  </div>
                </div>
              <div class="border-0">  
                <div class="row mx-0 mb-3 border-bottom"> 
                   <div class="ps-2">
                    <small class="card-text text-muted">
                <span class="mb-3 text-danger">Lifestyle</span> . Living Large : EP1 | 13:09</small>
                       <h6 class="title-3 mb-3">I lost my twins- Sarah Kabu opens up on painful miscarriage
                    </h6>
                </div>
                </div>
              </div>
              <div class="border-0"> 
                <div class="row mx-0 mb-3 border-bottom"> 
                   <div class="ps-2">
                    <small class="card-text text-muted">
                <span class="mb-3 text-danger">Habari</span> . Living Large : EP1 | 13:09</small>
                       <h6 class="title-3 mb-3">Eddy Kenzo-My life is in danger 
                    </h6> 
                </div>
                </div>
              </div>
              <div class="border-0"> 
                <div class="row mx-0 mb-3 border-bottom"> 
                   <div class="ps-2">
                    <small class="card-text text-muted">
                <span class="mb-3 text-danger">Habari</span> . Living Large : EP1 | 13:09</small>
                       <h6 class="title-3 mb-3">I lost my twins- Sarah Kabu opens up on painful miscarriage
                    </h6> 
                </div>
                </div>
              </div>
              <div class="border-0"> 
                <div class="row mx-0 mb-3 border-bottom"> 
                   <div class="ps-2">
                    <small class="card-text text-muted">
                <span class="mb-3 text-danger">Habari</span> . Living Large : EP1 | 13:09</small>
                       <h6 class="title-3 mb-3">Bahati speaks after making peace with Harmonize 
                    </h6> 
                </div>
                </div>
              </div>
              <div class="border-0">
                <div class="row mx-0 mb-3 border-bottom"> 
                   <div class="ps-2">
                    <small class="card-text text-muted">
                <span class="mb-3 text-danger">Habari</span> . Living Large : EP1 | 13:09</small>
                       <h6 class="title-3 mb-3">Wema Sepetu gives brilliant relationship advice
                    </h6> 
                </div>
                </div>
              </div> 
            </div>
            <div class="bg-light-kiss p-3 my-3">
              <h5 class="my-3">Subscribe to Our Newsletter</h5>
              <form action="">
                <input type="text" placeholder="Enter email" class="form-control my-3">
                <input type="submit" class="form-control btn btn-danger">
                <p>*we hate spam as much as you do</p>
              </form>
            </div>

              </div>
          </div>
        </div>
        </div>
      </section>
    </body>
    
  @endsection
