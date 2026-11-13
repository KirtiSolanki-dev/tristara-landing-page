<?php
$pageTitle = 'Tristara IT Solutions — Academic Excellence & Assignment Assistance';
$currentPage = 'home';
require_once __DIR__ . '/../layouts/header.php';
?>


<!-- ==============================
     SECTION 1 — HERO
     ============================== -->
<section class="hero hero-exact-mockup hero-fullscreen" id="hero">
  <div class="container hero-exact-grid">
    <!-- Left Column: Enriched Copy, Value Props & Actions -->
    <div class="hero-copy-col">
      <div class="hero-theme-badge">
        <span class="badge-sparkle">✨</span> Next-Gen Academic Guidance &amp; Smart Tools
      </div>

      <h1 class="hero-headline">
        <span class="hl-line-1">Your Assignment</span>
        <span class="hl-line-2">Support, Reimagined</span>
      </h1>
      
      <p class="hero-subhead">
        Get expert 1-on-1 academic assistance, intelligent study gadgets, and friendly companions — <strong>Lyra &amp; Panda</strong> — to turn tough assignments and tight deadlines into guaranteed top grades.
      </p>

      <!-- Key Academic Value Propositions -->
      <div class="hero-key-points">
        <div class="key-point-item">
          <span class="point-check">✓</span> <strong>100% Plagiarism-Free</strong> &amp; Turnitin Verified Reports
        </div>
        <div class="key-point-item">
          <span class="point-check">✓</span> <strong>24/7 Expert Help</strong> for Coding, Essays &amp; Case Studies
        </div>
        <div class="key-point-item">
          <span class="point-check">✓</span> <strong>On-Time Delivery</strong> with Guaranteed A+ Grade Results
        </div>
      </div>
      
      <div class="hero-btn-wrap">
        <a href="#contact" class="btn-start-exact">Start Now →</a>
        <a href="#how-it-works" class="btn-explore-secondary">Explore Gadgets &amp; Tools</a>
      </div>

      <!-- Live Trust Bar Mini-Metrics -->
      <div class="hero-mini-stats">
        <div class="mini-stat">
          <span class="mini-stat-val">10,000+</span>
          <span class="mini-stat-lbl">Assignments Completed</span>
        </div>
        <div class="mini-stat-sep"></div>
        <div class="mini-stat">
          <span class="mini-stat-val">99.4%</span>
          <span class="mini-stat-lbl">Satisfaction Rate</span>
        </div>
        <div class="mini-stat-sep"></div>
        <div class="mini-stat">
          <span class="mini-stat-val">4.9 / 5</span>
          <span class="mini-stat-lbl">Student Rating ★</span>
        </div>
      </div>
    </div>

    <!-- Right Column: Lyra & Panda with Floating Interactive Gadgets -->
    <div class="hero-art-col">
      <!-- Magical Ambient Background Aura -->
      <div class="hero-stage-aura"></div>

      <!-- Upper Floating Academic Pill filling top space -->
      <div class="hero-floating-pill pill-top-badge">
        <span class="pill-sparkle">🎓</span> <span>A+ Distinction Mode</span>
      </div>

      <div class="art-visual-stage">
        <!-- 5 Iconic Academic Gadgets Only (Clean, Non-Overlapping) -->
        <a href="#gadget-vault" class="free-floating-gadget gadget-spread-1" title="Bamboo AI Brainstormer" onclick="switchGadget('bamboo-brainstormer', document.querySelectorAll('.gadget-tab-btn')[0])">🎋</a>
        <a href="#gadget-vault" class="free-floating-gadget gadget-spread-5" title="Star-Byte Code Wand" onclick="switchGadget('star-debugger', document.querySelectorAll('.gadget-tab-btn')[2])">⭐</a>
        <a href="#gadget-vault" class="free-floating-gadget gadget-spread-2" title="Infinite Academic Backpack" onclick="switchGadget('infinite-backpack', document.querySelectorAll('.gadget-tab-btn')[1])">🎒</a>
        <a href="#gadget-vault" class="free-floating-gadget gadget-spread-3" title="Zen Time-Warp Portal" onclick="switchGadget('zen-timewarp', document.querySelectorAll('.gadget-tab-btn')[3])">⏳</a>
        <a href="#gadget-vault" class="free-floating-gadget gadget-spread-4" title="Panda's Shield of Originality" onclick="switchGadget('turnitin-shield', document.querySelectorAll('.gadget-tab-btn')[4])">🛡️</a>

        <!-- Main Cloud Character Artwork (Large Display) -->
        <img src="assets/images/hero_lyra_panda_cloud.png?v=free_gadgets_v11" 
             srcset="assets/images/hero_lyra_panda_cloud.png?v=free_gadgets_v11 1x, assets/images/hero_lyra_panda_cloud@2x.png?v=free_gadgets_v11 2x"
             alt="Lyra and Panda — Your Smart Assignment Companions" 
             class="exact-art-img cloud-art-img">
      </div>

      <!-- Lower Floating Academic Pill filling bottom space -->
      <div class="hero-floating-pill pill-bottom-badge">
        <span class="pill-sparkle">🛡️</span> <span>100% Turnitin Verified Human Work</span>
      </div>
    </div>
  </div>
</section>

<!-- ==============================
     SECTION 2 — TRUST BAR
     ============================== -->
<section class="trust-bar">
  <div class="container">
    <div class="trust-stat reveal">
      <div class="trust-stat-number" data-target="10000" data-suffix="+">0</div>
      <div class="trust-stat-label">Assignments Completed</div>
    </div>
    <div class="trust-stat reveal">
      <div class="trust-stat-number" data-target="5000" data-suffix="+">0</div>
      <div class="trust-stat-label">Students Supported</div>
    </div>
    <div class="trust-stat reveal">
      <div class="trust-stat-number" data-target="50" data-suffix="+">0</div>
      <div class="trust-stat-label">Subjects Covered</div>
    </div>
    <div class="trust-stat reveal">
      <div class="trust-stat-number" data-target="30" data-suffix="+">0</div>
      <div class="trust-stat-label">Countries Served</div>
    </div>
  </div>
</section>



<!-- ==============================
     SECTION 2.5 — PANDA'S INTERACTIVE ACADEMIC GADGET VAULT
     ============================== -->
<section class="gadget-vault-section" id="gadget-vault">
  <div class="container">
    <div style="text-align: center;" class="reveal">
      <div class="funky-badge yellow">✨ Panda's Magic Academic Arsenal</div>
      <h2 class="section-title" style="margin-top: 14px;">Pick Your Academic Gadget!</h2>
      <p class="section-desc" style="margin: 0 auto;">Click any gadget below to see how Panda and Lyra turn tough homework and tight deadlines into guaranteed A+ grades.</p>
    </div>

    <!-- Interactive Panda Gadget Nav Tabs -->
    <div class="gadget-tabs-nav reveal">
      <button class="gadget-tab-btn active" onclick="switchGadget('bamboo-brainstormer', this)">
        <span class="tab-emoji">🎋</span> Bamboo Brainstormer
      </button>
      <button class="gadget-tab-btn" onclick="switchGadget('infinite-backpack', this)">
        <span class="tab-emoji">🎒</span> Infinite Backpack
      </button>
      <button class="gadget-tab-btn" onclick="switchGadget('star-debugger', this)">
        <span class="tab-emoji">⭐</span> Star Code Wand
      </button>
      <button class="gadget-tab-btn" onclick="switchGadget('zen-timewarp', this)">
        <span class="tab-emoji">⏳</span> Zen Time-Warp
      </button>
      <button class="gadget-tab-btn" onclick="switchGadget('turnitin-shield', this)">
        <span class="tab-emoji">🛡️</span> Originality Shield
      </button>
    </div>

    <!-- Active Gadget Showcase Display Box -->
    <div class="gadget-showcase-box reveal" id="gadgetShowcase">
      <!-- Default: Bamboo Brainstormer -->
      <div class="gadget-showcase-content">
        <div class="gadget-showcase-left">
          <div class="gadget-sound-tag" id="gadgetSound">SWOOSH! 🎋 INSTANT CONCEPT CLARITY</div>
          <h3 id="gadgetTitle">Bamboo AI Brainstormer</h3>
          <p id="gadgetDesc">Stuck on where to start your assignment? Panda taps his magical bamboo wand to generate creative project outlines, breakthrough thesis statements, and comprehensive research structures in seconds.</p>
          <div class="step-features" id="gadgetFeatures">
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <span class="step-feature-text">Instant Topic Breakdown &amp; Outlines</span></div>
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <span class="step-feature-text">Cross-Disciplinary Ideation &amp; Thesis Formulation</span></div>
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <span class="step-feature-text">100% Custom Research Trajectory</span></div>
          </div>
          <div style="margin-top: 24px;">
            <a href="#contact" class="btn-primary" style="background: var(--grad); font-size: 0.9rem; padding: 10px 22px;">Activate This Gadget →</a>
          </div>
        </div>

        <div class="gadget-showcase-right">
          <div class="gadget-visual-frame" id="gadgetVisual">
            <!-- Bamboo Wand SVG Graphic -->
            <svg width="150" height="170" viewBox="0 0 150 170" fill="none">
              <rect x="68" y="25" width="14" height="120" rx="7" fill="#16a34a" stroke="#14532d" stroke-width="2.5"/>
              <line x1="68" y1="55" x2="82" y2="55" stroke="#86efac" stroke-width="2"/>
              <line x1="68" y1="90" x2="82" y2="90" stroke="#86efac" stroke-width="2"/>
              <line x1="68" y1="120" x2="82" y2="120" stroke="#86efac" stroke-width="2"/>
              <!-- Bamboo Leaves -->
              <path d="M80 50 C110 35, 125 55, 120 70 C105 70, 90 60, 80 50 Z" fill="#22c55e" stroke="#14532d" stroke-width="1.5"/>
              <path d="M70 85 C40 70, 25 90, 30 105 C45 105, 60 95, 70 85 Z" fill="#4ade80" stroke="#14532d" stroke-width="1.5"/>
              <!-- Glowing Star at Top -->
              <polygon points="75,8 79,18 90,20 82,27 84,38 75,32 66,38 68,27 60,20 71,18" fill="#ffd200" stroke="#b45309" stroke-width="1.5"/>
              <circle cx="75" cy="23" r="5" fill="#ffffff" opacity="0.8"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==============================
     SECTION 2.6 — LYRA & PANDA ACADEMIC STORY JOURNEY (5 GADGETS MATCH)
     ============================== -->
