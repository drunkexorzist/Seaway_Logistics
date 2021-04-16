var button = document.getElementById("btn");
var button = document.getElementById("btn2");

links.forEach((el) => {
    el.addEventListener('click', (e) => {
        let path1 = e.currentTarget.getElementById("btn");
        let path2 = e.currentTarget.getElementById("btn2");
        //Контейнерная перевозка
        if (path1) {
            swal("Ураааа!!", "Кнопка нажалася!")
        }
        //Сборный груз
        if (path2) {
            swal("Ураааа!!", "Кнопка нажалася еще раз!")
        }
        
    });
});


