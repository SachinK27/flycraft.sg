@extends('layouts.master')

@section('content')

<!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/career-bg.png">
		<span class="background_overlay"></span>
		{{-- <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span> --}}
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Career</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="{{ route('index') }}">Home</a></li>
						<li>Career</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of contact page section
	============================================= -->
	<section id="ft-contact-page" class="ft-contact-page-section page-padding">
		<div class="container  mb-5">
			<div class="ft-contact-page-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ft-contact-page-text-wrapper">
							<div class="ft-section-title-2 headline pera-content">
								{{-- <span class="sub-title bl">Get a Quote</span> --}}
								<h2>Career</h2>
							</div>
							<div class="ft-contact-page-contact-info">
								<p>Join our dynamic team at Flycraft and embark on an exciting career in the aviation and logistics industry. We offer a stimulating work environment that encourages growth, collaboration, and innovation. As part of our team, you'll have the opportunity to work alongside industry experts and gain invaluable experience in a fast-paced, global setting. Take the next step in your career journey and explore the rewarding opportunities that await you at Flycraft.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ft-contact-page-form-wrapper headline">
							<h3 class="text-center">Apply Here</h3>
							<form action="">
								<div class="row">
									<div class="col-md-6">
                                        <div class="wc-input">
                                            <span>Full Name:</span>
                                            <div class="wc-text-input position-relative">
                                                <input type="text" placeholder="your name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wc-input">
                                            <span>Email ID:</span>
                                            <div class="wc-text-input position-relative">
                                                <input type="text" placeholder="your email address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wc-input">
                                            <span>Phone Number:</span>
                                            <div class="wc-text-input position-relative">
                                                <input type="text" placeholder="your phone number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wc-input">
                                            <span>City:</span>
                                            <div class="wc-text-input position-relative">
                                                <input type="text" placeholder="your city">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wc-input">
                                            <span>Country:</span>
                                            <div class="wc-text-input position-relative">
                                                <input type="text" placeholder="your country">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wc-input">
                                            <span>Zip Code:</span>
                                            <div class="wc-text-input position-relative">
                                                <input type="text" placeholder="your zip code">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-12">
                                        <div class="wc-input">
                                            <span>Company:</span>
                                            <div class="wc-text-input position-relative">
                                                <input type="text" placeholder="your company name">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-12">
										<textarea name="message" placeholder="your message"></textarea>
									</div>
									<div class="col-lg-12">
										<button> Request an Estimate</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
<!-- End of contact page section
	============================================= -->	

@endsection