function generate_year_range(start, end) {
    let years = "";
    for (let year = start; year <= end; year++) {
        years += "<option value='" + year + "'>" + year + "</option>";
    }
    return years;
}
today = new Date();
currentMonth = today.getMonth();
currentYear = today.getFullYear();
selectYear = document.getElementById("year");
selectMonth = document.getElementById("month");
createYear = generate_year_range(1970, 2050);

// document.getElementById("year").innerHTML = createYear;
let calendar = document.getElementById("calendar");
let lang = calendar.getAttribute('data-lang');
let months = "";
let days = "";
let cellId = "";
let monthDefault = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
let dayDefault = ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"];
if (lang == "en") {
    months = monthDefault;
    days = dayDefault;
}
let $dataHead = "<tr>";
for (dhead in days) {
    $dataHead += "<th data-days='" + days[dhead] + "'>" + days[dhead] + "</th>";
}
$dataHead += "</tr>";
//alert($dataHead);
document.getElementById("thead-month").innerHTML = $dataHead;
monthAndYear = document.getElementById("monthAndYear");
showCalendar(currentMonth, currentYear);
function next() {
    currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
    currentMonth = (currentMonth + 1) % 12;
    showCalendar(currentMonth, currentYear);
}
function previous() {
    currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
    currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
    showCalendar(currentMonth, currentYear);
}

function showCalendar(month, year) {
    let firstDay = ( new Date( year, month ) ).getDay();
    tbl = document.getElementById("calendar-body");
    tbl.innerHTML = "";
    monthAndYear.innerHTML = months[month] + " " + year;
    
    // creating all cells
    let date = 1;
    for ( let i = 0; i < 6; i++ ) {
        let row = document.createElement("tr");
        for ( let j = 0; j < 7; j++ ) {
            if ( i === 0 && j < firstDay ) {
                cell = document.createElement( "td" );
                cellText = document.createTextNode("");
                cell.appendChild(cellText);
                row.appendChild(cell);
            } else if (date > daysInMonth(month, year)) {
                break;
            } else {
                cell = document.createElement("td");
                cell.setAttribute("data-date", date);
                cell.setAttribute("id", date );
                // cell.setAttribute("event", event(cell));
                cell.setAttribute("data-month", month + 1);
                cell.setAttribute("data-year", year);
                cell.setAttribute("data-month_name", months[month]);
                cell.innerHTML = "<span>" + date + "</span>";
                // event(cell);
                if ( date === today.getDate() && year === today.getFullYear() && month === today.getMonth() ) {
                    cell.className = "date-picker selected";
                }
                row.appendChild(cell);
                date++;
            }
        }
        
        tbl.appendChild(row);
    }
}
event(cell);

//formata susigalvoti, kad paspaudus rasytu data, bei ivyki salia. Paspaustos dienos, praeitos dienos bei artimiausius ivykius !!!!!!!!!

function event(cell){
    // document.querySelector(cell.id).addEventListener("click", displayDate);
// console.log(cell.id);

document.getElementById('calendar-body').addEventListener('click', (e)=>{
    
            console.log(e.target);

            // document.getElementById("events-wrappers").style.display = "inline-block";
            
            // let HTML = '';

            // HTML+=`
            //     <div class="today-events">
            //         <h2>Todays events</h2>
            //         <div class="data-time">DATE and TIME: 465456</div>
            //         <span>Event:</span>
            //         <div class="event">event</div>
            //     </div>
            // `;

            return  document.querySelector('.events-wrappers').innerHTML = HTML;
        });
}



function daysInMonth(iMonth, iYear) {
    return 32 - new Date(iYear, iMonth, 32).getDate();
}