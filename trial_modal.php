<?php
// PHP handling is still in header.php for now, or we can move it here.
// But header.php is better for catching POST at the start.
?>

<style>
    #trialModal {
        z-index: 9999999 !important;
    }
    #trialModal.show {
        display: block !important;
        opacity: 1 !important;
    }
    #trialModal.show .modal-dialog {
        opacity: 1 !important;
        transform: none !important;
    }
    .modal-backdrop {
        z-index: 9999998 !important;
    }
    #trialModal .modal-dialog {
        max-width: 800px;
        width: 95%;
    }
    #trialModal .modal-content {
        border-radius: 15px;
        overflow: hidden;
        border: none;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        max-height: 85vh; /* Adjusted for better visibility */
    }
    #trialModal .modal-body {
        padding: 0;
        overflow-y: auto;
        max-height: 85vh;
    }
    .trial-flex {
        display: flex;
        flex-direction: row;
        min-height: 400px;
    }
    .trial-banner {
        flex: 0 0 35%;
        background: url('assets/images/free_trial_banner_1778579466613.png');
        background-size: cover;
        background-position: center;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        padding: 20px;
    }
    .trial-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(13, 110, 253, 0.85) 0%, rgba(10, 88, 202, 0.6) 100%);
    }
    .trial-banner-content {
        position: relative;
        z-index: 1;
    }
    .trial-banner-content h2 {
        font-size: 1.4rem;
        font-weight: 800;
    }
    .trial-banner-content p {
        font-size: 0.8rem;
    }
    .trial-form-side {
        flex: 1;
        padding: 25px 30px;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .trial-title {
        font-weight: 800;
        color: #333;
        margin-bottom: 5px;
        font-size: 1.3rem;
    }
    .trial-subtitle {
        color: #666;
        margin-bottom: 15px;
        font-size: 0.85rem;
    }
    .trial-form-side .input-group {
        margin-bottom: 10px;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #ddd;
    }
    .trial-form-side .input-group-text {
        background: #f8f9fa;
        border: none;
        color: #0d6efd;
        width: 40px;
        justify-content: center;
    }
    .trial-form-side .form-control, .trial-form-side .form-select {
        border: none;
        padding: 8px 12px;
        font-size: 0.85rem;
    }
    .trial-form-side .form-control:focus {
        box-shadow: none;
        background: #fff;
    }
    .trial-btn {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.9rem;
        background: #0d6efd;
        border: none;
        color: white;
        transition: all 0.3s ease;
        margin-top: 5px;
    }
    .trial-btn:hover {
        background: #0a58ca;
        box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
    }
    .close-modal-custom {
        position: absolute;
        top: 15px;
        right: 15px;
        z-index: 1001;
        background: #eee;
        border-radius: 50%;
        width: 25px;
        height: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        opacity: 0.7;
    }
    .close-modal-custom:hover {
        opacity: 1;
        background: #ddd;
    }
    .dont-show-box {
        margin-top: 10px;
        font-size: 0.75rem;
        color: #888;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .dont-show-box input {
        cursor: pointer;
    }

    @media (max-width: 767px) {
        .trial-flex {
            flex-direction: column;
        }
        .trial-banner {
            display: none;
        }
        .trial-form-side {
            padding: 20px;
        }
    }
</style>

<div class="modal fade" id="trialModal" tabindex="-1" aria-hidden="true" data-bs-focus="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="close-modal-custom" data-bs-dismiss="modal">
                <i class="bi bi-x"></i>
            </div>
            <div class="modal-body">
                <div class="trial-flex">
                    <!-- Left Side: Banner (Visible on Desktop) -->
                    <div class="trial-banner">
                        <div class="trial-banner-content">
                            <h2 class="mb-2">Scale Your Success</h2>
                            <p class="mb-0 small">Join the future of retail with DigifySoft.</p>
                        </div>
                    </div>

                    <!-- Right Side: Form -->
                    <div class="trial-form-side">
                        <div class="text-center text-md-start">
                            <h3 class="trial-title">Special Offer - Free Trial</h3>
                            <p class="trial-subtitle">Experience AI-driven ERP today.</p>
                        </div>

                        <?php if (isset($msg) && $msg != '') echo $msg; ?>

                        <form method="POST" id="trialForm">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user small"></i></span>
                                        <input type="text" class="form-control" name="name" placeholder="Name*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope small"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="Email*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-building small"></i></span>
                                        <input type="text" class="form-control" name="company" placeholder="Company*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-industry small"></i></span>
                                        <select name="industry" class="form-select" required>
                                            <option value="">Industry*</option>
                                            <option value="Manufacturing">Manufacturing</option>
                                            <option value="Trading">Trading</option>
                                            <option value="Retail">Retail</option>
                                            <option value="Services">Services</option>
                                            <option value="Any other">Any other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-concierge-bell small"></i></span>
                                        <input type="text" class="form-control" name="firm" placeholder="Business*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-phone small"></i></span>
                                        <input type="text" class="form-control" name="contact" placeholder="Contact*" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt small"></i></span>
                                        <input type="text" class="form-control" id="trialLocation" name="location" placeholder="Location (City/State)*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <textarea class="form-control" name="message" rows="2" placeholder="Brief requirements..." style="border: 1px solid #ddd; border-radius: 8px; font-size: 0.8rem;"></textarea>
                            </div>

                             <button type="submit" class="trial-btn">Get Free Trial Now</button>

                            <div class="dont-show-box">
                                <input type="checkbox" id="dontShowTrial">
                                <label for="dontShowTrial">Don't show this for 7 days</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const trialModalEl = document.getElementById('trialModal');
    if (!trialModalEl) return;

    const trialModal = new bootstrap.Modal(trialModalEl);
    const dontShowCheckbox = document.getElementById('dontShowTrial');
    const trialForm = document.getElementById('trialForm');
    
    const STORAGE_KEY_DISMISSED_UNTIL = 'digify_trial_dismissed_until';
    const SESSION_KEY_DISMISSED = 'digify_trial_dismissed_session';
    const STORAGE_KEY_HAS_SEEN = 'digify_trial_has_seen';

    function isSuppressed() {
        // 1. Session suppression: If closed once in this session, never pop up again
        if (sessionStorage.getItem(SESSION_KEY_DISMISSED) === 'true') {
            return true;
        }

        // 2. LocalStorage suppression: 24-hour dismissal
        const dismissedUntil = localStorage.getItem(STORAGE_KEY_DISMISSED_UNTIL);
        if (dismissedUntil && Date.now() < parseInt(dismissedUntil)) {
            return true;
        }

        // 3. If user has already seen it today
        const hasSeen = localStorage.getItem(STORAGE_KEY_HAS_SEEN);
        if (hasSeen && (Date.now() - parseInt(hasSeen)) < (24 * 60 * 60 * 1000)) {
            return true;
        }

        return false;
    }

    function dismissPopupPermanently() {
        // Suppress for entire session and next 24 hours
        sessionStorage.setItem(SESSION_KEY_DISMISSED, 'true');
        localStorage.setItem(STORAGE_KEY_DISMISSED_UNTIL, (Date.now() + 24 * 60 * 60 * 1000).toString());
        localStorage.setItem(STORAGE_KEY_HAS_SEEN, Date.now().toString());
    }

    // Only auto-trigger if never dismissed before, with a polite 35-second delay
    if (!isSuppressed()) {
        setTimeout(function() {
            if (!isSuppressed() && !document.querySelector('.modal.show')) {
                trialModal.show();
                localStorage.setItem(STORAGE_KEY_HAS_SEEN, Date.now().toString());
            }
        }, 35000); // 35 seconds polite delay
    }

    // Server-side validation message handler
    const hasMessage = <?php echo (isset($msg) && $msg != '') ? 'true' : 'false'; ?>;
    if (hasMessage) {
        trialModal.show();
    }

    // When form is submitted
    if (trialForm) {
        trialForm.addEventListener('submit', function() {
            dismissPopupPermanently();
        });
    }

    // Whenever user closes the modal (by 'X', backdrop click, or ESC)
    trialModalEl.addEventListener('hide.bs.modal', function () {
        dismissPopupPermanently();
    });

    trialModalEl.addEventListener('hidden.bs.modal', function () {
        dismissPopupPermanently();
    });

});
</script>
