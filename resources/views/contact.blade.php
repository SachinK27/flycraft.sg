@extends('layouts.master')

@section('content')

<!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/contact-bg.png">
		{{-- <span class="background_overlay"></span> --}}
		{{-- <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span> --}}
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="ft-breadcrumb-content headline text-left position-relative">
						<h2>Contact Us</h2>
						<div class="ft-breadcrumb-list ul-li">
							<p class="text-white">A one stop solution for your logistics and Aviation needs. We provide seamless and efficient logistics services and reliable aviation consumables to meet your diverse needs</p>
							<ul>
								<li><a href="{{ route('index') }}">Home</a></li>
								<li>Contact</li>
							</ul>
						</div>
					</div>
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
				{{-- <div class="row">
					<div class="col-md-8">
						<div class="ft-why-choose-list-wrapper ul-li-block mb-4">
							<ul>
								<li>We provide a comprehensive selection of aviation consumables, including lubricants, Tyres, Grease, Aviation equipment etc from top OEMs</li>
								<li>Our logistics solutions ensure timely and efficient delivery of your goods. From freight forwarding to your doorstep, we have got you covered</li>
								<li>With our global footprint, we assist you navigate complex logistics and aviation needs</li>
							</ul>
						</div>
					</div>
				</div> --}}
				<div class="row">
					<div class="col-lg-6">
						<div class="ft-contact-page-text-wrapper">
							<div class="ft-why-choose-list-wrapper ul-li-block mb-4">
								<ul>
									<li>We provide a comprehensive selection of aviation consumables, including lubricants, Tyres, Grease, Aviation equipment etc from top OEMs</li>
									<li>Our logistics solutions ensure timely and efficient delivery of your goods. From freight forwarding to your doorstep, we have got you covered</li>
									<li>With our global footprint, we assist you navigate complex logistics and aviation needs</li>
								</ul>
							</div>
							<div class="ft-contact-page-contact-info">
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="fal fa-map-marker-alt"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Office address</h3>
										<p>115 Airport Cargo Road, #05-03, Cargo Agents Building C, Singapore 819466</p>
									</div>
								</div>
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-phone-alt"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Telephone number</h3>
										<p>+65 62808366</p>
									</div>
								</div>
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="far fa-envelope"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Mail address</h3>
										<p>info@flycraft.sg</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ft-why-choose-form-wrapper contactpageform">
							<div class="ft-why-choose-form pera-content">
								<div class="h3" style="color: #E31E24;">How can we help you?</div>
								<p class="text-secondary mb-4">Feel free to ask any logistics and aviation related queries</p>
								<form action="javascript:void(0)">
									<div class="row">
										<div class="col-md-6">
											<div class="wc-input">
												{{-- <span>Full Name:</span> --}}
												<div class="wc-text-input position-relative">
													<input type="text" placeholder="full name">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="wc-input">
												{{-- <span>Email ID:</span> --}}
												<div class="wc-text-input position-relative">
													<input type="text" placeholder="your email address">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="wc-input">
												{{-- <span>Phone Number:</span> --}}
												<div class="wc-text-input position-relative">
													<input type="text" placeholder="your phone number">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="wc-input">
												{{-- <span>City:</span> --}}
												<div class="wc-text-input position-relative">
													<input type="text" placeholder="your city">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="wc-input">
												{{-- <span>Country:</span> --}}
												<div class="wc-text-input position-relative">
													<input type="text" placeholder="your country">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="wc-input">
												{{-- <span>Zip Code:</span> --}}
												<div class="wc-text-input position-relative">
													<input type="text" placeholder="your zip code">
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="wc-input">
												{{-- <span>Company:</span> --}}
												<div class="wc-text-input position-relative">
													{{-- <input type="text" placeholder="your company name"> --}}
													<select name="" id="">
														<option value="">What are you interested to enquire about?</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="wc-input">
												{{-- <span>Message:</span> --}}
												<div class="wc-text-input position-relative">
													<input type="text" placeholder="your message">
												</div>
											</div>
										</div>
									</div>
									<button class="text-uppercase" style="background-color: #E31E24;" type="submit">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
<!-- End of contact page section
	============================================= -->	

@endsection