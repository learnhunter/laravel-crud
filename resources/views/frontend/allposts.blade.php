@extends('layouts.front')

@section('content')
	<section class="single-page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">   
					   <li><a href="{{ URL::to('/') }}"><i class="fa fa-home"></i></a></li>					   
						<li><a href="#">
						@if(session()->get('lang') == 'english')
							 All News
					    @else
							 সকল খবর 
						@endif
					</a></li>
						
					</ol>
				</div>
			</div>
		
		  <div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="row">
					@foreach($posts as $row)
					@php
						$slug=preg_replace('/\s+/u', '-', trim($row->title_bn));
					@endphp
						<div class="col-md-4 col-sm-4">
							<div class="top-news sng-border-btm">
								<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug) }}"><img src="{{ asset($row->image) }}" alt="{{ $row->title_bn }}"></a>
								<h4 class="heading-02" style="height: 60px;"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug) }}">
									@if(session()->get('lang') == 'english')
									    {{ $row->title_en }}
									@else
									  {{ $row->title_bn }}
									@endif
								</a> </h4>
							</div>
						</div>
					@endforeach
				</div>
				{{ $posts->links() }}
			</div>
			<div class="col-md-4 col-sm-4">
				<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{ asset('public/frontend/assets/img/add_01.jpg') }}" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
					@php
					$latest=DB::table('posts')->orderBy('id','DESC')->limit(8)->get();
					$favourite=DB::table('posts')->inRandomOrder()->orderBy('id','DESC')->limit(8)->get();
					$highest=DB::table('posts')->inRandomOrder()->orderBy('id','ASC')->limit(8)->get();
					@endphp
					<div class="tab-header">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">
								@if(session()->get('lang') == 'english')
							          	Latest News
							    @else
							          	সর্বশেষ
							    @endif</a></li>
							<li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">
								@if(session()->get('lang') == 'english')
							          	Favourite
							    @else
							          	জনপ্রিয়
							    @endif</a></li>
							<li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">
								@if(session()->get('lang') == 'english')
							          	Highest Read
							    @else
							          	পঠিত 
							    @endif</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content ">
							<div role="tabpanel" class="tab-pane in active" id="tab21">
								<div class="news-titletab">
									@foreach($latest as $row)
									    <div class="news-title-02">
										    <h4 class="heading-03"><a href="#">
										    		@if(session()->get('lang') == 'english')
							          					{{ $row->title_en }}
												    @else
												          	{{ $row->title_bn }}
												    @endif
										    </a> </h4>
								     	</div>
								    @endforeach
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab22">
								<div class="news-titletab">
								  @foreach($favourite as $row)
									    <div class="news-title-02">
										    <h4 class="heading-03"><a href="#">
										    		@if(session()->get('lang') == 'english')
							          					{{ $row->title_en }}
												    @else
												          	{{ $row->title_bn }}
												    @endif
										    </a> </h4>
								     	</div>
								    @endforeach
									
								</div>                                          
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab23">	
								<div class="news-titletab">
									 @foreach($highest as $row)
									    <div class="news-title-02">
										    <h4 class="heading-03"><a href="#">
										    		@if(session()->get('lang') == 'english')
							          					{{ $row->title_en }}
												    @else
												          	{{ $row->title_bn }}
												    @endif
										    </a> </h4>
								     	</div>
								    @endforeach
								</div>						                                          
							</div>
						</div>
					</div>
				<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{ asset('public/frontend/assets/img/add_01.jpg') }}" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
			</div>
		  </div>
		</div>
	</section>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/bn_IN/sdk.js#xfbml=1&version=v3.2&appId=157325511530244&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5bf015c8b4a6560011bd9a88&product=inline-share-buttons' data-href="{{ Request::url() }}" async='async'></script>
@endsection