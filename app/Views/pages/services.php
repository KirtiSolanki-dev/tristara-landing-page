<?php
$pageTitle = 'Academic Services & Solutions — Tristara IT Solutions';
$currentPage = 'services';
require_once __DIR__ . '/../layouts/header.php';
?>

<!-- HERO HEADER -->
<section style="padding: 160px 0 70px; background: radial-gradient(circle at 50% 10%, rgba(0, 194, 255, 0.12) 0%, transparent 70%), var(--bg-dark); text-align: center; border-bottom: 1px solid var(--border-dark);">
  <div class="container">
    <div class="hero-badge" style="margin-bottom: 16px;">
      <span>●</span> 100% Original, Plagiarism-Free Academic Writing &amp; Tech Help
    </div>
    <h1 style="font-size: clamp(2.4rem, 4.5vw, 3.4rem); font-weight: 800; color: #ffffff; margin-bottom: 20px; line-height: 1.2;">
      Specialized Academic &amp; <span class="gradient-text">Software Assistance</span>
    </h1>
    <p class="section-desc" style="margin: 0 auto; max-width: 720px; font-size: 1.15rem; color: #94a3b8;">
      From urgent assignment deadlines and empirical dissertations to complex programming projects, cloud deployments, and statistical modeling. Grounded in research rigor with zero AI hallucinations.
    </p>
  </div>
</section>

