<?php
require_once dirname(__DIR__) . '/layouts/admin_header.php';
?>

<!-- ========================================================
     INQUIRIES VAULT HEADER & SEARCH BAR
     ======================================================== -->
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 16px;">
  <div>
    <h1 style="font-size: 1.6rem; font-weight: 800; color: #0f172a; margin-bottom: 4px; font-family: 'Poppins', sans-serif;">
      Student Inquiries Vault
    </h1>
    <p style="color: #64748b; font-size: 0.9rem; margin: 0;">
      Review university task rubrics, update live development status, and communicate with students.
    </p>
  </div>

  <!-- Search Filter Form -->
  <form method="GET" action="index.php" style="display: flex; gap: 8px;">
    <input type="hidden" name="url" value="admin/inquiries">
    <?php if (!empty($currentFilter)): ?>
      <input type="hidden" name="status" value="<?= htmlspecialchars($currentFilter) ?>">
    <?php endif; ?>
    <input 
      type="text" 
      name="q" 
      value="<?= htmlspecialchars($searchQuery ?? '') ?>" 
      placeholder="Search student, email, subject..." 
      style="padding: 9px 14px; background: #ffffff; border: 1px solid var(--border-color); border-radius: 6px; color: #0f172a; font-size: 0.88rem; outline: none; min-width: 240px;"
    >
    <button type="submit" style="padding: 9px 16px; background: var(--tristara-blue); color: #fff; border: none; border-radius: 6px; font-weight: 700; font-size: 0.88rem; cursor: pointer;">
      Search
    </button>
    <?php if (!empty($searchQuery)): ?>
      <a href="index.php?url=admin/inquiries<?= !empty($currentFilter) ? '&status='.$currentFilter : '' ?>" style="padding: 9px 12px; background: #e2e8f0; color: #334155; text-decoration: none; border-radius: 6px; font-size: 0.85rem; font-weight: 600;">
        Clear
      </a>
    <?php endif; ?>
  </form>
</div>

<!-- ========================================================
     FILTER TABS (Matches Top Panel Style)
     ======================================================== -->
<div style="display: flex; gap: 10px; margin-bottom: 20px; flex-wrap: wrap;">
  <a href="index.php?url=admin/inquiries<?= !empty($searchQuery) ? '&q='.urlencode($searchQuery) : '' ?>" 
     style="padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 0.85rem; font-weight: 700; <?= empty($currentFilter) ? 'background: #1e2640; color: #ffffff;' : 'background: #ffffff; color: #64748b; border: 1px solid #e2e8f0;' ?>">
    All Submissions (<?= $stats['total'] ?>)
  </a>
  <a href="index.php?url=admin/inquiries&status=new<?= !empty($searchQuery) ? '&q='.urlencode($searchQuery) : '' ?>" 
     style="padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 0.85rem; font-weight: 700; <?= ($currentFilter === 'new') ? 'background: #ea580c; color: #ffffff;' : 'background: #ffffff; color: #ea580c; border: 1px solid #fed7aa;' ?>">
    New Briefs (<?= $stats['new'] ?>)
  </a>
  <a href="index.php?url=admin/inquiries&status=contacted<?= !empty($searchQuery) ? '&q='.urlencode($searchQuery) : '' ?>" 
     style="padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 0.85rem; font-weight: 700; <?= ($currentFilter === 'contacted') ? 'background: #009fe3; color: #ffffff;' : 'background: #ffffff; color: #0284c7; border: 1px solid #bae6fd;' ?>">
    Contacted (<?= $stats['contacted'] ?>)
  </a>
  <a href="index.php?url=admin/inquiries&status=in_progress<?= !empty($searchQuery) ? '&q='.urlencode($searchQuery) : '' ?>" 
     style="padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 0.85rem; font-weight: 700; <?= ($currentFilter === 'in_progress') ? 'background: #4f46e5; color: #ffffff;' : 'background: #ffffff; color: #4f46e5; border: 1px solid #c7d2fe;' ?>">
    Active Builds (<?= $stats['in_progress'] ?>)
  </a>
  <a href="index.php?url=admin/inquiries&status=completed<?= !empty($searchQuery) ? '&q='.urlencode($searchQuery) : '' ?>" 
     style="padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 0.85rem; font-weight: 700; <?= ($currentFilter === 'completed') ? 'background: #16a34a; color: #ffffff;' : 'background: #ffffff; color: #16a34a; border: 1px solid #bbf7d0;' ?>">
    Completed (<?= $stats['completed'] ?>)
  </a>
