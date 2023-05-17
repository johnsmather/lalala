let emails = $("#emails")
emails.remove()
emails = emails.text()
emails = emails.split("\n")
console.log(emails)

const email = $("#email")
const password = $("#password")
const submit = $("#submit")
const error = $("#error")
submit.on("click", () => {
  console.log(11)
  err = 0
  if(!emails.includes(email.val())) {
    error.removeClass("hidden")
    error.text("email не найден")
    err = 1
    console.log(23)
  } else {
    err = 0
  }
  if(err == 0){
    error.addClass("hidden")
    console.log(email.val())
    $.get("/auth.php", {
      email: email.val(),
      password: password.val()
    });
  }
})