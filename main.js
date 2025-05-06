document.querySelectorAll('.dropdown .dropbtn').forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default link behavior

        // Toggle the arrow direction
        const arrow = this.querySelector('.arrow');
        arrow.classList.toggle('up');
        arrow.classList.toggle('down');

        // Optional: Close other dropdowns if needed
        const dropdownContent = this.nextElementSibling;
        const isVisible = dropdownContent.style.display === 'block';
        document.querySelectorAll('.dropdown-content').forEach(content => {
            content.style.display = 'none';
        });
        dropdownContent.style.display = isVisible ? 'none' : 'block';
    });
});

document.addEventListener('click', function (event) {
    const isDropdown = event.target.closest('.dropdown');
    document.querySelectorAll('.dropdown-content').forEach(content => {
        content.style.display = 'none';
    });
    document.querySelectorAll('.arrow').forEach(arrow => {
        arrow.classList.remove('up');
        arrow.classList.add('down');
    });
    if (isDropdown) {
        const dropdownContent = isDropdown.querySelector('.dropdown-content');
        const arrow = isDropdown.querySelector('.arrow');
        dropdownContent.style.display = 'block';
        arrow.classList.add('up');
        arrow.classList.remove('down');
    }
});