<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login — Tristara IT Solutions</title>
  
  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Poppins:wght@700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animations.css">

  <style>
    body {
      background-color: #071224 !important;
      color: #f8fafc !important;
      font-family: 'Plus Jakarta Sans', sans-serif !important;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px;
      margin: 0;
      position: relative;
      overflow-x: hidden;
    }

    .login-halo {
      position: absolute;
      width: 500px;
      height: 500px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(0, 159, 227, 0.15) 0%, transparent 70%);
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      pointer-events: none;
    }

    .login-card {
      background: #0e1e38;
      border: 1.5px solid rgba(0, 159, 227, 0.25);
      border-radius: 28px;
      padding: 44px 40px;
      width: 100%;
      max-width: 440px;
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5), 0 0 40px rgba(0, 159, 227, 0.1);
      position: relative;
      z-index: 10;
    }

    .login-brand-logo {
      height: 48px;
      margin-bottom: 20px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .login-field {
      margin-bottom: 20px;
    }

    .login-field label {
      display: block;
      font-size: 0.88rem;
      font-weight: 600;
      color: #94a3b8;
      margin-bottom: 8px;
    }

    .login-input {
      width: 100%;
      padding: 13px 16px;
      background: rgba(7, 18, 36, 0.8);
      border: 1.5px solid rgba(0, 159, 227, 0.3);
      border-radius: 12px;
      color: #ffffff;
      font-size: 0.95rem;
      font-family: inherit;
      outline: none;
      transition: all 0.2s;
      box-sizing: border-box;
    }

    .login-input:focus {
      border-color: #009fe3;
      box-shadow: 0 0 15px rgba(0, 159, 227, 0.3);
      background: rgba(7, 18, 36, 1);
    }

    .login-btn {
      width: 100%;
      padding: 14px;
      background: linear-gradient(135deg, #009fe3 0%, #0284c7 100%);
      color: #ffffff;
      border: none;
      border-radius: 12px;
      font-size: 1rem;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.25s ease;
      box-shadow: 0 8px 24px rgba(0, 159, 227, 0.35);
    }

    .login-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 30px rgba(0, 159, 227, 0.5);
    }

    .login-alert {
      background: rgba(239, 68, 68, 0.15);
      border: 1px solid #ef4444;
      color: #fca5a5;
      padding: 12px 16px;
      border-radius: 10px;
      font-size: 0.9rem;
      margin-bottom: 22px;
      text-align: center;
    }

    .demo-creds-box {
      margin-top: 24px;
      padding: 12px 16px;
      border-radius: 10px;
      background: rgba(0, 159, 227, 0.08);
      border: 1px dashed rgba(0, 159, 227, 0.3);
      font-size: 0.85rem;
      color: #38bdf8;
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="login-halo"></div>

  <div class="login-card">
    <div style="text-align: center;">
      <img src="assets/images/tristara-official-logo.png" alt="Tristara Logo" class="login-brand-logo">
      <div style="display: inline-block; padding: 4px 14px; background: rgba(0, 159, 227, 0.15); border: 1px solid rgba(0, 159, 227, 0.35); color: #38bdf8; border-radius: 100px; font-size: 0.78rem; font-weight: 700; margin-bottom: 12px;">
        SECURITY CLEARANCE
      </div>
      <h2 style="font-size: 1.5rem; font-weight: 800; color: #ffffff; margin-bottom: 8px; font-family: 'Poppins', sans-serif;">
        Academic Ops Login
      </h2>
      <p style="color: #64748b; font-size: 0.9rem; margin-bottom: 26px;">
        Sign in to manage student inquiries, quotes, and assignment briefs.
      </p>
    </div>

    <?php if (!empty($error)): ?>
      <div class="login-alert">
        ⚠ <?= htmlspecialchars($error) ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="index.php?url=admin/login">
      <div class="login-field">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="login-input" placeholder="e.g. admin" required autofocus autocomplete="username">
      </div>

      <div class="login-field">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="login-input" placeholder="••••••••" required autocomplete="current-password">
      </div>

      <button type="submit" class="login-btn">
        Access Command Desk →
      </button>
    </form>

    <div class="demo-creds-box">
      <strong>Demo Credentials:</strong><br>
      Username: <code style="color: #ffffff;">admin</code> &nbsp;|&nbsp; Password: <code style="color: #ffffff;">admin123</code>
    </div>

    <div style="text-align: center; margin-top: 24px;">
      <a href="index.php?url=home" style="color: #64748b; font-size: 0.88rem; text-decoration: none;">
        ← Back to Live Website
      </a>
    </div>
  </div>

</body>
</html>
