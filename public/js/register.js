let emails = $("#emails")
emails.remove()
emails = emails.text()
emails = emails.split("\n")
console.log(emails)

const email = $("#email")
const login = $("#name")
const password = $("#password")
const password2 = $("#password2")
const submit = $("#submit")
const error = $("#error")
submit.on("click", () => {
  err = 0
  if(!email.val().includes("@")) {
    error.removeClass("hidden")
    error.text("Неверный email")
    err = 1
  } else if(password.val().length < 8) {
    error.removeClass("hidden")
    error.text("Пароль должен быть больше 8 символов")
    err = 1
  } else if(password.val() != password2.val()) {
    error.removeClass("hidden")
    error.text("Пароли не совпадают")
    err = 1
  } else if(emails.includes(email.val())) {
    error.removeClass("hidden")
    error.text("Этот email уже занят")
    err = 1
  } else {
    err = 0
  }
  if(err == 0){
    error.addClass("hidden")
    console.log(111)
    $.post("/check.php", {
      email: email.val(),
      name: login.val(),
      password: password.val()
    });
    window.location.href = "/"
    location.reload()
  }
})