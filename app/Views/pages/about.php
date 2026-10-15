<?php
$pageTitle = 'About Us — Tristara IT Solutions | Craft Your Digital Future';
$currentPage = 'about';
require_once __DIR__ . '/../layouts/header.php';
?>

<!-- PAGE HEADER -->
<section style="padding: 160px 0 70px; background: radial-gradient(circle at 50% 10%, rgba(0, 194, 255, 0.12) 0%, transparent 70%), var(--bg-dark); text-align: center; border-bottom: 1px solid var(--border-dark);">
  <div class="container">
    <div class="section-label">Empowering Minds Worldwide</div>
    <h1 style="font-size: clamp(2.4rem, 4.5vw, 3.4rem); font-weight: 800; color: #ffffff; margin-bottom: 20px;">
      About <span class="gradient-text">Tristara IT Solutions</span>
    </h1>
    <p class="section-desc" style="margin: 0 auto; max-width: 720px; font-size: 1.15rem; color: #94a3b8;">
      Bridging the gap between cutting-edge enterprise technology and rigorous academic research excellence across 30+ countries.
    </p>
  </div>
</section>

<!-- CORPORATE IDENTITY SECTION (LIGHT THEME) -->
<section style="padding: 100px 0 110px; background: #ffffff; border-bottom: 1px solid #e2e8f0;">
  <div class="container" style="display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 80px; align-items: center;">
    <div class="reveal-left">
      <div class="section-label" style="color: #2563EB;">Enterprise Pedigree &amp; Mission</div>
      <h2 style="font-size: clamp(2rem, 3.8vw, 2.7rem); font-weight: 800; color: #0f172a; margin-bottom: 22px; line-height: 1.25;">
        Craft Your Digital Future In Academia &amp; Industry
      </h2>
      <p style="color: #475569; font-size: 1.05rem; line-height: 1.8; margin-bottom: 20px;">
        Headquartered in Surat, Gujarat, <strong style="color: #0f172a;">Tristara IT Solutions</strong> is an established enterprise software engineering company building CRM, ERP, cloud architectures, and machine learning platforms.
      </p>
      <p style="color: #475569; font-size: 1.05rem; line-height: 1.8; margin-bottom: 32px;">
        To bridge the gap between academic pressure and professional excellence, our dedicated <strong style="color: #0f172a;">Academic Assistance Wing</strong> connects university scholars directly with working software engineers, data analysts, and Ph.D. mentors.
      </p>
      
      <!-- Interactive 3-Metric Counter Grid -->
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; padding: 28px 0; border-top: 1.5px solid #e2e8f0; border-bottom: 1.5px solid #e2e8f0; margin-bottom: 32px;">
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #2563EB; font-family: 'Poppins', sans-serif;">10,000+</div>
          <div style="font-size: 0.85rem; color: #64748b; font-weight: 600; margin-top: 4px;">Assignments Mentored</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #7B61FF; font-family: 'Poppins', sans-serif;">5,000+</div>
          <div style="font-size: 0.85rem; color: #64748b; font-weight: 600; margin-top: 4px;">Global Students</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #00C2FF; font-family: 'Poppins', sans-serif;">50+</div>
          <div style="font-size: 0.85rem; color: #64748b; font-weight: 600; margin-top: 4px;">Academic Disciplines</div>
        </div>
      </div>

      <div style="display: flex; gap: 16px; flex-wrap: wrap;">
        <a href="index.php?url=services" class="btn-primary" style="padding: 13px 30px;">Explore Our Services →</a>
        <a href="https://tristaraitsolutions.com" target="_blank" class="btn-secondary" style="color: #0f172a; border-color: #cbd5e1; background: #f8faff;">Visit Main Enterprise Site</a>
      </div>
    </div>

    <!-- Right Side Creative Figure: Enterprise Tech Hub & Research Illustration -->
    <div class="reveal-right" style="position: relative;">
      <div style="background: #f8faff; border: 1.5px solid #dbeafe; border-radius: 32px; padding: 36px 32px; box-shadow: 0 20px 50px rgba(37, 99, 235, 0.08); text-align: center;">
        
        <!-- Animated SVG Corporate Figure -->
        <svg viewBox="0 0 420 300" fill="none" style="width: 100%; max-width: 360px; height: auto; margin-bottom: 24px;">
          <!-- Glowing Background Halo -->
          <circle cx="210" cy="150" r="120" fill="#eff6ff" />
          <circle cx="210" cy="150" r="90" fill="#dbeafe" opacity="0.6" />
          
          <!-- Enterprise Data Server Tower -->
          <rect x="70" y="90" width="80" height="130" rx="12" fill="#1e293b" />
          <rect x="80" y="105" width="60" height="6" rx="3" fill="#38bdf8" />
          <circle cx="85" cy="125" r="4" fill="#22c55e" />
          <circle cx="97" cy="125" r="4" fill="#38bdf8" />
          <line x1="80" y1="145" x2="140" y2="145" stroke="rgba(255,255,255,0.15)" stroke-width="2" />
          <circle cx="85" cy="165" r="4" fill="#22c55e" />
          <circle cx="97" cy="165" r="4" fill="#eab308" />
          <line x1="80" y1="185" x2="140" y2="185" stroke="rgba(255,255,255,0.15)" stroke-width="2" />
          <circle cx="85" cy="205" r="4" fill="#22c55e" />
          <circle cx="97" cy="205" r="4" fill="#38bdf8" />

          <!-- Center Scholar Mentor -->
          <circle cx="210" cy="115" r="30" fill="#ffd5c2" />
          <!-- Hair -->
          <path d="M182 108c0-18 12-30 28-30s28 12 28 30" fill="#1e293b" />
          <!-- Eyes & Eyeglasses -->
          <circle cx="201" cy="113" r="2" fill="#1e293b" />
          <circle cx="219" cy="113" r="2" fill="#1e293b" />
          <circle cx="201" cy="113" r="8.5" stroke="#1e293b" stroke-width="2" fill="none" />
          <circle cx="219" cy="113" r="8.5" stroke="#1e293b" stroke-width="2" fill="none" />
          <line x1="209.5" y1="113" x2="210.5" y2="113" stroke="#1e293b" stroke-width="2" />
          <!-- Friendly Smile -->
          <path d="M204 128c3 3 9 3 12 0" stroke="#1e293b" stroke-width="2" stroke-linecap="round" />
          
          <!-- Suit & Shirt Collar -->
          <path d="M210 148c-18 0-36 12-42 34l-8 40h100l-8-40c-6-22-24-34-42-34z" fill="#2563EB" />
          <!-- White shirt collar -->
          <polygon points="210,148 198,168 222,168" fill="#ffffff" />
          <!-- Purple Tie -->
          <polygon points="210,165 204,185 210,198 216,185" fill="#7B61FF" />

          <!-- Right Interactive Document / Degree Badge -->
          <rect x="270" y="90" width="80" height="110" rx="10" fill="#ffffff" stroke="#2563EB" stroke-width="2" />
          <rect x="282" y="105" width="45" height="5" rx="2.5" fill="#2563EB" opacity="0.6" />
          <rect x="282" y="118" width="56" height="4" rx="2" fill="#94a3b8" />
          <rect x="282" y="128" width="50" height="4" rx="2" fill="#94a3b8" />
          <rect x="282" y="138" width="40" height="4" rx="2" fill="#94a3b8" />
          <circle cx="310" cy="165" r="14" fill="#22c55e" opacity="0.2" />
          <path d="M304 165l4 4 8-8" stroke="#22c55e" stroke-width="2.5" stroke-linecap="round" />

          <!-- Network Data Transfer Signal Arcs (Cleanly routed overhead above the head, connecting server to document) -->
          <path d="M110 82 C 160 38, 260 38, 310 82" stroke="#38bdf8" stroke-width="2" stroke-dasharray="5 5" />
          <!-- Floating Synced Signal Pulse -->
          <circle cx="210" cy="52" r="4.5" fill="#38bdf8" />
          <circle cx="210" cy="52" r="9" stroke="#38bdf8" stroke-width="1.5" opacity="0.4" />
        </svg>

        <div style="display: inline-block; padding: 6px 18px; background: rgba(37, 99, 235, 0.1); color: #2563EB; border-radius: 100px; font-size: 0.8rem; font-weight: 700; margin-bottom: 12px; border: 1px solid rgba(37, 99, 235, 0.25);">
          VERIFIED ENTERPRISE INFRASTRUCTURE
        </div>
        <h4 style="font-size: 1.25rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Surat HQ · Global Operations</h4>
        <p style="color: #64748b; font-size: 0.92rem; line-height: 1.65; max-width: 320px; margin: 0 auto;">
          Supporting academic excellence across the UK, Australia, US, Canada, Germany, and UAE with 24/7 dedicated support desks.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- CORE PILLARS OF EXCELLENCE (DARK THEME WITH CREATIVE ICONS) -->
