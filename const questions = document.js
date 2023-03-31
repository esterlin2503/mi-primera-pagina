const questions = document.querySelectorAll(".question");

questions.forEach((question) => {
  question.addEventListener("click", () => {
    question.classList.toggle("active");
    const answer = question.nextElementSibling;
    if (answer.classList.contains("show")) {
      answer.classList.remove("show");
    } else {
      answer.classList.add("show");
    }
  });
});
