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
});