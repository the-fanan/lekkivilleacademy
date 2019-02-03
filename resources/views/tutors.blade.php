@extends('layouts.master')
@section('title', 'Tutors')
@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-xs" role="banner" style="background-image:url({{ asset('master/images/stock/teacher-group.jpeg') }});background-size:contain;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
			<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
							<div class="display-t">
									<div class="display-tc animate-box" data-animate-effect="fadeIn">
										<h1>Tutors</h1>
									</div>
							</div>
					</div>
			</div>
	</div>
</header>

<div id="fh5co-blog">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>Select Tutor</h2>
				<p></p>
			</div>
		</div>
		<div class="row">

			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="{{ asset('master/images/stock/tutor1.jpeg') }}" alt=""></a>
					<div class="blog-text">
						<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div> 
				</div>
			</div>

			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/project-2.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div> 
				</div>
			</div>

			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div> 
				</div>
			</div>

			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div> 
				</div>
			</div>

		</div>
	</div>
</div>
@endsection