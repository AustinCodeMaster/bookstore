<?php
class layout {
    public function header($conf) {
        ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="<?php print $conf['site_description']; ?>">
      <meta name="author" content="<?php print implode(', ', $conf['site_authors']); ?>">
      <meta name="generator" content="<?php print $conf['version']; ?>">
      <title><?php print $conf['site_name']; ?> - <?php print $conf['site_title']; ?></title>
      <link href="<?php print $conf['site_url']; ?>css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <link href="<?php print $conf['site_url']; ?>css/custom.css" rel="stylesheet">
   </head>
   <body>
      <main>
         <div class="container py-4">
        <?php
    }
    
    public function navbar($conf, $current_page = '') {
        if (empty($current_page)) {
            $current_page = basename($_SERVER['PHP_SELF']);
        }
        ?>
         <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
               <a class="navbar-brand" href="./">
                   <i class="fas fa-book"></i> <?php print $conf['site_name']; ?>
               </a> 
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                   <span class="navbar-toggler-icon"></span>
               </button> 
               <div class="collapse navbar-collapse" id="navbarContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item"> 
                         <a class="nav-link <?php if($current_page == 'index.php') print 'active'; ?>" href="./">Home</a> 
                     </li>
                     <li class="nav-item"> 
                         <a class="nav-link <?php if($current_page == 'books.php') print 'active'; ?>" href="books.php">Books</a> 
                     </li>
                     <li class="nav-item"> 
                         <a class="nav-link <?php if($current_page == 'categories.php') print 'active'; ?>" href="categories.php">Categories</a> 
                     </li>
                     <li class="nav-item"> 
                         <a class="nav-link <?php if($current_page == 'about.php') print 'active'; ?>" href="about.php">About</a> 
                     </li>
                  </ul>
                  <ul class="navbar-nav ms-auto">
                     <li class="nav-item">
                         <a class="nav-link <?php if($current_page == 'cart.php') print 'active'; ?>" href="cart.php">
                             <i class="fas fa-shopping-cart"></i> Cart
                         </a>
                     </li>
                     <li class="nav-item"> 
                         <a class="nav-link <?php if($current_page == 'signin.php') print 'active'; ?>" href="signin.php">Sign In</a> 
                     </li>
                     <li class="nav-item"> 
                         <a class="nav-link <?php if($current_page == 'signup.php') print 'active'; ?>" href="signup.php">Sign Up</a> 
                     </li>
                  </ul>
                  <form class="d-flex ms-3" action="search.php" method="GET">
                      <input class="form-control me-2" type="search" name="q" placeholder="Search books...">
                      <button class="btn btn-outline-light" type="submit">Search</button>
                  </form>
               </div>
            </div>
         </nav>
    <?php
    }
    
    public function hero_banner($conf, $title = '', $subtitle = '') {
        if (empty($title)) $title = "Welcome to " . $conf['site_name'];
        if (empty($subtitle)) $subtitle = "Discover your next favorite book";
        ?>
            <div class="p-5 mb-4 bg-dark text-white rounded-3">
               <div class="container-fluid py-5">
                  <h1 class="display-5 fw-bold"><?php print $title; ?></h1>
                  <p class="col-md-8 fs-4"><?php print $subtitle; ?></p>
                  <a class="btn btn-primary btn-lg" href="books.php">Browse Books</a> 
               </div>
            </div>
        <?php
    }
    
    public function book_card($book) {
        ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100 book-card">
                <img src="<?php print $book['image'] ?? 'images/default-book.jpg'; ?>" 
                     class="card-img-top" alt="<?php print $book['title']; ?>"
                     style="height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?php print htmlspecialchars($book['title']); ?></h5>
                    <p class="card-text text-muted">by <?php print htmlspecialchars($book['author'] ?? 'Unknown Author'); ?></p>
                    <p class="card-text flex-grow-1">
                        <?php print htmlspecialchars(substr($book['description'] ?? '', 0, 100)); ?>...
                    </p>
                    <div class="mt-auto">
                        <span class="h5 text-primary">$<?php print number_format($book['price'] ?? 0, 2); ?></span>
                        <a href="book.php?id=<?php print $book['id']; ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    
    public function featured_books($books) {
        if (empty($books)) return;
        ?>
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="border-bottom pb-2">Featured Books</h2>
            </div>
            <?php foreach ($books as $book): ?>
                <?php $this->book_card($book); ?>
            <?php endforeach; ?>
        </div>
        <?php
    }
    
    public function category_grid($categories) {
        ?>
        <div class="row">
            <?php foreach ($categories as $category): ?>
            <div class="col-md-3 mb-3">
                <div class="card category-card">
                    <div class="card-body text-center">
                        <i class="fas fa-<?php print $category['icon'] ?? 'book'; ?> fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title"><?php print $category['name']; ?></h5>
                        <p class="card-text"><?php print $category['book_count'] ?? 0; ?> books</p>
                        <a href="category.php?id=<?php print $category['id']; ?>" class="btn btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php
    }
    
    public function form_content($conf, $ObjForm = null, $ObjFncs = null) {
        $current_page = basename($_SERVER['PHP_SELF']);
        ?>
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light rounded-3">
                    <?php 
                    if ($current_page == 'signup.php') {
                        if ($ObjForm && method_exists($ObjForm, 'signup')) {
                            $ObjForm->signup($conf, $ObjFncs); 
                        } else {
                            echo "<div class='alert alert-danger'>Signup form is not available</div>";
                        }
                    } elseif ($current_page == 'signin.php') {
                        if ($ObjForm && method_exists($ObjForm, 'signin')) {
                            $ObjForm->signin(); 
                        } else {
                            echo "<div class='alert alert-danger'>Signin form is not available</div>";
                        }
                    } 
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 text-white bg-primary rounded-3">
                    <h2>About Our Bookstore</h2>
                    <p>Discover a world of knowledge and imagination at <?php print $conf['site_name']; ?>. We offer a wide selection of books across all genres.</p>
                    <ul>
                        <li>Thousands of titles available</li>
                        <li>Competitive prices</li>
                        <li>Fast shipping</li>
                        <li>Expert recommendations</li>
                    </ul>
                    <a class="btn btn-light" href="about.php">Learn More</a> 
                </div>
            </div>
        </div>
        <?php
    }
    
    public function alert_message($type, $message) {
        ?>
        <div class="alert alert-<?php print $type; ?> alert-dismissible fade show" role="alert">
            <?php print $message; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php
    }
    
    public function footer($conf) {
        ?>
            <footer class="pt-3 mt-4 text-body-secondary border-top">
                <div class="row">
                    <div class="col-md-4">
                        <h5><?php print $conf['site_name']; ?></h5>
                        <p>Your favorite online bookstore since <?php print date("Y"); ?>.</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="./">Home</a></li>
                            <li><a href="books.php">All Books</a></li>
                            <li><a href="categories.php">Categories</a></li>
                            <li><a href="about.php">About Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Contact</h5>
                        <p>Email: info@<?php print strtolower($conf['site_name']); ?>.com<br>
                        Phone: (555) 123-4567</p>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <p>Copyright &copy; <?php print date("Y"); ?> <?php print $conf['site_name']; ?> - All Rights Reserved</p> 
                </div>
            </footer>
         </div>
      </main>
       <script src="<?php print $conf['site_url']; ?>js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
     
   </body>
</html>
        <?php
    }
}
?>