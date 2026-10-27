    </main>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('adminSidebar');
      const main = document.querySelector('.admin-main');
      if (window.innerWidth <= 768) {
        sidebar.classList.toggle('open');
      } else {
        if (sidebar.style.display === 'none') {
          sidebar.style.display = 'flex';
          main.style.marginLeft = 'var(--sidebar-width)';
        } else {
          sidebar.style.display = 'none';
          main.style.marginLeft = '0';
        }
      }
    }
  </script>
</body>
</html>
