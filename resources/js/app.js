document.addEventListener('DOMContentLoaded', () => {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const closeBtn = document.getElementById('lightbox-close');
    const prevBtn = document.getElementById('lightbox-prev');
    const nextBtn = document.getElementById('lightbox-next');
    const header = document.getElementById('header');
    const footer = document.getElementById('footer');

    const buttons = document.querySelectorAll('[data-lightbox-index]');
    const images = Array.from(buttons).map(btn => btn.dataset.lightboxSrc);
    let currentIndex = 0;

    function openLightbox(index) {
        currentIndex = index;
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        lightboxImage.src = images[currentIndex];
        document.body.style.overflow = 'hidden';
        if(header) header.classList.add('hidden');
        if(footer) footer.classList.add('hidden');
    }

    function closeLightbox() {
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
        document.body.style.overflow = '';
        if(header) header.classList.remove('hidden');
        if(footer) footer.classList.remove('hidden');
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        lightboxImage.src = images[currentIndex];
    }

    function previousImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        lightboxImage.src = images[currentIndex];
    }

    // Event listeners
    buttons.forEach(btn => {
        btn.addEventListener('click', () => openLightbox(Number(btn.dataset.lightboxIndex)));
    });

    closeBtn?.addEventListener('click', closeLightbox);
    prevBtn?.addEventListener('click', (e) => { e.stopPropagation(); previousImage(); });
    nextBtn?.addEventListener('click', (e) => { e.stopPropagation(); nextImage(); });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('hidden')) {
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') nextImage();
            if (e.key === 'ArrowLeft') previousImage();
        }
    });

    // Scroll to projects section if coming from "View all projects" button
    const viewAllProjectsBtn = document.getElementById('view-all-projects-btn');
    if (viewAllProjectsBtn) {
        viewAllProjectsBtn.addEventListener('click', () => {
            sessionStorage.setItem('scrollToProjects', 'true');
        });
    }

    if (sessionStorage.getItem('scrollToProjects') === 'true') {
        sessionStorage.removeItem('scrollToProjects');
        const projectsSection = document.getElementById('projects');
        if (projectsSection) {
            setTimeout(() => {
                projectsSection.scrollIntoView();
            }, 100);
        }
    }
});
