const burger = document.getElementById('burger');
const nav = document.getElementById('nav');

if (burger && nav) {
    burger.addEventListener('click', () => {
        burger.classList.toggle('is-open');
        nav.classList.toggle('is-open');
    });
}

/* Scroll reveal */
const revealTargets = [
    ...document.querySelectorAll('.quick-link-card'),
    ...document.querySelectorAll('.admission-steps__head'),
    ...document.querySelectorAll('.admission-step'),
];

revealTargets.forEach((el, i) => {
    el.classList.add('reveal');
    el.style.setProperty('--reveal-delay', `${(i % 6) * 90}ms`);
});

if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                io.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });

    revealTargets.forEach((el) => io.observe(el));
} else {
    revealTargets.forEach((el) => el.classList.add('is-visible'));
}
