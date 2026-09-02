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
/* Jobs & Careers Portal Styling */
.jobs-container {
    background-color: #f8fafc;
    overflow-x: hidden;
    width: 100%;
}

/* Hero Section */
.jobs-hero {
    position: relative;
    padding: 70px 0 60px 0;
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    border-bottom: 4px solid var(--primary-color);
}
.hero-title {
    font-weight: 800;
    font-size: 3rem;
    color: #ffffff;
    letter-spacing: -0.5px;
    margin-bottom: 16px;
}
.hero-subtitle {
    font-size: 1.15rem;
    color: #94a3b8;
    max-width: 650px;
    line-height: 1.7;
}

/* Content Area */
.jobs-content {
    padding: 60px 0 80px 0;
}

/* Feature Cards */
.feature-box {
    background: #ffffff;
    border-radius: 20px;
    padding: 26px;
    margin-bottom: 24px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}
.feature-box:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 35px rgba(229, 37, 42, 0.08);
    border-color: rgba(229, 37, 42, 0.2);
}
.feature-icon {
    width: 54px;
    height: 54px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.icon-red { background: rgba(229, 37, 42, 0.1); color: var(--primary-color); }
.icon-blue { background: rgba(59, 130, 246, 0.1); color: #3b82f6; }
.icon-green { background: rgba(16, 185, 129, 0.1); color: #10b981; }
.icon-purple { background: rgba(139, 92, 246, 0.1); color: #8b5cf6; }

/* Application Form Card */
.form-card {
    background: #ffffff;
    border-radius: 24px;
    padding: 36px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
    border: 1px solid #e2e8f0;
    position: relative;
}
.form-card::after {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 5px;
    background: linear-gradient(90deg, var(--primary-color), #f97316);
    border-radius: 24px 24px 0 0;
}

/* Form Elements */
.form-label {
    font-weight: 600;
    color: #334155;
    margin-bottom: 8px;
    font-size: 0.95rem;
}
.form-control, .form-select {
    padding: 13px 18px;
    border-radius: 12px;
    border: 1px solid #cbd5e1;
    background-color: #ffffff;
    font-size: 0.98rem;
    transition: all 0.2s ease;
}
.form-control:focus, .form-select:focus {
    box-shadow: 0 0 0 4px rgba(229, 37, 42, 0.12);
    border-color: var(--primary-color);
    background-color: #ffffff;
}

/* File Upload */
.upload-area {
    border: 2px dashed #cbd5e1;
    border-radius: 16px;
    padding: 30px 20px;
    text-align: center;
    background: #f8fafc;
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
}
.upload-area:hover, .upload-area.dragover {
    border-color: var(--primary-color);
    background: #fff5f5;
}
.upload-area input[type="file"] {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    opacity: 0; cursor: pointer;
}
.upload-icon {
    font-size: 36px;
    color: #94a3b8;
    margin-bottom: 12px;
    transition: color 0.3s ease;
}
.upload-area:hover .upload-icon {
    color: var(--primary-color);
}

/* Submit Button */
.btn-submit {
    background: var(--primary-color);
    color: white;
    border: none;
    padding: 15px 30px;
    border-radius: 12px;
    font-size: 1.05rem;
    font-weight: 700;
    width: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(229, 37, 42, 0.25);
}
.btn-submit:hover {
    background: #c4181d;
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(229, 37, 42, 0.35);
    color: white;
}
</style>

<!-- Top Responsive Banner -->
<div class="page-header-banner-wrap w-100" style="border-bottom: 4px solid var(--primary-color); background: #0f172a;">
    <img src="assets/images/banner2.jpg" alt="Healthcare Careers & Jobs - DM Healthcare" class="img-fluid w-100" style="width: 100%; height: auto; max-height: 480px; object-fit: cover; display: block;" onerror="this.onerror=null; this.src=\'assets/images/banner1.jpg\';">
</div>

<!-- Breadcrumbs Bar -->
<div class="bg-white border-bottom py-2 shadow-sm">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="font-size: 0.88rem;">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted"><i class="fa-solid fa-house me-1"></i> Home</a></li>
                <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">Jobs & Careers</li>
            </ol>
        </nav>
    </div>
</div>

<div class="jobs-container">
    <!-- Premium Hero Intro -->
    <div class="jobs-hero">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="badge px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm" style="background: rgba(229, 37, 42, 0.2); color: #ff8b8e;">
                        <i class="fa-solid fa-briefcase me-1"></i> WE ARE HIRING ACROSS DELHI NCR
                    </span>
                    <h1 class="hero-title">Shape the Future of <span style="color: #ff6b6e;">Home Healthcare</span></h1>
                    <p class="hero-subtitle mb-0">Join North India\'s fastest-growing home healthcare network. Work with certified clinical leaders, enjoy high payout packages, flexible shifts, and continuous career growth.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="#apply-now" class="btn btn-danger btn-lg rounded-pill px-4 py-3 fw-bold shadow" style="background: var(--primary-color); border-color: var(--primary-color);">
                        <i class="fa-solid fa-paper-plane me-2"></i> Apply Online Now
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="jobs-content">
        <div class="container">
            <div class="row g-5">
                
                <!-- Left Column: Culture & Benefits -->
                <div class="col-lg-5 pe-lg-4">
                    <div class="mb-4">
                        <span class="text-uppercase fw-bold small text-danger" style="color: var(--primary-color) !important; letter-spacing: 1px;">Why Work With Us</span>
                        <h3 class="fw-bold text-dark mt-1">Why Choose a Career at DM Healthcare?</h3>
                        <p class="text-muted small">We empower our medical and nursing professionals with competitive compensation, respect, safety, and continuous skill advancement.</p>
                    </div>
                    
                    <div class="feature-box">
                        <div class="feature-icon icon-red">
                            <i class="fa-solid fa-heart-pulse"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-1">Meaningful Patient Impact</h5>
                        <p class="text-muted small mb-0">Deliver 1-on-1 personalized bedside medical care directly to patients recovering at home in Delhi, Faridabad, Noida & Gurugram.</p>
                    </div>

                    <div class="feature-box">
                        <div class="feature-icon icon-green">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-1">Skill Certification & Training</h5>
                        <p class="text-muted small mb-0">Regular clinical workshops on advanced ICU protocols, ventilator management, tracheostomy care, and geriatric nursing.</p>
                    </div>

                    <div class="feature-box">
                        <div class="feature-icon icon-blue">
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-1">Top-Tier Payouts & Timely Pay</h5>
                        <p class="text-muted small mb-0">Industry-leading salary packages, overtime bonuses, flexible 12-hour/24-hour shifts, and on-time direct bank transfers.</p>
                    </div>

                    <div class="feature-box">
                        <div class="feature-icon icon-purple">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-1">Staff Safety & 24/7 Support</h5>
                        <p class="text-muted small mb-0">Complete staff insurance coverage, emergency coordinator backup, and respectful, verified household environments.</p>
                    </div>
                </div>

                <!-- Right Column: Application Form -->
                <div class="col-lg-7">
                    <div class="form-card" id="apply-now">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <h3 class="fw-bold mb-1 text-dark">Submit Job Application</h3>
                                <p class="text-muted mb-0 small">Fill out your details below and our HR team will contact you within 24 hours.</p>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill fw-bold small">Active Openings</span>
                        </div>
                        
                        <div id="alert-box" style="display: none;" class="alert rounded-3 mb-4" role="alert"></div>

                        <form id="jobApplicationForm" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="full_name" class="form-control" placeholder="Enter your full name" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel" name="phone" class="form-control" placeholder="10-digit mobile number" pattern="[0-9]{10}" maxlength="10" title="Please enter a valid 10-digit mobile number" oninput="this.value = this.value.replace(/[^0-9]/g, \'\')" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Position Applying For <span class="text-danger">*</span></label>
                                    <select name="role_applied" class="form-select" required>
                                        <option value="" disabled selected>Select position...</option>
                                        <option value="Registered Nurse (GNM / B.Sc)">Registered Nurse (GNM / B.Sc)</option>
                                        <option value="ICU / Critical Care Nurse">ICU / Critical Care Nurse</option>
                                        <option value="Elderly Care Attendant">Elderly Care Attendant</option>
                                        <option value="General Patient Caregiver">General Patient Caregiver</option>
                                        <option value="Physiotherapist (BPT / MPT)">Physiotherapist (BPT / MPT)</option>
                                        <option value="General Physician / Doctor">General Physician / Doctor</option>
                                        <option value="Medical Equipment Technician">Medical Equipment Technician</option>
                                        <option value="Phlebotomist / Lab Technician">Phlebotomist / Lab Technician</option>
                                        <option value="Administrative / Operations">Administrative / Operations</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Total Experience <span class="text-danger">*</span></label>
                                    <select name="experience" class="form-select" required>
                                        <option value="" disabled selected>Select experience...</option>
                                        <option value="Fresher (0-1 yr)">Fresher (0 - 1 Year)</option>
                                        <option value="1-3 Years">1 - 3 Years</option>
                                        <option value="3-5 Years">3 - 5 Years</option>
                                        <option value="5+ Years">5+ Years Experience</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Preferred Location <span class="text-danger">*</span></label>
                                    <select name="preferred_location" class="form-select" required>
                                        <option value="" disabled selected>Select preferred city...</option>
                                        <option value="Faridabad">Faridabad</option>
                                        <option value="Noida & Greater Noida">Noida & Greater Noida</option>
                                        <option value="Delhi Capital">Delhi Capital Region</option>
                                        <option value="Gurugram">Gurugram</option>
                                        <option value="Any NCR Location">Anywhere in Delhi NCR</option>
                                    </select>
                                </div>
                                
                                <div class="col-12 mt-3">
                                    <label class="form-label">Upload Resume / CV (PDF, DOC, DOCX) <span class="text-danger">*</span></label>
                                    <div class="upload-area" id="drop-zone">
                                        <i class="fa-solid fa-cloud-arrow-up upload-icon"></i>
                                        <h6 class="fw-bold text-dark mb-1">Click to browse or drag & drop your resume</h6>
                                        <p class="text-muted small mb-0">Accepted formats: PDF, DOC, DOCX (Max: 5MB)</p>
                                        <input type="file" name="resume" id="resume" accept=".pdf,.doc,.docx" required>
                                    </div>
                                    <div id="file-name-display" class="mt-3 p-3 bg-light rounded-3 d-flex align-items-center" style="display:none !important;">
                                        <i class="fa-solid fa-file-lines text-primary fs-4 me-3"></i>
                                        <div>
                                            <div class="fw-bold text-dark small" id="fname-text">filename.pdf</div>
                                            <div class="text-success small fw-semibold"><i class="fa-solid fa-check"></i> Ready to upload</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-4 pt-2">
                                    <button type="submit" class="btn btn-submit" id="submitBtn">
                                        Submit Application <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
// File Upload Display Handler
const fileInput = document.getElementById("resume");
const fileDisplay = document.getElementById("file-name-display");
const fnameText = document.getElementById("fname-text");
const dropZone = document.getElementById("drop-zone");

if (fileInput) {
    fileInput.addEventListener("change", function(e) {
        let fileName = e.target.files[0] ? e.target.files[0].name : "";
        if(fileName) {
            fnameText.textContent = fileName;
            fileDisplay.style.setProperty("display", "flex", "important");
            dropZone.style.display = "none";
        } else {
            fileDisplay.style.setProperty("display", "none", "important");
            dropZone.style.display = "block";
        }
    });
}

// AJAX Form Submission
const jobForm = document.getElementById("jobApplicationForm");
if (jobForm) {
    jobForm.addEventListener("submit", function(e) {
        e.preventDefault();
        
        let submitBtn = document.getElementById("submitBtn");
        let alertBox = document.getElementById("alert-box");
        let formData = new FormData(this);
        
        submitBtn.innerHTML = "<span class=\'spinner-border spinner-border-sm me-2\' role=\'status\' aria-hidden=\'true\'></span> Submitting Application...";
        submitBtn.disabled = true;
        
        fetch("backend/submit_job_application.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alertBox.style.display = "block";
            if(data.success) {
                alertBox.className = "alert alert-success fw-bold border-0";
                alertBox.innerHTML = "<i class=\'fa-solid fa-circle-check me-2\'></i>" + data.message;
                this.reset();
                if (fileDisplay) fileDisplay.style.setProperty("display", "none", "important");
                if (dropZone) dropZone.style.display = "block";
            } else {
                alertBox.className = "alert alert-danger fw-bold border-0";
                alertBox.innerHTML = "<i class=\'fa-solid fa-triangle-exclamation me-2\'></i>" + data.message;
            }
            submitBtn.innerHTML = "Submit Application <i class=\'fa-solid fa-arrow-right ms-2\'></i>";
            submitBtn.disabled = false;
            
            document.getElementById("apply-now").scrollIntoView({ behavior: "smooth", block: "start" });
        })
        .catch(error => {
            alertBox.style.display = "block";
            alertBox.className = "alert alert-danger fw-bold border-0";
            alertBox.innerHTML = "<i class=\'fa-solid fa-triangle-exclamation me-2\'></i> An error occurred while submitting your application. Please try again or call HR.";
            submitBtn.innerHTML = "Submit Application <i class=\'fa-solid fa-arrow-right ms-2\'></i>";
            submitBtn.disabled = false;
        });
    });
}
</script>
';
?>
