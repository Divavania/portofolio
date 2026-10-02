/* =========================================
   MOBILE MENU
========================================= */

const menuToggle = document.getElementById("menuToggle");
const navMenu = document.querySelector(".nav-menu");

if (menuToggle) {

    menuToggle.addEventListener("click", () => {
        navMenu.classList.toggle("active");
    });

}

document.querySelectorAll(".nav-menu a").forEach(link => {

    link.addEventListener("click", () => {
        navMenu.classList.remove("active");
    });

});


/* =========================================
   EXPERIENCE EXPAND
========================================= */

document.querySelectorAll("[data-expand]").forEach(button => {

    button.addEventListener("click", () => {

        const targetId = button.dataset.expand;
        const target = document.getElementById(targetId);

        target.classList.toggle("active");

        if (target.classList.contains("active")) {

            button.innerHTML = `
                Hide responsibilities
                <span>↑</span>
            `;

        } else {

            button.innerHTML = `
                View responsibilities
                <span>↓</span>
            `;

        }

    });

});


/* =========================================
   PROJECT MODAL
========================================= */

const projectModal = document.getElementById("projectModal");

const modalOverlay = document.getElementById("modalOverlay");
const modalClose = document.getElementById("modalClose");

const modalNumber = document.getElementById("modalNumber");
const modalCategory = document.getElementById("modalCategory");

const galleryImage = document.getElementById("galleryImage");
const galleryPlaceholder = document.getElementById("galleryPlaceholder");

const galleryTitle = document.getElementById("galleryTitle");
const galleryDescription = document.getElementById("galleryDescription");

const currentImage = document.getElementById("currentImage");
const totalImages = document.getElementById("totalImages");

const galleryPrev = document.getElementById("galleryPrev");
const galleryNext = document.getElementById("galleryNext");

const modalThumbnails = document.getElementById("modalThumbnails");
const projectDetails = document.getElementById("projectDetails");


let currentProject = 0;
let currentGalleryIndex = 0;


/* Open Project */

document.querySelectorAll(".project-button").forEach(button => {

    button.addEventListener("click", () => {

        currentProject = Number(button.dataset.project);
        currentGalleryIndex = 0;

        renderProject();

        projectModal.classList.add("active");

        document.body.classList.add("modal-open");

    });

});


/* Render Project */

function renderProject() {

    const project = projectData[currentProject];

    modalNumber.textContent = project.number;

    modalCategory.textContent = project.category;

    totalImages.textContent =
        String(project.gallery.length).padStart(2, "0");


    renderGallery();

    renderProjectDetails();

}


/* Render Gallery */

function renderGallery() {

    const project = projectData[currentProject];

    const gallery = project.gallery[currentGalleryIndex];

    currentImage.textContent =
        String(currentGalleryIndex + 1).padStart(2, "0");


    galleryTitle.textContent = gallery.title;

    galleryDescription.textContent = gallery.description;


    galleryImage.src = gallery.image;

    galleryImage.alt = gallery.title;

    galleryImage.style.display = "block";

    galleryPlaceholder.style.display = "none";


    galleryImage.onerror = () => {

        galleryImage.style.display = "none";

        galleryPlaceholder.style.display = "block";

    };


    renderThumbnails();

}


/* Thumbnails */

function renderThumbnails() {

    const project = projectData[currentProject];

    modalThumbnails.innerHTML = "";


    project.gallery.forEach((item, index) => {

        const thumbnail = document.createElement("button");

        thumbnail.className = "thumbnail";

        if (index === currentGalleryIndex) {
            thumbnail.classList.add("active");
        }

        thumbnail.innerHTML = `
            <img
                src="${item.image}"
                alt="${item.title}"
                onerror="this.style.display='none'"
            >
        `;

        thumbnail.addEventListener("click", () => {

            currentGalleryIndex = index;

            renderGallery();

        });

        modalThumbnails.appendChild(thumbnail);

    });

}


/* Project Details */

function renderProjectDetails() {

    const project = projectData[currentProject];

    projectDetails.innerHTML = "";


    Object.entries(project.details).forEach(
        ([title, description]) => {

            const item = document.createElement("div");

            item.className = "project-detail-item";

            item.innerHTML = `
                <strong>${title}</strong>
                <p>${description}</p>
            `;

            projectDetails.appendChild(item);

        }
    );

}


/* Next Image */

function nextImage() {

    const project = projectData[currentProject];

    currentGalleryIndex++;

    if (currentGalleryIndex >= project.gallery.length) {
        currentGalleryIndex = 0;
    }

    renderGallery();

}


/* Previous Image */

function previousImage() {

    const project = projectData[currentProject];

    currentGalleryIndex--;

    if (currentGalleryIndex < 0) {
        currentGalleryIndex = project.gallery.length - 1;
    }

    renderGallery();

}


galleryNext.addEventListener("click", nextImage);

galleryPrev.addEventListener("click", previousImage);


/* Close Project Modal */

function closeProjectModal() {

    projectModal.classList.remove("active");

    document.body.classList.remove("modal-open");

}

modalClose.addEventListener("click", closeProjectModal);

modalOverlay.addEventListener("click", closeProjectModal);


/* Keyboard Navigation */

document.addEventListener("keydown", event => {

    if (!projectModal.classList.contains("active")) {
        return;
    }

    if (event.key === "Escape") {
        closeProjectModal();
    }

    if (event.key === "ArrowRight") {
        nextImage();
    }

    if (event.key === "ArrowLeft") {
        previousImage();
    }

});


