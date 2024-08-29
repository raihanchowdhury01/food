
const open_btn = document.querySelector(".open_btn");
const close_btn = document.querySelector(".close_btn");
const menu_list = document.querySelector(".menu_list");

open_btn.addEventListener("click", ()=>{
    menu_list.classList.remove('d-none');
});

close_btn.addEventListener("click", ()=>{
    menu_list.classList.add('d-none');
});

    document.addEventListener('DOMContentLoaded', function () {
        // টেবিল থেকে ডেটা সংগ্রহ করুন
        const table = document.querySelector('.table');
        const rows = table.querySelectorAll('tr');

        // ডেটা সংগ্রহ
        const dates = [];
        const visits = [];

        rows.forEach((row, index) => {
            if (index === 0) return; // হেডার স্কিপ করুন
            const cells = row.querySelectorAll('td');
            if (cells.length > 0) {
                dates.push(cells[0].textContent);
                visits.push(parseInt(cells[1].textContent, 10));
            }
        });

        // ApexCharts কনফিগারেশন
        var options = {
            series: [{
                name: 'Total Visits',
                data: visits
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            xaxis: {
                categories: dates
            },
            title: {
                text: 'Daily Visitors'
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    });


    const menu = document.querySelector(".scroll_menu");
    const menu_Height = menu.offsetTop;
    
    window.addEventListener("scroll", ()=>{
        if(window.pageYOffset > menu_Height){
            menu.classList.add("fixed-top");
            menu.classList.add("fixed-top");
            menu.classList.add("bg-black");
            menu.classList.add("text-white");
            menu.classList.remove("bg-white");
            menu.classList.remove("text-black");
            menu.style.transition = "0.3s ease-in-out";
        }else{
            menu.classList.remove("fixed-top");
            menu.classList.remove("fixed-top");
            menu.classList.remove("bg-black");
            menu.classList.remove("text-white");
            menu.classList.add("bg-white");
            menu.classList.add("text-black");
            menu.style.transition = "0.3s ease-in-out";
        }
    });