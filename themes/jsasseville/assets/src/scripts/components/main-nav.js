module.exports = function(){
    var $nav = $('.main-nav');
    $('.btn-hamburger').on('click', function(){
        $nav.toggleClass('open');
    });
};