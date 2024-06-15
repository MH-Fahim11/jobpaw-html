const projects = [
    {
        title: "Adapter les formations au marché",
        img: "../assets/images/backgrounds/12.jpg",
        path: "/",
        icon: "../assets/images/icons/1.jpg"
    },
    {
        title: "Promouvoir son université ou son école",
        img: "../assets/images/backgrounds/10.jpg",
        path: "",
        icon: "../assets/images/icons/2.jpg"
    },
    {
        title: "Stimuler recherche et innovation",
        img: "../assets/images/backgrounds/11.jpg",
        path: "",
        icon: "../assets/images/icons/5.jpg"
    },
    {
        title: "Valoriser les diplomés",
        img: "../assets/images/backgrounds/4.jpg",
        path: "",
        icon: "../assets/images/icons/7.jpg"
    },
    {
        title: "Partager les travaux de recherche",
        img: "../assets/images/backgrounds/3.jpg",
        path: "",
        icon: "../assets/images/icons/8.jpg"
    },
    {
        title: "Opportunités d’affaires",
        img: "../assets/images/backgrounds/9.jpg",
        path: "",
        icon: "../assets/images/icons/9.jpg"
    }
];

const container = document.getElementById('universities-container');

projects.forEach((feature, index) => {
    const featureItem = document.createElement('div');
    featureItem.className = 'col-lg-4 col-md-6 wow fadeInUp';
    featureItem.style.animationDelay = `${100 * (index + 1)}ms`;

    featureItem.innerHTML = `
    <div class="feature-one__item text-center">
    <div class="feature-one__item__img">
        <img src="${feature.img}" alt="JobPaw">
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