<section style="padding: 100px 0; background: var(--bg-dark2); border-top: 1px solid var(--border-dark);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 70px;" class="reveal">
      <div class="section-label">Our Guiding Pillars</div>
      <h2 class="section-title">The Foundation of Student Trust</h2>
      <p class="section-desc" style="margin: 0 auto;">Four cornerstones engineered to give students complete peace of mind, from initial brief to final degree submission.</p>
    </div>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px;">
      <div class="why-card reveal">
        <div class="why-icon" style="background: rgba(0, 194, 255, 0.12); border: 1px solid rgba(0, 194, 255, 0.25);">
          <svg viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
        </div>
        <h3>Zero AI Hallucination Policy</h3>
        <p>Unlike generic platforms using ChatGPT to spin superficial text, our deliverables are researched and written by domain scholars, complete with authentic DOI citations.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-icon" style="background: rgba(123, 97, 255, 0.12); border: 1px solid rgba(123, 97, 255, 0.25);">
          <svg viewBox="0 0 24 24" fill="none" stroke="var(--purple)" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/><line x1="14" y1="4" x2="10" y2="20"/></svg>
        </div>
        <h3>Real Technical Depth</h3>
        <p>Because we build real software, our coding assignments feature production-grade conventions, git commits, Docker environments, and executable test suites.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-icon" style="background: rgba(37, 211, 102, 0.12); border: 1px solid rgba(37, 211, 102, 0.25);">
          <svg viewBox="0 0 24 24" fill="none" stroke="#25D366" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/><circle cx="12" cy="16" r="1"/></svg>
        </div>
        <h3>Absolute Confidentiality</h3>
        <p>All student information, university briefs, and correspondence are guarded under corporate Non-Disclosure Agreements and encrypted channels.</p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 3: INSTITUTIONAL QUALITY & ACADEMIC AUDIT WORKFLOW (LIGHT THEME) -->
