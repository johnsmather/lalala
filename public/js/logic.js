const answer = $("#logic_ans")
const total_points = $("#logic_total_points")
const timer_h1 = $("#logic_timer")
const text = $("#logic_text")
const success = $("#logic_success")
const multiplier = $('#multiplier').text()
const completed_answer = $('#logic_completed_answer')

const real_answer = $("#logic_real_ans").data("ans")
$("#logic_real_ans").remove()

console.log(real_answer)
let time = 0
function timer () {
time += 1
if(time % 60 > 9) {
    timer_h1.html("Затраченное время: <span>" + Math.floor(time / 60) + ":" + time % 60 + "</span>")
} else {
    timer_h1.html("Затраченное время: <span>" + Math.floor(time / 60) + ":0" + time % 60 + "</span>")
}
}
let start_timer = setInterval(timer, 1000)

answer.on("input", () => {
    if(Number(answer.val()) === real_answer || answer.val().trim() === real_answer ) {
        console.log(answer.val())
        completed_answer.text(answer.val())
        completed_answer.removeClass('hidden')
        answer.remove()
        clearInterval(start_timer)
        text.addClass("hidden")
        success.removeClass("hidden")
        total_points.removeClass("hidden")
        let points = Math.floor(multiplier / time)
        total_points.html(`Очков получено: <span>${points}</span>`)
        finishLogical()
        console.log(213123)
    }
})
