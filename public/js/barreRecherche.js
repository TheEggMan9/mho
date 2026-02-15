document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("input");
    const list = document.querySelector(".list");
    const form = document.getElementById("searchForm");
    const baseURL = form ? form.dataset.baseurl : "";
    const especeFilter = document.getElementById("especeFilter");
    const orgFilter = document.getElementById("orgFilter");
    const searchUrl = form ? form.dataset.searchurl : "";
    const resultatsUrl = form ? form.dataset.resultatsurl : "";

    let results = [];

    function removeElements() {
        list.innerHTML = "";
    }

    function fetchResults() {
        const query = input.value.trim();
        if (!query) {
            removeElements();
            return;
        }

        fetch(`${searchUrl}?q=${encodeURIComponent(query)}`)
            .then((res) => res.json())
            .then((data) => {
                results = data;
                removeElements();
                data.forEach((item) => {
                    if (
                        item.nomFiche
                            .toLowerCase()
                            .startsWith(query.toLowerCase())
                    ) {
                        let li = document.createElement("li");
                        li.classList.add("list-group-item");
                        li.style.cursor = "pointer";
                        li.style.transition = "all 0.2s ease";

                        // Afficher uniquement le nom avec mise en évidence
                        li.innerHTML =
                            "<b>" +
                            item.nomFiche.substr(0, query.length) +
                            "</b>" +
                            item.nomFiche.substr(query.length);

                        // Effet hover
                        li.addEventListener("mouseenter", function () {
                            this.style.backgroundColor = "#f8f9fa";
                        });

                        li.addEventListener("mouseleave", function () {
                            this.style.backgroundColor = "";
                        });

                        li.onclick = () =>
                            (window.location.href = `${baseURL}/${item.slug}`);
                        list.appendChild(li);
                    }
                });
            });
    }

    if (input) {
        input.addEventListener("keyup", fetchResults);
    }

    if (form) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            const nom = input.value.trim();
            const espece = especeFilter.value;
            const org = orgFilter.value;

            if (nom) {
                // recherche par nom
                const filtered = results.filter(
                    (f) =>
                        (!espece || f.espece_id == espece) &&
                        (!org || f.organisation_id == org),
                );
                if (filtered.length > 0) {
                    window.location.href = `${baseURL}/${filtered[0].slug}`;
                } else {
                    removeElements();
                    let li = document.createElement("li");
                    li.classList.add("list-group-item", "text-danger");
                    li.innerHTML =
                        "<i class='bi bi-exclamation-circle-fill'></i> Aucun héros ne correspond aux filtres.";
                    list.appendChild(li);
                }
            } else {
                // filtre uniquement
                if (!espece && !org) {
                    removeElements();
                    let li = document.createElement("li");
                    li.classList.add("list-group-item", "text-warning");
                    li.innerHTML =
                        "<i class='bi bi-info-circle-fill'></i> Veuillez sélectionner au moins un filtre.";
                    list.appendChild(li);
                    return;
                }

                // Vérifier d'abord si des résultats existent
                const params = new URLSearchParams();
                if (espece) params.append("espece_id", espece);
                if (org) params.append("organisation_id", org);

                fetch(`${resultatsUrl}?${params.toString()}`, {
                    headers: {
                        Accept: "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                    },
                })
                    .then((res) => res.json())
                    .then((data) => {
                        if (data.length > 0) {
                            // Des résultats trouvés -> REDIRECTION vers la page complète
                            window.location.href = `${resultatsUrl}?${params.toString()}`;
                        } else {
                            // Aucun résultat -> AFFICHER l'erreur sous la barre
                            removeElements();
                            let li = document.createElement("li");
                            li.classList.add("list-group-item", "text-danger");
                            li.innerHTML =
                                "<i class='bi bi-exclamation-circle-fill'></i> Aucun héros ne correspond aux filtres.";
                            list.appendChild(li);
                        }
                    })
                    .catch((err) => {
                        console.error("Erreur:", err);
                        removeElements();
                        let li = document.createElement("li");
                        li.classList.add("list-group-item", "text-danger");
                        li.innerHTML =
                            "<i class='bi bi-exclamation-circle-fill'></i> Erreur lors de la recherche.";
                        list.appendChild(li);
                    });
            }
        });
    }
});
