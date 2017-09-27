@extends('layouts.home.layout')

@section('content')
<!-- Site Main / Start -->
<main class="site-main container" id="main" role="main" style="display:block">
    <div class="content-area column" id="primary">
        <!-- Content / Start -->
        <div id="content">
            <h1 class="page-title">
                Shop
            </h1>
            <p class="woocommerce-result-count">
                Showing 1–10 of 30 results
            </p>
            <form class="woocommerce-ordering" method="get">
                <select class="orderby" name="orderby">
                    <option value="popularity">
                        Sort by popularity
                    </option>
                    <option value="rating">
                        Sort by average rating
                    </option>
                    <option value="date">
                        Sort by newness
                    </option>
                    <option value="price">
                        Sort by price: low to high
                    </option>
                    <option value="price-desc">
                        Sort by price: high to low
                    </option>
                </select>
            </form>
            <!-- .woocommerce-ordering -->
            <ul class="products">
                <li class="product first">
                    <a href="product_full.html">
                        <img alt="" class="attachment-shop_catalog wp-post-image" height="150" src="http://placehold.it/800x800" width="150"/>
                        <h3>
                            Flying Ninja
                        </h3>
                        <span class="price">
                            <del>
                                <span class="amount">
                                    $139.00
                                </span>
                            </del>
                            <ins>
                                <span class="amount">
                                    $119.00
                                </span>
                            </ins>
                        </span>
                    </a>
                    <a class="add_to_cart_button" href="product_full.html" rel="nofollow">
                        Add to cart
                    </a>
                </li>
                <!-- .product .first -->
                <li class="product">
                    <a href="product_full.html">
                        <img alt="" class="attachment-shop_catalog wp-post-image" height="150" src="http://placehold.it/800x800" width="150"/>
                        <h3>
                            Happy Ninja
                        </h3>
                        <span class="price">
                            <span class="amount">
                                £49.00
                            </span>
                        </span>
                    </a>
                    <a class="add_to_cart_button" href="product_full.html" rel="nofollow">
                        Add to cart
                    </a>
                </li>
                <!-- .product -->
                <li class="product">
                    <a href="product_full.html">
                        <img alt="" class="attachment-shop_catalog wp-post-image" height="150" src="http://placehold.it/800x800" width="150"/>
                        <h3>
                            Happy Ninja
                        </h3>
                        <span class="price">
                            <span class="amount">
                                £49.00
                            </span>
                        </span>
                    </a>
                    <a class="add_to_cart_button" href="product_full.html" rel="nofollow">
                        Add to cart
                    </a>
                </li>
                <!-- .product -->
                <li class="product last">
                    <a href="product_full.html">
                        <img alt="" class="attachment-shop_catalog wp-post-image" height="150" src="http://placehold.it/800x800" width="150"/>
                        <h3>
                            Ninja Silhouette
                        </h3>
                        <span class="price">
                            <span class="amount">
                                £49.00
                            </span>
                        </span>
                    </a>
                    <a class="add_to_cart_button" href="product_full.html" rel="nofollow">
                        Add to cart
                    </a>
                </li>
                <!-- .product .last -->
                <li class="product first">
                    <a href="product_full.html">
                        <img alt="" class="attachment-shop_catalog wp-post-image" height="150" src="http://placehold.it/800x800" width="150"/>
                        <h3>
                            Ninja Silhouette
                        </h3>
                        <span class="price">
                            <span class="amount">
                                £49.00
                            </span>
                        </span>
                    </a>
                    <a class="add_to_cart_button" href="product_full.html" rel="nofollow">
                        Add to cart
                    </a>
                </li>
                <!-- .product .first -->
                <li class="product">
                    <a href="product_full.html">
                        <img alt="" class="attachment-shop_catalog wp-post-image" height="150" src="http://placehold.it/800x800" width="150"/>
                        <h3>
                            Patient Ninja
                        </h3>
                        <span class="price">
                            <span class="amount">
                                £49.00
                            </span>
                        </span>
                    </a>
                    <a class="add_to_cart_button" href="product_full.html" rel="nofollow">
                        Add to cart
                    </a>
                </li>
                <!-- .product -->
                <li class="product">
                    <a href="product_full.html">
                        <img alt="" class="attachment-shop_catalog wp-post-image" height="150" src="http://placehold.it/800x800" width="150"/>
                        <h3>
                            Premium Quality
                        </h3>
                        <span class="price">
                            <span class="amount">
                                £49.00
                            </span>
                        </span>
                    </a>
                    <a class="add_to_cart_button" href="product_full.html" rel="nofollow">
                        Add to cart
                    </a>
                </li>
                <!-- .product -->
                <li class="product last">
                    <a href="product_full.html">
                        <img alt="" class="attachment-shop_catalog wp-post-image" height="150" src="http://placehold.it/800x800" width="150"/>
                        <h3>
                            Premium Quality
                        </h3>
                        <span class="price">
                            <span class="amount">
                                £49.00
                            </span>
                        </span>
                    </a>
                    <a class="add_to_cart_button" href="product_full.html" rel="nofollow">
                        Add to cart
                    </a>
                </li>
                <!-- .product .last -->
                <li class="product first">
                    <a href="product_full.html">
                        <img alt="" class="attachment-shop_catalog wp-post-image" height="150" src="http://placehold.it/800x800" width="150"/>
                        <h3>
                            Ship Your Idea
                        </h3>
                        <span class="price">
                            <span class="amount">
                                £49.00
                            </span>
                        </span>
                    </a>
                    <a class="add_to_cart_button" href="product_full.html" rel="nofollow">
                        Add to cart
                    </a>
                </li>
                <!-- .product .first -->
                <li class="product">
                    <a href="product_full.html">
                        <img alt="" class="attachment-shop_catalog wp-post-image" height="150" src="http://placehold.it/800x800" width="150"/>
                        <h3>
                            Ninja Album #1
                        </h3>
                        <span class="price">
                            <span class="amount">
                                £49.00
                            </span>
                        </span>
                    </a>
                    <a class="add_to_cart_button" href="product_full.html" rel="nofollow">
                        Add to cart
                    </a>
                </li>
                <!-- .product -->
                <li class="product">
                    <a href="product_full.html">
                        <img alt="" class="attachment-shop_catalog wp-post-image" height="150" src="http://placehold.it/800x800" width="150"/>
                        <h3>
                            Ninja Logo #1
                        </h3>
                        <span class="price">
                            <span class="amount">
                                £49.00
                            </span>
                        </span>
                    </a>
                    <a class="add_to_cart_button" href="product_full.html" rel="nofollow">
                        Add to cart
                    </a>
                </li>
                <!-- .product -->
                <li class="product last">
                    <a href="product_full.html">
                        <img alt="" class="attachment-shop_catalog wp-post-image" height="150" src="http://placehold.it/800x800" width="150"/>
                        <h3>
                            Ninja Logo #2
                        </h3>
                        <div class="star-rating" title="Rated 3.00 out of 5">
                            <span style="width:60%">
                                <strong class="rating">
                                    3.00
                                </strong>
                                out of 5
                            </span>
                        </div>
                        <span class="price">
                            <span class="amount">
                                £49.00
                            </span>
                        </span>
                    </a>
                    <a class="add_to_cart_button" href="product_full.html" rel="nofollow">
                        Add to cart
                    </a>
                </li>
                <!-- .product .last -->
            </ul>
            <!-- .products -->
            <nav class="pagination">
                <span class="page-numbers current">
                    1
                </span>
                <a class="page-numbers" href="#">
                    2
                </a>
                <a class="page-numbers" href="#">
                    3
                </a>
                <a class="next page-numbers" href="#">
                    Next →
                </a>
            </nav>
            <!-- .pagination -->
        </div>
        <!-- Content / End -->
    </div>
    <!-- Primary / End -->
</main>
<!-- Site Main / End -->
@endsection