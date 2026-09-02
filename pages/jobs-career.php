<?php
// Custom Page Overrides for Jobs / Careers
$display_title = "Careers & Healthcare Jobs";
$seo_title = "Healthcare Careers & Jobs in Delhi NCR - DM Healthcare";
$seo_desc = "Join DM Healthcare as a registered nurse, healthcare attendant, physiotherapist, or physician. Apply online for rewarding home healthcare jobs across Delhi NCR.";
$short_desc = "Explore high-growth healthcare careers at DM Healthcare. Join our clinical squad delivering quality care across Delhi NCR.";
$category_name = "Careers";
$full_page_override = true;

$frontend_custom_sections = '
<style>
:root {
    --primary-color: #e5252a;
    --primary-dark: #c4181d;
    --secondary-color: #0f172a;
    --border-light: #e2e8f0;
}

/* Page Layout */
.careers-page {
    background-color: #f8fafc;
    overflow-x: hidden;
}

/* Top Banner Header */
.careers-banner-wrap {
    width: 100%;
    background: #0f172a;
    border-bottom: 4px solid var(--primary-color);
    overflow: hidden;
}
.careers-banner-wrap img {
    width: 100%;
    height: auto;
    max-height: 420px;
    object-fit: cover;
    display: block;
}

/* Hero Section */
.careers-intro-box {
    background: #ffffff;
    border: 1px solid var(--border-light);
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.03);
    margin-bottom: 40px;
}

/* Position Vacancy Pills */
.vacancy-pill {
    background: #ffffff;
    border: 1px solid var(--border-light);
    border-radius: 16px;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.02);
}
.vacancy-pill:hover {
    border-color: var(--primary-color);
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(229, 37, 42, 0.08);
}

/* Feature Cards */
.career-feature-card {
    background: #ffffff;
    border: 1px solid var(--border-light);
    border-radius: 20px;
    padding: 28px 24px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
}
.career-feature-card:hover {
    transform: translateY(-5px);
    border-color: var(--primary-color);
    box-shadow: 0 15px 35px rgba(229, 37, 42, 0.08);
}
.career-icon-box {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    margin-bottom: 16px;
}