/* =========================================
   CERTIFICATE SLIDER
========================================= */

const certificateTrack =
    document.getElementById("certificateTrack");

const certificateSlides =
    document.querySelectorAll(".certificate-slide");

const certificatePrev =
    document.getElementById("certificatePrev");

const certificateNext =
    document.getElementById("certificateNext");

const certificateDots =
    document.getElementById("certificateDots");

let certificateIndex = 0;


/* CREATE DOTS */

certificateSlides.forEach((_, index) => {

    const dot = document.createElement("button");

    dot.className = "certificate-dot";

    dot.setAttribute(
        "aria-label",
        `Go to certificate ${index + 1}`
    );

    dot.addEventListener("click", () => {
        certificateIndex = index;
        updateCertificateSlider();
    });

    certificateDots.appendChild(dot);

});


const certificateDotItems =
    document.querySelectorAll(".certificate-dot");


/* UPDATE SLIDER */

function updateCertificateSlider() {

    certificateTrack.style.transform =
        `translateX(-${certificateIndex * 100}%)`;


    certificateDotItems.forEach((dot, index) => {

        dot.classList.toggle(
            "active",
            index === certificateIndex
        );

    });


    certificatePrev.disabled =
        certificateIndex === 0;

    certificateNext.disabled =
        certificateIndex === certificateSlides.length - 1;

    adjustCertificateHeight();
}


/* NEXT */

certificateNext.addEventListener("click", () => {

    if (
        certificateIndex <
        certificateSlides.length - 1
    ) {

        certificateIndex++;

        updateCertificateSlider();

    }

});


/* PREVIOUS */

certificatePrev.addEventListener("click", () => {

    if (certificateIndex > 0) {

        certificateIndex--;

        updateCertificateSlider();

    }

});


/* INITIAL STATE */

updateCertificateSlider();

/* =========================================
   ADJUST CERTIFICATE IMAGE SIZE
========================================= */

function adjustCertificateHeight() {

    const currentSlide =
        certificateSlides[certificateIndex];

    if (!currentSlide) return;

    const image =
        currentSlide.querySelector("img");

    const imageWrap =
        currentSlide.querySelector(
            ".certificate-image-wrap"
        );

    if (!image || !imageWrap) return;


    if (!image.complete) {

        image.addEventListener(
            "load",
            adjustCertificateHeight,
            { once: true }
        );

        return;
    }


    const ratio =
        image.naturalWidth /
        image.naturalHeight;


    /* PORTRAIT */

    if (ratio < 0.85) {

        imageWrap.style.minHeight = "520px";

    }

    /* LANDSCAPE */

    else if (ratio > 1.25) {

        imageWrap.style.minHeight = "300px";

    }

    /* SQUARE / MEDIUM */

    else {

        imageWrap.style.minHeight = "400px";

    }

}


/* =========================================
   CERTIFICATE PDF MODAL
========================================= */

const certificateModal =
    document.getElementById("certificateModal");

const certificateClose =
    document.getElementById("certificateClose");

const certificateOverlay =
    document.getElementById("certificateOverlay");

const certificateFrame =
    certificateModal?.querySelector("iframe");


document
    .querySelectorAll(".certificate-image-button")
    .forEach(button => {

        button.addEventListener("click", () => {

            const pdf =
                button.dataset.pdf;

            const title =
                button.dataset.title || "Certificate";


            if (
                !certificateModal ||
                !certificateFrame ||
                !pdf
            ) return;


            certificateFrame.src = pdf;

            certificateFrame.title = title;

            certificateModal.classList.add("active");

            document.body.classList.add("modal-open");

        });

    });


function closeCertificateModal() {

    if (!certificateModal) return;

    certificateModal.classList.remove("active");

    document.body.classList.remove("modal-open");

    if (certificateFrame) {
        certificateFrame.src = "about:blank";
    }

}


certificateClose?.addEventListener(
    "click",
    closeCertificateModal
);


certificateOverlay?.addEventListener(
    "click",
    closeCertificateModal
);



/* ESC - CLOSE CERTIFICATE MODAL */

document.addEventListener("keydown", event => {
    if (
        event.key === "Escape" &&
        certificateModal?.classList.contains("active")
    ) {
        closeCertificateModal();
    }
});

// =========================================
// WRITING - SHOW MORE / SHOW LESS
// =========================================
const extraArticles = document.querySelectorAll(".writing-extra");
const writingMore = document.getElementById("writingMore");

if (writingMore && extraArticles.length > 0) {
    const buttonText = writingMore.querySelector(".button-text");
    const buttonIcon = writingMore.querySelector(".button-icon");

    let isExpanded = false;

    function updateWritingButton() {
        if (buttonText) {
            buttonText.textContent = isExpanded
                ? "Show Less Articles"
                : "Show More Articles";
        }

        if (buttonIcon) {
            buttonIcon.textContent = isExpanded ? "↑" : "↓";
        }

        writingMore.setAttribute(
            "aria-expanded",
            String(isExpanded)
        );
    }

    function toggleExtraArticles() {
        extraArticles.forEach(article => {
            article.hidden = !isExpanded;
        });
    }

    // Kondisi awal
    toggleExtraArticles();
    updateWritingButton();

    writingMore.addEventListener("click", function () {
        isExpanded = !isExpanded;

        toggleExtraArticles();
        updateWritingButton();
    });
}