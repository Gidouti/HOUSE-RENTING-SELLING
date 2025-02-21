<script>
  function toggleMenu() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active'); // Toggle active class
  }

  // Close the sidebar when clicking outside of it
  document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    const menuIcon = document.querySelector('.menu-icon');

    // Check if the click was outside the sidebar and the menu icon
    if (!sidebar.contains(event.target) && !menuIcon.contains(event.target)) {
      sidebar.classList.remove('active'); // Close the sidebar
    }
  });

  // Function to filter properties based on search input
  function filterProperties() {
    const searchInput = document.querySelector('.search-bar').value.toLowerCase();
    const properties = document.querySelectorAll('.property');

    properties.forEach(property => {
      const title = property.getAttribute('data-title').toLowerCase();
      if (title.includes(searchInput)) {
        property.style.display = ''; // Show property
      } else {
        property.style.display = 'none'; // Hide property
      }
    });
  }

  // Attach the filter function to the input event of the search bar
  document.querySelector('.search-bar').addEventListener('input', filterProperties);
</script>