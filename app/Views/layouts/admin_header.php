<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle ?? 'Admin Portal — Tristara IT Solutions') ?></title>
  
  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Poppins:wght@600;700;800;900&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
  
  <style>
    :root {
      --tristara-blue: #009fe3;
      --tristara-blue-dark: #0284c7;
      --tristara-navy: #0e1e38;
      --sidebar-bg: #1e2640;
      --sidebar-active: #2b355a;
      --sidebar-text: #94a3b8;
      --sidebar-text-hover: #ffffff;
      --sidebar-accent: #facc15;
      --content-bg: #f1f5f9;
      --card-bg: #ffffff;
      --text-main: #0f172a;
      --text-muted: #64748b;
      --border-color: #e2e8f0;
      --topbar-height: 64px;
      --sidebar-width: 250px;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: var(--content-bg);
      color: var(--text-main);
      font-family: 'Plus Jakarta Sans', sans-serif;
      min-height: 100vh;
      display: flex;
    }

    /* ========================================================
       SIDEBAR STYLING (Matches Photo Left Column)
       ======================================================== */
    .admin-sidebar {
      width: var(--sidebar-width);
      background-color: var(--sidebar-bg);
      color: var(--sidebar-text);
      display: flex;
      flex-direction: column;
      flex-shrink: 0;
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      z-index: 1000;
      transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      box-shadow: 4px 0 20px rgba(0, 0, 0, 0.15);
    }

    .sidebar-brand {
      height: var(--topbar-height);
      background: #171d31;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 0 16px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.06);
      text-decoration: none;
    }

    .sidebar-brand-title {
      font-family: 'Poppins', sans-serif;
      font-size: 1.15rem;
      font-weight: 800;
      letter-spacing: 0.08em;
      color: #ffffff;
      text-transform: uppercase;
      line-height: 1.1;
    }

    .sidebar-brand-sub {
      font-size: 0.68rem;
      letter-spacing: 0.18em;
      color: var(--tristara-blue);
      text-transform: uppercase;
      font-weight: 700;
      display: block;
    }

    .sidebar-menu {
      flex: 1;
      overflow-y: auto;
      padding: 16px 0;
      list-style: none;
    }

    .sidebar-menu-item {
      margin-bottom: 2px;
    }

    .sidebar-link {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 20px;
      color: #cbd5e1;
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 600;
      transition: all 0.2s;
      border-left: 4px solid transparent;
    }

    .sidebar-link:hover {
      color: #ffffff;
      background: rgba(255, 255, 255, 0.05);
      border-left-color: var(--tristara-blue);
    }

    .sidebar-link.active {
      color: #ffffff;
      background: var(--sidebar-active);
      border-left-color: var(--sidebar-accent);
    }

    .sidebar-badge {
      font-size: 0.72rem;
      font-weight: 800;
      padding: 2px 8px;
      border-radius: 10px;
      background: var(--sidebar-accent);
      color: #000000;
    }

    .sidebar-badge-blue {
      background: var(--tristara-blue);
      color: #ffffff;
    }

    /* ========================================================
       MAIN WRAPPER & TOPBAR (Matches Photo Top Bar)
       ======================================================== */
    .admin-main {
      flex: 1;
      margin-left: var(--sidebar-width);
      display: flex;
      flex-direction: column;
      min-width: 0;
      transition: margin-left 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .admin-topbar {
      height: var(--topbar-height);
      background: #ffffff;
      border-bottom: 1px solid var(--border-color);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 24px;
      position: sticky;
      top: 0;
      z-index: 900;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
    }

    .topbar-left {
      display: flex;
      align-items: center;
      gap: 18px;
    }

    .topbar-toggle-btn {
      background: none;
      border: none;
      color: #475569;
      font-size: 1.35rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      border-radius: 8px;
      transition: background 0.2s;
    }

    .topbar-toggle-btn:hover {
      background: #f1f5f9;
      color: var(--tristara-blue);
    }

    .topbar-search-form {
      position: relative;
    }

    .topbar-search-input {
      padding: 8px 14px 8px 34px;
      background: #f8fafc;
      border: 1px solid #cbd5e1;
      border-radius: 6px;
      font-size: 0.88rem;
      font-family: inherit;
      color: #0f172a;
      width: 220px;
      transition: all 0.2s;
      outline: none;
    }

    .topbar-search-input:focus {
      border-color: var(--tristara-blue);
      background: #ffffff;
      width: 280px;
      box-shadow: 0 0 0 3px rgba(0, 159, 227, 0.15);
    }

    .topbar-search-icon {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: #94a3b8;
      font-size: 0.9rem;
      pointer-events: none;
    }

    .topbar-right {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .topbar-notifications {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .notif-pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 5px 12px;
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 20px;
      text-decoration: none;
      font-size: 0.78rem;
      font-weight: 700;
      color: #475569;
      transition: all 0.2s;
    }

    .notif-pill:hover {
      background: #f1f5f9;
      color: var(--tristara-blue);
      border-color: #cbd5e1;
    }

    .notif-count {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 1px 6px;
      border-radius: 10px;
      font-size: 0.7rem;
      font-weight: 800;
      color: #ffffff;
      min-width: 18px;
    }
    .badge-green { background: #22c55e; }
    .badge-blue { background: #009fe3; }
    .badge-purple { background: #7B61FF; }

    .topbar-user {
      display: flex;
      align-items: center;
      gap: 10px;
      padding-left: 16px;
      border-left: 1px solid var(--border-color);
    }

    .topbar-user-avatar {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      object-fit: cover;
      background: #e2e8f0;
      border: 2px solid var(--tristara-blue);
    }

    .topbar-user-info {
      line-height: 1.2;
    }

    .topbar-user-name {
      font-size: 0.88rem;
      font-weight: 700;
      color: #0f172a;
    }

    .topbar-user-role {
      font-size: 0.72rem;
      color: #64748b;
    }

    .topbar-logout-link {
      color: #ef4444;
      text-decoration: none;
      font-size: 0.8rem;
      font-weight: 700;
      margin-left: 8px;
      padding: 4px 8px;
      border-radius: 6px;
      transition: background 0.15s;
    }

    .topbar-logout-link:hover {
      background: #fee2e2;
    }

    /* Content Area */
    .admin-content {
      padding: 24px;
      flex: 1;
    }

    /* ========================================================
       TOP STAT CARDS ROW (Exact Split Style from Photo)
       ======================================================== */
    .stats-split-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      margin-bottom: 24px;
    }

    .stat-split-card {
      border-radius: 6px;
      overflow: hidden;
      display: flex;
      box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
      min-height: 88px;
    }

    .stat-split-left {
      flex: 1;
      padding: 14px 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .stat-split-right {
      width: 90px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
      font-size: 2.1rem;
      font-weight: 800;
      color: #ffffff;
      background: rgba(0, 0, 0, 0.12);
    }

    .stat-split-tag {
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      opacity: 0.85;
      font-weight: 600;
    }

    .stat-split-title {
      font-size: 1.3rem;
      font-weight: 800;
      font-family: 'Poppins', sans-serif;
      margin-top: 2px;
      color: #ffffff;
    }

    /* Card Themes */
    .card-theme-blue {
      background: #4f46e5;
    }
    .card-theme-dark {
      background: #334155;
    }
    .card-theme-orange {
      background: #ea580c;
    }
    .card-theme-cyan {
      background: #0284c7;
    }
    .card-theme-green {
      background: #16a34a;
    }

    /* ========================================================
       PANEL HEADERS
       ======================================================== */
    .chart-header {
      font-size: 0.78rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: #64748b;
      margin-bottom: 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    /* ========================================================
       BOTTOM ROW (Matches Photo: Stats on Left, Orders on Right)
       ======================================================== */
    .bottom-grid {
      display: grid;
      grid-template-columns: 0.9fr 1.3fr;
      gap: 20px;
      margin-bottom: 24px;
    }

    .table-panel {
      background: var(--card-bg);
      border-radius: 6px;
      border: 1px solid var(--border-color);
      padding: 20px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.03);
    }

    .admin-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.88rem;
      text-align: left;
    }

    .admin-table th {
      padding: 10px 12px;
      font-size: 0.74rem;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: #64748b;
      border-bottom: 2px solid var(--border-color);
    }

    .admin-table td {
      padding: 12px;
      border-bottom: 1px solid #f1f5f9;
      color: #1e293b;
    }

    .admin-table tr:hover td {
      background-color: #f8fafc;
    }

    /* Status Pills */
    .status-pill {
      display: inline-block;
      padding: 3px 10px;
      border-radius: 4px;
      font-size: 0.72rem;
      font-weight: 700;
      text-transform: capitalize;
    }
    .status-in_progress { background: #22c55e; color: #ffffff; }
    .status-new { background: #f59e0b; color: #ffffff; }
    .status-overdue { background: #ef4444; color: #ffffff; }
    .status-completed { background: #3b82f6; color: #ffffff; }
    .status-contacted { background: #009fe3; color: #ffffff; }

    /* Progress bar */
    .progress-bar-wrap {
      width: 100%;
      height: 7px;
      background: #e2e8f0;
      border-radius: 4px;
      overflow: hidden;
      margin-top: 4px;
    }
    .progress-bar-fill {
      height: 100%;
      border-radius: 4px;
    }

    /* Bottom Social Strip (Matches Photo) */
    .bottom-social-strip {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      border-radius: 6px;
      overflow: hidden;
      margin-top: 10px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
    }

    .social-strip-item {
      padding: 16px;
      text-align: center;
      color: #ffffff;
      font-weight: 700;
      font-size: 0.95rem;
      text-decoration: none;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }
    .strip-blue { background: #009fe3; }
    .strip-red { background: #ef4444; }
    .strip-navy { background: #1e293b; }
    .strip-green { background: #22c55e; }

    /* Mobile Responsive */
    @media (max-width: 1024px) {
      .stats-split-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .bottom-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 768px) {
      .admin-sidebar {
        transform: translateX(-100%);
      }
      .admin-sidebar.open {
        transform: translateX(0);
      }
      .admin-main {
        margin-left: 0;
      }
      .stats-split-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- ========================================================
       SIDEBAR NAVIGATION (Matches Photo Left Sidebar)
       ======================================================== -->
  <aside class="admin-sidebar" id="adminSidebar">
    <a href="index.php?url=admin/dashboard" class="sidebar-brand">
      <img src="assets/images/tristara-official-logo.png" alt="Tristara Logo" style="height: 32px; width: auto;">
      <div>
        <div class="sidebar-brand-title">Tristara</div>
        <span class="sidebar-brand-sub">Admin Panel</span>
      </div>
    </a>

    <ul class="sidebar-menu">
      <li class="sidebar-menu-item">
        <a href="index.php?url=admin/dashboard" class="sidebar-link <?= (($currentAdminTab ?? '') === 'dashboard') ? 'active' : '' ?>">
          <span>Dashboard</span>
        </a>
      </li>

      <li class="sidebar-menu-item">
        <a href="index.php?url=admin/inquiries" class="sidebar-link <?= (($currentAdminTab ?? '') === 'inquiries') ? 'active' : '' ?>">
          <span>Student Inquiries</span>
          <span class="sidebar-badge"><?= $stats['new'] ?? '0' ?></span>
        </a>
      </li>

      <li class="sidebar-menu-item">
        <a href="index.php?url=admin/inquiries&status=in_progress" class="sidebar-link">
          <span>Active Builds</span>
          <span class="sidebar-badge sidebar-badge-blue"><?= $stats['in_progress'] ?? '0' ?></span>
        </a>
      </li>

      <li class="sidebar-menu-item">
        <a href="index.php?url=admin/inquiries&status=completed" class="sidebar-link">
          <span>Completed</span>
        </a>
      </li>

      <li class="sidebar-menu-item">
        <a href="https://wa.me/919313118267" target="_blank" class="sidebar-link">
          <span>WhatsApp Queue</span>
          <span class="sidebar-badge" style="background: #22c55e; color: #fff;">LIVE</span>
        </a>
      </li>

      <li class="sidebar-menu-item" style="margin-top: 24px; border-top: 1px solid rgba(255,255,255,0.06); padding-top: 12px;">
        <a href="index.php?url=home" target="_blank" class="sidebar-link" style="color: #38bdf8;">
          <span>View Live Website</span>
          <span style="font-size: 0.8rem;">↗</span>
        </a>
      </li>
    </ul>
  </aside>

  <!-- ========================================================
       MAIN WRAPPER & TOPBAR (Matches Photo Topbar)
       ======================================================== -->
  <div class="admin-main">
    <header class="admin-topbar">
      <div class="topbar-left">
        <button class="topbar-toggle-btn" onclick="toggleSidebar()" aria-label="Toggle Sidebar">
          ☰
        </button>

        <form class="topbar-search-form" method="GET" action="index.php">
          <input type="hidden" name="url" value="admin/inquiries">
          <svg class="topbar-search-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="position: absolute; left: 11px; top: 50%; transform: translateY(-50%); pointer-events: none;">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <input 
            type="text" 
            name="q" 
            class="topbar-search-input" 
            placeholder="Search inquiries..."
            value="<?= htmlspecialchars($_GET['q'] ?? '') ?>"
          >
        </form>
      </div>

      <div class="topbar-right">
        <!-- Clean Notification Pills -->
        <div class="topbar-notifications">
          <a href="index.php?url=admin/inquiries&status=new" class="notif-pill" title="New Inquiries">
            <span>New</span>
            <span class="notif-count badge-green"><?= $stats['new'] ?? '0' ?></span>
          </a>
          <a href="index.php?url=admin/inquiries&status=in_progress" class="notif-pill" title="Active Tasks">
            <span>In Progress</span>
            <span class="notif-count badge-blue"><?= $stats['in_progress'] ?? '0' ?></span>
          </a>
          <a href="index.php?url=admin/inquiries" class="notif-pill" title="Total Inquiries">
            <span>Total</span>
            <span class="notif-count badge-purple"><?= $stats['total'] ?? '0' ?></span>
          </a>
        </div>

        <!-- User Profile Pill (Matches Photo Right Avatar) -->
        <div class="topbar-user">
          <img src="assets/favicon.svg" alt="Avatar" class="topbar-user-avatar">
          <div class="topbar-user-info">
            <div class="topbar-user-name"><?= htmlspecialchars($adminUser['name'] ?? 'Tristara Admin') ?></div>
            <div class="topbar-user-role"><?= htmlspecialchars(ucfirst($adminUser['role'] ?? 'Administrator')) ?></div>
          </div>
          <a href="index.php?url=admin/logout" class="topbar-logout-link" title="Logout">
            Logout
          </a>
        </div>
      </div>
    </header>

    <main class="admin-content">
