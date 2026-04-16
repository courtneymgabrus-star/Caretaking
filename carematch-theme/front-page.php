<?php
/**
 * Front Page Template
 *
 * @package CareMatch
 */

get_header();
?>

<!-- HERO -->
<section class="hero" aria-label="<?php esc_attr_e( 'Hero', 'carematch' ); ?>">
  <div class="hero-text">
    <div class="hero-badge"><?php esc_html_e( 'Now Launching in Hilton Head &amp; Savannah', 'carematch' ); ?></div>
    <h1>
      <?php esc_html_e( 'Care Built for', 'carematch' ); ?><br>
      <em><?php esc_html_e( 'Every', 'carematch' ); ?></em>
      <span class="accent"><?php esc_html_e( 'Body', 'carematch' ); ?></span>
    </h1>
    <p class="hero-sub">
      <?php esc_html_e( 'A private-pay caregiving platform exclusively for the disability and chronic illness community. Vetted caregivers. Fair pay. Real trust.', 'carematch' ); ?>
    </p>
    <div class="hero-actions">
      <a href="#waitlist" class="btn-primary"><?php esc_html_e( 'Join the Waitlist →', 'carematch' ); ?></a>
      <a href="#how" class="btn-secondary"><?php esc_html_e( 'How it Works', 'carematch' ); ?></a>
    </div>
    <div class="hero-stats">
      <div class="stat-item">
        <span class="stat-number">53M+</span>
        <span class="stat-label"><?php esc_html_e( 'Adults need care in the US', 'carematch' ); ?></span>
      </div>
      <div class="stat-item">
        <span class="stat-number">$0</span>
        <span class="stat-label"><?php esc_html_e( 'Cost to join as caregiver', 'carematch' ); ?></span>
      </div>
      <div class="stat-item">
        <span class="stat-number">100%</span>
        <span class="stat-label"><?php esc_html_e( 'Disability-focused', 'carematch' ); ?></span>
      </div>
    </div>
  </div>

  <div class="hero-visual" aria-hidden="true">
    <div class="hero-card-stack">
      <div class="profile-card">
        <div class="card-avatar" style="background:#FAF0EC; font-size:26px;">🌻</div>
        <div class="card-name">Maria T.</div>
        <div class="card-role">In-Home Support Specialist</div>
        <div class="card-tags">
          <span class="tag">Mobility</span>
          <span class="tag rust">Chronic Illness</span>
        </div>
        <div class="card-rate">$28<span>/hr</span></div>
      </div>
      <div class="profile-card">
        <div class="card-avatar" style="background:#E8F5F5; font-size:26px;">🌿</div>
        <div class="card-name">James R.</div>
        <div class="card-role">Personal Care Attendant</div>
        <div class="card-tags">
          <span class="tag">ALS</span>
          <span class="tag sage">Neuromuscular</span>
        </div>
        <div class="card-rate">$32<span>/hr</span></div>
      </div>
      <div class="profile-card">
        <div class="card-avatar" style="background:#EFF6F0; font-size:26px;">💛</div>
        <div class="card-name">Priya K.</div>
        <div class="card-role">Companion Care Specialist</div>
        <div class="card-tags">
          <span class="tag">Physical Therapy</span>
          <span class="tag rust">MDA</span>
        </div>
        <div class="card-rate">$30<span>/hr</span></div>
        <div class="verified-badge">✓ Disability Competent Certified</div>
      </div>
    </div>
  </div>
</section>

<!-- TRUST BAR -->
<div class="trust-bar" role="list" aria-label="<?php esc_attr_e( 'Trust indicators', 'carematch' ); ?>">
  <div class="trust-item" role="listitem"><span class="trust-icon" aria-hidden="true">🔍</span> <?php esc_html_e( 'Every caregiver vetted', 'carematch' ); ?></div>
  <div class="trust-item" role="listitem"><span class="trust-icon" aria-hidden="true">💰</span> <?php esc_html_e( 'Transparent pricing, no hidden fees', 'carematch' ); ?></div>
  <div class="trust-item" role="listitem"><span class="trust-icon" aria-hidden="true">♿</span> <?php esc_html_e( 'Disability-specific care expertise', 'carematch' ); ?></div>
  <div class="trust-item" role="listitem"><span class="trust-icon" aria-hidden="true">❤️</span> <?php esc_html_e( 'Fair Pay Standard guaranteed', 'carematch' ); ?></div>
