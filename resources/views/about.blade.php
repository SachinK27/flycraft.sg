	@extends('layouts.master')

	@section('content')
		
	<!-- Start of Breadcrumb section
		============================================= -->
		<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/about-bg.webp">
			{{-- <span class="background_overlay"></span> --}}
			{{-- <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span> --}}
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="ft-breadcrumb-content headline text-left position-relative">
							<h2>Your partner for seamless Logistics and elevated Aviation</h2>
							<div class="ft-breadcrumb-list ul-li">
								{{-- <p class="text-white">Your partner for seamless Logistics and elevated Aviation</p> --}}
								<p class="text-white">Consider FlyCraft as your reliable partner, delivering efficient and excellent logistics and aircraft consumable solutions. We are specialized in providing extensive logistics solutions and a variety of aviation products to meet your unique need</p>
								<ul>
									<li><a href="{{ route('index') }}">Home</a></li>
									<li>About</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
	<!-- End of Breadcrumb section
		============================================= -->

	<!-- Start of About section
		============================================= -->
		<section id="ft-about-2" class="ft-about-section-2">
			<div class="container">
				<div class="ft-about-content-2">
					<div class="row">
						<div class="col-lg-6">
							<div class="ft-about-text-wrapper-2">
								<div class="ft-section-title-2 headline pera-content">
									<span class="bl text-uppercase">Explore our company</span>
									<h2>Utilize our services to experience the difference</h2>
									<p class="mb-3 fw-bold">Maximize Your Firm's Efficiency with Flycraft's Prompt and Dependable Solutions</p>
									<p class="mb-3">At Flycraft, we understand how important it is for your business to operate efficiently. We offer reliable solutions that can help your company be more productive. We provide specialized logistics services and aviation products tailored to your specific needs.</p>
									<p class="mb-3">By choosing Flycraft's logistics solutions, you can gain a competitive advantage that will lead to success. Our extensive network of carriers ensures that your products are delivered quickly and securely, enabling you to efficiently meet your customers' expectations.</p>
									<p>We are a well-known supplier that offers a wide range of top-quality aviation components, innovative technological solutions, and professional maintenance services. Our goal is to keep your fleet in the best possible condition. You can trust Flycraft to provide you with the high-quality resources and support you need to excel in the aviation industry.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="ft-about-img-2-wrapper position-relative">
								<span class="ft-about-shape1 position-absolute"><img src="assets/img/shape/ab-sh1.png" alt=""></span>
								<span class="ft-about-shape2 position-absolute"><img src="assets/img/shape/ab-sh2.png" alt=""></span>
								<div class="ft-about-img-2">
									<img src="assets/img/about/explore2.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of About section
		============================================= -->

	<!-- Start of goodness feature section
		============================================= -->
		<section id="ft-goodness-feature" class="ft-goodness-feature-section">
			<div class="container">
				<div class="ft-goodness-featured-content">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="ft-goodness-featured-innerbox text-center" style="border-top: 30px solid #E42927; border-top-left-radius: 10px; border-top-right-radius: 10px;">
								<div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
									<img src="assets/images/icons/vision.png" alt="">
								</div>
								<div class="ft-goodness-featured-text headline pera-content p-3">
									<h2 class="fw-bolder mb-3">Our Vision</h2>
									<p>Our objective is to establish a global reputation as a prominent frontrunner by providing cutting-edge solutions that simplify the operations for our clients across the globe in the logistics and aviation industry</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="ft-goodness-featured-innerbox text-center" style="border-top: 30px solid #0F01B0; border-top-left-radius: 10px; border-top-right-radius: 10px;">
								<div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
									<img src="assets/images/icons/mission.png" alt="">
								</div>
								<div class="ft-goodness-featured-text headline pera-content p-3">
									<h2 class="fw-bolder mb-3">Our Mission</h2>
									<p>Our goal in Flycraft is to deliver tailored-made solutions with a customer centric approach, encompassing every facet of aviation and logistical assistance, dedicated to serving our esteemed clientele</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="ft-goodness-featured-innerbox text-center" style="border-top: 30px solid #E42927; border-top-left-radius: 10px; border-top-right-radius: 10px;">
								<div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
									<img src="assets/images/icons/values.png" alt="">
								</div>
								<div class="ft-goodness-featured-text headline pera-content p-3">
									<h2 class="fw-bolder mb-3">Our Values</h2>
									<p>Our core convictions lie in the tenets of honesty, transparency and ethical conduct. We uphold the values of integrity and openness, which form the bedrock of our operational framework. Our primary goal is to deliver exceptional services while cultivating the trust and unwavering loyalty of our esteemed clientele</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of goodness feature section
		============================================= -->
		<section id="ft-thx-service-3" class="ft-thx-service-section-3 position-relative" data-background="assets/imgs/bg/sr-bg.jpg">
			<div class="container">
				<div class="ft-thx-section-title-3 text-center headline pera-content">
					<span class="bl text-uppercase">Benefits You Get</span>
					<h2>Our unique approach</h2>
					{{-- <p>Driving force behind everything we do</p> --}}
				</div>
				<div class="pr-sx-service-content">
					<div class="row">
						<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
							<div class="pr-sx-service-innerbox position-relative">
								<div class="pr-sx-service-item-icon d-flex align-items-center justify-content-center">
									<img src="assets/imgs/icon/sustainability.png" alt="" width="50%">
								</div>
								<div class="pr-sx-service-item-text headline pera-content text-center">
									<h3>Sustainability:</h3>
									<p>We understand the importance of responsible business practices and strive to preserve the environment for future generations. Sustainability is at the core of our operations, and we take steps to minimize our environmental impact.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
							<div class="pr-sx-service-innerbox position-relative">
								<div class="pr-sx-service-item-icon d-flex align-items-center justify-content-center">
									<img src="assets/imgs/icon/aviation excellence.png" alt="" width="50%">
								</div>
								<div class="pr-sx-service-item-text headline pera-content text-center">
									<h3>Aviation Excellence</h3>
									<p>With a modern fleet of state-of-the-art aircraft and a team of highly skilled pilots, we provide unparalleled aviation services. Our commitment to excellence ensures our customers a safe and exceptional flying experience.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
							<div class="pr-sx-service-innerbox position-relative">
								<div class="pr-sx-service-item-icon d-flex align-items-center justify-content-center">
									<img src="assets/imgs/icon/Streamlined Logistics.png" alt="" width="50%">
								</div>
								<div class="pr-sx-service-item-text headline pera-content text-center">
									<h3>Streamlined Logistics</h3>
									<p>We have perfected our logistics operations, optimizing every supply chain step. Our streamlined processes and efficient systems enable us to deliver goods and services seamlessly.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	

		
		<section class="ft1-tracking-section-two" >
			<div class="container mt-5">
				<img src="assets/img/about/journey.webp" alt="" width="100%">
			</div>
			<div style="background-color: #F3F6F5;">
				<div class="pb-5 pt-5">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="ft-about-text-wrapper-2">
									<div class="ft-section-title-2 headline pera-content">
										<span class="text-uppercase bl">FACE BEHIND FLYCRAFT</span>
										<h2 class="rd">Rajesh Dubey</h2>
										<span class="text-secondary">Founder & CEO</span>
										<br><br>
										<p class="mb-3 fw-bold">Mr. Rajesh Dubey: Revolutionizing the Aviation Sector with Flycraft</p>
										<p class="mb-3">Mr. Rajesh Dubey, a visionary in the aviation industry, recognized the need for a superior logistics service provider. This realization led to Flycraft, a business that defies conventions and sets new standards.</p>
										<p class="mb-3">Mr. Dubey's influential network has contributed to Flycraft's growth and success. Flycraft is trusted for offering premium goods at affordable prices under Mr. Dubey's leadership.</p>
										<div class="ft-why-choose-list-wrapper ul-li-block ">
										<ul>
											<li class="text-secondary">Mr. Dubey's visionary leadership has brought transformative changes to the aviation sector.</li>
											<li class="text-secondary">Flycraft is known for its efficiency, reliability, and exceptional customer service.</li>
											<li class="text-secondary">Flycraft sets new benchmarks in aviation logistics thanks to Mr. Dubey's commitment to surpassing expectations.</li>
										</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<img src="assets/img/team/mr-rajesh-dubey.webp" alt="" width="100%" style="border-radius: 5px;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="ft-team" class="ft-team-section">
			<div class="container">
				<div class="ft-team-content">
					<div class="row">
						<div class="ft-thx-section-title-3 text-center headline pera-content">
							<span class="bl">Core Team Members</span>
							<h2 class="text-secondary">The Team That Supports <br> And Helps You</h2>
						</div>
						<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
							<div class="flip-card mx-auto" tabIndex="0">
								<div class="flip-card-inner mx-auto">
								  	<div class="flip-card-front">
										<img src="assets/img/team/mrs-neetu-khandelwal.jpg" width="100%" alt="">
								  	</div>
								  	<div class="flip-card-back">
										<p>Neetu Khandelwal plays a crucial role in driving operational excellence. With a wealth of experience in streamlining processes, optimizing resources, and enhancing overall efficiency, her expertise is instrumental in ensuring Flycraft's success. </p>
								  	</div>
								</div>
							</div>
							<div class="ft-team-inner-itembox position-relative">
								<div class="ft-team-inner-item-img">
									<div class="text-center">
										<h4 class="rd text-center mt-3">Neetu Khandelwal</h4>
										<span>Chief Operating Officer (COO)</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="flip-card mx-auto" tabIndex="0">
								<div class="flip-card-inner mx-auto">
								  	<div class="flip-card-front">
										<img src="assets/img/team/mr-bhupendra-malik.jpg" width="100%" alt="">
								  	</div>
								  	<div class="flip-card-back">
										<p>Mr. Bhupesh Malik, a respected Director at Flycraft, brings expertise and leadership to the organization. His leadership inspires the team to excel.</p>
								  	</div>
								</div>
							</div>
							<div class="ft-team-inner-itembox position-relative">
								<div class="ft-team-inner-item-img text center">
									<div class="text-center">
										<h4 class="rd text-center mt-3">Mr. Bhupesh Malik</h4>
										<span>Director (International Freight)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<style>
		.flip-card {
			background-color: transparent;
			width: 70%;
			height: 330px;
			perspective: 1000px;
		  }
		  
		  .flip-card-inner {
			position: relative;
			width: 70%;
			height: 330px;
			text-align: center;
			transition: transform 0.6s;
			transform-style: preserve-3d;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			backface-visibility: hidden;
			-moz-backface-visibility: hidden;
		  }
		  
		  .flip-card:focus {
			  outline: 0;
		  }
		  
		  .flip-card:hover .flip-card-inner,
		  .flip-card:focus .flip-card-inner{
			transform: rotateY(180deg);
		  }
		  
		  .flip-card-front,
		  .flip-card-back {
			position: absolute;
			width: 100%;
			height: 330px;
		  }
		  
		  .flip-card-front {
			/* background: linear-gradient(to left, #4364f7, #6fb1fc); */
			color: black;
			z-index: 2;
			display: flex;
			justify-content: center;
			align-items: center;
		  }
		  
		  .flip-card-back {
			background: #F3F6F5;
			color: black;
			box-shadow: #F3F6F5;
			transform: rotateY(180deg);
			z-index: 1;
			display: flex;
			padding: 0px 15px 0px 15px;
			justify-content: center;
			align-items: center;
		  }</style>
	@endsection