<section class="comparison-section story-journey-section" id="story-journey">
  <div class="container story-compact-container">
    <div style="text-align: center;" class="reveal">
      <div class="funky-badge cyan" style="font-size: 0.78rem; padding: 4px 14px;">📖 The Story of Lyra &amp; Panda</div>
      <h2 class="section-title" style="margin-top: 10px; font-size: clamp(1.6rem, 2.8vw, 2.2rem);">Struggling Alone vs. The Magic Companion</h2>
      <p class="section-desc" style="margin: 0 auto; max-width: 580px; font-size: 0.92rem;">See how Lyra transformed her academic stress into effortless A+ grades with her new buddy, Panda!</p>
      
      <!-- Mobile Swipe Indicator Pill -->
      <div class="story-swipe-indicator">
        <span>👈</span> Swipe between Chapters <span>👉</span>
      </div>
    </div>

    <div class="comp-grid reveal story-compact-grid">
      <!-- Story Card 1: Meet Lyra (Doing It Alone) -->
      <div class="comp-card story-card-lyra">
        <div class="story-panel-img-wrap">
          <img src="assets/images/story_panel_1_meet_lyra.png?v=panda_5gadgets_v20" 
               srcset="assets/images/story_panel_1_meet_lyra.png?v=panda_5gadgets_v20 1x, assets/images/story_panel_1_meet_lyra@2x.png?v=panda_5gadgets_v20 2x" 
               alt="Meet Lyra - A bright student with big dreams" 
               class="story-panel-img">
        </div>

        <div class="story-card-body">
          <div class="comp-card-badge" style="background: rgba(239, 68, 68, 0.15); color: #f87171; border: 1px solid rgba(239, 68, 68, 0.3); font-size: 0.75rem; padding: 3px 10px; margin-bottom: 6px;">
            😭 Chapter 1: Doing It Alone
          </div>
          <h3 class="story-card-heading text-danger">The Homework Nightmare</h3>
          <ul class="comp-list story-compact-list">
            <li>
              <span class="comp-icon">❌</span>
              <div class="story-point-text">
                <strong class="point-label">Deadline Panic:</strong>
                <span class="point-desc">3:00 AM confusion over strict assignment rubrics.</span>
              </div>
            </li>
            <li>
              <span class="comp-icon">❌</span>
              <div class="story-point-text">
                <strong class="point-label">Endless Research:</strong>
                <span class="point-desc">Paywalled journals &amp; tedious citation formatting.</span>
              </div>
            </li>
            <li>
              <span class="comp-icon">❌</span>
              <div class="story-point-text">
                <strong class="point-label">Coding Nightmare:</strong>
                <span class="point-desc">Sleepless all-nighters debugging mysterious errors.</span>
              </div>
            </li>
            <li>
              <span class="comp-icon">❌</span>
              <div class="story-point-text">
                <strong class="point-label">Time Crunch:</strong>
                <span class="point-desc">Racing against the clock with zero sleep before submission.</span>
              </div>
            </li>
            <li>
              <span class="comp-icon">❌</span>
              <div class="story-point-text">
                <strong class="point-label">Plagiarism Anxiety:</strong>
                <span class="point-desc">Constant fear of accidental similarity &amp; AI flags.</span>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- Story Card 2: A New Friend Appears (With Panda & Tristara) -->
      <div class="comp-card story-card-panda">
        <div class="story-panel-img-wrap">
          <img src="assets/images/story_panel_2_friend_appears.png?v=panda_5gadgets_v20" 
               srcset="assets/images/story_panel_2_friend_appears.png?v=panda_5gadgets_v20 1x, assets/images/story_panel_2_friend_appears@2x.png?v=panda_5gadgets_v20 2x" 
               alt="A New Friend Appears - Lyra discovers Tristara Assignments" 
               class="story-panel-img">
        </div>

        <div class="story-card-body">
          <div class="comp-card-badge" style="background: rgba(0, 194, 255, 0.15); color: #38bdf8; border: 1px solid rgba(0, 194, 255, 0.35); font-size: 0.75rem; padding: 3px 10px; margin-bottom: 6px;">
            😎 Chapter 2: With Panda &amp; Tristara
          </div>
          <h3 class="story-card-heading text-cyan">The Magic Buddy Experience</h3>
          <ul class="comp-list story-compact-list">
            <li>
              <span class="comp-icon">🎋</span>
              <div class="story-point-text">
                <strong class="point-label">Bamboo Brainstormer:</strong>
                <span class="point-desc">Instant topic breakdowns &amp; clear concept outlines.</span>
              </div>
            </li>
            <li>
              <span class="comp-icon">🎒</span>
              <div class="story-point-text">
                <strong class="point-label">Infinite Backpack:</strong>
                <span class="point-desc">10M+ peer-reviewed sources in APA, IEEE &amp; Harvard.</span>
              </div>
            </li>
            <li>
              <span class="comp-icon">⭐</span>
              <div class="story-point-text">
                <strong class="point-label">Star-Byte Code Wand:</strong>
                <span class="point-desc">Clean, unit-tested code with full modular docs.</span>
              </div>
            </li>
            <li>
              <span class="comp-icon">⏳</span>
              <div class="story-point-text">
                <strong class="point-label">Zen Time-Warp Portal:</strong>
                <span class="point-desc">Express 6-hour turnaround for tight emergency deadlines.</span>
              </div>
            </li>
            <li>
              <span class="comp-icon">🛡️</span>
              <div class="story-point-text">
                <strong class="point-label">Originality Shield:</strong>
                <span class="point-desc">100% human-crafted with official Turnitin report.</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Story Call to Action -->
    <div style="text-align: center; margin-top: 24px;" class="reveal">
      <a href="#contact" class="btn-primary" style="background: linear-gradient(135deg, #00c2ff, #7b61ff); padding: 11px 34px; font-size: 0.95rem; box-shadow: 0 6px 20px rgba(0, 194, 255, 0.35); text-decoration: none; border-radius: 50px; font-weight: 700; display: inline-flex; align-items: center; gap: 8px;">
        Start Your Story with Panda &amp; Lyra →
      </a>
    </div>
  </div>
</section>

<!-- ==============================
     SECTION 3 — HOW IT WORKS (PANDA & LYRA 4-STEP ZIG-ZAG WORKFLOW)
     ============================== -->
