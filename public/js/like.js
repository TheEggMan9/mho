async function toggleLike(ficheId) {
    const button = document.querySelector(`[data-fiche-id="${ficheId}"]`);
    if (!button) return;

    const icon = button.querySelector("i");
    const count = button.querySelector(".like-count");

    const baseUrl = document.querySelector('meta[name="base-url"]').content;

    try {
        const response = await fetch(`${baseUrl}/like/${ficheId}`, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]',
                ).content,
                Accept: "application/json",
            },
        });

        if (!response.ok) {
            throw new Error("Erreur HTTP : " + response.status);
        }

        const data = await response.json();

        if (data.liked) {
            button.classList.add("liked");
            icon.classList.replace("bi-heart", "bi-heart-fill");
        } else {
            button.classList.remove("liked");
            icon.classList.replace("bi-heart-fill", "bi-heart");
        }

        count.textContent = data.count;
    } catch (error) {
        console.error("Erreur :", error.message);
    }
}
