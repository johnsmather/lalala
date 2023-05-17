const minimal_char = $("#practice_min")
const max_char = $("#practice_max")
const start = $("#practice_start")
const start2 = $("#practice_start2")
const next = $("#practice_next")
const table = $("#practice_table")
const task = $("#practice_que")
const answer = $("#practice_ans")
const error = $("#practice_error")
const action = $("#action").html()
const total = $("#practice_total")
const total_points = $("#practice_total_points")
const timer_h1 = $("#practice_timer")
const correct_ans = "<span class=\"correct\">✓</span>"
const wrong_ans = "<span class=\"wrong\">🞫</span>"
function getRandomInt(min, max) {
    let rand = min + Math.random() * (max - min) ;
    return Math.round(rand);
}

let time = 0
function timer () {
    if(time % 60 > 9) {
        timer_h1.html("Затраченное время: <span>" + Math.floor(time / 60) + ":" + time % 60 + "</span>")
    } else {
        timer_h1.html("Затраченное время: <span>" + Math.floor(time / 60) + ":0" + time % 60 + "</span>")
    }
    time += 1
}



const practice_id = $('#practice_id').text()
const user_id = $('#user_id').text()
const route = $('#route').text()
$('#practice_id').remove()
$('#user_id').remove()
$('#route').remove()

let correct_answers = 0
start.on("click", () => {
    console.log(minimal_char.val() )
    console.log(max_char.val() )
    if(Number(minimal_char.val()) > Number(max_char.val())) {
        error.removeClass("hidden")
        error.html("Минимальное число должно быть меньше максимального")
    } else if(Math.abs(max_char.val() - minimal_char.val()) < 10) {
        error.removeClass("hidden")
        error.html("Разница между минимальным и максимальным значением должна быть больше 10")
    }  else  {
        const min = minimal_char.val()
        const max = max_char.val()
        timer_h1.removeClass("hidden")
        let start_timer = setInterval(timer, 1000)
        minimal_char.addClass("hidden")
        max_char.addClass("hidden")
        start.addClass("hidden")
        error.addClass("hidden")
        task.removeClass("hidden")
        answer.removeClass("hidden")
        table.removeClass("hidden")
        next.removeClass("hidden")
        let i = 1
        let first_num = getRandomInt(Number(min), Number(max))
        let second_num = getRandomInt(Number(min), Number(max))
        if(second_num> first_num) {
            let k = first_num
            first_num = second_num
            second_num = k
        }
        task.html(first_num + action + second_num)
        let task_ans = eval(task.html())
        function check(min, max) {
            first_num = getRandomInt(Number(min), Number(max))
            second_num = getRandomInt(Number(min), Number(max))
            if(second_num> first_num) {
            let k = first_num
            first_num = second_num
            second_num = k
        }
        task.html(first_num + action + second_num)
        task_ans = eval(task.html())
        answer.val("")
        i++
        if(i === 11) {
            const min = minimal_char.val()
            const max = max_char.val()
            answer.addClass("hidden")
            total.html("Правильных ответов: <span id=\"answers_sql\">" + correct_answers + "</span>")
            total.removeClass("hidden")
            task.addClass("hidden")
            next.addClass("hidden")
            let points = Math.floor(Math.floor(10000 / time) * correct_answers * (Math.abs(min) + Math.abs(max)) * 0.00001 * (Math.abs(max) - Math.abs(min)))
            total_points.html("Всего очков: <span>" + points + "</span>")
            total_points.removeClass("hidden")
            start.html("Начать снова")
            minimal_char.val('')
            max_char.val('')
            minimal_char.removeClass("hidden")
            max_char.removeClass("hidden")
            start2.removeClass("hidden")
            $.post({
                url:  route,
                data: {
                    'test_id': practice_id,
                    'user_id': user_id,
                    'name': $('.lesson__title').text(),
                    'category': 2,
                    'points': points,
                    'time': time,
                    'correct_count': correct_answers,
                }
            });
            clearInterval(start_timer)
            start2.on("click", () => {
                location.reload()
            })
        }
}
    answer.on("input", () => {
        if(Number(answer.val()) === task_ans) {
            try {
                $(`#practice_table_${i}`).html(correct_ans)
            } catch {}
            correct_answers += 1
            check(min, max)
        }
    })
    next.on("click", () => {
        try {
            $(`#practice_table_${i}`).html(wrong_ans)
        } catch {}
        check(min, max)
        })
    }
})





