<?php
// DO NOT set $full_page_override = true;
// We assign our frontend custom design to $frontend_custom_sections so it renders full width!

$frontend_custom_sections = '
<style>
/* Premium Fonts */
@import url("https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap");

.jobs-container {
    font-family: "Outfit", sans-serif;
    background-color: #f8fbff;
    overflow-x: hidden;
    width: 100%;
}

/* Hero Section */
.jobs-hero {
    position: relative;
    padding: 100px 0;
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    overflow: hidden;
}
.jobs-hero::before {
    content: "";
    position: absolute;
    top: -50%; left: -50%;
    width: 200%; height: 200%;
    background: radial-gradient(circle at center, rgba(56, 189, 248, 0.1) 0%, transparent 50%);
    animation: rotate 30s linear infinite;
}
@keyframes rotate { 100% { transform: rotate(360deg); } }

.hero-title {
    font-weight: 800;
    font-size: 3.5rem;
    color: #ffffff;
    letter-spacing: -1px;
    margin-bottom: 20px;
}
.hero-subtitle {
    font-size: 1.2rem;
    color: #94a3b8;
    max-width: 600px;
}

/* Content Area */
.jobs-content {
    padding: 80px 0;
}

/* Feature Cards */
.feature-box {
    background: #ffffff;
    border-radius: 20px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
    border: 1px solid rgba(0,0,0,0.02);
    transition: all 0.3s ease;
}
.feature-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 50px rgba(10, 91, 255, 0.08);
}
.feature-icon {
    width: 60px;
    height: 60px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 20px;
}
.icon-blue { background: rgba(59, 130, 246, 0.1); color: #3b82f6; }
.icon-green { background: rgba(16, 185, 129, 0.1); color: #10b981; }
.icon-purple { background: rgba(139, 92, 246, 0.1); color: #8b5cf6; }

/* Application Form Card */
.form-card {
    background: #ffffff;
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.5);
    position: relative;
}
.form-card::after {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 6px;
    background: linear-gradient(90deg, #3b82f6, #8b5cf6);
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
    padding: 14px 20px;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    background-color: #f8fafc;
    font-size: 1rem;
    transition: all 0.2s ease;
}
.form-control:focus, .form-select:focus {
    box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
    border-color: #3b82f6;
    background-color: #ffffff;
}

/* File Upload */
.upload-area {
    border: 2px dashed #cbd5e1;
    border-radius: 16px;
    padding: 40px 20px;
    text-align: center;
    background: #f8fafc;
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
}
.upload-area:hover, .upload-area.dragover {
    border-color: #3b82f6;
    background: #eff6ff;
}
.upload-area input[type="file"] {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    opacity: 0; cursor: pointer;
}
.upload-icon {
    font-size: 40px;
    color: #94a3b8;
    margin-bottom: 15px;
    transition: color 0.3s ease;
}
.upload-area:hover .upload-icon {
    color: #3b82f6;
}

/* Submit Button */
.btn-submit {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    color: white;
    border: none;
    padding: 16px 30px;
    border-radius: 12px;
    font-size: 1.1rem;
    font-weight: 600;
    width: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
}
.btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 25px rgba(37, 99, 235, 0.3);
    color: white;
}
</style>

<div class="jobs-container">
    <!-- Premium Hero -->
    <div class="jobs-hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row">
                <div class="col-lg-8">
                    <span class="badge bg-primary bg-opacity-25 text-info px-3 py-2 rounded-pill mb-3 fw-semibold">We\'re Hiring!</span>
                    <h1 class="hero-title">Shape the Future of <br><span style="color: #38bdf8;">Healthcare</span> with Us.</h1>
                    <p class="hero-subtitle">Join a team of passionate professionals dedicated to providing world-class home healthcare services. Discover your next career move.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="jobs-content">
        <div class="container">
            <div class="row g-5">
                
                <!-- Left Column: Culture & Benefits -->
                <div class="col-lg-5 pe-lg-5">
                    <h3 class="fw-bold text-slate-900 mb-4" style="color:#0f172a;">Why DM Healthcare?</h3>
                    <p class="text-muted mb-5">We believe that great care starts with taking care of our team. We offer a supportive environment where you can grow professionally.</p>
                    
                    <div class="feature-box">
                        <div class="feature-icon icon-blue">
                            <i class="fa-solid fa-heart-pulse"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Meaningful Work</h5>
                        <p class="text-muted small mb-0">Make a direct impact on patients\' lives by delivering quality care right at their doorstep.</p>
                    </div>

                    <div class="feature-box">
                        <div class="feature-icon icon-green">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Continuous Learning</h5>
                        <p class="text-muted small mb-0">We provide regular training sessions, workshops, and opportunities to upgrade your skills.</p>
                    </div>

                    <div class="feature-box">
                        <div class="feature-icon icon-purple">
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Competitive Benefits</h5>
                        <p class="text-muted small mb-0">Enjoy excellent compensation, flexible scheduling, and comprehensive health benefits.</p>
                    </div>
                </div>

                <!-- Right Column: Application Form -->
                <div class="col-lg-7">
                    <div class="form-card" id="apply-now">
                        <h3 class="fw-bold mb-1" style="color: #1e293b;">Submit Your Application</h3>
                        <p class="text-muted mb-4 small">Fill out the form below and we\'ll get back to you shortly.</p>
                        
                        <div id="alert-box" style="display: none;" class="alert rounded-3 mb-4" role="alert"></div>

                        <form id="jobApplicationForm" enctype="multipart/form-data">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="full_name" class="form-control" placeholder="John Doe" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel" name="phone" class="form-control" placeholder="9876543210" pattern="[0-9]{10}" maxlength="10" title="Please enter a valid 10-digit mobile number" oninput="this.value = this.value.replace(/[^0-9]/g, \'\')" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Position Applying For <span class="text-danger">*</span></label>
                                    <select name="role_applied" class="form-select" required>
                                        <option value="" disabled selected>Select a role...</option>
                                        <option value="Registered Nurse">Registered Nurse</option>
                                        <option value="Caregiver / Attendant">Caregiver / Attendant</option>
                                        <option value="Physiotherapist">Physiotherapist</option>
                                        <option value="Physician / Doctor">Physician / Doctor</option>
                                        <option value="Medical Technician">Medical Technician</option>
                                        <option value="Admin / Office Staff">Admin / Office Staff</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                
                                <div class="col-12 mt-4">
                                    <label class="form-label">Upload Resume (PDF, DOC, DOCX) <span class="text-danger">*</span></label>
                                    <div class="upload-area" id="drop-zone">
                                        <i class="fa-solid fa-cloud-arrow-up upload-icon"></i>
                                        <h6 class="fw-bold text-dark mb-1">Click to browse or drag & drop</h6>
                                        <p class="text-muted small mb-0">Max file size: 5MB</p>
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
                                        Send Application <i class="fa-solid fa-arrow-right ms-2"></i>
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
// File Upload Styling
const fileInput = document.getElementById("resume");
const fileDisplay = document.getElementById("file-name-display");
const fnameText = document.getElementById("fname-text");
const dropZone = document.getElementById("drop-zone");

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

// AJAX Form Submission
document.getElementById("jobApplicationForm").addEventListener("submit", function(e) {
    e.preventDefault();
    
    let submitBtn = document.getElementById("submitBtn");
    let alertBox = document.getElementById("alert-box");
    let formData = new FormData(this);
    
    submitBtn.innerHTML = "<span class=\'spinner-border spinner-border-sm me-2\' role=\'status\' aria-hidden=\'true\'></span> Processing...";
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
            fileDisplay.style.setProperty("display", "none", "important");
            dropZone.style.display = "block";
        } else {
            alertBox.className = "alert alert-danger fw-bold border-0";
            alertBox.innerHTML = "<i class=\'fa-solid fa-triangle-exclamation me-2\'></i>" + data.message;
        }
        submitBtn.innerHTML = "Send Application <i class=\'fa-solid fa-arrow-right ms-2\'></i>";
        submitBtn.disabled = false;
        
        // Scroll to alert
        document.getElementById("apply-now").scrollIntoView({ behavior: "smooth", block: "start" });
    })
    .catch(error => {
        alertBox.style.display = "block";
        alertBox.className = "alert alert-danger fw-bold border-0";
        alertBox.innerHTML = "<i class=\'fa-solid fa-triangle-exclamation me-2\'></i> An error occurred. Please try again.";
        submitBtn.innerHTML = "Send Application <i class=\'fa-solid fa-arrow-right ms-2\'></i>";
        submitBtn.disabled = false;
    });
});
</script>
';
?>