</div>

<!-- HOW IT WORKS -->
<section class="how" id="how" aria-labelledby="how-heading">
  <span class="section-label"><?php esc_html_e( 'Simple Process', 'carematch' ); ?></span>
  <h2 class="section-title" id="how-heading"><?php esc_html_e( 'Finding care that actually fits — in three steps', 'carematch' ); ?></h2>
  <p class="section-sub"><?php esc_html_e( 'No more scrolling through unvetted profiles. CareMatch does the hard work so you can focus on what matters.', 'carematch' ); ?></p>

  <div class="steps">
    <div class="step fade-in">
      <div class="step-number" aria-hidden="true">01</div>
      <div class="step-icon" style="background:#E8F5F5;" aria-hidden="true">🔎</div>
      <h3><?php esc_html_e( 'Tell Us Your Needs', 'carematch' ); ?></h3>
      <p><?php esc_html_e( 'Share details about the type of care needed, specific conditions, schedule, and location. The more we know, the better your matches.', 'carematch' ); ?></p>
    </div>
    <div class="step fade-in" style="transition-delay: 0.15s">
      <div class="step-number" aria-hidden="true">02</div>
      <div class="step-icon" style="background:#FAF0EC;" aria-hidden="true">🤝</div>
      <h3><?php esc_html_e( 'Get Matched', 'carematch' ); ?></h3>
      <p><?php esc_html_e( 'We surface vetted caregivers with verified disability competency in your area. Browse profiles, rates, and specialties with full transparency.', 'carematch' ); ?></p>
    </div>
    <div class="step fade-in" style="transition-delay: 0.3s">
      <div class="step-number" aria-hidden="true">03</div>
      <div class="step-icon" style="background:#EFF6F0;" aria-hidden="true">✨</div>
      <h3><?php esc_html_e( 'Connect &amp; Care', 'carematch' ); ?></h3>
      <p><?php esc_html_e( 'Message directly, book, and build a lasting relationship — all through CareMatch. We stay in your corner every step of the way.', 'carematch' ); ?></p>
    </div>
  </div>
</section>

<!-- FOR WHO -->
<section class="for-who" id="for-who" aria-labelledby="for-who-heading">
  <span class="section-label"><?php esc_html_e( 'Who CareMatch Serves', 'carematch' ); ?></span>
  <h2 class="section-title" id="for-who-heading"><?php esc_html_e( 'Built for two communities that deserve better', 'carematch' ); ?></h2>
  <p class="section-sub"><?php esc_html_e( 'Too many platforms serve neither families nor caregivers well. CareMatch was designed from lived experience to do both — right.', 'carematch' ); ?></p>

  <div class="two-col">
    <div class="audience-card families fade-in">
      <span class="audience-icon" aria-hidden="true">🏠</span>
      <h3><?php esc_html_e( 'For Families', 'carematch' ); ?></h3>
      <p><?php esc_html_e( "Finding a caregiver who truly understands your loved one's disability or chronic illness shouldn't feel like a gamble. CareMatch gives you confidence, not just options.", 'carematch' ); ?></p>
      <ul class="benefit-list">
        <li><?php esc_html_e( 'Caregivers vetted for disability competency', 'carematch' ); ?></li>
        <li><?php esc_html_e( 'Filter by condition, care type &amp; location', 'carematch' ); ?></li>
        <li><?php esc_html_e( 'Transparent hourly rates, no surprises', 'carematch' ); ?></li>
        <li><?php esc_html_e( 'Private pay — no insurance hassles', 'carematch' ); ?></li>
        <li><?php esc_html_e( 'Direct messaging with caregivers', 'carematch' ); ?></li>
        <li><?php esc_html_e( 'Dedicated family support team', 'carematch' ); ?></li>
      </ul>
    </div>

    <div class="audience-card caregivers fade-in" style="transition-delay: 0.15s" id="caregivers">
      <span class="audience-icon" aria-hidden="true">💙</span>
      <h3><?php esc_html_e( 'For Caregivers', 'carematch' ); ?></h3>
      <p><?php esc_html_e( 'Your skill and dedication deserve real respect — fair pay, a supportive community, and clients who genuinely value what you do. CareMatch is built for you too.', 'carematch' ); ?></p>
      <ul class="benefit-list">
        <li><?php esc_html_e( 'Free to join, always', 'carematch' ); ?></li>
        <li><?php esc_html_e( 'Fair Pay Standard — minimum rates enforced', 'carematch' ); ?></li>
        <li><?php esc_html_e( 'Connect directly with private-pay families', 'carematch' ); ?></li>
        <li><?php esc_html_e( 'Peer community &amp; continuing education', 'carematch' ); ?></li>
        <li><?php esc_html_e( 'Build your reputation with reviews', 'carematch' ); ?></li>
        <li><?php esc_html_e( 'Flexible — you set your schedule &amp; rates', 'carematch' ); ?></li>
      </ul>
    </div>
  </div>