<section style="padding: 100px 0 110px; background: #ffffff; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px;" class="reveal">
      <div class="section-label" style="color: #2563EB;">Rigorous Quality Assurance</div>
      <h2 style="font-size: clamp(2rem, 3.8vw, 2.7rem); font-weight: 800; color: #0f172a; margin-bottom: 14px;">The 4-Stage Academic Audit Workflow</h2>
      <p style="color: #475569; font-size: 1.05rem; max-width: 680px; margin: 0 auto; line-height: 1.7;">
        Before any file reaches your dashboard, it passes through four strict internal checkpoints to ensure complete grading rubric conformity and mathematical/technical accuracy.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px;">
      <!-- Audit Stage 1 -->
      <div style="background: #f8faff; border: 1.5px solid #dbeafe; border-radius: 20px; padding: 32px 22px; text-align: center; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.05);" class="reveal">
        <div style="width: 52px; height: 52px; border-radius: 16px; background: rgba(37, 99, 235, 0.1); border: 1.5px solid rgba(37, 99, 235, 0.25); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
          <span style="font-family: 'Poppins', sans-serif; font-size: 1.3rem; font-weight: 800; color: #2563EB;">01</span>
        </div>
        <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Rubric Deconstruction</h4>
        <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">
          Our academic director breaks down learning outcomes, weighting criteria, word limits, and citation guidelines.
        </p>
      </div>

      <!-- Audit Stage 2 -->
      <div style="background: #f8faff; border: 1.5px solid #dbeafe; border-radius: 20px; padding: 32px 22px; text-align: center; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.05);" class="reveal">
        <div style="width: 52px; height: 52px; border-radius: 16px; background: rgba(123, 97, 255, 0.1); border: 1.5px solid rgba(123, 97, 255, 0.25); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
          <span style="font-family: 'Poppins', sans-serif; font-size: 1.3rem; font-weight: 800; color: #7B61FF;">02</span>
        </div>
        <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Primary Synthesis</h4>
        <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">
          Subject specialist drafts solutions or executes code, integrating recent peer-reviewed studies (2020–2026).
        </p>
      </div>

      <!-- Audit Stage 3 -->
      <div style="background: #f8faff; border: 1.5px solid #dbeafe; border-radius: 20px; padding: 32px 22px; text-align: center; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.05);" class="reveal">
        <div style="width: 52px; height: 52px; border-radius: 16px; background: rgba(0, 194, 255, 0.1); border: 1.5px solid rgba(0, 194, 255, 0.25); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
          <span style="font-family: 'Poppins', sans-serif; font-size: 1.3rem; font-weight: 800; color: #00C2FF;">03</span>
        </div>
        <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Turnitin AI Audit</h4>
        <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">
          Scanned through official enterprise Turnitin and AI detection engines to certify 0% AI content and &lt; 5% similarity.
        </p>
      </div>

      <!-- Audit Stage 4 -->
      <div style="background: #f8faff; border: 1.5px solid #dbeafe; border-radius: 20px; padding: 32px 22px; text-align: center; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.05);" class="reveal">
        <div style="width: 52px; height: 52px; border-radius: 16px; background: rgba(34, 197, 94, 0.1); border: 1.5px solid rgba(34, 197, 94, 0.25); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
          <span style="font-family: 'Poppins', sans-serif; font-size: 1.3rem; font-weight: 800; color: #16a34a;">04</span>
        </div>
        <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Executive Review</h4>
        <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">
          Senior reviewer inspects referencing style, code readability, execution instructions, and viva talking points.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 4: OUR INTERDISCIPLINARY MENTOR NETWORK (DARK THEME) -->
