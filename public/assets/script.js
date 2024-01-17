$('.toggle-sidebar').click(function () {
    $('body').toggleClass('collapsed')
})

$(document).ready(function () {
    $(".notification-header i, .settings-header i, .profile-header i").click(function (e) {
        e.stopPropagation();
        $(".header-icon-box").removeClass("active");
        $(this).siblings(".header-icon-box").toggleClass("active");
    });

    $(document).click(function (event) {
        if (!$(event.target).closest('.header-icon-box').length) {
            $(".header-icon-box").removeClass("active");
        }
    });
});