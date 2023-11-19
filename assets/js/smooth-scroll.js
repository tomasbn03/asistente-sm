document.addEventListener("DOMContentLoaded", function() {
    // Handle click on navbar links to scroll to sections
    document.querySelectorAll('.navbar a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            // Get the section to scroll to
            var target = document.querySelector(this.getAttribute('href'));
            
            // Scroll the page to the target section
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
});