<section style="padding: 100px 0; background: var(--bg-dark);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 70px;" class="reveal">
      <div class="section-label">Qualified Academic Faculty</div>
      <h2 class="section-title">Led By Industry Specialists &amp; Ph.D. Researchers</h2>
      <p class="section-desc" style="margin: 0 auto;">Our multidisciplinary network pairs you with experienced practitioners who understand university grading criteria inside and out.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
      <!-- Faculty Card 1 -->
      <div style="background: var(--card-dark); border: 1px solid var(--border-dark); border-radius: 24px; padding: 36px 28px; text-align: center;" class="reveal">
        <div style="width: 72px; height: 72px; border-radius: 22px; background: rgba(0, 194, 255, 0.12); border: 1.5px solid rgba(0, 194, 255, 0.25); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
          <svg width="36" height="36" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <div style="display: inline-block; padding: 4px 12px; background: rgba(0, 194, 255, 0.1); color: var(--primary); border-radius: 100px; font-size: 0.78rem; font-weight: 700; margin-bottom: 12px;">SOFTWARE &amp; DATA TEAM</div>
        <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Senior Software Architects</h3>
        <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.65; margin-bottom: 18px;">
          Lead engineers from Tristara's enterprise division specializing in Machine Learning, Cloud DevOps, Full-Stack frameworks, and secure database schemas.
        </p>
        <div style="font-size: 0.85rem; color: #38bdf8; font-weight: 600; border-top: 1px solid rgba(255,255,255,0.08); padding-top: 14px;">
          Python &middot; Java &middot; React &middot; Docker &middot; SQL
        </div>
      </div>

      <!-- Faculty Card 2 -->
      <div style="background: var(--card-dark); border: 1px solid var(--border-dark); border-radius: 24px; padding: 36px 28px; text-align: center;" class="reveal">
        <div style="width: 72px; height: 72px; border-radius: 22px; background: rgba(123, 97, 255, 0.12); border: 1.5px solid rgba(123, 97, 255, 0.25); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
          <svg width="36" height="36" fill="none" stroke="var(--purple)" stroke-width="2" viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
        </div>
        <div style="display: inline-block; padding: 4px 12px; background: rgba(123, 97, 255, 0.1); color: var(--purple); border-radius: 100px; font-size: 0.78rem; font-weight: 700; margin-bottom: 12px;">DOCTORAL RESEARCH WING</div>
        <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Postgraduate Dissertation Advisors</h3>
        <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.65; margin-bottom: 18px;">
          Published scholars holding Master's and Ph.D. degrees from recognized international universities, specializing in thesis literature synthesis and methodology.
        </p>
        <div style="font-size: 0.85rem; color: #a78bfa; font-weight: 600; border-top: 1px solid rgba(255,255,255,0.08); padding-top: 14px;">
          Scopus &middot; IEEE &middot; APA 7th &middot; Harvard &middot; MLA
        </div>
      </div>

      <!-- Faculty Card 3 -->
      <div style="background: var(--card-dark); border: 1px solid var(--border-dark); border-radius: 24px; padding: 36px 28px; text-align: center;" class="reveal">
        <div style="width: 72px; height: 72px; border-radius: 22px; background: rgba(34, 197, 94, 0.12); border: 1.5px solid rgba(34, 197, 94, 0.25); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
          <svg width="36" height="36" fill="none" stroke="#22c55e" stroke-width="2" viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
        </div>
        <div style="display: inline-block; padding: 4px 12px; background: rgba(34, 197, 94, 0.1); color: #22c55e; border-radius: 100px; font-size: 0.78rem; font-weight: 700; margin-bottom: 12px;">QUANTITATIVE ANALYTICS</div>
        <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Econometric &amp; Statistical Analysts</h3>
        <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.65; margin-bottom: 18px;">
          Empirical researchers and certified biostatisticians proficient in hypothesis validation, SEM path modeling, regression tests, and thematic coding.
        </p>
        <div style="font-size: 0.85rem; color: #4ade80; font-weight: 600; border-top: 1px solid rgba(255,255,255,0.08); padding-top: 14px;">
          SPSS &middot; R Studio &middot; STATA &middot; SmartPLS &middot; NVivo
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 5: GLOBAL INSTITUTIONAL REACH & CURRICULUM COMPLIANCE (LIGHT THEME) -->
<section style="padding: 100px 0 110px; background: #ffffff; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
  <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 70px; align-items: center;">
    <div class="reveal-left">
      <div class="section-label" style="color: #2563EB;">Global Footprint</div>
      <h2 style="font-size: clamp(2rem, 3.8vw, 2.7rem); font-weight: 800; color: #0f172a; margin-bottom: 20px; line-height: 1.25;">
        Aligned With World-Class Academic Standards
      </h2>
      <p style="color: #475569; font-size: 1.05rem; line-height: 1.8; margin-bottom: 22px;">
        Every university maintains unique formatting, referencing, and marking schemes. Our team is trained across national qualifications frameworks in the UK (FHEQ), US (Regional Accreditations), Australia (AQF), Canada, and Europe (ECTS).
      </p>
      
      <div style="display: flex; flex-direction: column; gap: 16px; margin-bottom: 30px;">
        <div style="display: flex; gap: 14px; align-items: flex-start;">
          <div style="width: 24px; height: 24px; border-radius: 50%; background: #eff6ff; color: #2563EB; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 800; font-size: 0.85rem;">✓</div>
          <div>
            <h5 style="color: #0f172a; font-size: 1rem; font-weight: 700; margin-bottom: 4px;">United Kingdom (Russell Group Compliant)</h5>
            <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Critical analytical depth, Harvard/OSCOLA citations, and structured academic syntax aligned with 1st Class degree benchmarks.</p>
          </div>
        </div>

        <div style="display: flex; gap: 14px; align-items: flex-start;">
          <div style="width: 24px; height: 24px; border-radius: 50%; background: #eff6ff; color: #2563EB; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 800; font-size: 0.85rem;">✓</div>
          <div>
            <h5 style="color: #0f172a; font-size: 1rem; font-weight: 700; margin-bottom: 4px;">United States &amp; Canada</h5>
            <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">APA 7th formatting, MLA humanities essays, Chicago history footnotes, and IEEE engineering report specifications.</p>
          </div>
        </div>

        <div style="display: flex; gap: 14px; align-items: flex-start;">
          <div style="width: 24px; height: 24px; border-radius: 50%; background: #eff6ff; color: #2563EB; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 800; font-size: 0.85rem;">✓</div>
          <div>
            <h5 style="color: #0f172a; font-size: 1rem; font-weight: 700; margin-bottom: 4px;">Australia (Group of Eight) &amp; UAE</h5>
            <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Rigorous empirical research standards, AGPS Harvard, business case studies, and engineering project capstones.</p>
          </div>
        </div>
      </div>

      <a href="index.php?url=contact" class="btn-primary">Connect With A Regional Specialist →</a>
    </div>

    <!-- Right Side Creative Figure: World Regional Campus Badges -->
    <div class="reveal-right">
      <div style="background: #f8faff; border: 1.5px solid #dbeafe; border-radius: 28px; padding: 40px; box-shadow: 0 15px 40px rgba(37, 99, 235, 0.07);">
        <h4 style="font-size: 1.25rem; font-weight: 700; color: #0f172a; margin-bottom: 24px; text-align: center;">International Academic Recognition</h4>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 18px;">
          <div style="background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 16px; padding: 20px; text-align: center;">
            <div style="font-size: 1.8rem; margin-bottom: 6px;">🇬🇧</div>
            <div style="font-weight: 700; color: #0f172a; font-size: 0.95rem;">United Kingdom</div>
            <div style="color: #64748b; font-size: 0.8rem; margin-top: 4px;">4,200+ Projects</div>
          </div>

          <div style="background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 16px; padding: 20px; text-align: center;">
            <div style="font-size: 1.8rem; margin-bottom: 6px;">🇺🇸</div>
            <div style="font-weight: 700; color: #0f172a; font-size: 0.95rem;">USA &amp; Canada</div>
            <div style="color: #64748b; font-size: 0.8rem; margin-top: 4px;">2,800+ Projects</div>
          </div>

          <div style="background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 16px; padding: 20px; text-align: center;">
            <div style="font-size: 1.8rem; margin-bottom: 6px;">🇦🇺</div>
            <div style="font-weight: 700; color: #0f172a; font-size: 0.95rem;">Australia &amp; NZ</div>
            <div style="color: #64748b; font-size: 0.8rem; margin-top: 4px;">1,950+ Projects</div>
          </div>

          <div style="background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 16px; padding: 20px; text-align: center;">
            <div style="font-size: 1.8rem; margin-bottom: 6px;">🇦🇪</div>
            <div style="font-weight: 700; color: #0f172a; font-size: 0.95rem;">UAE &amp; Middle East</div>
            <div style="color: #64748b; font-size: 0.8rem; margin-top: 4px;">1,100+ Projects</div>
          </div>
        </div>

        <div style="margin-top: 24px; padding: 16px 20px; background: rgba(37, 99, 235, 0.06); border-radius: 14px; border: 1px solid rgba(37, 99, 235, 0.15); text-align: center;">
          <p style="color: #2563EB; font-weight: 600; font-size: 0.88rem; margin: 0;">
            ⭐ 98.4% On-Time Delivery Guarantee Across All Timezones
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 6: STUDENT COMMITMENT & TRANSPARENT GUARANTEE (LIGHT THEME) -->
<section style="padding: 100px 0; background: #ffffff;">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px;" class="reveal">
      <div class="section-label" style="color: #2563EB;">Our Commitment</div>
      <h2 style="font-size: clamp(2rem, 3.8vw, 2.7rem); font-weight: 800; color: #0f172a; margin-bottom: 14px;">How We Support Your Academic Growth</h2>
      <p style="color: #64748b; font-size: 1.05rem; max-width: 640px; margin: 0 auto;">More than just completing an assignment, we empower you to understand your coursework with clarity.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px;">
      <div style="background: #f8faff; border: 1.5px solid #e2e8f0; border-radius: 20px; padding: 32px 26px; text-align: center;" class="reveal">
        <div style="width: 56px; height: 56px; border-radius: 16px; background: #eff6ff; border: 1.5px solid #dbeafe; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; color: #2563EB;">
          <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
        </div>
        <h4 style="font-size: 1.15rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Conceptual Clarity</h4>
        <p style="color: #64748b; font-size: 0.92rem; line-height: 1.65;">Every project includes detailed commentary, documentation, and references so you can present your work with total confidence.</p>
      </div>

      <div style="background: #f8faff; border: 1.5px solid #e2e8f0; border-radius: 20px; padding: 32px 26px; text-align: center;" class="reveal">
        <div style="width: 56px; height: 56px; border-radius: 16px; background: #eff6ff; border: 1.5px solid #dbeafe; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; color: #2563EB;">
          <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <h4 style="font-size: 1.15rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Time-Zone Flexibility</h4>
        <p style="color: #64748b; font-size: 0.92rem; line-height: 1.65;">Whether you are studying in London, Sydney, New York, or Dubai, our 24/7 coordinators are online across all academic timezones.</p>
      </div>

      <div style="background: #f8faff; border: 1.5px solid #e2e8f0; border-radius: 20px; padding: 32px 26px; text-align: center;" class="reveal">
        <div style="width: 56px; height: 56px; border-radius: 16px; background: #eff6ff; border: 1.5px solid #dbeafe; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; color: #2563EB;">
          <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <h4 style="font-size: 1.15rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Distinction Outcomes</h4>
        <p style="color: #64748b; font-size: 0.92rem; line-height: 1.65;">Over 94% of our assisted capstones and dissertations achieve First-Class honors or Distinction grades on university evaluations.</p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 7: FREQUENTLY ASKED QUESTIONS ABOUT TRISTARA (DARK THEME) -->
