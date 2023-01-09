@extends('masterPage')

@section('content')
    <div class="home-slide">

        <div class="home-slide-wrapper">
            <div class="home-slide-wrap">
                <img class="home-slide-wrap-img" draggable="false" loading = 'lazy' src="{{asset('client/assets/imgs/camionred.jpg')}}" alt="">
                <div class="home-slide-wrap-title">
                    <span>
                        <i>
                            <h2 class="strikethrough strikethrough-left">vận chuyển đường bộ</h2>
                        </i>
                    </span>
                    <span>
                        <p class="strikethrough strikethrough-right">Công ty chúng tôi sẽ phục vụ cho Quý Công ty với giá tốt nhất, an toàn nhất.</p>
                    </span>
                </div>
            </div>
    
            <div class="home-slide-wrap">
                <img class="home-slide-wrap-img" draggable="false" loading = 'lazy' src="{{asset('client/assets/imgs/construction.jpg')}}" alt="">
                <div class="home-slide-wrap-title">
                    <span>
                        <i>
                            <h2 class="strikethrough strikethrough-left">vận chuyển đường bộ</h2>
                        </i>
                    </span>
                    <span>
                        <p class="strikethrough strikethrough-right">Công ty chúng tôi sẽ phục vụ cho Quý Công ty với giá tốt nhất, an toàn nhất.</p>
                    </span>
                </div>
            </div>
    
            <div class="home-slide-wrap">
                <img class="home-slide-wrap-img" draggable="false" loading = 'lazy' src="{{asset('client/assets/imgs/container.jpg')}}" alt="">
                <div class="home-slide-wrap-title">
                    <span>
                        <i>
                            <h2 class="strikethrough strikethrough-left">vận chuyển đường bộ</h2>
                        </i>
                    </span>
                    <span>
                        <p class="strikethrough strikethrough-right">Công ty chúng tôi sẽ phục vụ cho Quý Công ty với giá tốt nhất, an toàn nhất.</p>
                    </span>
                </div>
            </div>
    
            <div class="home-slide-wrap">
                <img class="home-slide-wrap-img" draggable="false" loading = 'lazy' src="{{asset('client/assets/imgs/hamburg.jpg')}}" alt="">
                <div class="home-slide-wrap-title">
                    <span>
                        <i>
                            <h2 class="strikethrough strikethrough-left">vận chuyển đường bộ</h2>
                        </i>
                    </span>
                    <span>
                        <p class="strikethrough strikethrough-right">Công ty chúng tôi sẽ phục vụ cho Quý Công ty với giá tốt nhất, an toàn nhất.</p>
                    </span>
                </div>
            </div>
        </div>

        <div class="navigation">
            <div class="circle active" data-image="0"></div>
            <div class="circle" data-image="1"></div>
            <div class="circle " data-image="2"></div>
            <div class="circle" data-image="3"></div>
        </div>

    </div>
    <div class="home-service">
        <h3 class="h3-heading">Dịch vụ chính</h3>
<div>
    
    <div class="home-service-slide">



        <div class="home-service-slide-group">
            <div class="home-service-container-wrap">
                <a href="" class="home-service-container-wrap-link">
                    <img src="{{asset('client/assets/imgs/IMG_0203.jfif')}}" alt="">
                    <div class="home-service-container-wrap-link-content">
                        <h4 class="h4-under-line">Chằng buộc hàng hóa</h4>
                        <p>NHAT HUNG MARITIME .Với đội ngũ kỹ thuật viên chằng buộc hàng hóa dày dặn kinh nghiệm dưới sự kiểm soát chặt chẽ, nghiêm ngặt của chúng tôi sẽ đảm bảo..</p>
                    </div>
                </a>
            </div>

            <div class="home-service-container-wrap">
                <a href="" class="home-service-container-wrap-link">
                    <img src="{{asset('client/assets/imgs/pexels-karolina-grabowska-4498139.jpg')}}" alt="">
                    <div class="home-service-container-wrap-link-content">
                        <h4 class="h4-under-line">Đóng kiện hàng hóa</h4>
                        <p>Chúng tôi chuyên cung cấp dịch vụ đóng gói, đóng kiện gỗ, thùng gỗ, pallet gỗ và hút chân không. Tùy thuộc vào yêu cầu của quý khách hay tùy vào từng loại hàng hóa chúng tôi sẽ tư vấn miễn phí cho Quý khách sao cho tiết kiệm chi phí mà vẫn đảm bảo được chất lượng của hàng hóa trong quá trình vận chuyển.</p>
                    </div>
                </a>
            </div>

            <div class="home-service-container-wrap">
                <a href="" class="home-service-container-wrap-link">
                    <img src="{{asset('client/assets/imgs/IMG_9876.jfif')}}" alt="">
                    <div class="home-service-container-wrap-link-content">
                        <h4 class="h4-under-line">Di dời & lắp đặt máy móc</h4>
                        <p>Với sự trang bị mới, đầy đủ và đa dạng thiết bị, dụng cụ phục vụ cho việc di dời và lắp đặt như: xe cẩu, xe nâng, con rùa, con đội,… sẽ mang lại giải pháp cho mọi tình huống yêu cầu di rời lắp đặt của Quý khách hàng.</p>
                    </div>
                </a>
            </div>

            <div class="home-service-container-wrap">
                <a href="" class="home-service-container-wrap-link">
                    <img src="{{asset('client/assets/imgs/construction.jpg')}}" alt="">
                    <div class="home-service-container-wrap-link-content">
                        <h4 class="h4-under-line">Đóng & rút hàng Container</h4>
                        <p>Công ty chúng TNHH Nhật Hùng ngoài những nghành chằng buộc, đóng kiện, Công ty chúng tôi còn chuyên về đóng và rút hàng Container.</p>
                    </div>
                </a>
            </div>

            <div class="home-service-container-wrap">
                <a href="" class="home-service-container-wrap-link">
                    <img src="{{asset('client/assets/imgs/ikea-g.jpg')}}" alt="">
                    <div class="home-service-container-wrap-link-content">
                        <h4 class="h4-under-line">Cung cấp vật tư</h4>
                        <p></p>
                    </div>
                </a>
            </div>

            <div class="home-service-container-wrap">
                <a href="" class="home-service-container-wrap-link">
                    <img src="{{asset('client/assets/imgs/semi-trailer.jpg')}}" alt="">
                    <div class="home-service-container-wrap-link-content">
                        <h4 class="h4-under-line">Vận chuyển hàng hóa</h4>
                        <p></p>
                    </div>
                </a>
            </div>

            
        </div>

        

    </div>

