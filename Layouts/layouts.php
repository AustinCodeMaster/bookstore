<?php
class layout{
    public function header($conf) {
        ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php print $conf['site_title']; ?>">
    <meta name="author" content="<?php print implode(', ', $conf['site_authors']); ?>">
    <meta name="generator" content="<?php print $conf['version']; ?>">
    <title><?php print $conf['site_name']; ?> - Bookstore & Library</title>
    
    <!-- Bootstrap CSS -->
    <link href="<?php print $conf['site_url']; ?>css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?php print $conf['site_url']; ?>css/custom.css" rel="stylesheet">
    
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
        }
        
        .category-card {
            transition: transform 0.3s ease;
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            height: 100%;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
        }
        
        .book-card {
            border: none;
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .book-card:hover {
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .btn-bookstore {
            background-color: #8B4513;
            border-color: #8B4513;
            color: white;
        }
        
        .btn-bookstore:hover {
            background-color: #654321;
            border-color: #654321;
        }
        
        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 0.8rem;
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            color: #8B4513;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="./">
                <i class="bi bi-book-half"></i>
                <?php print $conf['site_name']; ?>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') print 'active'; ?>" href="./">
                            <i class="bi bi-house"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-book"></i> Books
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-tags"></i> Categories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-info-circle"></i> About
                        </a>
                    </li>
                </ul>
                
                <div class="d-flex">
                    <a class="btn btn-outline-light me-2" href="forms/signin.php">
                        <i class="bi bi-box-arrow-in-right"></i> Sign In
                    </a>
                    <a class="btn btn-bookstore" href="forms/signup.php">
                        <i class="bi bi-person-plus"></i> Sign Up
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container py-4">
        <?php
    }

    public function navbar($conf) {
        // Navigation is handled in header method
    }

    public function banner($conf) {
        ?>
        <!-- Hero Section -->
        <section class="hero-section text-center mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="display-5 fw-bold mb-4">Discover Your Next Favorite Book</h1>
                        <p class="lead mb-4">Explore thousands of books across all genres. From bestsellers to hidden gems, find your perfect read.</p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="forms/signup.php" class="btn btn-primary btn-lg px-4">
                                <i class="bi bi-book"></i> Start Reading
                            </a>
                            <a href="#featured" class="btn btn-outline-light btn-lg px-4">
                                <i class="bi bi-star"></i> Featured Books
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    public function content($conf) {
        ?>
        <!-- Features Section -->
        <section class="py-5">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col">
                        <h2 class="h1 fw-bold">Why Choose Our Bookstore?</h2>
                        <p class="lead">We offer the best reading experience for book lovers</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="feature-icon">
                                <i class="bi bi-truck"></i>
                            </div>
                            <h4>Free Shipping</h4>
                            <p class="text-muted">Free delivery on all orders over $25. Quick and reliable shipping worldwide.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="feature-icon">
                                <i class="bi bi-collection"></i>
                            </div>
                            <h4>100,000+ Titles</h4>
                            <p class="text-muted">Massive collection of books across all genres. Always something new to discover.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="feature-icon">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p class="text-muted">Our customer service team is always ready to help with any questions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row mb-4">
                    <div class="col">
                        <h2 class="text-center mb-4">Popular Categories</h2>
                    </div>
                </div>
                
                <div class="row g-4">
                    <?php
                    $categories = [
                        ['icon' => 'bi-stars', 'title' => 'Fantasy', 'desc' => 'Magical worlds and epic adventures'],
                        ['icon' => 'bi-heart', 'title' => 'Romance', 'desc' => 'Love stories and heartwarming tales'],
                        ['icon' => 'bi-rocket', 'title' => 'Sci-Fi', 'desc' => 'Future worlds and technology'],
                        ['icon' => 'bi-search', 'title' => 'Mystery', 'desc' => 'Thrillers and detective stories']
                    ];
                    
                    foreach ($categories as $category) {
                        echo '
                        <div class="col-md-3 col-6">
                            <div class="card category-card text-center h-100">
                                <div class="card-body">
                                    <i class="' . $category['icon'] . ' bi-3x text-primary mb-3"></i>
                                    <h5>' . $category['title'] . '</h5>
                                    <p class="text-muted">' . $category['desc'] . '</p>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Featured Books -->
        <section id="featured" class="py-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col">
                        <h2 class="text-center mb-4">Featured Books</h2>
                        <p class="text-center lead">Discover this week\'s most popular titles</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <?php
                    $books = [
                        ['title' => 'The Great Adventure', 'author' => 'John Author', 'price' => '$19.99', 'rating' => 4.5, 'discount' => 20],
                        ['title' => 'Ocean Mysteries', 'author' => 'Jane Writer', 'price' => '$24.99', 'rating' => 4.0, 'discount' => 0],
                        ['title' => 'Mountain Dreams', 'author' => 'Alex Novelist', 'price' => '$17.99', 'rating' => 5.0, 'discount' => 15],
                        ['title' => 'City Lights', 'author' => 'Sarah Author', 'price' => '$21.99', 'rating' => 3.5, 'discount' => 0]
                    ];
                    
                    foreach ($books as $book) {
                        echo '
                        <div class="col-md-3">
                            <div class="card book-card h-100">
                                ' . ($book['discount'] > 0 ? '<span class="discount-badge">-' . $book['discount'] . '%</span>' : '') . '
                                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&w=400&h=250&fit=crop" class="card-img-top" alt="' . $book['title'] . '">
                                <div class="card-body">
                                    <h6 class="card-title">' . $book['title'] . '</h6>
                                    <p class="text-muted small">By ' . $book['author'] . '</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-primary fw-bold">' . $book['price'] . '</span>
                                        <span class="text-warning">';
                        
                        // Display star ratings
                        $fullStars = floor($book['rating']);
                        $hasHalfStar = ($book['rating'] - $fullStars) >= 0.5;
                        
                        for ($i = 0; $i < $fullStars; $i++) {
                            echo '<i class="bi bi-star-fill"></i>';
                        }
                        if ($hasHalfStar) {
                            echo '<i class="bi bi-star-half"></i>';
                        }
                        for ($i = $fullStars + ($hasHalfStar ? 1 : 0); $i < 5; $i++) {
                            echo '<i class="bi bi-star"></i>';
                        }
                        
                        echo '
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </section>
        <?php
    }

    public function form_content($conf, $ObjForm = null, $ObjFncs = null) {
        ?>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <?php 
                        $currentPage = basename($_SERVER['PHP_SELF']);
                        
                        if ($currentPage == 'forms/signup.php') {
                            if ($ObjForm && method_exists($ObjForm, 'forms/signup')) {
                                $ObjForm->signup($conf, $ObjFncs); 
                            } else {
                                echo '<div class="alert alert-danger">Signup form is not available</div>';
                            }
                        } elseif ($currentPage == 'forms/signin.php') {
                            if ($ObjForm && method_exists($ObjForm, 'forms/signin')) {
                                $ObjForm->signin(); 
                            } else {
                                echo '<div class="alert alert-danger">Signin form is not available</div>';
                            }
                        } else {
                            echo '<div class="alert alert-warning">Form content not configured for this page</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    public function footer($conf) {
        ?>
            </div> <!-- Close container -->
        </main>

        <!-- Footer -->
        <footer class="bg-dark text-white py-4 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">&copy; <?php print date("Y"); ?> <?php print $conf['site_name']; ?>. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#" class="text-white text-decoration-none me-3">Privacy Policy</a>
                        <a href="#" class="text-white text-decoration-none">Terms of Service</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS -->
        <script src="<?php print $conf['site_url']; ?>js/bootstrap.bundle.min.js"></script>
        
        <!-- Custom Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Simple animation for cards
                const cards = document.querySelectorAll('.category-card, .book-card');
                cards.forEach((card, index) => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.transition = 'all 0.6s ease';
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, index * 100);
                });
            });
        </script>
    </body>
</html>
        <?php
    }
}
?>