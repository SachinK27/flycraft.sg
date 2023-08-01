@extends('layouts.master')

@section('content')
    
<!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/logistic-banner.png">
		{{-- <span class="background_overlay"></span> --}}
		{{-- <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span> --}}

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="ft-breadcrumb-content headline text-left position-relative">
						<h2>Your trustworthy logistics ally</h2>
						<div class="ft-breadcrumb-list ul-li">
							<p class="text-white">Your partner in logistics. We deeply understand the intricacies involved in the global movement of goods and provide effective and reliable logistics solutions to meet your specific needs</p>
							<ul>
								<li><a href="{{ route('index') }}">Home</a></li>
								<li>Logistics Services</li>
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
	<!-- Services Section -->
    <section id="pr-cor-service" class="pr-cor-service-section position-relatives mt-5">
		<span class="map-bg position-absolute"><img src="assets/imgs/bg/map.png" alt=""></span>
		<div class="container">
			<div class="pr-cor-service-content">
				<div class="row">
                    <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="pr-cor-service-innerbox">
							<div class="pr-cor-service-inner-img">
								<img src="assets/imgs/service/24 7 AOG and Critical Movements.webp" alt="">
							</div>
							<div class="pr-cor-service-inner-text position-relative headline pera-content">
								<div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
									{{-- <i class="flaticon-free-shipping"></i> --}}
									<img src="assets/images/logistics/24 7 AOG and Critical Movements (1).png" alt="">
								</div>
								<h3><a href="javascript:void(0)">24/7 AOG and Critical Movements</a></h3>
								<p>Ensure the timely delivery of your time-sensitive cargo with our round-the-clock AOG & Critical Movements service, guaranteeing prompt and reliable transportation.</p>
							</div>
						</div>
					</div>
                    
					<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
						<div class="pr-cor-service-innerbox">
							<div class="pr-cor-service-inner-img">
								<img src="assets/imgs/service/Engine Transport _ Storage.webp" alt="">
							</div>
							<div class="pr-cor-service-inner-text position-relative headline pera-content">
								<div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
									<img src="assets/images/logistics/Engine Transport _ Storage (1).png" alt="">
								</div>
								<h3><a href="javascript:void(0)">Engine Transport & Storage</a></h3>
								<p>Trust us to provide reliable transportation and secure engine storage solutions, ensuring their safety and proper handling.</p>
							</div>
						</div>
					</div>
                    
					<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="pr-cor-service-innerbox">
							<div class="pr-cor-service-inner-img">
								<img src="assets/imgs/service/Project cargo movement.webp" alt="">
							</div>
							<div class="pr-cor-service-inner-text position-relative headline pera-content">
								<div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
									<img src="assets/images/logistics/Project cargo movement (1).png" alt="">
								</div>
								<h3><a href="javascript:void(0)">Project Cargo Movement</a></h3>
								<p>Efficiently handle the logistics complexities and challenges of your cargo movement with our specialized services tailored to meet your unique requirements.</p>
							</div>
						</div>
					</div>

                    <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="pr-cor-service-innerbox">
							<div class="pr-cor-service-inner-img">
								<img src="assets/imgs/service/Logistics Solutions.webp" alt="">
							</div>
							<div class="pr-cor-service-inner-text position-relative headline pera-content">
								<div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
									<img src="assets/images/logistics/Logistics Solutions (1).png" alt="">
								</div>
								<h3><a href="javascript:void(0)">Logistics Solutions</a></h3>
								<p>Address the complexities of supply chain management and optimize logistics operations to achieve maximum efficiency and cost-effectiveness.</p>
							</div>
						</div>
					</div>  

                    <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="pr-cor-service-innerbox">
							<div class="pr-cor-service-inner-img">
								<img src="assets/imgs/service/Trade Document compliance.webp" alt="">
							</div>
							<div class="pr-cor-service-inner-text position-relative headline pera-content">
								<div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
									<img src="assets/images/logistics/Trade Document compliance (1).png" alt="">
								</div>
								<h3><a href="javascript:void(0)">Trade/Document Compliance</a></h3>
								<p>Ensure compliance with trade regulations and document requirements with our expertise in navigating complex compliance procedures, giving you peace of mind and avoiding potential issues.</p>
							</div>
						</div>
					</div>  

                    <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="pr-cor-service-innerbox">
							<div class="pr-cor-service-inner-img">
								<img src="assets/imgs/service/Air _ Sea freight.webp" alt="">
							</div>
							<div class="pr-cor-service-inner-text position-relative headline pera-content">
								<div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
									<img src="assets/images/logistics/Air _ Sea freight (1).png" alt="">
								</div>
								<h3><a href="javascript:void(0)">Air & Sea Freight</a></h3>
								<p>Benefit from our seamless air and sea freight services, ensuring efficient and reliable transportation of your goods across global networks, regardless of the mode of transport.</p>
							</div>
						</div>
					</div>  
                    
                    <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="pr-cor-service-innerbox">
							<div class="pr-cor-service-inner-img">
								<img src="assets/imgs/service/3PL Warehouse.webp" alt="">
							</div>
							<div class="pr-cor-service-inner-text position-relative headline pera-content">
								<div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
									<img src="assets/images/logistics/3PL Warehouse (1).png" alt="">
								</div>
								<h3><a href="javascript:void(0)">3PL Warehouse</a></h3>
								<p>Leverage our third-party logistics (3PL) warehouse services for streamlined inventory management, order fulfillment, and distribution, enhancing your supply chain efficiency.</p>
							</div>
						</div>
					</div>  
					<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="pr-cor-service-innerbox">
							<div class="pr-cor-service-inner-img">
								<img src="assets/imgs/service/International and Domestic Transportaion.webp" alt="">
							</div>
							<div class="pr-cor-service-inner-text position-relative headline pera-content">
								<div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
									<img src="assets/images/logistics/International Domestic Transportaion.png" alt="">
								</div>
								<h3><a href="javascript:void(0)">International/Domestic Transportation</a></h3>
								<p>Rely on our expertise to move your goods efficiently and securely across borders or within the same country, providing you with reliable and timely transportation solutions.</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>	
    <!-- End Services Section -->
	<section id="ft-faq-page" class="ft-faq-page-section page-padding">
		<div class="container">
            <div class="sec-title text-center">
                <span class="mt-5 text-uppercase bl">Frequently Asked Questions</span>
                <h2>Let Us Help You: Ask Us Anything</h2>
            </div>
			<div class="ft-faq-content">
				<div class="row">
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="assets/img/bg/FAQ.jpg" alt="" />
                            </div>
                        </div>
                    </div>
					<div class="col-lg-6">
						<div class="accordion" id="accordionExampl2">
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingOne2">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
										What type of logistics services does Flycraft provide?
									</button>
								</h2>
								<div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExampl2">
									<div class="accordion-body">
										Flycraft offers a comprehensive range of logistics services, including transportation, warehousing, distribution, and supply chain management. We collaborate closely with our clients to tailor solutions that meet their specific requirements and ensure efficient and seamless movement of goods.
									</div>
								</div>
							</div>
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingTwo2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
										How does Flycraft customize logistics services to meet specific needs?
									</button>
								</h2>
								<div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExampl2">
									<div class="accordion-body">
										At Flycraft, we understand that each client has unique logistics requirements. We work closely with our clients to analyze their needs, identify areas for optimization, and tailor our services accordingly. This allows us to provide customized solutions aligning with their business objectives.
									</div>
								</div>
							</div>
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingThree2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
										What sets Flycraft apart in terms of supply chain management?
									</button>
								</h2>
								<div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExampl2">
									<div class="accordion-body">
										Flycraft distinguishes itself in supply chain management through our expertise, advanced technology systems, and strategic partnerships. We leverage our knowledge and resources to optimize supply chain processes, minimize costs, enhance visibility, and ensure reliable and timely delivery of goods, ultimately driving overall business success.
									</div>
								</div>
							</div>
							{{-- <div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingFour2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
										
									</button>
								</h2>
								<div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour2" data-bs-parent="#accordionExampl2">
									<div class="accordion-body">
										
									</div>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
									
	<section class="ft1-welcome-section">
        <div class="pattern-layer"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="row">
					<div class="col-lg-6">
						<div class="sec-title">
							<span class="mt-5 text-uppercase bl">Contact Us For Your Logistics Needs</span>
							<h2 class="mt-5">Unparalleled Support for Your Logistics Requirements</h2>
							<div class="ft-why-choose-list-wrapper ul-li-block mb-4">
								<ul>
									<li>We offer an extensive range of logistics services from transportation, warehousing, inventory management to customs clearance; you will get an expertise here</li>
									<li>Through our extensive network of partners around the world, we offer international logistics solutions across continents and ensure timely good deliveries</li>
									<li>With our responsive and customer-centric approach, you will get reliable and flexible solutions for your changing needs</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ft-why-choose-form-wrapper">
							<div class="ft-team-contact-form-wrapper" style="background-color: #fff;">
								<div class="ft-team-contact-form">
									{{-- <h3>Contact Me</h3> --}}
									<form action="#">
										<div class="row">
											<div class="col-md-12 mb-3 text-center">
												<input type="radio" name="seltype" class="freightTypeRadio" id="road" checked>
												<label class="freightTypeLabel" for="road"><img id="roadicon" src="assets/imgs/icon/road - white.png" width="20%"> Road Freight</label>

												<input type="radio" name="seltype" class="freightTypeRadio" id="air">
												<label class="freightTypeLabel" for="air"><img id="airicon" src="assets/imgs/icon/air - red.png" width="20%"> Air Freight</label>

												<input type="radio" name="seltype" class="freightTypeRadio" id="ocean">
												<label class="freightTypeLabel" for="ocean"><img id="oceanicon" src="assets/imgs/icon/sea - red.png" width="20%"> Ocean Freight</label>
											</div>
											<div class="col-lg-6">
												<input type="text" placeholder="Full Name" style="width: 100%;">
											</div>
											<div class="col-lg-6">
												<input type="email" placeholder="Email" style="width: 100%;">
											</div>
											<div class="col-lg-6">
												<input type="text" placeholder="Phone" style="width: 100%;">
											</div>
											<div class="col-lg-6">
												<input type="text" placeholder="Company" style="width: 100%;">
											</div>
											<div class="col-lg-6">
												<input type="text" placeholder="Delivery City" style="width: 100%;">
											</div>
											<div class="col-lg-6">
												<input type="text" placeholder="Departure City" style="width: 100%;">
											</div>
											<div class="col-lg-6">
												<input type="text" placeholder="Weight" style="width: 100%;">
											</div>
											<div class="col-lg-6">
												<input type="text" placeholder="Length x Width x Height" style="width: 100%;">
											</div>
											<div class="col-lg-6">
												<input type="radio" id="dan" name="type" style="height: 15px;">
												<label for="dan">Dangerous goods</label>
											</div>
											<div class="col-lg-6">
												<input type="radio" id="nondan" name="type" style="height: 15px;">
												<label for="nondan">Non dangerous goods</label>
											</div>
											<div class="col-lg-12">
												<button class="ft-submit-btn">Request a quote <i class="flaticon-right-arrow"></i></button>
											</div>
										</div>
									</form>
									<script>
										$('input:radio[id="road"]').change(function() {
											if ($(this).val() != '1') {
												$('#roadicon').attr('src', 'assets/imgs/icon/road - white.png');
												$('#airicon').attr('src', 'assets/imgs/icon/air - red.png');
												$('#oceanicon').attr('src', 'assets/imgs/icon/sea - red.png');
											}
										});
										$('input:radio[id="air"]').change(function() {
											if ($(this).val() != '1') {
												$('#roadicon').attr('src', 'assets/imgs/icon/road - red.png');
												$('#airicon').attr('src', 'assets/imgs/icon/air - white.png');
												$('#oceanicon').attr('src', 'assets/imgs/icon/sea - red.png');
											}
										});
										$('input:radio[id="ocean"]').change(function() {
											if ($(this).val() != '1') {
												$('#roadicon').attr('src', 'assets/imgs/icon/road - red.png');
												$('#airicon').attr('src', 'assets/imgs/icon/air - red.png');
												$('#oceanicon').attr('src', 'assets/imgs/icon/sea - white.png');
											}
										});
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>	
   	
	<div class="container">
		<div class="row clearfix">
                                        
			<!-- Form Column -->
			<div class="form-column col-lg-12 col-md-12 col-sm-12">
				<div class="inner-column mt-5">
					<div class="row">
						<div class="text-center mb-4">
							<span class="mt-5 text-uppercase bl">Freights We Are Into</span>
							<h2>Various transportation <br> modes that drive your success</h2>
						</div>
						<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
							<div class="pr-cor-service-innerbox">
								<div class="pr-cor-service-inner-img">
									<img src="assets/imgs/service/road freight.webp" alt="">
								</div>
								<div class="pr-cor-service-inner-text position-relative headline pera-content">
									<div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
										<i class="flaticon-free-shipping"></i>
									</div>
									<h3><a href="javascript:void(0)">Road Freight</a></h3>
									<p>Flycraft offers efficient road freight solutions to ensure the timely delivery of aircraft consumables, optimizing transportation logistics for their clients.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
							<div class="pr-cor-service-innerbox">
								<div class="pr-cor-service-inner-img">
									<img src="assets/imgs/service/air freight.webp" alt="">
								</div>
								<div class="pr-cor-service-inner-text position-relative headline pera-content">
									<div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
										<i class="flaticon-plane"></i>
									</div>
									<h3><a href="javascript:void(0)">Air Freight</a></h3>
									<p>With our expertise in the aviation industry, Flycraft provides reliable air freight services, ensuring the swift and secure transportation to global destinations.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
							<div class="pr-cor-service-innerbox">
								<div class="pr-cor-service-inner-img">
									<img src="assets/imgs/service/sea freight.webp" alt="">
								</div>
								<div class="pr-cor-service-inner-text position-relative headline pera-content">
									<div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
										<i class="flaticon-boat"></i>
									</div>
									<h3><a href="javascript:void(0)">Sea Freight</a></h3>
									<p>Flycraft facilitates seamless sea freight operations, enabling the cost-effective and efficient shipment across the globe, meeting the demands of our clients</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			
		</div>
	</div>
	
@endsection