<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Project1</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="home/css/style.css" type="text/css">
<link rel="stylesheet" href="home/css/style2.css" type="text/css">
</head>
<body>
       <!-- Header Section Begin -->
       <header class="header-section-other">
        <div class="container-fluid">
            <div class="logo">
                <a href="{{('userpage')}}"><h3>FranDen Dietries</h3></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{('userpage')}}">Home</a></li>
                        <li><a href="#">categories</a>
                            <ul class="sub-menu">
                                <li><a href="{{('recipe_cat1')}}">Quick and Easy</a></li>
                                <li><a href="{{('recipe_cat2')}}">Immune Boosting</a></li>
                                <li><a href="{{('recipe_cat3')}}">Postnatal Recovery</a></li>
                                <li><a href="{{('recipe_cat4')}}">Breakfast</a></li>
                                <li><a href="{{('recipe_cat5')}}">Nutrient Dense Meals</a></li>
                            </ul>
                        </li>
                        <li><a href="{{('addrecipe')}}">Add Recipes</a></li>
                        <li><a href="">Forum</a></li>
                        <li><a href="{{('contact')}}}">Contact</a></li>
                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

 <!-- Single Recipe Section Begin -->
 <section class="single-page-recipe spad">            
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ingredients-item">
                        <div class="intro-item">
                        <img src="home/img/img9.jpg" alt="">
                            <h2>Creamy Avocado Board</h2>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="reviews">5.5 from 25 reviews</div>
                            <div class="recipe-time">
                                <ul>
                                    <li>Prep time: <span>5 min</span></li>
                                    <li>Cook time: <span> 4min</span></li>
                                    <li> Total time: <span> 9min</span></li>
                                    <li>Yield: <span>2</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ingredient-list">
                            <div class="recipe-btn">
                                <a href="#">Print Recipe</a>
                                <a href="#" class="black-btn">Save</a>
                            </div>
                            <div class="list-item">
                                <h5>Ingredients</h5>
                                
                                <div class="dressing-list">
                                    <ul>
                                        <li>2 cups Avocado Anything Dip (see HERE; use 2x recipe) or pureed guacamole</li>
                                        <li>1 habanero or other small hot pepper, extra-thinly sliced</li>
                                        <li>3 tablespoons pomegranate arils</li>
                                        <li>3 tablespoons salted roasted pistachios, whole or chopped</li>
                                        <li>1 small handful fresh cilantro leaves</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nutrition-fact">
                        <div class="nutri-title">
                            <h6>Nutritional Facts</h6>
                            <span>Serves 4</span>
                        </div>
                        <ul>
                            <li>Calories: 90 Sugar: 1g Sodium: 120mg</li>
                            <li>Fat: 8g  Saturated Fat: 1g Trans Fat: 0g</li>
                            <li>Carbohydrates: 4g Fiber: 2g Protein: 1g  Cholesterol: 0mg</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="recipe-right">
                        <div class="recipe-desc">
                            <h3>Description</h3>
                            <p>One canserve this creamy avocado board with organic tortilla chips or whatever you wish 
                            like sweet potato fries, plant-based sausag</p>
                            
                        </div>
                        <div class="instruction-list">
                            <h3>Instructions</h3>
                            <ul>
                                <li>
                                    <span>01.</span>
                                    Spread the avocado dip onto a cutting board or platter by dolloping it using a large spoon and then spreading
                                     it using the tip of that spoon (ideally a pointy-ish one)!
                                </li>
                                <li>
                                    <span>02.</span>
                                    Sprinkle with the habanero, pomegranate arils, pistachios, and cilantro.
                                </li>
                                <li>
                                    <span>03.</span>
                                    Serve as desired, such as with organic tortilla chips or fresh tortillas.
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <form action="" method="post">

   <input type="text">
   </form>
    <!-- Single Recipe Section End -->

    <!-- Similar Recipe Section Begin -->
    <section class="similar-recipe spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="similar-item">
                        <a href="#"><img src="home/img/cat-feature/small-7.jpg" alt=""></a>
                        <div class="similar-text">
                            <div class="cat-name">Vegan</div>
                            <h6>Italian Tiramisu with Coffe</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="similar-item">
                        <a href="#"><img src="home/img/cat-feature/small-6.jpg" alt=""></a>
                        <div class="similar-text">
                            <div class="cat-name">Vegan</div>
                            <h6>Dry Cookies with Corn</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="similar-item">
                        <a href="#"><img src="home/img/cat-feature/small-5.jpg" alt=""></a>
                        <div class="similar-text">
                            <div class="cat-name">Vegan</div>
                            <h6>Asparagus with Pork Loin and Vegetables</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="similar-item">
                        <a href="#"><img src="home/img/cat-feature/small-4.jpg" alt=""></a>
                        <div class="similar-text">
                            <div class="cat-name">Vegan</div>
                            <h6>Smoked Salmon mini Sandwiches with Onion</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Similar Recipe Section End -->



          <!-- footer start -->
          <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><h2>FranDen Dietries</h2></a>
                      </div>
                      <div class="information_f">
                        <p><strong>ADDRESS:</strong> FranDen Dietries, CS_project1, Computer Science</p>
                        <p><strong>TELEPHONE:</strong> +254-707637187</p>
                        <p><strong>EMAIL:</strong> FranDen@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="#">Home</a></li>
                           <li><a href="#">About</a></li>
                           <li><a href="#">Recipes</a></li>
                           <li><a href="#">Forum</a></li>
                           <li><a href="#">Blog</a></li>
                           <li><a href="#">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Account</h3>
                        <ul>
                           <li><a href="#">Featured Recipes</a></li>
                           <li><a href="#">Popular</a></li>
                           <li><a href="#">Favourites</a></li>
                           <li><a href="#">Testimonials</a></li>
                           <li><a href="{{('login')}}">Login</a></li>
                           <li><a href="{{('register')}}">Register</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Newsletter</h3>
                        <div class="information_f">
                          <p>Subscribe by our newsletter and get update protidin.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter Your Mail" name="email" />
                                    <input type="submit" value="Subscribe" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
         
      </footer>
      <!-- footer end -->
</body>
</html>