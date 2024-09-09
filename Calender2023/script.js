const daysContainer = document.querySelector(".days");
const monthHeader = document.querySelector(".month h1");
const popup = document.getElementById("popup");

let currentDate = new Date();

// Generate days for a given year and month
function generateDays(year, month) {
    daysContainer.innerHTML = '';
    
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const firstDay = new Date(year, month, 1).getDay();
    const today = new Date(); // Get the current date
    
    for (let i = 0; i < firstDay; i++) {
        const emptyDay = document.createElement("div");
        emptyDay.className = "day empty";
        daysContainer.appendChild(emptyDay);
    }
    
    for (let i = 1; i <= daysInMonth; i++) {
        const day = document.createElement("div");
        day.className = "day";
        day.textContent = i;
        
        // Check if the date matches today's date
        if (year === today.getFullYear() && month === today.getMonth() && i === today.getDate()) {
            day.classList.add("today");
        }
        
        day.addEventListener("click", () => {
            openPopup(i, month, year);
        });
        daysContainer.appendChild(day);
    }
    
    monthHeader.textContent = new Intl.DateTimeFormat('en-US', { year: 'numeric', month: 'long' }).format(new Date(year, month, 1));
}


// Open pop-up with data for the selected date
function openPopup(date, month, year) {
    popup.style.display = "block";
    popup.innerHTML = `<h2>Data for ${date}/${month + 1}/${year}</h2><p>This is some data related to the selected date.</p>`;
}

function updateCalendar(year, month) {
    currentDate = new Date(year, month, 1);
    generateDays(year, month);
}

document.querySelector(".prev").addEventListener("click", () => {
    const prevMonth = currentDate.getMonth() - 1;
    const prevYear = currentDate.getFullYear();
    if (prevMonth < 0) {
        updateCalendar(prevYear - 1, 11);
    } else {
        updateCalendar(prevYear, prevMonth);
    }
});

document.querySelector(".next").addEventListener("click", () => {
    const nextMonth = currentDate.getMonth() + 1;
    const nextYear = currentDate.getFullYear();
    if (nextMonth > 11) {
        updateCalendar(nextYear + 1, 0);
    } else {
        updateCalendar(nextYear, nextMonth);
    }
});

updateCalendar(currentDate.getFullYear(), currentDate.getMonth());

// Open pop-up with data for the selected date
function openPopup(date, month, year) {
    popup.style.display = "block";
    popup.innerHTML = `
        <span class="close-btn" id="closeBtn">&times;</span>
        <h2>Data for ${date}/${month + 1}/${year}</h2>
        <p>This is some data related to the selected date.</p>
    `;

    const closeBtn = document.getElementById("closeBtn");
    closeBtn.addEventListener("click", closePopup);
}

// Close the pop-up
function closePopup() {
    popup.style.display = "none";
}
