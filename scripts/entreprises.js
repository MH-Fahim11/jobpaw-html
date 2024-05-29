const projects = [
    {
        title: "Publicité via Bannière web",
        img: "../images/34FinalPhotos/IMG-20240409-WA0000.jpg",
        path: "#",
        icon: "../images/5x/1.jpg"
    },
    {
        title: "Publicité via Blast e-mail",
        img: "../images/34FinalPhotos/IMG-20240408-WA0005.jpg",
        path: "/entreprises/universities.html",
        icon: "../images/5x/2.jpg"
    },
    {
        title: "Publier un séminaire",
        img: "../images/34FinalPhotos/IMG-20240408-WA0004.jpg",
        path: "#",
        icon: "../images/5x/5.jpg"
    },
    {
        title: "Publier un appel d’offres",
        img: "../images/34FinalPhotos/IMG-20240320-WA0054.jpg",
        path: "#",
        icon: "../images/5x/7.jpg"
    },
    {
        title: "Publier une offre d’emploi",
        img: "../images/34FinalPhotos/IMG-20240320-WA0052.jpg",
        path: "#",
        icon: "../images/5x/8.jpg"
    },
    {
        title: "Recruter via Base de CV",
        img: "../images/34FinalPhotos/IMG-20240320-WA0039.jpg",
        path: "#",
        icon: "../images/5x/9.jpg"
    },
    {
        title: "Recruter via Head Hunter",
        img: "../images/34FinalPhotos/IMG-20240320-WA0036.jpg",
        path: "#",
        icon: "../images/5x/10.jpg"
    },
    {
        title: "Trouver un appel d’offres",
        img: "../images/34FinalPhotos/IMG-20240320-WA0027.jpg",
        path: "#",
        icon: "../images/5x/11.jpg"
    },
    {
        title: "Trouver formation continue",
        img: "../images/34FinalPhotos/IMG-20240320-WA0015.jpg",
        path: "#",
        icon: "../images/5x/12.jpg"
    },
    {
        title: "Renforcer son entreprise",
        img: "../images/34FinalPhotos/IMG-20240320-WA0052.jpg",
        path: "#",
        icon: "../images/5x/11.jpg"
    },
    {
        title: "Profiter mieux de R&D",
        img: "../images/34FinalPhotos/IMG-20240320-WA0015.jpg",
        path: "#",
        icon: "../images/5x/5.jpg"
    },
    {
        title: "Bénéficier projets du Budget",
        img: "../images/34FinalPhotos/IMG-20240320-WA0015.jpg",
        path: "#",
        icon: "../images/5x/9.jpg"
    },
];

const entreprisesContainer = document.getElementById('entreprises-container');

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

    entreprisesContainer.appendChild(featureItem);
});
