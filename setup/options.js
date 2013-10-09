
var ipDesignOptions = { //always scope your functions in ipDesignOptions scope
    bodyBackgroundColor: function (value) {
        $('.middleContainer').css('background-color', value);
    },
        logoBackgroundColor: function (value) {
            $('.headerLogoTop').css('background-color', value);
            $('.headerLogoBottom').css('background-color', value);
            $('.bottomUpperContainer').css('background-color', value);
    },
    headingColor: function (value) {
        $('.middleContainer .ipwTitle').css('color', value);
    },
};