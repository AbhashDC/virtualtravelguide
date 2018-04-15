<?php include('include/inc_header-home.php'); ?>
<?php include('include/inc_navigation.php'); ?>

    <div class="colorlib-wrap" style="margin-top:30px;">
			<div class="container-fluid">
				<div class="row">

          					<!-- SIDEBAR-->
          					<div class="col-md-3">
          						<div class="sidebar-wrap ">
          							<div class="side search-wrap animate-box bg-primary" >
          								<h3 class="sidebar-heading">Find your hotel</h3>
          								<form method="post" class="colorlib-form">
          				              	<div class="row">
          				                <div class="col-md-12">
          				                  <div class="form-group">
          				                    <label for="date">Check-in:</label>
          				                    <div class="form-field">
          				                      <i class="icon icon-calendar2"></i>
          				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
          				                    </div>
          				                  </div>
          				                </div>
          				                <div class="col-md-12">
          				                  <div class="form-group">
          				                    <label for="date">Check-out:</label>
          				                    <div class="form-field">
          				                      <i class="icon icon-calendar2"></i>
          				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
          				                    </div>
          				                  </div>
          				                </div>
          				                <div class="col-md-12">
          				                  <div class="form-group">
          				                    <label for="guests">Guest</label>
          				                    <div class="form-field">
          				                      <i class="icon icon-arrow-down3"></i>
          				                      <select name="people" id="people" class="form-control">
          				                        <option value="#">1</option>
          				                        <option value="#">2</option>
          				                        <option value="#">3</option>
          				                        <option value="#">4</option>
          				                        <option value="#">5+</option>
          				                      </select>
          				                    </div>
          				                  </div>
          				                </div>
          				                <div class="col-md-12">
          				                  <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-default btn-block">
          				                </div>
          				              </div>
          				            </form>
          							</div>
          							<div class="side animate-box">
          								<div class="row">
          									<div class="col-md-12">
          										<h3 class="sidebar-heading">Price Range</h3>
          										<form method="post" class="colorlib-form-2">
          						              	<div class="row">
          						                <div class="col-md-6">
          						                  <div class="form-group">
          						                    <label for="guests">Price from:</label>
          						                    <div class="form-field">
          						                      <i class="icon icon-arrow-down3"></i>
          						                      <select name="people" id="people" class="form-control">
          						                        <option value="#">1</option>
          						                        <option value="#">200</option>
          						                        <option value="#">300</option>
          						                        <option value="#">400</option>
          						                        <option value="#">1000</option>
          						                      </select>
          						                    </div>
          						                  </div>
          						                </div>
          						                <div class="col-md-6">
          						                  <div class="form-group">
          						                    <label for="guests">Price to:</label>
          						                    <div class="form-field">
          						                      <i class="icon icon-arrow-down3"></i>
          						                      <select name="people" id="people" class="form-control">
          						                        <option value="#">2000</option>
          						                        <option value="#">4000</option>
          						                        <option value="#">6000</option>
          						                        <option value="#">8000</option>
          						                        <option value="#">10000</option>
          						                      </select>
          						                    </div>
          						                  </div>
          						                </div>
          						              </div>
          						            </form>
          					            </div>
          								</div>
          							</div>
          							<div class="side animate-box">
          								<div class="row">
          									<div class="col-md-12">
          										<h3 class="sidebar-heading">Review Rating</h3>
          										<form method="post" class="colorlib-form-2">
          										   <div class="form-check">
          												<input type="checkbox" class="form-check-input" id="exampleCheck1">
          												<label class="form-check-label" for="exampleCheck1">
          													<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="glyphicon glyphicon-star-empty"></i><i class="icon-star-full"></i>
                                      
                                    </span></p>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          										    	   <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
          										      </label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
          										     </label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
          										     </label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          										      	<p class="rate"><span><i class="icon-star-full"></i></span></p>
          										     </label>
          										   </div>
          										</form>
          									</div>
          								</div>
          							</div>
          							<div class="side animate-box">
          								<div class="row">
          									<div class="col-md-12">
          										<h3 class="sidebar-heading">Categories</h3>
          										<form method="post" class="colorlib-form-2">
          										   <div class="form-check">
          												<input type="checkbox" class="form-check-input" id="exampleCheck1">
          												<label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Homestay</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Hotel</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Hostel</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Resort</h4>
          												</label>
          										   </div>
          										</form>
          									</div>
          								</div>
          							</div>
          							<!-- <div class="side animate-box">
          								<div class="row">
          									<div class="col-md-12">
          										<h3 class="sidebar-heading">Location</h3>
          										<form method="post" class="colorlib-form-2">
          										   <div class="form-check">
          												<input type="checkbox" class="form-check-input" id="exampleCheck1">
          												<label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Greece</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Italy</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Spain</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Germany</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Japan</h4>
          												</label>
          										   </div>
          										</form>
          									</div>
          								</div>
          							</div> -->
          							<div class="side animate-box">
          								<div class="row">
          									<div class="col-md-12">
          										<h3 class="sidebar-heading">Facilities</h3>
          										<form method="post" class="colorlib-form-2">
                                <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">
                                   <h4 class="place">Wifi</h4>
                                 </label>
                                </div>
                                <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">
                                   <h4 class="place">Hot Water</h4>
                                 </label>
                                </div>
                                <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">
                                   <h4 class="place">Air Condtioning</h4>
                                 </label>
                                </div>


                                 <div class="form-check">
          												<input type="checkbox" class="form-check-input" id="exampleCheck1">
          												<label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Airport Transfer</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Resto Bar</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Restaurant</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Swimming Pool</h4>
          												</label>
          										   </div>
          										  </form>
          									</div>
          								</div>
          							</div>
          						</div>
          					</div>
					<div class="col-md-9 ">
							<!-- <div class="wrap-division">
                <Div class="row">
								<div class="col-md-4 col-sm-4 ">
									<div class="hotel-entry">
										<a href="hotel-room.html" class="hotel-img" style="background-image: url(images/hotel-1.jpg);">
											<p class="price"><span>$120</span><small> /night</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
											<h3><a href="hotel-room.html">Hotel Edison</a></h3>
											<span class="place">New York, USA</span>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 ">
									<div class="hotel-entry">
										<a href="hotel-room.html" class="hotel-img" style="background-image: url(images/hotel-2.jpg);">
											<p class="price"><span>$120</span><small> /night</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
											<h3><a href="hotel-room.html">Hotel Edison</a></h3>
											<span class="place">New York, USA</span>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box">
									<div class="hotel-entry">
										<a href="hotel-room.html" class="hotel-img" style="background-image: url(images/hotel-3.jpg);">
											<p class="price"><span>$120</span><small> /night</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
											<h3><a href="hotel-room.html">Hotel Edison</a></h3>
											<span class="place">New York, USA</span>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box">
									<div class="hotel-entry">
										<a href="hotel-room.html" class="hotel-img" style="background-image: url(images/hotel-4.jpg);">
											<p class="price"><span>$120</span><small> /night</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
											<h3><a href="hotel-room.html">Hotel Edison</a></h3>
											<span class="place">New York, USA</span>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box">
									<div class="hotel-entry">
										<a href="hotel-room.html" class="hotel-img" style="background-image: url(images/hotel-5.jpg);">
											<p class="price"><span>$120</span><small> /night</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
											<h3><a href="hotel-room.html">Hotel Edison</a></h3>
											<span class="place">New York, USA</span>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box">
									<div class="hotel-entry">
										<a href="hotel-room.html" class="hotel-img" style="background-image: url(images/hotel-6.jpg);">
											<p class="price"><span>$120</span><small> /night</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
											<h3><a href="hotel-room.html">Hotel Edison</a></h3>
											<span class="place">New York, USA</span>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box">
									<div class="hotel-entry">
										<a href="hotel-room.html" class="hotel-img" style="background-image: url(images/hotel-7.jpg);">
											<p class="price"><span>$120</span><small> /night</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
											<h3><a href="hotel-room.html">Hotel Edison</a></h3>
											<span class="place">New York, USA</span>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box">
									<div class="hotel-entry">
										<a href="hotel-room.html" class="hotel-img" style="background-image: url(images/hotel-8.jpg);">
											<p class="price"><span>$120</span><small> /night</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
											<h3><a href="hotel-room.html">Hotel Edison</a></h3>
											<span class="place">New York, USA</span>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										</div>
									</div>
								</div>
							</div>
            </div> -->


            <div class="row row-bottom-padded-md hotellist">

					<div class="col-md-6 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/hotel-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
              <!-- <div class="box">
                               <div class="ribbon"><span>Something</span></div>
               </div> -->
							<div class="desc">
								<span></span>
								<h3>Hotel Barahi</h3>
                <span class="location"><img src="images/placeholder.png"> Pokhara</span>
								<span class="price">Starting from $100 / night</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/hotel-2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">

							<div class="desc">


                <span></span>
								<h3>Hotel Himalaya</h3>
                <span class="location"><img src="images/placeholder.png"> Pokhara</span>
                <span class="price">Starting from $100 / night</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/hotel-3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Summit Hotel</h3>
                <span class="location"><img src="images/placeholder.png"> Pokhara</span>
								<span class="price">Starting from $100 / night</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/hotel-4.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Hotel Horizon</h3>
                <span class="location"><img src="images/placeholder.png"> Pokhara</span>
								<span class="price">Starting from $100 / night</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
          <div class="col-md-6 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/hotel-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Hotel Barahi</h3>
                <span class="location"><img src="images/placeholder.png"> Pokhara</span>
								<span class="price">Starting from $100 / night</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/hotel-2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Hotel Himalaya</h3>
                <span class="location"><img src="images/placeholder.png"> Kathmandu</span>
								<span class="price">Starting from $100 / night</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/hotel-3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Summit Hotel</h3>
                <span class="location"><img src="images/placeholder.png"> Kathmandu</span>
								<span class="price">Starting from $100 / night</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/hotel-4.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Hotel Horizon</h3>
                <span class="location"><img src="images/placeholder.png"> Lalitpur</span>
							<span class="price">Starting from $100 / night</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
				</div>

							</div>

				</div>
        <div class="row justify-content-md-center" >
          <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item ">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
        </div>

			</div>
		</div>
    <?php include('include/inc_footer.php');?>
    <!-- Magnific Popup -->
    	<script src="assets/js/jquery.magnific-popup.min.js"></script>
    	<script src="assets/js/magnific-popup-options.js"></script>
    	<!-- Date Picker -->
    	<script src="assets/js/bootstrap-datepicker.js"></script>