</section>

<!-- FAIR PAY / MISSION -->
<section class="fair-pay" id="mission" aria-labelledby="mission-heading">
  <span class="section-label"><?php esc_html_e( 'Our Commitment', 'carematch' ); ?></span>
  <h2 class="section-title" id="mission-heading"><?php esc_html_e( 'Care work is skilled work. We treat it that way.', 'carematch' ); ?></h2>
  <p class="section-sub"><?php esc_html_e( 'CareMatch was founded by a disability advocate who grew up without representation and spent years fighting for caregiver rights. Every platform decision reflects that.', 'carematch' ); ?></p>

  <div class="principles">
    <div class="principle fade-in">
      <span class="principle-icon" aria-hidden="true">⚖️</span>
      <h4><?php esc_html_e( 'Fair Pay Standard', 'carematch' ); ?></h4>
      <p><?php esc_html_e( "Minimum caregiver rates are baked into our platform. We don't race to the bottom.", 'carematch' ); ?></p>
    </div>
    <div class="principle fade-in" style="transition-delay: 0.1s">
      <span class="principle-icon" aria-hidden="true">♿</span>
      <h4><?php esc_html_e( 'Disability-Led', 'carematch' ); ?></h4>
      <p><?php esc_html_e( 'Built by someone with lived experience in the disability community. Not just inspired by — part of.', 'carematch' ); ?></p>
    </div>
    <div class="principle fade-in" style="transition-delay: 0.2s">
      <span class="principle-icon" aria-hidden="true">🔐</span>
      <h4><?php esc_html_e( 'Real Vetting', 'carematch' ); ?></h4>
      <p><?php esc_html_e( 'Background checks, disability competency verification, and ongoing quality assurance.', 'carematch' ); ?></p>
    </div>
    <div class="principle fade-in" style="transition-delay: 0.3s">
      <span class="principle-icon" aria-hidden="true">🌱</span>
      <h4><?php esc_html_e( 'Community First', 'carematch' ); ?></h4>
      <p><?php esc_html_e( 'Caregivers get peer support, resources, and belonging — not just a job board.', 'carematch' ); ?></p>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials" aria-labelledby="testimonials-heading">
  <span class="section-label"><?php esc_html_e( 'Early Community', 'carematch' ); ?></span>
  <h2 class="section-title" id="testimonials-heading" style="max-width: 500px;"><?php esc_html_e( 'What people are already saying', 'carematch' ); ?></h2>
  <p class="section-sub" style="margin-bottom: 48px;"><?php esc_html_e( "We're building with our community before we launch. Here's what early members are sharing.", 'carematch' ); ?></p>

  <div class="testimonial-grid">
    <div class="testimonial fade-in">
      <div class="stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'carematch' ); ?>">★★★★★</div>
      <blockquote><?php esc_html_e( '"Finally a platform that understands my daughter has complex needs. The caregiver profiles here actually tell me what I need to know."', 'carematch' ); ?></blockquote>
      <div class="testimonial-author">
        <div class="author-avatar" style="background:#E8F5F5;" aria-hidden="true">👩</div>
        <div>
          <div class="author-name">Sandra M.</div>
          <div class="author-role"><?php esc_html_e( 'Parent, Hilton Head', 'carematch' ); ?></div>
        </div>
      </div>
    </div>
    <div class="testimonial fade-in" style="transition-delay: 0.15s">
      <div class="stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'carematch' ); ?>">★★★★★</div>
      <blockquote><?php esc_html_e( '"I\'ve been caregiving for 8 years and never felt valued by a platform. The Fair Pay Standard alone is reason enough for me to be here."', 'carematch' ); ?></blockquote>
      <div class="testimonial-author">
        <div class="author-avatar" style="background:#FAF0EC;" aria-hidden="true">👨</div>
        <div>
          <div class="author-name">DeShawn T.</div>
          <div class="author-role"><?php esc_html_e( 'Caregiver, Savannah', 'carematch' ); ?></div>
        </div>
      </div>
    </div>
    <div class="testimonial fade-in" style="transition-delay: 0.3s">
      <div class="stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'carematch' ); ?>">★★★★★</div>
      <blockquote><?php esc_html_e( '"As someone with muscular dystrophy, finding a caregiver who gets it has always been a struggle. CareMatch is a game changer for our community."', 'carematch' ); ?></blockquote>
      <div class="testimonial-author">
        <div class="author-avatar" style="background:#EFF6F0;" aria-hidden="true">🙋</div>
        <div>
          <div class="author-name">Lia R.</div>
          <div class="author-role"><?php esc_html_e( 'Community Member, Bluffton', 'carematch' ); ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WAITLIST -->
