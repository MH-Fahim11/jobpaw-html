const projects = [
    {
        title: "Stat dept sur professionnels",
        img: "../images/34FinalPhotos/IMG-20240409-WA0000.jpg",
        path: "professionals/voir-statistiques-opportunites.php",
        icon: "../images/5x/1.jpg"
    },
    {
        title: "Stat nat sur professionnels",
        img: "../images/34FinalPhotos/IMG-20240408-WA0005.jpg",
        path: "professionals/universities.php",
        icon: "../images/5x/2.jpg"
    },
    {
        title: "Stat sur emplois",
        img: "../images/34FinalPhotos/IMG-20240408-WA0004.jpg",
        path: "/professionals/cv-paw.html",
        icon: "../images/5x/5.jpg"
    },
    {
        title: "Stat sur salaires",
        img: "../images/34FinalPhotos/IMG-20240320-WA0054.jpg",
        path: "professionals/find-job.html",
        icon: "../images/5x/7.jpg"
    },
    {
        title: "Stat sur entreprises",
        img: "../images/34FinalPhotos/IMG-20240320-WA0052.jpg",
        path: "/professionnels/choose-school-or-universiry",
        icon: "../images/5x/8.jpg"
    },
    {
        title: "Stat sur budget et projets",
        img: "../images/34FinalPhotos/IMG-20240320-WA0039.jpg",
        path: "/professionals/seminer.html",
        icon: "../images/5x/9.jpg"
    }
];

const container = document.getElementById('projects-container');

projects.forEach((feature, index) => {
    const featureItem = document.createElement('div');
    featureItem.className = 'col-lg-4 col-md-6 wow fadeInUp';
    featureItem.style.animationDelay = `${100 * (index + 1)}ms`;

    featureItem.innerHTML = `
    <div class="feature-one__item text-center">
    <div class="feature-one__item__img">
        <img src="${feature.img}" alt="hiredots">
    </div>
    <div class="feature-one__item__content">
        <div class="feature-one__item__ball"></div>
        <div class="feature-one__item__icon"><img width="100" height="100" class=" rounded-circle" src="${feature.icon}" alt="icon"/></div>
        <h3 class="feature-one__item__title">${feature.title}</h3>
        <p class="feature-one__item__text">.</p>
        <a href="${feature.path}" class="hiredots-btn"><span>${feature.title}</span></a>
    </div>
</div>
    `;

    container.appendChild(featureItem);
});