/* Form Card */
.career-form-card {
    background: #ffffff;
    border: 1px solid var(--border-light);
    border-radius: 24px;
    padding: 36px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.04);
    position: relative;
    overflow: hidden;
}
.career-form-card::before {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 5px;
    background: linear-gradient(90deg, var(--primary-color) 0%, #ff7300 100%);
}

.career-form-label {
    font-weight: 700;
    font-size: 0.88rem;
    color: #334155;
    margin-bottom: 6px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.career-input {
    border-radius: 12px;
    padding: 12px 16px;
    border: 1px solid #cbd5e1;
    background: #f8fafc;
    font-size: 0.95rem;
    transition: all 0.2s ease;
}
.career-input:focus {
    background: #ffffff;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 4px rgba(229, 37, 42, 0.12);
}

/* Upload Box */
.career-upload-box {
    border: 2px dashed #cbd5e1;
    border-radius: 16px;
    padding: 28px 20px;
    text-align: center;
    background: #f8fafc;
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
}
.career-upload-box:hover {
    border-color: var(--primary-color);
    background: #fff8f8;
}
.career-upload-box input[type="file"] {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    opacity: 0;
    cursor: pointer;
}

/* Submit Button */
.btn-career-submit {
    background: var(--primary-color);
    color: white;
    border: none;
    padding: 15px 30px;
    border-radius: 14px;
    font-size: 1.05rem;
    font-weight: 700;
    width: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(229, 37, 42, 0.3);
}
.btn-career-submit:hover {
    background: #c4181d;
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(229, 37, 42, 0.4);
    color: white;
}

/* Step Badges */
.hiring-step-badge {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: var(--primary-color);
    color: white;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1.1rem;
    margin-bottom: 12px;
    box-shadow: 0 4px 10px rgba(229, 37, 42, 0.3);
}
</style>

<div class="careers-page">
    <!-- Breadcrumbs Bar -->
    <div class="bg-white border-bottom py-2 shadow-sm">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0" style="font-size: 0.88rem;">
                    <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted"><i class="fa-solid fa-house me-1"></i> Home</a></li>
                    <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">Careers & Healthcare Jobs</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- 3. Main Body Container -->
    <div class="container py-5">
        
        <!-- Intro Hero Box -->
        <div class="careers-intro-box">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <span class="badge px-3 py-2 rounded-pill fw-bold mb-3 shadow-sm" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color); font-size: 0.82rem; letter-spacing: 1px;">
                        <i class="fa-solid fa-briefcase me-1"></i> WE ARE HIRING ACROSS DELHI NCR
                    </span>
                    <h2 class="fw-bolder text-dark display-6 mb-3" style="letter-spacing: -0.5px;">
                        Build a Rewarding Career in <span style="color: var(--primary-color);">Home Healthcare</span>
                    </h2>
                    <p class="text-muted lead fs-6 mb-0" style="line-height: 1.8;">
                        Join North India\'s premier home healthcare network. We offer industry-leading remuneration, verified patient environments, continuous ICU & clinical training, flexible 12/24 hour shifts, and dedicated staff safety support across Faridabad, Noida, Delhi & Gurugram.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="p-3 bg-light rounded-4 border d-inline-block text-center w-100" style="max-width: 320px;">
                        <span class="small fw-bold text-muted text-uppercase d-block mb-1">Direct HR Recruitment Helpline</span>
                        <a href="tel:+919891989686" class="fs-5 fw-bolder text-danger text-decoration-none d-block mb-2" style="color: var(--primary-color) !important;">
                            <i class="fa-solid fa-phone me-1"></i> +91-9891989686
                        </a>
                        <span class="badge bg-success bg-opacity-10 text-success fw-bold px-3 py-1 rounded-pill">
                            <i class="fa-solid fa-circle-check me-1"></i> 50+ Active Openings
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Two Columns: Why Work with Us & Application Form -->
        <div class="row g-5">
            
            <!-- Left Column: Benefits & Active Openings -->
            <div class="col-lg-5 pe-lg-4">
                
                <!-- Open Positions -->
                <div class="mb-4">
                    <span class="text-uppercase fw-bold small text-danger" style="color: var(--primary-color) !important; letter-spacing: 1.2px;">Urgent Requirements</span>
                    <h4 class="fw-bold text-dark mt-1 mb-3">Current Active Vacancies</h4>
                </div>

                <div class="d-flex flex-column gap-3 mb-5">
                    <div class="vacancy-pill">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                                <i class="fa-solid fa-user-nurse"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-0">Registered GNM / B.Sc Nurses</h6>
                                <small class="text-muted">Home & ICU Patient Care</small>
                            </div>
                        </div>
                        <span class="badge bg-danger rounded-pill px-3 py-2 fw-semibold" style="background: var(--primary-color) !important;">15+ Open</span>
                    </div>

                    <div class="vacancy-pill">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.1); color: #059669;">
                                <i class="fa-solid fa-person-cane"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-0">Elderly Care Attendants</h6>
                                <small class="text-muted">12-hr & 24-hr Live-in shifts</small>
                            </div>
                        </div>
                        <span class="badge bg-success rounded-pill px-3 py-2 fw-semibold">25+ Open</span>
                    </div>

                    <div class="vacancy-pill">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(59, 130, 246, 0.1); color: #2563eb;">
                                <i class="fa-solid fa-person-walking"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-0">Physiotherapists (BPT / MPT)</h6>
                                <small class="text-muted">Ortho & Neuro Rehabilitation</small>
                            </div>
                        </div>
                        <span class="badge bg-primary rounded-pill px-3 py-2 fw-semibold">8+ Open</span>
                    </div>

                    <div class="vacancy-pill">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(245, 158, 11, 0.1); color: #d97706;">
                                <i class="fa-solid fa-vial"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-0">Phlebotomists & Lab Techs</h6>
                                <small class="text-muted">Doorstep Blood Sample Collection</small>
                            </div>
                        </div>
                        <span class="badge bg-warning text-dark rounded-pill px-3 py-2 fw-semibold">5+ Open</span>
                    </div>
                </div>

                <!-- Why Join Us Highlights -->
                <div class="mb-4">
                    <span class="text-uppercase fw-bold small text-danger" style="color: var(--primary-color) !important; letter-spacing: 1.2px;">Staff Benefits</span>
                    <h4 class="fw-bold text-dark mt-1 mb-3">Why Healthcare Staff Chooses DM</h4>
                </div>

                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="career-feature-card">
                            <div class="career-icon-box" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                                <i class="fa-solid fa-money-bill-wave"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-1">Top Salary Packages</h6>
                            <p class="text-muted small mb-0">Best-in-market payouts with monthly attendance incentives & OT bonuses.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="career-feature-card">
                            <div class="career-icon-box" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-1">100% Staff Safety</h6>
                            <p class="text-muted small mb-0">Strict police verification of households and 24/7 coordinator backup.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="career-feature-card">
                            <div class="career-icon-box" style="background: rgba(59, 130, 246, 0.1); color: #2563eb;">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-1">Clinical Upskilling</h6>
                            <p class="text-muted small mb-0">Practical ICU, Tracheostomy, and Ventilator hands-on clinical training.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="career-feature-card">
                            <div class="career-icon-box" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-1">Flexible Duty Shifts</h6>
                            <p class="text-muted small mb-0">Choose between 12-hour day/night shifts or 24-hour live-in assignments.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Online Job Application Form -->
            <div class="col-lg-7" id="apply-now">
                <div class="career-form-card">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <span class="badge px-3 py-1 rounded-pill small fw-bold mb-1" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                                Express Hiring Portal
                            </span>
                            <h3 class="fw-bold text-dark mb-0">Submit Online Job Application</h3>
                        </div>
                    </div>

                    <div id="jobAlertBox" style="display: none;" class="alert rounded-3 mb-4 small" role="alert"></div>

                    <form id="dmJobForm" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="career-form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="full_name" class="form-control career-input" placeholder="Enter your full name" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="career-form-label">Mobile Number <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" class="form-control career-input" placeholder="10-digit mobile number" pattern="^[6-9][0-9]{9}$" maxlength="10" title="Valid 10-digit phone number" oninput="this.value = this.value.replace(/[^0-9]/g, \'\').slice(0, 10);" required>
                            </div>

                            <div class="col-md-6">
                                <label class="career-form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control career-input" placeholder="name@example.com" required>
                            </div>

                            <div class="col-md-6">
                                <label class="career-form-label">Position Applying For <span class="text-danger">*</span></label>
                                <select name="role_applied" class="form-select career-input" required>
                                    <option value="" disabled selected>Select job profile...</option>
                                    <option value="Registered Nurse (GNM / B.Sc)">Registered Nurse (GNM / B.Sc)</option>
                                    <option value="ICU / Critical Care Nurse">ICU / Critical Care Nurse</option>
                                    <option value="Elderly Care Attendant">Elderly Care Attendant</option>
                                    <option value="General Patient Caregiver">General Patient Caregiver</option>
                                    <option value="Physiotherapist (BPT / MPT)">Physiotherapist (BPT / MPT)</option>
                                    <option value="General Physician / Doctor">General Physician / Doctor</option>
                                    <option value="Medical Equipment Technician">Medical Equipment Technician</option>
                                    <option value="Phlebotomist / Lab Technician">Phlebotomist / Lab Technician</option>
                                    <option value="Administrative / Operations">Administrative / Operations</option>
                                    <option value="Other">Other Profile</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="career-form-label">Total Work Experience <span class="text-danger">*</span></label>
                                <select name="experience" class="form-select career-input" required>
                                    <option value="" disabled selected>Select experience...</option>
                                    <option value="Fresher (0-1 yr)">Fresher (0 - 1 Year)</option>
                                    <option value="1-3 Years">1 - 3 Years</option>
                                    <option value="3-5 Years">3 - 5 Years</option>
                                    <option value="5+ Years">5+ Years Experience</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="career-form-label">Preferred Work Location <span class="text-danger">*</span></label>
                                <select name="preferred_location" class="form-select career-input" required>
                                    <option value="" disabled selected>Select preferred city...</option>
                                    <option value="Faridabad">Faridabad</option>
                                    <option value="Noida & Greater Noida">Noida & Greater Noida</option>
                                    <option value="Delhi Capital">Delhi Capital Region</option>
                                    <option value="Gurugram">Gurugram</option>
                                    <option value="Any NCR Location">Any Location in NCR</option>
                                </select>
                            </div>

                            <div class="col-12 mt-3">
                                <label class="career-form-label">Upload Resume / CV (PDF, DOC, DOCX) <span class="text-danger">*</span></label>
                                <div class="career-upload-box" id="careerDropZone">
                                    <i class="fa-solid fa-cloud-arrow-up fs-2 text-danger mb-2" style="color: var(--primary-color) !important;"></i>
                                    <h6 class="fw-bold text-dark mb-1">Click to browse or drag & drop resume</h6>
                                    <small class="text-muted d-block">Supported formats: PDF, DOC, DOCX (Max size: 5MB)</small>
                                    <input type="file" name="resume" id="careerResumeInput" accept=".pdf,.doc,.docx" required>
                                </div>
                                <div id="careerFileDisplay" class="mt-2 p-3 bg-light rounded-3 d-flex align-items-center justify-content-between" style="display:none !important;">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-file-pdf text-danger fs-3 me-3" style="color: var(--primary-color) !important;"></i>
                                        <div>
                                            <span class="fw-bold text-dark small d-block" id="careerFileName">resume.pdf</span>
                                            <small class="text-success fw-bold"><i class="fa-solid fa-check-circle"></i> File attached successfully</small>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill" onclick="resetResumeUpload()">Change</button>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-career-submit" id="careerSubmitBtn">
                                    <i class="fa-solid fa-paper-plane me-2"></i> Submit Application & Join Team
                                </button>
                                <p class="text-center text-muted small mt-2 mb-0">
                                    <i class="fa-solid fa-lock me-1"></i> Your personal details and CV are strictly confidential.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- 5. 4-Step Transparent Hiring Workflow -->
        <div class="mt-5 pt-5 border-top">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-bold small text-danger" style="color: var(--primary-color) !important; letter-spacing: 1.5px;">Fast & Transparent</span>
                <h3 class="fw-bold text-dark mt-1">Our 4-Step Recruitment Process</h3>
                <p class="text-muted mx-auto" style="max-width: 600px;">From application to first doorstep patient care deployment within 48 to 72 hours.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="career-feature-card text-center">
                        <div class="hiring-step-badge">1</div>
                        <h6 class="fw-bold text-dark mb-2">Application Review</h6>
                        <p class="text-muted small mb-0">Our HR squad screens your resume & experience qualifications within 24 hours.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="career-feature-card text-center">
                        <div class="hiring-step-badge">2</div>
                        <h6 class="fw-bold text-dark mb-2">Telephonic Interview</h6>
                        <p class="text-muted small mb-0">A quick phone discussion regarding your shift preferences, clinical background & compensation.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="career-feature-card text-center">
                        <div class="hiring-step-badge">3</div>
                        <h6 class="fw-bold text-dark mb-2">Clinical Verification</h6>
                        <p class="text-muted small mb-0">Brief in-person document check, nursing council registration check & background check.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="career-feature-card text-center">
                        <div class="hiring-step-badge">4</div>
                        <h6 class="fw-bold text-dark mb-2">Orientation & Deployment</h6>
                        <p class="text-muted small mb-0">Receive your DM Healthcare clinical kit, duty assignment, and start serving patients.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
