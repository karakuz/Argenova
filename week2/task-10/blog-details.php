<!DOCTYPE html>
<html>
  <head>
    <title>Task-4</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="blog.css">
    <link rel="stylesheet" type="text/css" href="blog-details.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <div class="upper-bar">
        <div class="container upper-bar-inner-div">
          <div class="row">
            <div class="col-lg-2 header-logo-div">
              <a href="#">
                <img src="logo-dark.png" alt="logo" class="header-logo"/>
              </a>
            </div>
            <div class="col-lg-10 top-header-right">
              <div class="header-address">
                <div class="header-address-icon">
                  <i class="fa fa-map-marker"></i>
                </div>
                <div class="header-address-text">
                  <span class="fw-bold">Address</span>
                  <span>05 kandi BR, New York</span>
                </div>
                
              </div>
              <div class="header-email">
                <div class="header-email-icon">
                  <i class="fa fa-envelope-o"></i>
                </div>
                <div class="header-email-text">
                  <span class="fw-bold">Email</span>
                  <a href="#" id="header-email">support@rstheme.com</a>
                </div>

              </div>
              <div class="header-phone">
                <div class="header-phone-icon">
                  <i class="fa fa-phone"></i>
                </div>
                <div class="header-phone-text">
                  <span class="fw-bold">Phone</span>
                  <a href="" id="header-phone">+019988772</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="menu navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a href="#">
            <img src="logo-light.png" alt="logo" class="header-logo-light"/>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fa fa-bars"></i>
          </button>
          <div class="menu-left collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="menu-left-children fw-bold ls-none navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link cw-p0" href="#" data-bs-toggle="dropdown">Home <i class="fa fa-plus fz-10"></i></a>
                <ul class="dropdown-menu p-4">
                  <li><a class="dropdown-item" href="#">Multipages</a></li>
                  <li><a class="dropdown-item" href="#">One pages</a></li>
                </ul>
              </li>
              <li class="nav-item">About</li>
              <li class="nav-item">
                <a class="nav-link cw-p0" href="#" data-bs-toggle="dropdown">Services <i class="fa fa-plus fz-10"></i></a>
                <ul class="dropdown-menu p-4">
                  <li><a class="dropdown-item" href="#">Software Development</a></li>
                  <li><a class="dropdown-item" href="#">Web Development</a></li>
                  <li><a class="dropdown-item" href="#">Analytic Solutions</a></li>
                  <li><a class="dropdown-item" href="#">Cloud And DevOps</a></li>
                  <li><a class="dropdown-item" href="#">Project Design</a></li>
                  <li><a class="dropdown-item" href="#">Data Center</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link cw-p0" href="#" data-bs-toggle="dropdown">Pages <i class="fa fa-plus fz-10"></i></a>
                <ul class="dropdown-menu p-4">
                  <li><a class="dropdown-item" href="#">Services</a></li>
                  <li><a class="dropdown-item" href="#">Our Team</a></li>
                  <li><a class="dropdown-item" href="#">Single Team</a></li>
                  <li><a class="dropdown-item" href="#">Case Studies</a></li>
                  <li><a class="dropdown-item" href="#">Shop</a></li>
                  <li><a class="dropdown-item" href="#">Pricing</a></li>
                  <li><a class="dropdown-item" href="#">Faq</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link cw-p0" href="blog.php" data-bs-toggle="dropdown">Blog <i class="fa fa-plus fz-10"></i></a>
                <ul class="dropdown-menu p-4">
                  <li><a class="dropdown-item" href="blog.php">Blog</a></li>
                  <li><a class="dropdown-item" href="blog-details.php">Blog Details</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="contact.php" style="color: white">Contact</a></li>
            </ul>
          </div>

          <div class="menu-right">
            <ul class="menu-right-children">
              <div class="menu-right-search">
                <div class="">
                  <i class="fa fa-search"></i>
                </div>
              </div>
              <div class="menu-right-icons ls-none">
                <div class="">
                  <i class="fa fa-facebook"></i>
                </div>
                <div class="">
                  <i class="fa fa-twitter"></i>
                </div>
                <div class="">
                  <i class="fa fa-pinterest"></i>
                </div>
                <div class="">
                  <i class="fa fa-instagram"></i>
                </div>
              </div>
            </ul>
          </div>
        </div>
        
      </nav>
    </header>

    <div class="container mt-4 mb-4">
      <div class="row">
        <div class="col-lg-8 mt-4 blog-left">
          <div class="blog-detail-div">
            <img src="./5.jpg" alt="5" style="max-width: -webkit-fill-available;">
            <div class="blog-icons">
              <div class="icons">
                <div class="calender-icon">
                  <i class="fa fa-calendar-check-o"></i>
                </div>
                <span>January 10, 2020</span>
                <div class="user-icon">
                  <i class="fa fa-user"></i>
                </div>
                <span>admin</span>
                <div class="book-icon">
                  <i class="fa fa-book"></i>
                </div>
                <span>Strategy</span>
                <div class="comments-icon">
                  <i class="fa fa-comments-o"></i>
                </div>
                <span>1</span>
              </div>
            </div>
            <article>
              We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue cannot foresee. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled data structures manages data in technology.
            </article>
            <br><br>
            <blockquote class="quote">
              <i class="fa fa-quote-left"></i>
              <br>
              We can easily manage if we will only take, each day, the burden appointed to it. But the load will be too heavy for us if we carry yesterday???s burden over again today, and then add the burden of the morrow before we are required to bear it.
              <br><br>
              <span class="quote-author">Robert Calibo</span>
            </blockquote>
            <br><br><br>
            <h3 style="margin-bottom: 2rem;">Digital technology on the cutting edge</h3>
            <ul>
              <li>How will digital activities impact traditional manufacturing.</li>
              <li>All these digital elements and projects aim to enhance .</li>
              <li>I monitor my staff with software that takes screenshots.</li>
              <li>Laoreet dolore magna niacin sodium glutimate aliquam hendrerit.</li>
              <li>Minim veniam quis niacin sodium glutimate nostrud exerci dolor.</li>
            </ul>
            <br>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
            <br>
            <img src="./6.jpg" alt="" style="max-width: -webkit-fill-available; margin-bottom: 2rem;">
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
          </div>
          <div class="comments">
            <h3>1 comment on ???Servo Project Joins The Linux Foundation Desco???</h3>
            <div class="comment">
              <div class="user-picture">
                <img src="./userpic.png" alt="userpic">
              </div>
              <div class="comment-details">
                <h6 class="username">Admin</h6>
                <p class="comment-date">December 3, 2020 at 8:30 am</p>
                <p class="comment-text">Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est</p>
                <button class="comment-reply-button">Reply</button>
              </div>
            </div>
            
          </div>
          <div class="add-comment">
            <h4>Leave a Reply</h4>
            <p>Your email address will not be published. Required fields are marked *</p>
            <br>
            <form>
              <div class="row">
                <div class="col-lg-6 mb-4 col-md-6 col-sm-6">
                  <input type="text" class="form-control" placeholder="Name*">
                </div>
                <div class="col-lg-6 mb-4 col-md-6 col-sm-6">
                  <input type="text" class="form-control" placeholder="Email*">
                </div>
                <div class="col-lg-12 mb-4">
                  <textarea class="form-control" placeholder="Your Message Here"></textarea>
                </div>
                <input type="submit" value="Post Comment" class="post-comment-submit">
              </div>
              
            </form>
          </div>
        </div>
        <div class="col-lg-4 blog-right mt-4">
          <div class="search-input-div blog-card pr">
            <form action="">
              <input type="text" class="form-control blog-right-section-search" placeholder="Searching...">
              <button class="search-button" type="submit">
                <i class="fa fa-search search-input-icon"></i>
              </button>
            </form>
          </div>

          <div class="blog-right-posts blog-card">
            <h4 class="right-posts-header">Latest Posts</h4>
            <div class="col right-post" style="display: flex;">
              <img src="./1.jpg" alt="" style="height: 50px;">
              <div class="right-post-text">
                <a href="#" class="post-anchor">
                  <h6>Open Source Job Report Show More Openings Fewer</h6>
                </a>
                <div class="right-calender-icon">
                  <i class="fa fa-calendar"></i>
                  <span>January 10, 2020</span>
                </div>
              </div>
            </div>
            <div class="col right-post" style="display: flex;">
              <img src="./2.jpg" alt="" style="height: 50px;">
              <div class="right-post-text">
                <a href="#" class="post-anchor">
                  <h6>Tech Products That Makes Its Easier to Stay at Home</h6>
                </a>
                <div class="right-calender-icon">
                  <i class="fa fa-calendar"></i>
                  <span>January 10, 2020</span>
                </div>
              </div>
            </div>
            <div class="col right-post" style="display: flex;">
              <img src="./3.jpg" alt="" style="height: 50px;">
              <div class="right-post-text">
                <a href="#" class="post-anchor">
                  <h6>Necessity May Give Us Your Best Cirtual Cour System</h6>
                </a>
                <div class="right-calender-icon">
                  <i class="fa fa-calendar"></i>
                  <span>January 10, 2020</span>
                </div>
              </div>
            </div>
            <div class="col right-post" style="display: flex;">
              <img src="./4.jpg" alt="" style="height: 50px;">
              <div class="right-post-text">
                <a href="#" class="post-anchor">
                  <h6>Servo Project Joins The Linux Foundation Fold Desco</h6>
                </a>
                <div class="right-calender-icon">
                  <i class="fa fa-calendar"></i>
                  <span>January 10, 2020</span>
                </div>
              </div>
            </div>
          </div>

          <div class="right-blog-categories blog-card">
            <h4 class="right-blog-categories-header">Categories</h4>
            <ul class="right-blog-categories-list">
              <li><a href="#" class="post-anchor">Application Testing</a></li>
              <li><a href="#" class="post-anchor">Artifical Intelligence</a></li>
              <li><a href="#" class="post-anchor">Digital Technology</a></li>
              <li><a href="#" class="post-anchor">IT Services</a></li>
              <li><a href="#" class="post-anchor">Software Development</a></li>
              <li><a href="#" class="post-anchor">Web Development</a></li>
            </ul>

          </div>

        </div>
      </div>
    </div>


    <footer>
      <div class="footer-top">
        <div class="row">
          <div class="col-lg-3 leftmost-footer mb-4">
            <img src="./logo-dark.png" alt="logo" class="footer-logo">
            <p>Sedut perspiciatis unde omnis iste natus error sitlutem acc usantium doloremque denounce with illo inventore veritatis</p>
            <div class="footer-icons">
              <a href="#">
                <div class="">
                  <i class="fa fa-facebook footer-facebook-icon pr"></i>
                </div>
              </a>
              <a href="#">
                <div class="">
                  <i class="fa fa-twitter footer-twitter-icon pr"></i>
                </div>
              </a>
              <a href="#">
                <div class="">
                  <i class="fa fa-pinterest footer-pinterest-icon pr"></i>
                </div>
              </a>
              <a href="#">
                <div class="">
                  <i class="fa fa-instagram footer-instagram-icon pr"></i>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 it-services-footer mb-4">
            <h4>IT Services</h4>
            <ul class="it-services-list">
              <li>
                <a href="">Software Development</a>
              </li>
              <li>
                <a href="">Web Development</a>
              </li>
              <li>
                <a href="">Analytic Solutions</a>
              </li>
              <li>
                <a href="">Cloud and DevOps</a>
              </li>
              <li>
                <a href="">Project Design</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 footer-contact-info mb-4">
            <h4>Contact Info</h4>
            <div class="footer-contact-info-container">
              <div class="footer-contact">
                <div class="footer-address-icon">
                  <i class="fa fa-map-marker"></i>
                </div>
                <div class="footer-address-text">
                  <span>374 FA Tower, William S Blvd 2721, IL, USA</span>
                </div>
              </div>
  
              <div class="footer-phone">
                <div class="footer-phone-icon">
                  <i class="fa fa-phone"></i>
                </div>
                <div class="footer-phone-text">
                  <a href="" id="footer-phone">(+880)155-69569</a>
                </div>
              </div>
  
              <div class="footer-email">
                <div class="footer-email-icon">
                  <i class="fa fa-envelope-o"></i>
                </div>
                <div class="footer-email-text">
                  <a href="#" id="footer-email">support@rstheme.com</a>
                </div>
              </div>
  
              <div class="footer-clock">
                <div class="footer-clock-icon">
                  <i class="fa fa-clock-o"></i>
                </div>
                <div class="footer-clock-text">
                  <p>Opening Hours: 10:00 - 18:00</p>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-lg-3 footer-newsletter mb-4">
            <h4>Newsletter</h4>
            <p>We denounce with righteous and in and dislike men who are so beguiled and demo realized.</p>
            <div class="footer-newsletter-email-input-div">
              <form>
                <input type="email" placeholder="Your email address" class="footer-newsletter-email-input"/>
                <button type="submit" value="" class="paper-plane">
                  <i class="fa fa-paper-plane-o" style="color: white"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="row">
          <div class="footer-bottom-left col-lg-6">
            <span>&copy 2021 All Rights Reserved. Developed By RSTheme</span>
          </div>
          <div class="footer-bottom-right col-lg-6 df-jcfe">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Shop</a></li>
              <li><a href="#">FAQs</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>