const imgSelector = $('#select_img')
const imgBlock = $('#img_choose')
if(imgSelector.val() == 1) {
    imgBlock.removeClass('hidden')
} else {
    imgBlock.addClass('hidden')
}
imgSelector.on('change', () => {
    if(imgSelector.val() == 1) {
        imgBlock.removeClass('hidden')
    } else {
        imgBlock.addClass('hidden')
    }
})
