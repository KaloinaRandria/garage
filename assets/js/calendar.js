document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        initialDate: '2023-01-12',
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: true,
        selectable: true,
        events: [
            {
                title: 'Business Lunch',
                start: '2023-01-03T13:00:00',
                constraint: 'businessHours'
            },
            {
                title: 'Meeting',
                start: '2023-01-13T11:00:00',
                constraint: 'availableForMeeting', // defined below
                color: '#257e4a'
            },
            {
                title: 'Conference',
                start: '2023-01-18',
                end: '2023-01-20'
            },
            {
                title: 'Party',
                start: '2023-01-29T20:00:00'
            },

            // areas where "Meeting" must be dropped
            {
                groupId: 'availableForMeeting',
                start: '2023-01-11T10:00:00',
                end: '2023-01-11T16:00:00',
                display: 'background'
            },
            {
                groupId: 'availableForMeeting',
                start: '2023-01-13T10:00:00',
                end: '2023-01-13T16:00:00',
                display: 'background'
            },

            // red areas where no events can be dropped
            {
                start: '2023-01-24',
                end: '2023-01-28',
                overlap: false,
                display: 'background',
                color: '#ff9f89'
            },
            {
                start: '2023-01-06',
                end: '2023-01-08',
                overlap: false,
                display: 'background',
                color: '#ff9f89'
            }
        ],
        dateClick: function (info) {
            var date = info.dateStr;
            showForm(date);
        }
    });

    calendar.render();



    // Fonction pour l'input

    var formDiv = document.getElementById("div_form");
    var saveBtn = document.getElementById('save');
    var hideBtn = document.getElementById('annuler');

    function showForm(date) {
        var dateInput = document.getElementById('date');
        dateInput.value = date;
        formDiv.style.display = 'block';
    }

    function hideForm() {
        formDiv.style.display = 'none';
    }

    hideBtn.addEventListener('click', () => {
        hideForm();
    });

    // Sauvegarder les donnees
    function saveData() {

        formDiv.style.display = 'none';
    }
});