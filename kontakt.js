document.addEventListener("DOMContentLoaded", function () {

    // SCROLL
    const scrollLink = document.querySelector(".scroll-link");

    if (scrollLink) {
        scrollLink.addEventListener("click", function (e) {
            const href = this.getAttribute("href");
            if (href && href.startsWith("#")) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const top = target.offsetTop - 80;
                    window.scrollTo({ top, behavior: "smooth" });
                }
            }
        });
    }

    // FADE-IN
    const fadeElements = document.querySelectorAll(".fade-in");

    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in-view");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        fadeElements.forEach((el) => observer.observe(el));
    } else {
        fadeElements.forEach((el) => el.classList.add("in-view"));
    }

    // 🔥 AJAX FORM (KJO PJESË ËSHTË E RE)
    const form = document.getElementById("contact-form");
    const messageBox = document.getElementById("form-message");

    if (form && messageBox) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            let formData = new FormData(form);

            fetch("actions/validate_contact.php", {
                method: "POST",
                body: formData
            })
            .then(res => res.text())
            .then(data => {

                messageBox.textContent = data;
                messageBox.className = "alert";

                if (data.toLowerCase().includes("sukses")) {
                    messageBox.classList.add("success");
                    form.reset();
                } else {
                    messageBox.classList.add("error");
                }

            })
            .catch(() => {
                messageBox.textContent = "Gabim në server!";
                messageBox.className = "alert error";
            });
        });
    }

    // MAP
    const mapHint = document.getElementById("map-hint");

    function hideMapHint() {
        if (!mapHint) return;
        mapHint.classList.add("hidden");
    }

    if (mapHint) {
        mapHint.addEventListener("click", hideMapHint);
        mapHint.addEventListener("wheel", hideMapHint, { passive: true });
    }

});

