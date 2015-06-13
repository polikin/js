module.exports = {
    init: function(){
        console.log('home');

        $('.timeline-row').find('p:has(img)').addClass('img');
    }
};
