// import "jsvectormap/dist/css/jsvectormap.css";
import "flatpickr/dist/flatpickr.min.css";
// import "../css/style.css";

import Alpine from "alpinejs";
import persist from "@alpinejs/persist";
import flatpickr from "flatpickr";

require("../../css/admin.css");

// import map01 from "./components/map-01";

// import chart01 from "../../views/admin/partials/chart-01.blade.php";
// import chart02 from "../../views/admin/partials/chart-02.blade.php";
// import chart03 from "../../views/admin/partials/chart-03.blade.php";
// import chart04 from "../../views/admin/partials/chart-04.blade.php";

// const chart01 = require("./components/chart-01");
// const chart02 = require("./components/chart-02");
// const chart03 = require("./components/chart-03");
// const chart04 = require("./components/chart-04");

import chart01 from "./components/chart-01";
import chart02 from "./components/chart-02";
import chart03 from "./components/chart-03";
import chart04 from "./components/chart-04";

Alpine.plugin(persist);
window.Alpine = Alpine;
Alpine.start();

// Init flatpickr
flatpickr(".datepicker", {
    mode: "range",
    static: true,
    monthSelectorType: "static",
    dateFormat: "M j, Y",
    defaultDate: [new Date().setDate(new Date().getDate() - 6), new Date()],
    prevArrow:
        '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
    nextArrow:
        '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',
    onReady: (selectedDates, dateStr, instance) => {
        // eslint-disable-next-line no-param-reassign
        instance.element.value = dateStr.replace("to", "-");
        const customClass = instance.element.getAttribute("data-class");
        instance.calendarContainer.classList.add(customClass);
    },
    onChange: (selectedDates, dateStr, instance) => {
        // eslint-disable-next-line no-param-reassign
        instance.element.value = dateStr.replace("to", "-");
    },
});

// Document Loaded
document.addEventListener("DOMContentLoaded", () => {
    chart01();
    chart02();
    chart03();
    chart04();
});