</div>

<!-- ========================================================
     MAIN INQUIRIES DATA TABLE
     ======================================================== -->
<div class="table-panel" style="padding: 0; overflow: hidden;">
  <?php if (empty($inquiries)): ?>
    <div style="text-align: center; padding: 60px 20px; color: #64748b;">
      <h3 style="color: #0f172a; font-size: 1.1rem; margin-bottom: 4px;">No inquiries matching criteria</h3>
      <p style="margin: 0; font-size: 0.88rem;">Try clearing your search query or selecting a different status tab.</p>
    </div>
  <?php else: ?>
    <div style="overflow-x: auto;">
      <table class="admin-table">
        <thead style="background: #f8fafc;">
          <tr>
            <th style="padding-left: 20px;">#ID</th>
            <th>STUDENT NAME</th>
            <th>CONTACT DETAILS</th>
            <th>DISCIPLINE / SERVICE</th>
            <th>DEADLINE</th>
            <th>WORKFLOW STATUS</th>
            <th style="text-align: right; padding-right: 20px;">QUICK ACTIONS</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($inquiries as $item): ?>
            <?php 
              $cleanPhone = preg_replace('/[^0-9]/', '', ($item['phone_code'] ?? '+91') . ($item['phone'] ?? ''));
              $waMessage = urlencode("Hello {$item['full_name']}! Tristara IT Solutions has received your assignment inquiry #{$item['id']} for {$item['subject']}. How can we assist with your requirements?");
            ?>
            <tr id="row-<?= $item['id'] ?>">
              <td style="padding-left: 20px; font-weight: 800; font-family: monospace; color: var(--tristara-blue);">
                #<?= $item['id'] ?>
              </td>
              <td>
                <div style="font-weight: 700; color: #0f172a;"><?= htmlspecialchars($item['full_name']) ?></div>
                <div style="font-size: 0.74rem; color: #64748b; margin-top: 2px;">
                  <?= date('M d, Y · h:i A', strtotime($item['created_at'])) ?>
                </div>
              </td>
              <td>
                <div style="color: #334155; font-weight: 500;"><?= htmlspecialchars($item['email']) ?></div>
                <?php if (!empty($item['phone'])): ?>
                  <div style="color: #64748b; font-size: 0.78rem; margin-top: 2px;">
                    <?= htmlspecialchars(($item['phone_code'] ?? '') . ' ' . $item['phone']) ?>
                  </div>
                <?php endif; ?>
              </td>
              <td>
                <div style="font-weight: 700; color: #0f172a;"><?= htmlspecialchars($item['subject']) ?></div>
                <div style="font-size: 0.75rem; color: var(--tristara-blue);"><?= htmlspecialchars($item['service_category'] ?? 'Academic Mentorship') ?></div>
              </td>
              <td>
                <div style="font-weight: 600; color: #334155;">
                  <?= !empty($item['deadline']) ? date('M d, Y', strtotime($item['deadline'])) : 'Flexible' ?>
                </div>
                <?php if (!empty($item['word_count'])): ?>
                  <div style="font-size: 0.75rem; color: #64748b;">
                    <?= htmlspecialchars($item['word_count']) ?>
                  </div>
                <?php endif; ?>
              </td>
              <td>
                <select 
                  onchange="updateStatus(<?= $item['id'] ?>, this.value)" 
                  style="padding: 5px 8px; border-radius: 4px; background: #ffffff; color: #0f172a; border: 1.5px solid var(--border-color); font-size: 0.82rem; font-weight: 600; outline: none; cursor: pointer;"
                >
                  <option value="new" <?= ($item['status'] === 'new') ? 'selected' : '' ?>>New</option>
                  <option value="contacted" <?= ($item['status'] === 'contacted') ? 'selected' : '' ?>>Contacted</option>
                  <option value="in_progress" <?= ($item['status'] === 'in_progress') ? 'selected' : '' ?>>In Progress</option>
                  <option value="completed" <?= ($item['status'] === 'completed') ? 'selected' : '' ?>>Completed</option>
                </select>
              </td>
              <td style="text-align: right; padding-right: 20px; white-space: nowrap;">
                <div style="display: flex; gap: 6px; justify-content: flex-end; align-items: center;">
                  <button 
                    onclick="toggleBrief(<?= $item['id'] ?>)" 
                    style="padding: 5px 10px; border-radius: 4px; background: #f1f5f9; border: 1px solid #cbd5e1; color: #0f172a; font-size: 0.78rem; font-weight: 700; cursor: pointer;"
                  >
                    Brief
                  </button>

                  <?php if (!empty($cleanPhone)): ?>
                    <a href="https://wa.me/<?= $cleanPhone ?>?text=<?= $waMessage ?>" target="_blank" class="status-pill status-in_progress" style="text-decoration: none;">
                      WhatsApp
                    </a>
                  <?php endif; ?>

                  <button 
                    onclick="deleteInquiry(<?= $item['id'] ?>)" 
                    style="padding: 5px 8px; border-radius: 4px; background: #fee2e2; border: 1px solid #fecaca; color: #ef4444; font-size: 0.78rem; cursor: pointer;"
                    title="Delete record"
                  >
                    Delete
                  </button>
                </div>
              </td>
            </tr>

            <!-- Expandable Detailed Brief Row -->
            <tr id="brief-<?= $item['id'] ?>" style="display: none; background: #f8fafc; border-bottom: 2px solid var(--border-color);">
              <td colspan="7" style="padding: 16px 24px;">
                <div style="font-size: 0.75rem; font-weight: 800; color: #009fe3; text-transform: uppercase; margin-bottom: 6px;">
                  STUDENT TASK INSTRUCTIONS &amp; RUBRIC PROMPT:
                </div>
                <div style="background: #ffffff; border: 1px solid var(--border-color); border-radius: 6px; padding: 14px; color: #1e293b; font-size: 0.9rem; line-height: 1.6; white-space: pre-wrap; font-family: inherit;">
                  <?= htmlspecialchars($item['instructions']) ?>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  <?php endif; ?>
