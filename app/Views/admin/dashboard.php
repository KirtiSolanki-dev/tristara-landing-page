<?php
require_once dirname(__DIR__) . '/layouts/admin_header.php';
?>

<!-- ========================================================
     ROW 1: TOP SPLIT STAT CARDS (Clean Operational Metrics)
     ======================================================== -->
<div class="stats-split-grid">
  <!-- Card 1: Total Inquiries (Indigo) -->
  <div class="stat-split-card card-theme-blue">
    <div class="stat-split-left">
      <span class="stat-split-tag">Total Tasks</span>
      <div class="stat-split-title">Inquiries</div>
    </div>
    <div class="stat-split-right">
      <?= $stats['total'] ?>
    </div>
  </div>

  <!-- Card 2: New Action Required (Vibrant Orange) -->
  <div class="stat-split-card card-theme-orange">
    <div class="stat-split-left">
      <span class="stat-split-tag">Action Required</span>
      <div class="stat-split-title">New Briefs</div>
    </div>
    <div class="stat-split-right">
      <?= $stats['new'] ?>
    </div>
  </div>

  <!-- Card 3: Active Pipeline (Tristara Cyan) -->
  <div class="stat-split-card card-theme-cyan">
    <div class="stat-split-left">
      <span class="stat-split-tag">Active Pipeline</span>
      <div class="stat-split-title">In Progress</div>
    </div>
    <div class="stat-split-right">
      <?= $stats['in_progress'] ?>
    </div>
  </div>

  <!-- Card 4: Completed (Emerald Green) -->
  <div class="stat-split-card card-theme-green">
    <div class="stat-split-left">
      <span class="stat-split-tag">Turnitin Verified</span>
      <div class="stat-split-title">Completed</div>
    </div>
    <div class="stat-split-right">
      <?= $stats['completed'] ?>
    </div>
  </div>
</div>


<!-- ========================================================
     ROW 2: OPERATIONAL METRICS & RECENT INQUIRIES
     ======================================================== -->
<div class="bottom-grid">
  <!-- Left Panel: Discipline & Subject Stats (Dynamically sorted by highest project volume) -->
  <div class="table-panel">
    <div class="chart-header">
      <span>Discipline Stats</span>
      <span style="font-size: 0.75rem; color: #009fe3; font-weight: 700;">Live Academic Ratio</span>
    </div>
    <table class="admin-table">
      <tbody>
        <?php if (!empty($disciplineStats)): ?>
          <?php foreach ($disciplineStats as $item): ?>
            <tr>
              <td style="font-weight: 600; width: 45%;">
                <?= htmlspecialchars($item['subject']) ?>
                <?php if (!empty($item['count'])): ?>
                  <span style="font-size: 0.72rem; color: #94a3b8; font-weight: 500; margin-left: 6px;">(<?= $item['count'] ?> <?= $item['count'] === 1 ? 'project' : 'projects' ?>)</span>
                <?php endif; ?>
              </td>
              <td>
                <div class="progress-bar-wrap">
                  <div class="progress-bar-fill" style="width: <?= max($item['percentage'] > 0 ? 6 : 0, $item['percentage']) ?>%; background: <?= $item['color'] ?>;"></div>
                </div>
              </td>
              <td style="text-align: right; font-weight: 700; font-size: 0.82rem; color: #64748b; width: 15%;">
                <?= $item['percentage'] ?>%
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="3" style="text-align: center; color: #94a3b8; padding: 24px;">No inquiries submitted yet</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <!-- Right Panel: Recent Student Orders / Inquiries (Matches Photo Table) -->
  <div class="table-panel">
    <div class="chart-header">
      <span>Recent Student Inquiries &amp; Orders</span>
      <a href="index.php?url=admin/inquiries" style="color: #009fe3; text-decoration: none; font-size: 0.78rem; font-weight: 700;">
        View Full Vault (<?= $stats['total'] ?>) →
      </a>
    </div>

    <?php if (empty($recentInquiries)): ?>
      <div style="text-align: center; padding: 40px 10px; color: #94a3b8;">
        No inquiries recorded yet. Test submissions will land here live.
      </div>
    <?php else: ?>
      <table class="admin-table">
        <thead>
          <tr>
            <th>S.NO</th>
            <th>STUDENT / PRODUCT</th>
            <th>STATUS</th>
            <th>PROGRESS</th>
            <th style="text-align: right;">ACTION</th>
          </tr>
        </thead>
        <tbody>
          <?php $idx = 1; foreach ($recentInquiries as $row): ?>
            <?php 
              $cleanPhone = preg_replace('/[^0-9]/', '', ($row['phone_code'] ?? '+91') . ($row['phone'] ?? ''));
              $waMsg = urlencode("Hello {$row['full_name']}! Tristara IT Solutions is here regarding your inquiry #{$row['id']} for {$row['subject']}.");
            ?>
            <tr>
              <td style="font-weight: 800; color: #64748b;"><?= $idx++ ?></td>
              <td>
                <div style="font-weight: 700; color: #0f172a;"><?= htmlspecialchars($row['full_name']) ?></div>
                <div style="font-size: 0.78rem; color: #64748b;"><?= htmlspecialchars($row['subject']) ?></div>
              </td>
              <td>
                <span class="status-pill status-<?= htmlspecialchars($row['status']) ?>">
                  <?= htmlspecialchars($row['status']) ?>
                </span>
              </td>
              <td style="font-weight: 700; color: #2563EB;">
                <?php
                  $progressMap = ['new' => '15% ↑', 'contacted' => '40% ↑', 'in_progress' => '80% ↑', 'completed' => '100% ✓'];
                  echo $progressMap[$row['status']] ?? '25% ↑';
                ?>
              </td>
              <td style="text-align: right;">
                <?php if (!empty($cleanPhone)): ?>
                  <a href="https://wa.me/<?= $cleanPhone ?>?text=<?= $waMsg ?>" target="_blank" class="status-pill status-in_progress" style="text-decoration: none;">
                    WhatsApp
                  </a>
                <?php else: ?>
                  <a href="index.php?url=admin/inquiries" style="color: #009fe3; font-weight: 700; font-size: 0.78rem; text-decoration: none;">
                    Review →
                  </a>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>
</div>


<!-- ========================================================
     ROW 4: BOTTOM COLORED STATUS STRIP (Matches Photo Bottom Strip)
     ======================================================== -->
<div class="bottom-social-strip">
  <a href="https://wa.me/919313118267" target="_blank" class="social-strip-item strip-blue">
    WhatsApp Live Dispatch
  </a>
  <a href="index.php?url=admin/inquiries&status=new" class="social-strip-item strip-red">
    Urgent Review Queue (<?= $stats['new'] ?>)
  </a>
  <a href="index.php?url=admin/inquiries&status=in_progress" class="social-strip-item strip-navy">
    In Active Mentorship (<?= $stats['in_progress'] ?>)
  </a>
  <a href="index.php?url=admin/inquiries&status=completed" class="social-strip-item strip-green">
    100% Turnitin Clean Deliveries (<?= $stats['completed'] ?>)
  </a>
</div>

<?php
require_once dirname(__DIR__) . '/layouts/admin_footer.php';
?>
