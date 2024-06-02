const projects = [
    {
        title: "Voir statistiques opportunités",
        img: "../images/34FinalPhotos/IMG-20240409-WA0000.jpg",
        path: "/professionals/voir-statistiques-opportunites.php",
        icon: "../images/5x/1.jpg"
    },
    {
        title: "Choisir université ou école",
        img: "../images/34FinalPhotos/IMG-20240408-WA0005.jpg",
        path: "/professionals/universities.php",
        icon: "../images/5x/2.jpg"
    },
    {
        title: "Créer un CVPaw",
        img: "../images/34FinalPhotos/IMG-20240408-WA0004.jpg",
        path: "/professionals/cv-paw.php",
        icon: "../images/5x/5.jpg"
    },
    {
        title: "Trouver un emploi",
        img: "../images/34FinalPhotos/IMG-20240320-WA0054.jpg",
        path: "/professionals/find-job.php",
        icon: "../images/5x/7.jpg"
    },
    {
        title: "Avoir un coaching",
        img: "../images/34FinalPhotos/IMG-20240320-WA0052.jpg",
        path: "/professionals/avoir-un-coaching.php",
        icon: "../images/5x/8.jpg"
    },
    {
        title: "Trouver formation continue",
        img: "../images/34FinalPhotos/IMG-20240320-WA0039.jpg",
        path: "/professionals/seminer.php",
        icon: "../images/5x/9.jpg"
    },
    {
        title: "Monter son entreprise",
        img: "../images/34FinalPhotos/IMG-20240320-WA0036.jpg",
        path: "/professionals/choose-school-or-universiry.php",
        icon: "../images/5x/10.jpg"
    },
    {
        title: "Trouver bourse d’étude",
        img: "../images/34FinalPhotos/IMG-20240320-WA0027.jpg",
        path: "/professionals/choose-school-or-universiry",
        icon: "../images/5x/11.jpg"
    },
    {
        title: "Consulter travaux recherche",
        img: "../images/34FinalPhotos/IMG-20240320-WA0015.jpg",
        path: "/professionals/consult-research-work.php",
        icon: "../images/5x/12.jpg"
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



