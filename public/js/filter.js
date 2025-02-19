document.addEventListener("DOMContentLoaded", function () {
    const categoryButtons = document.querySelectorAll(".category-btn");
    const regionSelect = document.getElementById("region-select");
    const cards = document.querySelectorAll(".card-custom");

    let selectedCategory = "all";
    let selectedRegion = "all";

    // 初回フィルター適用
    filterCards();

    // カテゴリーボタンの選択処理
    categoryButtons.forEach(button => {
        button.addEventListener("click", function () {
            selectedCategory = this.getAttribute("data-category");

            categoryButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");

            filterCards();
        });
    });

    // 地域フィルターの選択処理
    regionSelect.addEventListener("change", function () {
        selectedRegion = this.value;
        filterCards();
    });

    function filterCards() {
        let allVisible = (selectedCategory === "all" && selectedRegion === "all");

        cards.forEach(card => {
            const cardCategory = card.getAttribute("data-category");
            const cardRegion = card.getAttribute("data-region");

            if (allVisible) {
                card.style.display = "block";
            } else {
                const categoryMatch = (selectedCategory === "all" || cardCategory === selectedCategory);
                const regionMatch = (selectedRegion === "all" || cardRegion === selectedRegion);
                card.style.display = (categoryMatch && regionMatch) ? "block" : "none";
            }
        });
    }
});
