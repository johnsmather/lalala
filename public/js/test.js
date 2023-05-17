let answers = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
function clear(a) {
  $(`#task-${a}-answer-1`).on("click", () => {
    $(`#task-${a}-answer-2`)[0].checked = false
    $(`#task-${a}-answer-3`)[0].checked = false
    $(`#task-${a}-answer-4`)[0].checked = false
    if(!$(`#task-${a}-answer-1`)[0].checked) {
      answers[a] = 0
    } else {
      answers[a] = 1
    }
  })
  $(`#task-${a}-answer-2`).on("click", () => {
    $(`#task-${a}-answer-1`)[0].checked = false
    $(`#task-${a}-answer-3`)[0].checked = false
    $(`#task-${a}-answer-4`)[0].checked = false
    if(!$(`#task-${a}-answer-2`)[0].checked) {
      answers[a] = 0
    } else {
      answers[a] = 2
    }
  })
  $(`#task-${a}-answer-3`).on("click", () => {
    $(`#task-${a}-answer-2`)[0].checked = false
    $(`#task-${a}-answer-1`)[0].checked = false
    $(`#task-${a}-answer-4`)[0].checked = false
    if(!$(`#task-${a}-answer-3`)[0].checked) {
      answers[a] = 0
    } else {
      answers[a] = 3
    }
  })
  $(`#task-${a}-answer-4`).on("click", () => {
    $(`#task-${a}-answer-2`)[0].checked = false
    $(`#task-${a}-answer-3`)[0].checked = false
    $(`#task-${a}-answer-1`)[0].checked = false
    if(!$(`#task-${a}-answer-4`)[0].checked) {
      answers[a] = 0
    } else {
      answers[a] = 4
    }
  })
}

clear(0)
clear(1)
clear(2)
clear(3)
clear(4)
clear(5)
clear(6)
clear(7)
clear(8)
clear(9)

let real_answers = []
for(let i=0;i<10;i++) {
    real_answers.push(Number($(`#correct-${i}`).text()))
    $(`#correct-${i}`).remove()
}

const finish = $("#test_finish")
const reload = $("#test_reload")
const tasks = $("#tasks")
const table = $("#test_table")
const timer_h1 = $("#test_timer")
const correct_ans = "<span class=\"correct\">✓</span>"
const wrong_ans = "<span class=\"wrong\">🞫</span>"
const total_points = $("#test_total_points")
const total_answers = $("#test_total_answers")

let time = 0
function timer () {
  if(time % 60 > 9) {
    timer_h1.html("Затраченное время: <span>" + Math.floor(time / 60) + ":" + time % 60 + "</span>")
  } else {
    timer_h1.html("Затраченное время: <span>" + Math.floor(time / 60) + ":0" + time % 60 + "</span>")
  }
  time += 1
}
let startTimer = setInterval(timer, 1000)


const test_id = $('#test_id').text()
const user_id = $('#user_id').text()
const route = $('#route').text()
const points_multiplier = $('#points_multiplier').text()
const name = $('.lesson__title').text()
$('#test_id').remove()
$('#user_id').remove()
$('#route').remove()
$('#points_multiplier').remove()

finish.on("click", () => {
    table.removeClass("hidden")
    reload.removeClass("hidden")
    total_points.removeClass("hidden")
    total_answers.removeClass("hidden")
    tasks.addClass("hidden")
    finish.addClass("hidden")
    clearInterval(startTimer)
    let correct_answers = 0
    for(let i = 0; i<10; i++) {
        if (Number(answers[i]) === Number(real_answers[i])) {
            correct_answers += 1
            $(`#test_table_${i}`).html(correct_ans)
        }
        else {
            $(`#test_table_${i}`).html(wrong_ans)
        }
    }
    let points = Math.round(correct_answers * points_multiplier / time)
    total_points.html("Очков получено: <span>" + points + "</span>")
    total_answers.html("Правильных ответов: <span>" + correct_answers + "</span>")
    $.post({
        url: route,
        data: {
            'test_id': test_id,
            'user_id': user_id,
            'name': name,
            'category': 1,
            'points': points,
            'time': time,
            'correct_count': correct_answers,
        }
    })
})