<section class="waitlist" id="waitlist" aria-labelledby="waitlist-heading">
  <span class="section-label"><?php esc_html_e( 'Be First', 'carematch' ); ?></span>
  <h2 class="section-title" id="waitlist-heading"><?php esc_html_e( 'Join the CareMatch waitlist', 'carematch' ); ?></h2>
  <p class="section-sub"><?php esc_html_e( "We're launching in Hilton Head &amp; Savannah first. Get early access, help shape the platform, and be part of something that changes how care works.", 'carematch' ); ?></p>

  <div class="waitlist-tabs" role="group" aria-label="<?php esc_attr_e( 'I am joining as a', 'carematch' ); ?>">
    <button class="tab-btn active" onclick="careMatchSetTab(this, 'family')" aria-pressed="true">
      <?php esc_html_e( 'I need care for my family', 'carematch' ); ?>
    </button>
    <button class="tab-btn" onclick="careMatchSetTab(this, 'caregiver')" aria-pressed="false">
      <?php esc_html_e( 'I am a caregiver', 'carematch' ); ?>
    </button>
  </div>

  <form class="waitlist-form" id="waitlist-form" novalidate aria-label="<?php esc_attr_e( 'Waitlist sign-up', 'carematch' ); ?>">
    <?php wp_nonce_field( 'carematch_nonce', 'carematch_nonce_field' ); ?>
    <input type="hidden" id="waitlist-role" name="role" value="family">
    <label for="waitlist-email" class="screen-reader-text"><?php esc_html_e( 'Email address', 'carematch' ); ?></label>
    <input
      type="email"
      id="waitlist-email"
      name="email"
      placeholder="<?php esc_attr_e( 'Enter your email address', 'carematch' ); ?>"
      required
      autocomplete="email"
    >
    <button type="submit"><?php esc_html_e( 'Get Early Access', 'carematch' ); ?></button>
  </form>

  <div class="success-msg" id="success-msg" role="status" aria-live="polite"></div>

  <p class="waitlist-note"><?php esc_html_e( 'No spam. Ever. We respect your inbox as much as we respect caregivers.', 'carematch' ); ?></p>
</section>

<?php get_footer(); ?>
