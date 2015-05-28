$(function() {
    var quantity = $(".gallery").length;
    for (var i = 1; i <= quantity; i++) {
        $('#gallery-'+i).ulslide({
            effect: {
                type: 'fade', // slide or fade
                axis: 'x',     // x, y
                distance: 40   // Distance between frames
            },
            duration: 500,
            autoslide: 3000,
            width: 150,
            height: 150,
            mousewheel: true,
            nextButton: '#e1_next-'+i,
            prevButton: '#e1_prev-'+i
        });
    };
});