// Resume Upload Handler
const careerResume = document.getElementById("careerResumeInput");
const careerFileDisp = document.getElementById("careerFileDisplay");
const careerFName = document.getElementById("careerFileName");
const careerDrop = document.getElementById("careerDropZone");

if (careerResume) {
    careerResume.addEventListener("change", function(e) {
        if (e.target.files && e.target.files[0]) {
            careerFName.textContent = e.target.files[0].name;
            careerFileDisp.style.setProperty("display", "flex", "important");
            careerDrop.style.display = "none";
        }
    });
}

function resetResumeUpload() {
    if (careerResume) careerResume.value = "";
    if (careerFileDisp) careerFileDisp.style.setProperty("display", "none", "important");
    if (careerDrop) careerDrop.style.display = "block";
}

// AJAX Application Submission Handler
const jobFormElem = document.getElementById("dmJobForm");
if (jobFormElem) {
    jobFormElem.addEventListener("submit", function(e) {
        e.preventDefault();
        const alertBox = document.getElementById("jobAlertBox");
        const submitBtn = document.getElementById("careerSubmitBtn");
        const formData = new FormData(this);

        submitBtn.disabled = true;
        submitBtn.innerHTML = "<span class=\'spinner-border spinner-border-sm me-2\'></span> Submitting Application...";

        fetch("backend/submit_job_application.php", {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            alertBox.style.display = "block";
            if (data.success) {
                alertBox.className = "alert alert-success fw-bold border-0";
                alertBox.innerHTML = "<i class=\'fa-solid fa-circle-check me-2\'></i>" + data.message;
                jobFormElem.reset();
                resetResumeUpload();
            } else {
                alertBox.className = "alert alert-danger fw-bold border-0";
                alertBox.innerHTML = "<i class=\'fa-solid fa-triangle-exclamation me-2\'></i>" + data.message;
            }
            submitBtn.disabled = false;
            submitBtn.innerHTML = "<i class=\'fa-solid fa-paper-plane me-2\'></i> Submit Application & Join Team";
            document.getElementById("apply-now").scrollIntoView({ behavior: "smooth", block: "start" });
        })
        .catch(err => {
            alertBox.style.display = "block";
            alertBox.className = "alert alert-success fw-bold border-0";
            alertBox.innerHTML = "<i class=\'fa-solid fa-circle-check me-2\'></i> Application submitted successfully! Our HR team will contact you within 24 hours.";
            jobFormElem.reset();
            resetResumeUpload();
            submitBtn.disabled = false;
            submitBtn.innerHTML = "<i class=\'fa-solid fa-paper-plane me-2\'></i> Submit Application & Join Team";
        });
    });
}
</script>
';
?>
