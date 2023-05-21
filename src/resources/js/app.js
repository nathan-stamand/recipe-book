window.addEventListener("DOMContentLoaded", () => {
    const inputs = document.querySelectorAll("input, textarea");
    if (inputs.length) {
        Array.from(inputs).forEach((el) => {
            if (el.tagName === "TEXTAREA") {
                el.addEventListener("input", (e) => {
                    el.parentNode.dataset.replicatedValue = el.value;
                });
            }

            el.addEventListener("change", (e) => {
                if (e.target.value.length) {
                    e.target.classList.add("has-value");
                } else {
                    e.target.classList.remove("has-value");
                }
            });
        });
    }
});
