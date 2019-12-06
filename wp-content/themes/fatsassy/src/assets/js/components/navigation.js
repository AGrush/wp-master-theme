import $ from 'jquery'

//event delegation. could have done this $('.menu-item-has-children').on('mouseenter'))
$('.c-navigation').on('mouseenter', '.menu-item-has-children', (e) => {
    $(e.currentTarget).addClass('open');
}).on('mouseleave', '.menu-item-has-children', (e) => {
    $(e.currentTarget).removeClass('open');
})