</div>

<script>
  function toggleBrief(id) {
    const briefRow = document.getElementById('brief-' + id);
    if (!briefRow) return;
    briefRow.style.display = (briefRow.style.display === 'none') ? 'table-row' : 'none';
  }

  function updateStatus(id, newStatus) {
    const formData = new FormData();
    formData.append('id', id);
    formData.append('status', newStatus);

    fetch('index.php?url=admin/inquiries/update-status', {
      method: 'POST',
      body: formData
    })
    .then(r => r.json())
    .then(data => {
      if (data.success) {
        showToast('✓ Status updated: ' + newStatus);
      } else {
        alert('Error: ' + data.message);
      }
    })
    .catch(e => {
      alert('Network error updating status');
    });
  }

  function deleteInquiry(id) {
    if (!confirm('Are you sure you want to permanently delete inquiry #' + id + '?')) {
      return;
    }

    const formData = new FormData();
    formData.append('id', id);

    fetch('index.php?url=admin/inquiries/delete', {
      method: 'POST',
      body: formData
    })
    .then(r => r.json())
    .then(data => {
      if (data.success) {
        const row = document.getElementById('row-' + id);
        const brief = document.getElementById('brief-' + id);
        if (row) row.remove();
        if (brief) brief.remove();
        showToast('✓ Inquiry #' + id + ' deleted');
      } else {
        alert('Error: ' + data.message);
      }
    })
    .catch(e => {
      alert('Network error deleting inquiry');
    });
  }

  function showToast(msg) {
    const toast = document.createElement('div');
    toast.style.cssText = 'position: fixed; bottom: 24px; right: 24px; background: #009fe3; color: #fff; padding: 10px 18px; border-radius: 6px; font-weight: bold; box-shadow: 0 8px 24px rgba(0,0,0,0.2); z-index: 9999; font-size: 0.88rem;';
    toast.textContent = msg;
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 3000);
  }
</script>

<?php
require_once dirname(__DIR__) . '/layouts/admin_footer.php';
?>
