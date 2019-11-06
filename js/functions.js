$(document).ready(function () {
    console.log("Runnning on Ready");
    
    
    $("main .loginButtons .customerLoginButton").on("click", function(e) {
        window.location = "customerLogin.html";
    });
    
    //*********************************************************************
    // Functions for the customer section
    $("main .customerHistoryButton").on("click", function(e) {
        window.location = "customerHistory.html";
    });
    
    $("main .customerScheduleButton").on("click", function(e) {
        window.location = "customerSchedule.html";
    });
    
    $("main .estimatorButton").on("click", function(e) {
        window.location = "https://parabug.xyz/";
    });
    
    $("main .customerFeedbackButton").on("click", function(e) {
        window.location = "customerFeedback.html";
    });
    
    $("main .customerContactButton").on("click", function(e) {
        window.location = "https://www.parabug.solutions/contact-us";
    });
    
    // TODO: Add Logout functionality once Login is implemented
    $("footer .customerLogOutButton").on("click", function(e){
        window.location = "index.php";
    });
    //*********************************************************************
});