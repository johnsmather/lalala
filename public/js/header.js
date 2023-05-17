const burger = $('#burger')
const header = $('#header')
burger.on('click', () => {
    if(header.hasClass('active-h')) {
        header.removeClass('active-h')
    } else {
        header.addClass('active-h')
    }
})