</div>

    </div>
    <div class="home-news">
        <h3 class="h3-heading">Tin nổi bật</h3>
            <div class="grid">
                <div class="row gap-1">
                    <div class="col-4-xl col-6-lg col-12-md">
                        <a href="" class="home-news-link">
                            <img src="{{asset('client/assets/imgs/port-g.jpg')}}" alt="">
                            <div class="home-news-link-border">
                              <p class="home-news-link-border-title">Kỳ vọng nào cho thị trường vận tải dầu trong hai năm tới?</p>  
                            
                              <p class="home-news-link-border-date">23/02/2017</p>
                              
                            </div>
                        </a>
                    </div>
                    <div class="col-4-xl col-6-lg col-12-md">
                        <a href="" class="home-news-link">
                            <img src="{{asset('client/assets/imgs/semi-trailer.jpg')}}" alt="">
                            <div class="home-news-link-border">
                              <p class="home-news-link-border-title">Chú ý về máy móc khi tàu chuyển từ nóng sang lạnh</p>  
                            
                              <p class="home-news-link-border-date">21/02/2017</p>
                              
                            </div>
                        </a>
                    </div>
                    <div class="col-4-xl col-12-lg col-12-md">
                        <div class="home-news-item">
                            
                        <a href="" class="home-news-item-small">
                            <img src="{{asset('client/assets/imgs/4-p21.jpg')}}" alt="" class="home-news-item-small-img">
                            <div  class="home-news-item-small-content">
                                <p class="home-news-item-small-content-title">Kỳ vọng nào cho thị trường vận tải dầu trong hai năm tới?</p>
                                <p class="home-news-item-small-content-date">18/2/2017</p>
                            </div>
                        </a>
                        
                        <a href="" class="home-news-item-small">
                            <img src="{{asset('client/assets/imgs/hero-shipboard-768x256-min.jpg')}}" alt="" class="home-news-item-small-img">
                            <div  class="home-news-item-small-content">
                                <p class="home-news-item-small-content-title">Chú ý về máy móc khi tàu chuyển từ nóng sang lạnh</p>
                                <p class="home-news-item-small-content-date">18/2/2017</p>
                            </div>
                        </a>
                        
                        <a href="" class="home-news-item-small">
                            <img src="{{asset('client/assets/imgs/camionred.jpg')}}" alt="" class="home-news-item-small-img">
                            <div  class="home-news-item-small-content">
                                <p class="home-news-item-small-content-title">Kỳ vọng nào cho thị trường vận tải dầu trong hai năm tới?</p>
                                <p class="home-news-item-small-content-date">18/2/2017</p>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>

   
@endsection

@section('js')

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('client/assets/slick/slick.min.js')}}"></script>

<script src="{{asset('client/assets/js/main.js')}}"></script>
<script>

$(document).ready(function(){
    var size = 0
    var slideToShow = 0


    var xl = window.matchMedia("(min-width: 1200px)")

    var lg = window.matchMedia("(min-width: 960px) and (max-width: 1200px)")

    var md = window.matchMedia("(min-width: 720px) and (max-width: 960px")

    var sm = window.matchMedia("(min-width: 480px) and (max-width: 720px)")

    var xs = window.matchMedia("(min-width: 0px) and (max-width: 480px)")



    function checkMedia(){
        if(xl.matches){
        slideToShow = 6
        }else if(lg.matches){
            slideToShow = 5;
        }else if(md.matches){
            slideToShow = 4;
        }else if(sm.matches){
            slideToShow = 3;
        }else if(xs.matches){
            slideToShow  = 2;
        }

        slick(slideToShow)

    }

    checkMedia()

    window.addEventListener("resize", () => {
        checkMedia() 
    });

    function slick(slidesToShow) {
        if($('.home-service-slide-group').hasClass('slick-initialized')){
            $('.home-service-slide-group').slick('unslick');
        }
        $('.home-service-slide-group').slick({
        slidesToShow: slideToShow,
        slidesToScroll: 1,
        autoplay: true,
        infinity: true,
        autoplaySpeed: 2000,
        prevArrow: `
        <div class="home-service-slide-button home-service-slide-prev">
            <i class="fa-solid fa-arrow-left-long"></i>
        </div>`,
        nextArrow: `
        <div class="home-service-slide-button home-service-slide-next">
            <i class="fa-solid fa-arrow-right-long"></i>
        </div>
        `
    });
    }


});

</script>
@endsection