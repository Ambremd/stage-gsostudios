window.addEventListener('resize', function() {
    location.reload(); // Recharge la page lorsque la fenêtre est redimensionnée
});




document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.querySelector('.burger-menu');
    const navList = document.querySelector('.nav-list');
    const photosLink = document.querySelector('.photos-link');
    const subNav = document.querySelector('.sub-nav');
    /**/const carouselInner = document.querySelector('.carousel-inner');
    const carouselItems = document.querySelectorAll('.carousel-item');
    const dots = document.querySelectorAll('.carousel-indicators .dot');
    let currentIndex = 0;
    let interval;

    burgerMenu.addEventListener('click', function () {
        navList.classList.toggle('show');
    });

    photosLink.addEventListener('click', function (e) {
        e.preventDefault();
        subNav.classList.toggle('show');
    });

});



var counter = 1;
        var interval = setInterval(autoSlide, 4000);

        function autoSlide() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 5) {
                counter = 1;
            }
        }

        document.querySelectorAll('input[name="radio-btn"]').forEach((radio, index) => {
            radio.addEventListener('change', function() {
                clearInterval(interval);
                counter = index + 1;
                interval = setInterval(autoSlide, 4000);
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('image-modal');
            const modalImg = document.getElementById('modal-img');
            const close = document.getElementsByClassName('close')[0];
        
            // Add event listeners to each image
            document.querySelectorAll('.grille-item img').forEach(img => {
                img.addEventListener('click', () => {
                    modal.style.display = 'block';
                    modalImg.src = img.src;
                });
            });
        
            // Close the modal when the close button is clicked
            close.addEventListener('click', () => {
                modal.style.display = 'none';
            });
        
            // Close the modal when clicking outside the image
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });
        