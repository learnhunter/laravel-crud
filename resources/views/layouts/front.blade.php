@php
	$category=DB::table('categories')->orderBy('id','ASC')->get();
	$seo=DB::table('seos')->first();
	

@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="{{ $seo->meta_author }}">
        <meta name="keyword" content="{{ $seo->meta_keyword }}">
        <meta name="description" content="{{ $seo->meta_description }}">
        <meta name="google-verification" content="{{ $seo->google_verification }}">
     
        <title>{{ $seo->meta_title }}</title>

        <link href="{{ asset('public/frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/frontend/assets/css/menu.css') }}" rel="stylesheet">
        <link href="{{ asset('public/frontend/assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/frontend/assets/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('public/frontend/assets/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('public/frontend/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/frontend/assets/style.css') }}" rel="stylesheet">

    </head>
    <body>
    <!-- header-start -->
	<section class="hdr_section">
		<div class="container-fluid">			
			<div class="row">
				<div class="col-xs-6 col-md-2 col-sm-4">
					<div class="header_logo">
						<a href=""><img src="{{ asset('public/frontend/assets/img/demo_logo.png') }}"></a> 
					</div>
				</div>              
				<div class="col-xs-6 col-md-8 col-sm-8">
					<div id="menu-area" class="menu_area">
						<div class="menu_bottom">
							<nav role="navigation" class="navbar navbar-default mainmenu">
						<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- Collection of nav links and other content for toggling -->
								<div id="navbarCollapse" class="collapse navbar-collapse">
									<ul class="nav navbar-nav">
										
										@foreach($category as $row)
										     @php
										       $subcategory=DB::table('subcategories')->where('category_id',$row->id)->get();
										     @endphp
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													@if(session()->get('lang') == 'english')
													   {{ $row->category_en }} 
													@else
													  {{ $row->category_bn }} 
													 @endif
												</a>
											<ul class="dropdown-menu">
												@foreach( $subcategory as $row)
												<li><a href="#">
													@if(session()->get('lang') == 'english')
													   {{ $row->subcategory_en }} 
													@else
													  {{ $row->subcategory_bn }} 
													 @endif
												</a></li>
												@endforeach	
											</ul>
											</li>
										@endforeach
									</ul>
								</div>
							</nav>											
						</div>
					</div>					
				</div> 
				<div class="col-xs-12 col-md-2 col-sm-12">
					<div class="header-icon">
						<ul>
							<!-- version-start -->
							@if(session()->get('lang')== 'english')
							    <li class="version"><a href="{{ route('lang.bangla') }}">Bangla</a></li>
							@else
							  <li class="version"><a href="{{ route('lang.english') }}">English</a></li>
							  @endif

							<!-- login-start -->
						
							<!-- search-start -->
							<li><div class="search-large-divice">
								<div class="search-icon-holder"> <a href="#" class="search-icon" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="modal fade bd-example-modal-lg" action="" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times-circle" aria-hidden="true"></i> </button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-12">
															<div class="custom-search-input">
																<form>
																	<div class="input-group">
																		<input class="search form-control input-lg" placeholder="search" value="Type Here.." type="text">
																		<span class="input-group-btn">
																		<button class="btn btn-lg" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
																	</span> </div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div></li>
							<!-- social-start -->
							<li>
								<div class="dropdown">
								  <button class="dropbtn-02"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
								  <div class="dropdown-content">
									<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
									<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
									<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a>
									<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
								  </div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.header-close -->
	
    <!-- top-add-start -->
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
					<div class="top-add"><img src="assets/img/top-ad.jpg" alt="" /></div>
				</div>
			</div>
		</div>
	</section> <!-- /.top-add-close -->
	
	<!-- date-start -->
    <section>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12 col-sm-12">
					<div class="date">
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>  ঢাকা </li>
							<li><i class="fa fa-calendar" aria-hidden="true"></i> ০৩:৩২ অপরাহ্ন, বৃহস্পতিবার, ০৭ মে ২০২০, ২৪ বৈশাখ ১৪২৭, ১৩ রমজান ১৪৪১ </li>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i> আপডেট ৫ মিনিট আগে</li>
						</ul>
						
					</div>
				</div>
    		</div>
    	</div>
    </section><!-- /.date-close -->  

	
	 
    <section>
    	<div class="container-fluid">
			<div class="row scroll">
				<div class="col-md-2 col-sm-3 scroll_01 ">
					শিরোনাম :
				</div>
				<div class="col-md-10 col-sm-9 scroll_02">
					<marquee>wellcome to our website...</marquee>
				</div>
			</div>
    	</div>
    </section>     


    @yield('content')
	
	<!-- top-footer-start -->
	<section>
		<div class="container-fluid">
			<div class="top-footer">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="foot-logo">
							<img src="assets/img/demo_logo.png" style="height: 50px;" />
						</div>
					</div>
					<div class="col-md-6 col-sm-4">
						 <div class="social">
                            <ul>
                                <li><a href="" target="_blank" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="" target="_blank" class="twitter"> <i class="fa fa-twitter"></i></a></li>
                                <li><a href="" target="_blank" class="instagram"> <i class="fa fa-instagram"></i></a></li>
                                <li><a href="" target="_blank" class="android"> <i class="fa fa-android"></i></a></li>
                                <li><a href="" target="_blank" class="linkedin"> <i class="fa fa-linkedin"></i></a></li>
                                <li><a href="" target="_blank" class="youtube"> <i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="apps-img">
							<ul>
								<li><a href="#"><img src="assets/img/apps-01.png" alt="" /></a></li>
								<li><a href="#"><img src="assets/img/apps-02.png" alt="" /></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.top-footer-close -->
	
	<!-- middle-footer-start -->	
	<section class="middle-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="editor-one">
						Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is 
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="editor-two">
					Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is 
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="editor-three">
						Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is 
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.middle-footer-close -->
	
	<!-- bottom-footer-start -->	
	<section class="bottom-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="copyright">						
						All rights reserved © 2020 LearnHunter
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="btm-foot-menu">
						<ul>
							<li><a href="#">About US</a></li>
							<li><a href="#">Contact US</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	
	
		<script src="{{ asset('public/frontend/assets/js/jquery.min.js')}}"></script>
		<script src="{{ asset('public/frontend/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('public/frontend/assets/js/main.js')}}"></script>
		<script src="{{ asset('public/frontend/assets/js/owl.carousel.min.js')}}"></script>
	</body>
</html> 