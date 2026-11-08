// Small JavaScript for the app

// 1. Search box on the courses page
var searchBox = document.getElementById('courseSearch');

if (searchBox) {
    searchBox.addEventListener('keyup', function () {
        var text = searchBox.value.toLowerCase();
        var cards = document.querySelectorAll('#courseList .course-card');
        var shown = 0;

        cards.forEach(function (card) {
            if (card.textContent.toLowerCase().indexOf(text) > -1) {
                card.style.display = 'block';
                shown++;
            } else {
                card.style.display = 'none';
            }
        });

        // show a message if nothing matches
        document.getElementById('noResults').style.display = (shown === 0) ? 'block' : 'none';
    });
}

// 2. Tabs on the social media page
var tabs = document.querySelectorAll('.tab');

tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
        // remove active from all tabs and panels
        tabs.forEach(function (t) { t.classList.remove('active'); });
        document.querySelectorAll('.panel').forEach(function (p) { p.classList.remove('active'); });

        // activate the one that was clicked
        tab.classList.add('active');
        document.getElementById(tab.getAttribute('data-target')).classList.add('active');
    });
});
