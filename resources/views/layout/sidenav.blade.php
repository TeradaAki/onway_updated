<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Side Navigation Layout</title>
    <link rel="stylesheet" href="{{asset('css/sidenav.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
    <div class="sidenav">
        <div class="logo">
            <img class="img_logo" src="{{ asset('img/onway_logo.png') }}" alt="Onway Logo">

        </div>
        <hr>
        <br>
        <div class="nav">
            <div class="menu">
                {{-- ----- DASHBBOARD ----- --}}
                <div class="item">
                    <div class="item_name">
                        <i class="bi bi-speedometer menu_icon"></i>
                        <a class="menu_name" href="">Dashboard</a>
                    </div>
                </div>
                {{-- ----- ORDERS ----- --}}
                <div class="item">
                    <div class="item_name">
                        <i class="bi bi-clock-history menu_icon"></i>
                        <a class="menu_name" id="ordersDropdownToggle">Orders</a>
                    </div>
                    <div class="dropdown_content" id="dropdown-content-orders">
                        <a class="dropdown_name" href="">All Orders</a>
                        <a class="dropdown_name" href="">Order Details</a>
                        <a class="dropdown_name" href="">Order History</a>
                    </div>
                </div>
                {{-- ----- USERS ----- --}}
                <div class="item">
                    <div class="item_name">
                        <i class="bi bi-person-square menu_icon"></i>
                        <a class="menu_name" id="usersDropdownToggle">Users</a>
                    </div>
                    <div class="dropdown_content" id="dropdown-content-users">
                        <a class="dropdown_name" href="/customer">Customer List</a>
                        <a class="dropdown_name" href="/driver">Driver List</a>
                    </div>
                </div>
                {{-- ----- PRODUCTS ----- --}}
                <div class="item">
                    <div class="item_name">
                        <i class="bi bi-diagram-3 menu_icon"></i>
                        <a class="menu_name" id="productsDropdownToggle">Products</a>
                    </div>
                    <div class="dropdown_content" id="dropdown-content-products">
                        <a class="dropdown_name" href="/restaurant">Restaurant</a>
                        <a class="dropdown_name" href="">Grocery</a>
                        <a class="dropdown_name" href="">Mall</a>
                    </div>
                </div>
                {{-- ----- PAYMENTS ----- --}}
                <div class="item">
                    <div class="item_name">
                        <i class="bi bi-credit-card menu_icon"></i>
                        <a class="menu_name" id="paymentsDropdownToggle">Payments & Finance</a>
                    </div>
                    <div class="dropdown_content" id="dropdown-content-payments">
                        <a class="dropdown_name" href="">Transaction History</a>
                        <a class="dropdown_name" href="">Refunds</a>
                        <a class="dropdown_name" href="">Salary</a>
                    </div>
                </div>
                {{-- ----- REPORTS ----- --}}
                <div class="item">
                    <div class="item_name">
                        <i class="bi bi-envelope menu_icon"></i>
                        <a class="menu_name" href="">Reports</a>
                    </div>
                </div>
                {{-- ----- HELP AND SUPPORT ----- --}}
                <div class="item">
                    <div class="item_name">
                        <i class="bi bi-chat-left-text menu_icon"></i>
                        <a class="menu_name" href="">Help & Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content_here">
        @yield('add_content')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Toggle the "Orders" dropdown
            $("#ordersDropdownToggle").click(function() {
                $("#dropdown-content-orders").toggleClass("active");
            });
            
            // Toggle the "Users" dropdown
            $("#usersDropdownToggle").click(function() {
                $("#dropdown-content-users").toggleClass("active");
            });

            // Toggle the "Products" dropdown
            $("#productsDropdownToggle").click(function() {
                $("#dropdown-content-products").toggleClass("active");
            });

            // Toggle the "Payments & Finance" dropdown
            $("#paymentsDropdownToggle").click(function() {
                $("#dropdown-content-payments").toggleClass("active");
            });

            // Close the dropdown when the user hovers off
            $(".item").mouseleave(function() {
                $(".dropdown_content.active").removeClass("active");
            });
        });
    </script>



    
</body>
</html>