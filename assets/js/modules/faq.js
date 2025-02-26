document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
        item.addEventListener("click", function () {
            const answer = this.querySelector(".faq-answer");
            const icon = this.querySelector(".faq-icon");

            // Toggle the active class
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
                answer.style.opacity = 0;
                icon.classList.add("rotate-90");
            } else {
                // Close all other open FAQs
                document.querySelectorAll(".faq-answer").forEach((el) => {
                    el.style.maxHeight = null;
                    el.style.opacity = 0;
                });

                document.querySelectorAll(".faq-icon").forEach((el) => {
                    el.classList.add("rotate-90");
                });

                answer.style.maxHeight = answer.scrollHeight + "px";
                answer.style.opacity = 1;
                icon.classList.remove("rotate-90");
            }
        });
    });
});