$(document).ready(function () {
    console.log("Runnning on Ready");
    
    
    $("main .loginButtons .customerLoginButton").on("click", function(e) {
        window.location = "customerLogin.php";
    });
    
    //*********************************************************************
    // Functions for the customer section
    $("main .customerHistoryButton").on("click", function(e) {
        window.location = "customerHistory.php";
    });
    
    $("main .customerScheduleButton").on("click", function(e) {
        window.location = "customerSchedule.php";
    });
    
    $("main .estimatorButton").on("click", function(e) {
        window.location = "https://parabug.xyz/";
    });
    
    $("main .customerFeedbackButton").on("click", function(e) {
        window.location = "customerFeedback.php";
    });
    
    $("main .customerContactButton").on("click", function(e) {
        window.location = "https://www.parabug.solutions/contact-us";
    });
    
    // TODO: Add Logout functionality once Login is implemented
    $("footer .customerLogOutButton").on("click", function(e){
        window.location = "index.php";
    });
    
    // TODO: Add Login functionality with passowrd protection
    // TODO: Check if user is in the Database
    $(".loginCredentials").submit(function(e){
        e.preventDefault();
    });
    
    // Temporary function
    $("main .loginButton").on("click", function(e) {
        window.location = "customerHome.php";
    });
    
    //*********************************************************************
});