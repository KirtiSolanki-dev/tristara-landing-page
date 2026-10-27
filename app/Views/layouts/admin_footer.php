    </main>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('adminSidebar');
      const overlay = document.getElementById('adminSidebarOverlay');
      const main = document.querySelector('.admin-main');
      if (window.innerWidth <= 768) {
        const isOpen = sidebar.classList.toggle('open');
        if (overlay) {
          overlay.classList.toggle('open', isOpen);
        }
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