<!-- SERVICES ACCORDION / DETAILED JOURNEY -->
<section style="padding: 100px 0 120px; background: var(--bg-dark);">
  <div class="container" style="display: flex; flex-direction: column; gap: 80px;">

    <!-- Service Row 1: Assignment Assistance (DARK THEME) -->
    <div style="display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 70px; align-items: center; background: var(--card-dark); border: 1px solid var(--border-dark); border-radius: 28px; padding: 56px;" class="step-row service-card">
      <div class="reveal-left">
        <div class="step-number" style="background: linear-gradient(135deg, #00C2FF, #2563EB);">01</div>
        <h2 style="font-size: 2.1rem; font-weight: 700; color: #ffffff; margin-bottom: 16px;">Assignment &amp; Coursework Assistance</h2>
        <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8; margin-bottom: 24px;">
          Comprehensive support for university essays, case study analyses, critical evaluations, term papers, and modular coursework. Every submission is tailored strictly to your course rubric, word-count metrics, and formatting style (APA 7th, Harvard, IEEE, MLA, Chicago).
        </p>
        <div class="service-feature-box" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 22px; margin-bottom: 28px;">
          <h4 style="font-size: 0.95rem; font-weight: 700; color: #ffffff; margin-bottom: 14px; display: flex; align-items: center; gap: 8px;">
            <svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            What You Receive:
          </h4>
          <ul class="service-checklist" style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; font-size: 0.92rem; color: #cbd5e1;">
            <li>✓ Complete Turnitin similarity report</li>
            <li>✓ Free bibliography &amp; reference list</li>
            <li>✓ Unlimited revisions within 14 days</li>
            <li>✓ Direct chat with assigned subject mentor</li>
          </ul>
        </div>
        <a href="index.php?url=contact&service=assignments" class="btn-primary">Book Assignment Helper →</a>
      </div>
      
      <!-- Right Side Creative Figure: Assignment & Turnitin Verification Desk -->
      <div class="reveal-right" style="text-align: center;">
        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(0, 194, 255, 0.2); border-radius: 28px; padding: 36px 30px; box-shadow: 0 20px 60px rgba(0,0,0,0.5);">
          <svg viewBox="0 0 380 260" fill="none" style="width: 100%; max-width: 340px; height: auto; margin-bottom: 20px;">
            <!-- Glow background -->
            <circle cx="190" cy="130" r="100" fill="#00C2FF" opacity="0.06"/>
            <!-- Clipboard / Paper Sheet -->
            <rect x="90" y="30" width="200" height="200" rx="14" fill="#1e293b" stroke="#334155" stroke-width="2"/>
            <rect x="150" y="20" width="80" height="20" rx="6" fill="#38bdf8" opacity="0.8"/>
            <circle cx="190" cy="30" r="5" fill="#0f172a"/>
            
            <!-- Document lines -->
            <rect x="120" y="65" width="140" height="8" rx="4" fill="#38bdf8" opacity="0.7"/>
            <rect x="120" y="85" width="120" height="6" rx="3" fill="#64748b"/>
            <rect x="120" y="100" width="135" height="6" rx="3" fill="#64748b"/>
            <rect x="120" y="115" width="90" height="6" rx="3" fill="#64748b"/>
            
            <!-- Turnitin Plagiarism Badge (0% AI Checked) -->
            <g transform="translate(103, 138)">
              <rect x="0" y="0" width="174" height="68" rx="12" fill="#0f172a" stroke="#22c55e" stroke-width="1.8"/>
              <circle cx="26" cy="34" r="14" fill="rgba(34, 197, 94, 0.15)"/>
              <path d="M21 34l3.5 3.5 7-7" stroke="#22c55e" stroke-width="2.2" stroke-linecap="round"/>
              <text x="48" y="30" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" font-size="11" fill="#22c55e">TURNITIN VERIFIED</text>
              <text x="48" y="47" font-family="'Plus Jakarta Sans', sans-serif" font-size="9.5" fill="#94a3b8">0% AI &middot; 100% Original</text>
            </g>
            
            <!-- Floating Rubric Grade Pill -->
            <g transform="translate(260, 45)">
              <rect x="0" y="0" width="70" height="32" rx="16" fill="#2563EB" filter="drop-shadow(0 4px 10px rgba(37,99,235,0.4))"/>
              <text x="35" y="21" font-family="'Poppins', sans-serif" font-weight="800" font-size="14" fill="#ffffff" text-anchor="middle">A+ 1st</text>
            </g>
          </svg>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Human-Authored &amp; Rubric-Aligned</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0 auto; max-width: 300px;">
            Written line-by-line by verified Master’s and Ph.D. scholars with authentic peer-reviewed bibliography.
          </p>
        </div>
      </div>
    </div>

    <!-- Service Row 2: Programming Projects & Computer Science (LIGHT THEME) -->
    <div style="display: grid; grid-template-columns: 0.9fr 1.1fr; gap: 70px; align-items: center; background: #ffffff; padding: 56px; border-radius: 28px; border: 1.5px solid #e2e8f0; box-shadow: 0 12px 40px rgba(15, 23, 42, 0.05);" class="step-row reverse service-card service-card-light">
      <!-- Left Side Creative Figure: Code Terminal & Architecture Diagram -->
      <div class="reveal-left" style="text-align: center;">
        <div style="background: #f8faff; color: #0f172a; border: 1.5px solid #dbeafe; border-radius: 24px; padding: 36px 30px; box-shadow: 0 12px 35px rgba(37, 99, 235, 0.08);">
          <!-- Interactive Terminal / IDE Figure -->
          <div style="font-family: 'JetBrains Mono', monospace; text-align: left; background: #0f172a; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(15,23,42,0.25); border: 1px solid rgba(255,255,255,0.1); margin-bottom: 24px;">
            <!-- Window header -->
            <div style="background: #1e293b; padding: 10px 16px; display: flex; align-items: center; justify-content: space-between;">
              <div style="display: flex; gap: 6px;">
                <span style="width: 10px; height: 10px; border-radius: 50%; background: #ef4444; display: inline-block;"></span>
                <span style="width: 10px; height: 10px; border-radius: 50%; background: #eab308; display: inline-block;"></span>
                <span style="width: 10px; height: 10px; border-radius: 50%; background: #22c55e; display: inline-block;"></span>
              </div>
              <span style="color: #94a3b8; font-size: 0.75rem;">solution.py &mdash; Tristara IDE</span>
              <span style="color: #38bdf8; font-size: 0.75rem; font-weight: 600;">PASS (100%)</span>
            </div>
            <!-- Code content -->
            <div style="padding: 18px 20px; font-size: 0.85rem; line-height: 1.7; color: #38bdf8;">
              <span style="color: #94a3b8;"># Clean, Documented &amp; Executable Code</span><br>
              <span style="color: #c084fc;">import</span> torch, fastapi, docker<br><br>
              <span style="color: #c084fc;">def</span> <span style="color: #60a5fa;">run_pipeline</span>(input_data):<br>
              &nbsp;&nbsp;model = build_architecture(input_data)<br>
              &nbsp;&nbsp;<span style="color: #f59e0b;">return</span> {<br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #34d399;">"status"</span>: <span style="color: #34d399;">"success"</span>, <span style="color: #34d399;">"tests"</span>: <span style="color: #34d399;">"14/14 passed"</span><br>
              &nbsp;&nbsp;}
            </div>
          </div>
          <div style="display: inline-block; padding: 4px 14px; background: rgba(37, 99, 235, 0.1); color: #2563EB; border-radius: 100px; font-size: 0.8rem; font-weight: 700; margin-bottom: 8px;">
            ENTERPRISE DEVELOPER BACKED
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Git Commits + Video Walkthrough</h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin: 0 auto; max-width: 300px;">
            Includes step-by-step setup instructions, full README, dependencies, and presentation viva coaching.
          </p>
        </div>
      </div>

      <div class="reveal-right">
        <div class="step-number" style="background: linear-gradient(135deg, #2563EB, #1E40AF);">02</div>
        <h2 style="font-size: 2.1rem; font-weight: 700; color: #0f172a; margin-bottom: 16px;">Programming Tasks &amp; Capstone Development</h2>
        <p style="color: #475569; font-size: 1.05rem; line-height: 1.8; margin-bottom: 24px;">
          Full technical mentorship and project builds across Python (Django/Flask, Machine Learning, Data Science), Java (Spring Boot), C/C++, PHP/Laravel, JavaScript/React, Mobile Apps (Flutter, React Native), and Database Architecture.
        </p>
        <div class="service-feature-box" style="background: #f8faff; border: 1.5px solid #dbeafe; border-radius: 16px; padding: 22px; margin-bottom: 28px;">
          <h4 style="font-size: 0.95rem; font-weight: 700; color: #0f172a; margin-bottom: 14px; display: flex; align-items: center; gap: 8px;">
            <svg width="18" height="18" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
            Includes In Every Tech Project:
          </h4>
          <ul class="service-checklist" style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; font-size: 0.92rem; color: #334155;">
            <li>✓ Clean, documented source code</li>
            <li>✓ Step-by-step setup guide &amp; README</li>
            <li>✓ Video walkthrough / Demo recording</li>
            <li>✓ Viva / Presentation prep guidance</li>
          </ul>
        </div>
        <a href="index.php?url=contact&service=programming" class="btn-primary">Request Project Support →</a>
      </div>
    </div>

    <!-- Service Row 3: Thesis & Dissertation Support (DARK THEME) -->
    <div style="display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 70px; align-items: center; background: var(--card-dark); border: 1px solid var(--border-dark); border-radius: 28px; padding: 56px;" class="step-row service-card">
      <div class="reveal-left">
        <div class="step-number" style="background: linear-gradient(135deg, #00C2FF, #2563EB);">03</div>
        <h2 style="font-size: 2.1rem; font-weight: 700; color: #ffffff; margin-bottom: 16px;">Thesis &amp; Dissertation Mentorship</h2>
        <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.8; margin-bottom: 24px;">
          Navigating an undergraduate, Master’s, or Ph.D. dissertation requires systematic structure. We support every stage: Proposal Defense, Literature Review Synthesis, Methodology Formulation, Quantitative/Qualitative Analysis, and Discussion of Results.
        </p>
        <div class="service-feature-box" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 22px; margin-bottom: 28px;">
          <h4 style="font-size: 0.95rem; font-weight: 700; color: #ffffff; margin-bottom: 14px; display: flex; align-items: center; gap: 8px;">
            <svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
            Key Capabilities:
          </h4>
          <ul class="service-checklist" style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; font-size: 0.92rem; color: #cbd5e1;">
            <li>✓ Chapter-by-chapter milestone delivery</li>
            <li>✓ Peer-reviewed citations (Scopus / IEEE / Web of Science)</li>
            <li>✓ Comprehensive proofreading &amp; native English editing</li>
            <li>✓ Formatted to university handbook specifications</li>
          </ul>
        </div>
        <a href="index.php?url=contact&service=thesis" class="btn-primary">Consult Dissertation Specialist →</a>
      </div>

      <!-- Right Side Creative Figure: Graduation Cap & Thesis Stack Illustration -->
      <div class="reveal-right" style="text-align: center;">
        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(0, 194, 255, 0.2); border-radius: 28px; padding: 36px 30px; box-shadow: 0 20px 60px rgba(0,0,0,0.5);">
          <svg viewBox="0 0 380 260" fill="none" style="width: 100%; max-width: 340px; height: auto; margin-bottom: 20px;">
            <!-- Glow circle -->
            <circle cx="190" cy="130" r="100" fill="#7B61FF" opacity="0.1"/>
            
            <!-- Book 1 (Bottom) -->
            <rect x="90" y="170" width="200" height="32" rx="6" fill="#1e293b" stroke="#334155" stroke-width="2"/>
            <rect x="100" y="178" width="180" height="6" rx="3" fill="#64748b" opacity="0.6"/>
            <!-- Book 2 (Middle) -->
            <rect x="105" y="134" width="170" height="30" rx="6" fill="#2563EB" opacity="0.8"/>
            <rect x="120" y="144" width="140" height="6" rx="3" fill="#ffffff" opacity="0.4"/>
            <!-- Book 3 (Top) -->
            <rect x="120" y="100" width="140" height="28" rx="6" fill="#7B61FF"/>
            <text x="190" y="119" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="11" fill="#ffffff" text-anchor="middle">MASTER'S THESIS</text>

            <!-- Graduation Cap on Top -->
            <polygon points="190,40 130,62 190,84 250,62" fill="#38bdf8"/>
            <polygon points="190,46 145,62 190,78 235,62" fill="#0284c7"/>
            <rect x="187" y="32" width="6" height="12" fill="#38bdf8"/>
            <circle cx="190" cy="30" r="4" fill="#facc15"/>
            <!-- Tassel -->
            <path d="M250 62 C 255 75, 260 85, 256 96" stroke="#facc15" stroke-width="2.5" stroke-linecap="round"/>
            <circle cx="256" cy="98" r="3.5" fill="#facc15"/>

            <!-- Floating Distinction Seal -->
            <g transform="translate(45, 65)">
              <circle cx="28" cy="28" r="26" fill="#0f172a" stroke="#facc15" stroke-width="2"/>
              <circle cx="28" cy="28" r="22" fill="rgba(250, 204, 21, 0.15)"/>
              <text x="28" y="27" font-family="'Poppins', sans-serif" font-weight="800" font-size="10" fill="#facc15" text-anchor="middle">TOP 1%</text>
              <text x="28" y="38" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="8" fill="#e2e8f0" text-anchor="middle">DISTINCTION</text>
            </g>
          </svg>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">10,000+ Theses Successfully Defended</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0 auto; max-width: 300px;">
            Guiding scholars across Russell Group, Ivy League, and Group of Eight universities to first-class distinction degrees.
          </p>
        </div>
      </div>
    </div>

    <!-- Service Row 4: Data Analysis, SPSS & Statistics (LIGHT THEME) -->
    <div style="display: grid; grid-template-columns: 0.9fr 1.1fr; gap: 70px; align-items: center; background: #ffffff; padding: 56px; border-radius: 28px; border: 1.5px solid #e2e8f0; box-shadow: 0 12px 40px rgba(15, 23, 42, 0.05);" class="step-row reverse service-card service-card-light">
      <!-- Left Side Creative Figure: Statistical Bell Curve & Chart Dashboard -->
      <div class="reveal-left" style="text-align: center;">
        <div style="background: #f8faff; border: 1.5px solid #dbeafe; border-radius: 24px; padding: 36px 30px; box-shadow: 0 12px 35px rgba(37, 99, 235, 0.08);">
          <svg viewBox="0 0 380 240" fill="none" style="width: 100%; max-width: 340px; height: auto; margin-bottom: 20px;">
            <!-- Subtle chart grid -->
            <rect x="40" y="30" width="300" height="170" rx="12" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
            <line x1="40" y1="75" x2="340" y2="75" stroke="#f1f5f9" stroke-width="1"/>
            <line x1="40" y1="120" x2="340" y2="120" stroke="#f1f5f9" stroke-width="1"/>
            <line x1="40" y1="165" x2="340" y2="165" stroke="#f1f5f9" stroke-width="1"/>
            
            <!-- Statistical Normal Distribution Bell Curve -->
            <path d="M60 170 C 110 170, 140 60, 190 60 C 240 60, 270 170, 320 170" stroke="#2563EB" stroke-width="3" fill="url(#blueGradientCurve)" fill-opacity="0.15" stroke-linecap="round"/>
            <defs>
              <linearGradient id="blueGradientCurve" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#2563EB" stop-opacity="0.3"/>
                <stop offset="100%" stop-color="#2563EB" stop-opacity="0"/>
              </linearGradient>
            </defs>
            
            <!-- Standard Deviation Markers -->
            <line x1="190" y1="60" x2="190" y2="170" stroke="#2563EB" stroke-width="1.5" stroke-dasharray="4 4"/>
            <line x1="150" y1="110" x2="150" y2="170" stroke="#94a3b8" stroke-width="1.5" stroke-dasharray="3 3"/>
            <line x1="230" y1="110" x2="230" y2="170" stroke="#94a3b8" stroke-width="1.5" stroke-dasharray="3 3"/>
            
            <!-- Data Point Badges -->
            <circle cx="190" cy="60" r="5" fill="#2563EB"/>
            <circle cx="150" cy="110" r="4" fill="#38bdf8"/>
            <circle cx="230" cy="110" r="4" fill="#38bdf8"/>
            
            <!-- Significance Badge -->
            <g transform="translate(60, 45)">
              <rect x="0" y="0" width="90" height="26" rx="13" fill="#eff6ff" stroke="#bfdbfe" stroke-width="1"/>
              <text x="45" y="17" font-family="'JetBrains Mono', monospace" font-size="11" font-weight="700" fill="#2563EB" text-anchor="middle">p &lt; 0.001 ***</text>
            </g>
            <g transform="translate(230, 45)">
              <rect x="0" y="0" width="85" height="26" rx="13" fill="#f0fdf4" stroke="#bbf7d0" stroke-width="1"/>
              <text x="42" y="17" font-family="'JetBrains Mono', monospace" font-size="11" font-weight="700" fill="#16a34a" text-anchor="middle">R&sup2; = 0.892</text>
            </g>
          </svg>
          <div style="display: inline-block; padding: 4px 14px; background: rgba(37, 99, 235, 0.1); color: #2563EB; border-radius: 100px; font-size: 0.8rem; font-weight: 700; margin-bottom: 8px;">
            EMPIRICAL RIGOR
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #0f172a; margin-bottom: 6px;">SPSS · R · SmartPLS · NVivo</h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin: 0 auto; max-width: 300px;">
            Hypothesis testing, regression, ANOVA, and APA 7th formatted tables ready for submission.
          </p>
        </div>
      </div>

      <div class="reveal-right">
        <div class="step-number" style="background: linear-gradient(135deg, #2563EB, #1E40AF);">04</div>
        <h2 style="font-size: 2.1rem; font-weight: 700; color: #0f172a; margin-bottom: 16px;">Statistical Analysis &amp; Empirical Research</h2>
        <p style="color: #475569; font-size: 1.05rem; line-height: 1.8; margin-bottom: 24px;">
          Transform raw datasets into actionable academic findings. Our statisticians work seamlessly with SPSS, R Studio, Python Pandas, STATA, NVivo (qualitative coding), and Excel PowerQuery.
        </p>
        <div class="service-feature-box" style="background: #f8faff; border: 1.5px solid #dbeafe; border-radius: 16px; padding: 22px; margin-bottom: 28px;">
          <h4 style="font-size: 0.95rem; font-weight: 700; color: #0f172a; margin-bottom: 14px; display: flex; align-items: center; gap: 8px;">
            <svg width="18" height="18" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
            Deliverables:
          </h4>
          <ul class="service-checklist" style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; font-size: 0.92rem; color: #334155;">
            <li>✓ Formatted statistical tables (APA style)</li>
            <li>✓ Raw syntax files (.sps, .R, .py)</li>
            <li>✓ Descriptive &amp; inferential commentary</li>
            <li>✓ Executive summary of key findings</li>
          </ul>
        </div>
        <a href="index.php?url=contact&service=data" class="btn-primary">Get Data Analyzed →</a>
      </div>
    </div>

  </div>
