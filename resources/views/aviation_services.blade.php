@extends('layouts.master')

@section('content')
    
<!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/aviation-banner.png">
		{{-- <span class="background_overlay"></span> --}}
		{{-- <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span> --}}
        <div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="ft-breadcrumb-content headline text-left position-relative">
						<h2>Aviation Products</h2>
						<div class="ft-breadcrumb-list ul-li">
							<p class="text-white">Elevate Your Aviation Experience</p>
							<ul>
								<li><a href="{{ route('index') }}">Home</a></li>
								<li>Aviation products</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumb section
	============================================= -->

    <section class="pr-cor-service-section position-relatives mt-5 ">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="pr-cor-service-innerbox">
                        <div class="pr-cor-service-inner-img">
                            <img src="assets/imgs/service/Lubricants & Grease.png" alt="">
                        </div>
                        <div class="pr-cor-service-inner-text position-relative headline pera-content">
                            <div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
                                <img src="assets/images/aviation/Lubricants _ Grease (1).png" alt="">
                            </div>
                            <h3><a href="javascript:void(0)">Lubricants & Grease</a></h3>
                            <p>Keep your aircraft running smoothly with our high-quality lubricants and grease. Engineered for aviation applications, our products provide optimal performance, reduce friction, and extend the lifespan of critical components, ensuring safe and efficient operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="pr-cor-service-innerbox">
                        <div class="pr-cor-service-inner-img">
                            <img src="assets/imgs/service/Sealants, Paints & Coating.png" alt="">
                        </div>
                        <div class="pr-cor-service-inner-text position-relative headline pera-content">
                            <div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
                                <img src="assets/images/aviation/Sealants, Paints & Coating (1).png" alt="">
                            </div>
                            <h3><a href="javascript:void(0)">Sealants, Paints, & Coating</a></h3>
                            <p>Protect and enhance your aircraft with our top-notch sealants, paints, and coatings. Designed to withstand extreme conditions, our products offer superior adhesion, corrosion resistance, and durability, maintaining your aircraft's aesthetics and structural integrity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="pr-cor-service-innerbox">
                        <div class="pr-cor-service-inner-img">
                            <img src="assets/imgs/service/Cleaner Chemicals.png" alt="">
                        </div>
                        <div class="pr-cor-service-inner-text position-relative headline pera-content">
                            <div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
                                <img src="assets/images/aviation/Cleaner Chemicals (1).png" alt="">
                            </div>
                            <h3><a href="javascript:void(0)">Cleaner Chemicals</a></h3>
                            <p>Maintain the cleanliness and hygiene of your aircraft with our effective cleaner chemicals. Our specialized formulations remove dirt, grime, and contaminants, leaving surfaces spotless without compromising the integrity of sensitive materials or finishes</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="pr-cor-service-innerbox">
                        <div class="pr-cor-service-inner-img">
                            <img src="assets/imgs/service/Aviation Tyre.png" alt="">
                        </div>
                        <div class="pr-cor-service-inner-text position-relative headline pera-content">
                            <div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
                                <img src="assets/images/aviation/Aviation Tyre (1).png" alt="">
                            </div>
                            <h3><a href="javascript:void(0)">Aviation Tyres</a></h3>
                            <p>Trust in our reliable aviation tires for superior performance and safety. Engineered with advanced materials and tread designs, our tires provide excellent grip, stability, and durability, ensuring optimal traction and efficient braking on runways of various surfaces.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="pr-cor-service-innerbox">
                        <div class="pr-cor-service-inner-img">
                            <img src="assets/imgs/service/Sealants, Paints & Coating.png" alt="">
                        </div>
                        <div class="pr-cor-service-inner-text position-relative headline pera-content">
                            <div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
                                <img src="assets/images/aviation/Aircraft Spare parts _ Rotatable.png" alt="">
                            </div>
                            <h3><a href="javascript:void(0)">Aircraft Spare Parts & Rotatable</a></h3>
                            <p>Ensure the reliability and airworthiness of your aircraft with our high-quality spare parts and rotatable components. Our extensive inventory includes genuine parts from trusted manufacturers, enabling you to quickly source the components you need to keep your aircraft in top condition.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="pr-cor-service-innerbox">
                        <div class="pr-cor-service-inner-img">
                            <img src="assets/imgs/service/Cleaner Chemicals.png" alt="">
                        </div>
                        <div class="pr-cor-service-inner-text position-relative headline pera-content">
                            <div class="pr-cor-service-icon position-absolute justify-content-center align-items-center d-flex">
                                <img src="assets/images/aviation/Aircraft tooling _ Equipment.png" alt="">
                            </div>
                            <h3><a href="javascript:void(0)">Aircraft Tooling & Equipment</a></h3>
                            <p>Equip your maintenance and repair teams with our precision-engineered aircraft tooling and equipment. From specialized wrenches to advanced diagnostic devices, our tools are designed to streamline maintenance procedures, improve efficiency, and ensure compliance with industry standards</p>
                        </div>
                    </div>
                </div>
                
            </div>

            
        </div>
    </section>

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
                                <img src="assets/img/bg/FAQs.jpg" alt="" />
                            </div>
                        </div>
                    </div>
					<div class="col-lg-6">
						<div class="accordion" id="accordionExampl2">
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingOne2">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
										What aviation products does FlyCraft offer?
									</button>
								</h2>
								<div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExampl2">
									<div class="accordion-body">
										FlyCraft offers various aviation products, including aircraft components, avionics systems, navigation equipment, flight instruments, communication systems, aircraft interiors, and other accessories.
									</div>
								</div>
							</div>
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingTwo2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
										Are FlyCraft's aviation products certified and compliant with industry standards?
									</button>
								</h2>
								<div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExampl2">
									<div class="accordion-body">
										Yes, FlyCraft ensures that all its aviation products meet the necessary certifications and comply with industry standards. We prioritize safety, reliability, and adherence to regulatory requirements in all our product offerings.
									</div>
								</div>
							</div>
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingThree2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
										Can FlyCraft provide customized aviation solutions?
									</button>
								</h2>
								<div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExampl2">
									<div class="accordion-body">
										Absolutely! FlyCraft understands that different customers have unique requirements. We can provide customized aviation solutions tailored to your specific needs. Our team of experts will work closely with you to design and deliver the right products and services that meet your exact specifications.
									</div>
								</div>
							</div>
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingFour2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
										How can I place an order for aviation products at FlyCraft?
									</button>
								</h2>
								<div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour2" data-bs-parent="#accordionExampl2">
									<div class="accordion-body">
										You can contact our sales team directly through our website or by phone to place an order. Our representatives will guide you through ordering, provide product information, assist with any customization requirements, and ensure a smooth and efficient purchasing experience.
									</div>
								</div>
							</div>
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
                            <span class="mt-5 text-uppercase bl">Contact Us For Your Aviation Needs</span>
							<h2 class="">Unparalleled Support for Your Aviation Requirements</h2>
							<div class="ft-why-choose-list-wrapper ul-li-block mb-4">
								<ul>
									<li>Get an extensive aviation products selection of top reputable brands to meet your requirements.</li>
									<li>We provide fast and efficient shipping with streamlined order processing and our reliable shipping partners</li>
									<li>We possess the expertise to assist you with any product inquiries and suggest a best suitable product to match your needs</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
                        <div class="ft-why-choose-form-wrapper">
                            <div class="ft-team-contact-form-wrapper" style="background-color: #fff;">
                                <div class="ft-team-contact-form">
                                    {{-- <h3>Contact Me</h3> --}}
                                    <style></style>
                                    <form action="#">
                                        <div class="row">
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
                                                <select name="" id="" class="" style="height: 55px;width: 100%;
                                                border-radius: 5px;
                                                padding-left: 15px;
                                                margin-bottom: 20px;
                                                border: 1px solid #cbcbcb; -webkit-appearance: none; -moz-appearance: none;">
                                                    <option value="">Product Category</option>
                                                    <option value="">Lubricants & Grease</option>
                                                    <option value="">Sealants, Paints, & Coating</option>
                                                    <option value="">Sealants, Paints, & Coating</option>
                                                    <option value="">Aviation Tyres</option>
                                                    <option value="">Aircraft Spare Parts & Rotatable</option>
                                                    <option value="">Aircraft Tooling & Equipment</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <select name="" id="" style="height: 55px;width: 100%;
                                                border-radius: 5px;
                                                padding-left: 15px;
                                                margin-bottom: 20px;
                                                border: 1px solid #cbcbcb; -webkit-appearance: none; -moz-appearance: none;">
                                                    <option value="">Item</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="text" placeholder="Quantity" style="width: 100%;">
                                            </div>
                                            <div class="col-lg-12">
                                                <button class="ft-submit-btn">Request a quote <i class="flaticon-right-arrow"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
    </section>	

    <section class="ft1-projects-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sec-title">
                        <span class="text-uppercase bl">Our Trusted Suppliers</span>
                        <h3>Sourcing from Top OEMs</h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="ft-footer-widget ul-li-block headline pera-content">
                        <div class="gallery-widget clearfix">
                            <ul class="zoom-gallery" style="margin: auto;">
                                <li><a href="assets/images/distributors/3M.png" data-source="assets/images/distributors/3M.png"><img src="assets/images/distributors/3M.png" alt=""></a></li>
                                <li><a href="assets/images/distributors/basf.png" data-source="assets/images/distributors/basf.png"><img src="assets/images/distributors/basf.png" alt=""></a></li>
                                <li><a href="assets/images/distributors/ppg.png" data-source="assets/images/distributors/ppg.png"><img src="assets/images/distributors/ppg.png" alt=""></a></li>
                                <li><a href="assets/images/distributors/armite.png" data-source="assets/images/distributors/armite.png"><img src="assets/images/distributors/armite.png" alt=""></a></li>
                                <li><a href="assets/images/distributors/2.png" data-source="assets/images/distributors/2.png"><img src="assets/images/distributors/2.png" alt=""></a></li>
                                <li><a href="assets/images/distributors/exxon.png" data-source="assets/images/distributors/exxon.png"><img src="assets/images/distributors/exxon.png" alt=""></a></li>
                                <li><a href="assets/images/distributors/good-year.png" data-source="assets/images/distributors/good-year.png"><img src="assets/images/distributors/good-year.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection