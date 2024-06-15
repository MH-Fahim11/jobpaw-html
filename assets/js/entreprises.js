const projects = [
    {
        title: "Publicité via Bannière web",
        img: "../assets/images/backgrounds/11.jpg",
        path: "#",
        icon: "../assets/images/icons/1.jpg"
    },
    {
        title: "Publicité via Blast e-mail",
        img: "../assets/images/backgrounds/10.jpg",
        path: "/entreprises/universities.php",
        icon: "../assets/images/icons/2.jpg"
    },
    {
        title: "Publier un séminaire",
        img: "../assets/images/backgrounds/9.jpg",
        path: "/entreprises/cv-paw.php",
        icon: "../assets/images/icons/5.jpg"
    },
    {
        title: "Publier un appel d’offres",
        img: "../assets/images/backgrounds/8.jpg",
        path: "#",
        icon: "../assets/images/icons/7.jpg"
    },
    {
        title: "Publier une offre d’emploi",
        img: "../assets/images/backgrounds/7.jpg",
        path: "#",
        icon: "../assets/images/icons/8.jpg"
    },
    {
        title: "Recruter via Base de CV",
        img: "../assets/images/backgrounds/6.jpg",
        path: "trouver-formation-continue.php",
        icon: "../assets/images/icons/9.jpg"
    },
    {
        title: "Recruter via Head Hunter",
        img: "../assets/images/backgrounds/5.jpg",
        path: "#",
        icon: "../assets/images/icons/10.jpg"
    },
    {
        title: "Trouver un appel d’offres",
        img: "../assets/images/backgrounds/4.jpg",
        path: "#",
        icon: "../assets/images/icons/11.jpg"
    },
    {
        title: "Trouver formation continue",
        img: "../assets/images/backgrounds/3.jpg",
        path: "#",
        icon: "../assets/images/icons/12.jpg"
    },
    {
        title: "Renforcer son entreprise",
        img: "../assets/images/backgrounds/2.jpg",
        path: "#",
        icon: "../assets/images/icons/11.jpg"
    },
    {
        title: "Profiter mieux de R&D",
        img: "../assets/images/backgrounds/1.jpg",
        path: "#",
        icon: "../assets/images/icons/5.jpg"
    },
    {
        title: "Bénéficier projets du Budget",
        img: "../assets/images/backgrounds/12.jpg",
        path: "#",
        icon: "../assets/images/icons/9.jpg"
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
