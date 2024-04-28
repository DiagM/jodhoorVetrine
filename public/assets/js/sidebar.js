
$(document).ready(function() {
const hamburgerBtn = document.getElementById('hamburgerBtn');
const sidebar = document.getElementById('sidebar');
const customNavbar = document.querySelector('.custom-navbar');
hamburgerBtn.addEventListener('click', () => {
    sidebar.style.right = sidebar.style.right === '0px' ? '-300px' : '0px';
    customNavbar.style.display = 'none';
});

    const closeSidebarBtn = document.getElementById('closeSidebarBtn');
    const sidebare = document.getElementById('sidebar');
    const customNavbare = document.querySelector('.custom-navbar');

    closeSidebarBtn.addEventListener('click', () => {
        sidebare.style.right = '-300px'; // Close the sidebar
        customNavbare.style.display = ''; // Show the custom navbar
    });
});