</section>

<!-- COMPARISON TABLE: TRISTARA VS OTHER SITES (LIGHT THEME) -->
<section style="padding: 100px 0 110px; background: #ffffff; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px;" class="reveal">
      <div class="section-label" style="color: #2563EB;">Enterprise Standards vs Generic Alternatives</div>
      <h2 style="font-size: clamp(2rem, 3.8vw, 2.6rem); font-weight: 800; color: #0f172a; margin-bottom: 16px;">The Tristara Quality Benchmark</h2>
      <p style="color: #475569; font-size: 1.05rem; margin: 0 auto; max-width: 640px; line-height: 1.7;">
        See how our corporate-grade engineering background and verified academic mentorship outperform anonymous essay mills.
      </p>
    </div>

    <div class="table-scroll-hint" style="display: none; text-align: center; font-size: 0.82rem; color: #2563EB; font-weight: 700; margin-bottom: 14px; background: rgba(37,99,235,0.08); padding: 8px 16px; border-radius: 20px; border: 1px dashed rgba(37,99,235,0.3);">
      ⟵ Swipe horizontally to view full comparison table ⟶
    </div>
    <div class="comparison-table-wrapper" style="background: #f8faff; border: 1.5px solid #dbeafe; border-radius: 24px; padding: 36px; box-shadow: 0 12px 35px rgba(37, 99, 235, 0.06); overflow-x: auto; -webkit-overflow-scrolling: touch;">
      <table style="width: 100%; border-collapse: collapse; min-width: 650px; text-align: left;">
        <thead>
          <tr style="border-bottom: 2px solid #e2e8f0;">
            <th style="padding: 18px 22px; font-size: 1.05rem; color: #2563EB; font-weight: 800;">Feature / Metric</th>
            <th style="padding: 18px 22px; font-size: 1.05rem; color: #2563EB; font-weight: 800;">
              <span style="display: inline-flex; align-items: center; gap: 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                Tristara IT Solutions
              </span>
            </th>
            <th style="padding: 18px 22px; font-size: 1.05rem; color: #2563EB; font-weight: 800;">Generic Freelancer Sites</th>
          </tr>
        </thead>
        <tbody>
          <tr style="border-bottom: 1px solid #e2e8f0;">
            <td style="padding: 18px 22px; color: #1e293b; font-weight: 600;">Technical Coding &amp; Architecture</td>
            <td style="padding: 18px 22px; color: #15803d; font-weight: 700;">Enterprise Developers (Git, Docker, CI/CD, README)</td>
            <td style="padding: 18px 22px; color: #ef4444;">Basic snippets, syntax errors, or copy-pasted code</td>
          </tr>
          <tr style="border-bottom: 1px solid #e2e8f0;">
            <td style="padding: 18px 22px; color: #1e293b; font-weight: 600;">AI Policy &amp; Detection</td>
            <td style="padding: 18px 22px; color: #15803d; font-weight: 700;">0% AI guaranteed with official Turnitin similarity report</td>
            <td style="padding: 18px 22px; color: #ef4444;">Heavy ChatGPT reliance with fake references</td>
          </tr>
          <tr style="border-bottom: 1px solid #e2e8f0;">
            <td style="padding: 18px 22px; color: #1e293b; font-weight: 600;">Urgent Turnaround</td>
            <td style="padding: 18px 22px; color: #15803d; font-weight: 700;">Express 6 &ndash; 12 hours delivery window</td>
            <td style="padding: 18px 22px; color: #ef4444;">Frequent delays and missed deadlines</td>
          </tr>
          <tr style="border-bottom: 1px solid #e2e8f0;">
            <td style="padding: 18px 22px; color: #1e293b; font-weight: 600;">Client Privacy &amp; NDA</td>
            <td style="padding: 18px 22px; color: #15803d; font-weight: 700;">Corporate NDA, end-to-end encrypted file vault</td>
            <td style="padding: 18px 22px; color: #ef4444;">Files frequently shared or indexed publicly</td>
          </tr>
          <tr>
            <td style="padding: 18px 22px; color: #1e293b; font-weight: 600;">Revisions &amp; Support</td>
            <td style="padding: 18px 22px; color: #15803d; font-weight: 700;">Free unlimited revisions until tutor approval</td>
            <td style="padding: 18px 22px; color: #ef4444;">Charges extra for each minor correction</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- CALL TO ACTION -->
<section style="padding: 90px 0; background: radial-gradient(circle at 50% 50%, rgba(0, 194, 255, 0.15) 0%, transparent 70%), var(--bg-dark2); border-top: 1px solid var(--border-dark); color: #fff; text-align: center;">
  <div class="container">
    <div class="section-label">Get Started Today</div>
    <h2 style="font-size: clamp(2.2rem, 4vw, 2.8rem); font-weight: 800; color: #ffffff; margin-bottom: 16px;">Ready to Elevate Your Academic Scores?</h2>
    <p style="font-size: 1.1rem; color: #94a3b8; max-width: 600px; margin: 0 auto 32px;">
      Upload your task rubric or project prompt now. Get an immediate quote and connect with an expert today.
    </p>
    <a href="index.php?url=contact" class="btn-primary" style="font-weight: 700; padding: 15px 36px; font-size: 1.05rem;">Submit Your Assignment Requirements →</a>
  </div>
</section>

<?php
require_once __DIR__ . '/../layouts/footer.php';
?>

