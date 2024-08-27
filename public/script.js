
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
