const links = document.querySelectorAll(".item-link");
style_count = document.querySelector(".forms-conter");
style_count_cruz = document.querySelector(".forms-conter-cruz");

links.forEach((el) => {
    el.addEventListener('click', (e) => {
        let path1 = e.currentTarget.getAttribute('data-target1');
        let path2 = e.currentTarget.getAttribute('data-target2');
        //Контейнерная перевозка
        if (path1) {
            style_count.style.display = ("flex");
            style_count_cruz.style.display = ("none");
        }
        //Сборный груз
        if (path2) {
            style_count.style.display = ("none");
            style_count_cruz.style.display = ("flex");
        }
        
    });
});


