//Verify if the user is the administrator
if(localStorage.getItem('email')=="uriel.aguero1812@gmail.com"){
    $('.category__items .category__btn__selector--admin[category=Todo]').addClass('active');
    $('.category__items .category__btn__selector--admin').click(function(){
        //Button category
        var ProductCategory = $(this).attr('category');

        //Change button style
        $('.category__btn__selector--admin').removeClass('active');
        $(this).addClass('active');

        //Hiding products
        $('.products__list .card').css('transform', 'scale(0)');
        function hideElement(){
            $('.products__list .card').hide();
        }setTimeout(hideElement, 300);

        //Showing products
        function showElement(){
            $('.products__list .card[category="'+ProductCategory+'"]').show();
            $('.products__list .card[category="'+ProductCategory+'"]').css('transform', 'scale(1)');
        }setTimeout(showElement, 300);
    });
    //Showing all elements
    $('.category__items .category__btn__selector--admin[category=Todo]').click(function(){
        function showEverything(){
            $('.products__list .card').show();
            $('.products__list .card').css('transform', 'scale(1)');
        }setTimeout(showEverything, 300);
    });
}else{
    $('.category__items .category__btn__selector[category=Todo]').addClass('active');
    $('.category__btn__selector').click(function(){
        //Button category
        var ProductCategory = $(this).attr('category');

        //Change button style
        $('.category__btn__selector').removeClass('active');
        $(this).addClass('active');

        //Hiding products
        $('.products__list .card').css('transform', 'scale(0)');
        function hideElement(){
            $('.products__list .card').hide();
        }setTimeout(hideElement, 300);

        //Showing products
        function showElement(){
            $('.products__list .card[category="'+ProductCategory+'"]').show();
            $('.products__list .card[category="'+ProductCategory+'"]').css('transform', 'scale(1)');
        }setTimeout(showElement, 300);
    });
    //Showing all elements
    $('.category__items .category__btn__selector[category=Todo]').click(function(){
        function showEverything(){
            $('.products__list .card').show();
            $('.products__list .card').css('transform', 'scale(1)');
        }setTimeout(showEverything, 300);
    });
}
