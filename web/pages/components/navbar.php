<header id="masthead" class="site-header">
    <div class="site-branding">
        <h1 class="site-title"><a href="index.html" rel="home">Group 8</a></h1>
        <h2 class="site-description">Simple make perfect</h2>
    </div>
    <nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle">Menu</button>
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <div class="menu-menu-1-container">
        <ul id="menu-menu-1" class="menu">
            <li><a href="../home/home.php">Home</a></li>
            <li><a href="../about/about.php">About</a></li>
            <li><a href="../contact/contact.php">Contact</a></li>

            <li>
                <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span>Cart</span>
                    <i class="fa fa-lg fa-shopping-cart position-relative">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger d-none" id="badge-num">
                            0
                        </span>
                    </i>
                </a>
            </li>
        </ul>
    </div>
    </nav>
</header>

<!-- Bootstrap Modal -->
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cart Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-light table-hover table-responsive" id="cart-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="d-none">
                            <th scope="row">1</th>
                            <td>Product 1</td>
                            <td>1</td>
                            <td>
                                <span>price</span>
                            </td>
                            <td>
                                <button id="remove-cart-item" class="btn btn-sm btn-danger pt-0">X</button>
                            </td>
                        </tr>
                      </tbody>
                </table>

                <div>
                    <span class="h4">Total Price: </span>
                    <span>$</span>
                    <span id="price-value" class="h4"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a type="button" class="btn btn-primary">Checkout by Cash</a>
                <a type="button" id="paypal-button-container" class="pt-2"></a>
            </div>
        </div>
    </div>
</div>