<section class="how-it-works" id="how-it-works">
  <!-- Dynamic Paper Airplane SVG Flight Path (Panda & Lyra Origami Flight Style) -->
  <div class="airplane-path-container" id="airplanePath">
    <svg width="100%" height="100%" preserveAspectRatio="none">
      <path id="flightPath" class="flight-path" d=""/>
    </svg>
    <div class="paper-airplane" id="paperAirplane">
      <svg width="46" height="46" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- Sleek Sky Blue Origami Paper Plane with Panda's Gold Star -->
        <path d="M4 6 L44 24 L4 42 L12 24 L4 6 Z" fill="#00c2ff"/>
        <path d="M12 24 L44 24" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"/>
        <path d="M4 6 L12 24 L4 42" fill="#0080ff"/>
        <polygon points="24,20 26,25 31,25 27,28 28,33 24,30 20,33 21,28 17,25 22,25" fill="#ffd200"/>
      </svg>
    </div>
  </div>

  <div class="container">
    <div class="how-header reveal" style="text-align: center;">
      <div class="funky-badge cyan" style="font-size: 0.8rem; padding: 5px 16px;">✈️ HOW IT WORKS</div>
      <h2 class="section-title" style="margin-top: 12px; font-size: clamp(1.8rem, 3.2vw, 2.5rem);">From Problem to Perfect Assignment</h2>
      <p class="section-desc" style="margin: 0 auto; max-width: 580px; font-size: 1rem;">Just 4 simple steps. Your assignment, our priority.</p>
    </div>

    <div class="steps-wrapper">
      <!-- Step 1: Submit Your Assignment (Visual LEFT, Content RIGHT) -->
      <div class="step-row">
        <div class="step-visual reveal-left">
          <div class="step-illustration">
            <div style="position: relative; display: flex; justify-content: center; align-items: center; background: transparent; border: none; box-shadow: none;">
              <img src="assets/images/how_it_works_stage1.png?v=clean_panda_lyra_v34" 
                   srcset="assets/images/how_it_works_stage1.png?v=clean_panda_lyra_v34 1x, assets/images/how_it_works_stage1@2x.png?v=clean_panda_lyra_v34 2x" 
                   alt="Step 1: Submit Your Assignment Requirements — Lyra &amp; Panda" 
                   class="step-art-img"
                   style="width: 100%; max-width: 500px; max-height: 440px; height: auto; display: block; margin: 0 auto; object-fit: contain; filter: drop-shadow(0 15px 35px rgba(0, 194, 255, 0.2)); border: none; background: transparent;">
            </div>
          </div>
        </div>
        <div class="step-content reveal-right">
          <div class="gadget-card-tag" style="background: rgba(234, 179, 8, 0.15); color: #ca8a04; border: 1px solid rgba(234, 179, 8, 0.3);">Step 1 · Quick &amp; Easy Upload</div>
          <div class="step-number" style="background: linear-gradient(135deg, #eab308, #ca8a04);">1</div>
          <h3>Submit Your Assignment</h3>
          <p>Share your assignment details and requirements. It only takes a minute! Simply upload your project brief, rubric guidelines, and reference files directly into our secure portal.</p>
          <div class="step-features">
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#eab308" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Quick &amp; Easy: Tell us what you need and when</div>
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#eab308" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> All formats supported (PDF, DOCX, ZIP, Code)</div>
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#eab308" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Strict Confidentiality (100% Private &amp; Secure)</div>
          </div>
        </div>
      </div>

      <!-- Step 2: In-Depth Review (Content LEFT, Visual RIGHT) -->
      <div class="step-row reverse">
        <div class="step-content reveal-left">
          <div class="gadget-card-tag" style="background: rgba(168, 85, 247, 0.15); color: #9333ea; border: 1px solid rgba(168, 85, 247, 0.3);">Step 2 · Forensic Task Analysis</div>
          <div class="step-number" style="background: linear-gradient(135deg, #a855f7, #7e22ce);">2</div>
          <h3>In-Depth Review</h3>
          <p>Our subject-matter experts carefully analyse your task, break it down and plan the best approach according to your university rubric and grading criteria.</p>
          <div class="step-features">
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Smart Analysis: We study your topic from every angle</div>
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> 50+ Domain Specialists matched to your field</div>
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Transparent Student-Friendly Pricing</div>
          </div>
        </div>
        <div class="step-visual reveal-right">
          <div class="step-illustration">
            <div style="position: relative; display: flex; justify-content: center; align-items: center; background: transparent; border: none; box-shadow: none;">
              <img src="assets/images/how_it_works_stage2.png?v=clean_panda_lyra_v34" 
                   srcset="assets/images/how_it_works_stage2.png?v=clean_panda_lyra_v34 1x, assets/images/how_it_works_stage2@2x.png?v=clean_panda_lyra_v34 2x" 
                   alt="Step 2: In-Depth Review — Detective Panda Analyzing" 
                   class="step-art-img"
                   style="width: 100%; max-width: 500px; max-height: 440px; height: auto; display: block; margin: 0 auto; object-fit: contain; filter: drop-shadow(0 15px 35px rgba(168, 85, 247, 0.2)); border: none; background: transparent;">
            </div>
          </div>
        </div>
      </div>

      <!-- Step 3: Deep Research (Visual LEFT, Content RIGHT) -->
      <div class="step-row">
        <div class="step-visual reveal-left">
          <div class="step-illustration">
            <div style="position: relative; display: flex; justify-content: center; align-items: center; background: transparent; border: none; box-shadow: none;">
              <img src="assets/images/how_it_works_stage3.png?v=stage3_spotless_v38" 
                   srcset="assets/images/how_it_works_stage3.png?v=stage3_spotless_v38 1x, assets/images/how_it_works_stage3@2x.png?v=stage3_spotless_v38 2x" 
                   alt="Step 3: Deep Research — Panda with Holographic Sourcing" 
                   class="step-art-img"
                   style="width: 100%; max-width: 500px; max-height: 440px; height: auto; display: block; margin: 0 auto; object-fit: contain; filter: drop-shadow(0 15px 35px rgba(0, 194, 255, 0.2)); border: none; background: transparent;">
            </div>
          </div>
        </div>
        <div class="step-content reveal-right">
          <div class="gadget-card-tag" style="background: rgba(14, 165, 233, 0.15); color: #0284c7; border: 1px solid rgba(14, 165, 233, 0.3);">Step 3 · Sourcing &amp; Execution</div>
          <div class="step-number" style="background: linear-gradient(135deg, #0284c7, #0369a1);">3</div>
          <h3>Deep Research</h3>
          <p>We explore trusted sources, find the latest information, and create a well-structured content plan with verified academic citations and clean documentation.</p>
          <div class="step-features">
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Reliable &amp; Detailed: Real sources, fresh insights</div>
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> 10M+ Peer-Reviewed Databases (APA, IEEE, Harvard)</div>
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Bug-Free Code &amp; Rigorous Step-by-Step QA</div>
          </div>
        </div>
      </div>

      <!-- Step 4: Assignment Delivered (Content LEFT, Visual RIGHT) -->
      <div class="step-row reverse">
        <div class="step-content reveal-left">
          <div class="gadget-card-tag" style="background: rgba(244, 63, 94, 0.15); color: #e11d48; border: 1px solid rgba(244, 63, 94, 0.3);">Step 4 · Guaranteed A+ Handover</div>
          <div class="step-number" style="background: linear-gradient(135deg, #f43f5e, #be123c);">4</div>
          <h3>Assignment Delivered</h3>
          <p>We craft a well-researched, original and high-quality assignment — ready for you on time, complete with an official Turnitin originality and AI similarity report.</p>
          <div class="step-features">
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#f43f5e" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> On Time, Always: Delivered with care before deadline</div>
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#f43f5e" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> 100% Original: Verified Turnitin similarity &amp; AI report</div>
            <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#f43f5e" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Free Unlimited Revisions until you are 100% satisfied</div>
          </div>
        </div>
        <div class="step-visual reveal-right">
          <div class="step-illustration">
            <div style="position: relative; display: flex; justify-content: center; align-items: center; background: transparent; border: none; box-shadow: none;">
              <img src="assets/images/how_it_works_stage4.png?v=clean_panda_lyra_v34" 
                   srcset="assets/images/how_it_works_stage4.png?v=clean_panda_lyra_v34 1x, assets/images/how_it_works_stage4@2x.png?v=clean_panda_lyra_v34 2x" 
                   alt="Step 4: Assignment Delivered — Lyra &amp; Panda Done!" 
                   class="step-art-img"
                   style="width: 100%; max-width: 500px; max-height: 440px; height: auto; display: block; margin: 0 auto; object-fit: contain; filter: drop-shadow(0 15px 35px rgba(244, 63, 94, 0.2)); border: none; background: transparent;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==============================
     SECTION 4 — SERVICES (PANDA & LYRA'S ACADEMIC ARSENAL)
     ============================== -->
<section class="services" id="services">
  <div class="container">
    <div class="services-header reveal" style="text-align: center;">
      <div class="funky-badge yellow" style="font-size: 0.8rem; padding: 5px 16px;">✨ PANDA &amp; LYRA'S ACADEMIC ARSENAL</div>
      <h2 class="section-title" style="margin-top: 12px; font-size: clamp(1.8rem, 3.2vw, 2.5rem);">Panda's Magic Gadgets for Every Academic Challenge</h2>
      <p class="section-desc" style="margin: 0 auto; max-width: 680px; font-size: 1rem;">From full-stack programming projects to 10,000-word dissertation papers — Panda &amp; Lyra's smart academic arsenal is equipped to deliver excellence across all disciplines.</p>
    </div>

    <div class="services-grid">
      <!-- Service Card 1: Bamboo AI Brainstormer -->
      <div class="service-card reveal">
        <div class="service-card-badge-row">
          <span class="gadget-card-tag bread" style="background: rgba(34, 197, 94, 0.15); color: #16a34a; border-color: rgba(34, 197, 94, 0.3);">🎋 Gadget #01 · Bamboo Brainstormer</span>
        </div>
        <div class="service-icon" style="background: rgba(34, 197, 94, 0.12); border: 1.5px solid #22c55e;">
          <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
            <rect x="6" y="8" width="32" height="28" rx="8" fill="#dcfce7" stroke="#22c55e" stroke-width="2.5"/>
            <path d="M16 16 L22 28 L28 16" stroke="#16a34a" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="22" cy="18" r="3" fill="#22c55e"/>
          </svg>
        </div>
        <h3>Assignment Assistance</h3>
        <p>Master essays, comprehensive reports, case studies, and critical reviews with scholarly depth and 100% human-crafted writing formatted strictly to APA, Harvard, IEEE, or MLA.</p>
        <a href="index.php?url=contact&service=assignments" class="service-arrow">Deploy Bamboo Brainstormer <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>

      <!-- Service Card 2: Star-Byte Code Wand -->
      <div class="service-card reveal">
        <div class="service-card-badge-row">
          <span class="gadget-card-tag" style="background: rgba(0, 194, 255, 0.15); color: #0284c7; border-color: rgba(0, 194, 255, 0.3);">⭐ Gadget #02 · Star Code Wand</span>
        </div>
        <div class="service-icon" style="background: rgba(0, 194, 255, 0.12); border: 1.5px solid #00c2ff;">
          <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
            <rect x="6" y="8" width="32" height="28" rx="6" fill="#0f172a" stroke="#00c2ff" stroke-width="2.5"/>
            <path d="M12 18 L18 22 L12 26" stroke="#22c55e" stroke-width="2" stroke-linecap="round"/>
            <line x1="22" y1="26" x2="32" y2="26" stroke="#ffd200" stroke-width="2" stroke-linecap="round"/>
            <polygon points="32,10 34,14 38,15 35,18 36,22 32,20 28,22 29,18 26,15 30,14" fill="#ffd200"/>
          </svg>
        </div>
        <h3>Programming Projects</h3>
        <p>Full-stack development, algorithms, system architecture, and 100% bug-free code across Python, Java, C++, React, and SQL with automated unit tests and setup guides.</p>
        <a href="index.php?url=contact&service=programming" class="service-arrow">Deploy Star Code Wand <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>

      <!-- Service Card 3: Infinite Academic Backpack -->
      <div class="service-card reveal">
        <div class="service-card-badge-row">
          <span class="gadget-card-tag time" style="background: rgba(56, 189, 248, 0.15); color: #0284c7; border-color: rgba(56, 189, 248, 0.3);">🎒 Gadget #03 · Infinite Backpack</span>
        </div>
        <div class="service-icon" style="background: rgba(56, 189, 248, 0.12); border: 1.5px solid #38bdf8;">
          <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
            <rect x="8" y="10" width="28" height="26" rx="8" fill="#e0f2fe" stroke="#38bdf8" stroke-width="2.5"/>
            <path d="M16 10 V6 C16 4.5 28 4.5 28 6 V10" stroke="#0284c7" stroke-width="2"/>
            <polygon points="22,18 23.5,21 27,21.5 24.5,24 25,27.5 22,25.5 19,27.5 19.5,24 17,21.5 20.5,21" fill="#ffd200"/>
          </svg>
        </div>
        <h3>Research Papers</h3>
        <p>Peer-reviewed literature surveys from 10M+ Scopus, IEEE &amp; PubMed journals with verified DOI citations, empirical data synthesis, and publication-ready formatting.</p>
        <a href="index.php?url=contact&service=research" class="service-arrow">Access Infinite Backpack <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>

      <!-- Service Card 4: Zen Time-Warp Portal -->
      <div class="service-card reveal">
        <div class="service-card-badge-row">
          <span class="gadget-card-tag door" style="background: rgba(239, 68, 68, 0.15); color: #dc2626; border-color: rgba(239, 68, 68, 0.3);">⏳ Gadget #04 · Zen Time-Warp</span>
        </div>
        <div class="service-icon" style="background: rgba(239, 68, 68, 0.12); border: 1.5px solid #ef4444;">
          <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
            <circle cx="22" cy="22" r="16" fill="#fee2e2" stroke="#ef4444" stroke-width="2.5"/>
            <polyline points="22 12 22 22 28 26" stroke="#dc2626" stroke-width="2.5" stroke-linecap="round"/>
            <polygon points="12,10 14,14 18,14 15,16 16,20 12,18 8,20 9,16 6,14 10,14" fill="#ffd200"/>
          </svg>
        </div>
        <h3>Urgent 6–12h Deadlines</h3>
        <p>Emergency express assistance when submission deadlines are looming. 24/7 dedicated subject specialists mobilize to deliver guaranteed on-time results without compromising quality.</p>
        <a href="https://wa.me/919313118267?text=Urgent%20Panda%20Time-Warp%20Help%20Needed!" target="_blank" class="service-arrow">Activate Time-Warp <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>

      <!-- Service Card 5: Panda's Shield of Originality -->
      <div class="service-card reveal">
        <div class="service-card-badge-row">
          <span class="gadget-card-tag" style="background: rgba(168, 85, 247, 0.15); color: #9333ea; border-color: rgba(168, 85, 247, 0.3);">🛡️ Gadget #05 · Originality Shield</span>
        </div>
        <div class="service-icon" style="background: rgba(168, 85, 247, 0.12); border: 1.5px solid #a855f7;">
          <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
            <path d="M22 6 L34 11 V22 C34 30 22 36 22 36 C22 36 10 30 10 22 V11 Z" fill="#f3e8ff" stroke="#a855f7" stroke-width="2.5"/>
            <polyline points="16 21 20 25 28 17" stroke="#7e22ce" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3>Dissertation &amp; Thesis Mentorship</h3>
        <p>End-to-end Master's &amp; PhD thesis guidance: proposal approval, methodology, statistical data analysis, and chapter drafts backed by official Turnitin &amp; AI similarity reports.</p>
        <a href="index.php?url=contact&service=dissertation" class="service-arrow">Deploy Originality Shield <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>

      <!-- Service Card 6: Smart Data Synthesizer -->
      <div class="service-card reveal">
        <div class="service-card-badge-row">
          <span class="gadget-card-tag yellow" style="background: rgba(245, 158, 11, 0.15); color: #d97706; border-color: rgba(245, 158, 11, 0.3);">📊 Gadget #06 · Data Synthesizer</span>
        </div>
        <div class="service-icon" style="background: rgba(245, 158, 11, 0.12); border: 1.5px solid #f59e0b;">
          <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
            <rect x="6" y="8" width="32" height="28" rx="6" fill="#fef3c7" stroke="#f59e0b" stroke-width="2.5"/>
            <line x1="14" y1="28" x2="14" y2="20" stroke="#d97706" stroke-width="3" stroke-linecap="round"/>
            <line x1="22" y1="28" x2="22" y2="14" stroke="#d97706" stroke-width="3" stroke-linecap="round"/>
            <line x1="30" y1="28" x2="30" y2="17" stroke="#d97706" stroke-width="3" stroke-linecap="round"/>
          </svg>
        </div>
        <h3>Data Analysis &amp; Statistics</h3>
        <p>Advanced statistical modeling in SPSS, R, Python, STATA, and Excel with clear visual dashboards, hypothesis testing, regression analysis, and defense preparation.</p>
        <a href="index.php?url=contact&service=data-analysis" class="service-arrow">Run Data Synthesis <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>
    </div>
  </div>
</section>

<!-- ==============================
     SECTION 5 — SUBJECTS
     ============================== -->
<section class="subjects" id="subjects">
  <div class="container">
    <div class="subjects-header reveal">
      <div class="section-label" style="color: #009fe3;">✨ Global Academic Network</div>
      <h2 class="section-title">Specialist Scholars Across 50+ Subjects</h2>
      <p class="section-desc">From machine learning models to econometric research — Panda &amp; Lyra connect you with top domain scholars and university specialists worldwide.</p>
    </div>

    <!-- GLOBE THEME ORBIT -->
    <div class="subjects-orbit-stage reveal">
      <!-- Concentric Orbital Rings -->
      <div class="orbit-ring orbit-ring-inner"></div>
      <div class="orbit-ring orbit-ring-mid"></div>
      <div class="orbit-ring orbit-ring-outer"></div>

      <!-- Center Rotating Digital Earth Globe -->
      <div class="globe-center-wrapper">
        <div class="digital-earth-sphere">
          <div class="earth-glow-aura"></div>
          <svg class="digital-earth-svg" viewBox="0 0 100 100" fill="none">
            <defs>
              <!-- Deep Space Ocean Sphere -->
              <radialGradient id="spaceOceanGrad" cx="35%" cy="30%" r="70%">
                <stop offset="0%" stop-color="#38bdf8"/>
                <stop offset="35%" stop-color="#0284c7"/>
                <stop offset="70%" stop-color="#0369a1"/>
                <stop offset="100%" stop-color="#082f49"/>
              </radialGradient>

              <!-- Glowing Digital Continent Shader -->
              <linearGradient id="cyberLandGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#86efac"/>
                <stop offset="50%" stop-color="#22c55e"/>
                <stop offset="100%" stop-color="#15803d"/>
              </linearGradient>

              <!-- Specular Spherical Glass Rim -->
              <radialGradient id="sphereRimGrad" cx="50%" cy="50%" r="50%">
                <stop offset="78%" stop-color="transparent"/>
                <stop offset="95%" stop-color="#38bdf8" stop-opacity="0.8"/>
                <stop offset="100%" stop-color="#ffffff" stop-opacity="0.95"/>
              </radialGradient>

              <!-- Perfectly circular sphere clip -->
              <clipPath id="earthRoundClip">
                <circle cx="50" cy="50" r="48"/>
              </clipPath>
            </defs>

            <!-- Base Atmospheric Halo Ring -->
            <circle cx="50" cy="50" r="49" stroke="#38bdf8" stroke-width="1.2" stroke-opacity="0.5" stroke-dasharray="3 3"/>

            <!-- Oceanic Water Surface -->
            <circle cx="50" cy="50" r="48" fill="url(#spaceOceanGrad)"/>

            <!-- Continuously Rotating Continents Texture Layer (Seamless 2-Loop Track) -->
            <g clip-path="url(#earthRoundClip)">
              <g class="rotating-continents-track">
                <!-- Group A (First World Map Instance) -->
                <g fill="url(#cyberLandGrad)" opacity="0.95">
                  <!-- Americas -->
                  <path d="M12 20 C18 18, 22 22, 20 28 C18 34, 15 38, 17 44 C19 50, 24 58, 20 66 C17 72, 11 68, 11 60 C9 52, 7 42, 7 32 C7 24, 9 22, 12 20 Z"/>
                  <!-- Europe & Africa -->
                  <path d="M40 18 C46 16, 56 16, 62 20 C68 24, 72 30, 68 36 C62 42, 54 38, 52 42 C48 46, 50 54, 46 62 C42 68, 36 70, 32 64 C28 58, 32 50, 36 46 C34 40, 30 38, 30 30 C30 22, 34 20, 40 18 Z"/>
                  <!-- Asia & Australia -->
                  <path d="M72 34 C78 32, 86 36, 84 42 C82 48, 76 52, 74 60 C72 66, 66 68, 64 62 C62 56, 68 48, 68 40 Z"/>
                  <circle cx="64" cy="72" r="3.5" fill="#86efac"/>
                  <circle cx="28" cy="74" r="2.8" fill="#86efac"/>
                  <circle cx="56" cy="24" r="2" fill="#86efac"/>
                </g>

                <!-- Group B (Second World Map Instance for Infinite 360 Spin) -->
                <g fill="url(#cyberLandGrad)" opacity="0.95" transform="translate(100, 0)">
                  <!-- Americas -->
                  <path d="M12 20 C18 18, 22 22, 20 28 C18 34, 15 38, 17 44 C19 50, 24 58, 20 66 C17 72, 11 68, 11 60 C9 52, 7 42, 7 32 C7 24, 9 22, 12 20 Z"/>
                  <!-- Europe & Africa -->
                  <path d="M40 18 C46 16, 56 16, 62 20 C68 24, 72 30, 68 36 C62 42, 54 38, 52 42 C48 46, 50 54, 46 62 C42 68, 36 70, 32 64 C28 58, 32 50, 36 46 C34 40, 30 38, 30 30 C30 22, 34 20, 40 18 Z"/>
                  <!-- Asia & Australia -->
                  <path d="M72 34 C78 32, 86 36, 84 42 C82 48, 76 52, 74 60 C72 66, 66 68, 64 62 C62 56, 68 48, 68 40 Z"/>
                  <circle cx="64" cy="72" r="3.5" fill="#86efac"/>
                  <circle cx="28" cy="74" r="2.8" fill="#86efac"/>
                  <circle cx="56" cy="24" r="2" fill="#86efac"/>
                </g>
              </g>
            </g>

            <!-- Digital Holographic Graticule Overlay (Latitude & Longitude) -->
            <g clip-path="url(#earthRoundClip)" stroke="#ffffff" stroke-opacity="0.32" stroke-width="1.1">
              <line x1="2" y1="50" x2="98" y2="50"/>
              <ellipse cx="50" cy="34" rx="44" ry="10" fill="none" stroke-dasharray="2.5 2.5"/>
              <ellipse cx="50" cy="66" rx="44" ry="10" fill="none" stroke-dasharray="2.5 2.5"/>
              <ellipse cx="50" cy="50" rx="18" ry="48" fill="none"/>
              <ellipse cx="50" cy="50" rx="34" ry="48" fill="none" stroke-dasharray="2.5 2.5"/>
              <line x1="50" y1="2" x2="50" y2="98"/>
            </g>

            <!-- Outer Atmosphere Glass Reflection Layer -->
            <circle cx="50" cy="50" r="48" fill="url(#sphereRimGrad)" pointer-events="none"/>
            <ellipse cx="38" cy="30" rx="20" ry="11" fill="#ffffff" opacity="0.25" transform="rotate(-28 38 30)" pointer-events="none"/>

            <!-- Satellite Central Orbit Node Beacon -->
            <circle cx="50" cy="50" r="4.5" fill="#ffffff"/>
            <circle cx="50" cy="50" r="2.2" fill="#0284c7"/>
            <circle cx="50" cy="50" r="8" stroke="#38bdf8" stroke-width="1.5" stroke-opacity="0.8">
              <animate attributeName="r" values="5;14;5" dur="2s" repeatCount="indefinite"/>
              <animate attributeName="stroke-opacity" values="0.9;0;0.9" dur="2s" repeatCount="indefinite"/>
            </circle>
          </svg>
        </div>

        <!-- Outside Floating Badge: GLOBAL HUB (Cleanly Positioned Beneath the Earth) -->
        <div class="globe-outside-pill">
          <div class="outside-pill-title">GLOBAL HUB</div>
          <div class="outside-pill-sub">50+ Subjects</div>
        </div>
      </div>

      <!-- Subject Orbit Nodes -->
      <div class="subject-node sn-cs"><span class="node-dot"></span>Computer Science</div>
      <div class="subject-node sn-it"><span class="node-dot"></span>Information Technology</div>
      <div class="subject-node sn-eng"><span class="node-dot"></span>Engineering</div>
      <div class="subject-node sn-math"><span class="node-dot"></span>Mathematics</div>
      <div class="subject-node sn-bus"><span class="node-dot"></span>Business Management</div>
      <div class="subject-node sn-fin"><span class="node-dot"></span>Finance &amp; Accounts</div>
      <div class="subject-node sn-mkt"><span class="node-dot"></span>Marketing</div>
      <div class="subject-node sn-stat"><span class="node-dot"></span>Statistics</div>
      <div class="subject-node sn-hlth"><span class="node-dot"></span>Healthcare</div>
      <div class="subject-node sn-econ"><span class="node-dot"></span>Economics</div>
      <div class="subject-node sn-ds"><span class="node-dot"></span>Data Science</div>
    </div>
  </div>
</section>


<!-- ==============================
     SECTION 6 — WHY CHOOSE US
     ============================== -->
<section class="why-us" id="guarantees">
  <div class="container">
    <div class="why-header reveal" style="text-align: center;">
      <div class="funky-badge yellow" style="font-size: 0.8rem; padding: 5px 16px; margin: 0 auto 12px; display: inline-block;">
        ✨ PANDA &amp; LYRA'S IRONCLAD PROMISE
      </div>
      <h2 class="section-title" style="margin-top: 10px; font-size: clamp(1.8rem, 3.2vw, 2.5rem);">
        6 Unbeatable Academic Guarantees
      </h2>
      <p class="section-desc" style="margin: 0 auto; max-width: 620px; font-size: 1rem;">
        Every assignment is crafted with military-grade precision, zero plagiarism, and strict adherence to university marking rubrics.
      </p>
    </div>

    <div class="why-grid">
      <!-- Why Card 1: Top 1% Scholars -->
      <div class="why-card reveal">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
          <div class="why-icon" style="background: rgba(0, 194, 255, 0.15); border: 1.5px solid #00c2ff;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00c2ff" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <span class="gadget-card-tag" style="background: rgba(0, 194, 255, 0.15); color: #38bdf8; border: 1px solid rgba(0, 194, 255, 0.35);">Top 1% Scholars</span>
        </div>
        <h3>PhD &amp; Domain Specialists</h3>
        <p>Your work is assigned strictly to verified masters and doctoral scholars with direct degrees in your specific topic.</p>
      </div>

      <!-- Why Card 2: Zen Time-Warp Speed -->
      <div class="why-card reveal">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
          <div class="why-icon" style="background: rgba(239, 68, 68, 0.15); border: 1.5px solid #ef4444;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <span class="gadget-card-tag door" style="background: rgba(239, 68, 68, 0.15); color: #f87171; border: 1px solid rgba(239, 68, 68, 0.35);">⏳ Zen Time-Warp Speed</span>
        </div>
        <h3>Guaranteed Early Delivery</h3>
        <p>Deadlines are sacred. Over 98.7% of all submissions are delivered well ahead of schedule for peaceful student review.</p>
      </div>

      <!-- Why Card 3: Stealth Privacy Shield -->
      <div class="why-card reveal">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
          <div class="why-icon" style="background: rgba(168, 85, 247, 0.15); border: 1.5px solid #a855f7;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#a855f7" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          </div>
          <span class="gadget-card-tag" style="background: rgba(168, 85, 247, 0.15); color: #c084fc; border: 1px solid rgba(168, 85, 247, 0.35);">🛡️ Stealth Privacy Shield</span>
        </div>
        <h3>100% Encrypted &amp; Private</h3>
        <p>Strict non-disclosure policy. Your name, files, and academic institution are completely encrypted, anonymous, and never shared.</p>
      </div>

      <!-- Why Card 4: Turnitin Clean -->
      <div class="why-card reveal">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
          <div class="why-icon" style="background: rgba(16, 185, 129, 0.15); border: 1.5px solid #10b981;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 12 15 16 10"/></svg>
          </div>
          <span class="gadget-card-tag" style="background: rgba(16, 185, 129, 0.15); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.35);">Turnitin Clean</span>
        </div>
        <h3>Zero Plagiarism Guarantee</h3>
        <p>100% human-crafted authentic writing verified against official Turnitin and AI checkers with complete citation logs.</p>
      </div>

      <!-- Why Card 5: 24/7 Live Buddy Support -->
      <div class="why-card reveal">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
          <div class="why-icon" style="background: rgba(245, 158, 11, 0.15); border: 1.5px solid #f59e0b;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <span class="gadget-card-tag bread" style="background: rgba(245, 158, 11, 0.15); color: #fbbf24; border: 1px solid rgba(245, 158, 11, 0.35);">💬 24/7 Live Buddy</span>
        </div>
        <h3>Round-the-Clock Support</h3>
        <p>Direct WhatsApp, email, and live messaging with dedicated academic mentors ready to help across all global timezones.</p>
      </div>

      <!-- Why Card 6: Free Revisions -->
      <div class="why-card reveal">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
          <div class="why-icon" style="background: rgba(56, 189, 248, 0.15); border: 1.5px solid #38bdf8;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
          </div>
          <span class="gadget-card-tag time" style="background: rgba(56, 189, 248, 0.15); color: #38bdf8; border: 1px solid rgba(56, 189, 248, 0.35);">Friendship Promise</span>
        </div>
        <h3>Free Unlimited Revisions</h3>
        <p>Need adjustments after tutor feedback? We provide free iterative revisions until you achieve 100% satisfaction.</p>
      </div>
    </div>
  </div>
</section>
<!-- ==============================
     SECTION 7 — ACHIEVEMENTS
     ============================== -->
<section class="achievements">
  <div class="container">
    <div class="achieve-header reveal">
      <div class="section-label" style="color: #009fe3;">Panda & Lyra's Proven Track Record</div>
      <h2 class="section-title">Academic Milestones That Speak</h2>
      <p class="section-desc">Over a decade of relieving homework anxiety and delivering distinction grades worldwide.</p>
    </div>
    <div class="achieve-grid">
      <div class="achieve-card reveal">
        <div class="achieve-badge" style="background: rgba(0, 194, 255, 0.12); border: 1.5px solid #00c2ff; color: #0284c7;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <div class="achieve-number" data-target="10000" data-suffix="+">0</div>
        <div class="achieve-label">Assignments Delivered With 0% Plagiarism</div>
      </div>
      <div class="achieve-card reveal">
        <div class="achieve-badge" style="background: rgba(245, 158, 11, 0.12); border: 1.5px solid #f59e0b; color: #d97706;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <div class="achieve-number" data-target="5000" data-suffix="+">0</div>
        <div class="achieve-label">Students Relieved From Stress</div>
      </div>
      <div class="achieve-card reveal">
        <div class="achieve-badge" style="background: rgba(34, 197, 94, 0.12); border: 1.5px solid #22c55e; color: #16a34a;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
        </div>
        <div class="achieve-number" data-target="50" data-suffix="+">0</div>
        <div class="achieve-label">Academic Disciplines &amp; Languages</div>
      </div>
      <div class="achieve-card reveal">
        <div class="achieve-badge" style="background: rgba(244, 63, 94, 0.12); border: 1.5px solid #f43f5e; color: #e11d48;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1 4-10z"/></svg>
        </div>
        <div class="achieve-number" data-target="30" data-suffix="+">0</div>
        <div class="achieve-label">Countries &amp; Global Universities</div>
      </div>
    </div>
  </div>
</section>


<!-- ==============================
     SECTION 8 — TESTIMONIALS
     ============================== -->
<section class="testimonials">
  <div class="container">
    <div class="test-header reveal">
      <div class="section-label" style="color: #ffd200;">Verified Student Feedback</div>
      <h2 class="section-title">From Panic to A+ Distinction</h2>
      <p class="section-desc">See how Panda &amp; Lyra helped students across top universities worldwide turn academic stress into A+ grades.</p>
    </div>
  </div>
  <div class="test-carousel">
    <div class="test-track" id="testTrack">
      <div class="test-card">
        <div class="test-stars"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
        <p class="test-text"><span class="gadget-card-tag" style="margin-bottom: 12px; font-size: 0.7rem;">Solved with Star-Byte Code Wand ⭐</span>
        <p class="test-text">"Tristara helped me ace my Machine Learning project. The code was clean, well-documented, and delivered a day early. Absolutely professional service!"</p>
        <div class="test-author"><div class="test-avatar">AK</div><div><div class="test-name">Arun K.</div><div class="test-meta"><span class="test-flag">🇮🇳</span> Computer Science · India</div></div></div>
      </div>
      <div class="test-card">
        <div class="test-stars"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
        <p class="test-text"><span class="gadget-card-tag" style="background: rgba(192, 132, 252, 0.18); color: #c084fc; border-color: rgba(192, 132, 252, 0.35); margin-bottom: 12px; font-size: 0.7rem;">Solved with Infinite Backpack 🎒</span>
        <p class="test-text">"My dissertation was a massive undertaking and Tristara's team guided me through every chapter. The quality of research was outstanding."</p>
        <div class="test-author"><div class="test-avatar">SM</div><div><div class="test-name">Sarah M.</div><div class="test-meta"><span class="test-flag">🇬🇧</span> Business Management · UK</div></div></div>
      </div>
      <div class="test-card">
        <div class="test-stars"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
        <p class="test-text"><span class="gadget-card-tag door" style="margin-bottom: 12px; font-size: 0.7rem;">Solved with Zen Time-Warp Portal ⏳</span>
        <p class="test-text">"Needed urgent help with a Statistics assignment. They delivered in 12 hours with perfect accuracy. Can't recommend enough!"</p>
        <div class="test-author"><div class="test-avatar">JL</div><div><div class="test-name">James L.</div><div class="test-meta"><span class="test-flag">🇦🇺</span> Statistics · Australia</div></div></div>
      </div>
      <div class="test-card">
        <div class="test-stars"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
        <p class="test-text"><span class="gadget-card-tag bread" style="margin-bottom: 12px; font-size: 0.7rem;">Solved with Bamboo Brainstormer 🎋</span>
        <p class="test-text">"The data analysis report exceeded my expectations. Visualizations were on point and the methodology section was flawless."</p>
        <div class="test-author"><div class="test-avatar">FH</div><div><div class="test-name">Fatima H.</div><div class="test-meta"><span class="test-flag">🇦🇪</span> Data Science · UAE</div></div></div>
      </div>
      <div class="test-card">
        <div class="test-stars"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
        <p class="test-text"><span class="gadget-card-tag time" style="margin-bottom: 12px; font-size: 0.7rem;">Solved with Originality Shield 🛡️</span>
        <p class="test-text">"From marketing case studies to financial models — Tristara has been my go-to throughout my MBA. Their team truly understands academic standards."</p>
        <div class="test-author"><div class="test-avatar">CP</div><div><div class="test-name">Carlos P.</div><div class="test-meta"><span class="test-flag">🇨🇦</span> MBA · Canada</div></div></div>
      </div>
      <div class="test-card">
        <div class="test-stars"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
        <p class="test-text"><span class="gadget-card-tag" style="margin-bottom: 12px; font-size: 0.7rem;">Solved with Star-Byte Code Wand ⭐</span>
        <p class="test-text">"Excellent programming help! They built a full React dashboard for my capstone project. The code quality was production-level."</p>
        <div class="test-author"><div class="test-avatar">MO</div><div><div class="test-name">Maria O.</div><div class="test-meta"><span class="test-flag">🇩🇪</span> IT Engineering · Germany</div></div></div>
      </div>
    </div>
  </div>
</section>


<!-- ==============================
     SECTION 9 — CONTACT
     ============================== -->
<section class="contact" id="contact">
  <div class="container">
    <div class="contact-info reveal-left">
      <div class="section-label" style="display: inline-flex; align-items: center; gap: 8px; font-weight: 700; font-size: 0.85rem; letter-spacing: 0.08em; text-transform: uppercase; color: #0284c7; background: rgba(2, 132, 199, 0.08); border: 1.5px solid rgba(2, 132, 199, 0.22); border-radius: 999px; padding: 6px 16px; margin-bottom: 16px;">
        <span style="width: 8px; height: 8px; border-radius: 50%; background: #00c2ff; box-shadow: 0 0 10px #00c2ff;"></span>
        Get Instant Assistance
      </div>
      <h2 style="color: #0b2479 !important; font-size: clamp(2.1rem, 3.8vw, 2.85rem); font-weight: 800; line-height: 1.22; margin-bottom: 18px;">Send Your Task to<br><span class="gradient-text">Panda &amp; Lyra's Academic Team</span></h2>
      <p style="color: #475569 !important; font-size: 1.05rem; line-height: 1.7; margin-bottom: 24px; font-weight: 500;">Upload your assignment brief and deadline. Our academic specialists will review your requirements in under 2 hours with a custom solution and quotation.</p>
      
      <!-- Free Floating Lyra & Panda Image (No enclosed box, no borders) -->
      <div class="contact-illustration free-char-wrap" style="margin: 20px 0 28px; background: transparent !important; border: none !important; box-shadow: none !important; display: flex; justify-content: center; align-items: center;">
        <div style="position: relative; background: transparent !important; border: none !important; box-shadow: none !important; text-align: center; width: 100%; max-width: 520px;">
          <img src="assets/images/how_it_works_stage1.png?v=clean_panda_lyra_v34" alt="Submit Requirements to Panda & Lyra" class="contact-free-img" style="width: 100%; max-width: 500px; max-height: 440px; height: auto; display: block; margin: 0 auto; object-fit: contain; background: transparent !important; border: none !important; box-shadow: none !important; filter: drop-shadow(0 22px 42px rgba(11, 36, 121, 0.16));">
        </div>
      </div>

      <div class="contact-features" style="display: flex; flex-direction: column; gap: 14px; margin-top: 8px;">
        <div class="contact-feature" style="display: flex; align-items: center; gap: 12px; font-size: 1rem; font-weight: 700; color: #0b2479 !important;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; border-radius: 50%; background: rgba(0, 194, 255, 0.12); color: #0284c7; flex-shrink: 0;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width: 16px; height: 16px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </span>
          Response within 2 hours
        </div>
        <div class="contact-feature" style="display: flex; align-items: center; gap: 12px; font-size: 1rem; font-weight: 700; color: #0b2479 !important;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; border-radius: 50%; background: rgba(0, 194, 255, 0.12); color: #0284c7; flex-shrink: 0;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width: 16px; height: 16px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </span>
          Free consultation &amp; quote
        </div>
        <div class="contact-feature" style="display: flex; align-items: center; gap: 12px; font-size: 1rem; font-weight: 700; color: #0b2479 !important;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; border-radius: 50%; background: rgba(0, 194, 255, 0.12); color: #0284c7; flex-shrink: 0;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width: 16px; height: 16px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </span>
          No obligation to proceed
        </div>
      </div>
    </div>
    <div class="contact-form reveal-right" style="background: #ffffff !important; border: 1.5px solid #dce8f8 !important; box-shadow: 0 20px 50px rgba(11, 36, 121, 0.08) !important; border-radius: 24px !important; padding: 40px 36px !important;">
      <form onsubmit="handleSubmit(event)">
        <div class="form-group">
          <label style="color: #0b2479 !important; font-weight: 700 !important; font-size: 0.92rem !important; margin-bottom: 8px !important; display: block;">Full Name *</label>
          <input type="text" name="full_name" placeholder="Enter your full name" required style="background: #f8faff !important; border: 1.5px solid #cbd5e1 !important; color: #0b2479 !important; font-weight: 600 !important; border-radius: 12px !important; padding: 13px 16px !important; width: 100% !important;">
        </div>
        <div class="form-row">
          <div class="form-group">
            <label style="color: #0b2479 !important; font-weight: 700 !important; font-size: 0.92rem !important; margin-bottom: 8px !important; display: block;">Email Address *</label>
            <input type="email" name="email" placeholder="you@university.ac.uk" required style="background: #f8faff !important; border: 1.5px solid #cbd5e1 !important; color: #0b2479 !important; font-weight: 600 !important; border-radius: 12px !important; padding: 13px 16px !important; width: 100% !important;">
          </div>
          <div class="form-group">
            <label style="color: #0b2479 !important; font-weight: 700 !important; font-size: 0.92rem !important; margin-bottom: 8px !important; display: block;">Subject / Discipline *</label>
            <select name="subject" required style="background: #f8faff !important; border: 1.5px solid #cbd5e1 !important; color: #0b2479 !important; font-weight: 600 !important; border-radius: 12px !important; padding: 13px 16px !important; width: 100% !important;">
              <option value="">Select subject</option>
              <option>Computer Science</option>
              <option>Business Management</option>
              <option>Engineering</option>
              <option>Mathematics</option>
              <option>Data Science</option>
              <option>Finance</option>
              <option>Marketing</option>
              <option>Healthcare</option>
              <option>Other</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label style="color: #0b2479 !important; font-weight: 700 !important; font-size: 0.92rem !important; margin-bottom: 8px !important; display: block;">WhatsApp / Phone Number</label>
            <input type="tel" name="phone" placeholder="+91 98765 43210" style="background: #f8faff !important; border: 1.5px solid #cbd5e1 !important; color: #0b2479 !important; font-weight: 600 !important; border-radius: 12px !important; padding: 13px 16px !important; width: 100% !important;">
          </div>
          <div class="form-group">
            <label style="color: #0b2479 !important; font-weight: 700 !important; font-size: 0.92rem !important; margin-bottom: 8px !important; display: block;">Submission Deadline</label>
            <input type="date" name="deadline" style="background: #f8faff !important; border: 1.5px solid #cbd5e1 !important; color: #0b2479 !important; font-weight: 600 !important; border-radius: 12px !important; padding: 13px 16px !important; width: 100% !important;">
          </div>
        </div>
        <div class="form-group">
          <label style="color: #0b2479 !important; font-weight: 700 !important; font-size: 0.92rem !important; margin-bottom: 8px !important; display: block;">Assignment Details &amp; Rubric Instructions *</label>
          <textarea name="instructions" placeholder="Describe your assignment requirements, special instructions, and any reference materials..." required style="background: #f8faff !important; border: 1.5px solid #cbd5e1 !important; color: #0b2479 !important; font-weight: 500 !important; border-radius: 12px !important; padding: 13px 16px !important; width: 100% !important; min-height: 120px;"></textarea>
        </div>
        <button type="submit" class="form-submit" style="background: linear-gradient(135deg, #0b2479 0%, #009fe3 100%) !important; color: #ffffff !important; font-weight: 800 !important; font-size: 1.05rem !important; border-radius: 14px !important; padding: 16px 28px !important; border: none !important; cursor: pointer !important; width: 100% !important; box-shadow: 0 8px 24px rgba(0, 159, 227, 0.35) !important;">Get Assignment Solution Now 🚀 →</button>
      </form>
    </div>
  </div>
</section>


<!-- ==============================
     SECTION 10 — FAQ
     ============================== -->
<section class="faq" id="faq">
  <div class="container">
    <div class="faq-header reveal">
      <div class="section-label" style="color: #009fe3;">Got Questions?</div>
      <h2 class="section-title">Panda &amp; Lyra Academic FAQ</h2>
      <p class="section-desc">Everything you need to know about our gadgets, workflow, security, and pricing.</p>
    </div>
    <div class="faq-list">
      <div class="faq-item reveal">
        <div class="faq-question" onclick="toggleFaq(this)">How does the Tristara assignment process work?<div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div></div>
        <div class="faq-answer"><div class="faq-answer-inner">Simply submit your assignment requirements through our contact form. Our team reviews your request, provides a quote, and once confirmed, our subject-matter experts get to work. You receive the completed assignment before your deadline with full support for revisions.</div></div>
      </div>
      <div class="faq-item reveal">
        <div class="faq-question" onclick="toggleFaq(this)">Which subjects, code languages, and academic levels do you cover?<div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div></div>
        <div class="faq-answer"><div class="faq-answer-inner">We cover 50+ subjects including Computer Science, Engineering, Mathematics, Business Management, Finance, Marketing, Statistics, Healthcare, Economics, Data Science, Information Technology, and many more. If your subject isn't listed, reach out — we likely have an expert for it.</div></div>
      </div>
      <div class="faq-item reveal">
        <div class="faq-question" onclick="toggleFaq(this)">Can you handle emergency 6-to-12 hour deadlines with Zen Time-Warp speed?<div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div></div>
        <div class="faq-answer"><div class="faq-answer-inner">Yes! We handle urgent requests with delivery times as short as 6-12 hours, depending on the complexity and scope of the assignment. Our dedicated team ensures quality isn't compromised regardless of the timeline.</div></div>
      </div>
      <div class="faq-item reveal">
        <div class="faq-question" onclick="toggleFaq(this)">How do I upload my assignment requirements?<div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div></div>
        <div class="faq-answer"><div class="faq-answer-inner">You can submit your requirements through the contact form on this page, or reach out via email. Include your assignment brief, any reference materials, formatting guidelines, and your deadline. Our team will respond within 2 hours.</div></div>
      </div>
      <div class="faq-item reveal">
        <div class="faq-question" onclick="toggleFaq(this)">Is my identity and university submission 100% confidential?<div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div></div>
        <div class="faq-answer"><div class="faq-answer-inner">Absolutely. We maintain strict confidentiality. Your personal information, assignment details, and all communications are encrypted and never shared with third parties. We use secure channels and follow data protection best practices.</div></div>
      </div>
    </div>
  </div>
</section>



<script>
function switchGadget(gadgetId, btnEl) {
  // Update active tab buttons
  document.querySelectorAll('.gadget-tab-btn').forEach(btn => btn.classList.remove('active'));
  btnEl.classList.add('active');

  const gadgetSound = document.getElementById('gadgetSound');
  const gadgetTitle = document.getElementById('gadgetTitle');
  const gadgetDesc = document.getElementById('gadgetDesc');
  const gadgetFeatures = document.getElementById('gadgetFeatures');
  const gadgetVisual = document.getElementById('gadgetVisual');

  const data = {
    'bamboo-brainstormer': {
      sound: 'SWOOSH! 🎋 INSTANT CONCEPT CLARITY',
      title: 'Bamboo AI Brainstormer',
      desc: 'Stuck on where to start your assignment? Panda taps his magical bamboo wand to generate creative project outlines, breakthrough thesis statements, and comprehensive research structures in seconds.',
      f1: 'Instant Topic Breakdown & Outlines',
      f2: 'Cross-Disciplinary Ideation & Thesis Formulation',
      f3: '100% Custom Research Trajectory',
      svg: `<svg width="150" height="170" viewBox="0 0 150 170" fill="none"><rect x="68" y="25" width="14" height="120" rx="7" fill="#16a34a" stroke="#14532d" stroke-width="2.5"/><line x1="68" y1="55" x2="82" y2="55" stroke="#86efac" stroke-width="2"/><line x1="68" y1="90" x2="82" y2="90" stroke="#86efac" stroke-width="2"/><line x1="68" y1="120" x2="82" y2="120" stroke="#86efac" stroke-width="2"/><path d="M80 50 C110 35, 125 55, 120 70 C105 70, 90 60, 80 50 Z" fill="#22c55e" stroke="#14532d" stroke-width="1.5"/><path d="M70 85 C40 70, 25 90, 30 105 C45 105, 60 95, 70 85 Z" fill="#4ade80" stroke="#14532d" stroke-width="1.5"/><polygon points="75,8 79,18 90,20 82,27 84,38 75,32 66,38 68,27 60,20 71,18" fill="#ffd200" stroke="#b45309" stroke-width="1.5"/><circle cx="75" cy="23" r="5" fill="#ffffff" opacity="0.8"/></svg>`
    },
    'infinite-backpack': {
      sound: 'POOF! 🎒 10M+ PEER-REVIEWED SOURCES',
      title: 'Infinite Academic Backpack',
      desc: 'Need peer-reviewed journals, verified citations, or complex datasets? Panda reaches into his infinite blue backpack and pulls out IEEE, JSTOR, and Google Scholar verified sources formatted in APA, Harvard, MLA, or IEEE.',
      f1: '10M+ Peer-Reviewed Journals & Papers',
      f2: 'Auto-Formatted Citations & Bibliographies',
      f3: 'Zero Broken References or Paywalls',
      svg: `<svg width="150" height="160" viewBox="0 0 150 160" fill="none"><rect x="35" y="35" width="80" height="95" rx="20" fill="#1d68ff" stroke="#0b2479" stroke-width="3.5"/><rect x="45" y="65" width="60" height="50" rx="10" fill="#38bdf8" stroke="#0284c7" stroke-width="2"/><ellipse cx="75" cy="35" rx="30" ry="12" fill="#0284c7"/><path d="M50 35 C50 18, 100 18, 100 35" stroke="#ffd200" stroke-width="4" fill="none"/><polygon points="75,80 77,86 84,87 79,91 80,98 75,94 70,98 71,91 66,87 73,86" fill="#ffd200"/></svg>`
    },
    'star-debugger': {
      sound: 'BEEP-BOOP! ⭐ 100% BUG-FREE RUNTIME',
      title: 'Star-Byte Code Wand',
      desc: 'Got Python, Java, C++, React, or SQL bugs keeping you up at night? Panda waves his glowing star wand over your code repository to fix syntax errors, optimize algorithmic efficiency, and generate full unit test suites.',
      f1: 'Full Working Code & README Documentation',
      f2: 'Unit Tests & Algorithmic Debugging Proof',
      f3: 'Live Zoom Code Walkthroughs Available',
      svg: `<svg width="150" height="150" viewBox="0 0 150 150" fill="none"><rect x="20" y="25" width="110" height="85" rx="10" fill="#0c1f3d" stroke="#38bdf8" stroke-width="3"/><rect x="30" y="38" width="45" height="5" rx="2.5" fill="#38bdf8"/><rect x="30" y="50" width="70" height="5" rx="2.5" fill="#22c55e"/><rect x="30" y="62" width="55" height="5" rx="2.5" fill="#ffd200"/><rect x="10" y="110" width="130" height="12" rx="4" fill="#1e293b" stroke="#334155" stroke-width="1.5"/><polygon points="105,42 108,50 117,51 110,57 112,65 105,61 98,65 100,57 93,51 102,50" fill="#ffd200"/><text x="75" y="92" font-family="monospace" font-size="11" font-weight="bold" fill="#22c55e" text-anchor="middle">BUILD: SUCCESS 100%</text></svg>`
    },
    'zen-timewarp': {
      sound: 'WARP SPEED! ⏳ 6-HOUR EMERGENCY DELIVERY',
      title: 'Zen Time-Warp Portal',
      desc: 'Facing an impossible 6-hour or 12-hour midnight deadline? Panda opens a temporal study portal where expert tutors and speed-engines work concurrently, delivering your complete assignment right into your inbox on time.',
      f1: 'Express 6-Hour Emergency Turnaround',
      f2: '100% On-Time Delivery Guarantee',
      f3: 'Real-Time Live Milestone Tracking',
      svg: `<svg width="150" height="150" viewBox="0 0 150 150" fill="none"><circle cx="75" cy="75" r="58" fill="#071528" stroke="#38bdf8" stroke-width="3.5"/><circle cx="75" cy="75" r="46" stroke="#ffd200" stroke-width="2" stroke-dasharray="5 5"/><line x1="75" y1="75" x2="75" y2="42" stroke="#ff3344" stroke-width="3.5" stroke-linecap="round"/><line x1="75" y1="75" x2="102" y2="75" stroke="#38bdf8" stroke-width="3.5" stroke-linecap="round"/><circle cx="75" cy="75" r="6" fill="#ffffff"/></svg>`
    },
    'turnitin-shield': {
      sound: 'SECURED! 🛡️ 100% PLAGIARISM-FREE',
      title: "Panda's Shield of Originality",
      desc: 'Worried about similarity indices or AI-detector flags? Panda wraps your assignment in an impenetrable proofreading armor, verifying every sentence with official Turnitin similarity reports and human editorial polish.',
      f1: '100% Human-Crafted, Authentic Academic Writing',
      f2: 'Free Official Turnitin & AI-Detection Report',
      f3: 'Unlimited Post-Delivery Revisions Included',
      svg: `<svg width="150" height="160" viewBox="0 0 150 160" fill="none"><path d="M75 15 L125 35 V85 C125 120 75 145 75 145 C75 145 25 120 25 85 V35 Z" fill="#1d68ff" stroke="#38bdf8" stroke-width="3.5"/><path d="M75 28 L113 45 V85 C113 112 75 132 75 132 C75 132 37 112 37 85 V45 Z" fill="#0c1f3d"/><path d="M55 82 L70 97 L98 62" stroke="#22c55e" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/></svg>`
    }
  };

  const g = data[gadgetId];
  if (!g) return;

  const box = document.getElementById('gadgetShowcase');
  box.style.opacity = '0.5';
  box.style.transform = 'translateY(6px)';

  setTimeout(() => {
    gadgetSound.innerText = g.sound;
    gadgetTitle.innerText = g.title;
    gadgetDesc.innerText = g.desc;
    gadgetVisual.innerHTML = g.svg;
    gadgetFeatures.innerHTML = `
      <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <span class="step-feature-text">${g.f1}</span></div>
      <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <span class="step-feature-text">${g.f2}</span></div>
      <div class="step-feature"><svg viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <span class="step-feature-text">${g.f3}</span></div>
    `;
    box.style.opacity = '1';
    box.style.transform = 'translateY(0)';
  }, 200);
}</script>

<?php
require_once __DIR__ . '/../layouts/footer.php';
?>