<section style="padding: 100px 0; background: var(--bg-dark); border-top: 1px solid var(--border-dark);">
  <div class="container" style="max-width: 860px;">
    <div style="text-align: center; margin-bottom: 60px;" class="reveal">
      <div class="section-label">Clear Answers</div>
      <h2 class="section-title">Frequently Asked Questions</h2>
      <p class="section-desc" style="margin: 0 auto;">Everything you need to know about our enterprise backing, credentials, and ethics.</p>
    </div>

    <div style="display: flex; flex-direction: column; gap: 20px;">
      <!-- FAQ 1 -->
      <div style="background: var(--card-dark); border: 1px solid var(--border-dark); border-radius: 18px; padding: 26px 28px;" class="reveal">
        <h4 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
          <span style="color: var(--primary);">Q:</span> How is Tristara different from typical freelance essay websites?
        </h4>
        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin: 0;">
          Tristara IT Solutions is a registered corporate enterprise in Surat, India. We do not outsource your coursework to unverified random gig-workers. Your coding, thesis, and quantitative data tasks are built directly by full-time software engineers and postgraduate domain scholars.
        </p>
      </div>

      <!-- FAQ 2 -->
      <div style="background: var(--card-dark); border: 1px solid var(--border-dark); border-radius: 18px; padding: 26px 28px;" class="reveal">
        <h4 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
          <span style="color: var(--primary);">Q:</span> Do you guarantee 0% AI-generated text and authentic references?
        </h4>
        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin: 0;">
          Yes, absolutely. We strictly forbid artificial intelligence hallucinated text or synthetic bibliographies. Every submission includes an official Turnitin similarity report verifying authentic citations, peer-reviewed DOIs, and zero AI authorship.
        </p>
      </div>

      <!-- FAQ 3 -->
      <div style="background: var(--card-dark); border: 1px solid var(--border-dark); border-radius: 18px; padding: 26px 28px;" class="reveal">
        <h4 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
          <span style="color: var(--primary);">Q:</span> What if my tutor requests adjustments after submission?
        </h4>
        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin: 0;">
          We provide 14 days of free, unlimited revisions for every project. If your professor or supervisor provides constructive feedback within the original scope, our mentors implement changes immediately at no extra charge.
        </p>
      </div>

      <!-- FAQ 4 -->
      <div style="background: var(--card-dark); border: 1px solid var(--border-dark); border-radius: 18px; padding: 26px 28px;" class="reveal">
        <h4 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
          <span style="color: var(--primary);">Q:</span> How is my identity and university information protected?
        </h4>
        <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin: 0;">
          We operate under strict Non-Disclosure Agreements (NDA). All university details, rubrics, and project drafts are encrypted and stored in secure, private data stores. We never publish, resell, or share your work with third parties.
        </p>
      </div>
    </div>

    <div style="text-align: center; margin-top: 50px;" class="reveal">
      <a href="index.php?url=contact" class="btn-primary" style="padding: 15px 36px; font-size: 1.05rem;">Have Questions? Speak With An Advisor →</a>
    </div>
  </div>
</section>

<?php
require_once __DIR__ . '/../layouts/footer.php';
?>

