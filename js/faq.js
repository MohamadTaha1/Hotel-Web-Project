
function start(){


        var question = $('.question');

        for (var i = 0; i < question.length; i++) {
        question[i].addEventListener("click", function () {
        var answer = this.nextElementSibling;

        if (answer.style.display === "block") {
            answer.style.display = "none";
        } else {
            answer.style.display = "block";
        }
    });
}
}

window.addEventListener("load",start, false);